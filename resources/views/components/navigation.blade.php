<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Cursos</a></li>
            <li><a href="{{ route('contact-us.index') }}" class="{{ request()->routeIs('contact-us.*') ? 'active' : '' }}">Contacto</a></li>
        </ul>
    </nav>
</header>