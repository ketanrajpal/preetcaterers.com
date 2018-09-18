<audio loop autoplay="true">
  <source src="../music/bg.ogg" type="audio/ogg">
  <source src="../music/bg.mp3" type="audio/mpeg">
</audio>
<header>
  <div class="clear">
    <article id="logo"><img src="../img/logo.png"></article>
    <nav id="menu">
      <ul class="clear">
        <li><a href="../" <?php if($page=="index"){ echo "class='current'"; } ?>>Home</a></li>
        <li><a href="../about" <?php if($page=="about"){ echo "class='current'"; } ?>>About</a></li>
        <li><a href="../menu" <?php if($page=="menu"){ echo "class='current'"; } ?>>Menu</a></li>
        <li><a href="../services" <?php if($page=="services"){ echo "class='current'"; } ?>>Services</a></li>
        <li><a href="../gallery" <?php if($page=="gallery"){ echo "class='current'"; } ?>>Gallery</a></li>
        <li><a href="../reservations" <?php if($page=="reservations"){ echo "class='current'"; } ?>>Reservations</a></li>
      </ul>
    </nav>
  </div>
</header>
<script>
   $(".trigger").hover(function(){$(this).children(".submenu").stop().slideToggle("slow");});
   $(function(){$('nav').slicknav();});
  </script>