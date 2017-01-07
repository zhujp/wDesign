<?php 
namespace interpreter;

class Interpreter implements InterpreterInterface
{
    public function find($table,$where)
    {
        $str = '1 ';
        if (is_array($where) && !empty($where)) {
            foreach ($where as $key => $val) {
                $str .= ' and '.$key.'=\''.$val.'\'';
            }
        } else {
            $str .= ' and '.$where;
        }

        echo 'SELECT * FROM '.$table.' WHERE '.$str;
    }


    public function delete($table,$where)
    {
        $str = '1 ';
        if (is_array($where) && !empty($where)) {
            foreach ($where as $key => $val) {
                $str .= ' and '.$key.'=\''.$val.'\'';
            }
        } else {
            $str .= ' and '.$where;
        }

        echo 'DELETE FROM '.$table.' WHERE '.$str;
    }
}