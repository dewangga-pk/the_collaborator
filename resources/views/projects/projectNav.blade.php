<h1 class="h3 mb-1 text-gray-800 mb-4">Regency</h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="/project/overview" class="nav-link {{ Request::segment(2) === 'overview' ? 'active' : null }}">Overview</a>
    </li>
    <li class="nav-item">
        <a href="/project/board" class="nav-link {{ Request::segment(2) === 'board' ? 'active' : null }}">Board</a>
    </li>
</ul>
