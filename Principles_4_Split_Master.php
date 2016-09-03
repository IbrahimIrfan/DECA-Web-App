<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 10</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. In what type of business is the owner personally liable for any debts of the business?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Hybrid</option><option value="B">B. Corporation</option><option value="C">C. Sole proprietorship</option><option value="D">D. Franchise</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sole proprietorship</h5><h5>A sole proprietorship is a form of business ownership in which the business is owned
by one person. This means that the owner is liable for the debts of the business. A corporation is owned
by its stockholders who share the responsibility for debts. A hybrid is a form of business ownership that
combines elements of corporations and either sole proprietorships or partnerships.
</h5></div><h5 id='q2'>2. What question is important to ask when determining if online sources are providing reliable information
for a research report?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Can the author be quoted?</option><option value="B">B. Do I agree with the opinions expressed in the article?</option><option value="C">C. What are the author's credentials?</option><option value="D">D. Do I need to provide a bibliography?</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: What are the author's credentials?</h5><h5>When identifying sources that provide relevant, valid written material,
the researcher evaluates a variety of factors, including the credibility of the author. A credible author
would have expertise and knowledge of the topic at hand. For example, an economics professor's article
about aggregate demand would tend to be more trustworthy than if the article was written by a
construction worker. Research reports should look at a topic from different viewpoints to ensure that it is
objective and free of bias. Whether the author can be quoted or if a bibliography is required are not
questions that address the reliability of the online information.
</h5></div><h5 id='q3'>3. Brandon has been given a 385-page report and does not have time to review the entire document, but he
does need to understand specific information that is included in the report. What section of the report will
guide Brandon to the information he needs?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Bibliography</option><option value="B">B. Table of contents</option><option value="C">C. Appendices</option><option value="D">D. Analysis</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: Table of contents</h5><h5>When trying to locate specific information from a lengthy document or a book, it often
saves time to first look at the table of contents. The table of contents is the portion of the text in which the
sections are listed with their page numbers for easy access. For example, if Brandon wants to obtain
information about industry trends, he can look at the table of contents, find the section that discusses
trends, and turn to the designated page of the document to read the desired information. The
bibliography contains the citations or sources used to construct the primary document. The appendices
are the segments added to the end of the primary document that include supporting information. Some
research reports contain an analysis of the document's contents or research. By looking at the table of
contents, the reader can determine if the desired information is included in the appendices or analysis
sections of the report.
</h5></div><h5 id='q4'>4. Jacob was nervous about making his valedictorian speech, but when he stood up to walk to the podium,
the audience cheered and gave him a standing ovation, which helped him relax and enjoy the moment.
What was the audience doing?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Exhibiting unprofessional behavior</option><option value="B">B. Mocking the speaker</option><option value="C">C. Encouraging the speaker</option><option value="D">D. Engaging in passive listening</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: Encouraging the speaker</h5><h5>In many cultures, a standing ovation is the ultimate show of support for a
speaker. It indicates the audience's respect for the speaker, and its desire to hear what the speaker has
to say. Because cheering provides positive feedback, the audience was not mocking or insulting the
speaker. Some cultures might view the audience's behavior as unruly or disrespectful; however, this
situation involves a school event, rather than a business event, so the audience isn't exhibiting
unprofessional behavior. Because Jacob has not started speaking, the audience is not actively listening
to what he is saying.
</h5></div><h5 id='q5'>5. One reason why employees often are able to follow written directions more easily than they are able to
follow verbal directions is because most employees are able to</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. provide feedback about the presentation.</option><option value="B">B. use body language to indicate that they understand.</option><option value="C">C. ask questions during the explanation.</option><option value="D">D. remember only so much information at one time.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: remember only so much information at one time.</h5><h5>It is usually effective to verbally explain simple
directions or instructions. However, if the directions or instructions are more complicated, employees
usually are better able to follow written directions. The human brain is capable of remembering only so
much information at one time. If the verbal directions or instructions are long and complicated, many
employees will have difficulty remembering and following them. On the other hand, employees can refer
to written directions or instructions at any time if they forget a step or a process. Body language might
indicate if employees understand verbal directions or instructions. Employees usually are encouraged to
ask questions and provide feedback to clarify their understanding of directions or instructions.
</h5></div><h5 id='q6'>6. One way to demonstrate active listening is by</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. interrupting the speaker to ask questions.</option><option value="B">B. taking steps to minimize barriers.</option><option value="C">C. focusing your attention on distractions.</option><option value="D">D. concentrating only on the points that you want to hear.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: taking steps to minimize barriers.</h5><h5>Active listening involves the use of nonverbal cues, paraphrasing,
questioning, and other techniques to let a speaker know that a message has been heard and
understood. Barriers such as telephone calls, loud music, and other noises can hinder the ability to focus
on what the speaker is saying. Taking steps to minimize barriers, such as closing a door, or letting a
phone call go to voice mail can decrease distractions and improve active listening. Active listeners wait
until a speaker has finished talking before asking questions. Interrupting the speaker is rude and
distracting. If the listener pays attention only to the points s/he wants to hear, the message may be
misunderstood.
</h5></div><h5 id='q7'>7. Communication is best defined as</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. signals and gestures.</option><option value="B">B. the transfer of feelings.
</option><option value="C">C. the exchange of ideas and information.</option><option value="D">D. printed material.
</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: the exchange of ideas and information.</h5><h5>Understanding must also exist before good communication is
possible. Signals, gestures, and printed materials may all be involved in communication.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1075

BUSINESS ADMINISTRATION CORE EXAM

1

1. In what type of business is the owner personally liable for any debts of the business?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. I am glad to meet you.</option><option value="B">B. I don't want to know you.</option><option value="C">C. We have a lot in common.</option><option value="D">D. We have met before.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: We have met before.</h5><h5>way the business's work will be done. Directing is the management function of providing guidance to
workers and work projects.
</h5></div><h5 id='q9'>9. To be able to explain and defend their ideas objectively to others, individuals usually need to have
effective __________ skills.</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. reading</option><option value="B">B. technical</option><option value="C">C. computer</option><option value="D">D. verbal</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: verbal</h5><h5>Individuals who have effective verbal skills have the ability to communicate with the use of words.
When explaining and defending their ideas objectively, individuals often are speaking to others and using
verbal communication. Having effective verbal skills enables individuals to speak in an organized manner
and present information in a logical order. They are able to speak clearly and provide supporting
information in a way that others will understand. Individuals do not necessarily need to have effective
technical, computer, or reading skills to be able to explain and defend their ideas objectively.
</h5></div><h5 id='q10'>10. What is one of the qualities of a good telephone voice?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Monotone</option><option value="B">B. Stern control</option><option value="C">C. Varying tone</option><option value="D">D. Decisiveness

