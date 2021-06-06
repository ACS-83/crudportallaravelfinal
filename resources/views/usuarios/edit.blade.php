<x-plantilla>
    <x-slot name="titulo">Editar usuario</x-slot>
    <x-slot name="cabecera">Modificar usuario</x-slot>
    {{-- Componente de errores --}}
    <x-errores></x-errores>
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('usuarios.update', $usuario) }}" class=" p-4 bg-secondary text-light">
    {{-- Muestra de datos --}}
    @csrf
    @method('PUT')
    @bind($usuario)
    <x-form-input name="nomusu" label="Nombre usuario" />
    <x-form-input name="email" label="Mail" type="mail" />
    <x-form-input name="localidad" label="Localidad" />
    <x-form-select name="perfil_id" :options="$misPerfiles" label="Perfil (selecciona)" />

    {{-- Botonera (enviar, limpiar campos, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Actualizar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Restaurar</button>
        <a href="{{route('usuarios.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Volver</a>
    </div>
</form>
</x-plantilla>
