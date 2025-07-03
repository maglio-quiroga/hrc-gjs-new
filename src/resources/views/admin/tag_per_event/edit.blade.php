<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Editar TagPerEvent</title>
</head>
<body>


    @php
        use App\Models\Event;
        use App\Models\Tag;

        $events = Event::all();
        $tags = Tag::all();
    @endphp
    <div class="container mt-5">
        <h1 class="mb-4">Editar TagPerEvent</h1>

        <form action="{{ route('admin.handle.update', ['model' => 'tag_per_event', 'target' => $record->id]) }}" method="POST" class="card shadow p-4">
            @csrf

            {{-- ID del Evento --}}
            <div class="mb-3">
                <label for="event_id" class="form-label">ID del Evento</label>
                <input type="number" name="event_id" id="event_id" class="form-control @error('event_id') is-invalid @enderror" value="{{ old('event_id', $record->event_id) }}" required>
                @error('event_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- ID del Tag --}}
            <div class="mb-3">
                <label for="tag_id" class="form-label">ID del Tag</label>
                <input type="number" name="tag_id" id="tag_id" class="form-control @error('tag_id') is-invalid @enderror" value="{{ old('tag_id', $record->tag_id) }}" required>
                @error('tag_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Botones --}}
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.handle.view', ['model' => 'tag_per_event']) }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i> Guardar cambios
                </button>
            </div>
        </form>
    </div>
</body>
</html>
