<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language Files Path
    |--------------------------------------------------------------------------
    |
    | This value specifies the path where Laravel language files are stored.
    | The package will scan this directory to find all available translations
    | and generate TypeScript types based on the language files found.
    |
    */
    'lang_path' => resource_path('lang'),

    /*
    |--------------------------------------------------------------------------
    | TypeScript Output Path
    |--------------------------------------------------------------------------
    |
    | This value specifies where the generated TypeScript translation types
    | will be saved. The file will contain type definitions for all available
    | translations and locales found in the language files directory.
    |
    */
    'output_path' => resource_path('js/types/translations.d.ts'),
];