®
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: Varying tone</h5><h5>Employees who answer the telephone for a business should not speak in a monotone but
vary the tone of voice to reflect their interest and enthusiasm. Their voices should project sincerity, be
easy to understand, and have a friendly tone. Decisiveness and stern control might give a negative
impression.
</h5></div><h5 id='q11'>11. Brooke is attending a meeting to discuss an upcoming project that she will be working on. To take
effective notes during the meeting, Brooke must</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. listen carefully.</option><option value="B">B. answer questions.</option><option value="C">C. express opinions.</option><option value="D">D. develop a briefing.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: listen carefully.</h5><h5>Brooke must listen to the speaker so she can identify the key points that she wants to
write down. By noting the key points, Brooke will be able to refer the most important information when
she needs it later. Effective note-taking does not involve answering questions or expressing opinions.
Brooke might need her notes to develop a briefing, which is a summary of important information or
instructions.
</h5></div><h5 id='q12'>12. An employee is preparing a formal report and must present important facts in the sequence in which they
occurred. The employee should prepare the report by presenting the information in ___________ order.</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. inverted</option><option value="B">B. chronological</option><option value="C">C. concurrent</option><option value="D">D. reverse</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: chronological</h5><h5>When describing a process or historical information, the writer may need to present the
facts in chronological order. By describing the steps or events in the sequence in which they occur, the
writer is presenting the information in a logical manner, which helps the readers understand the content.
When presenting information in an inverted order, the writer is describing the steps or processes in
reverse order. Concurrent means that activities are being performed at the same time.
</h5></div><h5 id='q13'>13. When writing e-mail messages to businesspeople, it is best to avoid using</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. initialisms.</option><option value="B">B. conjunctions.</option><option value="C">C. modifiers.</option><option value="D">D. antonyms.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: initialisms.</h5><h5>An initialism is an abbreviation for a word—a modern form of shorthand that is commonly
used when writing informal messages, such as e-mail and text messages. Some businesses and
industries use initialisms as part of their organizational culture. Examples of initialisms include FYI (for
your information), 2L8 (too late), and LOL (laugh out loud). Because many people do not use or
understand initialisms, it is best not to use them when writing professional e-mails. A conjunction is a
word that connects two words or phrases (e.g., and, or, but). A modifier is an adjective or adverb. An
antonym is a word that means the opposite of another word (e.g., hot, cold).
</h5></div><h5 id='q14'>14. A business letter that has easy-to-understand information is said to possess</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. caution.</option><option value="B">B. clarity.</option><option value="C">C. courtesy.</option><option value="D">D. consensus.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: clarity.</h5><h5>Communication that is expressed clearly is described as having clarity. Caution is carefully
stating a point in order to avoid conflict or misunderstanding. Courtesy involves the use of tact and
consideration, while consensus is group opinion.
</h5></div><h5 id='q15'>15. Letters of inquiry that businesses write to other businesses are routine business communication and
usually contain only</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. basic information.</option><option value="B">B. complex instructions.</option><option value="C">C. confidential data.</option><option value="D">D. technical explanations.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: basic information.</h5><h5>The
bibliography contains the citations or sources used to construct the primary document. The appendices
are the segments added to the end of the primary document that include supporting information. Some
research reports contain an analysis of the document's contents or research. By looking at the table of
contents, the reader can determine if the desired information is included in the appendices or analysis
sections of the report.
</h5></div><h5 id='q16'>16. Employees should be encouraged to communicate suggestions for changes to management because</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. the change may improve the business.</option><option value="B">B. change is always good.</option><option value="C">C. change is motivational.</option><option value="D">D. the employees will feel appreciated.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: the change may improve the business.</h5><h5>Many companies encourage their employees to make
suggestions by providing suggestion boxes or by meeting regularly with employees and asking for their
suggestions. Not all change is good or motivational to workers. The employees who suggest changes
may not feel appreciated unless their changes are adopted.
</h5></div><h5 id='q17'>17. Holding a telephone conference call is an efficient way for multiple employees to communicate at the
same time when they</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. require visual aids for discussion.</option><option value="B">B. work in different cities.</option><option value="C">C. perform different job functions.</option><option value="D">D. lack text messaging capabilities.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: work in different cities.</h5><h5>Telephone conferences are efficient ways to hold meetings for people who are in
different locations. Telephone conferences allow for immediate verbal communication. The job function of
telephone conference participants is not relevant. A video conference is an ideal way to have a meeting
that requires the use of visual aids for employees in remote locations. Text messaging is not as efficient
as telephone conferencing when multiple people are involved.
</h5></div><h5 id='q18'>18. Which of the following is most likely to happen to employees who are discourteous to the business's
customers:</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. They may be fired.</option><option value="B">B. They may be promoted.</option><option value="C">C. They may win an award.</option><option value="D">D. They may lose their benefits.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: They may be fired.</h5><h5>More people lose their jobs because they can't get along with other people than for
any other reason. Establishing positive customer/client relations is very important to a business's
success. Employees who damage customer relations are not likely to be promoted or given awards.
Benefits cannot be taken away for misconduct.
</h5></div><h5 id='q19'>19. What can you do to project to customers that they are important to the business?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Use customer names in conversations.</option><option value="B">B. Stare at customers so they know you are listening.</option><option value="C">C. Request a supervisor's assistance in resolving problems.</option><option value="D">D. Speak loudly so that customers can easily hear your responses.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use customer names in conversations.</h5><h5>Customers enjoy hearing their names, and they feel important
when they realize employees have taken the time to learn them. You should maintain eye contact, not
stare. You should speak at a comfortable volume—not too loudly or too softly. You should try, whenever
possible, to resolve customers' problems without involving a supervisor.
</h5></div><h5 id='q20'>20. Which of the following is the primary reason for a business's employees to learn as much as possible
about the business and its products:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. To reduce the promotional budget</option><option value="B">B. To assist coworkers</option><option value="C">C. To answer customers' inquiries</option><option value="D">D. To create publicity for the business</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: To answer customers' inquiries</h5><h5>Customers expect a business's employees to be able to answer all of
their inquiries, especially those about products the customers want to buy. When employees can answer
customer inquiries, they help to create a good image for the business. Being knowledgeable about the
business and its products may enable employees to help each other, but that is not a primary reason for
them to be knowledgeable. Knowledgeable employees do not necessarily create publicity for the
business or reduce its promotional budget.
</h5></div><h5 id='q21'>21. Which of the following is an appropriate action to take when dealing with difficult customers:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Maximize your talking</option><option value="B">B. Maintain eye contact</option><option value="C">C. Defend company policy</option><option value="D">D. Practice passive listening</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Maintain eye contact</h5><h5>As an employee, you want to show customers that you want to listen. To do this,
you should maintain eye contact, look and act interested, avoid doing other things, concentrate on what
the customer is saying, and ask questions to clarify, when appropriate. You should strive to minimize
your talking while maximizing your active listening. Defending company policy before the customer has
finished speaking may make the customer angry. Also, you should not raise your voice; instead, talk
softly and slowly. Remember, customers take their cues from you.
</h5></div><h5 id='q22'>22. Part of the process of handling customers' complaints effectively is</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. knowing how to argue.</option><option value="B">B. adjusting company policy.</option><option value="C">C. getting all the facts.</option><option value="D">D. keeping the upper hand.

