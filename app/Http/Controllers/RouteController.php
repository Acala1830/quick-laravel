<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id) {
        return 'id値：'.$id;
    }

    public function search(string $keywd) {
        return 'keywd値：'.$keywd;
    }

    public function enum_param(Category $category) {
        return $category -> value;
    }

}

enum Category: string {
    case Language = 'lang';
    case Framework = 'fw';
    case Tools = 'tools';
}
