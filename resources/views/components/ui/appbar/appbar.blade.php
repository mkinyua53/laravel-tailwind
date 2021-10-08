<header {{ $attributes->merge(['class' => 'header-nav']) }}>
  <div class="h-full flex flex-row justify-between">
    {{ $slot }}
  </div>
</header>
