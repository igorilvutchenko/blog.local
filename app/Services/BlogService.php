<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use App\Article;
use App\User;

class BlogService
{
    public static function getArticles()
    {
    	/*$articles = Article::all();

        $articles->map(function ($item, $key) {
            $item->image = '/path/to/image/' . $item->image;
            return $item;
        });

        */
		$user = User::find(1);
		$user_email = $user->email;
		$user_email = User::find(1)->value('email');
        $articles = Article::orderBy('id')->paginate(1);

        return $articles;
    }

    public function getArticle($id)
    {
    	/*$blogService = new BlogService;
    	$article = $blogService->getArticle($id);*/

    	// $articles = Article::all();

    	$article = Article::where('id', $id)->get()->toArray();	
    	
return $article;	

    	
    }
}