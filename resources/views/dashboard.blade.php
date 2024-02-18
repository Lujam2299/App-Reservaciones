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
                          href="dashboard"
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
                    <div class="flex flex-col flex-1 p-6 overflow-hidden">
                        <div class="flex items-center justify-between">
                          <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200">Reserva de Sala de Conferencias</h1>
                        </div>
                        <div class="flex flex-col mt-6">
                          <div class="flex flex-col mt-6">
                            <div class="flex flex-col mt-4">
                              <span class="text-lg text-gray-700 dark:text-gray-200">Seleccionar la Sala a Reservar</span>
                              <!-- Calendario
                                <div class="flex mt-2 text-sm text-gray-600 dark:text-gray-400">
                                <Input
                                  class="w-full mt-2 p-2 border border-gray-300 rounded-md dark:border-gray-800 dark:bg-gray-700 dark:text-gray-300"
                                  type="date"
                                />
                                <Button class="ml-2" variant="solid">
                                  Reservar
                                </Button>
                              </div>-->

                              <div class="flex space-x-4 overflow-x-auto">
                                <div class="card bg-dark flex-shrink-0 mx-2">
                                    <a href="{{route('reservation.rafapina')}}">
                                    <img
                                    alt="Auditorio"
                                    class="w-full logo rounded-lg"
                                    height="200"
                                    src="/images/rafapina.jpeg"
                                    width="200"
                                />
                                    <div class="card-body">
                                        <h5 class="card-title image-container text-gray-700 dark:text-gray-200">Sala Rafael Piña</h5>
                                    </div>
                                </a>
                                </div>
                                <div class="card bg-dark flex-shrink-0 mx-2">
                                    <a href="{{route('reservation.directores')}}">
                                    <img
                                    alt="Ex-directores"
                                    class="w-full logo rounded-lg"
                                    height="200"
                                    src="/images/exdirectores.webp"
                                    width="200"
                                />
                                    <div class="card-body">
                                        <h5 class="card-title image-container text-gray-700 dark:text-gray-200">Sala de Ex-Directores</h5>
                                    </div>
                                </a>
                                </div>
                                <div class="card bg-dark flex-shrink-0">
                                    <a href="{{route('reservation.auditorio')}}">
                                    <img
                                    alt="Auditorio"
                                    class="w-full logo rounded-lg"
                                    height="200"
                                    src="/images/auditorio.jpg"
                                    width="200"
                                />
                                    <div class="card-body">
                                        <h5 class="card-title image-container text-gray-700 dark:text-gray-200">Auditorio</h5>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </main>
            </div>
        </div>
    </div>
</x-app-layout>
