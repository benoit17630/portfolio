<?php

namespace App\Controller\Admin\Rgbd;

use App\Entity\Rgbd\LegalMentionTranslation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LegalMentionTranslationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalMentionTranslation::class;
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
