<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 1</h4><h4 id="score" style="color: blue;"></h4><form id="myform" method='post'><h5 id='q1'>1. Torts relating to misrepresented facts about a business's goods or services may be subject to a lawsuit
on the basis of</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. defamation.</option><option value="B">B. assault.</option><option value="C">C. intrusion.</option><option value="D">D. fraud.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: fraud.</h5><h5>A tort is a private wrongdoing against another person. Businesses can be held responsible in a
variety of torts. For example, suppose a business's employee intentionally provides misleading product
information to a customer in order to make a sale. Then, the customer purchases and is injured by the
product based on the employee's misleading information. The customer may file a civil lawsuit against
the business, and in some situations, the business's employee for fraudulent behavior. Assault and
intrusion are criminal acts that are addressed in the criminal court system rather than the civil court
system. Defamation is a tort that involves harm to an individual's or business's reputation.
</h5></div><h5 id='q2'>2. Which of the following is an example of a voluntary debtor-creditor relationship:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Owing punitive damages</option><option value="B">B. Receiving a monetary gift</option><option value="C">C. Requiring specific information</option><option value="D">D. Obtaining a loan from a bank</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: Obtaining a loan from a bank</h5><h5>The debtor is the individual or business that owes money to another
individual or business, which is the creditor. A business that obtains a loan from a bank is entering into a
voluntary debtor-creditor relationship. It is voluntary because the business (debtor) is seeking to obtain
funds from the bank (creditor) by going through a loan-application process. A monetary gift is given
without expectations of repayment. A monetary gift and a request for information are not examples of
debtor-creditor relationships. In tort cases, the court can order one party to pay punitive damages to the
other party. This is an example of an involuntary debtor-creditor relationship.
</h5></div><h5 id='q3'>3. Which of the following is a function of administrative law:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Ratification of treaties</option><option value="B">B. Passage of statutes</option><option value="C">C. Control of conduct</option><option value="D">D. Appeal of criminal acts</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: Control of conduct</h5><h5>Administrative law deals with the rules and regulations that have been established by
governmental agencies. The legislative branch of the government (i.e., U.S. Congress and Canadian
Parliament at the federal level) establishes these agencies, which have the authority to enact and enforce
regulations for various administrative functions. One function administrative agencies carry out is the
control of conduct, which includes information requirements (e.g., labeling), and codes of standards of
various businesses and industries. For example, the agricultural agency establishes grades for food
quality and sets standards for food safety. The legislative branch of government has authority to pass
statutes (e.g., establish government agencies) and ratify treaties. The judicial branch of government has
the authority over the appeals process in the court system.
</h5></div><h5 id='q4'>4. Because David did not find the department's policy about working overtime in the company's employee
handbook, he should</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. send a memo to the human-resources manager.</option><option value="B">B. look for the policy on the company's web site.</option><option value="C">C. question an employee from another department.</option><option value="D">D. ask the department manager about the policy.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: ask the department manager about the policy.</h5><h5>If employees are not sure if they can or should work
overtime, they should ask their department managers. Generally, department managers can authorize
overtime for their subordinates. Departmental policies are not usually posted on the company's web site.
Overtime policies often vary by department, so asking an employee who works in another department is
not an appropriate action to take. If the department manager is unavailable, the employee might ask the
human-resources manager about overtime policies.
</h5></div><h5 id='q5'>5. During a meeting, Kevin provided an idea for cutting departmental costs by 20 percent. Which action
would indicate that Kevin's supervisor liked his idea:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Rolling eyes while sarcastically stating, "Great idea, Kevin"</option><option value="B">B. Nodding, smiling, and writing down the idea</option><option value="C">C. Making eye contact, frowning, and crossing arms</option><option value="D">D. Cutting Kevin off while he's speaking and asking for more ideas</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Nodding, smiling, and writing down the idea</h5><h5>By nodding, smiling, and writing down Kevin's idea, Kevin's
supervisor would indicate that he likes what Kevin said. The supervisor could also indicate his/her
support of Kevin's idea by asking follow-up questions, maintaining eye contact with Kevin, and
enthusiastically telling Kevin that he has provided a great idea. Sarcasm, frowning, crossing arms, and
cutting off the speaker are rude and unsupportive actions.
</h5></div><h5 id='q6'>6. Which of the following is a relevant question for a job applicant to ask during an employment interview:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Are there any good restaurants nearby?</option><option value="B">B. What type of training do you provide for this position?</option><option value="C">C. Why didn't the sales department meet its goals last month?</option><option value="D">D. What is your annual salary?</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: What type of training do you provide for this position?</h5><h5>Relevant questions are types of questions that
pertain to the issue at hand. If an applicant is interviewing for a job, the applicant would ask the
interviewer questions about the company, job responsibilities, job training, professional development, etc.
It would be inappropriate to ask the interviewer about his/her salary, nearby restaurants, and salesdepartment shortfalls—these questions are irrelevant to the issue at hand.
</h5></div><h5 id='q7'>7. If a message recipient is frowning and has clenched fists, the emotional response that is s/he most likely
displaying is</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. sadness.</option><option value="B">B. anger.</option><option value="C">C. joy.</option><option value="D">D. nervousness.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: anger.</h5><h5>Nonverbal cues are the elements of communication that use gestures and facial expressions
rather than the use of words. Nonverbal behavior can indicate what the sender and/or the receiver think
about a message. If the recipient responds to a message by frowning and clenching his/her fists, it is
likely that the message has made the recipient angry. Message recipients might cry or cover their faces
with their hands if the message contains sad news. Smiling and jumping up and down usually indicate
that a message contains good news, which indicates joy. A message recipient might express
nervousness by tapping their toes, shaking, twitching, or biting fingernails.
</h5></div><h5 id='q8'>8. Which of the following is a legitimate response for an employee to provide to a customer regarding an
inquiry about product pricing:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. I'm pretty sure that the item costs $39.65.</option><option value="B">B. I'm not sure what the pricing is.</option><option value="C">C. You'll need to contact the appropriate person to get the price.</option><option value="D">D. If you can wait a moment, I'll check for the price in the computer.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: If you can wait a moment, I'll check for the price in the computer.</h5><h5>Businesses receive inquiries from
customers on a regular basis. In some situations, an employee may not know the answer to a customer's
question. To provide good customer service, the employee should take the appropriate steps to obtain
the requested information. This may involve verifying the price in the computer system or transferring a
customer's telephone call to the sales department. Guessing the price, stating that s/he does not know
the price, and telling the customer to contact another person are not legitimate responses to inquiries and
do not provide customers with good customer service.
</h5></div><h5 id='q9'>9. What is an important consideration when giving employees verbal directions for completing a task?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. It is unnecessary to use demonstrations to support verbal content.</option><option value="B">B. It is best to present information in reverse order.</option><option value="C">C. Employees usually ask questions when they are confused.</option><option value="D">D. Employees process information differently.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Employees process information differently.
</h5><h5>Explanation not available</h5></div><h5 id='q10'>10. In a weekly staff meeting, Morgan presents a set of new procedures that she believes will improve the
department's productivity levels. Jacob disagrees with Morgan's approach and provides alternative for
improvement. Although Morgan agrees with a couple of Jacob's points, she still thinks her plan will be
better for the company in the long run. How can Morgan effectively defend her idea for improvement?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Tell Jacob that most of his ideas are weak and restate her suggestions</option><option value="B">B. Present supporting research for her suggestions in an unbiased way</option><option value="C">C. Request that the group meet again, so she has time to come up with new ideas</option><option value="D">D. Ask the other members of the group for their input and ideas</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: Present supporting research for her suggestions in an unbiased way</h5><h5>By providing supporting facts,
Morgan can actually show the staff how and why her ideas can improve the department's productivity. If
Morgan presents research that indicates that other companies' productivity levels have improved by
using approaches similar to the one that she is suggesting, then she is defending her ideas effectively.
Telling Jacob in front of the group that his ideas are weak is likely to create unnecessary conflict.
Restating suggestions, coming up with new ideas, and asking other group members for input are not
ways to defend an existing suggestion for improvement.
</h5></div><h5 id='q11'>11. An employee is preparing a formal report and must present important facts in the sequence in which they
occurred. The employee should prepare the report by presenting the information in ___________ order.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. concurrent</option><option value="B">B. inverted</option><option value="C">C. chronological</option><option value="D">D. reverse</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: chronological</h5><h5>When describing a process or historical information, the writer may need to present the
facts in chronological order. By describing the steps or events in the sequence in which they occur, the
writer is presenting the information in a logical manner, which helps the readers understand the content.
When presenting information in an inverted order, the writer is describing the steps or processes in
reverse order. Concurrent means that activities are being performed at the same time.
</h5></div><h5 id='q12'>12. Which of the following is a graphic aid that uses text to depict a sequence of events or the order of a
process:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Bar chart</option><option value="B">B. Pie chart</option><option value="C">C. Flowchart</option><option value="D">D. Geographic map</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: Flowchart</h5><h5>A flowchart presents a visual depiction of activities or processes in sequential order.
Flowcharts use text in a graphic format to present activities and processes. An example of a flowchart is
an organizational chart, which depicts the hierarchy of positions and departments within an organization.
A pie chart is a graphic aid that shows the frequency or distribution of parts in relation to a whole concept.
A bar chart compares two or more variables in a graphical format. A geographic map is an illustration that
shows the physical attributes (i.e., mountains, rivers) of a location or region.
</h5></div><h5 id='q13'>13. Before sending a professional e-mail message to a business associate, a businessperson should</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. code the message's importance as "high priority."</option><option value="B">B. proofread the message for spelling and grammatical errors.</option><option value="C">C. make sure that the message is typed in capital letters.</option><option value="D">D. insert a vague statement in the message subject line.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: proofread the message for spelling and grammatical errors.</h5><h5>Although many people view e-mail as an
informal method of communication, it is a vital communication tool in today's business world. Therefore, it
is important to maintain a professional tone when developing business-related e-mails. The text in a
professional e-mail should contain proper grammar and correct spelling. To ensure that the message
does not contain spelling and grammatical errors, the businessperson should proofread the message and
make necessary corrections before sending the message to the intended receiver. Only the most critical
e-mail messages should be sent as high priority messages. Capitalizing all of the letters in the text often
implies an angry tone, so this practice should be avoided. Although the subject line should be brief, it
should contain enough information for the message recipient to determine the message content. If the
subject line is too vague, the recipient may delete the message before reading it.
</h5></div><h5 id='q14'>14. Kevin developed a letter stating that his company will be offering discounts on certain products for a
limited time. Kevin's letter is an example of a(n)</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. expression of personal opinion.</option><option value="B">B. request for data.</option><option value="C">C. instructional guide.</option><option value="D">D. informative message.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: informative message.</h5><h5>If the recipient responds to a message by frowning and clenching his/her fists, it is
likely that the message has made the recipient angry. Message recipients might cry or cover their faces
with their hands if the message contains sad news. Smiling and jumping up and down usually indicate
that a message contains good news, which indicates joy. A message recipient might express
nervousness by tapping their toes, shaking, twitching, or biting fingernails.
</h5></div><h5 id='q15'>15. Because Caroline does not have enough time to read an entire 400-page business report, what section
of the report should she review to obtain an overview of the most important content?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Executive summary</option><option value="B">B. Table of contents</option><option value="C">C. Appendices</option><option value="D">D. Conclusions</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Executive summary</h5><h5>The executive summary provides an overview of the entire report and contains the
most important information included in the body of the report. When businesspeople have time
constraints, they often read the executive summary of a lengthy report. The table of contents is the
portion of the report in which the various report sections are listed with their page numbers for easy
access. The appendices are segments that are added to the end of the report and provide supporting
information. The conclusion section of the report summarizes results and in some reports, this section
includes recommendations for a certain course of action.
</h5></div><h5 id='q16'>16. XRT Corporation's human-resources manager sends a memo to all employees that describes some
general changes that will affect their healthcare insurance next year. This is an example of ___________
communication.</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. mass, upward</option><option value="B">B. lateral, downward</option><option value="C">C. formal, downward</option><option value="D">D. verbal, upward</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: formal, downward</h5><h5>Downward communication occurs when management sends messages to lower-level
employees. Formal communication involves following a specific protocol or systematic process when
transmitting messages. In the example, the human-resources manager communicates changes that
affect all employees because it is an aspect of his/her job. Therefore, the human-resources manager is
following the protocol as indicated in his/her job description. Lateral communication occurs among
employees (e.g., coworkers) at the same level. Mass communication involves simultaneous transmission
of nonpersonal messages to members of a large market segment. Upward communication occurs when
lower-level employees send messages to management.
</h5></div><h5 id='q17'>17. Businesspeople who fail to adapt their communication styles to appeal to their international clients are
more likely to</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. impress the clients.</option><option value="B">B. earn the clients' trust.</option><option value="C">C. offend the clients.</option><option value="D">D. persuade the clients to buy.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: offend the clients.</h5><h5>Businesspeople should try to learn as much as they can about a client's culture,
customs, and social values. By understanding and being aware of cultural differences, businesspeople
can adapt their communication styles to make a positive impression on their clients, earn their clients'
trust, and persuade their clients to buy. Businesspeople who adapt their communication styles are aware
of actions that a particular client might view as hospitable, as well as behaviors that the client might find
offensive. Offensive behaviors can hinder the ability to build long-term relationships with international
clients.
</h5></div><h5 id='q18'>18. Which of the following is a policy that the WNJ Company might implement to reinforce its image as an
efficient and responsive business:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Allow employees to establish their own service standards</option><option value="B">B. Request that employees sign their timecards at the end of a pay period</option><option value="C">C. Ensure that employees wear clean uniforms during their shifts</option><option value="D">D. Require employees to respond to customer inquiries within 24 hours</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: Require employees to respond to customer inquiries within 24 hours</h5><h5>A business's employees can have a
dramatic impact on the ways in which customers view the business. If one customer has a poor
experience with one employee, that customer often develops a poor attitude about the entire business.
And, that customer often shares those negative opinions with others. Therefore, a business should take
steps to ensure that its employees understand how their actions affect the business's image. Businesses
often develop policies to ensure that employees are engaging in behaviors that support the company's
image. Because WNJ wants to project an image of being responsive to its customers' needs, it
developed a policy that employees must respond to inquiries within 24 hours. This may include a quick
phone call just to tell the customer that the business is working on a problem or issue. Requiring signed
timecards is a personnel policy rather than a way to reinforce the business's public image. Although
clean uniforms can affect the business's image, the uniforms do not indicate how responsive the
business is in meeting its customers' needs. Because individuals often have different perspectives about
excellent service, it is not a good idea to allow employees to set their own service standards.
</h5></div><h5 id='q19'>19. Because Olivia is very happy with the quality of goods and services that she receives from the XOP
Company, she provides the business with several referrals. This is an example of</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. customer advocacy.</option><option value="B">B. free advertising.</option><option value="C">C. relationship buying.</option><option value="D">D. public relations.

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

