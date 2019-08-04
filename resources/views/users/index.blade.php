@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center" style="background: black!important; color: white!important; padding-bottom: 15px!important;">
                        <h4 class="card-title">Tabla De Usuarios</h4>
                    </div>
                <div class="card-body">
                    <div class="table-responsive table-hover">
                        <table class="table text-center">
                            <thead class=" text-primary">
                                <th>Nombre</th>
                                <th>Pais</th>
                                <th>Ciudad</th>
                                <th class="">Dirección</th>
                                <th class="">Opciones</th>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->city }}</td>
                                        <td class="">{{ $user->address }}</td>
                                        <td class="">
                                            <a href="#" title="Eliminar">
                                                <i class="nc-icon nc-simple-remove text-danger" style="font-size: 30px!important;"></i>
                                            </a>
                                            <a href="{{ url('/users/'.$user->id.'/show') }}" title="Ver">
                                                <i class="nc-icon nc-zoom-split text-primary" style="font-size: 30px!important;"></i>
                                            </a>
                                            <a href="#" title="Editar">
                                                <i class="nc-icon nc-single-02 text-success" style="font-size: 30px!important;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <p>No hay usuarios disponibles disponibles...</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                <a class="btn btn-success btn-round active" href="{{ url('/users/create') }}">Agregar</a>
                </div>
            </div>
        </div>
    @endsection