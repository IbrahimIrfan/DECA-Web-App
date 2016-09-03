<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 9</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Which of the following is a characteristic of debtor-creditor relationships:</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Designed to monitor accounts</option><option value="B">B. Controlled by industry standards</option><option value="C">C. Intended to increase competition</option><option value="D">D. Regulated by various laws</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: Regulated by various laws</h5><h5>There are several laws that regulate the use of credit. These laws are
intended to guarantee that credit is managed fairly. The laws tend to improve the debtor-creditor
relationship because there are rules in place that apply to both parties. Debtor-creditor relationships are
not controlled by industry standards, intended to increase competition, or designed to monitor accounts.
</h5></div><h5 id='q2'>2. Which of the following is a benefit of the business-format franchise arrangement:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Strict operating hours</option><option value="B">B. Reduced risk of failure</option><option value="C">C. Limited number of vendors</option><option value="D">D. Uniform store appearance</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: Reduced risk of failure</h5><h5>The business-format franchise arrangement requires a close and continuous
working relationship between the franchisor and the franchisee. Franchisors often provide training,
financial guidance, and supply chains. Franchisees benefit from the franchisor's national advertising
programs since they operate under the trade name. This type of assistance reduces the franchisee's risk
of business failure. Disadvantages of the business-format franchise include strict operating hours, limited
number of vendors, and uniform store appearance.
</h5></div><h5 id='q3'>3. The total number of members in a channel is called</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. channel length.</option><option value="B">B. distribution intensity.
</option><option value="C">C. distribution pattern.</option><option value="D">D. channel width.
</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: channel length.</h5><h5>The total number of members in a channel is called channel length. Channel length may
be long or short depending on what makes the most economic sense. Distribution intensity and patterns
have to do with intensive, selective, or exclusive distribution. Channel width refers to the number of
middlemen available at the same level of a channel.
</h5></div><h5 id='q4'>4. For which of the following markets would producers use a short channel of distribution:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Baby boomers</option><option value="B">B. Generation X</option><option value="C">C. Local consumers</option><option value="D">D. Senior citizens</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: Local consumers</h5><h5>A short channel can be used when the potential customers are few and/or located
close together. The baby boomer, senior citizen, and Generation X markets have many potential
customers who are widely dispersed.
</h5></div><h5 id='q5'>5. Channel members' sharing inventory and order-processing information through databases and computer
systems is an example of the use of technology in</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. pricing.</option><option value="B">B. planning.</option><option value="C">C. distribution.</option><option value="D">D. promotion.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: distribution.</h5><h5>Distribution uses technology for storage, product handling, inventory control, and order
processing. The use of new technology makes it easier for channel members to share information and
track the distribution of goods. Technology in planning is often used to collect and analyze research
information. Technology in pricing is often used to verify credit or debit a sale. Technology in promotion is
often used to create advertising and unique displays.
</h5></div><h5 id='q6'>6. It is important for the JBH Company to advise all of its channel members about a sales promotion that it
plans to hold next month so the</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. risk of inventory stock-outs is eliminated.</option><option value="B">B. transporters can hire more order takers.</option><option value="C">C. company can avoid inventory shrinkage.</option><option value="D">D. products are available to meet the demand.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: products are available to meet the demand.</h5><h5>Channel members are the businesses or individuals who
assist in moving goods and services from the producer to the consumer. When one channel member is
planning a sales promotion, it should advise the other channel members so they can make sure products
are available when and where they are needed to meet increased demand. If the channel member does
not tell the producer about the sales promotion, it may not produce enough products to send to the
channel member to sell to the end users. Transporters (e.g., trucking companies) do not usually need to
hire order takers for another channel member's sales promotion. Although advising the producer about a
sales promotion may reduce inventory stock-outs, the risk cannot be eliminated. Inventory shrinkage is
the loss of inventory due to shoplifting, employee theft, breakage, misplaced goods, or poor
recordkeeping.
</h5></div><h5 id='q7'>7. One reason a channel of distribution that has strong leadership is often able to avoid conflict within the
channel is because the leader has the</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. ability to provide training.</option><option value="B">B. personality to develop friendships.</option><option value="C">C. authority to demand cooperation.</option><option value="D">D. capacity to regulate change.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: authority to demand cooperation.</h5><h5>Strong leaders have the authority and power to influence others and
direct the actions of others. A channel of distribution that has strong leadership is often able to avoid
conflict within the channel because the leader has the authority to set goals for the entire channel and
demand cooperation, which reduces the possibility of conflict. The leader's authority makes it possible for
the leader to assign specific responsibilities to each channel member and persuade members to
accomplish their individual tasks. When each member is cooperating and working for the good of the
channel, there is less chance of conflict. It is not necessary for the leader to develop friendships. Channel
leaders usually do not provide training. It is not possible to regulate change, although an effective leader
will help channel members adjust to change.
</h5></div><h5 id='q8'>8. In a weekly staff meeting, Morgan presents a set of new procedures that she believes will improve the
department's productivity levels. Jacob disagrees with Morgan's approach and provides an alternative for
improvement. Although Morgan agrees with a couple of Jacob's points, she still thinks her plan will be
better for the company in the long run. How can Morgan effectively defend her idea for improvement?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Tell Jacob that most of his ideas are weak and restate her suggestions</option><option value="B">B. Present supporting research for her suggestions in an unbiased way</option><option value="C">C. Request that the group meet again, so she has time to come up with new ideas</option><option value="D">D. Ask the other members of the group for their input and ideas</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: Present supporting research for her suggestions in an unbiased way</h5><h5>By providing supporting facts,
Morgan can actually show the staff how and why her ideas can improve the department's productivity. If
Morgan presents research that indicates that other companies' productivity levels have improved by
using approaches similar to the one that she is suggesting, then she is defending her ideas effectively.
Telling Jacob in front of the group that his ideas are weak is likely to create unnecessary conflict.
Restating suggestions, coming up with new ideas, and asking other group members for input are not
ways to defend an existing suggestion for improvement.
</h5></div><h5 id='q9'>9. Employees should answer the telephone in a businesslike manner in order to</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. be a candidate for a promotion.</option><option value="B">B. reflect the importance of the job.</option><option value="C">C. handle a lot of calls at one time.</option><option value="D">D. project the image of the business.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: project the image of the business.</h5><h5>The way in which employees handle telephone calls projects the
image of the business and its level of service. Handling calls in a businesslike manner can increase
business. Using professional telephone techniques includes making the caller feel important, and not
trying to be important. Being businesslike may enable employees to handle a great many calls or to
qualify for promotion, but these are not primary objectives.
</h5></div><h5 id='q10'>10. Before organizing an oral presentation, the presenter should</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. gather information from a variety of sources.</option><option value="B">B. determine the size of the audience.</option><option value="C">C. determine the purpose or nature of the message.</option><option value="D">D. prepare appropriate visual aids.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: determine the purpose or nature of the message.</h5><h5>Oral presentations are given to provide entertainment,
relay information, or persuade the audience into a change of attitude or behavior. The speaker needs to
know the purpose of the presentation before s/he can gather information or research for the message or
prepare visual aids. Although the size of the audience can be a factor in organizing the presentation, it is
not the first element of the presentation that the speaker considers.
</h5></div><h5 id='q11'>11. What does an enclosure notation at the bottom of a business letter signify?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Something is being sent with the letter.</option><option value="B">B. Copies of the letter were sent to others.</option><option value="C">C. The sender wishes a reply.</option><option value="D">D. The sender prepared the letter.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Something is being sent with the letter.</h5><h5>The word "Enclosure" at the bottom of the page indicates that
other material accompanies the letter. This lets the recipient know s/he should look for additional material
and lets the sender know if the material was not enclosed. Reference initials indicate who prepared a
letter. The copy notation (cc) preceding a name (or names) signifies that copies of the letter were sent to
persons other than the addressee. A request for a reply is usually included within the body of the letter.
</h5></div><h5 id='q12'>12. Which of the following is an example of persuasive messages that businesses write:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Interoffice memo</option><option value="B">B. Electronic mail</option><option value="C">C. Handwritten note</option><option value="D">D. Collection letter</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: Collection letter</h5><h5>The word "Enclosure" at the bottom of the page indicates that
other material accompanies the letter. This lets the recipient know s/he should look for additional material
and lets the sender know if the material was not enclosed. Reference initials indicate who prepared a
letter. The copy notation (cc) preceding a name (or names) signifies that copies of the letter were sent to
persons other than the addressee. A request for a reply is usually included within the body of the letter.
</h5></div><h5 id='q13'>13. Which of the following is a reason why it is important for businesses to have effective staff
communication:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. To promote social interaction</option><option value="B">B. To encourage personal relationships</option><option value="C">C. To develop business contacts</option><option value="D">D. To help employees do a good job</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: To help employees do a good job</h5><h5>One of the most important reasons for businesses to have effective
staff communication is to help employees do a good job. Employees need to receive accurate directions
and instructions on what is expected of them in order to do their jobs correctly. Supervisors need to be
able to communicate this information to employees and be able to answer any questions. Without
adequate communication, employees will not understand their role in the business and will not be able to
do a good job. The purpose of staff communication is not intended to encourage personal relationships,
develop business contacts, or promote social interaction.
</h5></div><h5 id='q14'>14. When employees strive to see things from the customer's viewpoint, it helps the business build positive
customer/client relations because the employees are</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. resourceful.</option><option value="B">B. empathetic.</option><option value="C">C. knowledgeable.</option><option value="D">D. accommodating.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: empathetic.</h5><h5>An important part of building positive customer/client relations involves the way the
business's employees treat the customers. When employees are consistently courteous, knowledgeable,
and helpful, customers are likely to return to the business. To help customers, employees should try to be
empathetic. Empathy is the ability to relate to another person's thoughts, feelings, and experiences.
Employees who can “step into their customers' shoes” are able to see things from their customers'
viewpoints. Being empathic can help calm angry customers, resolve problems quickly, and identify goods
and services that will satisfy the customers' needs. A resourceful person has the ability to get the
necessary things to perform a task or complete a project. A knowledgeable person has accurate or
necessary information. An accommodating person gives others what they want. The ability to see things
from a customer's viewpoint is not an example of being a resourceful, knowledgeable, or accommodating
person.
</h5></div><h5 id='q15'>15. When customers complain, what is the general rule that business personnel follow in order to assure that
customers receive fair and consistent treatment?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Customer complaint plan</option><option value="B">B. Store procedure</option><option value="C">C. Customer service plan</option><option value="D">D. Store policy</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: Store policy</h5><h5>When a business has policies for its employees to follow in handling complaints, the
customers are more likely to receive the same treatment. Procedures are the step-by-step processes that
personnel follow in performing specific tasks. Customer service plan and customer complaint plan are not
terms that businesses commonly use.
</h5></div><h5 id='q16'>16. Which of the following is an example of an economic good:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Guitar lessons</option><option value="B">B. Medical exam</option><option value="C">C. Automobile</option><option value="D">D. Photo developing</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Automobile</h5><h5>In order for something to be called an economic good, it must be a physical object, capable
of satisfying human wants and needs, and have monetary value. Of the items listed, the automobile is the
only economic good. The other alternatives are economic services.
</h5></div><h5 id='q17'>17. For the long-term success of the business, Stacey's Steamers has decided to add a self-serve
laundromat. Which of the following describes the business activity Stacey's Steamers is likely involved in:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Organizing itself for meeting its objectives</option><option value="B">B. Establishing a system for retrieving information</option><option value="C">C. Promoting its new service to potential customers</option><option value="D">D. Determining what will put it in reach of its goals</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Determining what will put it in reach of its goals</h5><h5>Since Stacey's Steamers is acting with its long-term
success in mind, deciding to add a self-serve laundromat should put the business in reach of its goals.
This decision is part of strategic management. Establishing a system for retrieving information is part of
information management. Promoting a new service to potential customers is part of marketing. While
organizing the business to meet business objectives is part of strategic management, it is not what
Stacey's Steamers demonstrated in this example. Organizing would involve setting up the business to be
successful in providing the new laundromat service.
</h5></div><h5 id='q18'>18. Laws that prohibit the sale of unsafe products are examples of factors that</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. limit economic freedom.</option><option value="B">B. promote competition.</option><option value="C">C. increase production.</option><option value="D">D. reduce inflation.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: limit economic freedom.</h5><h5>The private enterprise system provides a great many economic freedoms, but it
does have certain limits. Laws that have been created to protect everyone, such as prohibiting the sale of
unsafe products, are limits to economic freedom. Therefore, businesses do not have the freedom to sell
dangerous products to consumers. Laws that prohibit the sale of unsafe products are not examples of
factors that promote competition, reduce inflation, or increase production.
</h5></div><h5 id='q19'>19. Purchasing insurance to cover business risks is an example of business risks' being handled through</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. retention.</option><option value="B">B. avoidance.</option><option value="C">C. transfer.</option><option value="D">D. prevention.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: transfer.</h5><h5>Purchasing insurance to cover a risk transfers the risk to the insurer. The risk is not retained,
avoided, or prevented.
</h5></div><h5 id='q20'>20. Increased consumer spending indicates that the economy is stable and growing because increased
spending leads to an increase in</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. unemployment levels.</option><option value="B">B. interest rates.</option><option value="C">C. demand for products.</option><option value="D">D. scarcity of resources.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: demand for products.</h5><h5>When the economy is stable and growing, people have confidence in the future of
the economy and increase spending. An increase in spending leads to an increase in demand for
products, which also leads to an increase in production. When production increases, more people have
jobs and money to spend, which also increases demand for products. This situation stimulates a
continued growth in the economy. An increase in interest rates and unemployment levels often leads to a
decrease in consumer spending. Increased spending does not lead to an increase in the scarcity of
resources.
</h5></div><h5 id='q21'>21. A worker who completes a transaction in which money changes hands but no receipts are kept and the
income is not reported to the government is participating in</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. double counting.</option><option value="B">B. the underground economy.</option><option value="C">C. accuracy in counting.</option><option value="D">D. an uncounted production.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: the underground economy.</h5><h5>An underground economy is one in which money transactions take place
(such as tips received in a restaurant), but since no record is made of the transaction and the income is
not reported to the government, the GDP does not reflect the exchange. The underground economy
actually reduces the GDP. An uncounted production involves goods and services that are not sold in the
marketplace so their value can only be estimated. Double counting involves counting a product or service
more than once. Accuracy in counting refers to the vast amount of information that must be collected to
calculate GDP which can easily lead to error in the final figure.
</h5></div><h5 id='q22'>22. Which of the following best describes the way that a person stands or sits:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Posture</option><option value="B">B. Expressionism</option><option value="C">C. Body movement</option><option value="D">D. Nonverbal gesture</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: Posture</h5><h5>There are many verbal and nonverbal methods to express your feelings and thoughts. Your
posture, or the way that you carry yourself, is one way that you communicate your feelings and feelings.
A person who stands tall communicates a feeling of self-confidence. On the other hand, a person who
slouches often communicates a feeling of insecurity. Gestures involve movement—a nod, a wink, a
wave.
</h5></div><h5 id='q23'>23. By showing more initiative, you will probably raise the level of your own</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. self-confidence.</option><option value="B">B. anxiety.</option><option value="C">C. procrastination.</option><option value="D">D. self-centeredness.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: self-confidence.</h5><h5>Taking initiative usually means accomplishing more. This increases confidence in one's
abilities. People with initiative are less likely than others to be self-centered since they are alert to the
world around them rather than being focused on themselves. Initiative does not increase anxiety or
procrastination—the tendency to put things off.
</h5></div><h5 id='q24'>24. A business's sales have been declining, and a new employee suggested a means of increasing sales.
The manager belittled the employee's suggestion. This is an example of</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. destructive criticism.</option><option value="B">B. internal feedback.</option><option value="C">C. positive feedback.</option><option value="D">D. constructive criticism.

