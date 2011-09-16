<div id="container">
    <div id="logo">
        <a href="<?php echo url_for('homepage'); ?>" title="Agenda de contactos">
            <h1><span class="blue">Mi</span>Libreta <span class="blue">de</span> contactos</h1>
        </a>
    </div>
		 
    <div class="br"></div>

    <div id="navlist">
        <ul>
            <li><a href="<?php echo url_for('homepage'); ?>" title="Agenda de contactos" class="active">Inicio</a></li>
            
            <li><a href="<?php echo url_for('crear'); ?>" title="Nuevo Contacto">Nuevo Contacto</a></li>
            
            <li><a href="<?php echo url_for('autor'); ?>" title="Autor">Autor</a></li>
        </ul>
        <ul>
        
        <?php include_partial('agenda/alfabeto'); ?>
        
    </div>
    
    