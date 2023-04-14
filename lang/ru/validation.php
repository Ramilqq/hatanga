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

    'accepted' => 'Атрибут : должен быть принят.',
     'accepted_if' => 'Атрибут : должен быть принят, если :other равно :value.',
     'active_url' => 'Атрибут :не является допустимым URL.',
     'after' => 'Атрибут : должен быть датой после :date.',
     'after_or_equal' => 'Атрибут : должен быть датой после :date или равным ей.',
     'alpha' => 'Атрибут : должен содержать только буквы.',
     'alpha_dash' => 'Атрибут : должен содержать только буквы, цифры, дефисы и символы подчеркивания.',
     'alpha_num' => 'Атрибут : должен содержать только буквы и цифры.',
     'array' => 'Атрибут : должен быть массивом.',
     'before' => 'Атрибут : должен быть датой до :date.',
     'before_or_equal' => 'Атрибут : должен быть датой, предшествующей :date или равной ей.',
     'между' => [
         'numeric' => 'Атрибут : должен быть между :min и :max.',
         'file' => 'Атрибут : должен быть между :min и :max килобайтами.',
         'string' => 'Атрибут : должен быть между символами :min и :max.',
         'array' => 'Атрибут : должен содержать от :min до :max элементов.',
     ],
     'boolean' => 'Поле :attribute должно быть истинным или ложным.',
     'confirmed' => 'Подтверждение :attribute не соответствует.',
     'current_password' => 'Неверный пароль.',
     'date' => 'Атрибут :не является действительной датой.',
     'date_equals' => 'Атрибут : должен быть датой, равной :date.',
     'date_format' => 'Атрибут :не соответствует формату :format.',
     'declined' => 'Атрибут : должен быть отклонен.',
     'declined_if' => 'Атрибут : должен быть отклонен, если :other равно :value.',
     'other' => ':attribute и :other должны быть разными.',
     'digits' => 'Атрибут : должен быть :digits digits.',
     'digits_between' => 'Атрибут : должен быть между цифрами :min и :max.',
     'dimensions' => 'Атрибут : имеет недопустимые размеры изображения.',
     'distinct' => 'Поле :attribute имеет повторяющееся значение.',
     'email' => 'Атрибут : должен быть действительным адресом электронной почты.',
     'ends_with' => 'Атрибут : должен заканчиваться одним из следующих: :values.',
     'enum' => 'Выбранный :attribute недействителен.',
     'exists' => 'Выбранный :attribute недействителен.',
     'file' => 'Атрибут : должен быть файлом.',
     'filled' => 'Поле :attribute должно иметь значение.',
     'гт' => [
         'numeric' => 'Атрибут : должен быть больше :value.',
         'file' => 'Атрибут : должен быть больше :value килобайт.',
         'string' => 'Атрибут : должен быть больше символов :value.',
         'array' => 'Атрибут : должен содержать больше элементов, чем :value.',
     ],
     'гте' => [
         'numeric' => 'Атрибут : должен быть больше или равен :value.',
         'file' => 'Атрибут : должен быть больше или равен :value килобайтам.',
         'string' => 'Атрибут : должен быть больше или равен символам :value.',
         'array' => 'Атрибут : должен содержать элементы :value или более.',
     ],
     'image' => 'Атрибут : должен быть изображением.',
     'in' => 'Выбранный :атрибут недействителен.',
     'in_array' => 'Поле :attribute не существует в :other.',
     'integer' => 'Атрибут : должен быть целым числом.',
     'ip' => 'Атрибут : должен быть действительным IP-адресом.',
     'ipv4' => 'Атрибут : должен быть действительным адресом IPv4.',
     'ipv6' => 'Атрибут : должен быть действительным адресом IPv6.',
     'json' => 'Атрибут : должен быть допустимой строкой JSON.',
     'л' => [
         'numeric' => 'Атрибут : должен быть меньше :value.',
         'file' => 'Атрибут : должен быть меньше :value килобайт.',
         'string' => 'Атрибут : должен быть меньше символов :value.',
         'array' => 'Атрибут : должен содержать элементов меньше :value.',
     ],
     'льте' => [
         'numeric' => 'Атрибут : должен быть меньше или равен :value.',
         'file' => 'Атрибут : должен быть меньше или равен :value килобайтам.',
         'string' => 'Атрибут : должен быть меньше или равен символам :value.',
         'array' => 'Атрибут : не должен содержать больше элементов, чем :value.',
     ],
     'mac_address' => 'Атрибут : должен быть действительным MAC-адресом.',
     'макс' => [
         'numeric' => 'Атрибут : не должен быть больше :max.',
         'file' => 'Атрибут : не должен превышать :max килобайт.',
         'string' => 'Атрибут : не должен превышать :max символов.',
         'array' => 'Атрибут : должен содержать не более :max элементов.',
     ],
     'mimes' => 'Атрибут : должен быть файлом типа: :values.',
     'mimetypes' => 'Атрибут : должен быть файлом типа: :values.',
     'мин' => [
         'numeric' => 'Атрибут : должен быть не меньше :min.',
         'file' => 'Атрибут : должен быть не менее :min килобайт.',
         'string' => 'Атрибут : должен содержать не менее :min символов.',
         'array' => 'Атрибут : должен содержать не менее :min элементов.',
     ],
     'multiple_of' => 'Атрибут : должен быть кратен :value.',
     'not_in' => 'Выбранный :attribute недействителен.',
     'not_regex' => 'Неверный формат :attribute.',
     'numeric' => 'Атрибут : должен быть числом.',
     'password' => 'Неверный пароль.',
     'present' => 'Поле :attribute должно присутствовать.',
     'prohibited' => 'Поле :attribute запрещено.',
     'prohibited_if' => 'Поле :attribute запрещено, если :other равно :value.',
     'prohibited_unless' => 'Поле :attribute запрещено, если :other не находится в :values.',
     'prohibits' => 'Поле :attribute запрещает присутствие :other.',
     'regex' => 'Неверный формат :attribute.',
     'required' => 'Поле :attribute обязательно.',
     'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
     'required_if' => 'Поле :attribute обязательно, если :other равно :value.',
     'required_unless' => 'Поле :attribute является обязательным, если только :other не находится в :values.',
     'required_with' => 'Поле :attribute обязательно, если присутствует :values.',
     'required_with_all' => 'Поле :attribute обязательно, если присутствуют :values.',
     'required_without' => 'Поле :attribute является обязательным, если :values отсутствует.',
     'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :value не присутствует.',
     'same' => ':attribute и :other должны совпадать.',
     'размер' => [
         'numeric' => 'Атрибут : должен быть :size.',
         'file' => 'Атрибут : должен быть :size килобайт.',
         'string' => 'Атрибут : должен быть размером :size символов.',
         'array' => 'Атрибут : должен содержать элементы :size.',
     ],
     'starts_with' => 'Атрибут : должен начинаться с одного из следующих: :values.',
     'string' => 'Атрибут : должен быть строкой.',
     'timezone' => 'Атрибут : должен быть действительным часовым поясом.',
     'unique' => 'Атрибут : уже занят.',
     'uploaded' => 'Не удалось загрузить :attribute.',
     'url' => 'Атрибут : должен быть допустимым URL.',
     'uuid' => 'Атрибут : должен быть действительным UUID.',

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