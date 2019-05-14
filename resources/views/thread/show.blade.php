@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--@component('components.panel')--}}
                    {{--@endcomponent--}}
                <h3>Forum Threads {{$thread->title}}</h3>
                <div class="card">
                        <div class="card-header"><h4>
                                <a href="#">{{ $thread->creator->name }}</a> posted: {{$thread->title}}</h4></div>

                        <div class="card-body">
                            <article>
                                <div class="body">{{$thread->body}}</div>
                            </article>
                        </div>
                </div>
            </div>
        </div>
    </br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($thread->replies as $reply)
                    @include('thread.partials.replies')
                @endforeach
            </div>
        </div>
        @if(auth()->check())
            <div class="row justify-content-center">
                    <div class="col-8 col-offset-2 my-5">
                        <form action="{{ $thread->path('/replies') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="body" id="body" class="form-control" placeholder="Have something to say nigga? Come on !" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Hit me!</button>
                        </form>
                    </div>
            </div>

        @else
            <p class="text-center">Please <a href="{{ route('login') }}"> sign in</a> to participate in this discussion.</p>
        @endif
    </div>
@endsection
