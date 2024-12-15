<!-- Types Field -->
<div class="form-group col-sm-6">
    {!! Form::label('types', 'Types:') !!}
    {!! Form::text('types', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
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

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 200, 'maxlength' => 200]) !!}
</div>