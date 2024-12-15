<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cows-table">
            <thead>
            <tr>
                <th>Cow Number</th>
                <th>Breed</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Purchase Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cows as $cow)
                <tr>
                    <td>{{ $cow->cow_number }}</td>
                    <td>{{ $cow->breed }}</td>
                    <td>{{ $cow->gender }}</td>
                    <td>{{ $cow->date_of_birth }}</td>
                    <td>{{ $cow->purchase_date }}</td>
                    <td>{{ $cow->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['cows.destroy', $cow->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('cows.show', [$cow->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('cows.edit', [$cow->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $cows])
        </div>
    </div>
</div>
