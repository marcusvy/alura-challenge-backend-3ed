<?php

namespace App\Controller\Admin;

use App\Entity\Transaction;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class TransactionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Transaction::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInSingular('Transação')
            ->setEntityLabelInPlural('Transações');
    }

    public function configureFields(string $pageName): iterable
    {

        return [
            FormField::addPanel('Origem'),
            NumberField::new('origin_bank', 'Banco'),
            NumberField::new('origin_agency', 'Agência'),
            NumberField::new('origin_account', 'Conta'),

            FormField::addPanel('Destino'),
            NumberField::new('destiny_bank', 'Banco'),
            NumberField::new('destiny_agency', 'Agência'),
            NumberField::new('destiny_account', 'Conta'),

            FormField::addPanel('Montante'),
            MoneyField::new('value', 'Valor')->setCurrency('BRL')
        ];
    }
}
