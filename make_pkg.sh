#!/bin/bash
find . -name '*.php' -exec dos2unix {} \;
find . -name '*.xml' -exec dos2unix {} \;

if [ ! -d ./dist ]; then mkdir dist; fi;

version=$(grep '<version>' templateDetails.xml | sed -e 's/<[a-z\/]*>//g' | sed -e 's/ *//g')
rm dist/hb_template*.zip
zip -r hb_template-${version}-j3X.zip component.php error.php html index.html js template_thumbnail.png css favicon.ico images index.php template_preview.png templateDetails.xml language

mv hb_template-${version}-j3X.zip dist/
