@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter pasta description"> --}}

                        <textarea class="form-control" id="description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Enter pasta type"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                            <option value="Manga">Manga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input type="text" name="thumb" class="form-control" id="image" placeholder="Enter pasta image">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" name="price" class="form-control" id="cooking_time" placeholder="Enter pasta cooking_time">
                    </div>
                    <div class="form-group">
                        <label for="series">series</label>
                        <input type="text" name="series" class="form-control" id="weight" placeholder="Enter pasta weight">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">sale date</label>
                        <input type="date" name="sale_date" class="form-control" id="weight" placeholder="Enter pasta weight">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection