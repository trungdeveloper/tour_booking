@include('layout.page.link')
<body data-page="homepage" class="homePage">
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="javascript:if(confirm('https://www.googletagmanager.com/ns.html?id=GTM-MLGXNH\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.googletagmanager.com/ns.html?id=GTM-MLGXNH'"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) { return; }
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/messenger.Extensions.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'Messenger'));
	</script>
	<noscript id="deferred-styles">

		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/animate/animate.min.css">

		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/ivivu_icons/ivivu_icons.min.css">
		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/animate/animate.min.css">
		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="./Ivivu/res.ivivu.com/hotel/vendor/owlcarousel2/assets/owl.theme.default.min.css">

	</noscript>

	<script>
		function detectBrowser() {
			(function () {
				var ua = navigator.userAgent, tem,
				M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
				if (/trident/i.test(M[1])) {
					tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
					return 'IE ' + (tem[1] || '');
				}
				if (M[1] === 'Chrome') {
					tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
					if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
				}
				M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
				if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);

				navigator.browserName = M[0];
				navigator.browserVersion = M[1];
                //return M.join(' ');
            })();
        }

        detectBrowser();

        var isBrowserSupported = navigator.browserName == 'Chrome' && navigator.browserVersion >= 56;
        if (!isBrowserSupported) {
        	var loadDeferredStyles = function () {
        		var addStylesNode = document.getElementById("deferred-styles");
        		var replacement = document.createElement("div");
        		replacement.innerHTML = addStylesNode.textContent;
        		document.body.appendChild(replacement)
        		addStylesNode.parentElement.removeChild(addStylesNode);
        	};

        	var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        	window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        	if (raf) raf(function () {
        		window.setTimeout(loadDeferredStyles, 0);
        	});
        }

        else window.addEventListener('load', loadDeferredStyles);
    </script>


    <!-- Ureka-Ivivu--->
    <!-- Google Tag Manager (noscript) -->
    
    <!-- End Google Tag Manager (noscript) -->
    <!--- Ureka-Ivivu End -->
    <!-- Global site tag (gtag.js) - Google Ads: 952773342 -->


    <div id="fb-root"></div>
    
    <!-- Facebook Pixel Code -->
    <script>
    	!function (f, b, e, v, n, t, s) {
    		if (f.fbq) return; n = f.fbq = function () {
    			n.callMethod ?
    			n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    		}; if (!f._fbq) f._fbq = n;
    		n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
    		t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
    	}(window,
    		document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

    	fbq('init', '1505476653113156');
    fbq('track', "PageView");</script>
    <noscript>
    	<img height="1" width="1" style="display:none"
    	src="../www.facebook.com/tr-id=1505476653113156-ev=PageView-noscript=1.htm-" />
    </noscript>
    <script src="./Ivivu/res.ivivu.com/hotel/js/commonPixel.js-v=25.1.htm" type="text/javascript"></script>
    <!-- End Facebook Pixel Code -->
    <!-- Load Facebook SDK for JavaScript -->
    

    <!-- End Google Tag Manager -->
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="javascript:if(confirm('http://browsehappy.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='http://browsehappy.com/'">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- BEGIN HEADER -->



<header class="main-header ivivu-main-header">
	<input type="hidden" id="hdhdhdhhdhdhdhdhdhd" />
	<input type="hidden" id="token_change" />
	<nav class="navbar" style="border:0px solid transparent;">
		<div class="container">
			<div class="navbar-header">
				<a href="{{route('Index')}}" class="navbar-brand"> 
					<img src="./Ivivu/res.ivivu.com/hotel/img/ogo.png">
					
				</a>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				data-target="#navbar-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.htm">Khách sạn <span class="sr-only">(current)</span></a></li>
				<li><a href="du-lich/index.htm">Tours</a></li>
				<li><a href="blog/index.htm">Cẩm nang du lịch</a></li>
				<li><a href="du-lich/index.htm">Giới thiệu</a></li>
				<li><a href="">Liên hệ</a></li>
			</ul>
		</div>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- START Member Menu -->
				<li class="right" id="UserLogin">
					<a href="index.htm#" class="dropdown-toggle" data-toggle="dropdown">
						<div class="">
							<div class="img-wrapper">
								<img class="img" src="./Ivivu/res.ivivu.com/hotel/img/account.png">
							</div>
							<span class="username-header">Tài khoản</span>
							<i class="fa fa-angle-down"></i>
						</div>
					</a>
					<ul class="dropdown-menu member-dropdown-menu user-menu-list" role="menu"></ul>
				</li>
				<!-- END Member Menu -->
				<!-- START Payment Login -->
				<li class="dropdown user-login" id="UserMenu">
					<!--add class logged-in-->
					<a href="index.htm#" class="dropdown-toggle " data-toggle="dropdown">
						
					</a>
					<ul class="dropdown-menu member-dropdown-menu" role="menu">

						<!--visible in mobile view-->
						<li class="visible-xs">
							<div class="member-header">
								<div class="member-header__avatar img-wrapper-mobile">
									<img class="img-circle" id="avatarMobi" src="./Ivivu/res.ivivu.com/hotel/img/avatars/avatar-default-white.svg">
								</div>
								<div class="member-header__info">
									<p class="no-margin name max" id="Name"></p>

								</div>
							</div>
						</li>

						<li class="divider visible-xs afterLogin" style="margin-top:0px;"></li>

					</ul>
				</li>
				<!-- END Payment Login -->

				<li class="hidden-xs hidden-sm">
					<div class="hotline">
						<div class="hotline-item">
							<a class="hotline-link" id="DeskHotlineNumber" href="tel:19001870"><i class="fa fa-phone" aria-hidden="true">1900 1870</i></a>
						</div>
						<div class="hotline-item">
							<div class="dropdown hotline-dropdown">
								<p class="hotline-location pull-right dropdown-toggle" data-toggle="dropdown">
									<span class="v-margin-right-5" id="DeskTime"><i class="fa fa-clock-o"></i> 7h30 → 21h</span>
									<i class="fa fa-map-marker"></i> <span class="visible-lg-inline-block" id=""></span> Đà Nẵng<span class="hidden-lg"></span> <i class="fa fa-angle-down"></i>
								</p>
								<ul class="dropdown-menu" role="menu">
									<li onclick="HeaderHotline('SG')">
										<div class="hotline-dd-item active">
											<span class="pull-left v-padding-right-5"> Hồ Chí Minh </span>
											<span class="glyphicon glyphicon-earphone">1900 1870</span>
											<div class="clearfix"></div>
										</div>
									</li>
									<li onclick="HeaderHotline('HN')">
										<div class="hotline-dd-item">
											<span class="pull-left v-padding-right-5"> Hà Nội </span>
											<span class="pull-right vcolor-warning">1900 2045</span>
											<div class="clearfix"></div>
										</div>
									</li>
									<li onclick="HeaderHotline('DN')">
										<div class="hotline-dd-item">
											<span class="pull-left v-padding-right-5"> Đà Nẵng </span>
											<span class="pull-right vcolor-warning">1900 2087</span>
											<div class="clearfix"></div>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</li>
			</ul>

		</div>


		<!-- BEGIN TOPSEARCH -->


		<!-- END TOPSEARCH -->


		<div   class="col-xs-12 header-search-form__outer"  			 style="display:none;">
			<div class="container">
				<div class="searchbox-wrap clearfix">
					<form id="header-search-form" action="tim-kiem/index.htm" method="GET">
						<div class="col-xs-12 header-search-form">
							<div class="col-xs-12 col-sm-5 col-md-5 hotel-div">
								<div class="form-group ">
									<label class="control-label ">Tìm nhanh khách sạn</label>
									<input type="text" class="form-control typeahead " maxlength="255" id="search-header-text" name="q" autocomplete="off"
									placeholder="Nhập tên thành phố, khu vực, khách sạn">

									<input type="hidden" id="linkStore ">
									<div id="header-search-autocomplete" class="search-autocomplete">
										<div class="autocomplete-wrap"></div>
									</div>
								</div>

							</div>
							<div class="col-xs-12 col-sm-5 col-md-5 no-padding search-quantity">
								<div class="col-xs-5 date-div check-in ">
									<div class="form-group has-feedback date-menu-checkin">
										<label class="control-label">Nhận phòng</label>
										<input readonly type="text" class="form-control input-white" maxlength="12" id="datepicker-menu-chkin" name="di" class="datepicker-chkin" value="05-05-2019">
										<span class="fa fa-calendar-o form-control-feedback"></span>
									</div>
								</div>

								<div class="col-xs-2 select-div" style="padding-left:0; padding-right:0;">

									<div class="form-group ">
										<label class="control-label">Số đêm</label>
										<div>
											<select id="datepicker-menu-nights" name="dn" class="form-control" style="border-right-width: 1.5px">
												<option value="1"   selected  				>1</option>
												<option value="2" >2</option>
												<option value="3" >3</option>
												<option value="4" >4</option>
												<option value="5" >5</option>
												<option value="6" >6</option>
												<option value="7" >7</option>
												<option value="8" >8</option>
												<option value="9" >9</option>
												<option value="10" >10</option>
												<option value="11" >11</option>
												<option value="12" >12</option>
												<option value="13" >13</option>
												<option value="14" >14</option>
												<option value="15" >15</option>
												<option value="16" >16</option>
												<option value="17" >17</option>
												<option value="18" >18</option>
												<option value="19" >19</option>
												<option value="20" >20</option>
												<option value="21" >21</option>
												<option value="22" >22</option>
												<option value="23" >23</option>
												<option value="24" >24</option>
												<option value="25" >25</option>
												<option value="26" >26</option>
												<option value="27" >27</option>
												<option value="28" >28</option>
												<option value="29" >29</option>
												<option value="30" >30</option>

												<option value="0">30+</option>
											</select>
											<span class="fa fa-angle-down  select-icon"></span>
										</div>
									</div>

								</div>

								<div class="col-xs-5 date-div check-out ">
									<div class="form-group has-feedback">
										<label class="control-label">Trả phòng </label>
										<input readonly type="text" class="form-control input-white" maxlength="12" id="datepicker-menu-chkout" name="do" class="datepicker-chkout" value="06-05-2019">
										<span class="fa fa-calendar-o form-control-feedback"></span>
									</div>
								</div>




							</div>

							<div class="col-xs-12 col-sm-2 col-md-2 action-div">
								<div class="form-group has-feedback">
									<label class="control-label hidden-xs">&nbsp;</label>
									<button class="btn btn-action btn-block " id="header-search-button">Tìm kiếm</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</nav>

</header>

<ul id="UserNotLogged" style="visibility: hidden; position: absolute;">
	<li><a href="index.htm#" data-toggle="modal" onclick="showRegisterDialog()">Đăng ký</a></li>
	<li><a href="index.htm#" data-toggle="modal" onclick="showLoginDialog()">Đăng nhập</a></li>
</ul>


<ul id="UserLogged" style="visibility: hidden; position: absolute;">
	<li class="visible-xs">
		<div class="member-header">
			<div class="member-header__avatar img-wrapper-mobile">
				<img class="img-circle" src="index.htm-">
			</div>
			<div class="member-header__info">
				<p class="no-margin name max username-header"></p>
				<p class="no-margin description max userMail-header"></p>
			</div>
		</div>
	</li>
	<li class="divider visible-xs" style="margin-top:0px;"></li>
	<li><a href="../member.ivivu.com/dashboard/trips/index.htm">Kỳ nghỉ của tôi</a></li>
	
	<li>
		<a class="col-xs-12 point-menu-padding equal-row" href="../member.ivivu.com/dashboard/points/index.htm">
			<span class="col-xs-6">iVIVUPoint</span>
			<span class="col-xs-6 point-text">
				<span class="userPoint-header"></span> điểm
			</span>
		</a>
	</li>
	<li><a href="../member.ivivu.com/dashboard/profile/index.htm">Hồ sơ của tôi</a></li>
	<li><a href="../member.ivivu.com/dashboard/my-review/index.htm">Nhận xét của tôi</a></li>
	<div class="col-xs-12 logout-btn-wrap">
		<button class="col-xs-12 logout-btn" type="button" onclick="logoutUser();">Đăng xuất</button>
	</div>
</ul> 
<!-- END HEADER -->
<!-- BEGIN BODY -->


<!-- BEGIN HOME SLIDER  -->


<!-- END HOME SLIDER -->
<!-- BEGIN HOME SEARCH -->
<div class="main-home" ng-app="Contracting" ng-controller="homepage.ctrl">

	<script> 
		document.addEventListener("DOMContentLoaded", function (event) {
			if (window.innerWidth <= 768) {
				document.getElementById("home-banner-Url").href = 'javascript:void(0)';
				document.getElementById("home-banner-Url").target = '';
			}
		});
	</script>
	<div class="col-xs-12 no-padding">
		<a class="hero-link" href="khach-san-phu-quoc/khu-nghi-duong-intercontinental-phu-quoc-long-beach/index.htm" id="home-banner-Url" target="_blank">
			<div class="hero-container" style="background-image:url(./Ivivu/Image/iVivu/2019/05/04/15/Slide.jpg)" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="col-xs-12 col-lg-8 no-padding">
								<div class="col-xs-12 no-padding hero-form" id="hero-form">
									<div class="col-xs-12 no-padding">
										<h1 class="hero-heading hero-heading-1">Trải nghiệm kỳ nghỉ tuyệt vời</h1>
									</div>
									<div class="col-xs-12 search-form home-page">
										<div class="row">
											<div class="col-xs-12 v-margin-bottom-15 typeahead-container">
												<div class="col-xs-12 no-padding v_field">
													<div class="input-icon" style="position:absolute;" >
														<i class="icon-ic_ivivu_user_location"></i>
													</div>
													<input id="searchText" style="padding-left:50px" type="text" class="form-control v_field__input search-input typeahead"
													maxlength="200" placeholder="Bạn muốn đi đâu?">
												</div>
											</div>

											<div class="col-xs-12 col-sm-6 dates ">
												<div class="col-xs-6 no-padding check-in">
													<div class="col-xs-12 v_field">
														<div class="v_field__icon-container">
															<i class="vicon vicon-check-in icon"></i>
														</div>
														<div class="v_field__content" ng-hide="DateCheckinStr!=undefined">
															<p class="v_field__text">05-05-2019</p>
															<p class="v_field__description">Chủ nh&#226;̣t</p>
														</div>
														<div class="v_field__content" ng-show="DateCheckinStr!=undefined" ng-cloak>
															<p class="v_field__text"></p>
															<p class="v_field__description"></p>
														</div>
													</div>
													<div class="col-xs-12 no-padding invisible-date-container">
														<label readonly type="text" class="v_field__input check-in-date invisible-date-picker" id="check-in-date-search" value="11-11-2017"></label>
													</div>
												</div>
												<div class="col-xs-6 no-padding check-out">
													<div class="col-xs-12 v_field">
														<div class="nights" ng-hide="NumberNights!=undefined">
															1<i class="vicon vicon-free-night-stay icon"></i>
														</div>
														<div class="nights" ng-cloak ng-show="NumberNights!=undefined">
															<i class="vicon vicon-free-night-stay icon"></i>
														</div>
														<div class="v_field__icon-container">
															<i class="vicon vicon-check-out icon"></i>
														</div>
														<div class="v_field__content" ng-hide="DateCheckoutStr!=undefined">
															<p class="v_field__text">06-05-2019</p>
															<p class="v_field__description">Thứ hai</p>
														</div>
														<div class="v_field__content" ng-show="DateCheckoutStr!=undefined" ng-cloak>
															<p class="v_field__text"></p>
															<p class="v_field__description"></p>
														</div>
													</div>
													<div class="col-xs-12 no-padding invisible-date-container">
														<label type="text" class="v_field__input check-in-date invisible-date-picker" id="check-out-date-search" value="11-11-2017"></label>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-4 rooms" id="search-form-rooms">
												<div class="col-xs-12 v_field">
													<div class="v_field__icon-container">
														<i class="vicon vicon-travelers icon"></i>
													</div>
													<div class="v_field__content" ng-hide="AdultsTotalStr!=undefined">
														<p class="v_field__text">2 người lớn, 0 trẻ em</p>
														<p class="v_field__description">1 Phòng</p>
													</div>
													<div class="v_field__content" ng-show="AdultsTotalStr!=undefined" ng-cloak>
														<p class="v_field__text"> người lớn,  trẻ em</p>
														<p class="v_field__description"> Phòng</p>
													</div>
												</div>

												<div class="col-xs-12 room-popover room-popover-header" data-display="false" style="display: none">
													<div class="col-xs-12 room-popover__inner">
														<div class="col-xs-12 room-popover__item">
															<div class="col-xs-6 room-popover__quantity no-padding">
																<div class="quantity"></div>
																Phòng
															</div>
															<div class="col-xs-6 no-padding text-right">
																<div class="btn-group">
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('room','-',1,RoomConfig.length)"><i class="fa fa-minus"></i></button>
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('room','+',1,RoomConfig.length)"><i class="fa fa-plus"></i></button>
																</div>
															</div>
														</div>
														<div class="col-xs-12 room-popover__item">
															<div class="col-xs-6 room-popover__quantity no-padding">
																<div class="quantity"></div>
																Người lớn
															</div>
															<div class="col-xs-6 no-padding text-right">
																<div class="btn-group">
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('adult','-',RoomNumber.value ,AdultsConfig.length)"><i class="fa fa-minus"></i></button>
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('adult','+',RoomNumber.value,AdultsConfig.length)"><i class="fa fa-plus"></i></button>
																</div>
															</div>
														</div>
														<div class="col-xs-12 room-popover__item">
															<div class="col-xs-6 room-popover__quantity no-padding">
																<div class="quantity"></div>
																Trẻ em
															</div>
															<div class="col-xs-6 no-padding text-right">
																<div class="btn-group">
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('child','-',0,ChildConfig.length)"><i class="fa fa-minus"></i></button>
																	<button type="button" class="btn btn-default btn-sm" ng-click="PlusOrMinusObject('child','+',0,ChildConfig.length)"><i class="fa fa-plus"></i></button>
																</div>
															</div>
														</div>
														<div class="col-xs-12 room-popover__item child-age-selection" ng-show="FilterRooms.RoomsRequest[0].AgeChilds.length>0">
															<p class="v-margin-left-5 v-margin-bottom-5">Độ tuổi trẻ em</p>

															<ul class="child-ages">
																<li class="child-ages__item" ng-repeat="itemAge in FilterRooms.RoomsRequest[0].AgeChilds track by $index">
																	<div class="col-xs-12 no-padding select-child">
																		<select name="name" class="form-control" ng-model="FilterRooms.RoomsRequest[0].AgeChilds[$index]" ng-options="option.label for option in AgeChildConfig track by option.value"></select>

																	</div>
																</li>
															</ul>
														</div>
														<p style="float: right;padding: 0 10px;background: #ebebeb;margin-right: 10px;border-radius: 5px;color: #27bed6;" class="v-margin-left-5 v-margin-bottom-5 close-popup-filter"><i class="fa fa-angle-double-up"></i></p>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-2 ">
												<button ng-click="SearchHotel()" class="btn btn-action btn-block  search-form-button btn-big">
													<b> Tìm <span class="visible-xs-inline-block">kiếm</span></b>
												</button>
											</div>
										</div>
									</div>


								</div>
								<div class="col-xs-12 hidden-xs" style="height:100px">
									&nbsp;
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>