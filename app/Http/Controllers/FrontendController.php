<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return Inertia::render('Frontend/Product/Index');
    }
    public function about()
    {
        return Inertia::render('Frontend/About',[
            'title' => 'Página Secundaria'
        ]);
    }
    public function products(){
        return Inertia::render('Frontend/Product/Index');
    }
    
}
