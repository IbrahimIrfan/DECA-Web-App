<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 8</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. The purpose of legal procedure is to ensure that each party receives</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. ongoing advice.</option><option value="B">B. consistent treatment.</option><option value="C">C. a reasonable verdict.</option><option value="D">D. an indictment.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: consistent treatment.</h5><h5>Legal procedure refers to the methods and processes used to protect an
individual's or business's legal rights. These rights include the right to obtain legal counsel, the right to be
heard in court, the right to confront the accuser, etc. Legal procedure involves following the same steps
and protocol to ensure that both the defendant and the plaintiff are treated in a fair and consistent
manner. The purpose of legal procedure is not to ensure that each party receives ongoing advice. In
most legal proceedings, one party is not going to be satisfied with the verdict or outcome. An indictment
is a formal charge or accusation of a crime.
</h5></div><h5 id='q2'>2. Wal-mart, Chevron Texaco, and Ford Motor Company sell stock in their companies. They are examples
of which of the following types of business ownership:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Franchisee</option><option value="B">B. Corporation</option><option value="C">C. Partnership</option><option value="D">D. Sole proprietorship</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: Corporation</h5><h5>Wal-Mart, Chevron Texaco, and Ford Motor Company are all large businesses owned by
their shareholders, who own stock in the company. These businesses are operated under written
permission from the states or provinces in which they operate. A sole proprietorship is a business owned
and operated by one person. A partnership is owned by two or more people. A franchisee purchases the
rights to operate a business using the parent company's (franchisor's) name.
</h5></div><h5 id='q3'>3. Channels of distribution benefit businesses by</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. lowering the prices of all industrial goods.</option><option value="B">B. getting their products to consumers more efficiently.</option><option value="C">C. raising their profits each year.</option><option value="D">D. allowing them to avoid all channel tasks.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: getting their products to consumers more efficiently.</h5><h5>Channels of distribution benefit businesses by
getting their products to consumers more efficiently. This may help to raise profits, but it is not a
guarantee. Channels may lower the prices of some but not all industrial goods. Channels allow
businesses to share channel tasks, but they will not be able to avoid all channel tasks—every channel
member contributes.
</h5></div><h5 id='q4'>4. Which of the following would not be considered an intermediary in a channel of distribution:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Agent</option><option value="B">B. Retailer</option><option value="C">C. Producer</option><option value="D">D. Wholesaler</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: Producer</h5><h5>The channel of distribution begins with the producer. The producer's goal is to reach the
consumer as quickly and efficiently as possible. A retailer buys consumer goods or services and sells
them to the ultimate consumer. A wholesaler buys goods from producers or agents and sells them to
retailers. An agent assists in the sale and/or promotion of goods and services, but does not take title to
them. The retailer, wholesaler, and agent are intermediaries because they operate between the producer
and consumer to help the movement of goods and services.
</h5></div><h5 id='q5'>5. The negative effect of slotting fees is that they often limit a small producer's ability to</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. introduce new items in the marketplace.</option><option value="B">B. develop exclusive-dealing policies.</option><option value="C">C. use direct-distribution strategies.</option><option value="D">D. identify potential target markets.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: introduce new items in the marketplace.</h5><h5>A slotting fee is a cash premium that producers pay to
businesses to cover the costs associated with carrying a new product. In many cases, the producer that
offers the largest fee is the one that gets shelf space for its new product. This presents an unethical
situation because many small producers cannot afford to pay large slotting fees, which limits the
introduction of new items in the marketplace. Exclusive dealing is an illegal practice when it restricts
competition; however, it may be legal when small businesses are entering the marketplace. Direct
distribution is a channel of distribution in which products move directly from the producer to the end user.
Slotting fees may hinder a business's ability to distribute its products to the target market, but the slotting
fees do not limit the business's ability to identify potential target markets.
</h5></div><h5 id='q6'>6. What type of channel conflict often occurs between manufacturers and their authorized dealers?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Corporate</option><option value="B">B. Horizontal</option><option value="C">C. Indirect</option><option value="D">D. Vertical</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: Vertical</h5><h5>Vertical conflict involves disagreements among businesses on different levels of the same
channel of distribution. Manufacturers and their authorized dealers are in the same channel of
distribution, but they are on different levels. Conflict might occur if the manufacturers develop policies or
restrictions that anger the dealers and which the dealers refuse to accept. Horizontal conflict occurs
among businesses at the same level in a channel of distribution. Indirect and corporate are not types of
channel conflict.
</h5></div><h5 id='q7'>7. When you look for supporting evidence in published materials, you are evaluating the</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. timeliness of the content.</option><option value="B">B. readability of the text.</option><option value="C">C. margin of error.</option><option value="D">D. credibility of the sources.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: credibility of the sources.</h5><h5>When identifying sources that provide relevant, valid written material, the
researcher evaluates a variety of factors, including the credibility or believability of the source. If the writer
provides feasible supporting evidence to back up an opinion, outcome, or claim, the researcher may
determine that the source is credible. Other considerations are the timeliness of the data or article, the
relevance of the information to the topic at hand, and the expertise of the writer or publisher. Readability
of the text involves the reader's ability to understand the content. If the researcher is evaluating a
research study, s/he might analyze the margin of error of certain types of data as one factor in
determining a source's credibility.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1069

MARKETING CLUSTER EXAM

1

1. The purpose of legal procedure is to ensure that each party receives</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. earn frequent raises.</option><option value="B">B. become good speakers.
</option><option value="C">C. avoid criticism.</option><option value="D">D. follow directions.
</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: follow directions.
</h5><h5>reports. Spreadsheet programs are used to prepare routine budgets. These programs, as well
as programs that enable businesses to search the Internet, may be combined in an integrated software
application package.
</h5></div><h5 id='q9'>9. Sara is a new marketing employee who is learning that the best way to listen to customers is</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. passively.</option><option value="B">B. actively.</option><option value="C">C. emotionally.</option><option value="D">D. distractedly.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: actively.</h5><h5>Active listening is giving full attention to what is being said. It enables the listener to note major
points and to notice gestures or actions which give added meaning to what is being said. Passive
listening is casual listening, or paying only partial attention to what is being said. Distractedly describes a
listener whose mind is on other things, not just on what the customer is saying. Listening to customers
should be thoughtful and rational, not emotional.
</h5></div><h5 id='q10'>10. When Amber walked by Ryan's desk, she noticed that Ryan was raking his left hand through his hair,
that his face was red, and that he kept hitting the enter button on keyboard with his right hand, while
frowning at his computer screen. Based on his nonverbal cues, Amber would probably assume that Ryan
was</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. patient.</option><option value="B">B. frustrated.</option><option value="C">C. bored.</option><option value="D">D. enthusiastic.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: frustrated.</h5><h5>Nonverbal cues can tell others a lot about your emotions. In this situation, Ryan's nonverbal
behavior indicated that he was frustrated because he couldn't get his computer to do what he wanted it to
do. If Ryan was patient, he would not continuously hit his keyboard, turn red, or frown. If Ryan was bored,
he would be inattentive about his situation or surroundings. He might even yawn or do something other
than computer work for a while. Enthusiasm is associated with a positive attitude.
</h5></div><h5 id='q11'>11. Which of the following examples illustrates the use of the cause and effect method of a format for
structuring oral presentations:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. We will begin by discussing the basic steps used in developing effective time management
techniques, and the first step is to prioritize all of your commitments.</option><option value="B">B. The public supports increased spending on national security, and a survey reports that over
seventy percent of the citizens fear future terrorist attacks.</option><option value="C">C. Monet and Cezanne were both impressionist artists; however, their painting techniques and use
of color varied greatly.</option><option value="D">D. The use of toxic chemicals in the environment can result in the extinction of many species of
waterfowl.

®
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: The use of toxic chemicals in the environment can result in the extinction of many species of
waterfowl.

