<html lang="en">
    <head>  </head>
    <body></body>
<div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="card stat-card p-4 h-100 shadow-sm"
                            style="background-color: #FFFFFF; border: 1px solid #E2E8F0 !important; border-radius: 12px;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h6 class="fw-bold mb-0" style="color: #4A6741;">Rental Analytics</h6>
                                    <small class="text-muted">Books issued per day</small>
                                </div>
                                <div class="text-success small fw-bold"
                                    style="background: #E8F0E6; padding: 5px 12px; border-radius: 20px;">
                                    <i class="bi bi-graph-up-arrow"></i> +12.5%
                                </div>
                            </div>
                            <div id="overview-rentals-chart"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card stat-card p-4 h-100 shadow-sm"
                            style="background-color: #FFFFFF; border: 1px solid #E2E8F0 !important; border-radius: 12px;">
                            <h6 class="fw-bold mb-3" style="color: #4A6741;">Recent Activity</h6>

                            <div class="activity-feed">
                                <div class="d-flex border-bottom pb-3 mb-3">
                                    <div class="me-3"><i class="bi bi-plus-circle-fill" style="color: #6B8E61;"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small fw-bold">New Member Registered</p>
                                        <small class="text-muted">J.A. Thirundu • 2 mins ago</small>
                                    </div>
                                </div>
                                <div class="d-flex border-bottom pb-3 mb-3">
                                    <div class="me-3"><i class="bi bi-bookmark-check-fill" style="color: #6B8E61;"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small fw-bold">Book Issued</p>
                                        <small class="text-muted">The 5 AM Club • 15 mins ago</small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3"><i class="bi bi-exclamation-circle-fill"
                                            style="color: #DC2626;"></i></div>
                                    <div>
                                        <p class="mb-0 small fw-bold text-danger">Overdue Alert</p>
                                        <small class="text-muted">Member #4502 • 1 hour ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script>
    var options = {
        series: [{
            name: 'Books Issued',
            data: [44, 55, 41, 67, 22, 43, 21] // Example data for Mon-Sun
        }],
        chart: {
            type: 'area',
            height: 280,
            toolbar: { show: false },
            sparkline: { enabled: false }
        },
        colors: ['#6B8E61'], // Your Primary Green
        stroke: { curve: 'smooth', width: 3 },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.1,
                stops: [0, 90, 100]
            }
        },
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        dataLabels: { enabled: false },
        grid: { borderColor: '#E2E8F0', strokeDashArray: 4 }
    };

    var chart = new ApexCharts(document.querySelector("#overview-rentals-chart"), options);
    chart.render();
</script>

</body>