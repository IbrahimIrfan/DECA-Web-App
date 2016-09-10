<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Principles Exam 6</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Which of the following statements is true of legally binding contracts:</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. They are not valid unless written.</option><option value="B">B. They clearly outline both sides of an agreement.</option><option value="C">C. Breaking one results in a lawsuit and possibly jail time.</option><option value="D">D. They are enforceable for legal and illegal acts.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: They clearly outline both sides of an agreement.</h5><h5>Legally binding contracts are meant to clearly outline an
agreement. This way, disputes and litigation can hopefully be avoided. Legally binding contracts don't
actually have to be written; they can still be valid if they're verbal, but they're much easier to prove if they
are in writing. Breaking a contract doesn't always result in a lawsuit or jail time. In fact, most people avoid
lawsuits at all costs, since they tend to be expensive and lengthy. Contracts are only enforceable for legal
acts.
</h5></div><h5 id='q2'>2. Which of the following is an example of a policy that's influenced by environmental law:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. In many places, seatbelts are required by the government.</option><option value="B">B. Drinking water must meet state, provincial, and federal quality standards.</option><option value="C">C. Medicine must be approved to be marketed to the public.</option><option value="D">D. Drivers must obey posted speed limits.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: Drinking water must meet state, provincial, and federal quality standards.</h5><h5>Water meeting state, provincial,
and federal quality standards is required by environmental law. Environmental law includes all
government regulations that protect the environment, wildlife, endangered species, water, and land and
that prevent pollution and over-cutting of forests. Because of environmental law, businesses must
dispose of hazardous chemicals in safe, approved ways to protect the land and water. They also must
meet emissions standards to protect the quality of the air. Seatbelts, medicine, and speed limit
regulations are all important, but none of them are influenced specifically by environmental law.
</h5></div><h5 id='q3'>3. Which of the following statements is true of corporations:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. They function independently of their owners.</option><option value="B">B. They cannot sue or be sued.</option><option value="C">C. Owners are liable for the corporation's actions.</option><option value="D">D. They have limited life spans.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: They function independently of their owners.</h5><h5>The U.S. Supreme Court defines a corporation as an
“artificial being, invisible, intangible, and existing only in contemplation of the law.” A corporation
functions independently of its owners and has legal rights, duties, and powers. A corporation is able to
sue and be sued. Since the corporation is considered separate from its owners, the owners are not liable
for its actions. Corporations have unlimited life spans.
</h5></div><h5 id='q4'>4. Tyrone is writing a research paper for his business class. What question should Tyrone ask as he looks
for valid sources?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Is this material interesting and easy to read?</option><option value="B">B. Is the information in this source up to date?</option><option value="C">C. Does this source provide relevant graphic aids?</option><option value="D">D. Do I agree with the viewpoint of this author?</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: Is the information in this source up to date?</h5><h5>It's important for Tyrone to find information that's recent. This
isn't always important, but in a field like business, an article from 20 years ago probably won't be very
beneficial. Although it's certainly helpful if the information is interesting and easy to read, it's not
necessary. Likewise, relevant graphic aids might be nice, but Tyrone should be more concerned with the
information he finds in the source. Tyrone should be looking for information that's factually correct; he
shouldn't let his personal biases affect which sources he includes.
</h5></div><h5 id='q5'>5. Which of the following statements regarding company policies is true:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Company policies and procedures are the same thing.</option><option value="B">B. Company policies identify general company rules.</option><option value="C">C. Company policies describe emergency measures.</option><option value="D">D. Company policies identify very specific employee actions.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Company policies identify general company rules.</h5><h5>Company policies are rules made in advance by
management to assist employees in decision making. They are typically general rather than specific in
nature and relate to the company's overall vision. Company policies also describe whom the rules apply
to and why they exist. Company policies and procedures are not the same; company procedures provide
more detailed step-by-step plans of how to carry out policies and processes. Company procedures
identify very specific employee actions, such as what to do in the event of an emergency.
</h5></div><h5 id='q6'>6. Asking questions is important because it</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. gives you a chance to voice your opinion.</option><option value="B">B. can clear up misunderstandings.</option><option value="C">C. helps you become a passive participant in the conversation.</option><option value="D">D. helps your brain process speech more quickly.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: can clear up misunderstandings.</h5><h5>Asking questions can help you clarify, understand, and clear up
misunderstandings. When you're attempting to listen, it's not the time to voice your opinion. By asking
questions, you become an active, not passive, participant in the conversation. While asking questions is
beneficial, it doesn't help your brain process speech more quickly. Your brain is actually very efficient
already; it can process speech four times as fast as people can talk.
</h5></div><h5 id='q7'>7. Which of the following is a correct interpretation of a common nonverbal cue:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Clenched fists can signal intelligence and awareness.</option><option value="B">B. Crossed arms can signal friendliness and availability.</option><option value="C">C. Fidgeting can signal nervousness or impatience.</option><option value="D">D. Eye contact can signal anger or irritation.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: Fidgeting can signal nervousness or impatience.</h5><h5>A person typically fidgets when s/he is nervous,
impatient, or bored. Crossed arms usually signal defensiveness, not friendliness and availability.
Clenched fists often signal tension and anger, not intelligence and awareness. Eye contact by itself
doesn't usually mean a person is angry or irritated. Sometimes eye contact can express interest, but
other times it can be seen as intimidating. For this reason, it's important not to rely 100% on nonverbal
cues when interpreting a person's message.
</h5></div><h5 id='q8'>8. To evaluate any idea objectively, it is important to consider</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. personal opinions.</option><option value="B">B. potential problems.</option><option value="C">C. market research.</option><option value="D">D. competitors' activities.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: potential problems.</h5><h5>Objectivity involves evaluating something without bias. To evaluate without bias, you
should look at the situation from different points of view and evaluate the positives and negatives of the
ideas presented. Developing a pros and cons list can help you identify possible benefits and problems
associated with the idea. Conducting research (e.g., market research, competitive analysis) and
obtaining facts to support an idea may or may not be necessary.
</h5></div><h5 id='q9'>9. One way to effectively contribute to a group discussion when you don't know much about the topic being
discussed is to</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. quickly form an opinion to share with the group.</option><option value="B">B. bring up a different topic that you know more about.</option><option value="C">C. let the more informed group members handle the conversation.</option><option value="D">D. ask questions to clarify what someone else is saying.
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: ask questions to clarify what someone else is saying.
</h5><h5>Explanation not available</h5></div><h5 id='q10'>10. Elizabeth is giving a speech about Abraham Lincoln. She starts with his early political life, moves on to
his time as president, and then ends with his death. What common organizational pattern is she using for
her speech?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Chronological</option><option value="B">B. Topical</option><option value="C">C. Spatial</option><option value="D">D. Cause-and-effect</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: Chronological</h5><h5>Elizabeth puts her information about Abraham Lincoln in time sequence, otherwise known
as chronological order. Topical order involves arranging into related subcategories, such as pros and
cons. Spatial order arranges material according to physical space or geography, like showing the layout
of a new building. Cause-and-effect order emphasizes the relationship between events and their
consequences. It could be used to demonstrate the effects of smoking or the benefits of exercise.
</h5></div><h5 id='q11'>11. Alma is preparing a presentation about her department's budget to make to the company president. She
wants to use a visual representation of the budget that shows parts in relation to the whole. Alma should
consider using a</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. pie chart.</option><option value="B">B. table.</option><option value="C">C. line graph.</option><option value="D">D. bar graph.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: pie chart.</h5><h5>If Alma wants to illustrate her budget by showing parts in relation to the whole, she should use
a pie chart. A table is a visual way of displaying information in rows and columns. A bar graph shows
values across categories. Line graphs usually depict information over time. Although Alma might want to
use these types of graphics for other parts of her presentation, the pie chart is the best way to show how
the parts of her budget add up to form the whole.
</h5></div><h5 id='q12'>12. Maria, a human resources manager, wants to send a message to everyone in her office about an
upcoming change in the company's insurance policy. She should deliver this message</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. in a memo.</option><option value="B">B. verbally.</option><option value="C">C. through a letter.</option><option value="D">D. with an informal e-mail.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: in a memo.</h5><h5>Memos are typically used to inform or persuade an internal audience. Since Maria wants to
inform the employees about insurance policy changes, writing a memo is an ideal choice. Maria should
not communicate this information verbally, since it will be useful for the employees to have a record of the
information. Typically, letters are written for an external audience, so a letter wouldn't be appropriate for
the information Maria needs to share. Although Maria may consider sending a formal e-mail, she'll want
to avoid sending an informal e-mail to her coworkers about something as important as insurance policy
changes.
</h5></div><h5 id='q13'>13. Rosa is writing a business letter to Alex Smith, whom she has never met. Which of the following
salutations should Rosa use:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Dear Alex:</option><option value="B">B. Dear Mr. Smith:</option><option value="C">C. To Whom It May Concern:</option><option value="D">D. Dear Alex Smith:</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: Dear Alex Smith:</h5><h5>Since Rosa hasn't met the person she's writing the letter to, she doesn't know if Alex
Smith is male or female. For this reason, it's important for her to use the full name. If Alex Smith is a
woman, she might be offended if Rosa uses “Dear Mr. Smith.” “To Whom It May Concern” shouldn't ever
be used. It's important to find out to whom to address the letter, even if it's just to a title, such as “Vice
President.” In Rosa's case, she knows the name of the recipient, so she should use that. “Dear Alex” is
too informal for a business letter. It may be appropriate for a friend, but Rosa has never met Alex Smith.
</h5></div><h5 id='q14'>14. Jerald works for a cancer charity, and he's in charge of writing a letter asking for donations. He's
determined his objective (raising money), and he has a list of potential donors to whom to send letters.
He wants to grab the reader's attention in the first line of his letter, so he should</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. tell a joke to break the ice.</option><option value="B">B. ask the reader a provocative question.</option><option value="C">C. say something general so it applies to more people.</option><option value="D">D. explain the history of the charity.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: ask the reader a provocative question.</h5><h5>When writing a persuasive letter, it's important to grab the
reader's attention right away. One way to do this is by asking the reader a provocative question. Because
the reader will likely want to find out the answer, s/he will keep reading. Although telling a joke might
seem like a good idea, it's better to avoid humor in a persuasive letter. Jerald doesn't know what the
reader finds funny, and s/he may be offended by the joke (especially since Jerald works for a cancer
charity). It's better to be as specific as possible in the opening of the letter—many people glaze over
openings that are too vague or general. Jerald may want to include some of the charity's history later in
the letter if it helps the cause, but he should try to use something catchier in the intro. Facts about the
charity's history are unlikely to keep the attention of the reader.
</h5></div><h5 id='q15'>15. An effective executive summary</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. is written for people who won't read the whole document.</option><option value="B">B. includes every point from the business report.</option><option value="C">C. uses technical terminology to show the writer's expertise.</option><option value="D">D. features complex compound sentences.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: is written for people who won't read the whole document.</h5><h5>The executive summary is often read by people
who simply don't have time to read the entire report. That's why it's so important to make sure your
executive summary is as accurate and error-free as possible. You don't need to include every point from
the business report—an executive summary should only be about 1/10 th the length of the original
document. Focus on including only the main points. Avoid using too much technical terminology. The
executive summary is often read by people who aren't experts in the field, and it needs to be easily
understood by everyone. For the same reason, it's also important to avoid using complex sentences.
Remember that the executive summary will often be skimmed by busy people. Help them understand
your executive summary by making it as easy-to-read as possible.
</h5></div><h5 id='q16'>16. To participate effectively in a staff meeting, you should</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. answer e-mails during slow points so you don't waste any company time.</option><option value="B">B. bring up any personal concerns so that they can be discussed with the group.</option><option value="C">C. read important documents and do research ahead of time so you're prepared.</option><option value="D">D. share your opinion on each topic discussed so your manager knows you're paying attention.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: read important documents and do research ahead of time so you're prepared.</h5><h5>The most important way
to participate in a staff meeting is by making sure you're prepared! Read any necessary documents, and
do research if needed. Personal concerns should not be brought up in staff meetings; instead, bring
these up in private meetings with your manager. Although you may be tempted to respond to e-mails or
check your phone during any slow points in the meeting, it's important to pay attention. Even if you don't
know much about the topic everyone else is discussing, listen politely. You don't need to share your
opinion about everything being discussed. You don't want to dominate the conversation—give someone
else a chance to speak! Quietly listening is appropriate and polite.
</h5></div><h5 id='q17'>17. What should you do if a customer is being difficult or demanding?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Promise to give the customer a significant discount.</option><option value="B">B. Ignore him/her, and focus on another customer.</option><option value="C">C. Tell the customer that his/her attitude is inappropriate.</option><option value="D">D. Continue to treat him/her with courtesy and respect.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Continue to treat him/her with courtesy and respect.</h5><h5>Even if a customer is difficult and demanding, s/he
should still be treated well. You should never ignore a customer, and it's out of line to tell a customer that
his/her attitude is inappropriate. You also shouldn't confront customers. Even if they're being rude, you
still must treat them respectfully. Be careful about making promises to the customer that you might not be
able to fulfill. Broken promises are poor customer relations, so avoid promising anything unless you're
absolutely sure that your manager would approve.
</h5></div><h5 id='q18'>18. When doing business with clients from another culture, you should always be sure to</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. take the opportunity to tell the other person how you do things in your culture.</option><option value="B">B. research the culture and history of the people with whom you're doing business.</option><option value="C">C. use humor to ease tension and make everyone more comfortable.</option><option value="D">D. always speak English, since it's considered the international language of business.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: research the culture and history of the people with whom you're doing business.</h5><h5>Many things can differ
from culture to culture—gestures, idioms, values, holidays, etc. A gesture that's perfectly fine in your
culture might be deeply offensive in another! To avoid problems, and to show respect, it's best to do
some research on the culture of the people with whom you're doing business. However, remember not to
rely on stereotypes when communicating—each person you talk to is an individual with his/her own
personality. You shouldn't try to educate the other person about your culture—learning about her/his
culture shows respect, which is extremely important in most business dealings. Although you may be
tempted to make a joke, avoid using humor. It's often culturally specific, so you risk not being understood
—or worse, offending someone. English is the preferred language of most businesses, but that doesn't
mean everyone uses it. Again, it shows respect to learn at least a few key phrases in the other person's
language.
</h5></div><h5 id='q19'>19. How can you reassure difficult customers?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Offer to let them speak to your manager.</option><option value="B">B. Let them have what they want.
</option><option value="C">C. Carefully explain why they're wrong.</option><option value="D">D. Show that you're on their side.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

