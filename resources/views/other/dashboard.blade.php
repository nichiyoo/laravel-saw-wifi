<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>Dashboard</x-slot:title>
    <x-slot:description>Welcome back, {{ Auth::user()->name }}</x-slot:description>
  </x-dashboard.heading>

  <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4">
    @foreach ($widgets as $widget)
      @continue($widget->show == false)
      <div class="p-6 border rounded-xl bg-base-50 border-base-200">
        <div class="flex flex-col gap-2">
          <div class="flex items-start justify-between">
            <span class="w-4/5 text-3xl font-bold">{{ $widget->value }}</span>
            <i data-lucide="{{ $widget->icon }}" class="flex-none text-primary-500 size-5"></i>
          </div>
          <div class="flex flex-col text-sm">
            <h5 class="font-medium">{{ $widget->label }}</h5>
            <p class="truncate text-base-400">{{ $widget->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <x-ui.card class="hidden xl:block">
    <x-slot:header>
      <i data-lucide="bar-chart-2" class="size-5 text-primary-500"></i>
      <h5>Kemantren Comparison</h5>
    </x-slot:header>
    <div class="h-[400px]">
      <canvas id="comparisonChart"></canvas>
    </div>
  </x-ui.card>

  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const chart = document.getElementById('comparisonChart');
        const labels = @json($chart->pluck('label'));

        const data = {
          'jss_users': @json($chart->pluck('jss_users')),
          'wifi_count': @json($chart->pluck('wifi_count')),
        }

        new Chart(chart, {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [{
              label: 'JSS Users',
              data: data['jss_users'],
              backgroundColor: '#884c12',
              borderRadius: 4,
              yAxisID: 'y',
            }, {
              label: 'WiFi Points',
              data: data['wifi_count'],
              backgroundColor: '#b97338',
              borderRadius: 4,
              yAxisID: 'y1',
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
              indexAxis: 'y',
              x: {
                ticks: {
                  maxRotation: 0
                }
              },
              y: {
                beginAtZero: true,
                position: 'left',
                title: {
                  display: true,
                  text: 'JSS Users'
                }
              },
              y1: {
                beginAtZero: true,
                position: 'right',
                title: {
                  display: true,
                  text: 'WiFi Points'
                },
                grid: {
                  drawOnChartArea: false
                }
              }
            },
            plugins: {
              legend: false
            }
          }
        });
      });
    </script>
  @endpush
</x-dashboard-layout>
