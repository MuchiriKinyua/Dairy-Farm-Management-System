<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $sale->customer_id }}</p>
</div>

<!-- Product Field -->
<div class="col-sm-12">
    {!! Form::label('product', 'Product:') !!}
    <p>{{ $sale->product }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $sale->quantity }}</p>
</div>

<!-- Unit Price Field -->
<div class="col-sm-12">
    {!! Form::label('unit_price', 'Unit Price:') !!}
    <p>{{ $sale->unit_price }}</p>
</div>

<!-- Total Price Field -->
<div class="col-sm-12">
    {!! Form::label('total_price', 'Total Price:') !!}
    <p>{{ $sale->total_price }}</p>
</div>

<!-- Sales Date Field -->
<div class="col-sm-12">
    {!! Form::label('sales_date', 'Sales Date:') !!}
    <p>{{ $sale->sales_date }}</p>
</div>

