<?php 

include('config.php');

$id = $_POST['IDtieude'];
$sql = "SELECT anh, tieude, noidung from baivietbongro where id ='$id'";

$result = mysqli_query($connect,$sql);

while ($sprint = mysqli_fetch_assoc($result)) {
    echo '<div style="width: 100%; height: 630px; margin: 10px 10px 10px 10px; background-color: white" >
			<div>
				<img src="'.$sprint['anh'].'" alt="" style="width: 400px; height: 620px; float: left; margin-right : 10px">
			</div>
			<div style="width = 870px; height=620px; float: left; margin-left: 10px">
				<div style="width: 870px; height: 120px; margin-right: 10px">
					<h2 style="color: green">'.$sprint['tieude'].'</h2>
				</div>
				<div style="width: 870px; height: 500px; margin-right: 10px">
					<h4>'.$sprint['noidung'].'</h4>
				</div>
			</div>		
		</div>';
}
 ?>
