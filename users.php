<? 
//тут управление сессиями

include_once("db.php");

if ($_GET['exit']) {
	setcookie("id");
}

$sql = "SELECT * FROM users WHERE id = '".(int)$_COOKIE['id']."'";
$q = mysql_query($sql);

if (mysql_num_rows($q)) {$user=r($q);}

if ($_POST['fio']) {
	$sql = "SELECT * FROM users WHERE fio = '".me($_POST['fio'])."'";
	$q=q($sql);
	if (!mysql_num_rows($q)) {
		$sql = "insert into users (fio,level) values ('".me($_POST['fio'])."','Хиляк')";
		q($sql);
		setcookie("id",mysql_insert_id());
			?>
			<script>
			window.location='/';
			</script>
			<?
	} else {
		$r=r($q);
		setcookie("id",$r['id']);
	} 

}

//
?>