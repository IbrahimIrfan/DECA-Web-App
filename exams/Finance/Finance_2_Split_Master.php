<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=1></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance_Exam_7</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Before a business and a customer can enter into a valid contract, the offer to do something in return for
payment must be</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. accepted.</option><option value="B">B. in writing.</option><option value="C">C. implied.</option><option value="D">D. expressed.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is A: accepted.</h5><h5>Contracts are agreements between two or more parties stating that one party is to do
something in return for something provided by another party. Several elements must be present for a
contract to be valid. First, one party must make an offer to do something, such as sell a product for a
certain price and deliver it on a certain date. Then, the other party must accept that offer. A valid contract
cannot be formed unless the offer is accepted. The offer may be made verbally or in writing. Express and
implied are types of contracts that may be formed once the offer is accepted.
</h5></div><h5 id='q2'>2. Which of the following often is a characteristic of a governmental agency's relationship with businesses:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Promotional</option><option value="B">B. Regulatory</option><option value="C">C. Legislative</option><option value="D">D. Managerial</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: Regulatory</h5><h5>Governmental agencies often have regulations that businesses are required to follow. These
regulations may affect how the business operates, how it deals with consumers, and how it reports
income. As a result, the agency's relationship with businesses is primarily one of enforcing rules and
regulations. Governmental agencies do not assist a business with promotional activities. Agencies are
not legislative bodies, i.e., they do not enact laws. The agencies do not manage businesses.
</h5></div><h5 id='q3'>3. Walt purchased stock based on false information from an online message board. The scammers who
posted the information had purchased the stock and hyped it up on the Internet to encourage
unsuspecting investors to buy it and drive up its price. After the price went up, the scammers sold off their
stock. The price of the stock then fell, leaving Walt with worthless stock. Walt was the victim of</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. pump and dump.</option><option value="B">B. a pyramid scheme.</option><option value="C">C. affinity fraud.</option><option value="D">D. phishing.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: pump and dump.</h5><h5>Pump and dump is an investment scam that takes place mostly online. Scammers buy
a small stock and then hype it up to other investors, causing its price to rise. When the price is high, the
scammers sell their stock, leaving the victims to deal with the rapid price decline afterwards. A pyramid
scheme is an illegal form of multi-level marketing in which emphasis is placed on collecting initial fees
from as many people as possible. Affinity fraud is an investment scam in which the scammer claims to be
a member of the group s/he is targeting. Affinity fraud often takes the form of a Ponzi or pyramid scheme.
Phishing is an online identity-theft scam that fools its victims into believing they are submitting sensitive,
personal information (such as credit card numbers or bank passwords) to a legitimate web site.
</h5></div><h5 id='q4'>4. Six months ago, Xander bought 500 shares of stock at $25 per share. Today, he sold all 500 shares for
$48 per share. What type of tax is Xander obligated to pay as a result of this financial transaction?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Stock sales tax</option><option value="B">B. Luxury tax</option><option value="C">C. Excise tax</option><option value="D">D. Capital gains tax</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: Capital gains tax</h5><h5>A capital gain is the increase in an asset's value from the time that it is purchased to
the time that it is sold. The federal government charges capital gains taxes on most capital gains. A
luxury tax is a tax paid on nonessential (and, in many cases, expensive) goods. An excise tax is a tax
placed on a specific good. Luxury and excise taxes can be used to discourage consumption of certain
products or to raise some easy money on products that the government knows people will continue to
purchase, regardless of the tax. Stock sales tax is a fictitious term.
</h5></div><h5 id='q5'>5. The Frank and Fitzer Corporation pays federal and state income tax on its earnings. Its stockholders also
pay taxes on any dividends that they receive from the company. Frank and Fitzer's earnings are subject
to __________ taxation.</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. progressive</option><option value="B">B. proportional</option><option value="C">C. double</option><option value="D">D. regressive</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: double</h5><h5>Double, or dual, taxation occurs when two different taxes are levied on the same income. Frank
and Fitzer's earnings are subject to double taxation because the company pays taxes on its income, and
its stockholders must pay taxes on any dividends that they receive from the company. If a government
levies a proportional tax, everyone pays the same percentage of income in taxes. A progressive tax
requires individuals with higher incomes to pay a higher percentage of income in taxes. A regressive tax
requires individuals with lower incomes to pay a higher percentage of income in taxes. There is not
enough information provided to determine if a proportional, progressive, or regressive tax system exists.
</h5></div><h5 id='q6'>6. What can a financial-services business do to ensure that it is following government regulations?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Conduct a compliance audit</option><option value="B">B. Improve technical systems</option><option value="C">C. Develop a business plan</option><option value="D">D. Monitor sales performance</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Conduct a compliance audit</h5><h5>Financial-services businesses must follow many government regulations.
These regulations affect the way that businesses record and report financial data. To ensure that the
business is following all of the regulations, the business should conduct a compliance audit. A
comprehensive compliance audit can detect discrepancies and problems. For example, a compliance
audit might indicate that updated compliance software will resolve or correct a noncompliance issue.
Developing a business plan and monitoring sales performance are not actions that will ensure that the
business is following government regulations.
</h5></div><h5 id='q7'>7. Using technology applications to ensure compliance of financial information is beneficial to businesses
because many of the applications can</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. correct human-resource problems.</option><option value="B">B. evaluate compliance problems with data provided by competitors.</option><option value="C">C. detect compliance inconsistencies across different jurisdictions.</option><option value="D">D. improve product quality and satisfaction levels.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: detect compliance inconsistencies across different jurisdictions.</h5><h5>Businesses use compliance software to
aid them in detecting financial transaction problems. Because interstate and international commerce
involves following different regulations in different locations, advanced compliance technologies can scan
or audit the data to ensure their compliance with different jurisdictions' regulations and rules. The
purpose of compliance software is not to evaluate a competitor's compliance, correct human-resource
problems, or improve product quality and satisfaction levels.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1078

FINANCE CLUSTER EXAM

1

1. Before a business and a customer can enter into a valid contract, the offer to do something in return for
payment must be</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. A travel-expense account has a credit balance at the end of an accounting period rather than a
debit balance.</option><option value="B">B. Purchase orders 2870 from Bryan Industries and 2870a from Bryant Industries are very similar.</option><option value="C">C. A new customer recently placed an order that is three times larger than the average order.</option><option value="D">D. Jack temporarily changed a vendor file so funds destined for the vendor would instead be
diverted to his personal checking account.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: Jack temporarily changed a vendor file so funds destined for the vendor would instead be
diverted to his personal checking account.</h5><h5>FI:059
</h5></div><h5 id='q9'>9. Ramona's teacher is giving directions for the mid-term; but the two students sitting on either side of
Ramona are whispering to each other, and it's hard for her to hear. Ramona focuses all of her attention
on the teacher, so she doesn't miss anything important. Which of the following steps for following
directions does this situation illustrate:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Eliminating distractions</option><option value="B">B. Acknowledging directions verbally or nonverbally</option><option value="C">C. Reaching concensus</option><option value="D">D. Recommending alternatives

