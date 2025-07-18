<?php

namespace App\Repositories\FormField;

use App\Models\FormField;
use App\Repositories\Base\BaseRepository;
// use App\Repositories\Saas\SaaSRepository;

class FormFieldsRepository extends BaseRepository implements FormFieldsInterface {
    public function __construct(FormField $model) {
        parent::__construct($model);
    }
    
    /**
     * Get the default model query
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function defaultModel() {
        return $this->model->query();
    }
}
