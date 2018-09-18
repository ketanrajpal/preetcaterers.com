
<?php if($page=="index") { ?>

<footer id="footer1">
  <ul class="clear">
    <li class="left">2014 &copy; Preet Caterers. All rights reserved.</li>
    <li class="right">Site by: <a href="http://www.krpl.in">krpl.in</a></li>
  </ul>
</footer>

<?php }else{ ?>


<footer id="footer2">
  <ul class="clear">
    <li class="left">2014 &copy; Preet Caterers. All rights reserved.</li>
    <li class="right">Site by: <a href="http://www.krpl.in">krpl.in</a></li>
  </ul>
</footer>

<?php } ?>

<script>$.backstretch(["../img/<?php echo $page; ?>-1.jpg","../img/<?php echo $page; ?>-2.jpg","../img/<?php echo $page; ?>-3.jpg"], {duration: 5000, fade: 750});</script>