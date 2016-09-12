<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality Exam 5</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. establish laws.</option><option value="B">B. enact legislation.</option><option value="C">C. resolve disputes.</option><option value="D">D. dissolve businesses.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: resolve disputes.</h5><h5>The legal procedure is the process of reviewing disputes or claims and resolving them
in a fair manner. Businesses are often involved in disputes with other entities, such as suppliers or
competitors. If a business believes it has been wronged by another, the business follows the appropriate
legal procedure to resolve the issue. Enacting legislation, establishing laws, and dissolving businesses
are not the main functions of the legal procedure.
</h5></div><h5 id='q2'>2. Jake wanted to run his own business but was unsure that he had adequate business skills to be
successful. Which type of business would give Jake the help he needs?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Business-format franchise</option><option value="B">B. Sole proprietorship</option><option value="C">C. Private corporation</option><option value="D">D. Product trade-name franchise</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: Business-format franchise</h5><h5>A business-format franchise is a franchise agreement in which the franchisee
must operate under the trade name of the parent company that provides continuous assistance in setting
up and operating the business. This kind of business arrangement would give Jake more assistance than
any of the other alternatives. A sole proprietorship is a form of business ownership in which the business
is owned by one person who takes all of the risk and responsibility. A private corporation is a type of
corporation owned by a few people that does not offer its shares for sale to the public. A product tradename franchise is based on an independent sales relationship between a franchisor and a franchisee to
stock and sell a specific line of goods.
</h5></div><h5 id='q3'>3. Because the regulations of various jurisdictions differ, tour-bus drivers must be aware of and follow
specific __________ laws.</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. traffic</option><option value="B">B. airspace</option><option value="C">C. shipping</option><option value="D">D. property</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: traffic</h5><h5>Tour-bus drivers must understand traffic laws in each jurisdiction where they travel because laws
differ by jurisdiction. For example, one city might allow a vehicle to turn left onto a one-way street at a red
light, while another city does not. If the driver does not understand and follow the law, the bus might be
involved in an accident that injures the tourists, other vehicles, and pedestrians. Airline pilots must
understand laws relating to airspace. Laws relating to shipping processes regulate the way certain
products are moved or transported. Property laws regulate the ways in which land and buildings are used
or maintained.
</h5></div><h5 id='q4'>4. What action would you recommend a hotel restaurant's manager take when the following situation
occurred?
The manager phoned a restaurant supply house to order new table linens and was told that she would
also need to buy a case of wine and two-dozen wine glasses to get the table linens. The manager did not
want the wine or the glasses.</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Report the restaurant supply house for antitrust violations</option><option value="B">B. Buy the linens and the add-ons from the restaurant supply house</option><option value="C">C. Report the restaurant supply house for fraud</option><option value="D">D. Visit the restaurant supply house to verify the quality of the wine and the glasses</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: Report the restaurant supply house for antitrust violations</h5><h5>The scenario is an example of a tying
agreement in which a company requires a buyer to purchase one product in order to get the desired
product. Tying agreements are a violation of antitrust laws. The manager should not buy the wine and
glasses if they are not needed. Fraud is defined as an intentional deception undertaken for personal gain.
The restaurant supply house did not deceive the restaurant manager. A visit to the restaurant supply
house would only be done if the wine and wine glasses were wanted.
</h5></div><h5 id='q5'>5. In relation to channel management, which of the following actions should the manufacturer take to
effectively introduce a new product to the marketplace:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Establish ethics policies</option><option value="B">B. Use appropriate promotional techniques to inform channel members</option><option value="C">C. Improve communication with distributors or wholesalers</option><option value="D">D. Apply for a line of credit</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Use appropriate promotional techniques to inform channel members</h5><h5>Promotion is a critical consideration
when introducing a new product because this function lets channel members and customers know that
the good or service is available. The promotional efforts should be carefully planned and coordinated with
the product's release. For example, a manufacturer might provide catalogs, brochures, coop-advertising
funds, and product training to its intermediaries (e.g., dealers, wholesalers) before the product is released
so that the intermediaries can explain the products to their customers or end users. Some channel
members (e.g., retailers) might need to coordinate promotion so that newspaper and television
advertising or special events are appropriately timed with the product's arrival on the stores' shelves. If
the communication between a manufacturer and its intermediaries is already very good, the manufacturer
needs to continue using good communication rather than improve it. Applying for a line of credit is a
financial consideration. Ethics policies must not only be established, but they must communicated to the
appropriate people or organizations.
</h5></div><h5 id='q6'>6. As an audience member, which of the following should you do to encourage a speaker during an oral
presentation?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Smile.</option><option value="B">B. Refrain from asking questions.</option><option value="C">C. Keep a straight face to communicate that you are serious.</option><option value="D">D. Quietly discuss the speech with the person sitting next to you.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: Smile.</h5><h5>A smile shows the speaker that you support and encourage him/her. It is a good idea to ask
questions when asked. It shows interest in the topic. A straight face is difficult for a speaker to interpret. It
may mean a person is upset, is daydreaming, or is seriously listening. Talking to others during a
presentation is rude to the speaker and may cause him/her to lose his/her train of thought.
</h5></div><h5 id='q7'>7. When Dawn answered the front desk telephone at her property, a female caller who sounded very upset
said, "My daughter, Susan Smith, is staying at your hotel, and I need to reach her immediately because
of a family emergency. Would you please give me her room number?" Dawn quickly answered, "Ms.
Smith is in room 224. I'll connect you." What did Dawn do wrong?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. She told the caller that she would transfer the call quickly.</option><option value="B">B. She didn't forward the caller to the guest's voicemail.</option><option value="C">C. She gave out a guest's room number.</option><option value="D">D. She didn't answer the caller with enough courtesy.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: She gave out a guest's room number.</h5><h5>Although Dawn was courteous with the caller, she was distracted
by the fact that the caller seemed upset and said the call was about an emergency. In her haste to be
helpful, she forgot that she should try to locate the guest, not give out her room number, even in what
was described as an emergency. It was appropriate for Dawn to tell the caller that she would transfer the
call and to ring the guest's room before transferring the caller to the guest's voicemail, especially in an
emergency situation.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1077

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. including a testimonial in a promotional piece.</option><option value="B">B. identifying the sequential steps of a process.</option><option value="C">C. using charts to summarize information.</option><option value="D">D. providing a detailed example to clarify a concept.

®
</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: providing a detailed example to clarify a concept.

®
</h5><h5>1077

HOSPITALITY AND TOURISM CLUSTER EXAM—KEY

17

