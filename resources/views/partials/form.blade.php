@csrf
<tr>
    <th class="form-label">Apellido</th>
    <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}"></td>
</tr>
<tr>
    <th class="form-label">Nombre</th>
    <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}"></td>
</tr>
<tr>
    <th class="form-label">Dirección</th>
    <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}"></td>
</tr>
<tr>
    <th class="form-label">Sexo</th>
    <td>
        <select name="cPerSexo"  class="form-control" value="{{ old('cPerSexo', $persona->cPerSexo) }}">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
    </td>
</tr>
<tr>
    <th class="form-label">Fecha de Nacimiento</th>
    <td><input type="date" name="cPerFecNac" value="{{ old('cPerFecNac', $persona->cPerFecNac) }}"></td>
</tr>
<tr>
    <th class="form-label">Edad</th>
    <td><input type="number" name="nPerEdad" min="0" max="120"  class="form-control" value="{{ old('nPerEdad', $persona->nPerEdad) }}"></td>
</tr>
<tr>
    <th class="form-label">Sueldo</th>
    <td><input type="number" name="nPerSueldo" min="0" max="20000"  class="form-control" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}"></td>
</tr>
<tr>
    <th class="form-label">Estado</th>
    <td>
        <select name="nPerEstado"  class="form-control">
            <option value="1">Activado</option>
            <option value="0">Desactivado</option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="2">
        <input 
            type="file" 
            name="image" 
            class="custom-file-input" 
            id="customFile"
        >
        <label class="custom-file-label"  for="customFile">
            Seleccione Archivo
        </label>
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><button type="submit" class="btn btn-primary" class="form-control">{{$btnText}}</button></td>
</tr>
<!--
$table->string('cPerApellido',50)->nullable()->index();
$table->string('cPerNombre',50)->nullable()->index();
$table->string('cPerDireccion',100);
$table->string('cPerSexo')->default('Masculino');
$table->date('cPerFecNac');
$table->integer('nPerEdad')->unsigned();
$table->decimal('nPerSueldo',6,2);
$table->char('nPerEstado')->default('1');
-->