<?php

    //COMO FUNCIONA EL CONDICIONAL "SWITCH"
    // ES SIMILAR AL IF PERO NO SE PUEDEN USAR OPERADORES LOGICOS Y DE COMPARACIÓN NI ARITMETICOS
    //FUNCIONA COMO OPCIONES PARA ENTRAR, SALIR Y BREAKS
    //EJEMPLO 1
    $usuario = (string) 'Jhon';// asignamos a la variable usuario el string Jhon
    switch ($usuario) {
        case 'Thomas':// como no es jhon continuará
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Juan Diego':// como no es jhon continuará
            print_r(AccesoCorrecto($usuario));
            break;
        case 'Jhon':// como es jhon entrará aca 
            print_r(AccesoCorrecto($usuario));// aca llama a la función decllarada mas adelante
            break;
        default:// siempre debe llevar un default
            print_r(AccesoDenegado($usuario)); // aca llama a la función decllarada mas adelante
            break;
            }
    function AccesoCorrecto($usu){//
        return (string) <<<FIN
            El usuario $usu tiene permiso de entrar al Discord
FIN;
            }
    function AccesoDenegado($usu){
        return (string) <<<FIN
            El usuario $usu no tiene permiso de ingresar al Discord
FIN;
            }


    //EJEMPLO 2
    $ListaNombres = (array) ["Jhon","Oscar"]; // ejemplo para el caso de arrays
    switch ($ListaNombres) {
        case "Oscar":
                print_r("Oscar");
            break;
        case "Jhon":
                print_r("Jhon");
            break;
        case ["Jhon","Oscar"]:
                print_r("Hola a todos ");
            break;
        default:
        print_r("Identifiquese Correctamente Por Favor");
            break;
}

/*
for ($i=0; $i < ; $i++) { esto se genera escribiendo la primer palabra y seleccionando la del cuadrito
    # code...
}*/

    //COMO FUNCIONA EL CICLO "FOR"
    //EJEMPLO 1
    // $i=0; una variable que se inicializa
    // $i < 10 una expresión que siempre deberá ser True, si es False se sale del ciclo
    // $i++ es un operador de post incremento, es decir, primero hace el ciclo y despues auenta 1 a i
    for ($i=0; $i < 10; $i++) { 
        $cadena = <<<FIN
        $i <br> 
FIN;// asignará a la variable $cadena el valor que toma $i con cada recorrido 0 1 2 3 4 5 6 7 8 9 10
            print_r($cadena); //mostrará en pantalla 0 1 2 3 4 5 6 7 8 9 10
            goto CICLOFOR;
        }
    CICLOFOR: //Esto es un "label" Sirve para definir y llamar al Ciclo 


    //EJEMPLO 2
    
    for ($N=0; $N < 10; $N++) { 
        $NUMERO = <<<FIN
        $N <br>
FIN;
        if($N==3){
            print_r($NUMERO);
            goto ciclos; // aca se dirige al label ciclos
            //break aca para cuando la condición se cumple
            //continue aca sigue si la condición de cumple
        }
        
         
    }
    ciclos: // aca continua el ciclo for despues del goto
    for ($x=0; true;) { 
        print_r("Esto es el segundO Ciclo $x <br>");
        break;
    }


    //EJEMPLO 3
    $i=0;

    ciclos2:
    for ($u; $u <= 10;) { 
        $cadena2 = <<<FIN
        $u <br>
FIN;
        print_r($cadena2);
        ++$u;
        goto ciclos2;
    }


    //COMO FUNCIONA EL "FOR EACH"
    $lista = (array) ["Miguel", "Thomas", "William"]; // aca se define el contenido del array

    foreach ($lista as $key => $value) {
        // la variable sería la lista a recorrer
        // las keys son las posiciones de la lista del array
        // el value es el valor que está en la posición de esa lista
        $cadena = (string) <<<FIN 
        $value <br>
FIN;// almacenamos la información de los values del array en la variable cadena
        print_r($cadena); // imprimiría los tres nombres
    }
    
//EJEMPLO SELECCIONANDO UN ITEM

    $lista = (array) ["Miguel", "Thomas", "William"]; // aca se define el contenido del array

    foreach ($lista as $key => $value) {
        // la variable sería la lista a recorrer
        // las keys son las posiciones de la lista del array
        // el value es el valor que está en la posición de esa lista
        $cadena = (string) <<<FIN 
        $key : $lista[$key] <br>
FIN;// almacenamos la información de los values del array en la variable cadena
 if($key==3) {
        print_r($cadena); // imprimiría  a william
        break;
             }
    }
?>