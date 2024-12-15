<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="records-table">
            <thead>
            <tr>
                <th>Cow Id</th>
                <th>Vet Name</th>
                <th>Visit Date</th>
                <th>Description</th>
                <th>Treatment Details</th>
                <th>Cost</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->cow_id }}</td>
                    <td>{{ $record->vet_name }}</td>
                    <td>{{ $record->visit_date }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->treatment_details }}</td>
                    <td>{{ $record->cost }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['records.destroy', $record->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('records.show', [$record->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('records.edit', [$record->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $records])
        </div>
    </div>
</div>
