
@csrf

<input class="form-control mb-2" type="text" name="name" id="name" placeholder="Nombre del Miembro"
    value="{{ old('name', $team->name ?? '') }}">

<input class="form-control mb-2" type="text" name="position" id="position" placeholder="Cargo"
    value="{{ old('position', $team->position ?? '') }}">

<textarea class="form-control mb-2" id="description" rows="3" name="description"
    placeholder="Descripción">{{ old('description', $team->description ?? '') }}</textarea>

<label class='text-color' for="">Imagen</label>
<input class='text-color' type="file" name="image" accept="image/*">


<input type="submit" class="btn btn-secondary btn-block btn-sm mt-3 mb-3" value="Enviar">