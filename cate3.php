<!DOCTYPE html>
<html>
<head>
    <title>Lalu mocks Nitish, says JD(U) not even invited to join Modi government</title>
</head>
<body background="bgblack.jpg">
 <style>
*{
  margin: 0;
  padding: 0;
}
body{
  background-image: url(bgblack.jpg);
  font-family: 'Titillium web' Calibri, sans-serif;
}
.Nav-section{
  width: 100%;
  padding: 8% 0;
  background-size: cover;
}
nav ul{
  width: 900px;
  margin: 0 auto;
  background-color: rgba(255, 255, 255, 0.5);
  text-align: center;
  border-radius: 63px;
}
nav ul li{
  list-style: none;
  display: inline-block;
}
nav ul li a{
  display: block;
  text-decoration: none;
  padding: 40px 60px;
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 300;
  color: #323642;
  transition: background-color 0.5s ease;
}
nav ul li a:hover{
background-color: rgba(255, 255, 255, 0.3);
}.ul1{
position:absolute;
top:20px;
left:250px;
}.h1{
	font-size:28px;
	color:white;
}p{
	color:white;
	font-size:20px;
	font-family:arial;
	top:500px;
	left:100px;
	position:absolute;
}.tb1{
	position:absolute;
	top:950px;
	left:100px;
	text-align: left;
	border: 3px solid Blue;
	  border-collapse: separate;
  border-spacing: 10px 0;
 
	width:1000px;
	height:100px;
	background: rgba(0,0,225,0.1);
	  
}th{
	font-family:algerian;
	font-size:30px;
}tr{
	outline: thin solid blue;
	color:white;
}.h11{
	position:relative;
	left:100px;
	top:400px;
	color:white;
	font-family:Arial;
}hr{
	position:relative;
	left:100px;
	top:300px;
	width:1200px;height:2px;
}.button {
	position:absolute;
	left:100px;
	top:800px;
	font-family:arial bold;
	font-weight:bold;
	font-size:25px;
	width:200px;
	height:50px;
	       border-radius: 3px;
    background-color: #959A9B;
    color: white;
    border: 2px solid #959A9B;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    background-color: rgba(0,0,225,0.1); /* Green */
    color: white;
}
    </style>
 <div class="Nav-section">
<nav>
<ul class="ul1">
  <li><a href="Index.html">Home</a></li>
  <li><a href="Community.html">Community</a></li>
  <li><a href="About.html">About</a></li>
</ul>
  </nav>
</div>
<br><center><h1 class="h1">Narendra Modi Cabinet Reshuffle 2017: Nirmala Sitharaman Gets Defence, Piyush Goyal Railways</h1></center>
<center><img height="200px" width="400px" src="Images/3rdbig.jpg" /></center>
<p>
Nirmala Sitharaman will be the new Defence Minister of India - the second woman to be in-charge of the portfolio after Indira Gandhi. By virtue of her elevation she automatically is now part of the all-powerful Cabinet Committee on Security (CCS). In the process, the first time MP leapfrogs over senior party colleagues in the Cabinet. Piyush Goyal is the new Railway Minister.
</p>
 <hr>
 <table>
 <?php
include "sqlconn.php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name,message FROM cate3;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='tb1'><tr><th>Name</th><th>Meessages</th></tr>";
   
    while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["Name"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h1 class='h11'>No discussion...</h1>";
}
$conn->close();
?></table>
<form action="cate3form.html" method="post">
<input type="submit" class="button" onclick="location.href='cate3form.html';" value="Discuss" />
</form>
</body>
</html>