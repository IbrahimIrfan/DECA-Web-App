<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=1></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles_Exam_7</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Limited liability is a characteristic of what form of business ownership?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Sole proprietorship</option><option value="B">B. Partnership</option><option value="C">C. Corporation</option><option value="D">D. Joint proprietorship</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: Corporation</h5><h5>Stockholders in corporations have limited liability; that is, their losses are limited to the
amount of money that they have invested in the business. Partnerships and sole proprietorships have
unlimited liability, meaning that the business owners are personally liable for debts incurred by the
business. Joint proprietorship is not a form of business ownership.
</h5></div><h5 id='q2'>2. Where are you most likely to read relevant, valid information about federal legislation such as copyright
law?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Online discussion forums</option><option value="B">B. Government publications</option><option value="C">C. Search engines</option><option value="D">D. Political blogs</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: Government publications</h5><h5>Regardless of whether you are writing a report, preparing for a debate, or
simply learning something new for the fun of it, identifying and reading sources that provide relevant,
valid information about the subject at hand is very important. If you don't use relevant, valid information,
you may write, say, or learn something that is misleading or untrue. A number of criteria are commonly
used to determine if certain written materials are relevant and valid. These criteria include the author's
credibility, the date of publication, the publisher, etc. For instance, if you are researching federal
legislation such as copyright law, you are most likely to read relevant, valid information in government
publications. The government writes and enforces copyright law and other federal legislation, so
government publications about these laws are most likely to be timely, accurate, complete, and on topic.
People commonly express their opinions, not facts, in online discussion forums. Search engines are
software programs that automatically crawl the Web looking for information pertaining to specified search
terms and display a list of results. The search engines themselves do not contain information about
federal legislation; they direct you to other websites—some good and some not so good—about federal
legislation such as copyright law. Political blogs typically reflect the opinions of their writers, so their
information may or may not be relevant or valid.
</h5></div><h5 id='q3'>3. What type of information should employees be able to locate in their company's employee handbook?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. The company's list of current job openings</option><option value="B">B. The use of company property</option><option value="C">C. The company's annual report</option><option value="D">D. The number of vacation days that an employee has taken</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: The use of company property</h5><h5>Businesses often develop employee handbooks, which provide
information about their general policies and procedures. Employee handbooks are usually given to new
employees when they are hired. Employee handbooks usually provide information about overtime and
vacation policies, disciplinary and grievance procedures, pay schedules, dress codes, and behavioral
expectations in its employee handbook. Many employee handbooks include information about employees
and their personal use of company property. Company-property issues that the handbook might address
include making personal long-distance phone calls on the company phone and using the office copy
machine or laser printer for non-business purposes. Lists of the company's current job openings and
personal information about vacation days are usually available through the human-resources department,
and are not included in the employee handbook. Additionally, the company's annual report is not usually
included in the employee handbook. Often, corporations post their annual reports on the company's
website.
</h5></div><h5 id='q4'>4. The employee didn't listen to the manager's explanation about how to perform a certain task because
s/he had done a similar job before. Which of the following factors caused the employee not to listen
effectively:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Past experiences</option><option value="B">B. Attention span</option><option value="C">C. Age differences</option><option value="D">D. Language skills</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: Past experiences</h5><h5>People often think they know what someone is going to say before s/he says it and as
a result do not listen well. People's past experiences may influence how well they listen because they
think they already know the answer or understand the explanation. Effective listeners try to block out past
experiences and focus on what the speaker is saying. Age differences, attention span, and language
skills are other factors that may affect how well people listen.
</h5></div><h5 id='q5'>5. Which of the following adds meaning to the words a speaker uses:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Tone of voice</option><option value="B">B. Tempo</option><option value="C">C. Accuracy</option><option value="D">D. Economy of speech</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Tone of voice</h5><h5>People can change the meaning of their words by changing their tone of voice. For
example, the same words can be a request or a command depending upon the tone used to deliver
them. Tempo is the rate of speed or rhythm the speaker uses. Economy of speech is using as few words
as possible to express an idea. Accuracy refers to the correctness of the message.
</h5></div><h5 id='q6'>6. Shawn is preparing for an interview with a local company. He knows that he should ask relevant
questions about the job at the end of the interview. Which of the following will help him prepare these
questions:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Asking his friends what questions they think he should ask</option><option value="B">B. Relying on the interviewer to generate the questions</option><option value="C">C. Conducting research about the company prior to the interview</option><option value="D">D. Finding background information about the interviewer's high school and asking him/her about
that to form a personal relationship</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: Conducting research about the company prior to the interview</h5><h5>From the research, Shawn can write a few
questions that directly relate to the company or its industry. Even though additional questions may come
up during the interview, it is always best to be prepared with relevant questions based on research. It is
important that Shawn confirms that the questions are relevant by researching them himself instead of
taking his friends' (or anyone else's) advice. Questions about the interviewer's personal life are not
relevant to the job interview.
</h5></div><h5 id='q7'>7. If an employee needs to do some research to answer a customer's telephone inquiry, the best action for
the employee to take is to obtain the customer's telephone number and then</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. put the customer on hold until the research has been completed.</option><option value="B">B. ask the sales manager to call the customer back.</option><option value="C">C. send the customer literature about the business and its products.</option><option value="D">D. follow up with the customer after obtaining the requested information.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: follow up with the customer after obtaining the requested information.</h5><h5>When employees do not know the
answer to their customers' questions, they should take steps to get the answers. This often involves
researching the problem or issue. When extensive research is required, an employee should obtain the
customer's contact information and call him/her back with the requested information after the research
has been completed. The nature of the inquiry determines if literature should be sent to the customer or if
another employee or manager should answer the customer's inquiry. For example, a question about a bill
may be better answered by an accounts-receivable employee than a purchasing agent. And, in this
situation, it would be inappropriate to send product information.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this policy
up to and including disqualification of competitors and chapters from further participation.

Test 1102

BUSINESS ADMINISTRATION CORE EXAM

1

1. Limited liability is a characteristic of what form of business ownership?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Employees process information differently.</option><option value="B">B. It is best to present information in reverse order.</option><option value="C">C. Employees usually ask questions when they are confused.</option><option value="D">D. It is unnecessary to use demonstrations to support verbal content.

®
</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: It is unnecessary to use demonstrations to support verbal content.

