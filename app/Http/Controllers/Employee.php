<?php

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller; 

class Employee extends Controller 
{ 
		private $employees; 
		public function __construct()
		{
			$this->employees = [ 
				1 => [ 
						'name' => 'Юрий', 
						'surname' => 'Мельник', 								
                        'salary' => 1000, 
					], 
				2 => [ 	
						'name' => 'Виктор', 
						'surname' => 'Плисецкий', 								
                        'salary' => 2000, 
						], 
				3 => [ 
					'name' => 'Анатолий', 
					'surname' => 'Сервин', 
					'salary' => 3000, 
					], 
				4 => [ 
						'name' => 'Артём', 
						'surname' => 'Синицын', 								
                        'salary' => 4000, ], 
				5 => [ 
						'name' => 'Григорий', 
						'surname' => 'Чувашев', 								
                        'salary' => 5000, 
					], 
				]; 
		}

		public function shows($id, $name){

			if (isset($this->employees [$id][$name])) {
				return $this->employees [$id][$name];
				} 
			else {
				return "Нет такого работника";
				}

		}
		public function show($id) { 
			

                if (isset($this->employees [$id])) {
                    return $this->employees [$id];
                    } 
                else {
                    return "Нет такого работника";
                    }
            

} 
}


?>