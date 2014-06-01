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
width: 90%;
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
/* default style */
.selectnav { display: none; }

/* small screen */
@media screen and (max-width: 600px) {
  .js #nav { display: none; }
  .js .selectnav { display: block; }
}

.mainnavigation {
background-color: #0093c8;
text-align: left;
color: #fff;
text-transform: uppercase;
font-size: 24px;
line-height: 50px;
margin: 0 0 20px 0;
}

.the_menu {
display: none;
width: 462px;
height: 410px;
position: absolute;
left: 0;
top: 50px;
padding: 10px;
background-color: #484848;
border: none;
z-index: 1000;
-webkit-box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.3);
box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.3);
}
</style>
<script src="/files/selectnav.min.js"></script>
<script>selectnav('nav'); </script>
<div class="godrink">
<div class="drinkheader"><ul class="nav navbar-nav navbar-right" style="/* background-color: #ddd300; */ li:hover: #fff;  margin-right: 2%; "><li class="dropdown">
              <a href="#" class="dropdown-toggle" style="background-color: #ddd300; margin-top: 50px; padding-top: 0px;
padding-bottom: 0px; height: 45px;  height: 45px; float: right;" data-toggle="dropdown"><img src='/files/img6.gif' style=" height: 45px;"> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" style="background-color: #ddd300; ">
                <li><a href="#"></a></li>
                <li><a href="#">Мой профиль</a></li>
				<li><a href="#">Мой профиль</a></li>
                <li><a href="#">Настройки</a></li>
                <li class="divider"></li>
                <li> <a href='?exit=1'>ВЫХОД</a></li>
              </ul>
            </li></ul></div>
<div class="drinkform">
<div class="esheodindiv">

<h1>Привет! <?=$user['fio']; ?> </h1>


			





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