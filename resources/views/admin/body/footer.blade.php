<?php
$label = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septembre', 'Octubre', 'Noviembre', 'Diciembre'];
$month = $label[date('n')-1];
$year = date('Y');
$date = date('d')-1;
?>

<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">


        <p>{{ $date . ' ' . $month . ' ' . $year }} </p>
    </div>
    <div>&copy; 2024 - {{ $year }}<a href="#"> Sistema Educativo</a> | Proyect Ana E.</div>

</footer>
