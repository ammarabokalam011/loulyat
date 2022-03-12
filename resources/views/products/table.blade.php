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
        <th>Categoryid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->Name }}</td>
            <td>{{ $product->NameAr }}</td>
            <td>{{ $product->Image }}</td>
            <td>{{ $product->Description }}</td>
            <td>{{ $product->Specification }}</td>
            <td>{{ $product->Price }}</td>
            <td>{{ $product->Quantity }}</td>
            <td>{{ $product->Available }}</td>
            <td>{{ $product->CategoryID }}</td>
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
