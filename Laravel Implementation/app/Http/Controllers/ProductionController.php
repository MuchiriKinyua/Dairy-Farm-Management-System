<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductionRequest;
use App\Http\Requests\UpdateProductionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProductionRepository;
use Illuminate\Http\Request;
use Flash;

class ProductionController extends AppBaseController
{
    /** @var ProductionRepository $productionRepository*/
    private $productionRepository;

    public function __construct(ProductionRepository $productionRepo)
    {
        $this->productionRepository = $productionRepo;
    }

    /**
     * Display a listing of the Production.
     */
    public function index(Request $request)
    {
        $productions = $this->productionRepository->paginate(10);

        return view('productions.index')
            ->with('productions', $productions);
    }

    /**
     * Show the form for creating a new Production.
     */
    public function create()
    {
        return view('productions.create');
    }

    /**
     * Store a newly created Production in storage.
     */
    public function store(CreateProductionRequest $request)
    {
        $input = $request->all();

        $production = $this->productionRepository->create($input);

        Flash::success('Production saved successfully.');

        return redirect(route('productions.index'));
    }

    /**
     * Display the specified Production.
     */
    public function show($id)
    {
        $production = $this->productionRepository->find($id);

        if (empty($production)) {
            Flash::error('Production not found');

            return redirect(route('productions.index'));
        }

        return view('productions.show')->with('production', $production);
    }

    /**
     * Show the form for editing the specified Production.
     */
    public function edit($id)
    {
        $production = $this->productionRepository->find($id);

        if (empty($production)) {
            Flash::error('Production not found');

            return redirect(route('productions.index'));
        }

        return view('productions.edit')->with('production', $production);
    }

    /**
     * Update the specified Production in storage.
     */
    public function update($id, UpdateProductionRequest $request)
    {
        $production = $this->productionRepository->find($id);

        if (empty($production)) {
            Flash::error('Production not found');

            return redirect(route('productions.index'));
        }

        $production = $this->productionRepository->update($request->all(), $id);

        Flash::success('Production updated successfully.');

        return redirect(route('productions.index'));
    }

    /**
     * Remove the specified Production from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $production = $this->productionRepository->find($id);

        if (empty($production)) {
            Flash::error('Production not found');

            return redirect(route('productions.index'));
        }

        $this->productionRepository->delete($id);

        Flash::success('Production deleted successfully.');

        return redirect(route('productions.index'));
    }
}
