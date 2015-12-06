@extends('app')

@section('item-item-index-content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>Theme example</h1>
      <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
    </div>

    @foreach($items as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="#">
                    <img src="{{ asset('img/thailand.jpg') }}" width="50" height="50" alt="user logo" class="img-circle">
                </a>
                <h3 class="panel-title">{{ $item->getAttributeValue($item::HEADER) }}</h3>
            </div>
            <div class="panel-body">
                {{ $item->getAttributeValue($item::UPDATED_AT)->format('d/m/Y') }}
                <span>Rubric</span>
                <hr>
                    {{ str_limit($item->getAttributeValue($item::BODY), 400) }}
                <hr>
                <div>
                    <a href="#">Comments <span class="badge right">42</span></a>
                </div>
            </div>
        </div>
    @endforeach

@stop