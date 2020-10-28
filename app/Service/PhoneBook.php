<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
	public static function searchByName(String $name): array
	{
		return self::searchBy('name',$name);

	}

	public static function searchByCity(String $city): array
	{
		return self::searchBy('city',$city);

	}

	public static function searchByEmail(String $email): array
	{
		return self::searchBy('email',$email);

	}


	public static function searchBy(String $key, String $value): array
	{
		return collect(self::contacts())->filter(function($contact) use ($value,$key){
			return Str::contains(strtolower($contact[$key]),strtolower($value));
		})->all();

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
				'city' => 'Paris'

			],
			[	
				'name' => 'Alvin Good',
				'email' => 'johndeo@gmail.com',
				'phone' => '124237388',
				'city' => 'New York'

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