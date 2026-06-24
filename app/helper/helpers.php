<?php

use App\Models\Portofolio;
use App\Models\Section;
use App\Models\Setting;

function get_setting_value($key){
    $data = Setting::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'empty';
    }
}

function get_section_data($key){
    $data = Section::where('post_as', $key)->first();
    if(isset($data)){
        return $data;
    }else{
        return 'empty';
    }
}

function get_portofolio(){
    $data = Portofolio::all();
    return $data;
}