3
</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: Show that you're on their side.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

3
</h5><h5>Explanation not available</h5></div><h5 id='q20'>20. Elizabeth has many ways of interacting with her favorite store. She can visit it in person and speak to an
employee, check out the store's web site online, receive one of its e-mail newsletters, or look at its
Facebook page. The ways Elizabeth interacts with the store are</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. touch points.</option><option value="B">B. contact spots.</option><option value="C">C. brand interactions.</option><option value="D">D. customer exchanges.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: touch points.</h5><h5>Avoid using too much technical terminology. The
executive summary is often read by people who aren't experts in the field, and it needs to be easily
understood by everyone. For the same reason, it's also important to avoid using complex sentences.
Remember that the executive summary will often be skimmed by busy people. Help them understand
your executive summary by making it as easy-to-read as possible.
</h5></div><h5 id='q21'>21. Alison likes to shop at a certain grocery store. She could possibly find better prices at other stores, but
she feels comfortable with this one. Rather than shopping around, Alison prefers</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. business process management.</option><option value="B">B. relationship buying.</option><option value="C">C. advocacy.</option><option value="D">D. corporate culture.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: relationship buying.</h5><h5>Alison wants to stick with one grocery store; therefore, she engages in relationship
buying. Today's customers tend to prefer relationship buying to shopping around. They find businesses
they feel comfortable with and stick with them. Although Alison could shop other places, she doesn't want
to spend her time or effort looking for a new business to deal with. Business process management
involves a business aligning its objectives and activities with customer needs. Advocacy is a goal of
customer experience management that relates to word-of-mouth promotion and referrals to other
companies. Corporate culture refers to the values and ideals that an organization encourages among its
employees.
</h5></div><h5 id='q22'>22. Although there are many grocery stores near her, Sara always shops at a particular one. This is because
the baggers at her preferred store help the customers carry groceries out to their cars. By offering to help
customers carry their groceries, the store is increasing ________ utility.</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. form</option><option value="B">B. task</option><option value="C">C. place</option><option value="D">D. time</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: task</h5><h5>Task utility is the usefulness created by altering or changing the characteristics of a service (or
task) to make it more useful to the consumer. When marketers offer a new or updated service, they are
creating or increasing benefits for consumers by doing something helpful or useful. When the grocery
store offers to help people carry out their groceries, it is increasing benefits for customers like Sara. Form
utility is the usefulness created by altering or changing the form or shape of a good to make it more
useful to the consumer. Place utility is the usefulness created by making sure that goods or services are
available at the place where they are needed or wanted by consumers. Time utility is the usefulness
created when products are made available at the time they are needed or wanted by consumers.
</h5></div><h5 id='q23'>23. Rob was planning to go on a cruise. However, when prices went up significantly, he decided to delay his
trip. This is an example of what type of demand?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Necessary</option><option value="B">B. Inelastic</option><option value="C">C. Utility</option><option value="D">D. Elastic</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Elastic</h5><h5>When consumers like Rob adjust their demand for products due to fluctuations in price, the
demand is said to be elastic. In other words, demand changes when prices change. Demand for products
that are extras or luxuries, such as cruises, is typically elastic. More consumers will book a cruise when
the price is low than when it is high. Inelastic demand occurs when the demand for a good or service is
constant, even if the product's price changes. Utility, which refers to the usefulness of a product to the
potential consumer, determines the basic demand for the product. Necessary isn't a type of demand.
</h5></div><h5 id='q24'>24. A manufacturer wants to ensure that each product it makes meets certain standards so that customer
complaints and product returns will be kept at minimal levels. Meeting this goal depends on the part of
operations known as</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. inventory management.</option><option value="B">B. strategic management.</option><option value="C">C. purchasing.</option><option value="D">D. quality control.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: quality control.</h5><h5>Ensuring that products meet predetermined standards for excellence is known as quality
control, and it is part of operations. Purchasing and inventory management are also part of operations,
but purchasing refers to acquiring necessary goods and services, and inventory management means
supervising inventory levels to make sure there is an appropriate balance. Strategic management refers
to the business's plans and goals for the future.
</h5></div><h5 id='q25'>25. A clothing company keeps track of fashion trends so that it knows which styles will sell next season.
Which of the following is the company most likely to use to collect information about these trends:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Cultural intelligence</option><option value="B">B. Lobbying</option><option value="C">C. Environmental scanning</option><option value="D">D. Social responsibility</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: Environmental scanning</h5><h5>Keeping track of external factors and their changes is part of a process known
as environmental scanning. This process brings important information to light for a business's owners or
managers; for example, a clothing company can use environmental scanning to track an external factor
(e.g., fashion trends) that will affect its business. Lobbying occurs when a person or group attempts to
influence lawmakers to pass or block certain legislation. Cultural intelligence refers to an understanding
of and sensitivity to the differences in customs, traditions, and values that exist among cultures. A
business's social responsibility is its duty to contribute to the well-being of society.
</h5></div><h5 id='q26'>26. Carol is a helpful, facilitative manager. She doesn't insist on rigid job descriptions for her employees, and
she focuses more on outcomes than she does on traditional business functions. Carol is a/n ________
manager.</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. reactive</option><option value="B">B. proactive</option><option value="C">C. innovative</option><option value="D">D. competitive</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: innovative</h5><h5>Innovative management is more participative than traditional forms of management. As a
result, employees are usually included in decision-making processes. Under innovative management,
company leaders are more facilitative than controlling. They also allow employees to work under less
rigid job descriptions and focus more on outcomes than they do on traditional business functions. In
proactive management, companies anticipate and plan in advance for a change. Proactive organizations
are often innovative as well, but they are not necessarily the same thing. Reactive is the opposite of
proactive—reacting to outside events when they occur instead of anticipating them beforehand.
Competitive isn't a style of management.
</h5></div><h5 id='q27'>27. Which of the following characteristics is true of a private enterprise system:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Property and income are distributed equally.</option><option value="B">B. Unemployment and poverty are eliminated.</option><option value="C">C. The government owns and controls the economic resources.</option><option value="D">D. Businesses are free to choose what they wish to produce.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Businesses are free to choose what they wish to produce.</h5><h5>In a private enterprise economic system, the
market is self-regulated and self-controlled. This means that businesses can choose what they wish to
produce. Unemployment and poverty aren't eliminated in a private enterprise system. If production drops
because sales are low, companies may lay off workers or go out of business, which can lead to
unemployment and poverty. The government doesn't own or control the economic resources in a private
enterprise system. Instead, individuals and businesses are in charge, while the government steps in only
to protect citizens. Property and income are not distributed equally in a private enterprise—some people
own a great deal of property while others own little or none.
</h5></div><h5 id='q28'>28. Which of the following risks can be covered by insurance:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Changing customer needs</option><option value="B">B. Obsolescence</option><option value="C">C. Interest rate fluctuations</option><option value="D">D. A car accident</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: A car accident</h5><h5>Pure risks, which include hazard and operational risks, are considered insurable risks.
This means that businesses are able to take out insurance against these risks. For example, a company
can purchase auto insurance to protect company vehicles if they get in an accident. Speculative risks,
however, are considered uninsurable. These risks, which include strategic and financial risks, are
unpredictable, so companies cannot take out insurance to protect themselves. Obsolescence and
changing customer needs are strategic risks, while interest rate fluctuations are a financial risk.
</h5></div><h5 id='q29'>29. The Food and Drug Administration, or FDA, tests foods, cosmetics, and drugs to prevent the sale of
unsafe items. What type of government control is this?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Monopoly</option><option value="B">B. Licensing</option><option value="C">C. Regulatory</option><option value="D">D. Wage/Price

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

