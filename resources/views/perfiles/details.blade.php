<x-plantilla>
    <x-slot name="titulo">Detalles</x-slot>
    <x-slot name="cabecera">ID perfil: {{$perfil->id}}</x-slot>
    <div class="card text-center w-50 mx-auto">
        <div class="card-header">
          <b>DATOS COMPLETOS</b>
        </div>
        <div class="card-body">
          <h6 class="card-title"><b>Nombre perfil: </b>{{$perfil->nombre}}</h6>
          <h6 class="card-title"><b>Descripcion: </b>{{$perfil->descripcion}}</h6>
          <h6 class="card-title"><b>Usuarios con este rol: </b>
            @foreach ( DB::table('usuarios')->where('perfil_id',$perfil->id)->get() as $key => $value)
            {{$value->nomusu}}
            @if(!$loop->last)/ @endif
            @endforeach

        </h6>
        </div>
        <div class="card-footer text-muted">
          <b>Fecha y hora registro: </b>{{$perfil->created_at}}
          <br>
          <b>Última modificación: </b>{{$perfil->updated_at}}
          <br>
          <a href="{{route('perfiles.index')}}" class="btn btn-primary w-25 mx-auto mt-3"><i class="fas fa-undo"></i> Volver</a>
        </div>
      </div>
</x-plantilla>
