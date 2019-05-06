<?php
	$fonts="Consolas";
	$bgcolor="#009688";
	$fontcolor="#ffffff";	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Real Use Of jQuery</title>

<style>

 body{font-family: <?php echo $fonts;?>}

.phpcoding{width: 900px;
	margin: 0 auto;
	background: <?php echo "#ddd";?>;
}
.headeroption, .footeroption {
    background: #009688;
    color: #ffffff;
    text-align: center;
    padding: 20px;
}
em {
    background: #009688;
    padding: 8px;
    font-size: 18px;
    text-shadow: 1px 1px 4px black;
}
.headeroption h2, .footeroption h2 {
    margin: 0;
    text-shadow: 2px 2px 5px black;
    font-size: 30px;
}
.maincontent {
    min-height: 400px;
    padding: 40px;
    background: #333333;
    border: 10px solid #000000;
    color: #fff;
}
p {margin: 0} 

.para {
    width: 750px;
    min-height: 300px;
    background: #0303035e;
    border: 2px solid #000;
    margin-top: 10px;
    position: relative;
    padding: 30px;
}

input[type="text"], input[type="password"] {
    width: 238px;
    padding: 5px;
    background: #1d96f3e0;
}
select{font-size: 18px;
    padding: 2px 5px;
    width: 250px;
}

button, input[type="submit"] {
    background: #2196F3;
    padding: 5px;
    border-radius: 5px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 5px;
    box-shadow: 3px 3px 6px 1px #191a1b;
    cursor: pointer;		   
}

#myform {
    background: tomato;
    width: 725px;
    padding: 10px;
    border: 2px solid #fff;
    border-radius: 30px;
    line-height: 35px;
}
.error_form{
    color: #000000; 
    font-size: 15px;
}

</style>
	
	<script src="js/Jquery.js"></script> 
	<script src="js/main.js"></script> 
    

</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "REAL USE OF JQUERY";?></h2>
			
		</section>