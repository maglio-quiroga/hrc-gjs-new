@extends('dashboard.master')
@section('content')

    <div class="card text-center">
        <div class="card-header ">
            <h3 class="card-title" style="color: #244c5a">ADMINISTRADOR: Visualización de Noticia</h3>
        </div>
        <div class="card-body">
            <div>
                <a class="btn btn-secondary btn-block" href="{{ route('post.create') }}">Crear Nueva
                    Noticia</a>

                <table class="table mb-3" style="font-size:95%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Posteado</th>
                            <th scope="col">Creacion</th>
                            <th scope="col">Actualización</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->category->title }}</td>
                                <td>{{ $post->posted }}</td>
                                <td>{{ $post->created_at->format('d-m-Y')}}</td>
                                <td>{{ $post->updated_at->format('d-m-Y') }}</td>
                                <td>
                                    <div class="flex item-center justify-center">
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-sm mx-1">
                                        <div class="w-4 justify-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div></a>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success btn-sm mx-2"><div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div></a>
                                    
                                    <form action={{route('post.destroy',$post->id)}} method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><div class="w-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div></button>
                                    </form>

                                    


                                    </div>
                                    <!--<button type="button" data-toggle="modal" data-target="#deleteModal"
                                        data-id="{{ $post->id }}" class="btn btn-danger btn-sm"><span
                                            class="fas fa-trash"></span>&nbspEliminar</button>-->

                                </td>
                                
                                    
                                    
                                    
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $posts->links() }}



            </div>
        </div>
    </div>




@endsection
