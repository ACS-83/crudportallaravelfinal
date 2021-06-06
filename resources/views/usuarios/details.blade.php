<x-plantilla>
    <x-slot name="titulo">Detalles</x-slot>
    <x-slot name="cabecera">ID usuario: {{$usuario->id}}</x-slot>
    <div class="card text-center w-50 mx-auto">
        <div class="card-header">
          <b>DATOS COMPLETOS</b>
        </div>
        <div class="card-body">
          <h6 class="card-title"><b>Nombre usuario: </b>{{$usuario->nomusu}}</h6>
          <h6 class="card-title"><b>Email: </b>{{$usuario->email}}</h6>
          <h6 class="card-title"><b>Localidad: </b>{{$usuario->localidad}}</h6>
          <br>
          <h6 class="card-title"><b>Rol asignado: </b>{{(DB::table('perfils')->where('id',$usuario->perfil_id )->get())[0]->nombre}}</h6>
        </div>
        <div class="card-footer text-muted">
          <b>Fecha y hora registro: </b>{{$usuario->created_at}}
          <br>
          <b>Última modificación: </b>{{$usuario->updated_at}}
          <br>
          <a href="{{route('usuarios.index')}}" class="btn btn-primary w-25 mx-auto mt-3"><i class="fas fa-undo"></i> Volver</a>
        </div>
      </div>
</x-plantilla>
