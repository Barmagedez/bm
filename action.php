<?
if (!$_GET['route']) die('Выберите или постройте маршрут!');
	$sql  = "select * from routes where id = '".(int)$_GET['route']."'";
	$q=q($sql);
	$route = r($q);

 
?>
<h1>Игра началась!  загружайте чеки из баров!!!!</h1>
0/<?=$route['counts']?>
<form action='/' method='post' enctype="multipart/form-data">
<?
//print_R($_FILES);
if ($_FILES['check']['name']) {
	$fn = "./files/".md5(implode(",",$_FILES['check'])).".jpg";
	copy($_FILES['check']['tmp_name'],$fn);
	$sql = "insert into checkpoints (user,screen,data) VALUES ('".$user['id']."','$fn','".time()."')";
	q($sql);
}
?>
<input type=file name='check'>
<input type='submit'>
</form>
<hr>
Лента активности! <br>
<?
$sql = "select * from checkpoints where route = '".$route."' order by id desc";
$q = q($sql);
while ($r=r($q)) {
$io=getuserbyid($r['user']);
echo $io['fio'];
?> <br>
<img src='<?=$r['screen']?>' style='width:100px'>
<hr><?
}