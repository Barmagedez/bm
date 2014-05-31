
<form action='' style='background-color: red; width: 90%; margin: 0 auto;' method='post'>
<?
if ($_POST['tip']) {
	$tip=$_POST['tip'];
	if ($tip == 3) {
		?>
		<script>
		window.location='/?route=3'
		</script>
		<?
	}
}
?>
Сколько бароsdfsdfsdfsd111в: 
<select name='tip' class='form-control' style="width: 90%; margin: 0 auto;">
<option>3</option>
<option>4</option>
</select> 
<br><br>
<input type='submit' class='btn btn-primary' value='Построить маршрут'>
</form>
