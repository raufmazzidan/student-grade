<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Grade - {{ $page }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @vite('resources/css/app.css')
</head>

<body>
  <header class="h-24 bg-white flex w-full items-center justify-between lg:px-10 px-8 border-b border-grey fixed z-50">
    <a href="#" class="font-bold text-2xl">
      <span class="text-purple">S</span>TUDENT GRADE
    </a>
    <div class="flex gap-8">
      <div class="h-12 w-12 bg-grey rounded-full border-2 border-purple">
        <img class="block h-full w-full object-cover rounded-full" src="/img/user.webp" />
      </div>
    </div>
  </header>
  <div class="flex pt-24 relative">
    <div class="h-full border-r border-grey w-72 pr-8 fixed bg-white z-50">
      <div class="border-l-4 border-grey ml-4 h-full pt-8 flex flex-col gap-2">
        <a href="/">
          <div
            class="{{ $page == 'Dashboard' ?  'border-l-4 border-purple bg-purple-light' : 'border-l-4 border-grey bg-white'}} -ml-1 px-4 py-2 text-lg tracking-wide hover:border-l-4 hover:border-purple hover:bg-purple-light ease-out duration-300">
            Dashboard
          </div>
        </a>
      </div>
    </div>
    <div class="w-full ml-72 p-8">
      @yield('app')
    </div>
  </div>
</body>

</html>