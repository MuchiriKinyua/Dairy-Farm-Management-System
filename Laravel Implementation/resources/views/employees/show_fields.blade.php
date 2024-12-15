<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $employee->name }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $employee->role }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $employee->phone }}</p>
</div>

<!-- Date Of Joining Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_joining', 'Date Of Joining:') !!}
    <p>{{ $employee->date_of_joining }}</p>
</div>

<!-- Salary Field -->
<div class="col-sm-12">
    {!! Form::label('salary', 'Salary:') !!}
    <p>{{ $employee->salary }}</p>
</div>

