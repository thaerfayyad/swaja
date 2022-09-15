<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    //
    public function index()
    {
        $categories = Category::with(['products'])->get();
        //  foreach($categories  as $x)
        //  {
        //      dd(  $x->products->name );


        //  }

        return response()->view('front.parent',compact( 'categories'));
    }

}
