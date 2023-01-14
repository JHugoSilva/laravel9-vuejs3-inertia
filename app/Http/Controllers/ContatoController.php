<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContatoController extends Controller
{
    public function index(Request $request) {
        return Inertia::render('Contact/index');
    }
}
