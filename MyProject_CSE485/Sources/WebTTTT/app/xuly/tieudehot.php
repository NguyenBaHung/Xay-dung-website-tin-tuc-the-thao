<?php 
include('config.php');

$sql = "SELECT anh, tieude, id from baiviethot group by id desc limit 10 ";

$result = mysqli_query($connect,$sql);

while ($sprint = mysqli_fetch_assoc($result)) {
    echo '<div style="width: 300px; height: 100px; float: left;">
			<div>
				<img src="'.$sprint['anh'].'" alt="" style="float: left; width: 100px; height: 100px">
			</div>
			<div  style="float: right; width: 195px; height: 100px">
				<h5>'.$sprint['tieude'].'</h5>
			</div>
		</div>';
}
?>