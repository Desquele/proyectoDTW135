# Parcial 2 - Proyecto Laravel DTW135 GT02

Integrantes: 
- Douglas Enrique Siguenza Quele
- Salvador Isaías Juárez Alcántara
- Guillermo Alexander Rodríguez Cortez
---

Se detallan todos los pasos para configurar el proyecto correctamente:

---

## Requisitos

Asegúrate de tener instalado lo siguiente:

1. **Herd** → [Descargar Herd](https://herd.laravel.com/) Herd ya incluye Composer por lo que no hace falta instalación por separado
2. **Git** → [Descargar Git](https://git-scm.com/)
3. **Node.js y npm** → [Descargar Node.js](https://nodejs.org/)
4. **MySQL Workbench** o cliente de base de datos para gestionar la base
5. **Visual Studio Code u otro IDE** 
6. 
---

## Clonación del Proyecto
git clone <URL_DEL_REPOSITORIO>
cd nombre_del_proyecto


---

## Instalación de Dependencias

### Dependencias PHP (Laravel)

```bash
composer install
```

### Dependencias de Node

```bash
npm install
```

---

## Configuración del Entorno

Cambiar configacion de bases de datos en archivo: .env
- Crear una base de datos vacía en MySQL.
- Cambiar DB_DATABASE=laravel, por el nombre de su base de datos.
- Cambiar DB_PASSWORD=1234, por su contraseña root.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=1234
```

---

## Generar Clave de la Aplicación

```bash
php artisan key:generate
```

---

## Configurar Herd y Base de Datos

**Abrir Herd como administrador.**

![image](https://github.com/user-attachments/assets/5ad7597f-96f2-4ddb-837d-429c17fb31f4)

---

## Migraciones y Datos

Ejecutar las migraciones:

```bash
php artisan migrate
```
Poblar la base de datos con datos de prueba:

```bash
php artisan db:seed
```

---

## Levantar el Proyecto

Con Herd abrir la carpeta que contiene el poyecto en Link existing project:

![image](https://github.com/user-attachments/assets/40ed4e7f-7d7f-4e16-ba8b-3bd7f3cd57f0)

Accede al link generado por Herd, como:

![Soap](https://github.com/user-attachments/assets/531a71a5-9003-4a98-84d6-bed362ca64ab)

Opción 2: Con servidor PHP integrado ejecutar:

```bash
php -S 127.0.0.1:8081 -t public
```

Luego abre en el navegador:

```
http://127.0.0.1:8081
```

---

## Acceso al Proyecto

Puedes acceder como:

- **Admin** o **usuario** con las credenciales generadas en el seeder (si aplica).
- Las rutas principales y vistas se muestran dependiendo del tipo de usuario.

### En el usuario: usuario, contraseña: 1234. 

Se encuentra el menu con las partes que se solicitaban: 

![image](https://github.com/user-attachments/assets/8f39560d-d20b-4492-9c48-5a274574a3b6)

## Parte 1:  Lectura de XML y conversión a JSON: 

![image](https://github.com/user-attachments/assets/ada52d1c-457a-44bf-a762-b22fe01e3621)

## Parte 2: Implementar servicio SOAP:

![image](https://github.com/user-attachments/assets/b5bf65ea-f274-4325-ac2e-2d8a494971b5)

### Funcionamiento de parte 2: 

celsius a farenheit:

![image](https://github.com/user-attachments/assets/d9f5461a-e733-40fd-a73b-1a441492be29)

farenheit a celsius:

![image](https://github.com/user-attachments/assets/71e68022-7ad6-4877-8788-6ed080cb6ea0)






---
