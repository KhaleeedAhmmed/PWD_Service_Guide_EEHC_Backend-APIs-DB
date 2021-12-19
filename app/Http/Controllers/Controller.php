<?php

namespace App\Http\Controllers;

use Astrotomic\Translatable\Locales;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const perPage = 20;
    function getLocales()
    {
        return app(Locales::class)->all();
    }

    public function validateCode($table)
    {
        $code = $this->randCode(4);
        $validator = Validator::make(["code" => $code], [
            'code' => ['required', 'digits:4', 'unique:' . $table . ',verification_code'],
        ]);
        if ($validator->fails()) {
            $this->validateCode($table);
        }
        return intval($code);
    }

    function randCode($len)
    {
        $min_lenght = 1;
        $max_lenght = 100;
        $number = "123456789";
        $numberS = str_shuffle($number);
        $subG = substr($numberS, 0, 5);
        $subH = substr($numberS, 6, 5);
        $subI = substr($numberS, 10, 5);
        $RandCode1 = str_shuffle($subG . $subH . $subI);
        $RandCode2 = str_shuffle($RandCode1);
        $RandCode = $RandCode1 . $RandCode2;

        if ($len > $min_lenght && $len < $max_lenght) {
            $CodeEX = substr($RandCode, 0, $len);
        } else {
            $CodeEX = $RandCode;
        }
        return $CodeEX;
    }

    function randomAlphaNumericCode($len)
    {
        $min_lenght = 1;
        $max_lenght = 100;
        $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $smallL = "abcdefghijklmnopqrstuvwxyz";
        $number = "0123456789";
        $bigB = str_shuffle($bigL);
        $smallS = str_shuffle($smallL);
        $numberS = str_shuffle($number);
        $subA = substr($bigB, 0, 5);
        $subB = substr($bigB, 6, 5);
        $subC = substr($bigB, 10, 5);
        $subD = substr($smallS, 0, 5);
        $subE = substr($smallS, 6, 5);
        $subF = substr($smallS, 10, 5);
        $subG = substr($numberS, 0, 5);
        $subH = substr($numberS, 6, 5);
        $subI = substr($numberS, 10, 5);
        $RandCode1 = str_shuffle($subA . $subD . $subB . $subF . $subC . $subE);
        $RandCode2 = str_shuffle($RandCode1);
        $RandCode = $RandCode1 . $RandCode2;

        if ($len > $min_lenght && $len < $max_lenght) {
            $CodeEX = substr($RandCode, 0, $len);
        } else {
            $CodeEX = $RandCode;
        }
        return $CodeEX;
    }

    function is_collection($param): bool
    {
        return (bool) (($param instanceof \Illuminate\Support\Collection) || ($param instanceof \Illuminate\Database\Eloquent\Collection));
    }
}
