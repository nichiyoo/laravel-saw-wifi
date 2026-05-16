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
    'accepted' => ':attributeフィールドは承認される必要があります。',
    'accepted_if' => ':otherが:valueの場合、:attributeフィールドは承認される必要があります。',
    'active_url' => ':attributeフィールドは有効なURLである必要があります。',
    'after' => ':attributeフィールドは:dateより後の日付である必要があります。',
    'after_or_equal' => ':attributeフィールドは:date以降の日付である必要があります。',
    'alpha' => ':attributeフィールドは文字のみを含む必要があります。',
    'alpha_dash' => ':attributeフィールドは文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attributeフィールドは文字と数字のみを含む必要があります。',
    'any_of' => ':attributeフィールドが無効です。',
    'array' => ':attributeフィールドは配列である必要があります。',
    'ascii' => ':attributeフィールドはシングルバイトの英数字と記号のみを含む必要があります。',
    'before' => ':attributeフィールドは:dateより前の日付である必要があります。',
    'before_or_equal' => ':attributeフィールドは:date以前の日付である必要があります。',
    'between' => [
        'array' => ':attributeフィールドは:minから:maxの間のアイテム数を持つ必要があります。',
        'file' => ':attributeフィールドは:minから:maxキロバイトの間である必要があります。',
        'numeric' => ':attributeフィールドは:minから:maxの間である必要があります。',
        'string' => ':attributeフィールドは:minから:max文字の間である必要があります。',
    ],
    'boolean' => ':attributeフィールドはtrueまたはfalseである必要があります。',
    'can' => ':attributeフィールドには許可されていない値が含まれています。',
    'confirmed' => ':attributeフィールドの確認が一致しません。',
    'contains' => ':attributeフィールドに必要な値がありません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeフィールドは有効な日付である必要があります。',
    'date_equals' => ':attributeフィールドは:dateと等しい日付である必要があります。',
    'date_format' => ':attributeフィールドは:formatの形式に一致する必要があります。',
    'decimal' => ':attributeフィールドは:decimal桁の小数点以下を持つ必要があります。',
    'declined' => ':attributeフィールドは拒否される必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeフィールドは拒否される必要があります。',
    'different' => ':attributeフィールドと:otherは異なる必要があります。',
    'digits' => ':attributeフィールドは:digits桁である必要があります。',
    'digits_between' => ':attributeフィールドは:minから:max桁の間である必要があります。',
    'dimensions' => ':attributeフィールドの画像サイズが無効です。',
    'distinct' => ':attributeフィールドに重複した値があります。',
    'doesnt_contain' => ':attributeフィールドには次のいずれも含まれてはなりません：:values。',
    'doesnt_end_with' => ':attributeフィールドは次のいずれかで終わってはなりません：:values。',
    'doesnt_start_with' => ':attributeフィールドは次のいずれかで始まってはなりません：:values。',
    'email' => ':attributeフィールドは有効なメールアドレスである必要があります。',
    'encoding' => ':attributeフィールドは:encodingでエンコードされている必要があります。',
    'ends_with' => ':attributeフィールドは次のいずれかで終わる必要があります：:values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeフィールドは次のいずれかの拡張子を持つ必要があります：:values。',
    'file' => ':attributeフィールドはファイルである必要があります。',
    'filled' => ':attributeフィールドには値が必要です。',
    'gt' => [
        'array' => ':attributeフィールドは:valueより多くのアイテムを持つ必要があります。',
        'file' => ':attributeフィールドは:valueキロバイトより大きい必要があります。',
        'numeric' => ':attributeフィールドは:valueより大きい必要があります。',
        'string' => ':attributeフィールドは:value文字より多い必要があります。',
    ],
    'gte' => [
        'array' => ':attributeフィールドは:value以上のアイテムを持つ必要があります。',
        'file' => ':attributeフィールドは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeフィールドは:value以上である必要があります。',
        'string' => ':attributeフィールドは:value文字以上である必要があります。',
    ],
    'hex_color' => ':attributeフィールドは有効な16進数カラーコードである必要があります。',
    'image' => ':attributeフィールドは画像である必要があります。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在する必要があります。',
    'in_array_keys' => ':attributeフィールドは次のキーの少なくとも1つを含む必要があります：:values。',
    'integer' => ':attributeフィールドは整数である必要があります。',
    'ip' => ':attributeフィールドは有効なIPアドレスである必要があります。',
    'ipv4' => ':attributeフィールドは有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attributeフィールドは有効なIPv6アドレスである必要があります。',
    'json' => ':attributeフィールドは有効なJSON文字列である必要があります。',
    'list' => ':attributeフィールドはリストである必要があります。',
    'lowercase' => ':attributeフィールドは小文字である必要があります。',
    'lt' => [
        'array' => ':attributeフィールドは:valueより少ないアイテムを持つ必要があります。',
        'file' => ':attributeフィールドは:valueキロバイト未満である必要があります。',
        'numeric' => ':attributeフィールドは:value未満である必要があります。',
        'string' => ':attributeフィールドは:value文字未満である必要があります。',
    ],
    'lte' => [
        'array' => ':attributeフィールドは:value以上のアイテムを持ってはなりません。',
        'file' => ':attributeフィールドは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeフィールドは:value以下である必要があります。',
        'string' => ':attributeフィールドは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attributeフィールドは有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attributeフィールドは:max以上のアイテムを持ってはなりません。',
        'file' => ':attributeフィールドは:maxキロバイトを超えてはなりません。',
        'numeric' => ':attributeフィールドは:maxを超えてはなりません。',
        'string' => ':attributeフィールドは:max文字を超えてはなりません。',
    ],
    'max_digits' => ':attributeフィールドは:max桁を超えてはなりません。',
    'mimes' => ':attributeフィールドは次のタイプのファイルである必要があります：:values。',
    'mimetypes' => ':attributeフィールドは次のタイプのファイルである必要があります：:values。',
    'min' => [
        'array' => ':attributeフィールドは少なくとも:minのアイテムを持つ必要があります。',
        'file' => ':attributeフィールドは少なくとも:minキロバイトである必要があります。',
        'numeric' => ':attributeフィールドは少なくとも:minである必要があります。',
        'string' => ':attributeフィールドは少なくとも:min文字である必要があります。',
    ],
    'min_digits' => ':attributeフィールドは少なくとも:min桁を持つ必要があります。',
    'missing' => ':attributeフィールドは存在しない必要があります。',
    'missing_if' => ':otherが:valueの場合、:attributeフィールドは存在しない必要があります。',
    'missing_unless' => ':otherが:valueでない限り、:attributeフィールドは存在しない必要があります。',
    'missing_with' => ':valuesが存在する場合、:attributeフィールドは存在しない必要があります。',
    'missing_with_all' => ':valuesが存在する場合、:attributeフィールドは存在しない必要があります。',
    'multiple_of' => ':attributeフィールドは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeフィールドの形式が無効です。',
    'numeric' => ':attributeフィールドは数値である必要があります。',
    'password' => [
        'letters' => ':attributeフィールドには少なくとも1つの文字が含まれている必要があります。',
        'mixed' => ':attributeフィールドには少なくとも1つの大文字と1つの小文字が含まれている必要があります。',
        'numbers' => ':attributeフィールドには少なくとも1つの数字が含まれている必要があります。',
        'symbols' => ':attributeフィールドには少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => '指定された:attributeはデータ漏洩に現れました。別の:attributeを選択してください。',
    ],
    'present' => ':attributeフィールドは存在する必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeフィールドは存在する必要があります。',
    'present_unless' => ':otherが:valueでない限り、:attributeフィールドは存在する必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeフィールドは存在する必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeフィールドは存在する必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_if_accepted' => ':otherが承認された場合、:attributeフィールドは禁止されています。',
    'prohibited_if_declined' => ':otherが拒否された場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':otherが:valuesにない限り、:attributeフィールドは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止します。',
    'regex' => ':attributeフィールドの形式が無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには次のエントリが含まれている必要があります：:values。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_if_accepted' => ':otherが承認された場合、:attributeフィールドは必須です。',
    'required_if_declined' => ':otherが拒否された場合、:attributeフィールドは必須です。',
    'required_unless' => ':otherが:valuesにない限り、:attributeフィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesのいずれも存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeフィールドは:otherと一致する必要があります。',
    'size' => [
        'array' => ':attributeフィールドは:sizeアイテムを含む必要があります。',
        'file' => ':attributeフィールドは:sizeキロバイトである必要があります。',
        'numeric' => ':attributeフィールドは:sizeである必要があります。',
        'string' => ':attributeフィールドは:size文字である必要があります。',
    ],
    'starts_with' => ':attributeフィールドは次のいずれかで始まる必要があります：:values。',
    'string' => ':attributeフィールドは文字列である必要があります。',
    'timezone' => ':attributeフィールドは有効なタイムゾーンである必要があります。',
    'unique' => ':attributeはすでに使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeフィールドは大文字である必要があります。',
    'url' => ':attributeフィールドは有効なURLである必要があります。',
    'ulid' => ':attributeフィールドは有効なULIDである必要があります。',
    'uuid' => ':attributeフィールドは有効なUUIDである必要があります。',

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
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'current_password' => '現在のパスワード',
        'password_confirmation' => 'パスワード確認',

        'kemantren' => 'カマントレン',
        'bps_code' => 'BPSコード',
        'kemendagri_code' => 'ケメンダグリコード',
        'jss_users' => 'JSSユーザー',
        'wifi_count' => 'WiFi数',
        'population_density' => '人口密度',
        'self_funding' => '自己資金',

        'variable' => '変数',
        'description' => '説明',
        'type' => 'タイプ',
        'weight' => '重み',

        'registration_enabled' => 'ユーザー登録',
        'seo_title' => 'サイトタイトル',
        'seo_description' => '説明',
        'seo_keywords' => 'キーワード',
        'seo_author' => '作成者',
    ],
];
