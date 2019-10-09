<html>
<head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="../public/css/1.css">
</head>
<body>
    <div class="container">
        <div class="menu-tile">
            <div class="kv">Chọn khu Vực</div>
            <select class="mot">
            	@foreach($provinces as $province)
        		<option value="{{$province->p_code}}">{{$province->p_name}}</option>
        		@endforeach
        	</select>
        </div>
    </div>
</body>
</html>

