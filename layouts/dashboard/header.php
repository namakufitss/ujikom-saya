
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Blank Page</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="adminv/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="adminv/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="75212b6c-a2a6-4123-9d3a-7cf004a894e3">try { (function(w,d){!function(b$,ca,cb,cc){b$[cb]=b$[cb]||{};b$[cb].executed=[];b$.zaraz={deferred:[],listeners:[]};b$.zaraz.q=[];b$.zaraz._f=function(cd){return async function(){var ce=Array.prototype.slice.call(arguments);b$.zaraz.q.push({m:cd,a:ce})}};for(const cf of["track","set","debug"])b$.zaraz[cf]=b$.zaraz._f(cf);b$.zaraz.init=()=>{var cg=ca.getElementsByTagName(cc)[0],ch=ca.createElement(cc),ci=ca.getElementsByTagName("title")[0];ci&&(b$[cb].t=ca.getElementsByTagName("title")[0].text);b$[cb].x=Math.random();b$[cb].w=b$.screen.width;b$[cb].h=b$.screen.height;b$[cb].j=b$.innerHeight;b$[cb].e=b$.innerWidth;b$[cb].l=b$.location.href;b$[cb].r=ca.referrer;b$[cb].k=b$.screen.colorDepth;b$[cb].n=ca.characterSet;b$[cb].o=(new Date).getTimezoneOffset();if(b$.dataLayer)for(const cm of Object.entries(Object.entries(dataLayer).reduce(((cn,co)=>({...cn[1],...co[1]})),{})))zaraz.set(cm[0],cm[1],{scope:"page"});b$[cb].q=[];for(;b$.zaraz.q.length;){const cp=b$.zaraz.q.shift();b$[cb].q.push(cp)}ch.defer=!0;for(const cq of[localStorage,sessionStorage])Object.keys(cq||{}).filter((cs=>cs.startsWith("_zaraz_"))).forEach((cr=>{try{b$[cb]["z_"+cr.slice(7)]=JSON.parse(cq.getItem(cr))}catch{b$[cb]["z_"+cr.slice(7)]=cq.getItem(cr)}}));ch.referrerPolicy="origin";ch.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(b$[cb])));cg.parentNode.insertBefore(ch,cg)};["complete","interactive"].includes(ca.readyState)?zaraz.init():b$.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document) } catch (err) {
      console.error('Failed to run Cloudflare Zaraz: ', err)
      fetch('/cdn-cgi/zaraz/t', {
        credentials: 'include',
        keepalive: true,
        method: 'GET',
      })
    };</script></head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>

<ul class="navbar-nav ml-auto">



<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">

</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">
</a>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="adminv/index3.html" class="brand-link">
<img src="adminv/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">DIGITAL LIBRARY</span>
</a>
<div class="sidebar">
<div class="form-inline">
<div class="input-group">
<div class="input-group-append">
</div>
</div>
</div>
<!-- Sidebar -->
    <div class="sidebar">

</div>
      <!-- Ini Menu -->
      <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

    <li class="nav-item">
   
        <a href="dashboard.php?page=admin" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
          <a href="admin.php?page=databuku" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
            <p>
              Data Buku
            </p>
          </a>
        </li>
              <li class="nav-item">
          <a href="admin.php?page=kategoribuku" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
            <p>
              Kategori Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="admin.php?page=datapeminjam" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Peminjaman
            </p>
          </a>
        </li>
                         <li class="nav-item">
          <a href="admin.php?page=ulasan" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
            <p>
              Ulasan Buku
            </p>
          </a>
        </li>
        
    <li class="nav-item">
      <a href="index.php?page=login" class="nav-link">
        <i class="fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
  </ul>
</nav>
      <!-- /.Akhir Menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
</div>
</div>
</div>
</section>

<section class="content"