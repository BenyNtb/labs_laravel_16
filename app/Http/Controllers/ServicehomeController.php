<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicehomeController extends Controller
{
    public function index()
    {
    $this->authorize('webmaster', Auth::user());
    $services = Service::all();    
    return view('admin.pages.home.services.index', compact('services'));
}
}
