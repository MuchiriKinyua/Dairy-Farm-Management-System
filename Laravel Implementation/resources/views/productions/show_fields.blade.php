<!-- Cow Id Field -->
<div class="col-sm-12">
    {!! Form::label('cow_id', 'Cow Id:') !!}
    <p>{{ $production->cow_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $production->date }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $production->quantity }}</p>
</div>

<!-- Shift Field -->
<div class="col-sm-12">
    {!! Form::label('shift', 'Shift:') !!}
    <p>{{ $production->shift }}</p>
</div>