31. B
Damage to credit history. If steps are not immediately taken to rectify any damages caused by identity
theft, the victim of the theft could spend years trying to rebuild his/her credit and savings. If one's identity
is stolen, s/he will not need to get a new identity. Unemployment and homelessness are not results of
having one's identity stolen.
</h5></div><h5 id='q9'>9. When developing persuasive business letters, it is most important for the writers to think about the
readers'</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. possible objections.</option><option value="B">B. personal images.</option><option value="C">C. decision-making styles.</option><option value="D">D. nonverbal cues.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is A: possible objections.</h5><h5>The purpose of a persuasive letter is to convey information that encourages the
reader to take a specific course of action. For example, the purpose of a sales letter is to motivate a
person to buy a particular product. An objection is a reason for not taking a specific course of action.
When developing persuasive messages, it is important for the writers to think about the readers' possible
objections and acknowledge them. By acknowledging the objections and providing a rationale that
removes the objections, the writers better position themselves in persuading the readers to take specific
actions. Because each reader has different personal images and decision-making styles, it is not feasible
for the writer to consider these factors if the letter is going to a lot of people. The readers' nonverbal cues
cannot be seen when writing persuasive messages.
</h5></div><h5 id='q10'>10. When a memorandum format is used for a short report, it does not require a(n)</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. specific date.</option><option value="B">B. businesslike tone.</option><option value="C">C. identified subject.</option><option value="D">D. handwritten signature.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: handwritten signature.</h5><h5>Some memos are signed, but a memorandum usually has the name of the sender
typed rather than written. The sender may write his/her initials next to the typed name. A date and a
businesslike tone are appropriate in all memorandums. The subject is identified in the heading of the
memo.
</h5></div><h5 id='q11'>11. What do employees within a retail business often use as a means of communicating informally with each
other?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Grapevine</option><option value="B">B. Memorandum</option><option value="C">C. Internet</option><option value="D">D. Newsletter</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Grapevine</h5><h5>The grapevine is an oral communication method in which information is passed around the
company but not formally announced or verified. Employees often communicate with each other through
the grapevine and pass on accurate information about developments within the business. The problem
with the grapevine is that sometimes the message is incorrect. Businesses often communicate formally
with employees through the company newsletter or an official memorandum. The Internet is a worldwide
interconnection of computer networks.
</h5></div><h5 id='q12'>12. What do employees often obtain by solving customers' problems quickly and satisfactorily?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Individual priority</option><option value="B">B. Repeat business</option><option value="C">C. Personal service</option><option value="D">D. Pleasant experience</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: Repeat business</h5><h5>This kind of business arrangement would give Jake more assistance than
any of the other alternatives. A sole proprietorship is a form of business ownership in which the business
is owned by one person who takes all of the risk and responsibility. A private corporation is a type of
corporation owned by a few people that does not offer its shares for sale to the public. A product tradename franchise is based on an independent sales relationship between a franchisor and a franchisee to
stock and sell a specific line of goods.
</h5></div><h5 id='q13'>13. Eva works at a hotel registration desk. When a customer was checking in tonight, Eva reminded him that
checkout time would be 11:00 a.m. "No, it's not!" he exclaimed. "It's always at 11:30!" Eva's customer is
a(n) __________ customer.</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. impatient</option><option value="B">B. suspicious</option><option value="C">C. argumentative</option><option value="D">D. leave-me-alone</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: argumentative</h5><h5>Eva's customer is argumentative. He's trying to pick a fight with her and tell her that she's
wrong. A suspicious customer questions everything and is constantly worried that your business might
take advantage of him/her. A leave-me-alone customer does not want your advice or assistance even
though you might be able to help. An impatient customer shows verbally or nonverbally that s/he does
not want to wait in line.
</h5></div><h5 id='q14'>14. What can a cruise ship provide its customers to improve its service image and give itself a competitive
advantage?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Personalized activity schedules</option><option value="B">B. Room service</option><option value="C">C. Standard products</option><option value="D">D. Open-door policy</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is A: Personalized activity schedules</h5><h5>A competitive advantage is the edge that businesses achieve when they
can offer something better than their competitors. A business that provides a service, or a better type of
service, often has an advantage over competitors that do not provide the same service. Offering
personalized activity schedules may persuade customers to buy from that cruise line. A business that
does not have a competitive advantage if it offers room service or standard products that are provided by
other, similar businesses. Open-door policy is a business practice whereby management encourages
communication between employees and management by indicating that their doors are always open.
</h5></div><h5 id='q15'>15. What economic activity is necessary for consumption to occur?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Production</option><option value="B">B. Opportunity</option><option value="C">C. Financing</option><option value="D">D. Management</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Production</h5><h5>The movement of goods, services, and resources is possible because of four economic
activities: consumption, production, exchange, and distribution. In order for consumption to occur, goods
and services must be made or produced. Production relies on consumers to provide resources, and
consumption relies on producers to provide goods and services. Opportunity is a chance or benefit.
Financing is a marketing function that involves understanding the financial concepts used in making
business decisions. Management is the process of coordinating resources in order to accomplish an
organization's goals.
</h5></div><h5 id='q16'>16. What do consumers, producers, and resource owners need to have in order to make economic
decisions?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Economic incentives</option><option value="B">B. Information about prices</option><option value="C">C. Rationing skills</option><option value="D">D. Limited liability</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: Information about prices</h5><h5>Information about prices is necessary in deciding whether to buy, what to buy,
and how much to buy. Information is one of the functions of relative prices. Economic incentives are
monetary motivators that encourage producers to change and reallocate their resources. In our economy,
these incentives are profit. Rationing is a function of relative prices that determines who gets the goods
and services produced or how scarce resources will be distributed. Limited liability is a condition in which
business owners risk only the amount of their investment.
</h5></div><h5 id='q17'>17. A person who locates workers for a business and monitors their work effort is performing which basic
business activity?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Financial analysis</option><option value="B">B. Human resources management</option><option value="C">C. Marketing</option><option value="D">D. Operations management</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: Human resources management</h5><h5>This activity involves planning, staffing, leading, and organizing. It
includes locating employees, organizing work, and monitoring employees. Financial analysis is the
process of planning, maintaining, monitoring, controlling, and reporting the use of financial resources.
Marketing is a primary business activity that involves creating, communicating, and delivering value to
customers and managing customer relationships in ways that benefit the organization and its
stakeholders. Operations management is the process of planning, controlling, and monitoring the day-today activities required for continued business functioning.
</h5></div><h5 id='q18'>18. When employees are working faster or better, they are increasing their</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. efficiency.</option><option value="B">B. wages.</option><option value="C">C. benefits.</option><option value="D">D. value.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: efficiency.</h5><h5>When employees are working faster or better, they are increasing their efficiency. They may
increase their value to the firm in the process—and perhaps their wages and benefits, too. But their
efficiency is directly tied to how fast and how well they do their work.
</h5></div><h5 id='q19'>19. Which of the following work situations would best demonstrate a job with high depth and high scope:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. The manager evaluates employee performance according to the owner's standard.</option><option value="B">B. The manager of a restaurant selects the monthly menu and designs a newspaper advertisement.</option><option value="C">C. A manager is responsible for developing the monthly work schedule for employees.</option><option value="D">D. The manager signs the employee time cards at the end of each work week.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: The manager of a restaurant selects the monthly menu and designs a newspaper advertisement.</h5><h5>Explanation not available</h5></div><h5 id='q20'>20. Kyle is part of a group of employees who are close friends and like to spend their lunch hours together,
eating or playing cards. This group is considered a(n)</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. organizational culture.</option><option value="B">B. subculture.</option><option value="C">C. religious committee.</option><option value="D">D. collective.

