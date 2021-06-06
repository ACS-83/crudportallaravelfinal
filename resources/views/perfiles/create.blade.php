<x-plantilla>
    <x-slot name="titulo">Crear perfil</x-slot>
    <x-slot name="cabecera">Nuevo perfil</x-slot>
    {{-- Componente de errores --}}
    <x-errores></x-errores>
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('perfiles.store') }}" class=" p-4 bg-secondary text-light">
    {{-- Recogida de datos --}}
    @csrf
    <x-form-input name="nombre" label="Nombre perfil" />
    <x-form-input name="descripcion" label="Descripcion"/>
    {{-- Botonera (enviar, restaurar, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Enviar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Limpiar</button>
        <a href="{{route('perfiles.index')}}" class="btn btn-primary"><i class="fas fa-undo"></i> Volver</a>
    </div>
</form>
</x-plantilla>
