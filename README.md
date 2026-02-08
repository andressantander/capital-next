# Capital Next - Fase 0: Web Informativa

Este proyecto contiene la implementación de la fase informativa de Capital Next. 
Su objetivo es educar y captar leads sin ofrecer funcionalidades financieras operativas.

## 🚀 Instalación

1.  Clonar repositorio
2.  `composer install`
3.  `npm install && npm run build`
4.  `cp .env.example .env` (y configurar DB SQLite si es nuevo entorno)
5.  `php artisan key:generate`
6.  `php artisan migrate`
7.  `php artisan serve`

## 📦 Stack Tecnológico

*   **Framework:** Laravel 10
*   **UI/Auth:** Jetstream + Livewire
*   **Diseño:** TailwindCSS v3 (Configuración personalizada en `tailwind.config.js`)
*   **Base de Datos:** SQLite (Configuración local predeterminada)

## ✅ Qué Incluye (Fase 0)

*   **Sistema de Diseño:** Paleta de colores, tipografías y componentes UI implementados.
*   **Páginas Informativas:** Inicio, Qué es, Beneficios, Metodología, Contacto.
*   **Captación de Leads:** Formulario de contacto funcional (simulación visual) con validación Livewire.
*   **Componentes Reutilizables:** Header, Footer, Hero Sliders, Cards, Timelines.
*   **Estética:** Diseño Premium, animaciones suaves y adaptabilidad móvil.

## 🚫 Qué NO Incluye

*   **Lógica Financiera:** No hay wallets, depósitos, retiros ni simulaciones de rendimiento.
*   **Integraciones:** No hay conexión con Supabase (por ahora), Blockchain ni APIs externas.
*   **Gestión de Usuarios:** Aunque Jetstream está instalado, no se ha configurado panel de usuario final para inversiones.

## 📁 Estructura Clave

*   `app/Http/Controllers/PublicSiteController.php`: Controlador de páginas estáticas.
*   `resources/views/pages/`: Vistas de las páginas públicas.
*   `resources/views/components/`: Componentes Blade (Header, Footer, etc.).
*   `app/Livewire/`: Componentes lógicos de UI (HeroSlider, ContactForm).
*   `routes/web.php`: Definición de rutas públicas.

---
**Capital Next — Claridad y Crecimiento**
