<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <main class="flex flex-1 overflow-auto">
                    <nav class="flex flex-col bg-white shadow-lg dark:bg-gray-800 w-64">
                      <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                          <span class="text-gray-600 dark:text-gray-400 text-2xl font-semibold">Tablero</span>
                        </div>
                      </div>
                      <nav class="mt-10 px-6 ">
                        <a
                          class="mt-3 flex items-center py-2 px-4 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200"
                          href="{{route('dashboard')}}"
                        >

                          <span class="mx-4 font-medium">Inicio</span>
                        </a>

                        <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="{{route('profile.edit')}}">

                          <span class="mx-4 font-medium">Configuraciones</span>
                        </a>
                        <a class="mt-3 flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400" href="{{route('user.solicitudes')}}">
                            <span class="mx-4 font-medium">Mis solicitudes</span>
                        </a>
                        <form method="POST" action="{{route('logout')}}" class="mt-3">
                            @csrf
                            <button type="submit" class="flex items-center py-2 px-4 text-gray-600 rounded-md dark:text-gray-400">
                                <span class="mx-4 font-medium">Cerrar Sesión</span>
                            </button>
                        </form>

                      </nav>
                    </nav>
                    
                  </main>
            </div>
        </div>
    </div>
</x-app-layout>