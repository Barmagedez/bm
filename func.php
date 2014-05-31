<?
function me($v) {
	return $v;
} 

function getuserbyid($id) {
	$sql = "select * from users where id ='$id'";
	$q = q($sql);
	return r($q);
}
?>