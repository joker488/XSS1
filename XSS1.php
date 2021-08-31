<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Yul1n-REcuit XSS 1");
}
</script>
<title>XSS1</title>
</head>
<body>
<h1 align=center>欢迎来到level1！</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["name"];
echo "<h2 align=center>欢迎用户".$str."</h2>";
?>
<center><img src=yulin_logo.jpg></center> 
<p hidden="hidden">能从“欢迎用户”中找到输入点吗？</p>  
<?php 
echo "<h3 align=center>payload的长度:".strlen($str)."</h3>"; 
?>
</body>
</html>




