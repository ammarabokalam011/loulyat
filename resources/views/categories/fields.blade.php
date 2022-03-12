<!-- Parentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentID', 'Parentid:') !!}
    {!! Form::number('parentID', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Namear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nameAr', 'Namear:') !!}
    {!! Form::text('nameAr', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
</div>