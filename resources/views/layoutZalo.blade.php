   <!-- $dataColor =  "#1a214f"; -->
@php
   $dataColor  = null;
   $bannerPage = null;
   
    if (isset($globalColor)) {
        $dataColor = $globalColor->mainColor;

    }
    else 
    {
        $dataColor = "#1a214f";
    }
   

    if (isset($globalData) && isset($globalData->banner)) {


        $bannerPage = $globalData->banner;

       
        
    }
    else 
    {
        $bannerPage =   new \stdClass();
        $bannerPage->imageBannerDesktop= "https://api-soida.applamdep.com/image_brand/applamdep1320 (1).png";
        $bannerPage->imageBannerMobile  = "https://api-soida.applamdep.com/image_brand/applamdep1320 (1).png";
        
    }





   
    $dataUserSales = session('dataCompany', null);

    
    $beautyData = session('beautyData', null);
    

    $dataUser = null;


        if($dataUserSales)
        {
            $dataUser = $dataUserSales->data;

           
        }
    
 

 
 
@endphp
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/status.css">
    <link rel="stylesheet" href="/css/soidanew.css">
    <link rel="stylesheet" href="/css/reponsive.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/button.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/table.css">
    <link href='//hstatic.net/0/0/global/design/plugins/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'  media='all'  />

<link href='//theme.hstatic.net/200000380563/1001052428/14/styles.css?v=578' rel='stylesheet' type='text/css'  media='all'  />
    <style> 
    
        :root{
            --main_color : {{$dataColor}};
            --color_button_dark: {{$dataColor}};
            --color_button_light: {{$dataColor}};
            --color_title: {{$dataColor}};
            --color_title_section: {{$dataColor}};
            --color_letter_white:{{$dataColor}};
            --main_letter_dark: {{$dataColor}};
            --main_letter_blue: {{$dataColor}};
            --gralident1: {{$dataColor}};
            --gralident2: {{$dataColor}};
            --white: {{$dataColor}};
            --circle-small: {{$dataColor}};
            --bg-white: {{$dataColor}};
            --black-50: {{$dataColor}};
            --success_color: #3bb54a;
            --error_color: #3d0d13;
        }
        .recomendProduct p {
            color: {{$dataColor}} !important; 
        }
        .text-center-box{
            color: {{$dataColor}} !important;
        }
        .description-text p{
           color: {{$dataColor}} !important; 
        }
        .hadernav span {
            color: {{$dataColor}} !important; 
        }
        .account_hover a {
            color: {{$dataColor}} !important; 
        }
        .rule{
        
           
        }

        #footer {
position: relative;
	color:#67BAB0 !important;
	background-color:#0B5963;
	font-size: 13px;

}


.footer-copyright{
	background-color:#063137;
	padding: 15px 0px;
	font-size: 12px;
}
.footer-copyright p {
	margin: 0;
}
#footer .title{
	color: #ffffff;
	text-transform: uppercase;
	font-weight: normal;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: normal;
	text-align: left;
	margin-top: 14px;
	overflow: hidden;
	line-height: 30px;
}
#footer .widget-wrapper ul{
	margin-bottom: 0;
}
#footer  a{
	color: #67BAB0;
}
#footer  a:hover{
	color: #ffffff;
	text-decoration:none;
}
.footer-bottom {
	padding-top: 40px;
	padding-bottom: 20px;
}


#footer .about_us .message {
	margin-bottom: 15px;
	padding: 0;
}

#footer strong, #footer b {
	color:#ffffff;
}

#footer .widget-wrapper ul {
	margin-bottom: 0;
	padding-left: 0;
	list-style: none;
}

#footer .about_us ul li {
	padding: 0;
	line-height: 30px;
}

#footer .about_us i {
	margin-right: 7px;
}
#footer .list-styled > li {
	padding: 0;
	line-height: 15px;
	overflow: hidden;
}
#footer .list-styled > li > a {
	padding: 5px 0;
	display: inline-block;
	position: relative;
	-webkit-transition: all 0.25s ease-out;
	-moz-transition: all 0.25s ease-out;
	-o-transition: all 0.25s ease-out;
	-ms-transition: all 0.25s ease-out;
	transition: all 0.25s ease-out;
}

