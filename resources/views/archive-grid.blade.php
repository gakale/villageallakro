<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/vizew/archive-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:25 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Vizew - Blog &amp; Magazine HTML Template</title>

<link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script nonce="4a73ea98-b739-40f4-88e7-a48119af771d">(function(w,d){!function(bt,bu,bv,bw){bt[bv]=bt[bv]||{};bt[bv].executed=[];bt.zaraz={deferred:[],listeners:[]};bt.zaraz.q=[];bt.zaraz._f=function(bx){return function(){var by=Array.prototype.slice.call(arguments);bt.zaraz.q.push({m:bx,a:by})}};for(const bz of["track","set","debug"])bt.zaraz[bz]=bt.zaraz._f(bz);bt.zaraz.init=()=>{var bA=bu.getElementsByTagName(bw)[0],bB=bu.createElement(bw),bC=bu.getElementsByTagName("title")[0];bC&&(bt[bv].t=bu.getElementsByTagName("title")[0].text);bt[bv].x=Math.random();bt[bv].w=bt.screen.width;bt[bv].h=bt.screen.height;bt[bv].j=bt.innerHeight;bt[bv].e=bt.innerWidth;bt[bv].l=bt.location.href;bt[bv].r=bu.referrer;bt[bv].k=bt.screen.colorDepth;bt[bv].n=bu.characterSet;bt[bv].o=(new Date).getTimezoneOffset();if(bt.dataLayer)for(const bG of Object.entries(Object.entries(dataLayer).reduce(((bH,bI)=>({...bH[1],...bI[1]})),{})))zaraz.set(bG[0],bG[1],{scope:"page"});bt[bv].q=[];for(;bt.zaraz.q.length;){const bJ=bt.zaraz.q.shift();bt[bv].q.push(bJ)}bB.defer=!0;for(const bK of[localStorage,sessionStorage])Object.keys(bK||{}).filter((bM=>bM.startsWith("_zaraz_"))).forEach((bL=>{try{bt[bv]["z_"+bL.slice(7)]=JSON.parse(bK.getItem(bL))}catch{bt[bv]["z_"+bL.slice(7)]=bK.getItem(bL)}}));bB.referrerPolicy="origin";bB.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bt[bv])));bA.parentNode.insertBefore(bB,bA)};["complete","interactive"].includes(bu.readyState)?zaraz.init():bt.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div class="preloader d-flex align-items-center justify-content-center">
<div class="lds-ellipsis">
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>

<header class="header-area">

<div class="top-header-area">
<div class="container">
<div class="row align-items-center">
<div class="col-12 col-md-6">

<div class="breaking-news-area d-flex align-items-center">
<div class="news-title">
<p>Breaking News:</p>
</div>
<div id="breakingNewsTicker" class="ticker">
<ul>
<li><a href="{{ route ('single-post') }}">10 Things Amazon Echo Can Do</a></li>
<li><a href="{{ route ('single-post') }}">Welcome to Colorlib Family.</a></li>
<li><a href="{{ route ('single-post') }}">Boys 'doing well' after Thai</a></li>
</ul>
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="top-meta-data d-flex align-items-center justify-content-end">

<div class="top-social-info">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-youtube-play"></i></a>
</div>

<div class="top-search-area">
<form action="https://preview.colorlib.com/theme/vizew/index.html" method="post">
<input type="search" name="top-search" id="topSearch" placeholder="Search...">
<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
</div>

<a href="{{ route ('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>

<div class="vizew-main-menu" id="sticker">
<div class="classy-nav-container breakpoint-off">
<div class="container">

<nav class="classy-navbar justify-content-between" id="vizewNav">

<a href="{{ route ('index-2') }}" class="nav-brand"><img src="{{ asset ('img/core-img/logo.png') }}" alt=""></a>

<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>
<div class="classy-menu">

<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>

