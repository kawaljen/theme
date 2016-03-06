<?php
/*
 * Default Events List Template
 * This page displays a list of events, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output()
 * 
 */
 

$args = apply_filters('em_content_events_args', $args);

if( get_option('dbem_css_evlist') ) echo "<div id='addeventbtn'><a href='../event-form/?action=edit' >ADD YOUR EVENT</a></div><div id='addeventbtn2'><a href='http://localhost/madein2/wordpress/?page_id=144&action=edit' ></a></div><div class='css-events-list'>";

echo EM_Events::output( $args );

if( get_option('dbem_css_evlist') ) echo "</div>";
