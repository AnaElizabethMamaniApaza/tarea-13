@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Cambiar Contraseña</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">



                                        <div class="form-group">

                                            <h5>Contraseña Actual <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="oldpassword" id="current_password" class="form-control" required="">
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <h5>Nueva Contraseña <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password" id="password" class="form-control" required="">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <h5>Confirmar Contraseña <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="">
                                                @error('password')
                                                <span class="text-danger">¡La Contraseña No Coincide!</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Cambiar">
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
