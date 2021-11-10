# DWES-UD5
Ejercicios del UD5

# Ejercicio 1 - Cookies
 - **ejercicio1_creaCookie.php**:
   - Se utilice el método setcookie Ayuda, para almacenar dos variables:
     - Nombre: Que almacene tu nombre completo.
     - Edad: Que almacene tu edad.
     - Haz que caduque dentro de 3 horas.
     - Haz que se envíe en todo el dominio.
 - **ejercicio1_leeCookie.php**:
   - Muestra la cookie completa.
   - Muestra cada uno de los datos en una frase.

# Ejercicio 2 - Sesiones
 - **ejercicio2.php**:
   - Inicializa una sesión.
   - Muestra por pantalla el id de dicha sesión.
 - **ejercicio2bis.php**:
   - Crea un nuevo archivo e inicializa otra sesión.
   - Muestra por pantalla el id de dicha nueva sesión.
   - ¿Qué ha sucedido? ¿Porqué?
   - Localiza en el directorio correspondiente los ficheros de sesión.

# Ejercicio 3 - Sesiones
 - **ejercicio3.php**:
   - Inicializa una sesión.
   - Añade 2 campos a la sesión:
     - Nombre.
     - Edad.
 - **ejercicio3bis.php**:
   - Crea un nuevo archivo e inicializa la sesión.
   - Muestra por pantalla el valor de los dos campos.
   - Identifica el archivo.
   - Elimina la variable Nombre mediante la función correspondiente en el segundo script.
     - ¿Qué sucede en el archivo?
   - Elimina todas las variables mediante la función correspondiente en el segundo script.
     - ¿Qué sucede?
   - Destruye la sesión en el segundo script.
     - ¿Qué sucede?
 
# Ejercicio 4 - Sesiones
 - **ejercicio4.php**:
   - Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que se muestre por pantalla una tabla con el nombre de las siguientes diretivas configurables en el servidor, su función y sus posibles valores:
     - session.use_cookies
     - session.use_only_cookies
     - session.save_handler
     - session.name
     - session.auto_start
     - session.cookie_lifetime
     - session.gc_maxlifetime

# Ejercicio 5 - Autenticación - Registrar usuario
  - **ejercicio5.php**
    - Formulario con los siguientes campos: 
      - Nombre de usuario.
      - Contraseña.
      - Cuenta bancaria
    - Recuerda que antes debes **crear una base de datos** y una **tabla** con dichos campos, para confirmar que los usuarios son únicos vamos a utilizar el nombre de usuario como **clave primaria**.
  - **ejercicio5BBDD.php**
    - Crea una función que inserte una fila con los datos
    - La contraseña **debe** estar encriptada.
    - Prueba a registrar varios usuarios con la misma contraseña.
