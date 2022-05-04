<x-layout>
    <x-card
    class="p-10 rounded max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
           Edita un Trabajo
        </h2>
        <p class="mb-4">Edita: {{$listing->title}}</p>
    </header>
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('put')}} 
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Nombre de la Compañia</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
              value="{{$listing->company}}" />
    
            @error('company')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Titulo</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
              placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}" />
    
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Localizacion</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
              placeholder="Example: Remote, Boston MA, etc" value="{{$listing->location}}" />
    
            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">
              Contactar Email
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$listing->email}}" />
    
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">
              Website/URL
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
              value="{{$listing->website}}" />
    
            @error('website')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
              Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
              placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />
    
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
              Compañia Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
    
            @error('logo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
          <img
          class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/imagenes/no-image.png')}}"
          alt=""
      />
    
          <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
              Descripcion Del Trabajo
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
              placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
    
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
    
          <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
              Editar Trabajo
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
          </div>
    </form>
    </x-card>
    </x-layout>