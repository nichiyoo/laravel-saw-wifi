<?php

return [
    'title' => 'Petungan SPK',
    'description' => 'Pemeringkatan kemantren SAW adhedhasar kriteria boboted',

    'explanation' => [
        'title' => 'Tegese Iki',
        'ranked_first' => '<strong>:kemantren</strong> nempati peringkat pisanan kanthi skor <strong>:score</strong>, ndadekake kemantren iki prioritas paling dhuwur kanggo penempatan titik akses Wi-Fi gratis JSS anyar adhedhasar kriteria lan bobot saiki.',
        'evaluated' => 'Total <strong>:count kemantren</strong> dievaluasi nggunakake metode Simple Additive Weighting (SAW). Kriteria benefit (ijo) menehi reward marang nilai mentah luwih dhuwur, luwih akeh pangguna JSS utawa kapadhetan pendhudhuk luwih dhuwur nambahi skor. Kriteria cost (kuning) menehi reward marang nilai mentah luwih murah, titik akses luwih sithik utawa swadaya masyarakat luwih cilik nuduhake kabutuhan luwih gedhe.',
        'weights' => 'Bobot bisa diatur kapan wae saka <a href=":url" class="text-primary-500 hover:underline">kaca Metrik</a> kanggo nyerminake prioritas kebijakan saiki, lan petungan bisa dijalanake ulang kanthi langsung.',
    ],

    'ranking' => [
        'title' => 'Asil Pemeringkatan',
        'rank' => 'Peringkat',
        'kemantren' => 'Kemantren',
        'score' => 'Skor',
    ],

    'criteria' => [
        'title' => 'Kriteria sing Digunakake',
        'variable' => 'Variabel',
        'type' => 'Jinis',
        'weight' => 'Bobot',
    ],
];
