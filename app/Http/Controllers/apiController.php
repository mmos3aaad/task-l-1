<?php

namespace App\Http\Controllers;
use App\Models\userModel;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function select()
    {
        $show_data = userModel::select("id","Name","Age","Email","Pass") -> get();
        return $show_data;
    }
}
