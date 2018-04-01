<?php 
include('config.php');

$sql = "SELECT anh from baivietanh group by id desc limit 10 ";

$result = mysqli_query($connect,$sql);

while ($sprint = mysqli_fetch_assoc($result)) {
    echo '<div style="width: 250px; height: 310px; float: left; margin: 10px 10px 0 0; background-color: white" >	
				<img src="'.$sprint['anh'].'" alt="" style="width: 250px; height: 310px; float: left; margin-right : 10px">
		</div>';
}
?>
