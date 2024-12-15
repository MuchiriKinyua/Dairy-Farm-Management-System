<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SaleRepository;
use Illuminate\Http\Request;
use Flash;

class SaleController extends AppBaseController
{
    /** @var SaleRepository $saleRepository*/
    private $saleRepository;

    public function __construct(SaleRepository $saleRepo)
    {
        $this->saleRepository = $saleRepo;
    }

    /**
     * Display a listing of the Sale.
     */
    public function index(Request $request)
    {
        $sales = $this->saleRepository->paginate(10);

        return view('sales.index')
            ->with('sales', $sales);
    }

    /**
     * Show the form for creating a new Sale.
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created Sale in storage.
     */
    public function store(CreateSaleRequest $request)
    {
        $input = $request->all();

        $sale = $this->saleRepository->create($input);

        Flash::success('Sale saved successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Display the specified Sale.
     */
    public function show($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        return view('sales.show')->with('sale', $sale);
    }

    /**
     * Show the form for editing the specified Sale.
     */
    public function edit($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        return view('sales.edit')->with('sale', $sale);
    }

    /**
     * Update the specified Sale in storage.
     */
    public function update($id, UpdateSaleRequest $request)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        $sale = $this->saleRepository->update($request->all(), $id);

        Flash::success('Sale updated successfully.');

        return redirect(route('sales.index'));
    }

    /**
     * Remove the specified Sale from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sale = $this->saleRepository->find($id);

        if (empty($sale)) {
            Flash::error('Sale not found');

            return redirect(route('sales.index'));
        }

        $this->saleRepository->delete($id);

        Flash::success('Sale deleted successfully.');

        return redirect(route('sales.index'));
    }
}
