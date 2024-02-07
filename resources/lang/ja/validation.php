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

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:date以降の日付である必要があります。',
    'after_or_equal' => ':attributeは:date以降の日付か同日である必要があります。',
    'alpha' => ':attributeは英字のみ使用できます。',
    'alpha_dash' => ':attributeは英数字、ダッシュ、アンダースコアのみ使用できます。',
    'alpha_num' => ':attributeは英数字のみ使用できます。',
    'array' => ':attributeは配列である必要があります。',
    'ascii' => ':attributeはASCII文字のみ使用できます。',
    'before' => ':attributeは:date以前の日付である必要があります。',
    'before_or_equal' => ':attributeは:date以前の日付か同日である必要があります。',
    'between' => [
        'array' => ':attributeは:minから:max個のアイテムを含む必要があります。',
        'file' => ':attributeは:minから:maxキロバイトの間である必要があります。',
        'numeric' => ':attributeは:minから:maxの間である必要があります。',
        'string' => ':attributeは:minから:max文字の間である必要があります。',
    ],
    'boolean' => ':attributeはtrueまたはfalseである必要があります。',
    'can' => ':attributeは許可されていない値を含んでいます。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付である必要があります。',
    'date_format' => ':attributeはフォーマット:formatと一致している必要があります。',
    'decimal' => ':attributeは:decimal桁の小数を持つ必要があります。',
    'declined' => ':attributeは拒否する必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeは拒否する必要があります。',
    'different' => ':attributeと:otherは異なる必要があります。',
    'digits' => ':attributeは:digits桁である必要があります。',
    'digits_between' => ':attributeは:minから:max桁の間である必要があります。',
    'dimensions' => ':attributeは無効な画像サイズを持っています。',
    'distinct' => ':attributeには重複した値があります。',
    'doesnt_end_with' => ':attributeは次のいずれかで終わっていてはいけません:values。',
    'doesnt_start_with' => ':attributeは次のいずれかで始まっていてはいけません:values。',
    'email' => ':attributeは有効なメールアドレスである必要があります。',
    'ends_with' => ':attributeは次のいずれかで終わっている必要があります:values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'extensions' => ':attributeは次の拡張子のいずれかを持っている必要があります:values。',
    'file' => ':attributeはファイルである必要があります。',
    'filled' => ':attributeは値を持っている必要があります。',
    'gt' => [
        'array' => ':attributeは:value個より多くのアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイトより大きくなければなりません。',
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'string' => ':attributeは:value文字より大きくなければなりません。',
    ],
    'gte' => [
        'array' => ':attributeは:value個以上のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト以上である必要があります。',
        'numeric' => ':attributeは:value以上である必要があります。',
        'string' => ':attributeは:value文字以上である必要があります。',
    ],
    'hex_color' => ':attributeは有効な16進数カラーである必要があります。',
    'image' => ':attributeは画像である必要があります。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在する必要があります。',
    'integer' => ':attributeは整数である必要があります。',
    'ip' => ':attributeは有効なIPアドレスである必要があります。',
    'ipv4' => ':attributeは有効なIPv4アドレスである必要があります。',
    'ipv6' => ':attributeは有効なIPv6アドレスである必要があります。',
    'json' => ':attributeは有効なJSON文字列である必要があります。',
    'lowercase' => ':attributeは小文字である必要があります。',
    'lt' => [
        'array' => ':attributeは:value個より少ないアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイトより小さくなければなりません。',
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'string' => ':attributeは:value文字より小さくなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以下のアイテムを持つ必要があります。',
        'file' => ':attributeは:valueキロバイト以下である必要があります。',
        'numeric' => ':attributeは:value以下である必要があります。',
        'string' => ':attributeは:value文字以下である必要があります。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスである必要があります。',
    'max' => [
        'array' => ':attributeは:max個を超えてはいけません。',
        'file' => ':attributeは:maxキロバイトを超えてはいけません。',
        'numeric' => ':attributeは:maxを超えてはいけません。',
        'string' => ':attributeは:max文字を超えてはいけません。',
    ],
    'max_digits' => ':attributeは:max桁を超えてはいけません。',
    'mimes' => ':attributeは次のタイプのファイルである必要があります:values。',
    'mimetypes' => ':attributeは次のタイプのファイルである必要があります:values。',
    'min' => [
        'array' => ':attributeは少なくとも:min個のアイテムを持つ必要があります。',
        'file' => ':attributeは少なくとも:minキロバイト以上である必要があります。',
        'numeric' => ':attributeは少なくとも:min以上である必要があります。',
        'string' => ':attributeは少なくとも:min文字以上である必要があります。',
    ],
    'min_digits' => ':attributeは少なくとも:min桁を持つ必要があります。',
    'missing' => ':attributeは存在していてはいけません。',
    'missing_if' => ':otherが:valueの場合、:attributeは存在していてはいけません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeは存在していてはいけません。',
    'missing_with' => ':valuesが存在する場合、:attributeは存在していてはいけません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeは存在していてはいけません。',
    'multiple_of' => ':attributeは:valueの倍数である必要があります。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeのフォーマットが無効です。',
    'numeric' => ':attributeは数字である必要があります。',
    'password' => [
        'letters' => ':attributeには少なくとも1つの英字を含めてください。',
        'mixed' => ':attributeには少なくとも1つの大文字と1つの小文字を含めてください。',
        'numbers' => ':attributeには少なくとも1つの数字を含めてください。',
        'symbols' => ':attributeには少なくとも1つの記号を含めてください。',
        'uncompromised' => '指定された:attributeはデータ漏洩で使用されたことがあります。別の:attributeを選択してください。',
    ],
    'present' => ':attributeは存在している必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeは存在している必要があります。',
    'present_unless' => ':otherが:valueでない限り、:attributeは存在している必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeは存在している必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeは存在している必要があります。',
    'prohibited' => ':attributeは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは禁止されています。',
    'prohibited_unless' => ':otherが:valuesに含まれていない限り、:attributeは禁止されています。',
    'prohibits' => ':attributeは:otherが存在する場合に禁止されています。',
    'regex' => ':attributeのフォーマットが無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeには次のエントリが含まれている必要があります:values。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_if_accepted' => ':otherが受け入れられた場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesに含まれていない限り、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが存在しない場合、:attributeは必須です。',
    'same' => ':attributeは:otherと一致する必要があります。',
    'size' => [
        'array' => ':attributeは:size個のアイテムを含む必要があります。',
        'file' => ':attributeは:sizeキロバイトである必要があります。',
        'numeric' => ':attributeは:sizeである必要があります。',
        'string' => ':attributeは:size文字である必要があります。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まっている必要があります:values。',
    'string' => ':attributeは文字列である必要があります。',
    'timezone' => ':attributeは有効なタイムゾーンである必要があります。',
    'unique' => ':attributeはすでに取られています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字である必要があります。',
    'url' => ':attributeは有効なURLである必要があります。',
    'ulid' => ':attributeは有効なULIDである必要があります。',
    'uuid' => ':attributeは有効なUUIDである必要があります。',

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

    'attributes' => [],

];
