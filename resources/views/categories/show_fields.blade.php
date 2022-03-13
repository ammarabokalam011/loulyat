<!-- Parentid Field -->
<div class="col-sm-12">
    {!! Form::label('parentID', 'Parent:') !!}
    <p><?php
        if($category!=null)
            echo $category->nameAr;
        else
            echo 'none';
        ?></p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Namear Field -->
<div class="col-sm-12">
    {!! Form::label('nameAr', 'Namear:') !!}
    <p>{{ $category->nameAr }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <a href='/categoryImages/{!! $category->image  !!}'>click to view the image</a>
</div>

