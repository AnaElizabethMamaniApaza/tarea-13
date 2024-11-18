@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Usuario</h3>
                    <a href="{{ route('user.view') }}" style="float: right;" class="btn btn-rounded btn-primary mb-5"> Regresar</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('users.update', $editData->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Acceso de Usuario <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="role" id="role" required="" class="form-control">
                                                            <option value="" selected="" disabled="">Seleccionar Acceso</option>
                                                            <option value="Admin" {{ ($editData->role == "Admin" ? "selected": "") }}>Administrador</option>
                                                            <option value="Operator" {{ ($editData->role == "Operator" ? "selected": "") }}>Operador</option>
                                                            <option value="User" {{ ($editData->role == "User" ? "selected": "") }}>Usuario</option>

                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <h5>Nombre de Usuario <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">

                                                    <h5>Email del Usuario<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" value="{{ $editData->email }}" required="">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>


                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Guardar Cambios">
                                        </div>
                                    </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>


    </div>
</div>

@endsection
