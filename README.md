# Local-Database-Voting-System
Basic Computer Systems Administration (LBYCPG2) course using the MySQL open-source database system, and the PHP, CSS, HTML, and JavaScript scripting languages using the PhpStorm, and XAMPP software. 

## Introduction

### Background of the Project
The proposed project is an online voting system capable of adding, storing, and modifying candidate
information, user votes, and account information. Given that users will be required to log in to be able to
access the system and its corresponding features, there will be two types of accounts: regular users and those
with administrative access. The former will have fewer available features provided by the system and will be
limited to editing their account information, and voting for existing candidates under specific positions
pre-determined by the program administrators. The administrator accounts will have access to the candidates
and positions available for normal users to vote for. Given that they are in charge of overseeing the voting
processes in their program, they are allowed the ability to see the current progress of the voting system per
position by having a section that displays each candidate’s number of votes displayed numerically or
graphically. The registered users, available candidates, and positions, as well as details of each voter, will be
stored in databases created using PHP.

### Problem
One of the evident problems during election season is the long lines. Overcrowding in the precincts
and having only to spend a short time during the voting itself is unrewarding. The Philippines may still not be
mask-free during the 2022 elections, predicting the current government response to the COVID-19. With our
current system, ballots are still used which can be an obvious cause of vote manipulation. There is no
assurance on what happens to the votes behind the scenes. Lastly, considering that the election process will be
done face to face, there will be more funds needed for the maintenance of the voting locations, ensuring that
everything is sanitized to prevent the further spread of COVID-19.

### Significance of the System
With the proposed local database voting system, voting can be done anywhere and anytime. It is
convenient and can even be done in the comfort of our own homes. In addition, the results of the votes are
secured, calculated accurately, and produced right away. It can also be assured that no manipulation was done,
as the voters get to see the receipt or proof of their votes, and it cannot be said that the election was rigged.
Moreover, there would be lesser expenses for this as it would only be for the maintenance of the local
database itself.

## Scope and Limitations
The online voting system acts as a long-term database that stores user votes and candidate statuses
from all entries stored in the database. It is capable of cross-referencing data from different database tables
and obtaining specific user or candidate information on user-dependent moments. Aside from being a storage
device for candidate votes per position, the program is also able to view the validated user accounts passed on
to the system databases and check which of these voters have already voted through the use of an
administrator account preemptively created before simulating the program and its included functions.<br/><br/>
In terms of limitations, the program still has ample room for improvement as an online voting
system. As it is now, it is not able to manipulate and modify data already submitted onto the system, whether
as a normal user or a program administrator using a super account. This includes adding new candidates to
the system for users to be able to vote on, changing voter data once submitted, and changing user profile
information once they have created their accounts.

## Functionality Details

### Home Page
The home page acts as the starting point for the program before having anything to do with logging
in and voting. This section contains articles regarding the upcoming elections and the importance of
registering to vote. Additionally, candidate information of the dummy data used for the program can also be
accessed on the Home page via the taskbar at the top of the webpage, which shows brief information about
each candidate for users to get to know each one before having to log-in and register their votes.

### Login and Registration Page
These pages are much like any other webpage that provides its users with a secure avenue to carry
out processes and store information without any outside assistance nor interference. The registration page
asks for new users to input necessary information aside from their preferred login credentials to be shown in
their voters’ receipts once they have voted in the system. This will require them to log in via the login page
using the accounts they have registered. Error checking for both pages allows for the preemptive handling of
specific errors like users registering an account with a username that has already been used and stored in the
database, and all possible forms of invalid login attempts for users.

### Main Page
This is the area where the majority of all user-related processes are to be handled. The main page first
determines the type of user logging in before identifying the contents to be displayed on the screen. There are
three types of logged-in users that the main page is programmed to handle: an administrator login, a voter
login that has not yet voted in the system, and a voter login that has already voted. Each of these three
scenarios display different content in correlation with the user’s account type and status. <br/><br/>
The first of the three conditional login outcomes would be that of the administrator page. If the
program detects that the logged in user is an administrator by its account type, the main page will display the
four main databases necessary for documentation purposes of the program a table of all user accounts with
their corresponding login credentials, a table of all users that have voted in the system, and tables of the
voting statistics of the candidates for both the presidents and vice presidents in terms of the number of votes
and percentages of the total votes. This is for the administrator to keep track of necessary information
regarding the online voting system and the progress of those running for specific positions.<br/><br/>
The second conditional login outcome depicts that of a user that has not yet voted in the system.
Ideally, this scenario would result from a user that has just registered an account from the register page as all
new users would be, by default, set to a “Not Voted” status. They would then be prompted to vote from the
lineup of candidates per position, with some details about them being displayed in the page as well for voter
reference. Once they have selected who they would like to vote for, a submit button at the bottom of the page
would send their responses to the database that stores all voter receipts.<br/><br/>
The last conditional outcome that the main page is able to process is that of a voter that has already
voted. With this, given that the user has already voted and therefore do not need to perform any more
activities in the program, the main page redirects the user to their respective voter receipt.

### Voter's Receipt
This section of the website is only available for users that have already registered and voted in the system.
This is because it displays who the user had voted for in the list of available candidates.


## Authors

#### Arciella Brience C. Crisostomo [arciella_brience_crisostomo@dlsu.edu.ph]

#### Dustin Kyle D. Landicho [dustin_kyle_landicho@dlsu.edu.ph]
