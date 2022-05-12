@extends('layouts.admin')
@section('title', 'Eticket | MyHelpdesk')
{{-- @section('title-sub', 'Eticket') --}}
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
        <div class="card-header">
            <h3 class="card-title">Detail Ticket</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm"
                                        src="{{url('backend/dist/img/user1-128x128.jpg')}}" alt="user image">
                                    <span class="username">
                                        <a href="#">Restu Prayuda</a>
                                    </span>
                                    <span class="description">Shared publicly - 7:45 PM today</span>
                                </div>
                                <!-- /.user-block -->
                                <span style="color: #0066FF">PROBLEM</span>
                                <p>
                                    HRMS tidak bisa
                                </p>
                                <hr>
                                <span style="color: #0066FF ">SOLUTION</span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <p><strong>Ticket No :</strong></p><h3 class="text-primary">ET20220523</h3>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Date
                            <b class="d-block">2022-05-12</b>
                        </p>
                        <p class="text-sm">Time
                            <b class="d-block">07:24:25</b>
                        </p>
                    </div>

                    <h5 class="mt-5 text-muted"></h5>
                    <table class="text-muted">
                        <tr>
                            <td>Problem Type</td>
                            <td>&nbsp;:</td>
                        </tr>
                        <tr>
                            <td>Replacement Part</td>
                            <td>&nbsp;:</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>&nbsp;: <span class="badge bg-danger">Pending</span></td>
                        </tr>
                    </table>
                    <div class="mt-5 mb-3">
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection
