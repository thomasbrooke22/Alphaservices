	<?php

		# Avoid Error Display
		defined('ROOT_DIR') or die;

		# Before Default Footer Scripts
		Events::exec("@body:beforeAfter");

		# The Footer Scripts
		echo self::include_libraries('body', $exclib, $inclib) . "\n"; 
		
		# After Default Footer Scripts
		Events::exec('@body:after'); 

	?>
		
</body>
</html>