#footer {
	position: relative;
	color:#67BAB0;
	background-color:#0B5963;
	font-size: 13px;
}
.footer-copyright{
	background-color:#063137;
	padding: 15px 0px;
	font-size: 12px;
}
.footer-copyright p {
	margin: 0;
}
#footer .title{
	color: #ffffff;
	text-transform: uppercase;
	font-weight: normal;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: normal;
	text-align: left;
	margin-top: 14px;
	overflow: hidden;
	line-height: 30px;
}
#footer .widget-wrapper ul{
	margin-bottom: 0;
}
#footer  a{
	color: #67BAB0;
}
#footer  a:hover{
	color: #ffffff;
	text-decoration:none;
}
.footer-bottom {
	padding-top: 40px;
	padding-bottom: 20px;
}


#footer .about_us .message {
	margin-bottom: 15px;
	padding: 0;
}

#footer strong, #footer b {
	color:#ffffff;
}

#footer .widget-wrapper ul {
	margin-bottom: 0;
	padding-left: 0;
	list-style: none;
}

#footer .about_us ul li {
	padding: 0;
	line-height: 30px;
}

#footer .about_us i {
	margin-right: 7px;
}
#footer .list-styled > li {
	padding: 0;
	line-height: 15px;
	overflow: hidden;
}
#footer .list-styled > li > a {
	padding: 5px 0;
	display: inline-block;
	position: relative;
	-webkit-transition: all 0.25s ease-out;
	-moz-transition: all 0.25s ease-out;
	-o-transition: all 0.25s ease-out;
	-ms-transition: all 0.25s ease-out;
	transition: all 0.25s ease-out;
}


.group-input input[type="email"] {
    -webkit-appearance: none;
    color: #000000;
    outline: none !important;
    height: 32px;
    padding: 0 12px !important;
    font-weight: normal;
    vertical-align: top;
    background-color: #ffffff;
    background-image: none;
    filter: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    border: 1px solid #e5e5e5;
    color: inherit;
    padding: 10px 10px 10px 5px !important;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background: transparent;
    margin-bottom: 0;
    height: 36px;
}

.group-input input, .group-input .input {
    color: inherit;
    padding: 10px 10px 10px 5px !important;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #e0e0e0;
    background: transparent;
    margin-bottom: 0;
    height: 36px;
}

.group-input button {
    border: 0;
    background: none;
    position: absolute;
    right: 5px;
    top: 10px;
    outline: none;
    color: #67BAB0;
    padding-left: 0;
    padding-right: 0;
    font-size: 20px;
}

#widget-social {
    display: inline-block;
    margin-top: 24px;
}
#footer .widget-wrapper ul {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}

.social-icons ul {
    margin-bottom: 0;
    margin-left: 0;
    font-size: 0;
}
.list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
}
.list-inline {
    display: inline-flex;
}
    </style>

    <style>
        /* LEFT FIXED SIDEBAR */

