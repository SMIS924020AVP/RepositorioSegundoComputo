<h1>Nueva mascota</h1>

<form action="{{ url('/pet' .pet->id)}}" method="post">
    <!-- token de seguridad -->
    @csrf
    {{ methods_field('PUT') }}
    @include('pet.form')
</form>
