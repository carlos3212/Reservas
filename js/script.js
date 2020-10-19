(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {
        //Variables a trabajar 
        let min = document.getElementById('min');
        let max = document.getElementById('max');
        let num_adulto = document.getElementById('adultos');
        let num_niño = document.getElementById('niños');
        let op_precios = document.getElementById('precio_ob'); //Boton precios
        let lista_precios = document.getElementById('precios'); //bloque que contiene los datos a presentar
        var estado = false;
        let validar = document.querySelectorAll('.error')[0]; //Obtiene el campo de error
        let validar1 = document.querySelectorAll('.error')[1];
        let validar2 = document.querySelectorAll('.error')[2];
        let obtener_precios = document.getElementById('obtener'); //boton para obtener los datos
        let buscar_op = document.getElementById('buscar'); //caja de texto de buscar
        let btn_buscar = document.getElementById('btn_buscar'); //Obtener el boton buscar 
        let principal = document.querySelector('.principal'); //Obtener la clase principal
        let cotizador = document.getElementById('datos_cotizar'); //Obtener el cotizador
        let btn_cotizar = document.getElementById('cotizar_ob'); //Control del boton cotizar
        let nombre = document.getElementById('nombre');
        let ciudad = document.getElementById('ciudad');;
        let email = document.getElementById('email');;
        let op_picina = document.getElementById('picina');;
        let op_parqueadero = document.getElementById('parqueadero');;
        let op_wifi = document.getElementById('wifi');
        let btn_enviar = document.getElementById('enviar');
        //Acciones a recibir 
        //Evento con clic para botones 


        op_precios.addEventListener('click', function() {
            comportamientoSidebar('precios');
        });

        btn_buscar.addEventListener('click', function() {
            comportamientoSidebar('busqueda');
        });

        /*  btn_cotizar.addEventListener('click', function() {
              comportamientoSidebar('datos_cotizar');

          })*/
        btn_enviar.addEventListener('click', enviarDatos);

        //btn_cotizar.addEventListener('click', comportamientoSidebar('cotizar_ob'))
        //Eventos con blur para text
        min.addEventListener('blur', validarCampos);
        max.addEventListener('blur', validarCampos);
        num_adulto.addEventListener('blur', validarCampos);
        max.addEventListener('blur', relacionMinMax);
        buscar_op.addEventListener('blur', validarTexto);

        obtener_precios.addEventListener('click', obtener);

        nombre.addEventListener('blur', validarCamposCT);
        ciudad.addEventListener('blur', validarCamposCT);
        email.addEventListener('blur', validarCamposCT);
        email.addEventListener('blur', validarCorreo);
        //funciones


        function validarCampos() {
            if (this.value == "") {
                validar.style.display = 'block';
                validar.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                validar.style.border = '1px solid red';
            } else {
                validar.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarCamposCT() {
            if (this.value == "") {
                validar2.style.display = 'block';
                validar2.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                validar2.style.border = '1px solid red';
            } else {
                validar2.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarCorreo() {
            if (this.value.indexOf('@') > -1) {
                validar2.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                validar2.style.display = 'block';
                validar2.innerHTML = "No es un correo válido";
                this.style.border = '1px solid red';
                validar2.style.border = '1px solid red';

            }
        }

        function relacionMinMax() {
            if (parseInt(this.value) <= parseInt(min.value)) {
                validar.style.display = 'block';
                validar.innerHTML = "Este campo debe ser mayor que el mínimo";
                this.style.border = '1px solid red';
                validar.style.border = '1px solid red';
            } else {
                validar.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function obtener() {
            let datos = [min.value, max.value, num_adulto.value, num_niño.value];
            console.log(datos);
        }

        function validarTexto() {
            if (isNaN(this.value)) {
                validar1.style.display = 'none';
                this.style.border = '1px solid #cccccc'
            } else {
                validar1.style.display = 'block';
                validar1.innerHTML = "No se adminite números";
                this.style.border = '1px solid red';
                validar1.style.display = 'block';
            }
        }

        function comportamientoSidebar(id) {
            if (estado == true) {
                document.getElementById(id).style.display = 'block';
                estado = false
            } else {
                document.getElementById(id).style.display = 'none';
                estado = true;
            }
        }

        function enviarDatos() {
            let objetoDatos = {
                nombre,
                ciudad,
                email,
                preferencias: {
                    op_picina,
                    op_wifi,
                    op_parqueadero
                }
            }
            console.log(objetoDatos);
        }









    });

})();