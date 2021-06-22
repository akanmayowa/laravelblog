





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @toastr_css

        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body>









<div class="ml-40 mt-20 w-full h-60">

    <div class="pull-right">
        <a class="rounded w-20 bg-green-200 p-4 rounded" href="{{ route('admin.posts.create') }}">Create New Post</a>
    </div>


    <table class="ml-40 mt-20  w-1/2 h-60">
        <thead>
          <tr class="items-left">
            <th class="">Title</th>
            <th class="">DETAILS</th>
            <th class="">IMAGE</th>
            <th class="pb-5">Comment</th>
            <th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td class="w-40 items-center">{{ $post->title }}</td>
            <td class="w-40 items-center">{{ $post->details }}</td>
            <td class="w-40 pb-5 items-center"><img src="/image/{{ $post->image }}" width="100px"></td>
            <td class=" items-center"><a class="bg-green-200 p-2 pb-4 rounded-lg" href="{{route('admin.posts.comment', ['id' => $post->comments])}}">Click to Add Comments</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

</div>
    </body>
    @jquery
    @toastr_js
    @toastr_render
    </html>
