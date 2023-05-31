<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le champ :attribute doit être accepted.',
    'active_url' => 'Le champ :attribute is not a valid URL.',
    'after' => 'Le champ :attribute doit être a date after :date.',
    'after_or_equal' => 'Le champ :attribute doit être a date after ou égale à :date.',
    'alpha' => 'Le champ :attribute doit avoir des lettres uniquement.',
    'alpha_dash' => 'Le champ :attribute doit avoir des lettres , nombres, tirets et underscores seulement.',
    'alpha_num' => 'Le champ :attribute doit avoir des lettres , nombres seulement.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date inférieur à :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date inférieur à ou égale à :date.',
    'between' => [
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'file' => 'Le champ :attribute doit être entre :min et :max kilobytes.',
        'string' => 'Le champ :attribute doit être entre :min et :max caractères.',
        'array' => 'Le champ :attribute must have entre :min et :max items.',
    ],
    'boolean' => 'Le champ :attribute field doit être true or false.',
    'confirmed' => 'Les champs :attribute ne correspondent pas .',
    'date' => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être a date equal to :date.',
    'date_format' => 'Le champ :attribute does not match the format :format.',
    'different' => 'Le champ :attribute et :other doit être different.',
    'digits' => 'Le champ :attribute doit être :digits digits.',
    'digits_entre' => 'Le champ :attribute doit être entre :min et :max digits.',
    'dimensions' => 'Le champ :attribute has invalid image dimensions.',
    'distinct' => 'Le champ :attribute field has a duplicate value.',
    'email' => 'Le champ :attribute doit être a valid email address.',
    'ends_with' => 'Le champ :attribute must end with one of the following: :values.',
    'exists' => 'Le champ selected :attribute n\'est pas valide.',
    'file' => 'Le champ :attribute doit être a file.',
    'filled' => 'Le champ :attribute field must have a value.',
    'gt' => [
        'numeric' => 'Le champ :attribute doit être greater than :value.',
        'file' => 'Le champ :attribute doit être greater than :value kilobytes.',
        'string' => 'Le champ :attribute doit être greater than :value caractères.',
        'array' => 'Le champ :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Le champ :attribute doit être greater than or equal :value.',
        'file' => 'Le champ :attribute doit être greater than or equal :value kilobytes.',
        'string' => 'Le champ :attribute doit être greater than or equal :value caractères.',
        'array' => 'Le champ :attribute must have :value items or more.',
    ],
    'image' => 'Le champ :attribute doit être an image.',
    'in' => 'Le champ selected :attribute n\'est pas valide.',
    'in_array' => 'Le champ :attribute field does not exist in :other.',
    'integer' => 'Le champ :attribute doit être an integer.',
    'ip' => 'Le champ :attribute doit être a valid IP address.',
    'ipv4' => 'Le champ :attribute doit être a valid IPv4 address.',
    'ipv6' => 'Le champ :attribute doit être a valid IPv6 address.',
    'json' => 'Le champ :attribute doit être a valid JSON string.',
    'lt' => [
        'numeric' => 'Le champ :attribute doit être less than :value.',
        'file' => 'Le champ :attribute doit être less than :value kilobytes.',
        'string' => 'Le champ :attribute doit être less than :value caractères.',
        'array' => 'Le champ :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Le champ :attribute doit être less than or equal :value.',
        'file' => 'Le champ :attribute doit être less than or equal :value kilobytes.',
        'string' => 'Le champ :attribute doit être less than or equal :value caractères.',
        'array' => 'Le champ :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Le champ :attribute may not be greater than :max.',
        'file' => 'Le champ :attribute may not be greater than :max kilobytes.',
        'string' => 'Le champ :attribute may not be greater than :max caractères.',
        'array' => 'Le champ :attribute may not have more than :max items.',
    ],
    'mimes' => 'Le champ :attribute doit être a file of type: :values.',
    'mimetypes' => 'Le champ :attribute doit être a file of type: :values.',
    'min' => [
        'numeric' => 'Le champ :attribute doit être de  :min minimum.',
        'file' => 'Le champ :attribute doit être de  :min kilobytes minimum.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'array' => 'Le champ :attribute doit contenir au moins least :min items.',
    ],
    'not_in' => 'Le format du champ selected :attribute n\'est pas valide.',
    'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => 'Le champ password est incorrecte.',
    'present' => 'Le champ :attribute field doit être présent.',
    'regex' => 'Le format du champ :attribute n\'est pas valide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire quand :other is :value.',
    'required_unless' => 'Le champ :attribute est obligatoire unless :other is in :values.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values existe.',
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values are present.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values is not present.',
    'required_without_all' => 'Le champ :attribute est obligatoire quand none of :values are present.',
    'same' => 'Le champ :attribute et :other must match.',
    'size' => [
        'numeric' => 'Le champ :attribute doit être :size.',
        'file' => 'Le champ :attribute doit être :size kilobytes.',
        'string' => 'Le champ :attribute doit être :size caractères.',
        'array' => 'Le champ :attribute must contain :size items.',
    ],
    'starts_with' => 'Le champ :attribute must start with one of the following: :values.',
    'string' => 'Le champ :attribute doit être a string.',
    'timezone' => 'Le champ :attribute doit être a valid zone.',
    'unique' => 'Le champ :attribute has est déja disponible.',
    'uploaded' => 'Le champ :attribute failed to upload.',
    'url' => 'Le format du champ :attribute n\'est pas valide.',
    'uuid' => 'Le champ :attribute doit être a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
