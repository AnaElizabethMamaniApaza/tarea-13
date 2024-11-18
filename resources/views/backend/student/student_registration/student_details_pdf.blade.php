<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <table id="customers">
        <tr>
            <td>
                <h2>Sistema_Educativo_A</h2>
            </td>
            <td>
                <h2>--</h2>
                <p>Dirección de la Escuela"</p>
                <p>Teléfonos de la Escuela</p>
                <p>Correo Electrónico de la Escuela</p>
            </td>
            <td>
                <h2>---</h2>
                <p>Dirección de la Escuela</p>
                <p>Teléfonos de la Escuela</p>
                <p>Correo Electrónico de la Escuela</p>
            </td>
        </tr>

    </table>

    <table id="customers">
        <tr>
            <th width="10%">Nr.</th>
            <th width="45%">Detalles del Estudiante</th>
            <th width="45%">Datos del Estudiante</th>
        </tr>
        <tr>
            <td>1</td>
            <td><b>Nombre del Estudiante</b></td>
            <td>{{ $details['student']['name'] }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td><b>ID del Estudiante</b></td>
            <td>{{ $details['student']['id_no'] }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td><b>Código del Estudiante</b></td>
            <td>{{ $details['student']['code'] }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td><b>lista</b></td>
            <td>{{ $details->roll }}</td>
        </tr>
        <tr>
            <td>5</td>
            <td><b>género</b></td>
            <td>{{ $details['student']['gender'] }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td><b>religión</b></td>
            <td>{{ $details['student']['religion'] }}</td>
        </tr>
        <tr>
            <td>7</td>
            <td><b>fecha de nacimiento</b></td>
            <td>{{ $details['student']['birth'] }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td><b>Nombre del padre</b></td>
            <td>{{ $details['student']['father'] }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td><b>Nombre de la madre</b></td>
            <td>{{ $details['student']['mother'] }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td><b>Teléfono del estudiante</b></td>
            <td>{{ $details['student']['mobile'] }}</td>
        </tr>

        <tr>
            <td>11</td>
            <td><b>Dirección del estudiante</b></td>
            <td>{{ $details['student']['address'] }}</td>
        </tr>

        <tr>
            <td>12</td>
            <td><b>clase</b></td>
            <td>{{ $details['student_class']['name'] }}</td>
        </tr>

        <tr>
            <td>13</td>
            <td><b>Año de ingreso</b></td>
            <td>{{ $details['student_year']['name'] }}</td>
        </tr>

        <tr>
            <td>14</td>
            <td><b>carrera</b></td>
            <td>{{ $details['group']['name'] }}</td>
        </tr>

        <tr>
            <td>15</td>
            <td><b>Turno del estudiante</b></td>
            <td>{{ $details['shift']['name'] }}</td>
        </tr>

        <tr>
            <td>16</td>
            <td><b>Descuento de costo</b></td>
            <td>Rp. {{ $details['discount']['discount'] }}</td>
        </tr>

    </table>
    <br>
    <i style="font-size: 14px; float: right;">Fecha de impresión: {{ date('d M Y') }}</i>

</body>

</html>
