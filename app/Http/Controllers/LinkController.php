<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    public $link;
    public function link($guid)
    {
        if ($guid) {
            $link = Link::where('alternative', '=', $guid)->firstOrFail();
        }

        $link->count_visit();
        return redirect($link->source);
    }
}
