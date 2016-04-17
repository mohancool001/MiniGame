<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(e,t){return function(){o(e,[(new Date).getTime()].concat(a(arguments)),null,t)}}var o=e("handle"),i=e(2),a=e(3);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var u=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(u,function(e,t){newrelic[t]=r(f+t,"api")}),i(c,function(e,t){newrelic[t]=r(f+t)}),t.exports=newrelic,newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),o("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(0>o?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?u(e,a,i):i()}function n(n,r,o){e&&e(n,r,o);for(var i=t(o),a=l(n),u=a.length,c=0;u>c;c++)a[c].apply(i,r);var s=f[g[n]];return s&&s.push([m,n,r,i]),i}function p(e,t){w[e]=l(e).concat(t)}function l(e){return w[e]||[]}function d(e){return s[e]=s[e]||o(n)}function v(e,t){c(e,function(e,n){t=t||"feature",g[n]=t,t in f||(f[t]=[])})}var w={},g={},m={on:p,emit:n,get:d,listeners:l,context:t,buffer:v};return m}function i(){return new r}var a="nr@context",u=e("gos"),c=e(2),f={},s={},p=t.exports=o();p.backlog=f},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!w++){var e=v.info=NREUM.info,t=s.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&t){c(l,function(t,n){e[t]||(e[t]=n)});var n="https"===p.split(":")[0]||e.sslForHttp;v.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=v.proto+e.agent,t.parentNode.insertBefore(r,t)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=window,s=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},e(1);var p=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-918.min.js"},d=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),v=t.exports={offset:a(),origin:p,features:{},xhrWrappable:d};s.addEventListener?(s.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(s.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),u("mark",["firstbyte",a()],null,"api");var w=0},{}]},{},["loader"]);</script>
	<meta name="author" content="Myself" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="files/main.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
	

	<!-- Media Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="files/demos/media-agency/media-agency.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="files/one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="files/demos/media-agency/fonts.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<title>Mini Game - Mohan</title>


</head>

<body class="" data-loader="14">

	<div class="side-cover-wrapper full-screen">
		<div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
			<div class="flexslider" style="height: 100% !important;">
				<div class="slider-wrap" style="height: inherit !important;">
					<div class="slide full-screen force-full-screen" style="background: url('files/demos/media-agency/images/1.jpg') center right; background-size: cover; height: 100% !important;"></div>
					<div class="slide full-screen force-full-screen" style="background: url('files/demos/media-agency/images/2.jpg') center right; background-size: cover; height: 100% !important;"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="nobottomborder no-sticky">

			<div id="header-wrap">

				<div class="container-fluid clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
					</br>
						<a href="index.html" class="standard-logo" data-dark-logo="background: url('files/Quizzle.png')" alt="Logo"><img src="files/Quizzle.png" alt="Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="background: url('files/Quizzle.png')"><img src="files/Quizzle.png" alt="Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-2">

						<ul>
							<!-- data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="200" -->
							<li><a href="{{ url('/home')}}"><div>Home</div></a></li>
							<li><a href="{{ url('/rules')}}"><div>Rules</div></a></li>
							<li><a href="{{ url('/leaderboard') }}"><div>Leaderboard</div></a></li>
							<li><a href="{{ url('/forum') }}"><div>Forum</div></a></li>
							<li><a href="{{ url('/contact') }}"><div>Contact</div></a></li>
							<li><a href="{{ url('/admin') }}"><div>Admin</div></a></li>
							@if (Auth::guest())
							<li><a href="{{ url('/login') }}"><div>Login</div></a></li>
							<li><a href="{{ url('/register') }}"><div>Register</div></a></li>
							@else
							<li><a href="{{ url('/logout') }}"><div>Logout</div></a></li>
							@endif
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div id="copyrights" style="background-color:#111;">
				<div class="container-fluid">

					Copyrights &copy; R.Mohan Rajan 2016 | All Rights Reserved

				</div>
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="files/js/jquery.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="files/js/functions.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		jQuery(window).load(function(){

			jQuery(window).resize(function() {
				SEMICOLON.portfolio.portfolioDescMargin();
			});

			var t = setTimeout(function(){ SEMICOLON.portfolio.portfolioDescMargin(); }, 200);

		});

	</script>


<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1EEX1cYVVNUWwVMUgNQD1FBG0heQA==","queueTime":0,"applicationTime":0,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/demo-media-agency.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2016 11:22:22 GMT -->
</html>