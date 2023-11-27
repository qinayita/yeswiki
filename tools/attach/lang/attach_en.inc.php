<?php

return [

    // controllers/ApiController.php
    'ATTACH_GET_URLIMAGE_CACHE_API_HELP' => "Gives cache filename for wanted image\n".
        "Need anti-csrf token!",
        'ATTACH_GET_CACHE_URLIMAGE_NO_FILE' => 'Not existing image file',

    // libs/attach.lib.php
    'ATTACH_ACTION_ATTACH' => 'Action {{attach ...}}',
    'ATTACH_PARAM_DESC_REQUIRED' => '"desc" parameter required for an image',
    'ATTACH_PARAM_HEIGHT_NOT_NUMERIC' => '"height" parameter, in pixels, should be a number integer',
    'ATTACH_PARAM_WIDTH_NOT_NUMERIC' => '"width" parameter, in pixels, should be a number integer',
    'ATTACH_UPLOAD_FORM_FOR_FILE' => 'Upload form for file',
    'ATTACH_BACK_TO_PAGE' => 'Back to the page',
    'NO_RIGHT_TO_WRITE_IN_THIS_PAGE' => 'No rights to write in this page',
    // 'INVALID_REQUEST_METHOD' => 'M&eacute;thode de requ&egrave;te invalide',
    // 'ERROR_MOVING_TEMPORARY_FILE' => 'Erreur lors du d&eacute;placement du fichier temporaire',
    // 'ERROR_UPLOAD_MAX_FILESIZE' => 'Le fichier t&eacute;l&eacute;charg&eacute; exc&ecirc;de la taille de upload_max_filesize, configur&eacute; dans le php.ini.',
    // 'ERROR_MAX_FILE_SIZE' => 'Le fichier t&eacute;l&eacute;charg&eacute; exc&ecirc;de la taille de MAX_FILE_SIZE, qui a &eacute;t&eacute; sp&eacute;cifi&eacute;e dans le formulaire HTML.',
    // 'ERROR_PARTIAL_UPLOAD' => 'Le fichier n\'a &eacute;t&eacute; que partiellement t&eacute;l&eacute;charg&eacute;.',
    // 'ERROR_NO_FILE_UPLOADED' => 'Aucun fichier n\'a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute;.',
    // 'ERROR_NOT_AUTHORIZED_EXTENSION' => 'Le fichier n\'a pas une extension autorisée, voici celles que la configuration autorise : ',
    'ATTACH_ACTION_FULLIMAGELINK_TEXT' => "Add a link to only display the full image",
    
    'ATTACH_FILE_MANAGEMENT' => 'File management',
    'ATTACH_TRASH' => 'Trash',
    'ATTACH_NO_ATTACHED_FILES' => 'At this time, no attached files to the page {tag}.',
    'ATTACH_FILENAME' => 'Filename',
    'ATTACH_SIZE' => 'Size',
    'ATTACH_DATE_OF_MODIFICATION' => 'Date of modification',
    'ATTACH_RESTORE' => 'Restore',
    'ATTACH_REAL_FILENAME' => 'Real filename : {file}',
    'ATTACH_DELETED_ON' => ' - Deleted on : {date}',
    'ATTACH_EMPTY_TRASH' => 'Empty trash',
    'ATTACH_EMPTY_TRASH_NOTICE' => 'files are forever deleted from trash.',
    'ATTACH_FILE_MANAGEMENT_TITLE' => 'Management of files attached to page {tag}',
    'ATTACH_FILE_MANAGEMENT_WARNING' => 'Files deleted from this page are forever deleted',
    'ATTACH_PAGE_REVISION' => 'Page revision',
    'ATTACH_FILE_REVISION' => 'File revision',
    'ATTACH_DELETION' => 'Deletion',

    // actions/filemanager.php
    'ATTACH_NO_RIGHTS_TO_ACCESS_FILEMANAGER' => 'You have no rights to access the filemanager',
    // 'FILEMANAGER_ACTION_NEED_ACCESS' => 'Seul le propriétaire de cette page peut accéder au gestionnaire des fichiers attaché',

    // actions/backgroundimage.php
    // 'ATTACH_ACTION_BACKGROUNDIMAGE' => 'Action {{backgroundimage ...}}',
    // 'ATTACH_PARAM_FILE_OR_BGCOLOR_NOT_FOUND' => 'il faut indiquer soit une image avec le paramètre "file" ou une couleur de fond avec le paramètre "bgcolor"',

    // actions/player.php
    'ATTACH_ACTION_PLAYER' => 'Action {{player ...}}',
    'ATTACH_DOWNLOAD_THE_FILE' => 'Download the file',
    'ATTACH_URL_NOT_VALID' => 'Invalid URL or not openable',
    'ATTACH_PARAM_URL_REQUIRED' => '"url" parameter required',
    'ATTACH_PLAYER_CAN_ONLY_OPEN_FILES_LIKE' => 'The player can only open .mp3, .flv and .mm files and your URL',
    'ATTACH_NOT_LINKED_TO_GOOD_FILE_EXTENSION' => 'is not linked to those type of files',

    // actions/pointimage.php
    'ATTACH_ACTION_POINTIMAGE' => 'Action {{pointimage ...}}',
    'ATTACH_PARAM_FILE_NOT_FOUND' => '"file" parameter required',
    'ATTACH_PARAM_FILE_MUST_BE_IMAGE' => '"file" parameter must be an image (.gif,.jpg,.jpeg or .png)',
    'ATTACH_DEFAULT_MARKER' => 'Default marker',
    'ATTACH_ADD_MARKER' => 'Add a marker',
    'ATTACH_TITLE' => 'Title',
    'ATTACH_DESCRIPTION' => 'Description',
    'ATTACH_CANCEL' => 'Cancel',
    'ATTACH_SAVE' => 'Save',
    
    // actions/video.php
    'ATTACH_ACTION_VIDEO_PARAM_ERROR' => 'The action video must be called with parameters « id » and « serveur ». For « serveur », only values « vimeo » or « youtube » or « peertube » are allowed.',
    
    // actions/pdf.php
    'ATTACH_ACTION_PDF_PARAM_URL_ERROR' => 'The action pdf must be called with parameter « url » and the given url must be on the same host than the wiki(for example \'xxx.yyy.com\'), same schema (for example \'https\') and the same port if specified (for example \'8080\').',
    // 'ATTACH_ACTION_DISPLAY_PDF_TEXT' => 'Afficher le pdf dans la page :',
    // 'ATTACH_ACTION_DISPLAY_PDF_LINK_TEXT' => 'sous forme de lien',
    // 'ATTACH_ACTION_DISPLAY_PDF_INCLUDED_TEXT' => 'directement inclus dans la page',

    // handler edit
    'ACTIVATE_JS_TO_UPLOAD_FILES' => 'Activate JavaScript to upload files',
    'UPLOAD_A_FILE' => 'Upload a file',
    'UPLOAD_A_FILE_SHORT' => 'File',
    'UPLOAD_FILE' => 'Upload file',
    'CANCEL_THIS_UPLOAD' => 'Cancel this upload',
    'INSERT' => 'Insert',
    'DOWNLOAD_LINK_TEXT' => 'Download link text',
    'IMAGE_ALIGN' => 'Image alignment',
    'IMAGE_SIZE' => 'Image size',
    'THUMBNAIL' => 'Thumbnail',
    'MEDIUM' => 'Medium',
    'BIG' => 'Big',
    'ORIGINAL_SIZE' => 'Original size',
    'CAPTION' => 'Caption text',
    'SEE_THE_ADVANCED_PARAMETERS' => 'See the advanced parameters',
    'ADVANCED_PARAMETERS' => 'Advanced parameters',
    'ASSOCIATED_LINK' => 'Associated link',
    'GRAPHICAL_EFFECTS' => 'Graphical effects',
    'WHITE_BORDER' => 'White border',
    'DROP_SHADOW' => 'Drop shadow',
    'ZOOM_HOVER' => 'Zoom on hover',
    'ALT_INFOS' => 'This texte will be displayed instead of the image, if the image is not found',
    'ALTERNATIVE_TEXT' => 'Alternative text',
    // 'NONE' => 'Texte en dessous',
    'LEFT' => 'Left',
    'CENTER' => 'Center',
    'RIGHT' => 'Right',
    'FAILED' => 'Failed',

    // handler ajaxupload
    // 'ATTACH_HANDLER_AJAXUPLOAD_FOLDER_NOT_READABLE' => 'Le dossier de téléchargement n\'est pas accessible en écriture.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_NO_FILE' => 'Pas de fichiers envoyés.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_EMPTY_FILE' => 'Le fichier est vide.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_FILE_TOO_LARGE' => 'Le fichier est trop large.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_AUTHORIZED_EXT' => 'Le fichier n\'a pas une extension autorisée, voici les autorisées : {ext}.',
    // 'ATTACH_HANDLER_AJAXUPLOAD_ERROR' => 'Impossible de sauver le fichier. L\'upload a été annulé ou le serveur a planté...',
    
    // edit config action
    // 'EDIT_CONFIG_HINT_ATTACH-VIDEO-CONFIG[DEFAULT_VIDEO_SERVICE]' => 'Service de vidéo par défaut (peertube, youtube ou vimeo)',
    // 'EDIT_CONFIG_HINT_ATTACH-VIDEO-CONFIG[DEFAULT_PEERTUBE_INSTANCE]' => 'Adresse du serveur peertube par défaut',
    'EDIT_CONFIG_HINT_MAX_FILE_SIZE' => 'Maximum size of uploaded files - bits (ex: Taille maximum des fichiers téléversés - byte (ex: 2097152 for 2MB)',
    // 'EDIT_CONFIG_GROUP_ATTACH' => 'Insertion de médias (images, vidéos)',
];
