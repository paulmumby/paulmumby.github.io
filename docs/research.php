<?php
include_once( '../config.php' );
include( ROOT_DIR . '/includes/inc_icons.php' );
include( ROOT_DIR . '/includes/inc_figures.php' );
$title = "Research";
$content = ROOT_DIR . '/docs/research/content/landing.php';
?>
<!doctype html>
<html class="lg:overflow-auto bg-white">
<?php include(ROOT_DIR.'/includes/inc_head.php'); ?>
<body class="font-sans text-base font-extralight tracking-wide text-black flex flex-col min-h-screen pt-20">
<?php include(ROOT_DIR.'/includes/inc_navigation.php'); ?>
<main class=" flex-grow">
  <?php include($content); ?>
</main>
<?php include(ROOT_DIR.'/includes/inc_footer.php'); ?>
</body>
</html>