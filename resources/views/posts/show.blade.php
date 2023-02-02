@extends('layouts.layout', ['title' => "Пост №$post->post_id. $post->title"])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2>{{ $post->title }}</h2></div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card-img card-img_max" style="background-image: url({{ $post->img ?? asset('img/default.png') }});"></div>
                    <!-- /.card-img -->
                    <div class="card-author">Автор: {{ $post->name }}</div>
                    <div class="card-desc card-descr">{{ $post->desc }}</div>
                    <div class="card-date">Создан: {{ $post->created_at->diffForHumans() }}</div>
                    <!-- /.card-author -->
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                        @auth()
                            @if(Auth::user()->id == $post->author_id)
                                <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-outline-secondary">Редактировать</a>
                                <form action="{{ route('post.destroy', ['id' => $post->post_id]) }}" method="post" onsubmit="if (confirm('Вы точно хотите удалить пост?')) { return true } else { return false }">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                                </form>
                                <!-- /.btn -->
                            @endif
                        @endauth
                    </div>
                    <!-- /.card-btn -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-6 -->
    </div>
    <!-- /.row -->
@endsection
