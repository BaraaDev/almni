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
