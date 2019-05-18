<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="vi">
<!--<![endif]-->
<head>
	@include('layout.page.link')
</head>
	@include('layout.page.header')
	
	@yield('content')
	
	@include('layout.page.footer')
	<!-- END FOOTER -->
	<!-- BEGIN MODAL -->

	<!-- Login Modal -->
	<div id="LoginModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<p class="first-text">Đăng nhập bằng:</p>
				<div class="col-xs-12 no-padding login-social">
					<div class="col-xs-6 btn-left-div">
						<button class="btn btn-block btn-social btn-facebook" onclick="loginByFacebook()">
							<i class="fa fa-facebook"></i> Facebook
						</button>
					</div>

					<div class="col-xs-6 btn-right-div">
						<button class="btn btn-block btn-social btn-google" id="loginGoogleButton">
							<i class="fa fa-google"></i> Google
						</button>
					</div>
				</div>

				<div class="col-xs-12 separate">
					<div class="col-xs-12 separate__inner">
						<span class="separate__text">Hoặc</span>
					</div>
				</div>

				<form id="loginForm">
					<input type="text" name="IsRedirectMember" style="display: none;" value="false" />
					<div class="col-xs-12 no-padding login-form">
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">
								<label class="control-label hidden-xs">Email / Số điện thoại</label>
								<input type='text' class="form-control input-lg" placeholder="Email / Số điện thoại" name="EmailPhoneDN" required />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-5">
								<label class="control-label hidden-xs">Mật khẩu </label>
								<div class="clearfix"></div>
								<input type='password' class="form-control input-lg" placeholder="Mật khẩu" maxlength="50" pattern=".{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mật khẩu tối thiểu 6 ký tự' : '');" name="PasswordDN" required />
								<small class="text-danger errorMsg"></small>
							</div>
							<span class="pull-right v-margin-bottom-20"><a href="../member.ivivu.com/forgot-pass/index.htm" target="_blank" class="register-link">Quên mật khẩu? </a></span>
						</div>
						<div class="col-xs-12">
							<button type="submit" class="btn btn-login col-xs-12">Đăng nhập</button>
							<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
						</div>

					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- Register Modal -->
	<div id="RegisterModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<p class="first-text">Đăng ký bằng:</p>
				<div class="col-xs-12 no-padding login-social">
					<div class="col-xs-6 btn-left-div">
						<button class="btn btn-block btn-social btn-facebook" onclick="loginByFacebook()">
							<i class="fa fa-facebook"></i> Facebook
						</button>
					</div>

					<div class="col-xs-6 btn-right-div">
						<button class="btn btn-block btn-social btn-google" id="registerGoogleButton">
							<i class="fa fa-google"></i> Google
						</button>
					</div>
				</div>

				<div class="col-xs-12 separate">
					<div class="col-xs-12 separate__inner">
						<span class="separate__text">Hoặc</span>
					</div>
				</div>

				<form id="registerForm">
					<div class="col-xs-12 no-padding login-form">
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">
								<label class="control-label hidden-xs">Email</label>
								<input type='email' class="form-control input-lg" placeholder="Email" name="EmailDK" maxlength="50" validateEmail required />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">
								<label class="control-label hidden-xs">Mật khẩu </label>
								<div class="clearfix"></div>
								<input type="password" class="form-control input-lg" maxlength="50" placeholder="Mật khẩu" pattern=".{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mật khẩu tối thiểu 6 ký tự' : ''); if(this.checkValidity()) form.RePasswordDK.pattern = this.value;" name="PasswordDK" required>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-5">
								<label class="control-label hidden-xs">Xác nhận mật khẩu </label>
								<div class="clearfix"></div>
								<input type="password" class="form-control input-lg" maxlength="50" placeholder="Xác nhận mật khẩu" pattern=".{6,}" title="Mật khẩu tối thiểu 6 ký tự !" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Xác nhận mật khẩu phải giống Mật khẩu' : '');" name="RePasswordDK" required>
								<small class="text-danger errorMsg"></small>
							</div>
						</div>
						<div class="col-xs-12 v-margin-bottom-20">
							<div class="form-group md-checkbox v-margin-bottom-15">
								<input type="checkbox" id="policy-checkbox" name="policy-checkbox">
								<label for="policy-checkbox">Bằng việc tham gia PNVVIVU, tôi đồng ý tất cả <a href="dieu-kien-dieu-khoan/index.htm" target="_blank">điều kiện & điều khoản</a>.</label>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-xs-12">
							<button type="submit" class="btn btn-login col-xs-12">Đăng ký</button>
							<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
						</div>

					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- Get User Modal -->
	<div id="GetUserModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<div class="col-xs-12 img-user">
					<img src="./Ivivu/res.ivivu.com/img/user_mail_phone.png">
				</div>

				<div class="col-xs-12 v-margin-bottom-10">
					Nếu bạn từng giao dịch với PNVVIVU, vui lòng nhập số điện thoại hoặc email đã giao dịch để tích điểm và nhận các ưu đãi hấp dẫn
				</div>

				<form #f="ngForm" novalidate>
					<div class="col-xs-12 no-padding login-form">
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">
								<!-- <label class="control-label hidden-xs">Số điện thoại/ Email</label> -->
								<input type="text" class="form-control input-lg" maxlength="50" placeholder="Số điện thoại/ Email" name="socialInfo" required>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-login col-xs-12" data-dismiss="modal">Bỏ qua</button>
						<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
					</div>
					<div class="col-xs-6">
						<button type="submit" class="btn btn-login btn-solid col-xs-12">Xác nhận</button>
					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- User Success Modal -->
	<div id="UserSuccessModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<div class="col-xs-12 img-user">
					<img src="./Ivivu/res.ivivu.com/img/user_success.png">
				</div>

				<div class="col-xs-12 v-margin-bottom-25">
					Xin chúc mừng, bạn đã là thành viên vàng của PNVVIVU. Bạn đang có 750 điểm
				</div>

				<div class="col-xs-6">
					<button class="btn btn-login col-xs-12" data-dismiss="modal">Bỏ qua</button>
					<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
				</div>
				<div class="col-xs-6">
					<button class="btn btn-login btn-solid col-xs-12">Tìm hiểu thêm</button>
				</div>

			</div>
		</div>
	</div>

	<!-- Social Login Info Modal -->
	<div id="GetSocialModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<div class="col-xs-12 img-user">
					<img src="./Ivivu/res.ivivu.com/img/user_mail_phone.png">
				</div>

				<div class="col-xs-12 v-margin-bottom-10">
					Tài khoản của bạn không có email hoặc không để ở chế độ công khai.
					<br><br>
					Vui lòng cung cấp email để PNVVIVU có thể xác định và bảo mật tài khoản của bạn:
				</div>

				<form #f="ngForm" novalidate (ngSubmit)="getSocialEmail(f)">
					<div class="col-xs-12 no-padding login-form">
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">

								<!-- <label class="control-label hidden-xs">Số điện thoại/ Email</label> -->
								<input type="email" class="form-control input-lg" maxlength="50" placeholder="Nhập email" id="socialEmail" required>
								<small class="text-danger errorMsg"></small>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-login col-xs-12" data-dismiss="modal">Bỏ qua</button>
						<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
					</div>
					<div class="col-xs-6">
						<button type="button" onclick="getSocialEmail()" class="btn btn-login btn-solid col-xs-12">Xác nhận</button>
					</div>
				</form>

			</div>



		</div>
	</div>

	<!-- No Access Email Social Modal -->
	<div id="GetValidUser" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="close-modal-button" data-dismiss="modal">
				<span class="icon-ic_ivivu_user_close"></span>
			</div>

			<!-- Modal content-->
			<div class="modal-content row">
				<div class="col-xs-12 img-user" style="text-align: center;">
					<img src="./Ivivu/res.ivivu.com/img/user_mail_phone.png">
				</div>

				<div class="col-xs-12 v-margin-bottom-10">
					Nếu bạn đã từng giao dịch với PNVVIVU, vui lòng nhập số điện thoại hoặc email đã giao dịch để tích điểm và nhận các ưu đãi hấp dẫn
				</div>

				<form>
					<div class="col-xs-12 no-padding login-form">
						<div class="col-xs-12">
							<div class="form-group v-margin-bottom-20">
								<label class="control-label hidden-xs">Số điện thoại/ Email</label>
								<input type="email" class="form-control input-lg" maxlength="50" placeholder="Số điện thoại/ Email" id="emailOrPhone" required>
								<small class="text-danger errorMsg"></small>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<button class="btn btn-login col-xs-12" data-dismiss="modal" onclick="mapPhoneOrEmail()">Bỏ qua</button>
						<!-- <p class="text-center">Chưa có tài khoản? <a href="index.htm#" class="register-link">Đăng ký tại đây <i class="fa fa-arrow-right"></i></a></p> -->
					</div>
					<div class="col-xs-6">
						<button type="button" onclick="mapPhoneOrEmail()" class="btn btn-login btn-solid col-xs-12">Xác nhận</button>
					</div>
				</form>

			</div>
		</div>
	</div>

	<!-- END MODAL -->
	<!-- BEGIN PRELOADER -->
	<div id="preloader" class="hide">
		<i class="preloader"></i>
		<h4 class="text-center">Xin Quý khách đợi trong giây lát</h4>

	</div>

	<!-- END PRELOADER -->
	<!-- BEGIN GLOBAL -->
	<div id="PRG" class="hide">
		<div class="head">
			<b>Vui lòng để lại thông tin yêu cầu đặt phòng khách sạn của Quý khách.</b><br />
			<small>

				Giá chỉ mang tính chất tham khảo và không áp dụng vào các ngày lễ tết. Chúng tôi sẽ liên hệ lại trong 24h.

			</small>
		</div>
		<div class="body">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pad-l-0 pad-r-10">
				<ul class="pad-b-10">
					<li class="font-size-12">Họ &amp; Tên: <span class="color-dred content-asterisk"></span></li>
					<li>
						<input type="text" name="modal-cusname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="Nguyễn Văn A" tabindex="1" />
					</li>
				</ul>
				<ul class="pad-b-10">
					<li class="font-size-12">Số điện thoại: <span class="color-dred content-asterisk"></span></li>
					<li>
						<input type="text" name="modal-cusfone" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="(+84) 839 308 290" tabindex="2" />
					</li>
				</ul>
				<ul class="pad-b-10">
					<li class="font-size-12">Email: <span class="color-dred content-asterisk"></span></li>
					<li>
						<input type="text" name="modal-cusmail" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="vidu@ivivu.com" tabindex="3" />
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pad-l-0 pad-r-10">
				<ul class="pad-b-10">
					<li class="font-size-12">Vùng/thành phố yêu cầu:</li>
					<li>
						<input type="hidden" name="modal-regionid" value="" />
						<input type="text" name="modal-regioname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" readonly="readonly" />
					</li>
				</ul>
				<ul class="pad-b-10">
					<li class="font-size-12">Tên khách sạn:</li>
					<li>
						<input type="hidden" name="modal-hotelid" value="" />
						<input type="text" name="modal-hotelname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" readonly="readonly" />
					</li>
				</ul>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pad-l-0 pad-r-4">
					<ul class="pad-b-10">
						<li class="font-size-12">Ngày nhận phòng:</li>
						<li class="date-modal-checkin">
							<input type="text" name="datepicker-modal-chkin" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" value="05-05-2019" tabindex="4" />
							<input type="hidden" name="datepicker-modal-nights" value="1" />
							<i class="sprites icn-datecheckin"></i>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pad-lr-0">
					<ul class="pad-b-10">
						<li class="font-size-12">Ngày trả phòng:</li>
						<li class="date-modal-checkin">
							<input type="text" name="datepicker-modal-chkout" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" value="06-05-2019" tabindex="5" />
							<i class="sprites icn-datecheckout"></i>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix">
				<ul class="pad-r-10">
					<li class="font-size-12">Yêu cầu khác:</li>
					<li>
						<textarea name="modal-other" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full txtarea-resize-none" placeholder="VD: chi phí dự kiến, số người ở, dịch vụ phòng..." tabindex="6"></textarea>
					</li>
				</ul>
			</div>
		</div>
		<div class="foot">
			<button type="button" class="prg-submit btn-orange pad-tb-4 pad-lr-10 uppercase" onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'YCG', 'eventAction': 'Click', 'eventLabel': 'Thành công' }); dataLayer.push({ 'event': 'priceRequestSuccess', 'eventCatelogy': 'tracking', 'eventAction': 'clickButtonRequestSuccess', 'eventLabel': 'priceRequestSuccessLabel' });">Gửi yêu cầu</button>
		</div>
	</div>
	<div id="MMP" class="hide">
		<div class="head">
			<div class="vmapModalHeader">
				<button type="button" class="close vmapCloseButton" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="vspacingleft15 vspacingbottom10">
					<span class="vmapName vspacingright15">Bản đồ</span>
					<span class="vmapLocation" id="vmapLocation"></span><span class="vmapVerticalLine"></span><span class="vmapHotelName" id="vmapHotelName"></span>
				</div>
			</div>
		</div>
		<div class="body">
			<div id='modalmap' class="vmapModalBody" style='width: 100%; height: 420px;'></div>
		</div>
		<div class="foot"><div class="vspacingbottom15"></div></div>
	</div>
	<!-- END GLOBAL -->
	<!-- BEGIN JAVASCRIPT -->
	<script>
		if (navigator.userAgent.indexOf("MSIE") != -1) {

			var txt = "Rất tiếc! chúng tôi không hỗ trợ trên trình duyệt IE, quý khách vui lòng thử lại với trình duyệt khác.";

			var ie = document.createElement('div');
			ie.setAttribute("style", "width:100%;height:100%;zindex:9999;text-align:center; background:rgba(240,240,240,.7); position: fixed; top:0px; left:0px;");

			var label = document.createElement('label');
			label.innerHTML = txt;
			ie.appendChild(label);
			document.body.innerHTML = '';
			document.body.appendChild(ie);
		}
	</script>
	<script src="assets/vendor/jquery-1.11.2.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/moment/moment.js"></script>
	<script src="assets/vendor/moment/locale/vi.js"></script>
	<script src="assets/vendor/bootstrap.datetimepicker.min.js"></script>
	<script src="assets/vendor/jquery.cookie.js"></script>
	<script src="assets/vendor/mcustomscrollbar/jquery.mcustomscrollbar.min.js"></script>
	<script src="assets/vendor/gmap3.min.js"></script>
	<script src="../maps.google.com/maps/api/js-key=AIzaSyC7Cy4YuL1qPVfr1bX4zMgAyeLC6xbj7HE-sensor=false-language=vi.htm"></script> 

	<script src="./Ivivu/res.ivivu.com/hotel/vendor/sweetalert/sweet-alert.min.js" type="text/javascript"></script>

	<script src="./Ivivu/res.ivivu.com/hotel/vendor/jquery.royalslider.min.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/vendor/owlcarousel2/owl.carousel.min.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/vendor/bootstrap-daterangepicker/min/daterangepicker-min.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/vendor/typeahead/min/typeahead-min.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/publicHelper.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/angular/angular.min.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/angular/angular-route.min.js"></script>
	<script>
		(function () {
			if (typeof window.CustomEvent === "function") {
				return false;
			}

			function CustomEvent(event, params) {
				params = params || { bubbles: false, cancelable: false, detail: undefined };
				var evt = document.createEvent("CustomEvent");
				evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
				return evt;
			}

			CustomEvent.prototype = window.Event.prototype;
			window.CustomEvent = CustomEvent;
		})();

		// Listen to the Initialized event
		window.addEventListener('LazyLoad::Initialized', function (e) {
			// Get the instance and puts it in the lazyLoadInstance variable
			lazyLoadInstance = e.detail.instance;
		}, false);

		// Set the lazyload options for async usage
		lazyLoadOptions = {
			/* your lazyload options */
		};
	</script>
	<script src="./Ivivu/res.ivivu.com/hotel/vendor/lazyload/lazyload.min.js"></script>



	<script src="./Ivivu/res.ivivu.com/hotel/js/static.min.js-v=25.1.htm" type="text/javascript"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/common.min.js-v=25.1.htm" type="text/javascript"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/searchbox.min.js-v=25.1.htm" type="text/javascript"></script>
	<script src="../apis.google.com/js/api-client.js"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/member.min.js-v=25.1.htm"></script>

	<script src="./Ivivu/res.ivivu.com/hotel/js/contractingfactory.min.js-v=25.1.htm"></script> 
	<script src="./Ivivu/res.ivivu.com/hotel/js/homepage.min.js-v=25.1.htm"></script>
	<script src="./Ivivu/res.ivivu.com/hotel/js/countdown.min.js"></script>
	<script>
		var blockScrollUpDown = false;
		var classname = document.getElementsByClassName("owl-carousel"); 
		//var mc = new Hammer(document); 
		//// Handle sự kiện scroll trái phải
		//mc.on("swipeleft swiperight panleft panright", function (ev) {
		//	blockScrollUpDown = true;
		//});

		//// Handle sự kiện scroll lên xuống
		//mc.on("swipeup swipedown panup pandown", function (ev) {
		//	blockScrollUpDown = false;
		//});

		// Thêm sự kiện khi touch cho tất cả các Owl Slider
		for (var i = 0; i < classname.length; i++) {
			classname[i].addEventListener('touchmove', function (evt) {
				if (blockScrollUpDown) {
					evt.preventDefault();
				}
			}, {
				passive: false
			});
		}
		setTimeout(function () {
			var owl = $('.owl-carousel-promotion');
			var height = owl.find('.item').innerHeight();
			owl.parent().find('.item-placeholder-loading').innerHeight(height);
			owl.on('initialize.owl.carousel', function (event) {
			});
			owl.on('drag.owl.carousel', function (e) { 
				blockScrollUpDown = true;
				if ((e.item.count - 2) <= e.item.index) {
					$(e.target.firstElementChild).find('.owl-stage').addClass('haft-right');
				}
				else {
					$(e.target.firstElementChild).find('.owl-stage').removeClass('haft-right');
				}
				
			});
			owl.on('dragged.owl.carousel', function (e) {
				blockScrollUpDown = false;
				owl.trigger('stop.owl.autoplay');
			});
			owl.on('initialized.owl.carousel', function (event) {
				//setTimeout(function () {
					owl.parent().find('.item-placeholder-loading').hide();
					owl.find('.item').show();
				//owl.trigger('next.owl.carousel');
				//owl.trigger('prev.owl.carousel');
				//}, 100);
			}).owlCarousel({
				margin: 15,
				stagePadding: 0,
				smartSpeed: 450,
				dots: true,
				items: 1,
				lazyLoad: true,
				autoHeight: true,
				autoHeightClass: 'owl-height',
				autoplay: true,
				autoplayTimeout: 10000,
				autoplayHoverPause: true,
				loop: false,
				responsiveClass: true,
				responsive: {
					0: {
						stagePadding: 50,
						dots: false,
						autoplayHoverPause: true,
						autoplay: false,
					},
					600: {
						stagePadding: 100,
						autoplay: false,
						autoplayHoverPause: true,
						dots: false,
					},
					1000: {
						stagePadding: 50,
						dots: false,
						autoplay: false,
						autoplayHoverPause: true
					},
					1200: {
						stagePadding: 0
					}
				}
			});
		}, 500)


		var owlmood = $('.owl-carousel-mood');
		var height = owlmood.find('.item').innerHeight();
		owlmood.parent().find('.item-placeholder-loading').innerHeight(height);
		owlmood.on('initialize.owl.carousel', function (event) {
		});
		owlmood.on('drag.owl.carousel', function (e) { 
			blockScrollUpDown = true;
			if ((e.item.count - 2) <= e.item.index) {
				$(e.target.firstElementChild).find('.owl-stage').addClass('haft-right');
			}
			else {
				$(e.target.firstElementChild).find('.owl-stage').removeClass('haft-right');
			}
			
		});
		owlmood.on('dragged.owl.carousel', function (e) {
			blockScrollUpDown = false;
			owlmood.trigger('stop.owl.autoplay');

		});
		owlmood.on('initialized.owl.carousel', function (event) {
			owlmood.parent().find('.item-placeholder-loading').hide();
			owlmood.find('.item').show();
			//owlmood.trigger('next.owl.carousel');
			//owlmood.trigger('prev.owl.carousel');
		}).owlCarousel({
			margin: 15,
			smartSpeed: 450,
			dots: false,
			items: 4,
			autoHeight: true,
			autoHeightClass: 'owl-height',
			autoplay: false,
			autoplayHoverPause: true,
			loop: false,
			lazyLoad: true,
			responsiveClass: true,
			nav: false,
			responsive: {
				0: {
					stagePadding: 50,
					items: 1, 
					autoplay: false,
					autoplayHoverPause: true
				},
				600: {
					stagePadding: 100,
					items: 2, 
					autoplay: false,
					autoplayHoverPause: true
				},
				1000: {
					stagePadding: 50,
					items: 3, 
					loop: false,
					autoplay: false,
					autoplayHoverPause: true,
				},
				1200: {
					stagePadding: 0,
					items: 4,
					//nav: true,
					loop: false,
					autoplay: false,
					autoplayHoverPause: true
				}
			},
			navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>"
			]
		});
		//Lazyload Image
		var myLazyLoad = new LazyLoad({
			elements_selector: ".lazy"
		});
	</script>




	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "index.htm",
			"name": "iVIVU.com",
			"potentialAction": {
			"@type": "SearchAction",
			"target": "https://www.ivivu.com/tim-kiem?q={search_term_string}",
			"query-input": "required name=search_term_string"
		}
	}
