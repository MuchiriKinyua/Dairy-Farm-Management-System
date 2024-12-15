<!-- Cow Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cow_number', 'Cow Number:') !!}
    {!! Form::number('cow_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Breed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('breed', 'Breed:') !!}
    {!! Form::text('breed', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control', 'maxlength' => 10, 'maxlength' => 10]) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_birth').datepicker()
    </script>
@endpush

<!-- Purchase Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_date', 'Purchase Date:') !!}
    {!! Form::text('purchase_date', null, ['class' => 'form-control','id'=>'purchase_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#purchase_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>