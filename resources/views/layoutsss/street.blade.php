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
            	@foreach($street as $st)
        		<option value="{{$st->s_pre}}">{{$st->s_name}}</option>
        		@endforeach
        	</select>
        </div>
    </div>
</body>
</html>