<?php
	
	// ПОЛИГОН
	
		function addJs ($ways) { //сеттер addJs принимает параметр $ways (рус. Пути)
			
			$links = explode(',', $ways);
			
			$i = 1;
			while ($i < count ($links)) {
				
				$this->js[$i] = "<script type='text/javascript' src='" . $links[$i] . "'></script>";
				$i++;
			}
			
			$js = implode(' ', $this->js);
			return $js;

		}// close func... addJs
		
		$ways = "один,два,три,четыре";
		
		$links = explode(',', $ways);
		
		
		echo "<pre>";
		print_r ($links);
		echo "</pre>";
		
		
		$links = implode(' ', $links);
		
		echo $links;
		
		
		
		
		
		
		
		
		
		
		
		
		