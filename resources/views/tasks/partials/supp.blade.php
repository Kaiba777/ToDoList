<form action="{{ route('destroy', $spot) }}" method="post" id="Suppression">
    @csrf
    @method('delete')

    <button>
        <i class="bi bi-trash3 trash3"></i>
    </button>
</form>