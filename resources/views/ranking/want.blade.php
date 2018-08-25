@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    <?php $type = "want"; ?>
    @include('items.items', ['items' => $items, 'type' => $type])
@endsection