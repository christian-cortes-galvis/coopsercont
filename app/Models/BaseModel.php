<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    public function money($value): string
    {
        return '$' . number_format($value, 2, ',', '.');
    }
}
