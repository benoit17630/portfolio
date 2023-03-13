<?php

namespace App\Controller\Admin;

use App\Entity\AboutTranslation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AboutTranslationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AboutTranslation::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
