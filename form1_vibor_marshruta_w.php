
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
<div class="sliderform">
<img style='width:436px' src='/files/map1.png'>
</div>
<div class="lineform">
<img style='width:530px' src='/files/img4.png'>
</div>
<div class="lineform">
<img  src='/files/img5.png'>
</div>
</div>
<img style='width:100%' src='/files/img2.png'>
</div>

<h1>Дизайнерские маршруты</h1>
<span><b>Популярные маршруты возле вас (Москва)</b> - для вас мы составили несколько наиболее прикольных маршрутов доступных к вашему местоположению</span> 
<?
$sql = 'select * from routes';
$q=q($sql);

while ($r=r($q)) {
	?>
	<h1>"<?=$r['title']?>"</h1>
	<br>
	<?=$r['descr']?>
	<input type='button' onclick='window.location="/?route=<?=(int)$r['id']?>"' class='btn btn-primary' value='ВПЕРЕЕЕЕД!'>
	<?
}

?> 
