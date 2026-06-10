<?php

namespace App\Models;
use App\Models\Interes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
 {
 use HasFactory;
 protected $fillable = ['nombre', 'email'];

 public function intereses()
 {
 return $this->belongsToMany(Interes::class);
 }
}