3
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: customer advocacy.</h5><h5>An advocate is a supporter of something—a person who speaks favorably about an
idea, concept, cause, product, or business. When customers are happy with a business and its goods
and services, they tend to become advocates for the business. Customers advocate for a business by
providing referrals and through word-of-mouth (e.g., telling friends or blogging about the business).
Advertising is any paid form of nonpersonal presentation of ideas, goods, or services. A television
commercial is an example of advertising. Relationship buying refers to the purchases a customer makes
because of a long-term relationship s/he has established with a business. Public relations is the business
function designed to establish good relations between the business and its various publics.
</h5></div><h5 id='q20'>20. Kemper Corporation continuously updates the firewalls on its web site to protect its customers' personal
information from theft. Kemper's action helps build trust with its customers in relation to</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. physical safety.</option><option value="B">B. online security.</option><option value="C">C. product tampering.</option><option value="D">D. calculation errors.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: online security.</h5><h5>To build and maintain long-term relationships with customers, a business must earn its
customers' trust. To earn its customers' trust, a business must take steps to ensure that any personal
information (e.g., credit-card numbers) transmitted through its web site is secure from unauthorized
individuals (e.g., hackers). One way to ensure online security is to maintain and continuously update its
firewall software. The process of updating firewall software is not related to a person's physical safety,
product tampering, or calculation errors.
</h5></div><h5 id='q21'>21. An important aspect of using technology in customer relationship management involves</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. posting customer information on the business's web site.</option><option value="B">B. updating customer information in the computer database.</option><option value="C">C. allowing employees to have complete access to customer information.</option><option value="D">D. providing customers with excessive product information.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: updating customer information in the computer database.</h5><h5>Customer relationship management (CRM) is
the combination of strategies, processes, and policies that a business uses to meet or exceed customer
expectations and to provide customers with outstanding experiences at every touch point. An important
aspect of CRM is ensuring that customer data are current. For example, if the customer notifies the
business about a change of address and the business does not update its computer database to reflect
the change, the business's promotional mailings and invoices will not reach the customer in a timely
manner, if at all. In another situation, a business might have multiple database records for one customer.
If the business sends multiple (excessive) copies of promotional materials (e.g., product catalog) to the
customer based on the data in the database, the customer may become annoyed. Sending multiple
copies of a single mailing to one customer is also a waste of the business's money. To maintain the
customer's privacy, the business should not post customer information on its web site, nor should it allow
its employees to have complete access to a customer's confidential information.
</h5></div><h5 id='q22'>22. Which of the following are capital goods:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Buildings, roads, and equipment</option><option value="B">B. Equipment, land, and minerals
</option><option value="C">C. Roads, airplanes, and water</option><option value="D">D. Airplanes, minerals, and buildings
</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: Buildings, roads, and equipment</h5><h5>Capital goods are manufactured or constructed items that are used to
produce goods and services and are provided by people. Examples of capital goods are buildings, roads,
equipment, and airplanes. These items are capital goods because they enable producers to operate
businesses and to make goods available to customers. Land, minerals, and water are natural resources.
Natural resources are items that are found in nature and used to produce goods and services.
</h5></div><h5 id='q23'>23. A problem on a drilling platform in the Gulf of Mexico has affected the amount of oil that is extracted and
refined in the region. Because it is the summer travel season, the demand for gasoline is increasing;
however, there is less gasoline available, and the prices for gasoline spike. What economic condition
does this situation best describe?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Scarcity</option><option value="B">B. Conservation</option><option value="C">C. Opportunity cost</option><option value="D">D. Input maximization</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: Scarcity</h5><h5>Scarcity is a condition resulting from the gap between unlimited want for goods (e.g., gasoline)
and limited resources (e.g, oil). Because there is not enough of a resource (oil) to produce the desired
product (gasoline), supply declines. When demand for a product increases and supply for the product
decreases, scarcity occurs. Exchange is the process of trading one good or service for something else of
value. Conservation is the preservation and protection of resources. Opportunity cost is the benefit that a
person loses when s/he decides to use scarce resources (e.g., money) for one purpose rather than for
another. Inputs are the resources used in producing goods and services. When a business uses all of the
available inputs in the most efficient way to produce outputs, it is maximizing its inputs and outputs.
Because there is a problem on the drilling platform, the inputs are not being used efficiently or to the best
of their ability.
</h5></div><h5 id='q24'>24. Although the Calvert Automobile Company produces 1,500 Model ZX sports cars annually, over 500,000
people want to purchase the car each year. The 1,500 individuals who are willing and able to pay the
high price to obtain the cars have</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. unit control.</option><option value="B">B. absolute advantage.</option><option value="C">C. market position.</option><option value="D">D. buying power.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: buying power.</h5><h5>The Calvert Automobile Company situation is an example of rationing. Rationing is a
function of relative prices that determines who gets the goods produced or how scarce resources will be
distributed. In this situation, the 1,500 out of 500,000 individuals who are willing and able to pay a very
high price to obtain the sports car have buying power—the ability (financial resources) to purchase the
scarce item. Absolute advantage is the advantage achieved when a nation can produce a good or
service for less than another nation. Market position is the rank of a particular business in a specific
market. Unit control is a way of keeping track of inventory according to the number of units in stock.
</h5></div><h5 id='q25'>25. One reason that businesses use a matrix organizational design is to</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. improve employee productivity.</option><option value="B">B. share human resources.</option><option value="C">C. segment areas of expertise.</option><option value="D">D. standardize business tasks.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: share human resources.</h5><h5>The matrix organizational structure involves integrated departmental functions
with product or project orientation. For example, a technology specialist, a marketing researcher, a
financial advisor, and a manufacturing line supervisor are members of different departments but often
work together to develop a product or improve a process. The advantage to businesses of using this
organizational structure is that the business is applying its resources efficiently because a representative
from each of the major departments provides a unique set of skills and knowledge to achieve the
business's goals. Often, workers have two or more supervisors in the matrix organizational design. The
matrix organizational design may improve the business's overall efficiency, but it does not always
improve an individual's productivity. Departmental organizational design segments employees by their
areas of expertise (e.g., accounting, sales, and production). Policies and procedures are developed to
standardize various business activities and tasks in all types of organizational designs.
</h5></div><h5 id='q26'>26. Which of the following factors have provided businesses with more opportunities to buy and sell products
at the international level:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Protectionism</option><option value="B">B. Free-trade agreements</option><option value="C">C. Language barriers</option><option value="D">D. Strict safety standards</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Free-trade agreements</h5><h5>Free-trade agreements lessen the trade restrictions (e.g., tariffs, quotas,
licenses) among countries. For example, the North American Free Trade Agreement (NAFTA) is a trade
agreement among the United States, Canada, and Mexico that has eliminated trade barriers. When fewer
trade barriers exist, there are more opportunities for businesses to buy and sell products in other
countries. Protectionism is a government's policy to protect domestic industries and businesses against
foreign competition. Protectionism, language barriers, and strict safety standards often hinder a
business's ability to enter international markets.
</h5></div><h5 id='q27'>27. Which phase of the business cycle would most likely have an unfavorable effect on the business
environment:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Maturity</option><option value="B">B. Expansion</option><option value="C">C. Contraction</option><option value="D">D. Remission</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: Contraction</h5><h5>Businesses are affected by external factors, which include changes in the business cycle.
The business cycle refers to the periods of expansion and contraction in economic conditions. When the
economy is strong and growing (expansion), businesses tend to make profits, expand operations, and
hire more employees. When the economy is on a downswing (contraction), businesses often experience
lower sales and profits, which has an unfavorable effect on the business. If a business's sales and profits
continue to decrease over time, it may lay off workers to cut costs, so it can continue to operate. Maturity
is a stage in a product's life cycle. Remission is not a phase in the business life cycle.
</h5></div><h5 id='q28'>28. The government owns and operates most of the means of production and distribution in a country. The
government establishes production quotas for businesses, sets products' prices, and tells workers what
their wages will be. This is an example of a(n) __________ economic system.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. traditional</option><option value="B">B. command</option><option value="C">C. market</option><option value="D">D. transitional</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: command</h5><h5>A command economic system is an economic system in which all or many of the means of
production and distribution are owned and controlled by the government. An economic system in which
people produce only what they must have in order to exist is called a traditional economic system. In a
market economy, individuals and businesses in the marketplace determine what, how, and for whom
goods and services will be produced. When a country's economic system is moving from one type of
economic system to another type of economic system, it is in a transitional state.
</h5></div><h5 id='q29'>29. What are consumers doing when they purchase goods and services in a market economy?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Making informed choices</option><option value="B">B. Casting economic votes</option><option value="C">C. Using resources efficiently</option><option value="D">D. Determining what to produce</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: Casting economic votes</h5><h5>An economic vote is consumer approval of products expressed by the purchase
of the products. When consumers purchase a lot of a particular product, they are expressing their need
or want for the product. It also indicates that they are willing to pay a certain price to obtain the product.
Purchasing certain products does not mean that consumers are making informed choices or using their
resources efficiently. For example, an individual may purchase an expensive flat-screen television
without knowing anything about the television or its manufacturer. The same individual may decide to
purchase the television instead of something s/he really needs. When this occurs, the individual is not
making informed decisions nor is s/he using his/her financial resources wisely. Businesses rather than
consumers determine what to produce. Businesses determine what to produce by monitoring what
consumers are buying.
</h5></div><h5 id='q30'>30. Every pay period, Sarah's employer withholds a certain percentage of her earnings, which her employer
forwards to various government agencies. What type of tax is Sarah's employer withholding?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Property</option><option value="B">B. Estate</option><option value="C">C. Income</option><option value="D">D. Excise

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

