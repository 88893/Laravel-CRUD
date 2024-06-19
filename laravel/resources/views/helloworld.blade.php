<div>
    <h1>Hello {{$name}}!</h1>

    @if ($test == 0)
    <p>test is zero</p>
    @elseif ($test == 0)
    <p>test is positive</p>
    @else 
    <p>test negative</p>
    @endif
</div>