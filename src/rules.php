<?php

return [
    '@PSR12' => true,
    '@PHP81Migration' => true,
    'array_push' => true,
    'trim_array_spaces' => true,
    'no_useless_else' => true,
    //'native_type_declaration_casing' => true, // не поддерживается в старой версии php-cs-fixer
    'native_function_casing' => true,
    'magic_method_casing' => true,
    'modernize_types_casting' => true,
    'no_short_bool_cast' => true,
    'protected_to_private' => true,
    'self_static_accessor' => true,
    'simplified_if_return' => false, // Правило хорошее, но реализация плохая. Создает кучу мусора в коде
    'combine_nested_dirname' => true,
    'implode_call' => true,
    'lambda_not_used_import' => true,
    'static_lambda' => true, // рисковое правило, но у нас нет нигде ->bindTo
    'no_unused_imports' => true,
    'combine_consecutive_unsets' => true,
    'dir_constant' => true,
    'function_to_constant' => true, // рисковое правило, но у нас нигде не переопределены стандартные функции
    'is_null' => true,
    //'new_with_parentheses' => ['named_class' => false, 'anonymous_class' => false], // не поддерживается в старой версии php-cs-fixer
    'object_operator_without_whitespace' => true,
    'no_superfluous_phpdoc_tags' => true,
    'array_syntax' => 'short',
];