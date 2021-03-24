<form action="bai8.php" method="POST">
	<label>Nhập Ngày 1 </label> <input type="datetime-local" name="date1"><br/>
	<label>Nhập Ngày 2 </label> <input type="datetime-local" name="date2"><br/>
	<button>So sánh</button>
</form>
<?php
function soSanhNgay($date1, $date2){
	if (strtotime($date1)> strtotime($date2)){
		return date('Y-m-d', strtotime($date1));
	}else {
		return date('Y-m-d', strtotime($date2));
	}
}
function rangeDate($date1, $date2){
	$diff = date_diff($date1, $date2);
	return $diff-> format("%a"); 
}
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
echo 'Ngày lớn hơn là : ' . soSanhNgay($date1, $date2);
echo '<br>';
echo 'Lớn hơn ' . rangeDate(date_create($date1), date_create($date2)). ' ngày ';
?>