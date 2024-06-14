<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Map</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>


                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">User</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('coordinateUsers.index') }}">Coordinates</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('places.index') }}">Map</a>
                    </li>
                </ul>
            </li>
</div>
