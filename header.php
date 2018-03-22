<?php require './connect.php'; ?> 
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$query = "SELECT COUNT(*) num FROM ips WHERE ip LIKE '%$ip%' AND status=1";
$stmt = $mysqli->prepare($query);
/* execute query */
$stmt->execute();
// Extract result set and loop rows
$result = $stmt->get_result();
$resultss = $result->fetch_assoc();
$accesses = $resultss['num'];
if($accesses > 0)
{
echo 'You are banned';
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Security Check</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--css file-->
	<link rel="stylesheet" href="style.css">


</head>
<body>
	<!-- Navigation bar -->
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="IPSconnected">IP list</a>
    </div>
    <div class="navbar-header">
      <a class="navbar-brand" href="readfile">Read File</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Graph</a></li>
      <li><a href="#">Table</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>