®
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is A: Eliminating distractions</h5><h5>When Ramona focuses all her attention on the teacher's directions instead of on
the students whispering around her, she is eliminating distractions. Ideally, you should receive directions
in an area free of activity or noise, but that's not always possible. So, whenever you receive directions,
focus your attention on what the speaker is saying. This will make it easier for you to communicate and
get the directions right. In this situation, Ramona is not acknowledging directions, reaching concensus, or
recommending alternatives.
</h5></div><h5 id='q10'>10. One reason that it is important to be very careful when using oral communication in business is that oral
communication</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. may not be remembered accurately.</option><option value="B">B. should only be used for urgent messages.</option><option value="C">C. is generally not misunderstood.</option><option value="D">D. is an informal communication method.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: may not be remembered accurately.</h5><h5>Listeners generally retain only about 25% of what they hear, and
they frequently don't remember it accurately. It is, therefore, important to choose words used in oral
communication carefully and to try to make sure that listeners receive the intended message. Oral
communication is used for all kinds of messages, not just those that are urgent. Oral communication is
considered less formal than written communication, but that is not the reason that it should be used with
care.
</h5></div><h5 id='q11'>11. When organizing an oral presentation, you use cause-and-effect order to</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. arrange material into related subcategories. </option><option value="B">B. describe a problem and a plan for solving it. </option><option value="C">C. emphasize the relationship between events.</option><option value="D">D. put items in time sequence.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: emphasize the relationship between events.</h5><h5>Cause-and-effect order explains how one action or event
causes another. The order that describes a problem and a plan for solving it is problem/solution order.
The order that arranges material into related subcategories is topical order. The order that puts items in
time sequence is chronological order.
</h5></div><h5 id='q12'>12. A salesperson who is planning a business trip to meet with several customers in a different city might
write letters of inquiry in order to</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. explain requirements.</option><option value="B">B. transmit information.</option><option value="C">C. develop goodwill.</option><option value="D">D. request appointments.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: request appointments.</h5><h5>Salespeople write letters of request or inquiry for a variety of reasons. One
reason is to schedule appointments with customers who are in a different city. When planning a business
trip, salespeople often write letters to set up appointments with customers in order to make sure that the
customers will be available. An advantage of writing letters is that the customers usually acknowledge the
appointment with another letter. Then, both parties have a hard copy to remind them of the date and time
of the appointment. Letters of inquiry ask for something rather than explain requirements, transmit
information, or develop goodwill.
</h5></div><h5 id='q13'>13. The owner of Bob's Bargains has prepared a one-page report to inform the staff about current sales
volume. This is an example of a(n) __________ report.</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. industry</option><option value="B">B. complex</option><option value="C">C. feasibility</option><option value="D">D. informal</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: informal</h5><h5>A short report that presents facts without analysis is considered an informal report. A formal
report is more complex, has several different parts, and provides an analysis of the facts in the report. A
feasibility report is a type of complex report that evaluates the viability of a course of action. There is not
enough information provided to determine if the report contains sales data for the industry.
</h5></div><h5 id='q14'>14. Which of the following would be an effective way to communicate a job-related suggestion to your
supervisor:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. A letter of transmittal</option><option value="B">B. An office memorandum</option><option value="C">C. An executive summary</option><option value="D">D. A personal letter</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: An office memorandum</h5><h5>An office memorandum, or memo, is the most commonly used method of inhouse communication in many businesses. It may be handwritten, typed, or sent by e-mail. A letter of
transmittal is a letter that accompanies a long report or proposal. An executive summary is an overview
of a business plan or other complex report. It is inappropriate to write a personal letter to a supervisor.
</h5></div><h5 id='q15'>15. What is one way that employees who routinely deal with customers can demonstrate a customer-service
mindset?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Speak in a monotone</option><option value="B">B. Make eye contact</option><option value="C">C. Stand at attention</option><option value="D">D. Keep a straight face</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: Make eye contact</h5><h5>Looking customers in the eye is one way of demonstrating a customer-service
mindset. It shows that employees are focused on customers and their needs. Failing to make eye contact
indicates indifference and could cause customers to believe employees don't care about them or their
needs. Other ways of demonstrating a customer-service mindset include varying the tone of voice, rather
than speaking in a monotone, and smiling at customers, rather than keeping a straight face. It is
important to maintain good posture, although that doesn't mean employees should stand at attention.
</h5></div><h5 id='q16'>16. In the past, customer relationship management was used mainly as a way to</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. assist business decision making.</option><option value="B">B. increase customer loyalty.</option><option value="C">C. track customer information.</option><option value="D">D. help employees perform more efficiently.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: track customer information.</h5><h5>In the past, customer relationship management was used mainly as a way to
track and organize information about customers so a business could identify its most valuable clients and
tailor its marketing strategies to generate more revenue. Over the years, the meaning of CRM has
expanded quite a bit. Today, it's also viewed as a way for employees to perform their jobs more efficiently
and for businesses to increase one of their most important assets—customer loyalty. In addition, it's an
important tool for use in business decision making and product development.
</h5></div><h5 id='q17'>17. Which of the following is typically an effective method to build trusting relationships with financial clients:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Contacting clients only when problems arise with their accounts</option><option value="B">B. Using precise technical language when explaining financial products</option><option value="C">C. Asking others in the organization to follow up after sales transactions</option><option value="D">D. Explaining the benefits and drawbacks of different financial products</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Explaining the benefits and drawbacks of different financial products</h5><h5>One responsibility that finance
professionals have is to provide complete product information to clients. This means explaining the
benefits as well as the drawbacks of different financial products so that clients can make educated
decisions about what to do with their money. When finance professionals communicate openly, their
clients are much more likely to trust them. And, when clients trust their finance professionals, they are
more likely to become loyal and satisfied customers. Rather than using precise technical language and
financial jargon, finance professionals can build more trust by talking to their clients in language that the
clients understand. Rather than asking others in the organization to follow up after sales transactions,
finance professionals can build trusting relationships with clients by following up with them themselves.
Although some clients may only want to be contacted when problems arise, most clients prefer to stay in
communication with their finance professionals on a more regular basis.
</h5></div><h5 id='q18'>18. While Tobi is in the middle of an important meeting with some new clients, her assistant steps into the
room to let Tobi know that her biggest customer, Mr. Williams, is on the phone with some questions
about his account. It is 3:30 p.m. What should Tobi do?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Ask the new clients to take a break so that she can take the call immediately</option><option value="B">B. Ask her assistant to inform Mr. Williams that Tobi will return his call at 5:00 p.m.</option><option value="C">C. Ask her assistant to handle Mr. Williams' call and answer his questions</option><option value="D">D. Invite the new clients out for dinner and call Mr. Williams in the morning</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: Ask her assistant to inform Mr. Williams that Tobi will return his call at 5:00 p.m.</h5><h5>An important factor in
retaining clients is returning their calls in a timely fashion. By personally responding to Mr. Williams'
questions promptly instead of calling him back in the morning or having her assistant answer his
questions, Tobi shows him that he is important to her. At the same time, though, Tobi needs to show the
new clients that she respects them and their time. For that reason, Tobi should finish her meeting with
them prior to speaking with Mr. Williams.
</h5></div><h5 id='q19'>19. When a business wants to access data from a variety of sources to monitor customer trends over time,
what form of computer technology should a business use?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Electronic data interchange</option><option value="B">B. Project management</option><option value="C">C. Data warehousing</option><option value="D">D. Systematic laddering</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Data warehousing</h5><h5>Data warehousing involves combining data from a variety of internal and external
sources into one large database. A business can access current and historic data from a data warehouse
to identify and monitor customer buying behavior, trends, etc. Businesses use project management
computer applications to track resources and activities for short- and long-term projects. Electronic data
interchange systems transmit sales and ordering information among a business and its suppliers. Data
acquired from an electronic data interchange can be stored in a data warehouse. Systematic laddering is
a fictitious term.
</h5></div><h5 id='q20'>20. What role does utility play in the implementation of the marketing concept?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. A payment method</option><option value="B">B. A satisfaction gauge</option><option value="C">C. A cost-saving tool</option><option value="D">D. A delivery process

