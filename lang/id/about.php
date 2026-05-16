<?php

return [
    'title' => 'Tentang Proyek Ini',
    'description' => 'Sistem Pendukung Keputusan Penempatan Wi-Fi Gratis JSS',

    'overview' => [
        'title' => 'DSS Penempatan Wi-Fi Gratis JSS',
        'body' => 'Sebuah Sistem Pendukung Keputusan untuk memprioritaskan penempatan titik akses Wi-Fi gratis Jogja Smart Service (JSS) di 14 kemantren Kota Yogyakarta, dibangun dengan Laravel dan algoritma SAW (Simple Additive Weighting).',
    ],

    'background' => [
        'title' => 'Latar Belakang',
        'body' => 'Kota Yogyakarta menyediakan Wi-Fi publik gratis melalui program Jogja Smart Service. Dengan keterbatasan anggaran infrastruktur, kota membutuhkan cara berbasis data untuk memutuskan kemantren mana yang harus menerima titik akses baru terlebih dahulu. Sistem ini memberi peringkat pada 14 kemantren berdasarkan prioritas menggunakan empat kriteria: kepadatan penduduk, jumlah pengguna Wi-Fi JSS, jumlah titik akses aktif, dan dana mandiri masyarakat yang terkumpul.',
    ],

    'saw' => [
        'title' => 'Apa itu SAW?',
        'p1' => 'Simple Additive Weighting (SAW) adalah salah satu metode yang paling banyak digunakan dalam Multi-Attribute Decision Making (MADM). Ide utamanya sederhana, dengan sekumpulan kandidat dan kriteria berbobot, SAW menemukan kandidat terbaik dengan menilai masing-masing terhadap setiap kriteria dan menjumlahkan hasilnya.',
        'p2' => 'Prosesnya bekerja dalam tiga langkah. Pertama, setiap nilai kriteria mentah dinormalisasi ke skala 0–1 relatif terhadap nilai terbaik di kolomnya, kriteria benefit (semakin tinggi semakin baik) dibagi dengan maksimum kolom, dan kriteria cost (semakin rendah semakin baik) menggunakan minimum kolom dibagi dengan nilai. Kedua, setiap nilai yang dinormalisasi dikalikan dengan bobot kriterianya. Ketiga, nilai-nilai berbobot tersebut dijumlahkan menjadi skor preferensi tunggal per kandidat. Kandidat dengan skor tertinggi adalah prioritas utama.',
        'p3' => 'SAW dipilih untuk masalah ini karena transparan, mudah diaudit, dan cocok untuk kasus di mana kriteria memiliki tingkat kepentingan yang berbeda, seperti yang terjadi di sini, di mana jumlah titik akses yang ada (kesenjangan infrastruktur) diberi bobot lebih besar daripada kepadatan penduduk.',
    ],

    'criteria' => [
        'title' => 'Kriteria',
        'code' => 'Kode',
        'criterion' => 'Kriteria',
        'type' => 'Tipe',
        'weight' => 'Bobot',
        'footer' => 'Kriteria benefit memberi penghargaan pada kemantren dengan nilai lebih tinggi. Kriteria cost memberi penghargaan pada kemantren dengan nilai lebih rendah, kemantren dengan lebih sedikit titik akses atau dana terkumpul dianggap lebih membutuhkan dukungan.',
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
