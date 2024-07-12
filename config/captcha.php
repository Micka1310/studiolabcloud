<?php


return [
    'secret' => env('NOCAPTCHA_SECRET'),
    'sitekey' => env('NOCAPTCHA_SITEKEY'),

    // 60 secondes après validation du captcha, il faut à nouveau valider le captcha
    // si aucun compte n'a été créer depuis
    'options' => [
        'timeout' => 60,
    ],
];