®
</h5><h5>Explanation not available</h5></div><h5 id='q12'>12. Allison is attending a business seminar. Because the seminar presenter is speaking very quickly, Allison
is having a difficult time taking accurate notes. What technique would help Allison take notes quickly?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Use abbreviations and symbols</option><option value="B">B. Write notes on index cards</option><option value="C">C. Focus on the subtopics</option><option value="D">D. Ask the speaker to provide handouts</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use abbreviations and symbols</h5><h5>Developing a system of and writing down abbreviations and symbols
(i.e., shorthand) is much quicker than writing out long phrases and complete sentences. For example, to
remember a very important point, Allison might place a star or asterisk by a key word, short phrase, or
abbreviation. After the seminar, Allison can refer to her “shorthand” notes and write more comprehensive
notes for future use. Writing on note cards, focusing on subtopics, and asking the speaker to provide
handouts will not help Allison take accurate notes in real time.
</h5></div><h5 id='q13'>13. An e-mail message that is sent to a coworker should contain</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. a persuasive argument.</option><option value="B">B. an urgent tone.</option><option value="C">C. essential information.</option><option value="D">D. encouraging news.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: essential information.</h5><h5>E-mail is a quick, efficient way to communicate with customers and coworkers. The
primary reason for writing the e-mail message is to inform others about various business activities;
therefore, it should be written in a friendly, professional manner that contains essential information.
Businesspeople tend to receive a lot of e-mail messages, so it is important to get to the point quickly. The
message should be concise, free of typographical errors, and grammatically correct. The e-mail message
may or may not be urgent, persuasive, or encouraging in nature—these factors depend on the purpose of
the message.
</h5></div><h5 id='q14'>14. Employees often use simple written reports to provide managers with __________ information.</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. extensive</option><option value="B">B. analytical</option><option value="C">C. in-depth</option><option value="D">D. routine</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: routine</h5><h5>Employees often use simple written reports to provide managers with routine information, such
as the number of items sold each week. Routine information is the type of data that managers need on a
regular basis in order to monitor the operation of the business. Simple written reports are straightforward
and direct and contain only routine business information. They do not contain analytical, extensive, or indepth information, which is usually presented in complex written reports.
</h5></div><h5 id='q15'>15. Many businesses try to foster positive customer/client relations by encouraging employees to be</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. talkative.</option><option value="B">B. friendly.</option><option value="C">C. reserved.</option><option value="D">D. authoritative.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: friendly.</h5><h5>Positive customer/client relations are important to the success of the business because they
help to create repeat business. Many businesses encourage employees to adopt a friendly, helpful
attitude toward customers as part of their efforts to create positive relations. Being reserved could
prevent employees from offering appropriate help and might be interpreted as coldness. Being talkative
may offend customers or prevent employees from identifying their needs. Being authoritative is only
appropriate when providing the customer with technical or factual information.
</h5></div><h5 id='q16'>16. A local supermarket's front-end employees are trained to smile and greet customers as they approach
the cash register and say thank you as customers leave. This approach</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. decreases customer patronage.</option><option value="B">B. builds customer loyalty.</option><option value="C">C. encourages employee rivalry.</option><option value="D">D. decreases employee productivity.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: builds customer loyalty.</h5><h5>Employee courtesy at the checkstand reminds customers that the supermarket
appreciates their business, which builds customer loyalty to the store. Employee courtesy should not
encourage rivalry among front-end employees. Building customer loyalty through courtesy would
increase, not decrease, customer patronage. A decrease in employee productivity should not occur as
the result of courtesy toward customers.
</h5></div><h5 id='q17'>17. Which of the following is often the best way for a salesperson to handle the slow/methodical type of
difficult customer:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Summarize benefits</option><option value="B">B. Ask their advice</option><option value="C">C. Be brief</option><option value="D">D. Let the customer do the talking</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: Summarize benefits</h5><h5>Slow/Methodical customers need to have the salesperson draw out the needed
information, to be treated patiently, and to have the benefits of the good/service summarized in order to
guide them to a close. The other three approaches are aimed at the domineering/superior type, who
need to do most of the talking, be complimented and praised, and allowed to sell themselves on the
good/service.
</h5></div><h5 id='q18'>18. Distribution examines how income is divided between</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. consumers and resource owners.</option><option value="B">B. producers and resource owners.</option><option value="C">C. consumers and producers.</option><option value="D">D. producers and economizers.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: producers and resource owners.</h5><h5>Distribution examines how producers and resource owners divide the
income that they receive from consumers. Anyone who uses goods and services is a consumer.
Producers are individuals who make or provide goods and services to consumers. Resource owners are
individuals and organizations who provide human resources, natural resources, or capital goods for use
in production. An economizer is someone who strives to obtain the greatest satisfaction from his/her
limited resources.
</h5></div><h5 id='q19'>19. Consumers buy products to benefit</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. marketers.</option><option value="B">B. themselves.
</option><option value="C">C. producers.</option><option value="D">D. retailers.
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: themselves.
</h5><h5>Explanation not available</h5></div><h5 id='q20'>20. Which of the following is a disadvantage of the matrix organizational structure:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. It lacks flexibility.</option><option value="B">B. It makes the organization less competitive.</option><option value="C">C. It cannot balance conflicting organizational objectives.</option><option value="D">D. It violates the unity of command principle.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: It violates the unity of command principle.</h5><h5>The matrix organizational structure violates the unity of
command principle by giving employees more than one manager to answer to at a time. It does not make
the organization less competitive. It does not lack flexibility. Balancing conflicting organizational
objectives is an advantage of the matrix structure.
</h5></div><h5 id='q21'>21. Kent is going to start his own business. He is concerned that the merchandise he wants to carry will go
out of style soon after opening his business. Which type of risk must he prepare for?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Economic</option><option value="B">B. Natural</option><option value="C">C. Human</option><option value="D">D. Incompetence</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: Economic</h5><h5>Economic risks are changes in the market that force prices to be lowered, products to change,
or even businesses to fail. Changes in the market that may make some products go out of style are a
type of economic risk. Natural risks result from such natural causes as floods, tornadoes, fires, lightning,
blizzards, and earthquakes. Human risks are caused by human weakness and the unpredictability of
employees and/or customers. Incompetence is a form of human risk whereby the employee does not
have the skills, knowledge, or attitudes needed to succeed in the position.
</h5></div><h5 id='q22'>22. The payment of taxes to the federal government allows it to provide goods and services to ___________
and ___________ .</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. businesses; households</option><option value="B">B. businesses; resource markets</option><option value="C">C. households; product markets</option><option value="D">D. businesses; product markets</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: businesses; households</h5><h5>The net taxes paid by both are translated by government programs into goods
and services for businesses and individuals. Resource markets provide resources to the government and
in return receive government expenditures. The product market provides goods and services to the
federal government and receives government expenditures as payment.
</h5></div><h5 id='q23'>23. Which of the following economic laws is a business following when it stops hiring after its current
employees achieve a certain level of productivity:</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Negative returns</option><option value="B">B. Diminishing returns</option><option value="C">C. Marginal revenues</option><option value="D">D. Variable products

