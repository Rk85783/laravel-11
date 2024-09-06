<div>
    <h1>Home Page</h1>
    <h1>{{ $name }}</h1>
    <h1><?php echo $name; ?></h1>

    <h1>{{ rand() }}</h1>

    {{-- givine error --}}
    {{-- <h1>{{ $users }}</h1>  --}}

    <h1>{{ $users[0] }}</h1>
    <h1>{{ $users[1] }}</h1>
    <h1>{{ $users[2] }}</h1>

    @if ($name == 'Mr. Kumar')
        <h2>this is Mr.Kumar</h2>
    @elseif($name == 'Rohit')
        <h2>this is Rohit</h2>
    @else
        <h2>this is other user</h2>
    @endif

    <div>
        @for ($i = 0; $i <= 10; $i++)
            <h3>{{ $i }}</h3>
        @endfor
    </div>

    <div>
        @foreach ($users as $user)
            <h5>{{ $user }}</h5>
        @endforeach
    </div>
</div>
