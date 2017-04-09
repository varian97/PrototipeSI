<!DOCTYPE html>
<html>
  <head>
    <title> Eduplex </title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  </head>

  <body>
      <header>
          <div class="wrapper">
        			<div class="logo">
        				<a href="/admin"><img src="{{asset('img/Eduplex.png')}}" alt="Resto" title=""/></a>
        			</div>
              <nav>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/order">Order</a></li>
                  <li><a href="/check">Check Order</a></li>
                </ul>
              </nav>
          </div>
      </header>

      @yield('content')

      <footer>
      		<div class="wrapper">
      			<section class="adress">
      				<p>Eduplex, <br> Study and Coworking Space</p>
              <br>
      				<p class="location">Dago 84, Bandung, Indonesia</p>
      				<p class="phone">022 2534431</p>
      			</section>
      	</div>
    </footer>
  </body>
</html>
