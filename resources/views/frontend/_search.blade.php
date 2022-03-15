<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}
            <div class="col-md-8">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::submit('Sumbit', ['class' => 'btn btn-block btn-default']) !!}
            </div>
            <div class="col-md-2">
                <a href="{{ url('posts/create') }}" class="btn btn-primary pull-right">Add New Entry</a>
            </div>
    {!! Form::close() !!}
</div>
