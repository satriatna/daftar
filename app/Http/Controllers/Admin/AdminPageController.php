<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function beranda(){
        return view ('admin.beranda');
    }

}
