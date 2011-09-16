<div id="content">

    <?php slot('titulo') ?> Los + consultados <?php end_slot() ?>

    <h3><img src="/images/Expand Arrow.png" width="50" align="absmiddle" />Los + consultados</h3>

    <?php include_partial('agenda/listado', array('item' => $contactos)); ?>

</div>
