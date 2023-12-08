<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","rukshan_portfolio");
if (!$con){
die('Could not connect: ' . mysql_error());
}
else
{
echo "congratulations! connection successfully" ;
echo nl2br("\n");
$sql="INSERT INTO email_table(email)
 VALUES
 ('$_POST[email]')";

}
if (!mysqli_query($con,$sql))
{
echo "";
die('Error: ' . mysqli_error($con));
}
else{
echo "Your record was added successfully" ;
header("location: thankyou.html");


}
mysqli_close($con);
?>
</body>
</html>