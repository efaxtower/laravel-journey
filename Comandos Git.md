# 🛠️ Comandos de Git (Mi Cheat Sheet)

## 🚀 Flujo diario (Los 3 pasos sagrados)
Cada vez que termines de programar y quieras guardar tu progreso:

1. `git status`
   *(Muestra qué archivos has cambiado. En rojo los modificados).*

2. `git add .`
   *(Prepara TODOS los archivos modificados para el commit).*

3. `git commit -m "Escribe aquí qué hiciste hoy"`
   *(Guarda una "foto" de tu código. El mensaje debe ser claro).*

4. `git push`
   *(Sube los cambios a GitHub).*
## ⚠️ Si la subida falla (Rejected)
Si creaste el repo en GitHub con un README o licencia y te da error `[rejected]` al hacer push:

- Opción 1 (Traer lo de GitHub y unir): `git pull origin main --allow-unrelated-histories` y luego `git push`
- Opción 2 (Sobrescribir GitHub con lo local): `git push -u origin main --force`

---

## 🔍 Comandos para revisar

- `git log --oneline`
  *(Muestra la lista de tus commits, uno por línea).*

- `git status`
  *(Ver el estado actual de tus archivos).*

---

## ⚠️ Reglas de oro
- **Nunca** hagas `git push` sin hacer `git commit` antes.
- **Nunca** uses contraseñas en el código (siempre usa `.env`).
- Haz commits **pequeños y frecuentes** (un commit al día es perfecto).