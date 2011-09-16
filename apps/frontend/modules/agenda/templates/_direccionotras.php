    <div id="direccionesColumna">    
        <ul><li>
                <h3><img src="/images/Information 4.png" width="50" align="absmiddle" />Otras direcciones:</h3>

                <div class="case">
                    <?php foreach ( $direcciones as $direccion ): ?>
                         <p>
                         Correo electrónico: <?php echo $direccion->getEmail(); ?><br>
                         Dirección.............: <?php echo $direccion->getDireccion(); ?><br>
                         Teléfono..............: <?php echo $direccion->getTelefono(); ?><br>
                         Otra información..: <?php echo $direccion->getInfo_adicional(); ?>
                         </p>
                    <?php endforeach; ?>
                </div>
            <li></ul>
    </div>