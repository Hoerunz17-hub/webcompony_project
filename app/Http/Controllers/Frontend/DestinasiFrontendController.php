<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class DestinasiFrontendController extends Controller
{
   public function show($slug)
{
    $map = [
        'cagar-alam'   => 'page.frontend.destinasi.Alam.index',
        'green-canyon' => 'page.frontend.destinasi.Green.index',
        'wonder-hill-jojogan' => 'page.frontend.destinasi.wonderhill.index',
        'pantai-batu-karas' => 'page.frontend.destinasi.batukaras.index',
        'green-valley' => 'page.frontend.destinasi.greenvalley.index',
        'pantai-mandasari' => 'page.frontend.destinasi.mandasari.index',
    ];

    if (array_key_exists($slug, $map) && view()->exists($map[$slug])) {
        return view($map[$slug]);
    }

    abort(404);
}

}
