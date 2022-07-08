<?php
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__ . DS);

require BASE_PATH.'vendor/autoload.php';
require BASE_PATH.'config/init.php';

if (file_exists(BASE_PATH.'config/settings.php')) {

    // Include shortcut functions used in template htmls.
    require BASE_PATH.'config/template_functions.php';

    // URLs
    $route->any('/', 'App\homeController@index')->as('index');
    $route->any('/login', 'App\homeController@login')->as('login');
    $route->any('/guest-login', 'App\homeController@guest_login')->as('guest-login');
    $route->any('/logout', 'App\homeController@logout')->as('logout');
    $route->any('/register', 'App\homeController@register')->as('register');
    $route->any('/forgot-password', 'App\homeController@forgot_password')->as('forgot-password');
    $route->any('/reset-password', 'App\homeController@reset_password')->as('reset-password');
    $route->any('/privacy', 'App\homeController@privacy')->as('privacy');
    $route->any('/terms', 'App\homeController@terms')->as('terms');
    $route->any('/about', 'App\homeController@about')->as('about');
    $route->any('/contact', 'App\homeController@contact')->as('contact');
    $route->get('/css/color_css', 'App\homeController@color_css')->as('color_css');
    $route->any('/dashboard', 'App\adminController@index')->as('dashboard');
    $route->any('/install', 'App\installController@installed')->as('installed');
    $route->any('/update', 'App\installController@update')->as('update');
    $route->any('/{chatroomslug}', 'App\homeController@chat_room')->as('chat-room');
    $route->get('/js/chatnet_js', 'App\homeController@chatnet_js')->as('chatnet_js');
    $route->get('/js/index_js', 'App\homeController@index_js')->as('index_js');
    $route->get('/js/scripts_js', 'App\homeController@scripts_js')->as('scripts_js');
    $route->any('/setlang/{reqlang}', 'App\homeController@setlang')->as('setlang');

    $route->any('/dashboard/general', 'App\adminController@general')->as('dashboard-general');
    $route->any('/dashboard/email', 'App\adminController@email')->as('dashboard-email');
    $route->any('/dashboard/timing', 'App\adminController@timing')->as('dashboard-timing');
    $route->any('/dashboard/image', 'App\adminController@image')->as('dashboard-image');
    $route->any('/dashboard/color', 'App\adminController@color')->as('dashboard-color');
    $route->any('/dashboard/chatpage', 'App\adminController@chatpage')->as('dashboard-chatpage');
    $route->any('/dashboard/homepage', 'App\adminController@homepage')->as('dashboard-homepage');
    $route->any('/dashboard/header', 'App\adminController@header')->as('dashboard-header');
    $route->any('/dashboard/footer', 'App\adminController@footer')->as('dashboard-footer');
    $route->any('/dashboard/gif', 'App\adminController@gif')->as('dashboard-gif');
    $route->any('/dashboard/policy', 'App\adminController@policy')->as('dashboard-policy');
    $route->any('/dashboard/about', 'App\adminController@about')->as('dashboard-about');
    $route->any('/dashboard/contact', 'App\adminController@contact')->as('dashboard-contact');
    $route->any('/dashboard/chatroom_edit', 'App\adminController@chatroom_edit')->as('dashboard-chatroom-edit');
    $route->any('/dashboard/chatroom_list', 'App\adminController@chatroom_list')->as('dashboard-chatroom-list');
    $route->any('/dashboard/chatroom_users', 'App\adminController@chatroom_users')->as('dashboard-chatroom-users');
    $route->any('/dashboard/user_list', 'App\adminController@user_list')->as('dashboard-user-list');
    $route->any('/dashboard/user_view', 'App\adminController@user_view')->as('dashboard-user-view');
    $route->any('/dashboard/user_add', 'App\adminController@user_add')->as('dashboard-user-add');
    $route->any('/dashboard/user_chats', 'App\adminController@user_chats')->as('dashboard-user-chats');
    $route->any('/dashboard/load-chats', 'App\adminController@load_chats')->as('dashboard-load-chats');
    $route->any('/dashboard/load-more-chats', 'App\adminController@load_more_chats')->as('dashboard-load-more-chats');
    $route->any('/dashboard/languages', 'App\adminController@languages')->as('dashboard-languages');
    $route->any('/dashboard/language-edit', 'App\adminController@language_edit')->as('dashboard-language-edit');
    $route->any('/dashboard/language-translation', 'App\adminController@language_translation')->as('dashboard-language-translation');
    $route->any('/dashboard/profanity', 'App\adminController@profanity')->as('dashboard-profanity');
    $route->any('/dashboard/guest_list', 'App\adminController@guest_list')->as('dashboard-guest-list');
    $route->get('/dashboard/js/admin_js', 'App\adminController@admin_js')->as('dashboard-admin_js');
    $route->any('/dashboard/rebuild-translate', 'App\adminController@rebuild_translate')->as('dashboard-rebuild-translate');
    $route->any('/dashboard/registration-settings', 'App\adminController@registration_settings')->as('dashboard-registration-settings');
    $route->any('/dashboard/advertisements', 'App\adminController@advertisements')->as('dashboard-advertisements');


    // Ajax
    $route->any('ajax/heartbeat', 'App\ajaxController@heartbeat')->as('ajax-heartbeat');
    $route->any('ajax/save-message', 'App\ajaxController@save_message')->as('ajax-save-message');
    $route->any('ajax/get-active-info', 'App\ajaxController@get_active_info')->as('ajax-get-active-info');
    $route->any('ajax/load-chats', 'App\ajaxController@load_chats')->as('ajax-load-chats');
    $route->any('ajax/save-profile', 'App\ajaxController@save_profile')->as('ajax-save-profile');
    $route->any('ajax/add-profile', 'App\ajaxController@add_profile')->as('ajax-add-profile');
    $route->any('ajax/online-list', 'App\ajaxController@online_list')->as('ajax-online-list');
    $route->any('ajax/load-more-online-list', 'App\ajaxController@load_more_online_list')->as('ajax-load-more-online-list');
    $route->any('ajax/updated-chats', 'App\ajaxController@updated_chats')->as('ajax-updated-chats');
    $route->any('ajax/send-images', 'App\ajaxController@send_images')->as('ajax-send-images');
    $route->any('ajax/send-files', 'App\ajaxController@send_files')->as('ajax-send-files');
    $route->any('ajax/send-audio', 'App\ajaxController@send_audio')->as('ajax-send-audio');
    $route->any('ajax/get-strickers', 'App\ajaxController@get_stickers')->as('ajax-get-stickers');
    $route->any('ajax/active-user-restriction', 'App\ajaxController@active_user_restriction')->as('ajax-active-user-restriction');
    $route->any('ajax/active-group-restriction', 'App\ajaxController@active_group_restriction')->as('ajax-active-group-restriction');
    $route->any('ajax/change-user-status', 'App\ajaxController@change_user_status')->as('ajax-change-user-status');
    $route->any('ajax/update-settings', 'App\ajaxController@update_settings')->as('ajax-update-settings');
    $route->any('ajax/update-chatroom', 'App\ajaxController@update_chatroom')->as('ajax-update-chatroom');
    $route->any('ajax/get-chatroom', 'App\ajaxController@get_chatroom')->as('ajax-get-chatroom');
    $route->any('ajax/chatroom-user-restriction', 'App\ajaxController@chatroom_user_restriction')->as('ajax-chatroom-user-restriction');
    $route->any('ajax/load-more-chats', 'App\ajaxController@load_more_chats')->as('ajax-load-more-chats');
    $route->any('ajax/ajax-chatroom-search', 'App\ajaxController@chatroom_search')->as('ajax-chatroom-search');
    $route->any('ajax/ajax-chatroom-load-more', 'App\ajaxController@chatroom_load_more')->as('ajax-chatroom-load-more');
    $route->any('ajax/ajax-delete-message', 'App\ajaxController@delete_message')->as('ajax-delete-message');
    $route->any('ajax/ajax-launch-call', 'App\ajaxController@launch_call')->as('ajax-launch-call');
    $route->any('ajax/language-update', 'App\ajaxController@language_update')->as('ajax-language-update');
    $route->any('ajax/language-delete', 'App\ajaxController@language_delete')->as('ajax-language-delete');
    $route->any('ajax/update_translation', 'App\ajaxController@update_translation')->as('ajax-update-translation');
    $route->any('ajax/delete_users', 'App\ajaxController@delete_users')->as('ajax-delete-users');
    $route->any('ajax/chat-search', 'App\ajaxController@chat_search')->as('ajax-chat-search');
    $route->any('ajax/room-user-search', 'App\ajaxController@room_user_search')->as('ajax-room-user-search');
    $route->any('/install/ajax', 'App\installController@ajax')->as('ajax');
    $route->any('ajax/get-message', 'App\ajaxController@get_message')->as('ajax-get-message');
    $route->any('ajax/delete-chatroom', 'App\ajaxController@delete_chatroom')->as('ajax-delete-chatroom');
    $route->any('ajax/delete-chats', 'App\ajaxController@delete_chats')->as('ajax-delete-chats');

    // cron jobs
    $route->any('cron/delete-guests', 'App\cronController@delete_guests')->as('cron-delete-guests');

    // chat rooms
    $route->any('/{chatroomslug}/{activechat}?', 'App\homeController@chat_room')->as('chat-room-active');

}else{
    $route->any('/', 'App\installController@index')->as('index');
    $route->any('/install', 'App\installController@install')->as('install');
    $route->any('/install/ajax', 'App\installController@ajax')->as('ajax');
}

$route->end();

?>
