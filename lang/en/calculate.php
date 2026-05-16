<?php

return [
    'title' => 'DSS Calculation',
    'description' => 'SAW ranking of kemantren based on weighted criteria',

    'explanation' => [
        'title' => 'What This Means',
        'ranked_first' => '<strong>:kemantren</strong> ranked first with a score of <strong>:score</strong>, making it the highest-priority kemantren for new JSS free Wi-Fi access point placement based on the current criteria and weights.',
        'evaluated' => 'A total of <strong>:count kemantren</strong> were evaluated using the Simple Additive Weighting (SAW) method. Benefit criteria (green) reward higher raw values more JSS users or higher population density increases the score. Cost criteria (yellow) reward lower raw values fewer existing access points or less community self-funding indicates greater need.',
        'weights' => 'Weights can be adjusted at any time from the <a href=":url" class="text-primary-500 hover:underline">Metrics page</a> to reflect current policy priorities, and the calculation can be re-run instantly.',
    ],

    'ranking' => [
        'title' => 'Ranking Results',
        'rank' => 'Rank',
        'kemantren' => 'Kemantren',
        'score' => 'Score',
    ],

    'criteria' => [
        'title' => 'Used Criteria',
        'variable' => 'Variable',
        'type' => 'Type',
        'weight' => 'Weight',
    ],
];