®
</h5><h5>B
Car payment. Developing a personal budget helps individuals manage their income and expenses. An
important consideration in budgeting involves identifying fixed expenses, which are the expenses (cash
outflows) that do not fluctuate or change from month to month. Car payments, insurance, and rent are
examples of fixed expenses. Groceries, home repairs, and clothing are variable expenses, or expenses
that may fluctuate slightly from month to month.
</h5></div><h5 id='q9'>9. Individuals who are able to defend their ideas objectively usually are able to provide others with</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. unrelated statistics.</option><option value="B">B. emotional information.</option><option value="C">C. personal opinions.</option><option value="D">D. logical evidence.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: logical evidence.</h5><h5>Being prepared will help individuals remain objective and able to offer logical evidence
to back up their ideas. They should be prepared to explain supporting information because others may
have questions or concerns about the ideas. Using logical evidence, such as related statistics or facts,
will help individuals defend their ideas because they are relying on valid evidence rather than personal
opinions. Individuals who defend their ideas objectively do not use emotional information, personal
opinions, or unrelated statistics.
</h5></div><h5 id='q10'>10. In order to be understood on the telephone, a business's employees should always</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. speak rapidly.</option><option value="B">B. use filler words.</option><option value="C">C. speak from notes.</option><option value="D">D. enunciate clearly.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: enunciate clearly.</h5><h5>Enunciating clearly involves speaking clearly and distinctly, which makes the message
easy for the listener to follow. The message may not be clear if employees mumble or speak rapidly. It is
sometimes useful to have notes when speaking on the telephone, but it is not always necessary. Other
guidelines to follow are to use appropriate vocabulary and to avoid using an excessive amount of "filler"
words, such as "um" and "uh." Fillers words can be distracting and often indicate that the speaker is
unsure about what s/he is saying.
</h5></div><h5 id='q11'>11. When you state a fact, it's important to</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. think before you speak.</option><option value="B">B. be accurate.</option><option value="C">C. generalize.</option><option value="D">D. change your mind.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is B: be accurate.</h5><h5>When you state a fact, it's important to be accurate. Make sure you can support your
statement. Don't generalize. Stating a fact is not usually about thinking before you speak (as in stating an
opinion) or about changing your mind (as in hearing a fact stated by another person).
</h5></div><h5 id='q12'>12. Brooke is attending a meeting to discuss an upcoming project that she will be working on. To take
effective notes during the meeting, Brooke must</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. express opinions.</option><option value="B">B. answer questions.</option><option value="C">C. listen carefully.</option><option value="D">D. develop a briefing.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: listen carefully.</h5><h5>Brooke must listen to the speaker so she can identify the key points that she wants to
write down. By noting the key points, Brooke will be able to refer the most important information when
she needs it later. Effective note-taking does not involve answering questions or expressing opinions.
Brooke might need her notes to develop a briefing, which is a summary of important information or
instructions.
</h5></div><h5 id='q13'>13. Which of the following is an example of a text-oriented graphic that is often used to illustrate a business
process or organizational structure:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Flowchart</option><option value="B">B. Pictograph</option><option value="C">C. Map</option><option value="D">D. Pie chart</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: Flowchart</h5><h5>Some graphics that are used in business reports are textual (text-oriented) because their
content is presented in the form of words and numbers. An example of a textual graphic is a flowchart
that presents the sequence of activities in a process. A common flowchart is an organizational chart that
depicts the hierarchy of positions and departments within an organization. Pictographs, maps, and pie
charts are considered visual graphics rather than textual graphics. Although they may contain some
words and numbers, they also contain visuals such as bars, columns, and drawings.
</h5></div><h5 id='q14'>14. A business that writes letters to customers to confirm their orders or requests should make sure that the
letters contain</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. a map of all business locations.</option><option value="B">B. product ratings and grades.</option><option value="C">C. exchange rates.</option><option value="D">D. all the necessary information.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: all the necessary information.</h5><h5>When preparing written communication, one of the most important rules is
to be thorough and provide all the necessary information because the receiver may not have the
opportunity to ask questions in person. Letters confirming customer orders should answer the questions
of who, what, when, and where by including specific information about ordered items, quantity, delivery
address, etc. The letters should contain all the necessary information to verify that what the business
intends to provide is exactly what the customers have requested. Whether product ratings and grades,
exchange rates, and a map of all business locations are necessary information to include in a
confirmation letter depends on the type of business and the customer's needs.
</h5></div><h5 id='q15'>15. It is most appropriate to format a section of a document with a numbered list when you are</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. including a testimonial in a promotional piece.</option><option value="B">B. identifying the sequential steps of a process.</option><option value="C">C. using charts to summarize information.</option><option value="D">D. providing a detailed example to clarify a concept.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: identifying the sequential steps of a process.</h5><h5>When describing activities that need to be done in a specific
order, the writer might want to number the steps to set the process apart from the text and to clarify the
process. One testimonial or a single piece of information does not require a numerical designation to
reinforce the order of content. Charts are graphics that summarize numerical data. A narrative writing
format is usually most appropriate when providing an example to clarify a concept.
</h5></div><h5 id='q16'>16. What is one reason why businesses write informational messages?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. To analyze sales proposals</option><option value="B">B. To develop research reports</option><option value="C">C. To explain new policies</option><option value="D">D. To obtain positive feedback</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: To explain new policies</h5><h5>One of the main functions of an informational message is to provide information
to readers in such a way that they understand the message. A type of written information that businesses
often provide to customers is an explanation of new policies and how those policies will affect customers.
For example, if a business is changing its credit policy, it wants to inform customers about the change
and let them know that the change will benefit them. Research reports are an in-depth study of a specific
business problem or situation. Businesses write informational messages to inform rather than to obtain
feedback. Analyzing sales proposals involves reviewing information.
</h5></div><h5 id='q17'>17. Why do advertising agency account executives often participate in meetings and problem-solving
groups?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. To place ads in local newspapers</option><option value="B">B. To schedule production facilities</option><option value="C">C. To develop ad campaigns for clients</option><option value="D">D. To write copy for promotional brochures

</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: To develop ad campaigns for clients</h5><h5>Account executives often participate in meetings with clients and
other advertising agency staff to develop ad campaigns for the clients. The purpose of the meeting is to
identify the clients' advertising needs, discuss ways of satisfying those needs, and design a successful
campaign. In many cases, there are problems to solve because the client may have a limited advertising
budget or specific requirements for the campaign. Account executives usually do not schedule production
facilities. Media buyers are responsible for placing ads. Copywriters write copy for promotional brochures.
These activities often take place after the meeting phase in order to implement the ad campaign.
</h5></div><h5 id='q18'>18. It is easier for employees to develop positive customer/client relations if employees understand that each
customer is</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. a unique individual.</option><option value="B">B. a possible problem.</option><option value="C">C. in a hurry.</option><option value="D">D. like most others.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: a unique individual.</h5><h5>Each individual customer has his or her own basic personality, and s/he reacts in
different ways to salespeople. Employees should be friendly and courteous to all and adapt to each
customer's behavior in a positive manner. Considering each customer as a possible problem is a
negative approach that would probably prevent good customer relations. Not all customers are in a hurry.
</h5></div><h5 id='q19'>19. Employees who are in contact with customers can reinforce the company's service orientation by
dressing professionally and</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. using consensus-building skills.</option><option value="B">B. offering deep discounts to loyal customers.</option><option value="C">C. referring customer complaints to others.</option><option value="D">D. maintaining a positive attitude.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: maintaining a positive attitude.</h5><h5>A business's service orientation is its philosophy of providing quality
service. To express its service orientation, a business uses various communication channels, one of
which is the business's employees. The employees' verbal cues (e.g., words, tone of voice) and
nonverbal cues (e.g., hygiene, dress, gestures, facial expressions) convey their personal attitudes, which
customers often believe are a reflection of the business's attitudes. Employees who convey a positive
attitude are willing to help customers. They convey this attitude by knowing the product and by being
courteous and empathetic with their customers. Service-oriented employees also listen to their customers
and help them resolve problems when possible, rather than referring complaints to coworkers. While it is
important for employees to help customers, they are not always in a position to offer deep discounts.
</h5></div><h5 id='q20'>20. What is one of the purposes of having business policies?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. To make sure the business's actions are consistent</option><option value="B">B. To encourage customers to make frequent exchanges</option><option value="C">C. To ensure that the business makes a profit</option><option value="D">D. To allow employees to make decisions regarding customers</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: To make sure the business's actions are consistent</h5><h5>Business policies keep the day-to-day operations
running smoothly and consistently. Policies ensure that employees will handle the same situations in the
same manner, rather than making decisions regarding each customer, because the policies provide
guidelines for employees to follow. Business policies cannot ensure profits. Policies usually set rules for
exchanges of goods, but they do not encourage customers to make exchanges frequently.
</h5></div><h5 id='q21'>21. Which of the following is an appropriate action to take when dealing with difficult customers:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Practice passive listening</option><option value="B">B. Maximize your talking</option><option value="C">C. Defend company policy</option><option value="D">D. Maintain eye contact</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: Maintain eye contact</h5><h5>As an employee, you want to show customers that you want to listen. To do this,
you should maintain eye contact, look and act interested, avoid doing other things, concentrate on what
the customer is saying, and ask questions to clarify, when appropriate. You should strive to minimize
your talking while maximizing your active listening. Defending company policy before the customer has
finished speaking may make the customer angry. Also, you should not raise your voice; instead, talk
softly and slowly. Remember, customers take their cues from you.
</h5></div><h5 id='q22'>22. Are noncomplainers a more difficult problem for businesses than complainers?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. No, because noncomplainers do not express ill feelings.</option><option value="B">B. Yes, because records of the complaints cannot be maintained.</option><option value="C">C. Yes, because the salesperson does not have an opportunity to handle the complaint.</option><option value="D">D. No, because the salesperson can satisfy the noncomplainer within company guidelines.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: Yes, because the salesperson does not have an opportunity to handle the complaint.</h5><h5>Salespeople are
not able to satisfy noncomplainers because they do not express their dissatisfaction to anyone
associated with the business. They do, however, express ill feelings to friends, to relatives, and to
coworkers. In this way, they create a poor image of the business. Because of this, they are a much
bigger problem than complainers. Once salespeople know the source of customer complaints, they can
seek ways to satisfy the complainers within company guidelines.
</h5></div><h5 id='q23'>23. Southwest Airlines expects its employees to reinforce the company's brand promise—high quality
customer service—at all times. Which of the following is the most significant aspect of the brand promise
for all Southwest employees to remember?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Long-term planning</option><option value="B">B. Profit maximization</option><option value="C">C. Ongoing promotion</option><option value="D">D. Consistent follow-through</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Consistent follow-through</h5><h5>A brand promise is a company's agreement, spoken or unspoken, with
customers that it will meet their expectations and deliver on its brand characteristics and values. A
company must follow through by performing certain actions in consistent ways to fulfill that promise. Both
long- and short-term planning can help the company develop strategies to carry out the brand promise;
however, unless the strategies are carried out consistently, the planning efforts are useless. Ongoing
promotion helps maintain brand awareness, but it does not fulfill the company's commitment to the
customer through product quality, service, etc. The company's profits involve setting internal goals rather
than carrying out promises made to customers.
</h5></div><h5 id='q24'>24. For her best friend's birthday, Keisha is shopping for a unique item—no substitute will do, and price is no
object. What type of item is Keisha shopping for?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Convenience</option><option value="B">B. Specialty</option><option value="C">C. Shopping</option><option value="D">D. Industrial</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: Specialty</h5><h5>Specialty goods are consumer goods with special or unique characteristics that consumers are
willing to exert special efforts to obtain. The specialty item Keisha desires will take a lot of money and
effort to acquire. A shopping good is a consumer good purchased after consumers compare goods and
stores in order to get the best quality, price, and/or service. Keisha is not concerned with price. A
convenience good is a consumer good purchased quickly and without much thought or effort. Keisha has
put a lot of thought into this purchase. Industrial goods are purchased for resale, not consumer usage.
</h5></div><h5 id='q25'>25. Economics is the study of how to</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. reduce the public debt.</option><option value="B">B. increase the value of products.</option><option value="C">C. expand the role of government.</option><option value="D">D. meet unlimited human wants.