4
</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: Income</h5><h5>Income taxes are levied on income earned from a job or other sources. Employers withhold
income tax from their employees' paychecks, and submit the monies to the government at certain
intervals. Estate tax is paid on inherited property valued above a certain amount. Property taxes are paid
on land and buildings. An excise tax is often referred to as a “sin tax,” and it is levied on nonessential
products such as gasoline, cigarettes, and alcohol.
</h5></div><h5 id='q31'>31. Which of the following workers is most likely to be a member of a craft/trade union:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. A science teacher who works at a mid-size high school in a rural area of the Midwest</option><option value="B">B. A housekeeping manager who works for a luxury hotel chain</option><option value="C">C. A machinist who works for a large manufacturer that produces parts for farm equipment</option><option value="D">D. A licensed stockbroker who works for a small financial firm</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: A machinist who works for a large manufacturer that produces parts for farm equipment</h5><h5>Because a
machinist has specialized skills, s/he is likely to be a member of a craft/trade union. A person who works
in a specific industry (hotel) is likely to be a member of an industrial union. A teacher is most likely a
member of a teacher's union, which is a type of independent union. A licensed stockbroker is most likely
a member of a professional organization.
</h5></div><h5 id='q32'>32. Which of the following situations is most likely to happen during a period of economic expansion:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. The government delays projects.</option><option value="B">B. Consumer spending increases.</option><option value="C">C. Businesses default on loans.</option><option value="D">D. Unemployment rises.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consumer spending increases.</h5><h5>Business cycles, which are the periods of expansion and contraction in
economic activities, affect businesses, consumers, and the government. During a period of expansion,
unemployment levels drop because businesses are expanding and need workers to perform jobs to
support production increases. When people are working, they have income to spend on goods and
services, so their spending increases. The government is more likely to delay projects and businesses
are more likely to default on loans during the recession and trough phases of the business cycle.
</h5></div><h5 id='q33'>33. The gross domestic product (GDP) is most likely to decrease when the</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. consumer sector dramatically increases its spending on domestic goods and services.</option><option value="B">B. government significantly decreases its spending on domestic goods and services.</option><option value="C">C. business sector increases its production of goods and services.</option><option value="D">D. consumer sector decreases its spending on imported goods and services.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: government significantly decreases its spending on domestic goods and services.</h5><h5>Gross domestic
product (GDP) is the final total value of all goods and services produced within a country's geographic
boundaries during a year's time. Changes in the business cycle and how the government responds to
those changes affect a nation's GDP. When the business cycle enters a period of contraction,
unemployment tends to increase, and consumers tend to spend less money, which affects the amount of
tax revenue the government obtains. When the government has less money, it often cuts governmentsponsored initiatives and programs, many of which are outsourced to the private sector. When the
economy rebounds and enters a period of expansion, businesses increase production; and the
government, consumer, and business sectors increase their spending. Imported goods are not a
consideration when measuring the GDP.
</h5></div><h5 id='q34'>34. When minimally skilled workers lose their jobs due to technological advancements that require
specialized skills, what type of unemployment exists?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Cyclical</option><option value="B">B. Seasonal</option><option value="C">C. Frictional</option><option value="D">D. Structural</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: Structural</h5><h5>Structural unemployment results when people do not have the job skills for jobs that currently
exist. Because technology has evolved at a rapid rate over the past several decades, many jobs that
were once performed manually or with minimal training have been replaced with automated systems or
with jobs requiring special skills. Seasonal unemployment occurs when people are out of work because
of factors that involve the time of year. Frictional unemployment describes people who are temporarily
between jobs due to layoffs, resignations, or educational pursuits. These people often have the skills and
training they need to work but are unemployed. Cyclical unemployment occurs during periods of time
when there is low demand for workers due to economic conditions and fluctuations in the business cycle.
</h5></div><h5 id='q35'>35. When Eddie became upset with a coworker during a business meeting, he threw his file down on the
table, left the conference room, and slammed the door behind him. What was Eddie demonstrating?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Neutral non-verbal behavior</option><option value="B">B. Problem-solving techniques</option><option value="C">C. Positive relationship-management skills</option><option value="D">D. Low self-management skills</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: Low self-management skills</h5><h5>Explanation not available</h5></div><h5 id='q36'>36. What tool is often helpful to individuals who want to increase their levels of self-esteem?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Unwarranted criticism</option><option value="B">B. Generalization statements</option><option value="C">C. Visualization boards</option><option value="D">D. Aggressive attitude</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: Visualization boards</h5><h5>Self-esteem is the way you feel about yourself at any given time. A characteristic of
high self-esteem includes a positive belief in your own talents, skills, and goals, and your ability to use
your talents and skills to accomplish your goals. Visualization is a technique that can help increase selfesteem. Visualization is the practice of imagining yourself in possession of a present or desired attribute
or thing. To facilitate this practice, you might create a visualization board. The board consists of images
and words that reinforce your desires or goals, and help you feel positive about your abilities to
accomplish your goals. Frequently looking at the visualization board can help you to develop positive
feelings about yourself and your abilities, which can affirm your self-esteem. Unwarranted criticism and
generalization statements such as, “I always make stupid mistakes,” tends to lower self-esteem. An
assertive attitude rather than an aggressive attitude is more likely to increase self-esteem.
</h5></div><h5 id='q37'>37. Which of the following is an example of discrimination in the workplace:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Being denied a promotion on the basis of age</option><option value="B">B. Being denied a job on the basis of skills</option><option value="C">C. Requiring employees to wear a uniform</option><option value="D">D. Requiring professional development and certification</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: Being denied a promotion on the basis of age</h5><h5>Discrimination is the unfair treatment of a person or a
group based on the person's or group's characteristics, such as ethnicity, religion, gender, and age. It is
not only unfair to deny a promotion to a qualified candidate because of his/her age, it is illegal in some
jurisdictions. Not hiring a person who lacks the skills to perform the work, requiring employees to wear a
uniform, and requiring professional development and certification for certain positions are not forms of
discrimination.
</h5></div><h5 id='q38'>38. As Ben assesses his personal strengths and weaknesses, what can he do to keep from focusing too
much on his weaknesses?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Develop a list of false generalizations</option><option value="B">B. Compare himself to others</option><option value="C">C. Identify one strength for every weakness</option><option value="D">D. Ask others for critical feedback</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: Identify one strength for every weakness</h5><h5>Although an important aspect of self-assessment is evaluating
your weaknesses, obsessing over them will only discourage you. If you identify one strength for every
weakness, you will have a more accurate, realistic assessment of yourself. Comparing yourself to others
and making false generalizations may also hinder your ability to accurately assess yourself. Asking
others for both positive and negative feedback is an important aspect of the self-assessment process, but
it is counter-productive to obsess over the negative feedback.
</h5></div><h5 id='q39'>39. What personal attribute involves feeling comfortable with your opinions and decisions, even when others
criticize you for them?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Social responsibility</option><option value="B">B. Creative thinking</option><option value="C">C. Self-confidence</option><option value="D">D. Optimism</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Self-confidence</h5><h5>Self-confidence is a positive belief in your own talents, skills, and objectives. Selfconfident people adhere to their personal code of ethics, even when others do not agree with or are
critical of those opinions, decisions, or behaviors. Creative thinking involves the use of the creativethinking process to generate unique ideas, approaches, or solutions. Social responsibility is the duty of
business to contribute to the well-being of society. Optimism is a positive attitude.
</h5></div><h5 id='q40'>40. When Claire tells her supervisor that she made a mistake on the report that she recently submitted, she
is demonstrating</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. adaptability.</option><option value="B">B. enthusiasm.</option><option value="C">C. self-control.</option><option value="D">D. honesty.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: honesty.</h5><h5>Honest people tell the truth, even when it may cause problems for them. By accepting
responsibility for her own actions and telling her supervisor about the mistake she made, Claire is being
truthful. Enthusiasm involves showing a great deal of interest in something. Self-control is restraint of
your feelings, words, and actions. Adaptability is the ability to adjust to changing conditions.
</h5></div><h5 id='q41'>41. Which of the following is an example of a person demonstrating self-control:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Corinne organized and straightened up the office workroom without being told to do so.</option><option value="B">B. Madison expressed her understanding of Mrs. Paxton's complaint by nodding her head.</option><option value="C">C. Chris was able to get the vendor to reduce the price of the materials by 10 percent.</option><option value="D">D. Bill managed to keep his temper in check when Ali made comments that he didn't like.

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

