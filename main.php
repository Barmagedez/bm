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

.esheodindiv{
margin: 0 auto;
width: 540px;
padding-top: 15px;
}


	
	</style>
<div class="godrink">
<img style='width:100%' src='/files/img1.png'>
<div class="drinkform">
<div class="esheodindiv">
Привет! <?=$user['fio']; ?> <a href='?exit=1'>ВЫХОД</a>
<hr>
<?
if (!$_GET['route']) {
include("form1_vibor_marshruta.php"); //
} else {
include("action.php");
}
?>
</div>
</div></div>
<img style='width:100%' src='/files/img2.png'>
</div>