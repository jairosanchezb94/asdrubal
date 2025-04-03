# 🎯 prueba-asdrubal-jairo-sanchez

**Tema WordPress personalizado** creado para la 1ª fase del proceso de selección **SEO Junior** en AsdrubalSEO.

---

## 📦 Descripción

Este tema ha sido desarrollado cumpliendo todos los requisitos técnicos de la prueba:

- Tema WordPress funcional y autoinstalable
- Estructura personalizada con 3 secciones `include()`
- Condicional PHP en una de las secciones
- Estructura HTML semántica (`<head>`, `<body>`, `<header>`, `<h1>`, `<footer>`)
- Estilos modernos inspirados en landing pages
- Script JS que modifica el texto del `<h1>` dinámicamente
- Estilo visual limpio, sin scroll vertical

---

## 🚀 Instalación con LocalWP

1. Descarga [LocalWP](https://localwp.com/)
2. Crea un nuevo sitio (ej. `prueba-asdrubal-jairo`)
3. Una vez creado, haz clic en la pestaña **"Files"** para abrir el proyecto
4. Copia la carpeta `prueba-asdrubal-jairo-sanchez` en:

```bash
Local Sites > prueba-asdrubal-jairo > app > public > wp-content > themes
```

5. Entra a WordPress (`http://prueba-asdrubal-jairo.local/wp-admin`)
6. Ve a **Apariencia > Temas**, y activa el tema `prueba-asdrubal-jairo-sanchez`

---

## 🧱 Estructura del Tema

```
/prueba-asdrubal-jairo-sanchez
│
├── assets/
│   └── script.js              ← Modifica dinámicamente el <h1>
│
├── includes/
│   ├── section-one.php
│   ├── section-two.php
│   └── section-conditional.php ← Se incluye con un condicional PHP
│
├── style.css                 ← Estilo personalizado completo
├── functions.php             ← Encola CSS y JS
├── home.php                  ← Página principal modificada
├── header.php
├── footer.php
└── index.php
```

---

## 💻 Requisitos cumplidos

✅ Tema instalable y funcional  
✅ 3 secciones con `include()`  
✅ 1 sección bajo condición PHP  
✅ Estilos propios y diseño moderno  
✅ `wp_head()` y `wp_footer()`  
✅ Script que modifica `<h1>`  
✅ Uso de `$buffer` en PHP (opcional para IA)

---

## 📨 Envío

Este repositorio forma parte del proceso de selección solicitado por **AsdrubalSEO**.  
Tema alojado en el branch `asdrubal` y accesible para los usuarios requeridos.