</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: Diminishing returns</h5><h5>The law of diminishing returns states that, at some point, adding more employees
does not proportionately increase productivity. Each business operates effectively with a certain number
of employees who are able to make the best use of the business's resources. After that point is reached,
hiring more employees causes an overabundance of employees in relation to the available resources.
The additional employees get in each others' way, which causes an overall decrease in each employee's
level of productivity. Negative returns is a stage of production in which businesses usually stop hiring
employees. Marginal revenues and variable products are not economic laws.
</h5></div><h5 id='q24'>24. The goods and services sold during a year to foreign buyers are a country's</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. gross private investments.</option><option value="B">B. imports.</option><option value="C">C. exports.</option><option value="D">D. personal consumption expenditures.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: exports.</h5><h5>Exports are goods and services sold to other countries. Imports are the goods and services that
one country purchases from a foreign country. Gross private investments is the value of all capital goods
created in the economy during the year and inventories held by businesses from current production.
Personal consumption expenditures is the final market value of goods and services purchased for direct
consumption by individuals, families, and nonprofit organizations.
</h5></div><h5 id='q25'>25. Which of the following occurs when a country can produce goods at a relatively more efficient rate than
another country:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Absolute advantage</option><option value="B">B. Comparative advantage</option><option value="C">C. Trade deficit</option><option value="D">D. Trade surplus</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: Comparative advantage</h5><h5>A country has a comparative advantage when it produces and sells those goods
and services for which it will earn the most money, while trading for those which will earn relatively less
money. A country has an absolute advantage when it can produce a product for less than another nation
can. A trade deficit exists when a nation's imports are greater than its exports. A trade surplus exists
when a nation's exports are greater than its imports.
</h5></div><h5 id='q26'>26. An employee who is able to adjust to changing conditions possesses the desirable trait of</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. loyalty.</option><option value="B">B. adaptability.</option><option value="C">C. friendliness.</option><option value="D">D. tact.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: adaptability.</h5><h5>This is the ability to be flexible and to change with the times. Friendliness means to display
good feelings toward others. Loyalty means giving steady support. Tact is the ability to say the right thing
in all circumstances.
</h5></div><h5 id='q27'>27. Which of the following is a reason to avoid drawing distinctions between people:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Discrimination is illegal.</option><option value="B">B. Everyone is unique.</option><option value="C">C. Some people aren't "normal."</option><option value="D">D. Certain people don't deserve respect.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: Everyone is unique.</h5><h5>There's no reason to draw distinctions between people because everyone is unique.
There's no such thing as "normal." Everyone deserves to be treated with kindness and respect. In many
cases, discrimination is illegal, but drawing distinctions between people is something that happens on a
personal level and can only be controlled by ourselves.
</h5></div><h5 id='q28'>28. Cameron said to his manager, “The order didn't ship because Sam didn't tell me that we didn't have
enough items in stock.” What is Cameron doing?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Blaming another person for a communication breakdown</option><option value="B">B. Acknowledging that he failed to follow through with the order</option><option value="C">C. Stating the facts on Sam's behalf</option><option value="D">D. Responding to inappropriate remarks</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: Blaming another person for a communication breakdown</h5><h5>When you accept responsibility for your
behavior, you are willing to accept the consequences of your actions. In Cameron's situation, he is
blaming another person for a work-related mistake. While Sam may be partially responsible for not
communicating the stock outage to Cameron, Cameron did not follow up on the order. If he had followed
up on the order, he may have detected that there was a problem. Cameron is not acknowledging his
responsibility for the problem, and he is not stating facts on Sam's behalf. Sam may have another view or
opinion about the chain of events. There is not enough information provided to determine if Cameron's
manager made an inappropriate remark.
</h5></div><h5 id='q29'>29. In order for teachers to prepare report cards, they must __________ their students.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. motivate</option><option value="B">B. criticize</option><option value="C">C. evaluate</option><option value="D">D. compliment</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: evaluate</h5><h5>Report cards are a form of feedback. In order for teachers to provide students with this
feedback, they must first evaluate the students' work and behavior. Their findings are reflected in the
grades and comments on the report card. Whether those findings are criticisms or compliments depends
upon the students' performance. The results may indicate that the teacher needs to motivate the students
to work harder, but motivation is not a part of evaluation.
</h5></div><h5 id='q30'>30. You are in a better position to control your own future if you __________ change.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. agonize over</option><option value="B">B. anticipate</option><option value="C">C. wait for</option><option value="D">D. avoid</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: anticipate</h5><h5>You must be able to anticipate and plan for changes that are likely to occur if you want some
control over your future. Avoiding change is not possible. Agonizing over change or waiting for change to
occur would not help you to control your future.
</h5></div><h5 id='q31'>31. Persuasion is an important part of which of the following functions:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Education</option><option value="B">B. Motivation</option><option value="C">C. Communication</option><option value="D">D. Self-control</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: Communication</h5><h5>Communication is an exchange of information in which the words and gestures are
understood in the same way by both the speaker and the listener. Persuasion is an important part of
communication and is something you do almost every time you talk to someone. You want others to
understand your message and agree with you. During the process of persuading, you usually try to
motivate others to take some kind of action. Education involves learning. Self-control is restraint of your
feelings, words, and actions.
</h5></div><h5 id='q32'>32. Because people often change their negotiating styles and strategies, effective negotiators must be</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. optimistic.</option><option value="B">B. flexible.</option><option value="C">C. indifferent.</option><option value="D">D. uneasy.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: flexible.</h5><h5>During a negotiation, one person may change strategies one or more times in order to confuse
or distract the other person. To remain effective if this situation occurs, a negotiator must be flexible,
patient, and aware of the tactics that the other person is using. Effective negotiators try to remain
optimistic during a session under all circumstances, not only when the other person changes strategies.
An indifferent or uneasy attitude often hinders the negotiating process.
</h5></div><h5 id='q33'>33. A primary reason that employees experience burnout in the workplace is because they</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. become bored with the work.</option><option value="B">B. receive new work assignments.</option><option value="C">C. interact with coworkers.</option><option value="D">D. obtain feedback from managers.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: become bored with the work.</h5><h5>Burnout is a type of exhaustion that is usually caused by too much stress.
Stress is a mental, physical, or emotional feeling of pressure or tension. Burnout can occur when
employees perform the same tasks over and over again, which causes them to become bored. Ongoing
boredom can create a certain type of stress and burnout in some individuals, especially those who thrive
on variety and activity. Receiving new work assignments and interacting with coworkers often relieve
boredom. Receiving (positive) feedback from managers often motivates employees to improve or
continue producing quality work rather than causing them to experience burnout.
</h5></div><h5 id='q34'>34. One of the differences among people that can be difficult to change is their</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. language usage.</option><option value="B">B. job position.</option><option value="C">C. education.</option><option value="D">D. mental ability.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: mental ability.</h5><h5>A person's mental ability refers to his/her learning and thinking ability. People are born with
different levels of mental ability. This ability is difficult to change. Job position is the worker's assigned
duties and level of responsibility, which the worker can change by changing jobs or seeking promotions.
Language usage is the way the language is used in certain parts of the country. People are able to
change the way they speak if they so desire. Education is the amount of learning a person has acquired.
Learning is an ongoing process.
</h5></div><h5 id='q35'>35. When Brandon lost his job due to downsizing, the government sent him an unemployment check to help
him cover his living expenses until he found another job. What is Brandon's source of income?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Transfer payment</option><option value="B">B. Rebate</option><option value="C">C. Refund</option><option value="D">D. Wage garnishment

