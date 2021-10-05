<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtable_productsRequest;
use App\Http\Requests\Updatetable_productsRequest;
use App\Repositories\table_productsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class table_productsController extends AppBaseController
{
    /** @var  table_productsRepository */
    private $tableProductsRepository;

    public function __construct(table_productsRepository $tableProductsRepo)
    {
        $this->tableProductsRepository = $tableProductsRepo;
    }

    /**
     * Display a listing of the table_products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tableProducts = $this->tableProductsRepository->all();

        return view('table_products.index')
            ->with('tableProducts', $tableProducts);
    }

    /**
     * Show the form for creating a new table_products.
     *
     * @return Response
     */
    public function create()
    {
        return view('table_products.create');
    }

    /**
     * Store a newly created table_products in storage.
     *
     * @param Createtable_productsRequest $request
     *
     * @return Response
     */
    public function store(Createtable_productsRequest $request)
    {
        $input = $request->all();

        $tableProducts = $this->tableProductsRepository->create($input);

        Flash::success('Table Products saved successfully.');

        return redirect(route('tableProducts.index'));
    }

    /**
     * Display the specified table_products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tableProducts = $this->tableProductsRepository->find($id);

        if (empty($tableProducts)) {
            Flash::error('Table Products not found');

            return redirect(route('tableProducts.index'));
        }

        return view('table_products.show')->with('tableProducts', $tableProducts);
    }

    /**
     * Show the form for editing the specified table_products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tableProducts = $this->tableProductsRepository->find($id);

        if (empty($tableProducts)) {
            Flash::error('Table Products not found');

            return redirect(route('tableProducts.index'));
        }

        return view('table_products.edit')->with('tableProducts', $tableProducts);
    }

    /**
     * Update the specified table_products in storage.
     *
     * @param int $id
     * @param Updatetable_productsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetable_productsRequest $request)
    {
        $tableProducts = $this->tableProductsRepository->find($id);

        if (empty($tableProducts)) {
            Flash::error('Table Products not found');

            return redirect(route('tableProducts.index'));
        }

        $tableProducts = $this->tableProductsRepository->update($request->all(), $id);

        Flash::success('Table Products updated successfully.');

        return redirect(route('tableProducts.index'));
    }

    /**
     * Remove the specified table_products from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tableProducts = $this->tableProductsRepository->find($id);

        if (empty($tableProducts)) {
            Flash::error('Table Products not found');

            return redirect(route('tableProducts.index'));
        }

        $this->tableProductsRepository->delete($id);

        Flash::success('Table Products deleted successfully.');

        return redirect(route('tableProducts.index'));
    }
}
