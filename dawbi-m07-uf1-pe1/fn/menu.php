<?php
/**
 * get the categories from csv file
 * @param string $filename csv filename
 * @return array category array
 * @return bool if the file does not exist
 */
function categories(string $filename): array | bool {
    if (file_exists($filename)) {
        $stream = fopen($filename, 'r');
        while ($categories = fgetcsv($stream, separator: ';')) {
            return $categories;
        }
        fclose($stream);
    } else {
        return false;
    }
}


/**
 * get the menu from csv file
 * @param string $filename csv filename
 * @return array menus array
 * @return bool if the file does not exist
 */
function menu(string $filename): array | bool {
    $menu = array();
    if (file_exists($filename)) {
        $stream = fopen($filename, 'r');
		while ($data = fgetcsv($stream, separator: ';')) {
			$dish = array(
				'id' => $data[0],
				'category' => $data[1],
				'name' => $data[2],
			   	'price' => $data[3]
			);
			array_push($menu, $dish);
        }
        fclose($stream);
        return $menu;
    } else {
        return false;
    }
}
		

/**
 * shows menus according to their category
 * @param array $categories categories array
 * @param array $menu menus array
 */
function table(array $categories, array $menu): void {
	foreach($categories as $category) {
		echo "
    		<table>
        		<caption>" . ucwords($category) . "</caption>
        		<tr>
           			<th>Name</th>
           	 		<th>Price</th>
       			</tr>
   	 	";
    	foreach($menu as $dish) {
        	if ($dish['category'] == $category) {
            	echo "     
            		<tr>
                		<td>{$dish['name']}</th>
                		<td>{$dish['price']}</th>
            		</tr>
            	";
        	}
   		}
    	echo "</table>";
	}
}
