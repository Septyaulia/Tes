<?php

use App\Models\component;

// function get_component_value($key)
// {
//     $data = component::where('key', $key)->first();
//     if(isset($data->value)) {
//         return $data->value;
//     }else {
//         return 'empty';
//     }
// }

function get_component_value($key){
    $data = component::where('key', $key)->first();
    if (isset($data)){
        return $data->value;
    } else {
        return 'empty';
    }
}