<!-- Cow Id Field -->
<div class="col-sm-12">
    {!! Form::label('cow_id', 'Cow Id:') !!}
    <p>{{ $consumption->cow_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $consumption->date }}</p>
</div>

<!-- Feed Type Field -->
<div class="col-sm-12">
    {!! Form::label('feed_type', 'Feed Type:') !!}
    <p>{{ $consumption->feed_type }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $consumption->quantity }}</p>
</div>

