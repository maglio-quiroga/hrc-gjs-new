@csrf

<input class="form-control mb-2" type="text" name="category" id="category" placeholder="Categoría" value="{{ old('category',$category->category) }}">
<textarea class="form-control mb-2" id="title" rows="3" name="title" placeholder="Titulo ">{{ old('title',$category->title) }}</textarea>

<input type="submit" class="btn btn-secondary btn-block btn-sm mt-3 mb-3" value="Enviar">
