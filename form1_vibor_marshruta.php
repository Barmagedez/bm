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
������� �����: 
<select name='tip' class='form-control'>
<option>3</option>
<option>4</option>
</select> <br><br>
<input type='submit' class='btn btn-primary' value='��������� �������'>
</form>
<h3 onclick='$("#dsf").toggle()' style='text-decoration:underline'>��������� �������� (������)</h3>
<div id='dsf' style='display:none'>
<span><b>���������� �������� ����� ��� (������)</b> - ��� ��� �� ��������� ��������� �������� ���������� ��������� ��������� � ������ ��������������</span> 

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
			<div class="swiper-slide" style='width:100%;float:left;padding:5px;text-align:center'>
			<h1>"<?=$r['title']?>"</h1>
			<br>
			<?=$r['descr']?>
			<br>
			<input type='button' onclick='window.location="/?route=<?=(int)$r['id']?>"' class='btn btn-primary' value='���������!'>
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
  height: 300px;
  width: 320px;
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
  </style>
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