<div class="table-responsive">
    <table class="table" id="tablePricings-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tablePricings as $tablePricing)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['tablePricings.destroy', $tablePricing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tablePricings.show', [$tablePricing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tablePricings.edit', [$tablePricing->id]) }}" class='btn btn-default btn-xs'>
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
