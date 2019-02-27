<?php
//dpm($comment_form);

if($comment_form['#node']->type == 'review') {
hide($comment_form['subject']);
hide($comment_form['comment_body'][LANGUAGE_NONE][0]['format']);
//$comment_form['author']['_author']['#title'] = '1';
//$comment_form['author']['#weight'] = '1';
$comment_form['comment_body']['#attributes']['class'][] = "leftComment";
$comment_form['author']['#children'] = '<div id="edit-author--2" class="form-item form-type-item rightComment">'.
  //<label for="edit-author--2">Your name </label>
 '<a href="/user/1" title="View user profile." class="username" xml:lang="" about="/user/1" typeof="sioc:UserAccount" property="foaf:name" datatype="">admin</a>
</div>';

$comment_form['actions']['#attributes']['class'][0] = "leftComment";



print drupal_render_children($comment_form);

}