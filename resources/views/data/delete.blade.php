<form action="{{ route('data.destroy', $crud->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
    </div>
</form>
