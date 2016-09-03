<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=1></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles_Exam_13</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Nicole's Manicure Salon has operated successfully for the past 15 years. Recently, Nicole decided to
expand by offering several people the opportunity to own and operate a Nicole's Manicure Salon in other
locations. Which form of business ownership would allow Nicole to attain her goal?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Business-format franchise</option><option value="B">B. Product trade name</option><option value="C">C. General partnership</option><option value="D">D. Limited partnership</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is A: Business-format franchise</h5><h5>A business-format franchise operates under a trade name and offers the
opportunity for many people to become their own bosses while helping companies expand more
efficiently. Product trade-name franchises offer an agreement to stock and sell a specific or exclusive line
of goods. General partnership agreements are designed to combine capital, experience, and the abilities
of two or more people. Limited partnerships are designed for two or more people who want limited
liabilities.
</h5></div><h5 id='q2'>2. Which of the following usually is the first step in applying written directions to achieve tasks:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Questioning</option><option value="B">B. Listening</option><option value="C">C. Speaking</option><option value="D">D. Reading</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reading</h5><h5>The first step in applying written directions to achieve tasks usually involves reading the
directions. Employees need to understand the written directions before they can apply them. Therefore,
reading for understanding and meaning is an important step. Employees should listen if the directions are
given verbally rather than in writing. If employees do not understand the written directions, they might
speak to a manager and ask questions for clarification. However, they should first read the directions.
</h5></div><h5 id='q3'>3. Which of the following business resources provides information about the company's dress codes and
vacation policies, and general rules for appropriate behavior:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Productivity manual</option><option value="B">B. Employee handbook</option><option value="C">C. Customer newsletter</option><option value="D">D. Personnel record</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: Employee handbook</h5><h5>Businesses often develop employee handbooks that provide information about
their general policies and procedures. For example, a business might outline overtime and vacation
policies, disciplinary and grievance procedures, pay schedules, dress codes, and behavioral expectations
in its employee handbook. Employee handbooks are usually given to new employees when they first start
their jobs. Productivity manuals, customer newsletters, and personnel records are not sources that
workers use to obtain information about a company's general policies and procedures for employees.
</h5></div><h5 id='q4'>4. To be able to better understand and follow directions on the job, employees often</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. ask questions.</option><option value="B">B. review notes.</option><option value="C">C. do research.</option><option value="D">D. practice tasks.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: ask questions.</h5><h5>Before employees can follow directions, they must understand them. Therefore, asking
questions is important because supervisors do not always give directions in a clear and concise manner.
If employees are not sure of what is expected, they should ask. Taking the time to completely understand
the directions will help employees to do the work correctly and efficiently. Reviewing notes may not be
helpful if employees have written down incorrect directions. Employees are not expected to do the
research; researching is the responsibility of supervisors. Before employees can practice tasks, they
need accurate directions.
</h5></div><h5 id='q5'>5. Which of the following usually is a benefit of listening to others and trying to understand what they are
saying in order to respond appropriately:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Respect of coworkers</option><option value="B">B. Guaranteed promotions</option><option value="C">C. Access to management</option><option value="D">D. Fewer assignments</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Respect of coworkers</h5><h5>Being able to listen effectively is an important skill in the world of work. Employees
who listen to others and try to understand what they are saying usually are able to respond appropriately.
The benefit is that they earn the respect of coworkers because they take the time to try to truly
understand what others are saying. As a result, they are able to answer questions, complete job
assignments correctly, and assist coworkers when necessary. Being able to listen effectively might lead
to a promotion but does not guarantee it. Being able to listen effectively does not necessarily mean that
employees will have access to management. Employees who listen effectively often have more
responsibility rather than fewer assignments.
</h5></div><h5 id='q6'>6. Which of the following adds meaning to the words a speaker uses:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Accuracy</option><option value="B">B. Tempo</option><option value="C">C. Tone of voice</option><option value="D">D. Economy of speech</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: Tone of voice</h5><h5>People can change the meaning of their words by changing their tone of voice. For
example, the same words can be a request or a command depending upon the tone used to deliver
them. Tempo is the rate of speed or rhythm the speaker uses. Economy of speech is using as few words
as possible to express an idea. Accuracy refers to the correctness of the message.
</h5></div><h5 id='q7'>7. What communication style is most appropriate to use when you are providing a friend with personal
advice?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Formal</option><option value="B">B. Empathic</option><option value="C">C. Judgmental</option><option value="D">D. Businesslike</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: Empathic</h5><h5>undefined</h5></div><h5 id='q8'>8. What should employees keep in mind when trying to be objective while defending their ideas?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. It might be difficult to explain the data.</option><option value="B">B. Managers may be too busy to ask questions.</option><option value="C">C. The result might be office conflict.</option><option value="D">D. Others may have different opinions.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: Others may have different opinions.</h5><h5>When defending their ideas, employees should keep in mind that
others might not agree with the ideas or may have different opinions. If this happens, employees need to
remain objective and clearly explain their ideas and provide supporting information. Being calm and
logical is often the best way to defend ideas to others who have different opinions. Managers usually ask
questions because they want to clarify information and make sure they understand the ideas. Employees'
objectively defending their ideas usually does not result in office conflict. If employees understand their
ideas, it should not be difficult to explain the data.
</h5></div><h5 id='q9'>9. Which of the following is a true statement about listening skills while handling telephone calls:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. It is easy to listen while carrying on other activities.</option><option value="B">B. Being a good listener requires active listening skills.</option><option value="C">C. Listening is a natural skill that doesn't require practice.</option><option value="D">D. If you listen very carefully, you will not have to ask questions.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Being a good listener requires active listening skills.</h5><h5>In order to be a good listener while handling
telephone calls, you need to learn to shut out distractions, put aside what you are working on, and focus
on what the speaker is saying. This is not a natural skill, but it is one that can be learned through
practice. There will still be times when, no matter how carefully you listen, you will have to ask questions.
</h5></div><h5 id='q10'>10. One computer tool that a businessperson can use to organize online information for a research report is</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. online survey services.</option><option value="B">B. index cards.</option><option value="C">C. statistical applications.</option><option value="D">D. mind-mapping programs.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: mind-mapping programs.</h5><h5>Mind-mapping computer programs help individuals organize a lot of information
in a meaningful way. Some web sites, such as Bubbl.us and Mindmeister, provide mind-mapping
programs free of charge. After mapping out the information in a logical order, the writer can then prepare
the report in a clear, understandable way. Index cards are manual tools for organizing information.
Statistical applications record numerical data. Online survey services (e.g., SurveyMonkey.com) allow
users to prepare, distribute, and analyze online questionnaires.
</h5></div><h5 id='q11'>11. After Lana finishes writing the promotional copy for a direct-mail letter, she plans to proofread and edit
her work on her computer. What technique will help Lana determine if the text is clear and logical?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Reading the text aloud</option><option value="B">B. Reading the text backwards</option><option value="C">C. Correcting grammatical mistakes</option><option value="D">D. Correcting punctuation errors
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Reading the text aloud</h5><h5>By reading the text aloud, Lana will not only see the text, she will hear it. By
hearing the words, Lana can detect missing words and assess the clarity and sequence of the
information. Reading text backwards helps detect misspelled words, punctuation errors, and some
grammatical errors, but this activity does not help the editor clarify that content is logical and meaningful.
</h5></div><h5 id='q12'>12. Which of the following message closings is the most appropriate to use for a businessperson who is
sending formal e-mail correspondence:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Greetings</option><option value="B">B. THX</option><option value="C">C. Regards</option><option value="D">D. Affectionately</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: Regards</h5><h5>A closing is the point in which the writer ends a letter with a word of farewell just before signing
his/her name. When writing business letters, closings are usually neutral, professional, and friendly.
Closings such as "regards" and "sincerely" are common ways to end business letters. THX is an
initialism that represents the word thanks. Initialisms are not appropriate to use to close formal business
letters. A writer might use "greetings" to open an informal letter and use "affectionately" to close a letter
to a friend, family member or significant other.
</h5></div><h5 id='q13'>13. The opening sentences of an effective business letter should</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. avoid specific details.</option><option value="B">B. be completely impersonal.</option><option value="C">C. always be formal.</option><option value="D">D. come right to the point.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: come right to the point.</h5><h5>The opening paragraph of a business letter should explain the reason for writing
and come right to the point. Effective business letters do not waste the reader's time by providing a lot of
unnecessary information, but they immediately come to the point and capture the reader's attention. The
letter does not need to be formal, but it should contain specific details and have personal appeal for the
reader.
</h5></div><h5 id='q14'>14. Which of the following is a reason why businesses write informational messages:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. To prepare letters</option><option value="B">B. To sell products</option><option value="C">C. To develop memos</option><option value="D">D. To identify customers</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: To sell products</h5><h5>One reason why businesses write informational messages is to sell products to
customers. Businesses often develop sales letters that explain their goods and services and send these
letters to prospective or current customers. The sales letters include important information about the
business and its products and are intended to encourage customers to buy. Letters and memos are types
of informational messages. Businesses identify customers before sending them informational messages.
</h5></div><h5 id='q15'>15. To make a request of a business associate or customer is one of the reasons why businesspeople write</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. corporate memorandums.</option><option value="B">B. persuasive messages.</option><option value="C">C. sales letters.</option><option value="D">D. letters of inquiry.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: letters of inquiry.</h5><h5>undefined</h5></div><h5 id='q16'>16. A message from the company president to all employees concerning a change in insurance coverage is
a form of __________ communication.</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. informal</option><option value="B">B. staff</option><option value="C">C. upward</option><option value="D">D. lateral</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: staff</h5><h5>Messages for all employees are considered staff communication. This is a form of downward
communication in which information is presented to employees by management. Upward communication
occurs when employees present information to management. Informal communication is the unofficial
exchange of information among members of an organization. Lateral, or horizontal, communication
involves the exchange of information between employees on the same level.
</h5></div><h5 id='q17'>17. Sam's supervisor has asked him to provide an update about the status of his project during an upcoming
meeting. Before Sam attends the meeting, it is important that he</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. gathers necessary information.</option><option value="B">B. has plenty of handouts.</option><option value="C">C. develops minutes for the meeting.</option><option value="D">D. obtains feedback.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: gathers necessary information.</h5><h5>Before the meeting takes place, Sam should gather information and
prepare notes for the meeting, so that he can provide necessary input or feedback that his supervisor has
requested. If Sam attends the meeting and does not have the correct information, he may lose credibility
with his supervisor and coworkers in terms of his job performance. Having handouts for meeting
participants and obtaining feedback from others may not be necessary for Sam to provide. Minutes are a
formal method of note taking that document the discussion, vote taking, and problem resolution that
occur during the meeting. A specific person usually writes the minutes during the meeting.
</h5></div><h5 id='q18'>18. The primary reason customers give for not returning to a business is a lack of</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. courtesy from salespeople.</option><option value="B">B. available parking.</option><option value="C">C. advertised merchandise.</option><option value="D">D. customer-service personnel.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: courtesy from salespeople.</h5><h5>Many customers don't complain about the treatment they receive, but they
don't return to the business to shop. A lack of parking, advertised items, or customer-service personnel
could also be detrimental to a business, but they are not likely to have as much impact on the customer
as an encounter with a rude or indifferent salesperson.
</h5></div><h5 id='q19'>19. What is often a benefit to a business of providing good customer service?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. More publicity</option><option value="B">B. Increased assets</option><option value="C">C. Longer season</option><option value="D">D. Greater profits</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: Greater profits</h5><h5>Businesses that provide good customer service usually retain their current customers.
Since it is much less costly to retain current customers than to find new ones, greater profits are usually
the result. Publicity is any nonpersonal presentation of goods, services, or ideas that is not paid for by the
company which benefits from it. Assets are anything of value that the business owns. Season is a certain
time of year.
</h5></div><h5 id='q20'>20. Businesses benefit when employees handle customer inquiries in an effective manner because</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. customers' confidence in the business increases.</option><option value="B">B. customers feel free to return products.</option><option value="C">C. customers feel the need to ask more questions.</option><option value="D">D. customers' total purchases are reduced.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: customers' confidence in the business increases.</h5><h5>Customers' confidence in a business grows when the
business provides accurate answers to their product questions. They feel the sales staff are
knowledgeable, which also gives customers more confidence in the products they buy. Customers are
less likely to need to return products when their questions about those products have been answered,
and their total purchases are more likely to increase than decrease. Customers may need to ask fewer
questions when their inquiries are handled in an effective manner.
</h5></div><h5 id='q21'>21. Businesses develop policies to help employees deal with customers the same way in similar situations so
that employees will</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. offer special privileges.</option><option value="B">B. treat customers differently.</option><option value="C">C. give personal favors.</option><option value="D">D. treat customers fairly.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: treat customers fairly.</h5><h5>Management establishes policies that help employees to deal with customers in
the same way for the same situation in order to be fair. Customers who are not treated fairly may take
their business elsewhere. Businesses do not develop policies to treat customers differently, to offer
special privileges, or to give personal favors.
</h5></div><h5 id='q22'>22. How can the salesperson try to reduce the number of customer complaints about the products customers
buy?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. By identifying the customer's real needs</option><option value="B">B. By using high-pressure selling techniques</option><option value="C">C. By approaching customers as soon as possible</option><option value="D">D. By advising the customer from personal experience</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: By identifying the customer's real needs</h5><h5>Product-related complaints often occur when customers make
improper buying decisions. Salespeople should try to identify the customer's real needs so that s/he can
suggest the most appropriate product. High-pressure selling techniques are never recommended and
would likely cause complaints. Salespeople may not be able to advise from personal experience in all
cases, and their advice may not be appropriate for the particular customer. Approaching customers
promptly is a good idea but will not prevent them from having product-related complaints.
</h5></div><h5 id='q23'>23. One way of reinforcing the company's image through employee performance is by making sure
employees have</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. thorough knowledge of the products.</option><option value="B">B. comfortable work stations.</option><option value="C">C. generous pay and benefit plans.</option><option value="D">D. full access to customer databases.

