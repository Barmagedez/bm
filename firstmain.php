<?

?><Style>
body {
color:white!important; text-align:center;background-image: url(https://pp.vk.me/c620131/v620131999/9f48/3_Axox_FrNM.jpg);background-position: center top;background-size: 100% auto;
}
</style>
<div style='text-shadow: 1px -11px 18px rgba(255, 235, 10, 1);'>
<h2 style='color:white'><br><br><br><br><br><br></h2>
���� �� �����! � ����� ����� � �������� ����������� � ������� ����� ������� � �� �������� Pab Crawl �������. ���� ��������� ���������� ��������� ��������. ������������ �� �������� � ��������, ��������� �������.
<form action='' method='post'>
<br>
<input name='fio' value='' class='form-control' style='margin:5%;width:85%;color:black;border-color:orange;' placeholder='������� ����� ������ ���'> 
<br>
<input class='btn btn-primary' type='submit' value='����� � �����'>
<br><br><br>
<b>���� �����</b><BR>
<table class='table table-bordered'>
<?
$sql=  "SELECT * FROM users ";
$q=q($sql);
while ($r=r($q)) {
	?>
	<Tr>
	<td><?=$r['fio']?></td>
	<td><?=$r['level'];?></td>
	</tr>
	<?
}
?>
</table>

</form>
</div>
