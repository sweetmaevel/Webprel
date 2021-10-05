@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Table Sales</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'tableSales.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('table_sales.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('tableSales.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
