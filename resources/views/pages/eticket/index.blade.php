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
                <button class="btn btn-primary " data-toggle="modal" data-target="#myModalAdd"><i
                        class="fa fa-plus"></i> Add
                    Data</button>
                <a href="/komputer/print_all" type="button" class="btn btn-success mb-3" target="_blank"><i
                        class="fa fa-print"></i>
                    Print Data</a>
                <br><br>
                <table class="table table-hover dataTable table-striped w-full" id="myTable" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode FA</th>
                            <th>Printer Name</th>
                            <th>Printer Type</th>
                            <th>Ink Type</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>





@endsection