</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: destructive criticism.</h5><h5>The manager's action was an example of destructive criticism which demeans a
person without just cause. Constructive criticism is evaluative information to help someone improve.
Positive feedback involves praising the employee, and internal feedback is self-evaluation.
</h5></div><h5 id='q25'>25. Which of the following might be considered a violation of employees' privacy in the workplace:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Use of computer passwords</option><option value="B">B. Use of time clocks</option><option value="C">C. Use of security guards</option><option value="D">D. Use of video cameras</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: Use of video cameras</h5><h5>Some businesses, such as retail establishments, use video cameras to monitor
customers and prevent shoplifting. If these cameras are focused on employees, it might be considered a
violation of the employees' privacy. Businesses that use video cameras should inform employees so they
are aware that their actions are being recorded and monitored. Also, the business has an obligation not
to use cameras in areas that are designed specifically for employees, such as break rooms. The use of
time clocks is a method of recording time on the job rather than a violation of privacy. The use of security
guards is a safety factor that benefits employees and customers. The use of computer passwords
provides employees with a certain amount of privacy by allowing them to protect their computer systems
from unauthorized access.
</h5></div><h5 id='q26'>26. Which of the following would help Erica to effectively communicate her self-confidence during a job
interview:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Speaking in a very low tone of voice</option><option value="B">B. Wearing casual clothes to the interview</option><option value="C">C. Listening to the interviewer without interrupting</option><option value="D">D. Making appropriate eye contact with the interviewer</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: Making appropriate eye contact with the interviewer</h5><h5>Appropriate eye contact means looking people in
the eye without staring fixedly at them. People who are self-confident are not afraid to look others in the
eye. They also speak in a moderate tone of voice that can easily be heard without being loud. Speaking
in a very low tone is more likely to indicate timidity than self-confidence. Listening without interrupting
demonstrates courtesy and good manners. Wearing casual clothes to a job interview indicates poor
judgment rather than self-confidence.
</h5></div><h5 id='q27'>27. When a group reaches consensus, it means that all of the members agree but they usually</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. do not have equal power.</option><option value="B">B. follow the leader.</option><option value="C">C. do not vote.</option><option value="D">D. accept majority rule.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: do not vote.</h5><h5>Consensus building is the group's process of coming to an agreement. However, the
members do not vote because voting involves being for or against a decision. The side with the greater
number of votes wins. In consensus building, no one wins because all of the members come to an
agreement. Each group member's opinion is of value and each member contributes to reaching an
agreement. Therefore, each member has equal power. Consensus building does not involve following the
leader or accepting majority rule.
</h5></div><h5 id='q28'>28. Which of the following is the best way to approach a coworker who has a vision impairment:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Touch the person to make him/her aware of your presence</option><option value="B">B. Tap the person with a paper or other object</option><option value="C">C. Make a small amount of noise as you come near</option><option value="D">D. Say something in a loud voice when you reach the person</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: Make a small amount of noise as you come near</h5><h5>Always let persons with vision impairment know that
you are approaching so that you don't startle them. Coughing, clearing your throat, or making noise with
your feet are all acceptable ways to announce your presence. Speaking loudly or touching people to get
their attention could startle them if they aren't aware anyone is in the vicinity.
</h5></div><h5 id='q29'>29. Juan Rodriguez signed a promissory note for a loan. In this credit arrangement, Juan is the</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. lender.</option><option value="B">B. creditor.</option><option value="C">C. borrower.</option><option value="D">D. depositor.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: borrower.</h5><h5>A promissory note is a legal form signed by a borrower promising to repay a loan. The person
who signs a promissory note is called a borrower. A lender is the individual or financial institution granting
the loan. A creditor is a person who extends credit or to whom money is owed. A depositor is a person
who places money in the bank for safekeeping.
</h5></div><h5 id='q30'>30. When an item is purchased, money is exchanged for the right to</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. file a claim.</option><option value="B">B. use credit.</option><option value="C">C. own the item.</option><option value="D">D. pay for the item.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: own the item.</h5><h5>When an item is purchased, money is exchanged for the right to own the item. Using credit
may be part of the purchase process. Filing a claim may occur later if the buyer's (or seller's) rights were
not upheld. Paying for the item is the process of exchanging money during a purchase.
</h5></div><h5 id='q31'>31. When preparing a personal income tax form, parents report some of their childcare expenses to receive</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. capital gains.</option><option value="B">B. tax deductions.</option><option value="C">C. dividends.</option><option value="D">D. tax rebates.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: tax deductions.</h5><h5>Tax deductions are expenses that can be subtracted from gross income. For example,
working parents can deduct or subtract a certain amount of their incomes for the childcare expenses they
incur while at work. Other examples of tax deductible expenses include college tuition, home mortgage
interest, and charitable donations. Capital gains are taxes on earnings from the appreciation of an
investment. Dividends are a portion of a company's profits that are paid to shareholders. A rebate is a
part of the price that a customer pays for a good or service, which is usually offered by the product's
manufacturer.
</h5></div><h5 id='q32'>32. Which of the following is a way that businesses can use financial information:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. To create an economic system</option><option value="B">B. To select selling strategies</option><option value="C">C. To conduct focus groups</option><option value="D">D. To identify trends</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: To identify trends</h5><h5>Through financial-information analysis, businesses can recognize what products are
selling well and in what colors, styles, models, and sizes. Over time, this helps businesses spot trends in
customer buying habits so that the businesses provide more of the products customers are buying and
less of those that are not selling well. Selling strategies are largely determined by the nature of the
product being sold rather than by financial information. Focus groups are used to collect customer
reactions to and opinions about product features or company image. Businesses function in economic
systems rather than creating them.
</h5></div><h5 id='q33'>33. Jamie is an accountant at a furniture store. As soon as customers pay cash for their purchases, he
records the sales in the accounting books but not if they charge their purchases. What type of accounting
method is Jamie using?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Systematic</option><option value="B">B. Cash</option><option value="C">C. Accrual</option><option value="D">D. Automatic</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: Cash</h5><h5>With the cash accounting method, income and expenditures are recorded at the time the money
changes hands. Because Jamie is recording the sale of purchases as the customers pay cash for them,
he is using the cash accounting method. The accrual method of accounting records transactions at the
time they occur even if no money changes hands at that time. Systematic and automatic methods are not
types of accounting methods.
</h5></div><h5 id='q34'>34. What is a business's gross profit if its profit-and-loss (income) statement lists $875,250 in revenue,
$341,500 in cost of goods sold, $263,000 in operating expenses, and $46,500 in advertising?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. $612,250</option><option value="B">B. $487,250</option><option value="C">C. $270,750</option><option value="D">D. $533,750</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: $533,750</h5><h5>A profit-and-loss (income) statement is a business's financial picture for a certain period of
time. It includes revenue, cost of goods sold, gross profit, operating expenses, and net income/profit. The
formula for calculating gross profit is revenue minus cost of goods sold ($875,250 - $341,500 =
$533,750). Then, the business subtracts operating expenses from gross profit to determine net profit.
Advertising costs are included in operating expenses.
</h5></div><h5 id='q35'>35. Businesses use budgets to estimate how they will</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. file their taxes.</option><option value="B">B. spend their money.
</option><option value="C">C. calculate their assets.</option><option value="D">D. depreciate their assets.
</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: spend their money.
</h5><h5>Explanation not available</h5></div><h5 id='q36'>36. A commission or bonus is an example of a form of</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. benefit.</option><option value="B">B. assistance program.
</option><option value="C">C. compensation.</option><option value="D">D. employee contract.

