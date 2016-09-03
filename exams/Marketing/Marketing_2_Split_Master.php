<?phpob_start();session_start();require_once 'dbconnect.php'if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=1></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing_Exam_7</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. One business promising to do something for another business in return for receiving compensation is an
example of a</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. treaty.</option><option value="B">B. benefit.</option><option value="C">C. contract.</option><option value="D">D. enterprise.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: contract.</h5><h5>Contracts are agreements among two or more parties stating that one party is to do something
in return for something provided by another party. If one business promises to do something for another
business in return for receiving compensation, the two businesses have a contract. Then, the businesses
are obligated to fulfill their part of the contract. In most cases, contracts benefit both parties, although
promising to do something in return for receiving compensation is not necessarily a benefit. Treaties are
trade agreements among two or more countries. An enterprise is another term for a business.
</h5></div><h5 id='q2'>2. A basic principle of procedural due process involves __________ before taking action.</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. obtaining witnesses</option><option value="B">B. providing notice</option><option value="C">C. awarding damages</option><option value="D">D. creating evidence</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: providing notice</h5><h5>Due process is the concept that the government must respect all of the legal rights that
are owed to individuals and businesses according to the law of the land. Legal procedure refers to the
methods and processes that are used to protect an individual's or business's legal rights. In many
societies, these rights include the right to be notified of accusation or lawsuit (providing notice), the right
to obtain legal counsel, the right to be heard in court, the right to confront the accuser, etc. Obtaining
witnesses is a pretrial activity. Awarding damages is a possible remedy or outcome of civil litigation. Due
process involves presenting evidence, not creating it.
</h5></div><h5 id='q3'>3. Channels of distribution allow channel members to share</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. equipment.</option><option value="B">B. profits.</option><option value="C">C. risk.</option><option value="D">D. employees.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: risk.</h5><h5>Channels of distribution allow channel members to share risk. Moving products through a channel
requires financing and includes an inherent financial risk. Channel members do not share profits,
equipment, or employees.
</h5></div><h5 id='q4'>4. Massimo's Corner Grocery sells a variety of fruits and vegetables to consumers within the community.
Massimo's is considered a(n)</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. wholesaler.</option><option value="B">B. retailer.</option><option value="C">C. agent.</option><option value="D">D. producer.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: retailer.</h5><h5>A retailer is a business that buys goods and sells them to the final consumer. Wholesalers are
intermediaries who buy goods from producers or agents and resell them to other businesses. Agents are
intermediaries who assist in the sale of goods but do not take title to them. Producers are growers,
providers, or manufacturers of goods and services.
</h5></div><h5 id='q5'>5. Radio frequency identification (RFID) increases channel efficiency because it stores product information
on a computer chip that is attached to the</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. box or container.</option><option value="B">B. delivery truck's antenna.</option><option value="C">C. customer's inventory report.</option><option value="D">D. receiving dock.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: box or container.</h5><h5>Radio frequency identification (RFID) involves storing an order's product information on
a computer chip and then attaching it to the shipment's box, container, or pallet. When a shipment arrives
at a business, warehouse personnel use computer scanners to receive the items quickly, which
increases efficiency. The computer chip is not attached to the delivery truck's antenna, the customer's
inventory report, or the receiving dock.
</h5></div><h5 id='q6'>6. To assist and support another channel member's sales promotion in a particular area, a producer might
work with the channel member to</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. coordinate a regional advertising campaign. </option><option value="B">B. research and develop innovative products.</option><option value="C">C. identify trends and market shifts.</option><option value="D">D. develop a reliable accounting system.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: coordinate a regional advertising campaign. </h5><h5>undefined</h5></div><h5 id='q7'>7. What does a channel of distribution usually need to be able to manage or avoid conflict within the
channel?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Limited competition</option><option value="B">B. Updated technology</option><option value="C">C. Equal authority</option><option value="D">D. Strong leadership</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: Strong leadership</h5><h5>A channel of distribution that has strong leadership is often able to manage or avoid
conflict because the leadership has the power to assign specific responsibilities to each channel member.
Strong leadership has the authority to set goals for the entire channel and demand cooperation, which
reduces the possibility of conflict. When a channel has strong leadership, channel members work for the
good of the channel rather than for their individual goals. A channel of distribution does not need updated
technology or limited competition to manage or avoid conflict within the channel. Equal authority might
create conflict because there is no clear leader who has power and control over the channel.
</h5></div><h5 id='q8'>8. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1076

MARKETING CLUSTER EXAM

1

1. One business promising to do something for another business in return for receiving compensation is an
example of a</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. precise speech.</option><option value="B">B. lack of clarity.</option><option value="C">C. lack of tact.</option><option value="D">D. good use of slang.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: good use of slang.</h5><h5>A
Return. Investors are willing to take a risk for the potential of return (reward or benefit they might
receive). The return is what the investment can potentially earn for the investor. Prizes are awarded to
players in sweepstakes contests. Bonuses are added to employees' paychecks. And, recognition is
positive attention for extraordinary achievements. Prizes, bonuses, and recognition do not provide the
motivation for investing.
</h5></div><h5 id='q9'>9. Before DiAnn presents her new idea to her boss, she searches the Internet and jots down two statistics
that reinforce the idea. This is an example of</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. giving alternative ideas.</option><option value="B">B. obtaining primary information.</option><option value="C">C. supporting ideas with research.</option><option value="D">D. clarifying a new idea.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: supporting ideas with research.</h5><h5>Ideas that are research-based are more easily accepted than those that
are not. Primary information is new information collected for the issue at hand. DiAnn is collecting
secondary information, which involves obtaining information that has already been collected by others.
The research does not create alternative ideas. It is meant to add validation to the original idea.
Clarifying an idea involves explaining it in more detail.
</h5></div><h5 id='q10'>10. What should you do if you phone an important customer and the customer indicates that you have called
at a bad time?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Offer to schedule a second call.</option><option value="B">B. Try to continue the conversation.</option><option value="C">C. Ask the customer to call you back.</option><option value="D">D. Explain that the call will be short.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: Offer to schedule a second call.</h5><h5>In some situations, you will call an important customer at a time when
the customer is busy or in a hurry and is unable to speak to you. Then, it is appropriate to offer to
schedule a second call at a time that will be convenient for the customer. You should not try to continue
the conversation or explain that the call will be short if the customer indicates that this is a bad time. It is
your responsibility to return the call rather than ask the customer to call you.
</h5></div><h5 id='q11'>11. When businesses need to formalize the information provided to employees, customers, or other
businesses, they often use __________ communication.</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. verbal</option><option value="B">B. lateral</option><option value="C">C. upward</option><option value="D">D. written

®
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: written

