<?php


function responseJson($status, $message, $data = null)
{

    if ($data == null) {
        $response =
            [
                'status'  => $status,
                'message' => $message
            ];
    } else {
        $response =
            [
                'status'  => $status,
                'message' => $message,
                'data'    => $data
            ];
    }

    return response()->json($response);
}


function numtoks($number)
{
    $units = ['', 'K', 'M', 'B', 'T'];
    for ($i = 0; $number >= 1000; $i++) {
        $number /= 1000;
    }
    return round($number, 1) . $units[$i];
}


    if(! function_exists('prefixActive')){
        function prefixActive($prefixName)
        {
            return	request()->route()->getPrefix() == $prefixName ? '-is-active' : '';
        }
    }

    if(! function_exists('prefixBlock')){
        function prefixBlock($prefixName)
        {
            return	request()->route()->getPrefix() == $prefixName ? 'block' : 'none';
        }
    }

    if(! function_exists('routeActive')){
        function routeActive($routeName)
        {
            return	request()->routeIs($routeName) ? '-is-active' : '';
        }
    }

