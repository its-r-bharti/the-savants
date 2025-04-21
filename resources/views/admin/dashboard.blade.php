@extends('layouts.app') {{-- Only if using a master layout, otherwise skip this --}}

@include('admin.layout.sidebar')
@include('admin.layout.header')

{{-- <main class="ml-64 p-6 bg-gray-100 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-4 shadow rounded">
            <h4 class="text-sm text-gray-500">Total Students</h4>
            <p class="text-2xl font-bold text-blue-600">{{ $totalStudents }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <h4 class="text-sm text-gray-500">Paid Students</h4>
            <p class="text-2xl font-bold text-green-600">{{ $paidStudents }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <h4 class="text-sm text-gray-500">Unpaid Students</h4>
            <p class="text-2xl font-bold text-red-500">{{ $unpaidStudents }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <h4 class="text-sm text-gray-500">Total Income</h4>
            <p class="text-2xl font-bold text-purple-600">₹{{ number_format($totalIncome) }}</p>
        </div>
    </div>

    <!-- 📊 Chart -->
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-xl font-semibold mb-4">Income Overview</h3>
        <canvas id="incomeChart" height="100"></canvas>
    </div>
</main> --}}
admin panel

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


{{-- <script>
    // Pass PHP data to JavaScript using Blade syntax
    var chartLabels = @json($chartLabels);
    var chartValues = @json($chartValues);

    // Create the chart using Chart.js or any other charting library
    var ctx = document.getElementById('incomeChart').getContext('2d');
    var incomeChart = new Chart(ctx, {
        type: 'line',  // or 'bar', 'pie', etc.
        data: {
            labels: chartLabels,  // Months (labels)
            datasets: [{
                label: 'Total Income',
                data: chartValues,  // Corresponding income values
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> --}}



