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
                    <div class="container">
        <h2 class="text-white 3xl">Mis Reservaciones</h2>

        
        <table class="min-w-full bg-gray-800 border border-gray-600 shadow-sm rounded-md overflow-hidden">
                            <thead class="bg-gray-700">
                                <tr>
                                    
                                    <th class="py-2 px-4 border-b text-white">Nombre de Sala</th>
                                    <th class="py-2 px-4 border-b text-white">Fecha</th>
                                    <th class="py-2 px-4 border-b text-white">Acomodo</th>
                                    <th class="py-2 px-4 border-b text-white">Especificaciones</th>
                                    <th class="py-2 px-4 border-b text-white">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservaciones as $reservacion)
                                
                                    <tr class="hover:bg-gray-700">
                                        
                                        <td class="py-2 px-4 border-b text-white">{{ $reservacion->nombre_sala }}</td>
                                        <td class="py-2 px-4 border-b text-white">{{ $reservacion->reservation_date }}</td>
                                        <td class="py-2 px-4 border-b text-white">{{ $reservacion->acomodo }}</td>
                                        <td class="py-2 px-4 border-b text-white">{{ $reservacion->reservation_message }}</td>
                                        <td class="py-2 px-4 border-b text-white">
                                        @if ($reservacion->status == 0)
                                            Rechazada
                                        @elseif ($reservacion->status == 1)
                                            En revisión
                                        @elseif ($reservacion->status == 2)
                                            Aceptada
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
    </div>
                  </main>
            </div>
        </div>
    </div>
</x-app-layout>