</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: A satisfaction gauge</h5><h5>Both utility and the marketing concept consider the consumer's point of view about
a product. In the implementation of the marketing concept, utility functions as a gauge of the consumer's
satisfaction. Utility is used as a measurement tool—not as a payment method, a cost-saving tool, or a
delivery process.
</h5></div><h5 id='q21'>21. One of the reasons that a country needs an economic system is because it</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. is independent of other nations.</option><option value="B">B. has limited wants and needs.</option><option value="C">C. has a limited supply of resources.</option><option value="D">D. has immigrants from several countries.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: has a limited supply of resources.</h5><h5>No country has enough resources to satisfy all of its people's unlimited
wants and needs. As a result, choices must be made. One of the functions of an economic system is to
make decisions about what can be produced, how much can be made, and who can obtain the products.
People in all economic systems are interdependent and must depend on each other to obtain the things
they need. Having immigrants from other countries is not a factor.
</h5></div><h5 id='q22'>22. To use resources wisely, business owners must reduce</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. wages.</option><option value="B">B. risk.</option><option value="C">C. reward.</option><option value="D">D. waste.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: waste.</h5><h5>To use resources wisely, business owners must reduce waste. Whatever is consumed or wasted
during production takes away from potential profit. Risk, reward, and wages do not typically endanger a
firm's resources.
</h5></div><h5 id='q23'>23. Which of the following is an economic condition that affects consumer spending:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Competition</option><option value="B">B. Employment</option><option value="C">C. Depreciation</option><option value="D">D. Infrastructure</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: Employment</h5><h5>Consumer spending is an indication of the condition of the economy. When consumers
have money to spend and are willing to spend it, the economy is stable and healthy. This also indicates
that the level of employment is high because a lot of consumers are spending. When consumer spending
begins to decrease, that is an indication that employment rates may be decreasing and fewer consumers
have extra money to spend. Consumer spending does not measure competition, depreciation, or
infrastructure.
</h5></div><h5 id='q24'>24. The component of the gross domestic product which includes the final market value of all goods and
services purchased for their own use by individuals, families, and nonprofit organizations is</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. exports.</option><option value="B">B. personal consumption expenditures.</option><option value="C">C. gross private investment.</option><option value="D">D. imports.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: personal consumption expenditures.</h5><h5>These purchases are usually divided into durable and nondurable
goods and services. Gross private investment includes the value of all capital goods created in the
economy during the year and inventories held by business firms from the current year's production.
Exports are the goods and services sold to other nations. Imports are the goods and services which our
country purchases from other nations.
</h5></div><h5 id='q25'>25. The biggest communication issue for businesses engaging in international trade is</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. language.</option><option value="B">B. corruption.</option><option value="C">C. power distance.</option><option value="D">D. religion.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: language.</h5><h5>The biggest communication issue for businesses engaging in international trade is language.
It is difficult to do business while speaking two different languages, and it is also difficult when the same
words have different meanings in different cultures. Corruption, power distance, and religion are not
communication issues.
</h5></div><h5 id='q26'>26. Expressing empathy and being willing to help others are the aspects of emotional intelligence that relate
to</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. relationship management.</option><option value="B">B. self-management.</option><option value="C">C. social awareness.</option><option value="D">D. self-awareness.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: social awareness.</h5><h5>Social awareness, self-awareness, self-management, and relationship management
are the four primary areas of emotional intelligence. The aspect of emotional intelligence in which you
know and understand the emotions of others is called social awareness. Being socially aware involves
the ability to "step into another person's shoes" (expressing empathy) and being willing to help or serve
others. It also involves the ability to see the bigger picture, which is organizational awareness. Selfawareness refers to knowing your own emotions. Self-management is the ability to manage your own
emotions. Relationship management is the ability to manage the emotions of others.
</h5></div><h5 id='q27'>27. Which of the following is a characteristic of individuals who are self-confident:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Have positive thoughts</option><option value="B">B. Think they are always right</option><option value="C">C. Are aggressive with others</option><option value="D">D. Prefer to be in charge</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: Have positive thoughts</h5><h5>Individuals who are self-confident have a positive attitude. This also means that
they have positive thoughts and believe they have the ability to be successful. They do not doubt
themselves or apologize for expressing their opinions. Confident people feel sure of themselves and are
not negative. Individuals who are self-confident do not think they are always right, act aggressively
towards others, or prefer to be in charge.
</h5></div><h5 id='q28'>28. Which of the following is an example of positive self-talk?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. "I can do it!"</option><option value="B">B. “If I fail, I'll be embarrassed.”</option><option value="C">C. “I wish I were smarter.”</option><option value="D">D. “My coworkers are so annoying.”</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: "I can do it!"</h5><h5>undefined</h5></div><h5 id='q29'>29. Behavior that is characterized by respect for personal rights as well as for the rights of others is
__________ behavior.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. aggressive</option><option value="B">B. passive</option><option value="C">C. offensive</option><option value="D">D. assertive</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: assertive</h5><h5>Assertive people stand up for their own rights as well as the rights of others. Passive behavior
is characterized by a failure to exercise personal rights and a lack of respect for personal needs.
Aggressive behavior is characterized by a willingness to ignore the rights of others and to exploit them in
order to achieve personal goals. Offensive behavior is unpleasant or displeasing actions.
</h5></div><h5 id='q30'>30. Which of the following is an indication that employees might be experiencing a lot of stress:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Being irritated when dealing with customers</option><option value="B">B. Drinking one or two cups of coffee a day</option><option value="C">C. Concentrating on doing the job correctly</option><option value="D">D. Having occasional conversations with coworkers</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: Being irritated when dealing with customers</h5><h5>Interaction with customers is a major cause of stress in the
workplace. Customers are not always polite and understanding. Sometimes they are demanding,
unrealistic, and angry. Employees who are not experiencing a lot of stress usually are able to handle
these types of situations with customers and resolve the problem. However, when employees are under
a lot of stress, they often feel annoyed and irritated when dealing with customers—even those customers
who are behaving appropriately. Routinely feeling this way is an indication that an employee is stressed,
in which case management should take steps to help the employee reduce the level of stress.
Concentrating on doing the job correctly, drinking one or two cups of coffee a day, and having occasional
conversations with coworkers are not indications that employees are under a lot of stress.
</h5></div><h5 id='q31'>31. Although executive coaching comes in many formats, the main condition for success is that the client</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. contacts the coach every week.</option><option value="B">B. meets with the coach in person.</option><option value="C">C. is open to learning.</option><option value="D">D. becomes better at his/her job.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: is open to learning.</h5><h5>The main provision of executive coaching is that the client is open to learning.
Without an open attitude, it won't matter whether the client meets with the coach in person or over the
phone—or on a weekly or even daily basis. And, without an open attitude, the client may not succeed in
improving job performance.
</h5></div><h5 id='q32'>32. When people get along well together, they are practicing __________ human relations skills.</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. ineffective</option><option value="B">B. unrewarding</option><option value="C">C. effective</option><option value="D">D. questionable</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: effective</h5><h5>This involves understanding other people and skillfully relating to them. It means appreciating
other people and treating them with courtesy, respect, and consideration. Such relationships are
generally pleasant and mutually rewarding. People who don't get along well are practicing ineffective or
questionable human relations skills.
</h5></div><h5 id='q33'>33. The yen, peso, and euro are types of</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. dollars.</option><option value="B">B. bonds.
</option><option value="C">C. stock.</option><option value="D">D. money.

</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: money.

</h5><h5>undefined</h5></div><h5 id='q34'>34. What type of loan requires collateral?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Note</option><option value="B">B. Unsecured

FINANCE CLUSTER EXAM

