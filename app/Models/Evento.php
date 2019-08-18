<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evento
 * @package App\Models
 * @version August 18, 2019, 8:52 pm UTC
 *
 * @property string nomePalestra
 * @property string nomePalestrante
 * @property string descricao
 * @property string infoLocal
 * @property string data
 * @property integer horasComplementares
 * @property integer capacidade
 */
class Evento extends Model
{
    use SoftDeletes;

    public $table = 'evento';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nomePalestra',
        'nomePalestrante',
        'descricao',
        'infoLocal',
        'data',
        'horasComplementares',
        'capacidade',
        'hora'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomePalestra' => 'string',
        'nomePalestrante' => 'string',
        'descricao' => 'string',
        'infoLocal' => 'string',
        'data' => 'date',
        'horasComplementares' => 'integer',
        'capacidade' => 'integer',
        'hora' => 'time'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomePalestra' => 'required',
        'nomePalestrante' => 'required'
    ];


}
