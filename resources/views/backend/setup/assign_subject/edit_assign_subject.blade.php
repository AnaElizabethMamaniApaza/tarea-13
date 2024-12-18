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
                    <h4 class="box-title">Cambiar el plan de estudios</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('update.assign.subject', $editData[0]->class_id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="add_item">

                                            <div class="form-group">
                                                <h5>Nombre de la clase <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="class_id" required="" class="form-control">

                                                        <option value="" selected="" disabled="">Seleccionar clase</option>
                                                        @foreach($classes as $class)
                                                        <option value="{{ $class->id }}" {{ ($editData['0']->class_id == $class->id)? "selected":"" }}>{{ $class->name }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>

                                            @foreach($editData as $edit)
                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5>Materia <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="subject_id[]" required="" class="form-control">
                                                                    <option value="" selected="" disabled="">Elegir materia</option>
                                                                    @foreach($subjects as $subject)
                                                                    <option value="{{ $subject->id }}" {{ ($edit->subject_id == $subject->id)? "selected": "" }}>{{ $subject->name }}</option>
                                                                    @endforeach

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h5>Promedio <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="full_mark[]" value="{{ $edit->full_mark }}" class="form-control" required="">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h5>Calificación mínima de aprobación <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="pass_mark[]" value="{{ $edit->pass_mark }}" class="form-control" required="">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h5>Objetivo de calificación<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="subjective_mark[]" value="{{ $edit->subjective_mark }}" class="form-control" required="">
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

<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-4">
                    <div class="form-group">
                        <h5>Mata Pelajaran <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="subject_id[]" required="" class="form-control" style="width: 303px;">
                                <option value="" selected="" disabled="">Pilih Mata Pelajaran</option>
                                @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach

                            </select>

                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group" style="margin-left:7px;">
                        <h5>Rata - Rata <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="full_mark[]" class="form-control" required="" style="width: 137px;">
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group" style="margin-left:11px;">
                        <h5>Nilai KKM <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="pass_mark[]" class="form-control" required="" style="width: 136px;">
                        </div>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group" style="margin-left:13px;">
                        <h5>Target Nilai <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="subjective_mark[]" class="form-control" required="" style="width: 137px;">
                        </div>

                    </div>
                </div>

                <div class="col-md-2" style="padding-top: 22px;">
                    <span class="btn btn-success addeventmore" style="margin-left: 17px;"><i class="fa fa-plus-circle"></i></span>
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
