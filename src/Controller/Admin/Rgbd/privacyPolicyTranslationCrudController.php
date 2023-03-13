<?php

namespace App\Controller\Admin\Rgbd;

use App\Entity\Rgbd\privacyPolicyTranslation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class privacyPolicyTranslationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return privacyPolicyTranslation::class;
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
