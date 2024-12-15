<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCowRequest;
use App\Http\Requests\UpdateCowRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CowRepository;
use Illuminate\Http\Request;
use Flash;

class CowController extends AppBaseController
{
    /** @var CowRepository $cowRepository*/
    private $cowRepository;

    public function __construct(CowRepository $cowRepo)
    {
        $this->cowRepository = $cowRepo;
    }

    /**
     * Display a listing of the Cow.
     */
    public function index(Request $request)
    {
        $cows = $this->cowRepository->paginate(10);

        return view('cows.index')
            ->with('cows', $cows);
    }

    /**
     * Show the form for creating a new Cow.
     */
    public function create()
    {
        return view('cows.create');
    }

    /**
     * Store a newly created Cow in storage.
     */
    public function store(CreateCowRequest $request)
    {
        $input = $request->all();

        $cow = $this->cowRepository->create($input);

        Flash::success('Cow saved successfully.');

        return redirect(route('cows.index'));
    }

    /**
     * Display the specified Cow.
     */
    public function show($id)
    {
        $cow = $this->cowRepository->find($id);

        if (empty($cow)) {
            Flash::error('Cow not found');

            return redirect(route('cows.index'));
        }

        return view('cows.show')->with('cow', $cow);
    }

    /**
     * Show the form for editing the specified Cow.
     */
    public function edit($id)
    {
        $cow = $this->cowRepository->find($id);

        if (empty($cow)) {
            Flash::error('Cow not found');

            return redirect(route('cows.index'));
        }

        return view('cows.edit')->with('cow', $cow);
    }

    /**
     * Update the specified Cow in storage.
     */
    public function update($id, UpdateCowRequest $request)
    {
        $cow = $this->cowRepository->find($id);

        if (empty($cow)) {
            Flash::error('Cow not found');

            return redirect(route('cows.index'));
        }

        $cow = $this->cowRepository->update($request->all(), $id);

        Flash::success('Cow updated successfully.');

        return redirect(route('cows.index'));
    }

    /**
     * Remove the specified Cow from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cow = $this->cowRepository->find($id);

        if (empty($cow)) {
            Flash::error('Cow not found');

            return redirect(route('cows.index'));
        }

        $this->cowRepository->delete($id);

        Flash::success('Cow deleted successfully.');

        return redirect(route('cows.index'));
    }
}
