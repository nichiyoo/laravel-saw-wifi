<?php

return [
    'title' => 'Perhitungan SPK',
    'description' => 'Peringkat kemantren SAW berdasarkan kriteria berbobot',

    'explanation' => [
        'title' => 'Apa Artinya Ini',
        'ranked_first' => '<strong>:kemantren</strong> menempati peringkat pertama dengan skor <strong>:score</strong>, menjadikannya kemantren dengan prioritas tertinggi untuk penempatan titik akses Wi-Fi gratis JSS baru berdasarkan kriteria dan bobot saat ini.',
        'evaluated' => 'Total <strong>:count kemantren</strong> dievaluasi menggunakan metode Simple Additive Weighting (SAW). Kriteria benefit (hijau) memberikan reward pada nilai mentah yang lebih tinggi, lebih banyak pengguna JSS atau kepadatan penduduk yang lebih tinggi meningkatkan skor. Kriteria cost (kuning) memberikan reward pada nilai mentah yang lebih rendah, titik akses yang lebih sedikit atau swadaya masyarakat yang lebih kecil menunjukkan kebutuhan yang lebih besar.',
        'weights' => 'Bobot dapat disesuaikan kapan saja dari <a href=":url" class="text-primary-500 hover:underline">halaman Metrik</a> untuk mencerminkan prioritas kebijakan saat ini, dan perhitungan dapat dijalankan ulang secara instan.',
    ],

    'ranking' => [
        'title' => 'Hasil Peringkat',
        'rank' => 'Peringkat',
        'kemantren' => 'Kemantren',
        'score' => 'Skor',
    ],

    'criteria' => [
        'title' => 'Kriteria yang Digunakan',
        'variable' => 'Variabel',
        'type' => 'Tipe',
        'weight' => 'Bobot',
    ],
];
