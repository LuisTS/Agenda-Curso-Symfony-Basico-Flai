              <table class="form" cellspacing="0">
                  <?php echo $form['nombre']->renderRow(array('size' => 35, 'class' => ''), 'Nombre:'); ?>
                  <?php echo $form['primer_apellido']->renderRow(array('size' => 35, 'class' => ''), 'Primer Apellido:') ?>
                  <?php echo $form['segundo_apellido']->renderRow(array('size' => 35, 'class' => ''), 'Segundo Apellido:') ?>
                  <?php echo $form['imagen']->renderRow(array('size' => 22, 'class' => ''), 'Foto:') ?> 
                  
                  <?php echo $form['_csrf_token']->renderError(); ?>
                  <?php echo $form['_csrf_token']; ?>

                  <tr>
                  <th colspan="2">
                    <input type="submit" value="Guardar" />
                  </th>

              </table>
            </form>

            <table class="form" cellspacing="0">
                <tr><td>
                    <?php if ($form->hasErrors()): ?>
                                El formulario contiene datos incorrectos. Por favor, revísalos.
                    <?php endif; ?>
                </td></tr>
            </table>