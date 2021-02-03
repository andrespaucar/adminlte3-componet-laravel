@props(['icon'=>'far fa-circle','href','isActive'])
<li class="nav-item">
    <a href="{{$href}}" class="nav-link {{$isActive ? 'active' : '' }}">
        <i class="nav-icon {{$icon}}"></i>
        <p>{{$slot}}</p>
    </a>
</li>