</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: compensation.</h5><h5>A commission or bonus is an example of a form of compensation. Compensation is pay
for work completed. It comes in different forms for different employees. Some make an hourly wage;
others, a yearly salary. Compensation may also include certain financial incentives, such as commissions
or bonuses. HR management oversees compensation and benefits for all employees. Benefits are
advantages employees receive in addition to their monetary compensation, such as health insurance,
retirement accounts, paid vacation and sick time, etc. Employee contracts may include terms involving
commission or bonuses, but these forms of compensation are not types of contracts. Employeeassistance programs do not involve compensation.
</h5></div><h5 id='q37'>37. Marketers use data to determine pricing strategies such as</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. what products to offer.</option><option value="B">B. how much to spend on advertising.</option><option value="C">C. how much of the product to create.</option><option value="D">D. when to offer a discount on the product.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: when to offer a discount on the product.</h5><h5>Pricing strategies include determining what to charge for a
product and also determining when to adjust the product's price by either raising it or offering a discount.
Determining how much to spend on advertising is a promotional decision. Determining how much of the
product to create is a distribution or “place” decision. Determining what products to offer is a product
decision.
</h5></div><h5 id='q38'>38. Which of the following would be the marketing information most likely to be gathered and analyzed by a
marketing-information management system:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Historical data</option><option value="B">B. Unchanging events</option><option value="C">C. Consumer trends</option><option value="D">D. Employee absences</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: Consumer trends</h5><h5>Through financial-information analysis, businesses can recognize what products are
selling well and in what colors, styles, models, and sizes. Over time, this helps businesses spot trends in
customer buying habits so that the businesses provide more of the products customers are buying and
less of those that are not selling well. Selling strategies are largely determined by the nature of the
product being sold rather than by financial information. Focus groups are used to collect customer
reactions to and opinions about product features or company image. Businesses function in economic
systems rather than creating them.
</h5></div><h5 id='q39'>39. One way that technology has enhanced a business's ability to administer telephone surveys in a timeefficient manner is by making it possible to use</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. digital presentation software.</option><option value="B">B. interpersonal fax interviews.</option><option value="C">C. mechanical database networks.</option><option value="D">D. automated computer systems.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: automated computer systems.</h5><h5>Technological advancements, such as computerized telephone number
selection systems, have made it possible for businesses to solicit survey responses quicker than by using
manual methods. In addition, digital or electronic voice devices often expedite the survey process in a
more time-efficient manner than staff interviewers. Interpersonal fax interviews and mechanical database
networks are not terms that are commonly used to describe marketing-information research technological
resources. Presentation software refers to computer applications that generate multimedia or slide
shows.
</h5></div><h5 id='q40'>40. Holding a focus group is one way for a business to collect _________ marketing-research data.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. primary</option><option value="B">B. secondary</option><option value="C">C. complementary</option><option value="D">D. statistical</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: primary</h5><h5>Primary data are facts that a business collects for a specific purpose or project. A focus group is
a group that forms to discuss a specific topic. A business might form a focus group of customers to
gather first-hand information (opinions) about its goods and services. The data are used to help the
business resolve a problem or make decisions about product development, customer service, etc.
Secondary data are facts that are collected for purposes other than the issue or project at hand.
Statistical data are numerical facts. Oftentimes, businesses will assign numerical values to qualitative
information to obtain statistics. Complementary is not a type of marketing-research data.
</h5></div><h5 id='q41'>41. Which of the following questions would be answered through a situation analysis:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Why is our business's market share dropping?</option><option value="B">B. How can we reach our target market more effectively?</option><option value="C">C. Which new product has more potential?</option><option value="D">D. What do we already know about this problem or opportunity?</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: What do we already know about this problem or opportunity?</h5><h5>This is a question that would be answered
through a situation analysis, exploratory research into the problem at hand as well as the total business
environment. The other questions are specific decision problems that a situation analysis would be
conducted to address more thoroughly.
</h5></div><h5 id='q42'>42. What do businesses create to help answer the research problem?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Objectives</option><option value="B">B. Strategies</option><option value="C">C. Procedures</option><option value="D">D. Activities</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is A: Objectives</h5><h5>There is a strong relationship between the research purpose and the research objectives
which are the goals of the research. Businesses create research objectives to help answer the research
problem. For example, if the problem is service, one objective might be to determine customer
satisfaction with delivery. Strategies are plans of action, or activities, for achieving goals and objectives.
A procedure is the step-by-step process personnel follow in performing a specific task.
</h5></div><h5 id='q43'>43. What type of rating scale involves asking respondents to select one of a limited number of options listed
on a questionnaire?</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Paired comparison</option><option value="B">B. Constant-sum</option><option value="C">C. Percentage</option><option value="D">D. Itemized</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: Itemized</h5><h5>Businesses often develop questionnaires to distribute to consumers in order to obtain relevant
marketing information. The questions are often designed to require respondents to select one of a few
options. The Likert scale is an example of an itemized rating scale because it rates response according
to a numerical value. For example one option, strongly agree, is valued at 5 and strongly disagree is
valued at 1, with other options valued in between at 2, 3, and 4. A constant-sum rating scale requires the
respondent to assign a value (e.g., percentage) to the options provided on the questionnaire. A paired
comparison scale asks respondents to make comparisons on the basis of specific circumstances or
criterion.
</h5></div><h5 id='q44'>44. Which of the following is demographic information that businesses might monitor when making marketing
decisions:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Traits</option><option value="B">B. Opinions</option><option value="C">C. Income</option><option value="D">D. Values</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: Income</h5><h5>Demographics refer to the physical and social characteristics of the population. Factors such as
age, gender, education, occupation, and income are often considered when conducting marketing
research. Opinions, traits, and values are considered psychological factors.
</h5></div><h5 id='q45'>45. Orson, a researcher, is asking a customer a series of questions during a scheduled meeting. Orson is
using the __________ method to collect marketing data.</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. contact</option><option value="B">B. relational</option><option value="C">C. observation</option><option value="D">D. interview</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: interview</h5><h5>Researchers often collect marketing data by conducting interviews with customers. The
interviews can take place over the telephone, through the computer, or by holding face-to-face
discussions (group or individual). An interview is a good method to use when the business wants in-depth
information from the respondents. The disadvantage to holding interviews is the expense. Observation is
a research method that involves watching customers. Relational and contact interviews are fictitious
terms.
</h5></div><h5 id='q46'>46. When processing survey results, a marketing researcher may decide to discard the questionnaires that
contain errors if the number of</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. unsatisfactory responses is more than 25 percent.</option><option value="B">B. satisfactory responses is low.</option><option value="C">C. satisfactory responses is more than 40 percent.</option><option value="D">D. unsatisfactory responses is low.

