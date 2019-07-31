<?php
namespace App\models;

class QueryBilder{

    public $manager;

    public function __construct(ImageManager $manager)
    {
        $this->manager = $manager;
    }

    public function all(){
        echo "all";
    }

}