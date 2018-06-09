@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id], 'method' => 'post']) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@endif