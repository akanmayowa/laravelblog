

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @toastr_css
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body>
    <div class="ml-40 mt-10 w-full max-w-xs">
    <div class="flex items-center justified-between">Create Post </div>

  <div>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  

<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif
    </script>
  </div>




  <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" >
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
        title
      </label>
      <input name="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
        details
      </label>
      <textarea cols="5" rows="4" name="details" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" ></textarea>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
        image
      </label>
      <input name="image" type="file" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create Post
      </button>
   
    </div>
  </form>

</div>

</body>
@jquery
@toastr_js
@toastr_render
</html>



