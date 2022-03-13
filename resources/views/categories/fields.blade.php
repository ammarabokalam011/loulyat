<!-- Parentid Field -->
<div class="form-group col-sm-6">
    <?php
        $defulteCat=null;
        if( isset($category))
            $defulteCat=$category->id;
        $cat=array('none' => null);
        foreach($categories as $category1)
            $cat[$category1->id]=$category1->nameAr;
    ?>
    {!! Form::label('parentID', 'Parent:') !!}
    {!! Form::select('parentID', $cat,null, ['class' => 'form-control']) !!}


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
    <?php

    if( isset($category))
        echo "<a href='/categoryImages/$category->image'>click to view the image</a><br>";
        ?>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
