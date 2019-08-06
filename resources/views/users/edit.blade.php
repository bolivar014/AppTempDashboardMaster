@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header" style="background: black!important; color: white!important;">
                        <h5 class="card-title text-center">
                            <strong>Editar Perfil</strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/users/update') }}" method="POST">
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="txtCompany" id="txtCompany" placeholder="Company" value="Creative Code Inc.">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" value="{{ $user->password }}">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="text" class="form-control" name="txtImage" id="txtImage" placeholder="URL Image" value="{{ $user->image }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="txtFirstName" id="txtFirstName" placeholder="First Name" value="{{ $user->first_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" name="txtLastName" id="txtLastName" placeholder="Last Name" value="{{ $user->last_name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" name="txtAddress" id="txtAddress" placeholder="Address" value="{{ $user->address }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Ciudad</label>
                                        <input type="text" class="form-control" name="txtCity" id="txtCity" placeholder="City" value="{{ $user->city }}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Pais</label>
                                        <input type="text" class="form-control" name="txtCountry" id="txtCountry" placeholder="Country" value="{{ $user->country }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Codigo Postal</label>
                                        <input type="text" class="form-control" name="txtZipCode" id="txtZipCode" placeholder="ZIP Code" value="{{ $user->code_country }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea class="form-control textarea" name="txtAboutMe" id="txtAboutMe">{{ $user->about_me }}</textarea>
                                    </div>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <a class="btn btn-danger btn-round" value="Regresar" href="{{ url('/users') }}">Regresar</a>
                                    <button type="submit" class="btn btn-primary btn-round">Registrar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection