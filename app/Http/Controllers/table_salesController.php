<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtable_salesRequest;
use App\Http\Requests\Updatetable_salesRequest;
use App\Repositories\table_salesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class table_salesController extends AppBaseController
{
    /** @var  table_salesRepository */
    private $tableSalesRepository;

    public function __construct(table_salesRepository $tableSalesRepo)
    {
        $this->tableSalesRepository = $tableSalesRepo;
    }

    /**
     * Display a listing of the table_sales.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tableSales = $this->tableSalesRepository->all();

        return view('table_sales.index')
            ->with('tableSales', $tableSales);
    }

    /**
     * Show the form for creating a new table_sales.
     *
     * @return Response
     */
    public function create()
    {
        return view('table_sales.create');
    }

    /**
     * Store a newly created table_sales in storage.
     *
     * @param Createtable_salesRequest $request
     *
     * @return Response
     */
    public function store(Createtable_salesRequest $request)
    {
        $input = $request->all();

        $tableSales = $this->tableSalesRepository->create($input);

        Flash::success('Table Sales saved successfully.');

        return redirect(route('tableSales.index'));
    }

    /**
     * Display the specified table_sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tableSales = $this->tableSalesRepository->find($id);

        if (empty($tableSales)) {
            Flash::error('Table Sales not found');

            return redirect(route('tableSales.index'));
        }

        return view('table_sales.show')->with('tableSales', $tableSales);
    }

    /**
     * Show the form for editing the specified table_sales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tableSales = $this->tableSalesRepository->find($id);

        if (empty($tableSales)) {
            Flash::error('Table Sales not found');

            return redirect(route('tableSales.index'));
        }

        return view('table_sales.edit')->with('tableSales', $tableSales);
    }

    /**
     * Update the specified table_sales in storage.
     *
     * @param int $id
     * @param Updatetable_salesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetable_salesRequest $request)
    {
        $tableSales = $this->tableSalesRepository->find($id);

        if (empty($tableSales)) {
            Flash::error('Table Sales not found');

            return redirect(route('tableSales.index'));
        }

        $tableSales = $this->tableSalesRepository->update($request->all(), $id);

        Flash::success('Table Sales updated successfully.');

        return redirect(route('tableSales.index'));
    }

    /**
     * Remove the specified table_sales from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tableSales = $this->tableSalesRepository->find($id);

        if (empty($tableSales)) {
            Flash::error('Table Sales not found');

            return redirect(route('tableSales.index'));
        }

        $this->tableSalesRepository->delete($id);

        Flash::success('Table Sales deleted successfully.');

        return redirect(route('tableSales.index'));
    }
}
