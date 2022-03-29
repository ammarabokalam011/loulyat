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
    <?php

    if( isset($product))
        echo "<a href='/productImages/$product->image'>click to view the image</a><br>";
    ?>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Specification Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Specification', 'Specification:') !!}
    {!! Form::textarea('specification', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Available Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('available', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('available', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('available', 'Available', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Categoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoryID', 'Categoryid:') !!}
    <?php
    $defulteCat=null;
    if( isset($category))
        $defulteCat=$category->id;
    $cat=array('none' => null);
    foreach($categories as $category1)
        $cat[$category1->id]=$category1->nameAr;
    ?>

    {!! Form::select('categoryID', $cat,null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
