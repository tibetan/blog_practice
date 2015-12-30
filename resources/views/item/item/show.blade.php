@extends('app')

@section('item-item-show-content')
    <div class="page-header">
        <a href="#">
            <img src="{{ asset('img/thailand.jpg') }}" width="50" height="50" alt="user logo" class="img-circle">
        </a>
        <h2>{{ $item->getAttributeValue($item::HEADER) }}</h2>
    </div>
    <div>
        <p>{{ $item->getAttributeValue($item::UPDATED_AT)->format(Lang::get('messages.date')) }}</p>
    </div>
    <hr>
    <p>
        {{ $item->getAttributeValue($item::BODY) }}
    </p>
    <hr>
    <div>
        <a href="#">Comments <span class="badge right">42</span></a>
    </div>
@stop