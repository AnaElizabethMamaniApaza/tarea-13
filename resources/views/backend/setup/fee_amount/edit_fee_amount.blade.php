@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Cambiar la Factura</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('update.fee.amount', $editData[0]->fee_category_id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="add_item">

                                            <div class="form-group">
                                                <h5>Categoría<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="fee_category_id" required="" class="form-control">

                                                        <option value="" selected="" disabled="">Seleccionar Financiación</option>
                                                        @foreach($fee_categories as $category)
                                                        <option value="{{ $category->id }}" {{ ($editData['0']->fee_category_id == $category->id)? "selected":"" }}>{{ $category->name }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>

                                            @foreach($editData as $edit)
                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <h5>Clase<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="class_id[]" required="" class="form-control">
                                                                    <option value="" selected="" disabled="">Seleccionar Clase</option>
                                                                    @foreach($classes as $class)
                                                                    <option value="{{ $class->id }}" {{ ($edit->class_id == $class->id)? "selected": "" }}>{{ $class->name }}</option>
                                                                    @endforeach

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <h5>Monto de la Factura (Rp. ) <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" min="0" name="amount[]" value="{{ $edit->amount }}" class="form-control" required="">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2" style="padding-top: 22px;">
                                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Ubah">
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

<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Kelas <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="class_id[]" required="" class="form-control" style="width: 386px;">
                                <option value="" selected="" disabled="">Pilih Kelas</option>
                                @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group" style="margin-left:8px;">
                        <h5>Jumlah Tagihan (Rp. ) <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="number" min="0" name="amount[]" class="form-control" required="" style="width: 387px;">
                        </div>

                    </div>
                </div>

                <div class="col-md-2" style="padding-top: 22px;">
                    <span class="btn btn-success addeventmore" style="margin-left:17px;"><i class="fa fa-plus-circle"></i></span>
                    <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var counter = 0;
        $(document).on("click", ".addeventmore", function() {
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click", '.removeeventmore', function(event) {
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1;
        });
    });
</script>

@endsection
