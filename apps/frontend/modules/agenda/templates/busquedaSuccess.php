<div id="content">

    <?php slot('titulo') ?> Resultado de la búsqueda <?php end_slot() ?>

    <h3><img src="/images/Search.png" width="50" align="absmiddle" />Resultado de la búsqueda "<?php echo $letra?>"</h3>

    <!-- Incluimos el paginador -->
    <?php include_partial('agenda/paginador', 
            array('pager' => $pager, 'letra' => $letra)); ?>
    
    
    <?php include_partial('agenda/listado', array('item' => $pager->getResults())); ?>
    
    <!-- Incluimos el paginador -->
    <?php include_partial('agenda/paginador', 
            array('pager' => $pager, 'letra' => $letra)); ?>
    
</div>