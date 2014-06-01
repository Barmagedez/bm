<?
include("sergei.php");
?>

<h3> <!--onclick='$("#dsf").toggle()' style='text-decoration:underline'--><a href="#">Авторские маршруты (кликай)</a></h3>

<div id='dsf' style='display:none'>
<span><b>Популярные маршруты возле вас (Москва)</b> - для вас мы составили несколько наиболее прикольных маршрутов доступных к вашему местоположению</span> 

  <div class="device">
    <a class="arrow-left" href="#"></a> 
    <a class="arrow-right" href="#"></a>
    <div class="swiper-container">
      <div class="swiper-wrapper">
				<?
		$sql = 'select * from routes';
		$q=q($sql);

		while ($r=r($q)) {
			?>
			<div class="swiper-slide" style=' float:left;padding:5px;text-align:center'>
			<h4>"<?=$r['title']?>"</h4>
			<br>
			<?=$r['descr']?>
			<br>
			<input type='button' onclick='window.location="/?route=<?=(int)$r['id']?>"' class='btn btn-primary' value='ВПЕРЕЕЕЕД!'>
			</div>
			<?
		}

		?> 
      </div>
    </div>
    <div class="pagination"></div>
	<div style='clear:both'></div>
  </div>
  <style>
 
/* Demo Syles */
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.5;
}
.device {

}
.device .arrow-left {

}
.device .arrow-right {

}
.swiper-container {

 width: 100%;
}

.swiper-wrapper {

 width: 300%;
}
.content-slide {
  padding: 20px;
  color: #fff;
}
.title {
  font-size: 25px;
  margin-bottom: 10px;
}
.pagination {
  position: absolute;
  left: 0;
  text-align: center;
  bottom:5px;
  width: 100%;
}
.swiper-pagination-switch {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 10px;
  background: #999;
  box-shadow: 0px 1px 2px #555 inset;
  margin: 0 3px;
  cursor: pointer;
}
.swiper-active-switch {
  background: #fff;
}
.sliderbutton {
float: left;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;}

  </style>
  <script src="swiper/demos/js/jquery-1.10.1.min.js"></script>
  <script src="swiper/demos/js/idangerous.swiper-2.1.min.js"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>


</div>