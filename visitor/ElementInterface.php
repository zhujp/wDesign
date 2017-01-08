<?php 
namespace visitor;

interface ElementInterface
{
    public function accept(VisitorInterface $visitor);
}