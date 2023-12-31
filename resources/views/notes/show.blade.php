@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Note') }} {{$note->id}}</div>

                <div class="card-body">
                    

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end pe-0">{{ __('Title:') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" autocomplete="title" value="{{$note->title}}" required readonly>
                            </div>

                            <br><br>

                            <label for="description" class="col-md-4 col-form-label text-md-end pe-0">{{ __('Description:') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" autocomplete="description" style="resize: none" required readonly>{{$note->description}}</textarea>
                            </div>
                        </div>

                        <form method="post" action="{{route('notes.destroy', $note->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="row">
                                <div class="col-md-4">

                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>

                                <div class="col-md-4">
                                    
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
