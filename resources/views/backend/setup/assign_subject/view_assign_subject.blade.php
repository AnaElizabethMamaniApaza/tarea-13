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
                            <h3 class="box-title">Lista de plan de estudios</h3>
                            <a href="{{ route('assign.subject.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Tetapkan Kurikulum Pelajaran</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">Nr.</th>
                                            <th>Nombre de la materia</th>
                                            <th width="30%">Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-align-center">
                                        @foreach($allData as $key => $assign)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $assign['student_class']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('assign.subject.edit', $assign->class_id) }}" class="btn btn-info">Cambiar</a>
                                                <a href="{{ route('assign.subject.details', $assign->class_id) }}" class="btn btn-primary">Detalle</a>
                                                <a href="{{ route('assign.subject.delete', $assign->class_id) }}" class="btn btn-danger" id="delete">ELiminar</a>
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