<!-- Cow Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cow_id', 'Cow Id:') !!}
    {!! Form::number('cow_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vet Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vet_name', 'Vet Name:') !!}
    {!! Form::text('vet_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control','id'=>'visit_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#visit_date').datepicker()
    </script>
@endpush

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 200, 'maxlength' => 200]) !!}
</div>

<!-- Treatment Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treatment_details', 'Treatment Details:') !!}
    {!! Form::text('treatment_details', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::text('cost', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>