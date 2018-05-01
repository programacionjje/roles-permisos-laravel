@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de usuarios</div>

                  <div class="card-body">
                      <div class="row justify-content-end pb-2">
                        <a href="#" class="btn btn-success">Nuevo usuario</a>
                      </div>

                      <table class="table">
                        <thead>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($users as $usuario)
                            <tr>
                              <td>{{ $usuario->name }}</td>
                              <td>{{ $usuario->email }}</td>
                              <td>
                                <a href="#" class="btn btn-primary">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
