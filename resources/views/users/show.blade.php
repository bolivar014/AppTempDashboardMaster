@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ $user->image }}" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ $user->image }}" alt="...">
                                <h5 class="title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                            </a>
                            <p class="description">
                                @ {{ $user->first_name }} 
                            </p>
                        </div>
                        <p class="description text-center">
                            "{{ $user->about_me }} "
                        </p>
                    </div>
                    <div class="card-footer">
                    <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                    <h5>12
                                    <br>
                                    <small>Files</small>
                                    </h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                    <h5>2GB
                                    <br>
                                    <small>Used</small>
                                    </h5>
                                </div>
                                <div class="col-lg-3 mr-auto">
                                    <h5>24,6$
                                    <br>
                                    <small>Spent</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title text-center">Editar Perfil</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" placeholder="Username" value="{{ $user->username }} ">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" value="{{ $user->email }} ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Company" value="{{ $user->first_name }} ">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="{{ $user->last_name }} ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="{{ $user->city }}, {{ $user->country }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <input type="text" class="form-control" placeholder="City" value="{{ $user->city }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Pais</label>
                                        <input type="text" class="form-control" placeholder="Country" value="{{ $user->country }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Codigo Postal</label>
                                        <input type="text" class="form-control" placeholder="ZIP Code" value=" {{ $user->code_country }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control textarea">{{ $user->about_me }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <a type="submit" class="btn btn-danger btn-round" value="Regresar" href="{{ url('/users') }}">Regresar</a>
                                    <button type="submit" class="btn btn-primary btn-round" value="Actualizar">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection