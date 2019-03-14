<nav class="flex items-center justify-between flex-wrap bg-indigo-darker p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        @include('svg.logo', ['class' => 'fill-current h-3 mr-6'])
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-indigo-lighter border-indigo-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="nav-link  lg:inline-block lg:mt-0 hover:text-white mr-6">Link 1</a>
            <a href="#responsive-header" class="nav-link  lg:inline-block lg:mt-0 hover:text-white mr-6">Link 2</a>
            <a href="#responsive-header" class="nav-link  lg:inline-block lg:mt-0 hover:text-white">Link 3</a>
        </div>
        <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white no-underline border-white hover:border-transparent hover:text-indigo hover:bg-white mt-4 lg:mt-0">HelloWorld</a>
        </div>
    </div>
</nav>
