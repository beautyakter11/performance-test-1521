



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";

//CREATE Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
else{
	echo "";
}
?>
<?php 
if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $name1=$_POST['name1'];
    $address1=$_POST['address1'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $number1=$_POST['number1'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $sql="INSERT INTO registration(id,name1,address1,street,city,number1,age,email) VALUES('$id','$name1','$address1','$street','$city','$number1','$age','$email')";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully added!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
	}

?>

<?php include("includes/header.php") ?>
  <?php include("includes/nav.php") ?>
  <br>
  <!DOCTYPE html>

<body>
<form action=""  method=post >

<div class="form-row">

	  	<div class="col-md-3"></div>
  

       <div class="col-md-6" >
       
  
  
         
    
                 
                 
                 <h2  align:center style="color:purple" class="card-title">REGISTRATION</h2><br>
                 
                 
  <h4 align:center style="color:black">Member number:</h4>
<h4 align:center style="color:black"><input type="digit" class="" name="id" ></h4>
<h4 align:center style="color:black">Name:</h4>
<h4 align:center style="color:black"><input type="text" class="" name="name1"></h4>
<h4 align:center style="color:black">Address:</h4>
<h4 align:center style="color:black"><input type="text" class="" name="address1"></h4>
<h4 align:center style="color:black">Street:</h4>
<h4 align:center style="color:black"><input type="text" class="" name="street"></h4>
<h4 align:center style="color:black">City:</h4>
<h4 align:center style="color:black"><input type="text" class="" name="city"></h4>
<h4 align:center style="color:black">Phone Number:</h4>
<h4 align:center style="color:black"><input type="digit" class="" name="number1"></h4>
<h4 align:center style="color:black">Age:</h4>
<h4 align:center style="color:black"><input type="digit" class="" name="age" ></h4>
<h4 align:center style="color:black">Email Address:</h4>
<h4 align:center style="color:black"><input type="text" class="" name="email"></h4>

 
                
<h4 align:center style= "color:red"><button type="submit" class="btn btn-primary " name="submit" id="submit">Sign in</button></h4>
 
</form>
                  </body>
                  

</form>


                  
                 
                </div>
</div>
         
 
             
               
                
            
                
                
     <?php include("includes/footer.php") ?>
