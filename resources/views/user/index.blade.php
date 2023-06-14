<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            
            {{ __('Usuarios') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4">
                <!-- Modal toggle -->
                <button data-modal-target="createModal" data-modal-toggle="createModal" class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Nuevo usuario
                </button>
    
            </div>
            <div class="relative overflow-x-auto shadow-md bg-white sm:rounded-lg">
                
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Usuario</th>
                            <th scope="col" class="px-6 py-3">Telefono</th>
                            <th scope="col" class="px-6 py-3">Direccion</th>
                            <th scope="col" class="px-6 py-3">Editar</th>
                            <th scope="col" class="px-6 py-3">Eliminar</th>
                        </tr>
                    </thead>
                        @forelse ($users as $user)
                            
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $user->id }} </td>
                                <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('img') }}/perfil.png" alt="Jese image">
                                     
                                     <div class="pl-3">
                                        <div class="text-base font-semibold">{{ $user->name }}  {{ $user->lastname }} </div>
                                        <div class="font-normal text-gray-500">{{ $user->email }}</div>
                                    </div>  
                                </td>
                                <td class="px-6 py-4"> {{ $user->phone }} </td>
                                <td class="px-6 py-4"> {{ $user->direction }} </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="focus:outline-none text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Editar</button>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('users.delete',$user->id) }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</a>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="6">No Record Found</td>
                            </tr>
                            
                        @endforelse
                </table>

            </div>
        </div>
    </div>
</x-app-layout>

{{-- 
@if (isset($user_data->id)) --}}


<!-- Small Modal -->
<div id="createModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Small modal
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="createModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

           

            <!-- Modal body -->
            <div class="p-6 space-y-6">

                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                     <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- LastName -->
                    <div class="mt-4">
                        <x-input-label for="lastname" :value="__('Lastname')" />
                        <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>

                    <!-- Cedula -->
                    <div class="mt-4">
                        <x-input-label for="cedula" :value="__('Cédula')" />
                        <x-text-input id="cedula" class="block mt-1 w-full" type="text" name="cedula" :value="old('cedula')" required autofocus autocomplete="cedula" />
                        <x-input-error :messages="$errors->get('cedula')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Direction -->
                    <div class="mt-4">
                        <x-input-label for="direction" :value="__('Direccion')" />
                        <x-text-input id="direction" class="block mt-1 w-full" type="text" name="direction" :value="old('direction')" required autocomplete="direction" />
                        <x-input-error :messages="$errors->get('direction')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                                
                    <!-- Modal footer -->
                    <div class="flex items-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <x-primary-button>
                            {{ __('Guardar') }}
                        </x-primary-button>

                        <x-secondary-button data-modal-hide="createModal" >
                            {{ __('Cancelar') }}
                        </x-secondary-button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
{{-- @endif --}}