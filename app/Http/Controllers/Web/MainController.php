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
           
           default:
               # code...
               break;
       }
    }

    public function getTutorialContent(Request $request)
    {
        switch ($request->content) {
            case '0':
                $returnHTML=view('howTo.socialite')->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML));
               break;
            
            default:
                # code...
                break;
        }
    }
}