</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: thorough knowledge of the products.</h5><h5>Employees have the most contact with customers and are the ones
who often project the image of the company. Employees can reinforce a positive image by having
thorough knowledge of the business's products so they can effectively explain the products to customers.
Well-informed employees are able to answer questions correctly and reassure customers that they are
making the right buying decision. On the other hand, poorly-informed employees project a negative
image because they do not have a thorough knowledge of the products. Employees do not reinforce the
company's image by having comfortable work stations, generous pay and benefit plans, or full access to
customer databases.
</h5></div><h5 id='q24'>24. Which of the following groups would be most likely to limit our society's human resources and hinder our
leadership in the use of technology:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. People, ages 25-55, who lack technological skills</option><option value="B">B. People, ages 25-55, who have technological skills</option><option value="C">C. People, ages 50-60, who want some technological training</option><option value="D">D. People, ages 5-25, who are learning about new technology</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: People, ages 25-55, who lack technological skills</h5><h5>This group of people is needed to fill jobs in the
technology area. Since they are the core of the work force, a lack of skills would create problems. All of
the other groups would contribute to our leadership in technology.
</h5></div><h5 id='q25'>25. Resources, goods, and services are more highly valued if they are</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. inexpensive.</option><option value="B">B. abundant.</option><option value="C">C. scarce.</option><option value="D">D. unlimited.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: scarce.</h5><h5>Resources, goods, and services that are available in limited quantities have more value than
those items that are plentiful. A scarcity creates more demand and also a higher price. For example, a
small wheat harvest would increase the price of bread. Resources, goods, and services that are
abundant, inexpensive, and unlimited are readily available and, therefore, less valued.
</h5></div><h5 id='q26'>26. Most businesses strive to supply goods and services in direct proportion to</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. supply.</option><option value="B">B. demand.</option><option value="C">C. cost of production.</option><option value="D">D. standard of living.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: demand.</h5><h5>Demand is the quantity of a good or service that buyers are ready to buy at a given price at a
particular time. Producers try to balance supply with demand so that neither a surplus nor a shortage will
occur. Supply is the quantity of a good or service that sellers are able and willing to offer for sale at a
specified price in a given time period. Cost of production is the total expenses associated with producing
a product. Standard of living is the quality of life and general conditions to which people are accustomed.
</h5></div><h5 id='q27'>27. Traditional economic systems are found only in __________ countries.</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. established</option><option value="B">B. industrial</option><option value="C">C. undeveloped</option><option value="D">D. independent</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: undeveloped</h5><h5>Traditional economic systems are found only in undeveloped countries where there is little
or no government involvement in either the production or the allocation of goods and services. In a
traditional system, people produce what they can, and everything is consumed. Industrial and established
countries have more complicated economic systems that may involve government regulations,
competition, or free enterprise. Independent countries include all countries that are self-governed.
</h5></div><h5 id='q28'>28. Although private enterprise is a productive economic system, a problem it has not been able to eliminate
is</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. profit.</option><option value="B">B. competition.</option><option value="C">C. freedom.</option><option value="D">D. poverty.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: poverty.</h5><h5>Private enterprise is the most productive economic system the world has ever known, but it does
have some disadvantages. Property and income are not distributed equally, and poverty has not been
eliminated. There are still many people who are not able to afford the basic necessities of life because
they hold low-paying jobs or are unemployed. The private enterprise system promotes competition,
freedom, and profit.
</h5></div><h5 id='q29'>29. Which of the following is considered the primary incentive for starting a business:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Private property</option><option value="B">B. Supply and demand</option><option value="C">C. Competition</option><option value="D">D. Profit motive</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: Profit motive</h5><h5>The profit motive is the hope of making a profit that serves as an incentive for individuals to
assume risks involved in investing in business. It is a goal toward which an individual or a business can
work. Competition is the rivalry among two or more businesses to attract scarce customer dollars. Private
property is anything of value that is owned by an individual or a business. Supply and demand work
together to determine prices.
</h5></div><h5 id='q30'>30. A business that advertises a special sale as well as its delivery service is using a combination of
___________ competition.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. direct and indirect</option><option value="B">B. price and nonprice</option><option value="C">C. perfect and monopolistic</option><option value="D">D. local and national</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: price and nonprice</h5><h5>Most businesses use a combination of price and nonprice competition. For example,
a business is using price competition when it advertises a special sale. It is using nonprice competition
when it advertises its delivery service. When the business uses the two together, it is combining price
and nonprice competition. A business advertising a special sale and delivery service is not using a
combination of direct and indirect, perfect and monopolistic, or local and national competition.
</h5></div><h5 id='q31'>31. Which of the following is a public good that is provided by the government:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Interstate highways</option><option value="B">B. Marketing research</option><option value="C">C. New automobiles</option><option value="D">D. Private schools</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: Interstate highways</h5><h5>Public goods are goods and services that are used by all people and cannot be
withheld from those who don't help to pay for them. Marketing research, automobiles, and private schools
are goods and services provided by private businesses.
</h5></div><h5 id='q32'>32. Which of the following is a true statement about productivity:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Most businesses try to increase productivity.</option><option value="B">B. Productivity is unimportant to businesses.</option><option value="C">C. Productivity cannot be measured.</option><option value="D">D. Most businesses reduce productivity to lower prices.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: Most businesses try to increase productivity.</h5><h5>Increased productivity provides greater profits for the
business and enables it to compete more effectively. Businesses can increase productivity in several
ways, such as providing updated equipment, training employees, and paying fair wages. Productivity is
important to a business and can be measured in a variety of ways. One way is to measure the monetary
value of work produced. Reduced productivity would probably mean higher prices.
</h5></div><h5 id='q33'>33. Paul is nervous about his sales presentation. But, he doesn't want to admit it to himself. His coworker,
Amanda, pointed it out to him while he was practicing what to say. What should she recommend that he
do?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Accurately assess his emotions</option><option value="B">B. Exhibit a positive attitude</option><option value="C">C. Boost his self-confidence</option><option value="D">D. Display empathy for another's emotions</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: Accurately assess his emotions</h5><h5>Paul was not evaluating his emotions correctly. He thought he was just
fine, but he wasn't. Paul needed to accurately assess his emotions so that he could boost his selfconfidence. In this case, he did not need to display empathy for another's emotions or exhibit a positive
attitude. Empathy is part of social awareness, and a positive attitude is part of self-management. Paul
was at the self-awareness step.
</h5></div><h5 id='q34'>34. What is an example of a positive affirmation?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. "I do not put off for tomorrow what I can do today."</option><option value="B">B. "I do not take the initiative until someone asks."</option><option value="C">C. "I never say "no" to new friends."</option><option value="D">D. "I cannot disagree with others without feeling guilty."

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: "I do not put off for tomorrow what I can do today."</h5><h5>This is a positive affirmation because it incorporates
an avenue to complete things on time. Affirmations are positive statements about present or desired
strengths. The other examples are negative statements.
</h5></div><h5 id='q35'>35. What do individuals often identify when assessing their personal strengths and weaknesses?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Benefits</option><option value="B">B. Careers</option><option value="C">C. Interests</option><option value="D">D. Risks</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: Interests</h5><h5>Interests are the things that a person is curious about, concerned for, or involved with. When
assessing their personal strengths and weaknesses, people often identify their interests because
interests are strong points that might lead to appropriate occupations. For example, an individual works
on the school newspaper, likes to create posters for upcoming events, and belongs to the English club.
These interests are this person's strengths. After assessing personal strengths and weaknesses,
individuals might select suitable careers. Assessing personal strengths and weaknesses does not involve
identifying benefits or risks.
</h5></div><h5 id='q36'>36. Joyce was told by her supervisor that she should take more initiative, use more tact when dealing with
customers, and smile more. How should Joyce go about improving these personal traits?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Joyce should transfer to a different job.</option><option value="B">B. Joyce should work on one trait at a time.</option><option value="C">C. Joyce should improve all three traits at once.</option><option value="D">D. Joyce should ignore her supervisor's comments.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Joyce should work on one trait at a time.</h5><h5>If she tries to work on improving all three traits at the same time,
she probably will not follow through on any of them. It would be a mistake for Joyce to ignore her
supervisor's comments as these are meant to help Joyce. Asking for a transfer will simply postpone any
efforts to improve.
</h5></div><h5 id='q37'>37. Being enthusiastic can increase your</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. problems.</option><option value="B">B. happiness.
</option><option value="C">C. skills.</option><option value="D">D. stress.
</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: happiness.
</h5><h5>undefined</h5></div><h5 id='q38'>38. To be considered a person with initiative, you must</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. cooperate with those who have initiative.</option><option value="B">B. practice initiative from time to time.
</option><option value="C">C. demonstrate initiative on a regular basis.</option><option value="D">D. tell people you have initiative.
</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: demonstrate initiative on a regular basis.</h5><h5>Initiative is a personal trait expressed by a consistent pattern of
behavior. To be viewed as a person with initiative, you must demonstrate that trait regularly over a period
of time. Telling people that you have initiative, practicing initiative from time to time, or cooperating with
those who have initiative would not be sufficient.
</h5></div><h5 id='q39'>39. Which of the following statements depicts responsible behavior on the part of the employee:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. "I'm sure I understand my job duties, and I don't have to do that."</option><option value="B">B. "I'm sorry the job didn't get done, but the other workers left early."</option><option value="C">C. "I tried to handle that problem, but the customer became angry and walked out."</option><option value="D">D. "I told my supervisor I would work on Friday nights, so I will be here Friday."</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: "I told my supervisor I would work on Friday nights, so I will be here Friday."</h5><h5>Employees who do what
they say they will do are demonstrating responsible behavior. Making excuses is not acceptable, and
employees should assist each other. Supervisors should be consulted when there are problems with
difficult customers. Employees should be willing to perform extra job duties in addition to their regular
duties.
</h5></div><h5 id='q40'>40. Marie uses a lot of gestures when she is communicating with customers. What tool is Marie using?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Patience</option><option value="B">B. Service attitude</option><option value="C">C. Body language</option><option value="D">D. Empathy</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: Body language</h5><h5>Body language is gestures, facial expressions, posture, eye contact, or any other form of
communicating without words. The body language you use reveals as much about what you are thinking
as the words you use. A service attitude is the salesperson's commitment to the client's needs as
expressed through professional behavior. Patience is the ability to endure life's aggravations and
difficulties calmly. Empathy is the ability to put yourself in another person's place.
</h5></div><h5 id='q41'>41. Businesspeople who want to be successful in a global market should exhibit</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. local protectionism.</option><option value="B">B. economic nationalism.</option><option value="C">C. regional behavior.</option><option value="D">D. cultural sensitivity.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: cultural sensitivity.</h5><h5>Cultural sensitivity involves being aware of, and accommodating to, the differences in
the customs, habits, and traditions of a particular group of people. Workers who are employed by
international businesses must deal with people throughout the world, and they need to be sensitive to
their differences in order to be successful. For example, businesspeople in some countries greet each
other with a bow rather a handshake, while others may hug when they meet. Being sensitive to such
differences enables businesspeople to succeed in a global market. Economic nationalism is a type of
protectionism that discourages imports. International businesses should not exhibit regional behavior,
which may be limiting, in order to be successful in a global market.
</h5></div><h5 id='q42'>42. Which of the following is a true statement about assertiveness:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Assertiveness makes most bad situations worse.</option><option value="B">B. People generally accept their personal rights.</option><option value="C">C. Some people do not know how to be assertive.</option><option value="D">D. Behaving assertively usually causes embarrassment.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: Some people do not know how to be assertive.</h5><h5>Some individuals have simply never learned how to
behave assertively. They may confuse assertiveness with aggressiveness and fear it will cause conflict or
embarrassment. Assertiveness can improve bad situations because assertive people speak openly which
may "clear the air." People sometimes fail to assert themselves because they cannot accept their
personal rights.
</h5></div><h5 id='q43'>43. When coworkers disagree about the best way to solve a problem, they are involved in __________
conflict.</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. intangible</option><option value="B">B. emotional</option><option value="C">C. functional</option><option value="D">D. specific</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: functional</h5><h5>Functional conflict exists when people disagree about something tangible or concrete. Often,
the people involved agree on a goal but have different approaches to the situation. Coworkers
disagreeing about the best way to solve a problem are involved in functional conflict. They agree that the
problem must be solved, but they disagree about the best way to do this. Emotional conflict arises when
people have different personal beliefs, values, or experiences. Intangible and specific are not types of
conflict.
</h5></div><h5 id='q44'>44. What kind of team would take full responsibility for an entire line of products?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Project team</option><option value="B">B. Quality circle</option><option value="C">C. Work team</option><option value="D">D. Short-term committee</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: Work team</h5><h5>A work team is a group of employees which is responsible for carrying out an entire work
process. This might include all the steps in producing a product, performing a service, or running a
section of the business. A quality circle is a problem-solving group of coworkers who are given work
situations or problems to study and discuss in order to recommend solutions to management. A project
team is a team of employees from different parts of the company who are assigned to work together on a
specific project. A short-term committee has an immediate goal, such as obtaining speakers for a
conference.
</h5></div><h5 id='q45'>45. Which of the following is a true statement about visions:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. They require hard work and determination.</option><option value="B">B. They are exactly the same as dreams.</option><option value="C">C. They cannot permanently change the world.</option><option value="D">D. They are intended for the short-term future.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: They require hard work and determination.</h5><h5>Visions require hard work and determination if you want to
make them into reality. You will most likely encounter many setbacks along the way, and your vision will
keep you on track. Visions are not exactly the same as dreams. You might dream of becoming a
billionaire by the end of the year, but that isn't a vision because visions are realistically attainable. Many
visions can and have permanently changed the world. Visions are not intended for the short-term future;
rather, most visions will be turned into reality over a long period of time.
</h5></div><h5 id='q46'>46. What often increases when a person continually resists change or fails to adapt to new circumstances?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Sense of accomplishment</option><option value="B">B. Feelings of contentment</option><option value="C">C. Levels of stress</option><option value="D">D. Inability to use logic

