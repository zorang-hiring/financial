# Interview Task

# Basic Architecture Rules

We want a very simple Pay Portal Financial application business logic. 
This meas that Application **should not contain any HTTP input points 
or external HTTP interaction, database interaction or 
some Frameworks**.

**Bonus is if application can represent 
a "Clean Architecture" design philosophy - but this is not mandatory.**

## Business Rules and Requirements:

1. As Pay Portal administrator I want to be able to insert new Credit Cards
   in the system. Credit Card will contain data: 
   - unique Credit Card number, 
   - CVV number - 3 digits 
   
   Ideally but not mandatory: I don't want to be able to insert a Card data which violates rules defined above.

2. As Pay Portal administrator I want to bi able to make a payment to Imaginary
   3rd party Payment Gateway (check ExternalPaymentGateway1 interface)
   using a Credit Card I stored in the system.

## Additional architecture requirement:

As a Tech Lead I want to be able to easy replace 
current ExternalPaymentGateway1 with a other ExternalPaymentGateway2 
without any or significant changes in a core business logic.

## Run Tests

```vendor/bin/phpunit```