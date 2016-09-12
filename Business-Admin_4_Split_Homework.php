<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Business-Admin Exam 8</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Which of the following are examples of intellectual property that a business can protect by registering
trademarks:</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Creative formulas and ideas</option><option value="B">B. Original novels and movies</option><option value="C">C. New products and processes</option><option value="D">D. Distinctive names and symbols</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: Distinctive names and symbols</h5><h5>Intellectual property is a type of intangible personal property that many
businesses own. Businesses are able to obtain protection for certain types of intellectual property through
a variety of laws. For example, a business can protect its distinctive name and symbol by registering a
trademark. A trademark is a symbol, design, or word used by a business to identify a good or service. By
registering its trademark, others are prohibited from using or copying it without the business's permission.
Original novels and movies are protected by copyrights. New products and processes, and creative
formulas and ideas may be protected with patents.
</h5></div><h5 id='q2'>2. The goal of many governmental agencies is to protect the</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. rights of business.</option><option value="B">B. barriers to trade.</option><option value="C">C. target market.</option><option value="D">D. monetary policy.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: rights of business.</h5><h5>Many governmental agencies are responsible for enforcing rules and regulations that
are intended to protect the rights of businesses. Some of these agencies help to keep the marketplace
competitive and protect businesses' trade secrets and formulas from being stolen. The agencies often
develop a strong relationship with businesses in the process of protecting their rights. Governmental
agencies do not protect the barriers to trade, the target market, or the monetary policy.
</h5></div><h5 id='q3'>3. What is one way businesspeople can improve their active listening skills?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Controlling the conversation by monitoring their own nonverbal language</option><option value="B">B. Thinking about how to respond to the speaker's message</option><option value="C">C. Concentrating on remembering what the speaker says</option><option value="D">D. Paying more attention to the speaker's nonverbal cues than to her/his tone of voice</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: Concentrating on remembering what the speaker says</h5><h5>One technique people use to improve listening
skills is to make a conscious effort to try to focus and remember what the speaker says. Staying focused
on the message and filtering out noise as much as possible improves the chances of remembering and
accurately understanding the message. Listeners may want to be aware of their own body language
(e.g., facial expressions, crossed arms) because their nonverbal cues are also being interpreted by the
speaker and can affect communication. However, monitoring one's own nonverbal cues does not
necessarily mean that the listener takes control of the conversation. Thinking about how to respond to
messages while the speaker is talking is a barrier to active listening. To decipher a message accurately,
the listener must not only pay attention to the speaker's words but also to her/his nonverbal cues and
voice tone. Nonverbal cues are not necessarily more important than tone of voice.
</h5></div><h5 id='q4'>4. Is it a legitimate response to a customer's inquiry for an employee to say that s/he doesn't know the
answer to a customer's question?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Yes, if the employee advises the customer that s/he will get the information and will respond to
the customer as soon as possible.</option><option value="B">B. Yes, if the employee doesn't know the answer to the customer's question, then the customer will
find another employee to provide the information.</option><option value="C">C. No. Customers do not respect employees who cannot answer simple questions, so it is better to
provide them with an educated guess.</option><option value="D">D. No. It is the employee's responsibility to learn every aspect of the business and to be able to
answer every question.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: Yes, if the employee advises the customer that s/he will get the information and will respond to
the customer as soon as possible.</h5><h5>Explanation not available</h5></div><h5 id='q5'>5. Identify the type of appeal used in the following persuasive message: "This new book is written by Dr.
Juliet Browne, who holds a doctorate from the Harvard School of Medicine and is the Chair of the World
Health Organization."</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Credibility</option><option value="B">B. Reason</option><option value="C">C. Emotions</option><option value="D">D. Shock value</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Credibility</h5><h5>Credibility is achieved when the audience has confidence in the persuader. In this case, Dr.
Browne's prestigious job title and degree lead the audience to believe she is a credible source. Reason
is when logic is used to persuade someone to do something. It often involves solid facts and statistics.
An emotional appeal affects the audience's feelings, such as sympathy or love. An appeal that uses
shock value is a form of an emotional appeal that includes information that the audience would find
shocking.
</h5></div><h5 id='q6'>6. What should the first section of an executive summary contain?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. An acknowledgement of the report's sponsors</option><option value="B">B. A recommended course of action</option><option value="C">C. A letter of authorization</option><option value="D">D. A statement of the report's purpose</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: A statement of the report's purpose</h5><h5>The executive summary provides an overview of the entire report
and contains the most important information included in the body of the report. The first section of the
executive summary should inform the reader about the purpose of the report—the reason the report
exists. For example, if the report addresses a specific business problem, the report should cite the
problem in the purpose statement of the executive summary. Recommendations are addressed in the
recommendations section of the report. A letter of authorization might be included in a proposal that a
business submits to a potential client. By signing the letter of authorization, the client provides approval to
proceed with an activity or project. The first section of an executive summary does not acknowledge
sponsors. Sponsors support activities, events, or projects rather than reports.
</h5></div><h5 id='q7'>7. Sharon is sending a short email progress report to the three team members she meets with regularly.
What writing style is most appropriate for this type of report?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Formal, because a title page and executive summary are used in all forms of business writing to
clearly convey a message</option><option value="B">B. Formal, because this is a business-related email and all emails about the workplace should be
formally written</option><option value="C">C. Informal, because a progress report is typically viewed by persons outside the organization</option><option value="D">D. Informal, because she knows the team members well and addresses them informally on a dayto-day basis</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: Informal, because she knows the team members well and addresses them informally on a dayto-day basis</h5><h5>Explanation not available</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1079

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. Which of the following are examples of intellectual property that a business can protect by registering
trademarks:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. logical arguments.</option><option value="B">B. recommendations.</option><option value="C">C. progress.</option><option value="D">D. external factors.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: external factors.</h5><h5>B
Current salary. Certain information is considered personal and confidential and should not be shared with
coworkers. An employee's salary is confidential information between the business and the employee and
should not be divulged to others. Organizational tips, sales policies, and vacation plans are not
considered confidential information, so it is generally okay for employees to share this information with
coworkers if they want to.
</h5></div><h5 id='q9'>9. At the beginning of a research report, the writer should include the</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. solution to the problem.</option><option value="B">B. purpose of the study.</option><option value="C">C. appendices.</option><option value="D">D. bibliography.

