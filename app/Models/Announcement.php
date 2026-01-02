<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';

    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo',
        'imagen',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
    ];

    /**
     * Scope: solo activos
     */
    public function scopeActivos($query)
    {
        return $query->where('activo', true);
    }
}
