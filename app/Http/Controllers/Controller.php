<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
    	// session()->put('user.uid', '123');
    	session()->pull('user.uid', '');
    	// $uid=session()->get('user.uid');
    	// var_dump($uid);
    }
    public function index(){

  
    }
}
