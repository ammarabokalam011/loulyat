<!-- Parentid Field -->
<div class="form-group col-sm-6">

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name',null, ['class' => 'form-control']) !!}

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Namear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