4
</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: Regulatory</h5><h5>The Food and Drug Administration (FDA) is known as a regulatory agency. It was set up to
monitor business activity. Because regulatory agencies are constantly watching to see that businesses
follow the law, they are often referred to as watchdog agencies. Licensing is another form of government
control, but it refers to the process of issuing a permit allowing an individual or a business to function in
the marketplace. To obtain a license, the business or individual must meet government requirements. A
monopoly isn't a type of government control—the government actually tries to ban or regulate
monopolies. A monopoly exists when a single business influences the entire production of a particular
good or service. Governments sometimes use wage or price controls to influence how much businesses
pay workers and/or charge for their products.
</h5></div><h5 id='q30'>30. How do unions benefit businesses?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Unions can help businesses save time by recruiting employees.</option><option value="B">B. Unionized companies pay higher wages.</option><option value="C">C. Unions sometimes take control of personnel matters such as promotions.</option><option value="D">D. Unions give employees more bargaining power.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unions can help businesses save time by recruiting employees.</h5><h5>Although some individuals don't think
that businesses gain any benefits from unions, there are actually some advantages to having unionized
employees. For example, unions can help with the recruitment of new employees, which can save
businesses time and money. Unionized companies typically pay their employees higher wages and offer
better benefits. This isn't necessarily good for the business, since they must find ways to maintain profits
and cover the cost of higher wages. When unions take control of personnel decisions, management loses
the power to decide who gets promoted. While having more bargaining power is definitely good for the
employees, it isn't necessarily good for the business.
</h5></div><h5 id='q31'>31. Which of the following activities is part of the primary stage of production:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Manufacturing</option><option value="B">B. Fishing</option><option value="C">C. Construction</option><option value="D">D. Banking</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: Fishing</h5><h5>The primary stage of production involves harvesting or extracting products from the earth. This
includes fishing as well as mining, farming, and hunting. Manufacturing and construction are both
considered part of the secondary stage of production. In this stage, raw materials are turned into finished
goods. Tertiary production is the service industry—in other words, tertiary production involves an
intangible product. This includes banking, entertainment, law, and many other services.
</h5></div><h5 id='q32'>32. Which of the following is a typical result of price instability:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Wealth is redistributed in a way that is often productive to the economy.</option><option value="B">B. It becomes difficult for consumers to plan ahead.</option><option value="C">C. Long-term government projects are easier to arrange.</option><option value="D">D. Businesses often hire more employees.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: It becomes difficult for consumers to plan ahead.</h5><h5>If there is no inflation or deflation, prices in the economy
stay mostly constant. This is known as price stability. When prices are instable, it becomes difficult for
consumers to plan ahead. How can consumers budget for major purchases when they can't predict
prices? While price instability often causes the redistribution of wealth, this isn't usually good for the
economy. Long-term government projects aren't easier to arrange when there is price instability—in fact,
price instability makes it much more difficult for governments to plan. Just as consumers have a hard
time committing to big financial plans during economic uncertainty, the government finds it difficult to plan
large projects when prices fluctuate. Price instability does not cause businesses to hire more employees;
in fact, price instability typically discourages businesses from taking on costly expenditures like hiring
new people.
</h5></div><h5 id='q33'>33. Determine if the following statement about business cycles is true or false: A trough can be seen as a
good sign for the economy.</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. True. Hitting rock-bottom can imply that recovery is on the way.</option><option value="B">B. True. The economy is at its healthiest in the trough phase.</option><option value="C">C. False. After a trough, the economy usually continues to decline.</option><option value="D">D. False. Hitting rock-bottom means that recovery is a long way off.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: True. Hitting rock-bottom can imply that recovery is on the way.</h5><h5>Although it sounds very negative, a
trough is sometimes seen as a positive sign. Hitting rock-bottom can imply that recovery is on the way. A
trough is certainly not when the economy is at its healthiest, though—it's actually the lowest point of
economic activity. The economy can't decline after a trough, since the trough is the fourth and final phase
of the business cycle. The economy remains at this low point until consumers and producers once again
become hopeful about business and buy more goods and services.
</h5></div><h5 id='q34'>34. Western societies tend to place a high value on using verbal communication and saying what you mean.
Which type of culture does this illustrate?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. High-context</option><option value="B">B. Low-context</option><option value="C">C. Individualist</option><option value="D">D. Collectivist</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: Low-context</h5><h5>A low-context culture relies primarily on verbal communication, like speaking up and saying
exactly what you mean. Most Western societies fit into this category. Cultures that rely heavily on
nonverbal communication to get messages across are known as high-context cultures. Individualist and
collectivist cultures aren't necessarily related to communication. In an individualist society, group ties are
loose; everyone is expected to take care of her/himself. For example, the United States is known as an
individualist society. In a collectivist society, people are integrated into strong, loyal groups, such as
extended families. Guatemala is known as a strongly collectivist culture.
</h5></div><h5 id='q35'>35. Which of the following is true of emotional intelligence:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. It means you're an emotional person.</option><option value="B">B. It helps you manage your emotions.</option><option value="C">C. It's also known as “book smarts.”</option><option value="D">D. It's not a good predictor of future success.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: It helps you manage your emotions.</h5><h5>Emotional intelligence is the ability to recognize and manage
emotions in yourself and others. It doesn't have anything to do with being an emotional person—a person
who cries easily and one who never shows his/her emotions can have the same level of emotional
intelligence. "Book smarts" aren't the same as emotional intelligence—the term is typically used to
describe IQ, or a person's cognitive ability. Many people feel that emotional intelligence may actually be
the best predictor of success in life. A person with emotional intelligence has many of the characteristics
necessary for success, like problem solving skills, flexibility, and the ability to get along with others.
</h5></div><h5 id='q36'>36. When assessing your personal strengths and weaknesses, it's very important to</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. try to hide your weaknesses.</option><option value="B">B. compare yourself to other people.</option><option value="C">C. be as hard on yourself as possible.</option><option value="D">D. get input from other people.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: get input from other people.</h5><h5>While self-assessment implies working alone, it can actually be very helpful
to get another opinion. Others can point out strengths and weaknesses you might not have known about.
You don't want to compare yourself to others—self-examination isn't a competition. Everyone has
different strengths and weaknesses. Try not to be too hard on yourself. While recognizing weaknesses is
important, obsessing over them isn't helpful. You also shouldn't hide weaknesses—everyone has areas
that need improvement. Your assessment will only be successful if you're completely honest about your
strengths and weaknesses.
</h5></div><h5 id='q37'>37. Which of the following is a good way to show initiative at work:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Using free time to surf the web</option><option value="B">B. Dressing in appropriate clothing</option><option value="C">C. Volunteering to stay late to finish a project</option><option value="D">D. Being friendly and courteous to coworkers</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: Volunteering to stay late to finish a project</h5><h5>By staying late without being asked, you're showing initiative
by trying to do more than you're told to do. Dressing appropriately is certainly important for job success,
but it doesn't have anything to do with initiative. Using your free time to surf the web isn't an example of
initiative. When a person with initiative has downtime at work, s/he will find ways to assist his/her team
instead of wasting valuable company time. While being friendly and courteous to coworkers will go a long
way towards making your work environment more pleasant, it isn't a way to show initiative.
</h5></div><h5 id='q38'>38. Anna really wants to go shopping with her friend Bethany on Tuesday, but she's scheduled to work.
Bethany tells her, “Just call in sick. No one will know!” Anna considers it, but she decides to go work and
honor her commitment. Which element of responsibility does this example illustrate?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Courage</option><option value="B">B. Fairness</option><option value="C">C. Compassion/Respect</option><option value="D">D. Accountability</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Accountability</h5><h5>Accountability means doing what you say you will do. When Anna goes into work instead
of shopping, she's honoring her commitment to her job. Anna's acting responsibly and showing that she's
an employee to count on. Fairness, compassion/respect, and courage are all important elements of
responsibility, but they aren't shown in Anna's actions.
</h5></div><h5 id='q39'>39. Optimists are often more responsible than pessimists because optimists</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. don't blame others for their mistakes.</option><option value="B">B. don't accept responsibility for their own actions.</option><option value="C">C. make excuses and point fingers.</option><option value="D">D. don't make mistakes.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

