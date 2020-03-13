@extends('theme.backoffice.layouts.admin')
@section('title', 'CREAR ROL')
@section('head')
    
@endsection

@section('content')
    <div class="section">
        <p class="caption"> Introduce los Datos para crear un nuevo rol</p>
        <div class="divider"></div>
      <div id="basic-form" class="section">
        <div class="row">
          <div class="col s12 m8 offset-m2">
            <div class="card-panel">
              <h4 class="header2">Crear Nuevo Rol</h4>
              <div class="row">
                
                <form class="col s12"  action="{{route('role.store')}}" method="post">
                    @csrf
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="name" name="name" type="text">
                      <label for="first_name">Nombre del Rol</label>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="input-field col s12">
                      <textarea id="message" name="description" class="materialize-textarea"></textarea>
                      <label for="message">Descripcion</label>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Guardar
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                
@endsection

@section('foot')
    
@endsection