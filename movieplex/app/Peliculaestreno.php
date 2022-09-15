<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Peliculaestreno
 *
 * @property $id
 * @property $name
 * @property $descripcion
 * @property $year
 * @property $reparto
 * @property $director
 * @property $duracion
 * @property $idioma
 * @property $imagen
 * @property $updated_at
 * @property $created_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Peliculaestreno extends Model
{
    
    static $rules = [
		'name' => 'required',
		'descripcion' => 'required',
		'year' => 'required',
		'reparto' => 'required',
		'director' => 'required',
		'duracion' => 'required',
		'idioma' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','descripcion','year','reparto','director','duracion','idioma','imagen'];



}
