<ul class="navbar-nav ml-auto">
    @foreach($page as $val)
        <li><a href = "{{route('page.index', $val['slug'])}}" class="nav-link">{{$val['title']}}</a ></li >
    @endforeach
</ul>