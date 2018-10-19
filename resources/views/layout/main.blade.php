<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<<<<<<< HEAD
        <link rel="shortcut icon" href="{{ asset('favicon.ico.png') }}" >
        <title>
            @yield('title', 'Technics Shop')
        </title>

=======
        <title>
            @yield('title', 'Technics Shop')
        </title>
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar" style=" background: #3d10a8">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-tv" aria-hidden="true" ">
                        </i>
<<<<<<< HEAD
                       StoreDoor Shop
=======
                       StoreDoor
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{ route('products') }}">
                            PRODUCTS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li>
                    <li>
<<<<<<< HEAD
                        <a href=" {{ route('cart.index') }}">
=======
                        <a href="#">
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            CART
                            <span class="alert badge">
<<<<<<< HEAD
                                {{ Cart::count() }}
=======
                                8
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
@yield('content')
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
<<<<<<< HEAD
      <p>Start Ordering Today and you will get coupon code 10% for all products</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
      <i class="fa fa-cc-mastercard"></i>
      <i class="fa fa-cc-visa"></i>
      <i class="fa fa-cc-paypal"></i>
      <i class="fa fa-cc-amex"></i>
      <p>You can pay with all credit cards</p>
=======
      <p>Coded with love by Webdevmatics for educational purpose only</p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
    </div>
    
    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
    </body>
</html>
