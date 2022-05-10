
# Project 3
* By: Xunqi Liu
* Production URL: [http://e15p3.hiwoocafe.com](http://e15p3.hiwoocafe.com)

## Feature summary
* Visitors can register/login
* Users can add_update_delete emails templates in their collection (title, content)
* Users can send  emails to certain friends 
* Users can check their sent logs 
* Each user can create their own email templates to use
* The email function is based on laravel mail with Blade engine
* Sending  emails uses  laravel queue to improve user experience
* Email service is provided by Maingun 

## Database summary

* My application has 5 tables in total (`users`, `sent_logs`, `emails`,`email_user`,`jobs`)
* There's a many-to-many relationship between `emails` and `users`

## Outside resources
CSS framework is Bootstrap 5. [Bootstrap · The most popular HTML, CSS, and JS library in the world.](https://getbootstrap.com)

## Notes for instructor
NA

## Tests
```
Codeception PHP Testing Framework v4.1.31 https://helpukrainewin.org
Powered by PHPUnit 8.5.24 #StandWithUkraine

Acceptance Tests (8) ------------------------------------------------------------------------------------------------------------------
EmailCreateCest: Email create
Signature: EmailCreateCest:EmailCreate
Test: tests/acceptance/EmailCreateCest.php:EmailCreate
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I click "CreateEmail"
 I see "Title"
 I fill field "[name=title]","Test"
 I fill field "[name=content]","Test"
 I click "Create"
 I see "Email created successfully"
 PASSED 

EmailEditCest: Email edit
Signature: EmailEditCest:EmailEdit
Test: tests/acceptance/EmailEditCest.php:EmailEdit
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I click "View"
 I see "Edit"
 I click "Edit"
 I see "Title"
 I fill field "[name=title]","Test"
 I fill field "[name=content]","Test"
 I click "Submit"
 I see "Email updated successfully"
 PASSED 

LoginPageCest: User can log in
Signature: LoginPageCest:userCanLogIn
Test: tests/acceptance/LoginPageCest.php:userCanLogIn
Scenario --
 I am on page "/login"
 I see "Login"
 I see element "input[name="email"]"
 I fill field "[name=email]","jill@harvard.edu"
 I fill field "[name=password]","asdfasdf"
 I click "button"
 I see "Jill Harvard"
 I see "Logout","nav"
 PASSED 

SendEmailCest: Send email
Signature: SendEmailCest:SendEmail
Test: tests/acceptance/SendEmailCest.php:SendEmail
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I click "Send"
 I see "Please input the email address of the receiver"
 I fill field "[name=email]","xunqiliu@outlook.com"
 I click "Send the email"
 I see "Email sent successfully"
 PASSED 

SentLogsCest: Sent log page
Signature: SentLogsCest:SentLogPage
Test: tests/acceptance/SentLogsCest.php:SentLogPage
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/sentlog"
 I see "Sent Logs"
 I see "Title"
 PASSED 

ShowUserEmailsCest: Show emails
Signature: ShowUserEmailsCest:showEmails
Test: tests/acceptance/ShowUserEmailsCest.php:showEmails
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I see "View"
 PASSED 

ShowUserEmailsCest: Show email details
Signature: ShowUserEmailsCest:showEmailDetails
Test: tests/acceptance/ShowUserEmailsCest.php:showEmailDetails
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I click "View"
 I see "Edit"
 PASSED 

ShowUserEmailsCest: Delete email
Signature: ShowUserEmailsCest:deleteEmail
Test: tests/acceptance/ShowUserEmailsCest.php:deleteEmail
Scenario --
 I am on page "/test/refresh-database"
 I am on page "/test/login-as/1"
 I am on page "/"
 I click "View"
 I click "Delete"
 I see "Are you sure you want to delete email"
 I click "Delete"
 I see "View"
 PASSED 

---------------------------------------------------------------------------------------------------------------------------------------


Time: 6.23 seconds, Memory: 12.00 MB

OK (8 tests, 17 assertions)
```
