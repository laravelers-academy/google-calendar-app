<?php

return [

	'user_class' => 'App\Models\User',

	'excel_view' => 'innoboxrrgooglecalendar::excel.',

	'notification_via' => ['mail', 'database'],

	'export_disk' => 's3',

	'client_id' => env('GOOGLE_CLIENT_ID'),

	'client_secret' => env('GOOGLE_SECRET'),

	// Provicional solo para pruebas
	'refresh_token' => "1//0fJ7yfRdpY60GCgYIARAAGA8SNwF-L9IrvdeBvl_5eW9eB166pTMGKiBmOZFvNrbV8qm0qS-ztuWIp7PARtYpBXNwgV8CQ8ALbG0",
	
];