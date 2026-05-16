<?php

return [
    'title' => 'Pusat Bantuan',
    'description' => 'Kéngingkeun bantuan ngeunaan akun, aplikasi, atanapi topik sanésna.',

    'faq' => [
        'q1' => 'Pikeun naon aplikasi ieu?',
        'a1' => 'Ieu mangrupikeun Sistem Pendukung Keputusan (DSS) anu ngarangking 14 kemantren (distrik) Yogyakarta dumasar prioritas pikeun penempatan titik aksés Wi-Fi gratis JSS anyar. Éta nganggo metode Simple Additive Weighting (SAW) pikeun nilaikeun unggal distrik dumasar kriteria bobot.',
        'q2' => 'Kumaha peringkat dihitung?',
        'a2' => 'Unggal kandidat (distrik) dinilékeun ku cara menormalisasi nilai kriteria mentahna kana skala 0–1, ngalikeunana ku bobot anu ditugaskeun, sareng ngajumlahkeunana kana skor preferensi akhir. Kriteria manfaat (langkung luhur langkung saé) dibagi ku maksimum kolom; kriteria biaya (langkung handap langkung saé) nganggo minimum kolom dibagi ku nilaina. Kandidat anu gaduh total skor pangluhurna nempatan peringkat kahiji.',
        'q3' => 'Kriteria naon anu dianggo?',
        'a3' => 'Opat kriteria dievaluasi: kapadetan penduduk (manfaat, 15%), jumlah pangguna Wi-Fi JSS (manfaat, 25%), jumlah titik aksés aktip (biaya, 35%), sareng dana mandiri masarakat (biaya, 25%). Bobot ieu tiasa disaluyukeun tina halaman Métrik.',
        'q4' => 'Dupi kuring tiasa ngarobah bobot kriteria?',
        'a4' => 'Tiasa. Angkat ka halaman Métrik, édit métrik naon waé, sareng apdet bobotna. Saatos nyimpen, jalankeun deui perhitungan dina halaman Perhitungan DSS pikeun ningali peringkat anu diapdet.',
        'q5' => 'Kumaha cara nambah atanapi ngapdet data kandidat?',
        'a5' => 'Data kandidat tiasa diatur tina halaman Kandidat. Anjeun tiasa nambah distrik anyar, ngédit anu aya, atanapi mupus éntri anu parantos teu relevan. Dataset ogé tiasa diunduh salaku CSV tina halaman Ngeunaan.',
        'q6' => 'Kumaha cara ngapdet profil kuring?',
        'a6' => 'Klik avatar anjeun di sudut kanan luhur atanapi angkat ka Profil tina sidebar. Anjeun tiasa ngapdet nami, surélék, sareng kecap konci di dinya.',
    ],
];
