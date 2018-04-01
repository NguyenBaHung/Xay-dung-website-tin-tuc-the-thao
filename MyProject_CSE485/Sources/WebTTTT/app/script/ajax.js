$(function(){
	$('li').click(function(){
		var id = $(this).attr('id');
		var value = $(this).attr('value');

		if (value == "trangchu") {
			$.post(('noidung2.php'), {param1: id}, function(data) {
				$('#content').html(data);
			});
			
		}
		if (value == "bongda") {
			$.post(('bongda.php'), {param1: id}, function(data) {
				$('#content').html(data);
			});
			alert('bongda');
		}
		if (value == "tennis") {
			$.post(('tennis.php'), {param1: id}, function(data){
				$('#content').html(data);
			});
			alert('tennis');
		}
		if (value == "bongro") {
			$.post(('bongro.php'), {param1: id}, function(data){
				$('#content').html(data);
			});
			alert('bongro');
		}
		if (value == "thuvienanh") {
			$.post(('thuvienanh.php'), {param1: id}, function(data){
				$('#content').html(data);
			});
			alert('thuvienanh');
		}

	});

	$('#content').on('click','a', function(){
		var id = $(this).attr('id');
		var value = $(this).attr('value');

		if (value == "tieude") {
			$.post(('chitietbaiviet.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(' tieu de');
		}

		if (value == "tieudetennis") {
			$.post(('ctbvtennis.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(' tieu de tennis');
		}

		if (value == "tieudebongro") {
			$.post(('ctbvbongro.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(' tieu de bong ro');
		}

		if (value == "tieudetrangchu") {
			$.post(('ctbvtrangchu.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(' tieu de trang chu');
		}

		if (value == "tieudehot") {
			$.post(('ctbvhot.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(' tieu de hot');
		}

	});


	$('#content').on('click','button',function(){
		var id = $(this).attr('id');
		var name = $(this).attr('name');

		if (name == "tieudehot") {
			$.post(('ctbvhot.php'), {IDtieude: id}, function(data){
				$('#content').html(data);

			});
			alert(id);
		}

	});


});