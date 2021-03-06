<?php

/**
 * DireccionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DireccionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object DireccionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Direccion');
    }
    
    public function findPredeterminadaDireccionById( $id )
    {
        $query = Doctrine_Query::create()
        ->select( "d.*" )
        ->from( "Direccion d" )
        ->where( "d.contacto_id = $id AND d.predeterminado = 1" )
        ;
 
        return $query->execute();
    }
    
    public function findOtrasDireccionesById( $id )
    {
        $query = Doctrine_Query::create()
        ->select( "d.*" )
        ->from( "Direccion d" )
        ->where( "d.contacto_id = $id AND d.predeterminado = 0" )
        ;
 
        return $query->execute();
    }
    
    public function deleteDireccionesById( $id )
    {
        $query = Doctrine_Query::create()
        ->delete()
        ->from( "Direccion" )
        ->where( "contacto_id = $id" )
        ;
 
        return $query->execute();
    }
}