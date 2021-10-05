<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtable_servicesRequest;
use App\Http\Requests\Updatetable_servicesRequest;
use App\Repositories\table_servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class table_servicesController extends AppBaseController
{
    /** @var  table_servicesRepository */
    private $tableServicesRepository;

    public function __construct(table_servicesRepository $tableServicesRepo)
    {
        $this->tableServicesRepository = $tableServicesRepo;
    }

    /**
     * Display a listing of the table_services.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tableServices = $this->tableServicesRepository->all();

        return view('table_services.index')
            ->with('tableServices', $tableServices);
    }

    /**
     * Show the form for creating a new table_services.
     *
     * @return Response
     */
    public function create()
    {
        return view('table_services.create');
    }

    /**
     * Store a newly created table_services in storage.
     *
     * @param Createtable_servicesRequest $request
     *
     * @return Response
     */
    public function store(Createtable_servicesRequest $request)
    {
        $input = $request->all();

        $tableServices = $this->tableServicesRepository->create($input);

        Flash::success('Table Services saved successfully.');

        return redirect(route('tableServices.index'));
    }

    /**
     * Display the specified table_services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tableServices = $this->tableServicesRepository->find($id);

        if (empty($tableServices)) {
            Flash::error('Table Services not found');

            return redirect(route('tableServices.index'));
        }

        return view('table_services.show')->with('tableServices', $tableServices);
    }

    /**
     * Show the form for editing the specified table_services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tableServices = $this->tableServicesRepository->find($id);

        if (empty($tableServices)) {
            Flash::error('Table Services not found');

            return redirect(route('tableServices.index'));
        }

        return view('table_services.edit')->with('tableServices', $tableServices);
    }

    /**
     * Update the specified table_services in storage.
     *
     * @param int $id
     * @param Updatetable_servicesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetable_servicesRequest $request)
    {
        $tableServices = $this->tableServicesRepository->find($id);

        if (empty($tableServices)) {
            Flash::error('Table Services not found');

            return redirect(route('tableServices.index'));
        }

        $tableServices = $this->tableServicesRepository->update($request->all(), $id);

        Flash::success('Table Services updated successfully.');

        return redirect(route('tableServices.index'));
    }

    /**
     * Remove the specified table_services from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tableServices = $this->tableServicesRepository->find($id);

        if (empty($tableServices)) {
            Flash::error('Table Services not found');

            return redirect(route('tableServices.index'));
        }

        $this->tableServicesRepository->delete($id);

        Flash::success('Table Services deleted successfully.');

        return redirect(route('tableServices.index'));
    }
}
