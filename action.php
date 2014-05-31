<?
if (!$_GET['route']) die('Выберите или постройте маршрут!');
	$sql  = "select * from routes where id = '".(int)$_GET['route']."'";
	$q=q($sql);
	$route = r($q);

 
?>

<?
if ($_GET['step'] == $route['counts']) {
	?>
	<img src='/img_maps/<?=$route['id']?>_<?=(int)$_GET['step'];?>.jpg' style='width:100%'>
	<h2>ПОЗДРАВЛЯЮ ВЫ ПРООШЛИ МАРШРУТ ЗА 
	
	<?
	$sql = "select * from checkpoints where route = '".$route['id']."' AND user = '".(int)$user['id']."' order by id";
	$q = q($sql);
	$r = r($q);
	//echo $r['data'];
	
	$sec = time()-$r['data'];
	echo $sec;
	?> секунд.
	
	<?=$user['fio']?> вы теперь не хиляк, а Новичок и до следующего уровня вам еще пить и пить))
	</h2>
	<?
	$sql = "select * from checkpoints WHERE route = '".$route['id']."' ";
} else {
	?>
	<h1>Игра началась!  загружайте чеки из баров!!!!</h1>
<?=(int)$_GET['step']?>/<?=$route['counts']?>
<img src='/img_maps/<?=$route['id']?>_<?=(int)$_GET['step'];?>.jpg' style='width:100%'>
<form action='' method='post' enctype="multipart/form-data">
<?
//print_R($_FILES);
if ($_FILES['check']['name']) {
	$fn = "./files/".md5(implode(",",$_FILES['check'])).".jpg";
	copy($_FILES['check']['tmp_name'],$fn);
	$sql = "insert into checkpoints (user,screen,data,route) VALUES ('".$user['id']."','$fn','".time()."','".$route['id']."')";
	q($sql);
	?><script>
	window.location='/?route=<?=(int)$_GET['route']?>&step=<?=((int)$_GET['step']+1)?>';
	</script><?
}
?><br><br><br>
<input type=file name='check' onchange="onFileSelected(event)">
</form>
<script>
function onFileSelected() {
	$("body").css("opacity",0.5);
	$("form").submit();
}
</script>
	<?
}
?>
<hr>
<br>
<table class='table table-bordered'>

<?
$sql = "select * from checkpoints where route = '".$route['id']."' AND user = '".$user['id']."' order by id desc";
$q = q($sql);
$t=0;
while ($r=r($q)) {
ob_start();

if ($t['']) {

}

}

$sql = "select * from bars WHERE id IN (".$route['bvars'].")";
//echo $sql;
$q=q($sql);
$i=0;
while ($r=r($q)) {
	$i++;
	if ($tr[$i])  { echo $tr; break; }
	?>
	<td><?=$i;?></td>
	<td><?=$r['title'];?></td>
	<?
	$sql = "select * from checkpoints where route = '".$route['id']."' ORDER BY id DESC";
	$q1=q($sql);
	$r2 = r($q1);
	?>
	<td><? if ($_GET['step'] > $i) { echo "Пройдено за ".time()-$r2['data']; } else {echo $r['status'];} ?></td>
	</tr>
	<?
}
?>
</table>