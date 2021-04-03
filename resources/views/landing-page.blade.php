<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
      <header>
        <div class="top-nav container">
          <div class="Logo">Laravel Ecommerce</div>
          <ul>
            <li><a href="{{ route('shop.index') }}">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="{{ route('cart.index') }}">Cart</a></li>
          </ul>
        </div> <!-- end top nav -->

        <div class="hero container">
          <div class="hero-copy">

            <h1>Laravel Ecommerce</h1>
            <p>A practical example of using CSS Grid for a typical website layout.</p>
          </div> <!-- end hero-copy -->

          <div class="hero-image">
            <img src="img/macbook-pro-laravel.png" alt="hero image">
          </div>
        </div> <!-- end hero -->
      </header>

      <div class="featured-section">
        <div class="container">
          <h1 class="text-center">CSS Grid Example</h1>
          <p class="section-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia provident modi saepe est velit ratione, libero ipsum ullam. Consequatur labore nesciunt cumque, ex molestiae corporis minus obcaecati minima et deserunt! Velit vitae est, dolore molestiae reprehenderit alias porro ab ea?</p>

          <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
          </div>


          <div class="products text-center">
            @foreach ($products as $product)
                <div class="product">
                  <a href="{{ route('shop.show', $product->slug) }}"><img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="product"></a>
                  <a href="{{ route('shop.show', $product->slug) }}"><span class="product-name">{{ $product->name }}</span></a>
                  <div class="product-price">{{ $product->presentPrice() }}</div>
                </div>
            @endforeach
          </div> <!-- end products -->

          <div class="text-center button-container">
            <a href="{{ route('shop.index') }}" class="button">View more products</a>
          </div>

        </div>  <!-- end container -->

      </div> <!-- end Featured-section -->

      <div class="blog-section">
        <div class="container">
          <h1 class="text-center">From Our Blog</h1>
          <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, officia laborum dolor repellat suscipit impedit consequatur explicabo. Quibusdam, fuga consectetur.</p>

          <div class="blog-posts">
            <div class="blog-post">
              <a href="#"><img src="img/blog1.png" alt="blog image"></a>
              <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
              <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit est blanditiis saepe maiores, quos ipsa laboriosam nihil debitis id distinctio.</div>
            </div>

            <div class="blog-post">
              <a href="#"><img src="img/blog1.png" alt="blog image"></a>
              <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
              <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit est blanditiis saepe maiores, quos ipsa laboriosam nihil debitis id distinctio.</div>
            </div>

            <div class="blog-post">
              <a href="#"><img src="img/blog1.png" alt="blog image"></a>
              <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
              <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit est blanditiis saepe maiores, quos ipsa laboriosam nihil debitis id distinctio.</div>
            </div>
          </div> <!-- end blog-posts -->
        </div> <!-- end container -->
      </div> <!-- end blog-section -->

      <footer>
        <div class="footer-content container">
          <div class="made-with">Made with <i class="fa fa-heart"></i> By Andre Madarang</div>
          <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
      </footer>
    </body>
</html>