</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: Levels of stress</h5><h5>Stress is a mental, physical, or emotional feeling of pressure or tension. Adaptability is
the ability to adjust or modify attitudes and/or behavior to new situations or circumstances. When people
are not willing to adapt to new situations, they often feel higher levels of stress. Fighting or ignoring new
circumstances can increase stress, which can harm a person's health and well-being. Resisting change
does not necessarily affect an individual's ability to reason or use logic. When a person learns how to
adapt to change, s/he may feel content or a sense of accomplishment by accepting the change. Being
adaptable often helps a person to relax, which can facilitate creative thinking and learning.
</h5></div><h5 id='q47'>47. Achievement-oriented people often want to</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. do things more efficiently.</option><option value="B">B. be told what to do.

5
</option><option value="C">C. keep things the same.</option><option value="D">D. let others win.
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: do things more efficiently.</h5><h5>Achievement-oriented people often want to do things better or more efficiently
than they have ever been done before. They are driven to achieve their goals and meet or exceed a high
standard of success. They do not like to be told what to do or to let others win. They are not satisfied with
the status quo—the way things are. They are constantly seeking to improve.
</h5></div><h5 id='q48'>48. What is the final step in the process of leading change?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Celebrate success.</option><option value="B">B. Communicate the change to everyone involved.</option><option value="C">C. Put the change into action.</option><option value="D">D. Address resistance to the change.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Celebrate success.</h5><h5>They do not like to be told what to do or to let others win. They are not satisfied with
the status quo—the way things are. They are constantly seeking to improve.
</h5></div><h5 id='q49'>49. Which of the following is a true statement about coaching:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. The coach is the boss.</option><option value="B">B. Coaching always involves athletics.</option><option value="C">C. Coaching is enabling others to reach their potential.</option><option value="D">D. There is only one way to coach.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: Coaching is enabling others to reach their potential.</h5><h5>Coaching is enabling others to reach their true
potential by helping them to overcome the barriers that are keeping them from doing so. Coaching
doesn't always involve athletics. You don't have to be involved with sports to be a coach; you just have to
be involved with other people. A coach isn't necessarily a boss. Coaching others is a lot more than just
telling them what to do. There isn't just one way to coach. You can coach others in a variety of different
ways.
</h5></div><h5 id='q50'>50. Which of the following is not a benefit of effective human relations at work:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. High employee morale</option><option value="B">B. Low productivity</option><option value="C">C. Good business image</option><option value="D">D. Increased cooperation</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is B: Low productivity</h5><h5>undefined</h5></div><h5 id='q51'>51. Which of the following would be the most appropriate item to purchase with a credit card:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Airline ticket</option><option value="B">B. Pack of gum</option><option value="C">C. Magazine</option><option value="D">D. Small pizza</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: Airline ticket</h5><h5>Many lending institutions and retailers offer credit cards, which allow individuals or
businesses to purchase now and pay later. Because credit-card holders often pay high interest rates and
other fees, they must be careful when using their credit cards so they don't charge more than they can
pay off in a reasonable timeframe. Using credit cards to make large-dollar purchases often makes it
easier to change or cancel transactions such as airfare. In fact, many businesses prefer credit cards as a
payment method. Using a credit card to purchase a pack of gum, a magazine, or a small pizza is not a
good idea, especially if the transaction fee is higher than the price of the good or service.
</h5></div><h5 id='q52'>52. Lisa charges another sole proprietor to use the extra office in the building she owns. Which of the
following is Lisa's source of income:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Dividends</option><option value="B">B. Salary</option><option value="C">C. Rent</option><option value="D">D. Interest</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rent</h5><h5>Income is money resource owners receive for supplying goods and services. As a resource owner,
Lisa is supplying office space and receiving rent payments from the sole proprietor, so she is receiving
income. A salary is a form of income that is money payments for labor. A dividend is the sum of money
paid to an investor or stockholder as earnings on an investment. Interest is the money payments for the
use of borrowed money.
</h5></div><h5 id='q53'>53. Which of the following is the opportunity cost for a person who decides to place $500 in the bank rather
than purchase something s/he really wants but does not need:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Higher discretionary income</option><option value="B">B. Immediate gratification</option><option value="C">C. Lower salary or wages</option><option value="D">D. Long-term dissatisfaction</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: Immediate gratification</h5><h5>Opportunity cost is the benefit that is lost when a person decides to use scarce
resources for one purpose rather than another. When a person places $500 in the bank, the opportunity
(benefit) is having money available for the future. The cost of placing money in the bank means that the
person does not have the money to purchase a desired item. When a person purchases something that
s/he doesn't need but really wants, the benefit to the person is immediate gratification or a sense of
instant satisfaction that s/he has acquired the desired product. The opportunity cost (benefit lost) is not a
higher discretionary income, lower salary or wages, or long-term dissatisfaction.
</h5></div><h5 id='q54'>54. When a business uses credit to purchase goods and services, what benefit does it receive?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Fostering customer loyalty</option><option value="B">B. Maintaining inventory levels</option><option value="C">C. Encouraging customers to buy</option><option value="D">D. Gaining new customers</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Maintaining inventory levels</h5><h5>Maintaining inventory levels that will meet customers' needs is essential to
the success of a business. If the business finds itself short of stock at a time when it is also short of cash,
it may use credit to buy more. The other alternatives are benefits to businesses of extending credit to
customers.
</h5></div><h5 id='q55'>55. Which of the following statements about retirement is true:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. You have plenty of time to start saving for retirement.</option><option value="B">B. Saving even a little bit each month will help.</option><option value="C">C. You can depend on Social Security for your basic living expenses.</option><option value="D">D. You will be in retirement only about 15 years.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Saving even a little bit each month will help.</h5><h5>Even a small amount of money, invested from an early age
over a long period of time, can make a significant contribution to retirement savings. People do not have
plenty of time to save for retirement; beginning early allows more time for savings to grow. Social
Security benefits are not likely to cover basic living expenses. Due to longer life spans, many people are
in retirement longer than 15 years.
</h5></div><h5 id='q56'>56. A good way to prioritize your financial goals is to</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. rank goals according to what needs to be done first.</option><option value="B">B. assign each goal to a general category.</option><option value="C">C. rank every goal in numerical order.</option><option value="D">D. recognize that all the goals are equally important.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: assign each goal to a general category.</h5><h5>A good way to prioritize your financial goals is to assign each
goal to a general category, such as "must do," "important but not critical," or "not so important." Ranking
according to what needs to be done first and ranking every goal in numerical order are two common
pitfalls. Another pitfall is ranking everything as very important or thinking that all the goals are equally
important.
</h5></div><h5 id='q57'>57. Governments pay for public services such as police protection, road repairs, and public education by</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. mandating donations.</option><option value="B">B. collecting taxes.</option><option value="C">C. establishing embargoes.</option><option value="D">D. regulating the business cycle.

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: collecting taxes.</h5><h5>All levels of government collect taxes from individuals and businesses. The taxes are
used to pay for different types of public services such as police protection, road repairs, and public
education. Donations are given rather than mandated. Embargoes are actions that suspend trade with
another country and are used for political reasons or during hostilities. Government policies are one of
many factors that influence the ebb and flow of the business cycle; however, there are aspects of the
business cycle that cannot be regulated.
</h5></div><h5 id='q58'>58. In what primary way does a T account benefit an accountant in maintaining financial records?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Heightens the awareness of spending problems</option><option value="B">B. Reveals the motives behind a purchase</option><option value="C">C. Increases the accuracy of calculations</option><option value="D">D. Shows the parts of a business transaction</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: Shows the parts of a business transaction</h5><h5>As a way to apply the double-entry accounting system when
maintaining financial records, a T account shows the parts of a business transaction. It does not reveal
motives, increase accuracy, or heighten awareness—though analysis of the parts of a business
transaction may result in any of the three.
</h5></div><h5 id='q59'>59. When reconciling a bank statement, you use checkmarks to do which of the following:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Identify the items you have compared</option><option value="B">B. Correct the deposits you have missed</option><option value="C">C. Void the checks you have ruined</option><option value="D">D. Total the interest you have received</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Identify the items you have compared</h5><h5>When reconciling a bank statement, you use checkmarks to
identify the items you have compared. Compared items include amounts on the bank statement, check
stubs, canceled checks, deposit slips, and the check register. Checkmarks are not used to correct
missed deposits, void ruined checks, or total the interest received.
</h5></div><h5 id='q60'>60. It is important to protect against identity theft to prevent unauthorized individuals from</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. trying to sell you a product.</option><option value="B">B. sending you information online.</option><option value="C">C. improving your credit rating.</option><option value="D">D. obtaining credit in your name.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: obtaining credit in your name.</h5><h5>Identity theft occurs when someone illegally obtains another person's
information and uses that information to assume the other person's identity. It is important to protect
against identity theft to prevent unauthorized individuals from using your information to obtain credit in
your name. In most cases, the unauthorized person has no intention of paying for the credit, so the debt
will be listed on your credit report, which may have a negative effect on your credit rating. It is not
important to protect against identity theft to prevent unauthorized individuals from sending you
information online or trying to sell you a product.
</h5></div><h5 id='q61'>61. Which of the following helps individuals select the type of life insurance to buy and the most appropriate
investments:</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Trust departments</option><option value="B">B. Certified public accountants</option><option value="C">C. Financial planners</option><option value="D">D. Local bank managers</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: Financial planners</h5><h5>There are many types of financial planners who help clients develop investment plans
and prepare for the future. These planners provide financial services such as recommending and selling
life insurance, mutual funds, stocks and bonds, etc. Part of what they do is provide advice on how their
clients can achieve their financial goals. Certified public accountants, trust departments, and local bank
managers usually do not help individuals select the type of life insurance to buy and the most appropriate
investments.
</h5></div><h5 id='q62'>62. How does insurance benefit a business?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Lowers personal tax obligation</option><option value="B">B. Reduces security needs
</option><option value="C">C. Protects against financial loss</option><option value="D">D. Enhances economic utility
</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Protects against financial loss</h5><h5>Insurance is a contractual agreement in which one company (insurer) will
pay for specified losses incurred by the other company (insured) in return for installment payments
(premium). For example, a company that loses its inventory and equipment in a fire can file a claim with
its property insurance carrier to obtain money to purchase new inventory and equipment if the policy
premiums are up-to-date and the policy covers such losses. Insurance does not necessarily reduce a
business's security needs, lower personal tax obligation, or enhance economic utility.
</h5></div><h5 id='q63'>63. The price of raw materials used in manufacturing a product was double what had been projected for the
year. Which of the following could the business determine by analyzing its financial information:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Variances</option><option value="B">B. Equipment costs</option><option value="C">C. Supply and demand</option><option value="D">D. Errors in forecasting</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: Variances</h5><h5>Businesses analyze their financial information to determine the differences between what they
had forecast and what actually happened. By doing this, they can account for those differences and
improve future forecasts. In this scenario, equipment costs were not a factor. The business could not
determine from its financial information whether the supply of raw materials decreased or demand
increased. Forecasts are estimates based on information known at the time the forecast was made and
will not be exactly what actually happens. In this scenario, therefore, the variances would not be
considered forecasting errors.
</h5></div><h5 id='q64'>64. A business has accounts receivable valued at $12,500. This amount would appear in the business's
balance sheet under the category of</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. liabilities.</option><option value="B">B. current assets.</option><option value="C">C. income.</option><option value="D">D. cash.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is B: current assets.</h5><h5>Assets are anything of value that the business owns. Assets are classified as either
current assets or fixed assets. Current assets are items such as accounts receivable, the monies owed to
a business by its customers, that change throughout the year. Liabilities are debts that the business
owes. Accounts receivable are a source of income. Cash is currency and coins.
</h5></div><h5 id='q65'>65. In business, the financial function monitors and controls the company's</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. monetary returns and risks.</option><option value="B">B. product development process.</option><option value="C">C. supply channel members.</option><option value="D">D. selling and distribution efforts.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: monetary returns and risks.</h5><h5>The finance function obtains, monitors, and controls funds so the business
can achieve its objectives. Finance involves monitoring monetary returns (e.g., sales revenues,
investment profits) and analyzing risks (possibilities of loss) associated with expenses and investments.
The financial function does not directly monitor or control the business's product-development process,
supply channel members, or selling and distribution efforts.
</h5></div><h5 id='q66'>66. A business's human resources department is responsible for coordinating __________ for employees.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. equipment requisitions</option><option value="B">B. sales promotions</option><option value="C">C. information systems</option><option value="D">D. performance evaluations</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: performance evaluations</h5><h5>Human resources management is the process of planning, staffing, leading,
and organizing the employees of a business. An important aspect of human resources management is
coordinating performance evaluations with employees and their supervisors. A performance evaluation is
a formal assessment by the supervisor of an employee's job performance that lets the employee know
how s/he is doing on the job. The human resources department keeps the performance assessment form
in the employee's personnel file. Sales promotions are coordinated by the business's promotion function.
Information systems are usually computer-based and maintained by technical personnel. Equipment
requisitions are order requests that are placed and tracked by the purchasing department.
</h5></div><h5 id='q67'>67. The marketing concept recognizes the importance of a _________ -oriented way of doing business.</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. product</option><option value="B">B. consumer</option><option value="C">C. profit</option><option value="D">D. company</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: consumer</h5><h5>The marketing concept is based on the belief that all business activities should be aimed
toward satisfying consumer wants and needs while achieving company goals. A company should be able
to achieve its goals by giving customers quality products at fair and reasonable prices. For most
businesses, the primary goal will be to make a profit.
</h5></div><h5 id='q68'>68. Before businesses can effectively use relevant data, they need to determine the type of</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. report that is required.</option><option value="B">B. computer system to purchase.</option><option value="C">C. information that is needed.</option><option value="D">D. collection process to develop.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: information that is needed.</h5><h5>Information is a collection of facts, statistics, or data. Before businesses can
use the information, they must determine the type of information that is needed. For example, does a
business need economic data because it wants to expand, or does it need marketing data because it
wants to attract new customers? The business must decide the type of information it needs before it can
obtain and use that data. Businesses do not need to determine the type of computer system to purchase,
the type of report that is required, or the type of collection process to develop before using relevant data.
</h5></div><h5 id='q69'>69. Which of the following sources is most likely to contain timely information:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. A second edition history textbook that contains a 2000 copyright date</option><option value="B">B. A journal article about a medical breakthrough that was published a decade ago</option><option value="C">C. A stock table that appeared in a national newspaper on January 14, 2010</option><option value="D">D. A technical-trends report that was written on February 5, 2011

