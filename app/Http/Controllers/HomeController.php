<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 09.04.2018
 * Time: 20:58
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\HomeModel;


class HomeController extends Controller
{

    public function index(){
        $fruitBasket = new HomeModel;
        $this->data['basket'] = $fruitBasket->getFruitBasket();
        return view('home', $this->data);
    }
}