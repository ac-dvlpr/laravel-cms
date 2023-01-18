<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function switchLanguage(string $lang): RedirectResponse
    {
        Session::put('applocale', $lang);

        return redirect()->back();
    }
}
