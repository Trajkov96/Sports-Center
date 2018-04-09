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
            	<li class="menuitem"><a href="index.php">Почетна</a></li>
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

$sql = "SELECT * FROM oddel";
$rezultat = db_get($sql);

?>
  <?php
	foreach($rezultat AS $o) {
		?>
    
	<h2><?php echo $o['ime']; ?></h2>
	<?php
	
	$sql1 = "select * 
 from sportovi s
 where s.id_o=" .$o['id_o'];
$rezultat1 = db_get($sql1);
	foreach($rezultat1 AS $o1) {
		?>
    
	<p><?php echo $o1['sportovi']; ?></p>
	<?php
		
		$sql2 = "select ime from vraboteni v,
 (
 select * 
 from trener t
 where t.id_s =".$o1['id_s']. "
 ) rez where v.id_v=rez.id_v" ;
$rezultat2 = db_get($sql2);
	foreach($rezultat2 AS $o2) {
		?>
		<p>Име на тренер: </p>
	<p><?php echo $o2['ime']; ?></p>
	<?php
	
	}
	}
	}
  ?>
  
  
</div>
</body>