</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: meet unlimited human wants.

</h5><h5>undefined</h5></div><h5 id='q26'>26. The marketing concept is all about the</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. wholesaler.</option><option value="B">B. marketer.</option><option value="C">C. customer.</option><option value="D">D. retailer.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: customer.</h5><h5>The marketing concept is based on the belief that all business activities should be aimed
toward satisfying customer wants and needs. In other words, the customer is at the heart of the
marketing concept. The marketing concept is not about the needs and wants of the marketer, wholesaler,
or retailer.
</h5></div><h5 id='q27'>27. If a business reduces the price of an item from $3.75 to $3.00, demand for that item will usually</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. remain the same.</option><option value="B">B. increase.</option><option value="C">C. fluctuate.</option><option value="D">D. decrease.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: increase.</h5><h5>Demand is the amount of an item customers can and will purchase. When price decreases, the
demand for a product usually increases. The demand usually does not remain the same, fluctuate, or
decrease.
</h5></div><h5 id='q28'>28. One way in which a business can show its social responsibility is by __________ its profits.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. controlling</option><option value="B">B. dividing</option><option value="C">C. reducing</option><option value="D">D. maximizing</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: maximizing</h5><h5>The more profit the company makes, the more it can grow, providing better salaries to its
workers, more jobs in the community, and making possible larger charitable contributions and other
benefits to society. None of these would be possible if the company reduces, divides, or controls its
profits.
</h5></div><h5 id='q29'>29. Profitable businesses often help improve their local communities by</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. building facilities in other cities.</option><option value="B">B. investing in foreign companies.</option><option value="C">C. contributing to worthy causes.</option><option value="D">D. increasing salaries of executives.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: contributing to worthy causes.</h5><h5>When businesses make profits, they are more likely to contribute to
worthy causes that help improve the communities in which they are located. They may provide funds to
support higher education or to fight poverty and disease. Investing in foreign companies, building facilities
in other cities, and increasing salaries of executives would not help improve the local community.
</h5></div><h5 id='q30'>30. A new business that purchases insurance for its fleet of delivery trucks is handling risk by ___________
it.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. retaining</option><option value="B">B. transferring</option><option value="C">C. controlling</option><option value="D">D. avoiding</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: transferring</h5><h5>The business has transferred the risk to the insurance company. The business will pay the
insurance company fees called premiums in order to be reimbursed by the insurance company if its
trucks are damaged, stolen, or wrecked. A risk is being avoided if it is recognized and eliminated. A
business is retaining, or keeping, a risk if it does nothing about it. A risk is being controlled when
measures are taken to prevent or reduce the risk factor.
</h5></div><h5 id='q31'>31. The managers of several companies have gotten together to set prices for their businesses in order to
eliminate competition. What illegal activity is taking place?</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Price fixing</option><option value="B">B. Price indexing</option><option value="C">C. Price control</option><option value="D">D. Price discrimination</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: Price fixing</h5><h5>Price fixing eliminates competition and is illegal. Price indexing is a method of measuring
inflation. Price controls are used by the government to set prices for certain products and/or industries.
Price discrimination occurs when businesses charge customers different prices for similar amounts and
types of goods. It is also illegal.
</h5></div><h5 id='q32'>32. Government provides protection to business owners' property through the use of</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. minimum-wage laws.</option><option value="B">B. zoning laws.</option><option value="C">C. safety standards.</option><option value="D">D. consumer-protection laws.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: zoning laws.</h5><h5>Government passes zoning laws to protect the value of business property by allowing only
certain types of businesses to occupy an area. Minimum-wage laws, safety standards, and consumerprotection laws are all examples of areas of government involvement, but they are not related to
protecting business property.
</h5></div><h5 id='q33'>33. Which of the following is an example of how leadership and emotional intelligence overlap:</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Proactive behavior</option><option value="B">B. Creativity</option><option value="C">C. Adaptability</option><option value="D">D. Positive attitude</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: Proactive behavior</h5><h5>Overlaps of leadership and emotional intelligence include proactive behavior,
perseverance, positive working relationships, and confidence. Proactive behavior is taking action before
problems develop. Although creativity may be helpful to a leader, it is not a leadership skill that overlaps
with the skills of emotional intelligence. Adaptability is accepting change without becoming fearful or
angry. A positive attitude is being optimistic and willing to start new projects without all the details.
Adaptability and a positive attitude are characteristics of self-management.
</h5></div><h5 id='q34'>34. An employer who thinks that all young people are lazy and poorly trained is an example of</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. harassment.</option><option value="B">B. discrimination.</option><option value="C">C. hostility.</option><option value="D">D. prejudice.

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: prejudice.

