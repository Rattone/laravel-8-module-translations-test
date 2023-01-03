@extends('blog::layouts.master')

@section('content')
    <h1>{{ __('Hello World') }}</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@endsection
