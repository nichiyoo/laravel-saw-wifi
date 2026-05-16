<?php

return [
    'title' => 'About This Project',
    'description' => 'JSS Free Wi-Fi Placement Decision Support System',

    'overview' => [
        'title' => 'JSS Free Wi-Fi Placement DSS',
        'body' => 'A Decision Support System for prioritising the placement of Jogja Smart Service (JSS) free Wi-Fi access points across the 14 kemantren of Yogyakarta City, built with Laravel and the SAW (Simple Additive Weighting) algorithm.',
    ],

    'background' => [
        'title' => 'Background',
        'body' => 'The City of Yogyakarta provides free public Wi-Fi through its Jogja Smart Service programme. With limited infrastructure budget, the city needs a data-driven way to decide which kemantren should receive new access points first. This system ranks all 14 kemantren by priority using four criteria: population density, number of existing JSS Wi-Fi users, number of active access points, and community self-funding collected.',
    ],

    'saw' => [
        'title' => 'What is SAW?',
        'p1' => 'Simple Additive Weighting (SAW) is one of the most widely used methods in Multi-Attribute Decision Making (MADM). The core idea is straightforward, given a set of candidates and a set of weighted criteria, SAW finds the best candidate by scoring each one against every criterion and summing the results.',
        'p2' => 'The process works in three steps. First, each raw criterion value is normalised to a 0–1 scale relative to the best value in its column, benefit criteria (where higher is better) are divided by the column maximum, and cost criteria (where lower is better) use the column minimum divided by the value. Second, each normalised value is multiplied by its criterion weight. Third, those weighted values are summed into a single preference score per candidate. The candidate with the highest score is the top priority.',
        'p3' => 'SAW is chosen for this problem because it is transparent, easy to audit, and well-suited to cases where criteria carry different levels of importance, which is exactly the case here, where the number of existing access points (infrastructure gap) is weighted more heavily than population density.',
    ],

    'criteria' => [
        'title' => 'Criteria',
        'code' => 'Code',
        'criterion' => 'Criterion',
        'type' => 'Type',
        'weight' => 'Weight',
        'footer' => 'Benefit criteria reward kemantren with higher values. Cost criteria reward kemantren with lower values, a kemantren with fewer existing access points or less collected funding is considered more in need of support.',
    ],

    'references' => [
        'title' => 'References',
    ],

    'downloads' => [
        'title' => 'Downloads',
        'dataset' => 'Download Dataset (CSV)',
        'journal' => 'Download Paper (PDF)',
    ],
];
