<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles/elements/edit.css') }}">
    <title>Agregar TagPerEvent</title>
</head>
<body>
<div class="container mt-5">


    @php
        use App\Models\Event;
        use App\Models\Tag;

        $events = Event::all();
        $tags = Tag::all();
    @endphp
    <h1 class="text-center bg-success text-white py-3 m-0 rounded-top">
        <i class="bi bi-link-45deg"></i><i class="bi bi-plus" style="margin-left: -8px;"></i>
        Agregar nuevo TagPerEvent
    </h1>

    <form action="{{ route('admin.handle.create', ['model' => 'tag_per_event']) }}" method="POST" class="card shadow p-4 needs-validation" novalidate>
        @csrf

        {{-- Selector de Evento --}}
        <div class="mb-3">
            <label for="event_id" class="form-label">Evento</label>
            <select name="event_id" id="event_id" class="form-select" required>
                <option value="">Seleccione un evento</option>
                @foreach ($events as $event)
                    <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                        {{ $event->title ?? 'Evento #' . $event->id }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Selector de Tag --}}
        <div class="mb-3">
            <label for="tag_id" class="form-label">Tag</label>
            <select name="tag_id" id="tag_id" class="form-select" required>
                <option value="">Seleccione un tag</option>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ old('tag_id') == $tag->id ? 'selected' : '' }}>
                        {{ $tag->name ?? 'Tag #' . $tag->id }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Botones --}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.handle.view', ['model' => 'tag_per_event']) }}" class="btn btn-outline-secondary btn-icon">
                <i class="bi bi-arrow-left"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-primary btn-icon">
                <i class="bi bi-save"></i> Guardar
            </button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
