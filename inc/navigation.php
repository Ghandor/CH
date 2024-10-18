
<input type='checkbox' id='responsive-menu' onclick='updatemenu()'>
<label></label>
<ul>
  
    <li><a id="home" href="#"><i class="fas fa-home"></i> Home</a></li>
    
  <li><a href='./webtrees/index.php'  target="_blank"><i class="fas fa-seedling"></i> Webtrees</a></li>
  
    <li><a  id="bioenergetik" class='dropdown-arrow' href="#"><i class="fas fa-vihara"></i> Bioenergetik</a>
    <ul class='sub-menus'>
      <li><a  id="koerpertypen" href="#"><i class="fas fa-people-arrows"></i> Körpertypen</a>
      <li class="einruecken"><a  id="oraler_typus" href="#">- Oraler Typus</a></li>
      <li class="einruecken"><a  id="psychopatischer_typus" href="#">- Psychopatischer Typus</a></li>
      <li class="einruecken"><a  id="schizoider_typus" href="#">- Schizoider Typus</a></li>
      <li class="einruecken"><a  id="masochistischer_typus" href="#">- Masochistischer Typus</a></li>
      <li class="einruecken"><a  id="rigider_typus" href="#">- Rigider Typus</a></li>
      <li class="einruecken"><a  id="test1" href="#">Finden Sie Ihren Körpertypus</a></li>  
    </ul>
  </li>
  <li><a id="about" href="#"><i class="fas fa-users-cog"></i> About</a></li>
  <li><a class='dropdown-arrow' href='http://'>Services</a>
    <ul class='sub-menus'>
      <li><a href='http://'>Services Sub Menu 1</a></li>
      <li><a href='http://'>Services Sub Menu 2</a></li>
      <li><a href='http://'>Services Sub Menu 3</a></li>
    </ul>
  </li>
  <li><a href='http://'>Contact Us</a></li>
</ul>


<script language="javascript" type="text/javascript">
	
	$(document).ready(function(){
			// jQuery-Code .... nach dem das Dokument geladen wrude und alle Elemente bekannt sind
			console.log('Dokument geladen Elemente reagieren auf $("xxx").click.....');
			// Beim Starten sollte eine Seite geladen werden, das passiert hier noch nicht.
			/* ----------------------------------------------- Beim Start : Home - Seite laden*/
		$('main').load('seiten/home.php');
			// ------------------------------------------------------------------------------
            <?php require('home.php') ?>	
            <?php require('about.php') ?>
            <?php require('bioenergetik.php') ?>
            <?php require('koerpertypen.php') ?>
            <?php require('oraler_typus.php') ?>
            <?php require('psychopatischer_typus.php') ?>
            <?php require('schizoider_typus.php') ?>
            <?php require('masochistischer_typus.php') ?>
            <?php require('rigider_typus.php') ?>
            <?php require('test1.php') ?>
            
		});
</script> 

      
  