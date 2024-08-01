<nav class="nav-section">
    <div class="container">
        <ul class="main-menu">
            @foreach (config('navbar') as $nav)
                <li><a href="index-2.html">{{ $nav['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
