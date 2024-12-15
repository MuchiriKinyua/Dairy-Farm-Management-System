<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RecordRepository;
use Illuminate\Http\Request;
use Flash;

class RecordController extends AppBaseController
{
    /** @var RecordRepository $recordRepository*/
    private $recordRepository;

    public function __construct(RecordRepository $recordRepo)
    {
        $this->recordRepository = $recordRepo;
    }

    /**
     * Display a listing of the Record.
     */
    public function index(Request $request)
    {
        $records = $this->recordRepository->paginate(10);

        return view('records.index')
            ->with('records', $records);
    }

    /**
     * Show the form for creating a new Record.
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created Record in storage.
     */
    public function store(CreateRecordRequest $request)
    {
        $input = $request->all();

        $record = $this->recordRepository->create($input);

        Flash::success('Record saved successfully.');

        return redirect(route('records.index'));
    }

    /**
     * Display the specified Record.
     */
    public function show($id)
    {
        $record = $this->recordRepository->find($id);

        if (empty($record)) {
            Flash::error('Record not found');

            return redirect(route('records.index'));
        }

        return view('records.show')->with('record', $record);
    }

    /**
     * Show the form for editing the specified Record.
     */
    public function edit($id)
    {
        $record = $this->recordRepository->find($id);

        if (empty($record)) {
            Flash::error('Record not found');

            return redirect(route('records.index'));
        }

        return view('records.edit')->with('record', $record);
    }

    /**
     * Update the specified Record in storage.
     */
    public function update($id, UpdateRecordRequest $request)
    {
        $record = $this->recordRepository->find($id);

        if (empty($record)) {
            Flash::error('Record not found');

            return redirect(route('records.index'));
        }

        $record = $this->recordRepository->update($request->all(), $id);

        Flash::success('Record updated successfully.');

        return redirect(route('records.index'));
    }

    /**
     * Remove the specified Record from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $record = $this->recordRepository->find($id);

        if (empty($record)) {
            Flash::error('Record not found');

            return redirect(route('records.index'));
        }

        $this->recordRepository->delete($id);

        Flash::success('Record deleted successfully.');

        return redirect(route('records.index'));
    }
}
