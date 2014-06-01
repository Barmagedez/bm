
<form action='' style='width: 90%; margin: 0 auto;' method='post'>
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
<div style="width: 90%; margin: 0 auto; height: 5%;"><p>Ценовая категория:</p>
<div class="drinkbutton">
<div align="center"><img width="50%" src="/files/coin1.png" ><br><input type="radio" name="answer" value="a1"></div></div>
<div class="drinkbutton"><div align="center"><img width="50%" src="/files/coin2.png" ><br><input type="radio" name="answer" value="a1"></div></div>
<div class="drinkbutton"><div align="center"><img width="50%" src="/files/coin3.png" ><br><input type="radio" name="answer" value="a1"></div></div></div>
 <div style="clear: left"></div>
<hr>
<div style="width: 90%; margin: 0 auto;"><p>Сколько баров осилите: </p> </div>
<select name='tip' class='form-control' style="width: 90%; margin: 0 auto;">
<option>3</option>
<option>4</option>
</select> 
<br><br>
<div style="width: 90%; margin: 0 auto;"><input type='submit' style="width: 100%; background-color: #ddd300;
border-color: #ddd300;" class='btn btn-primary' value='Построить маршрут'></div>
</form>
