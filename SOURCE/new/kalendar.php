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
		<form action="" method="post">

 <?php 
 
 echo '<div id="content">';
require_once('init.php');

$sql = "SELECT * FROM oddel";
$rezultat = db_get($sql);

?>
  <?php
  echo '<div>';
   echo '<h1>Денешен ден</h1>';
   
	foreach($rezultat AS $o) {
		?>
    
	<h3><?php echo $o['ime']; ?></h3>
	<?php   
			$sql1 = "select * from termin t 
					where t.id_o=" .$o['id_o'];
			$rezultat1 = db_get($sql1);
			echo '<table>';
			echo '<tr>';
			echo '<th>Час</th>
					<th>Закажи</th>';
					echo '</tr>';
					
			foreach($rezultat1 AS $o1) {
				if($o1['den']==1){
				?>
				<tr>
			<th><?php echo $o1['detali']; ?></th>
			<?php $pom= $o1['id_t'];  
		
			
			if($o1['kapacitet']==0){
				echo '<th>';
					 echo '<button type="submit" disabled="disabled"  name="del"  value="'.$o1['id_t'].'">Закажи</button>';
					 echo '</th>';
				 }
				 else{
					 echo '<th>';
			echo '<button type="submit"  name="del"  value="'.$o1['id_t'].'">Закажи</button>';
			echo '</th>';
				 }
				 
			echo '</tr>';
			
				}
				
				
			
	} 
	echo '</table>';
									
	}
	
	echo '</div>';
	
	
	  echo '<div>';
	  echo '</br>  </br>';
	  echo '<h1>Утрешен ден</h1>';
	
	foreach($rezultat AS $o) {
		?>
    
	<h3><?php echo $o['ime']; ?></h3>
	<?php   
			$sql1 = "select * from termin t 
					where t.id_o=" .$o['id_o'];
			$rezultat1 = db_get($sql1);
			echo '<table>';
			echo '<tr>';
			echo '<th>Час</th>
					<th>Закажи</th>';
					echo '</tr>';
					
			foreach($rezultat1 AS $o1) {
				if($o1['den']==2){
				
				echo '<tr>';
			echo '<th>'; echo $o1['detali']; echo'</th>';
			 $pom= $o1['id_t'];  
			if($o1['kapacitet']==0){
				echo '<th><button type="submit" disabled="disabled"  name="del"  value="'.$o1['id_t'].'">Закажи</button></th>';
				 }
				 else{
					 echo '<th>';
			echo '<button type="submit"  name="del"  value="'.$o1['id_t'].'">Закажи</button>';
			echo '</th>';
				 }	 
			echo '</tr>';
			
				}
				
				
			
	} 
	echo '</table>';
	}
	echo '</div>';
	
	
	
	echo '</div>';
	
	echo '</form>';
	
	
	
	if(isset($_POST['del'])){
	//echo asdsadsadasd;
     $message= "The insert function is called.";
	 //echo $message;
	 $idt = $_POST['del'];
	 $sql4="select kapacitet from termin where id_t=$idt;";
	 $rezultat10=db_get($sql4);
	 $rez=$rezultat10[0]['kapacitet'];
	 $rez=$rez-1;
	
	 	
	 $sql2 = "UPDATE public.termin SET kapacitet=$rez WHERE id_t=$idt;";
	db_write($sql2);
	echo '<script type="text/javascript">
				location.replace("validation.php");
			  </script>';
	//echo'<meta http-equiv="refresh" content="5">';
	//header('Location:http://localhost/new/validation.php');

		
    }
	
	?>



</body>


