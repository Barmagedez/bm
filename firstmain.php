<?

?>
<div style='float:right'><-- �� �������� </div>
<script src="//ulogin.ru/js/ulogin.js"></script>
<div id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2F"></div>

<h2> #�������  ������ �� ��������! ���� ������ ���������� ������������ ����!!!</h2>
���� �� �����! � ����� ����� � �������� ����������� � ������� ����� ������� � �� �������� Pab Crawl �������. ������������ �� �������� � ��������, ��������� �������.
<form action='' method='post'>
<br>
<input name='fio' value='' class='form-control' placeholder='������� ����� ������ ���'> 
<i>��� ������� ��� ����� ������� �� ����� �������</i>
<br>
<input class='btn btn-primary' type='submit' value='����� � �����'>
<br>
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
<hr> <!-- 
<span>���������� �������� ����� ��� (������)</span> 
<?
$sql = 'select * from routes';
$q=q($sql);

while ($r=r($q)) {
	?>
	<h1>"<?=$r['title']?>"</h1>
	<br>
	<?=$r['descr']?>
	<?
}

?> <input type='submit' class='btn btn-primary' onclick='alert("��. �������� ��� � ����� ��� � ����� ����");' value='� ����!'>

-->