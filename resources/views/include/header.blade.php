<nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- Navigation bar with a light tertiary background color -->
  <div class="container-fluid"> <!-- Fluid container to wrap the content -->

    <a class="navbar-brand" href="#">{{config('app.name')}}</a> <!-- Navbar brand displaying the application name -->

    <!-- Navbar toggle button for smaller screens -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <!-- Icon for the toggler -->
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarText">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!-- Navbar navigation links -->
        
        <!-- Navigation link for Home -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <!-- Conditional navigation links based on user authentication status -->
        @auth <!-- If user is authenticated -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">logout</a> <!-- Logout link -->
        </li>
        @else <!-- If user is not authenticated -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a> <!-- Login link -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">registration</a> <!-- Registration link -->
        </li>
        @endauth <!-- End of authentication check -->
        
      </ul>

      <!-- Displaying user's name if authenticated -->
      <span class="navbar-text">
        @auth <!-- If user is authenticated -->
          {{auth()->user()->name}} <!-- Display user's name -->
        @endauth <!-- End of authentication check -->
      </span>

    </div> <!-- End of navbar content -->

  </div> <!-- End of container fluid -->
</nav> <!-- End of navigation bar -->
