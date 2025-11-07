$(document).ready(function() {
    console.log("Archivo validaciones.js cargado correctamente.");

    // Detectar envío de formularios
    $("form").on("submit", function(e) {
        let camposVacios = [];
        
        // Recorremos todos los inputs y selects del formulario
        $(this).find("input, select, textarea").each(function() {
            let valor = $(this).val().trim(); // eliminamos espacios
            let idCampo = $(this).attr("id");

            // Si el campo está vacío
            if (valor === "" || valor === null) {
                // Buscar label asociado al campo
                let label = $("label[for='" + idCampo + "']").text();
                camposVacios.push(label);
            }
        });

        // Si hay campos vacíos
        if (camposVacios.length > 0) {
            e.preventDefault(); // detiene el posteo

            let mensaje = "Los siguientes campos no pueden estar vacíos:\n\n";
            mensaje += camposVacios.join("\n");
            mensaje += "\n\nAtentamente: Elías Escalante.";

            alert(mensaje);
        }
    });
});
