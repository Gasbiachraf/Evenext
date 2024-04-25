<div class="card w-[23.5%]  border-2 " >
    {{-- <img class="h-[40vh] rounded-t-lg" src = "{{ asset('/images/face-sb.jpg') }}" class="card-img-top" alt="..."> --}}
    <img class="h-[30vh] rounded-t-md" src="{{ asset("storage/img/" . $event->image) }}" class="card-img-top" alt="...">
    <div class="card-body p-2"> 
      <h3 class="card-title">{{ $event->title }}</h3>
      {{-- <p class="card-text m-0">{{ $event->description }}</p> --}}
      <div class="flex gap-2 items-center  pt-1 pb-1 ">
        <div><i class="fa-solid fa-location-dot"></i></div>
        <p class="m-0 ">{{ $event->location }}</p>
      </div>
      <div class="flex gap-2 items-center  pt-1  ">
        <div><i class="fa-regular fa-clock"></i></div>
        <p class="m-0 ">{{ $event->date_start }}</p>
      </div>
      <div class="flex justify-between items-center  pt-1  ">
        <div class="pl-1 text-xl text-red-600">{{ $event->price }} MAD</div>
        {{-- <a href="#" class="btn btn-primary">find ticket</a> --}}
        <form action="/session" method="get">
            <button class="cursor-pointer bg-blue-600 px-2 py-2">Bay</button>
        </form>
      </div>
      
    </div>
  </div>