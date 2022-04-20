<?php

namespace App\Controller\Admin;

use App\Entity\TransactionFile;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class TransactionFileCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TransactionFile::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInSingular('Arquivo de Transação Bancária')
            ->setEntityLabelInPlural('Arquivos de Transação Bancária');
    }

    public function configureFields(string $pageName): iterable
    {
        $uploadDir = $this->getParameter('upload.document.transaction-file.path');

        return [
            Field::new('document', 'Arquivo')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions([
                    "upload_dir" => $uploadDir,
                ]),
        ];
    }
}
