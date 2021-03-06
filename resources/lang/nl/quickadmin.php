<?php

return [
		'user-management' => [		'title' => 'Administración de usuarios',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuarios',		'fields' => [			'name' => 'Nombre',			'rut' => 'Rut',			'email' => 'Correo',			'password' => 'Contraseña',			'banco' => 'Banco',			'tipocuentabanco' => 'Tipo cuenta bancaria',			'cuentabancaria' => 'Cuenta Bancaria',			'role' => 'Rol',			'remember-token' => 'Recordar token',		],	],
		'proveedores' => [		'title' => 'Proveedores',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Proveedor',		'fields' => [			'name' => 'Nombre de la Compañía',			'rut' => 'Rut',			'address' => 'Dirección',			'website' => 'Sitio Web',			'email' => 'Correo',		],	],
		'contacts' => [		'title' => 'Contactos',		'fields' => [			'company' => 'Compañia',			'first-name' => 'Nombre',			'last-name' => 'Apellido',			'phone1' => 'Teléfono',			'email' => 'Correo',			'observaciones' => 'Observaciones',		],	],
		'user-actions' => [		'title' => 'Acciones de Usuario (Traza)',		'created_at' => 'Tijdstip',		'fields' => [			'user' => 'Usuario',			'action' => 'Acciones',			'action-model' => 'Modelo de Acción',			'action-id' => 'ID de Acción',		],	],
		'proveedor' => [		'title' => 'Proveedor',		'fields' => [		],	],
		'productos' => [		'title' => 'Productos',		'fields' => [		],	],
		'extras' => [		'title' => 'Extras',		'fields' => [		],	],
		'presentacionproducto' => [		'title' => 'Presentación Producto',		'fields' => [			'nombre' => 'Nombre',			'nombrecorto' => 'Nombre Corto',		],	],
		'tipoproducto' => [		'title' => 'Tipo Producto',		'fields' => [			'nombre' => 'Nombre',		],	],
		'principioactivo' => [		'title' => 'Principio Activo',		'fields' => [			'nombre' => 'Nombre',		],	],
		'producto' => [		'title' => 'Producto',		'fields' => [			'nombre' => 'Nombre',			'unidadescaja' => 'Unidades en cada caja',			'tipo-producto' => 'Tipo producto',			'presentacion-producto' => 'Presentación producto',			'principio-activo' => 'Principio activo',		],	],
		'listaexterna' => [		'title' => 'Lista Externa',		'fields' => [			'producto' => 'Producto',			'proveedor' => 'Proveedor',			'marca' => 'Marca',			'codigo' => 'Código',			'vencimiento' => 'Vencimiento',			'regisp' => 'Registro ISP',			'preciounidad' => 'Precio unidad',			'precio-caja' => 'Precio caja',			'margen' => 'Margen (%)',			'stock' => 'Stock',			'observaciones' => 'Observaciones',		],	],
		'manufacturador' => [		'title' => 'Manufacturador',		'fields' => [			'nombre' => 'Nombre',		],	],
		'pedido-a-proveedores' => [		'title' => 'Pedido a proveedores',		'fields' => [		],	],
		'asd' => [		'title' => 'Asd',		'fields' => [		],	],
		'itemoc' => [		'title' => 'Item OC',		'fields' => [			'item' => 'Item',		],	],
		'ordendecompra' => [		'title' => 'Orden de compra',		'fields' => [			'proveedor' => 'Proveedor',			'contacto' => 'Contacto',			'fecha' => 'Fecha',		],	],
	'qa_create' => 'Toevoegen',
	'qa_save' => 'Opslaan',
	'qa_edit' => 'Bewerken',
	'qa_view' => 'Bekijken',
	'qa_update' => 'Bijwerken',
	'qa_list' => 'Lijst',
	'qa_no_entries_in_table' => 'Geen inhoud gevonden',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Toevoegen',
	'qa_are_you_sure' => 'Ben je zeker?',
	'qa_back_to_list' => 'Terug naar lijst',
	'qa_dashboard' => 'Boordtabel',
	'qa_delete' => 'Verwijderen',
	'qa_restore' => 'Herstellen',
	'qa_permadel' => 'Definitief verwijderen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Prullenbak',
	'qa_delete_selected' => 'Geselecteerde verwijderen',
	'qa_category' => 'Categorie',
	'qa_categories' => 'Categoriën',
	'qa_questions' => 'Vragen',
	'qa_question' => 'Vraag',
	'qa_answer' => 'Antwoord',
	'qa_sample_question' => 'Demo vraag',
	'qa_sample_answer' => 'Demo antwoord',
	'qa_faq_management' => 'FAQ beheer',
	'qa_administrator_can_create_other_users' => 'Beheerder (kan gebruikers toevoegen)',
	'qa_simple_user' => 'Gewone gebruiker',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rol',
	'qa_user_management' => 'Gebruikersbeheer',
	'qa_users' => 'Gebruikers',
	'qa_user' => 'Gebruiker',
	'qa_name' => 'Naam',
	'qa_email' => 'E-mail',
	'qa_password' => 'Paswoord',
	'qa_remember_token' => 'Herinneringstoken',
	'qa_permissions' => 'Toelatingen',
	'qa_user_actions' => 'Gebruikeracties',
	'qa_action' => 'Actie',
	'qa_action_model' => 'Actie model',
	'qa_action_id' => 'Actie id',
	'qa_time' => 'Tijdstip',
	'qa_campaign' => 'Campagne',
	'qa_campaigns' => 'Campagnes',
	'qa_description' => 'Omschrijving',
	'qa_valid_from' => 'Geldig van',
	'qa_valid_to' => 'Geldig tot',
	'qa_discount_amount' => 'Bedrag korting',
	'qa_discount_percent' => 'Percentage korting',
	'qa_coupons_amount' => 'Bedrag coupon',
	'qa_coupons' => 'Coupons',
	'qa_code' => 'Code',
	'qa_redeem_time' => 'Inlevertijd',
	'qa_coupon_management' => 'Couponbeheer',
	'qa_time_management' => 'Tijdmanagement',
	'qa_projects' => 'Projecten',
	'qa_reports' => 'Rapporten',
	'qa_sample_category' => 'Demo categorie',
	'qa_work_type' => 'Soort werk',
	'qa_work_types' => 'Soorten werk',
	'qa_project' => 'Project',
	'qa_start_time' => 'Starttijd',
	'qa_end_time' => 'Eindtijd',
	'qa_expense_category' => 'Uitgave categorie',
	'qa_expense_categories' => 'Uitgave categoriën',
	'qa_expense_management' => 'Uitgavebeheer',
	'qa_expenses' => 'Uitgaven',
	'qa_expense' => 'Uitgave',
	'qa_amount' => 'Bedrag',
	'qa_income_categories' => 'Inkomst categorieën',
	'qa_monthly_report' => 'Maandelijks rapport',
	'qa_companies' => 'Bedrijven',
	'qa_company_name' => 'Naam bedrijf',
	'qa_address' => 'Adres',
	'qa_website' => 'Website',
	'qa_contact_management' => 'Contactbeheer',
	'qa_contacts' => 'Contacten',
	'qa_company' => 'Bedrijf',
	'qa_first_name' => 'Voornaam',
	'qa_last_name' => 'Familienaam',
	'qa_phone' => 'Telefoon',
	'qa_phone1' => 'Telefoon 1',
	'qa_phone2' => 'Teelefoon 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Foto (max. 8mb)',
	'qa_category_name' => 'Categorienaam',
	'qa_product_management' => 'Productbeheer',
	'qa_products' => 'Producten',
	'qa_product_name' => 'Productnaam',
	'qa_price' => 'Prijs',
	'qa_tags' => 'Tags',
	'qa_tag' => 'Tag',
	'qa_photo1' => 'Foto1',
	'qa_photo2' => 'Foto2',
	'qa_photo3' => 'Foto3',
	'qa_calendar' => 'Kalender',
	'qa_statuses' => 'Statuten',
	'qa_task_management' => 'Takenbeheer',
	'qa_tasks' => 'Taken',
	'qa_status' => 'Statuut',
	'qa_attachment' => 'Bijlage',
	'qa_assigned_to' => 'Toegewezen aan',
	'qa_serial_number' => 'Serienummer',
	'qa_location' => 'Plaats',
	'qa_locations' => 'Plaatsen',
	'qa_assigned_user' => 'Toegewezen (gebruiker)',
	'qa_notes' => 'Notities',
	'quickadmin_title' => 'DC',
];