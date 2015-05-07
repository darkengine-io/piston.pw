<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="/static/favicon.png" />
<?php
ob_start();
require('random_image.php');
$image = ob_get_clean();
?>
<title>piston</title>
<style>
html{
	background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(<?php echo '"'.$image.'"'; ?>) no-repeat center center fixed;
	background-size: cover;
	font-family: Terminus, monospace;
	height:100%;
	overflow:hidden;
}
@font-face{
	font-family: Terminus;
	src: url('/static/fonts/terminus.woff');
	font-weight: bold;
}
#h{
	text-align:center;
	color: #ffffff;
	font-size: 45px;
	text-shadow: 2px 2px #111111;

	width: 200px;
	height: 1em;
	position: absolute;
	top:0;
	bottom: 20%;
	left: 0;
	right: 0;
	margin: auto;
}
#info, #contact{
	color: #eeeeee;
	position: absolute;
}
ul{
	list-style-type: none;
	padding: 0;
}
#info{
	bottom: 0;
	left:0;
	padding-left: 40px;
}
#contact{
	width:100%;
	background: rgba(0,0,0,0.5);
	bottom: 0;
	right:0;
	text-align: right;
	padding-right: 40px;
	padding-top: 2em;
}
a{
	color: #7B7CC8;
	text-decoration: none;
}
</style>
</head>
<body>
<div id="h">piston</div>
<div id="contact">
<ul>
<li><a href="https://darkengine.io/">who</a></li>
</ul>
</div>
<div id="info">
<ul>
<li>email</li>
<li>pbx</li>
<li>vpn</li>
</ul>
</div>
</body>
</html>
