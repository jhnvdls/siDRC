<?php

use App\Models\Setting;

if (!function_exists('getSettings')) {
    function getSettings($key)
    {
        return Setting::first()->$key;
    }
}

if (!function_exists('getSeoSettings')) {
    function getSeoSettings($key)
    {
        if (Setting::first()->seo == null) {
            return null;
        } else {
            return json_decode(Setting::first()->seo)->$key;
        }
    }
}
