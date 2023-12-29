<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    // app\Models\Assignment.php

    protected $fillable = [
        'week',
        'name',
        'assistant',
        'assignment',
    ];

    use HasFactory;
}
