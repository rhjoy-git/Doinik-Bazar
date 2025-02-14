<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class checkout extends Component
{
    public function __construct(public string $type = "")
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.checkout');
    }

    public function checkoutLink($target, $text){
        return new HtmlString('<a href="' . $target . '" class="bg-amber-400 px-4 py-2">' . $text . '</a>');
    }
}