®
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: purpose of the study.</h5><h5>A research report is a written document that summarizes an investigation related to
a particular issue or problem. A research report contains many elements. The purpose of the study states
why the topic at hand is being investigated. The purpose of the study should be described in the report's
introduction, which is at the beginning of the report. Stating the purpose of the study is important because
it lets readers know what they are reading and why. Proposed solutions to a problem (recommendations)
are addressed near the end of the document after the research has been presented. The appendices are
segments that include supporting information, and are added to the end of a document. The bibliography
contains the list of resources from which the writer obtained information for the report. The bibliography is
generally placed at the end of the research report—after the recommendations section and before the
appendices.
</h5></div><h5 id='q10'>10. What information should employees avoid sharing with their coworkers?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Organizational tips</option><option value="B">B. Current salary</option><option value="C">C. Sales policies</option><option value="D">D. Vacation plans</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: Current salary</h5><h5>Certain information is considered personal and confidential and should not be shared with
coworkers. An employee's salary is confidential information between the business and the employee and
should not be divulged to others. Organizational tips, sales policies, and vacation plans are not
considered confidential information, so it is generally okay for employees to share this information with
coworkers if they want to.
</h5></div><h5 id='q11'>11. Learning a client's name and using it when greeting the client is a technique that promotes positive
__________ relations.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. customer</option><option value="B">B. management</option><option value="C">C. employer</option><option value="D">D. employee</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: customer</h5><h5>Recognizing customers and calling them by name makes them feel welcome and important to
the business. They appreciate the recognition and are likely to return to the business. Positive
management and employer and employee relations involve those in the work situation.
</h5></div><h5 id='q12'>12. One way that many businesses reinforce their service orientation through communication is by</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. sending a directive memo.</option><option value="B">B. distributing financial reports.</option><option value="C">C. telling their customers the truth.</option><option value="D">D. writing appealing news releases.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: telling their customers the truth.</h5><h5>A service orientation is the philosophy of providing quality service to
customers. Businesses reinforce this orientation through communication. To be effective, the
communication should be truthful and provide customers with accurate information and correct answers
to their questions. Even if the answers are not the ones that customers want, they will respect the
business for being truthful. For example, it is better to tell customers that their orders will be shipped in
five days rather than promise shipment in two days if that is not possible. Businesses do not reinforce
their service orientation through communication by distributing financial reports, sending directive
memos, or writing appealing news releases.
</h5></div><h5 id='q13'>13. What kind of utility is created when a customer purchases a new television set?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Time</option><option value="B">B. Possession</option><option value="C">C. Place</option><option value="D">D. Form</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: Possession</h5><h5>Possession utility is usefulness created when the ownership of a product is transferred from
the seller to the buyer. The ownership of the television set is transferred to the customer at the time of
purchase. Place utility is usefulness created by making goods or services available at the place where
they are needed or wanted by consumers. Form utility is usefulness created by altering or changing the
form or shape of a good to make it more useful to consumers. Time utility is usefulness created when
products are made available at the time they are needed or wanted by consumers.
</h5></div><h5 id='q14'>14. Manufacturers try to produce goods in response to</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. producer demand.</option><option value="B">B. product utility.
</option><option value="C">C. consumer demand.</option><option value="D">D. environmental factors.
</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: consumer demand.</h5><h5>When demand for a product is high, production is increased to ensure that adequate
quantities are available for sale. When demand is low, production is cut back to prevent the possibility of
loss from surplus products that cannot be sold at prices high enough to cover the costs of production.
The utility, or usefulness, of a product helps to create consumer demand for that product. Demand may,
or may not, be affected by factors in the environment.
</h5></div><h5 id='q15'>15. Businesses can exhibit social responsibility by</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. maximizing their profits.</option><option value="B">B. paying income taxes.
</option><option value="C">C. giving political donations.</option><option value="D">D. producing low-priced products.
</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: maximizing their profits.</h5><h5>A business that maximizes its profits grows and is able to provide profits to
stockholders, benefits to its employees, and jobs for more workers. To do this, the business must offer
quality products at competitive prices rather than trying to produce low-priced products. Businesses are
required by law to pay income tax. Their political donations must also follow legal guidelines since such
gifts are more likely to be given to benefit the business than in an effort to be socially responsible.
</h5></div><h5 id='q16'>16. Which of the following is most likely to be a result of competition:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Reduction in product quality</option><option value="B">B. Development of new products</option><option value="C">C. High prices</option><option value="D">D. More monopolies</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: Development of new products</h5><h5>Competition encourages businesses to develop new products in order to
meet consumers' needs. Businesses feel that the company which best satisfies consumers will be the
most successful company. Competition helps to control prices because businesses must keep prices in
line with production costs in order to be competitive. Businesses must also maintain or improve product
quality to be competitive. A monopoly exists when a market is controlled by one supplier, and there are
no substitute goods or services readily available. No competition exists in a true monopoly.
</h5></div><h5 id='q17'>17. Businesses' profits are at a 30-year low, but consumer savings are at an all-time high. For more than a
year, unemployment has also been at record levels. What is the state of the economy?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Expansion</option><option value="B">B. Depression</option><option value="C">C. Recession</option><option value="D">D. Recovery</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: Depression</h5><h5>In an economic depression, consumers often choose to save their incomes due to
uncertainty about the future. Many of them also lose their jobs, so there is more incentive to save than to
spend. In a period of economic expansion, consumers spend more and save less because they are
optimistic about the future. During times of economic recession, consumers are inclined to save more
and spend less; however, it is for a shorter time period than an economic depression. In an economic
recovery, consumers begin to spend again because there is optimism about the future of the economy.
</h5></div><h5 id='q18'>18. Apple produces its MacIntosh computers in China. In calculating GDP, these computers would be part of</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. community revitalization.</option><option value="B">B. the GDP for China.</option><option value="C">C. the GDP for the U.S.</option><option value="D">D. government purchases.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: the GDP for China.</h5><h5>MacIntosh computers produced in China would be part of the GDP for China, not for
the U.S., because their production occurred outside the boundaries of the U.S. Government purchases
include everything purchased by local, state, and federal governments. The manufacturing of computers
in China contributes to China's economy but does not automatically create improvements to the
community known as community revitalization.
</h5></div><h5 id='q19'>19. The United States' business culture tends to embrace self-reliance and personal accomplishment, which
are characteristics of</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. an individualist society.</option><option value="B">B. the concept of collectivism.</option><option value="C">C. a long-term orientation.</option><option value="D">D. a team-oriented mindset.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: an individualist society.</h5><h5>An individualist society is one in which group ties are loose and everyone is
expected to take care of himself/herself. When a person takes care of herself/himself, s/he is being selfreliant. Because self-reliant people are independent, they take pride in accomplishing goals on their own.
Collectivism embraces interdependence, group affiliation, and team orientation. A long-term oriented
society focuses on future rewards and values actions such as persistence.
</h5></div><h5 id='q20'>20. Mr. Fox, a Canadian business owner, wanted to buy franchise rights to Frau Dietrich's Strudel chain,
which is headquartered in Hanover, Germany. Mr. Fox was late arriving for the meeting, which is very
insulting to Germans. Unfortunately, Mr. Fox did not get the deal because he failed to recognize the
importance of __________ to German businesspeople.</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. time</option><option value="B">B. space</option><option value="C">C. achievement</option><option value="D">D. education</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: time</h5><h5>The concept of time is an important consideration when doing business with foreigners. In some
cultures (e.g., Germany), punctuality is very important; therefore, it is important to be on time to any
meetings or social gatherings. In other cultures, time is less important or is viewed differently. For
example, in some countries, businesspeople will keep people waiting while they finish another activity, so
that s/he can provide the visitor with his/her undivided attention. This action may appear rude to people in
some cultures, while it is viewed as a courtesy in other cultures. Spatial issues refer to the amount of
personal space (close, distant) different cultures allow during interpersonal interaction. Achievement is
the level to which a person reaches his/her personal goals. Education is the type and level of training or
schooling that a person has obtained.
</h5></div><h5 id='q21'>21. To make a good impression and communicate an attitude of success and professionalism, foreign
businesspeople should wear well-made, conservative suits when they attend Argentine business
meetings. This is an issue related to</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. business management style.</option><option value="B">B. gestures and problem solving.</option><option value="C">C. proper table manners.</option><option value="D">D. appropriate personal appearance.

</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: appropriate personal appearance.

