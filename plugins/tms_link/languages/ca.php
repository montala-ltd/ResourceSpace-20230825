<?php


$lang["tms_link_configuration"]='Configuració d\'enllaç TMS';
$lang["tms_link_dsn_name"]='Nom del DSN local per connectar a la base de dades TMS. A Windows, això es configura a través de Eines d\'administració -> Fonts de dades (ODBC). Assegureu-vos que la connexió correcta estigui configurada (32/64 bits).';
$lang["tms_link_table_name"]='Nom de la taula o vista TMS utilitzada per recuperar les dades TMS.';
$lang["tms_link_user"]='Nom d\'usuari per a la connexió a la base de dades TMS.';
$lang["tms_link_password"]='Contrasenya per a l\'usuari de la base de dades TMS.';
$lang["tms_link_resource_types"]='Seleccioneu els tipus de recursos vinculats a TMS.';
$lang["tms_link_object_id_field"]='Camp que s\'utilitza per emmagatzemar l\'ID d\'objecte TMS.';
$lang["tms_link_checksum_field"]='Camp de metadades per a emmagatzemar checksums. Això és per prevenir actualitzacions innecessàries si les dades no han canviat.';
$lang["tms_link_checksum_column_name"]='Columna retornada de la taula TMS per a usar com a suma de verificació retornada de la base de dades TMS.';
$lang["tms_link_tms_data"]='Dades en viu del TMS.';
$lang["tms_link_database_setup"]='Connexió a la base de dades TMS.';
$lang["tms_link_metadata_setup"]='Configuració de metadades TMS';
$lang["tms_link_tms_link_success"]='Connexió establerta amb èxit.';
$lang["tms_link_tms_link_failure"]='Connexió fallida. Si us plau, comprova les teves dades.';
$lang["tms_link_test_link"]='Prova d\'enllaç al TMS.';
$lang["tms_link_tms_resources"]='Recursos TMS';
$lang["tms_link_no_tms_resources"]='No s\'han trobat recursos TMS. Si us plau, comprova que has configurat el connector correctament i has assignat els camps de metadades ObjectID i checksum correctes.';
$lang["tms_link_no_resource"]='No s\'ha especificat cap recurs.';
$lang["tms_link_resource_id"]='Identificador de recurs.';
$lang["tms_link_object_id"]='Identificador d\'objecte.';
$lang["tms_link_checksum"]='Comprovació de suma de verificació (Checksum)';
$lang["tms_link_no_tms_data"]='No s\'han obtingut dades del TMS.';
$lang["tms_link_field_mappings"]='Assignacions de camps de TMS a camps de ResourceSpace.';
$lang["tms_link_resourcespace_field"]='Camp de ResourceSpace';
$lang["tms_link_column_name"]='Columna TMS.';
$lang["tms_link_add_mapping"]='Afegir mapeig.';
$lang["tms_link_performance_options"]='Configuració de l\'script TMS - aquestes opcions afectaran la tasca programada que actualitza les dades dels recursos des de TMS.';
$lang["tms_link_query_chunk_size"]='Nombre de registres per recuperar de TMS en cada fragment. Això es pot ajustar per trobar la configuració òptima.';
$lang["tms_link_test_mode"]='Mode de prova - Si està activat, l\'script s\'executarà però no actualitzarà els recursos.';
$lang["tms_link_email_notify"]='Adreça de correu electrònic a la qual el script enviarà les notificacions. Si es deixa en blanc, s\'utilitzarà per defecte l\'adreça de notificació del sistema.';
$lang["tms_link_test_count"]='Nombre de registres per provar l\'script: es pot establir un nombre més baix per provar l\'script i el rendiment.';
$lang["tms_link_last_run_date"]='Última execució del script:';
$lang["tms_link_script_failure_notify_days"]='Nombre de dies després dels quals mostrar una alerta i enviar un correu electrònic si l\'script no s\'ha completat.';
$lang["tms_link_script_problem"]='ATENCIÓ - L\'script TMS no s\'ha completat amb èxit en els darrers %dies% dies. Última hora d\'execució:';
$lang["tms_link_upload_tms_field"]='Identificador d\'objecte TMS.';
$lang["tms_link_upload_nodata"]='No s\'han trobat dades TMS per a aquest ID d\'objecte:';
$lang["tms_link_confirm_upload_nodata"]='Si us plau, marqueu la casella per confirmar que voleu continuar amb la càrrega.';
$lang["tms_link_enable_update_script"]='Habilitar l\'script d\'actualització de TMS.';
$lang["tms_link_enable_update_script_info"]='Habilitar l\'script que actualitzarà automàticament les dades del TMS sempre que s\'executi la tasca programada de ResourceSpace (cron_copy_hitcount.php).';
$lang["tms_link_log_directory"]='Directori per emmagatzemar els registres dels scripts. Si això es deixa en blanc o no és vàlid, no es produirà cap registre.';
$lang["tms_link_log_expiry"]='Nombre de dies per emmagatzemar els registres de l\'script. Qualsevol registre TMS en aquest directori que sigui més antic serà eliminat.';
$lang["tms_link_column_type_required"]='<strong>NOTA</strong>: Si afegiu una nova columna, afegiu el nom de la columna a la llista corresponent a continuació per indicar si la nova columna conté dades numèriques o de text.';
$lang["tms_link_numeric_columns"]='Llista de columnes que s\'haurien de recuperar com a UTF-8.';
$lang["tms_link_text_columns"]='Llista de columnes que s\'haurien de recuperar com a UTF-16.';
$lang["tms_link_bidirectional_options"]='Sincronització bidireccional (afegint imatges de RS a TMS)';
$lang["tms_link_push_condition"]='Criteris de metadades que han de ser complerts perquè les imatges siguin afegides a TMS.';
$lang["tms_link_tms_loginid"]='Identificador d\'accés TMS que serà utilitzat per ResourceSpace per inserir registres. S\'ha de crear o existir un compte TMS amb aquest ID.';
$lang["tms_link_push_image"]='Empènyer la imatge al TMS després de la creació de la vista prèvia? (Això crearà un nou registre de mitjans en el TMS)';
$lang["tms_link_push_image_sizes"]='Mida de previsualització preferida per enviar a TMS. Separada per comes en ordre de preferència, de manera que la primera mida disponible serà utilitzada.';
$lang["tms_link_mediatypeid"]='IdentificadorTipusMitjana a utilitzar per als registres de mitjans inserits.';
$lang["tms_link_formatid"]='Identificador de format a utilitzar per als registres de mitjans inserits.';
$lang["tms_link_colordepthid"]='Identificador de profunditat de color per utilitzar en els registres de mitjans inserits.';
$lang["tms_link_media_path"]='Ruta arrel per al magatzem de fitxers que es guardarà a TMS, per exemple, \\RS_SERVERilestore\\. Assegureu-vos que s\'inclou la barra inclinada al final. El nom de fitxer emmagatzemat a TMS inclourà la ruta relativa des de l\'arrel del magatzem de fitxers.';
$lang["tms_link_modules_mappings"]='Sincronització des de mòduls addicionals (taules/vistes)';
$lang["tms_link_module"]='Mòdul.';
$lang["tms_link_tms_uid_field"]='Camp UID de TMS';
$lang["tms_link_rs_uid_field"]='Camp UID de ResourceSpace';
$lang["tms_link_applicable_rt"]='Tipus(es) de recurs aplicable(s)';
$lang["tms_link_modules_mappings_tools"]='Eines.';
$lang["tms_link_add_new_tms_module"]='Afegir un nou mòdul extra de TMS.';
$lang["tms_link_tms_module_configuration"]='Configuració del mòdul TMS';
$lang["tms_link_tms_module_name"]='Nom del mòdul TMS.';
$lang["tms_link_encoding"]='codificació';
$lang["tms_link_not_found_error_title"]='No trobat.';
$lang["tms_link_not_deleted_error_detail"]='No es pot eliminar la configuració del mòdul sol·licitat.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field

TMS %module_name %tms_uid_field (Camp d\'identificació d\'usuari TMS del mòdul %module_name)';
$lang["tms_link_confirm_delete_module_config"]='Esteu segur que voleu eliminar la configuració d\'aquest mòdul? Aquesta acció no es pot desfer!';