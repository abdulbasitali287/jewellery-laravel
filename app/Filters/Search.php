<?php

namespace App\Filters;

use Closure;

class Search
{

    public function handle($query, Closure $next)
    {
        if (!request()->has('variants') && !request()->has('categories') && !request()->has('priceRange')) return $next($query);

        $query
            ->when(request()->has('variants') && request()->has('categories') && request()->has('priceRange'), function ($query) {
                $variants = request()->variants;
                $categories = request()->categories;
                $query->where(function ($query) use ($variants, $categories) {
                    $query->whereHas('variants', function ($query) use ($variants) {
                        $query->whereIn('name', $variants);
                    })->whereHas('categories', function ($query) use ($categories) {
                        $query->whereIn('name', $categories);
                    });
                })->whereBetween('price', [request()->priceRange['min'], request()->priceRange['max']]);
            })
            ->when(request()->has('variants') && request()->has('categories') && !request()->has('priceRange'), function ($query) {
                $variants = request()->variants;
                $categories = request()->categories;
                $query->where(function ($query) use ($variants, $categories) {
                    $query->whereHas('variants', function ($query) use ($variants) {
                        $query->whereIn('name', $variants);
                    })->whereHas('categories', function ($query) use ($categories) {
                        $query->whereIn('name', $categories);
                    });
                });
            })
            ->when(request()->has('variants') && !request()->has('categories') && request()->has('priceRange'), function ($query) {
                $variants = request()->variants;
                $query->where(function ($query) use ($variants) {
                    $query->whereHas('variants', function ($query) use ($variants) {
                        $query->whereIn('name', $variants);
                    });
                })->whereBetween('price', [request()->priceRange['min'], request()->priceRange['max']]);
            })
            ->when(!request()->has('variants') && request()->has('categories') && request()->has('priceRange'), function ($query) {
                $categories = request()->categories;
                $query->where(function ($query) use ($categories) {
                    $query->whereHas('categories', function ($query) use ($categories) {
                        $query->whereIn('name', $categories);
                    });
                })->whereBetween('price', [request()->priceRange['min'], request()->priceRange['max']]);
            })
            ->when(request()->has('variants') && !request()->has('categories') && !request()->has('priceRange'), function ($query) {
                $variants = request()->variants;
                $query->where(function ($query) use ($variants) {
                    $query->whereHas('variants', function ($query) use ($variants) {
                        $query->whereIn('name', $variants);
                    });
                });
            })
            ->when(!request()->has('variants') && request()->has('categories') && !request()->has('priceRange'), function ($query) {
                $categories = request()->categories;
                $query->where(function ($query) use ($categories) {
                    $query->whereHas('categories', function ($query) use ($categories) {
                        $query->whereIn('name', $categories);
                    });
                });
            })
            ->when(!request()->has('variants') && !request()->has('categories') && request()->has('priceRange'), function ($query) {
                $query->whereBetween('price', [request()->priceRange['min'], request()->priceRange['max']]);
            });


        return $query->get();
    }
}
