<?php
return array(
       'imie' => array(
           'not_empty'=>'Pole nie może pozostać puste',
       ),
       'nazwisko' => array(
           'not_empty'=>'Pole nie może pozostać puste',
       ),
       'stanowisko' => array(
           'not_empty'=>'Pole nie może pozostać puste',
       ),
       'pesel' => array(
           'not_empty'=>'Pole nie może pozostać puste',
           'numeric'=>'To pole musi zawierać wartość liczbową',
		   'min_length'=>'PESEL musi zawierać mieć długość 11 liczb',
		   'max_length'=>'PESEL musi zawierać mieć długość 11 liczb'
       ),
);
?>
