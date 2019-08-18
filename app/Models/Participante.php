<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Participante
 * @package App\Models
 * @version August 18, 2019, 9:10 pm UTC
 *
 * @property integer idEvento
 * @property integer idAluno
 */
class Participante extends Model
{
    use SoftDeletes;

    public $table = 'participante';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idEvento',
        'idAluno'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idEvento' => 'integer',
        'idAluno' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idEvento' => 'required',
        'idAluno' => 'required'
    ];

    
}
