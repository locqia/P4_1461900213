<!doctype html><!--tanggal mulai latihan buat website 23 juni 2019 by ququh-->
<html>
    <head>
       <title> LocqiaXD </title>
	<link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <head\>
 <body>
    <header><!--awalkepala erangka -->
	   <img src="{{asset('images/locqia.jpg')}}">
	</header><!--akhirkepala kerangka -->
   <menu>
	<ul><!--awal dropdown menu utama-->
	   <li><a href="/">Home</a></li>
	   <li><a href="buku0213">buku</a>
		<li><a href="user0213">user</a></li>
		<li><a href="rakbuku0213">rakbuku</a></li>
		<li><a href="jenisbuku0213">jenisbuku</a></li>
		<li><a>Contact</a>
		    <ul>
			    <li><a href="https://www.facebook.com/Ququhimanuddinahmad">Facebook</a></li>
				<li><a>Instagram</a></li>
			</ul>
		</li>
	</ul><!--akhir dropdown menu utama-->
	  
   </menu>
	<div class="recomended"><!--awal class recomended-->
	@yield('badan')
	    
	 </div>
 </body>
</html>