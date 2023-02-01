@extends('layouts.layout', ['title' => "Редактирование поста №$post->post_id"])

@section('content')

    <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2>Редактировать пост</h2>
        @include('posts/parts.post')

        <input type="submit" value="Сохранить изменения" class="btn btn-outline-success">
        <!-- /.btn -->
    </form>

@endsection
