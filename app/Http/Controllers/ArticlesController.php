<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticlesService;

class ArticlesController extends Controller
{
    public function view(Request $request, $uri)
    {
    	$article = ArticlesService::getByUri($uri);

    	if($article)
    	{
    		return view('articles.view', [
    			'post' => $article
    		]);
    	}
    	else
    	{
    		return abort(404);
    	}
    }
    //
}
