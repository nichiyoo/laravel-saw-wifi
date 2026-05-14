<x-dashboard-layout>
  <x-dashboard.heading>
    <x-slot:title>About This Project</x-slot:title>
    <x-slot:description>JSS Free Wi-Fi Placement Decision Support System</x-slot:description>
  </x-dashboard.heading>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="info" class="size-5 text-primary-500"></i>
      <h5>JSS Free Wi-Fi Placement DSS</h5>
    </x-slot:header>

    <div class="grid gap-4 text-sm leading-relaxed">
      <p>
        A Decision Support System for prioritising the placement of Jogja Smart Service (JSS) free Wi-Fi access points
        across the 14 kemantren of Yogyakarta City, built with Laravel and the SAW (Simple Additive Weighting)
        algorithm.
      </p>

      <h6 class="font-semibold text-base-800">Background</h6>

      <p>
        The City of Yogyakarta provides free public Wi-Fi through its Jogja Smart Service programme. With limited
        infrastructure budget, the city needs a data-driven way to decide which kemantren should receive new access
        points first. This system ranks all 14 kemantren by priority using four criteria: population density, number
        of existing JSS Wi-Fi users, number of active access points, and community self-funding collected.
      </p>
    </div>
  </x-ui.card>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="sigma" class="size-5 text-primary-500"></i>
      <h5>What is SAW?</h5>
    </x-slot:header>

    <div class="grid gap-4 text-sm leading-relaxed">
      <p>
        Simple Additive Weighting (SAW) is one of the most widely used methods in Multi-Attribute Decision Making
        (MADM). The core idea is straightforward, given a set of candidates and a set of weighted criteria, SAW finds
        the best candidate by scoring each one against every criterion and summing the results.
      </p>
      <p>
        The process works in three steps. First, each raw criterion value is normalised to a 0–1 scale relative to the
        best value in its column, benefit criteria (where higher is better) are divided by the column maximum, and
        cost criteria (where lower is better) use the column minimum divided by the value. Second, each normalised
        value is multiplied by its criterion weight. Third, those weighted values are summed into a single preference
        score per candidate. The candidate with the highest score is the top priority.
      </p>
      <p>
        SAW is chosen for this problem because it is transparent, easy to audit, and well-suited to cases where
        criteria carry different levels of importance, which is exactly the case here, where the number of existing
        access points (infrastructure gap) is weighted more heavily than population density.
      </p>
    </div>
  </x-ui.card>


  <x-ui.table>
    <x-slot:title>
      <i data-lucide="table" class="size-5 text-primary-500"></i>
      <h4>Criteria</h4>
    </x-slot:title>

    <x-slot:head>
      <th>Code</th>
      <th>Criterion</th>
      <th>Type</th>
      <th>Weight</th>
    </x-slot:head>

    <x-slot:body>
      @foreach ($metrics as $metric)
        <tr>
          <td>C{{ $loop->iteration }}</td>
          <td>{{ $metric->variable->label() }}</td>
          <td>
            <x-ui.badge class="{{ $metric->type->style() }}">
              {{ $metric->type->label() }}
            </x-ui.badge>
          </td>
          <td>{{ $metric->weight * 100 }}%</td>
        </tr>
      @endforeach
    </x-slot:body>

    <x-slot:footer>
      <div class="grid gap-2 text-sm">
        <p>
          Benefit criteria reward kemantren with higher values. Cost criteria reward kemantren with lower values, a
          kemantren with fewer existing access points or less collected funding is considered more in need of support.
        </p>
      </div>
    </x-slot:footer>
  </x-ui.table>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="book-open" class="size-5 text-primary-500"></i>
      <h5>References</h5>
    </x-slot:header>

    <ul class="grid gap-2 text-sm list-disc list-inside">
      <li>Fishburn, P. C. (1967). Additive utilities with incomplete product set.</li>
      <li>Kusumadewi, S. et al. (2006). <em>Fuzzy Multi-Attribute Decision Making</em>. Graha Ilmu.</li>
      <li>Satu Data Indonesia, <a href="https://data.go.id" target="_blank"
          class="text-primary-500 hover:underline">data.go.id</a></li>
    </ul>
  </x-ui.card>

  <x-ui.card>
    <x-slot:header>
      <i data-lucide="download" class="size-5 text-primary-500"></i>
      <h5>Downloads</h5>
    </x-slot:header>

    <div class="flex flex-wrap gap-3">
      <a href="{{ route('dashboard.dataset') }}">
        <x-ui.button>
          <i data-lucide="file-text" class="size-5"></i>
          <span>Download Dataset (CSV)</span>
        </x-ui.button>
      </a>
      <a href="{{ route('dashboard.journal') }}">
        <x-ui.button variant="outline">
          <i data-lucide="file-text" class="size-5"></i>
          <span>Download Paper (PDF)</span>
        </x-ui.button>
      </a>
    </div>
  </x-ui.card>
</x-dashboard-layout>
