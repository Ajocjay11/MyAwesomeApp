@extends('base')

@section('content')

<h1>Dashboard</h1>
<p>
    <strong>Welcome {{auth()->user()->name}}!!</strong>
</p>
@endsection