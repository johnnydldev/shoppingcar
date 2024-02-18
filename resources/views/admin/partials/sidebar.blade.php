<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
 <div class="app-sidebar__user">
 <div>
 <p class="app-sidebar__user-name">John Doe</p>
 <p class="app-sidebar__user-designation">Frontend Developer</p>
 </div>
 </div>
 <ul class="app-menu">

 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}"
 href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
 <span class="app-menu__label">Dashboard</span>
 </a>
 </li>
 {{-- Inicia la sección del nuevo elemento del menú --}}
 <li>
 <a class="app-menu__item {{ Route::currentRouteName() == 'admin.products.index' ? 'active': '' }}"
 href="{{ route('admin.products.index') }}">
 <i class="app-menu__icon fa fa-tags"></i>
 <span class="app-menu__label">Productos</span>
 </a>
 </li>
 {{-- Agrega esto mismo para cada elemento que lleva el menú, cambiando las rutas de acceso --}}
 <li>
    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.faq.index' ? 'active': '' }}"
    href="{{ route('admin.faq.index') }}">
    <i class="app-menu__icon fa fa-tags"></i>
    <span class="app-menu__label">FAQs</span>
    </a>
    </li>
 </ul>
</aside>