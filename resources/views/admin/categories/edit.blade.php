<x-admin-layout>
   
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index')}}"class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Category dashboard</a>
           
    </div>
    <div class="m-2 p-2 bg-slate-300 rounded">
    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
  <form method="POST" action="{{route('admin.categories.update',$category->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="sm:col-span-6">
      <label for="title" class="block text-sm font-medium text-gray-700"> Name </label>
      <div class="mt-1">
        <input type="name" id="title" value="{{ $category->name }}" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
    </div>
    @error('description')
      <div class="text-sm text-red-400">{{ $message }}</div>
    @enderror
    <div class="sm:col-span-6">
      <label for="image" class="block text-sm font-medium text-gray-700"> Post Image </label>
      <div>
        <img class="w-32 h-32" src="{{Storage::url($category->image)}}" alt="">
      </div>
      <div class="mt-1">
        <input type="file" id="image"  name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
      </div>
    </div>
     
    <div class="sm:col-span-6 pt-5">
      <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
      <div class="mt-1">
        <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
          {{$category->description}}
        </textarea>
      </div>
    </div>
    @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
    <div class="sm:col-span-6 pt-5">
      
</div>
<div class="pt-2">
<button type="submit" class= "px-4 py-2 bg-indigo-700 hover:bg-indigo-500 rounded-lg text-white">
            Update
        </button>
</div>

  </form>
</div>

    </div>

</div>
</div>
</x-admin-layout>
