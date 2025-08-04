@extends('layouts.dashboard')
@section('title','Survei')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@section('content')
<h1 class="mb-3 h3">
    <strong>Survei</strong>
</h1>

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('dashboard.survei.export') }}" method="GET">
            {{-- @csrf --}}
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                         <div class="col-md-6">
                            <label for="">Preset Rentang Waktu</label>
                            <select id="presetRange" onchange="applyPresetRange(this.value)" class="form-control">
                                <option value="">Pilih Rentang Waktu</option>
                                <option value="7">7 Hari Terakhir</option>
                                <option value="14">14 Hari Terakhir</option>
                                <option value="30">30 Hari Terakhir</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Tanggal</label>
                            <input type="text" name="date" id="date_range" class="form-control" placeholder="Pilih Tanggal">
                            <input type="hidden" name="start_date" id="startDate">
                            <input type="hidden" name="end_date" id="endDate">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Export</button>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('input[name="date"]').daterangepicker({
                timePicker: true,
                autoUpdateInput: false,
                locale: {
                    format: 'DD-MM-YYYY',
                    cancelLabel: 'Clear'
                }
            });

            $('input[name="date"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD-MM-YYYY') + ' : ' + picker.endDate.format('DD-MM-YYYY'));
                $('#startDate').val(picker.startDate.format('YYYY-MM-DD HH:mm:ss'));
                $('#endDate').val(picker.endDate.format('YYYY-MM-DD HH:mm:ss'));
            });

            $('input[name="date"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                $('#startDate').val('');
                $('#endDate').val('');
            });
        });

        function applyPresetRange(days) {
            if (days !== 'custom') {
                const end = moment();
                const start = moment().subtract(parseInt(days), 'days');

                $('input[name="date"]').val(start.format('DD-MM-YYYY') + ' : ' + end.format('DD-MM-YYYY'));
                $('#startDate').val(start.format('YYYY-MM-DD HH:mm:ss'));
                $('#endDate').val(end.format('YYYY-MM-DD HH:mm:ss'));
            } else {
                $('input[name="date"]').val('');
                $('#startDate').val('');
                $('#endDate').val('');
            }
        }
    </script>
@endpush
