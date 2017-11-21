<?php

function ft_get_comment_form(){
    $commenter = wp_get_current_user();
    $comment_form = array(
        'fields'               => array(
            'author' => '<p class="comment-form-author">'
                . '<input id="author" name="author" type="text" value="' . $commenter->display_name . '" size="30" placeholder="Your Email" aria-required="true" /></p>',
            'email'  => '<p class="comment-form-email">'
                . '<input id="email" name="email" type="text" value="'.$commenter->user_email.'" size="30" placeholder="Your Name" aria-required="true" /></p>',
        ),
        'label_submit'  => __( 'Submit Review', '__x__' )
    );

    echo 'get here';

    $comment_form['comment_field'] = '<select name="rating" id="rating">
                                          <option value="">'  . __( 'Rate&hellip;', '__x__' ) . '</option>
                                          <option value="5">' . __( 'Perfect', '__x__' ) . '</option>
                                          <option value="4">' . __( 'Good', '__x__' ) . '</option>
                                          <option value="3">' . __( 'Average', '__x__' ) . '</option>
                                          <option value="2">' . __( 'Not that bad', '__x__' ) . '</option>
                                          <option value="1">' . __( 'Very Poor', '__x__' ) . '</option>
                                        </select>';

    $comment_form['comment_field'] .= '<p class="comment-form-comment">'
        // . '<label for="comment">' . __( 'Your Review', '__x__' ) . '</label>'
        . '<textarea id="comment" name="comment" cols="45" rows="8" ' . $placeholder_comment . ' aria-required="true"></textarea></p>';

    return $comment_form;
}