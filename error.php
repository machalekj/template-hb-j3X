<?php
// TODO: Error page

defined('_JEXEC') or die;
if (!isset($this->error)) {
  $this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
  $this->debug = false;
}
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
  <head>
    <title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/error.css" type="text/css" />
    <link rel="stylesheet" 
          href="<?php echo $this->baseurl; ?>/templates/hb/css/style.css" type="text/css" />

    <!--[if IE ]>
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/psb/css/ie.css" type="text/css" />
    <![endif] -->
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/hb/js/hb.js"></script>

  </head>
  <body class="normal">
    <div id="wrap">
      <div id="main" class="normal">
        <div id="content">

          <div id="page_header">
            <div id="inside_page_header">
              <div id="site_name">
                <span>Hnutí Brontosaurus</span>
              </div>
              <div id="header_navigation">
                <div class="moduletable">


                  <div class="custom"  >
                    <div><a href="uzivatel">Přihlášení</a> &nbsp;&nbsp;&nbsp; <a href="english"><img src="images/vlajky/gb.png" alt="English" title="English" /> English</a> &nbsp;&nbsp;&nbsp; <a href="deutsh"><img src="images/vlajky/de.png" alt="Deutsh" title="Deutsh" /> Deutsh</a>
                    </div></div>
                </div>

              </div>
              <div id="search">
                <div class="moduletable">
                  <form action="index.php" method="post">
                    <div class="search">
                      <label for="mod-search-searchword"> </label><input name="searchword" id="mod-search-searchword" maxlength="20"  class="inputbox" type="text" size="10" value="najít na webu"  onblur="if (this.value=='') this.value='najít na webu';" onfocus="if (this.value=='najít na webu') this.value='';" /><input type="submit" value="Hledat" class="button" onclick="this.form.searchword.focus();"/>	<input type="hidden" name="task" value="search" />
                      <input type="hidden" name="option" value="com_search" />
                      <input type="hidden" name="Itemid" value="108" />
                    </div>
                  </form>
                </div>

              </div>
              <div id="header_bck"></div>
            </div>
          </div>


          <div id="breadcumbs">
            <div id="inside_breadcumbs">
              <div class="moduletable">

                <div class="breadcrumbs">
                  <a href="" class="pathway">Úvod</a> &gt; <span>Chyba</span></div>
              </div>

            </div>
          </div>

          <div class="main-content">
            <div class="round_decor_top"></div>
            <div class="left-column">
              <div id="inside_left_col">
                <div id="left_panel_navigation">
                  <div class="moduletable_menu">

                    <ul class="menu">
                      <li class="item-109 parent"><a href="index.php" >Úvodní strana</a></li></ul>
                  </div>
                  <div class="moduletable nase_programy">
                    <h3>Naše programy</h3>

                    <ul class="menu nase-programy">
                      <li class="item-102"><a href="akce-pamatky" >Akce památky</a></li><li class="item-103"><a href="akce-priroda" >Akce příroda</a></li><li class="item-104"><a href="brdo" >Brďo</a></li><li class="item-105"><a href="ekostan" >Ekostan</a></li><li class="item-106"><a href="prazdniny-s-brontosaurem" >Prázdniny s Brontosaurem</a></li><li class="item-293"><a href="zahranici" >Zahraniči</a></li></ul>
                  </div>

                </div>
                <div id="left_panel_promo">
                  &nbsp;<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                </div>
              </div>
            </div>
            <div class="right-column">
              <div 
                class="right-column-left-full"
                >
                <div id="inside_middle_col">

                  <div id="system-message-container">
                  </div>
                  <div class="item-page">

                    <h1>404 - Článek nenalezen</h1>

                    <p><strong>Tuto stránku nemůžete navštívit, protože:</strong></p>
                    <ol>
                      <li><strong>zastaralá záložka/oblíbené</strong></li>
                      <li>vyhledávač, který má <strong>zastaralý index tohoto webu</strong></li>
                      <li><strong>překlep v adrese</strong></li>
                      <li>na tuto stránku <strong>nemáte přístup</strong></li>
                      <li>Požadovaný obsah nebyl nalezen.</li>
                      <li>Při zpracování požadavku došlo k chybě.</li>
                    </ol>
                    <p><strong>Vyzkoušejte prosím některou z těchto stránek:</strong></p>

                    <ul>
                      <li><a href="index.php" title="Přejít na domovskou stránku">Domovská stránka</a></li>
                      <li><a href="index.php?option=com_search" title="Prohledat tento web">Prohledat tento web</a></li>

                    </ul>

                    <p>Pokud problémy přetrvávají, obraťte se na správce tohoto webu a nahlaste mu níže uvedenou chybu..</p>

                    <h3>Článek nenalezen</h3>


                  </div>


                </div>
              </div>

              <div class="right-column-right-empty"> </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="round_decor_bottom"></div>
      <div id="inside_footer">
        <div class="moduletable">


          <div class="custom"  >
            <div class="footer-left">©1974-2012 Hnutí Brontosaurs <br />Hvězdová 10, 602&nbsp;00 Brno tel. +420&nbsp;544&nbsp;215&nbsp;585, email: 
              <script type='text/javascript'>
                <!--
                var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                var path = 'hr' + 'ef' + '=';
                var addy9065 = 'hn&#117;t&#105;' + '&#64;';
                addy9065 = addy9065 + 'br&#111;nt&#111;s&#97;&#117;r&#117;s' + '&#46;' + 'cz';
                document.write('<a ' + path + '\'' + prefix + ':' + addy9065 + '\'>');
                document.write(addy9065);
                document.write('<\/a>');
                //-->\n </script><script type='text/javascript'>
                <!--
                document.write('<span style=\'display: none;\'>');
                //-->
              </script>Tato e-mailová adresa je chráněna před spamboty. Pro její zobrazení musíte mít povolen Javascript.
              <script type='text/javascript'>
                <!--
                document.write('</');
                document.write('span>');
                //-->
              </script></div>
            <div class="footer-right"><a href="mapa-stranek">Mapa stránek</a> | <a href="prohlaseni-o-pristupnosti">Prohlášení o&nbsp;přístupnosti</a>
            </div></div>
        </div>

      </div>
    </div>
  </body>
</html>
