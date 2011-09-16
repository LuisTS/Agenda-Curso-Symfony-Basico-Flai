<div id="content">

    <?php slot('titulo') ?> Editar Contacto <?php end_slot() ?>

    <h3><img src="/images/Expand Alt.png" width="50" align="absmiddle" />Editar Contacto</h3>

    <div>
        <ul><li>
        <div class="case">
            <form action="<?php echo url_for('editar', $contacto); ?>" method="POST" enctype="multipart/form-data">
                <?php include_partial('agenda/form', array('form' => $form, 'contacto' => $contacto)); ?>
        </div>
        </li></ul>
    </div>
       
</div>