</h5><h5>Explanation not available</h5></div><h5 id='q22'>22. Kevin is a Scottish businessperson who wanted to learn some key Japanese phrases to use during his
meeting with Mr. Suzuki, the owner of an electronics company in Tokyo. When he greeted Mr. Suzuki for
the first time, Kevin wanted to say in Japanese, "Hello, Mr. Suzuki. I am honored to meet you." But
instead, Kevin bowed, smiled, and said in Japanese, "Hello, Mr. Suzuki. I would like you to kick me." Of
course, Mr. Suzuki was confused and didn't know how to respond. This situation is an example of a
problem that relates to</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. attitudes toward change.</option><option value="B">B. nonverbal cues.</option><option value="C">C. differences in work ethic.</option><option value="D">D. language barriers.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: language barriers.</h5><h5>Misusing and mispronouncing words in another language can create a lot of
misunderstandings and be very embarrassing in a business situation. When language is an issue, it is
often best to hire a professional translator for meetings with foreign businesspeople. Nonverbal cues
(body language) are gestures, facial expressions, and the way people carry their bodies. The example
does not provide enough information to determine if Kevin and Mr. Suzuki have different work ethics or if
they have attitude problems related to change.
</h5></div><h5 id='q23'>23. Although gift-giving practices often help establish positive Chinese business relationships, foreigners
should avoid giving Chinese businesspeople expensive gifts, which others may perceive as</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. insincere.</option><option value="B">B. bribery.</option><option value="C">C. industrious.</option><option value="D">D. collaboration.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: bribery.</h5><h5>Gift giving practices vary greatly among countries. In some countries, it is customary, or
expected, to give gifts in business situations. In China, gift giving is a ritual that promotes a sincere desire
to build positive, collaborative business relationships. However, foreigners should not give Chinese
businesspeople overly expensive or extravagant gifts, which may unintentionally suggest a bribe. Bribery
is an illegal payment intended to secure business or products in return. Industrious means hardworking.
</h5></div><h5 id='q24'>24. In many Middle-Eastern countries, showing the bottom of your shoe or foot is an offensive gesture, so it
is important for foreign businesspeople to</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. dress appropriately for the occasion.</option><option value="B">B. monitor their behavior.</option><option value="C">C. verify language translations.</option><option value="D">D. understand the importance of punctuality.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: monitor their behavior.</h5><h5>A gesture, facial expression, or action may be perfectly acceptable in one culture
but offensive in another culture. Therefore, a businessperson should become familiar with a foreign
country's customs, attitudes, and codes of acceptable conduct before important business meetings, so
s/he does not behave in an offensive manner. Although it is important to dress appropriately, verify
language translations, and understand the country's attitude of punctuality (time), these actions do not
relate to the nonverbal cues or body language presented in the example.
</h5></div><h5 id='q25'>25. When Andrea learned that her work team was meeting with a group of Saudi Arabian businesspeople,
she researched the culture and discovered that Saudi Arabian woman do not participate in business
activities. She also read some articles that contained tips to ensure that she dressed appropriately and
did not do anything to offend the Saudi Arabian men during the meeting. This situation illustrates a
cultural difference related to</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. cognitive intelligence.</option><option value="B">B. age.</option><option value="C">C. negotiation style.</option><option value="D">D. gender.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: gender.</h5><h5>Gender refers to an individual's sex—male or female. Different cultures have different
expectations and rules in terms of gender roles. In Saudi Arabia, men play a dominate role in business
situations, and woman take on more passive roles. By doing research about the Saudi Arabian culture,
Andrea learned ways to adapt to the Saudi Arabian culture during the meeting. The situation does not
illustrate cultural differences related to age, negotiation style, or cognitive intelligence.
</h5></div><h5 id='q26'>26. A responsible person who accepts a job with a company is giving the business a</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. proposal.</option><option value="B">B. challenge.</option><option value="C">C. promise.</option><option value="D">D. guarantee.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: promise.</h5><h5>The employee is, in effect, promising to do a specific job for the employer to the best of his/her
ability at an agreed-upon salary. There is no guarantee that this will happen, just an understanding. This
should not present a challenge to the employer. A proposal is a suggestion or an idea presented for
consideration.
</h5></div><h5 id='q27'>27. Which of the following is an example of an employee who is accepting responsibility for his/her actions:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Pete informed the team leader that Brenda's carelessness, rather than his own, was the reason
for the inconsistencies in the group's project report.</option><option value="B">B. Cynthia admitted to her supervisor about the billing mistake that she made on the Andrew's
account.</option><option value="C">C. Emily realized that she forgot to lock the warehouse door on the night that the equipment was
stolen, and she didn't tell anyone.</option><option value="D">D. Larry decided that he would require Bob to make the decision, so Bob would be blamed if
something went wrong.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: Cynthia admitted to her supervisor about the billing mistake that she made on the Andrew's
account.</h5><h5>Explanation not available</h5></div><h5 id='q28'>28. Planning ahead and estimating the time it will take to complete your tasks will help you to</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. learn how to procrastinate.</option><option value="B">B. manage your work commitments effectively.</option><option value="C">C. improve your technical skills.</option><option value="D">D. reduce your workload.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: manage your work commitments effectively.</h5><h5>By planning ahead and determining how long it will take you
to complete your tasks, you can better manage your commitments. Planning your work helps you to
avoid scheduling too many activities that are close together, which may cause you problems in
maintaining commitments. Planning your workload also reduces procrastination, which is putting tasks off
until the last minute. Training and practice, rather than planning ahead, will help you to improve your
technical skills. Planning ahead and estimating the time it will take to complete various tasks will not
reduce your workload, but will help you work more efficiently.
</h5></div><h5 id='q29'>29. Two salespeople show little interest in their own activities as well as the activities of others. What type of
attitude is being exhibited by the salespeople?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Positive</option><option value="B">B. Constructive</option><option value="C">C. Indifferent</option><option value="D">D. Pessimistic</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: Indifferent</h5><h5>The salespeople are displaying indifference or a lack of interest. Negative people are often
indifferent and show little interest in their own activities or the activities of others. Salespeople with a
positive attitude would be interested in their jobs and interested in helping customers. A pessimistic
attitude is a gloomy outlook—expecting the worst. Salespeople who have a constructive attitude are
helpful and useful.
</h5></div><h5 id='q30'>30. The main reason many individuals resist change is</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. self-confidence.</option><option value="B">B. decisiveness.
</option><option value="C">C. discipline.</option><option value="D">D. fear.

</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: fear.

</h5><h5>Explanation not available</h5></div><h5 id='q31'>31. We all have the right to express ourselves as long as we do not __________ others' rights.</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. respect</option><option value="B">B. violate</option><option value="C">C. support</option><option value="D">D. influence</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: violate</h5><h5>In a free society, we have the right to express our thoughts, feelings, and opinions in ways which
do not infringe upon or violate the rights of others. We should support and respect the rights of others,
but we may not be able to influence them.
</h5></div><h5 id='q32'>32. Consensus building creates high-quality solutions because</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. everyone has a unique perspective.</option><option value="B">B. only a few ideas are considered.</option><option value="C">C. it is very time-consuming.</option><option value="D">D. some people have more power than others.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: everyone has a unique perspective.</h5><h5>Consensus building creates high-quality solutions because every
group member brings a unique perspective to the table. This mix of ideas and expertise helps the group
to come up with the best solutions and decisions possible. Consensus building can be very timeconsuming, but this is not why it creates high-quality solutions. In consensus building, the group should
consider as many different ideas as possible. Consensus means that everyone has equal power.
</h5></div><h5 id='q33'>33. Taking responsibility for your team's success or failure in achieving the vision is part of a team leader's</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. establishing good working relationships.</option><option value="B">B. being an example.</option><option value="C">C. being enthusiastic.</option><option value="D">D. being a good listener.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: being an example.</h5><h5>Taking responsibility for your team's success or failure as it works toward the vision is
being an example and a sure sign of solid leadership. This responsibility does not necessarily relate to
working relationships, demonstrating enthusiasm, or being a good listener.
</h5></div><h5 id='q34'>34. Persons who are conceited and domineering because they feel they are better than others have a(n)
__________ attitude.</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. defeatist</option><option value="B">B. mature</option><option value="C">C. inferior</option><option value="D">D. superior</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: superior</h5><h5>Persons with this attitude are often inconsiderate, which causes poor working relationships with
others. Mature persons respect themselves and others. Persons with feelings of inferiority think others
are better than themselves. A defeatist is a person with a negative attitude.
</h5></div><h5 id='q35'>35. Many people pay for meals and lodging on credit through a(n)</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. unsecured loan.</option><option value="B">B. installment credit account.</option><option value="C">C. budget credit account.</option><option value="D">D. travel and entertainment card.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: travel and entertainment card.</h5><h5>These cards are especially popular with travelers who do not wish to
carry large amounts of cash. Customers must have an excellent credit rating to obtain a card and are
billed monthly. An unsecured loan is an amount of money borrowed by an individual or business by
signing a note promising to repay the loan. An installment credit account is a credit account set up to
handle one total amount of credit that is to be paid off in regular installments. Budget credit accounts are
a form of short-term credit with a payment due every 30 days.
</h5></div><h5 id='q36'>36. Lyla is applying for a loan to buy a house for the first time. Which of the following should she be certain to
do when applying for the loan:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Read all paperwork carefully</option><option value="B">B. Overstate her assets</option><option value="C">C. Sign blank documents</option><option value="D">D. Inaccurately report her debts</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is A: Read all paperwork carefully</h5><h5>Lyla should make sure she has read and understood all of the paperwork
associated with the loan before signing it. She should be up front about her financial situation, so she
should not inaccurately report her debts or overstate her assets. She should never sign a blank
document, as doing so can lead to fraud.
</h5></div><h5 id='q37'>37. Jane can determine her credit rating by</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. obtaining a report from a credit bureau.</option><option value="B">B. adding together her credit-card balances.
</option><option value="C">C. asking her employer for the information.</option><option value="D">D. applying for an account with a credit union.
</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: obtaining a report from a credit bureau.</h5><h5>By reviewing her credit-history reports, Jane can determine if
there are any problems or discrepancies with her credit and work to get them resolved. Individuals and
businesses can obtain credit reports from an authorized credit bureau. The credit report contains a credit
rating, which "scores" the individual's ability or willingness to pay previous loans. Individuals often
validate their credit history before applying for additional credit to make sure that the information in the
history is accurate. Businesses review a person's credit report to make decisions about extending credit
to him/her. Jane cannot obtain her credit rating by adding together her credit-card balances or by
applying for an account with a credit union. A credit union is a financial cooperative set up to provide
savings and credit services to its members—usually within a business or labor union. Although an
employer may obtain an employee's credit report from an authorized credit bureau, the employer may not
have the most current information on file.
</h5></div><h5 id='q38'>38. A decrease in the availability of raw materials is an economic risk that may result in __________ for a
business.</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. high interest rates</option><option value="B">B. increased regulation</option><option value="C">C. financial loss</option><option value="D">D. lower turnover</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial loss</h5><h5>A decrease in the availability of raw materials, supplies, or products needed by a business
are economic risks that can result in financial loss for the business. For example, a decrease in the
availability of petroleum can cause business's transportation costs to skyrocket. High interest rates is a
business condition that can create economic risks. The involvement of government in the regulation of
business may cause financial loss for some businesses. High turnover, rather than low turnover, is an
economic risk.
</h5></div><h5 id='q39'>39. Why would a business's stockholders be interested in the business's accounting records?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. To know when to send in their next dividend</option><option value="B">B. To find out what benefits employees receive</option><option value="C">C. To find out whether the business plans changes</option><option value="D">D. To know whether they have made a good investment</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: To know whether they have made a good investment</h5><h5>Individuals who have invested their money in a
business are its stockholders, and they are interested in the profits shown on the firm's accounting
reports. This information tells them whether they have made a good investment or should change their
investment to another company. Stockholders usually receive dividends from the business. Accounting
reports do not show planned changes or employee benefits.
</h5></div><h5 id='q40'>40. Which of the following is a characteristic of a profit-and-loss statement:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Shows the owner's financial position</option><option value="B">B. Is the same as a balance sheet</option><option value="C">C. Summarizes expenses and revenue from sales</option><option value="D">D. Lists assets and liabilities</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: Summarizes expenses and revenue from sales</h5><h5>A profit-and-loss statement is a business's financial
picture that lists all revenue and expenses for a certain time period. A profit-and-loss statement is not the
same as a balance sheet. Characteristics of a balance sheet include listing assets and liabilities and
showing the owner's financial position.
</h5></div><h5 id='q41'>41. Which of the following is a measure of how well a business generates cash flow:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Accounts receivable</option><option value="B">B. Return on capital</option><option value="C">C. Capital structure</option><option value="D">D. Accounts payable</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Return on capital</h5><h5>Return on capital is a measure of how well a business generates cash flow. It is a key
component of managing working capital. Accounts receivable refers to money owed to the business by
others. Capital structure refers to a business's mix of financing. Accounts payable refers to the money the
business owes to others.
</h5></div><h5 id='q42'>42. Which of the following is an example of helpful, printed information that businesses often give new
employees during orientation:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Company handbook</option><option value="B">B. Annual report</option><option value="C">C. Application form</option><option value="D">D. Promotional brochure

