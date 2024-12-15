<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Date Of Joining Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_joining', 'Date Of Joining:') !!}
    {!! Form::text('date_of_joining', null, ['class' => 'form-control','id'=>'date_of_joining']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_joining').datepicker()
    </script>
@endpush

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>