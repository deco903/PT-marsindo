<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
         @if(Auth::user())
            <form action="{{route('logout')}}" method="POST" class="d-flex">
             @csrf
              <button class="btn btn-primary" type="submit">Logout</button>
            </form>
            @else
            <button class="btn btn-primary" type="submit" onclick="window.location.href='{{route('login')}}'">Login</button>
          @endif
      </div>
    </div>
  </nav>