<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        return view("pages.home");
    }
    public function category()
    {
        return view("pages.kategori");
    }
    public function author()
    {
        return view("pages.author");
    }
    public function borrowings()
    {
        return view("pages.borrowings");
    }
}
