<?php

/**
 * Direccion form base class.
 *
 * @method Direccion getObject() Returns the current form's model object
 *
 * @package    agenda.symfony
 * @subpackage form
 * @author     Luis Trapero
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDireccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'direccion'      => new sfWidgetFormTextarea(),
      'email'          => new sfWidgetFormInputText(),
      'telefono'       => new sfWidgetFormInputText(),
      'info_adicional' => new sfWidgetFormTextarea(),
      'predeterminado' => new sfWidgetFormInputCheckbox(),
      'contacto_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Contacto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'direccion'      => new sfValidatorString(),
      'email'          => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'info_adicional' => new sfValidatorString(array('required' => false)),
      'predeterminado' => new sfValidatorBoolean(array('required' => false)),
      'contacto_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Contacto'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('direccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Direccion';
  }

}