</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: subculture.</h5><h5>Kyle's group is a subculture at his work—a smaller culture that develops under the dominant
organizational culture. The organizational culture is the overall culture of the entire company. His group is
not based on religion. A collective society strongly relies on groups, but it is not the term used within
organizations.
</h5></div><h5 id='q21'>21. An important personality trait in hospitality and tourism is leadership, which is demonstrated by
individuals when they</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. analyze employee productivity.</option><option value="B">B. feel what others are feeling.</option><option value="C">C. plan and organize their work.</option><option value="D">D. guide the actions of others.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: guide the actions of others.</h5><h5>Individuals who are leaders not only have the ability to decide what needs to
be done, but they can guide the actions of others to do the work. Good leaders generally plan and
organize their work, but that is not what makes them good leaders. Analyzing employee productivity is
often a responsibility of leaders rather than a personality trait. Displaying empathy by feeling what others
are feeling is a desirable personality trait but does not indicate leadership.
</h5></div><h5 id='q22'>22. Interest and enthusiasm are very important parts of a(n)</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. business cycle.</option><option value="B">B. positive attitude.</option><option value="C">C. orderly environment.</option><option value="D">D. partnership agreement.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: positive attitude.</h5><h5>Interest and enthusiasm are part of a positive attitude which gives you a good outlook
on life. Although you will still encounter frustrations and disappointments, you won't be kept down very
long by them. Your interest in life and your enthusiasm will soon reassert themselves. Business cycles
are periods of expansion and contraction in economic activities. An orderly, systematic environment can
be obtained without interest and enthusiasm. A partnership agreement is a written agreement signed by
business partners which specifies the terms of the partnership.
</h5></div><h5 id='q23'>23. A good indication that you may be making an unethical choice is if you</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. maintain confidential information.</option><option value="B">B. attempt to be objective.</option><option value="C">C. make excuses to justify your behavior.</option><option value="D">D. disagree with the rules.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: make excuses to justify your behavior.</h5><h5>Making excuses means that you are trying to convince yourself
that what you are doing or thinking of doing is okay—that you are justifying a wrong or inappropriate
choice. Maintaining confidential information (unless it is harmful to others) and being objective are ethical
behaviors. Simply disagreeing with certain rules does not always indicate that you are making an
unethical choice.
</h5></div><h5 id='q24'>24. I'll connect you." What did Dawn do wrong?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. make changes of their own.</option><option value="B">B. hire unskilled workers.</option><option value="C">C. expand their operations.</option><option value="D">D. resist beneficial changes.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: make changes of their own.</h5><h5>Some outside changes create problems for businesses and make it
necessary for them to make changes of their own. These may be changes in the organizational structure,
work loads, or functions. Most successful businesses realize that change is a fact of life and that they
should not resist changes that will benefit the company. Economic changes would only prompt the
business to expand if the economic change is for the better. Technological changes would cause the
business to hire more skilled workers with special training.
</h5></div><h5 id='q25'>25. Pat was listening to the training lecture, but there was a part of the lecture that he did not understand. Pat
asked the teacher to clarify that point. Pat is practicing which kind of behavior?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Avoidance</option><option value="B">B. Offensive</option><option value="C">C. Verbal, assertive</option><option value="D">D. Nonverbal, assertive</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is C: Verbal, assertive</h5><h5>Verbal, assertive behavior is a confident attitude that involves the use of words, such
as speaking up when you don't fully understand something or asking questions to get information.
Nonverbal, assertive behavior is a confident attitude expressed through body language. Avoidance
behavior is conduct with the goal of avoiding conflict at any cost. Offensive behavior is anything that
causes others to feel discomfort, embarrassment, or anger.
</h5></div><h5 id='q26'>26. People who value and appreciate the differences in others usually</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. avoid each other.</option><option value="B">B. argue about politics.</option><option value="C">C. work well together.</option><option value="D">D. live in the same area.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: work well together.</h5><h5>Valuing the differences in others helps people get along and work well together. They
understand the differences and appreciate them. Arguing about politics is a common characteristic
among all people and is not limited to those with different backgrounds. People who value the differences
in others do not avoid them. Valuing the differences in others does not depend upon living in the same
area.
</h5></div><h5 id='q27'>27. In every work environment, employees need to rely on one another for various reasons. This means that
these workers are</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. interdependent.</option><option value="B">B. independent.</option><option value="C">C. interrelated.</option><option value="D">D. dependable.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: interdependent.</h5><h5>People who depend upon one another are interdependent, rather than independent.
They may or may not be dependable, or reliable. They would not be interrelated or related to each other.
</h5></div><h5 id='q28'>28. After Mrs. Green provided the cashier with $2.50 in cash and coins, she left the grocery store with a
gallon of milk. In this situation, money is being used as a</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. bartering mechanism.</option><option value="B">B. store of wealth.</option><option value="C">C. negotiating tool.</option><option value="D">D. medium of exchange.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: medium of exchange.</h5><h5>A medium of exchange is something of value that can be used to obtain goods and
services. Money is a common form of exchange. Individuals, businesses, and governments use money to
purchase the products (e.g., milk) they need. When money is saved rather than spent, it is functioning as
a means of accumulating wealth. Negotiating is the process of resolving a disagreement. Bartering
involves trading one good or service for another good or service.
</h5></div><h5 id='q29'>29. Which of the following is a type of credit card that can be used to make purchases from a variety of
participating businesses:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Hotel</option><option value="B">B. Retail store</option><option value="C">C. Bank</option><option value="D">D. Petroleum</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is C: Bank</h5><h5>Bank credit cards can be used at any business that is affiliated with the system. This gives
cardholders a wide range of businesses from which to choose. Retail store, hotel, and petroleum cards
are issued by individual companies and may be used only at their facilities.
</h5></div><h5 id='q30'>30. Individuals can verify the accuracy of their credit histories by reviewing a ____________ that is obtained
from a ___________.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. credit certificate, credit union</option><option value="B">B. bank statement, financial institution</option><option value="C">C. lending statement, tax agency</option><option value="D">D. credit report, credit bureau</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: credit report, credit bureau</h5><h5>Because businesses often base their decisions about extending credit or
providing a loan on credit history, it is important for individuals and businesses to periodically check and
ensure that their credit information is accurate. Credit history is provided in the form of a credit report. By
reviewing the credit report, individuals and businesses can determine if there are any problems (e.g.,
identity theft) or discrepancies on the report that need resolved. Credit reports are available through
recognized credit bureaus or agencies, which maintain files of credit information on individuals and
businesses. Credit histories are not documented on bank statements, lending statements, or credit
certificates. The primary purpose of financial institutions, tax agencies, and credit unions is not to
maintain comprehensive credit histories for individuals and businesses.
</h5></div><h5 id='q31'>31. Which of the following is a possible consequence of having one's identity stolen:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Need for new identity</option><option value="B">B. Damage to credit history</option><option value="C">C. Unemployment</option><option value="D">D. Homelessness</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: Damage to credit history</h5><h5>If steps are not immediately taken to rectify any damages caused by identity
theft, the victim of the theft could spend years trying to rebuild his/her credit and savings. If one's identity
is stolen, s/he will not need to get a new identity. Unemployment and homelessness are not results of
having one's identity stolen.
</h5></div><h5 id='q32'>32. Which of the following is a way that businesses often use the information provided by the accounting
department:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. To prepare work orders</option><option value="B">B. To hire additional staff</option><option value="C">C. To organize inventory</option><option value="D">D. To monitor procedures

</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: To hire additional staff</h5><h5>Managers use accounting information in making effective financial decisions
involved in carrying out such management functions as staffing. For example, managers responsible for
staffing may decide not to hire additional staff if the accounting information they receive shows the
business's profits have decreased. However, positive accounting information might help managers
decide to hire additional staff because profits have increased. Businesses do not use the information
provided by the accounting department to prepare work orders, monitor procedures, or organize
inventory.
</h5></div><h5 id='q33'>33. Which of the following is one of the main components of an income statement:</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Liabilities</option><option value="B">B. Assets</option><option value="C">C. Taxes</option><option value="D">D. Revenue</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: Revenue</h5><h5>Revenue is the money received by resource owners and by producers for supplying goods and
services to consumers. Revenue is an important component of an income statement because it indicates
the total amount of money a business earns from all sources such as sales, interest, and dividends. A
business's revenue should exceed its expenses in order for the business to make a profit. Taxes are
calculated on the net income determined by the income statement. Assets are anything of value that a
business owns. Liabilities are debts that a business owes.
</h5></div><h5 id='q34'>34. Which of the following is a characteristic of groupthink that may hinder ethical decision making in relation
to financial issues:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Independence</option><option value="B">B. Objectivity</option><option value="C">C. Censorship</option><option value="D">D. Empathy</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: Censorship</h5><h5>Although collaboration and cooperation among individuals can be used to achieve a
common goal, groupthink conditions can be detrimental to ethical decision making. Groupthink is an
extreme form of cohesiveness in which all members of the group strive for unanimity (harmony) at any
cost. This condition stifles independent thinking and objectivity. Group members who question another
member's idea or action may be censored or cut off by the group majority. In addition, individuals begin
to self-censor, which means they quiet their own conflicting thoughts for the "good of the group."
Groupthink can erode personal ethics and lead group members to do things they normally wouldn't do. In
today's competitive business environment, the pressure to earn high profits has often resulted in
fraudulent behavior, embezzlement, money laundering, etc. Such actions are often a result of groupthink
conditions. Empathy is the ability to place oneself in another person's place or circumstances. Empathy is
not a characteristic of groupthink, which embraces harmonious or like-minded thinking.
</h5></div><h5 id='q35'>35. An important function of human resources management in business is</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. employee recruitment.</option><option value="B">B. capital investment.</option><option value="C">C. domain development.</option><option value="D">D. social media.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: employee recruitment.</h5><h5>Human resources management is the process of planning, staffing, leading, and
organizing the employees of the business. An important aspect of the human resources function is
seeking out and attracting qualified potential employees, which is employee recruitment. capital
investment, domain development, and social media are not primary activities of the human resources
function in business.
</h5></div><h5 id='q36'>36. Analyzing relevant marketing information can help a tour company make favorable business decisions,
which may provide the tour company with</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. guaranteed recognition.</option><option value="B">B. quality assurance.</option><option value="C">C. a balance of trade.</option><option value="D">D. a competitive advantage.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: a competitive advantage.</h5><h5>When a tour company acquires up-to-date, relevant marketing information from
reputable sources, it can make thoughtful business decisions and take action to offer new travel
products, increase its profits, and gain market share. A tour company that takes steps to increase its
market share may gain a competitive advantage, which is the edge achieved by the business for offering
something better or different from its competitors. Quality assurance is the process by which a business
achieves its desired level of quality. Balance of trade is the difference between the value of a nation's
exports and its imports. Although favorable business decisions should provide the business with more
brand recognition, recognition is not guaranteed.
</h5></div><h5 id='q37'>37. The Majestic Resort and Conference Center sent an online survey to former guests to obtain feedback
about their satisfaction levels with the facility and its services. What type of information did the resort
collect?</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Secondary</option><option value="B">B. Supportive</option><option value="C">C. Preparatory</option><option value="D">D. Primary</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: Primary</h5><h5>Primary information is information collected for the purpose at hand. Because the resort
collected feedback for a specific purpose—to obtain its former guests' opinions about its facility and
services—it is primary information. Secondary information is information that has already been collected
for other purposes. There is not enough information provided to determine if the feedback was collected
to support a theory or hypothesis or if the feedback was collected as a preliminary or preparatory step for
a larger project.
</h5></div><h5 id='q38'>38. Which of the following is an example of a regulatory issue that may impact the hospitality and tourism
industry:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Natural disaster</option><option value="B">B. Tax change</option><option value="C">C. Unemployment rate</option><option value="D">D. Terrorism alert</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: Tax change</h5><h5>Governments that raise hotel or sales tax rates can affect a region's hospitality and tourism.
If the tax rates are too high, vacationers or tourists are more likely to travel to destinations that have
lower tax rates, which will reduce their travel expenses. Natural disasters (e.g., hurricanes) and the
unemployment rate are economic factors that can affect the hospitality and tourism industry. Terrorism is
a political factor.
</h5></div><h5 id='q39'>39. Determine the percentage of international visitors for a tourist destination's peak season if the total
market is 750,500, and the number of domestic tourists who visit the destination during peak season is
562,875.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. 30%</option><option value="B">B. 25%</option><option value="C">C. 20%</option><option value="D">D. 15%</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: 25%</h5><h5>It is important for hospitality and tourism businesses and organizations to measure and analyze the
composition of various markets to determine how to best market their services to different market
segments. The businesses or organizations' objectives, the market segment's demographics, and the
size of the market segment affect how much money they will allocate to various marketing activities for a
particular market segment. To determine the percentage size of the international market during peak
season, first divide the number of domestic tourists during peak season by the total market to obtain the
percentage of domestic visitors during peak season (562,875 ÷ 750,500 = .75 or 75%). Then, subtract
the percentage of domestic visitors during peak season by the total market to obtain the percentage of
international visitors during peak season (100 % - 75% = 25%).
</h5></div><h5 id='q40'>40. A resort is conducting telephone interviews with former guests to determine how it can improve its
services. How can the resort minimize interviewer bias and procedural errors during the interview
process?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Ask only close-ended questions</option><option value="B">B. Provide the interviewers with training</option><option value="C">C. Allow interviewers to develop their own sets of questions</option><option value="D">D. Limit the length of the interview to five minutes</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: Provide the interviewers with training</h5><h5>It is important for hospitality businesses (e.g., resorts) to train
interviewers to ask the appropriate questions in the appropriate manner. Training helps to reduce the
risks associated with interviewer bias and error, which can affect the interviewees' answers. Asking only
close-ended questions will not provide in-depth, qualitative feedback. Limiting the length of the interview
and allowing the interviewers to develop and ask their own questions can negatively affect the integrity of
the information the interviewers collect.
</h5></div><h5 id='q41'>41. Which of the following is research information that might be included in a written report that will help
business managers make decisions:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Product announcements</option><option value="B">B. Survey results</option><option value="C">C. Brand names</option><option value="D">D. Committee notes</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Survey results</h5><h5>The research process often involves surveying customers or vendors to find out how they
feel about the company and its products. The survey results are often included in a written report to
support the report findings and the recommendations. The survey results are research information that
will help business managers make decisions because the surveys ask questions that usually pertain to a
specific problem or issue that the managers are considering. Product announcements, brand names, and
committee notes are not types of research information that would be included in a written report to help
business managers make decisions.
</h5></div><h5 id='q42'>42. What should you talk about first when presenting research findings orally?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Description of participants and how they were selected</option><option value="B">B. Overview of others' work on the research topic</option><option value="C">C. Problem/issue being addressed</option><option value="D">D. Graphs depicting main findings

