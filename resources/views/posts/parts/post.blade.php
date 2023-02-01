<div class="form-group">
    <input name="title" type="text" class="form-control" required value="{{ $post->title ?? '' }}">
    <!-- /.form-control -->
</div>
<!-- /.form-group -->
<div class="form-group">
    <textarea name="desc" rows="10" class="form-control" required>{{ $post->desc ?? '' }}</textarea>
    <!-- /#.form-control -->
</div>
<!-- /.form-group -->
<div class="form-group">
    <input name="img" type="file">
</div>
<!-- /.form-group -->
