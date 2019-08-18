<?php

namespace App\Http\Controllers;

use App\DataTables\ParticipanteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateParticipanteRequest;
use App\Http\Requests\UpdateParticipanteRequest;
use App\Repositories\ParticipanteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ParticipanteController extends AppBaseController
{
    /** @var  ParticipanteRepository */
    private $participanteRepository;

    public function __construct(ParticipanteRepository $participanteRepo)
    {
        $this->participanteRepository = $participanteRepo;
    }

    /**
     * Display a listing of the Participante.
     *
     * @param ParticipanteDataTable $participanteDataTable
     * @return Response
     */
    public function index(ParticipanteDataTable $participanteDataTable)
    {
        return $participanteDataTable->render('participantes.index');
    }

    /**
     * Show the form for creating a new Participante.
     *
     * @return Response
     */
    public function create()
    {
        return view('participantes.create');
    }

    /**
     * Store a newly created Participante in storage.
     *
     * @param CreateParticipanteRequest $request
     *
     * @return Response
     */
    public function store(CreateParticipanteRequest $request)
    {
        $input = $request->all();

        $participante = $this->participanteRepository->create($input);

        Flash::success('Participante saved successfully.');

        return redirect(route('participantes.index'));
    }

    /**
     * Display the specified Participante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $participante = $this->participanteRepository->find($id);

        if (empty($participante)) {
            Flash::error('Participante not found');

            return redirect(route('participantes.index'));
        }

        return view('participantes.show')->with('participante', $participante);
    }

    /**
     * Show the form for editing the specified Participante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $participante = $this->participanteRepository->find($id);

        if (empty($participante)) {
            Flash::error('Participante not found');

            return redirect(route('participantes.index'));
        }

        return view('participantes.edit')->with('participante', $participante);
    }

    /**
     * Update the specified Participante in storage.
     *
     * @param  int              $id
     * @param UpdateParticipanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParticipanteRequest $request)
    {
        $participante = $this->participanteRepository->find($id);

        if (empty($participante)) {
            Flash::error('Participante not found');

            return redirect(route('participantes.index'));
        }

        $participante = $this->participanteRepository->update($request->all(), $id);

        Flash::success('Participante updated successfully.');

        return redirect(route('participantes.index'));
    }

    /**
     * Remove the specified Participante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $participante = $this->participanteRepository->find($id);

        if (empty($participante)) {
            Flash::error('Participante not found');

            return redirect(route('participantes.index'));
        }

        $this->participanteRepository->delete($id);

        Flash::success('Participante deleted successfully.');

        return redirect(route('participantes.index'));
    }
}
