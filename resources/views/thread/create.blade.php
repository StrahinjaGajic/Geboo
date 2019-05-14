@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Create a New Thread</h3>

                <div class="card">
                    <form action="{{ route('threads.store') }}" method="post" style="padding: 15px;">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="title"/>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control" id="body" placeholder="This is your body nigga dude!"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
