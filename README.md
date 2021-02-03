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

<x-menu.full isActive="{{request()->is('sales/*')}}" 
    icon="fas fa-file-invoice" name="Ventas">
    <x-menu.simple href="{{route('newsale')}}" 
        isActive="{{ request()->routeIs('newsale')}}"> 
        Nuevo Comprobante
    </x-menu.simple>
    <x-menu.simple  href="{{route('listsale')}}"  
        isActive="{{request()->routeIs('listsale')}}"> 
        Listado Comprobantes
    </x-menu.simple>
    <x-menu.simple  href="#"  isActive=""> 
        Pedidos
    </x-menu.simple>
</x-menu.full>
```