</h5><h5>undefined</h5></div><h5 id='q35'>35. As Ben assesses his personal strengths and weaknesses, what can he do to keep from focusing too
much on his weaknesses?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Develop a list of false generalizations</option><option value="B">B. Compare himself to others</option><option value="C">C. Identify one strength for every weakness</option><option value="D">D. Ask others for critical feedback</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: Identify one strength for every weakness</h5><h5>Although an important aspect of self-assessment is evaluating
your weaknesses, obsessing over them will only discourage you. If you identify one strength for every
weakness, you will have a more accurate, realistic assessment of yourself. Comparing yourself to others
and making false generalizations may also hinder your ability to accurately assess yourself. Asking
others for both positive and negative feedback is an important aspect of the self-assessment process, but
it is counter-productive to obsess over the negative feedback.
</h5></div><h5 id='q36'>36. Which of the following is an example of an employee exhibiting self-confidence:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Sam tries very hard to do his job well but becomes frustrated when he makes a small mistake.</option><option value="B">B. Ted is nervous about making his presentation because he forgot to bring his note cards.</option><option value="C">C. Lindsey is embarrassed because her supervisor asked a question that she could not answer.</option><option value="D">D. Jane believes that she can respond to unknown circumstances in a positive, calm way.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: Jane believes that she can respond to unknown circumstances in a positive, calm way.</h5><h5>Self-confidence is
a positive belief in your own talents, skills, and objectives. Because Jane believes that she can respond
to unknown circumstances in a positive way, she is a self-confident person. Being nervous, being
embarrassed, and being frustrated may indicate a lack of self-confidence.
</h5></div><h5 id='q37'>37. Which of the following would not communicate an attitude of interest and enthusiasm toward customers:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Asking irrelevant questions</option><option value="B">B. Speaking expressively</option><option value="C">C. Choosing positive words</option><option value="D">D. Listening attentively</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: Asking irrelevant questions</h5><h5>Any questions should be relevant to the customer's wants and needs in
order to indicate your interest in meeting those needs. Choosing positive words, speaking in an
expressive manner, and listening are all ways to exhibit interest and enthusiasm.
</h5></div><h5 id='q38'>38. Your supervisor has given you a job to do which must be completed before you leave for the day.
Another employee has finished her assignment and offers to help you. This person is demonstrating</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. empathy.</option><option value="B">B. honesty.</option><option value="C">C. initiative.</option><option value="D">D. assertiveness.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: initiative.</h5><h5>Initiative is defined as the willingness to act without having to be told to do so, or the willingness
to accept or seek additional or unpleasant duties. The employee who offers to help another is showing
initiative by seeking additional duties. Empathy means the ability to put yourself in another person's
place. Assertiveness is behavior that is characterized by respect for personal rights as well as for the
rights of others. Honesty is truthfulness.
</h5></div><h5 id='q39'>39. Don likes to have lunch with coworkers every day, and they usually take a longer lunch break than the
company allows. What are Don and his coworkers doing?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Acting in a trustworthy manner</option><option value="B">B. Following ethical principles</option><option value="C">C. Stealing from the company</option><option value="D">D. Misusing their fringe benefits</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Stealing from the company</h5><h5>Don and his coworkers are stealing time from the company because they are
not working during all of the hours for which they are being paid. Allocating a certain amount of time for a
lunch break is routine business procedure, not a fringe benefit. These employees are demonstrating that
they do not follow ethical principles or act in a trustworthy manner.
</h5></div><h5 id='q40'>40. A feeling that a person has about someone or something is known as a(n)</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. attitude.</option><option value="B">B. aptitude.</option><option value="C">C. motive.</option><option value="D">D. value.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: attitude.</h5><h5>Attitudes are very personal feelings and values. Attitudes may be positive or negative. Values
are ideas, beliefs, etc., held by an individual. Aptitude is possessing the skill or ability to do something.
Motives are the reasons underlying an individual's behavior.
</h5></div><h5 id='q41'>41. Ed forgot to take an important piece of mail to the post office. Which of the following is an appropriate
response for Ed to make when his supervisor criticizes him:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. "I picked up all the mail that I saw."</option><option value="B">B. "I'm sorry; I don't know how I overlooked it."</option><option value="C">C. "I'm sorry, but someone should have told me."</option><option value="D">D. "I thought I picked up all the mail."</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: "I'm sorry; I don't know how I overlooked it."</h5><h5>In order to benefit from criticism, start by admitting you were
wrong. This can be hard to do, or embarrassing, but you can learn to do it. Even when the criticism is
justified, as it was in Ed's case, the person making the criticism will have more respect for you if you
accept blame. All of the other alternatives are excuses.
</h5></div><h5 id='q42'>42. Which of the following responses expresses empathy:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. "I am so sorry. I understand how difficult that must have been for you."</option><option value="B">B. "I am so excited that we are leaving tomorrow on vacation."</option><option value="C">C. "I am so glad you liked the restaurant. We go there a lot."</option><option value="D">D. "I was so sorry to hear about the bad accident."

</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: "I am so sorry. I understand how difficult that must have been for you."</h5><h5>Empathy is the ability to put
yourself in another person's place. It enables you to imagine how the other person sees things and feels
about them. The other alternatives are comments that do not involve empathy.
</h5></div><h5 id='q43'>43. Even though she's very different from them, Marci values her coworkers and their ideas. She's willing to
adjust her opinions and behaviors because she shows</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. communication.</option><option value="B">B. cultural sensitivity.</option><option value="C">C. prejudice.</option><option value="D">D. ethnocentrism.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: cultural sensitivity.</h5><h5>The willingness to adjust your opinions and behaviors so that you value different
people and ideas is cultural sensitivity. Communication is an exchange of information. Prejudice is an
opinion or judgment that is based on feeling or hearsay, rather than fact. Ethnocentrism is the belief that
your own culture is naturally better than other cultures.
</h5></div><h5 id='q44'>44. Which of the following statements represents assertive behavior:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. "Well, I did have plans for tonight, but I guess I can change them."</option><option value="B">B. "I already have plans for Friday, but I'd be glad to help you on Saturday."</option><option value="C">C. "This is how I want the project conducted, and I don't want to hear any complaints."</option><option value="D">D. "No wonder my sales are down; the manager of this department is totally incompetent."</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: "I already have plans for Friday, but I'd be glad to help you on Saturday."</h5><h5>Assertive behavior is
characterized by respect for personal rights as well as for the rights of others. "Well, I did have plans for
tonight, but I guess I can change them," represents passive behavior. Passive behavior is characterized
by a failure to exercise personal rights and a lack of respect for personal needs. The remaining
alternatives represent aggressive behavior, which is characterized by a willingness to ignore the rights of
others and to exploit them in order to achieve personal goals.
</h5></div><h5 id='q45'>45. It is appropriate to use the yielding conflict response mode in conflict resolution when</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. both parties want to look at all sides of the issue.</option><option value="B">B. the other person is using bullying tactics.</option><option value="C">C. the issue is not very important.</option><option value="D">D. one person wants to ignore the problem.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: the issue is not very important.</h5><h5>The way a person reacts to conflict is called his/her conflict response
mode. The yielding response mode means that one party accommodates or gives in to the other party's
request. Yielding is most appropriate when the issue isn't very important, such as deciding where to go to
lunch. Bullying tactics are characteristic of the forcing conflict response mode. This often involves
physical or emotional abuse, is hurtful to relationships, and is inappropriate to use. A person who wants
to look at all sides of the issue is using the problem-solving response mode. A person using the
withdrawal response mode tries to ignore or avoid the conflict. This response mode often increases the
person's level of stress because s/he is always thinking about how to avoid the other person who is
involved in the conflict.
</h5></div><h5 id='q46'>46. What kind of team would take full responsibility for an entire line of products?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Work team</option><option value="B">B. Quality circle</option><option value="C">C. Project team</option><option value="D">D. Short-term committee</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Work team</h5><h5>A work team is a group of employees which is responsible for carrying out an entire work
process. This might include all the steps in producing a product, performing a service, or running a
section of the business. A quality circle is a problem-solving group of coworkers who are given work
situations or problems to study and discuss in order to recommend solutions to management. A project
team is a team of employees from different parts of the company who are assigned to work together on a
specific project. A short-term committee has an immediate goal, such as obtaining speakers for a
conference.
</h5></div><h5 id='q47'>47. If a leader takes ownership of a problem, makes sure it is fixed, and takes steps to prevent it from
happening again, s/he is demonstrating</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. adaptability.</option><option value="B">B. responsibility.</option><option value="C">C. flexibility.</option><option value="D">D. social awareness.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: responsibility.</h5><h5>Fulfilling one's obligations in a dependable, reliable manner is known as responsibility,
and it is an important leadership characteristic. When a leader is responsible, s/he takes ownership of
problems, makes sure they are fixed, and takes steps to prevent them from happening again. Flexibility,
also called adaptability, is the ability to adapt to changes as they occur. Social awareness is the ability to
know and understand others' emotions; it is part of emotional intelligence.
</h5></div><h5 id='q48'>48. Trey is planning ahead to overcome obstacles that might stand between him and achieving his goals.
Which tip for smart goal-setting is Trey following?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Developing an action plan for each goal</option><option value="B">B. Putting goals in writing</option><option value="C">C. Regularly reviewing and revising goals</option><option value="D">D. Making sure goals are compatible with each other</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Developing an action plan for each goal</h5><h5>By planning ahead for how he will overcome potential obstacles,
Trey is developing an action plan for his goal. This will make it easier to face roadblocks if and when they
pop up. In this scenario, Trey is not putting his goals in writing, reviewing and revising his goals, or
making sure they are compatible with each other.
</h5></div><h5 id='q49'>49. Which of the following is an example of leading change:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Initiating a meeting about updating your employee break room</option><option value="B">B. Learning that you've received a promotion</option><option value="C">C. Losing a customer to a competing firm</option><option value="D">D. Getting a new coworker from another department</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: Initiating a meeting about updating your employee break room</h5><h5>Initiating a meeting about a needed
change at work is leading change. The change is happening because of you. Learning that you've
received a promotion, losing a customer to a competing firm, and getting a new coworker from another
department are all changes, but they are changes that are happening to you instead of changes that
you've initiated.
</h5></div><h5 id='q50'>50. Human relations can best be described as the study of the ways people</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. form and conduct relationships.</option><option value="B">B. form and express opinions.</option><option value="C">C. handle communication.</option><option value="D">D. develop personal styles.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: form and conduct relationships.</h5><h5>When you study human relations, you examine the ways that people
form and conduct relationships with one another. Relationships between people are often very complex
and can be either effective or ineffective. They are affected by people's personal styles, their opinions,
and their communication skills.
</h5></div><h5 id='q51'>51. To delay payment when buying business supplies from a website, a purchaser is most likely to pay for
the goods with a(n) __________ card.</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. debit</option><option value="B">B. credit</option><option value="C">C. ATM</option><option value="D">D. store-value

