<?php
/**
 * Useful functions through out the application
 *
 * @category PHP
 * @author Aaron Low <aaronlow1220@gmail.com>
 * @copyright 2024 Aaron
 *
 */

namespace App\Helpers;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class Helper
{
    // User
    /**
     * Generate uuid with custom prefix
     *
     * @param string $prefix prefix for generated uuid
     *
     * @return string
     */
    public static function prefixedUuid($prefix)
    {
        return $prefix . ((string) Uuid::uuid4());
    }

    /**
     * Generate uuid with custom prefix
     *
     * @return bool
     */
    public static function isAdmin()
    {
        $isAdmin = false;
        if (Auth::check()) {
            $isAdmin = user::where("uuid", Auth::user()->uuid)->first()->is_admin;
        }
        return $isAdmin;
    }

}