</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: Transfer payment</h5><h5>Income is money received from outside sources. Sources of income include salaries,
interest earned, dividends, rent, and transfer payments. Transfer payments are monies paid by the
government in which no goods or services are received in exchange, such as welfare benefits, veterans'
benefits, disaster aid, and unemployment. To receive transfer payments, individuals, businesses, or
jurisdictions must meet certain criteria. A rebate is a return of part of the price a customer pays for a
product, usually from the product's manufacturer. A refund is a sum of money given back to individuals or
businesses. Refunds are issued when an excessive amount has been paid (e.g., tax refund) or when
items have been returned to a business. Wage garnishments are court-ordered initiatives that involve
taking income taken from an employee's salary and submitting it to another person or organization.
Examples of garnishments include child support and alimony.
</h5></div><h5 id='q36'>36. One reason customers who pay for products with a credit card usually want to know the interest charges
is because those charges</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. generate the profit for the business.</option><option value="B">B. increase the retail price.</option><option value="C">C. are calculated on a yearly basis.</option><option value="D">D. add to the cost of the purchase.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: add to the cost of the purchase.</h5><h5>Using credit can add to the total cost of goods and services. For
example, interest, or finance, charges are added to accounts that are not paid in full at the end of each
payment period. When customers buy products with a credit card, they often pay over a period of time.
Then, each month they pay interest on the unpaid balance. The interest charges add to the cost of the
purchase. Interest charges do not increase the retail price because customers who pay in cash are not
charged interest. Interest usually is calculated monthly rather than yearly. Interest generates profit for the
credit-card company rather than the store.
</h5></div><h5 id='q37'>37. Which of the following is categorized as a fixed expense in a personal budget:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Groceries</option><option value="B">B. Car payment</option><option value="C">C. Home repairs</option><option value="D">D. Clothing</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: Car payment</h5><h5>Income is money received from outside sources. Sources of income include salaries,
interest earned, dividends, rent, and transfer payments. Transfer payments are monies paid by the
government in which no goods or services are received in exchange, such as welfare benefits, veterans'
benefits, disaster aid, and unemployment. To receive transfer payments, individuals, businesses, or
jurisdictions must meet certain criteria. A rebate is a return of part of the price a customer pays for a
product, usually from the product's manufacturer. A refund is a sum of money given back to individuals or
businesses. Refunds are issued when an excessive amount has been paid (e.g., tax refund) or when
items have been returned to a business. Wage garnishments are court-ordered initiatives that involve
taking income taken from an employee's salary and submitting it to another person or organization.
Examples of garnishments include child support and alimony.
</h5></div><h5 id='q38'>38. Which of the following is an example of a payroll deduction:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Health insurance</option><option value="B">B. Overtime hours</option><option value="C">C. Net pay</option><option value="D">D. Pay rate</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Health insurance</h5><h5>Payroll deductions are monies that an employer withholds from an employee's gross
earnings. A large portion of the deductions is the various income taxes, which the employer pays to the
government on behalf of the employee. Other deductions might include health insurance premiums,
voluntary savings, and child-support payments. Net pay is the amount the employee receives in his/her
paycheck after the deductions have been subtracted from the gross earnings. Gross earnings are income
before deductions. Overtime hours are the number of hours an employee works over his/her regular
schedule. Pay rate is the amount of pay a worker earns at a set interval (e.g., an hour).
</h5></div><h5 id='q39'>39. Which of the following financial services providers is most likely to provide a small, local coffee shop with
business loans, checking and savings accounts, and overdraft protection:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Eastern Region Investment Bank</option><option value="B">B. Marley and Winston Commercial Bank</option><option value="C">C. Walker, Steinbrenner, and Houghton, CPA Firm</option><option value="D">D. Allen and Mellon Brokerage Firm</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: Marley and Winston Commercial Bank</h5><h5>Commercial banks provide a variety of financial services for
businesses and individuals, such as checking and savings accounts, loans, credit cards, and overdraft
protection. Investment banks primarily work with corporations by underwriting securities, aiding in
mergers and acquisitions, etc. CPA (Certified Public Accountant) firms provide accounting services. A
brokerage firm buys and sells securities on behalf of investors.
</h5></div><h5 id='q40'>40. Loss due to shoplifting is an example of a(n) __________ business risk.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. economic</option><option value="B">B. human</option><option value="C">C. natural</option><option value="D">D. internal</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: human</h5><h5>The possibility of financial loss in marketing is called risk. Human risks are those risks that result
from human weakness and unpredictability. Economic risks are those risks related to changes in the
market that force a lowering of prices, a change of product, or even failure of businesses. Natural risks
are those that result from natural causes such as fires, floods, etc. Since shoplifting is theft by persons
who are not employees of the business, it is not considered an internal risk.
</h5></div><h5 id='q41'>41. What is often one of the largest sources of money flowing out of a business?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Payroll and benefits</option><option value="B">B. Accounts receivable</option><option value="C">C. Profit and loss</option><option value="D">D. Goods and services</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: Payroll and benefits</h5><h5>Payroll and benefits are often one of the largest sources of money flowing out of a
business because businesses must pay employees for their labor. Many businesses also pay for
employee benefits, such as health insurance, paid vacation, sick leave, tuition reimbursements, and
retirement savings. Businesses bring money in by selling goods and services. Accounts receivable are all
the monies owed to a firm by its customers. Profit and loss indicates if the business is making sufficient
money to cover its expenses.
</h5></div><h5 id='q42'>42. When businesses invest funds to expand, they are involved in the process of</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. selling.</option><option value="B">B. depreciation.</option><option value="C">C. finance.</option><option value="D">D. capitalism.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: finance.</h5><h5>This is the process of obtaining funds and using them to achieve the goals of the business. If
one of the goals of the business is to expand, then investing funds in expansion is part of the finance
process. Depreciation is the reduction in value of goods or assets occurring over a period of time. Selling
is a marketing function that involves determining client needs and wants and responding through
planned, personalized communication that influences purchase decisions and enhances future business
opportunities. Capitalism is an economic system that depends on honest, healthy competition among
businesses.
</h5></div><h5 id='q43'>43. Many businesses use their company manuals as a source of information in order to __________ new
employees.</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. select</option><option value="B">B. recruit</option><option value="C">C. manage</option><option value="D">D. orient</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: orient</h5><h5>One of the main sources of printed information that businesses use in order to orient new
employees is the company manual. A manual usually contains the information that a new employee
needs to know about company benefits, vacation policy, absenteeism, etc. Businesses usually
encourage new employees to thoroughly read the company manual because it will answer most of their
questions about routine policies. Businesses do not use their company manuals as a source of
information to recruit, manage, or select new employees.
</h5></div><h5 id='q44'>44. A manufacturer has learned that its market is expanding. How should this information be used?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. To buy risk protection insurance</option><option value="B">B. To drop current product lines</option><option value="C">C. To lay off employees</option><option value="D">D. To increase production</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: To increase production</h5><h5>To meet the potential increase in demand, the manufacturer should increase
production. An expanding market implies a positive outlook, while laying off employees and dropping
product lines are actions taken with negative outlooks. Buying insurance does not indicate an expanding
or contracting market.
</h5></div><h5 id='q45'>45. What is a company's private computer network that allows authorized users to share information?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Intranet</option><option value="B">B. Internet</option><option value="C">C. E-mail</option><option value="D">D. Extranet</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Intranet</h5><h5>An intranet is an organization's private, secure network that allows authorized users to share
information while reducing waste of materials, time, and effort. The Internet is a worldwide network of
linked computers that allows the transfer of data from one computer to another anywhere in the world. Email (electronic mail) is the basic Internet tool for sending messages to other computer users. An extranet
is a private network that companies use to share information with selected people outside the
organization.
</h5></div><h5 id='q46'>46. Advertisers that use concept testing to obtain feedback from potential customers are conducting</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. target readership evaluation.</option><option value="B">B. focus group analysis.</option><option value="C">C. primary market research.</option><option value="D">D. pretest idea measurement.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: primary market research.</h5><h5>Concept testing involves exploring the concept, or idea, for a product in order
to obtain feedback. Concept testing is one way to conduct primary market research, which results in
obtaining new information specifically for the project at hand. The benefit of conducting primary market
research is that it provides information that is relevant to the concept being tested. Other ways to conduct
primary market research include analyzing focus groups, evaluating readership, and pretesting.
</h5></div><h5 id='q47'>47. What is the relationship between research purpose and research design?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. There is no relationship between the two.</option><option value="B">B. Purpose dictates design.</option><option value="C">C. Design is more important than purpose.</option><option value="D">D. Design is unnecessary.

