<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
class Photo extends Model
{
    protected $table = 'photos';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['name', 'comment', 'tag', 'path'];

}