4
</option><option value="C">C. Secured</option><option value="D">D. Signature
</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: Secured</h5><h5>A secured loan is a loan in which the borrower pledges to the lender some valuable possession
as security, or collateral, to guarantee that the loan will be repaid. Items often used as collateral include
real estate, stocks, bonds, machinery, and the cash value of life insurance. An unsecured loan, also
known as a signature loan, is an amount of money borrowed by an individual or a business simply by
signing a promissory note to repay the loan. No collateral is required for this loan. Both secured and
unsecured loans are considered notes.
</h5></div><h5 id='q35'>35. Businesses often save excess money because it has a positive effect on the business's</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. cash flow.</option><option value="B">B. interest rate.</option><option value="C">C. accounts receivable.</option><option value="D">D. debt equity.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: cash flow.</h5><h5>When businesses save excess money, they have more cash available to cover unexpected
expenses or to invest. Saving money has a positive effect on a business's cash flow which determines
the amount of cash the business has to work with at any given time. The more money that is saved, the
more cash is available. Interest rate is the percentage figure used in calculating interest charges.
Accounts receivable are all monies owed to a firm by its customers. Debt is the amount of money a
business owes while equity is net worth.
</h5></div><h5 id='q36'>36. Compounding can be described as</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. avoiding inflation.</option><option value="B">B. earning interest upon interest.
</option><option value="C">C. meeting financial needs.</option><option value="D">D. risking the stock market.
</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: earning interest upon interest.
</h5><h5>undefined</h5></div><h5 id='q37'>37. The primary reason that people review their personal credit reports is to</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. change or update their credit ratings.</option><option value="B">B. verify that the credit agencies have correct information.</option><option value="C">C. ensure that they obtain bank loans.</option><option value="D">D. eliminate the risk of identity theft.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: verify that the credit agencies have correct information.</h5><h5>Credit is the arrangement by which individuals or
businesses can purchase now and pay later. A credit agency is a business that maintains files of credit
information on individuals and businesses. It is important to make sure that credit agencies have
accurate information about your credit history because other businesses purchase the reports to make
decisions about extending credit to you or providing a loan to you. Although people can provide
information to improve their credit ratings, it is the credit agencies that change or update the information.
Good credit reports can increase the chances of obtaining a bank loan, but reviewing the reports cannot
ensure that people obtain bank loans. People who monitor their credit reports can reduce the risk of
identity theft, but cannot eliminate the risk.
</h5></div><h5 id='q38'>38. Which type of investment institution helps firms to raise funds by issuing securities?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Securities exchange</option><option value="B">B. Investment company</option><option value="C">C. Pension fund</option><option value="D">D. Investment bank</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Investment bank</h5><h5>Investment banks locate outside sources of money for firms. In most cases, investment
banks help these businesses to raise funds by issuing securities in the form of stocks or bonds. An
investment company pools investors' funds and invests those funds based on the needs of the investors.
Investment companies are also often referred to as “mutual funds.” Like mutual funds, pension funds pool
investors' contributions. However, investors in a particular pension fund are typically employed by one
employer. A securities exchange creates investment opportunities for investors and access to funds for
businesses. Investment banks help businesses to issue and sell their securities on a securities
exchange.
</h5></div><h5 id='q39'>39. What is the primary function of the foreign exchange market?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. To trade currency</option><option value="B">B. To sell stocks</option><option value="C">C. To buy bonds</option><option value="D">D. To underwrite policies</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: To trade currency</h5><h5>There are many types of currencies in the world—the yen (Japan), the U.S. dollar
(United States), the Euro (European Union), the Peso (Mexico), etc. Each currency's value fluctuates.
The foreign exchange market trades one currency for another currency, and determines each currency's
conversion rate into other currencies. Stock exchanges buy and sell stocks. The bond market buys and
sells bonds or debt securities. Insurance companies underwrite insurance policies.
</h5></div><h5 id='q40'>40. Which of the following is not a factor contributing to financial convergence and consolidation:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Financial deregulation</option><option value="B">B. Technological advances</option><option value="C">C. Desire for illiquid assets</option><option value="D">D. Desire for lower costs</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: Desire for illiquid assets</h5><h5>Liquid assets are financial assets such as stocks that can easily be converted
into cash. Illiquid assets, therefore, are assets that cannot be easily converted into cash or sold without a
significant drop in their value. Subprime mortgage assets, for example, became illiquid assets during the
recent financial crisis. Financial firms don't merge because they want illiquid assets that are worth very
little. Instead, financial convergence and consolidation may be driven by financial companies' desire to
acquire more liquid capital. Technological advances, financial deregulation, and a desire for lower costs
have also contributed to financial convergence and consolidation.
</h5></div><h5 id='q41'>41. Stocks in which of the following industry sectors are least likely to be affected by changes in the business
cycle:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Energy</option><option value="B">B. Healthcare</option><option value="C">C. Technology</option><option value="D">D. Capital goods</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Healthcare</h5><h5>Healthcare, food, drink, and tobacco are generally considered to be non-cyclical industries,
meaning that they are not greatly impacted by changes in the business cycle. The demand for such
products and their stocks remains fairly steady regardless of the stage of the business cycle. Stocks in
industry sectors such as energy, technology, and capital goods, on the other hand, often change in
response to changes in the business cycle. The energy sector is affected by supply and demand of
energy around the world, and political unrest can impact the industry considerably. Energy stocks seem
to perform best late in the business cycle. Technology stocks are also affected by the business cycle,
often in direct relation to the demand for capital goods. Technology stocks and capital goods stocks do
well during business cycle expansion.
</h5></div><h5 id='q42'>42. Stock market returns are a(n) ___________ economic indicator.</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. lagging</option><option value="B">B. leading</option><option value="C">C. coincident</option><option value="D">D. acyclic</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: leading</h5><h5>Stock market returns are considered to be a leading economic indicator because the stock
market typically changes before the economy does. If the stock market declines, the economy is likely to
decline as well. In turn, stock market returns start to rise before the economy improves. Lagging
economic indicators change several months after the economy begins to improve or worsen. Coincident
economic indicators move at the same time as the economy. Acyclic economic indicators have no
relation to the economy.
</h5></div><h5 id='q43'>43. Financial globalization tends to cause an increase in</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. herd behavior among investors.</option><option value="B">B. investors' exposure to business cycle risks.</option><option value="C">C. taxes on international transactions.</option><option value="D">D. limits on foreigners' access to domestic markets.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: herd behavior among investors.</h5><h5>Although financial globalization tends to increase investors' access to
many different financial markets, financial globalization also seems to increase the risks of speculative
bubbles and herd behavior among investors. Herd behavior involves individuals who act together as a
group without any planned direction. It is usually irrational and driven by emotions. In good times,
investors hurry to join others in a buying frenzy. But, in bad financial times, fearful investors join others in
a rush to get out of risky markets. By diversifying their funds in many different countries, investors are
able to diversify their risk and reduce their exposure to business cycle risks. To enable capital to flow
more freely across their national borders, many countries have lowered their taxes on international
financial transactions.
</h5></div><h5 id='q44'>44. What do some investors use to hedge the risk of investing in the foreign exchange market?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Derivatives</option><option value="B">B. Emerging markets</option><option value="C">C. Venture capital</option><option value="D">D. No-load funds</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Derivatives</h5><h5>Derivatives are financial instruments whose value depends upon the value of other financial
instruments or market indices. Investors frequently use derivatives to hedge or reduce the risk of
investing in the foreign exchange market, which is sometimes volatile. The derivatives help to reduce the
impact of significant fluctuations in foreign exchange markets. Emerging markets are financial markets in
countries with developing economies. Emerging markets are usually receptive to foreign investment, but
they are also more volatile and risky than financial markets in developed countries. Venture capital is
invested money that is used for new business opportunities. No-load mutual funds have no up-front sales
charges.
</h5></div><h5 id='q45'>45. Which of the following is a type of financial-services provider:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Retirement community</option><option value="B">B. Stock market</option><option value="C">C. Taxation department</option><option value="D">D. Commercial bank</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: Commercial bank</h5><h5>Investment banks locate outside sources of money for firms. In most cases, investment
banks help these businesses to raise funds by issuing securities in the form of stocks or bonds. An
investment company pools investors' funds and invests those funds based on the needs of the investors.
Investment companies are also often referred to as “mutual funds.” Like mutual funds, pension funds pool
investors' contributions. However, investors in a particular pension fund are typically employed by one
employer. A securities exchange creates investment opportunities for investors and access to funds for
businesses. Investment banks help businesses to issue and sell their securities on a securities
exchange.
</h5></div><h5 id='q46'>46. To obtain reliable information about securities, a potential investor might speak with a</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. colleague.</option><option value="B">B. trusted friend.</option><option value="C">C. stockbroker.</option><option value="D">D. loan officer.

