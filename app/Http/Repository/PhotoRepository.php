<?php
namespace App\Http\Repository;

use Carbon\Carbon;
use App\Http\Model\Photo;
class PhotoRepository
{
    public function __construct()
    {
        $this->now = Carbon::now();
    }

    public function upload($data){
        Photo::create($data);

    }

}