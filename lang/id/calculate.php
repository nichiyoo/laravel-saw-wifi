<?php

return [
    'title' => 'Perhitungan DSS',
    'description' => 'Peringkat SAW kemantren berdasarkan kriteria berbobot',

    'explanation' => [
        'title' => 'Arti Hasil Ini',
        'ranked_first' => '<strong>:kemantren</strong> berada di peringkat pertama dengan skor <strong>:score</strong>, menjadikannya kemantren prioritas tertinggi untuk penempatan titik akses Wi-Fi gratis JSS baru berdasarkan kriteria dan bobot saat ini.',
        'evaluated' => 'Sebanyak <strong>:count kemantren</strong> dievaluasi menggunakan metode Simple Additive Weighting (SAW). Kriteria benefit (hijau) memberi nilai lebih tinggi pada nilai mentah yang lebih besar, lebih banyak pengguna JSS atau kepadatan penduduk yang lebih tinggi meningkatkan skor. Kriteria cost (kuning) memberi nilai lebih tinggi pada nilai mentah yang lebih rendah, lebih sedikit titik akses atau dana mandiri masyarakat yang lebih rendah menunjukkan kebutuhan yang lebih besar.',
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