</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: stockbroker.</h5><h5>Securities refer to the legal owning or lending agreements between individuals, businesses,
or governments. Securities include investments such as stocks, bonds, and mutual funds. A stockbroker
is a licensed person who has the authority and expertise to buy and sell securities on behalf of a client.
Unless they are stockbrokers, trusted friends, colleagues, and loan officers may not be the most reliable
sources of securities information.
</h5></div><h5 id='q47'>47. As Kelly reviewed her stock's performance level, she saw that the dividend per share was $1.80 and the
closing price of the stock was $28.20 per share. What was the yield percentage for the stock?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. 6.4</option><option value="B">B. 4.8</option><option value="C">C. 6.1</option><option value="D">D. 4.6</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: 6.4</h5><h5>Newspapers and web sites publish stock tables so that investors and potential investors can monitor
the performance of a company's stock. One column of the table shows the stock's yield percentage (also,
rate of return and dividend yield), which is the annual dividend divided by the current stock price.
Therefore, Kelly's stock yield is 6.4 percent. ($1.80 ÷ $28.20 = .0638 or 6.4 percent).
</h5></div><h5 id='q48'>48. It's a good idea for an investor to watch the numbers on a stock table</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. when dividends are paid.</option><option value="B">B. just for a given day.</option><option value="C">C. once a year.</option><option value="D">D. over a period of time.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: over a period of time.</h5><h5>Watching numbers over a period of time is a good idea because investors can get
a sense of what is normal for a stock price. Looking at the numbers once a year, on a given day, or when
dividends are paid does not give you enough time to obtain this kind of information.
</h5></div><h5 id='q49'>49. A florist expects monthly cash sales to be $5,300 and interest income to be $200. Total cost of goods will
be $1,750, fixed expenses will be $2,150, and variable expenses will be $1,975. Calculate the cash flow.</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. -$325</option><option value="B">B. $600</option><option value="C">C. $650</option><option value="D">D. -$375</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: -$375</h5><h5>Cash flow is calculated by subtracting total cash paid out from total cash receipts. Total cash
receipts include cash sales and interest income ($5,300 + $200 = $5,500). Total cash paid out includes
cost of goods, fixed expenses, and variable expenses ($1,750 + $2,150 + $1,975 = $5,875). Subtract
total cash paid out from total cash receipts to determine cash flow ($5,500 - $5,875 = $-375).
</h5></div><h5 id='q50'>50. Determining which projects a business should invest in is known as</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. the cash conversion cycle.</option><option value="B">B. return on capital.</option><option value="C">C. capital budgeting.</option><option value="D">D. capital structuring.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: capital budgeting.</h5><h5>Determining which projects a business should invest in is known as capital budgeting.
It is one of the capital investment decisions. Return on capital is a component of working capital
management that refers to how well a business is generating cash flow in relation to its invested capital.
The cash conversion cycle is a component of working capital management that refers to how long a
business's money is "tied up" between purchasing raw materials and receiving cash from sales. Capital
structuring refers to determining the optimal mix of financing—it is also one of the capital investment
decisions.
</h5></div><h5 id='q51'>51. Which of the following is a factor that might cause a business to adjust its budget figures:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Sales procedures</option><option value="B">B. Economic trends</option><option value="C">C. Local elections</option><option value="D">D. Operating policies</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Economic trends</h5><h5>Budgets should be flexible because they are estimates. Many factors can affect budget
outcomes; therefore, businesses might need to adjust their budget figures. Economic trends are factors
that might cause a business to adjust its budget. The way the economy is moving, either expanding or
contracting, will affect a business's ability to meet its budget expectations. Local elections do not affect a
business's budget. Sales procedures are the step-by-step processes that sales personnel follow in order
to sell. Operating policies are general rules established by the business.
</h5></div><h5 id='q52'>52. Effective financial-information management involves implementing processes that help companies</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. make appropriate business decisions.</option><option value="B">B. track their ongoing projects.</option><option value="C">C. interpret government regulations.</option><option value="D">D. revise economic indicators.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: make appropriate business decisions.</h5><h5>Businesses track a variety of accounting and financial data. The
data are presented as information to businesspeople to evaluate and to make business decisions. To
make sound business decisions, the financial data must be accurate, current, and relevant. Making a
decision based on incorrect or outdated data could be very costly to a business. Businesses use projectmanagement software to track projects. Businesses implement effective financial-information
management processes to be in compliance with government regulations. Businesses evaluate, rather
than revise, economic indicators.
</h5></div><h5 id='q53'>53. What is an effective way for a business to reduce risks associated with the unethical manipulation of
financial data?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Use auditing software applications</option><option value="B">B. Organize a network database</option><option value="C">C. Interview forensic accountants</option><option value="D">D. Limit financial transactions</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use auditing software applications</h5><h5>Auditing software tracks and records each step of all financial
transactions. By keeping records of each step of a financial transaction, the business reduces the risks
associated with embezzlement and other unethical and illegal activities within the business. If problems
with financial data are detected, independent forensic accountants may be brought into the business to
evaluate the inconsistencies. Businesses do not want to limit their financial transactions because some of
them involve sales, which increase the businesses profitability.
</h5></div><h5 id='q54'>54. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. agent</option><option value="B">B. interpreter</option><option value="C">C. analyst</option><option value="D">D. steward</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: steward</h5><h5>Financial-information management's stewardship function involves protecting financial data
from tampering, loss, unauthorized access, and unauthorized use. While a financial-information
management professional's job responsibilities might include interpreting or analyzing financial data,
those are not the functions that s/he is carrying out when protecting the financial information. An agent is
an intermediary who assists in the sale and/or promotion of goods and services but does not take title to
them.
</h5></div><h5 id='q55'>55. How can businesses benefit from using a central data repository for its financial information?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. They can obtain faster responses to queries.</option><option value="B">B. They are able to overcome economies of scale.</option><option value="C">C. They no longer have to generate consistent data.</option><option value="D">D. They can rely on old data.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: They can obtain faster responses to queries.</h5><h5>Since data are housed in one location, querying the data is
faster, thereby improving organizational efficiency. Having a central depository ensures that data from
different applications are combined into one common storage area which increases the speed with which
queries can be run. Using a central repository for financial information enables businesses to achieve
economies of scale rather than overcoming them. They also have access to more consistent, up-to-date
information rather than relying on old data.
</h5></div><h5 id='q56'>56. An internal database that contains relevant internal financial data in a central location supports a
business's ability to</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. install security measures.</option><option value="B">B. monitor competitors.</option><option value="C">C. share information.</option><option value="D">D. develop contracts.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: share information.</h5><h5>In the past, customer relationship management was used mainly as a way to
track and organize information about customers so a business could identify its most valuable clients and
tailor its marketing strategies to generate more revenue. Over the years, the meaning of CRM has
expanded quite a bit. Today, it's also viewed as a way for employees to perform their jobs more efficiently
and for businesses to increase one of their most important assets—customer loyalty. In addition, it's an
important tool for use in business decision making and product development.
</h5></div><h5 id='q57'>57. In what stage of the data-mining process would you clean data in a database?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Exploration</option><option value="B">B. Model building and validation</option><option value="C">C. Prediction</option><option value="D">D. Deployment</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: Exploration</h5><h5>The exploration stage of data mining generally starts with preparation of the data. This
includes such activities as data cleaning, data transformation, selecting subsets of records for analysis,
selecting the variables of interest, and choosing the analytic method to apply. The second phase of the
data-mining process is model building and validation in which various models appropriate for the study
are identified, and the best one is selected. Deployment is use of the selected model. Prediction is not a
stage in the data-mining process; however, data miners want to make predictions from their data-mining
activities.
</h5></div><h5 id='q58'>58. After defining the research question, a financial business establishes a set of rules for placing the data in
certain segments or groupings during the data-mining process. What data-mining approach is the
financial business using?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Decision tree</option><option value="B">B. Rule induction</option><option value="C">C. Neural networking</option><option value="D">D. Fuzzy logic

</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: Decision tree</h5><h5>Data mining is the process of searching computer databases to look for patterns and
relationships among information. To begin the data-mining process, the business must first define the
research question. Then, the business must identify the types of data available and how they are stored
in the database. After identifying this information, the business decides which approach to use to mine
the data. A decision tree is an approach in which the data are categorized or segmented into meaningful,
related groups based on certain characteristics that are defined by the set of rules (criteria) that the
business establishes. Using the tree analogy, the trunk represents all of the data, each branch contains
certain characteristics, and each leaf contains subcategories of related branch characteristics. The rule
induction approach involves the use of "if…then…" rules or scenarios to mine or obtain data. The neural
networking approach uses computer applications that mimic the ways in which the human brain
processes data, which often involve sequencing data patterns. The fuzzy logic approach uses broad or
vague concepts to set rules, such as "high" or "low."
</h5></div><h5 id='q59'>59. Which of the following would a small business's budgeting applications most likely be able to do:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Determine the business's electronic data interchange (EDI) needs</option><option value="B">B. Predict new services to offer customers</option><option value="C">C. Show the business's cash-flow status</option><option value="D">D. Identify equipment needing repairs</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is C: Show the business's cash-flow status</h5><h5>Budgeting applications enable businesses to maintain, monitor,
and forecast a business's financial status and generate financial reports that can be shared with a
business's decision makers. Expenses, revenue, cash flow, profit/loss, etc., are easily tracked and
determined using budgeting applications. Equipment needing repairs, new services to offer customers,
and EDI needs are not captured and predicted by budgeting applications.
</h5></div><h5 id='q60'>60. How could financial analysis applications be used to identify possible conflicts of interest?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. By isolating entries against authorization records for new or terminated employees</option><option value="B">B. By comparing employee phone numbers and addresses to vendor information for payables</option><option value="C">C. By comparing vendor payables posted to purchase orders</option><option value="D">D. By comparing yearly volume with on-hand quantity for stock item</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: By comparing employee phone numbers and addresses to vendor information for payables</h5><h5>A conflict of
interest is any relationship that is, or appears to be, not in the business's best interest. It would prevent
someone from performing her/his duties and responsibilities objectively. To spot probable conflicts of
interest, businesses can use their financial analysis applications to cross check employee data with that
of vendors. The other examples can be used to analyze financial data for other purposes.
</h5></div><h5 id='q61'>61. Which of the following would be appropriate to use as a primary key for identification of customers at a
financial institution:</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Person's zip code</option><option value="B">B. Person's social security number</option><option value="C">C. Person's individual account number</option><option value="D">D. Person's first and last names</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: Person's individual account number</h5><h5>Databases depend upon keys to store, sort and compare records. A
primary key is the unique identifier assigned to a record in a table. When choosing a primary key,
database builders need to be sure that the identifier will be unique to an individual. The person's account
number would be unique to the individual. Most customers consider their social security numbers to be
private information that they do not want entered into databases. In addition, the government can
reassign social security numbers upon the death of the owner of a social security number. In addition,
some people do not have those numbers if they are not U.S. citizens. Zip codes are not unique to an
individual or to a location. A person's first and last names may not be unique, e.g., there may be many
John Smiths.
</h5></div><h5 id='q62'>62. Which of the following statements regarding joins is true:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. A self join combines rows that have equivalent values for specified columns.</option><option value="B">B. An inner join returns only the rows of data that satisfy the join condition.</option><option value="C">C. An outer join returns results from two or more tables where no exact joins of any sort are
possible.</option><option value="D">D. An equijoin returns rows satisfying the join condition, along with rows from one table that can't be
joined with rows from the other table.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is B: An inner join returns only the rows of data that satisfy the join condition.</h5><h5>A join is a type of database
query that combines rows from multiple tables. There are many different types of joins, and each one
returns different results. For instance, an inner join (also known as a simple join) returns only the rows of
data that satisfy the join condition. Outer joins, on the other hand, return the rows of data that satisfy the
join condition, along with additional rows from one table that cannot be joined with any rows in the other
table. A self join joins a table to itself. An equijoin combines rows that have equivalent values for
specified columns, while a non-equijoin returns results from multiple tables where no exact joins are
possible.
</h5></div><h5 id='q63'>63. One reason why it is important for a business to accurately report its financial position is to provide</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. useful information to investors.</option><option value="B">B. summaries of economic indicators.</option><option value="C">C. industry forecasts to the media.</option><option value="D">D. price quotations on securities.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: useful information to investors.</h5><h5>Investors often rely on the financial information that businesses provide
when making decisions about investing in a business. Therefore, a business should accurately report its
financial position so investors will be able to make decisions based on correct information. If a business
misrepresents its financial position, investors may lose money because the business is not as profitable
as they were led to believe. Misrepresenting financial information on purpose also is a violation of several
government rules and regulations. Businesses do not accurately report their financial position to provide
summaries of economic indicators, industry forecasts to the media, or price quotations on securities.
</h5></div><h5 id='q64'>64. Kendra is reviewing her company's cash flow statement to determine if she will have enough money
coming into the business to cover her expenses next month. If she determines that she will experience a
temporary cash inflow shortage, she will need to</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. calculate the cash dividends owed to stockholders.</option><option value="B">B. analyze the depreciation rates of major business assets.</option><option value="C">C. prepare the business's employees for staffing cuts.</option><option value="D">D. take steps to obtain or save cash to cover her expenses.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: take steps to obtain or save cash to cover her expenses.</h5><h5>Sometimes, businesses experience temporary
or short-term cash-flow problems. This can happen when the anticipated inflow of cash falls short and
expenses remain the same or when cash flow remains the same and expenses increase. And, if this
situation happens, the business needs to determine how to handle it. The business may choose to take
out a short-term loan, ask vendors for payment extensions, or postpone certain purchases. If the cashflow problem is relatively small and short-term, it is unlikely that Kendra would need to cut staff. Analyzing
the depreciation rates of assets and calculating cash dividends will not resolve Kendra's short-term cashflow problems. Insufficient information is provided to determine if Kendra's company is a corporation,
which is owned by stockholders.
</h5></div><h5 id='q65'>65. What is the accounting system that businesses use to report financial transactions when they occur?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Accrual</option><option value="B">B. Cash</option><option value="C">C. Receivable</option><option value="D">D. Payable</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: Accrual</h5><h5>The accrual accounting system records transactions at the time they occur even if no money
changes hands at the time. Most businesses use this method because it reflects the business's current
financial position based on what has been earned and expenses that have been incurred. For example,
the business records a sale when it is made even though the business will not be paid until a later date.
The cash accounting method records income and expenditures at the time the money changes hands.
</h5></div><h5 id='q66'>66. Which of the following statements is true about accounting systems:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. The financial accounting system focuses on segments of the company rather than the company
as a whole.</option><option value="B">B. The managerial accounting system is useful for planning and internal decision making.</option><option value="C">C. The government requires all businesses to use the managerial accounting system.</option><option value="D">D. The financial accounting system is used by external audiences, so reporting flexibility is an
advantage to the business.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: The managerial accounting system is useful for planning and internal decision making.</h5><h5>Businesses use
managerial accounting systems for internal use. These systems help managers plan, control resources,
and make decisions for various segments of the company. For example, the managerial accounting
system often involves obtaining financial information to determine if the business should order more
goods for inventory or if it should hire additional production workers. The government requires
businesses to use the financial accounting system to report their financial positions to external users. The
financial accounting system involves reporting financial information in certain ways by applying the
generally accepted accounting principles (GAAP). The government does not require businesses to use
managerial accounting systems, so the ways in which managerial accounting systems obtain and use
information are flexible.
</h5></div><h5 id='q67'>67. What type of financial information would indicate to a business that the demand for its products has been
steadily decreasing?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Promotional budgets</option><option value="B">B. Accounts-payable records</option><option value="C">C. Expense reports</option><option value="D">D. Sales transactions

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sales transactions

