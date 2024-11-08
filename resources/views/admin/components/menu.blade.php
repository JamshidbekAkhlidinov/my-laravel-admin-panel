@props(['text','url'=>'#','icon'=>'fas fa-th','options'=>'','is_logout'=>false])


@if ($is_logout)

<li class="nav-item">
  <a class="nav-link" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="nav-icon {{ $icon }}"></i>
    <p>
      {{ $text }}
      {{ $options }}
    </p>
  </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
@else
<li class="nav-item">
  <a href="{{ $url }}" class="nav-link">
    <i class="nav-icon {{ $icon }}"></i>
    <p>
      {{ $text }}
      {{ $options }}
    </p>
  </a>
</li>
@endif