5
</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bill managed to keep his temper in check when Ali made comments that he didn't like.

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

5
</h5><h5>Explanation not available</h5></div><h5 id='q42'>42. What is an important thing to remember about change?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. It often takes time to feel comfortable with the change.</option><option value="B">B. If you resist change, you can usually avoid it.</option><option value="C">C. Change requires you to accept a high degree of risk.</option><option value="D">D. A resistance to change is usually based on irrational fears.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: It often takes time to feel comfortable with the change.</h5><h5>Everyone experiences change—it's unavoidable.
To adapt to the change, it is important to remember that it often takes time to feel comfortable with the
change, which depends on the person and the situation. Being patient and recognizing your feelings will
help you better adapt to the change. Resisting change often makes the change more difficult. Often, fear
drives the resistance to change and may be valid or irrational. All change involves a certain level of risk,
but the level of risk depends on the change involved.
</h5></div><h5 id='q43'>43. Which of the following are secondary dimensions of diversity:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Work experience, nationality, and age</option><option value="B">B. Religion, work experience, and gender</option><option value="C">C. Family status, ethnicity, and communication style</option><option value="D">D. Income, family status, and education level</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: Income, family status, and education level</h5><h5>Secondary dimensions of diversity are differences that may
change at various points throughout one's lifetime and include such characteristics as language, religion,
income, geographic location, family status, communication style, and education level. Primary
dimensions of diversity are inborn differences that cannot be changed and affect a person's entire life
and include such characteristics as age, gender, race/ethnicity, nationality, physical traits, and abilities
(both mental and physical).
</h5></div><h5 id='q44'>44. While making a presentation to a customer, Kip used complex terms that the customer didn't understand.
In this situation, effective communication was hindered due to</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. the customer's emotional intelligence.</option><option value="B">B. Kip's personal appearance.</option><option value="C">C. the use of jargon.</option><option value="D">D. ongoing interruptions.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: the use of jargon.</h5><h5>Effective communication requires that the receiver clearly understands the speaker's
message. Jargon is a specialized language known only to a certain group of people. Different industries
use jargon or terms that those who work in other industries do not always understand. When the receiver
does not understand the speaker's jargon, a barrier exists that hinders effective communication. Effective
communication in the example was not hindered because Kip dressed or looked unusual or because the
customer lacked emotional intelligence. Ongoing interruptions, such as multiple phone calls, may hinder
effective communication; however, the situation does not indicate that communication was interrupted.
</h5></div><h5 id='q45'>45. Janelle and Kirk are members of a work team and disagree about how to proceed with a new project.
What type of conflict are Janelle and Kirk experiencing?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Emotional</option><option value="B">B. Functional</option><option value="C">C. Internal</option><option value="D">D. Secondary</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: Functional</h5><h5>Functional conflict occurs when people disagree about something tangible or concrete. In
many of these types of situations, the people involved agree on a goal but have different approaches to
the situation—such as the best way to proceed with a new project. Emotional conflict involves a
disagreement about different beliefs, values, and experiences. Internal conflict occurs within one's self.
Secondary conflict involves disagreeing thoughts or ideas that relate to the primary or major
disagreement or area of concern.
</h5></div><h5 id='q46'>46. What leadership quality involves demonstrating competence and reliability?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Credibility</option><option value="B">B. Creativity</option><option value="C">C. Integrity</option><option value="D">D. Adaptability</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Credibility</h5><h5>Credibility is how much people believe what you say. People are more likely follow a leader if
they believe what you say. To establish credibility, you must be able to do what needs to be done, which
is demonstrating competence. Credibility also involves doing what you say you will do, which
demonstrates that you are reliable. Creativity is the ability to generate unique ideas, approaches, and
solutions. Integrity is adhering to an established set of personal ethics and sound moral principles.
Adaptability is the ability to adjust to changing conditions.
</h5></div><h5 id='q47'>47. When Trish learned that her company was switching to a new computer-software program, she accepted
the change and worked overtime to become familiar with the new program. Trish exhibited __________
behavior.</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. adaptable</option><option value="B">B. stubborn</option><option value="C">C. passive</option><option value="D">D. irresponsible</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: adaptable</h5><h5>An adaptable person has the ability to adjust to changing conditions. To adjust to changes, a
person must accept the fact that changes happen all the time under many types of circumstances. Once
you accept that changes happen all the time, you learn to feel more comfortable when changes occur. In
the example, Trish was adaptable because she understood that changes occur at work, and she took
steps to adjust to the change by working overtime to become familiar with the new computer program. A
stubborn person might resist change for a variety of reasons such as fear, contentment, or a lack of trust.
Not only did Trish exhibit adaptable behavior, she exhibited assertive, responsible behavior by working to
become familiar with the software.
</h5></div><h5 id='q48'>48. Which of the following is an example of organizational vision:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. A project leader generates team enthusiasm by stating, "We're the most efficient project team in
the firm."</option><option value="B">B. Techno-Electronics hopes to increase its market share by 15 percent in the next year.</option><option value="C">C. Jiffy Parcel Service strives to provide the quickest, most reliable delivery service in the country.</option><option value="D">D. The members of the production department work together to help the business lower its
operating costs.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: Jiffy Parcel Service strives to provide the quickest, most reliable delivery service in the country.</h5><h5>Explanation not available</h5></div><h5 id='q49'>49. Nancy said, “That was a good try, Stanley. Next time you might want to take the opposite approach. You
might find that it works better for you in these types of situations.” This is an example of a coach
providing</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. ineffective criticism.</option><option value="B">B. feedback for improvement.</option><option value="C">C. a standard response.</option><option value="D">D. continuous reinforcement.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: feedback for improvement.</h5><h5>A coach is a person who enables others to reach their true potential by
helping them to overcome the barriers that are keeping them from doing so. Effective coaches help their
coachees set goals and provide them with support and feedback. Providing feedback is important
because coachees need to know what they are doing right, what they are doing wrong, and how they can
improve their performance. By suggesting that Stanley try another approach, Nancy is encouraging him
and providing an alternative course of action to improve his performance. There is not enough
information provided in the example to determine if Nancy's feedback is a standard response or if Stanley
acts on Nancy's advice. If Stanley chooses not to follow through with Nancy's advice, the feedback would
be considered ineffective. A good coach will provide encouragement; however, in this example there is
not enough information provided to determine if Nancy reinforces or supports Stanley on a continuous or
ongoing basis.
</h5></div><h5 id='q50'>50. Which of the following is an example of processing a transaction with a debit card:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. When Naomi purchased office supplies, she presented the cashier with a card that automatically
withdrew funds from her business's checking account.</option><option value="B">B. Tyler provided his card number and expiration date to the online-travel agency so he could obtain
his airline tickets now and receive his bill for the tickets later.</option><option value="C">C. After Ava finished her meal at an upscale restaurant, she presented the server with a card that
provided Ava with a special discount off her bill.</option><option value="D">D. Jayden purchased a new video game from Great Deal Electronics using a store-issued card
given to him by his grandfather.

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

