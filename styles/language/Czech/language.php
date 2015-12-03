<?php 
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

/*
 *  CZ language by SnooWiK
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
	'admin_cp' => 'Administrace', 
	'invalid_token' => 'Špatná data, skuste to prosím znovu.',
	'invalid_action' => 'Špatná akce',
	'successfully_updated' => 'Successfully updated',
	'settings' => 'Nastavení',
	'confirm_action' => 'Potvrdit akci',
	'edit' => 'Upravit',
	'actions' => 'Akce',
	'task_successful' => 'Task run successfully',
	
	// Admin login
	're-authenticate' => 'Prosím ověřte se...',
	
	// Admin sidebar
	'index' => 'Přehled',
	'core' => 'Core',
	'custom_pages' => 'Stránky',
	'general' => 'Hlavní',
	'forums' => 'Fóra',
	'users_and_groups' => 'Uživatelé a skupiny',
	'minecraft' => 'Minecraft',
	'style' => 'Styly',
	'addons' => 'Doplňky',
	'update' => 'Updaty',
	'misc' => 'Misc',
	
	// Admin index page
	'statistics' => 'Statistiky',
	'registrations_per_day' => 'Registrations per day (last 7 days)',
	
	// Admin core page
	'general_settings' => 'Hlavní nastavení',
	'modules' => 'Moduly',
	'module_not_exist' => 'Tento modul neexistuje!',
	'module_enabled' => 'Modul zapnut.',
	'module_disabled' => 'Modul vypnut.',
	'site_name' => 'Jméno stránky',
	'language' => 'Jazyk',
	'voice_server_not_writable' => 'core/voice_server.php is not writable. Please check file permissions',
	'email' => 'Email',
	'incoming_email' => 'Příchozí e-mailová adresa',
	'outgoing_email' => 'Odchozí e-mailová adresa',
	'outgoing_email_help' => 'Only required if the PHP mail function is enabled',
	'use_php_mail' => 'Use PHP mail() function?',
	'use_php_mail_help' => 'Recommended: enabled. If your website is not sending emails, please disable this and edit core/email.php with your email settings.',
	'use_gmail' => 'Use Gmail for email sending?',
	'use_gmail_help' => 'Only available if the PHP mail function is disabled. If you choose not to use Gmail, SMTP will be used. Either way, this will need configuring in core/email.php.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Kliknutím na stránku ji upravíte.',
	'page' => 'Stránka:',
	'url' => 'URL:',
	'page_url' => 'URL stránky',
	'page_url_example' => '(With preceding "/", for example /help/)',
	'page_title' => 'PNázev stránky',
	'page_content' => 'Místo stránky',
	'new_page' => 'Nová stránka',
	'page_successfully_created' => 'Stránka úspěšně vytvořena!',
	'page_successfully_edited' => 'Stránka úspěšně upravena!',
	'unable_to_create_page' => 'Povolte vytvoření stránky.',
	'unable_to_edit_page' => 'Unable to edit page.',
	'create_page_error' => 'Please ensure you have entered an URL between 1 and 20 characters long, a page title between 1 and 30 characters long, and page content between 5 and 20480 characters long.',
	'delete_page' => 'Smazat stránku.',
	'confirm_delete_page' => 'Are you sure you want to delete this page?',
	'page_deleted_successfully' => 'Page deleted successfully',
	'page_link_location' => 'Display page link in:',
	'page_link_navbar' => 'Navbar',
	'page_link_more' => 'Navbar "More" dropdown',
	'page_link_footer' => 'Page footer',
	'page_link_none' => 'No page link',
	
	// Admin forum page
	'labels' => 'Topic Labels',
	'new_label' => 'New Label',
	'no_labels_defined' => 'No labels defined',
	'label_name' => 'Label Name',
	'label_type' => 'Label Type',
	'label_forums' => 'Label Forums',
	'label_creation_error' => 'Error creating a label. Please ensure the name is no longer than 32 characters and that you have specified a type.',
	'confirm_label_deletion' => 'Are you sure you want to delete this label?',
	'editing_label' => 'Editing label',
	'label_creation_success' => 'Label successfully created',
	'label_edit_success' => 'Label successfully edited',
	'label_default' => 'Default',
	'label_primary' => 'Primary',
	'label_success' => 'Success',
	'label_info' => 'Info',
	'label_warning' => 'Warning',
	'label_danger' => 'Danger',
	'new_forum' => 'Nové fórum',
	'forum_layout' => 'Forum Layout',
	'table_view' => 'Table view',
	'latest_discussions_view' => 'Latest Discussions view',
	'create_forum' => 'Create Forum',
	'forum_name' => 'Forum Name',
	'forum_description' => 'Forum Description',
	'delete_forum' => 'Delete Forum',
	'move_topics_and_posts_to' => 'Move topics and posts to',
	'delete_topics_and_posts' => 'Delete topics and posts',
	'parent_forum' => 'Parent Forum',
	'has_no_parent' => 'Has no parent',
	'forum_permissions' => 'Forum Permissions',
	'can_view_forum' => 'Can view forum:',
	'can_create_topic' => 'Can create topic:',
	'can_post_reply' => 'Can post reply:',
	'display_threads_as_news' => 'Display threads as news on front page?',
	
	// Admin Users and Groups page
	'users' => 'Users',
	'new_user' => 'New User',
	'created' => 'Created',
	'user_deleted' => 'User deleted',
	'validate_user' => 'Validate User',
	'update_uuid' => 'Update UUID',
	'unable_to_update_uuid' => 'Unable to update UUID.',
	'update_mc_name' => 'Update Minecraft Name',
	'reset_password' => 'Reset Password',
	'punish_user' => 'Punish User',
	'delete_user' => 'Delete User',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'IP Address',
	'ip' => 'IP:',
	'other_actions' => 'Other actions:',
	'disable_avatar' => 'Disable avatar',
	'confirm_user_deletion' => 'Are you sure you want to delete the user {x}?', // Don't replace "{x}"
	'groups' => 'Groups',
	'group' => 'Group',
	'new_group' => 'New Group',
	'id' => 'ID',
	'name' => 'Name',
	'create_group' => 'Create Group',
	'group_name' => 'Group Name',
	'group_html' => 'Group HTML',
	'group_html_lg' => 'Group HTML Large',
	'donor_group_id' => 'Donor package ID',
	'donor_group_id_help' => '<p>This is the ID of the group\'s package from Buycraft, MinecraftMarket or MCStock.</p><p>This can be left empty.</p>',
	'donor_group_instructions' => 	'<p>Donor groups must be created in the order of <strong>lowest value to highest value</strong>.</p>
									<p>For example, a £10 package will be created before a £20 package.</p>',
	'delete_group' => 'Delete Group',
	'confirm_group_deletion' => 'Are you sure you want to delete the group {x}?', // Don't replace "{x}"
	'group_staff' => 'Is the group a staff group?',
	'group_modcp' => 'Can the group view the ModCP?',
	'group_admincp' => 'Can the group view the AdminCP?',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Minecraft Settings',
	'use_plugin' => 'Use Nameless Minecraft plugin?',
	'force_avatars' => 'Force Minecraft avatars?',
	'uuid_linking' => 'Enable UUID linking?',
	'use_plugin_help' => 'Using the plugin allows for rank synchronisation and also ingame registration and ticket submission.',
	'uuid_linking_help' => 'If disabled, user accounts won\'t be linked with UUIDs. It is highly recommended you keep this as enabled.',
	'plugin_settings' => 'Plugin Settings',
	'confirm_api_regen' => 'Are you sure you want to generate a new API key?',
	'servers' => 'Servery',
	'new_server' => 'New Server',
	'confirm_server_deletion' => 'Are you sure you want to delete this server?',
	'main_server' => 'Main Server',
	'main_server_help' => 'The server players connect through. Normally this will be the Bungee instance.',
	'choose_a_main_server' => 'Choose a main server..',
	'external_query' => 'Use external query?',
	'external_query_help' => 'Use an external API to query the Minecraft server? Only use this if the built in query doesn\'t work; it\'s highly recommended that this is unticked.',
	'editing_server' => 'Editing server {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'Server IP (with port) (numeric or domain)',
	'server_ip_with_port_help' => 'This is the IP which will be displayed to users. It will not be queried.',
	'server_ip_numeric' => 'Server IP (with port) (numeric only)',
	'server_ip_numeric_help' => 'This is the IP which will be queried, please ensure it is numeric only. It will not be displayed to users.',
	'show_on_play_page' => 'Show on Play page?',
	'pre_17' => 'Pre 1.7 Minecraft version?',
	'server_name' => 'Server Name',
	'invalid_server_id' => 'Invalid server ID',
	'show_players' => 'Show player list on Play page?',
	'server_edited' => 'Server edited successfully',
	'server_created' => 'Server created successfully',
	'query_errors' => 'Query Errors',
	'query_errors_info' => 'The following errors allow you to diagnose issues with your internal server query.',
	'no_query_errors' => 'No query errors logged',
	'date' => 'Date:',
	'port' => 'Port:',
	'viewing_error' => 'Viewing Error',
	'confirm_error_deletion' => 'Are you sure you want to delete this error?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Témy',
	'templates' => 'Templates',
	'installed_themes' => 'Installed themes',
	'installed_templates' => 'Installed templates',
	'installed_addons' => 'Installed addons',
	'install_theme' => 'Install Theme',
	'install_template' => 'Install Template',
	'install_addon' => 'Install Addon',
	'install_a_theme' => 'Install a theme',
	'install_a_template' => 'Install a template',
	'install_an_addon' => 'Install an addon',
	'active' => 'Active',
	'activate' => 'Activate',
	'deactivate' => 'Deactivate',
	'theme_install_instructions' => 'Please upload themes to the <strong>styles/themes</strong> directory. Then, click the "scan" button below.',
	'template_install_instructions' => 'Please upload templates to the <strong>styles/templates</strong> directory. Then, click the "scan" button below.',
	'addon_install_instructions' => 'Please upload addons to the <strong>addons</strong> directory. Then, click the "scan" button below.',
	'addon_install_warning' => 'Addons are installed at your own risk. Please back up your files and the database before proceeding',
	'scan' => 'Scan',
	'theme_not_exist' => 'That theme doesn\'t exist!',
	'template_not_exist' => 'That template doesn\'t exist!',
	'addon_not_exist' => 'That addon doesn\'t exist!',
	'style_scan_complete' => 'Completed, any new styles have been installed.',
	'addon_scan_complete' => 'Completed, any new addons have been installed.',
	'theme_enabled' => 'Theme enabled.',
	'template_enabled' => 'Template enabled.',
	'addon_enabled' => 'Addon enabled.',
	'theme_deleted' => 'Theme deleted.',
	'template_deleted' => 'Template deleted.',
	'addon_disabled' => 'Addon disabled.',
	'inverse_navbar' => 'Inverse Navbar',
	'confirm_theme_deletion' => 'Are you sure you wish to delete the theme <strong>{x}</strong>?<br /><br />The theme will be deleted from your <strong>styles/themes</strong> directory.', // Don't replace {x}
	'confirm_template_deletion' => 'Are you sure you wish to delete the template <strong>{x}</strong>?<br /><br />The template will be deleted from your <strong>styles/templates</strong> directory.', // Don't replace {x}
	
	// Admin Misc page
	'other_settings' => 'Other Settings',
	'enable_error_reporting' => 'Enable error reporting?',
	'error_reporting_description' => 'This should only be used for debugging purposes, it\'s highly recommended this is left as disabled.',
	'display_page_load_time' => 'Display page loading time?',
	'page_load_time_description' => 'Having this enabled will display a speedometer in the footer which will display the page loading time.',
	'reset_website' => 'Reset Website',
	'reset_website_info' => 'This will reset your website settings. <strong>Addons will be disabled but not removed, and their settings will not change.</strong> Your defined Minecraft servers will also remain.',
	'confirm_reset_website' => 'Are you sure you want to reset your website settings?'
);

/*
 *  Navbar
 */