®
</h5><h5>undefined</h5></div><h5 id='q12'>12. When writing e-mail correspondence to customers and coworkers, it is important to remember that the
messages</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. should include graphics to hold the reader's interest.</option><option value="B">B. should be written in an entertaining, informal way.</option><option value="C">C. are often seen by people other than the recipients.</option><option value="D">D. are usually deleted as soon as they are read.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: are often seen by people other than the recipients.</h5><h5>When writing e-mail messages to customers and
coworkers, the correspondence should address various business issues; therefore, writers should
develop the messages using a concise, friendly, and businesslike tone. If the writer uses language that is
very casual, personal, or questionable, there is a risk of offending the recipient or others to whom the
recipient forwards the message. Because many businesses have e-mail policies and can monitor the
contents of e-mail messages going into and out of their companies, e-mail writers should take care not to
send inappropriate messages. Business e-mail messages do not need to be entertaining or informal, nor
do they need to include graphics. Many businesspeople save important e-mail messages and flag them
for follow-up at a later time.
</h5></div><h5 id='q13'>13. Which of the following is a characteristic of a persuasive sales message:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Contains loaded language</option><option value="B">B. Reminds customer of the product</option><option value="C">C. Discredits the competition</option><option value="D">D. Makes the product appealing</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: Makes the product appealing</h5><h5>Persuasive messages usually are intended to encourage someone to do
something. In the case of a sales message, the goal usually is to persuade a customer to buy a product.
In order to do this, the message should make the product appealing to the customer so the customer will
understand the benefit of buying and want to buy. The sales message should persuade the customer to
spend money. Persuasive sales messages are not intended to simply remind the customer of the product
or discredit the competition. Persuasive messages should not use loaded language, which is often biased
and stereotypical.
</h5></div><h5 id='q14'>14. When Brian got a new job, he made sure he knew how to use the cash register, became familiar with all
the products and prices, and kept his work station very organized. In which way did Brian demonstrate
the customer-service mindset?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Following-up</option><option value="B">B. Following-through</option><option value="C">C. Being efficient</option><option value="D">D. Being accurate</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: Being efficient</h5><h5>Being efficient demonstrates the customer-service mindset. Specifically, this means
knowing how to operate equipment and software, becoming familiar with all the products the business
offers, and keeping work spaces organized for action. Being accurate is demonstrated through doublechecking work for accuracy. Following-through means always doing what you say you're going to do.
Following-up with customers suggests to customers that you care about their continued satisfaction.
</h5></div><h5 id='q15'>15. Which of the following is the best way to handle slow/methodical customers:</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Let them have their say.</option><option value="B">B. Don't jump to quick conclusions.</option><option value="C">C. Help them along by not overwhelming them.</option><option value="D">D. Serve them nonemotionally.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: Help them along by not overwhelming them.</h5><h5>Helping them along by not overwhelming them is the best
way to deal with slow/methodical customers. Be patient. Mirror their methodical behavior. They will come
around when they trust your good intentions. Avoiding jumping to quick conclusions is the best way to
deal with dishonest customers. Letting them have their say is the best way to deal with
domineering/superior customers. Serving non-emotionally is the best way to deal with insulting
customers.
</h5></div><h5 id='q16'>16. What is the most important economic resource?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Equipment</option><option value="B">B. Minerals
</option><option value="C">C. Energy</option><option value="D">D. People
</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is D: People
</h5><h5>undefined</h5></div><h5 id='q17'>17. Which of the following is a reason that natural resources are considered limited:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Some countries are unable to manufacture them.</option><option value="B">B. Technology has advanced faster than training.</option><option value="C">C. The earth has certain boundaries.</option><option value="D">D. People lack training or skills needed to do a job.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is C: The earth has certain boundaries.</h5><h5>Currently, the earth provides most of our natural resources. As the
population of the world increases, there will be more and more people living within those boundaries and
demanding more resources. Therefore, there will be fewer resources per person. Lack of training and
technology advancing faster than training are reasons for limited human resources. Natural resources are
found in nature, rather than being manufactured.
</h5></div><h5 id='q18'>18. One of the advantages of a market economy is</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. freedom of competition.</option><option value="B">B. absence of taxes.
</option><option value="C">C. government control.</option><option value="D">D. assigned occupations.
</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: freedom of competition.</h5><h5>In a market economy, businesses are free to compete with each other for labor
and for customers. The government taxes the profits made by businesses and the money earned by
workers in order to provide services to the people. The role of the government in our economy is limited
to protecting private property, ensuring competition, and preserving law and order. Workers are free to
choose the type of work they want and are limited only by their own abilities and finances.
</h5></div><h5 id='q19'>19. Which of the following is not an advantage of labor specialization:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Increased worker efficiency</option><option value="B">B. Increased interdependency</option><option value="C">C. Increased production rates</option><option value="D">D. Simplified training of workers</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: Increased interdependency</h5><h5>Increased interdependency means workers need to rely on each other. It is a
disadvantage of specialization. All of the other alternatives are advantages of specialization. Production
rates increase because the speed with which workers perform their specific tasks increases. Workers
become highly skilled as job tasks are performed repeatedly, and this results in increased efficiency.
Training of workers is simplified due to the limited nature of the tasks to be performed.
</h5></div><h5 id='q20'>20. Why is the concept of price stability an effective measurement of the state of the economy?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Matches the effects with the causes</option><option value="B">B. Reflects the rise in wages and benefits</option><option value="C">C. Indicates positive and negative trends</option><option value="D">D. Compares revenues with expenses</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: Indicates positive and negative trends</h5><h5>Price stability means that price levels remain fairly constant.
When prices are stable, they do not drastically fluctuate up or down. Price stability is one way to measure
the condition of a country's economy. If prices are stable (a positive trend), the economy is also stable.
Large upswings or downswings in prices (negative trend) indicate that the economy is not stable. When
the trend is negative, governments take steps to correct the problem. The concept of price stability does
not reflect the rise in wages and benefits, does not match the effects with the causes, and does not
compare revenues with expenses.
</h5></div><h5 id='q21'>21. Which of the following is not a characteristic of the peak phase of a business cycle:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. High prices</option><option value="B">B. High dividends</option><option value="C">C. High unemployment</option><option value="D">D. High interest rates</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: High unemployment</h5><h5>The peak phase of a business cycle is considered the high point of economic
activity. It is characterized by high dividends, high production, high prices, high interest rates, and high
employment. High unemployment is characteristic of the trough phase of a business cycle.
</h5></div><h5 id='q22'>22. Which of the following characteristics describes a person who always arrives at work on time:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Dependable</option><option value="B">B. Creative</option><option value="C">C. Honest</option><option value="D">D. Independent</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: Dependable</h5><h5>A dependable person is one who can be relied upon to do what s/he is supposed to do.
Dependable employees comply with such rules as coming to work at a certain time every day. An
independent person is self-reliant and likes to be in charge of his/her own life. A creative person is
imaginative and able to come up with original ideas. An honest person tells the truth and behaves in a
straightforward manner.
</h5></div><h5 id='q23'>23. A responsible employee who realizes that s/he has given a fellow employee the wrong answer to a work
question would handle the situation by</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. apologizing and giving the right answer.</option><option value="B">B. letting the other employee figure it out.</option><option value="C">C. pretending that s/he gave the right answer.</option><option value="D">D. refusing to answer questions in the future.

