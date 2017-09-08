<!DOCTYPE html>
<html>
<head>
    <title>Anti-Emergency movement strengthened Indian democracy: PM Modi</title>
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
<br><center>
<form action="cate1form.html" method="post">
<h1 name="cate1" class="h1">Anti-Emergency movement strengthened Indian democracy: PM Modi</h1></center>
<center><img height="200px" width="400px" src="Images/1st.jpg" /></center>
<p>Delhi: Prime Minister Narendra Modi said on Sunday that anti-Emergency movement had strengthened Indian democracy.
<br>Speaking on the occasion of Jayaprakash Narayan's 113th birth anniversary in the national capital the PM said, “We need <br>not cry while remembering Emergency. Lets talk about how the anti-Emergency movement strengthened democracy.”
 <br>“JP Movement, Navnirman Movement, Emergency, they gave birth to a new kind of politics in the nation,” PM Modi pointed <br>out, adding, “JP was a person with an open mind. He was not restricted to one thought or ideology. He lived for the truth <br>and what he felt was right.”
<br>“In 1977 polls top leadership was in jail. No one knew what was happening but see the strength of people and their respect for democracy. Leadership born during Emergency was not one for TV screens. It was a leadership to live and die for the Nation,” PM further said.
<br>To the fourth estate, the PM said, “India's media might have its preferences but it should never let people of this country forget the days of emergency period,” as per ANI, adding, “We don't want to remember emergency to criticize someone, but to constantly be reminded of commitment towards democracy and freedom of press.”</p>
 <hr>
 <table>
 <?php
include "sqlconn.php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,message FROM cate1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='tb1'><tr><th>Name</th><th>Meessages</th></tr>";
   
    while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["name"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h1 class='h11'>No discussion...</h1>";
}
$conn->close();
?></table>

<input type="submit" class="button"  value="Discuss" />
</form>
</body>
</html>