<?php
/**
 * Reads a CSV file containing country data and returns an array of countries.
 *
 * @param string $filename - The name of the CSV file to read.
 * @return array - An array containing country data from the CSV file.
 */
function countries($filename): array {
    $countries = [];
    $file = fopen($filename, 'r');
    while ($data = fgetcsv($file)) {
        array_push($countries, $data);
    }
    fclose($file);
    return $countries;
}

/**
 * Generates a form for a specific country using its data.
 *
 * @param array $countries - An array containing country data.
 */
function form($countries) {
    foreach ($countries as $country) {
        if ($country[0] == $_POST['country']) {
            echo "<form method='POST' action='country_form.php'>";
            echo "<label for='country'>Country: </label>";
            echo "<input type='text' name='country' value='" . $country[0] . "'><br>";
            echo "<label for='population'>Population: </label>";
            echo "<input type='text' name='population' value='" . $country[1] . "'><br>";
            echo "<label for='capital'>Capital: </label>";
            echo "<input type='text' name='capital' value='" . $country[2] . "'><br>";
            echo "<input type='submit'>";
            echo "</form>";
        }
    }
}

/**
 * Checks for changes in population and capital, and updates the data accordingly.
 *
 * @param array $countries - An array containing country data.
 * @param int $population - The updated population value.
 * @param string $input_country - The name of the country to check for changes.
 * @param string $capital - The updated capital value.
 */
function check_changes(&$countries, $population, $input_country, $capital) {
    foreach($countries as &$country) {
        if ($country[0] == $input_country) {
            if ($country[1] != $population || $country[2] != $capital) {
                $country[1] = $population;
                $country[2] = $capital;
            }
        }
    }
}

/**
 * Writes the updated country data back to the CSV file.
 *
 * @param array $countries - An array containing country data.
 * @param string $filename - The name of the CSV file to write.
 */
function change_data($countries, $filename) {
    $file = fopen($filename, 'w');
    foreach($countries as $country) {
        fwrite($file, $country[0] . ',' . $country[1] . ',' . $country[2] . PHP_EOL);
    }
    fclose($file);
}
