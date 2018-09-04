# trait

A Trait is a code reuse mechanism, in single inheritance programming languages (ie. PHP) that is used to reduce some limitations of single inheritance by allowing to reuse sets of methods in independent classes living in different class hierarchies.
To understand traits, we need to get its context between interfaces, abstract classes, classes and multiple inheritance.
A class can specify more than one interface with no implementation whatsoever.
Interfaces allow you to specify methods and parameters with no concrete implementation.
An interface is just a blue print for methods but the implementing class must then be responsible for the implementation.
Abstract classes define method signatures and may (or may not) contain concrete implementations.
Abstract classes cannot be instantiated but only be extended by a concrete class.
A concrete class can only extend a single abstract class at any given time.
The problem with interfaces and abstract classes is that it can lead to code duplication in the concrete classes.
This is where Traits come into play because they are close to a combination between interfaces and abstract classes. They are like interfaces in the sense that a concrete class can use more than one trait, and they are like abstract classes in that they can have (or not) concrete implementation.

Examples:
* trait_fail.php
* trait_success.php
* trait_interface.php

