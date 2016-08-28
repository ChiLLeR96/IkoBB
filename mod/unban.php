<?php

define('BASEPATH', 'Staff');
require_once('../applications/wrapper.php');

if (!$IKO->perm->check('access_moderation')) {
    redirect(SITE_URL);
}//Checks if user has permission to create a thread.
$IKO->tpl->getTpl('page');

$content = '';

if ($PGET->g('id')) {
    $MYSQL->bind('id', $PGET->g('id'));
    $query = $MYSQL->query("SELECT * FROM {prefix}users WHERE id = :id");

    if (!empty($query)) {

        if ($query['0']['is_banned'] == "1") {

            $MYSQL->bind('id', $PGET->g('id'));

            if ($MYSQL->query("UPDATE {prefix}users SET is_banned = 0, user_group = DEFAULT WHERE id = :id") > 0) {
                $content .= $IKO->tpl->entity(
                    'success_notice',
                    'content',
                    str_replace(
                        '%url%',
                        SITE_URL . '/members.php/cmd/user/id/' . $query['0']['id'],
                        $LANG['mod']['ban']['unban_success']
                    )
                );
            } else {
                $content .= $IKO->tpl->entity(
                    'danger_notice',
                    'content',
                    $LANG['mod']['ban']['unban_error']
                );
            }

        } else {
            $content .= $IKO->tpl->entity(
                'danger_notice',
                'content',
                $LANG['mod']['ban']['already_unbanned']
            );
        }

    } else {
        redirect(SITE_URL);
    }

} else {
    redirect(SITE_URL);
}

$IKO->tpl->addParam(
    array(
        'page_title',
        'content'
    ),
    array(
        $LANG['mod']['ban']['unban'],
        $content
    )
);

echo $IKO->tpl->output();

?>