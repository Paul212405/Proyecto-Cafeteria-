# Aplicación Web de Gestion de Cafeteria

Bienvenido a nuestra aplicación de Gestión de Cafetería. Este proyecto está desarrollado en PHP, CSS y JavaScript, utilizando Tailwind CSS a través de una CDN para el diseño y estilos. La aplicación está desplegada en la siguiente URL:

[**URL de la Aplicación Desplegada**](cafeteria-pyc.000webhostapp.com/)

## Descripción

Esta aplicación ofrece una plataforma como cliente que te permite comprar productos del negocio y visualizar los comentarios de los demás como sus valoraciones, ademas como una interfaz de administrador que te permite administrar el negocio como añadir clientes o nuevos productos.

## Tecnologías Utilizadas

- **PHP**: Para la lógica del servidor y la generación dinámica de contenido.
- **CSS**: Utilizando Tailwind CSS para los estilos.
- **JavaScript**: Para la interactividad en el cliente.
- **MySQL**: Como base de datos para almacenar la información.
- **XAMPP**: Para el servidor local durante el desarrollo.

## Instalación y Ejecución en Local

Para ejecutar esta aplicación en tu máquina local, sigue estos pasos:

### Prerrequisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado.

### Clonar el Repositorio

Clona el repositorio a tu máquina local en la carpeta xamp/htdocs usando el siguiente comando:

```bash
git clone https://github.com/pauldev24/Proyecto-Cafeteria-.git

```
## Configurar el Archivo de Conexión a la Base de Datos
- Asegúrate de que los parámetros de conexión en el archivo back_end/conexion/conexion.php:

```bash
<?php
$con = new mysqli("localhost", "root", "", "bd_cafeteria2023");
```
- Para terminar de ejecutar el proyecto solo dirigise en el navegador a localhost/(nombre del proyecto)

## Colaboradores
Agradecemos a todas las personas que han contribuido a este proyecto.

- Paul Mallqui Rivera - pauldev24
- Camila Morales Susanibar - camila2117