$navbar_language = array(
	'home' => 'Domů',
	'play' => 'Hrát',
	'forum' => 'Forum',
	'vote' => 'Hlasovat',
	'donate' => 'Donate',
	'more' => 'Další',
	'staff_apps' => 'Staff Applications'
);

/*
 * User Related
 */
$user_language = array(
	// Registration
	'create_an_account' => 'Vytvoření ůčtu',
	'username' => 'Jméno',
	'minecraft_username' => 'Minecraft nick',
	'email' => 'Email',
	'email_address' => 'Emailová adresa',
	'password' => 'Heslo',
	'confirm_password' => 'Potvrdit heslo',
	'i_agree' => 'Souhlasím',
	'agree_t_and_c' => 'Kliknutím na <strong class="label label-primary">Registrace</strong>, Souhlasíte s <a href="#" data-toggle="modal" data-target="#t_and_c_m">Všeobecnými podmínkamy.</a>.',
	'register' => 'Registrace',
	'sign_in' => 'Přihlášení',
	'sign_out' => 'Odhlásit',
	'terms_and_conditions' => 'Všeobecná pravidla',
	'successful_signin' => 'Byl si přihlášen!',
	'incorrect_details' => 'Špatné detaily',
	'remember_me' => 'Pamatovat',
	'forgot_password' => 'Zapomenuté heslo',
	'must_input_username' => 'Musíte vložit uživatelské jméno.',
	'must_input_password' => 'Musíte vložit uživatelské heslo.',
	'inactive_account' => 'Tvůj ůčet je deaktivován. Mrkni se na email :).',
	'account_banned' => 'Tvůj ůčet byl zabanován.',
	'successfully_logged_out' => 'Byl jsi odhlášen.',
	'signature' => 'Podpis',
	'registration_check_email' => 'Podívej se na mail, a klikni na ověřovací odkaz.',
	'unknown_login_error' => 'Sorry, there was an unknown error whilst logging you in. Please try again later.',
	'validation_complete' => 'Thanks for registering! You can now log in.',
	'validation_error' => 'Error processing your request. Please try clicking the link again.',
	'registration_error' => 'Prosím, ujistěte, že jste vyplnili všechna pole, a že vaše uživatelské jméno je dlouhá 3 až 20 znaků a heslo je dlouhé 6 až 30 znaků.',
	
	// UserCP
	'user_cp' => 'Uživ. menu',
	'no_file_chosen' => 'No file chosen',
	'private_messages' => 'Soukromé zprávy',
	'profile_settings' => 'Nastavení profilu',
	'your_profile' => 'Tvůj profil',
	'topics' => 'Témy',
	'posts' => 'Příspěvky',
	'reputation' => 'Reputation',
	'friends' => 'Přátelé',
	'alerts' => 'Alerts',
	
	// Messaging
	'new_message' => 'Nová zpráva',
	'no_messages' => 'Žádné zprávy',
	'and_x_more' => 'a {x} další', // Don't replace "{x}"
	'system' => 'System',
	'message_title' => 'Jméno zprávy',
	'message' => 'Zpráva',
	'to' => 'Komu:',
	'separate_users_with_comma' => 'Separate users with a comma (",")',
	'viewing_message' => 'Viewing Message',
	'delete_message' => 'Delete Message',
	'confirm_message_deletion' => 'Are you sure you want to delete this message?',
	
	// Profile settings
	'display_name' => 'Jméno zobrazováno jako',
	'upload_an_avatar' => 'Uploadni avatara (.jpg, .png or .gif only):',
	'use_gravatar' => 'Use Gravatar?',
	'change_password' => 'Change password',
	'current_password' => 'Current password',
	'new_password' => 'New password',
	'repeat_new_password' => 'Repeat new password',
	'password_changed_successfully' => 'Password changed successfully',
	'incorrect_password' => 'Your current password is incorrect',
	
	// Alerts
	'viewing_unread_alerts' => 'Viewing unread alerts. Change to <a href="/user/alerts/?view=read"><span class="label label-success">read</span></a>.',
	'viewing_read_alerts' => 'Viewing read alerts. Change to <a href="/user/alerts/"><span class="label label-warning">unread</span></a>.',
	'no_unread_alerts' => 'You have no unread alerts.',
	'no_read_alerts' => 'You have no read alerts.',
	'view' => 'View',
	'alert' => 'Alert',
	'when' => 'When',
	'delete' => 'Delete',
	'tag' => 'User Tag',
	'report' => 'Report',
	'deleted_alert' => 'Alert successfully deleted',
	
	// Warnings
	'you_have_received_a_warning' => 'You have received a warning from {x} dated {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Acknowledge',
	
	// Forgot password
	'password_reset' => 'Password Reset',
	'email_body' => 'You are receiving this email because you requested a password reset. In order to reset your password, please use the following link:', // Body for the password reset email
	'email_body_2' => 'If you did not request the password reset, you can ignore this email.',
	'password_email_set' => 'Success. Please check your emails for further instructions.',
	'username_not_found' => 'That username does not exist.',
	'change_password' => 'Change Password',
	'your_password_has_been_changed' => 'Your password has been changed.',
	
	// Profile page
	'profile' => 'Profil',
	'player' => 'Hráč',
	'offline' => 'Offline',
	'online' => 'Online',
	'pf_registered' => 'Registrován:',
	'pf_posts' => 'Příspěvky:',
	'pf_reputation' => 'Reputace:',
	'user_hasnt_registered' => 'Tento uživatel není registrovaný na této stránce.',
	'user_no_friends' => 'Tento uživatel nemá žádné přátele.',
	'send_message' => 'Poslat zprávu',
	'remove_friend' => 'Vymazat přítele',
	'add_friend' => 'Přidat přítele',
	
	// Staff applications
	'staff_application' => 'Staff Application',
	'application_submitted' => 'Application submitted successfully.',
	'application_already_submitted' => 'You\'ve already submitted an application. Please wait until it is complete before submitting another.',
	'not_logged_in' => 'Please log in to view that page.'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => 'Moderátor',
	'overview' => 'Přehled',
	'reports' => 'Reporty',
	'punishments' => 'tresty',
	'staff_applications' => 'Staff Applications',
	
	// Punishments
	'ban' => 'Zabanovat',
	'unban' => 'Odbanovat',
	'warn' => 'Varovat',
	'search_for_a_user' => 'Hledat uživatele',
	'user' => 'Uživatel:',
	'ip_lookup' => 'IP:',
	'registered' => 'Registrován',
	'reason' => 'Důvod:',
	
	// Reports
	'report_closed' => 'Hlášení uzavřeno.',
	'new_comment' => 'Nový komentář',
	'comments' => 'Komentáře',
	'only_viewed_by_staff' => 'Toto může zobrazit pouze administrátor',
	'reported_by' => 'Oznámil',
	'close_issue' => 'Blízký problém',
	'report' => 'Oznámení:',
	'view_reported_content' => 'Zobrazit oznámený příspěvek',
	'no_open_reports' => 'Žádný oznámený příspěvek',
	'user_reported' => 'Uživatelův report',
	'type' => 'Typ',
	'updated_by' => 'Updatoval',
	'forum_post' => 'Příspěvek z fóra',
	'user_profile' => 'Uživatelův profil',
	'comment_added' => 'Komentář přidán',
	'new_report_submitted_alert' => 'Nové oznámení submitted {x} týkající se {y}', // Don't replace "{x}" or "{y}"
	
	// Staff applications
	'comment_error' => 'Please ensure your comment is between 2 and 2048 characters long.',
	'viewing_open_applications' => 'Viewing <span class="label label-info">open</span> applications. Change to <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_accepted_applications' => 'Viewing <span class="label label-success">accepted</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_declined_applications' => 'Viewing <span class="label label-danger">declined</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a>.',
	'time_applied' => 'Time Applied',
	'no_applications' => 'No applications in this category',
	'viewing_app_from' => 'Viewing application from {x}', // Don't replace "{x}"
	'open' => 'Open',
	'accepted' => 'Accepted',
	'declined' => 'Declined',
	'accept' => 'Accept',
	'decline' => 'Decline',
	'new_app_submitted_alert' => 'New application submitted by {x}' // Don't replace "{x}"
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => 'Novinky',
	'social' => 'Social',
	
	// General terms
	'submit' => 'Odelsat',
	'close' => 'Zavřít',
	'cookie_message' => '<strong>Tato stránka pracuje s cookies</strong><p>Pokračováním vyjadřujete souhlas s jejím používáním.</p>',
	'theme_not_exist' => 'The selected theme does not exist.',
	'confirm' => 'Potvrdit',
	'cancel' => 'Ukončit',
	'guest' => 'Host',
	'guests' => 'Hosté',
	'back' => 'Zpět',
	'search' => 'Hledat',
	'help' => 'Pomoc',
	'success' => 'Ůspěšně',
	'error' => 'Chyba',
	'view' => 'Zobrazit',
	
	// Play page
	'connect_with' => 'Připoj se přes IP {x}.', // Don't replace {x}
	'online' => 'Online',
	'offline' => 'Offline',
	'status' => 'Status:',
	'players_online' => 'Hráčů online:',
	'queried_in' => 'Queried In:',
	'server_status' => 'Server Status',
	'no_players_online' => 'Žádní hráči online!',
	'x_players_online' => 'Na serveru je {x} hráčů online.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Stránka načtena za {x} sekund', // Don't replace {x}; 's' stands for 'seconds'
	'none' => 'None'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => 'Forum',
	'discussion' => 'Diskuze',
	'stats' => 'Statistiky',
	'last_reply' => 'Poslední příspěvek',
	'ago' => 'před',
	'by' => 'od',
	'in' => 'v',
	'views' => 'zobrazení',
	'posts' => 'příspěvků',
	'topics' => 'tém',
	'topic' => 'Téma',
	'statistics' => 'Statistiky',
	'overview' => 'Přehled',
	'latest_discussions' => 'Poslední diskuze',
	'latest_posts' => 'Poslední příspěvky',
	'users_registered' => 'Registrovaných uživatelů:',
	'latest_member' => 'Poslední registrovaný:',
	'forum' => 'Fórum',
	'last_post' => 'Poslední příspěvek',
	'no_topics' => 'Nenalezeny žádné příspěvky',
	'new_topic' => 'Nová téma',
	'subforums' => 'Subfóra:',
	
	// View topic view
	'home' => 'Home',
	'topic_locked' => 'Téma je zamčená',
	'new_reply' => 'Nová odpověď',
	'mod_actions' => 'Akce moderátora',
	'lock_thread' => 'Zamknout téma',
	'unlock_thread' => 'Odemknout téma',
	'merge_thread' => 'Sloučit téma',
	'delete_thread' => 'Vymazat téma',
	'confirm_thread_deletion' => 'Opravdu chcete vymazat tému?',
	'move_thread' => 'Přemístit téma',
	'sticky_thread' => 'Přilepit téma',
	'report_post' => 'Ohlásit příspěvek',
	'quote_post' => 'Sitovat příspěvek',
	'delete_post' => 'Delete Post',
	'edit_post' => 'Edit Post',
	'reputation' => 'reputation',
	'confirm_post_deletion' => 'Are you sure you want to delete this post?',
	'give_reputation' => 'Give reputation',
	'remove_reputation' => 'Remove reputation',
	'post_reputation' => 'Post Reputation',
	'no_reputation' => 'No reputation for this post yet',
	're' => 'RE:',
	
	// Create post view
	'create_post' => 'Vytvořit příspěvek',
	'post_submitted' => 'Příspěvek odeslán',
	'creating_post_in' => 'Vytváříte příspěvek v: ',
	'topic_locked_permission_post' => 'Toto téma je zamčeno. Nemůžete odpovídat, ani posílat příspěvky.',
	
	// Edit post view
	'editing_post' => 'Úprava příspěvku',
	
	// Sticky threads
	'thread_is_' => 'Téma je ',
	'now_sticky' => 'nyní je přilepená téma',
	'no_longer_sticky' => 'no longer a sticky thread',
	
	// Create topic
	'topic_created' => 'Téma vytvořeno.',
	'creating_topic_in_' => 'Vytváříte téma v ',
	'thread_title' => 'Název témy',
	'confirm_cancellation' => 'Doopravdy?',
	'label' => 'Label',
	
	// Reports
	'report_submitted' => 'Report submitted.',
	'view_post_content' => 'View post content',
	'report_reason' => 'Ohlásit důvod',
	
	// Move thread
	'move_to' => 'Přemístit do:',
	
	// Merge threads
	'merge_instructions' => 'The thread to merge with <strong>must</strong> be within the same forum. Move a thread if necessary.',
	'merge_with' => 'Merge with:',
	
	// Other
	'forum_error' => 'Sorry, we couldn\'t find that forum or topic.',
	'are_you_logged_in' => 'Jste přihlášen?',
	'online_users' => 'Online Users',
	'no_users_online' => 'There are no users online.',
	
	// Search
	'search_error' => 'Please input a search query between 1 and 32 characters long.'
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
	'greeting' => 'Dobrý den',
	'message' => 'Děkujeme že jste se registrovali! Potvrďte svoji registraci kliknutím na následující link:',
	'thanks' => 'Děkujeme.'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => 's', // Shortened "seconds", eg "s"
	'less_than_a_minute' => 'less than a minute ago',
	'1_minute' => 'před chvílí',
	'_minutes' => 'před {x} minutami',
	'about_1_hour' => 'před hodinou',
	'_hours' => 'před {x} hodinami',
	'1_day' => 'před 1 dnem',
	'_days' => 'před {x} dny',
	'about_1_month' => 'před měsícem',
	'_months' => 'před {x} měsíci',
	'about_1_year' => 'před rokem',
	'over_x_years' => 'před {x} lety'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => 'Display _MENU_ records per page', // Don't replace "_MENU_"
	'nothing_found' => 'No results found',
	'page_x_of_y' => 'stránka _PAGE_ z _PAGES_', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'No records available',
	'filtered' => '(filtered from _MAX_ total records)' // Don't replace "_MAX_"
);
 
?>