.left-sidebar {
    position: fixed;
    left: 30px;
    bottom: 100px;
    z-index: 30;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.left-sidebar a {
    display: block;
    width: 45px;
    height: 45px;
    margin-bottom: 15px;
    transition: ease-in-out .3s all;
}

.left-sidebar a:hover {
    transform: scale(1.25);
}


    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('header')
    
</head>

<body>

    <script>
        var isLogin = false;

        var turnOnGame = false;

        var slug;
    </script>

    @if (Session()->has('dataCompany'))
    <script>
        var isLogin = true;
    </script>
    @endif
   

    @if (Session()->has('turnOnGame'))
    <script>
         turnOnGame = true;
         
    </script>
    @endif

    @if (Session()->has('dataCompany'))
            @include('profile.update')
            @include('profile.history')
            @include('profile.isVoucher')
            @include('loginZalo.login2')
    @else
            @include('profile.update')
            @include('profile.history')
            @include('profile.isVoucher')
            @include('loginZalo.login2')

    @endif

    @include('loginZalo.login')
    <div class="content-page">

    <div class="content-plugin">
    <div class="banner">


    @if ($agent->isMobile())
  
        <img id ="bannerId" src="{{$bannerPage->imageBannerMobile}}">
    @else 

         <img id ="bannerId" src="{{$bannerPage->imageBannerDesktop}}">
    @endif

  

   
</div>

 
<div class="box-position-header">
    <div class="position_header">
        <div class="banner_header flex-center-space">
            <div class="banner__header--left" style ="width:40%">
                <a href ="javascript:void(0)" onclick="openHomePage()">
<svg width="24px" id="Layer_1" fill="{{$dataColor}}" style="enable-background:new 0 0 16 16;" version="1.1" 
    viewBox="0 0 16 16" width="16px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path d="M15.45,7L14,5.551V2c0-0.55-0.45-1-1-1h-1c-0.55,0-1,0.45-1,1v0.553L9,0.555C8.727,0.297,8.477,0,8,0S7.273,0.297,7,0.555  L0.55,7C0.238,7.325,0,7.562,0,8c0,0.563,0.432,1,1,1h1v6c0,0.55,0.45,1,1,1h3v-5c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1v5h3  c0.55,0,1-0.45,1-1V9h1c0.568,0,1-0.437,1-1C16,7.562,15.762,7.325,15.45,7z"/>
</svg>    
                 </a>
               
            </div>
            <div class="flex-center banner__header--right">
                <div class="hoverBlock_form_account relative">

           
                    @if (session()->has('dataCompany'))
                    <div class="account_hover">
                        <a href="javascript:void(0)" class="btn btn_nav scroll-nav-font navbar-a"
                        style="margin:auto;box-shadow:none">
                        @if(isset($dataUser->name))
                        {!!$dataUser->name!!}
                        @else
                        Tài khoản
                        @endif
                    </a>
                        <div class="status-form-function-user position_form_information_user">
                            <div class="form-function-user">
                                <div>
                                    <p id="active-form-information-user">Thông tin cá nhân</p>
                                </div>
                                {{-- <p onclick="openPageHistory()">Lịch sử soi da</p> --}}
                                <a onclick="openSoida()">Soi da online </a>
                                <hr />
                                <div class="flex-center" onclick="questionLogout()">
                                    <p  style="color:var(--main_color)">
                                        Đăng xuất</p>
                                    <svg style="width:16px !important; height:16px !important"
                                        onclick="logoutUser()" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="var(--main_color)"
                                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                            @if($slug !="bibabo")
                                <div class="flex" >
                                     <a  id ="poupgameJoin" class ="popupgame" style="display:none" onclick ="showRule()" href ="javascript:void(0)" >Luật chơi</a>
                                     <a onclick="ToggleDisplayLogin('.status-modal-account',true,'Để xem Nhật ký')"
                                        href="javascript:void(0)"
                                        id="status__text__login"
                                        class=" btn_nav btn_nav-no-after navbar-a navbar-a"
                                        style="margin:auto;box-shadow:none; display: inline-block;">
                                      
                                        Để xem Nhật ký  
                                        {{-- <i class="fa fa-gift" style="font-size:20px;color:red;"></i> --}}
                                    </a>
                    
                                   

                                  
                                    <div class="hover-after-login" >
                                        <a id="name_after_login" href="javascript:void(0)"
                                            
                                            class=" btn_nav  navbar-a navbar-a"
                                            style="margin:auto;box-shadow:none">
                                            
                                        </a>
                                        <div class="status-form-after-login position_form_information_user">
                                            <div class="form-function-user">
                                                <p onclick="reloadWeb()">Click để xem thông tin</p>
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
                            @endif
                    


                    @endif
                    <div class="indicator"></div>
                </div>
                @if (Session()->has('dataCompany'))
                <a class="hover_historySoida_a" href="javascript:void(0)"
                    onclick="openPageHistory()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10L8 16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 12V16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 8V16" stroke="{{ $dataColor }}" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <rect x="3" y="4" width="18" height="16" rx="2"
                            stroke="{{ $dataColor }}" stroke-width="2" />
                    </svg>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

@php

   if(isset($infobeauty) )
   {
    $turnOnGameBeauty = $infobeauty->status == "1";
    $scoreDis = $infobeauty->score;
    $scoreMaxDis = $infobeauty->scoreMax;
   }
   else 
   {
    $turnOnGameBeauty = "1";
    $scoreDis = 200;
    $scoreMaxDis = 1000;
   }




@endphp



<div class="hadernav">
    <div class="title-header">
        <span class="soida"> SOI DA </span>
        <span class="online"> ONLINE </span>
        <span class="ai">AI </span>
    </div>

    <div class="sologan">
        <img src="/images/navabar.svg">
        <span>Ứng dụng soi da với công nghệ AI hiện đại *</span>
    </div>


</div>

        <div id="alert-web">

        </div>
        @yield('contentpage')

        </div>
    </div>

    @include('new.popupLoading')

    @include('new.popupSuccess')

@if($slug == "ngocdung")


@elseif($slug == "zema")



@elseif($slug == "zasaly")
       

@else 
<footer id="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
					<div class="widget-wrapper animated">
						
						<h3 class="title title_left">Giới thiệu</h3>
						
						<div class="inner about_us">
							
							<p class="message">Hơn 60 năm là chuyên gia trong ngành Dược mỹ phẩm,
Placentor Vegetal là thương hiệu ứng dụng tế bào học đầu tiên trên thế giới.</p>
							
							<ul class="list-unstyled">
								
								<li>
									<i class="fa fa-home"></i>83 Trường Chinh, Phường 12, Quận Tân Bình, TP. Hồ Chí Minh
								</li>
								
								
								<li>
									<i class="fa fa-envelope-o"></i> <a href="mailto:tuvan.unison@gmail.com">tuvan.unison@gmail.com</a>
								</li>
								
								
								<li>
									<i class="fa fa-phone"></i>1900636498
								</li>
								
								
							</ul>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
					<div class="widget-wrapper animated">
						
						<h3 class="title title_left">Chính sách</h3>
						
						<div class="inner">
							
							<ul class="list-unstyled list-styled">
								
								<li>
									<a href="https://placentor.com.vn/pages/ve-placentor-vegetal">Về Placentor Vegetal</a>
								</li>
								
								<li>
									<a href="https://placentor.com.vn/pages/chinh-sach-giao-hang-va-thanh-toan">Chính sách giao hàng và thanh toán</a>
								</li>
								
								<li>
									<a href="https://placentor.com.vn/pages/chinh-sach-bao-mat">Chính sách bảo mật</a>
								</li>
								
								<li>
									<a href="https://placentor.com.vn/pages/chinh-sach-doi-tra-va-hoan-tien">Chính sách đổi trả và hoàn tiền</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				
				
				<div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
					<div class="widget-wrapper animated">
						
						
						<h3 class="title title_left">Đăng kí nhận tin</h3>
						
						<div class="inner">

							
							<form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">
<input name="form_type" type="hidden" value="customer">
<input name="utf8" type="hidden" value="✓">

							<div class="group-input"> 
								<input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin">     
								<input type="email" required="required" name="contact[email]" id="contact_email">
								<span class="bar"></span>
								<label>Nhập email của bạn</label>
								<button type="submit"><i class="fa fa-paper-plane-o"></i></button>
							</div>


							
							   
							 
							
<input id="ed75dc1c8a1943c3aaacd0e52c29e186" name="g-recaptcha-response" type="hidden" value="03AFcWeA6xNmIuVXAmkR6DjmT3NR9ndjMD9_fZl7CURtZXxsPZh_o6wCP8IsO4Yh96b7ol_s3rZiAffxbuHKzbevOi_4Yea1UcNIxQIIyHgEbAQTgYvsY3_fyCvwbEsMWYyKUw3hbO6o37NiZ3t59l-uF4oPIT7koYT5MS7vygIotDD9RKotsfPouSQMMOy_ITUUVyGrGw0NUayRZgxQl8ZG43H_Uk80qjRyC1t5LTPOWD1and9rssIXBX1tQcbcNJoeSBtuDMFd_MDc7KgTz4FBRtSAraXvvLRE-n9hrdVtgvkx7QhZhZNWX9eKPpiF9lJZS7eVtH2garDH2Nd5kggPyQaR3d17D909ipYA-3yXHKUWHQoKYXk23FBilTPIEkd3YSagTTp_QoBQ39Xffg6os9gWFLUvQflBnb2Si3nQRZS3eMRsu8nVriAuKgKew7hPOsxKMGYVpqCl4kVdGQ5hOJxwQrl2qKFlJCGmCwNudMOPHTGyJHw3b2Z2WCi4DjUr87MpBCpGdZd73nFyyI6nrb78fS-A1WJkbolc8Zh7yJvSEq2wd6pLvEGRcKG6dAdZtNaMgLIYdZiYoP6xO9WFXjYVqqGtoakJWDtsEakhcz8uv6ZUmj6TVvsyDjKTyyUBh36fWTVRUxe36HkF-IHXTLL6nJfrZUdsWLaDLtkVP-j4giEFHMG3NyCu3txHJuao8xuj1R7CxF"><script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('ed75dc1c8a1943c3aaacd0e52c29e186').value = token;});});</script></form>               
							 
							
							<div class="caption">Hãy nhập email của bạn vào đây để nhận tin!</div>
							
						</div>
						
						
						

