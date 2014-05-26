<?php
/*  ------------------------------------- *
 *
 *    Project:   MySQL Diff
 *    Copyright: Lippe-Net Online-Service
 *               Bielefeld, Lemgo, Germany
 *               (c) 2001-2003
 *    Portuguese translations:
 *      Everton R. Silva <everton@tconibo.org>
 *
 *    $Author: sskus $
 *    $RCSfile: portuguese-iso-8859-1.nls.php,v $
 *    $Revision: 1.27 $
 *    $Date: 2004/09/20 23:12:32 $
 *    $State: Exp $
 *
 * ------------------------------------- */

$textres_charset = "iso-8859-1";
$textres_lang = "pt";
$textres_direction = "ltr";

$textres["title_source"] = "Banco dados origem (produção):";
$textres["title_target"] = "Banco dados destino (desenvolvimento):";
$textres["title_options"] = "Opções:";
$textres["title_field_renamed"] = "Atributo renomeado";
$textres["title_tables_insert"] = "Selecionar tabelas para criar declarações de INSERT";
$textres["title_tables_replace"] = "Selecionar tabelas para criar declarações de REPLACE";

$textres["label_hostname"] = "Servidor/Host";
$textres["label_database"] = "Banco dados";
$textres["label_username"] = "Usuário";
$textres["label_password"] = "Senha";
$textres["label_upload"] = "Arquivo SQL";
$textres["label_select"] = "Selecione";

$textres["label_change_table_type"] = "Mudar tipo da tabela";
$textres["label_alter_table_options"] = "Alterar opções da tabela";
$textres["label_alter_table_auto_incr"] = "Considerar parametro de 'auto_increment'";
$textres["label_alter_table_charset"] = "Alterar opções da tabela (Alter table charset)";
$textres["label_alter_comments"] = "Alterar comentários (Alter comments)";
$textres["label_alter_changes"] = "Gerar sugestão para mudanças no formato do atributo (Generate hint on changes in attribute format)";
$textres["label_merge_statements"] = "Mesclar declarações (Merge statements)";
$textres["label_show_connection_state"] = "Mostrar estado da conexão (Show connection state)";
$textres["label_syntax_highlighting"] = "Destacar sintaxe (Syntax highlighting)";
$textres["label_cfk_back"] = "Mover 'foreign keys (chaves estrangeiras)' para o fim do script";
$textres["label_no_cfk_checks"] = "Desativar checagem de 'foreign key' antes de rodar script (Deactivate foreign key checks before script run).";
$textres["label_backticks"] = "Use 'Backticks' para tabela e nomes de atributo (Use Backticks for table and attribute names)";
$textres["label_data"] = "Criar INSERT- ou REPLACE- para tabelas selecionadas (Create INSERT- or REPLACE-statements for selected tables).";

$textres["link_select_all"] = "Selecionar tudo";
$textres["link_unselect_all"] = "Deselecionar Tudo";

$textres["label_field_original"] = "Atributo";
$textres["label_field_renamed"] = "renomeado para";

$textres["label_start_homepage"] = "MySQLDiff";
$textres["link_start_homepage"] = "Home page";
$textres["link_start_changes"] = "Log de Mudanças";
$textres["link_start_downloads"] = "Arquivos para downloads";
$textres["label_start_mysql_homepage"] = "MySQL";
$textres["label_start_useful_links"] = "Links Uteis";
$textres["label_start_language"] = "Lingua";

$textres["button_next"] = "proximo ›››";
$textres["button_prev"] = "‹‹‹ anterior";
$textres["button_generate"] = "gerar (generate)";
$textres["button_reset"] = "reiniciar (resetar)";
$textres["button_send"] = "enviar";
$textres["button_switch"] = "trocar source<>target";
$textres["button_apply"] = "aplicar";

$textres["comment_create_time"] = "Create time";
$textres["comment_source_info"] = "Source info";
$textres["comment_target_info"] = "Target info";

$textres["error_error"] = "ERROR";
$textres["error_different_connections"] = "Different connections leaving out!";
$textres["error_connection_failed"] = "Conexão com o banco de dados falhou!\nPor favor cheque seu login.\n(%s)";
$textres["error_txtHost_missing"] = "Nome de Host faltando!";
$textres["error_txtDatabase_missing"] = "Nome de banco de dados faltando!";
$textres["error_txtUser_missing"] = "nome de usuário faltando!";
$textres["error_txtPass_missing"] = "Senha faltando!";
$textres["error_txtUpload_missing"] = "O arquivo de upload faltando!";

$textres["info_table_dropped"] = "Tabela %s dropada (excluída)!";
$textres["info_fieldformat_changed_single"] = "Fieldformat of";
$textres["info_fieldformat_changed_multiple"] = "Fieldformats of";
$textres["info_fieldformat_changeinfo"] = "%s mudado de %s para %s.";
$textres["info_fieldformat_modification_needed"] = "Possibly data modifications needed!";
$textres["info_ddl_start"] = "DDL INICIO (START)";
$textres["info_ddl_stop"] = "DDL FIM (END)";
$textres["info_dml_start"] = "DML INICIO (START)";
$textres["info_dml_stop"] = "DML FIM (END)";

$textres["option_yes"] = "Sim";
$textres["option_no"] = "Não";

?>