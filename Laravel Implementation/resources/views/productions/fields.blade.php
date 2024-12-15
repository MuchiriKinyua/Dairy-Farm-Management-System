<!-- Cow Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cow_id', 'Cow Id:') !!}
    {!! Form::number('cow_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift', 'Shift:') !!}
    {!! Form::text('shift', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>