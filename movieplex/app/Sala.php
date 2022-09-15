<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sala
 *
 * @property $id
 * @property $capacidad
 * @property $horario1
 * @property $horario2
 * @property $horario3
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sala extends Model
{
    
    static $rules = [
		'capacidad' => 'required',
		'horario1' => 'required',
		'horario2' => 'required',
		'horario3' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['capacidad','horario1','horario2','horario3'];



}