</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: Company handbook</h5><h5>Many businesses develop company handbooks that they give to new employees
during the orientation process. The handbooks usually contain information about company policies and
procedures and employee benefits and responsibilities. The information in the handbook answers many
of the questions that new employees often have about the company. Annual reports and promotional
brochures do not contain the type of business information that is useful to new employees. Application
forms are completed before employees are hired and begin the orientation process.
</h5></div><h5 id='q43'>43. During an executive staff meeting, the company's president stated, “Samari Enterprises experienced a
three percent increase during the first quarter and a five percent increase during the second quarter of
this fiscal year.” The company's president is providing the group with</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. speculation.</option><option value="B">B. tacit knowledge.</option><option value="C">C. personal opinion.</option><option value="D">D. explicit knowledge.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: explicit knowledge.</h5><h5>Explicit knowledge is knowledge or information consisting of words, numbers, codes,
processes, and formulas that are easily stored, shared, and quantified (measured). The president of the
company was communicating specific, measurable, numerical data. Tacit knowledge is knowledge
consisting of personal opinions, experiences, expertise, or understanding that is not easily articulated,
stored, or quantified. Speculation is hearsay or rumor.
</h5></div><h5 id='q44'>44. Because Bob was angry that Laurie received the promotion that he wanted, Bob decided not to tell her
about a procedure that he uses to bypass a specific problem with a computer program—a step that
would save Laurie and other employees a lot of time. This is an ethical issue that is related to</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. misleading facts.</option><option value="B">B. unlawful behavior.</option><option value="C">C. embezzlement.</option><option value="D">D. withholding information.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: withholding information.</h5><h5>By providing logical arguments, the writer is
more likely to persuade the audience to accept the conclusions. An analytical report may address
external factors or the progress of an action, but including this type of information depends on the nature
of the report's topic.
</h5></div><h5 id='q45'>45. Which of the following is an effective technological tool for businesspeople to use to share explicit
knowledge simultaneously with coworkers who are in different geographic locations:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Filters</option><option value="B">B. Webcam</option><option value="C">C. Hyperlinks</option><option value="D">D. Kiosk</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: Webcam</h5><h5>A webcam is a video camera that attaches to a personal computer and transmits real-time
images through the Internet. Webcams are tools that many businesses use to share information and
knowledge through videoconferences with people who are located in different geographic locations.
Filters are computer programs that block out unwanted information (e.g., spam). A hyperlink is a
component of an electronic document that can be clicked on in order to jump to another place within the
document or into a different document. A kiosk is a stand-alone structure located in public places and is
designed to provide information and sell products.
</h5></div><h5 id='q46'>46. What is a Web-based tool that a business can use that provides its employees with the ability to share
tacit knowledge from remote locations?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Codification</option><option value="B">B. Wiki</option><option value="C">C. Spreadsheet</option><option value="D">D. Intranet</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: Wiki</h5><h5>Tacit knowledge is personal opinions, experiences, expertise, or understanding that is not easily
articulated, stored, or quantified. Tacit knowledge is an employee's personal "know-how" that affects the
ways in which s/he does his/her job. Businesses often struggle to capture their employees' tacit
knowledge, which can be helpful in achieving or exceeding the businesses' goals. Some businesses are
using Wikis to facilitate the sharing of information among employees in remote locations. A Wiki
application is a Web-based networking tool that allows individuals or groups to store and share their
expertise, resources, and ideas. Codification is the process of assigning a means of measurement to
something. Businesses use spreadsheets to calculate and summarize numerical data. An Intranet is a
business's internal computer network.
</h5></div><h5 id='q47'>47. To reduce the risk of employees sharing trade secrets with industry rivals, businesses might require their
employees to</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. sign a nondisclosure agreement.</option><option value="B">B. develop a mission statement.</option><option value="C">C. analyze annual financial reports.</option><option value="D">D. complete standard personnel forms.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: sign a nondisclosure agreement.</h5><h5>A nondisclosure agreement is a contract between an employer and an
employee that states that the employee will not reveal the employer's trade secrets (e.g., formula, recipe,
manufacturing technique) to future employers for whom the employee might work. Nondisclosure
agreements provide businesses with legal protection if a competitor attempts to use the information for
financial gain or benefit. Developing a mission statement, analyzing annual financial reports, and
completing standard personnel forms are not actions that will reduce the risk of employees sharing
confidential knowledge with industry rivals.
</h5></div><h5 id='q48'>48. A manager watches an employee perform a work activity and writes notes that describe the process. This
is an example of capturing knowledge by</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. interrogation.</option><option value="B">B. rationalization.</option><option value="C">C. observation.</option><option value="D">D. imitation.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: observation.</h5><h5>Observation involves obtaining information by watching others perform a task or activity. A
business can obtain knowledge about work-task processes by observing employees performing their
jobs. The manager is not rationalizing or imitating the employee's behavior. There is not sufficient
information provided to determine if the manager is asking questions or interrogating the employee.
</h5></div><h5 id='q49'>49. Which of the following marketing functions often helps a business create an image:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Promotion</option><option value="B">B. Advertising</option><option value="C">C. Public relations</option><option value="D">D. Selling</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: Promotion</h5><h5>The promotion function helps to create an image or impression of a business. For example, a
business might want to change its image to attract a different or expanded target market. Coordinated
promotional activities will get the message across. Advertising and public relations are promotional
methods that businesses might use to create an image. Selling involves determining client needs and
wants and responding through planned, personalized communication that influences purchase decisions
and enhances future business opportunities.
</h5></div><h5 id='q50'>50. What is an important question that all businesses should answer about their ethical behavior in managing
their customers' information?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Where can we obtain general demographic information about untapped market segments?</option><option value="B">B. What information do we need to obtain about our customers to determine their ability to pay?</option><option value="C">C. What research method will provide the most comprehensive results about our competitors'
activities?</option><option value="D">D. How do we obtain information about our customers in ways that do not violate their privacy?</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: How do we obtain information about our customers in ways that do not violate their privacy?</h5><h5>Businesses
can track their customers' purchasing habits in many ways—from Internet surfing activities to point of
sale data. Businesses must carefully weigh how to obtain, store, release, and use this information to
protect their customers' right to privacy. Society values this right, and if it is breached (e.g., selling
customer lists to third parties without customer authorization), customers may go to competitors to
purchase goods and services. When developing credit policies, businesses establish criteria and must
identify the information they need to determine their customers' ability to pay. Research methods used in
a competitive analysis and sources of primary and secondary research are not directly associated with
the business's ethics and its customer-related data.
</h5></div><h5 id='q51'>51. Many presentation software programs allow users to</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. copyright their graphics.</option><option value="B">B. include voice narration.
</option><option value="C">C. calculate numerical data.</option><option value="D">D. analyze organizational progress.
</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: include voice narration.
</h5><h5>Explanation not available</h5></div><h5 id='q52'>52. Which of the following is a standard function of most spreadsheet software programs:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Managing database files</option><option value="B">B. Preparing promotional brochures</option><option value="C">C. Performing financial calculations</option><option value="D">D. Creating slide presentations</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Performing financial calculations</h5><h5>Spreadsheet software enables businesses to perform accounting,
financial, and other mathematical functions. A user can enter numerical information in rows and columns,
and the software will perform various calculations or analyses. For example, spreadsheet programs can
calculate sales forecasts and develop budget projections. Presentation software is used to create slide
presentations. Desktop publishing software is used to prepare promotional brochures. Database software
is used to manage database files.
</h5></div><h5 id='q53'>53. Haley has completed a new page to add to her employer's existing web site. What does she need to do
next?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Upload the page to the web server</option><option value="B">B. Obtain a domain name</option><option value="C">C. Select an Internet service provider</option><option value="D">D. Add the page to the internal network

