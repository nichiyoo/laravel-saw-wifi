<?php

return [
    'title' => 'Ngeunaan Proyék Ieu',
    'description' => 'Sistem Pendukung Keputusan Penempatan Wi-Fi Gratis JSS',

    'overview' => [
        'title' => 'DSS Penempatan Wi-Fi Gratis JSS',
        'body' => 'Sistem Pendukung Keputusan pikeun nangtukeun prioritas penempatan titik aksés Wi-Fi gratis Jogja Smart Service (JSS) di 14 kemantren Kota Yogyakarta, diwangun nganggo Laravel sareng algoritma SAW (Simple Additive Weighting).',
    ],

    'background' => [
        'title' => 'Latar Belakang',
        'body' => 'Kota Yogyakarta nyayogikeun Wi-Fi umum gratis ngaliwatan program Jogja Smart Service. Kalayan anggaran infrastruktur anu terbatas, kota peryogi cara berbasis data pikeun mutuskeun kemantren mana anu kedah nampi titik aksés anyar tiheula. Sistem ieu ngarangking 14 kemantren dumasar prioritas nganggo opat kriteria: kapadetan penduduk, jumlah pangguna Wi-Fi JSS anu aya, jumlah titik aksés aktip, sareng dana mandiri masarakat anu dikumpulkeun.',
    ],

    'saw' => [
        'title' => 'Naon éta SAW?',
        'p1' => 'Simple Additive Weighting (SAW) mangrupikeun salah sahiji metode anu paling seueur dianggo dina Pengambilan Keputusan Multi-Atribut (MADM). Ideu utamana saderhana, upami aya sakumpulan kandidat sareng kriteria bobot, SAW milarian kandidat pangsaéna ku cara nilaikeun unggal hiji dumasar sadaya kriteria sareng ngajumlahkeun hasilna.',
        'p2' => 'Prosésna tiasa dina tilu léngkah. Kahiji, unggal nilai kriteria mentah dinormalisasi kana skala 0–1 relatip kana nilai pangsaéna dina kolomna, kriteria manfaat (anu langkung luhur langkung saé) dibagi ku maksimum kolom, sareng kriteria biaya (anu langkung handap langkung saé) nganggo minimum kolom dibagi ku nilaina. Kadua, unggal nilai anu dinormalisasi dikalikeun ku bobot kritérianya. Katilu, nilai-nilai bobot éta dijumlahkeun jadi hiji skor preferensi tunggal per kandidat. Kandidat anu gaduh skor pangluhurna mangrupikeun prioritas utama.',
        'p3' => 'SAW dipilih pikeun masalah ieu kusabab transparan, gampang diaudit, sareng cocog pikeun kasus dimana kriteria gaduh tingkat kapentingan anu béda, anu persis kasus di dieu, dimana jumlah titik aksés anu aya (kasenjangan infrastruktur) dibobotkeun langkung beurat tibatan kapadetan penduduk.',
    ],

    'criteria' => [
        'title' => 'Kriteria',
        'code' => 'Kode',
        'criterion' => 'Kriteria',
        'type' => 'Jenis',
        'weight' => 'Bobot',
        'footer' => 'Kriteria manfaat ngahargaan kemantren anu gaduh nilai langkung luhur. Kriteria biaya ngahargaan kemantren anu gaduh nilai langkung handap — kemantren anu gaduh titik aksés langkung sedikit atanapi dana mandiri langkung sedikit dianggap langkung peryogi bantuan.',
    ],

    'references' => [
        'title' => 'Rujukan',
    ],

    'downloads' => [
        'title' => 'Unduhan',
        'dataset' => 'Unduh Dataset (CSV)',
        'journal' => 'Unduh Makalah (PDF)',
    ],
];