</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: credit</h5><h5>Credit is the arrangement in which businesses and individuals can purchase now and pay later.
One option businesses have to obtain credit is to secure credit cards from lending institutions.
Businesses can obtain the goods and services they need right away, such as airline tickets and supplies,
and then pay for the items when they receive their statement from their lending institutions. Businesses
often purchase the things they need to operate effectively online. In fact, many web-based businesses
will only accept credit cards as a form of payment. Debit cards, ATM cards, and store-value (gift) cards
do not delay payment.
</h5></div><h5 id='q52'>52. Pedro received a check in the amount of $432.87 from the Tabor Corporation, a company in which he is
a stockholder. This source of income is referred to as</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. inheritance.</option><option value="B">B. wages.</option><option value="C">C. interest.</option><option value="D">D. dividends.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: dividends.</h5><h5>Individuals and businesses acquire income in many ways. Dividends are earnings that are
paid to investors or stockholders for their investments. When Pedro purchased shares of Tabor stock, he
became an owner of the company. As an owner of the company, Pedro has the opportunity to earn a
percentage of the company's profits, which are paid to him in the form of dividends. Wages are the
income that workers earn for the work that they perform. Interest is the reward or cost of lending or
borrowing money, usually figured as a percentage of the amount borrowed. An inheritance is the assets
(e.g., property, goods, money) that a person leaves to others upon his/her death.
</h5></div><h5 id='q53'>53. One of the reasons that businesses and consumers use credit is because it provides</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. convenience.</option><option value="B">B. reassurance.</option><option value="C">C. interest.</option><option value="D">D. collateral.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: convenience.</h5><h5>Credit allows businesses and consumers to pay for several different purchases at one time
with a single payment. It reduces the need to carry cash and provides the convenience of ordering by
telephone. Collateral is anything of value belonging to the borrower which is pledged to the lender to
guarantee that the loan will be repaid. Interest is the fee which lenders charge borrowers for the use of
credit. Credit does not provide reassurance or comfort.
</h5></div><h5 id='q54'>54. When an item is purchased, money is exchanged for the right to</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. own the item.</option><option value="B">B. use credit.</option><option value="C">C. file a claim.</option><option value="D">D. pay for the item.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: own the item.</h5><h5>When an item is purchased, money is exchanged for the right to own the item. Using credit
may be part of the purchase process. Filing a claim may occur later if the buyer's (or seller's) rights were
not upheld. Paying for the item is the process of exchanging money during a purchase.
</h5></div><h5 id='q55'>55. You are more likely to achieve your goals if they are</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. written down.</option><option value="B">B. based on needs only.</option><option value="C">C. long term.</option><option value="D">D. short term.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: written down.</h5><h5>By noting the key points, Brooke will be able to refer the most important information when
she needs it later. Effective note-taking does not involve answering questions or expressing opinions.
Brooke might need her notes to develop a briefing, which is a summary of important information or
instructions.
</h5></div><h5 id='q56'>56. Which of the following is categorized as a fixed expense in a personal budget:</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Groceries</option><option value="B">B. Car payment</option><option value="C">C. Home repairs</option><option value="D">D. Clothing</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: Car payment</h5><h5>Debit cards, ATM cards, and store-value (gift) cards
do not delay payment.
</h5></div><h5 id='q57'>57. On a pay stub, the total amount of money that a worker has earned for the pay period before deductions
is listed as</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. net pay.</option><option value="B">B. gross pay.</option><option value="C">C. tax-exempt income.</option><option value="D">D. overtime income earned.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: gross pay.</h5><h5>Gross pay is the total income earned for the pay period before income taxes and other
deductions are subtracted from the wages. Net pay is the amount of money that the worker receives after
the taxes and other deductions have been subtracted from his/her wages. Tax-exempt income includes
revenues that are not taxed, such as tax refunds, veteran's benefits, and welfare benefits. Overtime
income is the amount of money that an hourly worker earns for working more hours than s/he is normally
scheduled to work.
</h5></div><h5 id='q58'>58. When should you record bank transactions in your check register?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. When checks bounce</option><option value="B">B. When bank statements are received</option><option value="C">C. As bank statements are reconciled</option><option value="D">D. As soon as each check is written</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: As soon as each check is written</h5><h5>To keep accurate records, you need to record all information in the
check register as each transaction occurs. Otherwise, the date, check number, or check amount may be
recorded inaccurately. Waiting to record check information can result in difficulties with balancing bank
statements when they arrive. This could also result in checks being returned to you for inadequate funds.
</h5></div><h5 id='q59'>59. Sheila pays the minimum payment shown on her credit card bill each month. For the remaining amount
on the bill she will be charged a(n)</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. annual percentage rate.</option><option value="B">B. annual fee.</option><option value="C">C. late fee.</option><option value="D">D. overdraft fee.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: annual percentage rate.</h5><h5>The annual percentage rate (APR) is the interest paid on the portion of the bill
Sheila does not pay each month. An annual fee is a once-a-year payment made to the credit card
company that permits the person to use the company's credit card. A late fee is issued when a person
does not submit any payment at all by the monthly due date. An overdraft fee is charged by a bank when
a customer writes a check for more money than is in his/her checking account.
</h5></div><h5 id='q60'>60. Which of the following could Lynn do to lower the risk of identity theft:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Use secure web browsers when purchasing online</option><option value="B">B. Share bank account information with others</option><option value="C">C. Keep written records of all major cash purchases</option><option value="D">D. Write account passwords in a personal planner

