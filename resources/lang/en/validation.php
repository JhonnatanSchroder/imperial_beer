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

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute deve ser uma data depois de :date.',
    'after_or_equal' => 'O :attribute deve ser uma data depois ou igual a :date.',
    'alpha' => 'O :attribute Pode conter apenas letras.',
    'alpha_dash' => 'O :attribute Pode conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O :attribute pode conter apenas letras e números.',
    'array' => 'O :attribute Deve ser uma lista.',
    'before' => 'O :attribute deve ser uma data antes :date.',
    'before_or_equal' => 'O :attribute deve ser uma data antes ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min e :max characters.',
        'array' => 'O :attribute deve ter entre :min e :max items.',
    ],
    'boolean' => 'O :attribute O campo deve ser verdadeiro ou falso.',
    'confirmed' => 'O :attribute A confirmação não corresponde.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e :other deve ser diferente.',
    'digits' => 'O :attribute devemos ser :digits dígitos.',
    'digits_between' => 'O :attribute deve estar entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute Campo tem um valor duplicado.',
    'email' => 'O :attribute Deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values.',
    'exists' => 'O  :attribute selecionado é inválido.',
    'file' => 'O :attribute Deve ser um arquivo.',
    'filled' => 'O :attribute O campo deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value Kilobytes.',
        'string' => 'O :attribute deve ser maior que :value personagens.',
        'array' => 'O :attribute deve ter mais do que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual :value.',
        'file' => 'O :attribute deve ser maior ou igual :value Kilobytes.',
        'string' => 'O :attribute deve ser maior ou igual :value personagens.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute Deve ser uma imagem.',
    'in' => 'O :attribute selecionada é inválido.',
    'in_array' => 'O :attribute Campo não existe em:other.',
    'integer' => 'O :attribute Deve ser um número inteiro.',
    'ip' => 'O :attribute Deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute Deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute Deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute Deve ser uma corda JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value Kilobytes.',
        'string' => 'O :attribute deve ser menor que :value personagens.',
        'array' => 'O :attribute deve ter menos do que :valuUnidms.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual :value.',
        'file' => 'O :attribute deve ser menor ou igual :value Kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual :value personagens.',
        'array' => 'O :attribute não deve ter mais do que :value Itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute pode não ser maior que :max.',
        'file' => 'O :attribute pode não ser maior que :max Kilobytes.',
        'string' => 'O :attribute pode não ser maior que :max personagens.',
        'array' => 'O :attribute pode não ter mais que :max Itens.',
    ],
    'mimes' => 'O :attribute Deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute Deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ser pelo menos :min Kilobytes.',
        'string' => 'O :attribute deve ser pelo menos :min personagens.',
        'array' => 'O :attribute Deve ter pelo menos :min items.',
    ],
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O :attribute O formato é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'O senha é incorreta.',
    'present' => 'O :attribute O campo deve estar presente.',
    'regex' => 'O :attribute O formato é inválido.',
    'required' => 'O :attribute campo é obrigatório.',
    'required_if' => 'O :attribute O campo é necessário quando :otheré:value.',
    'required_unless' => 'O :attribute O campo é necessário, a menos que :other é em :values.',
    'required_with' => 'O :attribute O campo é necessário quando :values é presente.',
    'required_with_all' => 'O :attribute O campo é necessário quando :values estão presentes.',
    'required_without' => 'O :attribute O campo é necessário quando:values não está presente.',
    'required_without_all' => 'O :attribute Campo é necessário quando nenhum de :vaestão presentesesent.',
    'same' => 'O :attribute e :other deve combinar.',
    'size' => [
        'numeric' => 'O :attribute devemos ser :size.',
        'file' => 'O :attribute devemos ser :sKilobytesytes.',
        'string' => 'O :attribute devemos ser :spersonagensters.',
        'array' => 'O :attribute deve conter :size Itens',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O :attribute Deve ser uma corda.',
    'timezone' => 'O :attribute Deve ser uma zona válida.',
    'unique' => 'O :attribute já foi tomada.',
    'uploaded' => 'O :attribute Falha ao fazer upload.',
    'url' => 'O :attribute O formato é inválido.',
    'uuid' => 'O :attribute Deve ser um UUID válido.',

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