</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: getting all the facts.</h5><h5>Permit the customer to state the complaint without interruption. Restate the
complaint to ensure that there are no misunderstandings on either side. Only then are you prepared to
handle the problem. The person handling the complaint should not argue with the customer or try to
control the situation by keeping the upper hand because these actions can create or fuel a heated
situation. Company policy for handling complaints should be followed, not adjusted, since this ensures all
customers will be treated in the same manner.
</h5></div><h5 id='q23'>23. What will probably happen to a business if it continuously fails to deliver on its brand promise?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Decrease liability</option><option value="B">B. Improve sales volume</option><option value="C">C. Increase market share</option><option value="D">D. Lose credibility</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Lose credibility</h5><h5>A brand promise is a business's agreement, spoken or unspoken, with customers that it
will consistently meet their expectations and deliver on its brand characteristics and values. An example
of a brand promise is a large company that pledges to deliver backorders within 24 hours. If the company
consistently fails to deliver backorders within 24 hours, customers are likely to become upset, which may
cause the company to lose its credibility. A business that loses credibility with its customers tends to lose
sales and market share because its customers will likely find new sources to fulfill their needs. Liability
refers to a debt, (e.g., money), that the company owes and does not always affect a company's ability to
fulfill its brand promise.
</h5></div><h5 id='q24'>24. Which of the following is a category of economic resources:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Valuable</option><option value="B">B. Scarce</option><option value="C">C. Human</option><option value="D">D. International</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: Human</h5><h5>Economic resources are those things that make it possible to produce and sell the goods and
services needed or wanted by consumers. The three major types of economic resources are natural
resources, human resources, and capital goods. Human resources are people who work to produce
goods and services. Some resources are scarce, or in short supply; valuable; or international, if they are
available everywhere.
</h5></div><h5 id='q25'>25. The general economic growth of a country is supported by its</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. standard of living.</option><option value="B">B. level of productivity.</option><option value="C">C. gross domestic product.</option><option value="D">D. wealth of goods and services.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: level of productivity.</h5><h5>The general economic growth of a country depends upon its level of productivity.
For example, the level of productivity in the United States has given the country a wealth of goods and
services which allows its citizens to reach a certain standard of living. Gross domestic product is the final,
total value of all goods and services produced within a country's geographic boundaries during a year's
time. GDP serves as a measure of economic growth.
</h5></div><h5 id='q26'>26. A team of employees is responsible for researching potential demand for a business's brand-new
product. The factor that is most likely to affect demand for this product is the</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. product's utility.</option><option value="B">B. costs of production.</option><option value="C">C. government's policy.</option><option value="D">D. number of producers.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: product's utility.</h5><h5>The basic demand for a product is not determined by its price but by its utility, or
usefulness, to a potential consumer. If consumers believe the business's new product will benefit them,
there is likely to be demand for it. The costs of production, government policies, and the number of
producers are factors that affect supply.
</h5></div><h5 id='q27'>27. If customers feel that a product's price is too high, they will probably</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. buy less of the product.</option><option value="B">B. call the Better Business Bureau.</option><option value="C">C. make a formal complaint.</option><option value="D">D. try to negotiate the price.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: buy less of the product.</h5><h5>Likewise, if customers feel that the price is relatively low, they will buy more.
Customers affect prices of products through the use of their economic votes—by deciding to buy or not to
buy. Most retail prices are not negotiable or of interest to the Better Business Bureau, which tries to
protect consumers from fraud. Many customers will complain about prices, but few would take the time to
make a formal, written complaint.
</h5></div><h5 id='q28'>28. Which business activity is responsible for locating and hiring employees to carry out the work of the
business?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Human resources management</option><option value="B">B. Chain of command</option><option value="C">C. Operations</option><option value="D">D. Line and staff</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: Human resources management</h5><h5>One of the major responsibilities of human resources management is
staffing the organization with qualified workers. Management is also responsible for organizing the staff,
which could be according to a chain of command that designates specific levels of authority. Line and
staff is a method of defining employees by their positions within the business. Line employees are
involved in producing the business's products, while staff employees are not involved in production but
provide support to that effort. Operations includes all of the activities involved in the day-to-day running of
the business.
</h5></div><h5 id='q29'>29. The uncertainty of not being able to predict the outcome of investing in a business is part of the</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. risk.</option><option value="B">B. incentive.</option><option value="C">C. reward.</option><option value="D">D. plan.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: risk.</h5><h5>In a business venture, the outcome is uncertain, there is a chance of loss, and no one knows what
may happen. This is risk. In some cases, the risk can be reduced by planning certain kinds of protection,
such as insurance, but not all risk is insurable. The incentive for going into business is the belief that it
will succeed, and the reward will be profit.
</h5></div><h5 id='q30'>30. If a business receives an insurance payment because of a loss by fire, this would be the result of a(n)
__________ risk.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. pure</option><option value="B">B. economic</option><option value="C">C. human</option><option value="D">D. speculative</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: pure</h5><h5>Pure risks are risks that carry with them the possibility of loss or no loss. Pure risks are generally
insurable. Speculative risks are risks that may result in a loss, no change, or a gain. Economic risks are
changes in the market that force prices to be lowered. Human risks are caused by human weakness and
unpredictability.
</h5></div><h5 id='q31'>31. What is a type of government fiscal control that regulates business practices?</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Zoning laws</option><option value="B">B. Copyright laws</option><option value="C">C. Trademark law</option><option value="D">D. Minimum-wage law</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: Minimum-wage law</h5><h5>An example of a government fiscal control that regulates business practices is the
minimum-wage law. The minimum-wage law is a federal law that sets the lowest amount of hourly wages
that a business may pay its employees. Businesses are required to pay their employees no less than the
hourly rate set by government. Copyright laws protect books and other artistic works and give their
creators sole rights to them for 28 years. Zoning laws protect the value of business property. A trademark
is a symbol, design, or word used by a producer to identify a good or service, and it can be registered
with the government to prevent use by others.
</h5></div><h5 id='q32'>32. When a business makes decisions about how to use its scarce resources, the business is</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. directing.</option><option value="B">B. controlling.</option><option value="C">C. economizing.</option><option value="D">D. organizing.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: economizing.</h5><h5>Economizing is the process of deciding how scarce resources will be used or which goods
and services will be purchased or provided so that the most satisfaction can be obtained. All businesses
try to economize in order to obtain the greatest satisfaction from their limited resources. Controlling is the
management function that monitors the work effort. Organizing is the management function of setting up
the way the business's work will be done. Directing is the management function of providing guidance to
workers and work projects.
</h5></div><h5 id='q33'>33. Achievement-oriented, emotionally intelligent people usually are</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. prosperous.</option><option value="B">B. motivated.</option><option value="C">C. transparent.</option><option value="D">D. impatient.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: motivated.</h5><h5>Achievement-oriented, emotionally intelligent people are motivated. They have a strong desire
to succeed. They often set high standards for themselves so that whatever they do is evaluated in terms
of their goals. Achievement-oriented, emotionally intelligent people are not necessarily prosperous or
impatient. Transparent people are who they say they are and have nothing to hide.
</h5></div><h5 id='q34'>34. Doing things that make you feel good about yourself will __________ your self-esteem.</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. raise</option><option value="B">B. hinder</option><option value="C">C. lower</option><option value="D">D. damage

