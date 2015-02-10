<?php

/**
 * Form for deletion of an entity
 * @param  array $routeParams 
 * @param  string $label       
 * @return Form              
 */
function delete_form($routeParams, $label = 'Delete') {
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

    $form .= Form::submit($label, ['class' => 'btn btn-danger']);

    return $form .= Form::close();
}//delete_form()