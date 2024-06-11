<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear ingreso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('ingresos.store') }}" class="mx-auto">
                    @csrf

                    <div class="columns-4">
                        <div class="w-full">
                            <label for="monto" class="px-8 py-2 text-gray-900 dark:text-white text-center">Ingreso</label>
                            <input id="monto" name="monto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full">
                            <label for="nombre_categoria" class="px-6 py-2 text-gray-900 dark:text-white text-center">Categoria</label>
                            <select id="nombre_categoria" name="nombre_categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Activo Corriente">Activo Corriente</option>
                                <option value="Activo No Corriente">Activo No Corriente</option>
                                <option value="Pasivo Corriente">Pasivo Corriente</option>
                                <option value="Pasivo No Corriente">Pasivo No Corriente</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="fecha" class="px-8 py-2 text-gray-900 dark:text-white text-center">Fecha</label>
                            <input id="fecha" name="fecha" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full">
                            <label for="nombre" class="px-8 py-2 text-gray-900 dark:text-white text-center">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    <a href="{{ route('ingresos.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                </form>
            </div>
        </div>
    </div>
{{-- @include('footer') --}}
</x-app-layout>
