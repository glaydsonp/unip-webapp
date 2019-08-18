<?php

namespace App\Repositories;

use App\Models\Aluno;
use App\Repositories\BaseRepository;

/**
 * Class AlunoRepository
 * @package App\Repositories
 * @version August 18, 2019, 9:09 pm UTC
*/

class AlunoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomeAluno',
        'email',
        'matricula',
        'turma'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aluno::class;
    }
}
