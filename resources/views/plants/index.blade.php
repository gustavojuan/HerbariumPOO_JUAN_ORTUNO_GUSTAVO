<ul>
    @foreach($plants as $plant)
        <li>{{ $loop->index + 1  }}-{{$plant->name}}</li>
    @endforeach
</ul>