3

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: raise</h5><h5>Any activity or achievement that makes you feel good about yourself will boost your self-esteem.
Doing things you don't feel good about could hinder, lower, or damage your self-esteem.
</h5></div><h5 id='q35'>35. Anna and Alex work at the local movie theater. Anna is always complaining about the working conditions
at the theater, the long hours, and about most of the people that they have to work with. Although Alex
does not approve of Anna's ongoing complaints and wants to tell Anna to quit, he does not. He lets her
talk while he concentrates on his duties. Which of the following traits is Alex demonstrating:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Adaptability</option><option value="B">B. Assertiveness</option><option value="C">C. Self-control</option><option value="D">D. Interest and enthusiasm</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: Self-control</h5><h5>By not saying anything to Anna and concentrating on his duties, Alex is demonstrating selfcontrol. He is restraining his feelings, words, and actions toward Anna's complaining. Assertiveness is
the ability to express yourself; communicate your point of view; and stand up for your rights, principles,
and beliefs, while respecting authority and being tactful. Interest and enthusiasm is showing interest in
those around you, the goods/services that you market, and in your business in general. Adaptability is
flexibility, the ability to adjust to changing conditions.
</h5></div><h5 id='q36'>36. What personal attribute involves feeling comfortable with your opinions and decisions, even when others
criticize you for them?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Creative thinking</option><option value="B">B. Self-confidence</option><option value="C">C. Social responsibility</option><option value="D">D. Optimism</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Self-confidence</h5><h5>Self-confidence is a positive belief in your own talents, skills, and objectives. Selfconfident people adhere to their personal code of ethics, even when others do not agree with or are
critical of those opinions, decisions, or behaviors. Creative thinking involves the use of the creativethinking process to generate unique ideas, approaches, or solutions. Social responsibility is the duty of
business to contribute to the well-being of society. Optimism is a positive attitude.
</h5></div><h5 id='q37'>37. If you "go along with the crowd" instead of standing up for what you believe in, you are likely to</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. do the right thing.</option><option value="B">B. gain credibility.</option><option value="C">C. lose trust in yourself.</option><option value="D">D. get what you want.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: lose trust in yourself.</h5><h5>If you "go along with the crowd" instead of standing up for what you believe in, you
are likely to lose trust in yourself. Responsible behavior means always being true to what you believe is
right. When you waver on your own values, you lose trust in and credibility with both yourself and others.
When you go along with what others want to do, you are less likely to do the right thing or get what you
want and need.
</h5></div><h5 id='q38'>38. Which of the following situations is an example of an employee's exhibiting unethical behavior:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Working four 10-hour days to shorten the week</option><option value="B">B. Clocking out at the end of the day</option><option value="C">C. Scheduling a two-week vacation</option><option value="D">D. Taking a day of sick leave to play golf</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Taking a day of sick leave to play golf</h5><h5>Employees usually are allowed a certain number of sick days to
be used in the event of health or medical problems. Employers expect employees to use sick days for
legitimate reasons. It is considered unethical for an employee to use a sick day for recreational activities
or vacation. Clocking out at the end of the day is standard practice in many businesses. Employees may
schedule vacation for the length of time they are entitled, which may be two weeks. Many businesses
allow employees to work four 10-hour days, which amounts to a 40-hour week.
</h5></div><h5 id='q39'>39. Having a positive attitude helps people to cope with everyday life because positive people</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. expect life to be full of problems.</option><option value="B">B. believe that problems can be overcome.</option><option value="C">C. are less likely to be tolerant.</option><option value="D">D. believe they have set reasonable goals.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: believe that problems can be overcome.</h5><h5>People who take a positive attitude handle life's problems better
than others because they believe problems are temporary aggravations that can be endured or
overcome. Setting reasonable goals is not part of handling problems. Positive people are more likely to
be tolerant than others, and they expect life to be good rather than full of problems.
</h5></div><h5 id='q40'>40. Individuals who have the ability to direct the course of their own behavior and manage their feelings,
thoughts, and actions are said to have</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. perseverance.</option><option value="B">B. self-control.</option><option value="C">C. empathy.</option><option value="D">D. initiative.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: self-control.</h5><h5>Self-control enables individuals to manage their lives by using discipline and will power.
Perseverance is steadfastness, which is a desirable personal trait. Initiative is the willingness to take
action without waiting to be told to do so. Empathy is the ability to put yourself in another person's place.
</h5></div><h5 id='q41'>41. While receiving criticism, it is important for the message receiver to</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. implement the suggestions.</option><option value="B">B. request advice from another source.</option><option value="C">C. ask general questions.</option><option value="D">D. maintain an open attitude.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: maintain an open attitude.</h5><h5>Because everyone receives both positive and negative feedback, it is
important to learn how to handle both types of it. To handle criticism in an effective and appropriate
manner, a person must be open to others' opinions and points of view. It is often a good idea for a person
to ask a neutral third party for advice after s/he considers the criticism but disagrees with it. In addition, a
person should ask specific questions about the criticism and implement the source's suggestions after
the source is finished speaking.
</h5></div><h5 id='q42'>42. Which of the following best describes the concept of change:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Detrimental</option><option value="B">B. Avoidable</option><option value="C">C. Inevitable</option><option value="D">D. Unexpected</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inevitable</h5><h5>Change involves altering the form, nature, content, or future course of something. Change is
constant and unavoidable. Although many people seem to resist change, it is often beneficial. Many
changes are announced before they actually occur so that people can be prepared for them. For
example, a company informs employees that it will install a new computer system July 1, or the
government says postage rates will increase in two months.
</h5></div><h5 id='q43'>43. Instead of going through Jeff's files, Amanda waits until Jeff returns from lunch to obtain a file that she
needs to review. This is an example of one coworker ________ of another coworker.</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. respecting the privacy</option><option value="B">B. violating the workspace</option><option value="C">C. correcting the work</option><option value="D">D. reinforcing the efforts</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: respecting the privacy</h5><h5>When employees respect the privacy of others in the workplace, they are more
likely to gain the trust and respect of their coworkers and managers. Respecting coworkers' privacy
means that an employee does not read correspondence that is not addressed to him/her. In addition, the
employee does not listen to others' private conversations or go through their personal belongings. In the
example, Amanda waited until her coworker Jeff returned from lunch to obtain a file that she needed.
Because she did not go through Jeff's workspace, she was respecting rather than violating his privacy.
The example does not indicate that Amanda's intention was to correct Jeff's work or to reinforce his
efforts—she simply needed to review information in the file.
</h5></div><h5 id='q44'>44. In order to show empathy, you need to treat other people's feelings with</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. indifference.</option><option value="B">B. sensitivity.</option><option value="C">C. wariness.</option><option value="D">D. formality.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is B: sensitivity.</h5><h5>Being sensitive to others' feelings helps us to know what those feelings are, to understand
them, and to put ourselves in that person's place. If we are indifferent, wary, or treat others with formality,
we cannot be empathetic.
</h5></div><h5 id='q45'>45. Which of the following is an example of sensitive communication:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. "I'd like to invite you over for dinner sometime."</option><option value="B">B. “We are happy you could stop by to see us.”</option><option value="C">C. “I appreciate your contribution to the project.”</option><option value="D">D. “You did a wonderful job decorating that cake.”

</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: “You did a wonderful job decorating that cake.”

</h5><h5>Explanation not available</h5></div><h5 id='q46'>46. Lisa was interested in becoming an assistant manager but was told that she was not assertive enough for
the job. What could Lisa begin to do in order to become more assertive?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Refraining from expressing her thoughts or ideas</option><option value="B">B. Saying "no" to all requests made of her</option><option value="C">C. Preventing others from taking advantage of her</option><option value="D">D. Doing her work without asking for help from others</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: Preventing others from taking advantage of her</h5><h5>Assertive people don't take advantage of others or allow
others to take advantage of them. They don't refrain from expressing their thoughts and ideas. They do
not say "no" to all requests and do not feel guilty about saying "no" when necessary. They also ask for
help when it is needed.
</h5></div><h5 id='q47'>47. What type of statement can make a person feel defensive and angry during a conflict?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. You</option><option value="B">B. I</option><option value="C">C. Me</option><option value="D">D. It</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: You</h5><h5>"You" statements tend to place blame and fault on the other party. As a result, the other person
tends to become defensive and angry. Then, conflict resolution becomes more difficult. "I" statements are
used to convey beliefs, perceptions, and feelings, and are preferred because they don't blame or fault the
other party. "Me" and "it" are not terms that are widely used to describe the types of sentences that
people use during the conflict resolution process.
</h5></div><h5 id='q48'>48. What is true about personal vision?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Realistic visions are based on mission statements.</option><option value="B">B. Good visions have permanent results.</option><option value="C">C. Specific goals are necessary to determine your vision.</option><option value="D">D. Achievable visions are time bound.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is B: Good visions have permanent results.</h5><h5>A vision is a desire for the future that is achieved over time with
determination and hard work. Good visions create positive results and may involve the input of many
people over a long period of time. Visions are not based on mission statements, nor do they start out with
specific goals. Visions are timeless rather than time bound.
</h5></div><h5 id='q49'>49. Which of the following coaching characteristics means that you can accept change:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Approachability</option><option value="B">B. Enthusiasm</option><option value="C">C. Flexibility</option><option value="D">D. Dependability</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: Flexibility</h5><h5>Flexibility is a coaching characteristic that means you can accept change. If something isn't
working, you adapt. Enthusiasm means that you help your coachee to be excited about the work s/he is
doing. Approachability means that you have the type of attitude and demeanor that says, “You can
always talk to me. I'm here to help.” Dependability means being the type of person others can count on.
</h5></div><h5 id='q50'>50. How does empathy help coworkers to be fair to each other?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Empathy helps coworkers to understand legal guidelines.</option><option value="B">B. Empathy gives coworkers the ability to learn a job quickly.</option><option value="C">C. Coworkers with empathy are not likely to have disagreements.</option><option value="D">D. Coworkers with empathy are better able to understand others.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Coworkers with empathy are better able to understand others.</h5><h5>Empathy is the ability to put yourself in
another person's place. When you can "walk in someone else's shoes," even though you have not had
the same experiences, you are better able to understand and to get along with that person. Empathy
cannot prevent disagreements, help workers to understand legal guidelines, or enable them to learn a job
quickly.
</h5></div><h5 id='q51'>51. Which of the following is NOT an advantage of debit card payments:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Businesses face no risk of customers having insufficient funds when debit cards are used.</option><option value="B">B. Businesses pay 0.75% of each debit card sale to the bank that handles the billing.</option><option value="C">C. Customers can often get a debit card even if they can't get approved for a credit card.</option><option value="D">D. Businesses gain access to money quicker via debit card payments instead of checks.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Businesses pay 0.75% of each debit card sale to the bank that handles the billing.</h5><h5>Although businesses
pay a percentage of their credit sales to the bank that handles the credit card transactions, they pay a flat
fee for each debit card transaction, regardless of the amount of the sale. Therefore, debit card
transactions usually cost business less than credit card charges do. Because a business is informed
during the debit card transaction if the customer has insufficient funds, there is no risk of the business not
getting paid. It is easier for customers to get debit cards than credit cards, and businesses get their
money sooner when customers use debit cards instead of checks.
</h5></div><h5 id='q52'>52. When Matthew receives a check four times a year for income he has earned on his stock investments, he
is receiving</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. cash.</option><option value="B">B. credit.</option><option value="C">C. deposits.</option><option value="D">D. dividends.
th
</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: dividends.
th
</h5><h5>Explanation not available</h5></div><h5 id='q53'>53. About a week before her 16 birthday, Kimberly got a phone call from her grandparents. They explained
that they wanted to give her $1,000 to put toward college expenses as a birthday present, but they
weren't sure if she wanted the money now or in two years, when she would be starting college. Kimberly
decided to get the $1,000 from her grandparents right away and put it into an interest-bearing savings
account for two years. Kimberly based her decision on</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. the time value of money.</option><option value="B">B. the concept of absolute advantage.</option><option value="C">C. the capital gains potential.</option><option value="D">D. foreign exchange rate.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: the time value of money.</h5><h5>Kimberly understands that the $1,000 available to her now is worth more than
the same $1,000 two years from now. By placing the $1,000 in a savings account now, she can earn
interest on that $1,000. So, in two years, she will have more than $1,000 to put toward her college
expenses. The absolute advantage is the advantage achieved when a nation can produce a good or
service for less than another nation. Capital gains are earnings from the appreciation of a stock
investment, and Kimberly is not purchasing stock with the money. The foreign exchange rate is the value
of a currency in relation to another currency at a given time.
</h5></div><h5 id='q54'>54. A customer wants to purchase a complete bedroom set and pay part of the cost at intervals until the
furniture is paid for. Which type of credit would best serve this customer's need?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Secured loan</option><option value="B">B. Installment credit account</option><option value="C">C. Unsecured loan</option><option value="D">D. Revolving credit account</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Installment credit account</h5><h5>This type of credit is used to purchase large, expensive items such as
furniture or appliances. Customers know exactly how much is due each month and how long they will be
making payments. Revolving credit usually has a credit limit, and there is no set time for payment in full.
Secured loans are funds obtained when the borrower pledges to the lender some valuable possession,
such as real estate, stocks and bonds, machinery, or the cash value of a life insurance policy. Unsecured
loans are funds obtained by simply signing a promissory note to repay the loan. These loans are usually
for a short period of time.
</h5></div><h5 id='q55'>55. Financial planning can be described as a way to</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. retire with a substantial amount of money in the bank.</option><option value="B">B. stop all impulsive purchases.</option><option value="C">C. achieve your professional goals.</option><option value="D">D. realize what it takes to get the things you really want.

