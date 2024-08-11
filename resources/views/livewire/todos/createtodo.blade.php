<div>
    <div wire:offline class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Your are Offline !</strong>
        <span class="block sm:inline">Some funtionality wont work like searching todo.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>
      <div>
        <div class="container content py-6 mx-auto">
            <div class="mx-auto">
                <div id="create-form" class="hover:shadow p-6 bg-white border-blue-500 border-t-2">
                    <div class="flex ">
                        <h2 class="font-semibold text-lg text-gray-800 mb-5">Create New Todo</h2>
                    </div>
                    <div>
                        <form>
                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">*
                                    Todo </label>
                                <input  type="text" wire:model='name' id="name" placeholder="Todo.."
                                    class="bg-gray-100  text-gray-900 text-sm rounded block w-full p-2.5">
                                    @error('name') 
                                    <span class="text-red-500 text-xs mt-3 block ">{{$message}}</span>
                                @enderror
                               
                                    
                               
        
                            </div>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600" wire:click.prevent='create'>Create
                                +</button>
                             @if (session('success'))
                     
                             <span class="text-green-500 text-xs">{{session('success')}}.</span>
                             @endif
                           
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
</div>
