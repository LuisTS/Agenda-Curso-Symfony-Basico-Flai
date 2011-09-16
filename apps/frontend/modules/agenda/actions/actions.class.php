<?php

/**
 * agenda actions.
 *
 * @package    agenda.symfony
 * @subpackage agenda
 * @author     Luis Trapero
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class agendaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {   
      $this->contactos = Doctrine::getTable('Contacto')->
              getMasConsultados( sfConfig::get('app_max_consultados') );
  }
  
    /**
  * Executes busqueda action
  *
  * @param sfRequest $request A request object
  */
  public function executeBusqueda(sfWebRequest $request)
  {
      $letra = $request->getParameter('letra');
      $this->letra = $letra;
      
      # Para la paginación utilizamos la clase sfDoctrinePager #
      $this->pager = new sfDoctrinePager('Contacto', sfConfig::get('app_max_busqueda'));
      $this->pager->getQuery()->from('Contacto c')->where("c.primer_apellido LIKE '$letra%'");
      $this->pager->setPage($this->getRequestParameter('page',1));
      $this->pager->init();
  }
  
  /**
  * Executes detalle action
  *
  * @param sfRequest $request A request object
  */
  public function executeDetalle(sfWebRequest $request)
  {
      $this->contacto = $this->getRoute()->getObject();
      
      # Incrementamos el número de visitas #
      $this->contacto->incrementaVisita();
  }
    
  /**
  * Executes crear action
  *
  * @param sfRequest $request A request object
  */
  public function executeCrear(sfWebRequest $request)
  {
      $this->form = new ContactoForm();
      
      if ($request->isMethod('post') && 
              $this->form->bindAndSave( $request->getParameter('contacto'), $request->getFiles('contacto')) )
      { 
          # op1. Redirigimos a la página de editar #
          $this->redirect('editar', $this->form->getObject());
          
          # op2. Redirigimos a la página de búsqueda por índice #
          /*
          // Recibimos array con todos los datos del formulario
          $datos = $request->getParameter('contacto');
          
          // Extraemos la primera letra del primer apellido
          $letra = substr($datos['primer_apellido'],0,1);
          
          // Redireccionamos a una búsqueda por la letra del nuevo contacto
          $this->redirect('@busqueda_contacto?letra='.$letra);
          */
      }
  }
  
  
  /**
  * Executes editar action
  *
  * @param sfRequest $request A request object
  */
  public function executeEditar(sfWebRequest $request)
  {
    
    $this->contacto = $this->getRoute()->getObject();
    $this->form     = new ContactoForm( $this->contacto );
 
    if ($request->isMethod('post')) //if($request->getMethod() == sfRequest::POST)
    {
      $this->form->bind( $request->getParameter('contacto'), $request->getFiles('contacto') );
      if ($this->form->isValid())
      {
        $contacto = $this->form->save();
 
        //$this->redirect('@busqueda_contacto?letra=');
      }
    }
  }
  
  
  /**
  * Executes borrar action
  *
  * @param sfRequest $request A request object
  */
  public function executeBorrar(sfWebRequest $request)
  {
    $contacto = $this->getRoute()->getObject();
    
    // Borramos todas las direcciones del contacto
    $contacto->deleteDirecciones( $contacto->getId() );
        
    // Borramos el contacto
    $contacto->delete();
    
    //$this->redirect('busqueda_todos');
    
  }
 
  
  /**
  * Executes autor action
  *
  * @param sfRequest $request A request object
  */
  public function executeAutor()
  {
      
  }
  
  
}
