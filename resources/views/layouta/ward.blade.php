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
            	@foreach($ward as $w)
        		<option value="{{$w->w_pre}}">{{$w->w_name}}</option>
        		@endforeach
        	</select>
        </div>
    </div>
</body>
</html>

</body>
</html>