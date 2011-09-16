    <div id="dosColumnas">
        <ul>
        <?php foreach ($item as $contacto): ?>
            <li>
                <div class="case">
                    <a href="<?php echo url_for('detalle_contacto', $contacto); ?>">
                    <img src="/uploads/assets/<?php echo $contacto->getImagen(); ?>" 
                         alt="<?php echo $contacto->getNombreCompleto(); ?>" width="100" class="img1" />
                    </a>
                    <p>
                        <a href="<?php echo url_for('detalle_contacto', $contacto); ?>">
                            <?php echo $contacto->getNombreCompleto(); ?>
                        </a>
                    </p>
                        
                    <p>   
                        <?php foreach( $contacto->getDireccionPredeterminada() as $direccion ): ?>
                            <?php echo $direccion->getEmail(); ?><br>
                            <?php echo $direccion->getTelefono(); ?>
                        <?php endforeach; ?>
                    </p>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>        
    </div>