<!-- Cow Id Field -->
<div class="col-sm-12">
    {!! Form::label('cow_id', 'Cow Id:') !!}
    <p>{{ $record->cow_id }}</p>
</div>

<!-- Vet Name Field -->
<div class="col-sm-12">
    {!! Form::label('vet_name', 'Vet Name:') !!}
    <p>{{ $record->vet_name }}</p>
</div>

<!-- Visit Date Field -->
<div class="col-sm-12">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    <p>{{ $record->visit_date }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $record->description }}</p>
</div>

<!-- Treatment Details Field -->
<div class="col-sm-12">
    {!! Form::label('treatment_details', 'Treatment Details:') !!}
    <p>{{ $record->treatment_details }}</p>
</div>

<!-- Cost Field -->
<div class="col-sm-12">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{{ $record->cost }}</p>
</div>

