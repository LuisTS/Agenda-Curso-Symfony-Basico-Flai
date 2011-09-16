<?php

/**
 * Direccion filter form base class.
 *
 * @package    agenda.symfony
 * @subpackage filter
 * @author     Luis Trapero
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDireccionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'direccion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'          => new sfWidgetFormFilterInput(),
      'telefono'       => new sfWidgetFormFilterInput(),
      'info_adicional' => new sfWidgetFormFilterInput(),
      'predeterminado' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'contacto_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Contacto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'info_adicional' => new sfValidatorPass(array('required' => false)),
      'predeterminado' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'contacto_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Contacto'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('direccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Direccion';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'direccion'      => 'Text',
      'email'          => 'Text',
      'telefono'       => 'Text',
      'info_adicional' => 'Text',
      'predeterminado' => 'Boolean',
      'contacto_id'    => 'ForeignKey',
    );
  }
}