6
</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: When Naomi purchased office supplies, she presented the cashier with a card that automatically
withdrew funds from her business's checking account.</h5><h5>A debit card is a common method of payment for
goods and services. Issued by financial institutions (e.g., banks), a cardholder scans the card into a
machine at the point of sale. The information is transmitted to the appropriate location, and the funds are
electronically transferred from the cardholder's checking or savings account to the seller's account. Credit
is the arrangement in which businesses and individuals can purchase now and pay later. Individuals and
businesses can obtain the goods and services that they need right away, such as airline tickets, and then
pay for the tickets when they receive their statements from their lending institutions. Some businesses
offer membership or customer-loyalty cards, which provide their members or customers with product
discounts. Gift cards are store-issued vouchers that a gift giver can purchase for another person to use to
buy the store's products.
</h5></div><h5 id='q51'>51. What form of currency is issued by the federal government?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Paper money</option><option value="B">B. Brokerage bills</option><option value="C">C. Corporate bonds</option><option value="D">D. Certified notes</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: Paper money</h5><h5>To maintain the
customer's privacy, the business should not post customer information on its web site, nor should it allow
its employees to have complete access to a customer's confidential information.
</h5></div><h5 id='q52'>52. After Mrs. Green provided the cashier with $2.50 in cash and coins, she left the grocery store with a
gallon of milk. In this situation, money is being used as a</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. store of wealth.</option><option value="B">B. medium of exchange.</option><option value="C">C. negotiating tool.</option><option value="D">D. bartering mechanism.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: medium of exchange.</h5><h5>A medium of exchange is something of value that can be used to obtain goods and
services. Money is a common form of exchange. Individuals, businesses, and governments use money to
purchase the products (e.g., milk) they need. When money is saved rather than spent, it is functioning as
a means of accumulating wealth. Negotiating is the process of resolving a disagreement. Bartering
involves trading one good or service for another good or service.
</h5></div><h5 id='q53'>53. Emily has eight percent of her weekly paycheck placed in an employer-sponsored fund that she can
access later in her life, when she is no longer working. Emily is planning for her</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. retirement.</option><option value="B">B. children's college education.</option><option value="C">C. business venture.</option><option value="D">D. estate's distribution.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: retirement.</h5><h5>People save for retirement to have money to cover their expenses when they reach
retirement age and are no longer working. Emily might be able to borrow money from her retirement fund
to help cover educational expenses or to start a business, which depends on the type of fund and
government regulations. Borrowing from a retirement account might involve fees and high interest rates,
so it is often better to set up a fund specifically for education or to borrow money from a financial
institution or angel investor to start a business. A will is a legal document that designates the ways in
which an individual's estate is to be distributed upon his/her death.
</h5></div><h5 id='q54'>54. When Jeremy develops his personal budget, he should categorize the money that he spends on food,
clothing, and entertainment as</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. relational outflows.</option><option value="B">B. fixed costs.</option><option value="C">C. variable expenses.</option><option value="D">D. periodic investments.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: variable expenses.</h5><h5>Governments do not issue
brokerage bills, and certified notes are not forms of currency.
</h5></div><h5 id='q55'>55. On a pay stub, the total amount of money that a worker has earned for the pay period before deductions
is listed as</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. gross pay.</option><option value="B">B. net pay.</option><option value="C">C. tax-exempt income.</option><option value="D">D. overtime income earned.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: gross pay.</h5><h5>Gross pay is the total income earned for the pay period before income taxes and other
deductions are subtracted from the wages. Net pay is the amount of money that the worker receives after
the taxes and other deductions have been subtracted from his/her wages. Tax-exempt income includes
revenues that are not taxed such as tax refunds, veteran's benefits, and welfare benefits. Overtime
income is the amount of money that an hourly worker earns for working more hours than s/he is normally
scheduled to work.
</h5></div><h5 id='q56'>56. The following is written on the back of a check: “For deposit only; Maria Evans; Account #285655.” This
is an example of a(n) __________ endorsement.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. open</option><option value="B">B. general</option><option value="C">C. restrictive</option><option value="D">D. congruent</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: restrictive</h5><h5>Banks require checks to be endorsed before processing. Endorsement involves signing the
back of the check, which allows the funds to be transferred from the check source to the payee. There
are different types of endorsements. A restrictive endorsement limits how the check can be processed. In
the example, the check can only be deposited to the endorser's (Maria) specified account. The check
cannot be cashed or placed into another account. A general endorsement allows the endorser to cash
the check or deposit it into the account of his/her choice—there are no restrictions placed on the funds
transfer. Open and congruent endorsements are fictitious terms.
</h5></div><h5 id='q57'>57. Melissa writes checks to pay for her rent, utilities, and groceries; and she keeps a record of all these
transactions in her check register. Keeping an accurate check register helps Melissa</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. track the amount of money she has spent.</option><option value="B">B. determine when she needs to add funds to her savings account.</option><option value="C">C. understand the checking account's restrictions and fees.</option><option value="D">D. decide when to order new checks.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: track the amount of money she has spent.</h5><h5>A check is a negotiable instrument or bank draft made
payable to a specific party for a specific amount of money. A check serves as a written promise to the
check bearer that money is available in the issuer's bank account. Checks are a common form of
financial exchange. Both individuals and businesses use checks to pay goods and services such as rent,
utilities, food, and supplies. When writing a check, an individual or business keeps a check register that
records information about the transaction. This information includes the date the check is written, to
whom the check is made payable, the amount of the check, and the check number. The register is a
central location to record and track all of the checks written and the amount of money spent. Check
registers do not help the check issuers determine when to add funds to a savings account, understand
the checking account's restrictions and fees, or decide when to order new checks.
</h5></div><h5 id='q58'>58. When Armand is comparing his checkbook balance with his bank statement, he must make sure that he
has subtracted the ____________ from his checkbook.</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. payroll deposits</option><option value="B">B. accumulated interest</option><option value="C">C. transaction fees</option><option value="D">D. check numbers</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: transaction fees</h5><h5>Reconciling bank statements involves comparing the entries in a checkbook with the
entries listed on the bank statement. It is important to make these comparisons to determine
inconsistencies and mistakes. If a check is not recorded correctly, and if the mistake is not caught, the
individual runs the risk of having insufficient funds in his/her checking account, which results in bounced
checks. Some financial institutions charge transaction fees for checking accounts, so it is important to
make sure that those fees are subtracted from the checking account balance. Accumulated interest and
payroll deposits are added to the checking account balance rather than subtracted from it. Check
numbers are not subtracted from the checkbook when reconciling bank statements and checkbook
balances.
</h5></div><h5 id='q59'>59. When preparing a personal income tax form, parents report some of their childcare expenses to receive</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. capital gains.</option><option value="B">B. tax deductions.</option><option value="C">C. dividends.</option><option value="D">D. tax rebates.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: tax deductions.</h5><h5>Tax deductions are expenses that can be subtracted from gross income. For example,
working parents can deduct or subtract a certain amount of their incomes for the childcare expenses they
incur while at work. Other examples of tax deductable expenses include college tuition, home mortgage
interest, and charitable donations. Capital gains are taxes on earnings from the appreciation of an
investment. Dividends are a portion of a company's profits that are paid to shareholders. A rebate is a
part of the price that a customer pays for a good or service, which is usually offered by the product's
manufacturer.
</h5></div><h5 id='q60'>60. Patrick wants to keep a certain amount of his money in a safe place in which he can earn interest on his
savings, and also be able to withdraw his funds without experiencing sizable financial penalties. In what
type of financial institution should Patrick consider placing his money?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. The stock market</option><option value="B">B. A retail bank</option><option value="C">C. A retirement fund</option><option value="D">D. A holding company</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: A retail bank</h5><h5>Retail banks provide a variety of financial services, including savings and checking
accounts for individuals. Opening a savings account with a properly insured bank will provide Patrick with
a safe place to keep his money, and he will earn interest on the money that he places in his savings
account. Patrick will also be able to remove money to pay bills without incurring the financial penalties he
might experience if he borrowed money from his retirement fund. Investing in the stock market involves
risk; however, Patrick may earn dividends on stocks that perform well. A holding company (parent
company) is a business that owns the majority of another company's shares of stock.
</h5></div><h5 id='q61'>61. What is the advantage of using generally accepted accounting principles?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Reduces the need for the full disclosure of financial data</option><option value="B">B. Allows businesspeople to summarize financial data differently</option><option value="C">C. Presents financial information in a standard format</option><option value="D">D. Identifies inconsistencies in business procedures

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

7
</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: Presents financial information in a standard format</h5><h5>Generally accepted accounting principles (GAAP) are
rules that accountants use to prepare and summarize financial reports. Because accountants use the
same standards and rules, accounting information is consistent and clear to all of the people who read,
interpret, and work with financial information. Summarizing data in different ways and identifying
inconsistent business procedures are not advantages of using GAAP. To be in compliance, businesses
must fully disclose important financial data.
</h5></div><h5 id='q62'>62. Accounting computer software programs increase the efficiency of accounting activities because they are
used to</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. monitor market share and summarize accounts payable data.</option><option value="B">B. track payroll activities and develop annual reports.</option><option value="C">C. create invoices and record customer payments.</option><option value="D">D. organize tax records and produce presentations.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: create invoices and record customer payments.</h5><h5>Accounting software programs perform a variety of
accounting activities that streamline accounting processes, which makes them more efficient. Accounting
software allows businesses to create invoices, record customer payments, track payroll activities,
summarize accounts payables, and organize tax records. Businesses use word-processing software to
produce annual reports and presentation software to produce visual aids for presentations. Businesses
do not use accounting software to monitor market share.
</h5></div><h5 id='q63'>63. Which of the following are examples of cash outflows:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Payroll, stocks, and product sales</option><option value="B">B. Supplies, loans, and earned interest</option><option value="C">C. Rent, utilities, and supplies</option><option value="D">D. Utilities, sale of assets, and payroll</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rent, utilities, and supplies</h5><h5>Cash outflows refer to the monies that go out of the business—the
business's expenses. Rent, utilities, supplies, and payroll are examples of business expenses. Loans,
earned interest, sales, and the sale of assets are ways to bring money into the business—these are
examples of cash inflows.
</h5></div><h5 id='q64'>64. Which of the following is an example of an ethical dilemma that human resources managers may
encounter:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Hiring a friend or family member</option><option value="B">B. Promoting a qualified employee</option><option value="C">C. Recruiting job candidates online</option><option value="D">D. Developing a pay scale for employees</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: Hiring a friend or family member</h5><h5>Nepotism is the practice in which an influential person hires friends or
family members to fill open job positions. This often creates ethical dilemmas or conflicts of interest
because the positions may be filled by unqualified individuals. This practice also prevents otherwise
qualified candidates from obtaining a job. Promoting a qualified employee, recruiting job candidates
online, and developing a pay scale for employees are ethical actions.
</h5></div><h5 id='q65'>65. Customers are more likely to spend a lot of time evaluating several options before buying a product when</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. the need is immediate.</option><option value="B">B. the product is perishable.</option><option value="C">C. the product is expensive.</option><option value="D">D. brand insistence is a factor.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: the product is expensive.</h5><h5>Because money is a limited resource, customers tend to spend more time
comparing and evaluating the features and benefits of expensive items before making a decision to buy.
Individuals tend to spend more time evaluating options when buying homes, cars, and computers.
Businesses tend to spend more time evaluating items such as operating equipment and contract services
(e.g., ad agencies and tech support) before making a decision. Customers are less likely to spend a lot of
time evaluating perishable items (e.g., food) or things that they need immediately (emergency health
care). If a customer has a high level of loyalty to a specific brand, then the customer will spend less time
evaluating competitors' products before making a decision to buy.
</h5></div><h5 id='q66'>66. The effective use of touch points can help a business to</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. limit its exposure to economic risks.</option><option value="B">B. minimize market share.</option><option value="C">C. improve data-management processes.</option><option value="D">D. strengthen its brand value.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: strengthen its brand value.</h5><h5>Touch points are all of the opportunities that a business has to connect with
its customers. A business's products, employees, facility, web site, and promotional materials are
examples of touch points. The effective, consistent use of touch points can increase the business's brand
value, which may contribute to other positive results, such as increased market share and increased
customer loyalty. The use of touch points does not help a business improve its data-management
processes, but effective data-management processes can help the business use its touch points
effectively. Because many external economic factors (e.g., interest rates, regulations, business cycles)
affect a business's risk levels, a business can implement strategies to manage the effects of various
economic risks; however, the business cannot limit its exposure to those risks.
</h5></div><h5 id='q67'>67. Which of the following sources is most likely to contain timely information:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. A journal article about a medical breakthrough that was published a decade ago</option><option value="B">B. A technical-trends report that was written on February 5, 2010</option><option value="C">C. A stock table that appeared in a national newspaper on January 14, 2010</option><option value="D">D. A second edition history textbook that contains a 2000 copyright date</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: A technical-trends report that was written on February 5, 2010</h5><h5>An important factor to consider when
evaluating information is its timelines. If an article or report was published a long time ago, the
information may not be relevant or accurate anymore, particularly if the topic involves technology.
Because the technical-trends report was written recently, the information is likely to be up-to-date. Due to
technology, the world is constantly experiencing medical breakthroughs and changes; therefore, a journal
article that was published a decade (10 years) ago is less likely to contain up-to-date information. Stock
values change rapidly, so a stock table that appeared in a newspaper on January 14, 2010 would not
contain the most current information about stock values. Because the world's history has dramatically
changed since 2000, the history textbook is outdated.
</h5></div><h5 id='q68'>68. Natalie is a research associate for a marketing-research firm who spends a lot of her time on the Internet
to obtain various types of business information. Natalie can save time and easily return to web sites that
she frequently visits by using the __________ tool on her Internet browser.</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. classifying</option><option value="B">B. highlighting</option><option value="C">C. sorting</option><option value="D">D. bookmarking</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: bookmarking</h5><h5>The bookmarking computer tool allows users to save URL addresses on their computers.
The bookmarking tool allows users to quickly return to favorite or frequently visited web sites without
reentering a specific URL address every time they want to access the web sites. This is a beneficial tool
for businesspeople who need to do ongoing research, or for employees who need to access vendor and
customer web sites several times a day. The highlighting function allows computer users to highlight or
mark text in a document or spreadsheet. Sorting allows users the ability to organize, classify, or
categorize data in a specific format, such as an alphabetical or numerical sequence.
</h5></div><h5 id='q69'>69. Which of the following is the primary computer-system tool used to input data:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Software</option><option value="B">B. Printer</option><option value="C">C. Keyboard</option><option value="D">D. Hardware</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Keyboard</h5><h5>Computer keyboards are used to type or place text, numbers, and graphics into the computer.
A keyboard is an essential item for inputting data into a computer system. Printers allow the user to print
(or copy or scan) documents and graphics from the computer. The hardware consists of the central
processing unit, hard drive, and modem. Software programs are installed in the computer and instruct the
computer to perform certain operations.
</h5></div><h5 id='q70'>70. To use various software programs, a computer must have a(n)</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Internet connection.</option><option value="B">B. operating system.</option><option value="C">C. search-engine mechanism.</option><option value="D">D. task toolbar.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: operating system.</h5><h5>In a
market economy, individuals and businesses in the marketplace determine what, how, and for whom
goods and services will be produced. When a country's economic system is moving from one type of
economic system to another type of economic system, it is in a transitional state.
</h5></div><h5 id='q71'>71. What is one benefit that the Internet provides consumers?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Provides a way to promote products</option><option value="B">B. Makes it easier to comparison shop</option><option value="C">C. Lessens the need for intermediaries</option><option value="D">D. Reduces information overload</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Makes it easier to comparison shop</h5><h5>The continuing growth of the Internet (e-commerce) allows
consumers to log onto their computers and visit several web sites to compare products and prices. This
makes comparison shopping easier because consumers do not need to telephone or drive to multiple
businesses to obtain the desired product information. The Internet benefits businesses because it allows
them to promote their products on their web sites. Another way that the Internet affects businesses is that
it often reduces the need to use intermediaries to get the products to the end users. Because there is so
much information available through the Internet, people may suffer from information overload, which is a
disadvantage of the Internet.
</h5></div><h5 id='q72'>72. If Joe wants to respond to an e-mail message that he received from Natalie, he should first click on the
___________ key.</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. send</option><option value="B">B. forward</option><option value="C">C. reply</option><option value="D">D. import</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: reply</h5><h5>The reply key allows the e-mail recipient to write a response to the sender's message. The
forward key allows the e-mail user to send or forward a message that s/he received to another user. The
e-mail user clicks on the send key when s/he wants to transmit the message to the message receiver.
The import key allows a user to bring documents, graphics, or programs into a computer program from
another computer program.
</h5></div><h5 id='q73'>73. Which of the following is an example of a “stop” word that a search engine is most likely to ignore when
retrieving query results:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. The</option><option value="B">B. Cop</option><option value="C">C. Sew</option><option value="D">D. Hat

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

