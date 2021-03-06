<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><button class="w3-button w3-teal w3-round-xxlarge" onclick="window.location.href='{{route('trang-chu')}}'"><i class="fa fa-home"></i><b> Nhóm Cường, Dũng, Tùng</b></button></li>

						<li><li><button class="w3-button w3-teal w3-round-xxlarge" onclick="window.location.href='{{route('trang-chu')}}'"><i class="fa fa-home"></i><b> VKU.udn.vn</b></button></li></li>
					</ul>
				</div>
					<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
						<button class="w3-button w3-green w3-round-xxlarge"> {{Auth::user()->full_name}}&nbsp;<img src="source\image\faq\2.png" width="20px" height="20px"></button>
						<button class="w3-button w3-red w3-round-xxlarge" onclick="window.location.href='{{route('logout')}}'">Đăng xuất</button>
						<button class="w3-button w3-blue w3-round-xxlarge" onclick="window.location.href='{{route('indexadmin')}}'">Admin</button>
						<div class="form-block">
						@else
						<button class="w3-button w3-green w3-round-xxlarge" onclick="window.location.href='{{route('signin')}}'">Đăng kí</button>
						<button class="w3-button w3-green w3-round-xxlarge" onclick="window.location.href='{{route('login')}}'">Đăng nhập</button>
		
						@endif

							

					</ul>

				</div>

				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trang-chu')}}" id="logo"><img src="source/assets/dest/images/logo-cake.jpg" width="200px" alt=""></a>
					
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					

					<div class="beta-comp">
					
						<!-- <div class="cart">
						
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Lưu trữ (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
							
							@if(Session::has('cart'))
							@foreach($product_cart as $product)
								<div class="cart-item">
									<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href=""><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['name']}}</span>
											<span class="cart-item-amount"><span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
										</div>
									</div>
								</div>
							@endforeach
						
									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="" class="beta-btn primary text-center">Lưu<i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
						
							@endif
							</div>
						</div> .cart -->
					</div>
				</div>

				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color:#00b3b3">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}"><b>Trang chủ</b></a></li>
						<li><a><b>Thể loại</b></a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id1)}}">{{$loai->name1}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}"><b>FAQ</b></a></li>
						<li><a href="{{route('lienhe')}}"><b>Liên hệ</b></a></li>
					</ul>

					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
