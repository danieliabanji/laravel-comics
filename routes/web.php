<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $link = config('comics.links');
    $social = config('comics.socials');
    $footerLink = config('comics.footerLinks');
    $comic = config('comics.comics');
    $shop = config('comics.shop');
    $dcComic = config('comics.dcComics');
    $dcShop = config('comics.dcShop');
    $dc = config('comics.dc');
    $site = config('comics.sites');

    return view('home', compact('comic', 'social', 'link', 'footerLink', 'shop', 'dcComic', 'dcShop', 'dc', 'site'));
})->name('home');


Route::get('/comics', function () {
    $link = config('comics.links');
    $social = config('comics.socials');
    $footerLink = config('comics.footerLinks');
    $comic = config('comics.comics');
    $shop = config('comics.shop');
    $dcComic = config('comics.dcComics');
    $dcShop = config('comics.dcShop');
    $dc = config('comics.dc');
    $site = config('comics.sites');
    return view('comics', compact('comic', 'social', 'link', 'footerLink', 'shop', 'dcComic', 'dcShop', 'dc', 'site'));
})->name('comics');
