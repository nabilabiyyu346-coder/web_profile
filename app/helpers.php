<?php

use App\Models\Section;
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

function getSectionData($key)
{
    $data = Section::where('post_as', $key)->first();
    if(isset($data)) {
        return $data;
    }else{
        return 'empty';
    }
}