</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: A technical-trends report that was written on February 5, 2011

</h5><h5>undefined</h5></div><h5 id='q70'>70. ChemTech International plans to build a new research facility, which is to be completed in two years. As
an employee with ChemTech, your supervisor has requested that you produce a detailed document to
send to potential vendors and contractors that outlines how they should submit bids to perform work for
the new facility. The document is to contain instructions about the type of information the potential
vendors should provide in their bids, and the format in which the information should be presented. What
type of document are you preparing?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Request for proposal</option><option value="B">B. Summary of qualifications</option><option value="C">C. Executive summary</option><option value="D">D. Business plan</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: Request for proposal</h5><h5>Complex projects often require the expertise of external resources. Building a new
facility requires skills from architects, construction companies, electricians, etc. And because these types
of projects are expensive, companies want to obtain bids from the potential vendors or contractors to
determine which one is best suited to perform the work. A request for proposal (RFP) is an invitation for
potential vendors to present bids to obtain a contract and perform the work. Because the work is
complex, the RFP must include specific information and provide detailed instructions about the way the
proposal should be written. Often, an RFP will require potential vendors to provide a summary of
qualifications as a section of the proposal. A business plan is a company's blueprint for success—its
business model. An executive summary is an element of a business plan and provides and overview of
the most important information.
</h5></div><h5 id='q71'>71. Managing information regarding copyrights and trademarks helps a company to preserve its</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. correspondence.</option><option value="B">B. inventory.</option><option value="C">C. identity.</option><option value="D">D. customers.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: identity.</h5><h5>Managing information regarding copyrights and trademarks helps a company to preserve its
identity. If a competitor tries to infringe upon this protected material, the company will be ready to stake
its claim quickly. Copyrights and trademarks do not necessarily relate to inventory, correspondence, or
customers.
</h5></div><h5 id='q72'>72. Which of the following is a basic computer operating system that a business might use:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Adobe</option><option value="B">B. Excel</option><option value="C">C. Oracle</option><option value="D">D. Windows</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: Windows</h5><h5>Microsoft Windows is one of the most popular operating systems. The operating system
manages the hardware and software and makes the computer work. The system connects the software
to the hardware and controls the overall operation of the computer. Excel, Oracle, and Adobe are
software programs rather than operating systems.
</h5></div><h5 id='q73'>73. What is one benefit that the Internet provides consumers?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Makes it easier to comparison shop</option><option value="B">B. Provides a way to promote products</option><option value="C">C. Lessens the need for intermediaries</option><option value="D">D. Reduces information overload</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: Makes it easier to comparison shop</h5><h5>The continuing growth of the Internet (e-commerce) allows
consumers to log onto their computers and visit several web sites to compare products and prices. This
makes comparison shopping easier because consumers do not need to telephone or drive to multiple
businesses to obtain the desired product information. The Internet benefits businesses because it allows
them to promote their products on their web sites. Another way that the Internet affects businesses is that
it often reduces the need to use intermediaries to get the products to the end users. Because there is so
much information available through the Internet, people may suffer from information overload, which is a
disadvantage of the Internet.
</h5></div><h5 id='q74'>74. Which of the following do many businesses include on their web sites in order to obtain feedback from
customers:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Computer programming code</option><option value="B">B. Portable document format</option><option value="C">C. Electronic file attachment</option><option value="D">D. E-mail inquiry field</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: E-mail inquiry field</h5><h5>Many businesses provide a feedback option on their web sites that enables
customers to e-mail the business concerning problems or to ask questions. The e-mail inquiry field is an
effective method of providing customer service as long as the business responds in an appropriate
amount of time. A portable document format allows users to view files created by another operating
system. An electronic file attachment allows a user to send an attachment with an e-mail message.
Computer programming code is used to create software, web pages, etc.
</h5></div><h5 id='q75'>75. A benefit of using an electronic calendar to prepare schedules is that it allows employees to</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. prioritize a deadline.</option><option value="B">B. communicate with coworkers.</option><option value="C">C. delegate tasks.</option><option value="D">D. manage their time.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: manage their time.</h5><h5>Many employees use electronic calendars to keep track of their activities and prepare
schedules. The benefit of using these devices is that it allows employees to manage their time because
they can keep a schedule of their activities. They know what they have to do at a certain time on a certain
date, such as attend a meeting. They can also list deadlines for projects. This enables them to plan the
use of free time in order to accomplish their assigned responsibilities. Employees do not use an
electronic calendar to communicate with coworkers or delegate tasks. Employees use electronic
calendars to keep track of deadlines; however, managers usually determine the deadline based on the
priority of the project.
</h5></div><h5 id='q76'>76. Many businesses use database software programs to computerize their customer mailing lists in order to
instantly</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. calculate monthly profit.</option><option value="B">B. prepare sales letters.</option><option value="C">C. write e-mail messages.</option><option value="D">D. sort by zip code.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: sort by zip code.</h5><h5>Database software programs allow businesses to arrange customer information
according to various criteria. Once the names, addresses, and other information are entered in the
computer, the business can sort the data alphabetically, or by zip code, or by any other criteria. For
example, a business might sort the list by birthday in order to send each customer a personalized card. A
business might use a spreadsheet program to calculate monthly profit, a word-processing program to
prepare sales letters, and a communications program to write e-mail messages.
</h5></div><h5 id='q77'>77. Which of the following is an example of an integrated software application:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. SMS</option><option value="B">B. Java</option><option value="C">C. Point-of-sale</option><option value="D">D. URL</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Point-of-sale</h5><h5>There are many point-of-sale software applications that enable businesses to perform a
variety of functions beyond the point of sale. Some of these functions include placing orders, controlling
inventory, placing special orders, etc. SMS is an abbreviation for short messaging service and is used to
send text messages on a variety of cell phones. Java is a computer-programming language. URL or
uniform resource locator is the web site's web address.
</h5></div><h5 id='q78'>78. Which of the following is an example of a groupware application:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. E-mail filters</option><option value="B">B. Database sharing</option><option value="C">C. Job rotation</option><option value="D">D. Relationship marketing</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: Database sharing</h5><h5>Groupware applications refer to the modes that employees who work in different
locations use to work together or collaborate so they can accomplish a common goal. One mode of
collaboration is sharing a database that links or networks several people via computer. For example,
when both a sales representative and a warehouse manager have the ability to turn on their computers
and access the same inventory status information to see if a product is in stock for a customer, they are
using a groupware application. E-mail filters are computer programs that block out unwanted information.
Job rotation is an instructional method in which trainees are rotated periodically from one job to another
in order to broaden the trainees' perspective of the business. Relationship marketing is a strategy in
which businesses spend time with current and prospective clients outside the office setting to enhance
the partnership.
</h5></div><h5 id='q79'>79. When creating and posting information to a web site, one of the most important considerations is the</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. home page.</option><option value="B">B. search engine.</option><option value="C">C. domain name.</option><option value="D">D. shopping cart.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: home page.</h5><h5>The design and content of the home page is extremely important because many visitors do
not go beyond that page. Therefore, it is important to create an home page that provides an overview of
the web site and links to other pages on the site. If the goal is to have visitors follow links to access
additional information or make a purchase, the home page must generate interest and encourage visitors
to continue. A search engine is a software program that automatically crawls the Web looking for
information pertaining to specified search terms and displays a list of results. A domain name is a
business's web address. A shopping cart is a computer program designed to act as an online catalog and
order-processing center.
</h5></div><h5 id='q80'>80. Running out of inventory can result in</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. higher productivity.</option><option value="B">B. higher taxes.
</option><option value="C">C. lost sales.</option><option value="D">D. more satisfied customers.
</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: lost sales.</h5><h5>Running out of inventory can result in lost sales, lowered productivity, unhappy customers,
and a decrease in profits. These are known as stockout costs, and businesses try to avoid them as much
as possible. Running out of inventory should not increase a business's taxes.
</h5></div><h5 id='q81'>81. Health and safety regulations in business usually require businesses to</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. report workplace accidents.</option><option value="B">B. inspect office facilities.</option><option value="C">C. hold regular safety meetings.</option><option value="D">D. purchase fireproof supplies.