</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: Purpose dictates design.</h5><h5>Research purpose and design have a very important relationship. Purpose
dictates design. If the design is not appropriate to the purpose, a company can waste a lot of time and
money. Both are very necessary ingredients of a research project; one is not more important than the
other.
</h5></div><h5 id='q48'>48. Which of the following is a true statement about sample size:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Sample size is more important than sample design.</option><option value="B">B. The larger the sample size, the better.</option><option value="C">C. It must be determined before the target population is defined.</option><option value="D">D. The size of the sample does not matter.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is B: The larger the sample size, the better.</h5><h5>The size of a sample does matter. Generally speaking, the larger
the sample size, the better. It leaves less room for error. Marketers decide on sample size after they have
defined their target population. Sample size is not more important than sample design.
</h5></div><h5 id='q49'>49. The data needed for sales volume analyses and market share analyses come from</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. company sales reports.</option><option value="B">B. expense reports.</option><option value="C">C. sales invoices.</option><option value="D">D. customer records.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: company sales reports.</h5><h5>The data needed for sales volume analyses and market share analyses come
from the facts and figures in sales reports. Expense reports let a company know how much money is
being spent on employees' food, lodging, travel, etc. Sales invoices don't show sales in relation to goals,
budgets, prior time periods, etc. Customer records don't include sales data for the entire company.
</h5></div><h5 id='q50'>50. What data-collection method can be used to obtain product information during the point-of-purchase
process?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Photographic scanner</option><option value="B">B. Volume-tracking scanner</option><option value="C">C. E-mail survey</option><option value="D">D. Statistical survey</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: Volume-tracking scanner</h5><h5>A scanner is an electronic device that reads or translates codes that are placed
on products and enters the product information into a computer. Scanners are commonly used during a
sales transaction, which is the point of purchase. This is a popular method of collecting information about
customers' buying habits and inventory status because the scanning system can track large volumes of
goods. Once enough data are collected, researchers evaluate the data to determine how fast or slow
certain products are moving, which is information they can use to make business decisions. Photographic
scanners, e-mail surveys, and statistical surveys are not data-collection methods that researchers use
during the point-of-purchase process.
</h5></div><h5 id='q51'>51. What process might a business use to enter marketing data into a computer for analysis?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Editing</option><option value="B">B. Keyboarding</option><option value="C">C. Screening</option><option value="D">D. Tabulating</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Keyboarding</h5><h5>The most popular technique for entering marketing data into a computer for analysis is
keyboarding. The keyboarding technique involves the use of a keyboard that is connected to a computer.
An individual types in the information via the keyboard and then saves it to the computer for future use
and analysis. Before the data are entered into a computer, they are edited for mistakes. Screening is a
method of validating the accuracy of the data. After the data are entered into a computer, researchers are
able to tabulate and analyze the information.
</h5></div><h5 id='q52'>52. A research study participant providing incorrect information on a questionnaire is an example of a</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. feedback method.</option><option value="B">B. negative answer.</option><option value="C">C. false positive.</option><option value="D">D. response error.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: response error.</h5><h5>Marketers decide on sample size after they have
defined their target population. Sample size is not more important than sample design.
</h5></div><h5 id='q53'>53. One way to determine the usefulness and accuracy of research information is to</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. assess timeliness.</option><option value="B">B. organize a database.</option><option value="C">C. calculate frequency.</option><option value="D">D. develop a profile.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: assess timeliness.</h5><h5>To be useful, research information should be timely and current. If the information is
outdated, it might be inaccurate and not helpful in addressing the research problem or issue. As a result,
it is important to assess timeliness when collecting research information to make sure it is as current as
possible. It is not possible to determine the usefulness and accuracy of research information by
organizing a database, calculating frequency, or developing a profile.
</h5></div><h5 id='q54'>54. Customers are more likely to spend a lot of time evaluating several options before buying a product when</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. the need is immediate.</option><option value="B">B. the product is perishable.</option><option value="C">C. the product is expensive.</option><option value="D">D. brand insistence is a factor.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: the product is expensive.</h5><h5>Because money is a limited resource, customers tend to spend more time
comparing and evaluating the features and benefits of expensive items before making a decision to buy.
Individuals tend to spend more time evaluating options when buying homes, cars, and computers.
Businesses tend to spend more time evaluating items such as operating equipment and contract services
(e.g., ad agencies and tech support) before making a decision. Customers are less likely to spend a lot of
time evaluating perishable items (e.g., food) or things that they need immediately (emergency health
care). If a customer has a high level of loyalty to a specific brand, then the customer will spend less time
evaluating competitors' products before making a decision to buy.
</h5></div><h5 id='q55'>55. A market for goods and services exists when there is a group of</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. laborers.</option><option value="B">B. responsible homeowners.</option><option value="C">C. professionals.</option><option value="D">D. potential consumers.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: potential consumers.</h5><h5>Anyone who uses goods and services is a consumer.
Producers are individuals who make or provide goods and services to consumers. Resource owners are
individuals and organizations who provide human resources, natural resources, or capital goods for use
in production. An economizer is someone who strives to obtain the greatest satisfaction from his/her
limited resources.
</h5></div><h5 id='q56'>56. What types of environmental factors do businesses often consider when conducting a situational
analysis?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Formal and informal</option><option value="B">B. Physical and personal</option><option value="C">C. Ethical and legal</option><option value="D">D. Internal and external</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: Internal and external</h5><h5>The environmental factors that businesses consider when conducting a situational
analysis may be internal as well as external. Internal factors are those within the business itself that have
an impact on the business's marketing effort, such as the distribution system or the pricing strategy.
External factors are those that exist outside the business and over which the business may have no
control, such as the state of the economy or the number of competitors. Businesses examine both types
of environmental factors in order to adapt to change and make effective marketing decisions. For
example, a business might decide to adjust its prices to remain competitive if the economy is slowing
down. Physical and personal, ethical and legal, and formal and informal are not types of environmental
factors that businesses consider when conducting a situational analysis.
</h5></div><h5 id='q57'>57. The Microsoft Corporation generated $51.12 billion in revenue in 2007. This is an example of</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. factual information.</option><option value="B">B. unwarranted criticism.</option><option value="C">C. inconclusive evidence.</option><option value="D">D. current data.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: factual information.</h5><h5>E-mail is a quick, efficient way to communicate with customers and coworkers. The
primary reason for writing the e-mail message is to inform others about various business activities;
therefore, it should be written in a friendly, professional manner that contains essential information.
Businesspeople tend to receive a lot of e-mail messages, so it is important to get to the point quickly. The
message should be concise, free of typographical errors, and grammatically correct. The e-mail message
may or may not be urgent, persuasive, or encouraging in nature—these factors depend on the purpose of
the message.
</h5></div><h5 id='q58'>58. How does appropriate information management affect a business's relationship with its customers?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Businesses lose focus on customers.</option><option value="B">B. Businesses earn higher profits.</option><option value="C">C. Businesses serve customers more effectively.</option><option value="D">D. Businesses make better financial decisions.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: Businesses serve customers more effectively.</h5><h5>Managing information appropriately helps businesses
focus on the important task of serving customers more effectively which, in turn, may help lead to higher
profits, although it is not a guarantee. A business's financial decisions may or may not have to do with
serving customers.
</h5></div><h5 id='q59'>59. A company's computer network allows many users to access the same programs on different computer
units throughout the company. What type of computer operating system is the company using?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Hosted</option><option value="B">B. Multithreading</option><option value="C">C. Augmented</option><option value="D">D. Multiprocessing

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: Multiprocessing

