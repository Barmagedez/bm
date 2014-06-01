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
<div class="drinkheader"></div>
<div class="drinkform">
<div class="esheodindiv">
Привет! <?=$user['fio']; ?>  <a href='?exit=1'>ВЫХОД</a>
<li class="dropdown open">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>





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