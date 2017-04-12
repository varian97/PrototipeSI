<!DOCTYPE html>
<html>
  <head>
    <title> Admin Page </title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
      <header>
          <div class="wrapper">
        			<div class="logo">
        				<a href="/admin"><img src="{{asset('img/Eduplex.png')}}" alt="Resto" title=""/></a>
        			</div>
              <nav>
                <ul>
                  <li><a href="/adminmenu">Menu</a></li>
                  <li><a href="/addFoods">Add Foods</a></li>
                  <li><a href="/addDrinks">Add Drinks</a></li>
                  <li><a href="/customerStatus">Customer Status</a></li>
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
