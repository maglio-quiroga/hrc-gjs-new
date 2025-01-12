@csrf

<input class="form-control mb-2" type="text" name="name" id="name" placeholder="Nombre"
    value="{{ old('name', isset($user) ? $user->name : '') }}">   

<input class="form-control mb-2" type="email" name="email" id="email" placeholder="Correo Electrónico"
    value="{{ old('email', isset($user) ? $user->email : '') }}">   

<select class="form-control mb-2" name="role" id="role">
    <option value="user" {{ isset($user) && !$user->isAdmin() ? 'selected' : '' }}>Usuario</option>
    <option value="admin" {{ isset($user) && $user->isAdmin() ? 'selected' : '' }}>Administrador</option>
</select>

<input class="form-control mb-2" type="password" name="password" id="password" placeholder="Contraseña"
    value="">   

<!-- @if (isset($task) && $task == 'edit')
    <label class='text-color' for="">Imagen</label>
    <input class='text-color' type="file" name="image" accept="image/uploads/users">
@endif -->

<input type="submit" class="btn btn-secondary btn-block btn-sm mt-3 mb-3" value="Enviar">