</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: apologizing and giving the right answer.</h5><h5>A responsible person acknowledges his/her mistakes as soon as
s/he is aware of them and then corrects them whenever possible. Since an incorrect answer may have
caused a problem for the other employee, an apology is also in order. Letting the other employee figure
out that the answer was incorrect, pretending that the right answer was given, and refusing to answer
questions in the future are examples of irresponsible behavior.
</h5></div><h5 id='q24'>24. One way that businesses can protect the privacy of their customers is to limit the number of employees
who have access to the customers'</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. purchasing history.</option><option value="B">B. personal information.</option><option value="C">C. identification code.</option><option value="D">D. telephone numbers.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: personal information.</h5><h5>Many businesses gather personal information about their customers that they store
in a database. This might include information about a customer's credit rating, financial status, education,
etc. Such information should be available only to employees who need to know it in order to do their jobs.
Businesses should limit the number of employees who have access to customers' personal information in
order to protect the privacy of their customers and prevent unauthorized persons from obtaining and
using this information. A customer's telephone number, purchasing history, and identification code are
types of routine business information that usually are not considered to be private.
</h5></div><h5 id='q25'>25. When you ask coworkers for help and they aren't able to help you, which of the following responses
would be most appropriate:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. "I guess you don't remember when I helped you."</option><option value="B">B. "I don't know how I'll ever get done."</option><option value="C">C. "Thanks anyway; I won't bother you again."</option><option value="D">D. "Thanks anyway; maybe another time."</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: "Thanks anyway; maybe another time."</h5><h5>This is an appropriate response because it expresses your
thanks for their response and lets them know you understand and will ask them again. Reminding
coworkers that you had helped them earlier is attempting to make them feel guilty, which they will
probably resent. Saying that you won't bother them again indicates you are offended by their refusal.
Saying you don't know how you'll get done (without help) is whining, which is a very negative habit that
annoys other people.
</h5></div><h5 id='q26'>26. Which of the following is a characteristic of good visions:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Concrete situations</option><option value="B">B. Permanent results</option><option value="C">C. Complicated ideas</option><option value="D">D. Expensive processes</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Permanent results</h5><h5>Good visions have permanent results. They are something that other people can
carry on for many years even if the person who had the vision is not around. Examples include the right
to vote, equal rights, and vaccines for diseases. Visions are abstract rather than concrete. Visions should
be simple enough that anyone can understand rather than overly complicated. Some visions are
expensive to turn into reality but are worth the price; however, some visions may not justify the price.
</h5></div><h5 id='q27'>27. Achievement-oriented people rely on __________ to set the standards for their work.</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. their bosses</option><option value="B">B. their followers</option><option value="C">C. their coworkers</option><option value="D">D. themselves</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: themselves</h5><h5>Achievement-oriented people rely on themselves to set the standards for their work. They
don't allow others to set the standards for them.
</h5></div><h5 id='q28'>28. A business manager who wants to lead change in the company needs to be</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. forceful.</option><option value="B">B. emotional.</option><option value="C">C. persuasive.</option><option value="D">D. conservative.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: persuasive.</h5><h5>Business managers who want to lead change in the company need to have certain
characteristics to be effective. They should be persuasive which means they have the ability to get
people to see things their way, do things their way, or agree with them. Change doesn't just happen on
its own. Change leaders need the involvement and help of many different people. Effective change
leaders are able to persuade the right people to go along with them and help make the change happen.
A manager who wants to lead change does not need to be emotional, forceful, or conservative.
</h5></div><h5 id='q29'>29. Pedro received a check in the amount of $432.87 from the Tabor Corporation, a company in which he is
a stockholder. This source of income is referred to as</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. inheritance.</option><option value="B">B. wages.</option><option value="C">C. interest.</option><option value="D">D. dividends.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: dividends.</h5><h5>Individuals and businesses acquire income in many ways. Dividends are earnings that are
paid to investors or stockholders for their investments. When Pedro purchased shares of Tabor stock, he
became an owner of the company. As an owner of the company, Pedro has the opportunity to earn a
percentage of the company's profits, which are paid to him in the form of dividends. Wages are the
income that workers earn for the work that they perform. Interest is the reward or cost of lending or
borrowing money, usually figured as a percentage of the amount borrowed. An inheritance is the assets
(e.g., property, goods, money) that a person leaves to others upon his/her death.
</h5></div><h5 id='q30'>30. Choosing to buy an item at the check-out counter is often an example of</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. financial self-control.</option><option value="B">B. poor use of credit.</option><option value="C">C. impulsive spending.</option><option value="D">D. smart shopping.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is C: impulsive spending.</h5><h5>Choosing to buy an item at the check-out counter is a classic example of impulsive
spending. Poor use of credit may or may not be involved. Choosing not to buy the item would illustrate
financial control and would be a good example of smart shopping.
</h5></div><h5 id='q31'>31. Investors take a risk for the potential of receiving which of the following:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Return</option><option value="B">B. Prize</option><option value="C">C. Recognition</option><option value="D">D. Bonus</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: Return</h5><h5>Investors are willing to take a risk for the potential of return (reward or benefit they might
receive). The return is what the investment can potentially earn for the investor. Prizes are awarded to
players in sweepstakes contests. Bonuses are added to employees' paychecks. And, recognition is
positive attention for extraordinary achievements. Prizes, bonuses, and recognition do not provide the
motivation for investing.
</h5></div><h5 id='q32'>32. Electrical storms, floods, and earthquakes are examples of __________ risk.</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. human</option><option value="B">B. marketing</option><option value="C">C. natural</option><option value="D">D. economic</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: natural</h5><h5>Natural risks are chances of loss which result from natural causes. These are natural
phenomena occurring outside anyone's control. Economic risks are chances of loss due to changes in
the market that force a lowering of prices, change of products, or even failure of businesses. Human risks
are chances of loss caused by human weakness and unpredictability. Marketing is not a classification of
risk.
</h5></div><h5 id='q33'>33. A summarization of the total income and expense of a business for a period of time is called</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. the profit-and-loss statement.</option><option value="B">B. gross profit.</option><option value="C">C. cost of goods sold.</option><option value="D">D. balance sheet.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: the profit-and-loss statement.</h5><h5>This income statement reports total revenue and expenses for a specific
period of time. A balance sheet identifies a business's assets, liabilities, and capital on a given date. The
difference between total sales and cost of goods sold is the gross profit. The cost of goods sold is the
purchase price of the goods that were sold.
</h5></div><h5 id='q34'>34. When return on capital is positive, the company is</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. low on cash.</option><option value="B">B. losing value.
</option><option value="C">C. growing in value.</option><option value="D">D. paying out dividends.
</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: growing in value.</h5><h5>When return on capital is positive, the company is growing in value. When return on
capital is negative, the company is losing value. A high return on capital would not indicate that a
company is low on cash. Businesses can have a high return on capital but not pay out dividends.
</h5></div><h5 id='q35'>35. To make sure that their budgets are effective, what should businesses do with budget information?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Send it to all stockholders</option><option value="B">B. Provide it to all top managers</option><option value="C">C. Post it on bulletin boards</option><option value="D">D. Communicate it to all employees

</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: Communicate it to all employees

