<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse (current_user()->follows as $user)
    <li class="mb-2">
            <div>
                <a href="{{ route('profile.show',$user) }}" class="flex items-center text-sa">
                    <img 
                        src="https://picsum.photos/40" 
                        alt="Avatar"
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                    >
                    
                    {{$user->name}}
                </a>
            </div>
    </li>
    @empty
        <li class="p-4">No Friends yet !</li>
    @endforelse
</ul>