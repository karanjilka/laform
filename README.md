Laravel form builder for Laravel 5

# Installation
Require this package in your `composer.json` and update composer. This will download the package.
```php
"karan/laform": "dev-master"
```
Then add Service provider to config/app.php
```php
Karan\Laform\LaformServiceProvider::class,
```
And Facade (also in config/app.php)
```php
'Laform'    => Karan\Laform\Facade::class
```
# Basic Usage
Syntax
```php
{!! Laform::field('fildname','fildtype','attributes') !!}
```
Examples
```php
{!! Laform::open(array('url'=>'admin/formtest','class'=>'form-horizontal')) !!}

{!! Laform::field('name','text',['label'=>'Name']) !!}

{!! Laform::field('email','email',['label'=>'Email address']) !!}

{!! Laform::field('password','password',['label'=>'Password']) !!}

{!! Laform::field('password_confirmation','password',['label'=>'Confirm Password']) !!}

{!! Laform::field('role_id[]','select',
['label'=>'Select Roles',
'options'=>[1=>'Admin',2=>'Siteadmin'],
'attr'=>['multiple'=>'multiple']]) !!}

{!! Laform::field('test_textarea','textarea',['label'=>'Text Area','attr'=>['rows'=>'5','cols'=>'10']]) !!}

{!! Laform::field('test_chexbox','checkbox',['option'=>'1','label'=>'test Checkox']) !!}

{!! Laform::field('test_radio','radio',['option'=>'1','label'=>'test Checkox']) !!}

{!! Laform::field('test_chexboxs[]','checkboxs',['option'=>['1'=>'option 1','2'=>'option 2',
'3'=>'option 3'],'label'=>'test Checkox']) !!}

{!! Laform::close() !!}
```