</h5><h5>undefined</h5></div><h5 id='q36'>36. A human-resources manager is reviewing job applications for a marketing position to select which
candidates to call for an interview. What process is the human-resources manager performing?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Prospecting</option><option value="B">B. On-boarding</option><option value="C">C. Screening</option><option value="D">D. Negotiating</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: Screening</h5><h5>In the human-resources function, screening involves “weeding out” the applicants that do not
meet minimum requirements for the job or have not satisfactorily completed the application. On-boarding
activities are human-resources tasks that must be performed when a new employee joins the company
(e.g., orientation and paperwork). Prospecting is a sales activity that involves identifying any person or
organization with the potential to buy a product. Negotiating is the process of influencing someone to take
a certain course of action in order to achieve a desired outcome.
</h5></div><h5 id='q37'>37. The purpose of using a marketing-information management system to gather data on the activities and
new products of other businesses is to</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. compare warehouse procedures.</option><option value="B">B. monitor the competition.</option><option value="C">C. improve stock control.</option><option value="D">D. analyze promotional methods.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: monitor the competition.</h5><h5>Persuasive messages should not use loaded language, which is often biased
and stereotypical.
</h5></div><h5 id='q38'>38. Which of the following is an example of a business obtaining marketing information about consumers in a
way that might be considered unethical:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Offering a free product in exchange for personal data</option><option value="B">B. Conducting a random survey</option><option value="C">C. Sending questionnaires to a specific audience</option><option value="D">D. Developing a scientific experiment</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Offering a free product in exchange for personal data</h5><h5>Certain ways of obtaining marketing information
may be considered unethical even though they are legal. An example is offering free products in
exchange for personal data. Consumers may be persuaded to provide information that they normally
would not provide simply because the offer is so tempting, or they need the product being offered.
Furthermore, consumers have no guarantee that the business will keep the personal data confidential. In
some cases, businesses try to obtain this information in order to sell it to others. Most businesses follow
ethical procedures when obtaining marketing information about consumers. These procedures might
include conducting a random survey, sending questionnaires to a specific audience, and developing a
scientific experiment.
</h5></div><h5 id='q39'>39. Secondary research is cost-effective for marketers because the data</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. are incomplete.</option><option value="B">B. are cheap to purchase.</option><option value="C">C. are specific.</option><option value="D">D. already exist.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: already exist.</h5><h5>Secondary research is cost-effective for marketers because the data already exist. The
organization does not need to pay the costs of undertaking original research. Secondary data are not
necessarily cheap to purchase, nor are they specific to the research project at hand. Secondary data may
be incomplete; however, this is not a reason that secondary research is cost-effective.
</h5></div><h5 id='q40'>40. Managers should avoid marketing-research projects that</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. make little financial sense.</option><option value="B">B. might give unfavorable results.</option><option value="C">C. take a long time to complete.</option><option value="D">D. involve new products.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: make little financial sense.</h5><h5>Managers should avoid marketing-research projects that make little financial
sense—in other words, the costs of conducting the research don't outweigh the potential benefits. Even if
a marketing-research project gives unfavorable results, managers can still use the information to make
the best decisions and strategies for the company. It shouldn't make a difference if a marketing-research
study takes a long time to complete or involves new products—it can still be useful.
</h5></div><h5 id='q41'>41. The results of exploratory research are often</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. unusable.</option><option value="B">B. specific.
</option><option value="C">C. quantitative.</option><option value="D">D. qualitative.
</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is D: qualitative.
</h5><h5>undefined</h5></div><h5 id='q42'>42. Marketers draw samples from</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. current and former employees.</option><option value="B">B. media stories.
</option><option value="C">C. their target population.</option><option value="D">D. groups of university students.
</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: their target population.</h5><h5>Marketers draw samples from their target population, or the specific group of
individuals or units they are studying. The target population may or may not include media stories,
current and former employees, or groups of university students.
</h5></div><h5 id='q43'>43. Marketing researchers would use the Likert rating scale when its questionnaire's statements are
designed to measure the respondents'</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. feelings and knowledge.</option><option value="B">B. level of agreement.</option><option value="C">C. specific beliefs.</option><option value="D">D. level of intuitiveness.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is B: level of agreement.</h5><h5>The Likert scale measures the respondents' level of agreement with a statement.
For example, a questionnaire might contain the statement, “The PTR Company consistently provides
excellent customer service.” The response options might include phrases such as strongly agree, agree,
no opinion, disagree, and strongly disagree. The respondents select the option that corresponds to their
feelings. Marketing researchers do not use the Likert scale to measure the respondents' knowledge,
specific beliefs, or levels of intuitiveness.
</h5></div><h5 id='q44'>44. Which of the following is a technique that businesses can use to monitor their competitors' activities:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Reading annual reports</option><option value="B">B. Analyzing economic factors</option><option value="C">C. Studying regional data</option><option value="D">D. Reviewing buying motives</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Reading annual reports</h5><h5>Businesses often monitor their competitors' activities in order to make marketing
decisions that will help them to stay competitive. Businesses can obtain valuable information by reading
their competitors' annual reports that often list major customers and describe successful promotional
activities. Annual reports also include information about profitability, sales volume, new product
development, and expansion. Businesses can use this information to develop similar products or to
expand their sales area. Economic factors involve the state of the local economy. Regional data include
geographic and demographic information about the area. Buying motives are the reasons or benefits that
cause people to make purchases to satisfy wants and needs.
</h5></div><h5 id='q45'>45. What is an example of a marketing-research method that is used to collect primary data?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Census data</option><option value="B">B. Customer survey</option><option value="C">C. Trade-journal article</option><option value="D">D. External reports</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is B: Customer survey</h5><h5>Primary marketing research is information that a business obtains for a specific
purpose. Businesses use many techniques to obtain primary data, such as observation, interviews, and
surveys. Surveys contain questions about the information the business wants to obtain. For example, a
business might distribute a survey to its customers when it wants to find out what the customers think of
the business's goods and services. Census data, trade-journal articles, and external reports are forms of
secondary research.
</h5></div><h5 id='q46'>46. When should researchers ask potentially sensitive questions during an interview?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Toward the end of the interview</option><option value="B">B. At the beginning of the interview to get them out of the way</option><option value="C">C. Throughout the interview</option><option value="D">D. At the mid-point of the interview to allow time for the researcher to build rapport</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Toward the end of the interview</h5><h5>By asking potentially sensitive questions toward the end of an interview,
the researcher can avoid having the participant cut off the interview before important information can be
collected. By asking the questions at the beginning, in the middle, or throughout the interview, the
researcher risks prematurely ended interviews.
</h5></div><h5 id='q47'>47. One reason businesses often avoid using open-ended questions as a method of obtaining results from a
marketing survey is because the results may be difficult to</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. enter into a database.</option><option value="B">B. store for future use.</option><option value="C">C. code for evaluation.</option><option value="D">D. distribute to management.

