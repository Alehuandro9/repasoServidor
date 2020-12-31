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

En el formulario anterior puedes observar que algunos input no tienen el atributo id, eso es porque laravel a la hora de actualizar o introducir datos en la base de datos coge los valores de los input a través del atributo name, por eso en el siguiente fragmento de código de un metodo, en el apartado "$request->input('nombre');" el valor entre comillas simples es el valor del atributo name del formulario, no es el nombre del campo que corresponda en la base de datos.

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

En el DatabaseSeeder, que no se te olvide inicializar los metodos que esten en el propio DatabaseSeeder. Ejemplo:
```
public function run()
{
    Schema::disableForeignKeyConstraints();
    Schema::enableForeignKeyConstraints();
    self::seedEspecialidades();
    self::seedCiclos();
    self::seedModulos();
    self::seedUsuarios();
    $this->command->info('Tablas Especialidades, Ciclos, Modulos, Usuarios inicializadas con datos!');
}
```

En los 2 metodos siguientes son un ejemplo de como recorrer un array asociativo, un array normal y tambien como se declaran.

```
private static function seedEspecialidades()
{
    Especialidad::truncate();
    for ($i=0; $i < sizeof(self::$arrayEspecialidades); $i++) {
        $especialidad = new Especialidad();
        $especialidad->nombre = self::$arrayEspecialidades[$i];
        $especialidad->save();
    }
}

private static $arrayEspecialidades = ['Informática', 'Sistemas y Aplicaciones Informáticas'];

private static function seedCiclos()
{
    Ciclo::truncate();
    foreach( self::$arrayCiclos as $ciclo ) {
        $c = new Ciclo();
        $c->grado = $ciclo['grado'];
        $c->nombre = $ciclo['nombre'];
        $c->save();
    }
}

private static $arrayCiclos = [
    array("grado" =>'FPB', "nombre" =>"Informática de Oficina"),
    array("grado" =>'FPB', "nombre" =>"Informática y Comunicaciones"),
    array("grado" =>'GM', "nombre" =>"Sistemas Microinformáticos y Redes"),
    array("grado" =>'GS', "nombre" =>"Administración de Sistemas Informáticos en Red"),
    array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Multiplataforma"),
    array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Web")
];

private static function seedUsuarios()
{
    User::truncate();
    foreach( self::$arrayUsuarios as $usuario ) {
        $c = new User();
        $c->name = $usuario['name'];
        $c->email = $usuario['email'];
        $c->password = bcrypt($usuario['password']);
	    $c->save();
    }
}
    
private static $arrayUsuarios = [
    array("name" =>'borja', "email" =>'6379454@alu.murciaeduca.es', "password" =>"6379454")
];
```

Como se puede observar en los metodos, en la primera línea pone algo como "Especialidad::truncate();", esa línea lo que hace es borrar los datos de la tabla especialidades, eso lo que hará es comprobar si existe un modelo llamado Especialidad, en las siguientes líneas apuntará al array estatico "arrayEspecialidades" que esta en el propio fichero DatabaseSeeder, creara un objeto con el modelo y la siguiente línea, despues de crear el modelo, puede resultar la más liosa, me refiero a una de estas líneas:

```
$c = new User();
$c->name = $usuario['name'];
```

Lo primero que se observa es "$c->name" la "c" biene del nombre que se le a puesto al objeto y lo de "name" viene del nombre del campo de la base de datos, para ver los nombres de los campos en la base de datos puedes ir al directorio database/migrations se pueden ver todas las tablas creadas en la base de datos. Ejemplo de la tabla Users:

```
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
}
```

Como puedes ver en el fragmento de código anterior, existe un campo llamado "name", lo cual corresponde con "$c->name" en el método, la siguiente parte es "= $usuario['name'];", "$usuario" corresponde al alias que se le ha dado a cada uno de los indices del array, y "['name']" corresponde a el campo "name" del array asociativo "arrayUsuarios".
