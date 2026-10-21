# 📓 Progreso diario

Bitácora de lo que hago cada día. Sin Git por ahora, así que esto es mi historial.

---

## Día 0.5 — [09/10/26]

**Qué hice:**
- Verifiqué si tengo PHP instalado
- Verifiqué si tengo Composer instalado
- Creé este archivo

**Qué aprendí:**
- Hoy estoy aprendiendo varias cosas

-- php artisan serve: Para prender el server en la carpeta, en este caso como puerto principal estamos usando el puerto 8000 / Dicho comando nos puede decir si tambien tenemos un error de sintaxis en algun archivo

-- 

**Qué me costó:**
- 

**Próximo paso:**
- Instalar Laravel 


fail2ban y limitancion de envio de paquetes


## Día 2 — [18/10/26]

**Qué aprendí:**
- Qué es una función en PHP: un bloque de código con nombre que se puede ejecutar.
- Estructura: `function nombre($parametros) { return ...; }`
- Diferencia entre definir y llamar una función.
- Cómo llamar a una función: `nombre();`
- Cómo interpolar variables: comillas dobles `"Hola, $nombre"`.
- Las funciones anónimas en Laravel: `function () { ... }` pasadas como argumento.

**Qué escribí yo solo:**
- (anota lo que escribiste sin copiar)

**Qué me costó:**
- (anota lo que te costó)

**Próximo paso:**
- Vistas con Blade.

## Día 3 — 19 de octubre de 2026 (continuación)

**Qué aprendí:**
- Las rutas en Laravel son planas, no jerárquicas... Para anidar, se usa Route::prefix(). ///es decir para crear rutas con niveles y no separadas pues "Route::get" devuelve rutas virtuales separadas///

- Comillas dobles "..." interpolan variables; comillas simples '...' no.
ejemplo: 
-- Las comillas simples permiten poner caracteres especiales tales como $, /, %, etc... sin que php los lea como elementos ejecutables... 

-- mientras que las comillas dobles permiten si usar esos caracteres, un caso de uso es para integrar una variable a un string...

- Las rutas con parámetros extraen el valor de la URL y lo pasan a la función para soltarla cuando se llama...

- Las rutas específicas van ANTES que las rutas con parámetros... de lo contrario php va a leer primero la ruta arriba parametrizada y la siguiente ruta no la va a leer... 

- Las funciones con nombre se definen con `function nombre() { ... }` (sin ; al final pero si dentro de cada 'paso' s/n escalon...).

- Puedo llamar funciones con nombre desde dentro de una ruta.

/// CRUD DE PHP ///
- Hay dos formas de crear un crud... de forma nativa o con funciones...

-- de forma nativa usamos http con estos metodos:

| Método     | ¿Para qué?              | Ejemplo                                |
| ---------- | ----------------------- | -------------------------------------- |
| **GET**    | Pedir/leer algo         | Ver una página, una lista              |
| **POST**   | Enviar/crear algo       | Enviar un formulario, crear un usuario |
| **PUT**    | Actualizar algo         | Editar un usuario                      |
| **DELETE** | Borrar algo             | Eliminar un usuario                    |
| **PATCH**  | Actualizar parcialmente | Actualizar solo el email               |
- Y con funciones es basicamente usar una combinacion de mysql y php haciendo que la funcion cree elementos en la base de datos usando comandos como join para leer, create etc... 

El metodo tradicional se llama REST
  
**Qué escribí yo solo:**
- Función `despedir()`.
- Ruta `/hola/function` que llama a `despedir()`.
- Ruta `/hola/{nombre}` que captura el nombre de la URL.

**Qué me falta practicar:**
- Funciones con múltiples parámetros.
- Entender Route::prefix() para jerarquía.

**Próximo paso:**
- Vistas con Blade.

---

## Día 4 — [20/10/2026]

**Qué aprendí:**
- `view('vista', ['clave' => valor])` pasa variables a la vista. (El primer segmento 'clave' es la variable para las vistas de view... quedando como $clave... y apunta al valor que queremos mostrar... podemos llamar a una funcion solo poniendo ['clave' => valor()]) 

- El valor puede ser un string, un número, una variable o una llamada a función.

- En arrays asociativos, es más común usar comillas simples para las claves pero se pueden usar comillas dobles...

- Para pasar varias variables, se añaden más claves al array.

- HOY tuve errores con echo al usar echo -"test", saludar()- use todo mal...

**Qué escribí yo solo:**
- Función `nombre()` que devuelve un string.
- Ruta `/blade` que pasa el resultado de `nombre()` a la vista.

**Qué me costó:**
- Recordar la sintaxis del array asociativo.

**Próximo paso:**
- Usar `@if` en Blade.

---
## Día 5 — [21/10/2026]

**Qué aprendí:**
- `@if` en Blade muestra contenido condicionalmente.
- Sintaxis: `@if (condición) ... @else ... @endif`.
- `@elseif` para múltiples condiciones.
- `===` es comparación estricta (valor y tipo). `==` es no estricta.
- `&&` es "y" lógico. Ambas condiciones deben cumplirse.
- `@isset` comprueba si una variable existe.
- `@empty` comprueba si una variable está vacía.

**Qué escribí yo solo:**
- Añadí `@if` a la vista para mostrar un mensaje especial si el nombre es "jesus".
- Añadí `@elseif` para clasificar por edad.

**Qué me costó:**
- Aprender un poco como funcionan los archivos .gitignore para subir proyectos a repositorios.
- entender como subir proyectos al git

### Hoy se hace estreno de el uso de Git

**Próximo paso:**
- `@foreach` en Blade.