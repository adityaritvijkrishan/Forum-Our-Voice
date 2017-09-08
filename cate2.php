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
<br><center><h1 class="h1">Lalu mocks Nitish, says JD(U) not even invited to join Modi government</h1></center>
<center><img height="200px" width="400px" src="Images/2nd.jpg" /></center>
<p>
RJD supremo Lalu Prasad claimed that Nitish Kumar's JD(U) was not even invited to join the NDA government by Prime Minister Narendra Modi or BJP chief Amit Shah in the Cabinet reshuffle today.
"Some JD(U) leaders had got new Kurta Pyjama and Bundi stitched for the swearing-in ceremony, but the elusive invitation did not come," he alleged.
Four junior ministers were today elevated to the Cabinet rank and nine new faces inducted as Ministers of State, in a rejig by Prime Minister Narendra Modi.
The JD(U) national president and Bihar Chief Minister Nitish Kumar had yesterday admitted that his party had not been invited to join the government nor consulted by the BJP brass on the expansion issue, Prasad said.
"Why should Prime Minister Modi or BJP president Shah consult Kumar when they know about his character?" the RJD supremo said in a dig at the JD(U) chief, who had dumped the Grand Alliance in July to form a government in Bihar with the BJP.
"Modi and Shah are unlikely to bow before their new ally, the JD(U) and its chief Nitish Kumar," he said.
</p>
 <hr>
 <table>
 <?php
include "sqlconn.php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name,message FROM cate2;";
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
<form action="cate2form.html" method="post">
<input type="submit" class="button" onclick="location.href='cate2form.html';" value="Discuss" />
</form>
</body>
</html>