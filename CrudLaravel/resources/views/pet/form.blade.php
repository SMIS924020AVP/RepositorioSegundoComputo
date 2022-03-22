Nombre: 
    <input type="text" name="name" id="name" value="{{ isset($pet->name)?$pet->name:'' }}">
    color:
    <input type="text" name="color" id="color" value="{{ isset($pet->color)?$pet->color:'' }}">
    <button type="submit">Guardar</button>