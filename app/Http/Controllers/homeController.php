<?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 2/06/15
 * Time: 20:57
 */

namespace App\Http\Controllers;


class homeController extends Controller{

    function home(){
        return view('home');
    }
}