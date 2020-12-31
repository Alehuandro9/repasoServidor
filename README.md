# Acerca de este repositorio

## Este readme va a tratar sobre cosas que son olvidadizas o que no tengo muy claras porque funcionan.

Al intentar cambiar o actualizar datos en la base de datos se enviaran a traves de un formulario parecido al siguiente ejemplo:

```
<form action="{{ url('modulos') }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    <div class="row gtr-uniform">
        <div class="col-3 col-12-xsmall">
            <input type="number" name="id" value="{{$modulo->id}}" placeholder="">
        </div>
        <div class="col-12 col-12-xsmall">
            <input type="text" name="nombre" id="nombre" value="{{$modulo->nombre}}" placeholder="">
        </div>
        <div class="col-3 col-12-xsmall">
            <input type="number" name="especialidad" value="{{$modulo->especialidad_id}}" placeholder="" min="1" max="2">
        </div>
        <div class="col-3 col-12-xsmall">
            <input type="number" name="ciclo" id="ciclo" value="{{$modulo->ciclo_id}}" placeholder="" min="1" max="6">
        </div>
        <div class="col-12">
            <ul class="actions">
                <li><input type="submit" value="Enviar" class="primary"></li>
                <li><input type="reset" value="Cancelar"></li>
            </ul>
        </div>
    </div>
</form>
```

<p style="text-align: justify;">En el formulario anterior puedes observar que algunos input no tienen el atributo id, eso es porque laravel a la hora de actualizar o introducir datos en la base de datos coge los valores de los input a través del atributo name, por eso en el siguiente fragmento de código de un metodo, en el apartado "$request->input('nombre');" el valor entre comillas simples es el valor del atributo name del formulario, no es el nombre del campo que corresponda en la base de datos.</p>

```
public function cambiarDatos(Request $request)
{
    $id = $request->input('id');
    $modulo = Modulo::findOrFail($id);
    $modulo->nombre = $request->input('nombre');
    $modulo->especialidad_id = $request->input('especialidad');
    $modulo->ciclo_id = $request->input('ciclo');
    $modulo->save();
    return redirect('modulos');
}
```
