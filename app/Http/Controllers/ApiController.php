<?php

use App\Server;

class ApiServerController extends \Controller
{
    public function active()
    {
        Auth::user();
    }
}
