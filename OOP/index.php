<?php

class A{
    public function Foo()
    {
        
    }
}
trait D{
    public function Foo2()
    {
        
    }
}

trait E{
    public function Foo1()
    {
        
    }
} 
class B extends A{
    use D,E;
    public function Bar()
    {
        
    }
}