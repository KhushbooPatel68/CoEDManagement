<?php
if(isset($_POST['uname']) && isset($_POST['psw'])){
$cat=$_POST['category'];
$name=$_POST['uname'];
$pass=$_POST['psw'];

$con = mysqli_connect('localhost','root','','register_management_system');

if($cat=="student"){
    $query = "SELECT * FROM `student` WHERE `student_name`='$name'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row < 1 )
     {
         ?>
         <script>
         alert(" Username or Password is Incorrect sss");
         window.open('login.php','_self');
         </script>
         <?php
     }
    else
    {
        //$data = mysqli_fetch_assoc($run);
        //$id = $data['id'];
        //session_start();
        //$_SESSION['uid']=$id ;
        header('location:form.html');
     
}
}
else if($cat=="staff"){
    $query = "SELECT * FROM `faculty` WHERE `faculty_name`='$name'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row < 1 )
     {
         ?>
         <script>
         alert(" Username or Password is Incorrect ");
         window.open('temp.php','_self');
         </script>
         <?php
     }
    else
    {
        $data = mysqli_fetch_assoc($run);
    //$id = $data['id'];
    //session_start();
    //$_SESSION['uid']=$id ;
        header('location:form.html');
     
    }
}
else{
	?>
	<script>
         alert(" Username or Password is Incorrect ");
         window.open('temp.php','_self');
         </script>
         <?php
	
}
}
?>