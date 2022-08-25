<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function LProduct()
    {
        return view('pages.list-products');
    }
    public function PDetails()
    {
        return view('pages.product-details');
    }
    public function Cart()
    {
        return view('pages.Cart');
    }
    public function About()
    {
        return view('pages.Aboutus');
    }
    public function Constact()
    {
        return view('pages.Contact');
    }
}
