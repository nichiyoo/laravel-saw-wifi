<?php

return [
    'title' => 'Help Center',
    'description' => 'Get help with your account, application, or any other topic.',

    'faq' => [
        'q1' => 'What is this application for?',
        'a1' => 'This is a Decision Support System (DSS) that ranks Yogyakarta\'s 14 kemantren (districts) by priority for new JSS free Wi-Fi access point placement. It uses the Simple Additive Weighting (SAW) method to score each district based on weighted criteria.',
        'q2' => 'How is the ranking calculated?',
        'a2' => 'Each candidate (district) is scored by normalising its raw criteria values to a 0–1 scale, multiplying each by its assigned weight, and summing them into a final preference score. Benefit criteria (higher is better) are divided by the column maximum; cost criteria (lower is better) use the column minimum divided by the value. The candidate with the highest total score ranks first.',
        'q3' => 'What criteria are used?',
        'a3' => 'Four criteria are evaluated: population density (benefit, 15%), number of JSS Wi-Fi users (benefit, 25%), number of active access points (cost, 35%), and community self-funding (cost, 25%). These weights can be adjusted from the Metrics page.',
        'q4' => 'Can I change the criteria weights?',
        'a4' => 'Yes. Navigate to the Metrics page, edit any metric, and update its weight. After saving, re-run the calculation on the DSS Calculation page to see the updated ranking.',
        'q5' => 'How do I add or update candidate data?',
        'a5' => 'Candidate data can be managed from the Candidates page. You can add new districts, edit existing ones, or delete outdated entries. The dataset can also be downloaded as CSV from the About page.',
        'q6' => 'How do I update my profile?',
        'a6' => 'Click on your avatar in the top-right corner or navigate to Profile from the sidebar. You can update your name, email, and password there.',
    ],
];
