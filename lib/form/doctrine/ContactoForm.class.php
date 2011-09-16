<?php

/**
 * Contacto form.
 *
 * @package    agenda.symfony
 * @subpackage form
 * @author     Luis Trapero
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactoForm extends BaseContactoForm
{
  public function configure()
  {
      unset(
        $this['visitas']
      );
      
      $this->setWidgets(array(
          'nombre'              => new sfWidgetFormInputText(),
          'primer_apellido'     => new sfWidgetFormInputText(),
          'segundo_apellido'    => new sfWidgetFormInputText(),
          'imagen'              => new sfWidgetFormInputFile(),
      ));
      
      $this->setValidators(array(
          'nombre'             => new sfValidatorString(
          array(
              'min_length' => 2, 'max_length' => 255,),
          array(
               'min_length' => 'No se permite menos de 2 letras.',
               'max_length' => 'No se permite más de 255 letras.',
               'required'   => 'Campo obligatorio.',
               'invalid'    => 'Campo no válido.',
          )),
                      
          'primer_apellido'    => new sfValidatorString(
          array(
              'min_length' => 2, 'max_length' => 255,),
          array(
               'min_length' => 'No se permite menos de 2 letras.',
               'max_length' => 'No se permite más de 255 letras.',
               'required'   => 'Campo obligatorio.',
               'invalid'    => 'Campo no válido.',
          )),
          
          'segundo_apellido'   => new sfValidatorString(
          array(
               'required' => false,
          )),
          
          'imagen' => new sfValidatorFile(
	   array(
                'required'   => false,
                'path'       => sfConfig::get('sf_upload_dir').'/assets',
                'mime_types' => 'web_images',
           )	
	),
         
      ));
      
      $this->widgetSchema->setNameFormat('contacto[%s]');
  }
}