</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: code for evaluation.</h5><h5>Businesses assign codes to survey responses in an effort to use the information in a
numerical mode. Open-ended questions are designed so that respondents react to questions in a
manner that requires more than "yes" or "no" as an answer. Because possible responses are not
controlled or limited, coding is often more difficult. If businesses are not able to assign codes to the
responses, the survey results may be extremely difficult to evaluate. The results of surveys that contain
open-ended questions are not difficult to store for future use, to enter into a database, or to distribute to
management.
</h5></div><h5 id='q48'>48. It is beneficial to a marketing researcher to use open-ended questions on a survey when</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. maintaining structure is important.</option><option value="B">B. the survey is long and technical.</option><option value="C">C. conducting exploratory research.</option><option value="D">D. objectivity is an important factor.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: conducting exploratory research.</h5><h5>Exploratory research is marketing research that collects information to
help the business define its issue, situation, or concern and decide which direction to go in order to
address it. Surveys that consist of open-ended questions require respondents to provide more than a
“yes” or “no” answer. An open-ended question is a type of unstructured question that allows a respondent
the opportunity to express opinions, state issues, and provide ideas. By obtaining this type of in-depth,
qualitative information, the researcher may be able to define the problem and determine in which
direction to proceed with the research. Long and technical surveys tend to overwhelm the respondents;
so open-ended questions may not be answered fully, if at all. The use of open-ended questions yields
subjective responses.
</h5></div><h5 id='q49'>49. One of the strengths of using internal sources to collect marketing research information is that the
information</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. pertains directly to the issue.</option><option value="B">B. is available to outside users.</option><option value="C">C. relates to industry problems.</option><option value="D">D. is organized by department.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: pertains directly to the issue.</h5><h5>Internal information is information located inside the company. One of the
strengths of using internal information is that it often pertains directly to the issue. For example, if the
issue is the popularity of a specific product, current sales and inventory data can provide information
about how well that product is selling. Internal information often is not available to outside users.
Although the information might relate to industry problems, that is not one of its strengths. Internal
information may, or may not, be organized by department.
</h5></div><h5 id='q50'>50. Which of the following is a measure of how happy a customer is:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Customer attitude</option><option value="B">B. Customer behavior</option><option value="C">C. Customer satisfaction</option><option value="D">D. Customer loyalty</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: Customer satisfaction</h5><h5>Customer satisfaction is a measure of how well your business or product meets or
exceeds customer expectations; in other words, how happy is the customer? It may be one type of
customer attitude. Customer loyalty is a customer's preference for a business; in other words, how often
does the customer purchase the business's goods or services? It is observed in customers' behavior.
</h5></div><h5 id='q51'>51. Changes that occur in the marketplace may cause an established business to __________ its marketing
strategies.</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. implement</option><option value="B">B. identify</option><option value="C">C. redesign</option><option value="D">D. publicize</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: redesign</h5><h5>Marketing strategies are influenced by many factors not within the direct control of the
business. These include the actions of competitors, the influences of governmental agencies, and
changes in consumer attitudes. When any of these factors change, the business may need to change, or
redesign, its marketing strategies in order to continue to meet company goals. The strategies should
already have been identified and implemented in an established business. The business may publicize its
goals or its achievements but would probably not publicize the strategies used to achieve those ends.
</h5></div><h5 id='q52'>52. Which of the following is an example of market segmentation on the basis of product usage:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. What a person's heritage is</option><option value="B">B. How often a person attends the opera</option><option value="C">C. What activities a person enjoys</option><option value="D">D. How old a person is</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is B: How often a person attends the opera</h5><h5>This example is determining the frequency with which a product is
being used. It is the only example of product usage. A person's heritage and age are demographic
characteristics. The activities in which a person participates is an example of psychographic
segmentation.
</h5></div><h5 id='q53'>53. Why is it important for a business to conduct a situational analysis during the marketing planning
process?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. To identify customers</option><option value="B">B. To ward off problems</option><option value="C">C. To forecast expenses</option><option value="D">D. To redesign products</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: To ward off problems</h5><h5>Businesses conduct situational analyses to obtain information about changes or
trends that are beginning to develop in the environment or marketplace. This procedure allows
businesses to identify changes at an early stage and ward off potential problems. It is important for
businesses to understand changes in their external environment in order to adapt and avoid problems.
Without this information, businesses may be unprepared to deal with problems that might cause them to
lose their competitiveness or even fail. A business would not conduct a situational analysis to identify
customers, forecast expenses, or redesign products. However, a business might redesign products after
conducting a situational analysis and finding that they were losing their appeal in the marketplace.
</h5></div><h5 id='q54'>54. One way for businesses to obtain needed information efficiently is to</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. read a book.</option><option value="B">B. schedule an interview.</option><option value="C">C. access a database.</option><option value="D">D. contact a competitor.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: access a database.</h5><h5>This might include information about a customer's credit rating, financial status, education,
etc. Such information should be available only to employees who need to know it in order to do their jobs.
Businesses should limit the number of employees who have access to customers' personal information in
order to protect the privacy of their customers and prevent unauthorized persons from obtaining and
using this information. A customer's telephone number, purchasing history, and identification code are
types of routine business information that usually are not considered to be private.
</h5></div><h5 id='q55'>55. When developing a computer-based presentation, it is important that each slide contain</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. numerical data.</option><option value="B">B. colorful graphics.</option><option value="C">C. key points.</option><option value="D">D. creative transitions.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: key points.</h5><h5>Employees use presentation software to develop computer-operated visual aids that support
an oral presentation. Slides for the presentation should include key points that highlight or reinforce the
most important information, which may or may not include numerical data. Colorful graphics and creative
transitions often make a presentation more interesting, but they are not necessary elements for each
slide.
</h5></div><h5 id='q56'>56. What must businesses determine during the phases of record keeping?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Which clients will be excluded from the records</option><option value="B">B. Why employees dislike record keeping</option><option value="C">C. Where competitors keep their records</option><option value="D">D. Who will be responsible for record keeping</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: Who will be responsible for record keeping</h5><h5>The phases of record keeping include getting started,
implementing the process, and monitoring/adjusting the process. At the "how to keep them" point (in the
"getting started" phase of record keeping), the business must set policies and practices, deciding whether
or not the records should be kept digitally and who should be responsible for creating, maintaining, and
destroying the records. Where competitors keep their records is not an issue in a firm's own record
keeping. Employees may or may not dislike record keeping. No client should be excluded from the
records.
</h5></div><h5 id='q57'>57. Which of the following is an ongoing population trend that affects how businesses market their goods and
services:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Lifestyle</option><option value="B">B. Consumption</option><option value="C">C. Behavior</option><option value="D">D. Migration</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: Migration</h5><h5>Migration is a population trend that indicates movement of people throughout the country as
well as into and out of the country. Migration trends are important to businesses because businesses
need to know where their customers are located. For example, many people are leaving colder climates
and migrating to what is considered the Sunbelt. This movement affects businesses because the types of
products they sell and the way they sell them will change. Also, the increased migration of ethnic groups
into the country creates a need for new goods and services that meet the needs of a multicultural
population. Lifestyle, consumption, and behavior are not population trends; however, these factors also
affect how businesses market their goods and services.
</h5></div><h5 id='q58'>58. Companies obtain internal information about their various business activities to operate effectively by
monitoring</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. industry trends.</option><option value="B">B. trade publications.</option><option value="C">C. internal records.</option><option value="D">D. government statistics.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: internal records.</h5><h5>Where competitors keep their records is not an issue in a firm's own record
keeping. Employees may or may not dislike record keeping. No client should be excluded from the
records.
</h5></div><h5 id='q59'>59. Which of the following is a true statement about the term “environment”:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. It has no affect on your performance.</option><option value="B">B. It refers only to the earth and its resources.</option><option value="C">C. It consists of your surroundings.</option><option value="D">D. It applies to individuals, not businesses.

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is C: It consists of your surroundings.</h5><h5>The term "environment" refers to your surroundings. This could mean
anything—your living room, a classroom, the mall, etc. Although the term is often used to refer to the
earth and its resources, its true meaning is much broader. Your environment has an effect on your
performance and your decisions. Businesses exist within environments just as individuals do.
</h5></div><h5 id='q60'>60. Which of the following is an ethical issue that might affect the operations function:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Flexibility</option><option value="B">B. Utility</option><option value="C">C. Creativity</option><option value="D">D. Quality</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Quality</h5><h5>Quality is the degree of excellence of a good or service—how good it is. Quality is an ethical
issue that might affect the operations function because businesses decide the quality of the products they
provide. For example, a business might decide to use low-quality materials to make products that are of
low quality. Also, the business might decide to cut corners in the production process to save money. The
result is low-quality products. However, it is unethical if the business does not make it clear to customers
that the products are of low quality and may not be durable. Utility is usefulness. Creativity is the ability to
generate unique ideas, approaches, and solutions. Flexibility is the ability to adapt to changes as they
occur.
</h5></div><h5 id='q61'>61. Determine whether the following statement is true or false: Accidents in the workplace cannot be
prevented or reduced.</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. False, employees can be trained in accident prevention.</option><option value="B">B. True, employees are always going to make mistakes.</option><option value="C">C. True, accidents result from human and mechanical error.</option><option value="D">D. False, accidents caused by malfunctions can be prevented.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: False, employees can be trained in accident prevention.</h5><h5>While it is true that machines can't be prevented
from malfunctioning and employees are always going to make mistakes, workers can be trained to use
safe work habits, to report hazards and unsafe conditions, and to be ready to handle accidents that do
occur.
</h5></div><h5 id='q62'>62. Protecting company information and intangibles often involves following the rules established to control
access to</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. cash registers.</option><option value="B">B. inventory methods.</option><option value="C">C. computer systems.</option><option value="D">D. storage facilities.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: computer systems.</h5><h5>Company information is a type of intangible property that most businesses want to
protect. Today, most of this information is stored on internal computer networks or systems. As a result,
businesses establish rules to control access to computer systems to protect confidential or sensitive
company information from being stolen or destroyed. Employees are expected to follow the rules, such
as regularly changing passwords or not opening suspicious e-mails, to help protect the information.
Protecting company information and intangibles does not involve following the rules established to control
access to inventory methods, cash registers, or storage facilities. The inventory kept in storage facilities
and the money in cash registers are tangibles rather than intangibles.
</h5></div><h5 id='q63'>63. Raw materials are transformed into finished goods in the __________ process.</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. production</option><option value="B">B. promotion</option><option value="C">C. purchasing</option><option value="D">D. distribution</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: production</h5><h5>Production is the creation of goods or services from economic resources. Promotion
communicates information about goods, services, images, and/or ideas to achieve a desired outcome.
Purchasing involves the planning and procedures necessary to obtain products for use in the operation of
a business. Distribution is responsible for moving, storing, locating, and/or transferring ownership of
goods and services.
</h5></div><h5 id='q64'>64. Many businesses have eliminated free services in order to</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. increase customer satisfaction.</option><option value="B">B. control inventory shrinkage.</option><option value="C">C. be more competitive.</option><option value="D">D. reduce operating expenses.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: reduce operating expenses.</h5><h5>Operating expenses, or overhead expenses, are the amounts of money a
business pays out in order to produce and/or sell its goods and services. Since operating expenses
include salaries and wages, as well as equipment, eliminating free services would reduce operating
expenses. The business would save the costs of delivery vans/trucks, the expense of packing for
delivery, and the wages paid to delivery personnel. This would not control inventory shrinkage which is
caused by employee theft and shoplifting. It would be likely to decrease customer satisfaction and to
make the business less competitive if its competitors do offer free delivery.
</h5></div><h5 id='q65'>65. The most important reason that a business's public restrooms should be thoroughly cleaned on a regular
basis is to</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. protect the health of customers/clients.</option><option value="B">B. make the fixtures last longer.</option><option value="C">C. make the restrooms attractive.</option><option value="D">D. give the business a good image.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: protect the health of customers/clients.</h5><h5>Public restrooms are a breeding ground for fungi, bacteria, and
germs that are harmful to people. Regular, thorough cleaning helps to keep these elements under control
and to protect the health of all who use the restrooms. Keeping restrooms clean does make them look
better, helps to preserve the fixtures, and may create a good image. However, none of these reasons is
as important as sanitation.
</h5></div><h5 id='q66'>66. Before you can reach a goal, you must first __________ an appropriate one.</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. select</option><option value="B">B. complete</option><option value="C">C. fulfill</option><option value="D">D. adjust</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: select</h5><h5>The first step in achieving goals is to choose one that is meaningful to you. You may want to start
with a single goal or a set of goals. Before you can reach a goal, you must have a clear idea of your goal
from the beginning in order to achieve it. To complete or to fulfill a goal is to achieve it. It is not necessary
to adjust an appropriate goal.
</h5></div><h5 id='q67'>67. Which of the following is a technique that you can use to become more creative:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Goal manipulation</option><option value="B">B. Strong cooperation</option><option value="C">C. Forced association</option><option value="D">D. Idea implementation</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: Forced association</h5><h5>Forcing associations means making a connection between two things where an
obvious connection doesn't already exist. By forcing associations, you make yourself think differently,
which results in more creativity. For example, making associations with the color yellow might result in
developing connections with taxis, school buses, daisies, bumblebees, the sun, etc. Cooperation is
working together toward a common goal. Implementation is carrying out an idea or activity. Manipulation
involves controlling or managing people or circumstances.
</h5></div><h5 id='q68'>68. One of the most effective methods of locating job leads is asking for tips from</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. nonworkers.</option><option value="B">B. retirees.</option><option value="C">C. minors.</option><option value="D">D. friends.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: friends.</h5><h5>Letting friends and acquaintances know that you are looking for a job is one of the most effective
methods of locating job leads. These people often will be willing to pass on information about new
openings, resignations, and retirements they learn about. Retirees, nonworkers, and minors usually are
out of the mainstream of the employment scene and would not have information concerning job leads.
</h5></div><h5 id='q69'>69. Which of the following are the best references to list in a résumé:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Family members</option><option value="B">B. Former employers</option><option value="C">C. Coworkers</option><option value="D">D. Classmates</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: Former employers</h5><h5>The reference section of a résumé should list two or three people who can provide
information about you. The best references are former employers, because they can accurately describe
your work habits, abilities, and attitudes towards the job. Prospective employers will want to contact these
references to find out if you performed satisfactorily in former positions. Potential employers usually do
not want to contact your classmates, family members, and coworkers because they are personal
references who may be unable to provide unbiased information about you.
</h5></div><h5 id='q70'>70. Membership in a local chamber of commerce is __________ for marketing businesses.</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. unimportant</option><option value="B">B. necessary</option><option value="C">C. required</option><option value="D">D. voluntary</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: voluntary</h5><h5>A chamber of commerce is an organization that supports businesses and business growth in
the community. It also helps local businesses resolve common problems. Membership is voluntary, not
required or necessary. Member businesses often display their membership plaques because they feel it
benefits them for customers to know they are part of the organization.
</h5></div><h5 id='q71'>71. A business that refuses to raise the price of its goods and services that are in high demand in a certain
part of the country because of a natural disaster is being</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. politically correct.</option><option value="B">B. economically unsound.</option><option value="C">C. legally reasonable.</option><option value="D">D. socially responsible.

