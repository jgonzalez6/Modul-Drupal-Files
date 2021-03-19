# Drupal-9-Rows Modul
Simple modul de Drupal en la versió 9 en la que es demanarà un número per teclat i a continuació
imprimirà per pantalla una taula amb el nombre de files entrat.

Arxius del modul:
rows.info - arxiu de definició de la informació del modul, nom, descripció, versions...
rows.routing - arxiu que proporciona les rutes necessàries per la creació del modul. Informació de la
               localització del formulari i del controller
               
Dintre la carpeta src:
RowsController - arxiu control.lador encarregat de la presentació final de la taula que es demana.
                 Es fa servir un array i un loop per l'enmagatzematge de les files entrades i el
                 retorn es fa amb el format table en comptes de markup.
                 
RowsForm - Formulari encarregat de rebre el número de files per la creació posterior de la taula