</script>

<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"url": "index.htm",
		"logo": "./Ivivu/res.ivivu.com/hotel/img/logo-fb.png",
		"sameAs" : [
		"https://www.facebook.com/iVIVU",
		"https://www.youtube.com/channel/UC7_UHi9BBHFXJViCQEcplQg",
		"https://plus.google.com/+Ivivudotcom",
		"https://twitter.com/ivivudotcom",
		"https://www.instagram.com/ivivu/"
		]
	}
}
</script>

<script>
	$('#homepage-search-icon').remove();
		//Script sample for new search
		$(document).ready(function () {

			$(".hero-link").click(function (e) {
				var specifiedElement = document.getElementById('hero-form');
				var isClickInside = specifiedElement.contains(e.target);
				if (isClickInside) {
					e.preventDefault();
				}
			});

			function showSearchRoomDetails(show) {
				if (show) {
					$(".room-popover").data("display", true);
					$(".room-popover").css("display", "block");
				} else {
					$(".room-popover").data("display", false);
					$(".room-popover").css("display", "none");
				}
			}

			$(".rooms .v_field,  .close-popup-filter").click(function () {
				var display = $(".room-popover").data("display");
				showSearchRoomDetails(!display);
			});

			function checkClickOutsideRooms() {
				var specifiedElement = document.getElementById('search-form-rooms');
				document.addEventListener('click', function (event) {
					var isClickInside = specifiedElement.contains(event.target);
					if (!isClickInside) {
						showSearchRoomDetails(false);
					}
				});
			}

			checkClickOutsideRooms();
		});
		var hots =[];
		hots.push({"Name": "Đà Lạt", "Link": "khach-san-da-lat/index.htm", "Description": "132", "Image": "./Ivivu/Image/iVivu/2018/10/18/23/undefined-60x60.jpg"})
		hots.push({"Name": "Vũng Tàu", "Link": "khach-san-vung-tau/index.htm", "Description": "86", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-6-60x60.jpg"})
		hots.push({"Name": "Nha Trang", "Link": "khach-san-nha-trang/index.htm", "Description": "179", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-1-60x60.jpg"})
		hots.push({"Name": "Phan Thiết", "Link": "khach-san-phan-thiet/index.htm", "Description": "93", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-2-60x60.jpg"})
		hots.push({"Name": "Đà Nẵng", "Link": "khach-san-da-nang/index.htm", "Description": "226", "Image": "./Ivivu/Image/iVivu/2017/05/18/14/da-nang-home-60x60.jpg"})
		hots.push({"Name": "Phú Quốc", "Link": "khach-san-phu-quoc/index.htm", "Description": "212", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-3-60x60.jpg"})
		hots.push({"Name": "Sapa", "Link": "khach-san-sapa/index.htm", "Description": "57", "Image": "./Ivivu/Image/iVivu/2018/10/18/23/undefined-1-60x60.jpg"})
		hots.push({"Name": "Hội An", "Link": "khach-san-hoi-an/index.htm", "Description": "178", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-60x60.jpg"})
		hots.push({"Name": "Quy Nhơn", "Link": "khach-san-quy-nhon/index.htm", "Description": "15", "Image": "./Ivivu/Image/iVivu/2018/10/15/19/undefined-4-60x60.jpg"})

	</script>
	<script>

		String.prototype.replaceAll = function (search, replacement) {
			var target = this;
			return target.replace(new RegExp(search, 'g'), replacement);
		};

		function cleanWords(stringToClean) {
			stringToClean = publicHelper.remove_unicode($.trim(stringToClean.toLowerCase()));
			stringToClean = stringToClean.replaceAll('-', ' ');
			stringToClean = stringToClean.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
			return stringToClean;
		}

		function matcher(query, data, syncResults) {
			if (!publicHelper.isBlank(query)) {
				var matches = [];
				query = cleanWords(query);
				substrRegex = new RegExp(query, 'i');

				$.each(data, function (i, object) {
					var name = cleanWords(object.Name);
					if (substrRegex.test(name)) {
						matches.push(object);
					}

					/*if (fullTextCompare(query, object.Name)) {
					 matches.push(object);
					}*/
				});
				syncResults(matches);
			}
		}


	</script>



	<!-- END JAVASCRIPT -->
	<!-- Facebook Tracking Event Section -->

	<!--Facebook SDK-->
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=338156189903178";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--End Facebook SDK-->
		<!-- End Facebook Tracking Event Section -->
		<!-- Start of LiveChat (www.livechatinc.com) code -->

		<!-- End of LiveChat code -->
		<!--Start of Zopim Live Chat Script-->

		<!--End of Zopim Live Chat Script-->
		<script>
			$(function () {
				window.onload = function () {
					var CheckCookie = $.cookie("ivivu.login");
					if (CheckCookie == "ok") {
						$(".login").show();
						$(".logout").hide();
					} else {
						$(".login").hide();
						$(".logout").show();
					}
				};

				function addQueryString(uri, parameters) {
					var delimiter = (uri.indexOf('?') == -1) ? '?' : '&';
					for (var parameterName in parameters) {
						var parameterValue = parameters[parameterName];
						uri += delimiter + encodeURIComponent(parameterName) + '=' + encodeURIComponent(parameterValue);
						delimiter = '&';
					}
					return uri;
				}

				$('#loginLink').click(function () {

					var authorizeUri = '../login.ivivu.com/OAuth/Authorize/index.htm';
					var nonce = 'my-nonce';
					var uri = addQueryString(authorizeUri, {
						'client_id': '12345678',
						'redirect_uri': 'home/ssologin/index.htm',
						'state': nonce,
						'scope': 'bio notes',
						'response_type': 'token',
					});

					window.loginDone = function () {
						loginWindow.close();
						location.reload();
					}

					var loginWindow = window.open(uri, 'Authorize', 'width=780,height=480');
					return false;
				});

			});
			$(".home-search").click(function (e) {
				if (e.target == $(".search-box")) return;
				window.location = $(this).find(".banner-link").attr("href");
            //window.open($(this).find(".banner-link").attr("href"));
            //return false;
            var evt = e || window.event;
            e.stopPropagation();
        });
			$(".searchbox").mouseenter(function () {
				var title = $(this).attr("title");
				$(this).attr("tmp_title", title);
				$(this).attr("title", "");
			});
			$(".searchbox").mouseleave(function () {
				var title = $(this).attr("tmp_title");
				$(this).attr("title", title);
			})
			$(".searchbox").click(function (e) {
            //return false;
            var evt = e || window.event;
            e.stopPropagation();
            //window.event.stopPropagation();
        });

    </script>

    <!--header hotline-->
    <script>
        //dropdown hotline
        $(document).ready(function () {
        	$('.dropdown-toggle').dropdown();

        });
    </script>

    <!-- Modal from button Lấy giá tốt -->
    <style>

</style>



<div class="modal fade login-modal" id="login-modal">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Đăng nhập</h4>
			</div>
			<div class="modal-body">
				<div class="row login-row">
					<div class="alert alert-warning" id="show_error_login" style="font-size:12px;display:none"></div>
					<form id="loginform" role="form">
						<div class="col-xs-12 login-form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group has-feedback">
										<label class="control-label hidden-xs">Email</label>
										<input type='text' class="form-control input-lg " maxlength="50" id="namelogin"  name="username" value="" placeholder="Địa chỉ Email " />
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group has-feedback">
										<label class="control-label hidden-xs">Mật khẩu</label>

										<div class="clearfix"></div>
										<input type='password' class="form-control input-lg" maxlength="50"  id="password" name="password" placeholder="Mật khẩu" />
									</div>
								</div>

								<div class="col-xs-12">
									<div class="box_loading loading_loading display-none" id="show_loading"></div>
									<button  id="btnlogin" type="button" href="javascript:void(0)" class="btn btn-warning btn-block btn-login btn-action">Đăng nhập</button>

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</body>
</html>