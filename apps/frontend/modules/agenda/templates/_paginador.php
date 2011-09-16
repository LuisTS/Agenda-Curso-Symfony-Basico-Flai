    <div id="paginadorColumna">    
        <ul><li>
        <p>
        Mostrando <?php echo $pager->getCurrentMaxLink() ?> resultado/s de 
        <strong><?php echo $pager->getNbResults() ?></strong> contacto/s.
        
                <?php if ($pager->haveToPaginate()): ?>
            - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong> -
        <?php endif; ?>
            
        <?php if ($pager->haveToPaginate()): ?>

            <?php echo link_to('<img src="/sf/sf_admin/images/first.png" alt="Página Inicial" align="absmiddle" />',
                    '@busqueda_contacto?letra='.$letra.'&page=1'); ?>

            <?php echo link_to('<img src="/sf/sf_admin/images/previous.png" alt="Página Anterior" align="absmiddle" />',
                    '@busqueda_contacto?letra='.$letra.'&page='.$pager->getPreviousPage()); ?>    

            <?php foreach ($pager->getLinks() as $page): ?>
              <?php if ($page == $pager->getPage()): ?>
                <?php echo $page ?>
              <?php else: ?>
                <?php echo link_to($page,
                    '@busqueda_contacto?letra='.$letra.'&page='.$page) ?> 
              <?php endif; ?>
            <?php endforeach; ?>

            <?php echo link_to('<img src="/sf/sf_admin/images/next.png" alt="Página Siguiente" align="absmiddle" />',
                    '@busqueda_contacto?letra='.$letra.'&page='.$pager->getNextPage()); ?> 

            <?php echo link_to('<img src="/sf/sf_admin/images/last.png" alt="Página Final" align="absmiddle" />',
                    '@busqueda_contacto?letra='.$letra.'&page='.$pager->getLastPage()); ?> 

        <?php endif; ?>    
        </p>
        </li></ul>
    </div>