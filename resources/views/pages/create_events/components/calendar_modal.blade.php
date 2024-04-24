<!-- Button trigger modal -->
<button id="buttonModal" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('event.post') }}" method="post" class="flex flex-col gap-2" enctype="multipart/form-data">
                    @csrf
                    {{-- title --}}
                    <label for="">Title</label>
                    <input name="title" type="text" class="w-full rounded-xl border-2 border-black p-2"
                        placeholder="insert event title">
                    {{-- description --}}
                    <label for="">Description </label>
                    <input name="description" placeholder="add description ..." type="text"
                        class="w-full rounded-xl border-2 border-black p-2" >
                    {{-- start date --}} 
                    <label for="">start date </label>
                    <input min="{{ date('Y-m-d h:m') }}" value="{{ date('Y-m-d') }}" type="datetime-local"
                        name="date_start" id="start-Date" class="w-full rounded-xl border-2 border-black p-2">
                    {{-- end date --}} 
                    <label for="">end date</label>
                    <input type="datetime-local" name="date_end" id="end-Date"
                        class="w-full rounded-xl border-2 border-black p-2">
                    {{-- price --}} 
                    <label for="">Price </label>
                    <input name="price" placeholder="Price" type="number"
                        class="w-full rounded-xl border-2 border-black p-2" placeholder="name's task">
                        {{-- location --}} 
                        <label for="">location</label>
                        <input name="location" placeholder="location" type="text" class="w-full rounded-xl border-2 border-black p-2">                    {{-- picture --}} 
                    <label for="">Add picture</label>
                    <input name="image" type="file" class="w-full rounded-xl border-2 border-black p-2">
                    {{-- submit --}} 
                    <input type="submit" class="bg-blue-500 px-2 py-1 rounded-xl" value="save">
                </form>
            </div>

        </div>
    </div>
</div>
