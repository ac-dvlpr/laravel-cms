<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Common\ValueObject\Language;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app', [
            'pl' => Language::pl()->getValue(), 
            'en' => Language::en()->getValue()
        ]);
    }
}
