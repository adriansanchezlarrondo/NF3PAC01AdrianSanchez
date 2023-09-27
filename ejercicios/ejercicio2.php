<html>
<head>
<title> Welcome!</title>
<style>
	footer{
            text-align: center;
            padding: 10px;
	    bottom: 0;
	    left: 0;
	    width: 100%;
	    position: fixed;
        }
</style>
</head>
<body>
	<div style="text-align: center">
	<p> Welcome to my movie review site!<br/>
	<?php
	date_default_timezone_set("America/New_York");
	echo "Today is ";
	echo date("F d");
	echo ", ";
	echo date("Y");
	?>
	</div>
	<footer>
    		<p>Site developed by: <a href="https://github.com/adriansanchezlarrondo">Adrián Sánchez Larrondo</a></p>
	</footer>
</body>
</html>





