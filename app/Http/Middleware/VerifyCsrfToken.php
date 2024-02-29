<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/login',
        '/register',
        '/logout',
        '/add_bookmark/*',
        '/update_product_confirm/*',
        // Add more routes that need to be excluded from CSRF verification here:
        '/add_category',
        '/add_featured',
        '/update_featured_confirm/*',
        '/delete_featured/*',
        '/delete_category/*',
        '/add_product',
        '/update_product_confirm/*',
        '/delete_product/*',
    ];
}