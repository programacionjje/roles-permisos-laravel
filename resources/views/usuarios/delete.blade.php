<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="post" style="display:inline-block;">
    @csrf()
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>
