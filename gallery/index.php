<?php
ob_start();
$page="gallery";
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<script src="../js/jquery.slicknav.min.js"></script>
<section id="container">
  <h1>Gallery</h1>
  
  
  <ul id="gallery" class="clear">
  <?php
  	for($i=1;$i<=17;$i++)
	{
  ?>
  
  <li><a class="fancybox" rel="gallery1" href="../img/gallery/<?php echo $i; ?>.jpg"><img src="../img/gallery/<?php echo $i; ?>_thumb.jpg"></a></li>
  
  <?php
	}
  ?>
  </ul>
  
  <script>
   $(document).ready(function() {$(".fancybox").fancybox();});
  </script>
 
  
  
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
