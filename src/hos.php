<?php

$txt_file    = file_get_contents('hos.txt');
//$rows        = str_replace('\n',"\n",explode("\n", $txt_file, -1));
$rows        = explode("\n", $txt_file, -1);

//Remove comments
foreach($rows as $row => $data)
{
	if ($data[0] == "#")
	{
		array_splice($rows, $row, 1);
	}
}
unset($row,$data);

//SORT
usort($rows, function($a, $b){
	if (substr($a, 3, 2) == substr($b, 3, 2)) { //gleicher Monat
		if (substr($a, 0, 2) == substr($b, 0, 2)) { //gleicher Tag
			return 0;
		}
		return (substr($a, 0, 2) < substr($b, 0, 2)) ? 1 : -1; //Vergleiche Tag
	}
	return (substr($a, 3, 2) < substr($b, 3, 2)) ? 1 : -1; //Vergleiche Monat
});

//SEARCH
$q = htmlspecialchars($_REQUEST["q"]);
if ($q !== "") {
	$results = array();
	foreach ($rows as $value) {
		if (stripos($value, $q) !== false) { $results[] = $value; }
	}
	$rows = $results;
	unset($results,$value);
}

//Visualialize
foreach($rows as $row => $data)
{
        $row_data = explode(':', $data);

        //Correct month…
        $row_data[4] = intval(( explode('.', $row_data[0])[1] - 1) / 12 ); //year offset
        $row_data[0] = preg_replace_callback(
              "/(?<=\.)\d+/",
              function ($treffer) {
                return (($treffer[0] - 1) % 12) + 1;
              },
              $row_data[0]
        );

	//Add single :, if :: written
	for ($key = 1; $key < count($row_data)-1; $key++)
	{
		if($row_data[$key] == '')
		{
			$row_data[$key-1] = $row_data[$key-1].':'.$row_data[$key+1];
			array_splice($row_data, $key, 2);
			$key--;
		}
	}
	unset($key);

        //Output!!
        $info[$row]['name']        = $row_data[1];
        $info[$row]['date']        = $row_data[0];
        $info[$row]['year']        = $row_data[4] + 2017;
        $info[$row]['description'] = $row_data[2];
        $info[$row]['context']     = $row_data[3];

	echo '<li>
 		<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>' . $info[$row]['date'] . '</span><span>' . $info[$row]['year'] . '</span> </time>';
	echo '<div class="cbp_tmicon fa fa-trophy"></div>
		<div class="cbp_tmlabel">
			<h2 class="sub-title-white">' . $info[$row]['name'] . '</h2>';
	echo '<p style="border-bottom: 1px solid rgba(255,255,255,.4); padding-bottom: 10px;">' . $info[$row]['description'] . '</p><p>Kontext: '. $info[$row]['context'] . '</p></div></li>';

	echo '<br />';
}
unset($row,$row_data,$info);

?>