<div class="classynav">
<ul>
<li class="active"><a href="{{ route ('index-2') }}">Home</a></li>
<li><a href="{{ route ('archive-list') }}">Archives</a></li>
<li><a href="#">Pages</a>
<ul class="dropdown">
<li><a href="{{ route ('index-2') }}">- Home</a></li>
<li><a href="{{ route ('archive-list') }}">- Archive List</a></li>
<li><a href="{{ route ('archive-grid') }}">- Archive Grid</a></li>
<li><a href="{{ route ('single-post') }}">- Single Post</a></li>
<li><a href="{{ route ('video-post') }}">- Single Video Post</a></li>
<li><a href="{{ route ('contact') }}">- Contact</a></li>
<li><a href="{{ route ('typography') }}">- Typography</a></li>
<li><a href="{{ route ('login') }}">- Login</a></li>
</ul>
</li>
<li><a href="#">Features</a>
<div class="megamenu">
<ul class="single-mega cn-col-4">
<li><a href="{{ route ('index-2') }}">- Home</a></li>
<li><a href="{{ route ('archive-list') }}">- Archive List</a></li>
<li><a href="{{ route ('archive-grid') }}">- Archive Grid</a></li>
<li><a href="{{ route ('single-post') }}">- Single Post</a></li>
<li><a href="{{ route ('video-post') }}">- Single Video Post</a></li>
<li><a href="{{ route ('contact') }}">- Contact</a></li>
<li><a href="{{ route ('typography') }}">- Typography</a></li>
<li><a href="{{ route ('login') }}">- Login</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="{{ route ('index-2') }}">- Home</a></li>
<li><a href="{{ route ('archive-list') }}">- Archive List</a></li>
<li><a href="{{ route ('archive-grid') }}">- Archive Grid</a></li>
<li><a href="{{ route ('single-post') }}">- Single Post</a></li>
<li><a href="{{ route ('video-post') }}">- Single Video Post</a></li>
<li><a href="{{ route ('contact') }}">- Contact</a></li>
<li><a href="{{ route ('typography') }}">- Typography</a></li>
<li><a href="{{ route ('login') }}">- Login</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="{{ route ('index-2') }}">- Home</a></li>
<li><a href="archive-list.html">- Archive List</a></li>
<li><a href="archive-grid.html">- Archive Grid</a></li>
<li><a href="single-post.html">- Single Post</a></li>
<li><a href="video-post.html">- Single Video Post</a></li>
<li><a href="contact.html">- Contact</a></li>
<li><a href="typography.html">- Typography</a></li>
<li><a href="login.html">- Login</a></li>
</ul>
<ul class="single-mega cn-col-4">
<li><a href="index-2.html">- Home</a></li>
<li><a href="archive-list.html">- Archive List</a></li>
<li><a href="archive-grid.html">- Archive Grid</a></li>
<li><a href="single-post.html">- Single Post</a></li>
<li><a href="video-post.html">- Single Video Post</a></li>
<li><a href="contact.html">- Contact</a></li>
<li><a href="typography.html">- Typography</a></li>
<li><a href="login.html">- Login</a></li>
</ul>
</div>
</li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>

</div>
</nav>
</div>
</div>
</div>
</header>


<div class="vizew-breadcrumb">
<div class="container">
<div class="row">
<div class="col-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li class="breadcrumb-item"><a href="#">Feature</a></li>
<li class="breadcrumb-item active" aria-current="page">Archive by Category SPORTS</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="vizew-grid-posts-area mb-80">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-8">

<div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">

<div class="archive-catagory">
<h4><i class="fa fa-trophy" aria-hidden="true"></i> Sports</h4>
</div>

<div class="view-options">
<a href="archive-grid.html" class="active"><i class="fa fa-th-large" aria-hidden="true"></i></a>
<a href="archive-list.html"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
</div>
</div>
<div class="row">

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">
 
<div class="post-thumbnail">
<img src="img/bg-img/12.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">May fights on after Johnson savages Brexit approach</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/39.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Thailand cave rescue: Boys 'doing well' after spending night</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/40.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Theresa May battles Brexitee backlash amid disquiet</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
 </div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/41.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Theresa May battles Brexitee backlash amid disquiet</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/42.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminster Bridge</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/43.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Full article Prince Charles's 'urgent' global research</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/44.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Paramedics 'drilled into boat death woman'</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/45.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Do This One Simple Action for an Absolutely</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/46.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Thailand cave rescue: Boys 'doing well' after spending night</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/47.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Theresa May battles Brexiteer backlash amid disquiet</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/48.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/49.jpg" alt="">

<span class="video-duration">05.03</span>
</div>
 
<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/40.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Warner Bros. Developing ‘The accountant’ Sequel</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/41.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/42.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/43.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Warner Bros. Developing ‘The accountant’ Sequel</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/44.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
 </div>

<div class="col-12 col-md-6">
<div class="single-post-area mb-50">

<div class="post-thumbnail">
<img src="img/bg-img/45.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
<a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>
</div>
</div>

<nav class="mt-50">
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
</ul>
</nav>
</div>
<div class="col-12 col-md-6 col-lg-4">
<div class="sidebar-area">

<div class="single-widget followers-widget mb-50">
<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
<a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
</div>

<div class="single-widget latest-video-widget mb-50">

<div class="section-heading style-2 mb-30">
<h4>Latest Video</h4>
<div class="line"></div>
</div>

<div class="single-post-area mb-30">

<div class="post-thumbnail">
<img src="img/bg-img/13.jpg" alt="">

<span class="video-duration">05.03</span>
</div>

