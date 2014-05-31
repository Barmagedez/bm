Привет! <?=$user['fio']; ?> <a href='?exit=1'>ВЫХОД</a>
<hr>
<?
if (!$_GET['route']) {
include("form1_vibor_marshruta.php"); //
} else {
include("action.php");
}
?>