<?php 
include('config.php');

$sql = "SELECT anh, tieude, id from baiviettrangchu group by id desc limit 8 ";

$result = mysqli_query($connect,$sql);

while ($sprint = mysqli_fetch_assoc($result)) {
    echo '<div style="float: left; width: 240px; height: 175px; margin-right: 5px; background-color: white" >
			<a href="#" value="tieudetrangchu" id="'.$sprint['id'].'">
			<div>
				<img src="'.$sprint['anh'].'" alt="" style="width: 240px; height: 110px;">
			</div>
			<div style="style="width: 240px; height: 60px;">
				<h5>'.$sprint['tieude'].'</h5>
			</div>
			</a>
		</div>';
}
?>