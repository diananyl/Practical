<?php

					$pass = rand(100000, 999999);						
					$groups = array(3,4,5);   
					$user_id = new CUser;
					$user_id = $USER->Add(array(
						"NAME"              => $name,						
						"EMAIL"             => $email,
						"LOGIN"             => $email,
						"ACTIVE"            => "Y",
						"GROUP_ID"          => $groups,
						"PASSWORD"          => $pass,
						"CONFIRM_PASSWORD"  => $pass,
						
					));
					
					$USER->Authorize($user_id);
					
						
			
?>			
																
				
				
				
				
				
		