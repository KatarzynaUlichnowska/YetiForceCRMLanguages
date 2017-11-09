<?php
/**
 * OSSMail scanner french translation
 * @package YetiForce.Language
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
$languageStrings = [
	'OSSMailScanner' => 'Scanner email',
	'OSSMailScanner_manual' => 'Scanner email',
	'E-mail Accounts' => 'Comptes email',
	'Action' => 'Action',
	'Desc' => 'Description',
	'username' => 'Nom utilisateur',
	'mail_host' => 'Serveur',
	'language' => 'Langue',
	'nazwa' => 'Fonction',
	'katalog' => 'Chemin de fichier',
	'opis' => 'Description',
	'CreatedEmail' => 'Créer un email',
	'BindContacts' => 'Lié à un contact',
	'BindAccounts' => 'Lié à une organisation',
	'BindLeads' => 'Lié a un prospect',
	'BindSSalesProcesses' => 'Lié à une opportunité',
	'BindHelpDesk' => 'Lié au support',
	'BindProject' => 'Lié à un projet',
	'BindServiceContracts' => 'Lié à un contrat de services',
	'BindCompetition' => 'Lié à un concurrent',
	'BindOSSEmployees' => 'Lié à un employé',
	'BindPartners' => 'Lié à un partenaire',
	'BindVendors' => 'Lié à un vendeur',
	'BindCampaigns' => 'Lié à une campagne',
	'created_Accounts' => 'Créer une organisation',
	'created_Contacts' => 'Créer un contact',
	'CreatedHelpDesk' => 'Créer support',
	'update_HelpDesk' => 'Mettre à jour support',
	'update_Accounts' => 'Mettre à jour une organisation',
	'update_Contacts' => 'Mettre à jour un contact',
	'desc_CreatedEmail' => 'Ajouter email au crm.',
	'desc_BindCompetition' => 'Créer une relation entre l\'email et le concurrent lié à cette adresse email.',
	'desc_BindOSSEmployees' => 'Créer une relation entre l\'email et l\'employé lié à cette adresse email.',
	'desc_BindPartners' => 'Créer une relation entre l\'email et le partenaire lié à cette adresse email.',
	'desc_BindVendors' => 'Créer une relation entre l\'email et le vendeur lié à cette adresse email.',
	'desc_BindContacts' => 'Créer une relation entre l\'email et le contact lié à cette adresse email.',
	'desc_BindAccounts' => 'Créer une relation entre l\'email et l\'organisation liée à cette adresse email.',
	'desc_BindLeads' => 'Créer une relation entre l\'email et le prospect lié à cette adresse email.',
	'desc_BindSSalesProcesses' => 'Créer une relation entre l\'email et l\'opportunité mentionnée dans le sujet.',
	'desc_BindHelpDesk' => 'Créer une relation entre l\'email et le ticket mentionné dans le sujet.',
	'desc_BindProject' => 'Créer une relation entre l\'email et le projet mentionné dans le sujet.',
	'desc_BindServiceContracts' => 'Créer une relation entre l\'email et le projet associé à l\'organisation référencée par l\'adresse email.',
	'desc_BindCampaigns' => 'Créer une relation entre l\'email et la campagne mentionnée dans le sujet.',
	'desc_created_Accounts' => 'Créer une description pour l\'organisation',
	'desc_created_Contacts' => 'Créer une description pour le contact',
	'desc_CreatedHelpDesk' => 'Créer une description pour le support.',
	'desc_update_HelpDesk' => 'Mettre à jour la description du support',
	'desc_update_Accounts' => 'Mettre à jour la description de l\'organisation',
	'desc_update_Contacts' => 'Mettre à jour la description du contact',
	'Folder configuration' => 'Configuration des dossiers',
	'Actions' => 'Actions',
	'MailView config' => 'Configuration',
	'General Configuration' => 'Configuration générale',
	'Search email configuration' => 'Configuration recherche email',
	'LBL_TICKET_REOPEN' => 'Créer/Ouvrir un ticket',
	'LBL_OPEN_TICKET' => 'Ouvrir le ticket et régler l\'état \"En attente de réponse\"',
	'LBL_CREATE_TICKET' => 'Créer un nouveau ticket',
	'LBL_NO_ACTION' => 'Lier au ticket en cours (si l\'action est ajoutée)',
	'LBL_CONFTAB_CHANGE_TICKET_STATUS' => 'Que devrait faire le scanner lorsque nous recevons un email concernant un ticket qui a été fermé ?',
	'Alert_no_module_title' => 'Module non trouvé ou désactivé.',
	'Alert_no_module_desc' => 'Le module Scanner requière que vous installiez et aciviez le module OSSMail. Vérifiez si le module est installé, sinon faites le.',
	'Alert_no_accounts_title' => 'Compte email non trouvé',
	'Alert_no_accounts_desc' => 'Afin d\'activer le scanner email vous devez d\'abord vous connecter à votre compte email dans le module OSSMail.',
	'Alert_info_tab_actions' => 'Le fichier avec les actions emails est situé dans : modules/OSSMailScanner/scanneractions/',
	'Alert_no_email_acconts' => 'Compte email non trouvé',
	'Alert_no_email_acconts_desc' => 'Afin de configurer les dossiers vous devez vous connecter une première fois à la boîte email.',
	'Alert_info_tab_email_search' => 'Choissisez les champs utilisés pour rechercher les destinataires des emails.',
	'Alert_info_tab_folder' => 'Choissisez les dossiers qui seront scannés pendat le téléchargement des messages. ',
	'Alert_info_tab_accounts' => 'Choississez les actions à exécuter pour les diiférents comptes email.',
	'Alert_info_tab_record_numbering' => 'Les préfixes sont utilisés pour lier les emails avec les données du CRM. Les liens emails ne fonctionnent que pour les modules dont les préfixes sont configurés(non vide).',
	'Alert_active_cron' => 'Aucne tâche active programmée.',
	'Alert_active_cron_desc' => 'Aucune tâche programmée trouvée pour le scanner ou l\'une des tâches est désactivée. Pour le fonctionnement correct du scanner email toutes les tâches doivent être activées (MailScannerAction, MailScannerVerification)',
	'Alert_active_crontime' => 'Fréquence incorrecte des appels planifiés.',
	'Alert_active_crontime_desc' => 'La fréquence d\'appel de la tâche \"MailScannerAction\" doit être au moins deux fois la fréquence de la tâche \"MailScannerVerification\"',
	'All_folder' => 'Tous',
	'Received' => 'Reçu',
	'Sent' => 'Envoyé',
	'Spam' => 'Spam',
	'Trash' => 'Poubelle',
	'Function_list' => 'Liste des fonctionnalités',
	'Folder_list' => 'Liste des dossiers',
	'Record Numbering' => 'Préfixes',
	'ConfigCustomRecordNumbering' => 'Configuration de numérotation',
	'Module' => 'Module',
	'Alert_scanner_not_work' => 'Sans préfixe, le scanner ne fonctionne pas',
	'Roundcube config' => 'Configuration Roundcube',
	'LBL_SAVE' => 'Sauvegarder la configuration',
	'Spam' => 'Spam',
	'Spam' => 'Spam',
	'JS_save_info' => 'Liste des actions sauvegardées',
	'JS_saveuser_info' => 'Utilisateur sauvegardé',
	'LBL_SAVE_FOLDER_INFO' => 'Liste des dossiers sauvegardés',
	'JS_save_fields_info' => 'Liste des champs sauvegardés',
	'JS_save_config_info' => 'Configuration sauvegardées',
	'Cron' => 'Cron',
	'RunCron' => 'Démarrer le scan manuel',
	'startTime' => 'Heure de démarrage',
	'endTime' => 'Heure de fin',
	'status' => 'Statut',
	'account' => 'Organisation',
	'action' => 'Action',
	'folder' => 'Dossier',
	'count' => 'Emails vérifiés',
	'who' => 'Utilisateur',
	'OK' => 'ok',
	'In progress' => 'En cours',
	'Error' => 'Erreur',
	'email_to_notify' => 'Email de notification',
	'time_to_notify' => 'Délai pour notifier (min)',
	'StopCron' => 'Arrêter(manuellement) le scan',
	'Manually stopped' => 'Stoppé manuellement',
	'stop_user' => 'Scan stoppé par',
	'Email_Subject' => 'Notification: Le CRON tourne depuis trop longtemps',
	'Email_Body' => 'Bonjour<br /><br />Le CRON tourne depuis trop longtemps, veifier si le mail fonctionne correctement.<br /><br />L\'administrateur',
	'Email_FromName' => 'Mail Scanner',
	'JS_info_restart_ok' => 'Cron débloqué',
	'permissions_all' => 'Visible à tous',
	'permissions_vtiger' => 'Basé sur les permissions vtiger',
	'permissions_user_email' => 'Basé sur l\'adresse utilisateur',
	'Permissions' => 'Permissions',
	'User' => 'Utilisateur',
	'None' => 'Choisir utilisateur',
	'User list' => 'Liste d\'utilisateurs',
	'identities_name' => 'Nom identité',
	'identities_adress' => 'Adresse email identité',
	'identities_del' => 'Effacer identité',
	'show_identities' => 'Montrer identités',
	'IMAP_ERROR' => 'Ne peut se connecter au serveur email',
	'ERROR_ACTIVE_CRON' => 'Impossible de démarrer le scan car il est déjà actif.',
	'Change ticket status' => 'Changer le statut du ticket',
	'Change_ticket_status' => 'Mettre à jour le statut du ticket',
	'Alert_info_conftab_change_ticket_status' => 'Cette option permet de modifier le statut du ticket à "Répondu" lorsque le scan trouve un email du client qui a envoyé ce ticket.',
	'Action_DisabledModule' => 'Désactiver module',
	'Action_EnabledModule' => 'Activer module',
	'Action_UpdateModule' => 'Mettre à jour module',
	'Action_InstallModule' => 'Installer module',
	'Action_Bind' => 'Marqué à lier',
	'Action_CronMailScanner' => 'Cron - scan',
	'Action_CronBind' => 'Cron - Lier',
	'Action_ChangeType' => 'Modifier le type email',
	'AccontDeleteOK' => 'Compte effacé',
	'No' => 'No',
	'LBL_MAIL_LOGS' => 'Logs email',
	'Group list' => 'Liste groupe',
	'LBL_ACTIVE_MAIL' => 'Actif',
	'LBL_INACTIVE_MAIL' => 'Inactif',
	'LBL_EXCEPTIONS' => 'Exceptions',
	'LBL_EXCEPTIONS_CREATING_EMAIL' => 'Adresses omises lors de la création de messages',
	'LBL_EXCEPTIONS_CREATING_TICKET' => 'Adresses omises lors de la création de tickets',
	'LBL_WRITE_AND_ENTER' => 'Entrez l\'adresse email et appuyez sur Entrée',
	'ERR_NO_CONFIGURATION_FOLDERS' => 'Pas de configuration de dossier',
	'LBL_SHOW_ACCOUNT_DETAILS' => 'Montrer les détails du compte',
	'LBL_EDIT_FOLDER_ACCOUNT' => 'Editer dossier',
	'LBL_ALERT_EDIT_FOLDER' => 'Si vous supprimez le dossier et que vous l\'ajoutez à nouveau, le scanneur de email est redémarré.',
	'LBL_DELETE_ACCOUNT' => 'Supprimer le compte',
];
