@extends('./templates.main')

@section('container')
        <h1 class="text-black text-xl font-bold p-2">{{$post->title}}</h1>  
        <p class="text-black p-2">{{$post->body}}</p>
@endsection