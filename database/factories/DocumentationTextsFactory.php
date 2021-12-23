<?php

namespace Database\Factories;

use App\Models\DocumentationTexts;
use App\Models\Documentation;
use App\Models\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentationTextsFactory extends Factory
{
    protected $model = DocumentationTexts::class;

    public function definition(): array
    {
    	return [
            'text_id' => 1,
            'documentation_id' => 1
    	    //
    	];
    }
}
