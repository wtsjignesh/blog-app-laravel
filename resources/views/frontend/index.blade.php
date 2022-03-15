@extends('layouts.app')

@section('content')
    <div class="container">

        @include('frontend._search')

        <div class="row">

            <div class="col-md-12">
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ url("/posts/{$post->id}") }}" @if ($loop->first) class="text-xl" @endif>{{ $post->title }}</a> - <small>by {{ $post->user->name }}</small>

                            <span class="pull-right">
                                {{ $post->created_at->toDayDateTimeString() }}
                            </span>
                        </div>

                        <div class="panel-body">
                            
                                <div class="col-md-10">
                                    {{ str_limit($post->description, 200) }}
                                    <p>
                                        Tags:
                                        @forelse ($post->tags as $tag)
                                            <span class="label label-default">{{ $tag->name }}</span>
                                        @empty
                                            <span class="label label-danger">No tag found.</span>
                                        @endforelse
                                    </p>
                                </div>
                                <div class="col-md-2 pull-right">
                                    <a href="{{ url("/posts/{$post->id}/edit") }}" class="btn btn-md btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="{{ url("/posts/{$post->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                                </div>
                            
                            
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>

            </div>

        </dev>
    </dev>
@endsection
