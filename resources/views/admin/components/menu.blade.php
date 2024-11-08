@props(['text','url'=>'#','icon'=>'far fa-circle nav-icon','options'=>''])


<li class="nav-item">
  <a href="{{ $url }}" class="nav-link">
    <i class="nav-icon {{ $icon }}"></i>
    <p>
      {{ $text }}
      {{ $options }}
    </p>
  </a>
</li>