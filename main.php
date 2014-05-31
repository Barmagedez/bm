Привет! <?=$user['fio']; ?> <a href='?exit=1'>ВЫХОД</a>
<hr>
Здесь пока просто загружайте чеки из баров!!!!
<form action='/' method='post' enctype="multipart/form-data">
<?
print_R($_FILES);
?>
<input type=file name='check'>
<input type='submit'>
</form>
<hr>
Лента активности!
<?
$sql = 'select * from checkpoints order by id desc ';
$q = q($sql);
while ($r=r($q)) {
$io=getuserbyid($r['user']);
echo $io['fio'];
?>
<img src='<?=$r['img']?>' style='width:100px'>
<hr><?
}
?>