</h5><h5>undefined</h5></div><h5 id='q68'>68. By reviewing a prospective customer's borrowing and repayment history, a business can determine if it
should</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. charge sales tax.</option><option value="B">B. provide the prospective customer with a high credit rating.</option><option value="C">C. increase the prime lending rate.</option><option value="D">D. offer credit to the prospective customer.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: offer credit to the prospective customer.</h5><h5>Credit is the arrangement by which businesses or individuals
can purchase now and pay later. Before offering credit options to a prospective customer, the business
should review the customer's borrowing and repayment history by obtaining a credit report. The credit
report, which is generated by a credit-rating agency, indicates the prospect's borrowing and repayment
history and provides a credit rating. The credit rating indicates the extent to which the business or
individual pays its debts in a timely manner. The government, rather than businesses, sets the prime
lending (interest) rate and establishes sales-tax rates. Various jurisdictions have laws that require
businesses to collect sales tax from customers on certain purchases.
</h5></div><h5 id='q69'>69. Capital City Auto Dealership is analyzing Francesca Martino's loan application for a new car. As a recent
college graduate, Francesca has a steady job and earns a good income. She is currently living with her
parents, has little debt, and maintains reasonable balances on her three credit cards. Because Francesca
has never borrowed a large sum of money, the dealership is more likely to approve the loan if Francesca
gets a(n)</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. letter of intent.</option><option value="B">B. incremental pay increase.</option><option value="C">C. reputable credit report.</option><option value="D">D. qualified loan cosigner.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: qualified loan cosigner.</h5><h5>Businesses and financial institutions consider many factors before extending
credit or providing a loan to prospective customers. These factors include the customer's credit history
and credit score, liquid assets, debt ratio, current income, and employment status. Because Francesca
does not have much credit history to evaluate, the dealership is more likely to ask Francesca to get a
cosigner for the loan. The cosigner agrees to cover the debt if Francesca defaults on the loan. Often,
guardians, parents, or grandparents will agree to cosign for loans. Cosigners must meet certain criteria to
qualify as a cosigner. Lenders can obtain credit reports from credit bureaus—the loan applicant does not
need to provide the report. Francesca does not control when her employer increases her pay, so this
option is not a consideration. Lenders do not request letters of intent from prospective customers.
</h5></div><h5 id='q70'>70. Mason is reviewing financial documents for his company to make sure that he hasn't forgotten to include
important data or has not made any mistakes. The reason that Mason is reviewing these documents is to</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. verify that the information is correct.</option><option value="B">B. determine if he needs to take out a short-term loan.</option><option value="C">C. forecast the business's long-term finances.</option><option value="D">D. identify the business's financial resources.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: verify that the information is correct.</h5><h5>Businesspeople analyze and review financial information for many
reasons. In Mason's situation, the purpose of reviewing the documents is to ensure that all the
information is provided and that it is correct. Because the example does not specify the type of financial
documents that Mason is reviewing, it is not possible to know if the documents contain loan or
forecasting information, or if they identify business's financial resources.
</h5></div><h5 id='q71'>71. Orientation of a company's new employees usually takes place</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. the first day on the job.</option><option value="B">B. monthly during the first year.</option><option value="C">C. at management's convenience.</option><option value="D">D. at the employee's convenience.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: the first day on the job.</h5><h5>Orientation is an introductory program for new employees in which they are
given basic information about the company and its policies. Orientation should take place as soon as
possible after hiring so that employees know enough about the company to feel comfortable and to get
off to a good start. It would be ineffective to provide orientation monthly or only at the convenience of
management or the employees.
</h5></div><h5 id='q72'>72. Which of the following is a way in which a business communicates with its target market:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Inventory</option><option value="B">B. Personal selling</option><option value="C">C. Operating procedures</option><option value="D">D. Budgeting</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Personal selling</h5><h5>Businesses can communicate with their target markets through personal selling.
Budgeting, inventory, and operating procedures are not ways that businesses communicate with their
target markets.
</h5></div><h5 id='q73'>73. Which of the following involves obtaining and evaluating data for the purpose of helping businesses make
long-term decisions:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Communications network</option><option value="B">B. Information management</option><option value="C">C. Organizational development</option><option value="D">D. Applied research</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: Information management</h5><h5>This is the process of accessing, processing, maintaining, evaluating, and
disseminating knowledge, facts, or data for the purpose of assisting business decision making.
Businesses need a lot of information to operate successfully and make decisions that will help the
business grow and prosper. Managing the information allows businesses to obtain the data they need to
remain competitive and survive. Communications network, organizational development, and applied
research do not involve obtaining and evaluating data for the purpose of helping businesses make longterm decisions.
</h5></div><h5 id='q74'>74. The Lee Company must pay a settlement to Smith Industries because Lee used Smith's logo on its web
site and other printed materials without Smith's permission. The Lee Company has violated</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. trade-secret regulations.</option><option value="B">B. intellectual property laws.</option><option value="C">C. patent-registration codes.</option><option value="D">D. local ordinances.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: intellectual property laws.</h5><h5>Intellectual property is assets resulting from thinking processes. Written and
artistic works, symbols (e.g., logos), words, trade secrets, and inventions are types of intellectual property
that can be legally protected from the unauthorized use of others. In most countries, intellectual property
protection is legislated by the national (federal) level of government rather than the local level of
government. By registering its logo with the government, a business's logo has trademark protection. If
another company uses the logo without the owner's permission, then the logo's owner can file a lawsuit
against the company to stop the unauthorized use. And in some situations, the owner can obtain
monetary damages from the unauthorized user. Trade secrets are types of knowledge that can be used
to obtain an economic advantage. Formulas, recipes, and customer lists are examples of knowledge
covered under trade-secret laws. Individuals and businesses obtain patent protection for their inventions.
</h5></div><h5 id='q75'>75. Calculate the cash flow.</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Publishing</option><option value="B">B. Application</option><option value="C">C. Operating</option><option value="D">D. Presentation</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: Operating</h5><h5>undefined</h5></div><h5 id='q76'>76. One of the reasons that businesses destroy some of their records is because the records are</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. not required by law.</option><option value="B">B. several years old.</option><option value="C">C. kept in storage.</option><option value="D">D. no longer needed.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: no longer needed.</h5><h5>If a record isn't used for a long period of time and is no longer necessary, it is often
destroyed. Businesses usually are unable to keep every record and systematically review and destroy
those that are not vital to the operation. The fact that the record is no longer needed determines if it is
destroyed, not its age or storage location. Many records are not required by law, but businesses keep
them as long as they are needed.
</h5></div><h5 id='q77'>77. Which of the following is a business trend that involves supplementing a company's existing “brick and
mortar” sales efforts and promotional activities with Internet technology:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Photographing products</option><option value="B">B. Posting web sites</option><option value="C">C. Printing advertisements</option><option value="D">D. Copying contracts</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Posting web sites</h5><h5>Trends are the general direction in which people and events are moving. A trend that
is occurring because of the Internet is the development of more web sites by existing brick-and-mortar
businesses. By building web sites, these existing businesses have another way to provide information,
promote products, and increase sales at any time of the day, any day of the week. Internet technology is
not necessary to photograph products, print advertisements, or copy contracts.
</h5></div><h5 id='q78'>78. Environmental scanning is sometimes called environmental</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. management.</option><option value="B">B. analysis.</option><option value="C">C. planning.</option><option value="D">D. protection.

