<x-plantilla>
    <x-slot name="titulo">Crear usuario</x-slot>
    <x-slot name="cabecera">Nuevo usuario</x-slot>
    {{-- Componente de errores --}}
    <x-errores></x-errores>
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('usuarios.store') }}" class=" p-4 bg-secondary text-light">
    {{-- Recogida de datos --}}
    @csrf
    <x-form-input name="nomusu" label="Nombre usuario" />
    <x-form-input name="email" label="Mail" type="mail" />
    <x-form-input name="localidad" label="Localidad" />
    <x-form-select name="perfil_id" :options="$misPerfiles" label="Perfil (selecciona)" />

    {{-- <x-form-select name="perfil_id" :options="$misPerfiles" label="(selecciona)" /> --}}
    {{-- Botonera (enviar, restaurar, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Enviar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Limpiar</button>
        <a href="{{route('usuarios.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Volver</a>
    </div>
</form>
</x-plantilla>
