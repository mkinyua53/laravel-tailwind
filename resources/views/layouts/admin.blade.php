<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="/css/font-awesome.css">

  <style>
    /* .main-content {
      min-height: calc(100vh - theme('height.14'))
    } */
  </style>

</head>
<body>
  <div class="h-screen overflow-hidden" id="app">
    <x-ui.appbar.appbar class="bg-blue-400">
      <x-ui.appbar.item>
        <button class="text-2xl" @click="sidebar = !sidebar">
          <i class="fa fa-bars"></i>
        </button>
      </x-ui.appbar.item>
      <x-ui.spacer.spacer></x-ui.spacer.spacer>
      <x-ui.appbar.item>
        <button class="text-2xl">
          <i class="fa fa-user"></i>
        </button>
        <div class="title">User menu here</div>
      </x-ui.appbar.item>
      <x-ui.appbar.item>
        <button class="text-2xl">
          <i class="fa fa-user"></i>
        </button>
        <div class="title"></div>
      </x-ui.appbar.item>
    </x-ui.appbar.appbar>
    <section class="main-content">
      <nav class="main-nav bg-white" v-show="sidebar">
        <x-admin-sidebar></x-admin-sidebar>
      </nav>
      <main class="content">
        <div>
          <p>@{{ message }}</p>
          {{ $slot }}
        </div>
      </main>
    </section>
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="/js/vue.js"></script>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello from VueJs!',
        sidebar: true,
      }
    })
  </script>
  @env ('local')
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
  @endenv
</body>
</html>
