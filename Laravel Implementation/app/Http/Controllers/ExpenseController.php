<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ExpenseRepository;
use Illuminate\Http\Request;
use Flash;

class ExpenseController extends AppBaseController
{
    /** @var ExpenseRepository $expenseRepository*/
    private $expenseRepository;

    public function __construct(ExpenseRepository $expenseRepo)
    {
        $this->expenseRepository = $expenseRepo;
    }

    /**
     * Display a listing of the Expense.
     */
    public function index(Request $request)
    {
        $expenses = $this->expenseRepository->paginate(10);

        return view('expenses.index')
            ->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new Expense.
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created Expense in storage.
     */
    public function store(CreateExpenseRequest $request)
    {
        $input = $request->all();

        $expense = $this->expenseRepository->create($input);

        Flash::success('Expense saved successfully.');

        return redirect(route('expenses.index'));
    }

    /**
     * Display the specified Expense.
     */
    public function show($id)
    {
        $expense = $this->expenseRepository->find($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('expenses.index'));
        }

        return view('expenses.show')->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified Expense.
     */
    public function edit($id)
    {
        $expense = $this->expenseRepository->find($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('expenses.index'));
        }

        return view('expenses.edit')->with('expense', $expense);
    }

    /**
     * Update the specified Expense in storage.
     */
    public function update($id, UpdateExpenseRequest $request)
    {
        $expense = $this->expenseRepository->find($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('expenses.index'));
        }

        $expense = $this->expenseRepository->update($request->all(), $id);

        Flash::success('Expense updated successfully.');

        return redirect(route('expenses.index'));
    }

    /**
     * Remove the specified Expense from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expense = $this->expenseRepository->find($id);

        if (empty($expense)) {
            Flash::error('Expense not found');

            return redirect(route('expenses.index'));
        }

        $this->expenseRepository->delete($id);

        Flash::success('Expense deleted successfully.');

        return redirect(route('expenses.index'));
    }
}
