<div class="table-responsive">
    <table class="table" id="tableProducts-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tableProducts as $tableProducts)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['tableProducts.destroy', $tableProducts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tableProducts.show', [$tableProducts->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tableProducts.edit', [$tableProducts->id]) }}" class='btn btn-default btn-xs'>
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