</h5><h5>Explanation not available</h5></div><h5 id='q60'>60. What feature do many word-processing software programs contain that enables businesses to prepare
accurate written documents?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Encyclopedia</option><option value="B">B. Calculator</option><option value="C">C. Flowchart</option><option value="D">D. Dictionary</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Dictionary</h5><h5>Many word-processing software programs contain a dictionary, which enables businesses to
check the spelling in their documents. The dictionary feature identifies words that are incorrectly spelled
and provides several alternatives. This feature helps businesses to prepare accurately-written documents
and avoid sending letters or reports to customers that contain misspelled words. Some word-processing
software programs include a calculator, which helps businesses with mathematical tabulations. A
flowchart is part of spreadsheet software programs. Businesses with Internet capability have access to
online encyclopedias.
</h5></div><h5 id='q61'>61. A benefit of using an integrated software application package is that it allows businesses to</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. manage all aspects of the operation.</option><option value="B">B. develop research reports.</option><option value="C">C. search the Internet for information.</option><option value="D">D. prepare routine budgets.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: manage all aspects of the operation.</h5><h5>Integrated software application packages allow businesses to
manage all aspects of the operation, including planning sales, marketing, etc. For example, businesses
can monitor the manufacturing process to track the level of inventory to know when products will be
available to ship to customers and then generate invoices. Word processing software is used to develop
research reports. Spreadsheet programs are used to prepare routine budgets. These programs, as well
as programs that enable businesses to search the Internet, may be combined in an integrated software
application package.
</h5></div><h5 id='q62'>62. If a business wants all of the members of a project team to have the ability to access the same
information from different locations, it should use _________ applications.</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. data mining</option><option value="B">B. presentation software</option><option value="C">C. spreadsheet software</option><option value="D">D. groupware computer</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: groupware computer</h5><h5>Scanners are commonly used during a
sales transaction, which is the point of purchase. This is a popular method of collecting information about
customers' buying habits and inventory status because the scanning system can track large volumes of
goods. Once enough data are collected, researchers evaluate the data to determine how fast or slow
certain products are moving, which is information they can use to make business decisions. Photographic
scanners, e-mail surveys, and statistical surveys are not data-collection methods that researchers use
during the point-of-purchase process.
</h5></div><h5 id='q63'>63. Businesses usually maintain customer sales records that contain information about the</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. discounts offered by manufacturers.</option><option value="B">B. types of products being purchased.</option><option value="C">C. cost of paying commissioned salespeople.</option><option value="D">D. suppliers that provide the goods.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: types of products being purchased.</h5><h5>Businesses maintain a variety of records about the quantities and
types of products that customers are purchasing. These records are usually known as sales records. By
analyzing past sales records, businesses can determine what customers are buying, when they are
buying, and how much they are buying. This helps a business forecast future sales so it can be prepared
to offer the products that customers want. Businesses do not maintain customer sales records that
contain information about the discounts offered by manufacturers, the cost of paying commissioned
salespeople, or the suppliers that provide the goods.
</h5></div><h5 id='q64'>64. A clothing manufacturer builds quality into its operating system, placing responsibility on each employee.
This process is known as quality</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. delivery.</option><option value="B">B. guarantee.</option><option value="C">C. assurance.</option><option value="D">D. inspection.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: assurance.</h5><h5>This clothing manufacturer is using quality assurance. Quality assurance is a process
businesses use to prevent defective products from being created, not just to eliminate or correct them
after they've already been produced. Quality inspection is a process businesses use to check for defects
after products have been produced. Quality guarantee and quality delivery are not traditional terms used
in operations or quality control.
</h5></div><h5 id='q65'>65. Some companies have lowered the number of accidents on the job by using</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. fewer workers.</option><option value="B">B. safety programs.</option><option value="C">C. suggestion boxes.</option><option value="D">D. surveillance cameras.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: safety programs.</h5><h5>An operating system that allows several central processing units
(computers) to access a single program has multiprocessing capabilities. Multithreading capabilities allow
different components of one computer program to run at the same time. Augmented and hosted are not
types of operating systems.
</h5></div><h5 id='q66'>66. The purpose of depositing large bills in drop boxes upon receipt is to prevent</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. robbery.</option><option value="B">B. fraud.</option><option value="C">C. burglary.</option><option value="D">D. pilferage.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: robbery.</h5><h5>Cash drop boxes are built into the floor of the business and cannot be removed or opened by
employees. Businesses using drop boxes often attempt to prevent robberies by posting a sign indicating
that they use a drop box. Fraud, deceiving or cheating an individual or a business out of money; burglary,
any illegal entry into a building to commit a theft; and pilferage, theft of small sums of money or
inexpensive items, are all types of losses that businesses try to prevent.
</h5></div><h5 id='q67'>67. What do managers often do after a project has been successfully completed?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Provide feedback to vendors</option><option value="B">B. Close the front office</option><option value="C">C. Give up power</option><option value="D">D. Prepare a report</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: Prepare a report</h5><h5>When a project has been successfully completed, it's a good idea to have a final
meeting. Group members often will have suggestions for improvement that the manager can include in a
report. Managers usually prepare some type of brief report that explains the project, what worked, and
what didn't work. This is particularly helpful if the project is one that will be completed again. The
information in the report will make next year's project much easier to plan and manage. In many cases,
there is no front office to close. Managers do not actually give up power or authority. The project they
were in charge of is simply over. After the project has been completed, managers often obtain feedback
from the group to include in a report.
</h5></div><h5 id='q68'>68. Tatiana is a project manager who is ready to close a project, and has scheduled a “lessons learned”
meeting with the project team. What will Tatiana most likely include on her meeting agenda?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Explanation of the stakeholders' expectations</option><option value="B">B. The definition of the project's purpose</option><option value="C">C. Discussion of specific challenges encountered</option><option value="D">D. The distribution of project resources allocated</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: Discussion of specific challenges encountered</h5><h5>After the stakeholders receive the deliverables, the
project manager often meets with the team members to discuss what went well and what didn't go well
with the project. The team members also discuss how processes could have been improved. The
information obtained from the “lessons learned” meeting is summarized in a “lessons learned” document,
which can be used by teams that execute similar projects for the organization in the future. The project's
purpose and the stakeholders' expectations are explained during the initiation phase of the project. The
allocation of resources is determined during the planning phase of the project.
</h5></div><h5 id='q69'>69. Which of the following represents an operating expense for a business:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Sales revenue</option><option value="B">B. Cost of goods</option><option value="C">C. Cost of utilities</option><option value="D">D. Returns and allowances</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Cost of utilities</h5><h5>This is an expense that is part of a business's day-to-day operation. Sales revenue is
income coming into the business from sales. The cost of goods is the expense of purchasing the goods.
Returns and allowances are refunds or price adjustments given to customers.
</h5></div><h5 id='q70'>70. Which of the following is a true statement about housekeeping in a retail business:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. It is not an important responsibility.</option><option value="B">B. It is usually a monthly activity.</option><option value="C">C. It is an ongoing responsibility.</option><option value="D">D. It is limited to emptying trash.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: It is an ongoing responsibility.</h5><h5>Keeping the sales areas of a retail business clean and neat is not a onetime or monthly activity, but an ongoing responsibility. It can include dusting, straightening stock, picking
up debris from the floor, getting rid of empty boxes, or any other light housekeeping chores that are
needed. It is important to the success of the business for customers to find sales areas as neat and clean
as possible.
</h5></div><h5 id='q71'>71. Which of the following would be a short-term financial goal:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Starting your own business</option><option value="B">B. Saving enough to buy a DVD</option><option value="C">C. Walking a mile every day</option><option value="D">D. Getting a promotion within five years

</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Saving enough to buy a DVD</h5><h5>A short-term goal is an objective or want that takes less than a year to
achieve—normally set for a day, week, or month. Saving money for any purpose, such as purchasing a
DVD, is a financial goal. Starting your own business would be a career goal that includes long-term
financial goals. Walking a mile every day is a physical goal. Getting a promotion within five years is a
long-term career goal.
</h5></div><h5 id='q72'>72. Creative problem solving requires the ability to think</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. nontraditionally.</option><option value="B">B. systematically.

