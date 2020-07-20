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

    @formField('medias', [
        'name' => 'site_logo',
        'label' => 'Site Logo',
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
         @formField('input', [
            'label' => 'CTA',
            'name' => 'home_cta',
            'textLimit' => '80'
        ])
        @formField('medias', [
            'name' => 'banner_img',
            'label' => 'Banner Image',
        ])
    @endformFieldset

    @formFieldset(['id' => 'who_we_are_page', 'title' => 'Who We Are'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'people_page_title',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'CTA',
            'name' => 'people_cta',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'Homepage Text',
            'name' => 'people_home_text',
            'type' => 'textarea',
            'rows' => 5
        ])
        @formField('medias', [
            'name' => 'people_image',
            'label' => 'Image',
        ])
    @endformFieldset

    @formFieldset(['id' => 'our_work_page', 'title' => 'Our Work'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'clients_page_title',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'CTA',
            'name' => 'clients_cta',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'Homepage Text',
            'name' => 'clients_home_text',
            'type' => 'textarea',
            'rows' => 5
        ])
         @formField('input', [
            'label' => 'Page Intro',
            'name' => 'clients_page_intro',
            'type' => 'textarea',
            'rows' => 5
        ])
        @formField('medias', [
            'name' => 'clients_image',
            'label' => 'Image',
        ])
    @endformFieldset

    @formFieldset(['id' => 'how_we_work_page', 'title' => 'How We Work'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'process_page_title',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'CTA',
            'name' => 'process_cta',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'Homepage Text',
            'name' => 'process_home_text',
            'type' => 'textarea',
            'rows' => 5
        ])
         @formField('input', [
            'label' => 'Page Intro',
            'name' => 'process_page_intro',
            'type' => 'textarea',
            'rows' => 5
        ])
        @formField('medias', [
            'name' => 'process_image',
            'label' => 'Image',
        ])
    @endformFieldset

    @formFieldset(['id' => 'tech_page', 'title' => 'Tech We Know'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'tech_title',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'CTA',
            'name' => 'tech_cta',
            'textLimit' => '80'
        ])
         @formField('input', [
            'label' => 'Homepage Text',
            'name' => 'tech_home_text',
            'type' => 'textarea',
            'rows' => 5
        ])
         @formField('input', [
            'label' => 'Page Intro',
            'name' => 'tech_page_intro',
            'type' => 'textarea',
            'rows' => 5
        ])
        @formField('medias', [
            'name' => 'tech_image',
            'label' => 'Image',
        ])
    @endformFieldset

     @formFieldset(['id' => 'values_page', 'title' => 'Our Values'])
         @formField('input', [
            'label' => 'Page title',
            'name' => 'values_title',
            'textLimit' => '80'
        ])
        
         @formField('input', [
            'label' => 'Page Intro',
            'name' => 'values_intro',
            'type' => 'textarea',
            'rows' => 5
        ])
        @formField('medias', [
            'name' => 'values_img',
            'label' => 'Image',
        ])
    @endformFieldset
@stop