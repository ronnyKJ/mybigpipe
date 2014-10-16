<html>
<head>
<title>test</title>
</head>
<body>

<div id="header"></div>

<div id="content"></div>

<div id="footer"></div>

<?php ob_flush(); flush(); ?>

<?php sleep(1); $header = str_pad('header', 1024); ?>
<script>
document.getElementById("header").innerHTML = "<?php echo $header; ?>";
</script>
<?php ob_flush(); flush(); ?>

<?php sleep(1); $content = str_pad('content', 1024); ?>
<script>
document.getElementById("content").innerHTML = "<?php echo $content; ?>";
</script>
<?php ob_flush(); flush(); ?>

<?php sleep(1); $footer = str_pad('footer', 1024); ?>
<script>
document.getElementById("footer").innerHTML = "<?php echo $footer; ?>";
</script>
<?php ob_flush(); flush(); ?>

</body>
</html>