<div class="table-responsive">
    <table class="table" id="tableSales-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tableSales as $tableSales)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['tableSales.destroy', $tableSales->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tableSales.show', [$tableSales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tableSales.edit', [$tableSales->id]) }}" class='btn btn-default btn-xs'>
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
