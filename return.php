



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
    $id1=$_POST['id1'];
    $fine=$_POST['fine'];
    $fine1=$_POST['fine1'];
    $copy1=$_POST['copy1'];
    
    $sql="INSERT INTO return1(id,id1,fine,fine1,copy1) VALUES('$id','$id1','$fine','$fine1','$copy1')";
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
  <br><br>
<!DOCTYPE html>


<body>
<form action=""  method=post >

<div class="form-row">

	  	<div class="col-md-3"></div>
  

       <div class="col-md-6" >
      
  
  
         
    
                 
                 
                 <h2  align:center style="color:purple" class="card-title">Return a book</h2>
                 
                 
  <h4 align:center style="color:black">Write the book id:</h4>
<h4 align:center style="color:black"><input type="digit" class="form-control" name="id" ></h4>
<h4 align:center style="color:black">Write the Member id:</h4>
<h4 align:center style="color:black"><input type="text" class="form-control" name="id1"></h4>
<h4 align:center style="color:black">Fine day:</h4>
<h4 align:center style="color:black"><input type="date" class="form-control" name="fine"></h4>
<h4 align:center style="color:black">Total fine amount:</h4>
<h4  align:center style="color:black"><input type="digit" class="form-control" name="fine1"></h4>
<h4  align:center style="color:black">Number of copies :</h4>
<h4  align:center style="color:black"><input type="digit" class="form-control" name="copy1"></h4>



                
<h4  align:center style= "color:red"><button type="submit" class="btn btn-primary " name="submit" id="submit">Return</button><br><br></h4>

</form>
                  </body>
                

</form>

                  
                 
                </div>
    
     </div> 
 
             
               
                
            
                
                
                
                
                
    
            
 
     <?php include("includes/footer.php") ?>
