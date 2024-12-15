<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product', 'Product:') !!}
    {!! Form::text('product', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Unit Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_price', 'Unit Price:') !!}
    {!! Form::text('unit_price', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Total Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_price', 'Total Price:') !!}
    {!! Form::text('total_price', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Sales Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sales_date', 'Sales Date:') !!}
    {!! Form::text('sales_date', null, ['class' => 'form-control','id'=>'sales_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#sales_date').datepicker()
    </script>
@endpush