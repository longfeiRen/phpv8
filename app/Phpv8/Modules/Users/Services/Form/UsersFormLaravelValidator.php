<?php
namespace Phpv8\Modules\Users\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class UsersFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'date'    => 'required|date',
        'time'    => 'date_format:G:i',
        'fr.slug' => 'required_with:fr.title|required_if:fr.status,1|alpha_dash',
        'nl.slug' => 'required_with:nl.title|required_if:nl.status,1|alpha_dash',
        'en.slug' => 'required_with:en.title|required_if:en.status,1|alpha_dash',
    );
}
