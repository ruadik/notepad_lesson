<?php
namespace App\models;

class ImageManager
{
    public $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function upload()
    {
        echo "true";
    }
}