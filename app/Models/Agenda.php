<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agenda extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = ["agenda_years_id", "title", "image"];

  protected $hidden = [];

  public function agenda_year()
  {
    return $this->belongsTo(AgendaYear::class, "agenda_years_id", "id");
  }
}
