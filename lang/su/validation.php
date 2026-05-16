<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted' => 'Widang :attribute kedah ditarima.',
    'accepted_if' => 'Widang :attribute kedah ditarima nalika :other nyaéta :value.',
    'active_url' => 'Widang :attribute kedah mangrupikeun URL anu valid.',
    'after' => 'Widang :attribute kedah mangrupikeun tanggal saatos :date.',
    'after_or_equal' => 'Widang :attribute kedah mangrupikeun tanggal saatos atanapi sami sareng :date.',
    'alpha' => 'Widang :attribute ngan tiasa ngandung hurup.',
    'alpha_dash' => 'Widang :attribute ngan tiasa ngandung hurup, angka, garis, sareng garis handap.',
    'alpha_num' => 'Widang :attribute ngan tiasa ngandung hurup sareng angka.',
    'any_of' => 'Widang :attribute teu valid.',
    'array' => 'Widang :attribute kedah mangrupikeun array.',
    'ascii' => 'Widang :attribute ngan tiasa ngandung karakter alfanumerik sareng simbol single-byte.',
    'before' => 'Widang :attribute kedah mangrupikeun tanggal sateuacan :date.',
    'before_or_equal' => 'Widang :attribute kedah mangrupikeun tanggal sateuacan atanapi sami sareng :date.',
    'between' => [
        'array' => 'Widang :attribute kedah gaduh antara :min sareng :max item.',
        'file' => 'Widang :attribute kedah antara :min sareng :max kilobyte.',
        'numeric' => 'Widang :attribute kedah antara :min sareng :max.',
        'string' => 'Widang :attribute kedah antara :min sareng :max karakter.',
    ],
    'boolean' => 'Widang :attribute kedah true atanapi false.',
    'can' => 'Widang :attribute ngandung nilai anu teu diijinkeun.',
    'confirmed' => 'Konfirmasi widang :attribute teu cocog.',
    'contains' => 'Widang :attribute kakurangan nilai anu diperyogikeun.',
    'current_password' => 'Kecap konci teu leres.',
    'date' => 'Widang :attribute kedah mangrupikeun tanggal anu valid.',
    'date_equals' => 'Widang :attribute kedah mangrupikeun tanggal anu sami sareng :date.',
    'date_format' => 'Widang :attribute kedah cocog sareng format :format.',
    'decimal' => 'Widang :attribute kedah gaduh :decimal tempat desimal.',
    'declined' => 'Widang :attribute kedah ditolak.',
    'declined_if' => 'Widang :attribute kedah ditolak nalika :other nyaéta :value.',
    'different' => 'Widang :attribute sareng :other kedah béda.',
    'digits' => 'Widang :attribute kedah :digits digit.',
    'digits_between' => 'Widang :attribute kedah antara :min sareng :max digit.',
    'dimensions' => 'Widang :attribute gaduh dimensi gambar anu teu valid.',
    'distinct' => 'Widang :attribute gaduh nilai anu duplikat.',
    'doesnt_contain' => 'Widang :attribute teu kedah ngandung salah sahiji tina ieu: :values.',
    'doesnt_end_with' => 'Widang :attribute teu kedah dipungkas ku salah sahiji tina ieu: :values.',
    'doesnt_start_with' => 'Widang :attribute teu kedah dimimitian ku salah sahiji tina ieu: :values.',
    'email' => 'Widang :attribute kedah mangrupikeun alamat surélék anu valid.',
    'encoding' => 'Widang :attribute kedah dikodekeun dina :encoding.',
    'ends_with' => 'Widang :attribute kedah dipungkas ku salah sahiji tina ieu: :values.',
    'enum' => ':attribute anu dipilih teu valid.',
    'exists' => ':attribute anu dipilih teu valid.',
    'extensions' => 'Widang :attribute kedah gaduh salah sahiji ekstensi ieu: :values.',
    'file' => 'Widang :attribute kedah mangrupikeun berkas.',
    'filled' => 'Widang :attribute kedah gaduh nilai.',
    'gt' => [
        'array' => 'Widang :attribute kedah gaduh langkung ti :value item.',
        'file' => 'Widang :attribute kedah langkung ageung ti :value kilobyte.',
        'numeric' => 'Widang :attribute kedah langkung ageung ti :value.',
        'string' => 'Widang :attribute kedah langkung ti :value karakter.',
    ],
    'gte' => [
        'array' => 'Widang :attribute kedah gaduh :value item atanapi langkung.',
        'file' => 'Widang :attribute kedah langkung ageung ti atanapi sami sareng :value kilobyte.',
        'numeric' => 'Widang :attribute kedah langkung ageung ti atanapi sami sareng :value.',
        'string' => 'Widang :attribute kedah langkung ti atanapi sami sareng :value karakter.',
    ],
    'hex_color' => 'Widang :attribute kedah mangrupikeun warna heksadesimal anu valid.',
    'image' => 'Widang :attribute kedah mangrupikeun gambar.',
    'in' => ':attribute anu dipilih teu valid.',
    'in_array' => 'Widang :attribute kedah aya dina :other.',
    'in_array_keys' => 'Widang :attribute kedah ngandung sahanteuna salah sahiji konci ieu: :values.',
    'integer' => 'Widang :attribute kedah mangrupikeun integer.',
    'ip' => 'Widang :attribute kedah mangrupikeun alamat IP anu valid.',
    'ipv4' => 'Widang :attribute kedah mangrupikeun alamat IPv4 anu valid.',
    'ipv6' => 'Widang :attribute kedah mangrupikeun alamat IPv6 anu valid.',
    'json' => 'Widang :attribute kedah mangrupikeun string JSON anu valid.',
    'list' => 'Widang :attribute kedah mangrupikeun daptar.',
    'lowercase' => 'Widang :attribute kedah huruf leutik.',
    'lt' => [
        'array' => 'Widang :attribute kedah gaduh kirang ti :value item.',
        'file' => 'Widang :attribute kedah kirang ti :value kilobyte.',
        'numeric' => 'Widang :attribute kedah kirang ti :value.',
        'string' => 'Widang :attribute kedah kirang ti :value karakter.',
    ],
    'lte' => [
        'array' => 'Widang :attribute teu kedah gaduh langkung ti :value item.',
        'file' => 'Widang :attribute kedah kirang ti atanapi sami sareng :value kilobyte.',
        'numeric' => 'Widang :attribute kedah kirang ti atanapi sami sareng :value.',
        'string' => 'Widang :attribute kedah kirang ti atanapi sami sareng :value karakter.',
    ],
    'mac_address' => 'Widang :attribute kedah mangrupikeun alamat MAC anu valid.',
    'max' => [
        'array' => 'Widang :attribute teu kedah gaduh langkung ti :max item.',
        'file' => 'Widang :attribute teu kedah langkung ageung ti :max kilobyte.',
        'numeric' => 'Widang :attribute teu kedah langkung ageung ti :max.',
        'string' => 'Widang :attribute teu kedah langkung ti :max karakter.',
    ],
    'max_digits' => 'Widang :attribute teu kedah gaduh langkung ti :max digit.',
    'mimes' => 'Widang :attribute kedah mangrupikeun berkas jenis: :values.',
    'mimetypes' => 'Widang :attribute kedah mangrupikeun berkas jenis: :values.',
    'min' => [
        'array' => 'Widang :attribute kedah gaduh sahanteuna :min item.',
        'file' => 'Widang :attribute kedah sahanteuna :min kilobyte.',
        'numeric' => 'Widang :attribute kedah sahanteuna :min.',
        'string' => 'Widang :attribute kedah sahanteuna :min karakter.',
    ],
    'min_digits' => 'Widang :attribute kedah gaduh sahanteuna :min digit.',
    'missing' => 'Widang :attribute kedah teu aya.',
    'missing_if' => 'Widang :attribute kedah teu aya nalika :other nyaéta :value.',
    'missing_unless' => 'Widang :attribute kedah teu aya iwal :other nyaéta :value.',
    'missing_with' => 'Widang :attribute kedah teu aya nalika :values aya.',
    'missing_with_all' => 'Widang :attribute kedah teu aya nalika :values aya.',
    'multiple_of' => 'Widang :attribute kedah mangrupikeun kelipatan :value.',
    'not_in' => ':attribute anu dipilih teu valid.',
    'not_regex' => 'Format widang :attribute teu valid.',
    'numeric' => 'Widang :attribute kedah mangrupikeun angka.',
    'password' => [
        'letters' => 'Widang :attribute kedah ngandung sahanteuna hiji hurup.',
        'mixed' => 'Widang :attribute kedah ngandung sahanteuna hiji hurup ageung sareng hiji hurup leutik.',
        'numbers' => 'Widang :attribute kedah ngandung sahanteuna hiji angka.',
        'symbols' => 'Widang :attribute kedah ngandung sahanteuna hiji simbol.',
        'uncompromised' => ':attribute anu dipasihkeun parantos muncul dina kabocoran data. Mangga pilih :attribute anu béda.',
    ],
    'present' => 'Widang :attribute kedah aya.',
    'present_if' => 'Widang :attribute kedah aya nalika :other nyaéta :value.',
    'present_unless' => 'Widang :attribute kedah aya iwal :other nyaéta :value.',
    'present_with' => 'Widang :attribute kedah aya nalika :values aya.',
    'present_with_all' => 'Widang :attribute kedah aya nalika :values aya.',
    'prohibited' => 'Widang :attribute dilarang.',
    'prohibited_if' => 'Widang :attribute dilarang nalika :other nyaéta :value.',
    'prohibited_if_accepted' => 'Widang :attribute dilarang nalika :other ditarima.',
    'prohibited_if_declined' => 'Widang :attribute dilarang nalika :other ditolak.',
    'prohibited_unless' => 'Widang :attribute dilarang iwal :other aya dina :values.',
    'prohibits' => 'Widang :attribute ngalarang :other pikeun aya.',
    'regex' => 'Format widang :attribute teu valid.',
    'required' => 'Widang :attribute diperyogikeun.',
    'required_array_keys' => 'Widang :attribute kedah ngandung éntri pikeun: :values.',
    'required_if' => 'Widang :attribute diperyogikeun nalika :other nyaéta :value.',
    'required_if_accepted' => 'Widang :attribute diperyogikeun nalika :other ditarima.',
    'required_if_declined' => 'Widang :attribute diperyogikeun nalika :other ditolak.',
    'required_unless' => 'Widang :attribute diperyogikeun iwal :other aya dina :values.',
    'required_with' => 'Widang :attribute diperyogikeun nalika :values aya.',
    'required_with_all' => 'Widang :attribute diperyogikeun nalika :values aya.',
    'required_without' => 'Widang :attribute diperyogikeun nalika :values teu aya.',
    'required_without_all' => 'Widang :attribute diperyogikeun nalika teu aya hiji ogé tina :values.',
    'same' => 'Widang :attribute kedah cocog sareng :other.',
    'size' => [
        'array' => 'Widang :attribute kedah ngandung :size item.',
        'file' => 'Widang :attribute kedah :size kilobyte.',
        'numeric' => 'Widang :attribute kedah :size.',
        'string' => 'Widang :attribute kedah :size karakter.',
    ],
    'starts_with' => 'Widang :attribute kedah dimimitian ku salah sahiji tina ieu: :values.',
    'string' => 'Widang :attribute kedah mangrupikeun string.',
    'timezone' => 'Widang :attribute kedah mangrupikeun zona waktu anu valid.',
    'unique' => ':attribute parantos dianggo.',
    'uploaded' => ':attribute gagal diupload.',
    'uppercase' => 'Widang :attribute kedah huruf ageung.',
    'url' => 'Widang :attribute kedah mangrupikeun URL anu valid.',
    'ulid' => 'Widang :attribute kedah mangrupikeun ULID anu valid.',
    'uuid' => 'Widang :attribute kedah mangrupikeun UUID anu valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'Nami',
        'email' => 'Surélék',
        'password' => 'Kecap Konci',
        'current_password' => 'Kecap Konci Ayeuna',
        'password_confirmation' => 'Konfirmasi Kecap Konci',

        'kemantren' => 'Kemantren',
        'bps_code' => 'Kode BPS',
        'kemendagri_code' => 'Kode Kemendagri',
        'jss_users' => 'Pangguna JSS',
        'wifi_count' => 'Jumlah WiFi',
        'population_density' => 'Kapadetan Penduduk',
        'self_funding' => 'Dana Mandiri',

        'variable' => 'Variabel',
        'description' => 'Katerangan',
        'type' => 'Jenis',
        'weight' => 'Bobot',

        'registration_enabled' => 'Pendaftaran Pangguna',
        'seo_title' => 'Judul Situs',
        'seo_description' => 'Katerangan',
        'seo_keywords' => 'Kecap Konci',
        'seo_author' => 'Panulis',
    ],
];