</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: Upload the page to the web server</h5><h5>After creating the page using a web site design program, the user
needs to upload the page to the web server, which is where all of the business's web pages are stored.
Because Haley is working with an existing web site, she already has a domain name or web address for
the site. The Internet service provider may offer web hosting services. An intranet is an internal network
of computers within an organization.
</h5></div><h5 id='q54'>54. The ONT Company is a very large firm that handles many types of projects. What type of projectmanagement software program would be the best choice for ONT to use?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Costing</option><option value="B">B. Scheduling</option><option value="C">C. Corporate-level</option><option value="D">D. Individual-level</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: Corporate-level</h5><h5>Large businesses often have many projects occurring at the same time. In some
situations, different projects need to access the same data. Corporate-level project-management
software is a powerful tool because it provides the ability to track hundreds of tasks and several projects
at one time. Corporate-level project-management software typically provides cost accounting, resource
leveling, "what-if" analyses, charting, and reporting capabilities. Some corporate-level software programs
allow businesses to select other software options to accommodate their specific needs. Single-project
programs are used for individual (single) projects. Scheduling software has fewer options than corporatelevel programs, and contains primarily scheduling, Gnatt charts, and presentation capabilities. Costing is
a software capability rather than a type of project-management software program.
</h5></div><h5 id='q55'>55. Why is it important for businesses to maintain records about the quantities and types of products that
customers are purchasing?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. To develop new displays</option><option value="B">B. To forecast future sales</option><option value="C">C. To plan credit programs</option><option value="D">D. To organize special events</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: To forecast future sales</h5><h5>Businesses maintain a variety of records about the quantities and types of
products that customers are purchasing. These records are usually known as sales records. By analyzing
past sales records, businesses can determine what customers are buying, when they are buying, and
how much they are buying. This helps a business forecast future sales so it can be prepared to offer the
products that customers want. Businesses do not maintain records about what customers are purchasing
to develop new displays, plan credit programs, or organize special events.
</h5></div><h5 id='q56'>56. What type of internal business record will help a firm determine the status of its supplies?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. SWOT analysis</option><option value="B">B. Income statement</option><option value="C">C. Inventory report</option><option value="D">D. Credit report</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inventory report</h5><h5>The first section of the
executive summary should inform the reader about the purpose of the report—the reason the report
exists. For example, if the report addresses a specific business problem, the report should cite the
problem in the purpose statement of the executive summary. Recommendations are addressed in the
recommendations section of the report. A letter of authorization might be included in a proposal that a
business submits to a potential client. By signing the letter of authorization, the client provides approval to
proceed with an activity or project. The first section of an executive summary does not acknowledge
sponsors. Sponsors support activities, events, or projects rather than reports.
</h5></div><h5 id='q57'>57. Which of the following is unethical behavior in the operations function of business:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Sharing a vendor's competitive bid information with another supplier</option><option value="B">B. Using negotiating techniques to encourage a vendor to make concessions</option><option value="C">C. Developing scorecards to evaluate suppliers' performance levels</option><option value="D">D. Setting deadlines for vendors to submit their bids</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sharing a vendor's competitive bid information with another supplier</h5><h5>It is unfair for a business to share a
vendor's bid information with another supplier because it provides one supplier with an advantage over
the other. Using negotiating techniques to obtain concessions, developing scorecards to evaluate
suppliers' performance levels, and setting deadlines for bids are ethical activities.
</h5></div><h5 id='q58'>58. The Maxwell Manufacturing Company regularly inspects its production equipment and conducts regular
maintenance activities to ensure that the equipment works correctly. By conducting these activities,
Maxwell is complying with laws that relate to</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. discrimination.</option><option value="B">B. workplace safety.</option><option value="C">C. chemical emissions.</option><option value="D">D. technical security.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: workplace safety.</h5><h5>Governments develop regulations to ensure the safety of workers. Workers often
operate dangerous equipment, so businesses must ensure that the equipment is maintained and safe to
use to reduce the risk of injury. Some government regulations require that businesses have equipment
inspected on a regular basis by a government agent or independent entity to ensure that the business is
complying with safety regulations. Environmental laws regulate chemical emissions. Employment laws
regulate discrimination in the workplace. Computer and cyberspace laws regulate technical security.
</h5></div><h5 id='q59'>59. When should an individual consider administering first aid to the victim in an accident situation?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. When the law requires it</option><option value="B">B. When company policy requires it</option><option value="C">C. When immediate treatment is essential</option><option value="D">D. When the state has a Good Samaritan Law</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is C: When immediate treatment is essential</h5><h5>If an accident is serious, and the victim's life is threatened, first
aid should be administered until medical help arrives. Neither the business nor the law can require
anyone to administer first aid. Good Samaritan Laws protect individuals from liability when administering
first aid, but they should not be the determining factor in deciding whether first aid should be
administered.
</h5></div><h5 id='q60'>60. Why is it important for business employees to follow established security procedures?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. To avoid the risk of accidents</option><option value="B">B. To create a pleasant facility</option><option value="C">C. To reduce the possibility of loss</option><option value="D">D. To develop a healthy environment</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is C: To reduce the possibility of loss</h5><h5>Businesses establish security procedures, which are activities that
employees should follow to protect the business from loss. These security procedures are intended to
reduce the risk of robbery, assault, and other violent crimes, all of which might result in a loss for the
business. For example, robbery usually results in financial loss. Employees do not follow established
security procedures to create a pleasant facility, avoid the risk of accidents, or develop a healthy
environment.
</h5></div><h5 id='q61'>61. Which of the following activities should be an employee's top priority:</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Preparing a purchase order that needs to be faxed to the vendor in two days</option><option value="B">B. Completing a status report that takes 45 minutes to prepare for a meeting that will occur in an
hour</option><option value="C">C. Making reservations at a local restaurant for a business luncheon that is going to be held in two
weeks</option><option value="D">D. Photocopying a three-page document for a meeting with a customer that is scheduled to occur
five hours from now</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Completing a status report that takes 45 minutes to prepare for a meeting that will occur in an
hour</h5><h5>Explanation not available</h5></div><h5 id='q62'>62. Which of the following situations is an example of employees coordinating their work efforts:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Sarah calls a vendor to verify the delivery date of an order, while Shelley sells products.</option><option value="B">B. Bob unpacks a shipment and places the items on shelves in the warehouse.</option><option value="C">C. Gavin orders inventory based on the forecast that Madelyn has prepared for him.</option><option value="D">D. Ed reviews his monthly financial report to verify his calculations.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Gavin orders inventory based on the forecast that Madelyn has prepared for him.</h5><h5>Gavin does not know
the type and amount of inventory to order until Madelyn provides him with the forecast that she has
prepared. Therefore, Gavin and Madelyn's work activities are interdependent—they must work together
and coordinate their work efforts to achieve the business's goals. Unpacking a shipment and placing the
items on shelves and reviewing a monthly financial report are not situations that indicate employees are
coordinating their work efforts. Sarah and Shelley are working independently rather than coordinating
their efforts.
</h5></div><h5 id='q63'>63. Maddie and her project team are developing a landscape design plan for a new office complex. Midway
through the project, the project client tells Maddie that the team's plans must include a walking/jogging
trail. Even though this is the first time that the client has mentioned this idea to anyone on the team,
Maddie agrees to add the trail to the design plan. This is an example of</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. scope creep.</option><option value="B">B. backing in.</option><option value="C">C. fast tracking.</option><option value="D">D. micromanagement.

