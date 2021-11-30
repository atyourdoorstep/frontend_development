<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function catIndex($parent =null)
    {
        if ($parent ?? '') {
            return (view('admin.catIndex',
                [
                    'parent'=> Category::find($parent),
                    'data' => Category::with('children')->where('category_id',$parent)->paginate(10),
                ]
            ));

        }
        return (view('admin.catIndex', ['data' => Category::with('children')->whereNull('category_id')->paginate(10)]));
    }
}
