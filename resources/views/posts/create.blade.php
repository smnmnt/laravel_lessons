@extends('layouts.layout', ['title' => "Создание поста"])

@section('content')

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Создать пост</h2>
        <div class="form-group">
            <input name="title" type="text" class="form-control" required>
            <!-- /.form-control -->
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <textarea name="desc" rows="10" class="form-control" required></textarea>
            <!-- /#.form-control -->
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <input name="img" type="file">
        </div>
        <!-- /.form-group -->

        <input type="submit" value="Создать пост" class="btn btn-outline-secondary">
        <!-- /.btn -->
    </form>

@endsection
