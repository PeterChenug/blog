<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/8/2
 * Time: 下午1:38
 */

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public $layout = 'layout.master';
    public $prefix = 'home';


    public function index() {
        $ret = Article::query()
            ->paginate(10000);
        
        return $this->view('index', [
            'list' => $ret->items()
        ]);
    }
    
    public function detail(Request $request, $id) {
        $content = '悲伤,找不到了。。。。。';
        $article = Article::query()
            ->where('unique_id', $id)
            ->first();
        
        if($article) {
            $content = $article->content;
        }
        
        return $this->view('article', [
            'content' => $content
        ]);
    }
}