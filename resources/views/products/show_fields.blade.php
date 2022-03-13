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
    {!! Form::label('Image', 'Image:') !!}
    <br>
    <a href="/productImages/{{ $product->Image }}">click to view the image</a>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $product->Description }}</p>
</div>

<!-- Specification Field -->
<div class="col-sm-12">
    {!! Form::label('Specification', 'Specification:') !!}
    <p>{{ $product->Specification }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $product->Price }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('Quantity', 'Quantity:') !!}
    <p>{{ $product->Quantity }}</p>
</div>

<!-- Available Field -->
<div class="col-sm-12">
    {!! Form::label('Available', 'Available:') !!}
    <p>{{ $product->Available }}</p>
</div>

<!-- Categoryid Field -->
<div class="col-sm-12">
    {!! Form::label('CategoryID', 'Categoryid:') !!}
    <p><?php
        if ($categories->find($product->CategoryID) != null) {
            echo $categories->find($product->CategoryID)->nameAr;
        } else {
            echo 'none';
        }
        ?>
    </p>
</div>

