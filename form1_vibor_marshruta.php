<img style='width:100%' src='https://ps.vk.me/c539321/u193485/docs/afc5aef64f51/bar-kraul.jpg?extra=R3NDeQPs90BtwJ7YjtXRKc-KRHxcqJ0qcWcbT9kYojZ9mPHQvEStHRFm8BUFZiLFlzV2U7RytYc-OnJbkwkkAgt9iuiy'>

<h1>������������ ��������</h1>
<span><b>���������� �������� ����� ��� (������)</b> - ��� ��� �� ��������� ��������� �������� ���������� ��������� ��������� � ������ ��������������</span> 
<?
$sql = 'select * from routes';
$q=q($sql);

while ($r=r($q)) {
	?>
	<h1>"<?=$r['title']?>"</h1>
	<br>
	<?=$r['descr']?>
	<input type='button' onclick='window.location="/?route=<?=(int)$r['id']?>"' class='btn btn-primary' value='���������!'>
	<?
}

?> 
