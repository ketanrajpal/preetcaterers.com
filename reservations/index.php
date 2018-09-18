<?php
ob_start();
$page="reservations";
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
<section id="container">
  <h1>Reservations</h1>
  
  <p>For reservations please call <strong>Ravi Saini</strong> on <b>+91 9810094659</b> or send an email at <a href="mailto:info@preetcaterer.com">info@preetcaterer.com</a> or
  Fill in the form given below. </p>
  
  <form id="contact-page" method="post" action="https://www.krpl.in/mailer/">
  
  <fieldset>
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">City</label>
   <input type="text" name="city" id="city" required>
  </fieldset>
  
  <fieldset>
   <label for="message">Message</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
 <input type="hidden" id="send_url" name="send_url" value="preetcaterer.com">
 <input type="hidden" id="redirect_url" name="redirect_url" value="http://www.preetcaterer.com">
 <input type="hidden" id="send_email" name="send_email" value="info@preetcaterer.com">
 <input type="hidden" id="send_name" name="send_name" value="Preet Caterer">
  <input type="submit" value="Submit">
  
 </form>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
