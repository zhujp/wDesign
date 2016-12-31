<?php 
namespace builder;

/**
 * 指导者角色
 */
class Direct
{

    public function createNorvel(AbstractBuilder $builder)
    {
        $builder->createName();
        $builder->createLeadRole();
        $builder->createProperty();
        $builder->showNorvel();
    }
}