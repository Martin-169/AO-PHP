# AO-PHP

# Gestor de Tareas en PHP (por consola)

Este proyecto es un **gestor de tareas básico hecho en PHP**.
Permite **añadir, listar, editar y eliminar tareas**, todo desde la terminal (sin navegador ni base de datos).

---

## ¿Qué hace este programa?

Este programa te deja gestionar una lista de tareas pendientes o completadas.

Cada tarea tiene:
- Un **ID** (número automático)
- Un **título**
- Una **descripción**
- Una **fecha de vencimiento**
- Un **estado**: completada o pendiente

Toda la información se guarda en un archivo llamado `data.json`,  
así que las tareas no se pierden aunque cierres el programa.

---
## Usarlo
Para usar el gestor primero descarga toda la carpeta, descrompimela y abre Visual Studio Code y abrelo con la carpeta.
Tiene varios .php cada uno con una utilidad diferente.


## Añadir
Para añadir una tarea, escribe en la consola de Visual Studio Code:
**php add.php**
Al escribirlo te mostrara en la terminal el titulo del php de añadir y deberas escribir la informacion de la tarea, tal como el titulo, descripcion, fecha y si esta completada o no, en el ultimo paso te dira que escribas 1 para no y 2 para si, **Debes escribir 1 para decir que no y 2 para decir que si esta completada**.
Despues de escribirlo te mostrara la tarea listada y guardada en el archivo data.json, si lo ves ya habras creado la tarea bien.

---

## Editar
Si quieres editar alguna tarea creada deberas abrir terminal y escribir:
**php edit.php**
Al lanzarlo te mostrara un mensaje pidiendote el id de la tarea que quieres editar, escribe el id y acto seguido podras editar toda la tarea mostrandote aparte lo que escribiste antes en la misma tarea. 

---

## Eliminar
Si quieres eliminar una tarea escribe en la termina:
**php delete.php**
Al lanzarlo te aparecera un mensaje pidiendote el id de la tarea que quieres eliminar, al escribirlo te pedira confirma si quieres eliminar la tarea. Te pedira decir 1 para denegar la eliminación o 2 para confirmarlo, **Escribe 1 o 2 porfavor, sino no podras eliminarlo**

---

## Listar
Si quieres enseñar todo lo que tienes guardado en data.json escribe en la terminal:
**php list.php**
Al lanzarlo te preguntara si quieres ver solo las completadas o no, deberas escribir 1 para no mostrar solo las completadas o 2 para ver solo las completadas.
Al elegir una de las dos opciones te saldra primero la lista separada solo por las completadas (si has elegido ver solo las completadas) y una lista con todas las taread guardadas en data.json.
