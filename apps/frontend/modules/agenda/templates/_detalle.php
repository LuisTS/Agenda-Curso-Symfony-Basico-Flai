    <div id="unaColumna">
        <ul><li>
            <div class="case">
                <img src="/uploads/assets/<?php echo $item->getImagen(); ?>" 
                     alt="<?php echo $item->getNombreCompleto(); ?>" width="200" class="img1" />
                <p>
                    <a href="<?php echo url_for('detalle_contacto', $item); ?>">
                        <?php echo $item->getNombreCompleto(); ?>
                    </a>
                </p>
                  
                <p>   
                     <?php foreach( $item->getDireccionPredeterminada() as $direccion ): ?>
                         Correo electrónico: <?php echo $direccion->getEmail(); ?><br>
                         Dirección.............: <?php echo $direccion->getDireccion(); ?><br>
                         Teléfono..............: <?php echo $direccion->getTelefono(); ?><br>
                         Otra información..: <?php echo $direccion->getInfo_adicional(); ?>
                     <?php endforeach; ?>
                </p>
                
                <p>
                    <a href="<?php echo url_for('editar', $item); ?>">Editar información</a>
                </p>
                
                <p>
                    <a href="<?php echo url_for('borrar', $item); ?>">Borrar</a>
                </p>
                
            </div>
        </li></ul>
    </div>