<form action="{{ route('nasabah.destroy', $model->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
</form>