</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: realize what it takes to get the things you really want.

</h5><h5>Explanation not available</h5></div><h5 id='q56'>56. Chloe is preparing her income tax return for the first time. She is a receptionist, does not own any land or
real estate, and has not inherited any money from a deceased relative within the last tax year. She will
only be taxed on</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. wealth.</option><option value="B">B. property.</option><option value="C">C. earnings.</option><option value="D">D. purchases.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: earnings.</h5><h5>Her employer will have kept track of her earnings and withheld the correct amount from each
paycheck. She will not pay a tax on property because she does not own land or real estate. She has not
inherited any money from a relative, or received a large gift of money so she will not have to pay taxes on
wealth. She pays taxes on purchases when she makes those purchases, not when she prepares her
income taxes.
</h5></div><h5 id='q57'>57. On a pay stub, the total amount of money that a worker has earned for the pay period before deductions
is listed as</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. overtime income earned.</option><option value="B">B. net pay.</option><option value="C">C. tax-exempt income.</option><option value="D">D. gross pay.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: gross pay.</h5><h5>Gross pay is the total income earned for the pay period before income taxes and other
deductions are subtracted from the wages. Net pay is the amount of money that the worker receives after
the taxes and other deductions have been subtracted from his/her wages. Tax-exempt income includes
revenues that are not taxed, such as tax refunds, veteran's benefits, and welfare benefits. Overtime
income is the amount of money that an hourly worker earns for working more hours than s/he is normally
scheduled to work.
</h5></div><h5 id='q58'>58. Why should you spell out the check amount when completing checks?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. The spelled out check amount is used if the numbers are unclear.</option><option value="B">B. The spelled out check amount verifies who can cash the check.</option><option value="C">C. The spelled out check amount specifies the bank's routing number.</option><option value="D">D. The spelled out check amount gives the purpose for the check.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: The spelled out check amount is used if the numbers are unclear.</h5><h5>The spelled out check amount is relied
on when the bank or check recipient cannot easily decipher the numbers recorded on the check. The
“Pay to the order of” line identifies who can cash the check. The bank's routing number appears in the
MICR line at the bottom of your check. The memo line is used to designate the check's purpose.
</h5></div><h5 id='q59'>59. Caitlin has three credit cards. She receives her credit-card statement for one of the cards and has to
decide how to pay the $500 she spent with that card. To pay the least for use of the credit, she should
pay with __________ and make the __________ payment.</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. cash; minimum</option><option value="B">B. cash; full</option><option value="C">C. another card; full</option><option value="D">D. another card; minimum</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: cash; full</h5><h5>Paying the statement in full will assure that she does not have to pay extra interest on the
balance, and will help improve her credit history. Paying in cash is better for her credit history's health
than paying with another card, because eventually she will have to pay the money owed on the other
card. Paying for one card with another can lead to a downward spiral of credit card debt.
</h5></div><h5 id='q60'>60. What is the first step Cameron should take to protect himself from identity theft after he loses his wallet?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Change the passwords for his online banking accounts</option><option value="B">B. Contact the appropriate government agency to replace the credit cards</option><option value="C">C. Advise the proper law enforcement authorities about the loss</option><option value="D">D. Cancel all of his credit and debit cards</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cancel all of his credit and debit cards</h5><h5>Identity theft occurs when somebody uses another individual's
name and personal information (e.g. credit cards) for fraudulent purposes. The first thing Cameron
should do when he realizes he has lost his wallet is to cancel his credit cards. By canceling the credit
cards, Cameron will protect himself in the event that someone finds his wallet and attempts to use the
credit cards. Financial institutions and businesses (e.g., retailers) issue credit cards, not government
agencies. Cameron should contact the proper law enforcement authorities (e.g., police) if he thinks his
wallet is stolen. He can report a lost wallet, and he can also change the passwords for his online banking
accounts. However, the first thing he should do is to cancel his credit and debit cards.
</h5></div><h5 id='q61'>61. What is an important step to take when selecting a financial-services provider?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Plan an investment</option><option value="B">B. Complete tax forms</option><option value="C">C. Organize records</option><option value="D">D. Verify credentials</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: Verify credentials</h5><h5>When selecting a financial-services provider, it is important to make sure that the
provider is qualified. One way to do this is to verify the provider's credentials. In many areas, financialservices providers must pass an exam or obtain a license. These credentials verify that the provider has
the necessary training and background to give financial advice, help develop financial plans, and make
investments. Individuals organize their records before meeting with a financial-services provider. Tax
forms are completed in accordance to government regulations. Planning an investment takes place after
selecting a qualified provider.
</h5></div><h5 id='q62'>62. Of the following lending investments, which is not offered by a bank:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Municipal bond</option><option value="B">B. Money market account</option><option value="C">C. Savings account</option><option value="D">D. Certificate of deposit</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Municipal bond</h5><h5>Municipal bonds are lending investments offered by municipalities, not banks. Savings
accounts, money market accounts, and certificates of deposit are all offered by banks.
</h5></div><h5 id='q63'>63. A bank denies a business owner's application for credit saying, "We feel that you would be unable to
make the monthly payments because of your other debts." What financial report did the bank review?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Budget</option><option value="B">B. Balance sheet</option><option value="C">C. Income statement</option><option value="D">D. Operating budget</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: Balance sheet</h5><h5>A balance sheet is a financial statement that captures the financial condition of the
business at that particular moment. This includes the liabilities, or debts, that the business owes. The
bank found that the owner's current liabilities were too high to be extended. Budgets show estimated
income and expenses but not what is currently owed. Income statements would include the income and
expenses for a specific period of time but would not include outstanding debts.
</h5></div><h5 id='q64'>64. Which of the following is the generally accepted accounting principle that assumes that a business has
the ability to operate indefinitely:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Tangible existence</option><option value="B">B. Business entity</option><option value="C">C. Going concern</option><option value="D">D. Open reality</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: Going concern</h5><h5>Generally accepted accounting principles (GAAP) are universal rules that accountants
use when they prepare and summarize financial reports. Presenting financial information in a consistent
format helps accounting professionals understand financial information across many types of businesses
and industries. When setting up an accounting system, accountants consider three assumptions—going
concern, business entity, and accounting period. Going concern assumes that the business will go on
forever (indefinitely). Business entity is the assumption that the owner(s) and the business are
independent units. The third assumption is the accounting period, which indicates that each business is
divided into specific increments of time for the purpose of reporting financial data (e.g., month, quarter,
annual). Tangible existence and open reality are fictitious terms.
</h5></div><h5 id='q65'>65. A company's current balance of assets and liabilities falls under the focus of</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. return on capital.</option><option value="B">B. working capital management.</option><option value="C">C. capital investment decisions.</option><option value="D">D. the cash conversion cycle.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: working capital management.</h5><h5>A company's current balance of assets and liabilities falls under the focus
of working capital management. Working capital management involves short-term decisions about cash
flow. Return on capital is a component of working capital management that refers to how well a business
is generating cash flow in relation to its invested capital. Capital investment decisions are made for the
long-term and do not relate to current assets and liabilities. The cash conversion cycle is a component of
working capital management that refers to how long a business's money is "tied up" between purchasing
raw materials and receiving cash from sales.
</h5></div><h5 id='q66'>66. The first day on the job, a new employee was given information about job duties, introduced to
coworkers, and assigned to a senior worker. This employee has received a(n)</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. performance evaluation.</option><option value="B">B. exit interview.</option><option value="C">C. attitude survey.</option><option value="D">D. job orientation.

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: job orientation.

