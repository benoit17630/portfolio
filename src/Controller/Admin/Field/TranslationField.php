<?php

declare(strict_types=1);

namespace App\Controller\Admin\Field;

use A2lix\TranslationFormBundle\Form\Type\TranslationsType;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface ;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;


class TranslationField implements FieldInterface
{

    use FieldTrait;
    public static function new(string $propertyName, ?string $label = null, array $fieldConfig = []): self
    {
        return (new self())
            ->addFormTheme(
                "@A2lixTranslationForm/bootstrap_5_layout.html.twig",
                "@FOSCKEditor/Form/ckeditor_widget.html.twig",

            )
            ->setProperty($propertyName)
            ->setLabel($label)
            ->setFormType(TranslationsType::class)
            ->setFormTypeOptions([
                'default_locale'=> 'fr',
                'fields' => $fieldConfig,
                "excluded_fields"=> ['slug'],
            ])


            ;
    }


}
