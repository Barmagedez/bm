<?
if (!$_GET['route']) die('�������� ��� ��������� �������!');
	$sql  = "select * from routes where id = '".(int)$_GET['route']."'";
	$q=q($sql);
	$route = r($q);

 
?>

<?
if ($_GET['step'] == $route['counts']) {
	?>
	<img src='/img_maps/<?=$route['id']?>_<?=(int)$_GET['step'];?>.jpg' style='width:100%' class="drinkbutton">
	<h2>���������� �� ������� ������� �� 
	
	<?
	$sql = "select * from checkpoints where route = '".$route['id']."' AND user = '".(int)$user['id']."' order by id";
	$q = q($sql);
	$r = r($q);
	//echo $r['data'];
	
	$sec = time()-$r['data'];
	echo $sec;
	?> ������.
	
	<?=$user['fio']?> �� ������ �� �����, � ������� � �� ���������� ������ ��� ��� ���� � ����))
	</h2>
	<?
	$sql = "select * from checkpoints WHERE route = '".$route['id']."' ";
} else {
	?>
	<h1>���� ��������!  ���������� ���� �� �����!!!!</h1>
<?=(int)$_GET['step']?>/<?=$route['counts']?>
<img src='/img_maps/<?=$route['id']?>_<?=(int)$_GET['step'];?>.jpg' style='width:100%' class="drinkbutton">
<form action='#lo' method='post' enctype="multipart/form-data">
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

<a href='' name='lo'></a>
<table class='table table-bordered'>

<?
$sql = "select * from checkpoints where route = '".$route['id']."' AND user = '".$user['id']."' order by id desc";
///echo $sql;
$q = q($sql);
$t=0;
$array = array("disco90","disco90","���� ���","Big Boobs Bar","��� ������ ���������");
while ($r2=r($q)) {
$t++;
ob_start();
?>
	<tr>
	<td><?=$t;?></td>
	<td><?=$array[$t];?></td>
	<?
	$sql = "select * from checkpoints where route = '".$route['id']."' AND user = '".$user['id']."' ORDER BY id DESC LIMIT ".($t-1).",1";
	$q1=q($sql);
	$r2 = r($q1);
	?>
	<td><?  echo "�������� �� ".(time()-$r2['data']); ?> ���</td>
	</tr>
<?

$tr[$t] =  ob_get_clean();
}

$sql = "select * from bars WHERE id IN (".$route['bvars'].")";
//echo $sql;
$q=q($sql);
$i=0;

while ($r=r($q)) {
	$i++;
	if ($tr[$i])  { echo $tr[$i]; continue; } //������ ������� ������
	?>
	<tr>
	<td><?=$i;?></td>
	<td><?=$r['title'];?></td>
	<?
	$sql = "select * from checkpoints where route = '".$route['id']."' ORDER BY id DESC";
	$q1=q($sql);
	$r2 = r($q1);
	?>
	<td><? if ($_GET['step'] > $i) { echo $r['status'];} ?></td>
	</tr>
	<?
}
?>
</table>