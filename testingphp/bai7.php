<form action="bai7.php" method="POST">
	<label>Nhập Ngày</label> <input type="datetime-local" name="nhapngay" >
	<label>Phép toán</label>
	<select name="pheptoan">
		<option value="cong">Cộng</option>
		<option value="tru">Trừ</option>
	</select>
	<label>X ngày</label> <input type="text" name="xngay" required>
	<button>Tính</button>
</form>
<?php
var_dump($_POST['nhapngay'])
;
$phepToan=$_POST['pheptoan'];
$xNgay=$_POST['xngay'];
function congTruNgay($date, $phepToan, $xNgay){
	if($phepToan == "cong" ){
		$phepToan = "+";
	}else{
		$phepToan = "-";
	}
	echo date("Y-m-d H:i:s", strtotime($date . $phepToan . $xNgay. "days" ));
}
congTruNgay($date, $phepToan, $xNgay);
?>