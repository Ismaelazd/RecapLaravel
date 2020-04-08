<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('Welcome')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (Auth::check())
            
        <li class="nav-item active">
          <a class="nav-link" href="{{route('User')}}">Users </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="{{route('Article')}}">Articles</a>
        </li>
        
        @endif
        
      </ul>
    </div>
  </nav>