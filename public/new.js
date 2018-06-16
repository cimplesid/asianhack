
function generate_qrcode(name,address,phone,age,gender){
	console.log('REQUEST');
	$.ajax({j
				type: 'post',
				url: 'generator.php',
				data : {
					name:name,
					address:address,
					phone:phone,
					age:age,
					gender:gender
				},
				success: function(code){
				console.log(code);
				$('#result').html(code);
	}
	});
}