</h5><h5>Explanation not available</h5></div><h5 id='q67'>67. Which of the following items cannot be marketed:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Hawaii</option><option value="B">B. Health

7
</option><option value="C">C. Hopefulness</option><option value="D">D. Holiday
</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: Hopefulness</h5><h5>Most things can be marketed—including goods (durable and nondurable), services,
organizations, places, ideas, and people. Included are holidays, health, and Hawaii. However, since
hopefulness is an optimistic state of mind, it is not likely that it can be marketed.
</h5></div><h5 id='q68'>68. Businesses assess their information needs to determine the type of information that will help them deal
with</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. ethical issues.</option><option value="B">B. job applicants.</option><option value="C">C. personal relationships.</option><option value="D">D. specific problems.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: specific problems.</h5><h5>Employers expect employees to use sick days for
legitimate reasons. It is considered unethical for an employee to use a sick day for recreational activities
or vacation. Clocking out at the end of the day is standard practice in many businesses. Employees may
schedule vacation for the length of time they are entitled, which may be two weeks. Many businesses
allow employees to work four 10-hour days, which amounts to a 40-hour week.
</h5></div><h5 id='q69'>69. Eric is viewing the results for an online search about the current economic situation in North America.
Which of the following is going to provide Eric with the most reliable information:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. An excerpt from a second-edition high-school economics textbook that was published in the fall
of 2005</option><option value="B">B. A six-page report written in 2009 by a Canadore College student for an economics class</option><option value="C">C. An article written by a Harvard economics professor that was published in a business magazine
last month</option><option value="D">D. A two-day-old video clip of a CNN interview with a 16-year-old entrepreneur from Sheboygan,
Wisconsin</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: An article written by a Harvard economics professor that was published in a business magazine
last month</h5><h5>Explanation not available</h5></div><h5 id='q70'>70. Information management can be a challenge because the business world is</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. constantly changing.</option><option value="B">B. suffering from a lack of information.</option><option value="C">C. not open to new technology.</option><option value="D">D. completely dependent on paper files.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: constantly changing.</h5><h5>Information management can be a challenge because the business world is
constantly changing. Companies can't sit back and assume their current programs will continue to fit the
bill. They must stay alert to information management needs and trends and be willing to adjust
accordingly. Business technology is always changing and, more and more, companies' information is
electronic rather than paper. Employees often suffer from too much information, known as information
overload.
</h5></div><h5 id='q71'>71. Which of the following is not considered a technological innovation:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. The cell phone</option><option value="B">B. The wheel</option><option value="C">C. The Internet</option><option value="D">D. The weather</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: The weather</h5><h5>Though humans can study the weather to understand and prepare for it better, it is not
considered a technological innovation, and it was not invented by humans. The wheel, the Internet, and
the cell phone are all considered technological innovations invented and improved upon by humans.
</h5></div><h5 id='q72'>72. Which of the following is an umbrella term referring to any type of Internet transaction:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. URL</option><option value="B">B. E-commerce</option><option value="C">C. E-business</option><option value="D">D. Web site</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is C: E-business</h5><h5>E-business goes beyond buying and selling electronically as referred to in e-commerce. It
also includes providing service to customers and suppliers and enabling interactive communication such
as teleconferencing. URLs are Internet addresses, while web sites are collections of web pages.
</h5></div><h5 id='q73'>73. When writing e-mail messages, employees should remember that e-mails</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. are formal correspondence.</option><option value="B">B. take a long time to prepare.</option><option value="C">C. can be forwarded to others.</option><option value="D">D. are private conversations.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: can be forwarded to others.</h5><h5>When employees write e-mail messages to coworkers or customers, the
recipients of the messages can forward them to others without the sender's knowledge or permission.
Therefore, employees should be cautious about the content of e-mail messages because they have no
control over what the recipients do with the e-mails. It is best not to include personal or sensitive
information in e-mails, particularly if the sender wants the information to remain private. E-mail messages
are not private conversations, do not take a long time to prepare, and are not considered formal
correspondence.
</h5></div><h5 id='q74'>74. A business is able to search the World Wide Web and jump from one page that is connected to another
page by clicking on the</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. banner.</option><option value="B">B. attachment.</option><option value="C">C. hyperlink.</option><option value="D">D. symbol.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: hyperlink.</h5><h5>Many pages on the World Wide Web are connected by hyperlinks. A business's home page
may include hyperlinks that users can click on to jump to other pages on the business's web site. Some
businesses include hyperlinks from their web sites to other related sites. For example, a business
searching government agencies might be able to jump from the FBI's site to the CIA's site by clicking on
the hyperlink for that agency. An attachment is an electronic file attached to an e-mail message. A
banner is a type of online ad that appears at the side or bottom of the web page. A symbol is a
representation of something.
</h5></div><h5 id='q75'>75. When using a word-processing computer program, which of the following functions allows a user to
remove text from one part of the document and place in another part of the document:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Cut, paste</option><option value="B">B. Copy, paste</option><option value="C">C. Find, replace</option><option value="D">D. Delete, replace</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: Cut, paste</h5><h5>Business employees use word-processing software programs to create text documents, such
as letters, memos, and reports. Most word-processing programs have options that allow the user to move
text from one part of the document to another. To move text, the user highlights the text, touches the
"cut" button, which removes the text from its current position. The user moves the curser to the new
location and touches the "paste" button, which places the text in the new location. This simple process
saves time for business employees because they do not need to delete and retype the information. The
"copy" button duplicates the text but does not remove it from its current location. A "find and replace"
function helps the user to electronically locate and change words within the document.
</h5></div><h5 id='q76'>76. When using presentation software, computer users can add visual and sound effects between slides that
allow for an interesting</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. jump.</option><option value="B">B. feed.</option><option value="C">C. transition.</option><option value="D">D. lead.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: transition.</h5><h5>Presentation-software applications provide computer users with the option to add different
sound and visual effects when moving from slide to slide. This option is called a transition. The transition
makes the presentation more interesting and visually appealing. The ability to add visual and sound
effects between presentation-software slides is not referred to as a feed, jump, or lead.
</h5></div><h5 id='q77'>77. What type of software program would a cruise line use in order to maintain a list of recent passengers
and their cabin preferences?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Database</option><option value="B">B. Presentation</option><option value="C">C. Communication</option><option value="D">D. Word processing

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Database</h5><h5>Database software programs are used to collect, sort, organize, and analyze information
quickly. A cruise line would use database software to maintain a list of recent passengers and their cabin
preferences. The cruise line could sort the information according to various factors, such as the
passengers' addresses, and develop mailing lists to promote upcoming cruises. Businesses use
presentation software to develop visual aids to supplement an oral presentation. Communication
software programs are used to send information from one computer to another. Word-processing
software programs are used for writing and editing documents.
</h5></div><h5 id='q78'>78. A business uses a spreadsheet software program to track monthly sales for each salesperson and
calculate commissions. Based on the following spreadsheet data, how much more will the business owe
its salespeople for last month if it decides to raise the commission rate by 1%:
Salesperson
A
B
C
D</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. $2,856.50</option><option value="B">B. $2,391.20