5
</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: don't blame others for their mistakes.</h5><h5>Optimists still make mistakes, but they don't blame them on
others. When they're wrong, they're willing to say, “I screwed up.” Optimists accept responsibility for their
own actions, and they don't make excuses or point fingers. This is quite the contrast from pessimists,
who typically don't accept responsibility for their actions. Pessimists usually blame others when they
make a mistake.
</h5></div><h5 id='q40'>40. When giving constructive criticism, it's important to do so in a _______ manner.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. public</option><option value="B">B. nonthreatening</option><option value="C">C. forceful</option><option value="D">D. humorous</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: nonthreatening</h5><h5>Constructive criticism should always be given in a nonthreatening way. People don't
usually respond well to criticism when they're afraid. Criticism should never be given in public, as doing
so could embarrass the message receiver. It's also best to avoid being forceful, as that might be
perceived as threatening. While sometimes humor can help you deliver a bad message, it's a better idea
to focus on being nonthreatening, thoughtful, and nonjudgmental instead of being funny.
</h5></div><h5 id='q41'>41. If you “find your own way,” work hard, and receive credit for your own accomplishments, you are
illustrating</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. collectivism.</option><option value="B">B. ethnocentrism.</option><option value="C">C. cultural sensitivity.</option><option value="D">D. individualism.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: individualism.</h5><h5>When people “find their own way” and focus on individual accomplishments, this is known
as individualism. Western culture places a high value on this. Many other cultures place a high value on
collectivism, or group accomplishments. Ethnocentrism refers to the belief that your own culture is
naturally better than other cultures, and cultural sensitivity is the willingness to adjust your values and
behaviors so that you value people and ideas from other cultures.
</h5></div><h5 id='q42'>42. John and his coworkers get along well, and they frequently talk about their personal lives while eating
lunch together at the office. Which of the following topics is appropriate for John to bring up with his
coworkers:</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. The church service he'd like his coworkers to attend</option><option value="B">B. The details of his divorce proceedings</option><option value="C">C. The job he'd like to have in 5 years</option><option value="D">D. What he watched on TV last night</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: What he watched on TV last night</h5><h5>John spends a significant amount of time with his coworkers, so it's
normal for him to share some aspects of his life. But while it's appropriate to share some things, other
topics should always be off limits. What he watched on TV last night is a good topic for John to bring up,
as this is unlikely to offend anyone or violate any company policies. John should avoid discussing the
details of his divorce. If he talks about it too much, his coworkers may wonder if it's distracting him from
doing his job. Talking excessively about personal problems also reveals weakness, which John may not
want to do, especially if he's in a position of authority. John should avoid talking about his career
aspirations because if he clearly wants another position, it may make his coworkers think he isn't loyal to
his current job. John should also avoid discussing his religious beliefs. Religion is a sensitive subject that
many people take very seriously, and John risks offending someone. Furthermore, it may be against
company policy to invite others to his church services.
</h5></div><h5 id='q43'>43. During a negotiation with a big client, Kevin makes sure he understands what the client says. He repeats
the client's statements and asks for clarification when he's confused. When the client speaks, Kevin
doesn't try to figure out what he'll say next. Instead, he concentrates on the client's words. Kevin is
practicing</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. active listening.</option><option value="B">B. role playing.</option><option value="C">C. bargaining.</option><option value="D">D. directed attention.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: active listening.</h5><h5>Kevin knows that it's impossible to listen when you're thinking about what to say next. He
doesn't want to miss an important point, so he practices active listening. He makes sure he understands
what the client is saying by repeating or summarizing his/her statements and asking for clarifications.
Kevin is not practicing role playing, in which you assume the role of another person in order to determine
how you'll react in a negotiation. Bargaining refers to a negotiation strategy where someone makes
concessions to get something else s/he wants, which is not what Kevin is doing. Directed attention is a
fictitious term.
</h5></div><h5 id='q44'>44. Julie comes to work every day in sweatpants, even though everyone else in her office dresses up. Her
boss thinks this is inappropriate. What's driving this conflict?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Unclear boundaries for behavior</option><option value="B">B. Authority</option><option value="C">C. Opposing/Competing situations</option><option value="D">D. Exclusion</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unclear boundaries for behavior</h5><h5>Julie lacks a clear understanding of what constitutes appropriate
behavior. She doesn't know that it's inappropriate to wear sweatpants to her office, and her attire is
causing a conflict between her and her boss. A conflict of authority occurs when multiple people want to
control, or be in charge of, the same situation. This is not the type of conflict that Julie's facing. Julie also
doesn't have a conflict of opposing or competing situations because she doesn't need to be in more than
one place at the same time. No one is being excluded or left out in this example.
</h5></div><h5 id='q45'>45. If you and your teammates cooperate with each other and you feel like you're “all in this together,” you
benefit from shared</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. accountability</option><option value="B">B. competition.</option><option value="C">C. innovation.</option><option value="D">D. reflection.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: accountability</h5><h5>When you share accountability with your team, cooperation increases. Nobody is at risk of
being singled out as a failure, and team members are equally accountable in both positive and negative
situations. Competition isn't likely to increase if you and your teammates cooperate with each other.
Instead, you should be working together towards a goal. Innovation is one of the many advantages of
working as a team, but it isn't necessarily related to accountability. Reflection is an important quality for a
good team member to have because it helps you learn from your mistakes. It isn't related to cooperation,
though.
</h5></div><h5 id='q46'>46. In a consensus-building group, the facilitator is the person who</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. takes notes.</option><option value="B">B. is in charge of the group.</option><option value="C">C. keeps the discussion on track.</option><option value="D">D. makes sure everyone has equal time to speak.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: keeps the discussion on track.</h5><h5>The facilitator is the person who serves the group. S/He is in charge of
keeping the discussion on track and keeping things organized. If the consensus-building method is
formal, the facilitator is the one to revise, distribute, and collect the questionnaires. The facilitator isn't in
charge of the group. In fact, in consensus-building, no one is in charge because everyone has equal
power. The note taker is the person who takes the notes, and the timekeeper is in charge of making sure
everyone has equal time to speak.
</h5></div><h5 id='q47'>47. The first step towards becoming a leader is</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. believing you can do it.</option><option value="B">B. being a role model.
</option><option value="C">C. becoming a manager.</option><option value="D">D. demonstrating empathy.
</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: believing you can do it.</h5><h5>Everyone, regardless of position, can become a leader. The first step is believing
you can do it. Leaders are often role models, but this isn't a quality someone needs to have before
becoming a leader. Managers can be leaders, but it isn't necessary for a leader to have a position of
authority. In fact, some experts argue that many people in management positions are actually ineffective
leaders. Empathy is certainly an important characteristic for a leader to have, but it isn't the first step.
</h5></div><h5 id='q48'>48. Maggie owns an auto repair business. She'd like to be the best auto repair shop in the city. Is this a goal
or a vision?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. A vision. It's long term, overarching, and inspirational.</option><option value="B">B. A vision. It's specific, measurable, and time bound.</option><option value="C">C. A goal. It's long term, overarching, and inspirational.</option><option value="D">D. A goal. It's specific, measurable, and time bound.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: A vision. It's long term, overarching, and inspirational.</h5><h5>When Maggie says she wants to be the best auto
repair shop in the city, she's talking about her vision. A vision is long term, challenging but realistic, and
compelling. A vision involves the big picture and the overarching aim of the organization. Also, it's meant
to provide inspiration for the future. A goal, meanwhile, is specific, measurable, and time bound. Goals
might be considered small steps on the way to achieving the vision. In Maggie's example, a goal might
be gaining a certain amount of new customers this month.
</h5></div><h5 id='q49'>49. If you like rules, directions, and close supervision, you would probably work best with which of the
following types of managers:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Interdependent</option><option value="B">B. Democratic</option><option value="C">C. Laissez-faire</option><option value="D">D. Authoritarian

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

6
</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: Authoritarian

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

6
</h5><h5>Explanation not available</h5></div><h5 id='q50'>50. Jorge is considering whether to invest $100 at his bank, but first, he wants to know what his $100 will be
worth in a year. To figure this out, Jorge needs to know the</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. interest rate.</option><option value="B">B. present value.</option><option value="C">C. time value of money.</option><option value="D">D. investment rate.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: interest rate.</h5><h5>To figure out what his $100 will be worth in a year, Jorge needs to know the bank's interest
rate. This will tell him the future value of his money if he invests with the bank. Jorge already knows the
present value—it's the $100 that he currently has. The time value of money is a principle that states that
a dollar today is worth more than a dollar tomorrow. The investment rate is not a term commonly used
when determining future value.
</h5></div><h5 id='q51'>51. Jordan buys a sofa from a local furniture store that advertises "90 days same as cash." She's able to
have the sofa delivered to her house immediately without paying anything. However, if she doesn't pay
for the sofa within the 90 day period, she'll be subject to finance charges. Jordan bought the sofa using a
__________ credit account.</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. revolving</option><option value="B">B. budget</option><option value="C">C. regular</option><option value="D">D. installment</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: budget</h5><h5>Budget accounts are often used by furniture or appliance retailers as a form of short-term credit
—for example, "90 days same as cash" means that customers can purchase goods on credit with the
same advantages they would have with cash purchases. Budget accounts do not charge interest if the
user makes payments on time. However, if a customer doesn't pay the amount in full by the end of the 90
days, s/he is subject to finance charges applying to the full time period. In revolving credit accounts, the
maximum amount of money that the credit user can owe (also known as the credit limit) is set at the time
the credit account is opened. Regular credit accounts are also known as open credit accounts because
they allow credit users to buy at any time during a set period. At the end of that time, the person or
business is expected to pay the entire amount that is due for the purchases made during that period. An
installment credit account is designed to handle one credit transaction, which is paid in installments within
a certain time period. The credit user makes a down payment and signs an agreement to pay monthly
installments until the total is paid.
</h5></div><h5 id='q52'>52. Which of the following is a measurable goal:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. I want to save $3,000 for a new truck.</option><option value="B">B. I'd like to spend less money on clothing.</option><option value="C">C. I want to pay off some of my credit card debt soon.</option><option value="D">D. I'm thinking of buying a house next year.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: I want to save $3,000 for a new truck.</h5><h5>Measurable goals can be counted or assessed in a way that shows
real progress. If you want to save $3,000 for a new truck, this is a measurable goal because you can
track the amount of money you save and determine whether or not you're successful. Spending less
money on clothing isn't a measurable goal because it's too vague—"less" is more difficult to measure
than a specific dollar amount. "I'd like to pay off some of my credit card debt soon" is also not a
measurable goal—there is no specific money or time element. "I'm thinking of buying a house" isn't a
measurable goal because it isn't specific enough—houses can cost different amounts of money, so it's
hard to measure unless you have a certain dollar amount in mind.
</h5></div><h5 id='q53'>53. What is one way you can prevent identity theft?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Only give out personal information when the other person initiated the contact.</option><option value="B">B. Memorize your social security number, and keep your card at home.</option><option value="C">C. Throw away all credit card statements, receipts, and credit offers.</option><option value="D">D. Only give out personal information to someone who says s/he works for a legitimate company.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: Memorize your social security number, and keep your card at home.</h5><h5>You should avoid keeping your
social security card in your wallet or purse. Instead, leave the card at home or somewhere safe, and
memorize your social security number. You should never give out personal information when the other
person initiated the contact—instead, you should only give out information when you initiated the contact
yourself. You shouldn't just throw away credit card statements, receipts, and credit offers. Instead, you
should shred them. Many thieves practice dumpster diving to find documents with bank account or credit
card numbers. You shouldn't give out information to someone who says s/he works for a legitimate
company, as that person could easily be lying to you. In fact, this is a common phishing scheme. Only
give out your personal information if the other person has some way to verify who s/he is (or if you were
the one who contacted him/her).
</h5></div><h5 id='q54'>54. Lin earns $35,000 of taxable income a year. She's unmarried, has no dependents, and doesn't earn any
money from interest. Which tax form should she file?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. 1040EZ</option><option value="B">B. 1040A</option><option value="C">C. 1040</option><option value="D">D. Lin doesn't need to file taxes because of her income level.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: 1040EZ</h5><h5>A person is able to file a 1040EZ if s/he has a taxable income of less than $100,000, is single or
married filing jointly, isn't claiming any dependents, and earns less than $1,500 of interest income. Since
Lin fits all of these requirements, she can file the 1040EZ form. People who do not fit these requirements
must file the 1040A or 1040 tax forms. They each have slightly different requirements. Lin's income level
dictates that she must file an income tax form.
</h5></div><h5 id='q55'>55. Which of the following statements is true of good investment brokers:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. They are responsible for making sure the investor makes money.</option><option value="B">B. Most of them are research analysts.</option><option value="C">C. They are an investor's personal link to the stock exchange.</option><option value="D">D. They control an investor's money.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: They are an investor's personal link to the stock exchange.</h5><h5>Investment brokers are licensed and
registered "middlemen"—without them, you can't invest. Brokers are the only people who are authorized
to buy and sell securities, so they are an investor's personal link to the stock exchange. Brokers are not
research analysts. Research analysis is a separate part of a brokerage house where in-depth
investigation of companies and industries takes place. Brokers are salespeople—they get paid to make
transactions for investors. Brokers are responsible for providing suitable investment council at all times,
but this doesn't necessarily mean they're responsible for making the investor money. It just means that
the advice a broker gives has to make sense for the present financial situation. Good brokers realize that
the investor is ultimately in control of his or her own money. While a broker can make suggestions for the
investor to consider, s/he shouldn't pressure the investor into making any decisions.
</h5></div><h5 id='q56'>56. Sheila decides to invest some of her money. She doesn't like to take big risks, and she wants to be able
to access all of her money at all times. She also doesn't mind not earning much interest. Sheila should
invest her money in a</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. stock.</option><option value="B">B. savings account.</option><option value="C">C. certificate of deposit (CD).</option><option value="D">D. money market account (MMA).</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: savings account.</h5><h5>If Sheila doesn't like to take risks, wants to access all of her money at all times, and
doesn't mind earning very little interest, she should consider a savings account. You're always able to
access your money, but you receive a low return. A stock is much riskier than a savings account—you
actually own part of the company, so you have the rights and responsibilities that go along with
ownership. This means you can make a big profit, but you can also lose a large amount of money if the
stock decreases in value or if the company goes out of business. While a certificate of deposit (CD)
doesn't have a high risk, you aren't able to access your money at all for a set period of time. A money
market account (MMA) is low risk, but you are only able to access some of your money each month, and
you usually have to keep a certain amount of money in your account.
</h5></div><h5 id='q57'>57. When Dan buys a new company truck for his small business, he decides to purchase an extended
warranty. What type of risk management is Dan engaging in?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Acceptance</option><option value="B">B. Avoidance</option><option value="C">C. Mitigation</option><option value="D">D. Transference</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: Transference</h5><h5>Transference involves moving the impact of a risk to someone or something else and is
often used when the impact is measurable in dollars and cents. By purchasing an extended warranty for
his truck, Dan transfers the impact of a risk to the dealership. Avoidance risk response means that a
business chooses not to do something that is considered risky. This can prevent losses, but it can also
sometimes mean losing out on potential gains. In mitigation, a company reduces or controls the impact of
a risk. For example, a seatbelt will not necessarily prevent injury in a car accident, but it will mitigate the
risk. Acceptance is also known as the retention or assumption of risks. It involves a business accepting a
risk's consequences because the potential payoff is higher than the losses.
</h5></div><h5 id='q58'>58. Which of the following is a true statement about bookkeeping:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. It is carried out on a monthly basis.</option><option value="B">B. It includes balancing the books and posting to ledgers.</option><option value="C">C. Most of it is done by hand.</option><option value="D">D. Certified accountants are responsible for carrying out each step.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