</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use secure web browsers when purchasing online</h5><h5>Identity theft occurs when an individual obtains and
uses another person's information (e.g., credit cards) without that person's consent. To reduce the risk of
identity theft, people should use secure web browsers to make purchases. Because Internet sales
transactions often require a person to provide credit card information, it is important to make sure that the
web browsers are secure. Using secure websites reduces the risk of computer hackers obtaining
confidential information for fraudulent purposes. Another way to reduce the risk of identity theft is to
memorize passwords. If a personal planner is stolen, the risk of identity theft goes because the
passwords are written down. Also, people should not share bank account numbers with others. When
more people know an individual's banking information, the risk of identity theft increases. Everyday cash
transactions do not require a purchaser to provide personal information and, therefore, do not pose a
high risk for identity theft.
</h5></div><h5 id='q61'>61. Fiona made a $500 donation to a local homeless shelter last year. When she prepares her personal
income tax form, she can claim the donation as part of her</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. living expenses.</option><option value="B">B. public property.</option><option value="C">C. tax deductions.</option><option value="D">D. discretionary income.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: tax deductions.</h5><h5>Tax deductions are expenses that can be subtracted from gross income. For example,
charitable donations can be claimed as tax deductions on an individual's personal tax return. The tax filer
may need to provide a receipt for donations that exceed a certain amount of money. Other examples of
tax deductible expenses include college tuition, home-mortgage interest, and child care. Charitable
donations are not claimed on tax returns as public property, living expenses, or discretionary income.
</h5></div><h5 id='q62'>62. Which of the following is an example of a lending investment:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Antiques</option><option value="B">B. Homes</option><option value="C">C. Bonds</option><option value="D">D. Stocks</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Bonds</h5><h5>A lending investment is one in which a lender allows a borrower to use his/her money during a
period of time for a specified fee or rate of interest. A bond is a type of lending investment in which
individuals lend money to a government, municipality, or corporation to earn a set rate of interest for a
specified time period. Homes, antiques, and stocks are ownership investments.
</h5></div><h5 id='q63'>63. Useful financial information is understandable to</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. accountants and managers.</option><option value="B">B. anyone who needs to use it.</option><option value="C">C. anyone with a background in finance.</option><option value="D">D. everyone.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: anyone who needs to use it.</h5><h5>Financial information is not useful unless it is understandable by anyone
who needs to use it. This might include more than just accountants and managers. Not everyone who
needs to use financial information will have a background in finance. Financial information may not be
understandable to every single person, but that doesn't mean it isn't useful—it just has to be understood
by the people who need to use it.
</h5></div><h5 id='q64'>64. What is the primary purpose of the accounting process in business?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Tracking financial transactions</option><option value="B">B. Evaluating advertising activities</option><option value="C">C. Determining warehousing needs</option><option value="D">D. Buying production equipment</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: Tracking financial transactions</h5><h5>Accounting is the process of keeping and interpreting financial records.
The financial records include a variety of data, such as monies received from sales transactions and
monies paid to others (e.g., vendors) to cover expenses. Advertising activities are elements of the
business's promotional function. Warehousing refers to the storage of goods for use by the business or
for resale. Employees use production equipment to a make a good or to facilitate a service the business
sells.
</h5></div><h5 id='q65'>65. What is the advantage of using accounting standards?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Presents financial information in a consistent format</option><option value="B">B. Allows businesspeople to summarize financial data differently</option><option value="C">C. Reduces the need for the full disclosure of financial data</option><option value="D">D. Identifies inconsistencies in business procedures</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: Presents financial information in a consistent format</h5><h5>Accounting standards (e.g., generally accepted
accounting principles) are rules that accountants use to prepare and summarize financial reports.
Because accountants use the same standards and rules, accounting information is consistent and clear
to all of the people who read, interpret, and work with financial information. Summarizing data in different
ways and identifying inconsistent business procedures are not advantages of using accounting
standards. To be in compliance, businesses must fully disclose important financial data.
</h5></div><h5 id='q66'>66. True or false: Companies without an HR department do not participate in HR management activities.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. False; in companies without HR departments, other managers and supervisors participate in HR
management activities.</option><option value="B">B. True; smaller companies have no need for HR management.</option><option value="C">C. True; only HR managers can complete these activities.</option><option value="D">D. False; in companies without HR departments, all employees participate in HR management
activities.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: False; in companies without HR departments, other managers and supervisors participate in HR
management activities.</h5><h5>Human resources management is a function of business, as well as a
department. In other words, bigger companies may have a great number of employees dedicated solely
to managing human resources, but in small businesses without an official “HR department,” this
important function still remains. And, even in big companies, human resources management is not
contained solely within the HR department—supervisors and managers across the organization also take
some part in managing human resources, although their level of involvement varies from business to
business. Smaller companies need HR management as much as bigger ones, and HR managers aren't
the only ones who can complete these activities. Not all employees will participate in HR activities,
however.
</h5></div><h5 id='q67'>67. Identify the marketing function illustrated in the following situation: Martha wants a winter coat and sees a
style she likes in a magazine advertisement.</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Promotion</option><option value="B">B. Selling</option><option value="C">C. Pricing</option><option value="D">D. Purchasing</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: Promotion</h5><h5>The example illustrates an advertising activity that is part of the promotion function.
Purchasing is a business activity necessary to obtain goods and services for use in the operation of a
business. Selling is responding to customer needs and wants through planned, personalized
communication that influences purchase decisions and enhances future business opportunities.
Product/Service management is the marketing function that involves obtaining, developing, maintaining,
and improving a product or service mix in response to market opportunities.
</h5></div><h5 id='q68'>68. Eric is viewing the results for an online search about the current economic situation in North America.
Which of the following is going to provide Eric with the most reliable information:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. A two-day-old video clip of a CNN interview with a 16-year-old entrepreneur from Sheboygan,
Wisconsin</option><option value="B">B. A six-page report written in 2009 by a Canadore College student for an economics class</option><option value="C">C. An excerpt from a second-edition high-school economics textbook that was published in the fall
of 2005</option><option value="D">D. An article written by a Harvard economics professor that was published in a business magazine
last month

</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: An article written by a Harvard economics professor that was published in a business magazine
last month

</h5><h5>undefined</h5></div><h5 id='q69'>69. Due to obsolescence, the format in which a business stores its information must often be</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. summarized.</option><option value="B">B. archived.</option><option value="C">C. processed.</option><option value="D">D. updated.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: updated.</h5><h5>Obsolescence occurs when something is outdated. Technology is always evolving, so
computer systems and applications are always subject to obsolescence. Businesses must update the
ways in which they store or archive their information because the format may not be usable in the future.
For example, modern computers do not have outlets that read floppy disks, which were popular external
storage devices several years ago. The way people summarize or process information is not related to
the state of obsolescence.
</h5></div><h5 id='q70'>70. Which of the following is a true statement about a management information system (MIS):</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. It does not assist with a business's information management program.</option><option value="B">B. It is the same thing as an information management program.</option><option value="C">C. It may be one part of a business's overall information management program.</option><option value="D">D. It includes people, processes, and practices.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: It may be one part of a business's overall information management program.</h5><h5>A management information
system (MIS) is a form of technology that assists with a business's information management needs. It is
not the same thing as an information management program; however, it may be one part of an overall
information management program. An MIS is just hardware and software, but an overall information
management program involves people, processes, and practices.
</h5></div><h5 id='q71'>71. What is the importance of the computer hard drive in a computer system?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. It facilitates the computer's audio transmissions.</option><option value="B">B. It permanently stores the computer program files and data.</option><option value="C">C. It allows the user to view the computer data.</option><option value="D">D. It transmits power to other computer devices.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: It permanently stores the computer program files and data.</h5><h5>The hard drive is the component of the
computer's central processing unit (CPU) that stores the computer's program files and inputted data. A
sound card is a device that transmits sound waves through the computer so the user can hear audio
elements. A computer monitor allows the user to view the computer data. The power supply transmits
power to other computer devices (e.g., printer) so they can operate.
</h5></div><h5 id='q72'>72. Which of the following is a basic computer operating system that a business might use:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Adobe</option><option value="B">B. Excel</option><option value="C">C. Oracle</option><option value="D">D. Windows</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: Windows</h5><h5>Microsoft Windows is one of the most popular operating systems. The operating system
manages the hardware and software and makes the computer work. The system connects the software
to the hardware and controls the overall operation of the computer. Excel, Oracle, and Adobe are
software programs rather than operating systems.
</h5></div><h5 id='q73'>73. Which of the following do many businesses include on their websites in order to obtain feedback from
customers:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Computer programming code</option><option value="B">B. Portable document format</option><option value="C">C. Electronic file attachment</option><option value="D">D. Email inquiry field</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: Email inquiry field</h5><h5>Many businesses provide a feedback option on their websites that enables customers
to email the business concerning problems or to ask questions. The email inquiry field is an effective
method of providing customer service as long as the business responds in an appropriate amount of
time. A portable document format allows users to view files created by another operating system. An
electronic file attachment allows a user to send an attachment with an email message. Computer
programming code is used to create software, web pages, etc.
</h5></div><h5 id='q74'>74. Business people often use the calendar applications on their cellular telephones to</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. track their appointments.</option><option value="B">B. obtain driving directions.</option><option value="C">C. send text messages to clients.</option><option value="D">D. check their email.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: track their appointments.</h5><h5>Cellular telephones are available with many options. Many cell phones have
calendar and scheduling applications that allow users to set and track their tasks and appointments. Cell
phones may also include Internet access to check email, text-messaging functions to send text
messages to clients, and global positioning systems (GPS), which are navigational tools that help users
to obtain driving directions.
</h5></div><h5 id='q75'>75. Elinor is using a word-processing program to prepare a business letter to send to the company's
suppliers. She has selected a ready-to-use letter template. If she wants to change the size of the text,
she should access the __________ button in the format bar.</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. font</option><option value="B">B. paragraph</option><option value="C">C. replace</option><option value="D">D. view</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: font</h5><h5>The format bar or ribbon sits above the document. It provides a set of buttons that enables users to
change or format different aspects of the document. The font buttons in the format bar include the an
option that enables users to change the size of text. Other buttons in the font format bar enable users to
bold or italicize text or change the typeface or color of the text. The paragraph, replace, and view buttons
do not enable users to change the size of the text.
</h5></div><h5 id='q76'>76. What software program would a local car dealer use to organize and sort customer information in order to
mail postcards to customers to remind them when it is time for routine maintenance?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Desktop publishing</option><option value="B">B. Word processing</option><option value="C">C. Spreadsheet</option><option value="D">D. Database

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: Database