</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: report workplace accidents.</h5><h5>Certain governmental agencies have developed health and safety
regulations that businesses are expected to follow in order to provide employees with a safe work
environment. These regulations usually require businesses to report workplace accidents to the
appropriate agency. The purpose of this requirement is to identify and correct unsafe working conditions,
and to compensate workers who have been injured on the job. Health and safety regulations usually do
not require businesses to inspect office facilities, hold regular safety meetings, or purchase fireproof
supplies. However, safety-conscious businesses usually inspect their facilities to identify potential safety
hazards. Also, businesses often hold regular safety meetings to keep employees informed.
</h5></div><h5 id='q82'>82. Jeff is a stock clerk in a department store, and his friend Eric is a server in a restaurant. Which of the
following statements is true about their safety at work:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. They are exposed to the same safety hazards.</option><option value="B">B. They are exposed to different safety hazards.</option><option value="C">C. Jeff's job has more safety hazards than Eric's.</option><option value="D">D. Jeff's job has fewer safety hazards than Eric's.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: They are exposed to different safety hazards.</h5><h5>The types of safety hazards employees encounter depends
upon where people work and the type of work that they do. The number of hazards each faces depends
upon many factors, such as employees' observance of safety rules, management's attention to unsafe
conditions, and the business's enforcement of safety regulations.
</h5></div><h5 id='q83'>83. When Josh arrived at work this morning, he saw that the company safe was open, the office was in
disarray, and his laptop computer was missing. Josh should immediately report the situation to the local</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. police department.</option><option value="B">B. fire department.</option><option value="C">C. health organization.</option><option value="D">D. insurance provider.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: police department.</h5><h5>To take appropriate action during an emergency, an employee must determine what
the problem is. Because the safe was open, the office was in disarray, and a computer was missing, the
business was probably robbed. In case the robber is still in the building, Josh should leave the business
immediately and seek a safe environment. Then, following company procedures, Josh should notify his
supervisor or the local law enforcement authorities (police). Josh should call the fire department if a fire
occurs. The local health department handles issues associated with health risks. The owner should file a
claim with the business's insurance company after the robbery has been reported to the appropriate lawenforcement authorities.
</h5></div><h5 id='q84'>84. Which of the following is a routine security precaution:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Taking cash to the bank at the same time every day</option><option value="B">B. Making sure customer purchases exceed the floor limit</option><option value="C">C. Switching price tickets</option><option value="D">D. Observing customers</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: Observing customers</h5><h5>The sales letters include important information about the
business and its products and are intended to encourage customers to buy. Letters and memos are types
of informational messages. Businesses identify customers before sending them informational messages.
</h5></div><h5 id='q85'>85. What is likely to occur if a business's employees do not follow the business's security procedures?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Decreased counterfeiting activity</option><option value="B">B. Increased accident rates</option><option value="C">C. Decreased financial losses</option><option value="D">D. Increased risk of theft</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: Increased risk of theft</h5><h5>Businesses establish different types of security procedures to protect their
assets—equipment, inventory, facilities, money, information, and employees. Businesses need to
communicate these security procedures to employees so the employees know what they need to do to
maintain a secure work environment. If employees do not follow security procedures, the risk of security
breaches occurring increases. For example, an employee who does not properly lock the cash drawer
increases the risk of robbery. If employees fail to lock the warehouse doors at the end of business hours,
the risk of theft increases. If a security breach occurs, the business may experience financial losses (e.g.,
stolen money, goods, and equipment). Employees follow safety procedures to reduce the risk of
accidents in the workplace. Financial losses may decrease if businesses train their employees about
ways in which they can identify counterfeit paper money at the point of sale.
</h5></div><h5 id='q86'>86. After a purchasing specialist has determined that s/he has selected the right supplier for a job, what do
s/he and the supplier develop?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Invoice</option><option value="B">B. Purchase agreement</option><option value="C">C. Request for bids</option><option value="D">D. Blanket purchase order</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Purchase agreement</h5><h5>After a purchasing specialist has determined that s/he has selected the right
supplier for a job, s/he and the supplier develop a purchase agreement which states all of the terms of
the purchase. An invoice is a formal, printed record of a sale that is usually delivered with the goods or
services purchased or mailed after delivery. A request for bids is sent out during the competitive bidding
process. A blanket purchase order is a special kind of purchase order normally used only for fairly
inexpensive goods or services that the business uses on a regular basis.
</h5></div><h5 id='q87'>87. Developing efficient production processes is important to businesses because it helps them to be</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. innovative.</option><option value="B">B. responsible.</option><option value="C">C. flexible.</option><option value="D">D. competitive.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: competitive.</h5><h5>Business is very competitive, and companies are always looking for more efficient
production processes in order to reduce their costs. Businesses that can produce goods more
inexpensively and, therefore, sell them at lower prices than other companies are able to be competitive
and attract a larger share of the market. Developing efficient production processes does not necessarily
make businesses responsible, flexible, or innovative. However, these are characteristics of most
successful businesses.
</h5></div><h5 id='q88'>88. Steve is unsure how to dress appropriately for his job interview. Which of the following is a guideline that
might help him select the proper attire:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Patterns and textures of clothing should be contrasting.</option><option value="B">B. Clothing types should follow current trends.</option><option value="C">C. Business clothing usually should be conservative.</option><option value="D">D. Articles of clothing should have several points of focus.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: Business clothing usually should be conservative.</h5><h5>Steve should try to create a positive first impression of
himself by following certain guidelines for proper dress. Dressing conservatively, especially for an
interview, is one of these guidelines. Steve does not want his appearance to distract the interviewer; he
wants the interviewer to focus the discussion about Steve's qualifications for the job. Other guidelines
include wearing an outfit that has one focal point, wearing styles that are fashionable rather than faddish,
and choosing coordinating patterns and textures.
</h5></div><h5 id='q89'>89. The overall goal of your efforts to get organized on the job should be to</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. reduce your workload.</option><option value="B">B. create a work system appropriate for you.</option><option value="C">C. impress your supervisor.</option><option value="D">D. make your work area look attractive.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: create a work system appropriate for you.</h5><h5>Arrange the items you need on a regular basis in a manner
that is convenient for you. This will not reduce your workload, but it will make your work go more
smoothly. Your efforts may make your work area more attractive or impress your supervisor, but those
are not overall goals for getting organized.
</h5></div><h5 id='q90'>90. It is important to set goals that are realistic and attainable, which means that they should be</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. specific rather than vague or general.</option><option value="B">B. appropriate to you and your abilities.</option><option value="C">C. challenging to your creativity.</option><option value="D">D. achievable within a year.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: appropriate to you and your abilities.</h5><h5>You must set goals that you are capable of reaching. Setting
inappropriate goals results in frustration. Specific and challenging goals are other characteristics of good
goals. Goals may be short-term (less than a year to achieve) or long-term (more than a year to achieve).
</h5></div><h5 id='q91'>91. Which of the following is an example of acting on a decision:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Evaluating an outcome</option><option value="B">B. Identifying a problem</option><option value="C">C. Choosing an option</option><option value="D">D. Accepting a promotion</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: Accepting a promotion</h5><h5>Once individuals make decisions and select alternatives, they must act on them.
By accepting a promotion, a person is acting on a decision. Just deciding what to do doesn't complete
the decision-making process. It is necessary for an individual to carry out the decision. Identifying a
problem and choosing an option are steps in the decision-making process that occur before action is
taken. Evaluating an outcome occurs after the action is taken.
</h5></div><h5 id='q92'>92. Becoming a problem solver helps you to</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. get what you want from other people.</option><option value="B">B. meet your personal and professional goals.
</option><option value="C">C. make more money.</option><option value="D">D. stay out of tough situations.

