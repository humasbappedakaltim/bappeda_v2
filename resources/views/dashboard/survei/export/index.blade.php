@extends('layouts.dashboard')
@section('title','Survei')
@push('css')
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@endpush
@section('content')
<h1 class="mb-3 h3">
    <strong>Survei</strong>
</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Tanggal</label>
                        <input type="text" name="date" id="date_range" class="form-control" placeholder="Pilih Tanggal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('input[name="date"]').daterangepicker({
                timePicker: true,
                autoUpdateInput: false,
                locale: {
                    format: 'DD-MM-YYYY',
                }
            });
            $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD-MM-YYYY') + ' : ' + picker.endDate.format('DD-MM-YYYY'));
            });

            $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        });
    </script>
@endpush
@endsection
