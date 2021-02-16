function miregistro() {

    var usuario = document.getElementById('inputUser');
    var correo = document.getElementById('inputEmail');
    var contra1 = document.getElementById('inputPassword');
    var contra2 = document.getElementById('inputREPassword');
    var modal = document.getElementById("modalavi");
    var modal1 = document.getElementById("modalusuario");
    var span2 = document.getElementById("closeusu");
    var span3 = document.getElementById("closeusu1");
    var span1 = document.getElementsByClassName("close")[0];
    var span = document.getElementsByClassName("btn btn-primary")[0];
    var modal2 = document.getElementById("modalmail");
    var span4 = document.getElementById("closemail");
    var span5 = document.getElementById("closemail1");
    var modal3 = document.getElementById("modalcontra");
    var span6 = document.getElementById("closecontra");
    var span7 = document.getElementById("closecontra1");
    var modal4 = document.getElementById("modalultimo");
    var span8 = document.getElementById("closeultimo");
    var span9 = document.getElementById("closeultimo1");




    const regex = /^[a-zA-Z0-9_-]{5,10}$/; // Usuario Letras y numeros entre 5 a 10
    const validation = usuario.value.match(regex);
    console.log(validation);
    if (validation == null) {
        modal1.style.display = "block"


        span2.onclick = function() {
            modal1.style.display = "none";
        }

        span3.onclick = function() {
            modal1.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    } else {
        const regex3 = /\b[\w.!#$%&*+\/=?{|}-]+@[w\-]+(?:\.[\w]+)+\b/; //Correo con estrutura email@email.com
        const validation3 = correo.value.match(regex3);
        console.log(validation3);
        if (validation3 == null) {
            modal2.style.display = "block"


            span4.onclick = function() {
                modal2.style.display = "none";
            }

            span5.onclick = function() {
                modal2.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
            }
        } else {
            const regex1 = /(?=^.{5,}$)(^[a-z])((?=.*)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[|"!@$%&\/\(\)\?\'\\\+\-\*]))^.*/; //Contraseña: 1 Minuscula, 1 Mayuscula, 1 numero y entre 5 a 15 caracteres
            const validation1 = contra1.value.match(regex1);
            console.log(validation1);
            if (validation1 == null) {
                modal3.style.display = "block"


                span6.onclick = function() {
                    modal3.style.display = "none";
                }

                span7.onclick = function() {
                    modal3.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal3) {
                        modal3.style.display = "none";
                    }
                }

            } else {


                if (contra1.value != contra2.value) {
                    modal.style.display = "block"


                    span1.onclick = function() {
                        modal.style.display = "none";
                    }

                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                } else {
                    modal4.style.display = "block"


                    span8.onclick = function() {
                        modal4.style.display = "none";
                        location.reload();
                    }

                    span9.onclick = function() {
                        modal4.style.display = "none";
                        location.reload();
                    }

                    window.onclick = function(event) {
                        if (event.target == modal4) {
                            modal4.style.display = "none";
                            location.reload();
                        }
                    }

                }
            }

        }

    }
}