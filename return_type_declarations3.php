<?php
Class MyClass {

    function make(): MyClass {
        return new MyClass();
    }
}

Class MyOtherClass extends MyClass {

    function make(): MyOtherClass {
        return new MyOtherClass();
    }
}