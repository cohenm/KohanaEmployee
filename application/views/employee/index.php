<table id ="lista">
   <tr>
        <th style="width:150px">Imię</th>
        <th style="width:150px">Nazwisko</th>
        <th style="width:150px">Stanowisko</th>
        <th style="width:150px">PESEL</th>
		<th style="width:100px;text-align: center">Edycja</th>
        <th style="width:100px;text-align: center">Usuń</th>
		
   </tr>
<?php foreach($employee as $key => $value): ?>
    <tr>
        <td><?php echo $value['imie'] ?></td>
        <td><?php echo $value['nazwisko'] ?></td>
		<td><?php echo $value['stanowisko'] ?></td>
		<td><?php echo $value['pesel'] ?></td>
		<td style="text-align: center"><?php echo html::anchor('employee/edit/'.$value['id'],'Edytuj') ?></td>
        <td style="text-align: center"><?php echo html::anchor('employee/delete/'.$value['id'],'Usuń') ?></td>
    </tr>
<?php endforeach; ?>
</table>
