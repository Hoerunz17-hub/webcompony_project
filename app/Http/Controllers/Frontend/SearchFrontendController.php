<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchFrontendController extends Controller
{
    public function index(Request $request)
    {
        $destination = strtolower(trim($request->input('destination')));

        // mapping slug sesuai pilihan
        $map = [
            'cagar-alam' => 'cagar-alam',
            'green-canyon' => 'green-canyon',
            'pantai-batu-hiu' => 'pantai-batu-hiu',
            'pantai-batu-karas' => 'pantai-batu-karas',
            'pantai-karapyak' => 'pantai-karapyak',
            'pantai-madasari' => 'pantai-madasari',
            'wonder-hill-jojogan' => 'wonder-hill-jojogan',
        ];

        if (array_key_exists($destination, $map)) {
            return redirect()->route('destinasi.show', $map[$destination]);
        }

        return back()->with('error', 'Destinasi tidak ditemukan.');
    }
}
