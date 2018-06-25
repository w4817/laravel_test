<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 09.04.2018
 * Time: 21:04
 */

namespace App\Http\Models;


class HomeModel
{
    public function getFruitBasket(){
        return ['apple', 'pear', 'lemon'];
    }
}