<div id="widget-social" class="social-icons">
  <ul class="list-inline">
    
    <li>
      <a target="_blank" href="https://www.facebook.com/placentorvegetalvietnam" class="social-wrapper facebook">
        <span class="social-icon">
          <i class="fa fa-facebook"></i>
        </span>
      </a>
    </li>
    
    
     
   
    
    <li>
      <a target="_blank" href="https://www.youtube.com/channel/UC_VMXYW7DJJivQAjFEnudLQ/about" class="social-wrapper youtube">
        <span class="social-icon">
          <i class="fa fa-youtube"></i>
        </span>
      </a>
    </li>
    
    
    <li>
      <a target="_blank" href="https://www.instagram.com/placentorvegetal_vietnam/" class="social-wrapper instagram">
        <span class="social-icon">
          <i class="fa fa-instagram"></i>
        </span>
      </a>
    </li>
    
  </ul>
</div>

						
					</div>
				</div>
				
				
				<div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
					<div class="widget-wrapper animated">
						
						<h3 class="title title_left">Kết nối với chúng tôi</h3>
						
						<div class="inner">
							<!-- Facebook widget -->

<div class="footer-static-content"> 
<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/placentorvegetalvietnam" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=263266547210244&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fplacentorvegetalvietnam&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f5c812c042be0ab0d" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v15.0/plugins/page.php?adapt_container_width=true&amp;app_id=263266547210244&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2a8eb719088956de%26domain%3Dplacentor.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fplacentor.com.vn%252Ff239d2c5292e0b3f8%26relation%3Dparent.parent&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fplacentorvegetalvietnam&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
</div>
<div style="clear:both;">
	
