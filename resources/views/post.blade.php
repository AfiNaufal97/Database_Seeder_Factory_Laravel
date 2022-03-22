@extends('./templates.main')

@section('container')
    @foreach ($post as $item)
    <a href="/post/{{$item->slug}}">
        <h1 class="text-black text-xl font-bold p-2">{{$item->title}}</h1>
    </a>

    <p>
            Category : 
        <a href="/category/{{$item->Category->slug}}">
            {{ $item->Category->title}}
        </a>
    </p>
    <p>
        By : 
    <a href="/author/{{$item->user->slug}}">
        {{$item->user->name}}
    </a>
</p>
        
        <p class="text-black p-2">{{$item->body}}</p>
    @endforeach
@endsection