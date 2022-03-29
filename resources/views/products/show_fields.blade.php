<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $product->Name }}</p>
</div>

<!-- Namear Field -->
<div class="col-sm-12">
    {!! Form::label('NameAr', 'Namear:') !!}
    <p>{{ $product->NameAr }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <br>
    <a href="/productImages/{{ $product->image }}">click to view the image</a>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $product->description }}</p>
</div>

<!-- Specification Field -->
<div class="col-sm-12">
    {!! Form::label('specification', 'Specification:') !!}
    <p>{{ $product->specification }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $product->quantity }}</p>
</div>

<!-- Available Field -->
<div class="col-sm-12">
    {!! Form::label('available', 'Available:') !!}
    <p>{{ $product->available }}</p>
</div>

<!-- Categoryid Field -->
<div class="col-sm-12">
    {!! Form::label('categoryID', 'Categoryid:') !!}
    <p><?php
        if ($categories->find($product->CategoryID) != null) {
            echo $categories->find($product->CategoryID)->nameAr;
        } else {
            echo 'none';
        }
        ?>
    </p>
</div>


<div class="col-sm-12">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $product->code }}</p>
</div>
