@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')
<h1 class="h3 mb-3"><strong>Analistik</strong> Dashboard</h1>

<div class="row">
    <div class="col-xl-12 col-xxl-8 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Berita</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle bx bx-news"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $beritas_count }} Postingan</h1>
                            {{-- <div class="mb-0">
                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Artikel Postingan</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle bx bx-news"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $artikel_count }} Postingan</h1>
                            {{-- <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Informasi</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle bx bx-info-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $informasi_count }} Postingan</h1>
                            {{-- <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Kinerja</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle bx bx-hard-hat"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $kinerja_count }} Postingan</h1>
                            {{-- <div class="mb-0">
                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Berita Nasional</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middl bx bx-world"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{ $berita_nasional_count }} Postingan</h1>
                            {{-- <div class="mb-0">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Pengunjung</h5>
                <select id="dataRange" class="form-select w-auto">
                    <option value="day">Harian</option>
                    <option value="month" selected>Bulanan</option>
                    <option value="year">Tahunan</option>
                </select>
            </div>
            <div class="card-body d-flex w-100">
                <div class="align-self-center chart chart-lg">
                    <canvas id="chartjs-dashboard-bar"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById("chartjs-dashboard-bar").getContext("2d");
        const chart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [], // Empty initially, will be filled dynamically
                datasets: [{
                    label: "Data",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [], // Empty initially
                    barPercentage: 0.75,
                    categoryPercentage: 0.5,
                }]
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                // Format tooltip value to integer
                                return context.dataset.label + ": " + Math.round(context.raw);
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        ticks: {
                            beginAtZero: true,
                            callback: function (value) {
                                // Format Y-axis labels to integers
                                return Math.round(value);
                            }
                        }
                    },
                    x: {
                        grid: { display: false },
                    }
                }
            }
        });


        const baseUrl = "{{ route('visitors.data') }}";
        function updateChart(range) {
            fetch(`${baseUrl}?range=${range}`)
                .then(response => response.json())
                .then(data => {
                    const labels = [];
                    const values = [];

                    if (range === "day") {
                        labels.push("Hari Ini");
                        values.push(data);
                    } else if (range === "month") {
                        data.forEach(item => {
                            labels.push(`Tanggal ${item.day}`);
                            values.push(item.total);
                        });
                    } else if (range === "year") {
                        data.forEach(item => {
                            labels.push(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"][item.month - 1]);
                            values.push(item.total);
                        });
                    }

                    chart.data.labels = labels;
                    chart.data.datasets[0].data = values;
                    chart.update();
                })
                .catch(err => console.error("Error fetching data:", err));
        }


        // Initial load
        updateChart("month");

        // Listen for dropdown change
        document.getElementById("dataRange").addEventListener("change", function () {
            updateChart(this.value);
            console.log(this.value);
        });
    });
</script>
@endpush

@endsection
