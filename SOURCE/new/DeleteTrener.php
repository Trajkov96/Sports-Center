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
        	
<h2>Бришење тренер</h2>
<form action="" method="post">
<?php
	require_once('init.php');
$sql = "select ime,prezime,v.id_v from vraboteni v,trener t where v.id_v = t.id_v;";
$rezultat = db_get($sql);
echo '<select name = "trener">';
foreach($rezultat as $o){
	echo '<option value="'.$o['id_v'].'">'.$o['ime'].' '.$o['prezime'].'</option>';
}
echo '</select> </br> </br>';
echo '<input type="submit" name="insert" value="Избриши">
</form>';

	require_once('init.php');
	  if(isset($_POST['insert'])){
     $message= "The insert function is called.";
	 //echo $message;
	 $idv = $_POST['trener'];
	 $sql2 = "delete from trener where id_v = ".$idv.";";
	 db_write($sql2);
	header('Location:http://localhost/new/DeleteTrener.php');
		
    }
	
	
	?>
	
			<br>
			
			
			
			
   </div>

   
   
</body>
</html>
