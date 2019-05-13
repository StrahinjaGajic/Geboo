@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Forum Threads</h3>
                <div class="card">
                    @foreach($threads as $thread)
                    <div class="card-header"><h4><a href="{{route('show.thread',$thread->id)}}">{{$thread->title}}</a></h4></div>

                    <div class="card-body">
                            <article>
                                <div class="body">{{$thread->body}}</div>
                            </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