7
</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: It includes balancing the books and posting to ledgers.</h5><h5>Bookkeeping includes four steps of the
accounting cycle—analyzing financial transactions, journalizing transactions, posting to ledgers, and
balancing the books. Bookkeeping must be done on a daily basis, not a monthly basis. Although it is
possible to do bookkeeping by hand, most of it is now done on computers. While certified accountants
are capable of carrying out each step, bookkeepers, who are not certified, are often responsible for
keeping an accurate record of each business transaction.
</h5></div><h5 id='q59'>59. Mariana works in the accounting department of a large company. Her boss is pressuring her not to record
all of the company's revenue in the business's financial records. If she follows his instructions, the
company will appear to have a smaller income and won't have to pay as much in taxes. He tells Mariana
that this is a normal thing to do, but Mariana's pretty sure it's wrong. Is this practice legal?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. No; this practice is known as sales skimming.</option><option value="B">B. Yes; this is a common business practice.</option><option value="C">C. No; this practice is known as money laundering.</option><option value="D">D. Yes; if Mariana's boss requires her to do something, she should do it.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: No; this practice is known as sales skimming.</h5><h5>Not recording all of a company's revenue to avoid paying
taxes is known as sales skimming. Any sort of income tax evasion is a felony. Money laundering, which
involves taking money from illegal sources and passing it through a business to make it seem legal, is not
the same as sales skimming. Even if other companies practice sales skimming or if Mariana's boss asks
her to do it, that doesn't make it legal. It's still an illegal practice that qualifies as tax evasion.
</h5></div><h5 id='q60'>60. A graphic design firm decides to rent a new office. The cost of renting this building is considered a/n</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. owner equity.</option><option value="B">B. operating expense.</option><option value="C">C. cost of goods.</option><option value="D">D. asset.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: operating expense.</h5><h5>When a business rents something, the rent is considered an operating expense.
Operating expenses are often one of the largest sources of money flowing out of a business. Owner
equity refers to the money business owners take out of the business to pay themselves. Cost of goods is
a major expense for companies that buy goods for resale, such as retail stores. Assets are things
businesses own such as land, buildings, vehicles, and equipment.
</h5></div><h5 id='q61'>61. When Casey looks at her small business's income statement, she's excited to see that her profit is much
more than she expected. However, she soon realizes that she's looking at the total profit before all other
expenses have been deducted. Casey is looking at her</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. operating expenses.</option><option value="B">B. net income.</option><option value="C">C. revenue.</option><option value="D">D. gross profit.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: gross profit.</h5><h5>A business's total profit before all other expenses have been deducted is known as the
gross profit. The gross profit helps businesses see how much money they've invested in making or
obtaining their products versus how much it costs to run the business. The net income is the business's
final profit, or the money the company actually makes after all expenses have been deducted and taxes
have been paid. The revenue is the total amount of money earned by a business—all money coming into
the business, no matter what the source, is revenue. Operating expenses are all of the expenses
associated with running the business.
</h5></div><h5 id='q62'>62. Michael is a financial manager at his company. He needs to decide which project the company should
invest in, so he estimates each potential project's value to the business. What process is Michael using?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Working capital management</option><option value="B">B. Capital budgeting</option><option value="C">C. Capital structure</option><option value="D">D. The cash conversion cycle</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is B: Capital budgeting</h5><h5>When Michael decides which project the company should invest in by estimating each
potential project's value to the business, he's using capital budgeting. He is not engaging in working
capital management, which focuses on the company's current balance of assets and liabilities. Capital
structure refers to the “optimal mix” of financing (usually some combination of debt and equity). This is
not what Michael is doing in the example. The cash conversion cycle is a ratio that refers to the number
of days between a company's paying for raw materials and receiving cash from those raw materials. The
cash conversion cycle is also not being used by Michael in the example.
</h5></div><h5 id='q63'>63. When Matt developed the yearly budget for his department, his boss required him to demonstrate the
need for every expense instead of relying on last year's budget. Matt developed a ______ budget.</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. zero-based</option><option value="B">B. rolling</option><option value="C">C. percentage-increase</option><option value="D">D. master</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: zero-based</h5><h5>Matt's budget isn't based on the previous year's budget—instead, his budget began at zero.
From that point, he had to demonstrate the need for every expense. This is known as a zero-based
budget. A rolling (or continuous) budget begins with a 12-month budget. Then, a new month is added as
each month goes by. For example, if it were June, there would be a budget in place for June through the
following May. In July, figures for the recent June would drop off, and the budget would cover July
through the following June. This is not the type of budget that Matt created. Some companies use the
previous budget with an across-the-board percentage increase based on inflation or projected growth.
Since Matt could not rely on the previous year's budget, this is not the type of budget he created. A
master budget is made up of information from specialized budgets that are generated by individual
departments. Since Matt's budget only reflects his department, it is not a master budget.
</h5></div><h5 id='q64'>64. Which of the following is a human resources staffing activity:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Recruiting qualified workers</option><option value="B">B. Revising a training program</option><option value="C">C. Ensuring legal compliance</option><option value="D">D. Negotiating benefit packages</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: Recruiting qualified workers</h5><h5>Staffing is a human resources management activity that involves recruiting
interviewing, hiring, orienting, and dealing with job changes for a company's employees. Recruiting is a
staffing activity that involves seeking out and attracting qualified potential employees. The humanresources function often visits college campuses, sponsors job fairs, and places classified ads in
newspapers and on web sites to find qualified workers. Other human-resource activities include training
employees, ensuring compliance, and negotiating compensation and benefit packages.
</h5></div><h5 id='q65'>65. Lucia, a business owner, just hired a new employee. What is one thing she should be sure to do on the
employee's first day?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Assign the new employee a mentor who can answer any questions s/he may have.</option><option value="B">B. Start the new employee on work right away so that s/he becomes accustomed to his/her job
duties.</option><option value="C">C. Provide the new employee with all the details of every project s/he will be working on.</option><option value="D">D. Let the employee work on trivial tasks for a few days so that s/he can ease into working.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: Assign the new employee a mentor who can answer any questions s/he may have.</h5><h5>One simple way to
make an employee feel comfortable is to assign a mentor. The mentor doesn't need to be the employee's
direct supervisor—it just needs to be someone who can show the new employee the ropes. It will help
the new employee to have one ready-made friend who can show her/him around. Lucia should provide
some sort of orientation for the new employee before s/he starts working. There are many important
things the employee will need to know about the company's policies and his/her benefits. Although it is
important to make sure the employee has information about the projects s/he is working on, Lucia won't
want to overwhelm the new employee with too much information on the first day. It's also important not to
give the employee busy work that doesn't fit into his/her job description. After all, that's not why the
employee was hired, and this won't help the new employee become more comfortable at work.
</h5></div><h5 id='q66'>66. Which marketing function helps businesses answer questions like, “Who are our customers?” and
“Where are they located?”</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Marketing-information management</option><option value="B">B. Product/service management</option><option value="C">C. Pricing</option><option value="D">D. Promotion</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: Marketing-information management</h5><h5>As a
result, employees are usually included in decision-making processes. Under innovative management,
company leaders are more facilitative than controlling. They also allow employees to work under less
rigid job descriptions and focus more on outcomes than they do on traditional business functions. In
proactive management, companies anticipate and plan in advance for a change. Proactive organizations
are often innovative as well, but they are not necessarily the same thing. Reactive is the opposite of
proactive—reacting to outside events when they occur instead of anticipating them beforehand.
Competitive isn't a style of management.
</h5></div><h5 id='q67'>67. Donald owns a small photography business. He wants to project a warm, friendly image to the public, so
he makes sure his website, marketing efforts, and employees are all welcoming and approachable.
Donald is concerned with</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. expanding.</option><option value="B">B. supporting a cause.</option><option value="C">C. branding.</option><option value="D">D. increasing sales.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

