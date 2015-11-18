<?php

class CollegeTableSeeder extends Seeder{

	public function run(){

		$colleges = [
			[
				'college_name' => 'College of Science and Mathematics',
				'college_acro' => 'CSM'
			],
			[
				'college_name' => 'College of Arts and Social Sciences',
				'college_acro' => 'CASS'
			],
			[
				'college_name' => 'College of Business Administration and Accountancy',
				'college_acro' => 'CBAA'
			],
			[
				'college_name' => 'College of Engineering',
				'college_acro' => 'COE'
			],
			[
				'college_name' => 'College of Nursing',
				'college_acro' => 'CON'
			],
			[
				'college_name' => 'College of Education',
				'college_acro' => 'CED'
			],
			[
				'college_name' => 'School of Computer Studies',
				'college_acro' => 'SCS'
			],
			[
				'college_name' => 'School of Engineering Technology',
				'college_acro' => 'SET'
			],
			[
				'college_name' => 'School of Graduate Studies',
				'college_acro' => 'SGS'
			]

		];
			Eloquent::unguard();
			foreach ($colleges as $college) {
				College::create($college);

			}	$this->command->info('Yeah.. i hope im done');
	}

}