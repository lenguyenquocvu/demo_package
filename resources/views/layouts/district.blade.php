<html>
<head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="./public/css/bdsStyle.css">

</head>
<body>
    <div class="container">
        <div class="menu-tile">
        <div class="kv">Chọn khu Vực</div>
        <select class="thanhpho">
        	@foreach($districts as $district)
    		<option value="{{$district->d_pre}}">{{$district->d_name}}</option>
    		@endforeach
    	</select>
        <div class="tinh">Chọn tinh thanh</div>
        <select class="1">
            <option value="select">---Chọn tỉnh/thành phố</option>
        </select>
        <div class="duong">Chọn duong</div>
        <select class="2">
        </select>
        <div class="phuong">Chọn phuong</div>
        <select class="3">
        </select>
    	<form class="timkiem" ">
        	<input type="Text" name="nhap">
        	<button>Tìm Kiếm</button>
        </form>
    </div>
    
</body>
</html>