<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Flash;

class CustomerController extends AppBaseController
{
    /** @var CustomerRepository $customerRepository*/
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Customer.
     */
    public function index(Request $request)
    {
        $customers = $this->customerRepository->paginate(10);

        return view('customers.index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new Customer.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     */
    public function store(CreateCustomerRequest $request)
    {
        $input = $request->all();

        $customer = $this->customerRepository->create($input);

        Flash::success('Customer saved successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Display the specified Customer.
     */
    public function show($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     */
    public function edit($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     */
    public function update($id, UpdateCustomerRequest $request)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        $customer = $this->customerRepository->update($request->all(), $id);

        Flash::success('Customer updated successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customer = $this->customerRepository->find($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('customers.index'));
        }

        $this->customerRepository->delete($id);

        Flash::success('Customer deleted successfully.');

        return redirect(route('customers.index'));
    }
}