</h5><h5>undefined</h5></div><h5 id='q77'>77. Jamal wants to purchase software for his small business that allows him to create text documents,
prepare presentations, maintain a customer database, and develop numerical charts. What type of
software would best meet Jamal's needs?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Word processing</option><option value="B">B. Integrated</option><option value="C">C. Spreadsheet</option><option value="D">D. Trajectory</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Integrated</h5><h5>Integrated software applications consist of two or more related computer programs that work
together to record information or perform specific business tasks or functions. An example of integrated
software is Microsoft Office—it consists of several related programs, such as word-processing (Word),
spreadsheet (Excel), presentation (PowerPoint), and database (Access). Trajectory software is used to
measure velocity, wind drift, momentum, etc.
</h5></div><h5 id='q78'>78. The primary purpose of groupware computer software is to</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. support customers and employees by providing ongoing training.</option><option value="B">B. provide managers with the ability to monitor employees' behavior.</option><option value="C">C. allow employees to have access to the same information.</option><option value="D">D. encourage businesses to increase their market share and profits.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: allow employees to have access to the same information.</h5><h5>Employees often work together to complete
projects, and many of these employees work in different locations. Groupware computer software allows
employees to share and access the same information from a variety of locations. The ability to access
the same information allows each employee to have the necessary data to complete his/her portion of the
project in a timely manner. By completing projects in a timely manner, businesses are in a better position
to satisfy clients/customers and earn profits, which might increase their market share. Some businesses
use groupware computer software to exchange information with their customers, but this depends on the
type of business and the relationship with the customer. Groupware computer software can be used in
many ways, including training, but the primary purpose is to make information available to the people
who need it.
</h5></div><h5 id='q79'>79. Stella has just finished designing the web page for her new business. Next, she needs to select a
___________ and register the website's ____________.</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. web host, domain name</option><option value="B">B. hyperlink, modem</option><option value="C">C. media permit, server</option><option value="D">D. file link, ethernet</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: web host, domain name</h5><h5>After creating a web page, the developer needs to post the web page through a
web host (web server) or Internet service provider (IPS). The web host may charge a fee to post and
store the web page, although some web hosts will provide the service free of charge. The domain name
is the business's web address. Internet users enter the web address to view Stella's website. Stella can
register her domain name directly with the Internet Corporation for Assigned Names and Numbers
(ICANN). Or, Stella can work with her web host to register the domain name for her. Stella does not need
to register a hyperlink, media permit, or file link with any organization. A hyperlink (link) is the component
of an electronic document (file) that can be clicked on in order to jump to another place within the
document or into a different document. A modem is an internal or external computer communications
device that is used to transmit information over a particular medium such as telephone lines or television
cables. Ethernet is a local area network.
</h5></div><h5 id='q80'>80. Operations managers must work closely with managers and employees in</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. foreign markets.</option><option value="B">B. the marketing department only.</option><option value="C">C. competitive businesses.</option><option value="D">D. all other parts of the business.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: all other parts of the business.</h5><h5>Operations managers must work closely with managers and employees in
all other parts of the business. This is because operations activities affect every other business function,
including marketing, finance, human resources, etc. Depending on the business, operations managers
may or may not work with managers in foreign markets. Operations managers do not work with
managers at competitive businesses.
</h5></div><h5 id='q81'>81. It is important to report noncompliance with business health and safety regulations</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. to ensure that the business pays a fine.</option><option value="B">B. to correct dangerous situations.</option><option value="C">C. to support whistleblowing policies.</option><option value="D">D. to protect business records.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: to correct dangerous situations.</h5><h5>It is important to report noncompliance with business health and safety
regulations in order to force businesses to correct dangerous situations. Certain governmental agencies
have developed health and safety regulations that businesses are expected to follow in order to provide
employees with a safe work environment. If businesses or employees do not comply with these
regulations, they should be reported so the necessary action can be taken to solve the problem and
make the workplace safe for employees. The goal is to correct dangerous situations; however,
businesses may be fined if they continue to ignore the regulations. During the process of investigating a
report of noncompliance, it may be necessary to obtain business records. The primary purpose of
reporting noncompliance is not to support whistleblowing policies. Whistleblowing policies and legislation
is to protect employees from employer retribution for reporting noncompliance.
</h5></div><h5 id='q82'>82. Jeff is a stock clerk in a department store, and his friend Eric is a server in a restaurant. Which of the
following statements is true about their safety at work:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Jeff's job has fewer safety hazards than Eric's.</option><option value="B">B. They are exposed to the same safety hazards.</option><option value="C">C. Jeff's job has more safety hazards than Eric's.</option><option value="D">D. They are exposed to different safety hazards.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: They are exposed to different safety hazards.</h5><h5>The types of safety hazards employees encounter depends
upon where people work and the type of work that they do. The number of hazards each faces depends
upon many factors, such as employees' observance of safety rules, management's attention to unsafe
conditions, and the business's enforcement of safety regulations.
</h5></div><h5 id='q83'>83. All employees can help maintain a safe work environment by</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. replenishing supplies when they are needed.</option><option value="B">B. performing their daily duties in a timely manner.</option><option value="C">C. reporting noticeable hazards to management.</option><option value="D">D. cleaning up toxic waste when they see it.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: reporting noticeable hazards to management.</h5><h5>One way to prevent hazardous conditions is to be aware
of the things that create these types of situations. For example, if an employee notices that an electrical
cord is frayed, s/he should notify the appropriate manager about the problem so the manager can take
steps to have the electrical cord repaired or replaced. If the electrical cord is not repaired or replaced,
someone could be shocked or a fire could start. All employees should perform their daily duties in a
timely manner regardless of hazards that they may encounter. Employees should replenish supplies
(e.g., paper in the copy machine) to be courteous of their coworkers. Toxic waste must be handled in
specific ways; therefore, employees should report this problem to management so it can be removed
safely.
</h5></div><h5 id='q84'>84. Which of the following types of fraud is most likely to be committed by an unscrupulous competitor:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Point-of-sale</option><option value="B">B. Robbery</option><option value="C">C. Pilferage</option><option value="D">D. Computer

10

</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: Computer

10

