@extends('layouts.app')
@section('content')
    <h3>Vide</h3>
    @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <img src="..." class="rounded mr-2" alt="...">
                      <strong class="mr-auto">Bootstrap</strong>
                      <small class="text-muted">11 mins ago</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="toast-body">
                      {{$post->body}}
                    </div>
                  </div> 
            @endforeach
        @else 
            <p>No publication found at this moment</p>
        @endif
        
@endsection