@extends('auth-admin.layouts.admin')

@section('content')
<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
	<h2 class="mb-3 me-auto">Dashboard</h2>
</div>
<div class="row">
	<div class="col-xl-6">
		<div class="row">
			<div class="col-xl-6 col-sm-6">
				<div class="card">
					<div class="card-body d-flex align-items-center justify-content-between">
						<div class="menu">
							<span class="font-w500 fs-16 d-block mb-2">Total Menus</span>
							<h2><?= (empty($count_menu))?'0':$count_menu?></h2>
						</div>
						<div class="d-inline-block position-relative donut-chart-sale">
							<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
							<small class="text-black">
								<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M30.8495 7.03697H22.274V1.75781H28.5565V0H20.511V7.03697H11.9357V12.3132H13.7565L13.919 14.7549H9.2884C5.81084 14.7549 2.93817 17.3859 2.56674 20.7561C1.51859 21.1073 0.761047 22.0953 0.761047 23.2571C0.761047 24.4244 1.5257 25.4164 2.58166 25.7632C2.94436 28.1582 5.02231 30 7.5238 30H27.8522L29.0287 12.3132H30.8495V7.03697ZM9.2884 16.5127H17.0291C19.4851 16.5127 21.5318 18.2881 21.9496 20.6188H4.36785C4.78564 18.2881 6.83214 16.5127 9.2884 16.5127ZM3.40692 22.3766H22.9103C23.3972 22.3766 23.7934 22.7717 23.7934 23.2569C23.7934 23.7424 23.3972 24.1372 22.9103 24.1372H3.40692C2.92003 24.1372 2.52405 23.7424 2.52405 23.2569C2.52405 22.7717 2.92003 22.3766 3.40692 22.3766ZM7.5238 28.2422C6.04545 28.2422 4.79643 27.2479 4.41146 25.8952H21.9058C21.521 27.2479 20.272 28.2422 18.7934 28.2422H7.5238ZM26.2024 28.2422H22.599C23.1888 27.5517 23.5937 26.7002 23.7356 25.7632C24.7915 25.4164 25.5564 24.4244 25.5564 23.2571C25.5564 22.0953 24.7989 21.1073 23.7507 20.7561C23.3793 17.3859 20.5069 14.7549 17.0291 14.7549H15.6859L15.5234 12.3132H27.2618L26.2024 28.2422ZM29.0865 10.5553H13.6987V8.79478H29.0865V10.5553Z" fill="#624FD1"/>
								</svg>
							</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-sm-6">
				<div class="card">
					<div class="card-body d-flex align-items-center justify-content-between">
						<div class="menu">
							<span class="font-w500 fs-16 d-block mb-2">Total Revenue</span>
							<h2>$87,561</h2>
						</div>
						<div class="d-inline-block position-relative donut-chart-sale">
							<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/6</span>
							<small class="text-black">
								<svg width="19" height="36" viewBox="0 0 19 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18.8469 24.36C18.8469 25.64 18.5269 26.8667 17.8869 28.04C17.2469 29.1867 16.3003 30.1467 15.0469 30.92C13.8203 31.6933 12.3403 32.1333 10.6069 32.24V35.48H8.44695V32.24C6.02028 32.0267 4.04695 31.2533 2.52694 29.92C1.00694 28.56 0.233612 26.84 0.206945 24.76H4.08695C4.19361 25.88 4.60695 26.8533 5.32695 27.68C6.07361 28.5067 7.11361 29.0267 8.44695 29.24V19.24C6.66028 18.7867 5.22028 18.32 4.12695 17.84C3.03361 17.36 2.10028 16.6133 1.32694 15.6C0.553612 14.5867 0.166945 13.2267 0.166945 11.52C0.166945 9.36 0.913612 7.57333 2.40695 6.16C3.92695 4.74666 5.94028 3.96 8.44695 3.8V0.479998H10.6069V3.8C12.8736 3.98667 14.7003 4.72 16.0869 6C17.4736 7.25333 18.2736 8.89333 18.4869 10.92H14.6069C14.4736 9.98667 14.0603 9.14667 13.3669 8.4C12.6736 7.62667 11.7536 7.12 10.6069 6.88V16.64C12.3669 17.0933 13.7936 17.56 14.8869 18.04C16.0069 18.4933 16.9403 19.2267 17.6869 20.24C18.4603 21.2533 18.8469 22.6267 18.8469 24.36ZM3.88695 11.32C3.88695 12.6267 4.27361 13.6267 5.04695 14.32C5.82028 15.0133 6.95361 15.5867 8.44695 16.04V6.8C7.06028 6.93333 5.95361 7.38667 5.12695 8.16C4.30028 8.90667 3.88695 9.96 3.88695 11.32ZM10.6069 29.28C12.0469 29.12 13.1669 28.6 13.9669 27.72C14.7936 26.84 15.2069 25.7867 15.2069 24.56C15.2069 23.2533 14.8069 22.2533 14.0069 21.56C13.2069 20.84 12.0736 20.2667 10.6069 19.84V29.28Z" fill="#624FD1"/>
								</svg>
							</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-sm-6">
				<div class="card">
					<div class="card-body d-flex align-items-center justify-content-between">
						<div class="menu">
							<span class="font-w500 fs-16 d-block mb-2">Total Oders</span>
							<h2><?=(empty($count_orders))?'0':$count_orders?></h2>
						</div>
						<div class="d-inline-block position-relative donut-chart-sale">
							<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
							<small class="text-black">
								<svg width="19" height="36" viewBox="0 0 19 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18.8469 24.36C18.8469 25.64 18.5269 26.8667 17.8869 28.04C17.2469 29.1867 16.3003 30.1467 15.0469 30.92C13.8203 31.6933 12.3403 32.1333 10.6069 32.24V35.48H8.44695V32.24C6.02028 32.0267 4.04695 31.2533 2.52694 29.92C1.00694 28.56 0.233612 26.84 0.206945 24.76H4.08695C4.19361 25.88 4.60695 26.8533 5.32695 27.68C6.07361 28.5067 7.11361 29.0267 8.44695 29.24V19.24C6.66028 18.7867 5.22028 18.32 4.12695 17.84C3.03361 17.36 2.10028 16.6133 1.32694 15.6C0.553612 14.5867 0.166945 13.2267 0.166945 11.52C0.166945 9.36 0.913612 7.57333 2.40695 6.16C3.92695 4.74666 5.94028 3.96 8.44695 3.8V0.479998H10.6069V3.8C12.8736 3.98667 14.7003 4.72 16.0869 6C17.4736 7.25333 18.2736 8.89333 18.4869 10.92H14.6069C14.4736 9.98667 14.0603 9.14667 13.3669 8.4C12.6736 7.62667 11.7536 7.12 10.6069 6.88V16.64C12.3669 17.0933 13.7936 17.56 14.8869 18.04C16.0069 18.4933 16.9403 19.2267 17.6869 20.24C18.4603 21.2533 18.8469 22.6267 18.8469 24.36ZM3.88695 11.32C3.88695 12.6267 4.27361 13.6267 5.04695 14.32C5.82028 15.0133 6.95361 15.5867 8.44695 16.04V6.8C7.06028 6.93333 5.95361 7.38667 5.12695 8.16C4.30028 8.90667 3.88695 9.96 3.88695 11.32ZM10.6069 29.28C12.0469 29.12 13.1669 28.6 13.9669 27.72C14.7936 26.84 15.2069 25.7867 15.2069 24.56C15.2069 23.2533 14.8069 22.2533 14.0069 21.56C13.2069 20.84 12.0736 20.2667 10.6069 19.84V29.28Z" fill="#624FD1"/>
								</svg>
							</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-sm-6">
				<div class="card">
					<div class="card-body d-flex align-items-center justify-content-between">
						<div class="menu">
							<span class="font-w500 fs-16 d-block mb-2">Total Customers</span>
							<h2><?=(empty($count_customers))?'0':$count_customers?></h2>
						</div>
						<div class="d-inline-block position-relative donut-chart-sale">
							<span class="donut1" data-peity='{ "fill": ["rgb(98, 79, 209,1)", "rgba(247, 245, 255)"],   "innerRadius": 35, "radius": 10}'>5/7</span>
							<small class="text-black">
								<svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.0444 19.25C12.0362 19.25 13.0057 18.9568 13.8304 18.4074C14.6551 17.8579 15.2978 17.0771 15.6774 16.1634C16.0569 15.2498 16.1563 14.2445 15.9628 13.2746C15.7693 12.3046 15.2917 11.4137 14.5903 10.7145C13.889 10.0152 12.9955 9.539 12.0227 9.34608C11.0499 9.15315 10.0416 9.25217 9.12531 9.6306C8.20899 10.009 7.42579 10.6499 6.87476 11.4722C6.32374 12.2944 6.02962 13.2611 6.02962 14.25C6.03092 15.5757 6.55967 16.8467 7.49984 17.7841C8.44001 18.7215 9.71478 19.2487 11.0444 19.25ZM11.0444 11.75C11.5403 11.75 12.0251 11.8966 12.4374 12.1713C12.8497 12.446 13.1711 12.8365 13.3609 13.2933C13.5507 13.7501 13.6003 14.2528 13.5036 14.7377C13.4068 15.2227 13.168 15.6681 12.8174 16.0178C12.4667 16.3674 12.0199 16.6055 11.5335 16.702C11.0472 16.7984 10.543 16.7489 10.0848 16.5597C9.62668 16.3705 9.23508 16.0501 8.95957 15.6389C8.68405 15.2278 8.537 14.7445 8.537 14.25C8.53789 13.5872 8.80235 12.9519 9.27238 12.4832C9.74241 12.0146 10.3797 11.7509 11.0444 11.75Z" fill="#624FD1"/>
									<path d="M30.632 22.4625C31.0458 21.9098 31.3223 21.2672 31.4388 20.5873C31.5552 19.9074 31.5082 19.2097 31.3017 18.5514L30.5058 15.9696C30.1322 14.7451 29.3726 13.6733 28.3398 12.9132C27.307 12.1531 26.0559 11.7452 24.7722 11.75H19.1468C18.8143 11.75 18.4954 11.8817 18.2603 12.1161C18.0252 12.3505 17.8931 12.6685 17.8931 13C17.8931 13.3315 18.0252 13.6495 18.2603 13.8839C18.4954 14.1183 18.8143 14.25 19.1468 14.25H24.7722C25.5192 14.2474 26.2471 14.485 26.8481 14.9274C27.449 15.3698 27.891 15.9935 28.1084 16.706L28.9043 19.2866C28.9921 19.5713 29.0117 19.8725 28.9615 20.1661C28.9114 20.4597 28.7928 20.7374 28.6154 20.977C28.438 21.2166 28.2067 21.4114 27.9401 21.5456C27.6735 21.6799 27.379 21.7499 27.0803 21.75H15.5853C15.5499 21.75 15.5201 21.7671 15.485 21.7701C15.4008 21.7669 15.3194 21.75 15.2339 21.75H7.37331C5.98015 21.7449 4.62249 22.1879 3.50187 23.0132C2.38125 23.8385 1.55741 25.0021 1.15264 26.3312L0.216641 29.3625C-0.00199068 30.0719 -0.0506583 30.8225 0.0745503 31.554C0.199759 32.2856 0.495352 32.9776 0.937568 33.5746C1.37979 34.1715 1.95629 34.6567 2.62075 34.9911C3.28521 35.3255 4.01908 35.4998 4.76339 35.5H17.843C18.5873 35.4999 19.3213 35.3256 19.9858 34.9912C20.6503 34.6569 21.2269 34.1717 21.6691 33.5748C22.1114 32.9778 22.4071 32.2857 22.5323 31.5542C22.6575 30.8226 22.6089 30.0719 22.3902 29.3625L21.4548 26.3315C21.2179 25.5767 20.8448 24.8713 20.354 24.25H27.0803C27.7718 24.2532 28.4543 24.0928 29.0717 23.7821C29.6891 23.4714 30.2238 23.0192 30.632 22.4625ZM19.6524 32.089C19.4445 32.3726 19.1721 32.6031 18.8576 32.7614C18.543 32.9198 18.1953 33.0015 17.843 33H4.76339C4.41135 32.9999 4.06424 32.9175 3.74996 32.7594C3.43569 32.6012 3.16303 32.3717 2.95391 32.0894C2.7448 31.807 2.60506 31.4796 2.54595 31.1336C2.48684 30.7876 2.51 30.4326 2.61357 30.0971L3.54894 27.0661C3.79744 26.2489 4.30376 25.5335 4.99265 25.0261C5.68155 24.5188 6.51624 24.2466 7.37269 24.25H15.2333C16.0897 24.2466 16.9244 24.5188 17.6133 25.0261C18.3022 25.5335 18.8085 26.2489 19.057 27.0661L19.9924 30.0971C20.0979 30.4323 20.1221 30.7877 20.063 31.134C20.0039 31.4804 19.8632 31.8078 19.6524 32.0894V32.089Z" fill="#624FD1"/>
									<path d="M21.7007 9.24999C22.5685 9.24999 23.4169 8.9934 24.1385 8.51267C24.8601 8.03194 25.4225 7.34866 25.7546 6.54923C26.0867 5.74981 26.1736 4.87014 26.0043 4.02148C25.835 3.17281 25.4171 2.39326 24.8034 1.78141C24.1898 1.16955 23.4079 0.752876 22.5567 0.584066C21.7056 0.415256 20.8233 0.501896 20.0215 0.833029C19.2197 1.16416 18.5344 1.72492 18.0523 2.44438C17.5702 3.16384 17.3128 4.0097 17.3128 4.875C17.3142 6.03489 17.7769 7.14688 18.5995 7.96705C19.4221 8.78722 20.5374 9.2486 21.7007 9.24999ZM21.7007 3C22.0726 3 22.4362 3.10997 22.7455 3.31599C23.0547 3.52202 23.2958 3.81485 23.4381 4.15747C23.5804 4.50008 23.6177 4.87708 23.5451 5.24079C23.4725 5.6045 23.2934 5.9386 23.0304 6.20082C22.7674 6.46304 22.4324 6.64162 22.0676 6.71397C21.7028 6.78631 21.3247 6.74918 20.9811 6.60727C20.6374 6.46535 20.3437 6.22503 20.1371 5.91669C19.9305 5.60835 19.8202 5.24584 19.8202 4.875C19.8207 4.37789 20.019 3.9013 20.3716 3.54979C20.7241 3.19829 21.2021 3.00056 21.7007 3Z" fill="#624FD1"/>
								</svg>
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-6">
		<div class="card">
			<div class="card-header border-0 flex-wrap pb-0">
				<div class="mb-sm-0 mb-2">
					<h4 class="fs-20">Today’s Revenue</h4>
					<span>Revenue</span>
				</div>
				<div>
					<h2 class="font-w700 mb-0">$ 240.45</h2>
				<p class="mb-0 font-w700"><span class="text-success">0,5% </span>than last day</p>
				</div>
			</div>
			<div class="card-body py-0">
				<div id="revenueChart" class="revenueChart"></div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-xxl-4">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header border-0">
						<div>
							<h4 class="fs-20 mb-1">Daily Trending Menus</h4>
							<span>#trending</span>
						</div>
					</div>
					<div class="card-body pb-0">
						<?php $No = 1;?>
						@foreach ($trending_menu as $menu)
						<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
							<span class="num">#<?php echo $No++.'.' ?></span>
							<div class="me-auto pe-3">
								<a href="ecom-product-grid.html"><h2 class="text-black fs-14 font-w600">{{ucwords($menu->name)}}</h2></a>
								<span class="text-black font-w600 d-inline-block me-3">${{ $menu->price }} </span> <span class="fs-14">Order 89x</span>
							</div>
							<img src="{{ asset('/public/uploads/menu/'.$menu->id.'/'.$menu->cover_image) }}" alt="">
						</div>
						@endforeach

					</div>
				</div>

			</div>
			<div class="col-xl-12">

			</div>
		</div>
	</div>
	<div class="col-xl-9 col-xxl-8">
		<div class="row">

			<div class="col-xl-4 col-xxl-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card customer-wrapper">
							<div class="card-header border-0">
								<div>
									<h4 class="fs-20 mb-1">Customers</h4>
									<span>#customers</span>
								</div>
								<div class="add-btn">
									<a href="{{ route('import') }}"><i class="fas fa-plus"></i></a>
								</div>
							</div>
							<div class="card-body height400 loadmore-content dz-scroll pb-0 pt-0" id="CustomerListContent">
								<div class="d-flex align-items-center mb-4">
									<div class="recent-customer me-3">
										<img src="images/contacts/c1.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">Benny Chagur</span>
										<p class="font-w600 mb-0 text-primary">MEMBER</p>
									</div>
								</div>
								<div class="d-flex align-items-center mb-4">
									<div class="recent-customer me-3">
										<img src="images/contacts/c2.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">Chynita Bella</span>
										<p class="font-w600 mb-0 text-primary">MEMBER</p>
									</div>
								</div>
								<div class="d-flex align-items-center mb-4">
									<div class="recent-customer me-3">
										<img src="images/contacts/c3.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">David Heree</span>
										<p class="font-w600 mb-0">Regular Customer</p>
									</div>
								</div>
								<div class="d-flex align-items-center mb-4">
									<div class="recent-customer me-3">
										<img src="images/contacts/c4.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">Evan D. Mas</span>
										<p class="font-w600 mb-0 text-primary">MEMBER</p>
									</div>
								</div>
								<div class="d-flex align-items-center mb-4">
									<div class="recent-customer me-3">
										<img src="images/contacts/c5.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">Supratman</span>
										<p class="font-w600 mb-0">Regular Customer</p>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="recent-customer me-3">
										<img src="images/contacts/c6.jpg" width="50" alt="">
									</div>
									<div>
										<span class="c-name">John Kusnaidi</span>
										<p class="font-w600 mb-0">Regular Customer</p>
									</div>
								</div>
							</div>
							<div class="card-footer border-0 down-arrow pb-0">
								<a href="javascript:void(0);" class="dz-load-more fas fa-chevron-down" id="CustomerList" rel="ajax/customer-list.html" ></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
