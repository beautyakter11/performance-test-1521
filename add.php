



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
if(isset($_POST['delete'])){
  $on1=$_POST['isbn'];
  $sql = "DELETE FROM add1 WHERE isbn='$on1'";
 
  $result=mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Data successfully deleted!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
else{
	echo "";
}}
?>
<?php 
if(isset($_POST["submit"])){
    $sub=$_POST['sub'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publish=$_POST['publish'];
    $copy1=$_POST['copy1'];
    $edit=$_POST['edit'];
    $page1=$_POST['page1'];
    $isbn=$_POST['isbn'];
    $num=$_POST['num'];
    $name1=$_POST['name1'];
    $num1=$_POST['num1'];
    $sql="INSERT INTO add1(sub,title,author,publish,copy1,edit,page1,isbn,num,name1,num1) VALUES('$sub','$title','$author','$publish','$copy1','$edit','$page1','$isbn','$num','$name1','$num1')";
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
<link rel="stylesheet" type="text/css" href="contactus.css">
<div class="form-row">

	  	<div class="col-md-3"></div>
  

       <div class="col-md-6" >
      
  
  
         
    
                 
                 
                 <h2  align:center style="color:purple" class="card-title">Add a new Book</h2>
                 
                 
  <h6 align:center style="color:black">The book Subject:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="sub" ></h6>
<h6 align:center  style="color:black">The book title:</h6>
<h6 align:center  style="color:black"><input type="text" class="" name="title"></h6>
<h6 align:center style="color:black">Name of author:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="author"></h6>
<h6 align:center  style="color:black">Name of publisher:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="publish"></h6>
<h6 align:center style="color:black">Copyright of the book:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="copy1"></h6>
<h6 align:center style="color:black">The edition number:</h6>
<h6 align:center style="color:black"><input type="digit" class="" name="edit"></h6>
<h6 align:center style="color:black">Number of pages:</h6>
<h6 align:center style="color:black"><input type="digit" class="" name="page1" ></h6>
<h6 align:center style="color:black">ISBN for the book:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="isbn"></h6>
<h6 align:center style="color:black">The number of copies:</h6>
<h6 align:center style="color:black"><input type="digit" class="" name="num"></h6>
<h6 align:center style="color:black">The name of the library:</h6>
<h6 align:center style="color:black"><input type="text" class="" name="name1"></h6>
<h6 align:center style="color:black">Shell Number:</h6>
<h6 align:center style="color:black"><input type="digit" class="" name="num1"><br></h6>



 
                
<h4 align:center style= "color:red"><button type="submit" class="btn btn-primary " name="submit" id="submit">INSERT</button><br><br></h4>

</form>
                  </body>
                  

</form>

                  
                 
                </div>
</div>
<div class=" d-flex justify-content-center"></div>
    <div class="topnav">
  
  <a href="add.php">deleteBook</a>
 
</div>

    <form action="" method="post">
       <input class="form-control mr-sm-2" type="text" name="isbn" placeholder="Enter isbn number">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delete" >Delete</button>
      
    </form>
 
                
            
                
                
                
                
                
    
 <?php include("includes/footer.php") ?>
  