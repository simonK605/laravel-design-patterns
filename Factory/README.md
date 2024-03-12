# Factory Design Pattern

The Factory design pattern is a creational pattern that provides an interface for creating objects in a super class, but allows subclasses to alter the type of objects that will be created.

# Advantages
* Encapsulation: The creation logic is encapsulated in a separate class, making it easy to manage and extend.
* Flexibility: Subclasses can alter the type of objects that will be created without changing the client code.
* Testability: Factories facilitate easier testing by allowing the substitution of mock objects during testing.

# Considerations
* Complexity: In simpler scenarios, direct instantiation may be more straightforward. The Factory pattern is most beneficial in scenarios with complex creation logic.