</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: unsatisfactory responses is low.

</h5><h5>Explanation not available</h5></div><h5 id='q47'>47. What is the mean in the following statistical table:
Numeric Value of Response
6
5
4
3
2
1

Number of Responses
6
10
15
12
7
4
</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. 3.3</option><option value="B">B. 3.7
</option><option value="C">C. 3.5</option><option value="D">D. 3.1
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: 3.7
</h5><h5>Explanation not available</h5></div><h5 id='q48'>48. Which of following situations is an example of a response error:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Angela developed a written survey containing open-ended questions.</option><option value="B">B. Jenny coded a survey respondent's answer with the number two instead of the number three.</option><option value="C">C. Ben found that the sample group was not representative of the target market.</option><option value="D">D. Tim did not answer the last two questions on a written survey.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: Tim did not answer the last two questions on a written survey.</h5><h5>Response errors occur when respondents
do not correctly answer or complete a survey. These errors may affect the quality of the overall data and
the analysis process. Because Tim didn't answer two questions on a survey, a response error occurred.
Errors may be intentional or unintentional. For example, a respondent might refuse to answer a question
because s/he believes it is too personal, while another respondent might not answer a question because
s/he did not see it. Incorrect coding is an editing error. When a sample group is not representative of the
target market, a procedural error occurs. Developing open-ended survey questions does not indicate a
response error.
</h5></div><h5 id='q49'>49. Which of the following research methods is an appropriate way to gather marketing information when
quick responsiveness and low costs are important issues:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Test marketing</option><option value="B">B. Internet survey</option><option value="C">C. Face-to-face interviews</option><option value="D">D. Field experiment</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: Internet survey</h5><h5>Response errors occur when respondents
do not correctly answer or complete a survey. These errors may affect the quality of the overall data and
the analysis process. Because Tim didn't answer two questions on a survey, a response error occurred.
Errors may be intentional or unintentional. For example, a respondent might refuse to answer a question
because s/he believes it is too personal, while another respondent might not answer a question because
s/he did not see it. Incorrect coding is an editing error. When a sample group is not representative of the
target market, a procedural error occurs. Developing open-ended survey questions does not indicate a
response error.
</h5></div><h5 id='q50'>50. In an overall sense, where does marketing occur?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Wherever advertisements are</option><option value="B">B. Wherever customers are
</option><option value="C">C. Wherever trucks are</option><option value="D">D. Wherever stores are
</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: Wherever advertisements are</h5><h5>Explanation not available</h5></div><h5 id='q51'>51. Rick is a salesperson for a company whose product is used to make other goods. What type of market
should he target?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Economic</option><option value="B">B. Consumer</option><option value="C">C. Industrial</option><option value="D">D. Production</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Industrial</h5><h5>An industrial market is a customer or potential customer who purchases items for use in the
operation of a business, for resale, or for making other goods. The consumer market is a customer or
potential customer who purchases goods or services to satisfy personal desires. Economic and
production are not types of markets.
</h5></div><h5 id='q52'>52. Which element of the marketing plan reveals the possible problems a product might encounter in the
marketplace:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Budget allocation</option><option value="B">B. Objectives and issues summary</option><option value="C">C. Threats and opportunities analysis</option><option value="D">D. Action program</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Threats and opportunities analysis</h5><h5>A threats and opportunities analysis is the element of the marketing
plan that provides information regarding the positive (e.g., potential markets) and negative (e.g.,
competition) factors that can affect the business's marketing strategies. Objectives and issues are
generally addressed after the threats and opportunities are presented. The action program provides
details about the specific activities that are needed to meet the stated objectives. The budget allocation
provides details regarding the financial requirements that are needed to carry out the action program.
</h5></div><h5 id='q53'>53. What might a business decide to do if the information in its sales forecast predicts a drop in demand for
the business's product?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Recruit 50 new employees</option><option value="B">B. Decrease advertising budget</option><option value="C">C. Increase production</option><option value="D">D. Reduce prices by 4%</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reduce prices by 4%</h5><h5>Businesses use the information in sales forecasts to make decisions that will
contribute to their success. One of these decisions involves price. If a sales forecast predicts a drop in
demand for the business's product, the business may decide to reduce prices in order to generate more
sales. If a sales forecast predicts a drop in demand, a business would not increase production or recruit
new employees. Many businesses increase advertising when demand begins to drop in order to attract
new customers.
</h5></div><h5 id='q54'>54. A risk involved with information management is leaving customers unprotected from</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. identity theft.</option><option value="B">B. bad customer service.</option><option value="C">C. high prices.</option><option value="D">D. faulty products.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: identity theft.</h5><h5>A risk involved with information management is leaving customers unprotected from identity
theft. An information management program that does not use technology properly may put customers'
personal information at risk. Appropriate information management will not necessarily protect customers
from bad service, high prices, or faulty products.
</h5></div><h5 id='q55'>55. The scope of the Internet can be described as</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. regional.</option><option value="B">B. secure.
</option><option value="C">C. worldwide.</option><option value="D">D. proprietary.
</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: worldwide.</h5><h5>The Internet is a worldwide network of computers that enables users to access information
and communicate with others. Its scope is worldwide rather than regional because it is available to
anyone who has access to a computer that has connectivity. Certain elements of the Internet are secure;
however, that does not affect the scope. The Internet is not proprietary.
</h5></div><h5 id='q56'>56. If Joe wants to respond to an e-mail message that he received from Natalie, he should first click on the
___________ key.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. send</option><option value="B">B. forward</option><option value="C">C. reply</option><option value="D">D. import

