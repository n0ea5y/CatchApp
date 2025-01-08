<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語ライン
    |--------------------------------------------------------------------------
    |
    | 以下の言語ラインには、バリデータクラスで使用されるデフォルトのエラーメッセージが含まれています。
    | いくつかのルールには、サイズルールのように複数のバージョンがあります。
    | 必要に応じて、これらのメッセージを自由に変更してください。
    |
    */
        'attributes' => [
            'name' => '名前',
            'name_kana' => '名前（カナ）',
            'sales_amount' => '月売',
        ],
    'required' => ':attribute を入力してください',

    'accepted' => ':attribute を承認する必要があります。',
    'accepted_if' => ':other が :value の場合、:attribute を承認する必要があります。',
    'active_url' => ':attribute は有効なURLでなければなりません。',
    'after' => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降の日付でなければなりません。',
    'alpha' => ':attribute は文字のみを含む必要があります。',
    'alpha_dash' => ':attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => ':attribute は文字と数字のみを含む必要があります。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute には、シングルバイトの英数字と記号のみを含めることができます。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date 以前の日付でなければなりません。',
    'between' => [
        'array' => ':attribute の項目数は :min ～ :max 個でなければなりません。',
        'file' => ':attribute のサイズは :min ～ :max KBでなければなりません。',
        'numeric' => ':attribute の値は :min ～ :max の間でなければなりません。',
        'string' => ':attribute の文字数は :min ～ :max 文字でなければなりません。',
    ],
    'boolean' => ':attribute フィールドは true または false でなければなりません。',
    'can' => ':attribute フィールドには許可されていない値が含まれています。',
    'confirmed' => ':attribute の確認が一致しません。',
    'contains' => ':attribute フィールドには必要な値が欠けています。',
    'current_password' => '現在のパスワードが正しくありません。',
    'date' => ':attribute は有効な日付でなければなりません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute は :format 形式と一致しなければなりません。',
    'decimal' => ':attribute は :decimal 桁の小数でなければなりません。',
    'declined' => ':attribute を拒否する必要があります。',
    'declined_if' => ':other が :value の場合、:attribute を拒否する必要があります。',
    'different' => ':attribute と :other は異なっていなければなりません。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min ～ :max 桁でなければなりません。',
    'dimensions' => ':attribute の画像サイズが無効です。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'doesnt_end_with' => ':attribute は次のいずれかで終わることはできません: :values。',
    'doesnt_start_with' => ':attribute は次のいずれかで始まることはできません: :values。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は次のいずれかで終わらなければなりません: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'extensions' => ':attribute は次の拡張子のファイルでなければなりません: :values。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'array' => ':attribute には :value 個を超える項目が必要です。',
        'file' => ':attribute は :value KBを超える必要があります。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字より多くなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute には :value 個以上の項目が必要です。',
        'file' => ':attribute は :value KB以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'hex_color' => ':attribute は有効な16進数カラーコードでなければなりません。',
    'image' => ':attribute は画像でなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在している必要があります。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute は :value 個未満の項目でなければなりません。',
        'file' => ':attribute は :value KB未満でなければなりません。',
        'numeric' => ':attribute は :value 未満でなければなりません。',
        'string' => ':attribute は :value 文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => ':attribute は :value 個以下の項目でなければなりません。',
        'file' => ':attribute は :value KB以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute は :max 個以下の項目でなければなりません。',
        'file' => ':attribute は :max KB以下でなければなりません。',
        'numeric' => ':attribute は :max 以下でなければなりません。',
        'string' => ':attribute は :max 文字以下でなければなりません。',
    ],
    // 以下省略...
];
