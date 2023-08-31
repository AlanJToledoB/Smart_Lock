<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil | "{{ $user->name }}"</title>
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/perfil.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosMenu2.css">
    {{-- link tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('header')

    <div>
        <div>
            <div class="">
                <div class="contenedor_img particles-js" id="particles-bg">
                    <div class="contenedor_tittle_nombre">
                        <div class="">
                            <img src="https://assets.website-files.com/61554cf069663530fc823d21/6369fecfe812339fc0fc3161_armour-min.png"
                                alt="">
                            <div class="tittle_nombre">
                                <a href="#"><i class="bi bi-pencil edit_write"></i></a>
                                {{ $user->name }}
                                <p>Role</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <!-- Formulario para editar el nombre y el email -->
                    <div class="cont_gmail_user">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="cont_">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" class="@error('name') is-invalid @enderror"
                                    name="name" value="{{ $user->name }}" required autofocus>
                                @error('name')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                    name="email" value="{{ $user->email }}" required>
                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <button type="submit"
                                class="bg-gray-800 hover:bg-gray-900 duration-100	px-1.5 py-1.5 rounded">Guardar
                                Cambios</button>
                            <br>

                        </form>
                    </div>

                    <br>

                    <div class="cont_password">
                        <h4>Cambiar contraseña</h4>
                        <form method="POST" action="{{ route('profile.updatePassword') }}">
                            @csrf
                            @method('PUT')

                            <div class="">
                                <label for="password">Contraseña actual</label>

                                <div>
                                    <input id="password" type="password"
                                        class="@error('password') is-invalid @enderror" name="password" required
                                        autocomplete="current-password" placeholder="Ingrese la contraseña actual">

                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div>
                                <label for="new_password" class="rounded">Nueva contraseña</label>

                                <div>
                                    <input id="new_password" type="password"
                                        class="@error('new_password') is-invalid @enderror" name="new_password" required
                                        autocomplete="new-password" placeholder="Ingrese la nueva contraseña">

                                    @error('new_password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div>
                                <label for="new_password_confirmation" class="rounded">Confirmar contraseña</label>

                                <div>
                                    <input id="new_password_confirmation" type="password"
                                        name="new_password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirme la nueva contraseña">
                                </div>
                            </div>
                            <br>
                            <div>
                                <button type="submit"
                                    class="bg-gray-800 hover:bg-gray-900 duration-100	px-1.5 py-1.5 rounded">Actualizar
                                    contraseña</button>
                            </div>
                        </form>
                    </div>

                    <br>

                    <h4>Eliminar cuenta</h4>

                    <div class="cont_eliminar">
                        <form method="POST" action="{{ route('profile.delete') }}"
                            onsubmit="return confirm('¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.')">
                            <p>Una vez su cuenta sea borrada, todos sus recursos y datos se eliminarán de forma
                                permanente.
                                Antes de borrar su cuenta, por favor descargue cualquier dato o información que desee
                                conservar.</p>
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="border-2 border-red-900 px-2.5	py-2.5 rounded-md hover:bg-red-900 duration-100">Eliminar
                                cuenta</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>


    <script src="{{ asset('assets/particles.js-master/particles.js') }}"></script>
    <script src="{{ asset('assets/particles.js-master/particles-config.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</body>

</html>
