<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      
      <div class="col-8 text-center">
        <a class="blog-header-logo text-dark" href="/">Blog o'sphere</a>
      </div>

      <div class="col-4 ml-auto">
      	@if( Auth::check() )
          <a href="">{{ Auth::user()->name }}</a>
          <a href="/logout">Logout</a>
        @else
          <a href="/login">Login</a>
          <a href="/register">Register</a>
        @endif
      </div>
  
    </div>
  </header>
</div>