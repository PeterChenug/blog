<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/8/2
 * Time: 上午10:39
 */

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public $layout = 'layout.backend';
    public $prefix = 'backend';
    
    public function index() {
        return $this->view('index');
    }
    
    public function article() {
        $ret = Article::query()
            ->orderBy('updated_at', 'desc')
            ->paginate(30);
        return $this->view('article.index', [
            'list' => $ret->items()
        ]); 
    }
    
    public function addArticle(Request $request) {
        $data = [];
        if($request->isMethod('post')) {
            $id = $request->input('id', 0);
            $title = $request->input('title');
            $description = $request->input('description');
            $content = $request->input('content');
            $publish = $request->input('publish', 0);
            if(!empty($title) && !empty($description) && !empty($content)) {
                $param = [
                    'title' => $title,
                    'description' => $description,
                    'content' => $content,
                    'publish' => !empty($publish)?1:0
                ];
                $article = Article::find($id);
                if($article) {
                    $article->update($param);
                } else {
                    $param['unique_id'] = sha1(md5(uniqid()).'PeiYanYiSheng');
                    $article = new Article($param);
                    $article->save();
                }
            }
            
            return redirect('/backend-article');
        } else {
            $id = $request->input('id');
            $article = Article::find($id);
            if($article) {
                $data = $article->toArray();
            }
        } 
        return $this->view('article.create', $data);
    }
    
    public function getArticleList() {
        $ret = Article::query()
            ->orderBy('updated_at', 'desc')
            ->paginate(100);
        
        return $this->view('article.list', $ret->items());
    }
}