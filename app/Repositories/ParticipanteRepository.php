<?php

namespace App\Repositories;

use App\Models\Participante;
use App\Repositories\BaseRepository;

/**
 * Class ParticipanteRepository
 * @package App\Repositories
 * @version August 18, 2019, 9:10 pm UTC
*/

class ParticipanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idEvento',
        'idAluno'
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
        return Participante::class;
    }
}