</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: Problem/issue being addressed</h5><h5>There is a logical sequence for presenting research orally. The
presenter needs to first discuss why the study was conducted. This involves explaining the
problem/issue. The researcher then moves on to explain what was done, what was found out, and what
is recommended.
</h5></div><h5 id='q43'>43. By involving customers on a personal level and creating a feeling of ownership, business employees
often are able to motivate customers to</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. participate in a demonstration.</option><option value="B">B. decide to buy.</option><option value="C">C. handle a product.</option><option value="D">D. pay a higher price.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: decide to buy.</h5><h5>Information is one of the functions of relative prices. Economic incentives are
monetary motivators that encourage producers to change and reallocate their resources. In our economy,
these incentives are profit. Rationing is a function of relative prices that determines who gets the goods
and services produced or how scarce resources will be distributed. Limited liability is a condition in which
business owners risk only the amount of their investment.
</h5></div><h5 id='q44'>44. Which of the following is a characteristic of travel and tourism marketing:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Precise</option><option value="B">B. Controllable</option><option value="C">C. Variable</option><option value="D">D. Standard</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is C: Variable</h5><h5>Travel and tourism marketing involves the marketing of services to customers who participate in
producing and experiencing the services. As a result, the service varies for each customer. For example,
one person's experience with an escorted tour might be completely different from another person's
experience. Furthermore, the way the service is marketed varies depending on the target market. For
example, a travel agency might market a luxury cruise to senior citizens and a Disney cruise to families
with young children. Consequently, the marketing varies, and the outcome is often unpredictable. It is not
a precise, controllable, or standard process because of the many variables.
</h5></div><h5 id='q45'>45. A purpose of keeping a hotel's guest-history records up-to-date is to</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. control expenses.</option><option value="B">B. reduce advertising needs.</option><option value="C">C. identify a target market.</option><option value="D">D. improve housekeeping.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: identify a target market.</h5><h5>Many hotels maintain guest-history records from information guests provide on
their registration cards. When these records are kept up-to-date, the hotel has an accurate profile of its
target market to whom it can send promotional materials. This does not reduce the need for advertising
or control the hotel's expenses. Housekeeping may be improved if guest complaints are recorded and
acted upon, but that is not a purpose of guest records.
</h5></div><h5 id='q46'>46. Which of the following is a true statement about a management information system (MIS):</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. It includes people, processes, and practices.</option><option value="B">B. It is the same thing as an information management program.</option><option value="C">C. It does not assist with a business's information management program.</option><option value="D">D. It may be one part of a business's overall information management program.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: It may be one part of a business's overall information management program.</h5><h5>A management information
system (MIS) is a form of technology that assists with a business's information management needs. It is
not the same thing as an information management program; however, it may be one part of an overall
information management program. An MIS is just hardware and software, but an overall information
management program involves people, processes, and practices.
</h5></div><h5 id='q47'>47. When a business uses computer technology to manage its money and move it among different accounts,
it is taking advantage of</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. electronic data interchange.</option><option value="B">B. hardware.</option><option value="C">C. expert systems.</option><option value="D">D. electronic transfer of funds.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: electronic transfer of funds.</h5><h5>When a business uses computer technology to manage its money and move
it among different accounts, it is taking advantage of the electronic transfer of funds. This is the same
technology you use at the ATM. Hardware refers to the physical components of a computer. Expert
systems are software programs that mimic the knowledge of human experts. Electronic data interchange
refers to documents rather than money.
</h5></div><h5 id='q48'>48. Which of the following types of software programs would an employee use to prepare a form letter
informing the company's clients of a change in product pricing:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Word processing</option><option value="B">B. Spreadsheet</option><option value="C">C. Presentation</option><option value="D">D. Database</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Word processing</h5><h5>Word-processing software programs are used to create documents that are primarily
text but may contain some graphics. Database and spreadsheet programs are used to organize and
analyze different types of data. Presentation software programs are used to develop visual presentations.
</h5></div><h5 id='q49'>49. A benefit to a business that uses collaborative computer software is that it enables the employees to</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. search the Web.</option><option value="B">B. share information quickly.</option><option value="C">C. prepare written reports.</option><option value="D">D. develop keyboarding skills.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: share information quickly.</h5><h5>Collaborative computer software allows many employees to access and share
the same business information. Some applications, such as e-mail, allow employees to instantly transmit
messages and business documents to coworkers who are traveling or working in other facilities, which
can facilitate a quick response. By sharing information quickly, employees can take immediate action and
then proceed to work on other tasks. Businesses do not use collaborative computer software to enable
employees to search the Web, prepare written reports, or develop keyboarding skills.
</h5></div><h5 id='q50'>50. While conducting an environmental scan, a convention bureau obtained information revealing that
consumer confidence was gaining strength in the nation. This is an example of a(n) __________ factor.</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. technological</option><option value="B">B. demographic</option><option value="C">C. economic</option><option value="D">D. political</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: economic</h5><h5>An environmental scan is an analysis of external forces that influence a business's success.
By examining political, economic, socio-cultural, and technological factors that affect it, the business can
take steps to ward off threats and to take advantage of opportunities based on the information that the
scan provides. Economic factors provide information about the way a country earns and spends its
money. Information that reveals information about consumer spending habits is an economic factor.
Political factors that a business might examine include changes in regulations and the laws that govern
how the business operates. Information about demographics or lifestyles falls into the socio-cultural
category. Technological factors often include information about advancements in technology, such as
computers and satellites.
</h5></div><h5 id='q51'>51. What is a benefit to a tour operator who makes business decisions of analyzing statistical information?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Lower outputs</option><option value="B">B. Lower demand</option><option value="C">C. Increased competition</option><option value="D">D. Improved performance</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: Improved performance</h5><h5>Statistics are information presented in numerical form. Businesses analyze and
interpret statistics to make various business decisions. By analyzing statistical information, a tour
operator might determine ways in which to improve sales, productivity (higher outputs), or overall
performance in order to compete more effectively in the marketplace. Lower demand, increased
competition, and lower outputs do not benefit tour operators.
</h5></div><h5 id='q52'>52. A current trend is social networking sites. How are many businesses in the hospitality and tourism
industry using their social networking sites?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. To notify travelers of flight cancellations</option><option value="B">B. To match travelers with others who have similar interests</option><option value="C">C. To book travelers' upcoming trips</option><option value="D">D. To provide a way for travelers to share their experiences</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: To provide a way for travelers to share their experiences</h5><h5>The Internet has provided a mechanism for
satisfied and unsatisfied customers to tell others about their experiences with a business. The comments
of other customers are viewed as more credible statements than advertisements from the business.
Therefore, travel and tourism businesses are providing this forum so that satisfied customers can spread
the good word, while the problems identified can be addressed and corrections made, if needed.
Hospitality and tourism businesses are not using social networking to connect travelers with similar
interests, to book travelers' upcoming trips, or to notify travelers of flight cancellations.
</h5></div><h5 id='q53'>53. Maintenance and repairs is an operations activity that includes</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. product inspection.</option><option value="B">B. production planning.</option><option value="C">C. custodial work.</option><option value="D">D. financial analysis.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: custodial work.</h5><h5>Good leaders generally plan and
organize their work, but that is not what makes them good leaders. Analyzing employee productivity is
often a responsibility of leaders rather than a personality trait. Displaying empathy by feeling what others
are feeling is a desirable personality trait but does not indicate leadership.
</h5></div><h5 id='q54'>54. Employees who witness noninjury accidents should __________ them.</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. ignore</option><option value="B">B. discuss</option><option value="C">C. treat</option><option value="D">D. report

