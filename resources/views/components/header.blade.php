<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <h1>This header should be present on all pages</h1>
    <h2>Therefore, Hi {{$name}}!</h2>
    <h2>And her friends are
        @foreach($friends as $friend)
            {{$friend}}
        @endforeach
    </h2>
</div>
