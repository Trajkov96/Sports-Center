<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title></title>

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
	 echo $message;
	 $_SESSION['loggedin'] == 1;
	header('Location:http://localhost/new/login.php');

	  }
    ?>

</head>

<body>
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
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
        	
<h1>Додавање тренер</h1>

<form action="" method="post">

<?php 

	require_once('init.php');

$sql = "select * from vraboteni where id_v not in (
select id_v from trener t
union select id_v from rakovoditelnaoddel ro
union select id_v from  owner o 
union select id_v from organizaciskimenadzer om) ;";

$rezultat = db_get($sql);
echo '<select name = "vraboten">';
foreach($rezultat as $o){
	echo '<option value="'.$o['id_v'].'">'.$o['ime'].' '.$o['prezime'].'</option>';
}
echo '</select> </br> </br>';

$sql2 = "select * from sportovi ;";

$rezultat1 = db_get($sql2);
echo '<select name = "sportovi">';
foreach($rezultat1 as $o1){
	echo '<option value="'.$o1['id_s'].'">'.$o1['sportovi'].'</option>';
}
echo '</select> </br> </br>';


echo '<input type="submit" name="insert" value="Внеси">
</form>';

    if(isset($_POST['insert'])){
     $message= "The insert function is called.";
	 $idv = $_POST['vraboten'];
	 $ids = $_POST['sportovi'];
	 $sql2 = "insert into trener(id_v,id_s)values(".$idv.",".$ids.")";
	 db_write($sql2);
	header('Location:http://localhost/new/AddTrener.php');
    }
	
    ?>
	
			<br>
			
			
			
			
   </div>

   
   
</body>
</html>