</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: report

</h5><h5>Explanation not available</h5></div><h5 id='q55'>55. One part of a project often needs to be completed before another part can begin, which makes it
important for a project manager to</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. seek input.</option><option value="B">B. track deadlines.</option><option value="C">C. recruit staff.</option><option value="D">D. develop options.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: track deadlines.</h5><h5>Meeting deadlines is an important part of successfully completing a project. Project
managers need to track deadlines because one part of a project often needs to be completed before
another part can begin. For example, a location must be selected before an event can take place. If the
deadlines are not met, the project cannot proceed. Project managers do not necessarily need to seek
input, recruit staff, or develop options because one part of a project needs to be completed before
another part can begin.
</h5></div><h5 id='q56'>56. What is the most important factor for a west-coast business to consider if it plans to use a supplier who is
located in the same country on the east coast?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Delivery timeliness</option><option value="B">B. Personnel policies</option><option value="C">C. Exchange rates</option><option value="D">D. Return on sales</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: Delivery timeliness</h5><h5>When selecting a supplier, businesses must consider delivery timeliness. The
business must ask if the supplier can deliver the goods when they are needed. In some situations, it may
be better for a business to use a supplier who may be a little more expensive, but in closer physical
proximity of the business, if that supplier can consistently meet delivery requirements. Personnel policies
are guidelines for employees' behavior in the workplace. The exchange rate is the value of one nation's
currency in relation to another nation's currency. Return on sales or target return is a profit-oriented
pricing objective in which the business bases the amount of profit it wants to earn on the amount of its
sales.
</h5></div><h5 id='q57'>57. One of the benefits of production to consumers is that production</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. provides a way to earn profits.</option><option value="B">B. creates form utility.</option><option value="C">C. makes use of automation.</option><option value="D">D. provides a way to be competitive.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: creates form utility.</h5><h5>One of the benefits of production is that it creates form utility—usefulness created by
altering or changing the form or shape of a good to make it more useful to the consumer or user. Without
production, many resources would be of little use to consumers. All of the other alternatives are benefits
of production to businesses, not consumers.
</h5></div><h5 id='q58'>58. Housekeeping responsibilities in a business include making sure that the</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. customer area is orderly.</option><option value="B">B. employees come to work on time.</option><option value="C">C. safety rules are obeyed.</option><option value="D">D. records are properly kept.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: customer area is orderly.</h5><h5>Housekeeping duties include returning equipment/supplies to the correct
location, wiping up dust, arranging stock, and keeping the cashier's area in good order. Making sure that
records are properly kept and employees get to work on time or obey safety rules are supervisory
responsibilities not related to housekeeping.
</h5></div><h5 id='q59'>59. When handling cleaning chemicals, hotel housekeeping attendants should</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. complete a purchase order when inventory is low.</option><option value="B">B. avoid direct skin contact and wear disposable gloves.</option><option value="C">C. avoid using eye goggles or ventilation masks.</option><option value="D">D. keep a log of ingredients found in the cleaning materials.</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: avoid direct skin contact and wear disposable gloves.</h5><h5>To protect from bacteria transmission and skin
irritation, hotel housekeeping attendants should wear disposable gloves when using cleaning chemicals.
Housekeeping attendants generally alert their manager when cleaning-chemical inventory is low and do
not complete the purchase order. When mixing or using toxic or strong cleaning chemicals, eye goggles
or ventilation masks may need to be used. It is not necessary for attendants to keep a log of ingredients
found in the cleaning materials; the ingredients are listed on the cleanser storage containers.
</h5></div><h5 id='q60'>60. What procedure do many businesses tell their employees to follow during a robbery?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Turn off the alarms</option><option value="B">B. Call the police</option><option value="C">C. Hide the cash</option><option value="D">D. Obey the demands</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Obey the demands</h5><h5>Most robbers are interested only in obtaining cash and leaving the business as
quickly as possible so as not to be identified. Business employees should obey the robber's demands
and be cooperative in order to avoid a situation that might result in violence. The employees should
consider their own personal safety first because the business probably carries insurance for such events.
It may be impossible for employees to call the police or adjust the alarm system during a robbery without
putting themselves in danger. They should obey the robber's demand rather than try to hide the cash.
</h5></div><h5 id='q61'>61. Security considerations are important in the travel and tourism industry because tourists are often</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. targets of crime.</option><option value="B">B. looking for trouble.</option><option value="C">C. prone to injury.</option><option value="D">D. part of a group.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: targets of crime.</h5><h5>Tourists are often easy to identify because of the way they dress and behave and
because of the sites and attractions they visit. For example, tourists in certain parts of the world are
easily recognized because they do not look like the local people, and they do not speak the language.
Furthermore, the perception often is that tourists carry a lot of money and are not particularly careful.
Also, tourists may not be aware of high-crime districts and accidentally walk into those areas. All of these
factors set up tourists as targets of crime. As a result, the travel and tourism industry stresses security
and tries to prepare tourists for possible problems. For example, tour operators may point out areas of
cities that the group should avoid, or cruise ships might tell passengers to use only certain taxis in ports
of call. Tourists are not looking for trouble, nor are they any more prone to injury than other people. Many
tourists travel only with family members rather than as part of a group.
</h5></div><h5 id='q62'>62. The relationship between recreation and good health is that recreation is</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. of minimal benefit to health.</option><option value="B">B. essential to good health.</option><option value="C">C. considered a luxury.</option><option value="D">D. unrelated to one's health.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is B: essential to good health.</h5><h5>Recreational activities help us to get away from life's frustrations and tensions
and to relax. It is beneficial to mental, physical, and emotional health when people regularly enjoy some
form of recreation. Recreation is not a luxury and may be as simple as taking a walk.
</h5></div><h5 id='q63'>63. Which of the following is considered a "stepping stone" toward achieving a specific objective:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Subgoal</option><option value="B">B. A want</option><option value="C">C. Long-term goal</option><option value="D">D. Unlimited resources</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: Subgoal</h5><h5>A subgoal is a lesser goal that must be achieved in order to reach the main goal. A want is a
desire. A long-term goal is one that takes more than a year to achieve. Few, if any, people have unlimited
resources but must use the resources available to them in order to achieve their goals.
</h5></div><h5 id='q64'>64. Most businesses today are looking for employees who have at least basic __________ skills.</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. management</option><option value="B">B. accounting</option><option value="C">C. computer</option><option value="D">D. legal</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is C: computer</h5><h5>Today, most businesses expect employees to have at least basic computer skills because
many business functions and activities involve the use of computers. Businesses communicate with
employees, customers, and vendors by e-mail. Many businesses have web sites and offer online
ordering. As a result, most employees need to know how to use a computer even if only to send an
e-mail or to access a competitor's web site. Accounting, management, and legal skills are more
specialized. Therefore, most employees are not expected to have these skills.
</h5></div><h5 id='q65'>65. One way that an applicant can indicate a sincere interest in the job during an employment interview is to</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. speak loudly.</option><option value="B">B. talk constantly.</option><option value="C">C. listen attentively.</option><option value="D">D. answer quickly.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: listen attentively.</h5><h5>Listening attentively during an employment interview is very important because it
allows the applicant to completely understand questions before answering. Listening attentively also tells
the interviewer that the applicant is sincerely interested in the job and wants to learn as much as possible
in order to respond appropriately. Answering quickly, talking constantly, and speaking loudly might
indicate that the applicant is nervous or unprepared for the interview rather than sincerely interested in
the job.
</h5></div><h5 id='q66'>66. Does the hospitality and tourism industry offer career opportunities for entrepreneurs?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. No. Businesses in the hospitality and tourism industry are too large for start-up businesses.</option><option value="B">B. No. Businesses in the hospitality and tourism industry are franchises.</option><option value="C">C. Yes. Businesses in the hospitality and tourism industry can start small and expand.</option><option value="D">D. Yes. Businesses in the hospitality and tourism industry are started with state funding.

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: Yes. Businesses in the hospitality and tourism industry can start small and expand.</h5><h5>There are lots of
opportunities for people to dream and actualize those dreams when they open their businesses. Not all
hospitality and tourism businesses start out as large companies—many are one-person operations and
are not part of a franchise. Most hospitality and tourism businesses are started with the owner's debt or
equity financing rather than with state funding.
</h5></div><h5 id='q67'>67. Which of the following is one of the main reasons why businesses participate in trade shows:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. To visit new locations</option><option value="B">B. To attend social functions</option><option value="C">C. To promote community events</option><option value="D">D. To exhibit their products</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: To exhibit their products</h5><h5>A trade show is an exhibition at which businesses display their products. One of
the main reasons why businesses participate in trade shows is to exhibit their goods and services to
potential buyers. Businesses develop attractive displays and provide information to show attendees to
generate sales contacts. Businesses do not participate in trade shows in order to attend social functions,
to promote community events, or to visit new locations.
</h5></div><h5 id='q68'>68. Lisa is opening a new bed and breakfast and might benefit from joining a hospitality trade association
because she can</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. network with others who have expertise in the industry.</option><option value="B">B. earn a college degree and become a certified hotelier.</option><option value="C">C. obtain credit to purchase equipment for the business.</option><option value="D">D. discuss personal business with her colleagues.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: network with others who have expertise in the industry.</h5><h5>A trade association is a group of persons in the
same industry or geographic area who form a society to solve their common problems. Because Lisa is a
business owner, she might join a hospitality and tourism trade association to network with others who
work in the hospitality and tourism industry. By networking with others who have expertise in that
industry, Lisa has an opportunity to get ideas that will help her business grow. She may also get advice
about how to solve problems and deal with difficult issues that occur in the industry. Although some trade
associations provide certification, they are not a means to earn a college degree. A trade association
might help Lisa locate financial sources, but it would not extend credit to her so she can purchase
equipment. As a business owner, the primary reason Lisa should join a trade association is to discuss
professional business with colleagues rather than personal issues.
</h5></div><h5 id='q69'>69. Which of the following statements is true about price in the hospitality industry:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Rates are consistent and do not vary more than five percent from those of a property's direct
competitors.</option><option value="B">B. Hotel room prices vary and depend on many factors, such as supply and demand.</option><option value="C">C. Most hotels provide conventions the same discounted room rates regardless of group size.</option><option value="D">D. Lodging businesses often base price on operating costs, which requires minimal management.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: Hotel room prices vary and depend on many factors, such as supply and demand.</h5><h5>Rates (price) change
and vary greatly in the hospitality industry. When demand is high, such as during certain seasons, the
rates tend to be higher. The facility location, the room size, the room type, and the type of guest the
facility attracts also affect the room rates. Members of groups, conventions, and organization affiliations
(e.g., AAA) often obtain discounts from hotels. Travelers who regularly frequent a specific hotel receive
discounts. Therefore, price varies and is affected by the demand for and supply of rooms at any given
time. Because rates change often, hotels must manage the price function carefully. Rates can vary
greatly among hotels at any given time. Convention groups' needs vary, and the hotel facility works with
each group to negotiate rates.
</h5></div><h5 id='q70'>70. Which of the following is an example of developing new products:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Marketing specialty products</option><option value="B">B. Modifying existing products</option><option value="C">C. Manufacturing convenience goods</option><option value="D">D. Merchandising retail goods</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: Modifying existing products</h5><h5>Developing new products often is an ongoing process that involves
modifying existing products in some way. Modifications might include making a product more powerful,
changing the color of a product, or creating a slightly different version of a product. For example, a
company that adds frosting to a basic cereal is developing a new product by modifying an existing
product. Marketing specialty products, manufacturing convenience goods, and merchandising retail
goods are not examples of developing new products.
</h5></div><h5 id='q71'>71. When people think of Disney World, they know that it's the happiest place on earth; a place where
dreams really do come true. The place that Disney World's image occupies in people's minds is known
as its</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. trade character.</option><option value="B">B. product position.</option><option value="C">C. brand name.</option><option value="D">D. touch points.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: product position.</h5><h5>Disney has used its marketing skills to position the theme park as the happiest place on
earth and a place where dreams really do come true. Marketing activities, employee behavior, and the
entire Disney World environment are designed to support and reinforce that image in people's minds.
Touch points are the opportunities that Disney has to interact with its customers. Brand name is a special
name or mark that is used to distinguish products from each other. A trade character is a person, animal,
or animated character used in advertising and is associated with a product or company.
</h5></div><h5 id='q72'>72. What is one way that a gift shop can identify the goods that its customers want and need?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Ask salespeople</option><option value="B">B. Analyze economy</option><option value="C">C. Monitor spending</option><option value="D">D. Interview management</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: Ask salespeople</h5><h5>Salespeople are an excellent source of information as to what customers want and
need. Salespeople deal with customers daily and know what they are buying and why. When determining
what goods to buy, a gift shop should obtain input from the salespeople who have direct contact with
customers and are in touch with what is currently selling. Analyzing the economy and monitoring
spending would provide information about customers' financial ability to buy. Management is often
removed from direct contact with customers and would not likely have firsthand information.
</h5></div><h5 id='q73'>73. Which of the following is a factor that cruise lines consider when deciding when to buy new linens and
towels:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Annual rate of consumption</option><option value="B">B. Relationship with vendors</option><option value="C">C. Style of passenger cabin</option><option value="D">D. Preferences of passengers</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: Annual rate of consumption</h5><h5>The annual rate of consumption refers to the quantity that must be replaced
each year because of loss or damage. Cruise lines calculate the average amount of linens and towels
that must be replaced over a period of a year. Because these items wear out or are lost throughout the
year, cruise lines often set up schedules for buying. For example, a cruise line might place an order every
quarter to make sure new linens and towels are available when needed. The preferences of passengers
might have an effect on the type and quality of linens and towels that a cruise line buys. The cruise line's
relationship with vendors might have an effect on the price of goods and delivery date. The style of
passenger cabin might have an effect on the quality of the items.
</h5></div><h5 id='q74'>74. What characteristic of the hospitality and tourism product is described in the following scenario:
If an airline sells 150 of 200 seats on an airplane, the airline cannot inventory the seats until the next
flight and sell 250 seats.</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Perishability</option><option value="B">B. Seasonality</option><option value="C">C. Standardization</option><option value="D">D. Inseparability</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: Perishability</h5><h5>If the 50 seats on the airplane go unsold, they are lost forever because they cannot be
stockpiled or inventoried for a later flight. Inseparability refers to the need for the customer and service
provider to be present for the service to be performed—the service provider cannot be separated from
the service. Although businesses train employees to provide the same quality of outstanding service, in
effect attempting to standardize the service provided, services are performed by people whose
personalities, attitudes, and abilities vary. Many hospitality and tourism services are seasonal, the
scenario does not relate to that characteristic.
</h5></div><h5 id='q75'>75. Which of the following is an example of a travel agent providing a product extension to customers:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Booking an all-inclusive trip to Mexico</option><option value="B">B. Making reservations with a scheduled airline</option><option value="C">C. Selling a cruise and a city tour before departure</option><option value="D">D. Arranging a motor-coach tour through the mountains</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is C: Selling a cruise and a city tour before departure</h5><h5>A product extension is an additional product related to,
but different than, the main travel product. Travel agents often provide these products as a service to
customers. For example, the main product in this situation is the cruise. If customers want to take a tour
of the port city before the cruise departs, a travel agent might arrange the tour as a product extension.
The product extension adds value to the original product and meets the needs of customers. In the other
examples, the travel agent is providing only the main travel product.
</h5></div><h5 id='q76'>76. Which of the following best enables marketers to target specific groups of customers so that the
marketers can focus their promotional efforts to get the best results:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Advertising</option><option value="B">B. Direct marketing</option><option value="C">C. Publicity</option><option value="D">D. Sales promotion

