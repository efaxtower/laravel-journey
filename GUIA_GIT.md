
# Regla de Oro de tu Proyecto
Ahora que tu carpeta raíz es `laravel-journey` (donde están tus notas, ejercicios y el proyecto Laravel), **todos los comandos de Git se ejecutan desde ahí**. 

Para prender el servidor de Laravel, sí debes entrar a `mi-primera-app`. Pero para guardar en Git, quédate en la raíz.

---

## 🚀 1. Crear un repositorio DESDE CERO (Local a GitHub)

Si algún día empiezas un proyecto nuevo en tu PC y quieres subirlo a GitHub, haz esto:

1. Abre la terminal y entra a la carpeta de tu nuevo proyecto:
   ```cmd
   cd ruta\de\tu\proyecto
   ```
2. Inicializa Git:
   ```cmd
   git init
   ```
3. Prepara todos los archivos:
   ```cmd
   git add .
   ```
4. Guarda la primera "foto" (commit):
   ```cmd
   git commit -m "Primer commit: estructura inicial del proyecto"
   ```
5. Ve a GitHub.com, crea un repositorio **NUEVO** y **VACÍO** (sin README, sin .gitignore).
6. Conecta tu carpeta local con GitHub:
   ```cmd
   git remote add origin https://github.com/TU-USUARIO/TU-REPO.git
   ```
7. Sube los archivos por primera vez:
   ```cmd
   git push -u origin main
   ```
   *(Te abrirá el navegador para que inicies sesión en GitHub).*

---

## 🔄 2. El Flujo Diario (Hacer un commit)

Cada vez que termines de estudiar o programar, haz estos **3 pasos sagrados**:

1. **Ver qué cambiaste** (opcional, pero recomendado):
   ```cmd
   git status
   ```
   *(Te muestra en rojo los archivos modificados).*
2. **Preparar los archivos:**
   ```cmd
   git add .
   ```
3. **Guardar la foto:**
   ```cmd
   git commit -m "Día X: Escribe aquí qué hiciste hoy"
   ```
4. **Subir a la nube (GitHub):**
   ```cmd
   git push
   ```

---

## 🕰️ 3. Comandos para Viajar en el Tiempo (Respaldos y Errores)

Git es tu máquina del tiempo. Si rompes algo, no entres en pánico.

- **Ver el historial de commits:**
  ```cmd
  git log --oneline
  ```
  *(Te mostrará una lista de códigos cortos y los mensajes de tus commits).*

- **Ver exactamente qué cambiaste en un archivo:**
  ```cmd
  git diff
  ```

- **Deshacer cambios que aún NO has guardado en un commit (si la regaste escribiendo):**
  ```cmd
  git restore nombre-del-archivo.php
  ```
  *(O `git restore .` para restaurar todo a como estaba en el último commit).*

---

## ⚠️ 4. Solución de Problemas Frecuentes (Cuando algo falla)

- **Error: `[rejected] main -> main` al hacer push**
  *Causa:* Hay cosas en GitHub (como un README) que no tienes en tu PC.
  *Solución:* `git pull origin main --allow-unrelated-histories` y luego `git push`. (O si estás seguro de que tu código local es el correcto, usa `git push --force`).

- **Error: `fatal: not a git repository`**
  *Causa:* Estás en la carpeta equivocada en la terminal.
  *Solución:* Haz `cd` a la carpeta raíz de tu proyecto (donde se creó la carpeta oculta `.git`).

- **Error: `git no se reconoce como un comando...`**
  *Causa:* No has instalado Git o no has reiniciado la consola después de instalarlo.
  *Solución:* Cierra CMD, ábrelo de nuevo.

- **Resubir** proyecto con cambios de archivos
`git add -A`

_(El `-A` es crucial aquí. Significa "All". Le dice a Git: "Oye, he borrado cosas, actualiza el registro")._

---

## 🧠 5. Glosario de conceptos (Para que sepas qué estás haciendo)

- **Repositorio (Repo):** La carpeta de tu proyecto controlada por Git.
- **Commit:** Una "foto" del estado de tus archivos en un momento exacto.
- **Push:** Enviar tus commits locales a la nube (GitHub).
- **Pull:** Traer los cambios de la nube a tu PC.
- **Working Directory:** Tu carpeta normal de trabajo (los archivos que ves en Sublime Text).
- **Staging Area:** La "sala de espera" (donde los archivos están después de `git add .` listos para el commit).

---

## 🛠️ 6. Comandos de Configuración (Solo se hacen una vez)

Ya los hiciste, pero por si formateas la PC o usas otra:
```cmd
git config --global user.name "Tu Nombre o Alias"
git config --global user.email "tu-correo-de-github@ejemplo.com"
git config --global init.defaultBranch main
```

