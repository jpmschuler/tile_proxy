
<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'TileProxy',
	'description' => 'With Tile Proxy you can integrate OpenStreetMap maps GDPR in a compliant way without any third party requests from the client. For a given area, the data is loaded from OpenStreetMap and cached, therefore you do not need a cookie banner or blocker to use OpenStreetMap cookie banner or blocker to use OpenStreetMap.	A proxy is also provided for geocoding nominatim.',
	'author' => 'Thomas Rokohl (codemacher)',
	'author_email' => 'webmaster@codemacher.de',
	'category' => 'plugin',
	'author_company' => 'codemacher',
	'state' => 'stable',
	'clearCacheOnLoad' => 1,
	'version' => '1.1.3',
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-12.2.99'
		],
		'conflicts' => [],
		'suggests' => []
	]
];
