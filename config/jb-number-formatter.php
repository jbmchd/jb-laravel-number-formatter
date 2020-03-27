<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel money
     |--------------------------------------------------------------------------
     */
    'locale' => config('app.locale', env('MIX_APP_LOCALE','pt_BR')),
    'currency' => config('app.currency', env('MIX_APP_CURRENCY','BRL')),
];
