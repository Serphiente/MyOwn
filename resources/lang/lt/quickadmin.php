<?php

return [
		'user-management' => [		'title' => 'Administración de usuarios',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuarios',		'fields' => [			'name' => 'Nombre',			'rut' => 'Rut',			'email' => 'Correo',			'password' => 'Contraseña',			'banco' => 'Banco',			'tipocuentabanco' => 'Tipo cuenta bancaria',			'cuentabancaria' => 'Cuenta Bancaria',			'role' => 'Rol',			'remember-token' => 'Recordar token',		],	],
		'proveedores' => [		'title' => 'Proveedores',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Proveedor',		'fields' => [			'name' => 'Nombre de la Compañía',			'rut' => 'Rut',			'address' => 'Dirección',			'website' => 'Sitio Web',			'email' => 'Correo',		],	],
		'contacts' => [		'title' => 'Contactos',		'fields' => [			'company' => 'Compañia',			'first-name' => 'Nombre',			'last-name' => 'Apellido',			'phone1' => 'Teléfono',			'email' => 'Correo',			'observaciones' => 'Observaciones',		],	],
		'user-actions' => [		'title' => 'Acciones de Usuario (Traza)',		'created_at' => 'Laikas',		'fields' => [			'user' => 'Usuario',			'action' => 'Acciones',			'action-model' => 'Modelo de Acción',			'action-id' => 'ID de Acción',		],	],
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
	'qa_save' => 'Išsaugoti',
	'qa_update' => 'Atnaujinti',
	'qa_list' => 'Sąrašas',
	'qa_no_entries_in_table' => 'Įrašų nėra.',
	'qa_create' => 'Sukurti',
	'qa_edit' => 'Redaguoti',
	'qa_view' => 'Peržiūrėti',
	'qa_custom_controller_index' => 'Papildomo Controller\'io puslapis.',
	'qa_logout' => 'Atsijungti',
	'qa_add_new' => 'Pridėti naują',
	'qa_are_you_sure' => 'Ar esate tikri?',
	'qa_back_to_list' => 'Grįžti į sąrašą',
	'qa_dashboard' => 'Pagrindinis',
	'qa_delete' => 'Trinti',
	'qa_restore' => 'Atstatyti',
	'qa_permadel' => 'Ištrinti galutinai',
	'qa_all' => 'Rodyti viską',
	'qa_trash' => 'Rodyti ištrintus',
	'qa_delete_selected' => 'Trinti pažymėtus',
	'qa_category' => 'Kategorija',
	'qa_categories' => 'Kategorijos',
	'qa_sample_category' => 'Pavyzdinė kategorija',
	'qa_time' => 'Laikas',
	'qa_questions' => 'Klausimai',
	'qa_question' => 'Klausimas',
	'qa_answer' => 'Atsakymas',
	'qa_sample_question' => 'Pavyzdinis klausimas',
	'qa_sample_answer' => 'Pavyzdinis atsakymas',
	'qa_faq_management' => 'DUK valdymas',
	'qa_administrator_can_create_other_users' => 'Administratorius (gali kurti kitus vartotojus)',
	'qa_title' => 'Pavadinimas',
	'qa_roles' => 'Rolės',
	'qa_role' => 'Rolė',
	'qa_user_management' => 'Vartotojų valdymas',
	'qa_users' => 'Vartotojai',
	'qa_user' => 'Vartotojas',
	'qa_name' => 'Vardas',
	'qa_email' => 'El. Paštas',
	'qa_password' => 'Slaptažodis',
	'qa_user_actions' => 'Vartotojų veiksmai',
	'qa_campaign' => 'Kampanija',
	'qa_campaigns' => 'Kampanijos',
	'qa_description' => 'Aprašymas',
	'qa_valid_from' => 'Galioja nuo',
	'qa_valid_to' => 'Galioja iki',
	'qa_code' => 'Kodas',
	'qa_time_management' => 'Laiko valdymas',
	'qa_projects' => 'Projektai',
	'qa_time_entries' => 'Laiko įrašai',
	'qa_project' => 'Projektas',
	'qa_expenses' => 'Išlaidos',
	'qa_address' => 'Adresas',
	'qa_contact_management' => 'Kontaktų valdymas',
	'qa_contacts' => 'Kontaktai',
	'qa_first_name' => 'Vardas',
	'qa_last_name' => 'Pavardė',
	'qa_product_management' => 'Produktų valdymas',
	'qa_products' => 'Produktai',
	'qa_price' => 'Kaina',
	'qa_tags' => 'Žymos',
	'qa_tag' => 'Žyma',
	'qa_calendar' => 'Kalendorius',
	'qa_statuses' => 'Būsenos',
	'qa_task_management' => 'Užduočių valdymas',
	'qa_tasks' => 'Užduotys',
	'qa_status' => 'Būsena',
	'qa_text' => 'Tekstas',
	'qa_excerpt' => 'Ištrauka',
	'qa_pages' => 'Puslapiai',
	'qa_simple_user' => 'Paprastas vartotojas',
	'qa_permissions' => 'Leidimai',
	'qa_discount_amount' => 'Nuolaidos suma',
	'qa_discount_percent' => 'Nuolaida procentais',
	'qa_coupons_amount' => 'Kuponų kiekis',
	'qa_coupons' => 'Kuponai',
	'qa_coupon_management' => 'Kuponų valdymas',
	'qa_reports' => 'Ataskaitos',
	'qa_start_time' => 'Pradžios laikas',
	'qa_end_time' => 'Pabaigos laikas',
	'qa_expense_category' => 'Išlaidų kategorija',
	'qa_expense_categories' => 'Išlaidų kategorijos',
	'qa_expense_management' => 'Išlaidų valdymas',
	'qa_expense' => 'Išlaidos',
	'qa_companies' => 'Įmonės',
	'qa_company_name' => 'Įmonės pavadinimas',
	'qa_website' => 'Interneto svetainė',
	'qa_company' => 'Įmonė',
	'qa_phone' => 'Telefonas',
	'qa_photo' => 'Nuotrauka (maks. 8 MB)',
	'qa_category_name' => 'Kategorijos pavadinimas',
	'qa_product_name' => 'Produkto pavadinimas',
	'quickadmin_title' => 'DC',
];