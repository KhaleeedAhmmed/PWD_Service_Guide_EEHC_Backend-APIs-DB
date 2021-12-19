<?php

namespace App\Traits;

use \Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Config;

trait EncryptableDecryptable
{
    private $key = '#Ba1s@m3ty@e4dv$2o2i#A6l1&fahm1#';

    protected function encrypt($data)
    {
        $encrypter = new Encrypter($this->key, Config::get('app.cipher'));
        return $encrypter->encrypt($data);
    }

    function decrypt($data)
    {
        $encrypter = new Encrypter($this->key, Config::get('app.cipher'));
        return $encrypter->decrypt($data);
    }
}
