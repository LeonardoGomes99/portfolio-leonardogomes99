<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $table = 'visits';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ip',
        'browser',
        'os',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id'      => 'string',
        'ip'      => 'string',
        'browser' => 'string',
        'os'      => 'string',
    ];
}
