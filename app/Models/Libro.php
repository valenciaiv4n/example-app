<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $codigo
 * @property $titulo
 * @property $autor
 * @property $editorial
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = 'codigo';
    protected $column = 'codigo';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'titulo', 'autor', 'editorial'];


}
