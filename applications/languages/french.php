<?php

/*
 * IkoBB Language Entity
 * Language: French
 */

$LANG = array(
    //Main Forum
    'bb' => array(
        'forum' => 'Forum',
        'members' => 'Membres',
        'search' => 'Recherche',
        'edit_post_in' => 'Modifier le poste dans:',
        'new_thread_in' => 'Nouveau sujet dans:',
        'new_reply_in' => 'Nouvelle réponse dans:',
        'new_report' => 'Nouveau signalement',
        'new_thread_breadcrumb' => 'Nouveau Sujet',
        'edit_post_breadcrumb' => 'Editer',
        'new_reply_breadcrumb' => 'Répondre',
        'already_watched_thread' => 'Vous suivez déjà ce sujet.',
        'already_unwatched_thread' => 'Vous ne suivez déjà  pas ce sujet.',
        'watch_thread' => 'Vous suivez, à présent, ce sujet.',
        'unwatch_thread' => 'Vous ne suivez désormais plus ce sujet.',
        'error_watching' => 'Erreur : impossible de suivre ce sujet.',
        'error_unwatching' => "Erreur : vous souvez toujours ce sujet.",
        'form' => array(
            'edit_post' => 'Modifier le poste',
            'report' => 'Signaler',
            'report_reason' => 'Raison'
        ),
        'conversations' => array(
            'my_conversations' => 'Mes conversations',
            'page_conversations' => 'Conversations',
            'page_new' => 'Commencer une conversation',
            'page_reply' => 'Répondre à la conversation:',
            'starter' => 'Débutée par',
            'reciever' => 'Envoyée à',
            'by' => 'De:', // not needed anymore
            'for' => 'Pour:', // not needed anymore
            'form_to' => 'À <small>Séparés par un ","</small>',
            'form_send' => 'Envoyer',
            'form_title' => 'Titre',
            'form_reply' => 'Répondre',
            'no_conversations' => 'Pas encore de conversations.',
            'user_not_exist' => "L'utilisateur <strong>%username%</strong> n'existe pas!",
            'message_sent' => 'Votre message à  <strong>%username%</strong> a été envoyé!',
            'error_sending' => "Erreur lors de l'envoi du message à <strong>%username%</strong>.",
            'error_sending_alt' => "Erreur d'envoi du message."
        ), // Left off here
        'members' => array(
            'home' => 'Membres',
            'activate_account' => 'Activer le compte',
            'account_activated' => 'Votre compte a été activé! Clickez pour <a href="' . SITE_URL . '/members.php/cmd/signin">vous connecter</a>.',
            'birthday' => 'Anniversaire',
            'error_activating' => "Une erreur est survenue lors de l'activation de votre compte. Ré-essayez plus tard.",
            'forgot_password' => 'Mot de passe oublié',
            'reset_password' => 'Réinitialisation du mot de passe',
            'error_request_password_reset' => 'Erreur lors de la regénération du mot de passe.',
            'form_reset_password' => 'Réinitialiser le mot de passe',
            'form_email' => 'E-mail',
            'form_password' => 'Mot de passe',
            'form_confirm_password' => 'Confirmez le mot de passe',
            'form_username' => 'Nom d\'utilisateur',
            'form_register' => 'S\'enregistrer',
            'password_reset_link_sent' => 'Un lien pour réinitialiser votre mote de passe vous a été envoyer sur votre boite E-mail.',
            'error_password_reset_token_used' => 'Clé de réinitialisation déjà utilisée. Demandez une nouvelle réinitialisation de mot de passe.',
            'error_password_reset_token_expired' => 'Clé de réinitialisation expirée. Demandez une nouvelle réinitialisation de mot de passe.',
            'error_password_reset_token_unknown' => 'Clé de réinitialisation invalide. Utilisez le lien dans le mail.',
            'error_password_reset_token_missing' => 'Clé de réinitialisation manquante. Utilisez le lien dans le mail.',
            'error_password_reset' => 'Echec du changement de mot de passe.',
            'password_reset_successful' => 'Votre mot de passe à été changé.',
            'register' => "S'enregistrer",
            'password_different' => 'Le mot de passe est différent!',
            'username_taken' => "Nom d'utilisateur déjà pris!",
            'space_user' => "Vous ne devez pas utiliser d'espaces dans votre nom d'utilisateur!",
            'error_register' => "Erreur d'enregistrement, merci d'essayer plus tard.",
            'register_successful' => 'Vous êtes, à présent, enregistré! Vous pouvez vous connecter...',
            'register_successful_email' => 'Un e-mail vient de vous être envoyé pour valider votre enregistrement.',
            'register_message' => 'En cliquant sur "S\'enregistrer", vous adhérez aux  <a href="' . SITE_URL . '/members.php/cmd/rules">règles du forum</a>.',
            'register_disabled' => 'Les inscriptions sont désactivées.',
            'log_in' => 'Se connecter',
            'invalid_login' => 'Identification incorrecte!',
            'login_success' => 'Connecté! Cliquez <a href="' . SITE_URL . '">ici</a> si vous n\'êtes pas redirigé.',
            'email_not_activated' => "Vous n'avez pas activé votre compte. Consulter votre boite mail.",
            'banned' => 'Vous êtes actuellment banni. Contactez les administrateurs pour plus de détail.<br />Date de levée du bannissement: <b>%unban_date%</b><br />Raison du bannissement: <b>%ban_reason%</b>',
            'rules' => 'Règles du forum',
            'rules_message' => 'Tous les utilisateurs adhèrent à la charte du forum.<br />%rules%<br />Contrevenir aux règles peut entrainer la suppression ou l\'édition par un administrateur de votre message. Contrevenir plusieurs fois aux règles peut entraîner un bannissement temporaire ou définitif.',
            'profile_of' => 'Profile de',
            'posted_thread' => 'Nouveau sujet :  <a href="%url%">%title%</a> <small>(%date%)</small><hr size="1" />',
            'replied_to' => 'Sujet Répondu : <a href="%url%">%title%</a> <small>(%date%)</small><hr size="1" />'
        ),
        'profile' => array(
            'profile' => 'Profil',
            'avatar' => 'Avatar',
            'change_avatar' => 'Changer d\'avatar <small>taille maximum de l\'image 500x500 pixels</small>',
            'use_avatar' => 'utiliser un Avatar',
            'use_gravatar' => 'utiliser un Gravatar',
            'use_identicon' => 'utiliser un Identicon',
            'form_save' => 'Enregistrert les modifications',
            'error_adding_gravatar' => 'Erreur lors de l\'ajout du Gravatar. Ré-essayez plus tard.',
            'successful_adding_gravatar' => 'Gravatar enregistré!',
            'error_upload_avatar' => 'Erreur d\'enregistrement de votre nouvel avatar. Ré-essayez plus tard.',
            'successful_upload_avatar' => 'Avatar mis à jour!',
            'successful_identicon' => 'Identicon successfully generated!',
            'about_you' => 'A propos de vous',
            'password' => 'Mot de passe',
            'current_password' => 'Mot de passe actuel',
            'new_password' => 'Nouveau mot de passe',
            'error_updaing_password' => 'Erreur lors de la mise jour du mot de passe.',
            'signature' => 'Signature',
            'timezone' => 'Zone horaire',
            'location' => 'Lieu',
            'error_updating_signature' => 'Erreur de mise à jour de votre signature. Ré-essayez plus tard.',
            'personal_details' => 'Informations personnelles',
            'confirm_password' => 'Confirmer le mot de passe',
            'change_theme' => 'Changer de thème',
            'theme_set' => 'Le thème a été modifié.',
            'theme_error' => 'Erreur lors du changement de thème.',
            'theme_not_exist' => 'Le theme n\'existe pas.',
            'gender' => 'Genre',
            'female' => 'Femmme',
            'male' => 'Homme',
            'not_telling' => 'n.c.'
        )
    ),
    //Error Pages
    'error_pages' => array(
        '404' => array(
            'header' => '404',
            'message' => 'Désolé, Impossible de trouver la ressource demandée.'
        ),
        '403' => array(
            'header' => '403',
            'message' => 'Sorry, you are not allowed to view the content. Please register and/or sign in to see this page.'
        )
    ),
    'errors' => array(
        'thread_tracker_insert' => 'Une erreur est survenue lors de la mise en place du suivi de sujet.',
        'thread_tracker_update' => 'Une erreur est survenue lors de la mise à jour du suivi de sujet.',
        'generate_identicon' => 'An Error accured while generating an identicon'
    ),
    //Global Form Variables
    'global_form_process' => array(
        'all_fields_required' => 'Tous les champ sont obligatoires!',
        'enter_search_query' => 'Saisissez votre recherche!',
        'error_updating_post' => 'Une erreur est survenue lors de la mise a jour du message. Ré-essayez plus tard.',
        'error_creating_thread' => 'Une erreur est survenue lors de la création du sujet. Ré-essayez plus tard.',
        'error_replying_thread' => 'Une erreur est survenue lors de l\'enregistrement de votre réponse. Ré-essayez plus tard.',
        'error_submitting_report' => 'Une erreur est survenue lors de l\'envoi du signalement. Ré-essayez plus tard.',
        'thread_create_success' => 'Nouveau sujet créé! Vous allez être redirigé...',
        'report_create_success' => 'Le signalement à été envoyez!',
        'search_no_result' => 'Aucun résultat ne correspond à votre recherche.',
        'search_no_user' => 'You did not searched for users.',          // Translate me
        'search_by' => 'By',          // Translate me
        'different_message_previous' => 'Merci de ne pas ecrire 2 fois le même message.',
        'email_not_exist' => 'Adresse e-mail introuvable dans notre base!',
        'email_used' => 'Adresse e-mail déjà utilisée. Merci d\'en fournir une nouvelle',
        'invalid_email' => 'Adresse e-mail invalide!',
        'invalid_file_format' => 'Format de fichier invalide!',
        'img_dimension_limit' => 'Image trop grande!',
        'save_success' => 'Enregistré!',
        'error_saving' => 'Erreur lors de l\'enregistrement. Ré-essayez plus tard.',
        'invalid_password' => 'Mot de passe invalide!',
        'captcha_incorrect' => 'Captcha incorrect!'
    ),
    //Email Variables.
    'email' => array(
        'forgot_password' => array(
            'subject' => '[ %site_name% ] Réinitialisation de mot de votre mot de passe',
            'content' => '<p>Vous avez demandé la réinitialisation de votre mot de passe sur %site_name%.</p><p>Pour modifier votre mot de passe;suivez ce lien: %token_url%</p>'
        ),
        'register' => array(
            'subject' => '[ %site_name% ] Activation de votre compte',
            'content' => '<p>Vous vous êtes enregistré sur %site_name%</p><p>Cliquez <a href="%activate_url%">ici</a> pour activer votre compte.</p>'
        ),
        'notify' => array(
            'more_info' => '<br />Cliquez <a href="%url%">ici</a> pour en savoir plus.'
        )
    ),
    //Moderator Panel
    'mod' => array(
        'ban' => array(
            'ban' => 'Bannir l\'utilisateur',
            'ban_success' => 'l\'utilisateur a été banni. <a href="%url%">Retour au profil de l\'utilisateur</a>.',
            'ban_error' => 'Erreur lors du bannissement de l\'utilisateur.',
            'already_banned' => 'Utilisateur déjà banni.',
            'unban' => 'Dé-bannir l\'utilisateur',
            'unban_success' => 'Le compte de l\'utilisateur a été réactiver. <a href="%url%">Retour au profil de l\'utilisateur</a>.',
            'unban_error' => 'Erreur lors de la réactivation du compte.',
            'already_unbanned' => 'Compte déja réactivé.',
        ),
        'close' => array(
            'close' => 'Fermer le sujet',
            'close_success' => 'Le sujet est clos. <a href="%url%">Retour au sujet</a>.',
            'close_error' => 'Erreur lors de la clôture du sujet.',
            'already_closed' => 'Le sujet est déjà clos.',
            'open' => 'Re-ouvrir un sujet',
            'open_success' => 'Le sujet à été ré-ouvert. <a href="%url%">Retour au sujet</a>.',
            'open_error' => 'Erreur lors de la ré-ouverture du sujet.',
            'already_opened' => 'Le sujet n\'est pas clos.'
        ),
        'stick' => array(
            'stick' => 'Epingler le sujet',
            'stick_success' => 'Le sujet a été épinglé. <a href="%url%">Retour au sujet</a>.',
            'stick_error' => 'Erreur lors de l\'épinglage du sujet.',
            'already_stuck' => 'Le sujet est déjà épinglé..',
            'unstick' => 'Décrocher le sujet',
            'unstick_success' => 'Le sujet à été décroché. <a href="%url%">Retour au sujet</a>.',
            'unstick_error' => 'Une erreur est survenue le sujet est toujours épinglé.',
            'already_unstuck' => 'Le sujet n\'est pas épinglé .'
        ),
        'reports' => array(
            'reports' => 'Signalements',
            'thread' => 'Sujet:',
            'user' => 'Utilisateur:',
            'reason' => 'Raison:',
            'reported_time' => 'Heure du signalement:',
            'no_reports' => 'Il n\'y pas de signalement actuellement.',
            'deleted' => 'Report has been deleted.' //please translate me
        ),
        'delete' => array(
            'delete' => 'Supprimer le message',
            'thread_deleted' => 'Le sujet a été supprimé.',
            'error_deleting' => 'Erreur de suppresion du message.',
            'post_deleted' => 'Le message a été supprimé.'
        ),
        'move' => array(
            'move' => 'Déplacer le sujet',
            'thread_moved' => 'Le sujet a été déplacé. <a href="%url%">Retour au sujet</a>.',
            'error_moving' => 'Erreur lors du déplacement du sujet.'
        ),
        'del_report' => array(
            'delete' => 'Supprimer le signalement',
            'report_deleted' => 'Le signalement à été supprimé. <a href="%url%">Retour</a>.',
            'error_deleting' => 'Erreur lors de la suppression du signalement. <a href="%url%">Retour</a>.'
        )
    ),
    'notification' => array(
        'mention' => '%username% vous a mentinné dans un message!',
        'reply' => '%username% a répondu au sujet <strong>%thread_title%</strong>',
        'quoted' => '%username% a cité votre message dans <strong>%thread_title%</strong>'
    ),
    'flat' => array(
        'merge_post' => '----------'
    ),
    'time' => array(
        'hours_ago' => 'il y a %time% heures',
        'hour_ago' => '%time% hour ago',
        'minutes_ago' => 'il y a %time% minutes',
        'minute_ago' => '%time% minutes ago',
        'just_now' => 'A l\'instant'
    ),
    // ISO 3166-1 Country codes
    'location' => array(
        '--' => 'Aucun Sélectionné',
        'AD' => 'Andorra',
        'AE' => 'United Arab Emirates',
        'AF' => 'Afghanistan',
        'AG' => 'Antigua and Barbuda',
        'AI' => 'Anguilla',
        'AL' => 'Albania',
        'AM' => 'Armenia',
        'AO' => 'Angola',
        'AQ' => 'Antarctica',
        'AR' => 'Argentina',
        'AS' => 'American Samoa',
        'AT' => 'Austria',
        'AU' => 'Australia',
        'AW' => 'Aruba',
        'AX' => 'Aland Islands',
        'AZ' => 'Azerbaijan',
        'BA' => 'Bosnia and Herzegovina',
        'BB' => 'Barbados',
        'BD' => 'Bangladesh',
        'BE' => 'Belgium',
        'BF' => 'Burkina Faso',
        'BG' => 'Bulgaria',
        'BH' => 'Bahrain',
        'BI' => 'Burundi',
        'BJ' => 'Benin',
        'BL' => 'Saint Barthélemy',
        'BM' => 'Bermuda',
        'BN' => 'Brunei Darussalam',
        'BO' => 'Bolivia',
        'BQ' => 'Bonaire',
        'BR' => 'Brazil',
        'BS' => 'Bahamas',
        'BT' => 'Bhutan',
        'BV' => 'Bouvet Island',
        'BW' => 'Botswana',
        'BY' => 'Belarus',
        'BZ' => 'Belize',
        'CA' => 'Canada',
        'CC' => 'Cocos Islands',
        'CD' => 'Congo (the Democratic Republic)',
        'CF' => 'Central African Republic',
        'CG' => 'Congo',
        'CH' => 'Switzerland',
        'CI' => 'Cote d\'Ivoire',
        'CK' => 'Cook Islands',
        'CL' => 'Chile',
        'CM' => 'Cameroon',
        'CN' => 'China',
        'CO' => 'Colombia',
        'CR' => 'Costa Rica',
        'CU' => 'Cuba',
        'CV' => 'Cabo Verde',
        'CW' => 'Curacao',
        'CX' => 'Christmas Island',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DE' => 'Germany',
        'DJ' => 'Djibouti',
        'DK' => 'Denmark',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'DZ' => 'Algeria',
        'EC' => 'Ecuador',
        'EE' => 'Estonia',
        'EG' => 'Egypt',
        'EH' => 'Western Sahara',
        'ER' => 'Eritrea',
        'ES' => 'Spain',
        'ET' => 'Ethiopia',
        'FI' => 'Finland',
        'FJ' => 'Fiji',
        'FK' => 'Falkland Islands',
        'FM' => 'Micronesia',
        'FO' => 'Faroe Islands',
        'FR' => 'France',
        'GA' => 'Gabon',
        'GB' => 'United Kingdom',
        'GD' => 'Grenada',
        'GE' => 'Georgia',
        'GF' => 'French Guiana',
        'GG' => 'Guernsey',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GL' => 'Greenland',
        'GM' => 'Gambia',
        'GN' => 'Guinea',
        'GP' => 'Guadeloupe',
        'GQ' => 'Equatorial Guinea',
        'GR' => 'Greece',
        'GS' => 'South Georgia and the South Sandwich Islands',
        'GT' => 'Guatemala',
        'GU' => 'Guam',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HK' => 'Hong Kong',
        'HM' => 'Heard Island and McDonald Islands',
        'HN' => 'Honduras',
        'HR' => 'Croatia',
        'HT' => 'Haiti',
        'HU' => 'Hungary',
        'ID' => 'Indonesia',
        'IE' => 'Ireland',
        'IL' => 'Israel',
        'IM' => 'Isle of Man',
        'IN' => 'India',
        'IO' => 'British Indian Ocean Territory',
        'IQ' => 'Iraq',
        'IR' => 'Iran',
        'IS' => 'Iceland',
        'IT' => 'Italy',
        'JE' => 'Jersey',
        'JM' => 'Jamaica',
        'JO' => 'Jordan',
        'JP' => 'Japan',
        'KE' => 'Kenya',
        'KG' => 'Kyrgyzstan',
        'KH' => 'Cambodia',
        'KI' => 'Kiribati',
        'KM' => 'Comoros',
        'KN' => 'Saint Kitts and Nevis',
        'KP' => 'The Democratic People\'s Republic of Korea',
        'KR' => 'The Republic of Korea',
        'KW' => 'Kuwait',
        'KY' => 'Cayman Islands',
        'KZ' => 'Kazakhstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LB' => 'Lebanon',
        'LC' => 'Saint Lucia',
        'LI' => 'Liechtenstein',
        'LK' => 'Sri Lanka',
        'LR' => 'Liberia',
        'LS' => 'Lesotho',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'LV' => 'Latvia',
        'LY' => 'Libya',
        'MA' => 'Morocco',
        'MC' => 'Monaco',
        'MD' => 'Moldova',
        'ME' => 'Montenegro',
        'MF' => 'Saint Martin',
        'MG' => 'Madagascar',
        'MH' => 'Marshall Islands',
        'MK' => 'Macedonia',
        'ML' => 'Mali',
        'MM' => 'Myanmar',
        'MN' => 'Mongolia',
        'MO' => 'Macao',
        'MP' => 'Northern Mariana Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MS' => 'Montserrat',
        'MT' => 'Malta',
        'MU' => 'Mauritius',
        'MV' => 'Maldives',
        'MW' => 'Malawi',
        'MX' => 'Mexico',
        'MY' => 'Malaysia',
        'MZ' => 'Mozambique',
        'NA' => 'Namibia',
        'NC' => 'New Caledonia',
        'NE' => 'Niger',
        'NF' => 'Norfolk Islands',
        'NG' => 'Nigeria',
        'NI' => 'Nicaragua',
        'NL' => 'Netherlands',
        'NO' => 'Norway',
        'NP' => 'Nepal',
        'NR' => 'Nauru',
        'NU' => 'Niue',
        'NZ' => 'New Zealand',
        'OM' => 'Oman',
        'PA' => 'Panama',
        'PE' => 'Peru',
        'PF' => 'French Polynesia',
        'PG' => 'Papua New Guinea',
        'PH' => 'Philippines',
        'PK' => 'Pakistan',
        'PL' => 'Poland',
        'PM' => 'Saint Pierre and Miquelon',
        'PN' => 'Pitcairn',
        'PR' => 'Puerto Rico',
        'PS' => 'Palestine',
        'PT' => 'Portugal',
        'PW' => 'Palau',
        'PY' => 'Paraguay',
        'QA' => 'Qatar',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RS' => 'Serbia',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'SA' => 'Saudi Arabia',
        'SB' => 'Solomon Islands',
        'SC' => 'Seychelles',
        'SD' => 'Sudan',
        'SE' => 'Sweden',
        'SG' => 'Singapore',
        'SH' => 'Saint Helena',
        'SI' => 'Slovenia',
        'SJ' => 'Svalbard and Jan Mayen',
        'SK' => 'Slovakia',
        'SL' => 'Sierra Leone',
        'SM' => 'San Marino',
        'SN' => 'Senegal',
        'SO' => 'Somalia',
        'SR' => 'Suriname',
        'SS' => 'South Sudan',
        'ST' => 'Sao Tome and Pricipe',
        'SV' => 'El Salvador',
        'SX' => 'Sint Maarten',
        'SY' => 'Syrian Arab Republic',
        'SZ' => 'Swaziland',
        'TC' => 'Turks and Caicos Islands',
        'TD' => 'Chad',
        'TF' => 'French Southern Terrotories',
        'TG' => 'Togo',
        'TH' => 'Thailand',
        'TJ' => 'Tajikistan',
        'TK' => 'Tokelau',
        'TL' => 'Timor-Leste',
        'TM' => 'Turkmenistan',
        'TN' => 'Tunisia',
        'TO' => 'Tonga',
        'TR' => 'Turkey',
        'TT' => 'Trinidad and Tobago',
        'TV' => 'Tuvalu',
        'TW' => 'Taiwan',
        'TZ' => 'Tanzania',
        'UA' => 'Ukraine',
        'UG' => 'Uganda',
        'UM' => 'United States Minor Outlying Islands',
        'US' => 'United States',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VA' => 'Holy See',
        'VC' => 'Venezuela',
        'VG' => 'Virgin Islands (GB)',
        'VI' => 'Virgin Islands (US)',
        'VN' => 'Viet Nam',
        'VU' => 'Vanatu',
        'WF' => 'Wallis and Futuna',
        'WS' => 'Samoa',
        'YE' => 'Yemen',
        'YT' => 'Mayotte',
        'ZA' => 'South Africa',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe'
    ),
    'date' => array(
        'month_1' => 'Janvier',
        'month_2' => 'Février',
        'month_3' => 'Mars',
        'month_4' => 'Avril',
        'month_5' => 'Mai',
        'month_6' => 'Juin',
        'month_7' => 'Juillet',
        'month_8' => 'Août',
        'month_9' => 'Septembre',
        'month_10' => 'Octobre',
        'month_11' => 'Novembre',
        'month_12' => 'Décembre',
        'day_1' => 'Lundi',
        'day_2' => 'Mardi',
        'day_3' => 'Mercredi',
        'day_4' => 'Jeudi',
        'day_5' => 'Vendredi',
        'day_6' => 'Samedi',
        'day_7' => 'Dimanche'
    )
);

?>
