<x-layouts.app
title='Crear nuevo post'
meta-description='Formulario para crear un nuevo post'>

<h2>Crear nuevo post</h2>

<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label>
        title <br>
        <input name='title' type="text">
    </label> <br>

    <label>
        body <br>
        <textarea name='body'></textarea>
    </label> <br>

    <button type='submit'>Enviar</button> <br>
</form>

<a href="{{ route('posts.index') }}">Regresar</a> <br>
</x-layouts.app>