8
</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: The</h5><h5>Words such as “a,” “for,” and “the” are stop words, which are commonly used words that do not
always add meaning to the primary search terms. For example, if the words, “the Pittsburgh Steelers”
were entered in the query field, the word “the” would most likely be ignored by the search engine, which
would focus on the words, “Pittsburgh Steelers.” However, there are exceptions to every rule. For
example, the query “WHO” is likely to bring up results that contain information about the World Health
Organization. If “the” is placed before “WHO” in the query, results are most likely to bring up information
about the musical group, The Who. Cop, sew, and hat are less likely to be ignored when entered into a
search engine query.
</h5></div><h5 id='q74'>74. While typing a document using word-processing software, Janice decided that she wanted to move a
paragraph from the first page to the second page of her business report. What actions should Janice use
to efficiently move the text?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Cut and paste</option><option value="B">B. Copy and paste</option><option value="C">C. Delete the text and retype it in the new location</option><option value="D">D. Delete the text and copy it into a text box in the new location</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: Cut and paste</h5><h5>Businesspeople use word-processing software programs to create text documents such
as business letters, memos, reports, etc. Word-processing software programs have many features and
functions that allow the computer user to manipulate text. For example, the cut function allows the user to
select a block of text and remove it from a certain location. By moving the curser to another location and
selecting the paste function, the user can place the previously cut text into a different part of the
document. This process eliminates the need to delete text and retype it in a different section of the
document, which can be time consuming. The copy function copies the selected text but does not
remove it from its existing location. If the text is not copied before it is deleted, then it would not be
possible to move the text to a new location in the document.
</h5></div><h5 id='q75'>75. When using presentation software, computer users can add visual and sound effects between slides that
allow for an interesting</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. lead.</option><option value="B">B. feed.</option><option value="C">C. jump.</option><option value="D">D. transition.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: transition.</h5><h5>Presentation-software applications provide computer users with the option to add different
sound and visual effects when moving from slide to slide. This option is called a transition. The transition
makes the presentation more interesting and visually appealing. The ability to add visual and sound
effects between presentation-software slides is not referred to as a feed, jump, or lead.
</h5></div><h5 id='q76'>76. The primary purpose of collaborative software applications in the business environment is to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. maintain authority.</option><option value="B">B. interpret data.</option><option value="C">C. archive old documents.</option><option value="D">D. share information.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: share information.</h5><h5>Natalie can save time and easily return to web sites that
she frequently visits by using the __________ tool on her Internet browser.
A. classifying
C. sorting
B. highlighting
D. bookmarking
69. Which of the following is the primary computer-system tool used to input data:
A. Software
C. Keyboard
B. Printer
D. Hardware
70. To use various software programs, a computer must have a(n)
A. Internet connection.
C. search-engine mechanism.
B. operating system.
D. task toolbar.
71. What is one benefit that the Internet provides consumers?
A. Provides a way to promote products
C. Lessens the need for intermediaries
B. Makes it easier to comparison shop
D. Reduces information overload
72. If Joe wants to respond to an e-mail message that he received from Natalie, he should first click on the
___________ key.
A. send
C. reply
B. forward
D. import
73. Which of the following is an example of a “stop” word that a search engine is most likely to ignore when
retrieving query results:
A. The
C. Sew
B. Cop
D. Hat

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

8

74. While typing a document using word-processing software, Janice decided that she wanted to move a
paragraph from the first page to the second page of her business report. What actions should Janice use
to efficiently move the text?
A. Cut and paste
B. Copy and paste
C. Delete the text and retype it in the new location
D. Delete the text and copy it into a text box in the new location
75. When using presentation software, computer users can add visual and sound effects between slides that
allow for an interesting
A. lead.
C. jump.
B. feed.
D. transition.
76. The primary purpose of collaborative software applications in the business environment is to
A. maintain authority.
C. archive old documents.
B. interpret data.
D. share information.
77. When developing a web page, it is best to
A. leave space for banner ads.
B. incorporate a variety of fonts.

C. use short blocks of text.
D. avoid use of graphics.

78. Warehousing and shipping methods are operations considerations related to
A. scheduling.
C. maintenance needs.
B. logistics.
D. expense control.
79. Production shortcuts that lower the durability of goods are unethical practices relating to
A. insurance premiums.
C. output rates.
B. product quality.
D. inventory accuracy.
80. Why is it important for businesses to follow local health ordinances?
A. To reduce the risk of widespread illness
C. To protect the natural environment
B. To prevent accidents in the workplace
D. To lower the need for medical care facilities
81. What can managers do to ensure that their employees are following the business's safety procedures in
the workplace?
A. Install security equipment
B. Monitor employees' computer usage
C. Conduct safety inspections
D. Include safety policies in the employee handbook
82. While Ken was heating up his lunch in the company's kitchen microwave oven, his food caught on fire.
What is the most appropriate action for Ken to take?
A. Use the kitchen fire extinguisher to put out the fire
B. Leave the kitchen to report the fire to his supervisor
C. Call 411 and request assistance from the fire department
D. Open the window for evacuation purposes
83. What is the advantage to a business that installs external surveillance cameras in prominent locations
around its property?
A. Reduces the risk of extortion
C. Eliminates the need to install alarms
B. Discourages attempted burglaries
D. Prevents armed robberies

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

9

84. In which of the following situations is a business most likely to experience a security breach:
A. The technology coordinator regularly updates the antivirus software on all of the firm's
computers.
B. A small business owner installs electronic locks and security windows in the company's
warehouse.
C. The last employee to leave a business facility after business hours fails to set the security alarm.
D. A business employee uses a paper shredder to destroy business records that it no longer needs.
85. What type of computer program helps protect digital business information from the negative effects of
malware?
A. Cookies
C. Firewalls
B. Spyware
D. Shareware
86. What project-management activity involves determining when project tasks should be performed?
A. Processing
C. Evaluating
B. Monitoring
D. Scheduling
87. Office supplies, computers, steel, and signage are examples of __________ resources that might be
needed for projects.
A. donated
C. tangible
B. support
D. perishable
88. What is likely to happen if a business fails to monitor its inventory of office supplies?
A. Restocking fees decrease.
C. Employee productivity increases.
B. Restocking fees increase.
D. Employee productivity decreases.
89. Which of the following is an important question that a business should ask when selecting a vendor:
A. What is our business's target market?
B. What computer program does the vendor use for its project management processes?
C. Does the vendor have the resources to consistently meet our business's needs?
D. What are our business's strengths and weaknesses?
90. Arm and Hammer baking soda, which was originally developed as a cooking ingredient, is now being
sold as an effective refrigerator deodorizer. This is an example of ____________ innovation.
A. distributed
C. positioning
B. process
D. associative
91. Before you analyze the available information to solve a problem, it is important to
A. brainstorm possible solutions.
B. identify and check your assumptions.
C. determine the best solution from several alternatives.
D. ask for input from your peers.
92. Even when times are tough for Caitlin's business venture, she tends to remain positive—she looks at the
glass as half full rather than half empty. What characteristic of entrepreneurship is Caitlin exhibiting?
A. Innovation
C. Optimism
B. Organization
D. Determination
93. Colin is an experienced computer programmer who has contacted an organization to help him find a new
job in another city. After the organization helps Colin obtain a job, Colin's new employer will pay a fee to
the organization. What type of organization is helping Colin find a job?
A. Internet referral service
C. Government job placement office
B. Academic counseling center
D. Private employment agency

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10

94. Which of the following statements is true about completing job applications:
A. A résumé is not necessary if you are completing a job application.
B. Use a pencil to fill out the application in case you make a mistake.
C. Leave blank spaces for information that you do not have readily available.
D. Write clearly using a black or blue pen to present a professional appearance.
95. To present a positive impression during a job interview, the applicant should
A. provide short answers.
C. wear business-casual clothing.
B. demonstrate selective hearing.
D. exhibit enthusiasm.
96. A primary purpose of sending a follow-up letter to the interviewer after a job interview is to
A. ask for a second interview, if the first interview did not go well.
B. provide detailed information about your integrity and skills.
C. reinforce your qualifications and interest in the position.
D. request more information about the job's salary and benefits.
97. What type of words should Rebecca use to describe her skills and accomplishments when writing her
résumé?
A. Passive
C. Vague
B. Action
D. Jargon
98. Sally is interested in working with animals. In her free time, Sally goes to the local animal shelter to help
feed, walk, and care for the stray dogs and cats. Sally is gaining experience in her field of interest by
A. doing volunteer work.
C. job shadowing a veterinarian.
B. participating in an internship.
D. organizing a charitable event.
99. Seminars and workshops that are sponsored by trade associations are ways to obtain job training for
people who
A. work in a specific industry.
C. want to obtain a graduate degree.
B. are getting ready to retire.
D. need to improve their management skills.
100. When managers have the ability to understand how all of the functions of the company are interrelated,
they possess
A. technical competence.
C. conceptual skills.
B. interpersonal skills.
D. innovative ideas.

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM – KEY

