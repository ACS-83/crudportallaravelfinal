<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
        <x-slot name="cabecera">Demoscene Portal</x-slot>
            <ul class="navbar-nav">
                <li class="nav-item mx-auto">
                    <a href="{{route('usuarios.index')}}" class="btn btn-secondary">Área gestión usuarios</a>
                </li>
                <li class="nav-item mx-auto mt-3">
                    <a href="{{route('perfiles.index')}}" class="btn btn-secondary">Área gestión perfiles</a>
                </li>
            </ul>
</x-plantilla>
