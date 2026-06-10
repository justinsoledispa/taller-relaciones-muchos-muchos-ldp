<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
class Interes extends Model
 {
 use HasFactory;
protected $fillable = ['nombre', 'descripcion'];
 public function personas()
 {
 return $this->belongsToMany(Persona::class);
 }
 }