11

1. D
Fraud. A tort is a private wrongdoing against another person. Businesses can be held responsible in a
variety of torts. For example, suppose a business's employee intentionally provides misleading product
information to a customer in order to make a sale. Then, the customer purchases and is injured by the
product based on the employee's misleading information. The customer may file a civil lawsuit against
the business, and in some situations, the business's employee for fraudulent behavior. Assault and
intrusion are criminal acts that are addressed in the criminal court system rather than the civil court
system. Defamation is a tort that involves harm to an individual's or business's reputation.
</h5></div><h5 id='q77'>77. When developing a web page, it is best to</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. leave space for banner ads.</option><option value="B">B. incorporate a variety of fonts.
</option><option value="C">C. use short blocks of text.</option><option value="D">D. avoid use of graphics.
</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: use short blocks of text.</h5><h5>Since web surfers want information quickly, they tend to scan over the web page
rather than reading the text in detail. Therefore, short blocks of text are often most effective in grabbing
the reader's attention. In some situations, such as presenting a product's features, the text may be
presented in a bullet-point format. Using too many fonts may make the text difficult to read. Applicable
graphics should be included on the web page to add interest. Not all web pages include advertising, so
leaving space for banner ads is not always necessary.
</h5></div><h5 id='q78'>78. Warehousing and shipping methods are operations considerations related to</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. scheduling.</option><option value="B">B. logistics.</option><option value="C">C. maintenance needs.</option><option value="D">D. expense control.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: logistics.</h5><h5>Operations are the day-to-day activities for continued business functioning. Logistics refers to
the function of operations that manages the flow of goods and services from production to consumption.
Logistics includes all the people, information, and processes involved in storing (e.g., type of warehouse)
and transporting goods (e.g., shipping method). Scheduling is the production activity that establishes the
timetable to be followed in production. Maintenance needs refer to the routine maintenance and repair of
business facilities and equipment. The operations function controls many activities within the business,
which means that this function encounters a lot of expenses incurred by the business. Therefore,
expense control is an important operations activity because it focuses on efficiency and keeping the
business's costs low for its day-to-day activities.
</h5></div><h5 id='q79'>79. Production shortcuts that lower the durability of goods are unethical practices relating to</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. insurance premiums.</option><option value="B">B. product quality.</option><option value="C">C. output rates.</option><option value="D">D. inventory accuracy.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: product quality.</h5><h5>Product quality is the degree of excellence of a good or service—how good it is. Quality
is an ethical issue that might affect the operations function because businesses decide the quality of the
products they provide. If the business cuts corners in the production process, such as using lower grade
inputs to save money or boost profits, the product quality can be affected. The use of lower grade inputs
may produce low quality outputs that may not perform well or be durable. This practice is unethical if the
business doesn't communicate to its customers that the products contain lower grade materials and may
not be durable. Insurance premiums are payments for insurance policies. Output rates refer to the
number of goods or services produced in a certain period of time. Businesses compare the inventory
records to the physical inventory counts to verify inventory accuracy.
</h5></div><h5 id='q80'>80. Why is it important for businesses to follow local health ordinances?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. To reduce the risk of widespread illness</option><option value="B">B. To prevent accidents in the workplace</option><option value="C">C. To protect the natural environment</option><option value="D">D. To lower the need for medical care facilities</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: To reduce the risk of widespread illness</h5><h5>The purpose of health regulations is to protect the population
from widespread illnesses. Depending on the industry or business type, most localities require
businesses to follow certain rules to reduce the risk of illness. For example, various levels of government
are likely to require that restaurants handle, store, and cook foods in certain ways to prevent illnesses
such as e coli. Safety regulations intend to reduce the risk of accidents. The purpose of environmental
regulations is to protect the natural environment from such issues as air pollution and waste
management. Following health ordinances does not lower a community's need for medical care facilities.
</h5></div><h5 id='q81'>81. What can managers do to ensure that their employees are following the business's safety procedures in
the workplace?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Install security equipment</option><option value="B">B. Monitor employees' computer usage</option><option value="C">C. Conduct safety inspections</option><option value="D">D. Include safety policies in the employee handbook</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: Conduct safety inspections</h5><h5>By periodically inspecting the work environment, managers can determine if
employees are following the business's safety procedures. To determine if employees are following the
safety procedures, managers may monitor employees who are operating production equipment, or they
may check the facility to make sure that aisles and exits are not blocked by boxes. Monitoring computer
usage will not ensure that employees are following the business's safety procedures. Simply installing
security equipment, such as surveillance cameras, will not ensure that employees are following safety
rules—the business must review the surveillance video to determine if employees are violating safety
procedures. Including safety policies in the employee handbook is a way to inform the employees about
the business's safety policies and procedures; however, this action does not ensure that employees
follow the procedures.
</h5></div><h5 id='q82'>82. While Ken was heating up his lunch in the company's kitchen microwave oven, his food caught on fire.
What is the most appropriate action for Ken to take?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Use the kitchen fire extinguisher to put out the fire</option><option value="B">B. Leave the kitchen to report the fire to his supervisor</option><option value="C">C. Call 411 and request assistance from the fire department</option><option value="D">D. Open the window for evacuation purposes</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use the kitchen fire extinguisher to put out the fire</h5><h5>For safety purposes, most localities require that
businesses have fire extinguishers placed throughout their facilities. Business facilities that have kitchens
should keep fire extinguishers in a prominent space of the kitchen so that they are easily available to put
out small fires that are contained in pans, microwaves, etc. In the situation presented, the fire is small
and contained to a limited location, so Ken should be able to use the fire extinguisher to put it out. If Ken
leaves to tell his supervisor about the fire, the fire may spread. Ken should leave the kitchen and follow
the company's fire evacuation policies if the fire is spreading. The company's policies may involve leaving
the kitchen and to advise others to evacuate, opening a window, or calling 911 (rather than 411) to
request assistance from the fire department after everyone has evacuated the building.
</h5></div><h5 id='q83'>83. What is the advantage to a business that installs external surveillance cameras in prominent locations
around its property?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Reduces the risk of extortion</option><option value="B">B. Discourages attempted burglaries</option><option value="C">C. Eliminates the need to install alarms</option><option value="D">D. Prevents armed robberies

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