7

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: Direct marketing</h5><h5>Direct marketing can be targeted to those customers who are most likely to buy.
Examples of direct marketing include e-mail marketing, telemarketing, mailshots, SMS, and social media.
Advertising, publicity, and sales promotion cannot be targeted to the extent of direct marketing.
</h5></div><h5 id='q77'>77. Which of the following is an example of how businesses are using advergaming:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Showing a product being used in a movie scene</option><option value="B">B. Featuring products on billboards in online games</option><option value="C">C. Running advertisements during a national sports game</option><option value="D">D. Using pop-up ads on a competitor's website</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Featuring products on billboards in online games</h5><h5>Advergaming is an online video game that promotes a
product, brand, or company by incorporating it into the game. There are a variety of ways in which
businesses are using advergaming. One such way is by featuring products on billboards that show up
during the game. Another popular advergaming technique is to feature a company's mascot or symbol in
a game. Showing a product being used in a movie scene is an example of product placement. Running
advertisements during a national sports game is an expensive use of advertising. Competitors would not
grant permission to use pop-up ads on their websites.
</h5></div><h5 id='q78'>78. One of the disadvantages to marketers of using streaming video e-mail is that it requires the recipient to
have a(n)</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. complicated operating system.</option><option value="B">B. sophisticated computer keyboard.</option><option value="C">C. high-speed Internet connection.</option><option value="D">D. cloud computing.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: high-speed Internet connection.</h5><h5>Streaming media are sound, video, or animations that play in real time.
E-mail is capable of delivering streaming media such as videos when the recipient opens the message or
clicks on a "play" button. For streaming video to work properly, the recipient needs a high-speed Internet
connection. Streaming media do not require the recipient to have cloud-computing capabilities, a
sophisticated computer keyboard, or a complicated operating system.
</h5></div><h5 id='q79'>79. To generate excitement about its newly remodeled facilities, Wilmer's Hotel plans to send advertising
messages to past guests via their cell phones. Each message will contain a brief video showcasing new
features and services that the hotel offers. Which type of mobile messaging service should Wilmer's use?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Digitized messaging services (DMS)</option><option value="B">B. Short messaging services (SMS)</option><option value="C">C. Complex messaging services (CMS)</option><option value="D">D. Multimedia messaging services (MMS)</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Multimedia messaging services (MMS)</h5><h5>Multimedia messaging services allow individuals and businesses
to send rich-media messages to cell phones. These messages may contain text, graphics, sound, and
video. Short messaging services also allow individuals and businesses to send messages via cell
phones, but SMS messages only contain text—not images or graphics. Since Wilmer's Hotel wants to
send brief videos in these messages to customers' cell phones, it needs to use the more sophisticated of
the two types of mobile messaging services—MMS. Complex messaging services and digitized
messaging services are fictitious terms.
</h5></div><h5 id='q80'>80. What type of illustrations often are used to create a sense of realism in advertisements?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Sketches</option><option value="B">B. Diagrams</option><option value="C">C. Photographs</option><option value="D">D. Trademarks</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: Photographs</h5><h5>Illustrations are photographs, drawings, paintings, or graphics such as a chart, table, or
graph. Photographs often are used to create a sense of realism in advertisements because photographs
are pictures of actual people, things, and events. In some cases, a photograph showing people using a
certain product in a specific way helps to sell the product because consumers can associate with the real
situation. Diagrams, sketches, and trademarks are not types of illustrations that are used to create a
sense of realism in advertisements.
</h5></div><h5 id='q81'>81. The type styles used in advertisements often are selected because they are</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. condensed.</option><option value="B">B. distinctive.</option><option value="C">C. lowercase.</option><option value="D">D. italicized.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: distinctive.</h5><h5>Certain type styles are more distinctive and unusual than others. In many cases, the type
styles used in advertisements are selected because they stand out and are distinctive. The intent is to
attract the readers' attention and encourage them to continue reading. Often, distinctive type styles are
used in headlines to set one advertisement apart from all of the others. Most type styles are available in
both a condensed and an italicized form. All type styles include lowercase letters. However, the style is
used because it is distinctive.
</h5></div><h5 id='q82'>82. Which of the following is an impact of color harmonies on the composition of a print ad:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Emphasizes the advertiser's logo</option><option value="B">B. Creates informal balance</option><option value="C">C. Develops logical sequence</option><option value="D">D. Highlights specific element</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: Highlights specific element</h5><h5>Color is an important part of the composition of a print ad. The various colors
in an ad need to go together, or be in harmony, for the ad to be visually appealing. In some cases, one
color is used to highlight a specific element of the ad such as the business's name which is associated
with a specific color. However, the other colors in the ad need to be in harmony with the highlight color.
For example, shades of brown and white go well with a highlight color of orange. Color harmonies in a
print ad do not create informal balance, develop logical sequence, or always emphasize the advertiser's
logo.
</h5></div><h5 id='q83'>83. What is a good tip to follow when developing effective copy for mobile advertisements?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Keep it short</option><option value="B">B. Make it vague</option><option value="C">C. Use symbols</option><option value="D">D. Include coupons</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: Keep it short</h5><h5>Because mobile advertisements are displayed on cell phones, it is important to keep the
message short and direct. If the message is too long, the intended audience is likely to delete the ad
without reading it. The use of symbols (e.g., an offer 4 u) in mobile ad copy depends on characteristics of
the target audience. For example, tech-savvy 16- to 25-year-olds are more likely to understand the use of
symbols than those who do not “text” or use technology on a regular basis. Coupons are a salespromotion technique.
</h5></div><h5 id='q84'>84. Which of the following Internet promotional messages for hair-care products would best appeal to men in
the 20-30-year-old age group:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. "Don't suffer from another bad-hair day when our hair-care products are available."</option><option value="B">B. “Cover the gray and look years younger in minutes with our shampoo.”</option><option value="C">C. "Only your barber will know it's a toupee that makes you look younger."</option><option value="D">D. "Get a free sample of Maxim Conditioner to maximize your hair's potential."</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: "Get a free sample of Maxim Conditioner to maximize your hair's potential."</h5><h5>Explanation not available</h5></div><h5 id='q85'>85. A business manager who made no changes on the advertising proof should write which of the following
on the proof:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Send another proof.</option><option value="B">B. Print as is.</option><option value="C">C. Print as corrected.</option><option value="D">D. Return to designer.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Print as is.</h5><h5>If there are no changes or corrections on an advertising proof, it should be marked to print as
is. This is the final stage in accepting the content and format of the advertisement before it goes to the
printer. Since there are no changes, the business manager would not request another proof. If there are
only a few minor changes, the business manager might mark the proof to be printed as corrected. The
proof would not be returned to the designer if there are no changes.
</h5></div><h5 id='q86'>86. Over the years, the Mayberry Theme Park has worked to develop its image as a safe place for kids. So,
which of the following community issues should you propose to an amusement park's public relations
director:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. An evening for fifth graders while their parents shop at the mall</option><option value="B">B. A block party for the surrounding neighborhood that will be held after the park closes at midnight</option><option value="C">C. A workshop to teach English to the community's non-English speaking new residents</option><option value="D">D. A wine-tasting event whose funds will support the local community college</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: An evening for fifth graders while their parents shop at the mall</h5><h5>This topic ties into the image of the park
being a safe place for kids. It will appeal to both fifth graders who ask to go to the theme park as well as
to their parents who pay for the theme-park visits. A midnight block party would be too late for children to
participate. An ESL workshop and wine-tasting do not relate to the park's image of a safe place for kids.
</h5></div><h5 id='q87'>87. Tony owns a charter fishing boat business on the Outer Banks of North Carolina. Which of the following
web sites would you recommend for Tony to place a pay-per-click advertisement:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. www.whitewaterrafting.net</option><option value="B">B. www.surfboardsusa.net</option><option value="C">C. www.redlobster.com</option><option value="D">D. www.obxbaitandtackle.com