8
</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: branding.</h5><h5>Donald's company, like most businesses, has branding goals geared toward projecting a
certain image to the public. Donald wants to control how his company is perceived in consumers' minds.
Supporting a cause refers to a business identifying with a non-profit organization like the Red Cross.
Many companies set goals for expansion that don't have much to do with projecting a certain image.
They may want to create a new product line, build a larger facility, or merge with another company.
Businesses at all stages usually want to increase sales, although this isn't really related to projecting a
certain image.
</h5></div><h5 id='q68'>68. Heather is writing a report about a controversial issue—the death penalty. Which of the following sources
is a good choice for Heather's research:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. A blog post from a professor of economics at Harvard</option><option value="B">B. A press release from a group of anti-death penalty activists</option><option value="C">C. An article from a 1995 edition of the New York Times</option><option value="D">D. An article from the current issue of Time magazine</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: An article from the current issue of Time magazine</h5><h5>When Heather chooses resources, she needs to pick
articles from reputable sources. Time magazine is a respected publication that has many editors and fact
checkers, so Heather can be reasonably sure that the information contained in the magazine will be
accurate. The article has also been published recently, so it likely won't contain any out-of-date
information. Heather should avoid using press releases. Press releases usually have an agenda to
promote, so they are biased. To write a well-rounded paper, Heather should stick to articles that are free
of bias or agenda. While the New York Times is a well-respected newspaper, Heather should avoid
reading an article from 1995. An article that old may present outdated figures and facts about the death
penalty. Although a professor from Harvard would generally be a good source, a professor of economics
isn't necessarily an expert on the death penalty. Also, Heather should be wary of using blogs—this blog
may belong to the university, but it may just be the professor's personal opinions.
</h5></div><h5 id='q69'>69. Irene has always kept and filed every piece of paperwork she receives. When she needs to find a specific
document for her boss, Irene wastes hours looking through her filing cabinets before she finally finds it.
What should Irene do to make her filing more efficient?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Hire a new employee to handle her files.</option><option value="B">B. Store all of her documents virtually online.</option><option value="C">C. Create a system and keep only what she needs.</option><option value="D">D. Purge her old documents, throwing everything away.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Create a system and keep only what she needs.</h5><h5>Irene may think she's playing it safe by keeping every
single piece of paperwork, but she's actually making her job much harder. When she keeps everything,
it's more difficult to find the things she actually needs. This leads to frustration and wasted time. Irene
should create a system to decide what she actually needs to keep and then toss all other documents.
Although Irene may want to consider storing her documents virtually instead of physically, this wouldn't
necessarily help her become more organized. While virtual storage wouldn't take up physical space,
Irene could still waste just as much time searching through a mess of documents if she insists on saving
everything. Irene doesn't need to hire a new employee to handle the filing; instead, creating a system will
make Irene's files easier to use. Irene should resist purging all of her old documents—there are many
things she'll need to keep, both for practical and legal reasons.
</h5></div><h5 id='q70'>70. In an effective information management system, all information is</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. abstract.</option><option value="B">B. accessible to everyone.</option><option value="C">C. quantitative in nature.</option><option value="D">D. accurate.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: accurate.</h5><h5>A business's information management system isn't very helpful if it contains inaccurate
information. While it is important for the information to be accessible to the right people, you don't
necessarily want everyone to have access. It could be a disaster if just anyone was able to see your
company's tax returns, accounting records, or customer lists. While much information in an effective
information system is likely to be quantitative or numerical in nature, some information is also bound to
be qualitative or based on opinion (e.g., customer comments). Abstract data or words describe things
which are not objects and may have different meanings to different people. Although some data may be
abstract, other data or information are concrete in nature (e.g., inventory records, sales reports, etc.).
</h5></div><h5 id='q71'>71. Which of the following is a negative effect that technology has on business:</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Businesses often cut employee-assistance programs.</option><option value="B">B. Less emphasis is placed on research and development.</option><option value="C">C. It's more difficult to enter new and foreign markets.</option><option value="D">D. Some technologies can create pollution.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: Some technologies can create pollution.</h5><h5>Although technology provides many benefits, there are also
some negatives, as well. For example, technology can often be held responsible for certain
environmental issues, like air pollution. This means a company usually has to address these problems for
public relations purposes. Technology doesn't make it more difficult to enter new and foreign markets;
actually, it makes it much easier, since the internet allows businesses to sell their products to anyone,
anywhere in the world. Rather than placing less emphasis on research and development as a result of
technology, businesses often place more emphasis on research and development of new technologies.
Technology doesn't typically impact employee-assistance programs.
</h5></div><h5 id='q72'>72. Although Jillian enjoys her job, she's having some trouble getting along with certain coworkers. She
wants to e-mail her boss about the problem, but she's afraid her boss may misinterpret the e-mail or see
her as a negative person. Jillian wants to use proper e-mail etiquette, so she should</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. use emoticons (like smiley faces) in her e-mail so she won't seem like she's complaining.</option><option value="B">B. talk to her boss in person instead of sending an e-mail.</option><option value="C">C. write a lengthy e-mail to make sure her boss won't misunderstand her.</option><option value="D">D. be informal and make jokes so she won't appear too negative.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: talk to her boss in person instead of sending an e-mail.</h5><h5>Jillian should reconsider sending an e-mail. If
she's concerned about the possibility of misinterpretation, she should discuss the matter with her boss in
person. That way, Jillian can explain herself immediately or discuss any concerns her boss may have.
It's also a good idea to discuss this in person because other people have the potential to see the e-mail.
It may even be read by the coworkers Jillian is discussing, which would likely not help her situation. Jillian
should avoid using emoticons in her e-mail—you should never use emoticons when e-mailing
supervisors. Jillian should also avoid sending a lengthy e-mail. In general, people dislike reading long
documents online. Just as she should stay away from emoticons, Jillian should also avoid being too
informal in her e-mail. When e-mailing a supervisor, it's important to be respectful and professional.
</h5></div><h5 id='q73'>73. At home, Bill uses Firefox to view web pages. At work, he uses Google Chrome to look at the same
pages. These software programs that "translate" HTML-encoded files into websites that Bill can read are
examples of</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. uniform resource locators.</option><option value="B">B. browsers.</option><option value="C">C. listservs.</option><option value="D">D. search engines.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: browsers.</h5><h5>Browsers let you view web pages and other documents on the Internet. Browsers “translate”
HTML-encoded files into web pages you can see, read, and watch. When Bill looks at web pages on
Firefox or Google Chrome, he's using a browser to access the Internet. A uniform resource locator, or
URL, is a web document's unique address. Listservs are Internet discussion groups that let you
participate in the conversation and view others' contributions via e-mail. Search engines (such as
Google, Yahoo, or Bing) are databases full of websites that have been harvested and cached.
</h5></div><h5 id='q74'>74. Which of the following statements is true of spreadsheets:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. A row is where a column and cell intersect.</option><option value="B">B. “Row” and “column” are interchangeable terms.</option><option value="C">C. A column is horizontal, while a row is vertical.</option><option value="D">D. A cell is where a column and row intersect.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: A cell is where a column and row intersect.</h5><h5>Spreadsheets, electronic documents that store data, contain
cells, rows, and columns. A cell, which can contain data and be involved in calculations within the
spreadsheet, is the box where a column and row intersect. "Row" and "column" are not interchangeable
terms—in fact, they mean very different things! A row is horizontal, while a column is vertical. A row is not
where a column and cell intersect.
</h5></div><h5 id='q75'>75. To create a web site that people will want to visit, you should use</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. a Flash intro that will grab the viewers' attention.</option><option value="B">B. lots of sounds and images to make the site more fun.</option><option value="C">C. intuitive navigation so your viewers can browse easily.</option><option value="D">D. several different fonts to keep visual interest.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: intuitive navigation so your viewers can browse easily.</h5><h5>If you want people to keep visiting your web site,
it's a good idea to make the navigation as intuitive as possible. You should make it as easy as you can
for people to find their way around your web site. You don't want to confuse or frustrate your viewers, or
else they probably won't return to your site. Sounds or music are almost always a bad idea—people may
not like the music you've chosen, or they may be viewing your site in a quiet place where the music is
intrusive. Although you'll typically want to include some images, using too many can make your site load
too slowly, which will drive your viewers away. Although a Flash intro might seem like a fun way to grab
the viewer's attention, using Flash is generally not a good idea. It loads slowly and isn't compatible with
many mobile devices. If your site is too slow to load, this will discourage viewers from visiting again. It's
best to avoid using too many fonts—you want your site to be as easy to read as possible, so keep it
simple by sticking with just a few commonly-used fonts instead.
</h5></div><h5 id='q76'>76. Alana works in human resources. She is responsible for maintaining information about each company
employee's hiring, evaluations, promotions, and reprimands. Alana is responsible for maintaining the
company's ________ records.</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. asset</option><option value="B">B. personnel</option><option value="C">C. payroll</option><option value="D">D. promotional

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

9
</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: personnel</h5><h5>An employee has a permanent record at his/her job, just as a student has a permanent record
at school. An employee's personnel record includes information about her/his hiring, evaluations,
promotions, and reprimands. This information can help businesses make decisions regarding promotions
or terminations. Asset records are used by businesses to keep track of furniture, equipment, and other
assets that enable businesses to operate. Payroll records include what businesses have paid employees
and the deductions that have been made, as well as details like an employee's identification number,
hours worked, regular wages, and overtime wages. Promotional records are documents containing
information about the various types of communications that businesses use to inform, persuade, or
remind customers of their products, images, or ideas. This information helps businesses to time their
promotions appropriately and to evaluate the effectiveness of their promotions.
</h5></div><h5 id='q77'>77. Identify the protocol component in the following Uniform Resource Locator (URL):
http://www.usatoday.com/money/media/2011-02-18-apple18_ST_N.htm</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. www.usatoday.com</option><option value="B">B. http
</option><option value="C">C. money/media</option><option value="D">D. htm
</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: http
</h5><h5>Explanation not available</h5></div><h5 id='q78'>78. Which of the following elements is part of a business's external environment?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Tax code</option><option value="B">B. Research and development</option><option value="C">C. Marketing</option><option value="D">D. Personnel</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Tax code</h5><h5>However, her boss tells
her that Fridays are “dress down” days. On Wednesday, Sonya starts to get nervous when she realizes
she doesn't know what she should wear on Friday. What should Sonya do?
A. Ask her boss or coworkers what is appropriate to wear.
B. Wear what she thinks will be appropriate and then gage her coworkers' reactions.
C. Dress the way she did on "dress down" days at her last job.
D. Focus on her work—the dress code is unimportant.
92. Jerry works in a large department store. His goal for this weekend is to get 10 customers to sign up for
the store credit card. Which of the following best describes Jerry's goal
A. Performance-based and long-term
C. Performance-based and short-term
B. Learning-based and short-term
D. Learning-based and long-term
93. Which of the following questions should you ask yourself when defining a problem:
A. Am I making assumptions about the situation?
B. What are the possible positive and negative consequences?
C. Is this situation worthy of my time and attention?
D. What are all the possible solutions?
94. After Ben wrote his article for the company newsletter, he looks at his “in box” and sees the budget report
that he has been dreading to work on. Since the budget report is due later in the week, he moves it to the
bottom of the pile, and starts researching a more enjoyable project that is due in two months. What is
Ben doing?
A. Multi-tasking
C. Prioritizing
B. Procrastinating
D. Organizing

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

