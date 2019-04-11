<?php
/**
 * Created by PhpStorm.
 * User: QuangPT
 * Date: 4/11/2019
 * Time: 2:57 AM
 */
namespace Helpers;

class Api {
    public static function r_response($data = [], $message = null, $code = 'S001', $status = 200) {
        return response()->json(['body' => $data, 'msg' => $message, 'code' => $code], $status,
            ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}