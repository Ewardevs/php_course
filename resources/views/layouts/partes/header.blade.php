<header>
    <h1>Codersfree</h1>
    <nav>
        <ol>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                {{-- @dump(request()->routeIs('home')) --}}
            </li>
            <li>
                <a href="{{ route('cursos.index') }}"
                    class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">cursos</a>
                {{-- @dump(request()->routeIs('cursos.index')) --}}
            </li>
            <li>
                <a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                {{-- @dump(request()->routeIs('nosotros')) --}}
            </li>
            <li>
                <a href="{{ route('contactanos.index') }}"
                    class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">contactanos</a>
                {{-- @dump(request()->routeIs('nosotros')) --}}
            </li>
        </ol>
    </nav>
</header>
