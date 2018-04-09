<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title></title>
</head>
<body>
	<?php
	 session_start();
	 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 10) {
     echo "Welcome to the admin's area,";
}
 else {
	header('Location:http://localhost/new/login.php');
}	 
   if(isset($_POST['logout'])){
     $message= "The insert function is called.";
	 //echo $message;
	 $_SESSION['loggedin'] = 1;
	header('Location:http://localhost/new/login.php');
	  }
?>
<div id="container">
		<div id="header">
        	<h1>Admin<span class="off">Panel</span></h1>
			 <form action="" method="post">
			 <h2>
			<input  class = "menuitem" type="submit" name="logout" value="Log out">
			</h2>
			 </form> 
        </div>   
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Почетна</a></li>
                <li class="menuitem"><a href="oddeli.php">Оддели</a></li>
                <li class="menuitem"><a href="sportovi.php">Спортови</a></li>
                <li class="menuitem"><a href="kalendar.php">Календар</a></li>
                <li class="menuitem"><a href="contact.php">Контакт</a></li>
            </ul>
        </div>  
        <div id="leftmenu">
        <div id="leftmenu_top"></div>
				<div id="leftmenu_main">             
                <ul>
                    <li><a href="AddSport.php">Додади спорт</a></li>
                    <li><a href="AddUser.php">Додади корисник</a></li>
                    <li><a href="AddEmployee.php">Додади вработен</a></li>
                    <li><a href="AddTermin.php">Додади термин</a></li>
                    <li><a href="AddOddel.php">Додади оддел</a></li>
                    <li><a href="AddTrener.php">Додади тренер</a></li>
                    <li><a href="DeleteSport.php">Избриши спорт</a></li>
                    <li><a href="DeleteUser.php">Избриши корисник</a></li>
                    <li><a href="DeleteEmployee.php">Избриши вработен</a></li>
					<li><a href="DeleteTermin.php">Избриши термин</a></li>
					<li><a href="DeleteOddel.php">Избриши оддел</a></li>
					<li><a href="DeleteTrener.php">Избриши тренер</a></li>
                </ul>
</div>  
              <div id="leftmenu_bottom"></div>
        </div>
    <?php   
	echo '<div id="content">
        <div id="content_top"></div>
        <div id="content_main">
			<h2>Бришење термин</h2>
<form action="" method="post">
<table>
<tr>
        <th>ИД</th>
        <th>Капацитет</th>
        <th>Време</th>
        <th>Ден</th>
        <th>Оддел</th>
		<th>Избриши</th>
    </tr>';
	require_once('init.php');
$sql = "select o.ime,t.* from termin t,oddel o where t.id_o=o.id_o;";
$rezultat = db_get($sql);
foreach($rezultat as $o){
	echo "<tr>";
	echo "<th>".$o['id_t']." </th>";
	echo "<th>".$o['kapacitet']."</th>";
	echo "<th>".$o['detali']."</th>";
	if($o['den']==1){
	echo "<th>Денешен</th>";
	}
	else if($o['den']==2){
		echo "<th>Утрешен</th>";
	}
	echo "<th>".$o['ime']."</th>";
	echo '<th><button type="submit" name="del" value="'.$o['id_t'].'">Избриши</button></th>';
	echo "</tr>";
}
echo '</table>';
echo '</br> </br>';
echo '</form>';
echo	' </div>';
echo '</div>';
	  if(isset($_POST['del'])){
     $message= "The insert function is called.";
	 //echo $message;
	 $idt = $_POST['del'];
	 //echo $idt;
	 $sql2 = "delete from termin where id_t=  ".$idt.";";
	db_write($sql2);
	echo'<meta http-equiv="refresh" content="5">';
	//echo '<script>$window.location.reload();</script>';
	header('Location:http://localhost/new/DeleteTermin.php');	
    }
	?>
</body>
</html>
