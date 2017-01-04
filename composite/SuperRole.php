<?php 
namespace composite;

class SuperRole extends CompositeRole
{
    public function attack()
    {
        $attack = 0;

        foreach ($this->roles as $role)
        {
            $attack += $role->attack();
        }

        return $attack;
    }
}