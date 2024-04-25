<form action="{{ route('user.delete' , $user) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" class="bg-red-600  px-2 py-1 rounded-lg text-white">
</form>