<div class="flex p-4 border-b border-b-gray-400"> 

<div class="mr-2 flex-shrink-0">
    <img 
        src="https://picsum.photos/50" 
        alt="Avatar"
        class="rounded-full mr-2"
    >
</div>

<div>
    <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
    <p class="text-sm">
        {!! nl2br(e($tweet->body)) !!}
    </p>
</div>
</div>
