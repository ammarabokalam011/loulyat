<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Namear</th>
            <th>Image</th>
            <th>Description</th>
            <th>Specification</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Available</th>
            <th>Category id</th>
            <th>Code</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->nameAr }}</td>
                <td><a href="/productImages/{{ $product->image }}">click to view the image</a></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->specification }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->available }}</td>
                <td>
                    <?php
                    if ($categories->find($product->categoryID) != null) {
                        echo $categories->find($product->categoryID)->nameAr;
                    } else {
                        echo 'none';
                    }
                    ?></td>
                <td>{{ $product->code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$product->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
