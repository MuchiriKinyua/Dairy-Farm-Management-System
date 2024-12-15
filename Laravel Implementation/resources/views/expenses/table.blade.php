<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="expenses-table">
            <thead>
            <tr>
                <th>Types</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->types }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['expenses.destroy', $expense->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('expenses.show', [$expense->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('expenses.edit', [$expense->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $expenses])
        </div>
    </div>
</div>
