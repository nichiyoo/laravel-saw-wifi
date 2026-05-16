<?php

return [
    'title' => 'Perhitungan DSS',
    'description' => 'Peringkat SAW kemantren dumasar kriteria bobot',

    'explanation' => [
        'title' => 'Naon Hartosna Ieu',
        'ranked_first' => '<strong>:kemantren</strong> nempatan peringkat kahiji sareng skor <strong>:score</strong>, ngajadikanana kemantren prioritas pangluhurna pikeun penempatan titik aksés Wi-Fi gratis JSS anyar dumasar kriteria sareng bobot anu ayeuna.',
        'evaluated' => 'Total <strong>:count kemantren</strong> dievaluasi nganggo metode Simple Additive Weighting (SAW). Kriteria manfaat (héjo) ngahargaan nilai mentah langkung luhur — pangguna JSS langkung seueur atanapi kapadetan penduduk langkung luhur ningkatkeun skor. Kriteria biaya (konéng) ngahargaan nilai mentah langkung handap — titik aksés anu aya langkung sedikit atanapi dana mandiri masarakat langkung sedikit nunjukkeun kabutuhan anu langkung ageung.',
        'weights' => 'Bobot tiasa disaluyukeun iraha waé tina <a href=":url" class="text-primary-500 hover:underline">halaman Métrik</a> pikeun ngagambarkeun prioritas kabijakan ayeuna, sareng perhitungan tiasa dijalankeun deui sacara instan.',
    ],

    'ranking' => [
        'title' => 'Hasil Peringkat',
        'rank' => 'Peringkat',
        'kemantren' => 'Kemantren',
        'score' => 'Skor',
    ],

    'criteria' => [
        'title' => 'Kriteria anu Dianggo',
        'variable' => 'Variabel',
        'type' => 'Jenis',
        'weight' => 'Bobot',
    ],
];
