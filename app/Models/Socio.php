<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socio
 *
 * @property $matricula
 * @property $nombre
 * @property $domicilio
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'nombre', 'domicilio'];
    protected $primaryKey = "matricula";

}