9
</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: Discourages attempted burglaries</h5><h5>When would-be burglars see surveillance cameras in several
locations around a business, they are less likely to attempt to break in because they will be video-taped
or photographed by the cameras. When the burglars' actions are taped, law enforcement agencies are
more likely to identify and arrest them. Although surveillance cameras don't prevent all burglaries or
robberies, they can often deter these activities. Most businesses use a combination of security measures
to secure their facilities, including door and window locks and different types of alarm systems.
Businesses need and use different types of alarm systems, such as fire alarms or smoke detectors,
which are often required by law. Therefore, the use of surveillance cameras does not eliminate the need
for alarm systems. Extortion is blackmail and would not necessarily be impacted by surveillance
cameras.
</h5></div><h5 id='q84'>84. In which of the following situations is a business most likely to experience a security breach:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. The technology coordinator regularly updates the antivirus software on all of the firm's
computers.</option><option value="B">B. A small business owner installs electronic locks and security windows in the company's
warehouse.</option><option value="C">C. The last employee to leave a business facility after business hours fails to set the security alarm.</option><option value="D">D. A business employee uses a paper shredder to destroy business records that it no longer needs.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: The last employee to leave a business facility after business hours fails to set the security alarm.</h5><h5>To
protect their personal well-being, the well-being of coworkers and customers, and the business's
property, employees need to follow their employers' security procedures. If the employee is the last
person to leave the business facility, s/he needs to ensure that the doors are locked and the security
alarm is set. If the security alarm is not set, it increases the risk of theft because it makes it easier for a
thief to break into the building to steal money, inventory, or equipment. Installing electronic locks and
security windows, updating antivirus software, and shredding unneeded documents are activities that
reduce the risk of security breaches.
</h5></div><h5 id='q85'>85. What type of computer program helps protect digital business information from the negative effects of
malware?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Cookies</option><option value="B">B. Spyware</option><option value="C">C. Firewalls</option><option value="D">D. Shareware</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Firewalls</h5><h5>Malware (malicious software) is an illegal computer program that is used to disrupt computer
processes, destroy computer programs, and access confidential business information. Firewalls are
types of computer programs that combat these types of dishonest activities and protect a business's
digital information. Spyware is a computer program that tracks and captures a computer user's Internet
usage habits, e-mail messages, etc. Cookies are text files that are put on a web-site visitor's hard disk
and then later retrieved during subsequent visits to the site to track Internet behavior. Shareware is a
type of computer program in which computer users can sign up for the software on a trial basis. After the
trial expires, the computer user can purchase and register the program, if desired.
</h5></div><h5 id='q86'>86. What project-management activity involves determining when project tasks should be performed?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Processing</option><option value="B">B. Monitoring</option><option value="C">C. Evaluating</option><option value="D">D. Scheduling</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: Scheduling</h5><h5>Project management is the process of planning, scheduling, and monitoring the progress of
a project to achieve a specific goal. Scheduling is the process of developing plans that list the order of
tasks that need to be performed and their completion dates. Schedules are tools that help project
managers and team members organize their tasks, manage their time, and meet stated deadlines.
Monitoring is periodically checking the progress of an activity or task. Evaluating is reviewing or
examining the value or importance of something. Processing is carrying out a task.
</h5></div><h5 id='q87'>87. Office supplies, computers, steel, and signage are examples of __________ resources that might be
needed for projects.</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. donated</option><option value="B">B. support</option><option value="C">C. tangible</option><option value="D">D. perishable</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: tangible</h5><h5>Many types of resources-human, materials, time, money—are needed to complete projects.
Tangible resources are those that can be touched, smelled, tasted, seen, or heard. Office supplies,
computers, steel, and signage are tangible items because they can be seen and touched. Perishable
goods (e.g., various foods) are items that are capable of spoiling, decaying and dying. Donated
resources are contributed or given by others. There is not enough information to determine if goods in the
example are donated items. Often, projects require support services. These are technical or complicated
activities the project members cannot do themselves.
</h5></div><h5 id='q88'>88. What is likely to happen if a business fails to monitor its inventory of office supplies?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Restocking fees decrease.</option><option value="B">B. Restocking fees increase.</option><option value="C">C. Employee productivity increases.</option><option value="D">D. Employee productivity decreases.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: Employee productivity decreases.</h5><h5>Businesses need office supplies to operate efficiently. If a business
runs out of necessary supplies, the employees' productivity decreases because they do not have the
tools available to do their jobs efficiently. For example, if a business runs out of copy paper and forms, its
employees cannot print letters, reports, or invoices, or conduct other activities that are necessary to keep
the business operating smoothly. Many businesses develop inventory control procedures to monitor their
supplies to reduce the risk of running out of supplies. Businesses (e.g., manufacturers) charge their
customers restocking fees for returning ordered goods that the customers no longer want or need.
Restocking fees are part of the business's return policies rather than its operating polices.
</h5></div><h5 id='q89'>89. Which of the following is an important question that a business should ask when selecting a vendor:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. What is our business's target market?</option><option value="B">B. What computer program does the vendor use for its project management processes?</option><option value="C">C. Does the vendor have the resources to consistently meet our business's needs?</option><option value="D">D. What are our business's strengths and weaknesses?</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: Does the vendor have the resources to consistently meet our business's needs?</h5><h5>A business that wants to
build a long-term relationship with a vendor must consider many factors. Most importantly, the business
must determine if the vendor has the resources to meet the business's needs. Some resources include
the product availability, technical-system compatibility, customer-service support, etc. The vendor's
project management computer program is not usually a primary consideration during the vendorselection process. The business's own target market is a marketing consideration for the business rather
than for vendor selection. The business's strengths and weaknesses are identified in its SWOT analysis,
and do not directly relate to the vendor-selection process.
</h5></div><h5 id='q90'>90. Arm and Hammer baking soda, which was originally developed as a cooking ingredient, is now being
sold as an effective refrigerator deodorizer. This is an example of ____________ innovation.</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. distributed</option><option value="B">B. process</option><option value="C">C. positioning</option><option value="D">D. associative</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: positioning</h5><h5>Position innovation occurs when an existing product is repositioned. In the situation provided,
a new use for the baking soda prompted Arm and Hammer to reposition the product as a deodorizer. The
basic product did not change, but the company redesigned the package so that a filtered panel opened
on the side of the box for optimal odor absorption. Process innovation involves changing the way that a
product is produced or delivered. Distributed innovation refers to a decentralized model used for problem
solving. Associative innovation is a fictitious term.
</h5></div><h5 id='q91'>91. Before you analyze the available information to solve a problem, it is important to</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. brainstorm possible solutions.</option><option value="B">B. identify and check your assumptions.</option><option value="C">C. determine the best solution from several alternatives.</option><option value="D">D. ask for input from your peers.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: identify and check your assumptions.</h5><h5>An assumption is a thought or idea that you presume (take for
granted) is true. In some situations, a person makes incorrect assumptions. For example, a supervisor
may assume that an employee has completed a task by deadline. The supervisor makes this assumption
because the employee has completed tasks by the given deadlines in the past. The supervisor's
assumption is based on his/her experience. However, the employee experienced a computer problem,
which prevented her/him from completing the task by deadline. So, in this particular situation, the
supervisor's assumption was incorrect. Therefore, when you are solving problems, it is important to make
sure that you have all of the correct information available and that you look at situations and issues
objectively. After collecting all of the necessary information and checking assumptions, you can
brainstorm solutions and determine the best solution to implement. The nature of the problem depends
on whether or not you need to ask for input from your peers.
</h5></div><h5 id='q92'>92. Even when times are tough for Caitlin's business venture, she tends to remain positive—she looks at the
glass as half full rather than half empty. What characteristic of entrepreneurship is Caitlin exhibiting?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Innovation</option><option value="B">B. Organization</option><option value="C">C. Optimism</option><option value="D">D. Determination</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Optimism</h5><h5>Successful entrepreneurs possess an optimistic attitude. An optimistic person has a positive
outlook on life, and looks for the opportunities to grow, even when s/he experiences challenges and
setbacks. Organizational skills involve developing and executing processes or activities in a systematic
way. Innovation is the process or ability to develop a new product, process, position, or paradigm.
Determination is the drive or willpower to achieve a goal.
</h5></div><h5 id='q93'>93. Colin is an experienced computer programmer who has contacted an organization to help him find a new
job in another city. After the organization helps Colin obtain a job, Colin's new employer will pay a fee to
the organization. What type of organization is helping Colin find a job?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Internet referral service</option><option value="B">B. Academic counseling center</option><option value="C">C. Government job placement office</option><option value="D">D. Private employment agency

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10
</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: Private employment agency

2010 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10
</h5><h5>Explanation not available</h5></div><h5 id='q94'>94. Which of the following statements is true about completing job applications:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. A résumé is not necessary if you are completing a job application.</option><option value="B">B. Use a pencil to fill out the application in case you make a mistake.</option><option value="C">C. Leave blank spaces for information that you do not have readily available.</option><option value="D">D. Write clearly using a black or blue pen to present a professional appearance.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: Write clearly using a black or blue pen to present a professional appearance.</h5><h5>The way in which an
applicant fills out a job application can affect the applicant's chances of getting an interview. A job
application that contains sloppy handwriting, misspelled words, and incomplete information presents an
unprofessional impression. It indicates to the business that the applicant completes tasks haphazardly,
which is not a favorable trait for employees to have. To present a professional appearance, the applicant
should complete every section of the application and write clearly using a blue or black pen. Some
employers may feel that using a pencil to complete an application is unprofessional and difficult to read.
Although it depends on the position, many employers require that applicants provide résumés when they
complete job applications.
</h5></div><h5 id='q95'>95. To present a positive impression during a job interview, the applicant should</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. provide short answers.</option><option value="B">B. demonstrate selective hearing.</option><option value="C">C. wear business-casual clothing.</option><option value="D">D. exhibit enthusiasm.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: exhibit enthusiasm.</h5><h5>To present a confident and professional attitude during a job interview, an applicant
should exhibit enthusiasm, which involves showing interest in the job and in the company. To exhibit
enthusiasm, the applicant should smile, maintain eye contact with the interviewer, listen attentively,
answer questions in as much detail as necessary, and ask appropriate questions. To present a positive
impression, the applicant must also dress appropriately for the interview, which often involves wearing
formal business attire, such as a business suit.
</h5></div><h5 id='q96'>96. A primary purpose of sending a follow-up letter to the interviewer after a job interview is to</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. ask for a second interview, if the first interview did not go well.</option><option value="B">B. provide detailed information about your integrity and skills.</option><option value="C">C. reinforce your qualifications and interest in the position.</option><option value="D">D. request more information about the job's salary and benefits.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: reinforce your qualifications and interest in the position.</h5><h5>It is a courtesy to send follow-up letters to
interviewers to thank them for their time. The applicant can use the letter to reinforce his/her
qualifications and express his/her interest in the position. This letter may also help the interviewer to
remember the applicant. The follow-up letter should be brief—the detailed information should have been
provided in the application and résumé and during the interview. If the first interview did not go well,
interviewers do not usually ask applicants for a second interview. It would be inappropriate to request
more information about the job's salary and benefits in a follow-up letter. This type of information is
typically provided when the employer extends a job offer to the applicant.
</h5></div><h5 id='q97'>97. What type of words should Rebecca use to describe her skills and accomplishments when writing her
résumé?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Passive</option><option value="B">B. Action</option><option value="C">C. Vague</option><option value="D">D. Jargon</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: Action</h5><h5>Using action words in a résumé subtly indicates that the job applicant is assertive, on the move,
and actively working to accomplish goals. Action words help the reader visualize the applicant performing
a task or activity. Phrases such as, “managed a long-term marketing project,” or “coordinated a local
charity event,” indicate that the applicant takes action to accomplish a task or goal. Passive or vague
words are not likely to impress or entice the reader to read further. Jargon refers to a specialized
language known only to a certain group of people. Jargon should be used sparingly and only if it is
necessary to describe something that is related to the job.
</h5></div><h5 id='q98'>98. Sally is interested in working with animals. In her free time, Sally goes to the local animal shelter to help
feed, walk, and care for the stray dogs and cats. Sally is gaining experience in her field of interest by</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. doing volunteer work.</option><option value="B">B. participating in an internship.</option><option value="C">C. job shadowing a veterinarian.</option><option value="D">D. organizing a charitable event.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: doing volunteer work.</h5><h5>One way to obtain work experience is by volunteering. Volunteer work involves
donating time without pay to complete tasks or projects, such as feeding, walking, and caring for stray
dogs and cats at an animal shelter. Internships involve training in which schools and businesses
cooperate to provide on-the-job practice for learners. Job shadowing involves observing an individual
perform his/her daily job activities in the workplace. There is not enough information provided to
determine if organizing a charitable event for the animal shelter is an aspect of Sally's volunteer work, if
Sally observes the veterinarians who work at the animal shelter, or if Sally's school arranged an
internship.
</h5></div><h5 id='q99'>99. Seminars and workshops that are sponsored by trade associations are ways to obtain job training for
people who</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. work in a specific industry.</option><option value="B">B. are getting ready to retire.</option><option value="C">C. want to obtain a graduate degree.</option><option value="D">D. need to improve their management skills.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: work in a specific industry.</h5><h5>Trade associations often provide continuing educational options for workers
who want or need to expand their skills and knowledge in a specific industry, such as plumbing or
building. As technology evolves, workers often need to attend classes, seminars, and workshops to keep
up with the changes in their industry. Some trade associations offer management training classes, but
not all workers need or want these types of skills. Workers who want to obtain a graduate degree need to
attend a college or university that offers graduate-level programs. People who are near retirement are
unlikely to attend continuing education classes or professional development seminars and workshops.
</h5></div><h5 id='q100'>100. Kemper Corporation continuously updates the firewalls on its web site to protect its customers' personal
information from theft. Kemper's action helps build trust with its customers in relation to</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. physical safety.</option><option value="B">B. online security.</option><option value="C">C. product tampering.</option><option value="D">D. calculation errors.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: online security.</h5><h5>To build and maintain long-term relationships with customers, a business must earn its
customers' trust. To earn its customers' trust, a business must take steps to ensure that any personal
information (e.g., credit-card numbers) transmitted through its web site is secure from unauthorized
individuals (e.g., hackers). One way to ensure online security is to maintain and continuously update its
firewall software. The process of updating firewall software is not related to a person's physical safety,
product tampering, or calculation errors.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit" name="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_1_Whole_Homework.js"></script>
<?php
$score = $_GET["e_score"];
  ?>
  <h4><?php echo $score; ?></h4>
  <?php
if ($score !== undefined){
  $query = "INSERT INTO exams(userId, score_1, cluster) VALUES('2', '$score', 'Principles')";
  $res = mysql_query($query);
  if ($res){
    ?>
    <h4>inserted</h4>
    <?php
  }else{
    ?>
    <h4>error</h4>
    <?php
    };
}else{
  ?>
  <h4><?php echo "undefined"; ?></h4>
  <?php
};
?></html>
