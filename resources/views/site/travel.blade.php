@extends('layouts/tartifly')
@section('pageTitle', 'Tours')

@section('content')
<h1>{{ $travel->label }}</h1>

<p></p>
{{dd($travel->label)}}

@endsection