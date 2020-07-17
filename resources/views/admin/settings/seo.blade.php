@extends('twill::layouts.settings', 
[
    'contentFieldsetLabel' => 'Global',
    'additionalFieldsets' => [
        ['fieldset' => 'home_page', 'label' => 'Home'],
        ['fieldset' => 'who_we_are_page', 'label' => 'Who We Are'],
    ]
]
)

@section('contentFields')
   @formField('input', [
        'label' => 'Site title',
        'name' => 'site_title',
        'textLimit' => '80'
    ])
@stop

@section('fieldsets')
    @formFieldset(['id' => 'home_page', 'title' => 'Home'])
        @formField('input', [
            'label' => 'Headline',
            'name' => 'headline',
            'textLimit' => '80'
        ])
        @formField('input', [
            'label' => 'Sub Headline',
            'name' => 'sub_headline',
            'textLimit' => '80'
        ])
        @formField('input', [
            'label' => 'Description',
            'name' => 'description',
            'maxlength' => 250,
            'type' => 'textarea',
            'rows' => 2
        ])
    @endformFieldset
    @formFieldset(['id' => 'who_we_are_page', 'title' => 'Who We Are'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'who_we_are_page_title',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'CTA',
            'name' => 'who_we_are_cta',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'Homepage Text',
            'name' => 'who_we_are_home_text',
            'type' => 'textarea',
            'rows' => 5
        ])
    @endformFieldset
@stop