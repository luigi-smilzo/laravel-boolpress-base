<header class="MainHeader navbar-expand navbar-dark bg-primary p-3 d-flex">
    <div class="MainHeader-logo text-white">
        <h2>Lara_orm</h2>
    </div>
    <div class="MainHeader-nav ml-auto">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Archive</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">New post</a></li>
        </ul>
    </div>
</header>