
<?php
session_start();
include("db_connect.php");
require "vendor/autoload.php";
if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
      exit;}
	

$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorSVG();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>
<style>
  body{
		  	background:#008080;
		  }
#bg {
  width: 1000px;
  height: 450px;
 
  margin:60px;
 	float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;
		  	border-radius: 2%;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/malawi.png');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  	border-radius:2%;

		  	
		  }
</style>
	</head>
<?php 
include_once("db_connect.php");

$sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                                              $profile= $foundk['pname'];
											  $name = $foundk['name'];
		                                  }
?>
	<body>
		<script type="text/javascript">	
 		
//  	window.print();
//   setTimeout(function(){
//     window.close()
//   },750)
 </script>
 
      <div id="bg">
            <div id="id">
            	 <table>
        <tr> <td>
        	<?php if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$profile'  width='70px' height='70px' alt=''>";}
									else{
										 echo"<img src='assets/img/eg-dark.png' alt='Avatar'  width='70px' height='70px'>";
									    }	   
                               }else{
			?>
        	<img src="images/love.png" alt="Avatar"  width="70px" height="70px"> <?php }?>
        	</td>
        <td><h3><b><?php echo $name ?></b></h3></td>
       </tr>        
    </table><center>
        <?php  
     $idx = $_GET['id'];
      $sqlmember ="SELECT * FROM Users WHERE id='$idx' ";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                       $title=$found['Mtitle'];$firstname=$found['Firstname'];$sirname=$found['Sirname'];$rank=$found['Rank'];
                       $id=$found['id'];$dept=$found['Department'];$contact=$found['Email'];
			                $count=$count+1;  $get_time=$found['Time']; $time=time(); $pass=$found['Staffid'];
			              $names=$firstname." ".$sirname;
						  $profile= $found['Picname'];
					 }  	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='images/$profile' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
									    }
								else{
									echo"<img src='images/profile.jpg' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
														     	
									} 
             	 	 ?>   </center>              <div class="container" align="center">
      
      	<p style="margin-top:2%">Name</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($names)){ $namez=$title.' '.$names;echo$namez;} ?></p>
      	<p style="margin-top:-4%">Rank</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($rank)){ echo$rank;} ?></p>
       <p style="margin-top:-4%">STAFF ID:</p>
        <p style="font-weight: bold;margin-top:-4%"><?php if(isset($pass)){ echo$pass;} ?></p>
      	<p style="margin-top:-4%">MINISTRY/DEARTMENT:</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($dept)){ echo$dept;} ?></p>      	
      	<p style="margin-top:-4%">HOLDER SIGNATURE</p>
              
      </div>
            </div>
            <div class="id-1">
    	 
                     	 <center><img src="assets/img/eg-dark.png" alt="Avatar" width="200px" height="175px" >        
       <div class="container" align="center">
      <p style="margin:auto">The bearer whose photograph appears overleaf is a staff of</p>
      	<h2 style="color:#00BFFF;margin-left:2%">Exampli Gratia ID </h2>
      <p style="margin:auto">If lost and found please return to the nearest police station</p>
        <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr> 

      	<p align="center" style="margin-top:-2%">Authorised Signature</p>
      		<p> <?php if(isset($code)){ echo$code;}?>
      			</p>
      		 <?php if(isset($name)){ echo"Property of ".$name;}?> </center>
     </div>
</div>

        </div>
	</body>
</html>