</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: analysis.</h5><h5>Environmental scanning is sometimes called environmental analysis or environmental
monitoring. This is because the process includes the activities of gathering information (monitoring) and
determining its future impact (analyzing). Environmental protection refers to the earth's environment.
Businesses can neither manage nor plan the environment—it is beyond their control. They can only
control internal resources to respond to environmental changes appropriately.
</h5></div><h5 id='q79'>79. Which of the following is a way that accidents are costly to employees:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Lost production</option><option value="B">B. Expensive repairs</option><option value="C">C. Lost income</option><option value="D">D. Decreased sales</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: Lost income</h5><h5>Frank
and Fitzer's earnings are subject to double taxation because the company pays taxes on its income, and
its stockholders must pay taxes on any dividends that they receive from the company. If a government
levies a proportional tax, everyone pays the same percentage of income in taxes. A progressive tax
requires individuals with higher incomes to pay a higher percentage of income in taxes. A regressive tax
requires individuals with lower incomes to pay a higher percentage of income in taxes. There is not
enough information provided to determine if a proportional, progressive, or regressive tax system exists.
</h5></div><h5 id='q80'>80. Ben recently developed a logo for his new business. What can Ben do to legally protect the logo from
unauthorized use?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Obtain a subpoena from the government</option><option value="B">B. Register the logo as copyrighted material</option><option value="C">C. File a patent request</option><option value="D">D. Trademark the logo</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Trademark the logo</h5><h5>A business can legally protect its logo from unauthorized use by registering the logo
with the appropriate government agency. If an unauthorized entity compromises or uses the logo in
harmful, embarrassing, or negative ways, trademark protection provides the business with legal recourse.
Copyrights provide legal protection for written, musical, and artistic works. Patents are obtained to legally
protect inventions and certain types of processes for a limited amount of time. A subpoena is a formal
request issued by the court for an individual to submit evidence or serve as a witness at trial.
</h5></div><h5 id='q81'>81. Which of the following is an example of an external financial resource that a business is likely to use to
complete a major expansion project:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Owners</option><option value="B">B. Bank loan</option><option value="C">C. Employees</option><option value="D">D. Sales taxes</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: Bank loan</h5><h5>No collateral is required for this loan. Both secured and
unsecured loans are considered notes.
</h5></div><h5 id='q82'>82. Which of the following is not a factor that businesses consider when determining if a project is "do-able":</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. What the project is exactly</option><option value="B">B. How much money the stakeholders want to invest</option><option value="C">C. How long you have to complete the project</option><option value="D">D. What could happen with a similar project</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: What could happen with a similar project</h5><h5>Although projects vary, most businesses consider several
factors when determining if a particular project is "do-able." Considerations might include the project type
and scope, time constraints, and necessary resources—human, financial, and equipment. Unknown
outcomes of similar projects are not primary considerations when determining if a specific project is
"do-able."
</h5></div><h5 id='q83'>83. Which of the following questions should be answered by the purchasing function:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. How much merchandise should we buy?</option><option value="B">B. How can we inform customers of available merchandise?</option><option value="C">C. How will merchandise be shipped to us?</option><option value="D">D. How can we protect merchandise from pilferage?</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: How much merchandise should we buy?</h5><h5>Effective purchasing provides the goods, services, or materials
that businesses need in order to continue to exist. It does this by determining what to purchase, when to
purchase, how much to purchase, where to purchase, how to purchase, and when to pay for the
purchase. Distribution will determine shipment of merchandise. Promotion will determine how customers
should be informed of merchandise availability. Risk management will determine how to protect products
from pilferage.
</h5></div><h5 id='q84'>84. Which of the following employees are in a better position than others to help a business control
expenses:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Stockers</option><option value="B">B. Designers</option><option value="C">C. Buyers</option><option value="D">D. Trainers</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Buyers</h5><h5>Since employees with buying responsibilities are spending the company's money for resale items
or items to be used in the business, they are in a good position to help the business control expenses.
Buyers should take advantage of discounts, negotiate favorable shipping terms, and choose vendors who
fill orders accurately and deliver on time. Effective buyers often are able to save a business a significant
amount of money. Stockers, designers, and trainers are not in as good a position as buyers to help a
business control expenses because they do not have direct responsibility for spending the company's
money.
</h5></div><h5 id='q85'>85. Betty is hard working, but she often comes to work in clothes that are spotted or wrinkled. Which of the
following is the most likely reason why Betty has never been promoted?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Personal appearance</option><option value="B">B. Lack of skill</option><option value="C">C. Job attitude</option><option value="D">D. Interpersonal relationships</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Personal appearance</h5><h5>Employers are interested in workers who can display a positive impression of their
company to others. This is reflected in appropriate grooming, health, and dress. Betty's poorly maintained
clothing shows her lack of pride in herself and the company. Promotions go to people who not only
consistently do the job but look the part. Betty's job attitude and skills are acceptable since she is
described as hard working. Her ability to get along with others was not discussed.
</h5></div><h5 id='q86'>86. Ranking activities according to their importance is helpful in time management because it</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. ensures that you will meet project deadlines.</option><option value="B">B. identifies the order in which activities should be done.</option><option value="C">C. helps you to have a high level of self-confidence.</option><option value="D">D. reduces the number of daily activities.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: identifies the order in which activities should be done.</h5><h5>Prioritizing is determining the order for completion
of activities based on their importance. It shows which activities should be done first. This helps you to
use your limited time wisely. Prioritizing would not reduce the number of daily activities. Completing
activities after they have been prioritized and scheduled should help you to meet deadlines and raise
your level of self-confidence.
</h5></div><h5 id='q87'>87. Individuals interested in obtaining a position with a governmental agency should check the</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. union job listings.</option><option value="B">B. school bulletin boards.</option><option value="C">C. civil service postings.</option><option value="D">D. local telephone directories.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: civil service postings.</h5><h5>Civil service is one form of government employment that usually requires an
applicant to pass a competitive exam in order to be hired. Governmental agencies post lists of civil
service jobs currently available within the agencies. These listings usually are posted on bulletin boards
at the various city, county, state, and federal office buildings. School bulletin boards usually provide
information about jobs available with local businesses rather than governmental agencies. Unions only
provide information about jobs with companies that have contracts with the unions. Local telephone
directories do not contain specific job information.
</h5></div><h5 id='q88'>88. The basic purpose of writing a letter of application concerning a job opening is to</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. interest the employer in interviewing you.</option><option value="B">B. describe your job skills in detail.</option><option value="C">C. tell the employer how you found out about the job.</option><option value="D">D. provide the employer with your complete work history.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: interest the employer in interviewing you.</h5><h5>The purpose of a letter of application is to catch the interest of
the prospective employer so that you will be called in for a personal interview. Few employees are hired
without a personal interview. The letter of application should tell the employer how you found out about
the job, but that is not a basic purpose of the letter. The letter should touch on your work history and job
skills, but the complete details should be presented in your résumé.
</h5></div><h5 id='q89'>89. Essential qualifications for working in the financial-services industry include all of the following except</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. good communication skills.</option><option value="B">B. mathematical and analytical skills.</option><option value="C">C. the ability to speak a foreign language.</option><option value="D">D. the ability to work independently.

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: the ability to speak a foreign language.</h5><h5>While it might be helpful in attracting new clients, the ability to
speak a foreign language is not an essential qualification for working as a financial analyst or personal
financial advisor. Essential qualifications include mathematical and analytical skills, good communication
skills, and the ability to work independently.
</h5></div><h5 id='q90'>90. When a person has a transferable skill that an employer finds valuable, the skill is considered</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. dynamic.</option><option value="B">B. labor-intensive.</option><option value="C">C. marketable.</option><option value="D">D. unusual.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: marketable.</h5><h5>Transferable skills are abilities that people have and can use in a variety of situations or jobs.
When employers want to hire people with the transferable skills to fill job openings, the skills are valuable
to the employers and provide job seekers with potential employment opportunities, which makes the skills
marketable. Valuable, transferable skills are not always labor-intensive, dynamic, or unusual.
</h5></div><h5 id='q91'>91. Chartered Financial Analysts (CFAs) possess extensive knowledge of</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. insurance.</option><option value="B">B. banking services.</option><option value="C">C. securities and investments.</option><option value="D">D. entrepreneurship.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: securities and investments.</h5><h5>Chartered Financial Analysts (CFAs) are highly qualified investment
professionals. The CFA designation, which is recognized internationally, is offered by the CFA Institute.
To earn the CFA designation, individuals must have at least four years of professional investment work
experience, follow a strict code of ethics, join the CFA Institute, and pass a series of exams that test their
knowledge of portfolio management, types of investments, financial reporting and analysis, and
economics.
</h5></div><h5 id='q92'>92. Which of the following has proven to be an effective way to initiate a professional relationship with a
vendor:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Treating the person to a round of golf</option><option value="B">B. Giving the vendor an expensive gift</option><option value="C">C. Having salespeople talk to the vendor</option><option value="D">D. Offering jobs to people on the vendor's staff</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is A: Treating the person to a round of golf</h5><h5>Something as simple as four hours of golf gives you the
opportunity to get to know a vendor better. It gives you an opportunity to learn the person's interests and
to talk business in a casual environment. Giving the vendor an expensive gift might be construed as a
bribe. Although having salespeople talk to the vendor is helpful, it doesn't foster a professional
relationship with you. Offering jobs to people on the vendor's staff would create conflict rather than
helping to build a positive, professional relationship.
</h5></div><h5 id='q93'>93. One way to build professional relationships in the finance industry is to</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. print new business cards for distribution.</option><option value="B">B. read about industry trends.</option><option value="C">C. encourage others to discuss their finances.</option><option value="D">D. implement a referral system.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: implement a referral system.</h5><h5>A referral is a recommendation given to an individual or business by
another individual or business. For example, satisfied clients may refer their friends, family, or colleagues
to their financial planners for financial advice. This is one way that businesspeople working in the
financial industry can build professional relationships. A financial planner may implement a referral
system or program to encourage clients or associates to provide referrals. A referral system might involve
giving a free consultation or discount to a client who has provided the financial planner with a lucrative
referral. Reading about industry trends and printing new business cards are not actions that build
professional relationships. The finance professional must take action on the trends s/he has researched
and distribute the business cards to others to begin building professional relationships. Because financial
information is personal and confidential, people are usually selective with whom they share their
information.
</h5></div><h5 id='q94'>94. Michelle has acquired proof that her coworker Ted has been embezzling money from the company. If
Michelle fails to inform her employer about Ted's activities, what will likely occur?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Ted will be charged with a felony.</option><option value="B">B. The company's property insurance premium will increase.</option><option value="C">C. The government will fine the company for noncompliance.</option><option value="D">D. The company's financial risk will increase.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: The company's financial risk will increase.</h5><h5>An employee who deliberately withholds information that
negatively affects the company is acting in an unethical manner. Because Ted is stealing money from the
company, the company is experiencing financial losses. By remaining silent, Michelle is increasing the
company's financial risk because Ted may continue to take money from the company, which would
increase the company's financial losses. In some jurisdictions, embezzlement is a felony. Ted will not be
charged with a felony unless Michelle or another person tells the company's management about the
embezzlement. Property insurance premiums and noncompliance fines are not likely to be affected if
Michelle does not inform the company about Ted's embezzlement activities.
</h5></div><h5 id='q95'>95. To manage potential risks resulting from unethical conduct, many companies build internal infrastructures
that promote and enforce ethical practices. This internal infrastructure is likely to include appropriate audit
procedures, a code of conduct, and a __________ policy.</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. whistleblower</option><option value="B">B. credit</option><option value="C">C. monetary</option><option value="D">D. constituent</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: whistleblower</h5><h5>One way to manage potential risks resulting from unethical conduct is to build an internal
infrastructure that promotes and enforces ethical practices and offers incentives to behave ethically. This
internal infrastructure typically includes appropriate audit procedures, a code of conduct, a committee to
develop the code, training for employees about the code, and a whistleblower policy. A whistleblower
policy encourages and enables employees to report unethical behavior or actions without fear of negative
repercussions such as demotion or firing. A credit policy is a guideline for a business to follow in
controlling the use of payment plans that allow customers to purchase now and pay later. Monetary
policy is the government policy that determines the amount of money that will be in circulation and the
level of interest rates. Constituent policies are public policies that apply to the government or nation as a
whole. Constituent policies include national security, foreign affairs, diplomacy, etc.
</h5></div><h5 id='q96'>96. Using computer-data backup procedures on a regular basis reduces a company's level of risk because
the process</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. allows employees to use many applications.</option><option value="B">B. prevents hackers from accessing the computer system.</option><option value="C">C. detects noncompliance issues.</option><option value="D">D. saves information when computer failures occur.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: saves information when computer failures occur.</h5><h5>Back-up procedures involve saving the business's
computer information at set intervals. If the computer system is damaged or fails to operate correctly, the
back-up is available to retrieve stored information so the business can continue to operate. The back-up
reduces the risk of losing all types of information—financial, shipping, ordering, human resources, etc.
The purpose for implementing back-up procedures is not to prevent hacking, detect noncompliance, or
allow employees to access multiple applications, although there are various software applications that
specifically address those issues.
</h5></div><h5 id='q97'>97. How do many professionals reduce their risks associated with client or patient lawsuits?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Obtain professional liability insurance</option><option value="B">B. Purchase disability insurance</option><option value="C">C. Sign vendor contracts</option><option value="D">D. Develop non-compete contracts</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Obtain professional liability insurance</h5><h5>Professional liability insurance is a type of insurance that provides
financial protection for certain types of professionals, such as doctors, nurses, lawyers, architects, and
accountants. The purpose of the insurance is to reduce the risk of financial loss to the individual and to
the company for whom s/he works if a client or patient sues them. The purpose of disability insurance is
to cover people who cannot work for long periods of time due to illness or injury. Signing vendor contracts
and developing non-compete contracts do not reduce risks associated with client or patient lawsuits.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1078

