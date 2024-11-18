@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">


        <section class="content">

            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Cambiar categoría de examen</h4>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('update.exam.type', $editData->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">



                                        <div class="form-group">
                                            <h5>Nombre del examen <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
                                                @error('name')
                                                <span class="text-danger">El nombre del examen que ha ingresado ya existe</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Guardar cambios">
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
