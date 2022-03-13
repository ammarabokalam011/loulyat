<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Namear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NameAr', 'Namear:') !!}
    {!! Form::text('NameAr', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php

    if( isset($product))
        echo "<a href='/productImages/$product->Image'>click to view the image</a><br>";
    ?>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Specification Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Specification', 'Specification:') !!}
    {!! Form::textarea('Specification', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Quantity', 'Quantity:') !!}
    {!! Form::number('Quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Available Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('Available', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('Available', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('Available', 'Available', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Categoryid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CategoryID', 'Categoryid:') !!}
    <?php
    $defulteCat=null;
    if( isset($category))
        $defulteCat=$category->id;
    $cat=array('none' => null);
    foreach($categories as $category1)
        $cat[$category1->id]=$category1->nameAr;
    ?>

    {!! Form::select('CategoryID', $cat,null, ['class' => 'form-control']) !!}
</div>
