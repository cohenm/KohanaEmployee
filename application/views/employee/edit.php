<h2>Edytuj Pracownika</h2>

<?php if(isset($success)):?>
<h1 style="color:green"><?php echo $success ?></h1>
<?php endif ?>


<?php echo form::open() ?>
<dl>          
    <dt>Imię:</dt>
    <dd><?php echo Form::input('imie',(isset($employee['imie']))?$employee['imie']:'' ); ?></dd>
	<span class="msg" style="color:red"><?php if(isset($error['imie'])) echo $error['imie']; ?></span>

    <dt>Nazwisko:</dt>
    <dd><?php echo Form::input('nazwisko',(isset($employee['nazwisko']))?$employee['nazwisko']:'' );?></dd>
	<span class="msg" style="color:red"><?php if(isset($error['nazwisko'])) echo $error['nazwisko']; ?></span>
    
    <dt>Stanowisko:</dt>
    <dd><?php echo Form::input('stanowisko',(isset($employee['stanowisko']))?$employee['stanowisko']:'' );?></dd>
	<span class="msg" style="color:red"><?php if(isset($error['stanowisko'])) echo $error['stanowisko']; ?></span>

    <dt>PESEL:</dt>
    <dd><?php echo Form::input('pesel',(isset($employee['pesel']))?$employee['pesel']:'' );?></dd>
	<span class="msg" style="color:red"><?php if(isset($error['pesel'])) echo $error['pesel']; ?></span>

    <dt></dt>
    <dd><?php echo Form::submit('', 'zmien') ?></dd>
</dl>
<?php echo form::close() ?>
