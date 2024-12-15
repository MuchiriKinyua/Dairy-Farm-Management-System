<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="consumptions-table">
            <thead>
            <tr>
                <th>Cow Id</th>
                <th>Date</th>
                <th>Feed Type</th>
                <th>Quantity</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consumptions as $consumption)
                <tr>
                    <td>{{ $consumption->cow_id }}</td>
                    <td>{{ $consumption->date }}</td>
                    <td>{{ $consumption->feed_type }}</td>
                    <td>{{ $consumption->quantity }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['consumptions.destroy', $consumption->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('consumptions.show', [$consumption->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('consumptions.edit', [$consumption->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $consumptions])
        </div>
    </div>
</div>
