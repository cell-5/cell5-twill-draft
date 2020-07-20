@extends('twill::layouts.form')

@section('contentFields')
@formField('input', [
'name' => 'job_title',
'label' => 'Job Title',
'maxlength' => 100
])
@formField('wysiwyg', [
'name' => 'bio',
'label' => 'Bio',
'maxlength' => 100,
'toolbarOptions' => [
['header' => [2, 3, false]],
'bold',
'italic',
'blockquote',
'link',
'clean'
],
'placeholder' => 'Write a short bio...',
'maxlength' => 2200,
'rows' => 10
])
@formField('medias', [
'name' => 'profile_img',
'label' => 'Image',
])
@stop