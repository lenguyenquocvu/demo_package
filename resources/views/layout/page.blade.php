<html>
<head>
        <title>@yield('title')</title>
 </head>
 <body>
        <div class="container">
        	<img src="http://file4.batdongsan.com.vn/images/Logo/BDS-LogoNew.jpg" alt="Kênh thông tin mua bán, cho thuê nhà đất số 1" style="padding-top: 2px;">
        	<img src="https://file4.batdongsan.com.vn/2018/04/07/RUFz0fap/20180407105303-7dfc.jpg" style="max-width: 100%; height: 132px;">
	        <div class="menu-tile">
	        	@foreach($pages as $page)
	        	 <ul>
	            	<li style="font-size: 21pt;"><a href="{{$page->page_url}}">{{$page->page_title}}</a></li>
	            </ul>
	        	@endforeach
	        </div>
	        <form style="padding-left: 225px; margin-top: -41px;">
	        	<input type="" name="nhap">
	        	<button>Tìm Kiếm</button>
	        </form>
        </div>
</body>
</html>