</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: socially responsible.

</h5><h5>undefined</h5></div><h5 id='q72'>72. What technological advancement has allowed consumers to collect the most information for pricecomparison shopping?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Internet</option><option value="B">B. Newspaper</option><option value="C">C. Catalog</option><option value="D">D. Telephone</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internet</h5><h5>More than a new way to take orders and deliver merchandise, the Internet has proven valuable
to consumers as a source of information and a new way to compare prices and products. The Internet
provides customers with more information about more products in less time than they can obtain from
making telephone calls or by reading the newspaper or a catalog.
</h5></div><h5 id='q73'>73. Why is it necessary for a business to price its products very carefully?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. To create goodwill in the community</option><option value="B">B. To get a fair share of the market</option><option value="C">C. To track competitors' activities</option><option value="D">D. To attract employees to the business</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: To get a fair share of the market</h5><h5>Gaining market share is often an important pricing goal. Businesses
may lower prices in order to attract new customers and increase their market share. This could create
goodwill in the community, but that is not the purpose of the tactic. Price levels are not used to attract
employees. Competitors' activities would be tracked before prices were set.
</h5></div><h5 id='q74'>74. Which of the following is the purpose of screening ideas for new products:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. To perform a thorough business analysis</option><option value="B">B. To generate new ideas</option><option value="C">C. To prepare market research</option><option value="D">D. To eliminate some ideas</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: To eliminate some ideas</h5><h5>Screening ideas for new products is intended to eliminate obviously bad ideas
and recognize the value of good ideas. It is a quick look at ideas to see if they have value, not a careful
or thorough analysis. New ideas must already be generated before screening can occur. Market research
would be done to determine if consumers will purchase the good or service.
</h5></div><h5 id='q75'>75. What technological advancement has had the greatest impact on the travel, hospitality, recreation, and
insurance industries?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Fax machine</option><option value="B">B. Internet</option><option value="C">C. Electronic key card</option><option value="D">D. Interactive television</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: Internet</h5><h5>The Internet allows businesses in the travel, hospitality, recreation, and insurance industries to
bypass intermediaries (agents and brokers). Consumers can easily go directly to the service business to
make the purchase. This enables the businesses to reach more customers and sell at any time of the day
or night. Fax machines are widely used as a means of sending information quickly rather than as a
selling tool. Key card entry systems are used mainly in the hospitality industry. Interactive television is not
as widely used by consumers as the Internet.
</h5></div><h5 id='q76'>76. Businesses often identify product opportunities by conducting</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. idea analysis.</option><option value="B">B. trend research.</option><option value="C">C. trial runs.</option><option value="D">D. production tests.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: trend research.</h5><h5>Ideas that are research-based are more easily accepted than those that
are not. Primary information is new information collected for the issue at hand. DiAnn is collecting
secondary information, which involves obtaining information that has already been collected by others.
The research does not create alternative ideas. It is meant to add validation to the original idea.
Clarifying an idea involves explaining it in more detail.
</h5></div><h5 id='q77'>77. What does the following statement illustrate: The shelf should be 12" inches long and weigh 14 ounces.</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Standards</option><option value="B">B. Grades</option><option value="C">C. Warranties</option><option value="D">D. Testimonials</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Standards</h5><h5>Standards are statements that specify a product's size, contents, and/or quality. Grades are
ratings that tell to what extent the standards are met. Warranties are promises made by the seller to the
consumer that the seller will repair or replace a product that does not perform as expected. Testimonials
are statements by an identified user of a product, proclaiming the benefits received from the use of the
product.
</h5></div><h5 id='q78'>78. When a manufacturer provides a full warranty with a product, it is the manufacturer's responsibility to</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. limit the time that an implied warranty is good.</option><option value="B">B. replace or repair a faulty product.</option><option value="C">C. repair only specific parts if they fail to function.</option><option value="D">D. refund the purchase price if the product is misused.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: replace or repair a faulty product.</h5><h5>A warranty is a promise made by the seller to the consumer that the
seller will repair or replace a product that does not perform as expected. A full warranty provides that if
the product does not work properly, is defective, or does not live up to the warranty, it must be made
good within a reasonable time. The company providing the warranty may not put time limits on any
implied warranties the product may have. A limited warranty would only cover specific parts rather than
the whole product. Most warranties state that improper use or handling of the product will void the
warranty.
</h5></div><h5 id='q79'>79. Which of the following is an example of product bundling:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Garden shop discounting prices of seasonal merchandise</option><option value="B">B. Business selling computer, printer, and scanner as a unit</option><option value="C">C. Theme park charging admission and selling ride tickets</option><option value="D">D. Lumber company selling wood chips as small-animal bedding</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Business selling computer, printer, and scanner as a unit</h5><h5>Product bundling involves combining several
products and offering them to customers as one product. Usually, the bundled products are offered for
one, all-inclusive price. An example is a business selling a computer, a printer, and a scanner as a unit.
In many cases, the bundle is less expensive than the cost of each item sold separately. Sometimes, the
products can only be purchased as a unit and are not available separately. A lumber company selling
wood chips as small-animal bedding is an example of selling by-products. A theme park charging
admission and then selling ride tickets is an example of two-part pricing. A garden shop discounting
prices of seasonal merchandise is an example of adjusting prices.
</h5></div><h5 id='q80'>80. A business that positions its products as the ones offering the best quality and service for the price might
gain a</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. geographic benefit.</option><option value="B">B. promotional consideration.</option><option value="C">C. competitive advantage.</option><option value="D">D. marketing incentive.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: competitive advantage.</h5><h5>Businesses often gain a competitive advantage over competitors by offering
customers a value or benefit that their competitors do not provide. If a business offers the best quality
and service at a reasonable price, it has a competitive advantage over competitors that provide lower
quality or higher prices. When businesses position themselves as providers of quality and service,
customers often think of them in those terms and prefer to buy from those businesses. Businesses do not
gain promotional consideration, geographic benefits, or marketing incentives by positioning products as
the ones offering the best quality and service for the price.
</h5></div><h5 id='q81'>81. Walt Disney has sold the rights to Mickey Mouse and other Walt Disney characters to a company that
makes stuffed animals. This is an example of brand</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. repositioning.</option><option value="B">B. positioning.</option><option value="C">C. extension.</option><option value="D">D. licensing.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: licensing.</h5><h5>Licensing allows a brand name to be used by another company for a fee. Brand positioning
attempts to create a certain image or impression of a brand as compared to competitive brands. Brand
extension is the use of successful brands to launch new brands. Brand repositioning reevaluates and
changes the brand in order to change the ways consumers see the brand.
</h5></div><h5 id='q82'>82. Corporate branding provides a variety of products and product lines with a common</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. strategy.</option><option value="B">B. platform.</option><option value="C">C. ranking.</option><option value="D">D. identity.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: identity.</h5><h5>Corporate branding refers to the combined impressions, images, or experiences associated with
a company or parent entity. A corporate brand may include a variety of products, but the name or
corporate brand provides all products with a common identity. For example, PepsiCo is a corporate brand
under which its Pepsi, Quaker Oats, Tropicana, Gatorade, and Frito Lay products are sold. Corporate
brands do not necessarily provide a common platform, ranking, or strategy for products.
</h5></div><h5 id='q83'>83. In promotional communication, the feedback that buyers (consumers) give to senders (businesses) is
usually in the form of</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. purchases.</option><option value="B">B. complaints.</option><option value="C">C. referrals.</option><option value="D">D. suggestions.

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: purchases.</h5><h5>Promotion is the communication of information about goods, services, images, and/or ideas
to achieve a desired outcome. Businesses use promotion to inform buyers about goods and services in
order to encourage them to buy. By purchasing the goods or services, buyers give feedback to senders.
Buyers let the senders know that they received the promotional message and respond by making
purchases. A complaint is a customer's expression of a dissatisfaction. A suggestion is a
recommendation. Referrals are individuals or businesses to whom salespeople are recommended.
</h5></div><h5 id='q84'>84. Which of the following newspaper ads would be considered promotional rather than institutional:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. A January white sale</option><option value="B">B. A salute to public-service workers</option><option value="C">C. A commitment to the United Fund</option><option value="D">D. A special program on public television</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is A: A January white sale</h5><h5>A January white sale is an example of product promotion that aims to persuade
customers to buy a good or service. The alternatives are examples of institutional promotion that aim to
create a certain image in the eyes of consumers; also known as corporate promotion.
</h5></div><h5 id='q85'>85. Which of the following is an example of a business using unethical promotion:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Developing an advertising campaign about environmental issues</option><option value="B">B. Exaggerating a product's attributes in an advertisement</option><option value="C">C. Using several testimonials in a print advertisement</option><option value="D">D. Placing a product's price in an advertisement</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Exaggerating a product's attributes in an advertisement</h5><h5>When a business exaggerates a product's
attributes or benefits, such as stating that a product is “the best” or that it can “work miracles,” the
business is engaging in puffery. This practice is an unethical advertising practice because it is misleading
and provides unproven information. Developing an advertising campaign about environmental issues,
using testimonials in print advertising, and placing product pricing in an advertisement are ethical actions.
</h5></div><h5 id='q86'>86. Which of the following is typically NOT a penalty imposed upon marketers who run false or deceptive
advertisements:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Incarceration</option><option value="B">B. Cease and desist orders</option><option value="C">C. Monetary fines</option><option value="D">D. Corrective advertising</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: Incarceration</h5><h5>While the penalties upon marketers who run false or deceptive advertisements may be
severe, these marketers are rarely criminally charged or sentenced to jail time. A cease and desist order
requires marketers to stop running the offensive advertisements. If these same marketers run false or
deceptive ads in the future, regulators may impose monetary fines on the marketers. If regulators
determine that a company is running deceptive advertising, that company may be required to run
corrective advertising.
</h5></div><h5 id='q87'>87. What does a business's customers recommending the business to their friends exemplify?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Providing a testimonial</option><option value="B">B. Word-of-mouth communication</option><option value="C">C. Verbal assertiveness</option><option value="D">D. One-on-one selling</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Word-of-mouth communication</h5><h5>This is promotion and publicity for a business provided by customers
who tell others of their satisfaction with the business. Therefore, customers recommending the business
to their friends is an example of word-of-mouth communication. In many cases, these recommendations
lead to additional sales because people tend to believe their friends and take their advice. A testimonial is
a statement by an identified user of a product proclaiming the benefits received from the use of the
product. Verbal assertiveness is a confident attitude that involves the use of words. Recommending a
business to friends is not an example of one-on-one selling.
</h5></div><h5 id='q88'>88. In what communications channels are holding press conferences and giving interviews used?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Corporate management</option><option value="B">B. Public relations</option><option value="C">C. Personal selling</option><option value="D">D. Target marketing</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: Public relations</h5><h5>Public relations is a function of business designed to establish good relations between
the business and the public. One way to establish good relations is to communicate with the public.
Businesses often hold press conferences and give interviews to communicate information and pass on
positive news about the business. Corporate management involves managing the business. Personal
selling is the form of promotion that determines client needs and wants and responds through planned,
personalized communication that influences purchase decisions and enhances future business
opportunities. Target marketing is the identification and selection of markets for a business or for a
product.
</h5></div><h5 id='q89'>89. Which of the following parts of a print ad often creates an image that people come to associate with that
business:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Photograph</option><option value="B">B. Illustration</option><option value="C">C. Headline</option><option value="D">D. Logotype</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: Logotype</h5><h5>The logotype is the name and/or symbol used by a business. Businesses believe that having a
unique logotype creates an image that people will come to recognize and associate with that business.
The logotype clearly identifies the product's brand or advertiser to consumers. An illustration is a
photograph, drawing, painting, or graphic such as a chart, table, or graph. A headline is text set in large
type and usually positioned at the top of an advertisement. A photograph is an illustration.
</h5></div><h5 id='q90'>90. Which of the following is an activity that is performed by a business's public-relations department:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Selecting media for print and broadcast advertisements</option><option value="B">B. Researching and developing product prototypes</option><option value="C">C. Developing job descriptions for employees</option><option value="D">D. Coordinating speaking engagements for employees</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: Coordinating speaking engagements for employees</h5><h5>The public-relations department is a division of a
business that is responsible for establishing good relations between the business and its publics. The
various publics include the business's target market, its stakeholders, the local business community, its
employees, and local residents. One activity that a public-relations department coordinates is speaking
engagements for the business's employees. For example, a local civic group might ask the publicrelations department if a member of the business's executive-management staff could speak to the group
about a particular issue that is affecting the community. The public-relations department would work with
the appropriate employee to schedule the speaking engagement. The research and development
department conducts product research and develops product prototypes. Developing job descriptions is a
human-resources activity. The advertising department selects media for the business's advertising.
</h5></div><h5 id='q91'>91. One reason why it is important for businesses to use public-relations activities to reach external
audiences is to</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. pass on positive information.</option><option value="B">B. sell useful products.</option><option value="C">C. measure the community response.</option><option value="D">D. compile customer databases.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: pass on positive information.</h5><h5>One of the main functions of a business's public-relations activities is to
reach external audiences, those groups that are outside of the company. These groups include the local
community, government officials, customers, suppliers, creditors, etc. The external audience has a
significant impact on the business because customers buy products, government officials enact rules and
regulations, and creditors loan money. If the business does not maintain good relations with the external
audience by providing positive information, it may have difficulty operating or even fail. Public-relations
activities are not intended to sell useful products, measure the community response, or compile customer
databases.
</h5></div><h5 id='q92'>92. Which of the following components of a promotional plan addresses exactly how a business will achieve
its goals:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Situation analysis</option><option value="B">B. Budget</option><option value="C">C. Strategy</option><option value="D">D. Evaluation</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Strategy</h5><h5>A promotional plan is the framework for the promotional activities of a business. The
promotional plan includes several components. The strategy component provides information as to
exactly how the business will achieve its established goals. The budget component outlines the financial
resources the business will need to carry out the promotional activities. The situation analysis is a
determination about the company's current business situation and the direction in which the business is
headed. A promotional plan's evaluation component provides information about how the business will
determine if its promotional activities are successful.
</h5></div><h5 id='q93'>93. Which of the following is a promotional activity that should be coordinated with an advertised sales event:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Product displays</option><option value="B">B. Marketing research</option><option value="C">C. Stock handling</option><option value="D">D. Merchandise markdowns</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Product displays</h5><h5>Product displays are the ways in which goods and services are visually presented to
prospective buyers. Businesses often display products in windows, on racks and tables, etc. Businesses
often discount products and promote (advertise) these discounts to attract customers and stimulate
sales. To encourage customers to buy during the sales event, the business should display the advertised
products in an attractive way because customers are usually more willing to buy when the products are
organized in a visually appealing manner. Marketing research is the systematic gathering, recording, and
analyzing of data about a specific issue, situation, or concern. Stock handling is the loading, unloading,
and movement of goods. Marking down merchandise is a pricing activity rather than a promotional
activity.
</h5></div><h5 id='q94'>94. What should salespeople be prepared to use, when appropriate, to communicate with customers?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Complex sentences</option><option value="B">B. Technical terms</option><option value="C">C. Slang words</option><option value="D">D. Foreign phrases</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Technical terms</h5><h5>When appropriate, salespeople will need to use technical terms and to be prepared to
explain those terms in plain English. Some goods and services require a technical explanation, and
salespeople must be able to adequately communicate that information to customers. Salespeople must
be able to explain technical terms in a clear and simple way that customers will understand. Salespeople
should avoid using complex sentences, slang words, or foreign phrases.
</h5></div><h5 id='q95'>95. Because product quality and price can easily be matched, customer service becomes a key component
in business</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. careers.</option><option value="B">B. competition.</option><option value="C">C. communications.</option><option value="D">D. forecasts.

