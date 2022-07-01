//gulp es para automatizar tareas
//cada tarea se llaman con una funcion

function tarea(callback) {
    console.log("mi primer tarea");

    callback();
}


exports.primerTarea = tarea;