11

95. Tony works for a large insurance company. His job is to support the company president, schedule his/her
appointments, and answer his/her phone calls. Tony works in
A. marketing communications.
C. administrative services.
B. operations management.
D. human resource management.
96. Which of the following characteristics are necessary for entrepreneurs to be successful:
A. Timidity and organization
C. Optimism and risk-aversion
B. Determination and aggression
D. Creativity and innovation
97. Which of the following choices best completes this sentence: An effective letter of application is
A. addressed to a specific person in the company.
B. a summary of the information on your résumé.
C. a form letter.
D. at least one page long.
98. Lauren is looking for a new job, so she attends as many networking fairs as she can. Since she often
meets new people, she has prepared a 30-second speech that describes her qualifications, her skills,
and her background. This short personal description is Lauren's
A. job hunting speech.
C. networking pitch.
B. personal brand speech.
D. elevator pitch.
99. Juan is a neurosurgeon at a hospital. When he tells people he's a doctor, he's referring to his
A. promotion.
C. career.
B. job.
D. occupation.
100. Shinju has been in her position for awhile, and she'd like to get a promotion. The last time Shinju talked
to her boss about it, her boss said that Shinju will need more training before he'd consider promoting her.
What should Shinju do to get ahead?
A. Talk to coworkers and tell them she wants a promotion
B. Wait for her boss to assign her more training
C. Take a class to learn new skills in her industry
D. Defend herself and tell her boss she has enough training already

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

12

1. B
They clearly outline both sides of an agreement. Legally binding contracts are meant to clearly outline an
agreement. This way, disputes and litigation can hopefully be avoided. Legally binding contracts don't
actually have to be written; they can still be valid if they're verbal, but they're much easier to prove if they
are in writing. Breaking a contract doesn't always result in a lawsuit or jail time. In fact, most people avoid
lawsuits at all costs, since they tend to be expensive and lengthy. Contracts are only enforceable for legal
acts.
</h5></div><h5 id='q79'>79. At Joe's manufacturing plant, quality is built into their entire operating system. From the design stage
onward, they check their product constantly to make there aren't any costly reworks after it's already
made. Joe's company practices quality</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. operations.</option><option value="B">B. inspection.</option><option value="C">C. conformance.</option><option value="D">D. assurance.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: assurance.</h5><h5>When Joe's company builds quality into its entire operating system, it's known as quality
assurance. The goal of quality assurance is to prevent defective products from ever being manufactured.
It places the responsibility for quality on every employee, not just a few inspectors. In quality inspection,
products are checked for defects after they've already been produced. This is often performed by
machines using automatic sensors. Quality conformance and quality operations aren't terms commonly
used to describe any method of quality control.
</h5></div><h5 id='q80'>80. Which of the following is a workplace hazard:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. An employee falls off a ladder while painting a house.</option><option value="B">B. A restaurant kitchen has a slippery spot where someone spilled oil.</option><option value="C">C. A receptionist is diagnosed with carpal tunnel syndrome.</option><option value="D">D. A landscaper develops heat stroke.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: A restaurant kitchen has a slippery spot where someone spilled oil.</h5><h5>A workplace hazard is defined as
anything that can harm an employee, whether mentally or physically. A slippery spot on a kitchen floor is
a hazard because an employee could easily fall and injure himself/herself. A hazard is what can cause an
injury, not the injury itself. For this reason, carpal tunnel syndrome and heat stroke are not hazards. In
these cases, repetitive motions and heat would be the hazards. A hazard is also not the event that
causes the injury. Falling off a ladder is not a hazard, but the height which caused the fall is a hazard.
</h5></div><h5 id='q81'>81. Tom, an employee at a manufacturing plant, injures himself when a scrap of metal flies out of a machine
and into his eye. Mindy, his manager, must handle the situation. What should she do first?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Address Tom's medical needs and get him to a doctor.</option><option value="B">B. Discipline Tom for not wearing safety goggles as instructed.</option><option value="C">C. File an accident report and interview witnesses.</option><option value="D">D. Check the machine to see if it's malfunctioning.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Address Tom's medical needs and get him to a doctor.</h5><h5>When an accident occurs, the most important
thing is the injured person's health. This means making sure that s/he receives medical attention
immediately if necessary. An eye injury could be serious, so it's extremely important that Tom get
medical care before any other action is taken. Later, Mindy may decide to discipline Tom for not wearing
safety goggles if he is indeed required to do so. Filing an accident report and checking the machine are
important, but Mindy will want to wait to do both until she knows Tom has received medical care.
</h5></div><h5 id='q82'>82. Which of the following is an example of intellectual property:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. A business owner buys new computers for the office.</option><option value="B">B. An inventor obtains a patent for a new product.</option><option value="C">C. A restaurant kitchen is stocked with food.</option><option value="D">D. A manufacturing company buys a new machine.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: An inventor obtains a patent for a new product.</h5><h5>Intellectual property is defined as having no physical
characteristics. In other words, it is intangible. A patent would be considered intellectual property. Other
examples of intellectual property include copyrights and trademarks. Computers, food, and machines are
all tangible objects with physical characteristics, so they are not considered intellectual property.
</h5></div><h5 id='q83'>83. A publishing company is releasing a 10th anniversary edition of a popular cookbook. The new edition
features an updated foreword and a few new recipes, but otherwise it's the same as the old cookbook.
This cookbook is a(n) ________ project.</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. R&D</option><option value="B">B. platform</option><option value="C">C. breakthrough</option><option value="D">D. derivative</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: derivative</h5><h5>Derivative projects enhance, add to, or extend existing projects. They're usually undertaken
on a smaller scale than most new projects, since a lot of the resources are already in place. This
cookbook has a few new features, but it merely adds to the cookbook that already exists. A platform
project is something entirely new. They require considerably more resources than derivative projects.
Breakthrough projects are risky endeavors that can wind up revolutionizing entire industries. They use
entirely new technology. R&D stands for the research and development of new knowledge, new
technologies, and new processes. Like breakthrough projects, they are risky undertakings. None of these
other project types describe the cookbook this publishing company is releasing.
</h5></div><h5 id='q84'>84. Which of the following is the best example of the types of resources it takes to complete a project
successfully:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Food</option><option value="B">B. Materials</option><option value="C">C. Encouragement</option><option value="D">D. Energy</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: Materials</h5><h5>Completing a project successfully requires a mix of resources, including money, human
resources, equipment, materials, etc. Although food, encouragement, and energy may be helpful, they
are not as essential as having the right materials.
</h5></div><h5 id='q85'>85. Purchasing's ultimate goal and purpose is always to obtain the right goods and services from the right
suppliers at the right price. To reach this goal, purchasing specialists must be sure to</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. get the best price from suppliers, even if it damages relationships.</option><option value="B">B. purchase as much as possible when goods are needed.</option><option value="C">C. locate back-up sources of goods and services.</option><option value="D">D. select the supplier with the lowest bid.

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

