@extends('layouts.admin')
@section('title', 'Eriwayat Computer | ITCS')
@section('title-sub', 'Eriwayat Computer')
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="">Eticket</a></li>
    <li class="breadcrumb-item active">Eriwayat</li>
</ol>
@endsection

@section('content')

<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/ekom/search" type="button" class="btn btn-warning mb-3"><i class="fa fa-search"></i> Print
                Data</a>
            <br><br>

            <table id="table-eriwayat" class="table table-hover table-striped w-full">
                <thead>
                    <tr>
                        <th>No</th>
                        <th >Kode FA</th>
                        <th width="70px">Date</th>
                        <th>Issue</th>
                        <th>Problem</th>
                        <th>Solution</th>
                        <th>Technician</th>
                    </tr>
                </thead>
                
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>





@endsection
@push('page-script')
<script>
    $(function () {
        $('#table-eriwayat').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/eticket/eriwayat',
            columns: [{
                    data: 'no',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'id_kode_fa',
                    name: 'id_kode_fa'
                },
                {
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'issue',
                    name: 'issue'
                },
                {
                    data: 'problem',
                    name: 'problem'
                },
                {
                    data: 'solution',
                    name: 'solution'
                },
                {
                    data: 'technician',
                    name: 'technician'
                }
            ],
            order : [[0, 'dsc']]
        });
    });   
    

</script>
@endpush 