</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: scope creep.</h5><h5>Scope creep occurs whenever the requirements for a project change or grow. In this case,
a walking/jogging trail was not one of the original requirements of the landscape design plan. It is a
requirement that the client is adding midway through the project. Backing in is a scheduling process that
involves working your way through a project from the end to the beginning to identify activities that must
be completed, along with their associated timeframes. Fast tracking is a scheduling process that involves
performing more than one activity concurrently to get the project done in a shorter amount of time.
Micromanagement occurs when an individual unnecessarily involves himself/herself in the work of others
that s/he has asked the others to complete.
</h5></div><h5 id='q64'>64. Jane owns a small business and would order merchandise for her business every two weeks directly
from a</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. craft union.</option><option value="B">B. trade mission.</option><option value="C">C. retailer.</option><option value="D">D. vendor.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: vendor.</h5><h5>A vendor is a supplier of goods or services. Jane orders her goods from a vendor. Jane is a type
of business known as a retailer who purchases merchandise from manufacturers or wholesalers and
resells it in small quantities to consumers. A trade mission is a group of volunteer businesspeople
sponsored by a government to inform exporters about foreign markets. A craft union is a union made up
of workers with a particular skill.
</h5></div><h5 id='q65'>65. To maintain favorable relationships with vendors, a business must</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. develop a decentralized buying structure.</option><option value="B">B. use aggressive negotiation tactics.</option><option value="C">C. implement return policies.</option><option value="D">D. have a cooperative orientation.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is D: have a cooperative orientation.</h5><h5>When a business has a cooperative orientation, it is willing to work with
other businesses to achieve their mutual goals. Having a cooperative orientation involves a willingness to
share relevant information, to negotiate fairly (assertively), and to be trustworthy and reliable. Using
aggressive negotiation tactics will likely not maintain favorable relationships with vendors. In fact, this
action is likely to create conflict. A business does not need to use a decentralized buying structure to
maintain favorable relationships with vendors. Insufficient information is provided to determine whether
the return policies will help or hinder relationships with vendors.
</h5></div><h5 id='q66'>66. A business with a cooperative orientation tends to view its relationships with vendors as</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. obligations.</option><option value="B">B. partnerships.</option><option value="C">C. long-term rivalries.</option><option value="D">D. short-term transactions.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: partnerships.</h5><h5>A business that has a cooperative orientation is willing to work with its vendors to achieve
their mutual goals. Having a cooperative orientation involves a willingness to share relevant information
and being fair, trustworthy, and reliable. When these circumstances exist, the buyer-seller relationship is
similar to a long-term partnership. Viewing vendors as obligations or rivals may create conflict rather
than build positive working relationships.
</h5></div><h5 id='q67'>67. On what type of purchase order are you most likely to find the following information:
This order covers the MRE Manufacturing Company's purchase of ½" rubber gaskets, Model # 62376
metal washers, and ¾" PVC piping beginning April 10, 2012 through March 31, 2013. The prices stated
in your quotation dated January 31, 2010 are effective until March 31, 2013.</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Custom</option><option value="B">B. Blanket</option><option value="C">C. Service</option><option value="D">D. Referral</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: Blanket</h5><h5>A blanket order is an order that covers all or part of a business's product requirements for a
certain period of time. A special order is a request for a custom product or a product that a vendor does
not normally carry in stock. A service order is a request for service, such as an equipment repair or
installation. A referral is a recommendation rather than a type of purchase order.
</h5></div><h5 id='q68'>68. Which of the following are examples of raw materials that a business might keep on hand for production:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Leather, bolts, stapler, and ore</option><option value="B">B. Grain, minerals, leather, and oil</option><option value="C">C. Minerals, tables, leather, and paper</option><option value="D">D. Oil, grain, shoes, and household cleanser</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: Grain, minerals, leather, and oil</h5><h5>Businesses (e.g., manufacturers) usually maintain an inventory of items
that they use to produce their goods. Grain, minerals, leather and petroleum are examples of products
that a business might use to make cereal, jewelry, coats, and gasoline, respectively. Paper, bolts and
leather may be classified as raw materials, if they are being used to produce finished goods. Ore is a
mineral. Staplers, tables, and household cleansers are finished goods.
</h5></div><h5 id='q69'>69. The Simpson Company is negotiating discount terms with Cornwell Manufacturing, a prospective vendor.
During the negotiation, Cornwell states that it is willing to offer Simpson a six-percent discount on orders
over $50,000. Although Simpson would rather have an eight- percent discount, it agrees to the terms,
hoping to obtain something it wants later in the negotiation. This is an example of a</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. position.</option><option value="B">B. withdrawal.</option><option value="C">C. plea.</option><option value="D">D. concession.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: concession.</h5><h5>A concession is something that one party gives up during a negotiation. In many situations,
one party will give up something that it wants and use it (the concession) as leverage to get something
else that it wants later in the negotiation process. Withdrawal is a conflict response mode in which one or
both parties exhibit passive behavior and express a low level of cooperation. A plea is a request. A
position is what someone believes about an idea or issue.
</h5></div><h5 id='q70'>70. What must be done first to begin a Six Sigma Improvement Model?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Review data to determine if change needs to be made</option><option value="B">B. Collect data to measure areas identified as problematic</option><option value="C">C. Make improvements to areas with low customer satisfaction scores</option><option value="D">D. Define the gaps between customer satisfaction and the company's capabilities</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: Define the gaps between customer satisfaction and the company's capabilities</h5><h5>Before any measures can
be taken or improvements made, a company needs to find out what its customers want and if it is
meeting those wants and needs. Once the gaps between what customers want and what the company is
delivering are identified, the company can determine how it will measure improvement. Data are then
collected and reviewed. After that, improvements are made and continually monitored.
</h5></div><h5 id='q71'>71. What might stockholders do if a corporation was unable to pay dividends because of excessive
expenses?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Reduce earnings</option><option value="B">B. Organize a takeover</option><option value="C">C. Invest elsewhere</option><option value="D">D. Buy additional shares</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: Invest elsewhere</h5><h5>Corporations are owned by their stockholders. These businesses are expected to earn
money for their owners and to pay them regular dividends on their investments. If a business does not
make enough profit to do this, investors are likely to sell their stock and to invest in another company. If a
corporation was unable to pay dividends, it is unlikely that stockholders would buy additional shares.
Stockholders do not reduce earnings or organize takeovers.
</h5></div><h5 id='q72'>72. Belinda is reviewing departmental reports to determine why the business's outputs have been decreasing
steadily over the last six weeks. Belinda is analyzing issues related to</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. production.</option><option value="B">B. distribution.</option><option value="C">C. finance.</option><option value="D">D. human resources.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: production.</h5><h5>Business analysis is the process of investigating and evaluating a business issue, problem,
process, or approach. Analysis helps the business determine if it is accomplishing goals or if it needs to
make adjustments, so it can accomplish its goals. Businesses analyze many types of situations.
Production is the process of producing goods and services. When the business detects production
problems (e.g., output decreases), it needs to obtain data to find out why problems are occurring, so it
can take the appropriate steps to resolve the problem. Distribution is the business function of moving or
transferring the ownership of goods or services from producers to consumers. Finance is the business
function that involves the management of money. Human resources are the people who work to produce
goods and services. There is not enough information provided to determine if the production issues relate
to the production-workers' performance levels, raw materials and inventory shortages, or equipment
malfunctions.
</h5></div><h5 id='q73'>73. A guideline for determining a healthy weight for an individual is that body weight should be in proportion
to</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. sleeping habits.</option><option value="B">B. age and nutrition.</option><option value="C">C. height and bone structure.</option><option value="D">D. personal grooming.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: height and bone structure.</h5><h5>You are at an appropriate weight when your weight is proportionate to your
height and bone structure. Most charts that show ranges of healthy weights are set up according to
height and frame. Good nutrition can help you to maintain an appropriate weight at any age. Getting
enough sleep can contribute to health and appearance. Personal grooming includes all efforts to
maintain personal appearance.
</h5></div><h5 id='q74'>74. Which part of the time-management process helps you get a better idea of when you're most productive?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Setting goals</option><option value="B">B. Identifying objectives</option><option value="C">C. Creating "to-do" lists</option><option value="D">D. Keeping a time log

</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: Keeping a time log

