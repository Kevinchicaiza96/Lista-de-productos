@extends('layouts.app')
@section('titulo', 'Gestionar productos')
@section('contenido')

    <h1>Lista de Productos</h1>
{{--     <a href="{{ route('producto.create') }}"><button>Registrar producto</button>
 --}}    </a>
    <table>
        <thead>
            <th>N°</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td>{{ /* $p->id */ $loop->iteration }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->marca }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>{{ $p->precio }}</td>
                    <td>
                        <a href="{{ route('producto.editar', ['id'=>$p->id]) }}">Editar</a>

                        |

                        <form
                            action="{{ route('producto.destroy', ['id'=>$p->id]) }}"
                            method="POST"
                            onsubmit="return confirm('Seguro?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
