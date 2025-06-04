@csrf
<input class="form-control mb-2" type="text" name="name" id="name" placeholder="Nombre del Servicio"
    value="{{ old('name', $service->name ?? '') }}">
<textarea class="form-control mb-2" id="description" rows="3" name="description"
    placeholder="Descripción">{{ old('description', $service->description ?? '') }}</textarea>
<label class='text-color' for="">Imagen</label>
<input class='text-color' type="file" name="image" accept="image/*">
<input type="submit" class="btn btn-secondary btn-block btn-sm mt-3 mb-3" value="Enviar">