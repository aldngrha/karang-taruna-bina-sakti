<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramYear extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["date"];

    protected $hidden = [];
}
