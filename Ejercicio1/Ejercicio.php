<?php

/**
  * Valida que se haya ingresado un valor
  *
  * @param [type] $valor
  * @return bool True si se ingresó un valor False en caso contrario
  */
function requerido($valor)
{
    $trimmedValue = trim($valor);
    return isset($trimmedValue) && $trimmedValue !== "";
}

/**
 * Valida que el valor se encuentre dentro de la lista especificada
 * @param mixed $valor Valor que se debe validar
 * @param array $set Lista de valores donde se desea buscar el valor
 *
 * @return True si el valor se encuentra en la lista, False en caso contrario
 */

/**
 * Valida que el valor se encuentre dentro de la lista especificada
 *
 * @param [type] $valor
 * @param array $set Lista de valores donde se desea buscar el valor
 * @return void
 */
function enLista($valor, $set = [])
{
    return in_array($valor, $set);
}


/**
 * Valida la longitud de una cadena, de acuerdo a la opción
 * especificada en el segundo parametro
 *
 * Ejemplos:
 * longitud($curp, ['exacto' => 18])
 * longitud($nombre, ['min' => 5, 'max' => 100])
 *
 * @param mixed $valor Valor que se debe validar
 * @param array $opciones Arreglo para especificar opciones 'exacto', 'min', 'max' (obligatorio especificar)
 * @return True si el valor cumple con la longitud, False en caso contrario
 */
function longitud($valor, $opciones)
{
    if (isset($opciones['max']) && (strlen($valor) > (int)$opciones['max'])) {
        return false;
    }
    if (isset($opciones['min']) && (strlen($valor) < (int)$opciones['min'])) {
        return false;
    }
    if (isset($opciones['exacto']) && (strlen($valor) != (int)$opciones['exacto'])) {
        return false;
    }
    return true;
}

/**
 * Valida que el valor cumpla con el formato especificado en la expresion regular
 *
 *
 * @param mixed $valor Valor que se debe validar
 * @param string $regex Expresion regular contra la que se desea validar
 *
 * @return True si el valor cumple con la expresion regular, False en caso contrario
 */
function formato($valor, $regex = '//')
{
    return preg_match($regex, $valor);
}

/**
 * Valida que el valor sea un número entero
 *
 * @param mixed $valor Valor que se debe validar
 * @param array $opciones Arreglo para especificar opcionalmente 'min' y 'max'
 *
 * @return True si el valor es un numero entero y cumple las especificaciones, False en caso contrario
 */
function numeroEntero($valor, $opciones = [])
{
    if (!is_numeric($valor)) {
        return false;
    }
    if (isset($opciones['max']) && ($valor > (int)$opciones['max'])) {
        return false;
    }
    if (isset($opciones['min']) && ($valor < (int)$opciones['min'])) {
        return false;
    }
    return true;
}

/**
 * Valida los datos que se reciben del formulario de registro de nuevo usuario
 *
 * @param  [array] $data Datos a validar del formulario de registro
 * @return bool True si los datos están bien, false en caso contrario
 */
function validateForm($data)
{

    //Se valida que los datos no esten vacios
    foreach ($data as $key => $value) {
        if (empty($value)) {
            return false;
        }
    }

    //Se revisa que sea un email valido
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

?>
