<link rel="stylesheet" href="{{asset('css/login.css')}}" >
<x-guest-layout>
   
   
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">



            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!--Login-->




            <form method="POST" action="{{ route('login') }}" class="formulario__login">
                @csrf
                <h2>Iniciar Sesión</h2>
                <x-input-label for="email" :value="__('Email')" />
               <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
               <x-input-error :messages="$errors->get('email')" class="mt-2" />



                <x-input-label for="password" :value="__('Password')" />
                  <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <button>Entrar</button>
                   <a href="{{ asset('/auth/google') }}"> <button>Entrar con google</a> </button>
                   <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
        
                </form>




            <!--Register-->
            <form method="POST" action="{{ route('register') }}" class="formulario__register">
                @csrf

                <h2>Regístrarse</h2>
                 <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- Contraseña --}}
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                {{-- confirmar --}}
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
            
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
            </form>
        </div>
    </div>
</x-guest-layout>
<script src="{{asset('js/login.js')}}"></script>