</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: competition.</h5><h5>Because product quality and price can easily be matched, customer service becomes a key
component in business competition. In selling, customer service is where the real competition among
businesses begins. As a salesperson, you must have the ability to show your prospects that your
company meets (and hopefully exceeds) customer service expectations. Customer service is not a key
component in business careers, business communication, or business forecasts.
</h5></div><h5 id='q96'>96. Selling policies not only benefit the company by providing guidelines for sales activities, employee
actions, and services provided, they also help managers to</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. assess sales staff performance.</option><option value="B">B. direct salespersons' responses.</option><option value="C">C. assist in determining regulations.</option><option value="D">D. explain policies to potential customers.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: assess sales staff performance.</h5><h5>By assessing sales staff performance, managers can determine the
success of the employees and the selling policies. Salespeople interact with potential customers and
explain policies. Regulations are determined by federal and state governments along with regulatory
agencies. Salespersons' responses are directed by the established selling policies.
</h5></div><h5 id='q97'>97. What is one way that businesses use the technology of electronic data interchange in the selling
function?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. To identify potential accounts</option><option value="B">B. To fax sales data to employees</option><option value="C">C. To communicate with customers</option><option value="D">D. To access competitors' web sites</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: To communicate with customers</h5><h5>An electronic data interchange (EDI) is a computerized information
system. This technology allows a business's computers to communicate with customers' computers and
share information. An advantage of using EDI is that the computers keep track of sales and inventory and
automatically place orders when inventory reaches a certain level. The system facilitates the sales
process, which usually results in more satisfied customers and more sales for the business. Businesses
do not use electronic data interchange systems to identify potential accounts, fax sales data to
employees, or access competitors' web sites.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted to state
DECA Associations authorized by DECA, Inc.

