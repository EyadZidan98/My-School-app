<?php
include('adm_se.php');
if(!isset($_SESSION['login_user'])){
header("location: adm_lofg.php"); // Redirecting To Home Page
}
?>

<!DOCTYBE html>

<html>

<head>

	<?php 

		$l = mysqli_connect("localhost", "root", "12345678");	
		mysqli_select_db($l, "proj");

	?>

		<title>Add Teacher</title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="styless12.css">
		<link rel="stylesheet" href="head1.css">
	<link rel="stylesheet" href="h2.css">

		<style>
 
 #A{border:2px solid gray; padding:15px 40px; font-size:16px; border-radius:15px;}
 
	</style>

</head>

<body style="background-color: #777271; background-size: 100%;">

<header class="header-of-page">
    <div class="header-content black-bg">
        <a href="" class="logo">
            <i class="iconfont icon_logo"></i>
            &nbsp;School
        </a>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="abcense.php"><span>Abcense</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="add_st.php"><span>Add Student</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="delete_teat.php"><span>Delete teacher</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="delete_st.php"><span>Delete Student</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="add_course.php"><span>Add course</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="notes.php"><span>Notes</span></a>
			</div>
		</div>
		
		<div class="nav-menu">
            <div class="nav-item">
               <a href="adm_disst.php"><span>Display students</span></a>
			</div>
		</div>
	
	<b id="logout"  style="position: absolute; top: 15px; right: 45px; ">
	<a style="text-decoration:none; color:white;"href="adm_lout.php">Log Out</a></b>
	
</header>

<div class="clear-space" style="height:60%;">
    <section class="content-banner" style="background-image: url('/images/blog-banner.png')">
	  
    </section>
</div>

<!--

	<nav style="position: absolute; top: 30px; left: 450px;background-color:white;border-radius: 100px 100px; width:1500px; height:100px;">
		<div class="container">
 
			<a href="ent_adm.php"><button class="btn btn3" style="padding:12px 37px; ">Main</button></a>
			<a href="add_st.php"><button class="btn btn3" style="padding:12px 23px;">Add Student</button></a>
			<a href="delete_teat.php"><button class="btn btn3" style="padding:12px 20px;">Delete teacher</button></a>
			<a href="delete_st.php"><button class="btn btn3" style="padding:12px 20px;">Delete Student</button></a>
			<a href="add_course.php"><button class="btn btn3" style="padding:12px 23px;">Add course</button></a>
			<a href="notes.php"> <button class="btn btn3" style="padding:12px 37px;">Notes</button></a>
			<a href="abcense.php"><button class="btn btn3" style="padding:12px 25px;">Abcense</button></a>
			<a href="adm_disst.php"><button class="btn btn3" style="padding:12px 25px;">Display students</button></a></tr>

		</div>

	</nav>

-->
<form action ="" method="post">

	<div style="position: absolute; top: 20%; left: 10%;background-color:white;border-radius: 10% 10%; width:80%; height:80%;">

			<h3 style="position: absolute; top: 0%; left: 5%; font-size:200%;" > Add new Teacher </h1>

		<table style="position:absolute; top:15%; left:10%; font-size:150%;"  cellspacing="17">
	
			<tr>
				<td style="font-size:110%">     First name:           </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="n1" placeholder = "First name" required> </td>
		
				<td style="font-size:110%">      Phone number:                     </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="phone_number" placeholder = "07..........." required> </td>
	 
			</tr>		
	
			<tr>
				<td>
					<br>
				</td> 
			</tr>
	
			<tr>
				<td style="font-size:110%">     Second name:           </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="n2" placeholder = "Second name" required> </td>
	  
				<td style="font-size:110%">     Gender:           </td>
				<td> 
					<select id="A" name = "gender" placeholder = "Gender" style="  width:150px;" size="1" required>
						<option value="Male" name = "male">male</option>
						<option value="Female" name = "female">female</option>
				</td>	  
	  
			</tr>
	           	   
			<tr>
				<td>
					<br>
				</td> 
			</tr>
			
			<tr>
	  
				<td style="font-size:110%">     Third name:           </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="n3" placeholder = "Third name" required> </td>
		
				<td style="font-size:110%">     Location:           </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="location" placeholder = "Location" required> </td>
	
			</tr>
	  
			<tr>
				<td>
					<br>
				</td> 
			</tr>
	  
			<tr>
	  
				<td style="font-size:110%">     Last name:           </td>
				<td> <input style="border:2px solid gray; padding:5% 14%; font-size:60%; border-radius:15px;" id="A" type ="text" name="n4" placeholder = "Last name" required> </td>
	  
			</tr>
	  
		</table>

	<div class="container">
	
		<input style="position: absolute; top: 88%; left: 10%; font-size:70%; padding: 1.5% 5%;" class="btn btn3" type="submit" name="submit" value="Submit Teacher">

	</div>
	
	</div>
	
		</form>	
	
<?php 
			
		if (isset($_POST["submit"])) 
		{
			
			$id = "SELECT MAX(tuter_id) FROM tuter ";	
			
			$r = mysqli_query($l, $id);
			
			echo '<table style="position: absolute; top: 75%; left:50%;">';
			
			while($row = mysqli_fetch_array($r)) {
				
				echo '<tr>';
				
				echo '<td style = "font-size : 24pt;">';	$row['MAX(tuter_id)'];     echo'</td>';
				
			    echo '<td style = "font-size : 20pt;">';	echo $teacherId = $row['MAX(tuter_id)'];     echo'</td>';
				
				echo '</tr>';
				
			}
			
			echo '</table>';
			
			$teacherId++;
			
			$rand = rand();
			
			mysqli_query ($l, "INSERT INTO `proj`.`tuter` (`tuter_id`,`pass_tutor`, `gender`, `phone_number`, `location`, `first_name`, `second_name`, `third_name`, `last_name`) 
			VALUES ('$teacherId','$rand', '$_POST[gender]', '$_POST[phone_number]', '$_POST[location]', '$_POST[n1]', '$_POST[n2]', '$_POST[n3]', '$_POST[n4]' )");			
		}
		
		mysqli_close($l);
				
?>
	
</body>

</html>