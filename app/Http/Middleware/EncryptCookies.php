<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
<<<<<<< HEAD
	protected static $serialize = true;
=======
>>>>>>> 2ca2e5726ef7e538fc1f644432fff88a97e72f98
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
