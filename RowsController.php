<?php
namespace Drupal\rows\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

class RowsController extends ControllerBase {

    #Funció encarregada d'imprimir per pantalla el número de files entrat en el formulari
    public function rows($numero) {
        #Creació d'un header per tenir un encapçalament que informarà del número de files imprès
      $header = [
        'col1' => t('Impressió de ' .$numero. ' files'),
      ];

      #Definició d'un array i un bucle per la creació de les files, la variable número de la funció
        #pública és la que hem definit anteriorment en el formulari
      $rows=array();
      for($i=1;$i<=(int)$numero;$i++) {
        array_push($rows,array((string)$i));
      }
      #Canviat el retorn de la funció a un tipus table (el markup no és adient en la demanda de l'exercici)
        #Imprimim en el return el header i l'array de rows en el que hi tenim les files demanades
      return [
        '#type' => 'table',
        '#header' => $header,
        '#rows' => $rows,
      ];
    }

}
