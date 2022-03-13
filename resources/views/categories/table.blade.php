<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
        <tr>
            <th>Parent</th>
        <th>Name</th>
        <th>Namear</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    <?php
                    if($categories->find( $category->parentID)!=null){
                        echo $categories->find( $category->parentID)->nameAr;
                    }else{
                        echo 'none';
                    }
                    ?></td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->nameAr }}</td>
                <td><a href="/categoryImages/{{ $category->image }}">click to view the image</a></td>
                <td width="120">
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$category->id]) }}"
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
