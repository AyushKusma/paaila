<?php

namespace App\View\Composers;

use App\Models\Consultancy;

use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HeaderComposer
{

    /**
     * Create a new profile composer.
     */
    public function __construct(
        public Consultancy $consultancy
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $consultancy = Cache::remember('consultancy', now()->addMinutes(5), function () {
            return $this->consultancy::select('name', 'slug', 'image', 'summary')->latest()->get();
        });

        $view->with([
            'consultancy' => $consultancy
        ]);
    }
}
