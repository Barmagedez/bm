<style type="text/css">
		
.godrink { 
			width: 640px;
height: 960px;			
background: #4cb1ca;


		}
		
.drinkform {
height: 825px;
background: url(/files/img3.png);

}		
.sliderform {
margin: 0 auto;
width: 436px;
padding-top: 20px;
}	

.lineform {
margin: 0 auto;
width: 530px;
padding-top: 10px;
}
	
	</style>
<div class="godrink">
<img style='width:100%' src='/files/img1.png'>
<div class="drinkform">
<form action='' method='post'>
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
Сколько баров: 
<select name='tip' class='form-control'>
<option>3</option>
<option>4</option>
</select> 
<br><br>
<input type='submit' class='btn btn-primary' value='Построить маршрут'>
</form>
</div>
<img style='width:100%' src='/files/img2.png'>
</div>