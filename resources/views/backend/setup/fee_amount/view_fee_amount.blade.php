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
                            <h3 class="box-title">Lista de Facturas</h3>
                            <a href="{{ route('fee.amount.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Agregar Factura"</a>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">Nr.</th>
                                            <th>Categoría de Financiación</th>
                                            <th width="30%">Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-align-center">
                                        @foreach($allData as $key => $amount)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $amount['fee_category']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('fee.amount.edit', $amount->fee_category_id) }}" class="btn btn-info">Cambiar</a>
                                                <a href="{{ route('fee.amount.details', $amount->fee_category_id) }}" class="btn btn-primary">Detalles</a>
                                                <a href="{{ route('fee.amount.delete', $amount->fee_category_id) }}" class="btn btn-danger" id="delete">Eliminar</a>
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
