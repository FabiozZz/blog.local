@csrf
<div class="form-group">
    <input type="text" class="form-control" name="title" maxlength="100"
           placeholder="Заголовок" required value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="form-group">
    <textarea class="form-control" name="except" placeholder="Анонс поста"
              maxlength="200" required>{{ old('except') ?? $post->except ?? '' }}</textarea>
</div>
<div class="form-group">
    <textarea class="form-control d-none" name="body" id="so_body" placeholder="Текст поста" rows="7"
              required>{{ old('body') ?? $post->body ?? '' }}</textarea>
    @trix(\App\Models\Post::class,'content',['id'=>'so_body'])
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
</div>
@isset($post->image)
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="remove" id="remove">
        <label class="form-check-label" for="remove">
            Удалить загруженное <a href="{{ $post->image }}" target="_blank">изображение</a>
        </label>
    </div>
@endisset
<div class="form-group">
    <button type="submit" name='submit' class="btn btn-primary">Сохранить</button>
</div>
