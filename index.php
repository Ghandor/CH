<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Pragma" content="cache" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="description" content="Strassmann: Informationen über Informatik, Kommunikation und Gesellschaft" />
<meta name="keywords" content="Informatik, Kommunikation, Schulungen, Flexbox, Grid, Installation, Betriebssystem, Burkhardt Kiegeland, Osho, Selbsterfahrung, Meditation, Roland Bäurle, Traumtyp, Typentrauma, vom Typentrauma zum Traumtypen, Taxomonie, Taxomoniestufen, Ostschweiz, Lehrlingsausbildung, Paul Strassmann, MariaDB, SQL, Toggenburg, Kochbuch, Märchen, Märchen aus dem Toggenburg, Bauernregeln, Körpersprache, fessenlde Präsentationen, Humoralpathologie, Heraklit, Fragmente des Heraklit, Lerntypen, Strassmann" />
<meta name="author" content="Paul Strassmann" />
<meta name="publisher" content="Paul Strassmann" />
<meta name="copyright" content="Paul Strassmann" />
<meta name="audience" content="Alle" />
<meta name="page-type" content="Anleitung" />
<meta name="page-topic" content="Gesellschaft" />
<meta http-equiv="Reply-to" content="strassmann@hotmail.ch" />
<meta name="revisit-after" content="30 days" />
<meta name="DC.title" content="Rorschacherberg" />
<meta name="geo.region" content="CH-AR" />
<meta name="geo.placename" content="Rorschacherberg" />
<meta name="geo.position" content="47.44674;9.529051" />
<meta name="ICBM" content="47.44674, 9.529051" />
<title>Paul Strassmann - Informatik - Kommunikation - Gesellschaft</title>

<link rel="shortcut icon" type="images/x-icon" href="./img/favicon.ico">
<link href="resources/css/materialize.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" media="all">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="./img/favicon.ico">

<!-- Hier werden Font Awesome Icons eingebunden-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<!--JQUERRY - Bibliothek laden für dynamische Inhalte--> 
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/mustache.min.js"></script>

<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9HP5NK9FKM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-9HP5NK9FKM');
    </script>    
    
    
</head>

<body>
<a class="skip-link screen-reader-text" href="#content">Zum Inhalt springen</a>
<div class="outer-wrap">
  <header class="pagehead">
    <div class="sidebar-switcher"> Sidebar:
      <button class="sidebar-left-toggle"><i class="fa fa-align-left"></i><span class="screen-reader-text">Sidebar nach links</span></button>
      <button href="#" class="sidebar-right-toggle"><i class="fa fa-align-right"></i><span class="screen-reader-text">Sidebar nach rechts</span></button>
      <button href="#" class="sidebar-hide-toggle"><i class="fa fa-arrow-circle-right"></i><span class="screen-reader-text">Sidebar aus- und einschalten</span></button>
    </div>
    <!-- .sidebar-switcher -->
    
    <div class="site-branding">
      <div class="site-title"> <img src="img/sign.png" alt="Paul Strassmann"> </div>
    </div>
    <!-- .site-title -->
    
    <nav id="menu">
      <?php require './inc/navigation.php'; ?>
    </nav>
  </header>
  <!-- .pagehead -->
  
  <div class="content">
    <main class="main-area" id="main"> </main>
    <aside class="sidebar">
      <?php require './seiten/intern/sidebar.php'; ?>
    </aside>
    <!-- .sidebar --> 
  </div>
  <!-- .content -->
  
  <footer class="footer-area">
    <?php require './seiten/intern/footer.php'; ?>
  </footer>
</div>
<!-- .outer-wrap --> 

<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/sidebar-switcher.js"></script>
</body>
</html>