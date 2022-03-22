@extends('./templates.main')
@section('container')
    @foreach ( $author->post as $item )
        <p>{{$item->title}}</p>
        <p>{{$item->excerpt}}</p>
    @endforeach
@endsection