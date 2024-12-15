<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsumptionRequest;
use App\Http\Requests\UpdateConsumptionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ConsumptionRepository;
use Illuminate\Http\Request;
use Flash;

class ConsumptionController extends AppBaseController
{
    /** @var ConsumptionRepository $consumptionRepository*/
    private $consumptionRepository;

    public function __construct(ConsumptionRepository $consumptionRepo)
    {
        $this->consumptionRepository = $consumptionRepo;
    }

    /**
     * Display a listing of the Consumption.
     */
    public function index(Request $request)
    {
        $consumptions = $this->consumptionRepository->paginate(10);

        return view('consumptions.index')
            ->with('consumptions', $consumptions);
    }

    /**
     * Show the form for creating a new Consumption.
     */
    public function create()
    {
        return view('consumptions.create');
    }

    /**
     * Store a newly created Consumption in storage.
     */
    public function store(CreateConsumptionRequest $request)
    {
        $input = $request->all();

        $consumption = $this->consumptionRepository->create($input);

        Flash::success('Consumption saved successfully.');

        return redirect(route('consumptions.index'));
    }

    /**
     * Display the specified Consumption.
     */
    public function show($id)
    {
        $consumption = $this->consumptionRepository->find($id);

        if (empty($consumption)) {
            Flash::error('Consumption not found');

            return redirect(route('consumptions.index'));
        }

        return view('consumptions.show')->with('consumption', $consumption);
    }

    /**
     * Show the form for editing the specified Consumption.
     */
    public function edit($id)
    {
        $consumption = $this->consumptionRepository->find($id);

        if (empty($consumption)) {
            Flash::error('Consumption not found');

            return redirect(route('consumptions.index'));
        }

        return view('consumptions.edit')->with('consumption', $consumption);
    }

    /**
     * Update the specified Consumption in storage.
     */
    public function update($id, UpdateConsumptionRequest $request)
    {
        $consumption = $this->consumptionRepository->find($id);

        if (empty($consumption)) {
            Flash::error('Consumption not found');

            return redirect(route('consumptions.index'));
        }

        $consumption = $this->consumptionRepository->update($request->all(), $id);

        Flash::success('Consumption updated successfully.');

        return redirect(route('consumptions.index'));
    }

    /**
     * Remove the specified Consumption from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consumption = $this->consumptionRepository->find($id);

        if (empty($consumption)) {
            Flash::error('Consumption not found');

            return redirect(route('consumptions.index'));
        }

        $this->consumptionRepository->delete($id);

        Flash::success('Consumption deleted successfully.');

        return redirect(route('consumptions.index'));
    }
}
