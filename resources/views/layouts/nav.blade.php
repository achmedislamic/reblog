<header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            @if(Auth::check())
            <a class="nav-link" href="/posts/create">Create</a>
            <a class="nav-link" href="/logout">Logout</a>
            @endif
            @if(!Auth::check())
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
            @endif
            @if(Auth::check())
            <a class="nav-link ml-auto" href="/register">{{ Auth::user()->name }}</a>
            @endif
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header>