</h5><h5>Explanation not available</h5></div><h5 id='q75'>75. Why is it effective to visit a business's employment office when conducting a job search?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. To contact other applicants</option><option value="B">B. To schedule an interview</option><option value="C">C. To locate unadvertised openings</option><option value="D">D. To meet with department managers</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: To locate unadvertised openings</h5><h5>Many businesses have employment offices that maintain lists of all
available job openings. The businesses may not advertise all of these positions but rely on potential
employees to contact the business to find out about the available openings. Some businesses list jobs on
bulletin boards outside the employment office in order to make it convenient for interested persons to
learn about openings. After a person applies for a job, an interview is scheduled if the business has an
interest in hiring that person. Potential employees do not meet with department managers when they are
searching for job openings. Contacting other applicants is not a reason for visiting a business's
employment office.
</h5></div><h5 id='q76'>76. An effective résumé provides a prospective employer with the information needed to judge the applicant's
qualifications without being</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. detailed.</option><option value="B">B. lengthy.</option><option value="C">C. specific.</option><option value="D">D. concise.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: lengthy.</h5><h5>Effective résumés should provide sufficient information to adequately explain the applicant's
qualifications without being lengthy. Most employers have limited time and want to be able to obtain the
important information in a résumé as quickly as possible. The ideal résumé is one page in length and
presents important facts in as few words as possible. The information in a résumé should be concise but
also as specific and detailed as necessary in order to provide an accurate explanation of the applicant's
qualifications.
</h5></div><h5 id='q77'>77. Two common methods for locating a professional organization/association that satisfies the needs of a
prospective member are</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. purchasing a classified advertisement or questioning other people.</option><option value="B">B. contacting group headquarters or hoping to be sent an invitation.</option><option value="C">C. questioning other people or contacting group headquarters.</option><option value="D">D. hoping to be sent an invitation or purchasing a classified advertisement.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: questioning other people or contacting group headquarters.</h5><h5>Asking other people in their profession,
industry, or geographic area and contacting organization/association headquarters found in telephone
directories or library listings are methods that may help prospective members find an
organization/association which meets their needs. Purchasing an advertisement is costly and
unnecessary. Waiting to be sent an invitation is time consuming and usually impractical.
</h5></div><h5 id='q78'>78. Dora has been arriving late to work once or twice a week. Because Dora is not following the company's
rules of conduct, what action is Dora's employer likely to take?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Promote Dora</option><option value="B">B. Reprimand Dora</option><option value="C">C. Excuse Dora's tardiness</option><option value="D">D. Assign Dora additional work</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: Reprimand Dora</h5><h5>An employer expects her/his employees to follow the business's rules of conduct,
which are the business's policies and expectations of appropriate workplace behavior. If an employee
violates the business's rules of conduct, the business may take disciplinary action. Disciplinary action
might include a verbal reprimand or warning for less serious infractions, such as arriving late to work.
Other disciplinary actions might include counseling, revoking privileges, and implementing unpaid
suspensions. Serious offenses may result in dismissal. The business is unlikely to promote Dora, assign
her additional responsibilities, or excuse her tardiness.
</h5></div><h5 id='q79'>79. Sally is a production-line worker who is experiencing problems with the production equipment. Following
the appropriate chain of command, Sally should report the problem to</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Linda, the operations manager.</option><option value="B">B. Sylvia, the vice president of operations.</option><option value="C">C. Tom, the production-section manager.</option><option value="D">D. Jim, the production-line supervisor.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Jim, the production-line supervisor.</h5><h5>The chain of command defines the level of authority and identifies the
specific individual who supervises particular employees. Having a chain of command helps provide
structure for business. As a production-line worker, Sally should report problems to the production-line
supervisor (Jim). The production-line supervisor reports to the production-section manager (Tom). The
production-section manager is likely to report to the production manager, but possibly the operations
manager (Linda). Executive-level managers in charge of various operations functions report to the vice
president of operations (Sylvia).
</h5></div><h5 id='q80'>80. What type of organizational goal involves setting standards in relation to the target market's
expectations?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Employee</option><option value="B">B. Consumer</option><option value="C">C. Technology</option><option value="D">D. Financial</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consumer</h5><h5>Businesses set different types of organizational goals. When a business sets standards to
accommodate the target market's needs and wants, it is setting consumer-oriented goals. Employees
often use technology to carry out the activities used to achieve the business's consumer goals. Financial
goals are objectives that are measured in terms of money.
</h5></div><h5 id='q81'>81. One way to determine if an employee is helping a business to achieve its organizational goals is by</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. analyzing external economic factors.</option><option value="B">B. providing the employee with extensive training.</option><option value="C">C. evaluating the employee's performance.</option><option value="D">D. developing an incentive program.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: evaluating the employee's performance.</h5><h5>A business sets the employee's work goals. The employee's
work goals should help the business achieve its overall organizational goals. To determine if the
employee is achieving his/her work goals, the business should evaluate the employee's performance. If
the employee is achieving his/her work goals, then s/he is helping the business to achieve its
organizational goals. If the employee is not achieving her/his work goals, then s/he might need additional
training to improve performance. Analyzing external economic factors and developing an incentive
program will not help the business determine if an employee is helping the business to achieve its
organizational goals.
</h5></div><h5 id='q82'>82. So that a business can achieve its organizational goals, the business's employees must have</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. comprehensive analytical skills.</option><option value="B">B. adequate training.</option><option value="C">C. detailed reports.</option><option value="D">D. unlimited resources.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: adequate training.</h5><h5>(2012). Essential skills for business analysis. Retrieved November 14, 2012,
from http://www.b2ttraining.com/curriculum/training-program/Business-Analyst-Skills/
73. C
Height and bone structure. You are at an appropriate weight when your weight is proportionate to your
height and bone structure. Most charts that show ranges of healthy weights are set up according to
height and frame. Good nutrition can help you to maintain an appropriate weight at any age. Getting
enough sleep can contribute to health and appearance. Personal grooming includes all efforts to
maintain personal appearance.
</h5></div><h5 id='q83'>83. What question should the purpose statement of a project's statement of work (SOW) answer?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. What materials do we need to do this project?</option><option value="B">B. What is this project going to produce?</option><option value="C">C. Why are we doing this project?</option><option value="D">D. Who will carry out this project?</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: Why are we doing this project?</h5><h5>The purpose of the project defines the reason for the project. Defining the
purpose is critical because the project's goals, activities, and deliverables are based upon the purpose
statement. To define the purpose, stakeholders need to determine why the project needs to be done.
What the project will produce is asked when determining deliverables. Questions about the materials and
the project team are related to resources that will be needed to complete the project.
</h5></div><h5 id='q84'>84. The primary purpose of developing a work breakdown structure (WBS) for complex projects is to</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. monitor human resources and supplies.</option><option value="B">B. document the benefits of the project.</option><option value="C">C. organize the work in a logical sequence.</option><option value="D">D. identify potential stakeholders.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: organize the work in a logical sequence.</h5><h5>A work breakdown structure (WBS) is the process of dividing
project tasks into meaningful components to complete the project. Creating the WBS involves organizing
everything that needs to be done in a logical sequence, to ensure that the project's goals are achieved
and deliverables are delivered on time. The project's benefits and stakeholders are identified in the
statement of work (SOW). Monitoring human resources and supplies is a management activity.
</h5></div><h5 id='q85'>85. Corrine is the project manager for a research project. Yesterday, Corrine told Anthony, one of the project
team members, that he is responsible for developing the sample plan for a survey. What was Corrine
doing?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Providing guidance</option><option value="B">B. Monitoring processes</option><option value="C">C. Delegating work</option><option value="D">D. Evaluating performance

