<?php

namespace Ketan\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        return 'In Index';
    }
}
