<?php

use App\Models\Setting;

function getSettingValue($key)
{
    $data = Setting::where('key', $key)->first();
    if(isset($data->value)) {
        return $data->value;
    }else{
        return 'empty';
    }
} 