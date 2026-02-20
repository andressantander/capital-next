---
trigger: always_on
---

# Buenas Prácticas en la Creación, Diseño y Estructuración de Software

> Documento de reglas técnicas para Antigravity. Enfoque en arquitectura limpia, seguridad, desacoplamiento y uso correcto del stack (Laravel + Livewire + Tailwind + Supabase).

---

## 1. Principios Fundamentales

### 1.1 Velocidad con Solidez

* Priorizar rapidez de desarrollo **sin sacrificar arquitectura**.
* Cada cambio debe ser:

  * Atómico
  * Reversible
  * Auditable

> Si no se puede explicar un cambio en 2 minutos, es demasiado grande.

### 1.2 Sistemas Multiagente por Defecto

* El sistema **asume concurrencia constante**.
* Ningún estado crítico puede depender de:

  * Sesiones locales
  * Variables globales
  * Memoria volátil

Todo estado relevante debe ser **persistente y explícito**.

---

## 2. Separación Estricta de Responsabilidades (SoC)

### 2.1 Capas Obligatorias

El sistema debe respetar estas capas sin excepción:

* **Dominio**: reglas de negocio puras (PHP, sin framework)
* **Aplicación**: casos de uso y orquestación
* **Infraestructura**: Laravel, Supabase, colas, APIs externas
* **Presentación**: Livewire + Blade + Tailwind

### Regla Crítica

* **La UI es tonta**
* **El dominio es ciego**

La UI nunca decide reglas de negocio. El dominio nunca conoce la UI.

---

## 3. Uso Correcto de Laravel

### 3.1 Laravel NO es el Core

Laravel se utiliza **solo como framework de infraestructura**:

* Routing
* Controllers
* Jobs
* Queues
* Auth
* Middlewares

❌ Prohibido:

* Lógica de negocio en controllers
* Reglas críticas en modelos Eloquent
* Uso de Eloquent como dominio

### 3.2 Controllers Delgados

* Un controller solo:

  * Valida input
  * Llama a un caso de uso
  * Devuelve una respuesta

> Si un controller tiene lógica, está mal.

---

## 4. Livewire + Tailwind (Capa de Presentación)

### 4.1 Livewire

* Livewire es **estado de UI**, no lógica de negocio.
* Puede:

  * Emitir eventos
  * Mostrar estados
  * Consumir DTOs

❌ No puede:

* Calcular balances
* Decidir permisos
* Ejecutar reglas financieras

### 4.2 Tailwind

* Solo styling
* Nada de lógica condicional compleja en vistas

---

## 5. Supabase: Uso Seguro y Controlado

### 5.1 Supabase NO es el Core

Supabase se usa como:

* Base de datos
* Auth auxiliar
* Storage

Pero **nunca como lógica**.

### 5.2 Prohibiciones Clave

❌ No exponer Supabase directamente al frontend
❌ No usar claves públicas para datos sensibles
❌ No permitir acceso directo desde el navegador

Todo acceso a Supabase debe pasar por:

* Backend Laravel
* Policies
* Validaciones explícitas

### 5.3 Protección de Datos

* Row Level Security activa
* Separación de datos públicos / privados
* Ningún dato financiero se consulta desde el cliente

> El frontend nunca ve más de lo que estrictamente necesita.

---

## 6. Inmutabilidad y Ledger

* Toda operación financiera es:

  * Inmutable
  * Registrada
  * Auditada

Nunca se actualizan balances directamente.

Los balances se **derivan del ledger**.

---

## 7. Diseño Orientado al Cambio

* El core cambia poco
* Los bordes cambian seguido

Las reglas viven en el dominio.
Las integraciones viven en infraestructura.

---

## 8. Seguridad por Diseño

* Fail fast
* Validar todo
* Desconfiar del input

> El sistema debe ser seguro incluso si el frontend es comprometido.

---

## 9. Testing como Regla

* Dominio: tests unitarios puros
* Aplicación: tests de casos de uso
* Infraestructura: tests de integración

Si no se puede testear, está mal diseñado.

---

## 10. Filosofía Final

> No estamos construyendo pantallas, estamos construyendo infraestructura.

* Simple > complejo
* Explícito > implícito
* Predecible > mágico

---

**Fin del documento**
