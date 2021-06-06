<x-plantilla>
    <x-slot name="titulo">Gestión perfil</x-slot>
    <x-slot name="cabecera">Gestión de perfiles</x-slot>
    <x-mensajes />
    <a href="{{route('perfiles.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Añadir perfil</a>
    <table class="table table-success table-hover mt-2">
      {{-- Cabecera para cada columna de la tabla --}}
        <thead class="table-dark" style="text-align: center;">
          <tr>
            <th scope="col" style="width: 12%">Detalles</th>
            <th scope="col">Nombre perfil</th>
            <th scope="col">Descripción</th>
            <th scope="col" colspan=2 class="text-center" style="width: 18.33%">Acciones</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
          {{-- Recorro con un foreach los datos de la tabla PERFILES a la vez que voy rellenando cada fila con los datos --}}
            @foreach($perfiles as $item)
          <tr>
            {{-- BOTÓN DETALLES --}}
            <th scope="row">
                <a href="{{route('perfiles.show', $item)}}" class="btn btn-secondary"><i class="fas fa-info"></i> Ampliar</a>
            </th>
            {{-- DATOS --}}
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            {{-- BOTÓN EDITAR --}}
            <td class="text-center">
                <a href="{{route('perfiles.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
            </td>
            <td class="text-center">
              {{-- BOTÓN BORRAR --}}
                <form name="as" method="POST" action="{{route('perfiles.destroy', $item)}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button>
                </form>
            </td>
          </tr>
          {{-- FINALIZO RECORRIDO FOREACH --}}
          @endforeach
        </tbody>
      </table>
 {{-- Paginador --}}
 <div class="mt-2">
    {{$perfiles->links()}}
</div>
</x-plantilla>
