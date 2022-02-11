   @if(session()->has('error'))
      <p class="text-danger">{{session('error')}}</p>
    @endif