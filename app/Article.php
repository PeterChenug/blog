<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/8/2
 * Time: 上午10:24
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'id', 'unique_id','title', 'description', 'content', 'publish'
    ];
    protected $table = 'article';
}