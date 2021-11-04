@extends('layouts.app');



@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4 mb-4">all Comics</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">image</th>
                        <th scope="col">Title</th>
                        <th scope="col">series</th>
                        <th scope="col">price</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic['id'] }}</th>
                            <td>
                                <img src="{{$comic['thumb']}}" alt="">
                            </td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{!! $comic['series'] !!}</td>
                            <td>{{ $comic['price'] }}</td>
                            <td>{{ $comic['type'] }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic['id']) }}"
                                    class="btn btn-info">
                                    Details
                                </a>
                                <a href="{{ route('comics.edit', $comic['id']) }}"
                                    class="btn btn-warning">
                                    Modify
                                </a>
                                <form method="post" onclick="return confirm('Qesta azione è irreversibile!!! Sei sicuro di voler cancellare?')" action="{{ route('comics.destroy', $comic['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
</div>
@endsection