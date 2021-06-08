<!-- Salma Mobasher 
8120214-->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css"> <!--linking sstyle sheet--> 
</head>
<body>
<style>
tr:nth-child(even) {background: #CCC} <!--Here alternates--> 
tr:nth-child(odd) {background: #FFF}
</style>

<table>

<tr><td>Value</td><td>Name</td></tr>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST['name'];
$mail = $_POST['mail'];
$postalCode = $_POST['postalCode'];
$message = $_POST['message'];

echo"<tr><td>name</td><td>".$name."</td></tr>";
echo"<tr><td>email</td><td>".$mail."</td></tr>";
echo"<tr><td>Postal Code</td><td>".$postalCode."</td></tr>";
echo"<tr><td>Message</td><td>".$message."</td></tr>";
}
?>
</table>

</body>
</html>