@extends('layouts.site')
@section('content')
    <h1 class="mt-2 mb-3">Все посты блога</h1>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header"><h3>{{ $post->title }}</h3></div>
                    <div class="card-body">
{{--                                                <img src="{{ $post->image ?? asset('img/default.jpg') }}" alt="" class="img-fluid">--}}
                        <img src="{{ $post->thumb ?? asset('img/default.jpg') }}" alt="" class="img-fluid">
                        <p class="mt-3 mb-0">{{ $post->except }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="clearfix">
                            <span class="float-left">
                                Автор: {{ $post->user->name }}
                                <br>
                                Дата: {{ date_format($post->created_at, 'd.m.Y H:i') }}
                            </span>
                            <a href="{{route('post.show',$post->id)}}" class="btn btn-dark float-right">Читать
                                дальше</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    {{ $posts->links() }}
@endsection
