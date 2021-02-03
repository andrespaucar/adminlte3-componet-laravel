## Adminlte3-Componets-Laravel

### MENU SIMPLE
```html
<x-menu.simple 
    href="{{route('dashboard')}}" icon="fas fa-tachometer-alt"
    isActive="{{ request()->routeIs('dashboard')}}"> 
    DASHBOARD <span class="badge badge-info right">2</span>
</x-menu.simple>
```
### MENU FULL
```html
<x-menu.full isActive="{{request()->is(['users/*','users'])}}" 
      icon="fas fa-users" name="Usuarios">
      <x-slot name="badge">
          <span class="badge badge-danger right">nuevo</span>
      </x-slot>
      <x-menu.simple href="{{route('users')}}" 
          isActive="{{ request()->routeIs('users')}}"> 
          Usuarios
      </x-menu.simple>
      <x-menu.simple  href="#"  isActive=""> 
          Establecimientos
      </x-menu.simple>
  </x-menu.full>
```
