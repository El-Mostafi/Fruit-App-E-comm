<?php

use App\Livewire\About;
use App\Livewire\Cart;
use App\Livewire\CheckOut;
use App\Livewire\Contact;
use App\Livewire\News;
use App\Livewire\PageEror;
use App\Livewire\SingleNews;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePage::class)->name('home');
Route::get('/product', Product::class)->name('product');
Route::get('/error404', PageEror::class)->name('page_error');
Route::get('/about', About::class)->name('about');
Route::get('/news', News::class)->name('news');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/checkout', CheckOut::class)->name('check_out');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/singlenews', SingleNews::class)->name('single_news');
Route::get('/singleproduct', SingleProduct::class)->name('single_product');