FINANCE CLUSTER EXAM

1

1. Before a business and a customer can enter into a valid contract, the offer to do something in return for
payment must be</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. pay insurance premiums on a quarterly basis.</option><option value="B">B. obtain adequate property insurance.</option><option value="C">C. purchase additional disability insurance.</option><option value="D">D. borrow funds to reduce the need for insurance.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: borrow funds to reduce the need for insurance.</h5><h5>FI:059
</h5></div><h5 id='q99'>99. The primary reason that firms must take steps to control their levels of business risk is to</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. increase their visibility in the market.</option><option value="B">B. reduce the chance of financial losses.</option><option value="C">C. contribute to the well-being of society.</option><option value="D">D. increase their financial liability levels.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: reduce the chance of financial losses.</h5><h5>Because risk involves the possibility of loss, businesses must be
diligent to control their levels of risk. Businesses can experience financial losses in all areas of the
business—from product recalls and poor hiring selections to poor credit policies and workplace injuries.
Businesses can control their various risks by implementing appropriate business policies, training
employees, and acquiring adequate insurance coverage. By controlling financial risk, businesses can
limit their debt (liabilities). When businesses have low debt, they increase the potential to earn profit,
which contributes to the well-being of society. Businesses increase their visibility in the market in different
ways (positive and negative) and are not always related to controlling their levels of risk.
</h5></div><h5 id='q100'>100. What role does utility play in the implementation of the marketing concept?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. A payment method</option><option value="B">B. A satisfaction gauge</option><option value="C">C. A cost-saving tool</option><option value="D">D. A delivery process

</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: A satisfaction gauge</h5><h5>Both utility and the marketing concept consider the consumer's point of view about
a product. In the implementation of the marketing concept, utility functions as a gauge of the consumer's
satisfaction. Utility is used as a measurement tool—not as a payment method, a cost-saving tool, or a
delivery process.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Finance/Finance_2_Split_Master.js"></script></html>