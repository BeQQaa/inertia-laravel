<?php

namespace App\Http\Controllers;

use App\Helper\PaginationHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class PeopleController extends Controller
{
    public function index(Request $request)
    {
        $postfix = PaginationHelper::process($request->getRequestUri());
        $peoples = json_decode(Http::withoutVerifying()->get('https://swapi.dev/api/' . $postfix), true);
        $peoples = PaginationHelper::linksHandler($peoples, $request->getUri());
//        dd(Inertia::render('People', compact('peoples')));
        return Inertia::render('People', compact('peoples'));

    }

}
