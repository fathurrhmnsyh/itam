@extends('layouts.admin')
@section('title', 'Search Eriwayat Computer | ITCS')
@section('title-sub', 'Search Eriwayat Computer')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">IT Asset</a></li>
    <li class="breadcrumb-item ">E Riwayat</li>
    <li class="breadcrumb-item active">Search</li>
</ol>
@endsection

@section('content')

<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="example">
                <form class="form-inline" action="/eriwayat/cari" method="GET">
                    <div class="form-group">
                        <input type="text" name="cari" class="form-control" placeholder="Cari Kode FA .."
                            value="{{ old('cari') }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-outline" value="CARI">
                    </div>
                </form>
            </div>
            <br>

            <table class="table table-hover dataTable table-striped w-full" id="example1" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode FA</th>
                        <th>Date</th>
                        <th>Issue</th>
                        <th>Problem</th>
                        <th>Solution</th>
                        <th>Replacement Part</th>
                        <th>Technician</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>





@endsection
