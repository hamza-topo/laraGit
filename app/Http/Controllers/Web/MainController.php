<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function getBlogContent(Request $request)
    {
       switch ($request->content) {
           case '0':
                $returnHTML=view('articles.heroku')->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML));
               break;
            case '1':
                $returnHTML=view('articles.socialite')->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML));
            break;
            case '2':
                $returnHTML=view('articles.events')->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML));
            break;
           
           default:
               # code...
               break;
       }
    }
}
