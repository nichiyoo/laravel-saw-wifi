<?php

return [
    'title' => 'Tentang Proyek Ini',
    'description' => 'Sistem Pendukung Keputusan Penempatan Wi-Fi Gratis JSS',

    'overview' => [
        'title' => 'SPK Penempatan Wi-Fi Gratis JSS',
        'body' => 'Sistem Pendukung Keputusan untuk memprioritaskan penempatan titik akses Wi-Fi gratis Jogja Smart Service (JSS) di 14 kemantren Kota Yogyakarta, dibangun dengan Laravel dan algoritma SAW (Simple Additive Weighting).',
    ],

    'background' => [
        'title' => 'Latar Belakang',
        'body' => 'Kota Yogyakarta menyediakan Wi-Fi publik gratis melalui program Jogja Smart Service. Dengan anggaran infrastruktur yang terbatas, kota membutuhkan cara berbasis data untuk menentukan kemantren mana yang harus menerima titik akses baru terlebih dahulu. Sistem ini mengurutkan 14 kemantren berdasarkan prioritas menggunakan empat kriteria: kepadatan penduduk, jumlah pengguna Wi-Fi JSS yang ada, jumlah titik akses aktif, dan swadaya masyarakat yang terkumpul.',
    ],

    'saw' => [
        'title' => 'Apa itu SAW?',
        'p1' => 'Simple Additive Weighting (SAW) adalah salah satu metode yang paling banyak digunakan dalam Pengambilan Keputusan Multi-Atribut (MADM). Ide intinya cukup sederhana, diberikan sekumpulan kandidat dan sekumpulan kriteria berbobot, SAW menemukan kandidat terbaik dengan memberikan skor pada setiap kandidat terhadap setiap kriteria dan menjumlahkan hasilnya.',
        'p2' => 'Prosesnya bekerja dalam tiga langkah. Pertama, setiap nilai kriteria mentah dinormalisasi ke skala 0–1 relatif terhadap nilai terbaik di kolomnya, kriteria benefit (di mana nilai lebih tinggi lebih baik) dibagi dengan maksimum kolom, dan kriteria cost (di mana nilai lebih rendah lebih baik) menggunakan minimum kolom dibagi nilai. Kedua, setiap nilai yang dinormalisasi dikalikan dengan bobot kriterianya. Ketiga, nilai-nilai berbobot tersebut dijumlahkan menjadi satu skor preferensi per kandidat. Kandidat dengan skor tertinggi adalah prioritas utama.',
        'p3' => 'SAW dipilih untuk masalah ini karena transparan, mudah diaudit, dan cocok untuk kasus di mana kriteria memiliki tingkat kepentingan yang berbeda, yang persis seperti kasus di sini, di mana jumlah titik akses yang ada (kesenjangan infrastruktur) diberi bobot lebih tinggi daripada kepadatan penduduk.',
    ],

    'criteria' => [
        'title' => 'Kriteria',
        'code' => 'Kode',
        'criterion' => 'Kriteria',
        'type' => 'Tipe',
        'weight' => 'Bobot',
        'footer' => 'Kriteria benefit memberikan reward pada kemantren dengan nilai lebih tinggi. Kriteria cost memberikan reward pada kemantren dengan nilai lebih rendah, kemantren dengan titik akses yang lebih sedikit atau dana swadaya yang lebih kecil dianggap lebih membutuhkan dukungan.',
    ],

    'references' => [
        'title' => 'Referensi',
    ],

    'downloads' => [
        'title' => 'Unduhan',
        'dataset' => 'Unduh Dataset (CSV)',
        'journal' => 'Unduh Makalah (PDF)',
    ],
];
