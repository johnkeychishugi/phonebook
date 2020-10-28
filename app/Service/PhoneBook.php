<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
	public static function searchByName(String $name)
	{
		return collect(self::contacts())->filter(function($contact) use ($name){
			return Str::contains($contact['name'],$name);
		});
	}

	public static function contacts(): array
	{
		return [
			[	
				'name' => 'John Deo',
				'email' => 'johndeo@gmail.com',
				'phone' => '12237388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'key Deo',
				'email' => 'johndeo@gmail.com',
				'phone' => '11137388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'Alvin Good',
				'email' => 'johndeo@gmail.com',
				'phone' => '124237388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'Rod Ny',
				'email' => 'roid@gmail.com',
				'phone' => '102237388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'Ary kalume',
				'email' => 'ary@gmail.com',
				'phone' => '02237388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'Jp Ka',
				'email' => 'jpka@gmail.com',
				'phone' => '1209237388',
				'city' => 'Drc,Goma'

			],
			[	
				'name' => 'Vianney Ol',
				'email' => 'vieanney@gmail.com',
				'phone' => '1223738899',
				'city' => 'Drc,Goma'

			]
		];
	}
}