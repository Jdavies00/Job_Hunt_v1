<?php

namespace Database\Factories;

use App\Models\CommJobsBoard;
use Illuminate\Database\Eloquent\Factories\Factory;



class CommJobsBoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommJobsBoard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title'=>$this->faker->words($nd=2,$variableNbWords = true),
            // 'author'=> $this->faker->name,
            // // why 
            // // 'author_id' =>Author::all()->random()->id,
            // // 'author'=> Author::all()->random()->name,

            // 'excerpt'=>$this->faker->catchPhrase(),
            // 'isbn'=>$this->faker->isbn13,
            // 'pages'=>$this->faker->numberBetween($min = 0, $max = 9000),
            // 'cost'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
            // 'value'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            // 'released'=>$this->faker->dateTime(),
            // 'status'=>$this->faker->randomDigitNotNull

        ];

        }
        
    }