</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: meet your personal and professional goals.
</h5><h5>undefined</h5></div><h5 id='q93'>93. Employees who arrive at work on time and direct their own work-related activities during the course of the
day usually possess positive __________ skills.</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. self-conceptual</option><option value="B">B. self-management</option><option value="C">C. inner-qualitative</option><option value="D">D. personal-orientation</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: self-management</h5><h5>The ability to control one's own activities, behaviors, and attitudes in the workplace is
often referred to as self-management. Employees who make a conscious effort to get to work on time
each day are engaging in positive self-management skills. Other activities that employees can control in
the workplace might include their ability to perform and produce quality work in a given time, willingness
to learn new activities, level of flexibility, and degree of workplace socializing. Self-concept refers to how
one views him/herself. Inner-qualitative and personal-orientation are not terms frequently used to
describe self-control issues as they relate to the workplace.
</h5></div><h5 id='q94'>94. Where could you find up-to-date information about jobs that are available to persons with physical and
sensory disabilities?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. College offices of disability services</option><option value="B">B. Nonprofit vocational training programs</option><option value="C">C. High school special-education department</option><option value="D">D. State departments of vocational rehabilitation</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: State departments of vocational rehabilitation</h5><h5>These departments provide current information about the
physical requirements of many jobs and suggestions about other agencies to contact. College and high
school services for persons with disabilities focus on access to education rather than on career planning.
Nonprofit vocational training programs offer limited types of training to persons with disabilities and
usually have relatively few job openings.
</h5></div><h5 id='q95'>95. Why should job seekers keep a written record of the jobs they hear of or read about?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. To show prospective employers that they are organized</option><option value="B">B. To avoid paying a fee for job information</option><option value="C">C. To help them fill out job applications accurately</option><option value="D">D. To keep track of important job information</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: To keep track of important job information</h5><h5>Job seekers must often follow up numerous job leads before
they find the job that is right for them. Keeping a notebook or card file of information about each available
job helps job seekers to keep all the information straight. The file could include information about the
business, the job, the contact person, date and time of the job interview, and results of the interview. Job
seekers would not show prospective employers a record of the different jobs they are investigating. A joblead file would not help job seekers to fill out job applications or keep them from paying a fee for
information if a fee is customarily charged.
</h5></div><h5 id='q96'>96. Some job application forms ask why the applicant left a previous job. Which of the following would be an
acceptable answer to this question:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. "I was seeking a more responsible job."</option><option value="B">B. "I was expected to do too much work."</option><option value="C">C. "I couldn't get along with my supervisor."</option><option value="D">D. "I wanted to get out of a difficult situation."</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: "I was seeking a more responsible job."</h5><h5>This is a positive response which indicates that the applicant is
interested in getting ahead and is willing to accept additional responsibility. A job applicant should not
make negative remarks about his/her previous employer(s) or coworkers. Even though all of the other
alternatives could be true statements, they are negative and will reflect poorly on the job applicant.
</h5></div><h5 id='q97'>97. Matt just received a letter telling him that someone else had been hired for a job for which Matt had been
interviewed. Since Matt didn't get the job, does he need to write an interview follow-up letter to the
company?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Yes, he should already have sent a follow-up letter.</option><option value="B">B. No, it's too late to send a follow-up letter.</option><option value="C">C. Yes, the company will be expecting to hear from him.</option><option value="D">D. No, since Matt wasn't hired, he doesn't need to write.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Yes, he should already have sent a follow-up letter.</h5><h5>A follow-up letter should be sent as soon as possible
after a job interview. Since the company has had time to make a hiring decision and notify Matt of its
choice, we can assume that he did not write immediately following the interview. However, it is never too
late to send a follow-up letter. Businesses do not generally expect to hear from job applicants after an
interview, but they receive a positive impression of those who do write.
</h5></div><h5 id='q98'>98. When hiring new employees, which of the following is an activity that many businesses consider as an
equivalent to work experience:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Networking</option><option value="B">B. Brainstorming</option><option value="C">C. Volunteering</option><option value="D">D. Apprenticing</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: Volunteering</h5><h5>People entering the labor market for the first time often do not have previous work
experience. In such cases, businesses often consider any volunteer work that the applicants may have
done as an equivalent to work experience. Many people gain valuable work-related experience by
volunteering in hospitals, nursing homes, schools, and with community-service organizations.
Brainstorming is a creative thinking technique involving the identification of as many different ideas as
possible during a certain time frame. Networking is the process of sharing and exchanging job
information. Apprenticing involves beginning in an occupation and learning the trade while employed.
</h5></div><h5 id='q99'>99. What is a factor that many businesses consider when promoting employees?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Seniority</option><option value="B">B. Compensation</option><option value="C">C. Favoritism</option><option value="D">D. Arbitration</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: Seniority</h5><h5>Seniority involves the length of time that a person has been employed by one company. The
longer people have been employed, the more seniority they have. Businesses often consider seniority
when selecting employees to promote. Often, they try to promote the more senior employees because
they have more experience on the job and have demonstrated long-term loyalty to the business.
Compensation is pay and benefits. Favoritism involves granting special favors to certain people.
Arbitration is a method of settling a labor dispute.
</h5></div><h5 id='q100'>100. Businesses benefit when employees handle customer inquiries in an effective manner because</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. customers' confidence in the business increases.</option><option value="B">B. customers feel free to return products.</option><option value="C">C. customers feel the need to ask more questions.</option><option value="D">D. customers' total purchases are reduced.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: customers' confidence in the business increases.</h5><h5>Customers' confidence in a business grows when the
business provides accurate answers to their product questions. They feel the sales staff are
knowledgeable, which also gives customers more confidence in the products they buy. Customers are
less likely to need to return products when their questions about those products have been answered,
and their total purchases are more likely to increase than decrease. Customers may need to ask fewer
questions when their inquiries are handled in an effective manner.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_7_Split_Master.js"></script></html>