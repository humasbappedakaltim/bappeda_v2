<script src="{{ asset('asset_dashboard/js/app.js') }}"></script>
<script src="{{ asset('asset_dashboard/js/custom.js') }}"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

{{-- Jquery --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
{{-- Sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- DataTable  --}}
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    function reloadTable(id){
        let table = $(id).DataTable();
        table.cleanData;
        table.ajax.reload();
    }

    $('#logout').on('click', function () {
        event.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout!',
            reverseButtons: true,

        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }else{
                Swal.fire('Cancelled', 'Cancel Logout', 'info');
            }
        })
    })
</script>

@stack('js')
