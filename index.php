<?

include("db.php");
include("func.php");
include("users.php");

include("header.php");

if (!$_GET['a'] && !$user['fio']) {
	include("firstmain.php");
}

if ($user['fio']) {
	include("main.php");
}

if ($_GET['a'] == 'rating') {
	
}
 
include("footer.php");
?>