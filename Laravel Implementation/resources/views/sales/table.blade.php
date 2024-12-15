<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="sales-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
                <th>Sales Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->customer_id }}</td>
                    <td>{{ $sale->product }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->unit_price }}</td>
                    <td>{{ $sale->total_price }}</td>
                    <td>{{ $sale->sales_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['sales.destroy', $sale->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('sales.show', [$sale->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('sales.edit', [$sale->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $sales])
        </div>
    </div>
</div>
