<?php

namespace App\Repositories;

use App\Models\Evento;
use App\Repositories\BaseRepository;

/**
 * Class EventoRepository
 * @package App\Repositories
 * @version August 18, 2019, 8:52 pm UTC
*/

class EventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomePalestra',
        'nomePalestrante',
        'descricao',
        'infoLocal',
        'data',
        'hora',
        'horasComplementares',
        'capacidade'
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
        return Evento::class;
    }
}
