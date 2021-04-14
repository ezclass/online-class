<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke()
    {
        $files = Storage::disk('do')->files('class');

        return view('welcome', compact('files'));

    }
}
