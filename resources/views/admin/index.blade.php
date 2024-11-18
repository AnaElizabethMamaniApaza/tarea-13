@extends('admin.admin_master')
@section('admin')
    @php

    $totalStudent = DB::table('users')
        ->where('usertype', 'Student')
        ->count();
    $totalEmployee = DB::table('users')
        ->where('usertype', 'Employee')
        ->count();

    @endphp
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Cantidad de Estudiantes</p>
                                    <h3 class="text-white mb-0 font-weight-500">{{ $totalStudent }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
