<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/charts/chart-4/assets/css/chart-4.css">
<style>
    /* This creates a very soft, modern "lifted" effect */
    .custom-shadow {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease; /* Subtle animation when you hover */
    }

    .custom-shadow:hover {
        transform: translateY(-5px); /* Card lifts up slightly when hovered */
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<div class="col-6">
    <div class="card shadow-sm border-0 p-3 mt-3" style="border-radius: 15px;">
        <h5 class="text-secondary fw-bold mb-4">Daily Book Rentals</h5>
        <div id="daily-rentals-chart"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    (function () {
        function initChart() {
            var el = document.querySelector("#daily-rentals-chart");
            if (!el) return;

            var options = {
                series: [{
                    name: 'Books Rented',
                    data: [15, 22, 10, 25, 28, 18, 12] // Your rental numbers
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: { show: false },
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800, // Smooth pop-up animation
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false, // Vertical looks more modern for days
                        columnWidth: '55%',
                        borderRadius: 8,   // Nice rounded tops
                        distributed: true  // THIS ALLOWS DIFFERENT COLORS FOR EACH BAR
                    }
                },
                dataLabels: { enabled: false }, // Keeps it clean
                colors: ['#0D6EFD', '#6610F2', '#6F42C1', '#0DCAF0', '#20C997', '#63B3ED', '#ADB5BD'], 
                xaxis: {
                    categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                },
                legend: { show: false } // Hides legend since colors are self-explanatory
            };

            var chart = new ApexCharts(el, options);
            chart.render();
        }

        if (document.readyState === "complete") {
            initChart();
        } else {
            window.addEventListener("load", initChart);
        }
    })();
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://unpkg.com/bs-brain@2.0.4/components/charts/chart-4/assets/controller/chart-4.js"></script>