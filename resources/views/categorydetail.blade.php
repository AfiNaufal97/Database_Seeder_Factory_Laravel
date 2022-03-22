@extends('./templates.main')

@section('container')
    @foreach ($post->post as $item )
        <p class="text-red-500">{{$item->title}}</p>
        <p>{{$item->excerpt}}</p>
    @endforeach
@endsection