</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: www.obxbaitandtackle.com

</h5><h5>Explanation not available</h5></div><h5 id='q88'>88. A travel agent who prepares a factual announcement and asks the media to present it free of charge to
the public is</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. setting up an advertising campaign.</option><option value="B">B. advertising the business.</option><option value="C">C. using a public relations agency.</option><option value="D">D. using a news release.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: using a news release.</h5><h5>A news release is a factual announcement sent to the media to be used as a news
item. Businesses use news releases so that they can inform the public about their operations without
having to pay a fee. A business that uses a public relations agency pays the agency to prepare the news
release. Advertising is any paid form of nonpersonal presentation of ideas, images, goods, or services.
</h5></div><h5 id='q89'>89. The best type of display for a hotel coffee shop to use to protect freshly baked desserts while still
promoting their sales is a(n) __________ display.</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. closed</option><option value="B">B. island</option><option value="C">C. open</option><option value="D">D. end cap</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: closed</h5><h5>The closed display case is usually made of glass and prevents the transfer of germs or the
possibility of theft while motivating customers to buy. Island, open, and end cap displays do not protect
freshly baked desserts.
</h5></div><h5 id='q90'>90. Since displays are a valuable selling tool, it is important that they should be</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. kept clean and well maintained.</option><option value="B">B. filled with informative signs.</option><option value="C">C. pointed out to customers.</option><option value="D">D. kept up as long as possible.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: kept clean and well maintained.</h5><h5>Once a display is in place, it is important to keep it looking as appealing
as possible in order to attract customers. This may involve dusting props, rearranging display items,
and/or replacing the products on display. A display should not be filled with informative signs and in some
cases will not need any signs. A well-executed display will attract customers and not need to be pointed
out to them. Displays should be changed after a reasonable length of time, not kept up as long as
possible or customers will lose interest in them.
</h5></div><h5 id='q91'>91. Why should a marketing specialist at a convention and visitors bureau want to track its promotional
activities?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. To determine the best time for shows to begin</option><option value="B">B. To determine the best ticket price to offer</option><option value="C">C. To determine its target market</option><option value="D">D. To determine their impact on sales</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: To determine their impact on sales</h5><h5>The marketing specialist needs to establish a baseline number on
whatever s/he wants to measure. And then, s/he needs to determine increases and decreases in that
baseline number when promotional activities appear. Ticket prices, target market, and show times would
not be impacted by promotional activities.
</h5></div><h5 id='q92'>92. In order to obtain positive publicity in the community, a local motor lodge might sponsor a(n)</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. employee orientation.</option><option value="B">B. advertising campaign.</option><option value="C">C. television show.</option><option value="D">D. charitable event.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: charitable event.</h5><h5>Positive publicity can improve the image of a motor lodge and encourage the local
people to use its services. Sponsoring a charitable event is one way that a local motor lodge can obtain
positive publicity and promote itself to the community. The good publicity will generate interest among
local residents and ultimately lead to increased sales. A motor lodge would not obtain publicity, which is
free, by sponsoring an advertising campaign or a television show for which it must pay. Employee
orientation is job preparation or induction training for new employees and does not generate publicity.
</h5></div><h5 id='q93'>93. Which of the following items would a travel agency display to promote travel to a Mexican beach
destination:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Sailboat model, sunscreen, Eiffel Tower poster, and sombrero</option><option value="B">B. Sunglasses, maracas, poster of Athens, and beach towel</option><option value="C">C. Sunscreen, brochures of the Bahamas, sunglasses, and maracas</option><option value="D">D. Sombrero, poster of Cancun, beach towel, and sunglasses</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sombrero, poster of Cancun, beach towel, and sunglasses</h5><h5>A travel agency that is running a special offer
for Mexican beach destinations is likely to display items that relate to the beach and to the Mexican
culture. Therefore, the travel agency is most likely to display “beach” items such as sunscreen,
sunglasses, beach towels, or even a model of a sailboat. It would also display items that relate to the
Mexican culture, such as maracas (hand-held shaking instrument), a sombrero (hat), and a poster of
Cancun, which is a popular beach destination in Mexico. Athens is a city in Greece, the Eiffel Tower is in
Paris, France, and the Bahamas are part of the Caribbean Islands. The travel agency would not display
materials for these destinations when it is promoting beach destinations in Mexico.
</h5></div><h5 id='q94'>94. Which of the following is a true statement about customers' buying decisions:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Only business customers use rational reasons for buying.</option><option value="B">B. Buying decisions are often a combination of emotional and rational reasons.</option><option value="C">C. Salespeople don't have the ability to influence buying decisions.</option><option value="D">D. Customers make the buying decision within the first minute of the sales presentation.</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Buying decisions are often a combination of emotional and rational reasons.</h5><h5>Often, customers' buying
decisions are based on both emotional and rational reasons. Individual customers as well as business
customers rely on rational reasoning. Salespeople have a great ability to influence customers' buying
decisions by recommending specific products. Customers don't necessarily make buying decisions within
the first minute of a sales presentation.
</h5></div><h5 id='q95'>95. When answering customers' objections, which of the following should the salesperson avoid:</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Empathizing with customers' objections</option><option value="B">B. Listening carefully to the objection</option><option value="C">C. Turning objections into selling points</option><option value="D">D. Answering as quickly as possible</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: Answering as quickly as possible</h5><h5>Instead, the salesperson should pause before answering objections
rather than rushing to answer. A salesperson should let customers say what they feel and listen carefully
to everything customers are saying. They should empathize with customers' feelings and appreciate their
point of view. Objections can often be turned into selling points, which are reasons to buy.
</h5></div><h5 id='q96'>96. After a party of six has finished the main course at a resort restaurant, the server brings over a tray of
pastries and asks which ones they would like for dessert. This is an example of which of the following
sales techniques:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Suggestion selling</option><option value="B">B. Feature-benefit selling</option><option value="C">C. Prospecting</option><option value="D">D. Follow-up</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: Suggestion selling</h5><h5>Analyzing the economy and monitoring
spending would provide information about customers' financial ability to buy. Management is often
removed from direct contact with customers and would not likely have firsthand information.
</h5></div><h5 id='q97'>97. Which of the following factors might make it difficult for a salesperson to sell a new product to a customer
who has been buying a competing product for many years:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Training</option><option value="B">B. Ethics</option><option value="C">C. Attitude</option><option value="D">D. Complaints</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: Attitude</h5><h5>A customer's attitude or feeling towards a certain product is usually developed through
experience over time. Attitudes are often difficult to change, particularly if a customer is not dissatisfied
with a current product. To change a customer's attitude, a salesperson must be able to convince the
customer that the new product has advantages and benefits not available in the competing product.
Ethics are the basic principles that govern a person's behavior. Training is developing a certain skill. A
complaint is a customer's expression of a dissatisfaction.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1077

