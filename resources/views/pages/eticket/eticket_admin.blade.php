@extends('layouts.admin')
@section('title', 'Eticket | MyHelpdesk')
@section('title-sub', 'Eticket')
@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">Database</li>
    <li class="breadcrumb-item active">Printer</li>
</ol> --}}
@endsection

@section('content')

<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-envelope-open"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">OPEN</span>
                                <span class="info-box-number">
                                    1
                                    <small>Ticket</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-hourglass-half"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">ON PROCESS</span>
                                <span class="info-box-number">3 <small>Ticket</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-spinner"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">PENDING</span>
                                <span class="info-box-number">5 <small>Ticket</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-check"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">SUCCESS</span>
                                <span class="info-box-number">2 <small>Ticket</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <table class="table table-hover dataTable table-striped w-full" id="myTable" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>No Ticket</th>
                            <th>User</th>
                            <th>Problem</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $no = 1;
                    ?>
                        @foreach($ticket as $t)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$t->date}}</td>
                            <td>{{$t->time}}</td>
                            <td>{{$t->ticket_no}}</td>
                            <td>{{$t->name}}</td>
                            <td>{{$t->problem}}</td>
                            <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    Open
                                </small>
                            </td>
                            <td>
                                <a href="" class="btn-sm btn-info"><i class="fa fa-bars"></i>
                                    Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection
