<div id="content">

    <?php slot('titulo') ?> 
        <?php echo $contacto->getNombre() . " " . $contacto->getPrimer_apellido() . " " . $contacto->getSegundo_apellido(); ?> 
    <?php end_slot() ?>

    <h3><img src="/images/Information 4.png" width="50" align="absmiddle" />Detalle de un contacto</h3>
    
    <?php include_partial('agenda/detalle', array('item' => $contacto)); ?>

    <?php include_component('agenda', 'direccionOtras', array('item' => $contacto)); ?>
    
</div>

