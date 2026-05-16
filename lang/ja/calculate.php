<?php

return [
    'title' => 'DSS計算',
    'description' => '加重基準に基づくカマントレンのSAWランキング',

    'explanation' => [
        'title' => 'これが意味すること',
        'ranked_first' => '<strong>:kemantren</strong>がスコア<strong>:score</strong>で1位となり、現在の基準と重みに基づいて、新しいJSS無料Wi-Fiアクセスポイント設置の最優先カマントレンとなりました。',
        'evaluated' => '単純加重和（SAW）法を使用して、合計<strong>:count カマントレン</strong>が評価されました。便益基準（緑）は高い生の値を優遇します。JSSユーザーが多いほど、または人口密度が高いほどスコアが上がります。コスト基準（黄）は低い生の値を優遇します。既存のアクセスポイントが少ないまたはコミュニティ自己資金が少ないほどニーズが高いことを示します。',
        'weights' => '重みは<a href=":url" class="text-primary-500 hover:underline">メトリクスページ</a>からいつでも調整して現在の政策優先事項を反映させることができ、計算を即座に再実行できます。',
    ],

    'ranking' => [
        'title' => 'ランキング結果',
        'rank' => 'ランク',
        'kemantren' => 'カマントレン',
        'score' => 'スコア',
    ],

    'criteria' => [
        'title' => '使用基準',
        'variable' => '変数',
        'type' => 'タイプ',
        'weight' => '重み',
    ],
];
