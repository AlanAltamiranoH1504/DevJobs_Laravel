# 🚀 DevJobs - Plataforma de Empleos con Laravel

**DevJobs** es una plataforma web desarrollada con **Laravel**, que conecta a empleadores con candidatos. Los empleadores pueden publicar vacantes y los candidatos pueden crear perfiles y postularse a ofertas laborales.

---

## 🎯 Características

- 📄 **Publicación de Vacantes**  
  Empleadores pueden crear, editar y eliminar vacantes detalladas (título, descripción, requisitos, salario, etc.).

- 👤 **Gestión de Perfiles**  
  Candidatos y empleadores pueden registrarse, iniciar sesión y administrar sus perfiles.

- 📝 **Postulación a Vacantes**  
  Candidatos pueden postularse directamente a través del sistema, y los empleadores pueden revisar los postulantes.

- 📊 **Panel Administrativo**  
  Gestión de vacantes, postulaciones y usuarios según el rol.

- 🔎 **Búsqueda y Filtros**  
  Filtros dinámicos por título, ubicación, categoría, salario, etc., con actualización en tiempo real usando Livewire.

---

## 🧰 Tecnologías Utilizadas

- ⚙️ **Laravel** – Framework PHP moderno y robusto.
- ⚡ **Livewire** – Interactividad sin JavaScript.
- 🗃️ **MySQL** – Base de datos relacional para manejar toda la información.
- 🖼️ **Blade** – Motor de plantillas para las vistas.
- 🎨 **Tailwind CSS** – Framework CSS utilitario.

---

## 💻 Requisitos del Sistema

- PHP >= 8.1
- Composer
- MySQL o MariaDB
- Node.js y NPM

---

## ✅ Estado del Proyecto

> **Este proyecto se encuentra terminado y listo para producción.**  
> Todas las funcionalidades principales han sido implementadas y probadas.  
> Puedes usarlo con confianza en entornos reales.

---

## ⚙️ Instalación

```bash
# Clonar el repositorio
git clone https://github.com/tuusuario/devjobs-laravel.git
cd devjobs-laravel

# Instalar dependencias de PHP
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Configurar base de datos en .env y luego ejecutar migraciones y seeders:
php artisan migrate --seed

# Instalar dependencias front-end
npm install && npm run build

# Iniciar servidor de desarrollo
php artisan serve
