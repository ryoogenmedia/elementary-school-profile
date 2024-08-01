<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @foreach (config('sidebar') as $items)
            <li class="nav-item">
                <a class="nav-link " href="{{ route($items['route-name']) }}">
                    <i class="bi bi-{{ $items['icon'] }}"></i>
                    <span>{{ $items['title'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</aside>
