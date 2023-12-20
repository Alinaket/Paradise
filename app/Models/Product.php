<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $slug)
 * @method static take(int $int)
 */
class Product extends Model
{
    use HasFactory;
}
