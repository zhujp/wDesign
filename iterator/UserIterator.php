<?php 
namespace iterator;

/**
 * PHP迭代器模式可以直接实现官方定义的接口，不需要额外去申明接口
 */
class UserIterator implements \Iterator
{

    /**
     * 保存对象索引
     * @var [type]
     */
    private $_index = 0;

    /**
     * 聚合对象
     * @var [type]
     */
    private $_users;


    public function __construct(User $users)
    {
        $this->_users = $users->getUsers();
    }

    public function current()
    {
        if (!$this->valid()) {
            return null;
        }
        $current = $this->_users[$this->_index];
        $this->_index += 1;
        return $current;
    }

    public function next()
    {
        $this->_index += 1;
        
        if (!$this->valid()) {
            return null;
        }
        return $this->_users[$this->_index];
    }

    /**
     * 验证下一个是否有效
     * @return [type] [description]
     */
    public function valid()
    {
        return $this->_index < count($this->_users);
    }

    /**
     * 初始化对象指针
     * @return [type] [description]
     */
    public function rewind()
    {
        $this->_index = 0;
    }


    public function key()
    {
        return $this->_index;
    }
}