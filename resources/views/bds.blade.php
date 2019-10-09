<!DOCTYPE html>
<html>
<head>
	<title>Bất động sản</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charshet="utf-8" />
	<style type="text/css">
		.province{
		    -webkit-padding-end: 20px;
		    -moz-padding-end: 20px;
		    -webkit-padding-start: 20px;
		    -moz-padding-start: 20px;
		}
		.district{
		    -webkit-padding-end: 27px;
		    -moz-padding-end: 27px;
		    -webkit-padding-start: 27px;
		    -moz-padding-start: 27px;
		}
		.ward{
		    -webkit-padding-end: 29px;
		    -moz-padding-end: 29px;
		    -webkit-padding-start: 30px;
		    -moz-padding-start: 29px;
		}
		.street{
		    -webkit-padding-end: 44px;
		    -moz-padding-end: 44px;
		    -webkit-padding-start: 44px;
		    -moz-padding-start: 44px;
		}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
</head>
<body>
	<form method="GET">
		<fieldset>
			<legend>-- Chọn khu vực --</legend>
			<div>
	            <select id="province">
				    <option value="" selected="selected">-- Chọn tỉnh/thành phố --</option>
				    @foreach($pro as $p)
				    	<option value="{{ $p->p_id }}">{{ $p->p_name }}</option>
				    @endforeach				    
				</select>
	        </div>
	        <br>
	        <div>
	            <select id="district">
				    <option value="" selected="selected">-- Chọn quận/huyện --</option>
				</select>
	        </div>
	        <br>
	        <div>
	            <select id="ward">
				    <option value="" selected="selected">-- Chọn xã/phường --</option>
				</select>
	        </div>
	        <br>
	        <div>
	            <select id="street">
				    <option value="" selected="selected">-- Chọn đường--</option>
				</select>
	        </div>
	        <br>
	        <input type="submit" value="Gửi">
		</fieldset> 
    </form>
</body>
	<script type="text/javascript">
		$('#province').on('change', function(){
			var optionSelected = $(this).find("option:selected");
			var valueSelected = optionSelected.val();
			var textSelected = optionSelected.text();
			$.ajax({
				url: "ajax",
				type: "GET",
				data: {p_id:valueSelected},
				dataType: 'json'
			}).done(function(data){
					console.log(data);
					$.each(data, function (index, subcatObj) {
						// body...
						$('#district').append('<option value="'+ subcatObj.d_id +'">'+ subcatObj.d_name +'</option>');
					});
				});
		});

		$('#district').on('change', function(){
			var optionSelected = $(this).find("option:selected");
			var valueSelected = optionSelected.val();
			var textSelected = optionSelected.text();
			$.ajax({
				url: "ajax_ward",
				type: "GET",
				data: {d_id:valueSelected},
				dataType: 'json'
			}).done(function(data){
					console.log(data);
					$.each(data, function (index, data) {
						// body...
						$('#ward').append('<option value="'+ data.w_id +'">'+ data.w_name +'</option>');
					});
				});
		});

		$('#ward').on('change', function(){
			var optionSelected = $(this).find("option:selected");
			var valueSelected = optionSelected.val();
			var textSelected = optionSelected.text();
			$.ajax({
				url: "ajax_streets",
				type: "GET",
				data: {w_id:valueSelected},
				dataType: 'json'
			}).done(function(data){
					console.log(data);
					$.each(data, function (index, subcatObj) {
						// body...
						$('#street').append('<option value="'+ subcatObj.s_id +'">'+ subcatObj.s_name +'</option>');
					});
				});
		});
	</script>
</html>