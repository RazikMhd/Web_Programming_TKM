<?php 
require 'dbConnection.php';

$name = $_POST['name'];
$units = $_POST['units'];
$rate = $_POST['rate'];


$query = "INSERT INTO electricity(name, units, rate) VALUES ('".$name."','".$units."','".$rate."')";
if(mysqli_query($con,$query))
{
    echo "<script>alert('Successfully uploaded data !')</script>";

    echo "-------------------------------------------------------------------------";
    echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
    echo "<br><br>";
    echo "Consumer name : ".$name."<br>";
    echo "Units Consumed : ".$units."<br>";
    echo "Rate per unit : Rs.".$rate."<br><br>";

    echo "<h4>Total : Rs.".($rate*$units)."</h4><br>";
    echo "-------------------------------------------------------------------------";

}
else
{
    echo "<script>alert(".mysqli_error($con).")</script>";
}

mysqli_close($con);

?>