<?php
/**
 * Created by PhpStorm.
 * User: shouno
 * Date: 2016/04/27
 * Time: 12:05
 */

namespace App\Http\Controllers;


use App\Http\Repository\PhotoRepository;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
class PhotoController extends Controller
{
    protected $request;

    public function __construct(
        Request $request,
        PhotoRepository $photo

    ){
        $this->request = $request;
        $this->photo = $photo;

    }

    public function register(){
        return view ('photo.register');
    }

    public function upload(){

        $data = $this->request->all();
//        dd($data);
        $this->photo->upload($data);


    }



}