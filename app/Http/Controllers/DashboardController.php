<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Jika user biasa, redirect ke public-news
        if (auth()->user() && auth()->user()->role === 'user') {
            return redirect()->route('public.news');
        }
        // Selain itu (admin/editor/wartawan), tampilkan dashboard
        return view('dashboard');
    }
}
