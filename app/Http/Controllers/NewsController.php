<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\News;
class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        foreach ($news as $post){
            $imageUrl = !empty($post->image) ? $post->image : 'images/noimage.png' ;
            $img = Image::cache(function($image) use ($imageUrl) {
                $image->make($imageUrl)->fit(300, 200);
            }, 60*24*10, true);
            preg_match('/.*\/+(?P<filename>.+)\.(?P<ext>.+)/', $imageUrl, $matches);
            $cachedUrl = 'images/cache/'.$matches['filename'].'.'.$matches['ext'];
            $img->save($cachedUrl);
            $img->destroy();
            $post->preview = $cachedUrl;
        }
        $this->data['news'] = $news;
        return view('news', $this->data);
    }
}
