<?php
include_once "class.og_like.php";

function smarty_function_mttweetbutton($args, &$ctx) {
    $oglike = new OGLike($args, $ctx);
    return $oglike->_get_tweet();
}

