<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtable_pricingRequest;
use App\Http\Requests\Updatetable_pricingRequest;
use App\Repositories\table_pricingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class table_pricingController extends AppBaseController
{
    /** @var  table_pricingRepository */
    private $tablePricingRepository;

    public function __construct(table_pricingRepository $tablePricingRepo)
    {
        $this->tablePricingRepository = $tablePricingRepo;
    }

    /**
     * Display a listing of the table_pricing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tablePricings = $this->tablePricingRepository->all();

        return view('table_pricings.index')
            ->with('tablePricings', $tablePricings);
    }

    /**
     * Show the form for creating a new table_pricing.
     *
     * @return Response
     */
    public function create()
    {
        return view('table_pricings.create');
    }

    /**
     * Store a newly created table_pricing in storage.
     *
     * @param Createtable_pricingRequest $request
     *
     * @return Response
     */
    public function store(Createtable_pricingRequest $request)
    {
        $input = $request->all();

        $tablePricing = $this->tablePricingRepository->create($input);

        Flash::success('Table Pricing saved successfully.');

        return redirect(route('tablePricings.index'));
    }

    /**
     * Display the specified table_pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tablePricing = $this->tablePricingRepository->find($id);

        if (empty($tablePricing)) {
            Flash::error('Table Pricing not found');

            return redirect(route('tablePricings.index'));
        }

        return view('table_pricings.show')->with('tablePricing', $tablePricing);
    }

    /**
     * Show the form for editing the specified table_pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tablePricing = $this->tablePricingRepository->find($id);

        if (empty($tablePricing)) {
            Flash::error('Table Pricing not found');

            return redirect(route('tablePricings.index'));
        }

        return view('table_pricings.edit')->with('tablePricing', $tablePricing);
    }

    /**
     * Update the specified table_pricing in storage.
     *
     * @param int $id
     * @param Updatetable_pricingRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetable_pricingRequest $request)
    {
        $tablePricing = $this->tablePricingRepository->find($id);

        if (empty($tablePricing)) {
            Flash::error('Table Pricing not found');

            return redirect(route('tablePricings.index'));
        }

        $tablePricing = $this->tablePricingRepository->update($request->all(), $id);

        Flash::success('Table Pricing updated successfully.');

        return redirect(route('tablePricings.index'));
    }

    /**
     * Remove the specified table_pricing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tablePricing = $this->tablePricingRepository->find($id);

        if (empty($tablePricing)) {
            Flash::error('Table Pricing not found');

            return redirect(route('tablePricings.index'));
        }

        $this->tablePricingRepository->delete($id);

        Flash::success('Table Pricing deleted successfully.');

        return redirect(route('tablePricings.index'));
    }
}
