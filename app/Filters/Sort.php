<?php

namespace App\Filters;

use Closure;

class Sort
{

    public function handle($query, Closure $next)
    {
        $query->when(request()->has('sorting'),function($query){
            $sortingValue = request()->sorting;
            if ($sortingValue == 1) {
                $query->orderBy('price', 'asc');
            }
            elseif ($sortingValue == 2) {
                $query->orderBy('price', 'desc');
            }
        });
        return $query->get();
    }
}
