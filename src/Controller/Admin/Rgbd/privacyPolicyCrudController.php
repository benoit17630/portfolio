<?php

namespace App\Controller\Admin\Rgbd;

use App\Controller\Admin\Field\TranslationField;
use App\Entity\Rgbd\privacyPolicy;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class privacyPolicyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return privacyPolicy::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('title')->onlyOnIndex(),
            TranslationField::new("translations", "",[
                "title"=> [
                    "field_type"=> TextType::class
                ],
                "content"=> [
                    "field_type"=> CKEditorType::class
                ]
            ])
                ->onlyOnForms()
                ->setRequired(true)
            ,
        ];
    }

}