Commission Rate
5%
5%
5½%
5½%

Last Month
$62,500
$66,350
$65,100
$63,920

Commission Due
$3,125.00
$3,317.50
$3,580.50
$3,515.60</option><option value="C">C. $2,625.30</option><option value="D">D. $2,578.70
</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is D: $2,578.70
</h5><h5>Explanation not available</h5></div><h5 id='q79'>79. When designing a web page, the basic elements on the first screen should include</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. small graphics and a variety of typefaces for visual balance.</option><option value="B">B. large graphics that capture the reader's attention.</option><option value="C">C. highly detailed information about the page sponsor.</option><option value="D">D. an overview of the content that is visually interesting.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: an overview of the content that is visually interesting.</h5><h5>The first thing a reader should see on a web page
is the basic, rather than detailed, information about the web-page sponsor. Then, readers should be able
to click on links to connect them to more detailed information or items of interest. To capture the reader's
attention, the page should be visually interesting, which includes the appropriate use of color and smaller
graphics. Since larger graphics tend to take longer to appear on the computer screen, some individuals
might become frustrated because they must wait. Oftentimes, people will not go beyond the initial screen
if they feel it takes too long. Therefore, it is preferable to use smaller graphics. Typefaces should be
limited since too many of them can be visually distracting.
</h5></div><h5 id='q80'>80. An important aspect of operations is making sure that the business is able to</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. inventory products.</option><option value="B">B. motivate employees.</option><option value="C">C. sell quickly.</option><option value="D">D. function effectively.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: function effectively.</h5><h5>Operations are the day-to-day activities required for continued business functioning.
Operations make sure that there are materials and supplies available so employees can do their jobs.
Operations make sure the physical facility is in good condition so work can be performed efficiently.
Effective operations are important because the activities help to increase productivity and make the
business successful. Operations are not involved in making sure that the business is able to motivate
employees, sell quickly, or inventory products.
</h5></div><h5 id='q81'>81. Jane works in a factory. She has noticed that sections of the factory floor are consistently slippery
because oil drips on them. She has reported this to her manager twice, but the problem hasn't been
corrected. Jane is so worried that an employee could slip and fall that she contacts the government
agency that handles workplace safety. This is an example of</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. establishing security procedures.</option><option value="B">B. being a tattle tale.</option><option value="C">C. handling an accident appropriately.</option><option value="D">D. whistleblowing.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: whistleblowing.</h5><h5>A whistleblower is a person who reveals any wrongdoings or malpractices that are taking
place within an organization. Jane attempted to resolve a potential problem internally with her manager,
but needed to go outside her organization to get the problem resolved. Countries, such as the U.S. and
Canada, have whistleblower laws that protect whistleblowers from retaliation. Attempting to ensure the
safety of others is not being a tattle tale—it is being a responsible adult. Because it can be interpreted by
some people as tattling, whistleblower laws may be used to protect the person who reports
noncompliance. Jane is attempting to prevent an accident; one has not occurred, yet. Security
procedures are set in place by a company's management. Jane is reporting noncompliance that may
result in a company's deciding to establish new security procedures.
</h5></div><h5 id='q82'>82. A national pizza chain guaranteed 30-minute delivery, but several of its drivers had serious car accidents
while rushing to meet this deadline. A negative outcome of the delivery guarantee for the pizza chain is
that it caused an increase in</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. sales.</option><option value="B">B. economic risk.</option><option value="C">C. business risk.</option><option value="D">D. employment.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: business risk.</h5><h5>In some cases, the risk can be reduced by planning certain kinds of protection,
such as insurance, but not all risk is insurable. The incentive for going into business is the belief that it
will succeed, and the reward will be profit.
</h5></div><h5 id='q83'>83. The first thing an employee should do when an accident occurs in the workplace is to</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. determine the severity of the injury.</option><option value="B">B. call an ambulance.</option><option value="C">C. file a report.</option><option value="D">D. administer first aid.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: determine the severity of the injury.</h5><h5>Determining the severity of the injury helps the employee to
determine what should be done next. If the injury is severe or life threatening, then an ambulance should
be called. Calling an ambulance or notifying a supervisor should not be done until after the severity of the
injury is determined. The severity of the accident will indicate whether to administer first aid. Filing a
report would generally be the last aspect of handling an accident.
</h5></div><h5 id='q84'>84. Many businesses use a variety of security precautions in order to protect the businesses from</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. threat of foreclosure.</option><option value="B">B. natural disasters.</option><option value="C">C. economic depressions.</option><option value="D">D. the risk of theft.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: the risk of theft.</h5><h5>Security methods and devices protect the physical building as well as the equipment,
fixtures, records, and goods stored inside. If used properly, they protect the business from the risk of theft
of money and other valuables and even loss of life. Security precautions cannot protect a business from
natural disasters, such as floods and lightning. Economic depressions are long periods of decline in the
gross national product characterized by a period of severely lowered production, curtailed purchasing of
goods and services, and high unemployment. Foreclosure is a legal procedure to sell the assets of a
business that has not paid its mortgage.
</h5></div><h5 id='q85'>85. In which of the following situations is a business most likely to experience a security breach:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. A business employee uses a paper shredder to destroy business records that it no longer needs.</option><option value="B">B. A small business owner installs electronic locks and security windows in the company's
warehouse.</option><option value="C">C. The technology coordinator regularly updates the antivirus software on all of the firm's
computers.</option><option value="D">D. The last employee to leave a business facility after business hours fails to set the security alarm.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: The last employee to leave a business facility after business hours fails to set the security alarm.</h5><h5>To
protect their personal well-being, the well-being of coworkers and customers, and the business's
property, employees need to follow their employers' security procedures. If the employee is the last
person to leave the business facility, s/he needs to ensure that the doors are locked and the security
alarm is set. If the security alarm is not set, it increases the risk of theft because it makes it easier for a
thief to break into the building to steal money, inventory, or equipment. Installing electronic locks and
security windows, updating antivirus software, and shredding unneeded documents are activities that
reduce the risk of security breaches.
</h5></div><h5 id='q86'>86. A small food market that calls several vendors to obtain a price and then places an order with the lowest
bidder is using the __________ buying method.</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. negotiated</option><option value="B">B. competitive-bid</option><option value="C">C. informal</option><option value="D">D. standing-order

