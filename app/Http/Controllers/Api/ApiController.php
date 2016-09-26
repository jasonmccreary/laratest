<?php

use App\Server;

use App\Http\Controllers\Controller;

class ApiServerController extends Controller
{
    public function active()
    {
        Auth::user();
    }
}
