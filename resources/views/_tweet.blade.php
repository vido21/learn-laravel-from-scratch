<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}}"> 

<div class="mr-2 flex-shrink-0">
    <a href="{{ $tweet->user->path() }}">
        <img 
            src="https://picsum.photos/50" 
            alt="Avatar"
            class="rounded-full mr-2"
        >
    </a>
</div>

<div>
    <h5 class="font-bold mb-2">
        <a href="{{ $tweet->user->path() }}">
           {{$tweet->user->name}}
        </a>
    </h5>
    <p class="text-sm mb-3">
        {!! nl2br(e($tweet->body)) !!}
    </p>

    <x-like-buttons :tweet="$tweet"/>

</div>
</div>
