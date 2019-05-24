<?php
if (have_comments(  )) {
    // while (have_comments(  )) {
    //     the_comment(  );
    // }
    wp_list_comments();
} else {
    echo 'there is no comment.';
}

comment_form();