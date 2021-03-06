@extends ('layouts.master')

@section ('content')
<div class="col-md-8">
  <h3 class="pb-3 mb-4 font-italic border-bottom">
    Login
  </h3>

  <form method="POST" action="/login">

    {{ csrf_field() }}
    
    <div class="form-group">
      <label for="email">Email:</label> 
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label> 
      <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>

    
    @include('layouts.errors')

  </form>

</div>
@endsection