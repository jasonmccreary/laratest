<?php

use App\Server;

class ApiServerController extends \BaseController {
  public function active()
  {
    Auth::user();
  }
}
