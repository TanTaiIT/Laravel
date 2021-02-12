<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FluentController extends Controller
{
    public function index(){
    	echo '<h1>Nguyen Tan Tai</h1>';
    	$slice=Str::of('Welcome to my website')->after('Welcome');
    	echo $slice.'<br>';
    	$slice1=Str::of('App\Http\Controllers\Controller')->afterlast('\\');
    	echo $slice1.'<br>';
    	$slice2=Str::of('Tan tai')->append('Nguyen');
    	echo $slice2.'<br>';
    	$slice3=Str::of('JASON')->lower();
    	echo $slice3.'<br>';
    	$slice4=Str::of('laravel 7.0')->replace('7.0','8.0');
    	echo $slice4.'<br>';
    }

}
