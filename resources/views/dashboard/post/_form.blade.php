@csrf

<input class="form-control mb-2" type="text" name="title" id="title" placeholder="Titulo"
    value="{{ old('title', $post->title) }}">   
<select class="form-control mb-2" name="category_id" id="category_id">
    @foreach ($categories as $category=>$id)
    <option {{$post->category_id==$id ?'selected="selected"':''}} value="{{$id}}">{{$category}}</option>
    @endforeach
    
</select>

<select class="form-control mb-2" name="posted" id="posted">
    @include('dashboard.partials.option-yes-not',['val'=>$post->posted])
</select>

<textarea class="form-control mb-2" id="content" rows="3" name="content"
    placeholder="Contenido ">{{ old('content', $post->content) }}</textarea>

@if (isset($task)&& $task=='edit')
<label for="">Imagen</label>
<input type="file" name="image" accept="image/uploads/posts">
@endif



<input type="submit" class="btn btn-secondary btn-block btn-sm mt-3 mb-3" value="Enviar">





