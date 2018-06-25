<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class SearchController extends Controller
{
    public function index(){
        $this->data['news'] = News::search('inter')->get();
        return view('search', $this->data);
    }
}