7
</option><option value="C">C. methodically.</option><option value="D">D. illogically.
</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: nontraditionally.</h5><h5>To solve problems innovatively, you must be able to break away from traditional,
systematic, methodical thought patterns. By no means, however, does this imply that creative thinking
should be illogical.
</h5></div><h5 id='q73'>73. The principles by which you live your life are referred to as your</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. feelings.</option><option value="B">B. values.</option><option value="C">C. issues.</option><option value="D">D. interests.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: values.</h5><h5>In order to develop self-understanding, you should examine your values because they affect
everything you are and plan to become. Feelings are the emotional responses (positive or negative)
elicited by values, issues are points of interest and/or disagreement, and interests are the things that we
are involved with, concerned for, or curious about.
</h5></div><h5 id='q74'>74. What should job applicants do if certain questions on the application do not pertain to them?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Leave the space blank</option><option value="B">B. Make up an answer</option><option value="C">C. Ignore the question</option><option value="D">D. Write N/A in the space</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: Write N/A in the space</h5><h5>Some questions on job applications do not pertain to all applicants, such as
military service. In those cases, the applicants should write N/A, or Not Applicable, indicating that they
have read and understood the question, but that it does not pertain to them. Applicants should not leave
the space blank because businesses may think that they overlooked the question or did not understand
it. It is never appropriate to make up an answer or to purposely ignore a question.
</h5></div><h5 id='q75'>75. Job applicants often list on their résumés the names, positions, and addresses of several people who are
willing to serve as</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. references.</option><option value="B">B. companions.</option><option value="C">C. associates.</option><option value="D">D. colleagues.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: references.</h5><h5>Many job applicants include the names, positions, and addresses of several people who
have agreed to be their references. References are people who can provide information about an
applicant's character and qualifications. References often include former teachers and employers and
long-time family friends. Companions and associates are terms for people who work, travel, and
participate in activities together. Colleagues are coworkers.
</h5></div><h5 id='q76'>76. Which of the following is an example of an occupationally specific trade association:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Retail Merchants Association</option><option value="B">B. National Restaurant Association</option><option value="C">C. Chamber of Commerce</option><option value="D">D. Sales and Marketing Executives International</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: National Restaurant Association</h5><h5>Members of the National Restaurant Association all have interests in
the field of food service. Merchants' associations and chambers of commerce unite individuals who
represent the same geographic region but different areas of marketing. SMEI is a professional
organization for sales executives who work in a variety of industries.
</h5></div><h5 id='q77'>77. The price factor is important to the other three factors in marketing because the four marketing factors
are</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. in competition.</option><option value="B">B. interdependent.</option><option value="C">C. unique.</option><option value="D">D. equivalent.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: interdependent.</h5><h5>Pricing plays a key role in marketing. In fact, it is one of four factors in marketing:
product, price, place, and promotion. These factors are interdependent because a change in one of these
will change the others. The four factors are not in competition, nor are they unique or unusual. The
marketing factors are not equivalent or the same.
</h5></div><h5 id='q78'>78. Predatory pricing is an unethical business practice because it can create economic conditions in which</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. consumers have fewer choices.</option><option value="B">B. consumers pay higher property taxes.</option><option value="C">C. small businesses gain significant profits.</option><option value="D">D. small businesses control market conditions.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: consumers have fewer choices.</h5><h5>Predatory pricing is the practice of pricing goods extremely low with the
goal of driving the competition out of business. If a company forces its competitors out of business,
consumers have fewer items from which to choose or fewer places to purchase goods. Predatory pricing
practices might leave fewer choices for consumers, but they do not necessarily lead to higher property
taxes. Small companies are often the businesses that are most affected by predatory pricing.
</h5></div><h5 id='q79'>79. Product/service management can help to decrease</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. business risk.</option><option value="B">B. profits.
</option><option value="C">C. sales.</option><option value="D">D. financial success.
</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: business risk.</h5><h5>Natural risks result from such natural causes as floods, tornadoes, fires, lightning,
blizzards, and earthquakes. Human risks are caused by human weakness and the unpredictability of
employees and/or customers. Incompetence is a form of human risk whereby the employee does not
have the skills, knowledge, or attitudes needed to succeed in the position.
</h5></div><h5 id='q80'>80. What is a technologically advanced method that allows businesses to produce products that are
specialized for a very few customers?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Mass customization</option><option value="B">B. Automatic production</option><option value="C">C. Computerized robotics</option><option value="D">D. Intermittent conversion</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Mass customization</h5><h5>Computerization and the technology of mass production have created the method of
mass customization which allows businesses to produce customized products for one customer or only a
very few customers. Businesses that use a mass-customization method can produce large quantities of
one product in many different varieties. This method allows businesses to meet the individual needs of
many customers by making variations of one product. Automatic production, computerized robotics, and
intermittent conversion are not methods that allow businesses to produce products that are specialized
for a very few customers.
</h5></div><h5 id='q81'>81. Which of the following is an example of a business behaving ethically in an effort to protect consumers:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Explaining the new manufacturing process</option><option value="B">B. Wrapping products in plain paper</option><option value="C">C. Placing informative commercials on television</option><option value="D">D. Using tamper-resistant packaging</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: Using tamper-resistant packaging</h5><h5>Many businesses produce products that might be harmful to
consumers if the products are tampered with or become contaminated. To protect consumers,
businesses often use tamper-resistant packaging which makes it extremely difficult for someone to get to
the product without damaging the packaging. As a result, customers are able to easily determine if this
type of packaging has been tampered with, which warns them not to buy the products. Using tamperresistant packaging is an ethical procedure that businesses follow in an effort to protect their products
and ensure the safety of their customers. Products usually are not wrapped in plain paper. Placing
informative commercials on television and explaining the new manufacturing process are not ways of
protecting consumers.
</h5></div><h5 id='q82'>82. Being attentive, watching trends, and pinpointing problems are ways for entrepreneurs to uncover</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. true motives.</option><option value="B">B. financial strategies.</option><option value="C">C. intangible goals.</option><option value="D">D. product opportunities.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: product opportunities.</h5><h5>A product opportunity occurs when a favorable circumstance to market a product
exists. Entrepreneurs uncover these circumstances by being attentive, watching trends, and pinpointing
problems. Financial strategies are plans of action for achieving financial goals. An intangible goal is an
objective or desired outcome that cannot be detected through the senses. True motives are the real
reasons for taking a certain course of action.
</h5></div><h5 id='q83'>83. What synectics technique compares a problem with something else that is unrelated?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Discretionary comparisons</option><option value="B">B. Forced analogies</option><option value="C">C. Arbitrary metaphors</option><option value="D">D. Deliberate allegories

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: Forced analogies</h5><h5>A forced analogy is a synectics technique that compares a problem with something
totally unrelated. Arbitrary metaphors, discretionary comparisons, and deliberate allegories are not terms
widely used to describe a synectics creative-thinking method.
</h5></div><h5 id='q84'>84. Feedback from customers about problems with products provides producers with the information needed
to</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. select promotional media.</option><option value="B">B. hire employees.</option><option value="C">C. make product improvements.</option><option value="D">D. modify brand values.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: make product improvements.</h5><h5>Businesses receive benefits from offering warranties and guarantees. One
benefit is getting feedback from customers about unsatisfactory products. Without this feedback, the
company would not be able to make corrections and improvements in its products. Companies do not
use information about problems with products to select promotional media, hire employees, or modify
brand values.
</h5></div><h5 id='q85'>85. Which of the following would be least likely to be found on the label of a nonhazardous product:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Proper circumstances for use</option><option value="B">B. Acceptable uses</option><option value="C">C. Precautions when using the product</option><option value="D">D. Ingredients</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Precautions when using the product</h5><h5>Labels for nonhazardous products should list all ingredients, any
additives or preservatives the product contains, fiber content, acceptable uses, unacceptable uses, or
proper circumstances for use. On the other hand, producers of hazardous products can use the product
label to warn consumers of any dangers involved in using the product and tell them what precautions to
take. For example, the makers of a drain cleaner print a poison "death's head" on the label and tell
consumers how to protect themselves when using the cleaner. All label information should be accurate
and as easy to understand as possible.
</h5></div><h5 id='q86'>86. What a brand is and stands for, as well as how it behaves and the qualities it projects, are embodied in
its</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. personality.</option><option value="B">B. identity.</option><option value="C">C. logo.</option><option value="D">D. equity.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: personality.</h5><h5>Just as with a person, the brand has an essence, or a personality, that embodies what it is,
what it stands for, and how it behaves. Brand equity is customers' goodwill that accumulates over time,
while brand identity consists of a brand's representations, including a name, logo, and possibly, a trade
character. A logo is a brand symbol—that part of its identity that cannot be spoken.
</h5></div><h5 id='q87'>87. The marketing function that helps sellers to provide information to buyers about the seller's products is</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. distribution.</option><option value="B">B. promotion.</option><option value="C">C. purchasing.</option><option value="D">D. financing.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: promotion.</h5><h5>Promotion is the communication of information about goods, services, images, and/or ideas.
It is used by businesses to inform consumers about products and to persuade them to buy. Distribution is
the marketing function that is responsible for moving, storing, locating, and/or transferring ownership of
goods or services. Purchasing is a business activity which involves the planning and procedures
necessary to obtain goods and services for use in the operation of a business or for resale. Financing is a
business activity which involves understanding the financial concepts used in making business decisions.
</h5></div><h5 id='q88'>88. One reason advertising prescription drugs online might be considered an ethical issue is because the
advertisements might persuade customers to</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. use drugs they do not need.</option><option value="B">B. obtain drugs from the manufacturer.</option><option value="C">C. buy drugs they cannot afford.</option><option value="D">D. order drugs that are inexpensive.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: use drugs they do not need.</h5><h5>Advertising prescription drugs is often a controversial topic. Those who feel
it is ethical to advertise drugs believe that the ads are simply providing information. Those who feel that
this type of advertising might be unethical believe that it persuades customers to ask their doctors for
drugs they do not need. If customers see ads for certain drugs, they may decide they would like to try
them. Oftentimes, doctors will write prescriptions for patients if they are persistent, even if the doctors
don't think the drugs are necessary. Also, promoting name-brand prescription drugs encourages
customers to ask for them rather than comparable generic drugs that are less expensive. Customers
usually are unable to buy drugs they cannot afford. Prescription drugs usually must be purchased from a
licensed pharmacy rather than from the manufacturer. Persuading customers to order inexpensive drugs
is not an ethical issue.
</h5></div><h5 id='q89'>89. Which of the following technological tools has made it possible for a business to send personalized
promotional messages in a cost-efficient manner:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Electronic mail</option><option value="B">B. Encryption card</option><option value="C">C. Interactive banner</option><option value="D">D. Exclusive kiosk</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: Electronic mail</h5><h5>Electronic mail (e-mail) refers to the electronic transmission of messages across
computer networks. Businesses often use electronic mail to send promotional messages to customers or
potential customers in a cost-efficient manner. Encryption card, interactive banner, and exclusive kiosk
are not technological terms that are commonly used to describe a means of sending promotional
messages.
</h5></div><h5 id='q90'>90. What type of promotional media might a statewide chain of supermarkets use in order to reach a large
number of potential customers in its geographic area?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Regional magazines</option><option value="B">B. Suburban newspapers</option><option value="C">C. National television</option><option value="D">D. Transit advertising</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Suburban newspapers</h5><h5>Newspapers are the main advertising media for supermarkets. Suburban
newspapers are intended for audiences within a certain geographic area. These newspapers contain
articles that appeal to customers who live in that area and attract advertisers who want to reach that
specific market. A statewide chain of supermarkets might choose to advertise in suburban newspapers in
order to reach a large number of potential customers who live in the area that the chain services. Transit
advertising serves certain city areas and would not reach customers in the chain's entire area. Regional
magazines and national television would reach customers far beyond the chain's geographic area.
</h5></div><h5 id='q91'>91. What best describes the goal of amplified word-of-mouth?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Encouraging customers to provide both positive and negative feedback</option><option value="B">B. Providing information to activists to share with others</option><option value="C">C. Building loyal relationships with the customers</option><option value="D">D. Improving the quality of goods and services the business offers</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: Providing information to activists to share with others</h5><h5>Word-of-mouth promotion involves customers who
tell others about their satisfaction with the business. Amplified word-of-mouth promotion involves the use
of proactive efforts (campaigns) in which the business provides specific information to customers
(activists) to pass along to their friends, family, and business contacts. On the other hand, organic wordof-mouth promotion occurs naturally. Because customers are satisfied with the business and its products,
they tell others about this satisfaction in the course of normal conversation. For example, if a business
shows a sincere interest in the customer by asking for feedback, taking actions to ensure customer
loyalty, or improving products, the customer is likely to share those positive experiences with others.
</h5></div><h5 id='q92'>92. What communication channels is a corporation's public-relations department most likely to use to
maintain positive relationships with shareholders?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Newsletters, annual reports, and the company's web site</option><option value="B">B. Press releases, online social networks, and print advertisements</option><option value="C">C. News conferences, consumer blogs, and employee manuals</option><option value="D">D. Policy manuals, commercials, and sponsorships</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is A: Newsletters, annual reports, and the company's web site</h5><h5>Public relations involves establishing good
relationships between the business and the public. A business tries to maintain positive relationships with
different groups that make up the public, such as employees, local businesses, government officials, the
media, and the business's shareholders. Because the shareholders are the owners of the company, it is
important to develop and maintain positive relationships with them. The public-relations department does
this by communicating with them through newsletters, annual reports, the company's web site, and online
social networks. Print advertisements and commercials are forms of nonpersonal advertising. Businesses
use press releases and news conferences to convey information to the media. Policy manuals help guide
employees' actions on the job. Consumer blogs can be developed by anyone to communicate positive
and negative information about various goods and services. A sponsorship is a partnership in which a
company pays a fee to affiliate itself with a team, league, or event.
</h5></div><h5 id='q93'>93. What communication channel do businesses often use to disseminate positive public-relations
information about themselves and their employees to external audiences?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. The media</option><option value="B">B. Marketing-research firm</option><option value="C">C. Creative writer</option><option value="D">D. Infomercial</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: The media</h5><h5>Policy manuals help guide
employees' actions on the job. Consumer blogs can be developed by anyone to communicate positive
and negative information about various goods and services. A sponsorship is a partnership in which a
company pays a fee to affiliate itself with a team, league, or event.
</h5></div><h5 id='q94'>94. The most appropriate way for the High-Tech Computer Company to communicate information about its
new line of computers at a trade show is by</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. sending direct mail.</option><option value="B">B. holding product demonstrations.</option><option value="C">C. placing billboard advertisements.</option><option value="D">D. developing a contest.

