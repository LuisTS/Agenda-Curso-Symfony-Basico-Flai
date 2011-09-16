<?php
class agendaComponents extends sfComponents
{
  public function executeDireccionOtras()
  {
    $contacto = $this->getVar( 'item' );
    $this->direcciones = Doctrine::getTable('Direccion')->findOtrasDireccionesById( $contacto->getId() );
  }

}