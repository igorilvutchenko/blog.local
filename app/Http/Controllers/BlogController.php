<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
// use App\Article;
use App\Services\BlogService;

class BlogController extends Controller
{
	public function index(Request $request)
	{
		$articles = BlogService::getArticles();

		return view('blog.index', [
			'articles' => $articles
		]);
	}
		/*$user = User::find(1);
		$user_email = $user->email;

		$user_email = User::find(1)->value('email');*/

		// $articles = Article::where('is_published', TRUE)->orWhere('user_id', 10)->latest()->get();
		/*echo '<pre>';
		var_dump($articles->toArray());
		echo '</pre>';*/
		/*
		$user = User::find(1);
		$user->articles()->create([
			'title' => 'Это моя вторая статья',
			'content' => 'Контент',	
			'image' => 'image2.png',
			'is_published' => TRUE
		]);
		*/

		// $articles = Article::orderBy('id')->paginate(1);

        // return view('blog.view', ['articles' => $articles]);

	/*	foreach($articles as $article)
		{
			echo '<pre>';
			var_dump($article->title);
			var_dump($article->image);
			echo '</pre>';
			$user = $article->user()->first();
			echo '<pre>';
			var_dump($user->name);
			echo '</pre>';
		}*/
			// $user = User::where('id', $article->user_id)->get();
			
			/*
			$user = $article->user()->first();
			*/

		/*
		$user = new User;
		$user->email = 'user1@example.com';
		$user->name = 'Вася Пупкин';
		$user->save();

		$article = new Article;
		$article->user_id = 1;
		$article->title = 'Это моя первая запись в блоге';
		$article->content = 'Это мой первый контент в блоге';
		$article->image = 'image.png';
		$article->is_published = FALSE;
		$article->save();
		*/

		// return view('blog.index', ['articles' => $articles]);

	public function view(Request $request, $id)
	{

		/*$blogService = new BlogService;
    	$article = $blogService->getArticle($id);*/
		$blogService = new BlogService();
		// $article = $blogService->getArticle($id);
		// $article = new BlogService::$blogService->getArticle($id);
		$article = $blogService->getArticle($id);

// 
		// return var_dump($article);
		/*echo '<pre>';
var_dump($article);
echo '</pre>';*/
		/*return view('blog.view', [
					'articles' => $articles
					]);*/
// $articles = Article::all();

		return view('blog.view', [
			'id' => $id,
			'article' => $article
		]);
	}

}