</h5><h5>undefined</h5></div><h5 id='q85'>85. Lily is the last employee to leave the building today. To reduce the risk of theft, Lily should __________
before she _________.</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. adjust the thermostat, turns on the surveillance camera</option><option value="B">B. turn off the lights, sets the security alarm</option><option value="C">C. turn on the surveillance camera, adjusts the thermostat</option><option value="D">D. set the security alarm, locks the doors</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: set the security alarm, locks the doors</h5><h5>Businesses install locks and security alarms to protect their
facilities from theft and burglary. Depending on the business's procedures, the last employee to leave for
the day should set the security alarm and lock the door. In some situations, the security alarm can be set
with a remote device after the employee leaves the building and locks the doors. Turning off the lights
and adjusting the thermostat will not protect the building from unlawful entry. Turning on a surveillance
camera may deter and identify thieves and burglars, but this will not prevent them from entering the
building.
</h5></div><h5 id='q86'>86. Which component on a purchase order indicates the total price for all quantities of a single item:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Unit price</option><option value="B">B. Amount due</option><option value="C">C. Extension</option><option value="D">D. Product code</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: Extension</h5><h5>A purchase order is the form that a business fills out to order goods and services. It is
considered a contract between the buyer and seller. As a contract, the purchase order contains
information, such as the buyer, seller, shipping address, types and quantities of items needed, prices,
etc. The extension indicates the total cost of each quantity of products the buyer is purchasing. The
extension amount is determined by multiplying the quantity purchased by the price per unit. For example,
if a purchase order indicates that a buyer wants 12 of product X, which costs $18 each, then the
extension price for Product X is $216. The product code is the vendor's identification number for the item.
The amount due includes all extended prices, tax, and delivery charges.
</h5></div><h5 id='q87'>87. Employees who are involved in production scheduling are responsible for</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. issuing orders for production activities to begin.</option><option value="B">B. estimating how long each step in production will take.</option><option value="C">C. establishing the path inputs take through production.</option><option value="D">D. obtaining the resources needed in production.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: estimating how long each step in production will take.</h5><h5>Scheduling establishes the timetable to be
followed in production. Employees responsible for scheduling look at the number of steps in the
production process and estimate how long each step will take. Purchasing is the production activity that
obtains the needed resources. Routing is the production activity that establishes the path inputs take
from the time they are received by the business until they become outputs. Dispatching is issuing orders
for production to start.
</h5></div><h5 id='q88'>88. When should a person select the appropriate outfit for a specific occasion?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Before developing a hygiene routine</option><option value="B">B. Before showering and brushing teeth</option><option value="C">C. After conducting a final check</option><option value="D">D. After assessing the situation</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: After assessing the situation</h5><h5>The situation will dictate how a person will present him/herself to others.
For example, a person attending a corporate board meeting might wear something different than
someone who is attending a rock concert. Once the situation has been assessed, the individual can
determine what to wear for the occasion. Showering and brushing teeth are practices of proper hygiene.
Some hygiene practices (e.g., showering), must be completed before dressing. A final check consists of
activities to make sure that personal appearance is in place. This is done after the person puts on the
clothing.
</h5></div><h5 id='q89'>89. In orderly and systematic behavior, things that you must do are grouped or arranged according to similar
characteristics. This is known as __________ your activities.</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. prioritizing</option><option value="B">B. classifying</option><option value="C">C. scheduling</option><option value="D">D. identifying</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: classifying</h5><h5>There are many ways to classify your activities. One way to classify or group activities would
be on the basis of frequency. Identifying activities involves listing them, prioritizing identifies the order in
which they should be done, and scheduling establishes a time plan for carrying out the activities.
</h5></div><h5 id='q90'>90. Which of the following would be considered a short-term objective:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Becoming president of a large corporation</option><option value="B">B. Paying off a twenty-five year mortgage</option><option value="C">C. Finishing a six-week computer-software course</option><option value="D">D. Becoming fluent in a foreign language</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: Finishing a six-week computer-software course</h5><h5>An objective is a goal, and a short-term goal is one that
takes less than a year to achieve. A six-week course is only a small part of a year. Becoming president of
a large corporation, becoming fluent in a foreign language, or paying off a twenty-five year mortgage are
long-term goals.
</h5></div><h5 id='q91'>91. Self-understanding helps you to raise your level of self-esteem because it</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. gives you a true picture of yourself.</option><option value="B">B. identifies social activities you enjoy.</option><option value="C">C. helps you to develop personal interests.</option><option value="D">D. compares your skills with others' skills.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: gives you a true picture of yourself.</h5><h5>Self-understanding involves identifying both your strengths and your
weaknesses. When you recognize your strengths, it is easier to accept your weaknesses. This helps you
to like and to accept yourself, which are essential to raising your level of self-esteem. You may develop
personal interests or identify enjoyable social activities through self-understanding, but they may not
affect your level of self-esteem. Comparing your skills with the skills of others is not part of selfunderstanding.
</h5></div><h5 id='q92'>92. Which of the following is the most reliable source of information regarding an employer's general
expectations in the workplace:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Interoffice correspondence</option><option value="B">B. Company policy manual</option><option value="C">C. Coworkers</option><option value="D">D. Company website</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Company policy manual</h5><h5>Policies are the general rules or expectations to be followed by company
personnel. Often, businesses provide these rules in a publication, such as a manual. Issues such as
absences, vacations, dress codes, and the personal use of email or other office equipment are often
addressed in a written form. Although it is possible to obtain information about an employer's
expectations from the company website, interoffice correspondence, and coworkers, these options are
not always the most reliable or the most accurate. In addition, some companies do not have websites or
do not use them to post workplace policies.
</h5></div><h5 id='q93'>93. What should individuals consider when identifying occupations that are of interest to them?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Family history</option><option value="B">B. Parents' occupations</option><option value="C">C. Their personalities</option><option value="D">D. Friends' opinions

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Their personalities</h5><h5>Personality is an individual's distinctive qualities or traits and behavior. Each person
has a unique personality that will have an effect on the type of occupation that will be of interest to
him/her. For example, people who are outgoing and friendly will be interested in different careers than
those that will interest people who prefer to work alone. Individuals should consider their personality
when identifying possible occupations, rather than family history, parents' occupations, or friends'
opinions.
</h5></div><h5 id='q94'>94. When considering employment opportunities in business, individuals should consider their</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. health and safety.</option><option value="B">B. wants and needs.</option><option value="C">C. talents and skills.</option><option value="D">D. time and money.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: talents and skills.</h5><h5>Talents and skills are aptitudes that have an effect on the type of career that would be
most suitable for an individual. When considering employment opportunities, individuals should consider
their talents and skills because they are more likely to do well in careers that require their specific talents
and skills. Also, they usually will enjoy a career that is compatible with their talents and skills. Finding the
right job often satisfies wants and needs. Health and safety are not necessarily issues to consider
because most jobs in business are safe and do not adversely affect an individual's health. Individuals
usually do not consider their time and money when reviewing employment opportunities.
</h5></div><h5 id='q95'>95. One difference between entrepreneurs and small-business owners is that</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. entrepreneurs usually purchase existing businesses or franchise rights.</option><option value="B">B. entrepreneurs rarely manage the day-to-day aspects of their businesses.</option><option value="C">C. small-business owners usually employ between 500 and 1,000 workers.</option><option value="D">D. small-business owners generally are not interested in expanding their businesses.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: small-business owners generally are not interested in expanding their businesses.</h5><h5>Entrepreneurs are
individuals who expand their businesses in the form of products, personnel, and target markets.
Entrepreneurs can, but do not usually, buy existing businesses or franchise rights. However, for franchise
owners to be entrepreneurs, they must expand the business or create new businesses. Entrepreneurs
are usually very involved in the daily management of their businesses in the early stages of the ventures.
The U.S. Small Business Administration defines a small business as being one employing fewer than 500
people.
</h5></div><h5 id='q96'>96. Sharon is completing a job application form that asks why she left her previous job. An appropriate
guideline for Sharon to use in answering this question would be to</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. be totally honest and open about her previous situation.</option><option value="B">B. avoid making any negative statements about the firm she left.</option><option value="C">C. say that she would rather not discuss the reason she left.</option><option value="D">D. describe the problems that caused her to leave.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: avoid making any negative statements about the firm she left.</h5><h5>In many cases, people leave jobs because
they can no longer tolerate the workplace. They may want to get away from a disagreeable coworker, a
domineering boss, or an unpleasant atmosphere. When these people apply for new jobs, they should not
describe problems or be totally honest and open about their previous situations. They should not be
dishonest, but they should give whatever positive reason applies to them. These might include the desire
for added responsibility, the hope of career advancement, or the wish to broaden horizons. Refusing to
discuss why you left a job would indicate that you were hiding something or had been fired for some
reason.
</h5></div><h5 id='q97'>97. Under which of the following circumstances should applicants send interview follow-up letters:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. If they are convinced they are qualified</option><option value="B">B. Only if they are interested in the job</option><option value="C">C. When they are sure they will get the job</option><option value="D">D. After every employment interview</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: After every employment interview</h5><h5>Job applicants should send follow-up letters after every employment
interview in order to thank the interviewer for considering them. Sending follow-up letters is a common
courtesy to interviewers, but it also benefits the applicant. Even if the applicants are not hired at that time,
they have created a favorable impression in the event that they apply for other positions with that
business in the future. Applicants should always send follow-up letters, not only if they are interested in
the job, sure they will get the job, or convinced they are qualified.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this policy
up to and including disqualification of competitors and chapters from further participation.

Test 1102

BUSINESS ADMINISTRATION CORE EXAM

1

1. Limited liability is a characteristic of what form of business ownership?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. targeted</option><option value="B">B. chronological</option><option value="C">C. generalized</option><option value="D">D. traditional</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: traditional</h5><h5>B
Car payment. Developing a personal budget helps individuals manage their income and expenses. An
important consideration in budgeting involves identifying fixed expenses, which are the expenses (cash
outflows) that do not fluctuate or change from month to month. Car payments, insurance, and rent are
examples of fixed expenses. Groceries, home repairs, and clothing are variable expenses, or expenses
that may fluctuate slightly from month to month.
</h5></div><h5 id='q99'>99. Who should take continuing education classes to keep up with changes in tax regulations?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Martha Winters, Certified Public Accountant</option><option value="B">B. Paul Stanton, Corporate Security Advisor</option><option value="C">C. Gwen Colbert, Accounts Receivable Supervisor</option><option value="D">D. Carlos Ramirez, Product Acquisition Manager</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: Martha Winters, Certified Public Accountant</h5><h5>Many professions require businesspeople to complete
continuing education courses to maintain their certifications and licensures. Because certified public
accountants work with financial data, they need to keep up with changes in regulations, including taxes.
Security advisors, accounts-receivable supervisors, and product-acquisition (purchasing) managers need
to keep up with changes in their fields; however, these positions do not usually require extensive
knowledge about changes in tax regulations.
</h5></div><h5 id='q100'>100. What is one of the purposes of having business policies?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. To make sure the business's actions are consistent</option><option value="B">B. To encourage customers to make frequent exchanges</option><option value="C">C. To ensure that the business makes a profit</option><option value="D">D. To allow employees to make decisions regarding customers</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: To make sure the business's actions are consistent</h5><h5>Business policies keep the day-to-day operations
running smoothly and consistently. Policies ensure that employees will handle the same situations in the
same manner, rather than making decisions regarding each customer, because the policies provide
guidelines for employees to follow. Business policies cannot ensure profits. Policies usually set rules for
exchanges of goods, but they do not encourage customers to make exchanges frequently.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_1_Split_Master.js"></script></html>