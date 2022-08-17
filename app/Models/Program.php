<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = ["program_years_id", "date", "program"];

  protected $hidden = [];

  public function program_year()
  {
    return $this->belongsTo(ProgramYear::class, "program_years_id", "id");
  }
}
