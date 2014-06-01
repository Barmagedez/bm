<style type="text/css">
		
.godrink { 
			width: 100%;
height: 100%;			
background: #4cb1ca;


		}
.drinkheader {
height: 96px;
width: 100%;
background: url(/files/img1.png) repeat-x;


}
.drinkfooter {
height: 41px;
width: 100%;
background: url(/files/img2.png) repeat-x;


}
		
.drinkform {
height: 100%;
width: 100%;
background: url(/files/img3.png)  no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;

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
width: 90%;
padding-top: 15px;

}

.drinkbutton {
width: 33%;
float: left;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;}

</style>
<div class="godrink">
<div class="drinkheader"></div>
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
</div>
<div class="drinkfooter"></div>

</div>