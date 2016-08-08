<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/8/2
 * Time: 下午1:38
 */

namespace App\Http\Controllers;


use App\Article;
use cebe\markdown\GithubMarkdown;
use cebe\markdown\Markdown;
use cebe\markdown\MarkdownExtra;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Sunra\PhpSimple\HtmlDomParser;

class WebController extends Controller
{

    public $layout = 'layout.master';
    public $prefix = 'home';


    public function index() {
        $ret = Article::query()
            ->where('publish', 1)
            ->orderBy('updated_at', 'desc')
            ->paginate(1000);
        
        return $this->view('index', [
            'list' => $ret->items()
        ]);
    }
    
    public function detail(Request $request, $id) {
        $content = '悲伤,找不到了。。。。。';
        $article = Article::query()
            ->where('unique_id', $id)
            ->where('publish', 1)
            ->first();
        
        if($article) {
            $article->content;
        }
        
        return $this->view('article', [
            'content' => $content 
        ]);
    }
}