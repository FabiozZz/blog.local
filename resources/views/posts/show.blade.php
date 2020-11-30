@extends('layouts.site',['title'=>$post->title])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="card-body">
                    <img src="{{$post->image?? asset('img/default.jpg')}}" alt="" class="img-thumbnail">
                    <p class="mt-3 mb-0">{{$post->body}}</p>
                </div>
                <div class="card-footer">
                    <div class="clearfix">
                    <span class="float-left">
                        Автор: {{$post->author}}
                        <br>
                        Дата: {{ $post->created_at? \Carbon\Carbon::parse($post->created_at)->format('d.m.Y H:i'):'' }}
                    </span>
                        @auth <!-- Только зарегестрированные пользователь могут редактировать и удалять посты -->
                            @if(auth()->id() == $post->author_id || auth()->id() == 1)<!-- Причем только свои -->
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-dark float-right">Редактировать</a>
                                <form action="{{ route('post.destroy', $post->id) }}"
                                      method="post" onsubmit="return confirm('Удалить этот пост?')"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
