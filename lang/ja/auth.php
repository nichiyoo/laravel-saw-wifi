<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'failed' => 'これらの認証情報は記録と一致しません。',
    'password' => '指定されたパスワードが正しくありません。',
    'throttle' => 'ログイン試行回数が多すぎます。:seconds秒後に再試行してください。',

    'login' => [
        'title' => 'ログイン',
        'desc' => 'おかえりなさい！詳細を入力してください',
    ],

    'email' => 'メールアドレス',
    'email_placeholder' => 'メールアドレスを入力してください',
    'password' => 'パスワード',
    'password_placeholder' => 'パスワードを入力してください',
    'login_button' => 'ログイン',
    'register_link' => 'アカウントをお持ちでないですか？<a href=":url" class="text-primary-500">登録</a>',

    'register' => [
        'title' => '登録',
        'desc' => '新しいアカウントを作成して始めましょう。',
    ],
    'name' => '名前',
    'name_placeholder' => '名前を入力してください',
    'confirm_password' => 'パスワードを確認',
    'register_button' => '登録',
    'login_link' => 'すでにアカウントをお持ちですか？<a href=":url" class="text-primary-500">ログイン</a>',
    'back_to_login' => 'ログインページに戻る',

    'forgot_password' => [
        'title' => 'パスワードをお忘れですか',
        'desc' => 'パスワードを忘れましたか？問題ありません。メールアドレスをお知らせいただければ、新しいパスワードを設定するためのリセットリンクをメールでお送りします。',
        'button' => 'パスワードリセットリンクを送信',
    ],

    'reset_password' => [
        'title' => 'パスワードをリセット',
        'desc' => '以下に新しいパスワードを入力してください。',
        'button' => 'パスワードをリセット',
    ],

    'confirmation' => [
        'title' => 'パスワードを確認',
        'desc' => 'これはアプリケーションのセキュリティエリアです。続行する前にパスワードを確認してください。',
        'button' => '確認',
    ],

    'reviews' => '4.9kレビュー',

    'verify_email' => [
        'title' => 'メールを確認',
        'desc' => 'ご登録ありがとうございます！始める前に、送信したメール内のリンクをクリックしてメールアドレスを確認していただけますか？メールが届かない場合は、喜んで再送いたします。',
        'new_link' => '登録時に提供されたメールアドレスに新しい確認リンクを送信しました。',
        'button' => '確認メールを再送',
        'logout' => 'ログアウト',
    ],
];
