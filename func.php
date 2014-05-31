<?
function me($v) {
	return $v;
} 

function getuserbyid($id) {
	$sql = "selecy * from users where id ='$id'";
	$q = q($sql);
	return r($q);
}
?>