@props(['badge'=>'','isActive','icon','name'])
<li class="nav-item  {{$isActive ? 'menu-open': ''}}">
    <a href="#" class="nav-link {{ $isActive ? 'active' : '' }}">
        <i class="nav-icon {{$icon}}"></i>
        <p>{{$name}} <i class="right fas fa-angle-left"></i> {{$badge}}</p>
    </a>
    <ul class="nav nav-treeview">{{$slot}}</ul>
</li>
