<!DOCTYPE HTML>
<html>
<head>
  <meta http-equive="Content-Type" content="text/html; charset=utf-8"/>

  
        <!-- Hammer reload -->
          <script>
            setInterval(function(){
              try {
                if(typeof ws != 'undefined' && ws.readyState == 1){return true;}
                ws = new WebSocket('ws://'+(location.host || 'localhost').split(':')[0]+':35353')
                ws.onopen = function(){ws.onclose = function(){document.location.reload()}}
                ws.onmessage = function(){
                  var links = document.getElementsByTagName('link'); 
                    for (var i = 0; i < links.length;i++) { 
                    var link = links[i]; 
                    if (link.rel === 'stylesheet' && !link.href.match(/typekit/)) { 
                      href = link.href.replace(/((&|\?)hammer=)[^&]+/,''); 
                      link.href = href + (href.indexOf('?')>=0?'&':'?') + 'hammer='+(new Date().valueOf());
                    }
                  }
                }
              }catch(e){}
            }, 1000)
          </script>
        <!-- /Hammer reload -->
      
  
  <link rel='stylesheet' href='assets/css/style.css'>
  <script src='assets/js/jquery-1.8.3.min.js'></script>
<script src='assets/js/jquery.flexslider.min.js'></script>
<script src='assets/js/app.js'></script>

  <title>St. George Photography</title>

  <script type="text/javascript" src="//use.typekit.net/uts4qcn.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script> 
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>
<body>

  
<header class="nav">
  <div class="container">
    <div class="g_d12">
      <div class="logo">
        <img src="/assets/images/logo.png" class="logo-img">
        <h1>St. George Photography</h1>
      </div>
        <ul class="nav-links">
          <li><a href="index.html">'Folio</a></li>
          <li><a href="method.html">Method</a></li>
          <li><a href="about.html">About</a></li>
          <li class="current last"><a class='current' href="services.html">Services</a></li>
        </ul> 
      </div><!-- End Header -->
   </div>
 </header>
<div class="container">
  <div class="services g_d6 mt4">
    <h1 class="script h1 h_underline text-blue pb1">Services</h1>
    <div class="is-formatted font-size-large">
      <h5 class="text-transform-upper mb1 mt2">Photography</h5>
      <ul>
        <li>Weddings</li>
        <li>Newborns</li>
        <li>Family Portraits</li>
        <li>Product Photography</li>
        <li>Landscape</li>
      </ul>
      <h5 class="text-transform-upper mb1 mt2">Design</h5>
      <ul>
        <li>Web Design</li>
        <li>Logos</li>
        <li>Wedding Invitations</li>
        <li>Business Cards</li>
        <li>Event Posters</li>
      </ul>
    </div>
  </div>
    <div class="form g_d6">
      <h1 class="script h1 text-blue pb1 mt4">Contact</h2>
        <form>
          <input class="input_text mb1" type="text" placeholder="first name">
          <input class="input_text mb1" type="text" placeholder="last name">
          <input class="input_text mb1" type="email" placeholder="email adress">
          <textarea  class="input_textarea input_textarea_height_200 mb1" placeholder="details"></textarea>
          <input type="submit" value="Send" class="button float-right">
        </form>
  </div>

</div>
	
  <footer class="nav nav-footer">
    <div class="container clearfix"> 
      <div class="grid_12">
        <h3 class="copyright">Copyright&copy; 2013 Christopher M. Reece, All rights Reserved
        </h3>
    		<ul>
      		<li><a href="dribbble.com/seedofthemind" class="icon icon-dribbble"></a></li>
      		<li><a href="twitter.com/seedofthemind" class="icon icon-twitter"></a></li>
      		<li><a href="facebook.com/seedofthemind" class="icon icon-facebook"></a></li>
      	</ul>
      </div>
    </div>
  </footer>
</div>
</body>

</html>