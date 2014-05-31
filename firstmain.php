<?

?>
<div style='float:right'><-- не работает </div>
<script src="//ulogin.ru/js/ulogin.js"></script>
<div id="uLogin" data-ulogin="display=panel;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2F"></div>

<h2> #ХАКАТОН  Бухаем на скорость! Пока просто загружайте всевозможные чеки!!!</h2>
Пора по барам! В любом месте – выберите дороговизну и сколько баров осилите – мы построим Pab Crawl маршрут. Соревнуйтесь по скорости с друзьями, повышайте уровень.
<form action='' method='post'>
<br>
<input name='fio' value='' class='form-control' placeholder='Введите очень крутой ник'> 
<i>ваш никнейм это самое главное на нашем сервисе</i>
<br>
<input class='btn btn-primary' type='submit' value='Войти и пойти'>
<br>
<b>Наши юзеры</b><BR>
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
<span>Популярные маршруты возле вас (Москва)</span> 
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

?> <input type='submit' class='btn btn-primary' onclick='alert("ок. Придумай ник и введи его в форму выше");' value='Я могу!'>

-->