<?php

// check if should be notified
function check_role(){
	current_user_can($capability);
}

// notify if bad option setting
if(current_user_can(manage_options)){
	if((get_option(users_can_register)==0) && (get_option (default_role)=="administrator")){
		echo "problem";
	}
	else {
	echo "all good";
	}
}