</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: informal</h5><h5>The informal buying method is often effective for small food markets and usually involves calling
several vendors to obtain prices. Then, the market calls the lowest bidder to place an order. This is a
simple process that reduces the need for a lot of paperwork. Also, orders can be placed quickly. Formal
buying methods require more paperwork and usually written quotes rather than verbal quotes over the
phone. Competitive-bid, negotiated, and standing-order are formal buying methods that take more time
than informal methods.
</h5></div><h5 id='q87'>87. The purpose of the production process is to change resources into products that will be</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. shipped to vendors.</option><option value="B">B. stored in warehouses.</option><option value="C">C. bought by consumers.</option><option value="D">D. packed in cartons.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: bought by consumers.</h5><h5>The three major types of economic resources are natural
resources, human resources, and capital goods. Human resources are people who work to produce
goods and services. Some resources are scarce, or in short supply; valuable; or international, if they are
available everywhere.
</h5></div><h5 id='q88'>88. A full-time employee who goes to work five days a week probably would consider going to work
a(n)__________ activity.</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. routine</option><option value="B">B. occasional</option><option value="C">C. unscheduled</option><option value="D">D. efficient</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: routine</h5><h5>Routine activities are those which are done on a daily or regular basis. Occasional activities
happen at irregular or infrequent intervals, and they may be unscheduled or unplanned. An efficient
activity is one that is carried out in the most effective manner.
</h5></div><h5 id='q89'>89. In order for individuals to achieve their goals, the goals should be</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. general.</option><option value="B">B. impersonal.</option><option value="C">C. realistic.</option><option value="D">D. long term.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: realistic.</h5><h5>Realistic goals are those that are possible to achieve with a reasonable amount of effort. Goals
should be as specific as possible, since vague, general goals may not be motivational. The goal must be
personal in order to be meaningful to the individual. It can be either short term or long term.
</h5></div><h5 id='q90'>90. Chris likes to watch the space flight reports and to read about plans for the future in space. Space
exploration is one of Chris's</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. aptitudes.</option><option value="B">B. abilities.</option><option value="C">C. skills.</option><option value="D">D. interests.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: interests.</h5><h5>Interests are the things about which a person is curious or concerned. They can cover a broad
range of subjects, both mental and physical. Aptitudes are a person's abilities to do certain kinds of
things. There is no indication in this situation that Chris has the abilities, skills, or aptitudes to participate
in space exploration.
</h5></div><h5 id='q91'>91. Because a business spends a lot of money to purchase and maintain office equipment, it expects its
employees to</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. call service personnel when equipment is not working correctly.</option><option value="B">B. use and handle the equipment with care.</option><option value="C">C. develop procedures to fix the equipment.</option><option value="D">D. ask others to operate equipment that they do not know how to use.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: use and handle the equipment with care.</h5><h5>A business expects its employees to carefully handle and use
the business's office equipment. Equipment such as photocopiers, fax machines, and computers are
expensive investments for the business and can cost a lot of money to maintain and fix. Therefore, the
business expects its employees to be careful with the equipment to reduce the risk of equipment
breakdowns. Business managers, rather than employees, develop procedures for equipment handling.
For example, a business might delegate responsibility to the office manager to contact service vendors
when equipment needs to be fixed or maintained. It is not always necessary to call service people when
equipment is not working correctly, such as a paper jam in a photocopier, which can usually be removed
carefully by an employee. Employees should receive training to operate basic office equipment so they
do not need to interrupt coworkers to ask them to perform simple tasks (e.g., fax documents) that they
can easily do themselves.
</h5></div><h5 id='q92'>92. Which of the following is most likely to be able to provide in-depth information about career opportunities
in specific fields:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Local newspapers</option><option value="B">B. Trade associations</option><option value="C">C. College recruiters</option><option value="D">D. Marketing consultants</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Trade associations</h5><h5>A trade association is a group of persons in the same industry who form a society to
solve their common problems. Trade associations provide in-depth information about various jobs in their
industries. This information includes skills, training, and education necessary to perform particular jobs in
specific industries. Much of this information is often found on a trade association's web site. The web site
might also provide links to other resources that have additional information about the field or industry.
Local newspapers, college recruiters, and marketing consultants might be able to provide general career
information about a specific field or topic of interest.
</h5></div><h5 id='q93'>93. Which of the following is one way for a person to identify a tentative career interest:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Take ability assessment tests</option><option value="B">B. Ask guidance counselors for suggestions</option><option value="C">C. Find out which majors are popular</option><option value="D">D. Locate high-income occupations</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Take ability assessment tests</h5><h5>Ability assessment tests help individuals to identify their skills and their
capacity to perform certain tasks. These tests will help them to decide what type of career would be of
interest to them based on their skills. For example, a person with good communication skills might be
interested in a career in sales or marketing. People cannot identify tentative career interests by finding
out which majors are popular or by locating high-income occupations. Counselors may be able to
suggest specific occupations based on the results of an ability assessment test.
</h5></div><h5 id='q94'>94. What behavior is exhibited when an individual recognizes the possibility of an undesirable outcome and
continues to work toward a goal?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Flexibility</option><option value="B">B. Self-discipline</option><option value="C">C. Creativity</option><option value="D">D. Risk taking</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: Risk taking</h5><h5>Risk taking refers to the understanding and acceptance of not knowing the outcome of one's
actions or circumstances. Flexibility refers to the ability to adapt to changes as they occur. Self-discipline
is the ability to train yourself to act in ways that will further your goals. Creativity is the ability to generate
unique ideas, goods, or services.
</h5></div><h5 id='q95'>95. Which of the following often is the best source of information about job leads:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Bureau of Labor Statistics</option><option value="B">B. Occupational Outlook Handbook</option><option value="C">C. Business advisors</option><option value="D">D. Family and friends</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: Family and friends</h5><h5>Family and friends often are the best source of information about job leads because
they may know of openings at their own places of employment. Also, they have other contacts within the
business community and may be able to refer job seekers to their associates who may have available
positions. Business advisors usually provide guidance and assistance to businesses. The Occupational
Outlook Handbook describes the various types of jobs available in the workplace but does not provide job
leads. The Bureau of Labor Statistics analyzes current data to project what types of jobs will be needed
in the future but does not offer leads.
</h5></div><h5 id='q96'>96. A job applicant should be able to completely answer the interviewer's questions if s/he has been</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. reading brochures.</option><option value="B">B. listening.</option><option value="C">C. talking.</option><option value="D">D. taking notes.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: listening.</h5><h5>It is important for job applicants to listen carefully to what the interviewers are saying and
asking. Failure to pay close attention may result in the applicants' giving incorrect information or not
completely answering the questions. Not listening also may indicate to an interviewer that an applicant is
not interested in the position. Applicants should not read materials while an interviewer is asking
questions. Applicants should wait until the interviewer has completed the question before talking. On
occasion, applicants may write notes about what the interviewer is saying, but they should not let that
interfere with their ability to listen carefully.
</h5></div><h5 id='q97'>97. What should be included in the body of a letter of application?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Highlights of skills and experience</option><option value="B">B. Questions about the job opening</option><option value="C">C. Explanation of the letter's purpose</option><option value="D">D. Reason for leaving current position</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Highlights of skills and experience</h5><h5>A letter of application is a formal communication that states an
applicant's interest in a specific job opening. In the opening paragraph, the applicant should explain why
s/he is writing, and indicate which position s/he is applying for. In the body of the letter, the applicant
should highlight his/her skills and experience and describe why s/he is a good candidate for the position.
The body of the letter should also ask the reader to review the applicant's résumé, which the applicant
should include with the letter. The closing paragraph should ask the reader for an interview. Questions
about the job and reasons for leaving a current job are topics that the applicant and interviewer discuss
during the interview process.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1075

BUSINESS ADMINISTRATION CORE EXAM

1

1. In what type of business is the owner personally liable for any debts of the business?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. describe your personal interests.</option><option value="B">B. request a job interview.
</option><option value="C">C. provide a list of references.</option><option value="D">D. present your job qualifications.

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: present your job qualifications.

</h5><h5>way the business's work will be done. Directing is the management function of providing guidance to
workers and work projects.
</h5></div><h5 id='q99'>99. Which of the following statements is true about internships:</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Unpaid internships often lead to full-time paid positions.</option><option value="B">B. Companies that offer internships do not pay the interns.</option><option value="C">C. An intern can expect to earn minimum wage.</option><option value="D">D. Job rotation is the most important aspect of an internship.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unpaid internships often lead to full-time paid positions.</h5><h5>An internship is training in which schools and
businesses cooperate to provide on-the-job practice for learners. In many situations, businesses offer
hard-working interns full-time paid positions after they finish school. Some companies pay interns and
some do not. Some, but not all, internship programs provide job rotation opportunities; therefore, job
rotation is not always the most important aspect of an internship.
</h5></div><h5 id='q100'>100. Which of the following is the primary reason for a business's employees to learn as much as possible
about the business and its products:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. To reduce the promotional budget</option><option value="B">B. To assist coworkers</option><option value="C">C. To answer customers' inquiries</option><option value="D">D. To create publicity for the business</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: To answer customers' inquiries</h5><h5>Customers expect a business's employees to be able to answer all of
their inquiries, especially those about products the customers want to buy. When employees can answer
customer inquiries, they help to create a good image for the business. Being knowledgeable about the
business and its products may enable employees to help each other, but that is not a primary reason for
them to be knowledgeable. Knowledgeable employees do not necessarily create publicity for the
business or reduce its promotional budget.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Principles/Principles_4_Split_Master.js"></script></html>