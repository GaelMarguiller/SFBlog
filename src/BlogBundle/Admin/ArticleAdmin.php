<?php

namespace BlogBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('categories');
        $formMapper->add('title');
        $formMapper->add('content');
        $formMapper->add('publication');
        $formMapper->add('author');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('categories');
        $datagridMapper->add('title');
        $datagridMapper->add('content');
        $datagridMapper->add('publication');
        $datagridMapper->add('author');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('categories');
        $listMapper->add('title');
        $listMapper->add('content');
        $listMapper->add('publication');
        $listMapper->add('author');
    }
}