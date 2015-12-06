@extends('app')

@section('item-item-show-content')
    <div class="page-header">
        <h2>{{ $item->getAttributeValue($item::HEADER) }}</h2>
    </div>
    <div>
        <p>{{ $item->getAttributeValue($item::UPDATED_AT)->format('d/m/Y') }}</p>
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