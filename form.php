<?php
if(isset($_POST['submit'])){
$uname=$_POST['uname'];
$comp=$_POST['comp'];

$con = mysqli_connect('localhost','root','','register_management_system');
$id="P20CO013";
$query = "INSERT INTO `student`(`admission_no`,`student_name`, `remarks`) VALUES ('$id', '$uname', '$comp')";

$run = mysqli_query($con,$query);

if($run == TRUE){
?>
<h1>Form confirmation!</h1><br/>
<p> my name is <p> <?php $uname ?>I certified this.<br/><a href="pdf.php">Download PDF</a>
<br/><br/>
<a href="doc.php">Download DOC</a>
<br/><br/>
<a href="excel.php">Download EXCEL</a>
<?php
}else
echo "Error!!!!!!";
}
?>