</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: holding product demonstrations.</h5><h5>A trade show is an event where businesses communicate information
about products to build sales leads and interest. Trade-show participation is a way for businesses to
communicate with the individuals or businesses most likely to buy the business's products. When a
business's salesperson demonstrates the product, trade-show attendees see the product's attributes and
how it works. In some demonstrations, the show attendees often have an opportunity to try the product
themselves. Businesses send direct mail to their customers' homes and businesses. A billboard is a form
of outdoor advertising. Direct mail and billboards are not the most appropriate ways to communicate at a
trade show. A contest is a sales promotion activity that offers a prize or award. Holding a contest, rather
than developing one, is a good way to draw attendees to a trade-show booth, so the business can
communicate information about its products.
</h5></div><h5 id='q95'>95. A business's advertising and display efforts should be</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. contradictory.</option><option value="B">B. coordinated.</option><option value="C">C. separate.</option><option value="D">D. competitive.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: coordinated.</h5><h5>Advertising and display should work together and have a common theme in order to do an
effective job of selling the business's products. Such coordination results in a comprehensive promotional
approach, rather than a disjointed one that would result from independent, contradictory, or competitive
efforts.
</h5></div><h5 id='q96'>96. Which of the following situations is most likely to result in long-term, increased sales for a business:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Constantly providing new choices for consumers</option><option value="B">B. Raising the price of its current products</option><option value="C">C. Lowering the price of its current products</option><option value="D">D. Eliminating a slow-selling product line</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: Constantly providing new choices for consumers</h5><h5>There is much competition between businesses, which
leads to increased competition to produce better products. Businesses need to develop new or improved
products in order to make more sales than their competitors. A company that raises or lowers the prices
of existing products may make temporary sales gains, but only a company that provides choices based
on the needs of its consumers will enjoy a long-term sales increase. Elimination of a slow-selling product
line may not increase sales for a business.
</h5></div><h5 id='q97'>97. Salespeople may risk losing a sale to a potential customer if they are unable to explain a business's
__________ policies.</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. purchasing</option><option value="B">B. operating</option><option value="C">C. employee</option><option value="D">D. selling</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: selling</h5><h5>Selling policies are general rules established by management to guide the personal selling effort
and outline how things must be done. Salespeople may encounter problems when they are not
knowledgeable of their company's selling policies, and are unable to explain them to potential customers.
Salespeople may risk losing a sale if they are unable to explain policies about issues such as credit terms
and delivery service. Operating policies regulate the actual running of a business. Employee policies are
guidelines explaining how employees are to act and how they are to deal with customers. Purchasing
policies are guidelines that direct purchasing decisions.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1069

MARKETING CLUSTER EXAM

1

1. The purpose of legal procedure is to ensure that each party receives</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. What would others advise?</option><option value="B">B. What can I get away with?</option><option value="C">C. What is required of me?</option><option value="D">D. What is the right thing to do?</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: What is the right thing to do?</h5><h5>reports. Spreadsheet programs are used to prepare routine budgets. These programs, as well
as programs that enable businesses to search the Internet, may be combined in an integrated software
application package.
</h5></div><h5 id='q99'>99. What form of technology are salespeople using that eliminates the need to carry a laptop and personal
data assistant while making sales calls?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Router</option><option value="B">B. Pager</option><option value="C">C. Micro kiosk</option><option value="D">D. Smartphone</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: Smartphone</h5><h5>Smartphones, such as Blackberries and iPhones, are mobile devices that salespeople can
use to make telephone calls, access the Internet, manage contacts, schedule appointments, and send
wireless faxes while calling on customers. Smartphones also contain digital cameras, which are often
useful when salespeople must take photographs of goods or spaces that require customized products.
Because smartphones have many applications and are small enough to fit into a coat pocket,
salespeople no longer need to carry around laptops, personal data assistants, etc. Pagers have
capabilities such as telephone message notification and e-mail, but do not have the same capabilities as
smartphones. A kiosk is a stand-alone structure placed in public places that is designed to provide
information and sell products. Micro kiosks are smaller and more compact than traditional kiosks. A
router is a device that intercepts and forwards signals on a computer network, allowing users to obtain
wireless Internet access.
</h5></div><h5 id='q100'>100. Which of the following is a disadvantage of the matrix organizational structure:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. It lacks flexibility.</option><option value="B">B. It makes the organization less competitive.</option><option value="C">C. It cannot balance conflicting organizational objectives.</option><option value="D">D. It violates the unity of command principle.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: It violates the unity of command principle.</h5><h5>The matrix organizational structure violates the unity of
command principle by giving employees more than one manager to answer to at a time. It does not make
the organization less competitive. It does not lack flexibility. Balancing conflicting organizational
objectives is an advantage of the matrix structure.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_3_Split_Master.js"></script></html>