@include('header')

@php
    $name = 'John';

    $fruits = [
        'Apple',
        'Pear',
        'Orange',
        'Banana',
        'Pineapple',
        'Strawberry'
    ]
@endphp

<h2>{{$name}}</h2>

@foreach ($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach
