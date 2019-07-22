<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">{{config('app.name', 'MemeCart')}}</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/service">Service</a></li>
      <li><a href="/posts">Posts</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/posts/create">Create Post</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>