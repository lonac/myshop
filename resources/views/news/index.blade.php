@extends('layouts.master')

@section('title','News')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h4>Categories</h4></div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>New</h4></div>
                    @foreach ($posts as $post)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('posts.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection