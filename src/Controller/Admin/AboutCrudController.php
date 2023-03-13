<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Field\TranslationField;
use App\Entity\About;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class AboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return About::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TranslationField::new("translations","", [
                "content"=> [
                    "field_type"=> CKEditorType::class
                ]
            ])
                ->hideOnIndex()
                ->setRequired(true),
            ImageField::new("image")
                ->setBasePath("upload/about")
                ->setUploadDir('public/upload/about')
                ->setUploadedFileNamePattern("[name]-[timestamp].[extension]")
                ->setRequired(true)

                ->hideWhenUpdating(),

        ];
    }

}