10
</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: locate back-up sources of goods and services.</h5><h5>It's important for purchasing specialists to be sure they
can get the goods and services they need when they need them. It's good to have back-up sources
because if a purchasing specialist doesn't do his/her job correctly or get the items or services that the
business needs, then the business cannot produce its finished good or service. That could lead the
business to lose money or maybe even close. A purchasing specialist doesn't necessarily want to
purchase as much as s/he possibly can; instead, s/he should purchase in amounts that make sense
economically. Getting a good price is important, but a purchasing specialist does not want to do so at the
expense of his/her relationship with the supplier. Although some companies require purchasing
specialists to always choose the lowest bidder, buyers are often permitted to select the bidder with the
best overall terms, including quality and quantity, even if that supplier's price isn't the lowest.
</h5></div><h5 id='q86'>86. Maurice, a coffee shop owner, is choosing a new vendor to supply his shop with napkins, cups, and other
paper products. He has several vendors to choose from, and he's not sure which to pick. For the best
results, Maurice should choose the supplier who</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. has the most advanced technology.</option><option value="B">B. has the lowest prices.</option><option value="C">C. views relationships as partnerships.</option><option value="D">D. has the best reputation in the community.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: views relationships as partnerships.</h5><h5>Ideally, Maurice should be able to develop a partnership with his
vendor. When he and the vendor are both working together towards the same goal, he's more likely to
get the results he wants. Suppliers and vendors should be part of the team. Although it's nice to find a
supplier with a low price, this shouldn't be at the top of Maurice's priority list. Always choosing the
supplier with the lowest price can lead to suppliers who aren't invested in his shop's success and who
only care about their bottom line. Choosing a supplier with advanced technology and a good reputation is
also important, but the first priority for Maurice should be to choose a vendor who's willing to work
together with his company to meet their specific goals.
</h5></div><h5 id='q87'>87. Kristina recently started her own candle company. After figuring out what kind of candles she wants to
make and what they will look like, she has shifted her attention to how the candles will be produced and
in what amounts. Kristina is engaging in</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. dispatching.</option><option value="B">B. product placement.</option><option value="C">C. production planning.</option><option value="D">D. purchasing.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is C: production planning.</h5><h5>Production planning involves determining how products will be produced and in
what amounts. When planning production, Kristina needs to determine her candle company's specific
needs for equipment, time, and human resources, as well as how many products she thinks she can sell.
Issuing orders for production to start is known as dispatching. Product placement is a type of “other”
media that uses products as props. Purchasing involves the buying of goods and services for a business.
</h5></div><h5 id='q88'>88. Mel works in the quality department of a manufacturing plant. When there's a problem with the production
line, she writes the problem down on a piece of paper. Then, she writes down all the factors that are
involved. After that, she writes down all of the possible reasons for the factors that led to the problem.
Mel is using a quality tool known as a</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. cause-and-effect diagram.</option><option value="B">B. check sheet.</option><option value="C">C. histogram.</option><option value="D">D. scatter diagram.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: cause-and-effect diagram.</h5><h5>When Mel writes down her problem, the factors, and the possible causes,
she's making a cause-and-effect diagram, also known as a fishbone diagram. This is a good approach
because it forces Mel to consider every possible cause, not just the most likely or typical causes. A check
sheet is a form that can be used to collect data categorically. A histogram is a bar graph that's often used
in quality management. Much like a cause-and-effect diagram, a scatter diagram is meant to discover the
cause of a problem, but it uses dots on a graph to show information.
</h5></div><h5 id='q89'>89. What can you do to help your company control expenses?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Follow company policies and procedures.</option><option value="B">B. Focus strictly on how much work you can get done.</option><option value="C">C. Handle sales transactions as quickly as possible.</option><option value="D">D. Carry out research and development activities.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: Follow company policies and procedures.</h5><h5>Most businesses have specific policies that provide guidelines
for the ways in which employees are expected to carry out their tasks. Following these guidelines can
save the business money. For example, some company policies limit the time during which customers
can return purchases. When employees follow this rule, the company avoids losing money on products it
can neither return to the vendor nor sell to other customers. Although you should try to work as efficiently
as possible, it's not a good idea to focus strictly on how much work you can get done. The quality of the
work is often more important than the quantity. Instead of handling customer transactions as quickly as
possible, it's better to focus on accuracy. Handling sales transactions correctly is a great opportunity to
save the company money. Carrying out research and development activities is one of the effects of
expense control, not a way an employee can help his or her company with expense control.
</h5></div><h5 id='q90'>90. When dealing with equipment maintenance, it's important to always remember that</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. it's less costly to fix a problem than to prevent one.</option><option value="B">B. warranties are generally unnecessary and should be avoided.</option><option value="C">C. regular equipment checks can find problems while they're small.</option><option value="D">D. you should keep equipment running while doing maintenance.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: regular equipment checks can find problems while they're small.</h5><h5>It's important to develop an equipmentcheck routine. This way, you'll be able to catch and deal with any problems before they get out of hand.
This will save your company both time and money. Although warranties are not always a good idea, they
can often be very helpful in terms of saving your company money on repairs. It's usually less costly to
prevent a problem than it is to fix one—that's why routine maintenance checks are so important! Be sure
to turn equipment off while doing maintenance. Leaving the equipment running while attempting to fix it
can damage the equipment or cause serious injury.
</h5></div><h5 id='q91'>91. Sonya just started a new job at an office with a “corporate casual” dress code. However, her boss tells
her that Fridays are “dress down” days. On Wednesday, Sonya starts to get nervous when she realizes
she doesn't know what she should wear on Friday. What should Sonya do?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Ask her boss or coworkers what is appropriate to wear.</option><option value="B">B. Wear what she thinks will be appropriate and then gage her coworkers' reactions.</option><option value="C">C. Dress the way she did on "dress down" days at her last job.</option><option value="D">D. Focus on her work—the dress code is unimportant.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: Ask her boss or coworkers what is appropriate to wear.</h5><h5>If Sonya is in doubt about what to wear, she
should ask. She can ask her boss or her coworkers, or she can even refer to the company's policy
manual, which may define appropriate and inappropriate dress. Sonya should not wear what she thinks is
appropriate and wait for her coworkers' reactions—if she doesn't dress the right way, this could
negatively affect her coworkers' views of her. She should also not dress the way she did at her last job
because every work environment has different rules about what is appropriate. Although Sonya should
focus on her work, she shouldn't ignore the dress code. While it might not seem that important, your
clothing affects others' perceptions of you. Dressing well can show dedication to your job, which can lead
to raises and promotions.
</h5></div><h5 id='q92'>92. Jerry works in a large department store. His goal for this weekend is to get 10 customers to sign up for
the store credit card. Which of the following best describes Jerry's goal</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Performance-based and long-term</option><option value="B">B. Learning-based and short-term</option><option value="C">C. Performance-based and short-term</option><option value="D">D. Learning-based and long-term</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Performance-based and short-term</h5><h5>Jerry's goal is a performance goal because it is a task he can
complete—once he's signed up 10 new customers for the store credit card, he'll know he's accomplished
his goal. His goal is short-term because it is an objective that takes less than a year to achieve. Jerry's
goal does not involve mastering a new skill, so it wouldn't be considered a learning goal. Long-term goals
are objectives that take more than a year to reach, and Jerry's goal will only take one weekend.
</h5></div><h5 id='q93'>93. Which of the following questions should you ask yourself when defining a problem:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Am I making assumptions about the situation?</option><option value="B">B. What are the possible positive and negative consequences?</option><option value="C">C. Is this situation worthy of my time and attention?</option><option value="D">D. What are all the possible solutions?</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Is this situation worthy of my time and attention?</h5><h5>Part of defining the problem involves asking yourself, “Is
this situation worthy of my time and attention?” Your problem may not even be a problem, in which case
you don't want to waste time on it. You should ask about the positive and negative consequences when
selecting and implementing a solution. You should check your assumptions while problem-solving, but
this isn't part of defining a problem. You should also figure out all of your possible solutions, but that
occurs well after defining the problem.
</h5></div><h5 id='q94'>94. After Ben wrote his article for the company newsletter, he looks at his “in box” and sees the budget report
that he has been dreading to work on. Since the budget report is due later in the week, he moves it to the
bottom of the pile, and starts researching a more enjoyable project that is due in two months. What is
Ben doing?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Multi-tasking</option><option value="B">B. Procrastinating</option><option value="C">C. Prioritizing</option><option value="D">D. Organizing

2013 HS ICDC

BUSINESS ADMINISTRATION CORE EXAM

11
</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Procrastinating</h5><h5>Procrastination is putting off a task that can be done today until tomorrow. Because Ben
doesn't like working on the budget report, he puts off working on it until later; therefore, he is
procrastinating. Multi-tasking involves doing more than one task at the same time. Prioritizing involves
determining the order for completion of activities based on their importance. Organizing is the
management function of setting up the way the business will do its work.
</h5></div><h5 id='q95'>95. Tony works for a large insurance company. His job is to support the company president, schedule his/her
appointments, and answer his/her phone calls. Tony works in</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. marketing communications.</option><option value="B">B. operations management.</option><option value="C">C. administrative services.</option><option value="D">D. human resource management.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: administrative services.</h5><h5>It's important for purchasing specialists to be sure they
can get the goods and services they need when they need them. It's good to have back-up sources
because if a purchasing specialist doesn't do his/her job correctly or get the items or services that the
business needs, then the business cannot produce its finished good or service. That could lead the
business to lose money or maybe even close. A purchasing specialist doesn't necessarily want to
purchase as much as s/he possibly can; instead, s/he should purchase in amounts that make sense
economically. Getting a good price is important, but a purchasing specialist does not want to do so at the
expense of his/her relationship with the supplier. Although some companies require purchasing
specialists to always choose the lowest bidder, buyers are often permitted to select the bidder with the
best overall terms, including quality and quantity, even if that supplier's price isn't the lowest.
</h5></div><h5 id='q96'>96. Which of the following characteristics are necessary for entrepreneurs to be successful:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Timidity and organization</option><option value="B">B. Determination and aggression</option><option value="C">C. Optimism and risk-aversion</option><option value="D">D. Creativity and innovation</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: Creativity and innovation</h5><h5>There are many characteristics that all successful entrepreneurs share,
including creativity and innovation. Not all entrepreneurs are equally strong in these areas, but the
important thing is that they realize their weaknesses and work to improve them. Entrepreneurs must be
determined, but they don't necessarily have to be aggressive. Optimism is extremely important for
entrepreneurs, but risk-aversion is not. A successful entrepreneur must be willing to take risks. While
organization is an important quality for an entrepreneur to possess, timidity isn't helpful—a successful
entrepreneur is confident in his/her ideas and abilities.
</h5></div><h5 id='q97'>97. Which of the following choices best completes this sentence: An effective letter of application is</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. addressed to a specific person in the company.</option><option value="B">B. a summary of the information on your résumé.</option><option value="C">C. a form letter.</option><option value="D">D. at least one page long.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: addressed to a specific person in the company.</h5><h5>"To Whom It May Concern" isn't something you should
ever use when addressing your letter of application. It shows employers that you didn't take the time to
research the company. Instead, look online or call the company to find out who will be reviewing your
application. If the information is truly not available anywhere, address the letter to "Hiring Manger." A
letter of application that merely summarizes the résumé is basically useless—the hiring manger already
has that information! You should take this opportunity to showcase information that isn't available on the
résumé. Never send a form letter—instead, you'll want to show how your experience and skills directly
apply to the position in question. Avoid writing letters of application that are too long. Less than a page is
a good length—hiring managers are busy people, and you want to be able to get your message across
succinctly.
</h5></div><h5 id='q98'>98. Lauren is looking for a new job, so she attends as many networking fairs as she can. Since she often
meets new people, she has prepared a 30-second speech that describes her qualifications, her skills,
and her background. This short personal description is Lauren's</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. job hunting speech.</option><option value="B">B. personal brand speech.</option><option value="C">C. networking pitch.</option><option value="D">D. elevator pitch.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is D: elevator pitch.</h5><h5>Since Lauren's looking for a job, it's smart for her to prepare an elevator pitch—a short
speech that describes her qualifications, skills, and background. The name comes from the amount of
time it takes to ride an elevator. You don't want your speech to be too long—you'll risk boring the other
person, which won't help your chances of getting a job. It's important to develop an elevator pitch
because you often only get a short chance to talk to someone at a networking fair. This might be your
only chance to meet some people, so it's crucial to get your point across quickly. Personal brand speech,
networking pitch, and job hunting speech are not terms commonly used to describe elevator pitches.
</h5></div><h5 id='q99'>99. Juan is a neurosurgeon at a hospital. When he tells people he's a doctor, he's referring to his</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. promotion.</option><option value="B">B. job.</option><option value="C">C. career.</option><option value="D">D. occupation.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: occupation.</h5><h5>An occupation is a wide category of jobs with similar characteristics. "Doctor" could
encompass many different positions. If Juan wanted to tell people his job, he would refer to himself as a
neurosurgeon. A job is more specific than an occupation—it is the work for which you receive pay. A
career is much broader—it is a lifetime journey of building and making good use of your skills,
knowledge, and experiences. Juan is not referring to a promotion.
</h5></div><h5 id='q100'>100. Elizabeth has many ways of interacting with her favorite store. She can visit it in person and speak to an
employee, check out the store's web site online, receive one of its e-mail newsletters, or look at its
Facebook page. The ways Elizabeth interacts with the store are</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. touch points.</option><option value="B">B. contact spots.</option><option value="C">C. brand interactions.</option><option value="D">D. customer exchanges.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: touch points.</h5><h5>Avoid using too much technical terminology. The
executive summary is often read by people who aren't experts in the field, and it needs to be easily
understood by everyone. For the same reason, it's also important to avoid using complex sentences.
Remember that the executive summary will often be skimmed by busy people. Help them understand
your executive summary by making it as easy-to-read as possible.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Principles_6_Whole_Homework.js"></script></html>