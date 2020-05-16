<x-app>
    
        <header class="mb-6 relative">

            <div class="relative">
                <img 
                    src="https://png.pngtree.com/thumb_back/fh260/background/20190222/ourmid/pngtree-blue-atmospheric-background-image_50584.jpg" 
                    class="mb-2"
                    alt=""
                >
    
                <img 
                    src="{{ $user->avatar }}" 
                    alt="Avatar"
                    width="150"
                    class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="left:50%"
                >
            </div>
        
    
            <div class="flex justify-between items-center mb-6">
    
                <div>
                    <h2 class="font-bold text-2xl"> {{$user->name}} </h2>
                    <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
    
                <div class="flex">

                @can('edit',$user)
                    <a 
                        href="{{current_user()->path('edit')}}" 
                        class=" rounded-full border border-gray-300 shadow py-2 px-4 text-black  text-xs mr-2"
                    >
                        Edit Profile
                    </a>   
                    
                @endcan
                    <x-follow-button :user="$user" ></x-follow-button>
                </div>
    
            </div>
    
            <p class="text-sm "> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo sapiente ex incidunt vitae fugiat ut, pariatur architecto, quia hic saepe sint eos a ea! Porro at natus veniam voluptatum ea!
            </p>
    

    
        </header>
    
        @include('_timeline',['tweets'=>$user->tweets])

</x-app>