HOSPITALITY AND TOURISM CLUSTER EXAM

1

1. One of the main functions of the legal procedure is to</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. After posting charges</option><option value="B">B. After posting credits</option><option value="C">C. During check-in</option><option value="D">D. During check-out

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: During check-out

</h5><h5>1077

HOSPITALITY AND TOURISM CLUSTER EXAM—KEY

17

31. B
Damage to credit history. If steps are not immediately taken to rectify any damages caused by identity
theft, the victim of the theft could spend years trying to rebuild his/her credit and savings. If one's identity
is stolen, s/he will not need to get a new identity. Unemployment and homelessness are not results of
having one's identity stolen.
</h5></div><h5 id='q99'>99. A hotel restaurant is offering lobster dinners for a special price of $22.99 for one week only. If a table of
four orders the dinners and two customers have coupons for a 15% discount on their dinners, calculate
the total cost for the table.</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. $91.96</option><option value="B">B. $78.16</option><option value="C">C. $87.26</option><option value="D">D. $85.06</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: $85.06</h5><h5>Many restaurants offer special prices on certain types of dinners to attract customers. Customers
order those dinners because they are priced lower than usual. If customers also have coupons for
discounts, the restaurant calculates the discount to determine the total cost. In this example, the
restaurant is offering lobster dinners for $22.99. A table of four orders the dinners, but two of the
customers have coupons for discounts. To process the coupons, the restaurant subtracts the discount
amount from the cost of the two dinners. To determine the amount of discount, add the cost of the two
dinners and calculate the 15% discount ($22.99 x 2 = $45.98; $45.98 x 15% or .15 = $6.897 or $6.90).
Then, subtract the discount from the cost of the two dinners ($45.98 - $6.90 = $39.08). Add the
discounted price of the two dinners to the regular price of the other two dinners to calculate the total cost
for the table ($39.08 + $22.99 + $22.99 = $85.06).
</h5></div><h5 id='q100'>100. Kyle is part of a group of employees who are close friends and like to spend their lunch hours together,
eating or playing cards. This group is considered a(n)</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. organizational culture.</option><option value="B">B. subculture.</option><option value="C">C. religious committee.</option><option value="D">D. collective.

</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: subculture.</h5><h5>Kyle's group is a subculture at his work—a smaller culture that develops under the dominant
organizational culture. The organizational culture is the overall culture of the entire company. His group is
not based on religion. A collective society strongly relies on groups, but it is not the term used within
organizations.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Hospitality_2_Split_Homework.js"></script></html>