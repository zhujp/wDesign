<?php 
namespace composite;

abstract class CompositeRole extends AbstractRole
{

    protected $roles = [];

    /**
     * 只有在本类中返回对象
     * @return [type] [description]
     */
    public function getComposite()
    {
        return $this;
    }


    public function addEquipment(AbstractRole $role)
    {
        if (in_array($role,$this->roles)) {
            return true;
        }

        $this->roles[] = $role;
    }


    public function removeEquipment(AbstractRole $role)
    {
        $this->roles = array_diff($this->roles, [$role]);
    }

}