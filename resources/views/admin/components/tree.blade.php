@props(['text','icon'=>'fas fa-angle-left'])

<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        {{ $text }}
        <i class="right {{ $icon }}"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $slot }}
    </ul>
  </li>