<div class="post-content">
 <a href="#" class="post-cata cata-sm cata-success">Sports</a>
<a href="single-post.html" class="post-title">Full article Prince Charles's 'urgent' global research</a>
<div class="post-meta d-flex">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/1.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/2.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 26</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/35.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 11</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 21</a>
</div>
</div>
</div>
</div>

<div class="single-widget add-widget mb-50">
<a href="#"><img src="img/bg-img/add.png" alt=""></a>
</div>
 
<div class="single-widget youtube-channel-widget mb-50">

<div class="section-heading style-2 mb-30">
<h4>Hot Channels</h4>
<div class="line"></div>
</div>

<div class="single-youtube-channel d-flex align-items-center">
<div class="youtube-channel-thumbnail">
<img src="img/bg-img/25.jpg" alt="">
</div>
<div class="youtube-channel-content">
<a href="single-post.html" class="channel-title">Music Channel</a>
<a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
</div>
</div>

<div class="single-youtube-channel d-flex align-items-center">
<div class="youtube-channel-thumbnail">
<img src="img/bg-img/26.jpg" alt="">
</div>
<div class="youtube-channel-content">
<a href="single-post.html" class="channel-title">Trending Channel</a>
<a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
</div>
</div>

<div class="single-youtube-channel d-flex align-items-center">
<div class="youtube-channel-thumbnail">
<img src="img/bg-img/27.jpg" alt="">
</div>
<div class="youtube-channel-content">
<a href="single-post.html" class="channel-title">Travel Channel</a>
<a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
</div>
</div>

<div class="single-youtube-channel d-flex align-items-center">
<div class="youtube-channel-thumbnail">
<img src="img/bg-img/28.jpg" alt="">
</div>
<div class="youtube-channel-content">
<a href="single-post.html" class="channel-title">Sport Channel</a>
<a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
</div>
</div>

<div class="single-youtube-channel d-flex align-items-center">
<div class="youtube-channel-thumbnail">
<img src="img/bg-img/29.jpg" alt="">
</div>
<div class="youtube-channel-content">
<a href="single-post.html" class="channel-title">TV Show Channel</a>
<a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
</div>
</div>
 </div>

<div class="single-widget newsletter-widget mb-50">

<div class="section-heading style-2 mb-30">
<h4>Newsletter</h4>
<div class="line"></div>
</div>
<p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>

<div class="newsletter-form">
<form action="#" method="post">
<input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
<button type="submit" class="btn vizew-btn w-100">Subscribe</button>
</form>
</div>
</div>

<div class="single-widget">

<div class="section-heading style-2 mb-30">
<h4>Most Viewed Playlist</h4>
<div class="line"></div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/1.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/2.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/36.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">Sweet Yummy Chocolate in the</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/37.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/38.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer-area">
<div class="container">
<div class="row">

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">

<a href="index-2.html" class="foo-logo d-block mb-4"><img src="img/core-img/logo2.png" alt=""></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

<div class="footer-nl-area">
<form action="#" method="post">
<input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
<button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
</form>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Latest Twister</h6> 

<div class="twitter-slides owl-carousel">

<div class="single--twitter-slide">

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>
</div>

<div class="single--twitter-slide">

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>

<div class="single-twit">
<p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Sport Videos</h6>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/1.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">DC Shoes: gymkhana the</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>

<div class="single-blog-post d-flex">
<div class="post-thumbnail">
<img src="img/bg-img/2.jpg" alt="">
</div>
<div class="post-content">
<a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
<div class="post-meta d-flex justify-content-between">
<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
<a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
</div>
</div>
</div>
</div>
</div>


<div class="col-12 col-sm-6 col-xl-3">
<div class="footer-widget mb-70">
<h6 class="widget-title">Our Address</h6>

<div class="contact-address">
<p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
<p>Phone: 001-1234-88888</p>
<p>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6afa8a0a9e8a5a9aaa9b4aaafa486a1aba7afaae8a5a9ab">[email&#160;protected]</a></p>
</div>

<div class="footer-social-area">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>

<div class="copywrite-area">
<div class="container">
<div class="row align-items-center">

<div class="col-12 col-sm-6">
<p class="copywrite-text">
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
</div>
<div class="col-12 col-sm-6">
<nav class="footer-nav">
<ul>
<li><a href="#">Advertise</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Disclaimer</a></li>
<li><a href="#">Privacy</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</footer>



<script src="js/jquery/jquery-2.2.4.min.js"></script>

<script src="js/bootstrap/popper.min.js"></script>

<script src="js/bootstrap/bootstrap.min.js"></script>

<script src="js/plugins/plugins.js"></script>

<script src="js/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7ed828bfada1dd84","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/vizew/archive-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 22:01:30 GMT -->
</html>