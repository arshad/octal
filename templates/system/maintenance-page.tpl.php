<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>">

  <?php print $page_top; ?>

  <header id="header" class="header" role="header">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php print $front_page; ?>" id="logo" class="navbar-brand">
            <?php print $site_name; ?>
          </a>
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
        </div><!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav>
  </header>

  <div id="main-wrapper">
    <div id="main" class="main container">
      <div class="row">
        <?php if ($sidebar_first): ?>
          <div class="col-md-3 sidebar">
            <?php print $sidebar_first; ?>
          </div>
        <?php endif ?>
        <div class="col-md-9">
          <?php print $content; ?>
        </div>
      </div>
    </div> <!-- /#main -->
  </div> <!-- /#main-wrapper -->

  <footer id="footer" class="footer" role="footer">
    <div class="container">
      <?php if ($copyright): ?>
        <small class="copyright pull-left"><?php print $copyright; ?></small>
      <?php endif; ?>
      <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
    </div>
  </footer>

  <?php print $page_bottom; ?>

  </body>
</html>