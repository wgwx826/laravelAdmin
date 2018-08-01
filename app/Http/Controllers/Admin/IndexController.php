<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminBaseController;

class IndexController extends AdminBaseController
{
    public function index(){
    	return view('admin.index.index');
    }

    public function main(){
        return view('admin.index.main');
    }
}
