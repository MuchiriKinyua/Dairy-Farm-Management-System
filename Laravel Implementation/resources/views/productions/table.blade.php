<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="productions-table">
            <thead>
            <tr>
                <th>Cow Id</th>
                <th>Date</th>
                <th>Quantity</th>
                <th>Shift</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productions as $production)
                <tr>
                    <td>{{ $production->cow_id }}</td>
                    <td>{{ $production->date }}</td>
                    <td>{{ $production->quantity }}</td>
                    <td>{{ $production->shift }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['productions.destroy', $production->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('productions.show', [$production->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('productions.edit', [$production->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $productions])
        </div>
    </div>
</div>
