@extends('layouts.app')

@section('content')
<br>

    <h1>Accueil</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus excepturi cum dolorum eos, ex earum consequatur magnam quas, ut sed voluptatem. Reiciendis facilis corrupti voluptas at maiores itaque architecto sed!</p>

@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection