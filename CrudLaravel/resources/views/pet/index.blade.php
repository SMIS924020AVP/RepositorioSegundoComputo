<h1>Listado de mascotas</h1>

<!-- vamos a leer la data que se envia en el controlador -->

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Color</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
         @foreach($pets as $pet)
            <tr>
                <td>{{ $pet -> id}}</td>
                <td>{{ $pet -> name}}</td>
                <td>{{ $pet -> color}}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

<!-- leer la varable pet -->

            
            



<!-- mostrar los elementos como lista -->
<!-- <ul>
    
    @foreach($pets as $pet)
    <td>{{ $pet -> id}}</td>
    <td>{{ $pet -> name}}</td>
    <td>{{ $pet -> color}}</td>
    @endforeach
</ul> -->