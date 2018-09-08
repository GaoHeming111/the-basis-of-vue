<?
	header("Content-Type:text/html;charset=utf-8");
	header("Access-Control-Allow-Origin:*");
	$str = <<<str [{
		"name":"gao",
		"age":"12"
	}]
//  $a=$_POST['a'];
//  $b=$_POST['b'];
//  echo $a-$b;
//  $name = $_POST['name'];
//  $age = $_POST['age'];
//  echo $name.$age;
	echo $str;
?>