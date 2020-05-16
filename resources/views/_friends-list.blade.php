<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-2">
        <div class="flex items-center text-sm">
            <img 
            src="https://picsum.photos/40" 
            alt="Avatar"
            class="rounded-full mr-2"
            >
            {{$user->name}}
        </div>
    </li>
    @endforeach
</ul>