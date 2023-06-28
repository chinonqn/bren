<?php
/*DECLARAMOS VARIABLES DE LOS VALORES QUE INGRESAMOS EN EL FORMULARIO*/
$fecha = $_POST['fecha']; /*VARIABLE RELACIONADA A LA FECHA SELECCIONADA*/
$nombre = $_POST['nombre']; /*VARIABLE RELACIONADA AL NOMBRE INGRESADO*/
$impuesto = $_POST['provincia']; /*VARIABLE RELACIONADA A LA PROVINCIA SELECCIONADA, LO QUE NOS DARA EL VALOR DEL IMPUESTO*/


$op_codigo = $_POST['codigo']; /*VARIABLE RELACIONADA AL PRIMER CODIGO INGRESADO*/
$op_descripcion = $_POST['descripcion']; /*VARIABLE RELACIONADA A LA PRIMERA DESCRIPCION INGRESADA*/
$op_cantidad = $_POST['cantidad']; /*VARIABLE RELACIONADA A LA PRIMERA CANTIDAD INGRESADA*/
$op_precio = $_POST['precio']; /*VARIABLE RELACIONADA AL PRIMER PRECIO INGRESADO*/

$op1_codigo = $_POST['codigo1']; /*VARIABLE RELACIONADA AL SEGUNDO CODIGO INGRESADO*/
$op1_descripcion = $_POST['descripcion1']; /*VARIABLE RELACIONADA A LA SEGUNDA DESCRIPCION INGRESADA*/
$op1_cantidad = $_POST['cantidad1']; /*VARIABLE RELACIONADA A LA SEGUNDA CANTIDAD INGRESADA*/
$op1_precio = $_POST['precio1']; /*VARIABLE RELACIONADA AL SEGUNDO PRECIO INGRESADO*/

$precio_total1 = $op_precio * $op_cantidad; /*VARIABLE RELACIONADA A LA MULTIPLICACION DEL PRIMER PRECIO Y CANTIDAD*/
$precio_total2 = $op1_precio * $op1_cantidad; /*VARIABLE RELACIONADA A LA MULTIPLICACION DEL SEGUNDO PRECIO Y CANTIDAD*/

$precio_neto = $precio_total1 + $precio_total2;

if ($impuesto == 10) /*UTILIZAMOS EL == PARA REALIZAR UNA COMPARACION DE VALORES ENTRE EL IMPUESTO ELEGIDO EN EL FORMULARIO CON LA OPERACION REALIZADA EN PHP */
    { /*USAMOS METODO IF ELSE PARA LA ELECCION DE LOS IMPUESTOS DE CADA PROVINCIA*/
        $impuesto_total = $precio_neto * 0.10 ;
    }
        else if ($impuesto == 20)
        {
                $impuesto_total = $precio_neto * 0.20 ;
            }  
                else if ($impuesto == 30)
                    {
                        $impuesto_total = $precio_neto * 0.30 ;
                    }   
$total_final = $impuesto_total  + $precio_neto;

/*EN ESTE CASO, SEGUN PUDE SEGUIR INVESTIGANDO, ERA PREFERIBLE USAR EL SIGUIENTE CODIGO CON SWITCH, CASE Y BREAK:

switch ($impuesto) 
    { 
        case 10:
            $impuesto_total = $precio_neto * 0.10;
        break;
            case 20:
                $impuesto_total = $precio_neto * 0.20;
            break;
                case 30:
                    $impuesto_total = $precio_neto * 0.30;
                break;
    }
    Es lo mismo que usar un IF/ELSE IF pero queda mas prolijo a la hora de leerlo y mas cuando tenemos mas condicionales https://www.youtube.com/watch?v=Cywj2rx2AMc */
?>
<html>
    <head>
        <title>Trabajo Integrador</title>
        <meta charset="utf8">
    </head>
    <body>
        <fieldset> <!-- EL FIELDSET CREA GRUPO DE CAMPOS O ENCUADRE -->
            Trabajo Practico Integrador - JTP: Ruben Aybar - Comision N°3 - Alumno: Nicolas Ezequiel Gaitan
        </fieldset>
        <fieldset><!-- EL FIELDSET CREA GRUPO DE CAMPOS O ENCUADRE -->
        <table>  <!-- CON EL TABLE CREAMOS LA TABLA PARA QUE LAS OPCIONES QUEDEN ORGANIZADAS -->
            <td><input class="celda" disabled value="<?php echo $fecha ?>"></td>  <!-- USAMOS CODIGO HTML + PHP PARA TRAER LOS RESULTADOS DEL FORMULARIO, EN PHP DENTRO DEL MISMO FORMULARIO HTML CON REFORMA DE ESTILO https://www.youtube.com/watch?v=iVtmzW-rkvg -->
            <td><input class="celda" disabled value="<?php echo $nombre ?>"></td>
            <td> <p>Impuesto selccionado: </p> <input class="celda" disabled value="<?php echo $impuesto ?>"></td>
        </table>
        </fieldset>
        <fieldset><!-- EL FIELDSET CREA GRUPO DE CAMPOS O ENCUADRE -->
            <table>     
                <tr>
                    <th>Codigo:</th>
                    <th>Descripcion:</th>
                    <th>Cantidad:</th>
                    <th>Precio: </th>
                </tr>
            </table>
            <table> 
                <tr>    
                    <td><input type="number" class="celda" min="0" max="100" disabled value="<?php echo $op_codigo ?>"></td>
                    <td><input type="text" class="celda" disabled value="<?php echo $op_descripcion ?>"></td>
                    <td><input type="number" class="celda" disabled min="0" max="1000" value="<?php echo $op_cantidad ?>"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $op_precio ?>"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $precio_total1 ?>"></td>
                </tr>   
                <tr>
                    <td><input type="number" class="celda" min="0" max="100" disabled value="<?php echo $op1_codigo ?>"></td>
                    <td><input type="text" class="celda" disabled value="<?php echo $op1_descripcion ?>"></td>
                    <td><input type="number" class="celda" disabled min="0" max="1000" value="<?php echo $op1_cantidad ?>"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $op1_precio ?>"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $precio_total2 ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" class="celda" disabled value="Neto"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $precio_neto ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" class="celda" disabled value="Impuestos"></td>
                    <td><input type="number" class="celda" disabled value="<?php echo $impuesto_total ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" class="form-control" disabled value="Total"></td>
                    <td><input type="text" class="form-control" disabled value="<?php echo $total_final ?>"></td>
                </tr>
            </table>
            <br>
            <input type="button" onclick="history.back()" name="Volver atrás" value="volver atrás">
        </fieldset>
    </body>
</html>