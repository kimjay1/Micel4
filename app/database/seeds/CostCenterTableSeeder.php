<?php

class CostCenterTableSeeder extends Seeder{

	public function run(){

		$costcenters = [
			[
				'cost_center_name' => 'Office of the Chancellor',
			],
			[
				'cost_center_name' => 'Office of the Vice Chancellor Administration Finance',
			],
			[
				'cost_center_name' => 'Office of the Vice Chancellor Academic Affairs',
			],
			[
				'cost_center_name' => 'Office of the Vice Chancellor Research and Extension',
			],
			[
				'cost_center_name' => 'Office of the Vice Chancellor Planning and Development',
			],
			[
				'cost_center_name' => 'Human Resource Management Office',
			],
			[
				'cost_center_name' => 'Registrar Office',
			],
			[
				'cost_center_name' => 'Budget Management Office',
			],
			[
				'cost_center_name' => 'Office of the Campus Secretary',
			]

		];
			Eloquent::unguard();
			foreach ($costcenters as $costcenter) {
				College::create($costcenter);

			}	$this->command->info('Yeah.. i hope im done');
	}

}