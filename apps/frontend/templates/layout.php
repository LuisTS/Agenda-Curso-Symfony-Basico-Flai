<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php if (has_slot('titulo')): ?>
    <title><?php include_slot('titulo') ?></title>
    <?php else: ?>
    <title>Mi libreta de Contactos</title>
    <?php endif; ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php include_partial( 'global/cabecera' ); ?>
    <?php echo $sf_content ?>
    <?php include_partial( 'global/pie' ); ?>
  </body>
</html>
