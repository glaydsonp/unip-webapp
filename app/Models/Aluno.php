<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aluno
 * @package App\Models
 * @version August 18, 2019, 9:09 pm UTC
 *
 * @property string nomeAluno
 * @property string email
 * @property string matricula
 * @property string turma
 */
class Aluno extends Model
{
    use SoftDeletes;

    public $table = 'aluno';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nomeAluno',
        'email',
        'matricula',
        'turma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomeAluno' => 'string',
        'email' => 'string',
        'matricula' => 'string',
        'turma' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomeAluno' => 'required',
        'email' => 'required',
        'matricula' => 'required',
        'turma' => 'required'
    ];

    
}
