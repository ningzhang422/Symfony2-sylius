@currencies
Feature: Exchange rates
    In order to sell products to customers paying in different currencies
    As a store owner
    I need to be able to configure exchange rates

    Background:
        Given I am logged in as administrator
          And there are following exchange rates:
            | currency | rate    |
            | USD      | 0.76496 |
            | GBP      | 1.16998 |
            | AUD      | 0.73986 |

    Scenario: Seeing index of all exchange rates
        Given I am on the dashboard page
         When I follow "Exchange rates"
         Then I should be on the exchange rate index page
          And I should see 3 exchange rates in the list

    Scenario: Currencies are listed in the index
        Given I am on the dashboard page
         When I follow "Exchange rates"
         Then I should be on the exchange rate index page
<<<<<<< HEAD
          And I should see exchange rate with currency "British Pound Sterling" in the list
=======
          And I should see exchange rate with currency "GBP" in the list
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

    Scenario: Rates are listed in the index
        Given I am on the dashboard page
         When I follow "Exchange rates"
         Then I should be on the exchange rate index page
          And I should see exchange rate with rate "0.73986" in the list

    Scenario: Seeing empty index of exchange rates
        Given there are no exchange rates
         When I am on the exchange rate index page
         Then I should see "There are no exchange rates to display."

    Scenario: Accessing the exchange rate creation form
        Given I am on the dashboard page
         When I follow "Exchange rates"
          And I follow "Create exchange rate"
         Then I should be on the exchange rate creation page

    Scenario: Submitting form without rate filled
        Given I am on the exchange rate creation page
         When I press "Create"
         Then I should still be on the exchange rate creation page
          And I should see "Please enter rate."

    Scenario: Creating new exchange rate
        Given I am on the exchange rate creation page
<<<<<<< HEAD
         When I select "Polish Zloty" from "Currency"
=======
         When I fill in "Currency" with "PLN"
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
          And I fill in "Rate" with "0.235654"
          And I press "Create"
         Then I should be on the exchange rate index page
          And I should see "Exchange rate has been successfully created."

    Scenario: Created exchange rates appear in the list
        Given I created exchange rate "PLN"
         When I go to the exchange rate index page
         Then I should see 4 exchange rates in the list
<<<<<<< HEAD
          And I should see exchange rate with currency "Polish Zloty" in that list
=======
          And I should see exchange rate with currency "PLN" in that list
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d

    Scenario: Accessing the exchange rate editing form
        Given I am on the dashboard page
         When I follow "Exchange rates"
<<<<<<< HEAD
          And I click "edit" near "US Dollar"
=======
          And I click "edit" near "USD"
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
         Then I should be editing exchange rate with currency "USD"

    Scenario: Updating the exchange rate
        Given I am editing exchange rate with currency "USD"
          And I fill in "Rate" with "0.76498"
          And I press "Save changes"
         Then I should be on the exchange rate index page
         Then I should see 3 exchange rates in the list
          And I should see "0.76498"

    Scenario: Deleting exchange rate
        Given I am on the exchange rate index page
<<<<<<< HEAD
         When I press "delete" near "US Dollar"
         Then I should see "Do you want to delete this item"
         When I press "delete"
         Then I should be on the exchange rate index page
          And I should see "Exchange rate has been successfully deleted."
          But I should not see exchange rate with name "US Dollar" in the list

    @javascript
    Scenario: Deleting exchange rate with js modal
        Given I am on the exchange rate index page
         When I press "delete" near "US Dollar"
          And I click "delete" from the confirmation modal
         Then I should still be on the exchange rate index page
          And I should see "Exchange rate has been successfully deleted."
          But I should not see exchange rate with name "US Dollar" in the list
=======
         When I press "delete" near "USD"
         Then I should still be on the exchange rate index page
          And I should see "Exchange rate has been successfully deleted."
          But I should not see exchange rate with name "USD" in the list
>>>>>>> 2a50dfc58650724c3cd7c772d2f88accef2f3f5d
