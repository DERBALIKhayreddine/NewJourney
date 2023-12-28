<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2 bg-slate-10 rounded">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Rrendez-vous</a>
            </div>
            <div class="m-2 py-2  bg-slate-100 rounded ">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                                <input type="text" id="firstname" name="firstname" class="block w-full transition @error('firstname') border-red-600 @enderror" >
                            </div>
                        </div>
                        @error('firstname')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <div class="mt-1">
                                <input type="text" id="lastname" name="lastname" class="block w-full transition @error('lastname') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('lastname')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="text" id="email" name="email" class="block w-full transition @error('email') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('email')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror
                        <div class="sm:col-span-6">
                            <label for="tel-number" class="block text-sm font-medium text-gray-700">Telephone</label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number" class="block w-full transition @error('tel_number') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('tel_number')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror
                        <div class="sm:col-span-6">
                            <label for="birth_date" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <div class="mt-1">
                                <input type="date" id="birth_date" name="birth_date" class="block w-full transition @error('birth_date') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('birth_date')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="post" class="block text-sm font-medium text-gray-700">profession</label>
                            <div class="mt-1">
                                <input type="text" id="post" name="post" class="block w-full transition  @error('post') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('post')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="town" class="block text-sm font-medium text-gray-700">Town</label>
                            <div class="mt-1">
                                <input type="text" id="town" name="town" class="block w-full transition @error('town') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('town')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="codepostal" class="block text-sm font-medium text-gray-700">Code Postal</label>
                            <div class="mt-1">
                                <input type="text" id="codepostal" name="codepostal" class="block w-full transition @error('codepostal') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('codepostal')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date" class="block w-full transition @error('res_date') border-red-600 @enderror">
                            </div>
                        </div>
                        @error('res_date')
                        <div class="alert alert-danger text-red-700">{{$message}}</div>
                        @enderror
                        <div class="sm:col-span-6">
                            <label for="menu_id" class="block text-sm font-medium text-gray-700">Type d'immigration</label>
                            <div class="mt-1">
                                <select id="menu_id" name="menu_id" class="block w-full transition">
                                    @foreach($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-4 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
