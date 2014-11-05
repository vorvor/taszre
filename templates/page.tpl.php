<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="navigation">

  <nav id="main-menu" role="navigation" tabindex="-1">
    <h2 class="element-invisible">Főmenü</h2>
    <ul class="links inline clearfix">
      <li class="menu-70 magunkr-l first"><a href="/node/2">Kik vagyunk</a></li>
      <li class="menu-853 h-rek"><a href="/hirek" title="">Mit csinálunk</a></li>
      <li class="menu-71 hiv-aids"><a href="/hiv-aids">Csatlakozz</a></li>
      <li class="menu-73 betegjog"><a href="/betegjog">Támogass</a></li>
      <li class="menu-72 inform-ci-szabads-g active"><a href="/informacioszabadsag" class="active-trail active">TASZ film</a></li>
    </ul>
    <div id="block-search-form" class="block block-search contextual-links-region even" role="search">

  
    <form class="google-cse" action="/informacioszabadsag" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Keresés űrlap</h2>
      <div class="form-item form-type-textfield form-item-search-block-form">
        <label class="element-invisible" for="edit-search-block-form--2">Keresés </label>
        <input title="A keresendő kifejezések megadása." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text" style="background: url(https://www.google.com/cse/intl/hu/images/google_custom_search_watermark.gif) 0% 50% no-repeat rgb(255, 255, 255);">
      </div>
      <div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="OK" class="form-submit"></div><input type="hidden" name="form_build_id" value="form-rBm3iJWPs5Mqh7eAkyITGG39WHq214El6pTDokayLXQ">
        <input type="hidden" name="form_token" value="OxQy8qWOcn-knfxPNE-TeMAipyc7HduoZ9N_0d1hrM8">
        <input type="hidden" name="form_id" value="search_block_form">
      </div>
    </div>
  </form>
  </div>
  </nav>
  

  </div>
    <?php /*
    <div id="grid">
      <div class="g30 b"></div>
      <?php
        for ($c = 0; $c < 12; $c++) {
          print '<div class="g15 b"></div>';
          print '<div class="g-fluid b"></div>';
          print '<div class="g15 b"></div>';
        }
      ?>
      <div class="g30 b"></div>
    </div> */ ?>
<div id="page">

  

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="/sites/all/themes/tasz_2014/images/logo.png" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php //print render($page['header']); ?>
    
    <div id="header-banner">
      <img src="/sites/all/themes/tasz_2014/images/header_banner.png">
    </div>

  </header>
  
  


  <div id="main">
    

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php //print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
