<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramYear extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = ["year", "slug"];

  protected $hidden = [];

  public function programs()
  {
    return $this->hasMany(Program::class, "program_years_id", "id");
  }
}
