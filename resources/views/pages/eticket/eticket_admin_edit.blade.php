@extends('layouts.admin')
@section('title', 'Eticket | MyHelpdesk')
@section('title-sub', 'Edit Ticket')
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
        <div class="card-body">
            <div class="col-md-12">
                <form class="row g-3" method="post" action="">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="col-md-3">
                        <label for="ticket_no" class="form-label">Ticket No</label>
                        <input type="text" name="ticket_no" class="form-control" id="ticket_no"
                            value="{{$eticket->ticket_no}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="date"
                            value="{{$eticket->date}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" name="time" class="form-control" id="time"
                            value="{{$eticket->time}}" disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="id_user" class="form-label">User</label>
                        <input type="text" name="id_user" class="form-control" id="id_user"
                            value="{{$eticket->name}}" disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="problem" class="form-label">Problem</label>
                        <textarea class="form-control" rows="3" disabled>{{$eticket->problem}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="serial_number" class="form-label">Problem Type</label>
                        <select class="form-control">
                            <option value="">Power Supply</option>
                            <option value="">RAM</option>
                            <option value="">Heatsink</option>
                            <option value="">Mainboard</option>
                            <option value="">Monitor</option>
                            <option value="">LAN</option>
                            <option value="">TBS</option>
                            <option value="">TMS</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="serial_number" class="form-label">Solution</label>
                        <textarea class="form-control" rows="3" >{{$eticket->solution}}</textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="serial_number" class="form-label">Replacement Part</label>
                        <input type="text" name="serial_number" class="form-control" id="serial_number"
                            value="">
                    </div>
                    <div class="col-md-3">
                        <label for="type_asset" class="form-label">Type Asset</label>
                        <select class="form-control" id="type_asset">
                            <option value="">-</option>
                            <option value="1">Komputer</option>
                            <option value="2">Laptop</option>
                            <option value="3">Printer</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="serial_number" class="form-label">ID Kode FA</label>
                        <select class="form-control" name="id_kode_fa" id="id_kode_fa">
                         
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="serial_number" class="form-label">Status</label>
                        <select class="form-control">
                            <option value="">Open</option>
                            <option value="">On Progress</option>
                            <option value="">Pending</option>
                            <option value="">Close</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <input class="btn btn-warning" action="action" onclick="window.history.go(-1); return false;"
                            type="submit" value="Cancel" />
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
                <section class="content-header">
                    <h3>

                    </h3>
                </section>
            </div>
        </div> 
    </div>
    <!-- /.card -->
</div>
<script>
   $(document).ready(function(){
    $('#type_asset').on('change', function(){
        var id = $(this).find(':selected')[0].id;
        alert(id);
        // let id = $(this).val();
        // $('#id_kode_fa').empty();
        // $('#id_kode_fa').append(`<option value="0" disabled selected>Processing...</option>`);
        // $.ajax({
        //     type: 'GET',
        //     url: 'getIdFA',
        //     success: function(response) {
        //         var response = JSON.parse(response);
        //         console.log(response);
        //         $('#id_kode_fa').empty();
        //         $('#id_kode_fa').append(`<option value="0" disabled selected> Select id fa</option>`);
        //         response.forEach(element => {
        //             $('#id_kode_fa').append(`<option value="${element['id']}">${element['kode_fa']}</option>"`);
        //         });
        //     }
        // });
    });
   });
</script>
@endsection

    






