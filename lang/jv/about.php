<?php

return [
    'title' => 'Bab Proyek Iki',
    'description' => 'Sistem Pendhukung Keputusan Penempatan Wi-Fi Gratis JSS',

    'overview' => [
        'title' => 'SPK Penempatan Wi-Fi Gratis JSS',
        'body' => 'Sistem Pendhukung Keputusan kanggo nggoleki prioritas penempatan titik akses Wi-Fi gratis Jogja Smart Service (JSS) ing 14 kemantren Kutha Yogyakarta, dibangun nganggo Laravel lan algoritma SAW (Simple Additive Weighting).',
    ],

    'background' => [
        'title' => 'Latar Belakang',
        'body' => 'Kutha Yogyakarta nyedhiyakake Wi-Fi publik gratis liwat program Jogja Smart Service. Kanthi anggaran infrastruktur sing winates, kutha mbutuhake cara adhedhasar data kanggo nemtokake kemantren endi sing kudu nampa titik akses anyar luwih dhisik. Sistem iki menehi urutan 14 kemantren adhedhasar prioritas nggunakake papat kriteria: kapadhetan pendhudhuk, cacah pangguna Wi-Fi JSS sing ana, cacah titik akses aktif, lan swadaya masyarakat sing wis terkumpul.',
    ],

    'saw' => [
        'title' => 'Apa iku SAW?',
        'p1' => 'Simple Additive Weighting (SAW) minangka salah siji metode sing paling akeh digunakake ing Pengambilan Keputusan Multi-Atribut (MADM). Ide utamane cukup gampang, diwenehi sekumpulan kandidat lan sekumpulan kriteria boboted, SAW nemokake kandidat paling apik kanthi menehi skor saben kandidat marang saben kriteria banjur dijumlahake hasilne.',
        'p2' => 'Prosese mlaku ing telung langkah. Kapisan, saben nilai kriteria mentah dinormalisasi menyang skala 0–1 relatif marang nilai paling apik ing kolomé, kriteria benefit (ing ngendi nilai luwih dhuwur luwih apik) dibagi karo maksimum kolom, lan kriteria cost (ing ngendi nilai luwih murah luwih apik) nggunakake minimum kolom dibagi nilai. Kapindho, saben nilai sing wis dinormalisasi dikalekake karo bobot kritériane. Katelu, nilai-nilai boboted kasebut dijumlahake dadi siji skor preferensi saben kandidat. Kandidat sing duwe skor paling dhuwur minangka prioritas utama.',
        'p3' => 'SAW dipilih kanggo masalah iki amarga transparan, gampang diaudit, lan cocok kanggo kasus ing ngendi kriteria duwe tingkat kepentingan sing beda, sing persis kaya kasus ing kene, ing ngendi cacah titik akses sing ana (kesenjangan infrastruktur) diboboti luwih abot tinimbang kapadhetan pendhudhuk.',
    ],

    'criteria' => [
        'title' => 'Kriteria',
        'code' => 'Kode',
        'criterion' => 'Kriteria',
        'type' => 'Jinis',
        'weight' => 'Bobot',
        'footer' => 'Kriteria benefit menehi reward marang kemantren sing duwe nilai luwih dhuwur. Kriteria cost menehi reward marang kemantren sing duwe nilai luwih murah, kemantren sing duwe titik akses luwih sithik utawa dana swadaya sing luwih cilik dianggep luwih mbutuhake dhukungan.',
    ],

    'references' => [
        'title' => 'Referensi',
    ],

    'downloads' => [
        'title' => 'Undhuhan',
        'dataset' => 'Undhuh Dataset (CSV)',
        'journal' => 'Undhuh Makalah (PDF)',
    ],
];
