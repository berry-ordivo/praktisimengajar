@extends('layouts.main')
@section('body')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Body</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td><img width="100px" height="100px" src="{{ asset('storage/'. $post->thumbnail) }}" alt=""></td>
                    <td>{{$post->body}}</td>
                    <td><div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/posts/{{$post->id}}">Lihat</a></li>
                          <li><a class="dropdown-item" href="/posts/{{$post->id}}/edit">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </div></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