</div>

<!-- #Facebook widget -->
<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
	
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>

	<!-- <div class="footer-copyright">
		<div class="container copyright">						
			<p>Copyright © 2024 Placentor Vegetal - Sức mạnh tái tạo từ tế bào gốc noãn thực vật. <a target="_blank" href="https://www.haravan.com/?utm_campaign=poweredby&amp;utm_medium=haravan&amp;utm_source=onlinestore">Powered by Tikitech</a>.</p>

		</div>
	</div> -->
</footer>

@endif
<div   class= "bg-smoke"   style ="height:50px">

</div>

<div id="tipsGuildLine" class="ai-skin__tips" style="display:none">
                    <div class="ai-skin__tips__content">
                       

                         <p class ="titleMain"> 
                                 Thử thách gì nhỉ?

                         </p>

                        <br>
                      
                         <p class="des"> 
                         Nếu sau khi Soi da online, tuổi da của bạn BẰNG với tuổi da trên banner, bạn nhận được quà từ Shop

                         </p>
                         <br>
                         <p class="des"> 
                                Bạn có thể thử nhiều lần miễn là Soi da online tự nhiên
                                Mỗi tuần shop sẽ update MỘT tuổi da nhất định
                        </p>
                        <br>
                        <p class ="titleMain2"> 
                        Chúc bạn ngày càng xinh đẹp
                        </p>
                        <br>
                        <div class="ai-skin__button ai-skin__tips__button">
                            <button type="button" onclick="hidetipGame()">Chơi game</button>
                        </div>
                    </div>
                </div>
                @php
    
                $fabookLink =  null;
                
                $zaloLink =  null;
                $hotlineLink =null;
                
                if (isset($globalData)) {
                  
                        $fabookLink =  null;
                        if( property_exists( get_class($globalData), 'embeddFacebook' ) ){
                              $fabookLink =  $globalData->embeddFacebook;
                        }
                   
                    
                        $zaloLink =  null;
                        if( property_exists( get_class($globalData), 'embeddZalo' ) ){
                              $zaloLink =  $globalData->embeddZalo;
                        }

                        $hotlineLink = null;
                        if( property_exists( get_class($globalData), 'embedHotline' ) ){
                            $hotlineLink =  $globalData->embedHotline;
                        }
               
                   
            
                }
             
            
            
            @endphp
            

                @if ($hotlineLink)
                <a href="tel:{{ $hotlineLink }}" title="" class="left-hotline">
                    <strong>{{ $hotlineLink }}</strong>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                          </svg>
                    </span>
                </a>
   
                @endif

             



                <div class="left-sidebar">
                    {{-- <a href="tel:0906606986" rel="nofollow">
                        <img src="https://tikitech.vn/resources/images/sidebar/phone2.svg" alt="phone">
                    </a> --}}
        
                    {{-- <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=hi@tikitech.vn" target="_blank"><img src="https://tikitech.vn/resources/images/sidebar/email.png" alt="mail"></a>
         --}}
                
                        @if ( $zaloLink)

                        <a href="{{ $zaloLink }}" target="_blank" rel="nofollow"><img src="https://tikitech.vn/resources/images//sidebar/zalo.png" alt="zalo"></a>

                        @endif


                    @if ( $fabookLink)
                             <a href="{{$fabookLink}}" target="_blank" rel="nofollow"><img src="https://tikitech.vn/resources/images/sidebar/mess.png" alt="facebook"></a>
         
                    @endif

         
                 
                 
        
                  
                </div>

                
</body>

        <script type="text/javascript" src="/js/history.js"></script>
        <script type="text/javascript" src="/js/game1.js"></script>
        

      

</html>