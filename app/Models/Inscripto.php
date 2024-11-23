<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripto
 *
 * @property $matriculasocio
 * @property $numero
 * @property $matricula
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matriculasocio', 'numero', 'matricula'];
    protected $primaryKey = "matriculasocio";
    public $timestamps = false;

}
