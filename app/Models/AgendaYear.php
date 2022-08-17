<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgendaYear extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = ["year", "slug"];

  protected $hidden = [];

  public function agendas()
  {
    return $this->hasMany(Agenda::class, "agenda_years_id", "id");
  }
}
