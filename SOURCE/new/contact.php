<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="images/style.css" />
<title>Sportski centar</title>
</head>

<body>
<div id="container">
		<div id="mainpic">
        	<h1>Спортски<span class="lightblue">Центар</span></h1>
            <h2>Дојдете,спортувајте</h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.html">Почетна</a></li>
            	<li class="menuitem"><a href="oddeli.php">Оддели</a></li>
                <li class="menuitem"><a href="sportovi.php">Спортови</a></li>
                <li class="menuitem"><a href="kalendar.php">Календар</a></li>
				<li class="menuitem"><a href="contact.php">Контакт</a></li>
			  <li class="menuitem"><a href="login.php">Најави се</a></li>
            </ul>
        </div>
<div id="content">
 <?php
require_once('init.php');

$sql = "SELECT * FROM sportskicentar";
$rezultat = db_get($sql);
?>
  <?php
	foreach($rezultat AS $o) {
		?>
    	<h3><?php echo $o['email']; ?></h3>
	<h3><?php echo $o['telefonski_broj']; ?></h3>
	<h3><?php echo $o['lokacija']; ?></h3>
	
  <?php
	}
?>
</div>
</body
</html>