<?php


$lang["tms_link_configuration"]='Configuração de Link TMS.';
$lang["tms_link_dsn_name"]='Nome do DSN local para conectar ao banco de dados TMS. No Windows, isso é configurado por Ferramentas Administrativas -> Fontes de Dados (ODBC). Certifique-se de que a conexão correta esteja configurada (32/64 bits).';
$lang["tms_link_table_name"]='Nome da tabela ou visualização do TMS usada para recuperar dados do TMS.';
$lang["tms_link_user"]='Nome de usuário para conexão com o banco de dados TMS.';
$lang["tms_link_password"]='Senha para usuário do banco de dados TMS.';
$lang["tms_link_resource_types"]='Selecionar tipos de recursos vinculados ao TMS.';
$lang["tms_link_object_id_field"]='Campo utilizado para armazenar o ID do objeto TMS.';
$lang["tms_link_checksum_field"]='Campo de metadados a ser usado para armazenar checksums. Isso é para evitar atualizações desnecessárias se os dados não foram alterados.';
$lang["tms_link_checksum_column_name"]='Coluna retornada da tabela TMS para usar como checksum retornado do banco de dados TMS.';
$lang["tms_link_tms_data"]='Dados TMS ao vivo.';
$lang["tms_link_database_setup"]='Conexão de banco de dados TMS.';
$lang["tms_link_metadata_setup"]='Configuração de metadados do TMS.';
$lang["tms_link_tms_link_success"]='Conexão estabelecida com sucesso.';
$lang["tms_link_tms_link_failure"]='Falha na conexão. Por favor, verifique seus detalhes.';
$lang["tms_link_test_link"]='Link de teste para TMS.';
$lang["tms_link_tms_resources"]='Recursos TMS.';
$lang["tms_link_no_tms_resources"]='Não foram encontrados recursos TMS. Por favor, verifique se você configurou o plugin corretamente e mapeou os campos corretos de metadados ObjectID e checksum.';
$lang["tms_link_no_resource"]='Nenhum recurso especificado.';
$lang["tms_link_resource_id"]='Identificador de Recurso.';
$lang["tms_link_object_id"]='Identificador do objeto.';
$lang["tms_link_checksum"]='Checksum (Soma de verificação)';
$lang["tms_link_no_tms_data"]='Nenhum dado retornado do TMS.';
$lang["tms_link_field_mappings"]='Mapeamentos de campo TMS para campo ResourceSpace.';
$lang["tms_link_resourcespace_field"]='Campo do ResourceSpace.';
$lang["tms_link_column_name"]='Coluna TMS';
$lang["tms_link_add_mapping"]='Adicionar mapeamento.';
$lang["tms_link_performance_options"]='Configurações do Script TMS - essas configurações afetarão a tarefa agendada que atualiza os dados dos recursos do TMS.';
$lang["tms_link_query_chunk_size"]='Número de registros a recuperar do TMS em cada bloco. Isso pode ser ajustado para encontrar a configuração ideal.';
$lang["tms_link_test_mode"]='Modo de teste - Defina como verdadeiro e o script será executado, mas não atualizará os recursos.';
$lang["tms_link_email_notify"]='Endereço de e-mail para o qual o script enviará notificações. Será usado o endereço de notificação do sistema por padrão se deixado em branco.';
$lang["tms_link_test_count"]='Número de registros para testar o script - pode ser definido como um número menor para testar o script e o desempenho.';
$lang["tms_link_last_run_date"]='Última execução do script:';
$lang["tms_link_script_failure_notify_days"]='Número de dias após os quais exibir alerta e enviar e-mail se o script não foi concluído.';
$lang["tms_link_script_problem"]='AVISO - o script TMS não foi concluído com sucesso nos últimos %dias% dias. Último horário de execução:';
$lang["tms_link_upload_tms_field"]='Identificador de objeto TMS.';
$lang["tms_link_confirm_upload_nodata"]='Por favor, marque a caixa para confirmar que deseja prosseguir com o envio.';
$lang["tms_link_enable_update_script"]='Ativar script de atualização do TMS.';
$lang["tms_link_enable_update_script_info"]='Ative o script que atualizará automaticamente os dados do TMS sempre que a tarefa agendada do ResourceSpace (cron_copy_hitcount.php) for executada.';
$lang["tms_link_log_directory"]='Diretório para armazenar registros de script. Se isso for deixado em branco ou for inválido, nenhum registro será feito.';
$lang["tms_link_log_expiry"]='Número de dias para armazenar logs de script. Quaisquer logs do TMS neste diretório que forem mais antigos serão excluídos.';
$lang["tms_link_column_type_required"]='<strong>NOTA</strong>: Se estiver adicionando uma nova coluna, por favor adicione o nome da coluna na lista apropriada abaixo para indicar se a nova coluna contém dados numéricos ou de texto.';
$lang["tms_link_numeric_columns"]='Lista de colunas que devem ser recuperadas como UTF-8.';
$lang["tms_link_text_columns"]='Lista de colunas que devem ser recuperadas como UTF-16.';
$lang["tms_link_bidirectional_options"]='Sincronização bidirecional (adicionando imagens do ResourceSpace ao TMS)';
$lang["tms_link_push_condition"]='Critérios de metadados que devem ser atendidos para que as imagens sejam adicionadas ao TMS.';
$lang["tms_link_tms_loginid"]='ID de login do TMS que será usado pelo ResourceSpace para inserir registros. Uma conta TMS deve ser criada ou já existir com este ID.';
$lang["tms_link_push_image"]='Enviar imagem para TMS após a criação da visualização? (Isso criará um novo registro de mídia no TMS)';
$lang["tms_link_push_image_sizes"]='Tamanho de pré-visualização preferido para enviar ao TMS. Separado por vírgulas em ordem de preferência, para que o primeiro tamanho disponível seja utilizado.';
$lang["tms_link_mediatypeid"]='ID do Tipo de Mídia a ser usado para registros de mídia inseridos.';
$lang["tms_link_formatid"]='FormatoID a ser usado para registros de mídia inseridos.';
$lang["tms_link_colordepthid"]='ProfundidadeDeCorID para uso em registros de mídia inseridos.';
$lang["tms_link_media_path"]='Caminho raiz para o arquivo que será armazenado no TMS, por exemplo, \\RS_SERVER\\filestore\\. Certifique-se de incluir a barra final. O nome do arquivo armazenado no TMS incluirá o caminho relativo a partir da raiz do arquivo.';
$lang["tms_link_modules_mappings"]='Sincronização de módulos extras (tabelas/visualizações)';
$lang["tms_link_module"]='Módulo.';
$lang["tms_link_tms_uid_field"]='Campo UID do TMS.';
$lang["tms_link_rs_uid_field"]='Campo UID do ResourceSpace.';
$lang["tms_link_applicable_rt"]='Tipos de recurso(s) aplicáveis.';
$lang["tms_link_modules_mappings_tools"]='Ferramentas.';
$lang["tms_link_add_new_tms_module"]='Adicionar novo módulo extra de TMS.';
$lang["tms_link_tms_module_configuration"]='Configuração do módulo TMS.';
$lang["tms_link_tms_module_name"]='Nome do módulo TMS.';
$lang["tms_link_encoding"]='codificação';
$lang["tms_link_not_found_error_title"]='Não encontrado.';
$lang["tms_link_not_deleted_error_detail"]='Não é possível excluir a configuração do módulo solicitado.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field

TMS %nome_do_módulo %campo_uid_tms';
$lang["tms_link_confirm_delete_module_config"]='Você tem certeza de que deseja excluir esta configuração de módulo? Esta ação não pode ser desfeita!';
$lang["tms_link_upload_nodata"]='Não foram encontrados dados de TMS para este ObjectID:';