</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: reply</h5><h5>The reply key allows the e-mail recipient to write a response to the sender's message. The
forward key allows the e-mail user to send or forward a message that s/he received to another user. The
e-mail user clicks on the send key when s/he wants to transmit the message to the message receiver.
The import key allows a user to bring documents, graphics, or programs into a computer program from
another computer program.
</h5></div><h5 id='q57'>57. One way that businesses use the "sort" capability of database software programs is to identify targeted
customers and print</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. budget reports.</option><option value="B">B. mailing labels.</option><option value="C">C. sales catalogs.</option><option value="D">D. internal memos.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: mailing labels.</h5><h5>Database software programs have the ability to sort customer lists based on a variety of
criteria such as zip code, name, type of business, etc. Once a list of customers has been identified based
on specific criteria, the database software can generate mailing labels for the targeted customers. This
enables a business to send information to select customers rather than to the entire customer list.
Database software programs are not used to print sales catalogs, budget reports, or internal memos.
</h5></div><h5 id='q58'>58. Some business records need to be maintained in secure locations because they contain __________
information.</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. confidential</option><option value="B">B. historical</option><option value="C">C. published</option><option value="D">D. regulatory</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: confidential</h5><h5>Some business records need to be maintained in a secure location because they contain
confidential information. Some of these records contain confidential information about employees, such
as pay rates and personal references. Other records that contain confidential information about
promotional strategies and new product development might harm the business if they fell into the wrong
hands. Historical information explains how the business started and is often published and made
available to the public. Regulatory information is usually provided by the government.
</h5></div><h5 id='q59'>59. Which of the following is an example of how a business or industry has a unique relationship with its
environment:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. New technology causes new laws to be enacted.</option><option value="B">B. An economy in prosperity will eventually experience recession.</option><option value="C">C. Social and cultural attitudes change over time.</option><option value="D">D. Demand for skilled nursing care rises as the population ages.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: Demand for skilled nursing care rises as the population ages.</h5><h5>The impact of demographics (the age of
the population) on a specific industry (health care) shows that businesses have unique relationships with
their environments. The aging of the population affects other industries, but perhaps not as directly as it
does health care. An economy phasing through the business cycle and a shift in social/cultural attitudes
are examples of how environmental factors are dynamic. New technology causing new laws to be
enacted is an example of how environmental factors are interrelated.
</h5></div><h5 id='q60'>60. What should an employee do when s/he accidentally spills coffee in the tile hallway?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Wipe it up immediately</option><option value="B">B. Wait for the floor to dry</option><option value="C">C. Tell others about the spill</option><option value="D">D. Leave it for the cleaning crew</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: Wipe it up immediately</h5><h5>Spills may make the floor slippery and create a safety hazard. Others may not
notice the spill, fall on the wet surface, and suffer injuries. All employees are responsible for helping to
maintain a safe environment. They should not wait for the floor to dry, tell others about the spill, or leave
it for the cleaning crew.
</h5></div><h5 id='q61'>61. When managing a project, the first activity is for the project leader to</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. develop a schedule.</option><option value="B">B. set goals.</option><option value="C">C. negotiate terms.</option><option value="D">D. monitor progress.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: set goals.</h5><h5>Since Stacey's Steamers is acting with its long-term
success in mind, deciding to add a self-serve laundromat should put the business in reach of its goals.
This decision is part of strategic management. Establishing a system for retrieving information is part of
information management. Promoting a new service to potential customers is part of marketing. While
organizing the business to meet business objectives is part of strategic management, it is not what
Stacey's Steamers demonstrated in this example. Organizing would involve setting up the business to be
successful in providing the new laundromat service.
</h5></div><h5 id='q62'>62. Which of the following is an important purchasing activity in a business:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Selecting vendors</option><option value="B">B. Setting prices</option><option value="C">C. Developing financial statements</option><option value="D">D. Managing employee benefits</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Selecting vendors</h5><h5>Purchasing is the planning and procedures necessary to obtain goods and services
for use in the business or for resale. An important purchasing activity is selecting vendors (suppliers) that
have the products the business needs to use in its day-to-day operations, to make items to sell to
customers, or to resell to customers. Pricing is a marketing function. Developing financial statements is
an accounting activity. Managing employee benefits is a human resources management activity.
</h5></div><h5 id='q63'>63. It is important for a business to evaluate the financial condition of a potential vendor during the vendorselection process to assess the</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. risk levels of doing business with the vendor.</option><option value="B">B. reliability of the products that the vendor carries.</option><option value="C">C. vendor's levels of customer service.</option><option value="D">D. vendor's required lead times.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: risk levels of doing business with the vendor.</h5><h5>If a vendor is not financially stable, there is a risk that the
vendor may not have the resources to meet the business's needs. And, if the vendor's financial condition
is extremely poor, the vendor may go out of business. A lack of financial resources may affect the
vendor's products, its level of customer services, and its lead times.
</h5></div><h5 id='q64'>64. Which of the following actions by employees might result in additional expense for a business:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Taking the initiative to find work</option><option value="B">B. Making personal use of company property</option><option value="C">C. Reporting incidents of shoplifting</option><option value="D">D. Giving appropriate discounts to customers</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is B: Making personal use of company property</h5><h5>Employees can help reduce expenses by respecting
company property. One way that employees can do this is by not taking anything belonging to the
business for their personal use. This can range from not making personal use of company vehicles to not
taking home pens and pencils. Businesses must replace the company property that employees take for
their own use, which results in additional expense for the business. Taking the initiative to find work,
reporting incidents of shoplifting, and giving appropriate discounts to customers are ways that employees
can help control expenses.
</h5></div><h5 id='q65'>65. Businesses that properly maintain their facilities are taking steps to reduce the possibility of</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. subsidies.</option><option value="B">B. accidents.</option><option value="C">C. robberies.</option><option value="D">D. takeovers.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: accidents.</h5><h5>An accident is an unexpected happening that may result in injury, loss, or damage.
Businesses reduce the possibility of accidents occurring by properly maintaining their facilities. Proper
maintenance helps to eliminate hazards such as torn carpeting, damaged floors, broken stairs, and
protruding counters. Accidents may occur at any time, but businesses can reduce the risk by properly
maintaining their physical facilities. A robbery is a theft that involves the use of force, violence, or fear. A
subsidy is government financial help given to a business. A takeover is an attempt by one business to
buy out, or take over, another business.
</h5></div><h5 id='q66'>66. Julianne is going to a chamber-of-commerce luncheon where she will meet several important business
leaders in her community. What is the most appropriate clothing for Julianne to wear?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Black, sequin dress; short jacket; and high-heel shoes</option><option value="B">B. Colorful blouse, short skirt, and sandals</option><option value="C">C. Casual pants, long-sleeve t-shirt, and athletic shoes</option><option value="D">D. Dark pantsuit, blouse, and low-heel shoes</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: Dark pantsuit, blouse, and low-heel shoes</h5><h5>Because a chamber-of-commerce luncheon is a business
function, Julianne should wear conservative business apparel. A dark pantsuit, blouse, and low-heel
shoes (e.g., pumps) are appropriate clothing choices for business functions. Short skirts, bold or colorful
blouses, sandals, casual pants, t-shirts, and athletic shoes are too casual for the event. A black, sequin
dress; short jacket; and high-heel shoes are appropriate clothing options for formal evening events.
</h5></div><h5 id='q67'>67. Setting a time limit for achieving a goal is a technique that</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. helps to achieve the goal.</option><option value="B">B. reminds you of your goal.</option><option value="C">C. is not usually recommended.</option><option value="D">D. hinders progress toward the goal.

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: helps to achieve the goal.</h5><h5>Setting a time limit seems to keep most people working toward a goal. It is,
therefore, a recommended technique. The length of time assigned to meeting the goal would depend
upon the effort required. Putting your goal in writing is a technique for reminding you of the goal.
</h5></div><h5 id='q68'>68. Business employees dealing with conflict demonstrate effective problem-solving skills by remaining</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. judgmental.</option><option value="B">B. objective.</option><option value="C">C. emotional.</option><option value="D">D. aggressive.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: objective.</h5><h5>An employee who is objective tries to view conflict in an unbiased manner and is not
influenced by the opinions of others. Employees who remain objective and do not take sides in a conflict
often are able to help solve the problem. By remaining objective, they are able to see both sides of the
conflict and identify possible solutions that will satisfy all concerned. Employees who are judgmental form
opinions before knowing all the facts. Employees who are emotional often make decisions based on their
feelings rather than on the facts. Employees who are aggressive often ignore the rights of others and
exploit them in order to achieve personal goals. Being judgmental, emotional, or aggressive often makes
it more difficult to solve problems.
</h5></div><h5 id='q69'>69. The best business career prospects are available to candidates who have</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. earned a high school diploma.</option><option value="B">B. a background in accounting.</option><option value="C">C. a stock broker's license.</option><option value="D">D. earned a bachelor's degree.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is D: earned a bachelor's degree.</h5><h5>The best business career prospects are available to candidates who have
earned a bachelor's degree. Some jobs require only a high school diploma, but these are only entry-level
jobs. A background in accounting or a stock broker's license may be helpful for certain careers or jobs,
but neither of these is as useful without the foundation of a bachelor's degree.
</h5></div><h5 id='q70'>70. Which of the following is the correct procedure to follow in listing references on a job résumé:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Use initials rather than first names.</option><option value="B">B. Put personal friends at the top of the list.</option><option value="C">C. List your references with your work experience.</option><option value="D">D. Obtain the permission of the people whose names you use.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: Obtain the permission of the people whose names you use.</h5><h5>Never give someone's name as a reference
on a résumé unless you have asked the person if s/he is willing to be listed. This is not only courteous,
but it gives the person time to think about what s/he should say about you if asked. References should be
previous employers, instructors, or others who can verify your job skills, not personal friends who may not
be able to answer questions about your skills. Initials may be used if the first name is unknown, but it is
better to use the first name for the most accurate identification of the person.
</h5></div><h5 id='q71'>71. A product has sold well in test markets, and the developer now plans a national promotional campaign
with television spots and full-page advertisements in magazines. The price of the product will probably</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. constantly change.</option><option value="B">B. decrease.</option><option value="C">C. remain the same.</option><option value="D">D. increase.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: increase.</h5><h5>The price is likely to increase in order to cover the additional costs of an expensive promotional
effort to introduce the product to a national market. The price is not likely to decrease, remain the same,
or constantly change.
</h5></div><h5 id='q72'>72. Offering low-priced items that are unavailable to attract customers to a business that then tries to sell
them high-priced items is an example of</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. bait-and-switch advertising.</option><option value="B">B. high-pressure selling.</option><option value="C">C. price-ticket switching.</option><option value="D">D. loss-leader promotion.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: bait-and-switch advertising.</h5><h5>This is an illegal tactic that involves promoting a low-priced item to attract
customers to whom the business then tries to sell a higher priced item. In many cases, the low-priced
item is in limited supply or completely unavailable when customers try to buy it. The business then shows
customers a more expensive item and encourages them to buy. A loss leader is a product that is sold
below cost. High-pressure selling involves putting pressure on customers to buy. Price-ticket switching is
a type of fraud by which a higher priced ticket is removed from merchandise and replaced by a lower
priced ticket.
</h5></div><h5 id='q73'>73. Which of the following is a profit-oriented pricing objective:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Increasing market share</option><option value="B">B. Earning return on investment</option><option value="C">C. Becoming more competitive</option><option value="D">D. Creating an image for the business</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: Earning return on investment</h5><h5>Profit-oriented pricing objectives focus on creating profits for the business.
The other category of pricing objectives is sales-oriented pricing, which focuses on increasing the total
amount of income from sales. Becoming more competitive, creating an image for the business, and
increasing market share are sales-oriented objectives.
</h5></div><h5 id='q74'>74. Are all products test marketed?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. No; it is usually an unnecessary step in new-product development</option><option value="B">B. Yes; it guarantees product success</option><option value="C">C. No; it can delay entry into the full market</option><option value="D">D. Yes; it gives an accurate picture of a product's performance</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: No; it can delay entry into the full market</h5><h5>Test marketing involves introducing a product to a limited
market to see what its acceptance will be. Test marketing serves to guide the planning of actual
marketing strategies. The product may be tried out in specific locations to get customers' and retailers'
reactions before starting a wider distribution. However, not all new products need test marketing. Test
marketing may not be used for some products/services because it is costly, delays entry into the full
market, provides no guarantee of actual success, may not give an accurate picture of performance, and
gives competitors an opportunity to steal the idea while it is being tested.
</h5></div><h5 id='q75'>75. Which of the following is a type of software program that businesses often use to plan, modify, or
customize products:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Photo management</option><option value="B">B. Computer-aided design</option><option value="C">C. Freeform application</option><option value="D">D. Remote access</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: Computer-aided design</h5><h5>Computer-aided design (CAD) is a type of software program that allows users to
draw two- or three-dimensional illustrations on a computer. Many types of businesses use CAD software
to design their products and use them as a blueprint for constructing the products. The program offers
businesses the flexibility to customize products. Photo management, freeform application, and remote
access are not types of software programs that businesses use to plan, build, modify, or customize
products.
</h5></div><h5 id='q76'>76. One ethical issue that a business must address when it decides to discontinue a product is if the
business should</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. advise the public to purchase a similar product offered by a competitor.</option><option value="B">B. develop an improved version of the product.</option><option value="C">C. reduce the product's price before it is taken off the market.</option><option value="D">D. provide replacement parts for the product.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: provide replacement parts for the product.</h5><h5>Businesses discontinue products for many reasons, such as
decreasing sales and profits. In other situations, the reason is because the business has developed an
altered version of the product or a new model. After deciding to discontinue the product, the business
must decide whether to provide replacement parts. In some situations, many of the discontinued products
remain in use in the marketplace. If replacement parts are available for purchase to fix the damaged
product, then an owner can still use the product. However, if parts are not available and the product
becomes unusable, then the owner may need to purchase another product, either the business's newer
model of the product or a similar product that one of the business's competitors offers. This often creates
an ethical dilemma because a very expensive, complex product, such as a piece of machinery, can be
very costly to owners to replace. Reducing the prices of discontinued products is a common practice and
is ethical if the business advises the buyer that the products are being discontinued. If there are a lot of
similar products readily available, then advising the public about other similar products on the market is
not necessary.
</h5></div><h5 id='q77'>77. One benefit of using group creative-thinking techniques is that</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. each member possesses a unique perspective.</option><option value="B">B. each member usually contributes the same number of ideas.</option><option value="C">C. businesses usually develop new product ideas much faster.</option><option value="D">D. group brainstorming situations tend to be more productive.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: each member possesses a unique perspective.</h5><h5>When more than one person is involved in the creativethinking process, different types of ideas are often generated because each member has a unique point
of view. The success of the group creative-thinking process depends on many factors including group
size, the quality and quantity of each member's contribution, and the situation requiring idea generation.
Therefore, it cannot be assumed that each group member contributes in the same manner, that ideas are
generated quicker, or that one technique (e.g., brainstorming) is more effective than other techniques.
</h5></div><h5 id='q78'>78. Consumers can compare the quality level of similar products if the products' producers use which of the
following processes:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Grading</option><option value="B">B. Concept testing</option><option value="C">C. Labeling</option><option value="D">D. Combination branding

