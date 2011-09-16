<div id="content">

    <?php slot('titulo') ?> Nuevo Contacto <?php end_slot() ?>

    <h3><img src="/images/Expand Alt.png" width="50" align="absmiddle" />Nuevo Contacto</h3>
    
    <div>
        <ul><li>
        <div class="case">
            <?php echo $form->renderFormTag('crear') ?>
                <?php include_partial('agenda/form', array('form' => $form)); ?>
        </div>
        </li></ul>
    </div>
       
</div>