Test 1076

MARKETING CLUSTER EXAM

1

1. One business promising to do something for another business in return for receiving compensation is an
example of a</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Sales displays</option><option value="B">B. Merchandise labels and tags</option><option value="C">C. Manufacturers' pamphlets</option><option value="D">D. Customers</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: Customers</h5><h5>A
Return. Investors are willing to take a risk for the potential of return (reward or benefit they might
receive). The return is what the investment can potentially earn for the investor. Prizes are awarded to
players in sweepstakes contests. Bonuses are added to employees' paychecks. And, recognition is
positive attention for extraordinary achievements. Prizes, bonuses, and recognition do not provide the
motivation for investing.
</h5></div><h5 id='q99'>99. During the feature-benefit selling process, it is important for the salesperson to remember that the
customers are buying</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. benefits.</option><option value="B">B. features.</option><option value="C">C. attitudes.</option><option value="D">D. characteristics.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: benefits.</h5><h5>Benefits are the advantages that the product provides. Effective salespeople know that
customers do not buy the product itself; rather, they are buying what the product can do for them. For
example, customers do not buy weight-lifting equipment—they buy the ability to workout in the privacy of
their own homes. Therefore, the salesperson must translate the features (characteristics) of the product
into benefits. A customer does not purchase a product because of a person's attitude.
</h5></div><h5 id='q100'>100. Why is the concept of price stability an effective measurement of the state of the economy?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Matches the effects with the causes</option><option value="B">B. Reflects the rise in wages and benefits</option><option value="C">C. Indicates positive and negative trends</option><option value="D">D. Compares revenues with expenses</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: Indicates positive and negative trends</h5><h5>Price stability means that price levels remain fairly constant.
When prices are stable, they do not drastically fluctuate up or down. Price stability is one way to measure
the condition of a country's economy. If prices are stable (a positive trend), the economy is also stable.
Large upswings or downswings in prices (negative trend) indicate that the economy is not stable. When
the trend is negative, governments take steps to correct the problem. The concept of price stability does
not reflect the rise in wages and benefits, does not match the effects with the causes, and does not
compare revenues with expenses.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_2_Split_Master.js"></script></html>