</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Grading</h5><h5>Producers who grade products and indicate their grade with a letter or word on the product label
enable customers to compare product quality without inspecting each product. Concept testing is
exploring the concept, or idea, for a product in order to obtain feedback. The labeling process identifies
products and provides customers with product information. Combination branding is the use of both the
company name and the individual brand name on the product (e.g., Kellogg's Sugar Frosted Flakes).
</h5></div><h5 id='q79'>79. Which of the following is a reason for a business to offer a deep product mix:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. To ensure similar methods of distribution</option><option value="B">B. To specialize in a product line</option><option value="C">C. To compete effectively</option><option value="D">D. To control costs</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: To compete effectively</h5><h5>The business with a deep product mix offers a great many items in the product
line. This allows the business to meet the needs of a variety of consumers, use a range of prices, and
compete effectively. A shallow product mix helps a business to control its costs. The use of a narrow
product mix enables a business to specialize in a product line. The use of similar methods of distribution
relates to the consistency of a company's product lines.
</h5></div><h5 id='q80'>80. Encouraging customers to buy products that they might not otherwise want to buy is one reason why
some businesses __________ products.</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. display</option><option value="B">B. promote</option><option value="C">C. market</option><option value="D">D. bundle</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: bundle</h5><h5>Product bundling involves combining several products and selling them for one all-inclusive
price. Businesses often bundle products to encourage customers to buy products that they might not
otherwise want to buy. The price of the bundled products is usually lower than the combined price of the
products sold separately. The lower price is an incentive to buy. As a result, customers buy the total
package, which may include products that they ordinarily would not purchase. Businesses routinely
promote, market, and display products. However, these activities usually are not very effective in
encouraging customers to buy products that they do not want.
</h5></div><h5 id='q81'>81. Co-branding works best when two brands are</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. in the same industry segment.</option><option value="B">B. complementary and more or less equal in stature.</option><option value="C">C. owned by the same parent company.</option><option value="D">D. fierce competitors.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: complementary and more or less equal in stature.</h5><h5>Two brands join forces as "co-brands" for the purpose
of increasing sales and market share for both. Each benefits from the other's brand equity. Co-branding
works best when the two brands "go together," or are complementary, serve similar markets, and are
essentially equal. The co-branding arrangement of Starbucks and Barnes & Noble exemplifies cobranding principles and has been extremely successful. Successful co-branding does not require that the
brands be in the same industry segment. The two brands should actually not be competitors, nor must
they be owned by the same parent company.
</h5></div><h5 id='q82'>82. Effective corporate branding involves creating</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. new products on an ongoing basis.</option><option value="B">B. emotional connections with customers.
</option><option value="C">C. many different advertising messages.</option><option value="D">D. direct channels of distribution.
</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: emotional connections with customers.
</h5><h5>Explanation not available</h5></div><h5 id='q83'>83. The basic objective of product promotion is to</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. demonstrate the firm's social responsibility.</option><option value="B">B. inform the public about the company's future.</option><option value="C">C. enhance company morale and recruit employees.</option><option value="D">D. persuade consumers to buy a good or service.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: persuade consumers to buy a good or service.</h5><h5>Product promotion is used to stimulate consumer
purchases of goods or services. Informing the public of the company's future and demonstrating the
firm's social responsibility are examples of institutional promotion. Institutional promotions might also be
used to enhance morale and recruit employees.
</h5></div><h5 id='q84'>84. Which of the following kinds of paid promotion is most likely to be used to promote the entire company:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Publicity</option><option value="B">B. Sales promotion</option><option value="C">C. Advertising</option><option value="D">D. Personal selling</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: Advertising</h5><h5>Advertising is any paid form of nonpersonal presentation of ideas, images, goods, or
services. It can be used to promote products or any kind of business. Publicity is a nonpersonal form of
promotion that is not paid for by the company or individual that receives it. Sales promotion is
promotional activities other than advertising, personal selling, and publicity that communicate information
about goods, services, images, and/or ideas to achieve a desired outcome. Personal selling is the form of
promotion that uses planned, personalized communication in order to influence purchase decisions and
enhance future business opportunities. Both sales promotion and personal selling would be more likely to
be used in promoting products.
</h5></div><h5 id='q85'>85. Which technological advancement has enhanced the efficiency and quality of photographs, copy, and
illustrations in printed promotional pieces?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Spreadsheet computer software</option><option value="B">B. Interactive viewing capabilities</option><option value="C">C. Graphic design software</option><option value="D">D. Database tracking capabilities</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Graphic design software</h5><h5>Graphic design software consists of programs that instruct computers on how
to create text, graphics, layouts, backgrounds, and other design components. As the technology evolves,
the quality of printed products (e.g., brochures) continues to improve. An example of interactive viewing
technology is videoconferencing capabilities. Participants in interactive communication control the
content and pace of the message content. Printed promotional pieces are not considered interactive
forms of communication. Spreadsheet software is used to calculate and analyze numerical data.
Database tracking technologies are usually used in market-research efforts.
</h5></div><h5 id='q86'>86. Advertisements may be deemed unfair if they cause substantial injury to consumers. Regulators have
determined that substantial injury ordinarily involves _____________ harm.</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. cognitive</option><option value="B">B. monetary</option><option value="C">C. emotional</option><option value="D">D. behavioral</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: monetary</h5><h5>Regulators may deem an advertisement unfair if it causes monetary harm to consumers. That
is, it coerces consumers to purchase products that they do not want. Even if an advertisement causes
cognitive harm (reinforcing stereotypes), emotional harm (invoking fear), or behavioral harm (causing
aggressive behavior), regulators usually don't consider it to be unfair unless it causes consumers to
spend money on items that they don't want.
</h5></div><h5 id='q87'>87. Which of the following promotional methods is used by many apparel retailers because it shows
consumers the latest fashions at minimum expense to the business:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Radio commercial</option><option value="B">B. Magazine advertising</option><option value="C">C. Fashion show</option><option value="D">D. Newspaper advertising</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: Newspaper advertising</h5><h5>This is an illegal tactic that involves promoting a low-priced item to attract
customers to whom the business then tries to sell a higher priced item. In many cases, the low-priced
item is in limited supply or completely unavailable when customers try to buy it. The business then shows
customers a more expensive item and encourages them to buy. A loss leader is a product that is sold
below cost. High-pressure selling involves putting pressure on customers to buy. Price-ticket switching is
a type of fraud by which a higher priced ticket is removed from merchandise and replaced by a lower
priced ticket.
</h5></div><h5 id='q88'>88. Which of the following is an example of direct advertising:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. A retailer conducts a telephone survey to determine its customers' satisfaction with its services.</option><option value="B">B. A hotel chain develops an advertising campaign that includes television spots and billboards.</option><option value="C">C. A soft-drink company places an advertisement on television during a major sporting event.</option><option value="D">D. An apparel company mails its latest catalog to customers who have ordered items within a year.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: An apparel company mails its latest catalog to customers who have ordered items within a year.</h5><h5>Direct
advertising refers to promotional messages that are sent directly to the target market through a medium
in which market response can be measured. Catalogs that are mailed directly to established customers
represent an example of direct advertising. Unless interactive capabilities are available, television is
usually considered a mass medium that has substantial reach but cannot always be measured
effectively. Therefore, the options referring to soft drinks and hotel chains are not examples of direct
advertising. Telephone surveys are considered a function related to market research rather than
promotion.
</h5></div><h5 id='q89'>89. Samples, premiums, and advertising specialties are examples of __________ used in sales promotion.</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. publicity strategies</option><option value="B">B. communications channels</option><option value="C">C. marketing activities</option><option value="D">D. selling techniques

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: communications channels</h5><h5>A communications channel is a path or means used to provide information to
others. In sales promotion, businesses use several means to provide information to customers or
potential customers. These include giving away samples so customers can have firsthand experience
with the product; giving away premiums which are free gifts that remind customers of the business; and
giving away advertising specialties, such as key chains that include the name and phone number of the
business. The reason for using these communications channels is to encourage customers to buy.
Samples, premium, and advertising specialties are not examples of publicity strategies, marketing
activities, or selling techniques used in sales promotion.
</h5></div><h5 id='q90'>90. Making sure that the headline, illustrations, and copy promote the same theme is an example of
coordinating</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. elements in advertisements.</option><option value="B">B. principles of design.</option><option value="C">C. channels of communication.</option><option value="D">D. arrangements in print.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: elements in advertisements.</h5><h5>The headline, illustrations, copy, and signature are the main elements in
advertisements. It is important that all of the elements be coordinated to create an effective ad that will
attract readers. One way to coordinate the elements is to make sure that they promote the same theme.
The intent is for each element to reinforce the others and strengthen the message of the ad. Making sure
that the headline, illustrations, and copy promote the same theme is not an example of coordinating
principles of design, channels of communication, or arrangements in print.
</h5></div><h5 id='q91'>91. What do many businesses often use to promote products and increase awareness?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Public-relations activities</option><option value="B">B. Creative thinking</option><option value="C">C. Marketing research</option><option value="D">D. Cause-related advertising</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: Public-relations activities</h5><h5>Public relations is a function of business designed to establish good relations
between the business and the public. One of the uses of public relations is to promote products and
increase awareness of the products and of the business. To do this, businesses use a variety of publicrelations activities to communicate with the public and provide positive information. Creative thinking is
thinking in a creative way, using the creative-thinking process. Marketing research is the systematic
gathering, recording, and analyzing of data about problems relating to the marketing of goods and
services. The purpose of cause-related advertising is to create awareness about social causes (e.g.,
poverty) rather than to promote products.
</h5></div><h5 id='q92'>92. One reason why it is effective for businesses to use trade shows as a way of communicating with their
target audiences is because the consumers who attend the shows are the</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. potential employees.</option><option value="B">B. major competitors.</option><option value="C">C. important local residents.</option><option value="D">D. most likely prospects.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: most likely prospects.</h5><h5>The target audience is a group of consumers who are the most likely prospects for
a good, service, image, or idea. As a rule, only those consumers who are interested in the products being
displayed will attend a particular trade show which is an event where businesses display and/or
demonstrate their products to build sales leads and interest. Therefore, participating in trade shows is an
effective way for businesses to communicate with the consumers who are the most likely prospects to
buy from the business. A business's major competitors usually participate in the same trade shows, but
the competitors are not the target audience. Trade shows often attract consumers from throughout the
country rather than only important local residents who may not be part of the target audience. Consumers
attending trade shows usually are not potential employees.
</h5></div><h5 id='q93'>93. Determine which question is not important to a retail buyer under the following circumstances:
It is Thursday afternoon, and the items to be featured in an advertisement in Sunday's paper still have
not arrived.</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Will the competition be selling similar items?</option><option value="B">B. Should the ad be postponed until the merchandise is in the store?</option><option value="C">C. Should the ad be canceled to avoid customer dissatisfaction?</option><option value="D">D. Do I believe the supplier's guarantee that the goods will arrive on time?</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Will the competition be selling similar items?</h5><h5>The buyer and store manager would not be overly
concerned with the competition's product line at this moment. The attention would focus on confidence
that the items would arrive on time in order to decide if the advertisement should be delayed or canceled
altogether. Buyers always have to stay appraised of the arrival of merchandise to ensure that promotional
and merchandising activities are coordinated.
</h5></div><h5 id='q94'>94. When salespeople demonstrate the features and benefits of goods or services, they often are able to</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. provide jobs for more employees.</option><option value="B">B. add usefulness to products.</option><option value="C">C. develop new and improved products.</option><option value="D">D. create desire for products.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: create desire for products.</h5><h5>Through the selling process, salespeople are often able to create desire for
products by demonstrating the features and benefits of goods or services. By presenting the features and
benefits, salespeople can explain to customers how the particular products will satisfy their wants and
needs. As a result of creating desire, salespeople are often able to sell the product. Demonstrating the
features and benefits of goods or services does not add usefulness to products, develop new and
improved products, or provide jobs for more employees.
</h5></div><h5 id='q95'>95. Which of the following is one way that good customer service has a positive effect on sales relationships:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Promotes repeat business</option><option value="B">B. Offers financial assistance</option><option value="C">C. Encourages follow-up</option><option value="D">D. Suggests new information</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: Promotes repeat business</h5><h5>Most companies realize that repeat business is important in order to be
successful. One way to promote repeat business is to provide customers with good service that builds
lifetime sales relationships. Customers who are satisfied with the service they receive usually continue to
do business with the company. Good service helps to create loyal customers who are less likely to be
influenced by competitors. Following up with customers, offering financial assistance, and suggesting
new information are methods of providing customer service.
</h5></div><h5 id='q96'>96. Businesses hope that individuals who are favorably impressed with the business will tell others about it
so that the business will receive __________ publicity.</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. specialty</option><option value="B">B. sponsored</option><option value="C">C. word-of-mouth</option><option value="D">D. point-of-purchase</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: word-of-mouth</h5><h5>Word-of-mouth is a form of publicity since the business that benefits from it does not pay
anyone for the endorsement or to sponsor it. People like to know about new businesses, so a good
impression made on one person may be passed on to many others. Point-of-purchase displays are forms
of promotion that are usually near the cash register and are used to generate impulse sales. Specialty
advertising includes items such as pens, matchbooks, calendars, or key rings embossed with a
company's name, logo, or promotional message.
</h5></div><h5 id='q97'>97. Marcus, a salesperson, uses a computer software program to store important information about his
customers—their names, addresses, and phone numbers. The purpose of this technology is to</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. manage contacts.</option><option value="B">B. evaluate territories.</option><option value="C">C. develop reports.</option><option value="D">D. plan presentations.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: manage contacts.</h5><h5>Technology helps salespeople perform their jobs more efficiently. Computer software
programs that store information, such as names, addresses, and phone numbers, help salespeople
manage their customer contacts. The purpose of this type of software is not to help salespeople evaluate
sales territories, develop reports, or plan presentations.
</h5></div><h5 id='q98'>98. Before developing a product feature-benefit chart, a salesperson must first</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. explain the product's apparent benefits.</option><option value="B">B. evaluate the competition's reactions.</option><option value="C">C. obtain the necessary facts.</option><option value="D">D. list the product's most important features.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: obtain the necessary facts.</h5><h5>A salesperson can get information about product features from many
sources. These sources include manufacturers, coworkers, promotional materials, repeat customers, and
the product itself. Once the salesperson obtains the necessary product information, s/he can develop a
feature-benefit chart. A salesperson doesn't evaluate the competition's reactions or explain the product's
apparent benefits before developing a feature-benefit chart for a product. A salesperson lists the
product's features while s/he is developing the chart rather than before developing it.
</h5></div><h5 id='q99'>99. Ron is a clerk in a bakery and his brother is a car dealer. As salespeople, the brothers will</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. spend a lot of time prospecting.</option><option value="B">B. use the selling process differently.</option><option value="C">C. need to qualify potential leads.</option><option value="D">D. sell to the same type of customer.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: use the selling process differently.</h5><h5>There is a difference in the use of the selling process, depending on
the nature of the product and the type of customer. Salespeople who sell inexpensive, frequently
purchased items, such as bakery goods, do not need to prospect or qualify potential leads. Salespeople
who sell large, expensive items, such as cars, usually need to do a lot of prospecting and spend time
determining exactly what their customers want. Bakery customers usually know what they want, whereas
customers buying cars may need a lot of assistance.
</h5></div><h5 id='q100'>100. Increased consumer spending indicates that the economy is stable and growing because increased
spending leads to an increase in</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. unemployment levels.</option><option value="B">B. interest rates.</option><option value="C">C. demand for products.</option><option value="D">D. scarcity of resources.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: demand for products.</h5><h5>When the economy is stable and growing, people have confidence in the future of
the economy and increase spending. An increase in spending leads to an increase in demand for
products, which also leads to an increase in production. When production increases, more people have
jobs and money to spend, which also increases demand for products. This situation stimulates a
continued growth in the economy. An increase in interest rates and unemployment levels often leads to a
decrease in consumer spending. Increased spending does not lead to an increase in the scarcity of
resources.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_4_Split_Master.js"></script></html>