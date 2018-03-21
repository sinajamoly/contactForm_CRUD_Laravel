<nav class="navbar navbar-inverse navbar-expand-sm bg-dark">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbarNav">
                <span class="sr-only"></span>
                <span class="sr-only"></span>
                <span class="sr-only"></span>
            </button>
            <a href="#" class="navbar-brand">Blog</a>
        </div>
        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link  {{Request::is('/')?'active':''}}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{Request::is('/about')?'active':''}}">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link {{Request::is('/contact')?'active':''}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="/welcome" class="nav-link {{Request::is('/welcome')?'active':''}}">welcome</a>
                </li>
            </ul>
        </div>
    </div>
</nav>