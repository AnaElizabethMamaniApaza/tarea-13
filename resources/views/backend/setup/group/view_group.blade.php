@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Lista de Grupos</h3>
                            <a href="{{ route('student.group.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Agregar Grupo</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">Nr.</th>
                                            <th>Nombre del Grupo</th>
                                            <th width="25%">Accion</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allData as $key => $group)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $group->name }}</td>
                                            <td>
                                                <a href="{{ route('student.group.edit', $group->id) }}" class="btn btn-info">Cambiar</a>
                                                <a href="{{ route('student.group.delete', $group->id) }}" class="btn btn-danger" id="delete">Eliminar</a>

                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>





@endsection