</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Delegating work</h5><h5>Retrieved
November 13, 2012, from http://www.helium.com/items/1587239-accepting-responsibility-foryour-own-work
28. B
Manage your work commitments effectively. By planning ahead and determining how long it will take you
to complete your tasks, you can better manage your commitments. Planning your work helps you to
avoid scheduling too many activities that are close together, which may cause you problems in
maintaining commitments. Planning your workload also reduces procrastination, which is putting tasks off
until the last minute. Training and practice, rather than planning ahead, will help you to improve your
technical skills. Planning ahead and estimating the time it will take to complete various tasks will not
reduce your workload, but will help you work more efficiently.
</h5></div><h5 id='q86'>86. Which of the following is an activity performed during the close-out phase of a project:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Sequencing tasks</option><option value="B">B. Documenting results</option><option value="C">C. Selecting resources</option><option value="D">D. Setting goals</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Documenting results</h5><h5>An important part of closing a project is documenting the project's results. This
involves advising the stakeholders of the project's outcomes, which is often provided in a formal report.
Setting goals, selecting resources, and assigning tasks in a logical sequence are activities that take place
when initiating a project.
</h5></div><h5 id='q87'>87. During what phase of the project does the project manager release the project's equipment, supplies,
and team members?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Closing</option><option value="B">B. Implementation</option><option value="C">C. Planning</option><option value="D">D. Definition</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: Closing</h5><h5>When a project has been completed, the project manager returns the equipment and supplies to
vendors or departments and releases team members to their previous duties. During the implementation
phase, the team members use the resources to perform project tasks. During the planning phase, the
project manager determines the resources that will be needed to complete the project. The stakeholders
define the project's purpose during the initiation phase of the project.
</h5></div><h5 id='q88'>88. An important aspect of Jason's job is developing better, more efficient organizational processes. The
aspect of quality management in which Jason is involved is</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. consistency.</option><option value="B">B. assurance.</option><option value="C">C. deviation.</option><option value="D">D. improvement.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: improvement.</h5><h5>Quality management is the coordination of resources to ensure the degree of excellence of
a process, good, or service. Quality improvement involves using a systematic approach to increase the
levels of excellence in relation to a process, good, or service. Quality assurance is the processes
involved in checking processes or products to ensure that they are consistently meeting the business's
quality standards. Deviation is the degree to which a process or product does not meet the business's
quality standards.
</h5></div><h5 id='q89'>89. Which of the following quality management frameworks uses martial arts terminology to identify
individuals necessary for its implementation:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Quality Max</option><option value="B">B. ITIL</option><option value="C">C. CMMI</option><option value="D">D. Six Sigma</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: Six Sigma</h5><h5>Six Sigma is a popular quality management framework used by businesses around the world
to ensure that their products are high quality and deliver maximum value to customers. These businesses
usually rely on certain specially-trained personnel to implement Six Sigma methodologies. These
individuals are known as Master Black Belts, Black Belts, Green Belts, etc. ITIL, which stands for
Information Technology Infrastructure Library, consists of a set of publications which specify how to
provide high quality information technology (IT) services and ensure effective IT service management.
Organizations use CMMI, short for Capability Maturity Model Integration, to increase process
effectiveness and improve overall business performance. CMMI can be used in three distinct areas:
product/service development, product/service management, and product/service acquisition. Neither ITIL
nor CMMI uses martial arts terminology. Quality Max is fictitious.
</h5></div><h5 id='q90'>90. A primary reason it is important for businesses to continuously try to improve work processes is to</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. communicate effectively.</option><option value="B">B. motivate employees.</option><option value="C">C. encourage creativity.</option><option value="D">D. increase efficiency.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: increase efficiency.</h5><h5>Continuous improvement is an ongoing process that looks for ways to increase the
levels of excellence in relation to a process, good, or service. The improvement of processes is often
related to increased efficiency. When a business wants to improve efficiency, it is looking for ways to
maximize the use of its resources, such as money and time. It might also involve applying employees'
skills in new and different ways, which will streamline processes and improve efficiency. Continuous
improvement may or may not involve finding ways to motivate employees, encouraging employees'
creativity, or communicating more effectively.
</h5></div><h5 id='q91'>91. To control the business's level of risk, management needs to clearly communicate the business's code of
ethics to employees because</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. businesses usually do not address ethical issues in their employee handbooks.</option><option value="B">B. the government requires all businesses to provide in-depth ethics training programs.</option><option value="C">C. the employees' personal ethics may differ from the business's ethics.</option><option value="D">D. business policies tend to change in terms of what is considered ethical behavior.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: the employees' personal ethics may differ from the business's ethics.</h5><h5>Ethics are the basic principles that
govern your behavior. Because people differ, their personal ethics often differ. Employees often view
ethics differently when they encounter "gray" situations, or situations in which there is not a clear right or
wrong action or answer. Therefore, it is important for a business to clearly communicate its code of ethics
to its employees, so they understand how they are to behave in business situations. By communicating
the business's code of ethics in the workplace, the business is controlling or reducing its risk of potential
legal problems (e.g., lawsuits) and financial losses, which may occur when employees do not know the
business's ethical expectations and rules. Businesses often document ethical issues and expectations in
their employee handbooks. Ethics are a stable pattern of behavior exhibited over time. Therefore,
businesses do not frequently change their ethics. Governments do not require all businesses to offer
ethics training programs.
</h5></div><h5 id='q92'>92. When a company uses computer software to assess the risk levels associated with alternative actions in
a variety of business situations, it is conducting</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. qualitative research.</option><option value="B">B. product feasibility study.</option><option value="C">C. top-down forecasting.</option><option value="D">D. what-if planning.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: what-if planning.</h5><h5>Companies often use computer software programs to analyze their levels of risk in
different business functions. The software calculates a company's risk levels in a variety of scenarios
based on different types of data queries. By establishing queries using different combinations of data, the
company obtains results under many circumstances. The company analyzes the quantitative results of
each scenario and uses them to make business decisions. This process is “what-if” planning. Qualitative
research is a study based on opinion or expertise. Top-down forecasting is a method of predicting sales.
During the product-development process, businesses conduct product feasibility studies to determine the
advantages and disadvantages of producing a certain good or service.
</h5></div><h5 id='q93'>93. Vanessa, who is opening a new fitness center, is concerned about the risks that she, her employees, and
her customers could encounter while at her facility. As a result, Vanessa has developed a list of
guidelines for her staff to follow: gather a medical history from each customer, provide every customer
with instructions for using the exercise equipment, and maintain CPR certification. By instituting these
policies, Vanessa hopes to avoid __________ lawsuits.</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. private nuisance</option><option value="B">B. negligence</option><option value="C">C. breach-of-contract</option><option value="D">D. discrimination</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: negligence</h5><h5>A customer may file a negligence lawsuit against a business if s/he feels that the business
has failed to protect her/him from harm or wrongdoing. To minimize their chances of being sued for
negligence, risk managers and business owners develop specific policies and procedures to protect
customers from being injured and to avoid being blamed for customer injuries, if they occur. An individual
may file a private nuisance lawsuit if s/he has been unable to live peacefully at home as a result of a
neighbor's barking dog, teenagers having a loud party nearby, etc. If someone fails to fulfill his/her
contract (e.g., does not complete promised work, does not pay for services rendered, etc.), the individual
or company who entered into that contract with the violator might file a breach-of-contract against
him/her. People file discrimination lawsuits when they feel that they were treated unfairly because of their
race, religion, gender, or other characteristic.
</h5></div><h5 id='q94'>94. In a large company, a separate department often is responsible for finding workers for the business.
What management function is this department performing?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Controlling</option><option value="B">B. Planning</option><option value="C">C. Directing</option><option value="D">D. Staffing</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: Staffing</h5><h5>Staffing enables the business to have employees who know how to do the company's work or
are capable of learning how to do it. In a large business, a separate department usually handles staffing
because it is a full-time responsibility to keep up with the staffing needs of the business. Planning is
deciding what will be done and how it will be accomplished. Directing is providing guidance to workers
and work projects. Controlling is monitoring the work effort.
</h5></div><h5 id='q95'>95. What must occur before any management functions can be carried out?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Brainstorming</option><option value="B">B. Analyzing</option><option value="C">C. Processing</option><option value="D">D. Planning</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: Planning</h5><h5>Planning is the management function of deciding what will be done and how it will be
accomplished. Brainstorming is a creative-thinking technique that is often used during the planning
process. Deciding what will be done involves establishing objectives. After establishing objectives, the
business can implement processes to achieve those objectives. The business analyzes its performance
to determine if it achieved its objectives.
</h5></div><h5 id='q96'>96. What function of management establishes a company's levels of authority?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Controlling</option><option value="B">B. Staffing</option><option value="C">C. Organizing</option><option value="D">D. Evaluating

</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: Organizing</h5><h5>Organizing is the management function of setting up the way the business's work will be
done. A primary organizing activity is establishing levels of authority. Staffing is the management function
of finding workers for the company. Controlling is the management function that monitors the work effort.
Evaluating is a controlling activity.
</h5></div><h5 id='q97'>97. Melanie is showing a group of new employees how to perform work-related tasks. What staffing activity is
Melanie performing?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Interviewing</option><option value="B">B. Recruiting</option><option value="C">C. Training</option><option value="D">D. Appraising</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: Training</h5><h5>Staffing is the management function of finding workers for the business. A primary staffing
function involves training the employees to perform the work correctly. Recruiting is the staffing function
of finding workers to perform the work. Interviewing involves meeting with job applicants to assess their
skills and to determine if they are a good fit for open positions. Appraising is an activity that involves
evaluating an employee's work performance.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1079

BUSINESS MANAGEMENT AND ADMINISTRATION CLUSTER EXAM

1

1. Which of the following are examples of intellectual property that a business can protect by registering
trademarks:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Directing</option><option value="B">B. Staffing</option><option value="C">C. Organizing</option><option value="D">D. Planning</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: Planning</h5><h5>B
Current salary. Certain information is considered personal and confidential and should not be shared with
coworkers. An employee's salary is confidential information between the business and the employee and
should not be divulged to others. Organizational tips, sales policies, and vacation plans are not
considered confidential information, so it is generally okay for employees to share this information with
coworkers if they want to.
</h5></div><h5 id='q99'>99. What is an important element of all businesses that managers must control?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Benefits</option><option value="B">B. Competitors</option><option value="C">C. Finances</option><option value="D">D. Incentives</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: Finances</h5><h5>Controlling the finances of a business is critical if the business wants to succeed. Managers
need to understand the finances and be able to use financial tools, such as income statements and
balance sheets, to monitor the business's income and expenses. Managers need to be prepared to take
action to correct problems with the bottom line if financial controls indicate that the business is losing
money. It is not possible to control competitors. Benefits and incentives are advantages or payments
employees receive in addition to their wages. Businesses usually establish benefit and incentive
programs that are comparable to those of similar businesses in the same industry. Reducing benefits and
incentives is a step that managers might take if they identify a problem with the business's finances.
</h5></div><h5 id='q100'>100. Mr. Fox, a Canadian business owner, wanted to buy franchise rights to Frau Dietrich's Strudel chain,
which is headquartered in Hanover, Germany. Mr. Fox was late arriving for the meeting, which is very
insulting to Germans. Unfortunately, Mr. Fox did not get the deal because he failed to recognize the
importance of __________ to German businesspeople.</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. time</option><option value="B">B. space</option><option value="C">C. achievement</option><option value="D">D. education</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: time</h5><h5>The concept of time is an important consideration when doing business with foreigners. In some
cultures (e.g., Germany), punctuality is very important; therefore, it is important to be on time to any
meetings or social gatherings. In other cultures, time is less important or is viewed differently. For
example, in some countries, businesspeople will keep people waiting while they finish another activity, so
that s/he can provide the visitor with his/her undivided attention. This action may appear rude to people in
some cultures, while it is viewed as a courtesy in other cultures. Spatial issues refer to the amount of
personal space (close, distant) different cultures allow during interpersonal interaction. Achievement is
the level to which a person reaches his/her personal goals. Education is the type and level of training or
schooling that a person has obtained.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Business-Admin_4_Split_Homework.js"></script></html>