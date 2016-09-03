<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality Exam 7</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Torts relating to misrepresented facts about a business's goods or services may be subject to a lawsuit
on the basis of</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. defamation.</option><option value="B">B. assault.</option><option value="C">C. intrusion.</option><option value="D">D. fraud.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: fraud.</h5><h5>A tort is a private wrongdoing against another person. Businesses can be held responsible in a
variety of torts. For example, suppose a business's employee intentionally provides misleading product
information to a customer in order to make a sale. Then, the customer purchases and is injured by the
product based on the employee's misleading information. The customer may file a civil lawsuit against
the business, and in some situations, the business's employee for fraudulent behavior. Assault and
intrusion are criminal acts that are addressed in the criminal court system rather than the civil court
system. Defamation is a tort that involves harm to an individual's or business's reputation.
</h5></div><h5 id='q2'>2. Aviation, taxation, and commerce are categories of ____________ law.</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. judicial</option><option value="B">B. legislative</option><option value="C">C. administrative</option><option value="D">D. executive</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: administrative</h5><h5>Administrative law deals with the rules and regulations that have been established by
governmental agencies. The legislative branch of the government (i.e., U.S. Congress and Canadian
Parliament at the Federal level) establishes these agencies, which have the authority to enact and
enforce regulations for various administrative functions, including aviation, taxation, and commerce. For
example, in the United States, the Federal Aviation Administration (FAA) regulates air-transportation
functions (i.e., airspace, aircraft safety); the Internal Revenue Service (IRS) handles issues related to
personal and business taxes; and the Federal Commerce Commission (FCC) handles issues related to
business and commerce. The legislative branch of government introduces and passes statutes. The
judicial branch of government (court systems) interprets the law. The executive branch of the government
guides government policy, and in some countries, has the power to veto legislation.
</h5></div><h5 id='q3'>3. Which of the following is true regarding passenger rights in the air travel industry:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. There is an international "Bill of Rights" to protect air travel consumers.</option><option value="B">B. If baggage is lost, airlines pay a flat fee to reimburse the passenger.</option><option value="C">C. It is legal for an airline to overbook a flight.</option><option value="D">D. Airlines must provide monetary compensation if a flight is delayed due to bad weather.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is C: It is legal for an airline to overbook a flight.</h5><h5>Since there are no laws to protect the travel consumer from
overbooking, bumping passengers from flights is common when traveling by air. The U.S. Department of
Transportation does, however, require that airlines first ask for volunteers to give up their seats in
exchange for compensation. This may be in the form of cash or a voucher. The amount a passenger is
compensated for lost luggage is subject to negotiation. Most airlines have a ceiling on the amount paid
($2,500/passenger); international travelers are paid $9.07/lb. Currently, there is no international "Bill of
Rights." The United States Congress has developed several options for an airline passenger "Bill of
Rights," but there is nothing on the law books as of yet (August, 2009). Airlines are not required to pay
any compensation for flight delays due to bad weather.
</h5></div><h5 id='q4'>4. Wal-Mart, Domino's Pizza, and Avis Rent-a-Car are examples of</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. retailers.</option><option value="B">B. industrial distributors.</option><option value="C">C. agents.</option><option value="D">D. wholesalers.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: retailers.</h5><h5>Retailers are businesses that buy consumer goods or services and sell them to the ultimate
consumer. Wal-Mart, Domino's Pizza, and Avis Rent-a-Car all sell directly to consumers. Wholesalers
are businesses that buy goods from producers or agents and sell to retailers. Agents assist in the sale
and/or promotion of goods and services but do not take title to them. Industrial distributors are
intermediaries that buy industrial goods and services and sell them to industrial users.
</h5></div><h5 id='q5'>5. Channel members of a supply chain should be familiar with antitrust laws so they do not engage in
activities that</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. limit monopolies.</option><option value="B">B. hinder competition.</option><option value="C">C. restrict efficiency.</option><option value="D">D. prohibit authority.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: hinder competition.</h5><h5>Antitrust laws are regulations that prevent a person or company from taking any
actions to restrain free trade and competition in the marketplace. Businesses should understand the
types of business activities that violate antitrust laws, so they do not engage in them. If a business
requires tying agreements or attempts to create a monopoly, it may be violating antitrust laws. The
government fines a business when it violates antitrust laws. Actions that restrict efficiency or prohibit
authority do not violate antitrust laws.
</h5></div><h5 id='q6'>6. Before you can perform new tasks, you should first read the instruction manual so you can</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. use shortcuts to complete the tasks quickly.</option><option value="B">B. apply the directions in reverse order.</option><option value="C">C. perform the tasks in the order that you think works best.</option><option value="D">D. follow the written directions in the proper sequence.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: follow the written directions in the proper sequence.</h5><h5>The first step in applying written directions to
perform tasks usually involves reading the directions. Employees need to understand the written
directions before they can apply them. If employees do not read the directions and apply them in the
proper sequence, they may perform the tasks incorrectly. Therefore, reading the directions for
understanding and meaning is an important step. The use of shortcuts to complete a task may or may not
be included in the manual's written directions.
</h5></div><h5 id='q7'>7. What two elements are necessary for effective two-way communication to take place?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Sharing and caring</option><option value="B">B. Telling and informing</option><option value="C">C. Sharing and understanding</option><option value="D">D. Words and meaning</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sharing and understanding</h5><h5>Sharing means that there must be one who sends the message and one
who reacts to it. Understanding means that both sender and receiver grasp the same message.
Telling/Informing is a one-way process. All messages have words but meanings are generally not
included. Personal beliefs and attitudes determine if you care about a message or not.
</h5></div><h5 id='q8'>8. Once you know your group's purpose, what should you do next?</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Find out what people know about the subject</option><option value="B">B. Agree on ground rules</option><option value="C">C. Volunteer a new idea</option><option value="D">D. Contribute in a useful way</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: Agree on ground rules</h5><h5>Once you know your group's purpose, you can (as a group) lay some simple
ground rules for appropriate behavior during the discussion. Finding out what people know about the
subject and contributing in a useful way occur later in the process. Volunteering a new idea is a
discussion tool for contributing in an open-minded way.
</h5></div><h5 id='q9'>9. Which of the following actions is it important for a speaker to take when s/he makes an oral business
presentation to a large group:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Relax the audience by swaying back and forth when speaking</option><option value="B">B. Turn away from the audience when presenting visual aids</option><option value="C">C. Avoid eye contact with anyone in the audience</option><option value="D">D. Speak loudly enough for the audience to hear the message</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Speak loudly enough for the audience to hear the message</h5><h5>When making an oral presentation to a
group, the speaker should speak loudly enough for everyone in the audience to hear what s/he is saying.
If audience members cannot hear what the speaker is saying, they might misunderstand or misinterpret
the message. A speaker should try not to turn away from the audience when presenting visual aids and
should maintain eye contact with the audience. Because swaying back and forth can distract the
audience, the speaker should avoid this type of movement.
</h5></div><h5 id='q10'>10. What is a technique that often helps businesspeople to write effective business letters?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Developing charts</option><option value="B">B. Consulting references</option><option value="C">C. Preparing outlines</option><option value="D">D. Asking questions</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: Preparing outlines</h5><h5>Businesspeople often are expected to write business letters on a regular basis. One
technique that helps them to write effective business letters is to first prepare an outline. An outline is a
general plan giving only the main points to be covered. Preparing an outline helps businesspeople to
decide exactly what they want to say in the letter and to organize their thoughts. Businesspeople then
can use the outlines to write effective letters. Businesspeople usually do not ask questions, consult
references, or develop charts in order to write effective business letters.
</h5></div><h5 id='q11'>11. A persuasive message that asks a person to do something should be written in a way that makes it easy
for the person to</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. respond positively.</option><option value="B">B. organize logically.</option><option value="C">C. answer politely.</option><option value="D">D. read slowly.
</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: respond positively.</h5><h5>Persuasive messages often ask people to do something, such as buy a product,
make a donation, give a speech, etc. To be effective, the message should be written in a way that makes
it easy for the person to respond positively and agree to do what is asked. The messages might contain
toll-free telephone numbers, an offer to deliver a product for free, or to pick up a donation. People are
more likely to respond positively if it is easy to do so. Persuasive messages do not need to be read
slowly. The writer of the message organizes it logically. People might politely answer persuasive
messages, but the intent is to have them respond positively.
</h5></div><h5 id='q12'>12. Customer relations skills such as courtesy and friendliness should be emphasized during a business's</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. facilities design.</option><option value="B">B. market research.</option><option value="C">C. hiring process.</option><option value="D">D. technology planning.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: hiring process.</h5><h5>All messages have words but meanings are generally not
included. Personal beliefs and attitudes determine if you care about a message or not.
</h5></div><h5 id='q13'>13. A business improves its technology so it can better meet customer wants and needs. This results from a
business activity known as</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. continuous improvement.</option><option value="B">B. employee training.</option><option value="C">C. organizational structuring.</option><option value="D">D. business process management.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: business process management.</h5><h5>A customer-centric business is constantly striving to align its objectives
and activities with customer needs. Doing so is known as business process management (BPM). BPM
focuses on this alignment by stressing innovation, flexibility, and most importantly, technology. Employee
training involves educating workers on how to best perform their job duties. Organizational structuring
refers to the way business functions relate within a company. Continuous improvement refers to
continuously evaluating business processes to make them more efficient and effective.
</h5></div><h5 id='q14'>14. Distribution channel members must keep in mind that customers tend to</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. expect low service levels.</option><option value="B">B. define service differently.</option><option value="C">C. want immediate delivery.</option><option value="D">D. refuse late shipments.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: define service differently.</h5><h5>Customer service involves performing activities and providing benefits which
lead to customer satisfaction with the product and/or the business. Channel members, which are all of
the individuals and businesses that assist in moving products from the producer to the end user, depend
on each other to perform activities leading to customer satisfaction. While it is important to have products
when and where they are needed, it is also important to remember that customers often have different
ideas about service. For example, one customer may not accept a substitution for a certain item or brand
because they are concerned about quality, while another customer may want the item quickly and will
accept the substitution. Each customer has different expectations, so each customer defines service
differently. Expecting low service levels, wanting immediate delivery, and refusing late shipments are
different factors that influence how customers define service.
</h5></div><h5 id='q15'>15. The things that people buy in order to satisfy their economic wants are known as</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. free goods.</option><option value="B">B. economic votes.</option><option value="C">C. tangible objects.</option><option value="D">D. economic goods and services.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: economic goods and services.</h5><h5>People purchase both tangible objects (goods) and productive activities
(services) in order to satisfy their economic wants. When consumers purchase one good rather than
another, they are casting their dollar, or economic, votes for the item they purchased and against the
items not purchased. Noneconomic wants are satisfied by free goods—items which can be obtained
without spending money.
</h5></div><h5 id='q16'>16. Which of the following factors have provided businesses with more opportunities to buy and sell products
at the international level:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Protectionism</option><option value="B">B. Free-trade agreements</option><option value="C">C. Language barriers</option><option value="D">D. Strict safety standards</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: Free-trade agreements</h5><h5>Free-trade agreements lessen the trade restrictions (e.g., tariffs, quotas,
licenses) among countries. For example, the North American Free Trade Agreement (NAFTA) is a trade
agreement among the United States, Canada, and Mexico that has eliminated trade barriers. When fewer
trade barriers exist, there are more opportunities for businesses to buy and sell products in other
countries. Protectionism is a government's policy to protect domestic industries and businesses against
foreign competition. Protectionism, language barriers, and strict safety standards often hinder a
business's ability to enter international markets.
</h5></div><h5 id='q17'>17. What do businesses often need to do to adapt to today's markets?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Remodel corporate facilities</option><option value="B">B. Hire new management staff</option><option value="C">C. Participate in international trade</option><option value="D">D. Analyze organizational resources</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Analyze organizational resources</h5><h5>Organizational resources are everything the business uses to operate.
These resources include tangible items such as equipment and capital, as well as intangibles such as
patents and brand names. It is important to analyze the resources that are available in order for
businesses to adapt to today's markets. They need to determine if they have the capacity to adapt using
current resources. For example, a business might find that it needs new equipment in order to increase
productivity and remain competitive in today's market. Businesses do not necessarily need to hire new
management staff, participate in international trade, or remodel corporate facilities to be able to adapt to
today's markets.
</h5></div><h5 id='q18'>18. A major characteristic of a market economy is __________ ownership of property.</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. monopolistic</option><option value="B">B. limited</option><option value="C">C. government</option><option value="D">D. private</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: private</h5><h5>A market economy is an economic system in which the means of production and distribution are
owned and controlled by individuals and businesses. This ownership is not limited except by the abilities
of the individuals or businesses. Government ownership is a characteristic of a command economy.
Monopolies in which markets are controlled by single suppliers do exist in market economies, but under
controlled conditions.
</h5></div><h5 id='q19'>19. A business that encourages its workers to give input on issues affecting the company is using</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. quality of work life.</option><option value="B">B. specialization.</option><option value="C">C. motivation.</option><option value="D">D. participative decision-making.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: participative decision-making.</h5><h5>When businesses encourage employees to give input, share suggestions,
and take part in decision-making, participative decision-making occurs. Motivation involves giving
employees rewards and incentives for being productive. Specialization is the process of making the best
use of resources in the production of outputs. Quality of work life is the general conditions in which
employees work.
</h5></div><h5 id='q20'>20. Which of the following factors characterizes the growth phase of business cycles:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Demand for resources exceeds their availability.</option><option value="B">B. Consumers and producers are borrowing more money.</option><option value="C">C. Consumers are putting more money into savings.</option><option value="D">D. Producers are reducing their purchases of new goods.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consumers and producers are borrowing more money.</h5><h5>During the growth, or expansion, phase of
business cycles, interest rates on loans are low, thereby encouraging consumers and producers to
borrow more money in order to make even more purchases. During the peak phase, demand for all
resources exceeds their availability. During the peak and the contraction phases, people become less
hopeful about the future of business and begin to save more money. Also during the contraction phase,
producers reduce their purchase of new goods; instead, they try to sell the goods which are currently in
inventory.
</h5></div><h5 id='q21'>21. Refusing to do things you really don't want to do is __________ your self-esteem.</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. of no help to</option><option value="B">B. harmful to</option><option value="C">C. good for</option><option value="D">D. not good for</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: good for</h5><h5>Not doing things you don't want to do is one way of being responsible to yourself. It is as good
for your self-esteem as doing the things that make you feel good about yourself.
</h5></div><h5 id='q22'>22. Which of the following is often one of the causes of discrimination:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Harassment</option><option value="B">B. Diversity</option><option value="C">C. Stress</option><option value="D">D. Prejudice</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is D: Prejudice</h5><h5>Prejudice is opinion or judgment that is based on feeling or hearsay, rather than fact. Prejudice
often is a cause of discrimination, which is the unfair treatment of a person or a group based on the
person's or group's characteristics, such as race, religion, or gender. For example, if an employer
assumes that a person in not capable of doing a job simply because that person is a member of a certain
race, the employer is guilty of discrimination based on prejudice toward race. Diversity is all the ways in
which people differ, including background, age, gender, and race. Stress is a mental or emotional feeling
of pressure or tension. Harassment is any kind of behavior toward another person that is carried out for
the purpose of annoying or threatening the individual.
</h5></div><h5 id='q23'>23. Christie's coworkers know that she won't repeat what they tell her if they ask her not to do so. This
indicates that Christie is a(n) __________ coworker.</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. tactful</option><option value="B">B. straightforward</option><option value="C">C. trustworthy</option><option value="D">D. efficient

</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: trustworthy</h5><h5>Being trustworthy means that people can rely on you to do what you say you will do.
Trustworthy people will not tell anything they have been asked not to tell or pass along rumors that might
not be true. An efficient person is one who performs in an effective, organized manner. A straightforward
person is direct, open, and honest. A tactful person has the ability to do or say the right thing in any
circumstances.
</h5></div><h5 id='q24'>24. Showing your concern for another person by using appropriate facial expressions, gestures, and eye
contact is one way of exhibiting</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. self-understanding.</option><option value="B">B. interdependency.</option><option value="C">C. empathy.</option><option value="D">D. verbal communication.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: empathy.</h5><h5>Empathy is the ability to put yourself in another person's place. Concern or identification with
others can be demonstrated by using appropriate words or facial expressions, gestures, and eye contact.
Self-understanding is understanding oneself. Interdependency is the dependence of people on each
other. Verbal communication uses words rather than facial expressions, gestures, or eye contact.
</h5></div><h5 id='q25'>25. During a negotiation, Kara tells Jason that she will agree to help him with the department budget, if he
agrees to help her finish a research project. This is an example of</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. unfair collaboration.</option><option value="B">B. bargaining.</option><option value="C">C. peer pressure.</option><option value="D">D. self-control.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: bargaining.</h5><h5>Bargaining is a negotiating strategy that uses "give-and-take" tactics to reach an agreement.
One person gives up something the other person wants and, in return, that person offers something the
first person wants. A collaborative negotiating style is most likely to create an outcome that benefits both
parties. When both parties benefit, the result is usually fair, rather than unfair. Peer pressure occurs when
one person tries to influence another person of equal status to act in a particular way. Most often, peer
pressure is used to describe negative types of behavior, such as smoking. Self-control refers to a
person's ability to restrain his/her feelings, words, and actions.
</h5></div><h5 id='q26'>26. Taking a couple of deep breaths and counting to 10 slowly are techniques that will help you to</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. get what you want.</option><option value="B">B. keep your self-control.</option><option value="C">C. become more emotional.</option><option value="D">D. feel superior to others.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: keep your self-control.</h5><h5>Keeping your self-control is sometimes very hard to do during conversations in
which you tell people that you are unable to help them now. However, this is a time when it is important
to remain calm and not become angry or upset with someone. You don't want to say something that you
will regret later. If you feel yourself starting to lose it, take a couple of deep breaths. Count to 10 slowly.
These techniques help you to relax. Taking a couple of deep breaths and counting to 10 slowly will not
help you to get what you want, become more emotional, or feel superior to others.
</h5></div><h5 id='q27'>27. When persuading others to go along with a proposed change, you should</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. explain how the change will benefit them.</option><option value="B">B. tell them that there's a better way of doing things.</option><option value="C">C. minimize the amount of information you give.</option><option value="D">D. reinforce your proposal with facts and statistics.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: explain how the change will benefit them.</h5><h5>A change leader is a person who has the ability to guide others
and persuade them to alter their opinions or actions. Because some individuals have a difficult time
accepting and making changes, change leaders must be able to explain how a change will actually
benefit them. By doing so, the change leader has a better chance of persuading others that a new idea,
process, or action will improve a situation. Telling others that there is a better way of doing things (even if
it is true) might put them on the defensive and make them more resistant to change. Giving others as
little information as possible may make you appear like you are being dishonest, which may hinder your
ability to persuade others because they won't trust you. In many situations, facts and statistics aren't
necessary or relevant to the proposed change.
</h5></div><h5 id='q28'>28. Which of the following is an example of processing a transaction with a debit card:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Jayden purchased a new video game from Great Deal Electronics using a store-issued card
given to him by his grandfather.</option><option value="B">B. Tyler provided his card number and expiration date to the online-travel agency so he could obtain
his airline tickets now and receive his bill for the tickets later.</option><option value="C">C. After Ava finished her meal at an upscale restaurant, she presented the server with a card that
provided Ava with a special discount off her bill.</option><option value="D">D. When Naomi purchased office supplies, she presented the cashier with a card that automatically
withdrew funds from her business's checking account.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: When Naomi purchased office supplies, she presented the cashier with a card that automatically
withdrew funds from her business's checking account.</h5><h5>A debit card is a common method of payment for
goods and services. Issued by financial institutions (e.g., banks), a cardholder scans the card into a
machine at the point of sale. The information is transmitted to the appropriate location, and the funds are
electronically transferred from the cardholder's checking or savings account to the seller's account. Credit
is the arrangement in which businesses and individuals can purchase now and pay later. Individuals and
businesses can obtain the goods and services that they need right away, such as airline tickets, and then
pay for the tickets when they receive their statements from their lending institutions. Some businesses
offer membership or customer-loyalty cards, which provide their members or customers with product
discounts. Gift cards are store-issued vouchers that a gift giver can purchase for another person to use to
buy the store's products.
</h5></div><h5 id='q29'>29. If individuals are not self-employed, which of the following is a type of earned income they might receive:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Vacation pay</option><option value="B">B. Child support income</option><option value="C">C. Interest and dividends</option><option value="D">D. Trust disbursements</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: Vacation pay</h5><h5>If individuals receive paid vacation, they are being reimbursed for work done. Child support
income is unearned because it is court-ordered. Interest and dividends are unearned because an
individual is not required to work for them. Trust disbursements also qualify as unearned income because
no work is done to receive them.
</h5></div><h5 id='q30'>30. Insurance is a key element in lifelong financial planning that</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. provides protection against financial losses.</option><option value="B">B. protects a person from unethical salespeople.</option><option value="C">C. guarantees a solid financial future.</option><option value="D">D. is available only to property owners.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: provides protection against financial losses.</h5><h5>Insurance is designed to protect against financial losses,
whether those losses are related to property, health, or even life. Insurance does not protect a person
from unethical salespeople or guarantee a solid financial future. Insurance is available to property owners
and non-owners alike.
</h5></div><h5 id='q31'>31. When Alana prepares a report so that all of the financial data is clearly disclosed, she is ensuring that the
information is</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. transparent.</option><option value="B">B. relevant.</option><option value="C">C. timely.</option><option value="D">D. flexible.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is A: transparent.</h5><h5>When financial information is fully disclosed and is presented in a clear, understandable
way, it is transparent. Transparent information is not buried in a document or presented in a way that
deliberately confuses the reader. Relevant information consists of data that are helpful to users of the
information. Timely information is current or up-to-date. Flexible data are often used in or applicable to
different situations. Alana's report may or may not contain flexible, relevant, or timely information.
</h5></div><h5 id='q32'>32. Which of the following would a business use in order to know how much money is available to hire more
staff:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Accounting information</option><option value="B">B. Profit-and-loss statement</option><option value="C">C. Income statement</option><option value="D">D. Journal</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: Accounting information</h5><h5>The customer may file a civil lawsuit against
the business, and in some situations, the business's employee for fraudulent behavior. Assault and
intrusion are criminal acts that are addressed in the criminal court system rather than the civil court
system. Defamation is a tort that involves harm to an individual's or business's reputation.
</h5></div><h5 id='q33'>33. One reason why ethics is important in accounting is because financial records can be</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. made available to the public.</option><option value="B">B. interpreted in different ways.</option><option value="C">C. reviewed by government agencies.</option><option value="D">D. communicated in writing.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: interpreted in different ways.</h5><h5>Accounting is the process of keeping and interpreting financial records.
Because many issues and situations in business are different, it is possible to interpret financial
information in different ways. Some of these interpretations may be more ethical than others. In order to
interpret financial records in a way that is ethical, it is necessary to consider how others are affected by
the interpretation. For example, if investors are hurt by the financial interpretation, it may be unethical.
Not all financial records are made available to the public or reviewed by government agencies. Financial
records often are communicated in writing; however, this is not why ethics in accounting is important.
</h5></div><h5 id='q34'>34. One of the roles of ethics in finance is to encourage business employees to</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. make the right decisions.</option><option value="B">B. increase company profits.</option><option value="C">C. sell to customers.</option><option value="D">D. prepare operating budgets.

</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: make the right decisions.</h5><h5>Finance is the process of obtaining funds and using them to achieve the goals
of the business. As a result, employees involved in finance often have many decisions to make that affect
the company and its customers. Making the right decisions is often difficult because employees try to do
what is best for the company and for customers. Being ethical and having ethical standards to follow
often helps employees make the right decisions. The role of ethics in finance is not to encourage
employees to increase company profits, sell to customers, or prepare operating budgets.
</h5></div><h5 id='q35'>35. One way that the use of computer technology benefits human resources management is by</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. reducing the need to interview candidates.</option><option value="B">B. electronically processing information.</option><option value="C">C. quickly delegate work assignments.</option><option value="D">D. analyzing valuable feedback.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: electronically processing information.</h5><h5>Human resources management involves gathering and maintaining
an enormous amount of information related to employees and their jobs. One way that the use of
computer technology benefits human resources management is by electronically processing information.
Computer systems are able to store vast amounts of information in databases, allow managers to access
and update information when necessary, and organize information according to specific criteria. As a
result, fewer employees are needed to process the information and the amount of paperwork is reduced,
which saves money for the business. The use of computer technology does not reduce the need to
interview candidates or analyze valuable feedback. Departmental managers delegate work and provide
their subordinates with feedback.
</h5></div><h5 id='q36'>36. Which of the following is an example of external secondary information that a hotel chain might use for
marketing-research purposes:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Suggestion cards collected from guests</option><option value="B">B. Online industry reports</option><option value="C">C. Guest-registration data</option><option value="D">D. Occupancy forecasts</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Online industry reports</h5><h5>Secondary information is information collected by others. External secondary
information is obtained from sources outside the hotel chain, such as competitors' web sites, government
documents, or online industry reports. Guest-registration data or occupancy forecasts are internal
sources of secondary information that are collected for one reason and may be used for other purposes,
such as for marketing. Suggestion cards that the hotel collects from guests are an example of primary
information, which is information collected for the purpose at hand-to obtain feedback about their
experiences with the hotel's goods and services.
</h5></div><h5 id='q37'>37. Which of the following is an example of primary hospitality and tourism market information:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Financial statements provided in annual reports</option><option value="B">B. Automated guest history records that can be shared by affiliated businesses</option><option value="C">C. Reservation records and registration information</option><option value="D">D. Free reception for frequent travelers in which feedback is collected</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: Free reception for frequent travelers in which feedback is collected</h5><h5>Primary information is collected for
the purpose at hand, while secondary information is collected for some other purpose but used to provide
insight to the purpose at hand. Automated guest history records, reservation records and registration
information, and financial statements provided in annual reports are all examples of secondary
information.
</h5></div><h5 id='q38'>38. A restaurant wants to predict how their customers will react to a new menu. What type of relationship
should the restaurant mine from blogs?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Sequential patterns</option><option value="B">B. Classes</option><option value="C">C. Clusters</option><option value="D">D. Associations</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sequential patterns</h5><h5>When mining data to anticipate behavior patterns and trends, the restaurant should
check for sequential patterns in the data. When stored data are used to locate data in predetermined
groups, then the relationship of classes is sought. Clusters of relationships are found when items are
grouped according to logical relationships or customer preferences. Data can also be mined to identify
associations among data.
</h5></div><h5 id='q39'>39. Calculate the mean using the following statistical table:
Numeric Value of Response
6
5
4
3
2
1</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. 2.9</option><option value="B">B. 3.3

Number of Responses
8
12
16
14
9
6</option><option value="C">C. 3.7</option><option value="D">D. 4.1
</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: 3.7</h5><h5>The mean is the arithmetic average of the statistical sample. To calculate the mean, first multiply the
value of each response by the number of responses (6 x 8 = 48; 5 x 12 = 60; 4 x 16 = 64; 3 x 14 = 42; 2 x
9 = 18; 1 x 6 = 6). Then, add the totals (48 + 60 + 64 + 42 + 18 + 6 = 238), and tabulate the total number
of responses (8 + 12 + 16 + 14 + 9 + 6 = 65). Divide the total by the number of responses to determine
the mean (238 ÷ 65 = 3.66 or 3.7).
</h5></div><h5 id='q40'>40. The research data indicate a correlation of -1 > r > 0. What does that tell you?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. The two variables tend to increase or decrease together.</option><option value="B">B. One variable increases as the other variable decreases.</option><option value="C">C. There is perfect correlation between the two variables.</option><option value="D">D. The two variables do not vary together at all.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: One variable increases as the other variable decreases.</h5><h5>The correlation coefficient, r, ranges from -1 to
+1. A correlation coefficient of -1 > r > 0 tells the reader that as variable X increases, variable Y
decreases. When the two variables tend to increase or decrease together, the correlation coefficient is 0
> r > 1. When two variables do not vary together at all, the correlation coefficient is r = 0. When there is
perfect correlation between two variables, r = 1.
</h5></div><h5 id='q41'>41. The purpose of using presentation software to prepare multimedia presentations often is to use those
presentations to</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. support report findings.</option><option value="B">B. maintain customer files.</option><option value="C">C. develop web sites.</option><option value="D">D. access online resources.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: support report findings.</h5><h5>Presentation software is used to produce multimedia presentations that often
include slides, video, graphics, sound, color, etc. Because the information contained in reports is often
technical or complex, businesses often prepare multimedia presentations to explain and support the
report findings. The visual presentation often makes complicated information easier to understand as well
as more interesting. The purpose of using presentation software to prepare multimedia presentations is
not to use the presentation to maintain customer files, develop web sites, or access online resources.
</h5></div><h5 id='q42'>42. When presenting research findings orally, you can help an audience of business professionals to better
understand the findings if you</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. designate a research team member to ask questions.</option><option value="B">B. call on the audience to explain their understanding of the research.</option><option value="C">C. use meaningful comparisons.</option><option value="D">D. provide a bibliography of the resources cited.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: use meaningful comparisons.</h5><h5>When the presenter of a research report compares the findings with
information previously known by the audience, the presenter helps to make the findings concrete and
meaningful to the audience. Providing a bibliography of resources cited may be of interest to the
audience, but it does not help them better understand your findings. Calling on the audience to explain
their understanding of the research and asking them questions are classroom activities—not something
done in the business world. Instead, the audience will ask questions that you should be prepared to
answer.
</h5></div><h5 id='q43'>43. A small, local restaurant has decided to advertise its elegant atmosphere and qualified wait staff. This
approach is an example of __________ marketing.</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. service</option><option value="B">B. product</option><option value="C">C. mass</option><option value="D">D. target

</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: service</h5><h5>Service marketing involves the marketing of service-oriented businesses and activities, such as
food service. The restaurant is promoting its atmosphere and qualified staff who provide the service.
Product marketing is the marketing of goods, such as the food entrees that the restaurant sells. Mass
marketing involves appealing to the whole market. Target marketing is selecting specific markets and
advertising to them.
</h5></div><h5 id='q44'>44. A company wants the public to perceive it as a builder of luxury resorts. What goal does this illustrate?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Projecting a certain image</option><option value="B">B. Increasing sales</option><option value="C">C. Increasing efficiency/productivity</option><option value="D">D. Achieving stability</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Projecting a certain image</h5><h5>If a company wants the public to perceive it in a certain way, it is trying to
project a certain image. Increasing sales, increasing efficiency/ productivity, and achieving stability are all
company goals, but they are not necessarily related to how a company wants to be perceived by the
public.
</h5></div><h5 id='q45'>45. One of the benefits to a hotel of keeping a guest-history file is that the information in the file can help the
hotel to</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. advertise effectively.</option><option value="B">B. stay within a budget.</option><option value="C">C. hire well-trained workers.</option><option value="D">D. register walk-in guests efficiently.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: advertise effectively.</h5><h5>The guest-history file contains information such as the guest's name and address,
length of stay(s), date of stay(s), method of payment, etc. Knowing the geographic location of its guests
allows the hotel to target its advertising and other promotions to those areas. If walk-in guests have never
stayed at the property, the hotel would not have a guest history for them. The files also would not help
the hotel to stay within the budget or to hire employees.
</h5></div><h5 id='q46'>46. One way for a hospitality business to obtain current information in a cost-effective and efficient manner is
by</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. interviewing experts.</option><option value="B">B. developing a survey.</option><option value="C">C. reviewing archived journals.</option><option value="D">D. accessing an Internet search engine.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is D: accessing an Internet search engine.</h5><h5>A quick, cost-efficient way to obtain current information is by
accessing an Internet search engine. A search engine is a software program that automatically crawls the
Web looking for information pertaining to specified search terms and that displays results. Developing a
survey does not obtain the desired information unless it is sent out, completed, tabulated, and analyzed.
Archived journals can be found in libraries or by accessing online sources, but may not contain current
information. Setting up interviews with experts might take time, so this option is not efficient and could be
more costly for the hospitality business.
</h5></div><h5 id='q47'>47. Information management can be a challenge because</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. there is only one "right" way to do it.</option><option value="B">B. there is often not enough information to manage.</option><option value="C">C. many people don't understand what it is.</option><option value="D">D. no one wants to participate in it.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: many people don't understand what it is.</h5><h5>Information management can be a challenge because many
people don't understand what it is or what role they should play in it. Many people may want to participate
in information management but just do not know how. There is often too much information to manage,
something known as information overload. There is no one "right" way to approach information
management.
</h5></div><h5 id='q48'>48. Mr. Edwards saved some confidential customer information from his employer's computer network onto a
flash drive, so that he could work on a project from a different location. Without realizing it, Mr. Edwards
dropped the flash drive in a parking lot on his way to a meeting. This situation is an example of a risk
related to</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. employee privacy.</option><option value="B">B. patent protection.</option><option value="C">C. information security.</option><option value="D">D. data entry.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: information security.</h5><h5>Businesses often maintain personal information about their customers, such as
credit-card numbers, bank-account numbers, and account passwords. Businesses must take reasonable
care to protect and secure their customers' personal information to reduce the risk of fraudulent behavior,
such as computer hacking and identity theft. Businesses should develop policies about removing digital
information from their facilities. A patent provides legal protection to the owners of inventions. The
customers' privacy, rather than employees' privacy, has been compromised in the presented situation.
There is no indication that data entry problems exist with the information provided.
</h5></div><h5 id='q49'>49. Which of the following is an example of the digital convergence occurring on the Internet:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Internet companies increasing their bandwidth</option><option value="B">B. Internet companies offering wireless service</option><option value="C">C. Internet companies offering phone service</option><option value="D">D. Internet companies increasing their use of WANs</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: Internet companies offering phone service</h5><h5>Digital convergence is the tendency of digital services that
were once separate entities to combine into new forms. An example of the Internet offering phone service
is Skype. Wireless, bandwidth, and WANS are not examples of digital convergence.
</h5></div><h5 id='q50'>50. Justin's company is keeping documents regarding the accidental death of an employee while on the job.
In case the employee's family sues the company, the business should have __________ records on
hand.</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. promotional</option><option value="B">B. payroll</option><option value="C">C. asset</option><option value="D">D. legal</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: legal</h5><h5>Any lawsuit in which a company is involved requires the business to have legal records. These
records can be almost any business document created. Payroll records, asset records, or promotional
records may be required in certain legal situations. But in Justin's company's situation, there has been an
accidental death of an employee while on the job. This means that legal records should be on hand in
case the family sues.
</h5></div><h5 id='q51'>51. A growing trend that is influencing the way that many companies do business is the concern for</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. distributing the wealth.</option><option value="B">B. protecting the environment.</option><option value="C">C. monitoring the economy.</option><option value="D">D. regulating the government.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: protecting the environment.</h5><h5>The growing concern over the condition of the environment is influencing the
way that many companies do business. Businesses that once ignored the damage they did to the
environment are now spending billions of dollars to correct the problems and to change the way they
operate. Public sentiment is forcing these companies to address environmental issues, such as pollution.
The businesses that fail to do their part to protect the environment often anger consumers, which may
lead to a loss of sales. The government, rather than business, is concerned with the distribution of
wealth. Monitoring the economy is not a new trend but an ongoing business function. Businesses do not
regulate government; instead, government regulates business.
</h5></div><h5 id='q52'>52. A current trend in the hospitality industry is to build loyal customer relationships and enhance service
levels by optimizing the use of</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. independent travel agents.</option><option value="B">B. satellite roving devices.</option><option value="C">C. Internet web sites.</option><option value="D">D. service rating advisors.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Internet web sites.</h5><h5>The evolution of the Internet has made it possible for customers to book, cancel, and
change their hotel reservations as well as gather information and take a virtual tour of the guest rooms of
various lodging facilities. New technology has made it possible for hospitality businesses to track an
Internet user's online purchasing habits. The information gathered through the tracking system can be
analyzed and used to develop customer relationships via direct marketing efforts (e.g., specials,
surveys). Because more people are booking lodging facilities via the Internet, the use of travel agents is
decreasing. Satellite roving devices and service rating advisors are not common terms used to describe
concepts related to the hospitality industry.
</h5></div><h5 id='q53'>53. One way that businesses maintain the security of data that they send over the Internet to clients is by
using a software program that prevents a(n)</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. virus from being downloaded.</option><option value="B">B. document from being forwarded.</option><option value="C">C. attachment from being included.</option><option value="D">D. search engine from being used.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: document from being forwarded.</h5><h5>Some businesses use software programs that help maintain the
security of data they send over the Internet to clients. These programs prevent documents from being
forwarded to others so the information does not end up in the hands of competitors. Also, these programs
prevent others from copying, editing, or printing the documents which helps maintain the information in its
original form. These software programs do not prevent a virus from being downloaded, an attachment
from being included, or a search engine from being used.
</h5></div><h5 id='q54'>54. Judy fell from a display platform and tore the ligaments in her ankle. Her injury is considered a(n)</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. strain.</option><option value="B">B. open wound.</option><option value="C">C. hernia.</option><option value="D">D. sprain.

</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: sprain.

</h5><h5>Explanation not available</h5></div><h5 id='q55'>55. What type of computer program helps protect digital business information from the negative effects of
malware?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Spyware</option><option value="B">B. Firewalls</option><option value="C">C. Cookies</option><option value="D">D. Shareware</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Firewalls</h5><h5>Malware (malicious software) is an illegal computer program that is used to disrupt computer
processes, destroy computer programs, and access confidential business information. Firewalls are
types of computer programs that combat these types of dishonest activities and protect a business's
digital information. Spyware is a computer program that tracks and captures a computer user's Internet
usage habits, e-mail messages, etc. Cookies are text files that are put on a web-site visitor's hard disk
and then later retrieved during subsequent visits to the site to track Internet behavior. Shareware is a
type of computer program in which computer users can sign up for the software on a trial basis. After the
trial expires, the computer user can purchase and register the program, if desired.
</h5></div><h5 id='q56'>56. What should an event's project managers do before asking for contributions?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Prepare a budget</option><option value="B">B. Open an account</option><option value="C">C. Arrange for credit</option><option value="D">D. Hold a fund-raiser</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: Prepare a budget</h5><h5>Most projects have costs involved. However, before asking everyone you know to
make a contribution, it is important to prepare a budget. By developing a budget, project managers will
have an accurate picture of what it will cost to do the project. Then, they can ask others for the financial
resources to cover the costs. It is not necessary to open an account or arrange for credit before asking
for contributions. Holding a fund-raiser is one way to obtain financial assistance after preparing a budget
to find out the amount of money that will be needed.
</h5></div><h5 id='q57'>57. Which of the following is NOT something you need to complete your project:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Sponsors</option><option value="B">B. Tools</option><option value="C">C. Permission</option><option value="D">D. Money</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sponsors</h5><h5>You do not need sponsors to complete your project. Sponsors are not a necessary resource.
You do need tools, money, and permission (if required).
</h5></div><h5 id='q58'>58. Some businesses use an automatic reorder system to maintain an adequate</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. work environment.</option><option value="B">B. inventory of supplies.</option><option value="C">C. budget for expenses.</option><option value="D">D. maintenance system.</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: inventory of supplies.</h5><h5>When businesses use an automatic reorder system, an order for additional
supplies is placed when the inventory decreases to an established level. This makes it possible for a
business to effectively maintain an inventory of supplies at the right level. The business does not tie up
funds by purchasing too many supplies, or risk running out of supplies. Businesses do not use an
automatic reorder system to maintain an adequate work environment, budget for expenses, or
maintenance system.
</h5></div><h5 id='q59'>59. What production activity establishes a timetable?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Routing</option><option value="B">B. Dispatching
</option><option value="C">C. Planning</option><option value="D">D. Scheduling
</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: Scheduling
</h5><h5>Explanation not available</h5></div><h5 id='q60'>60. When dealing with an actual robbery situation, it is important that employees remember to</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. keep the business's safe locked.</option><option value="B">B. keep as little cash on hand as possible.</option><option value="C">C. discuss the situation with anyone who asks about it.</option><option value="D">D. give the robbers what they want to avoid potential injury.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: give the robbers what they want to avoid potential injury.</h5><h5>In order to deal with robbers, it is always best to
give in to their demands without causing a disturbance. Robbers want to enter a business and leave
quickly, and any startling activity could make them panic and cause employees additional harm. Although
it is good advice to keep as little cash on hand as possible to limit losses, it will not impact the actual
robbery situation. Keeping the safe locked will also limit losses but, again, doesn't keep the robbery from
occurring. As a rule of thumb, employees should not discuss the situation with anyone except
management and the police.
</h5></div><h5 id='q61'>61. While an adventure tour guide is leading a white-water rafting group, a group member falls and breaks an
ankle. What are the primary provisions the guide needs to help the injured group member?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Medical kit and cellular phone</option><option value="B">B. Toolbox and flashlight</option><option value="C">C. Map and compass</option><option value="D">D. Prescription pain medication</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: Medical kit and cellular phone</h5><h5>Medical kits should contain items needed to initiate emergency care (e.g.,
a splint). Depending on the location of the accident and the extent of the injury, a cellular phone would be
useful to call for additional help and transportation of the injured party. A toolbox, flashlight, map, and
compass may be helpful but are not the primary items needed for the described situation. Most first-aid or
medical kits include nonprescription pain relievers, such as Ibuprofen, rather than medication prescribed
by medical doctors.
</h5></div><h5 id='q62'>62. People who figure out what they need to do to obtain what they want are often able to</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. compete with others.</option><option value="B">B. act independently.</option><option value="C">C. reach their goals.</option><option value="D">D. achieve financial success.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: reach their goals.</h5><h5>An important step in reaching a goal is identifying the goal and figuring out what needs
to be done in order to reach it. Acting independently, achieving financial success, and competing with
others are examples of goals that people might set for themselves.
</h5></div><h5 id='q63'>63. Time management helps to reduce stress because it</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. allows adequate time for personal and professional activities.</option><option value="B">B. provides less time for rest and relaxation.</option><option value="C">C. encourages procrastination in planning necessary activities.</option><option value="D">D. increases feelings of pressure and tension.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: allows adequate time for personal and professional activities.</h5><h5>The use of time-management techniques
forces us to take care of important activities immediately, which relieves pressure and tension. It allows
more time for rest and relaxation. This will ultimately reduce stress.
</h5></div><h5 id='q64'>64. The job interviewer told Elizabeth at the end of the interview that he couldn't offer her the job because
she lacked a particular skill that the job required. Elizabeth's next step should be to</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. look for another similar job opportunity.</option><option value="B">B. write the interviewer a follow-up letter.</option><option value="C">C. file a formal complaint with the EEOC.</option><option value="D">D. look for training in the required job skill.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is B: write the interviewer a follow-up letter.</h5><h5>Expressing appreciation for the interview is just as important when
you know you won't get the job as it is when you believe you might be hired. It makes a good impression
on the company, puts your name into their files and, in some cases, may make them reconsider their
decision. The letter should be written while the details of the interview are fresh in your mind. After that,
you might want to find out about training for the skill you lack and to look for a similar job opportunity.
There is no basis for filing a complaint in this case.
</h5></div><h5 id='q65'>65. Why do many businesses provide opportunities for their employees to continue their education or receive
additional training?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. To be able to promote from within</option><option value="B">B. To provide financial assistance</option><option value="C">C. To identify problems in the company</option><option value="D">D. To support the local community college</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: To be able to promote from within</h5><h5>Many businesses prefer to promote from within whenever possible
and help current employees move up the career ladder. To do this, businesses often provide
opportunities for their employees to continue their education or receive additional training. As a result,
they have a pool of qualified employees to choose from when higher-level jobs become available. This
benefits the employees because they can advance within the business. Businesses often provide
financial assistance, such as tuition reimbursement, to help employees continue their education.
However, that is not the reason for providing the additional training. Businesses do not provide
educational opportunities to identify problems in the company or to support the local community college.
</h5></div><h5 id='q66'>66. One of the main benefits for companies participating in a trade show is the opportunity to</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. meet with competitors.</option><option value="B">B. obtain sales leads.</option><option value="C">C. visit new cities.</option><option value="D">D. hire new employees.

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is B: obtain sales leads.</h5><h5>People who attend trade shows usually have an interest in the goods and services on
exhibit. Therefore, they are good sales leads for the companies participating in the show. Companies do
not participate in trade shows in order to meet with the competition, although trade shows do give
businesses a chance to see what competitors are doing. Visiting new cities and hiring new employees
are not main benefits of trade show participation.
</h5></div><h5 id='q67'>67. A primary reason hospitality employees and businesses join professional or trade organizations is to</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. increase employee productivity.</option><option value="B">B. develop promotional efforts and materials.</option><option value="C">C. qualify for additional government funding.</option><option value="D">D. obtain further education and certification.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: obtain further education and certification.</h5><h5>Trade or professional organizations consist of individuals or
groups that work within a particular industry. Benefits of belonging to a professional organization include
networking opportunities, the establishment of consistent industry standards, trade shows, and venues
for members to further their education (e.g., seminars, workshops, classes, certification) within the
industry. Continuing education programs can help people keep up with trends associated with their
industry. The availability of government funding is dependent on each government's resources and
guidelines. Therefore, it cannot be assumed that all governments provide financial support to trade
organizations. Joining a professional organization does not necessarily improve or increase employee
productivity. Joining a trade organization might help industry members learn about the use of promotion,
but it does not necessarily develop the materials or programs for them.
</h5></div><h5 id='q68'>68. What is the typical effect of an economic slowdown on the hospitality industry?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. An increase in the number of guests and a decrease in the number of rooms available</option><option value="B">B. A decrease in the number of guests and an increase in the number of rooms available</option><option value="C">C. A decrease in the number of guests and a decrease in the number of rooms available</option><option value="D">D. An increase in the number of guests and an increase in the number of rooms available</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: A decrease in the number of guests and an increase in the number of rooms available</h5><h5>A decrease in the
number of guests occurs during economic slowdowns because people are reluctant to spend their
discretionary income on travel. Consequently, there is an increase in the number of rooms available as
more rooms become available for rent. An increase in the number of guests and an increase in the
number of rooms available does not follow the law of supply and demand, which suggests that as
demand for rooms go up, supply typically goes down. A decrease in the number of guests and a
decrease in the number of rooms available would work the other way because as demand goes down,
the supply of rooms available for rent typically goes up. An increase in the number of guests and a
decrease in the number of rooms available typically occurs during good economic times when people are
more willing to spend their discretionary income on travel.
</h5></div><h5 id='q69'>69. In the travel and tourism industry, customers' perceptions of value and worth are often associated with</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. price.</option><option value="B">B. profit.</option><option value="C">C. place.</option><option value="D">D. promotion.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: price.</h5><h5>Price is the marketing element requiring marketers to determine the amount of money they will ask
in exchange for their products. In the travel and tourism industry, price is closely associated with
customers' perceptions of value and worth. If customers think the travel product has value and worth,
they are often willing to pay for it. Also, value and worth differ from customer to customer, so what is
value to one customer might not be value to another. For example, some people prefer economy hotels
because saving money is a value to them. To other people, receiving many services is a value that they
are willing to pay for. Profit is the monetary reward a business owner receives for taking the risk involved
in investing in a business. Place is the marketing element focusing on considerations in getting a
selected product in the right place at the right time. Promotion is a marketing function needed to
communicate information about goods, services, images, and/or ideas to achieve a desired outcome.
</h5></div><h5 id='q70'>70. Which of the following would be the best option for restaurant managers to do to encourage the
identification of new product ideas:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Encourage family members to generate new product suggestions and ideas</option><option value="B">B. Encourage competitors to recommend new product ideas</option><option value="C">C. Encourage employees to report new product ideas from other restaurants they visit</option><option value="D">D. Encourage their trade association to regularly submit new product ideas to local restaurants</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: Encourage employees to report new product ideas from other restaurants they visit</h5><h5>New product ideas
come from a variety of internal and external sources. Some examples of internal sources include
personal observation; formal research and development activities; recommendations from corporate,
employees, family members, and people who provide professional assistance to the restaurant such as
bankers, attorneys, etc. The problem with asking family members for recommendations is that managers
might feel that they can't reject bad ideas. Competitors won't recommend new products because they
don't want to lose business to others. Although trade associations might suggest ideas for new products,
the fact that they're recommending the products to local restaurants would fail to give any one restaurant
a competitive advantage.
</h5></div><h5 id='q71'>71. Several clients indicate an interest in products that the business does not currently offer. These requests
can be given to buyers to help them to</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. forecast sales.</option><option value="B">B. determine what to buy.</option><option value="C">C. select vendors.</option><option value="D">D. research the market.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: determine what to buy.</h5><h5>Buyers consider customer requests in order to determine whether a profitable
market exists for new goods and services. A sales forecast is a prediction of what sales to a target
market will be over a specific period of time. Marketing research is the process of collecting, recording,
and analyzing data for marketing decision-making. Buyers obtain information about prices, terms,
delivery, etc., from several vendors during the process of vendor selection.
</h5></div><h5 id='q72'>72. How does a product's peak selling season affect a business's purchasing efforts?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Businesses usually buy small quantities of the item on a more frequent basis.</option><option value="B">B. Businesses generally need less lead time for large quantity orders.</option><option value="C">C. Businesses usually base order size on the competition's buying behavior.</option><option value="D">D. Businesses generally buy the item in larger quantities.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: Businesses generally buy the item in larger quantities.</h5><h5>A business's peak selling season occurs when
customer demand for certain goods and services is very high. For example, the demand for beachwear
and outdoor furniture is usually highest during the spring and summer months in the northern
hemisphere. Therefore, businesses generally try to order these types of items so they have enough on
hand to meet demand. Some types of businesses (e.g., resort gift shops) carry similar items need them
at the same time, so vendors and manufacturers might need more lead time to fill orders. Although
businesses might purchase small quantities of the item on a frequent basis, they run a risk of back-order
situations from their suppliers and, therefore, cannot meet customer demand. Although businesses
consider competition when marketing products, other factors are often considered when determining the
quantity of items to purchase.
</h5></div><h5 id='q73'>73. Which of the following is an example of a product in the travel and tourism industry:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. A brochure explaining cruise options</option><option value="B">B. A fly-drive vacation package</option><option value="C">C. An inquiry about flight schedules</option><option value="D">D. A confirmation letter to a customer</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: A fly-drive vacation package</h5><h5>The main product in the travel and tourism industry is the experience. This
experience often includes contact with tangible objects such as airplanes, automobiles, cruise lines, etc.
However, what the customer is buying is the actual experience of traveling and visiting destinations. In
this example, the fly-drive vacation package is the product because it is what the customer will
experience. A brochure explaining cruise options is a promotional piece. Checking on flight schedules
and sending confirmation letters are services involved in selling the travel and tourism product.
</h5></div><h5 id='q74'>74. A large company that owns a chain of economy hotels recently developed plans to start a chain of
upscale hotels. This is an example of</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. multicorporate franchising.</option><option value="B">B. market potential.</option><option value="C">C. product extensions.</option><option value="D">D. property management systems.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: product extensions.</h5><h5>A product extension is a good or service added to an existing product line or product
category. An example is a hotel chain adding a new line of hotels. Valet service and full-service dining
can be found in many upscale hotels but not at an economy facility. A company that owns more than one
type of hotel and offers different levels of service or amenities have extensions from the main product
(hospitality services). Market potential refers to estimated revenues or income that can be generated
from a specific market segment. Franchising is a method of distributing goods and services through a
licensing arrangement between a parent company and another individual or company outside the parent
company. Multicorporate franchising is not a term used in the hospitality and tourism industry. Property
management systems are the central computer or technological systems that a hotel uses.
</h5></div><h5 id='q75'>75. Which of the following is a service that might influence a business owner's decision to select a certain
vendor:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Budgeting</option><option value="B">B. Forecasting</option><option value="C">C. Regulating</option><option value="D">D. Advertising</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: Advertising</h5><h5>to them.
</h5></div><h5 id='q76'>76. Four Seasons Hotels and Resorts, which prides itself on its extensive collection of art and artifacts, has
created a series of audio programs featuring discussions with art experts about works of art found at Four
Season Hotels and Resorts around the country. These recordings, available in several different formats,
are available for download at the company's web site. Which of the following terms best describes these
audio programs:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Podcasts</option><option value="B">B. Social media</option><option value="C">C. Blogs</option><option value="D">D. Ad serving</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: Podcasts</h5><h5>Podcasts are digital audio and/or visual programs that can be automatically or manually
downloaded from the Internet to customers' mp3 players or computers. Customers can then listen to
and/or watch the podcasts at their leisure. Hospitality and tourism companies may use podcasts to
educate or entertain potential guests while also advertising their organizations' services. Social media are
typically networking web sites that rely on users for content. Blogs are online journals containing entries
written by a company, individual, or group of people. Ad serving involves advertising to an Internet user
while his/her chosen web page is loading onto her/his browser.
</h5></div><h5 id='q77'>77. Which of the following is an example of a social bookmarking web site:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Del.icio.us</option><option value="B">B. Google</option><option value="C">C. Bing</option><option value="D">D. Facebook

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Del.icio.us</h5><h5>Social bookmarking web sites such as Del.icio.us allow subscribers to post, tag, and rank
links to articles, blogs, photos, and videos online. Some do so for strictly personal purposes, such as to
bookmark web pages, articles, or photos that they would like to access away from home or share with
their friends. Other individuals access social bookmarking web sites to search for more “trusted” web
sites that focus on a particular topic. Because these individuals may bypass more traditional search
engines such as Google and Bing entirely, businesses often post their own web sites and blog entries on
social bookmarking sites as well. To improve their chances of being seen on these social bookmarking
sites even further, businesses also encourage their web site and blog visitors to tag and/or rank their
sites for many different social bookmarking sites. Facebook is a social networking web site, not a social
bookmarking web site.
</h5></div><h5 id='q78'>78. Which of the following computer programs prevents e-mail messages containing the word "free" in the
subject header from entering the inbox:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Queues</option><option value="B">B. Gophers</option><option value="C">C. Filters</option><option value="D">D. Servers</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: Filters</h5><h5>Filters are computer programs that block out unwanted information such as junk e-mail. Some
filters only allow e-mails from preselected addresses such as those from friends and family members to
pass through. Others don't let e-mails with certain words such as "free" in the subject header enter the
inbox. Filters are an obstacle to businesses because they can prevent the delivery of their e-mail
messages. Servers, gophers, and queues are not computer programs.
</h5></div><h5 id='q79'>79. Using the color yellow in an advertisement would help to create a(n)</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. appropriate ad for St. Patrick's Day.</option><option value="B">B. feeling of cheerfulness and warmth.</option><option value="C">C. very legible advertisement.</option><option value="D">D. feeling of coolness and quiet.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: feeling of cheerfulness and warmth.</h5><h5>Yellow suggests sunlight, which provides both warmth and cheer.
Whether an ad using yellow was very legible would depend upon the color(s) used with it—black on
yellow is easy to read. St. Patrick's promotions are traditionally green. A feeling of coolness and quiet is
created by blue.
</h5></div><h5 id='q80'>80. Which of the following has a significant impact on the composition of a print ad:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Production costs</option><option value="B">B. Storyboard</option><option value="C">C. Color harmonies</option><option value="D">D. Dialogue</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: Color harmonies</h5><h5>The various colors in an ad need to go together, or be in harmony, for the ad to be
visually appealing. Color is an important element of an ad because color attracts attention and helps to
create a mood. Therefore, it is important to use colors that go together well and create the desired look.
Storyboard is the outline of a television commercial. Production costs do not impact the composition of a
print ad because composition involves the design of the ad. Dialogue is important in television
commercials and radio spots.
</h5></div><h5 id='q81'>81. One way to use the concept of digital color is to prepare</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. publicity plans.</option><option value="B">B. accurate proofs.</option><option value="C">C. marketing programs.</option><option value="D">D. sales procedures.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: accurate proofs.</h5><h5>Digital color is one aspect of digital imaging which involves the development of
computer-generated ads and promotional materials and the printing of those materials. Digital color also
is a method of preparing accurate proofs that portray the colors exactly as they will appear in the printed
piece because the proof is prepared from the same computer file that will be used to print the piece. The
concept of digital color is not used to prepare publicity plans, marketing programs, or sales procedures.
</h5></div><h5 id='q82'>82. At the Clara's Pizza Parlor web site, customers are encouraged to send electronic postcards advertising
the restaurant to friends and families. This is an example of __________ word-of-mouth marketing.</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. amplified</option><option value="B">B. organic</option><option value="C">C. celebrity</option><option value="D">D. inconspicuous</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: amplified</h5><h5>Word-of-mouth marketing occurs when customers tell others of their satisfaction with a
particular business. Amplified word-of-mouth marketing takes place when marketers purposely
encourage their customers to share information about a business with others in their community. Clara's
Pizza Parlor, for example, deliberately asks visitors to its web site to send information about the
restaurant—in the guise of a postcard—to their families and friends. Organic word-of-mouth marketing is
another word-of-mouth strategy. Organic word-of-mouth marketing occurs when satisfied customers
voluntarily tell people around them about a business that they like, without the business prompting them
to do so. Celebrities are sometimes used as a word-of-mouth strategy, but that is not true of this
example. Inconspicuous word-of-mouth marketing is a fictitious term.
</h5></div><h5 id='q83'>83. Advertising copy that explains the features of a product and how those features benefit consumers is
using a(n) __________ strategy.</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. irrational</option><option value="B">B. imaginative</option><option value="C">C. emotional</option><option value="D">D. factual</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: factual</h5><h5>There are several strategies that copywriters can use to develop advertising copy. One of these
is the factual strategy that involves explaining what a product is, what it does, and how it benefits
consumers. Copywriters are using facts to promote the product, such as explaining size or composition.
For example, factual copy might state that a cell phone weighs less than one pound, is made of scratchresistant material, and can be programmed to hold 500 numbers. The imaginative strategy would focus
on explaining new and unusual ways to use a product. The emotional strategy appeals to consumers on
a personal level and focuses on their feelings, such as love and loyalty. The emotional strategy also
includes an irrational appeal rather than a factual appeal.
</h5></div><h5 id='q84'>84. Which of the following is effective mobile ad copy for a teenage target market:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Psst. Are you hungry? Then stop by Pete's Pizza for a free slice of cheese pizza. Today only.
Tell all your friends. See you soon.</option><option value="B">B. RU hngry? thN stop by Pete's <) 4 a fre slice. 2day 1ly. CU sn.</option><option value="C">C. Pete's Pizza. Free slice.</option><option value="D">D. When was the last time that you ate? Aren't you getting hungry? Then you've got to stop by.
We'd love to see you. Bye.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: RU hngry? thN stop by Pete's <) 4 a fre slice. 2day 1ly. CU sn.</h5><h5>Although text messaging abbreviations
are typically avoided in mobile ad copy, there are times when they are appropriate. For instance, if a
restaurant's target market is teenagers, then it might send a mobile ad to teenagers in "their" language—
text messaging lingo. Teenagers are more likely to respond to a message that uses the same
abbreviations that they do rather than writing out every word in what becomes a very long message.
While shorter messages are better, "Pete's Pizza. Free slice." is too short to give the ad recipients all of
the information that they need, such as the fact that the offer is only good today.
</h5></div><h5 id='q85'>85. The purpose of checking an advertising proof is to</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. check the ad's style.</option><option value="B">B. correct any errors.
</option><option value="C">C. finalize the copy.</option><option value="D">D. choose the ad's placement.
</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: correct any errors.
</h5><h5>Explanation not available</h5></div><h5 id='q86'>86. When identifying community issues for company involvement, most businesses consider participating in
ones that</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. contribute to the social good.</option><option value="B">B. earn a reasonable profit.</option><option value="C">C. support controversial issues.</option><option value="D">D. boost employee loyalty.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: contribute to the social good.</h5><h5>Businesses often identify community issues for company involvement.
When considering possible issues, businesses often look for those that will contribute to the social good,
such as helping needy families, supporting education, mentoring at-risk teenagers, etc. The intent is to
become involved in activities that will improve the community and benefit the citizens. When identifying
community issues for company involvement, businesses usually do not consider which ones will earn a
reasonable profit or build loyalty. However, as a result of being involved in community activities, a
business might receive positive publicity which will help build employee and consumer loyalty and
increase profit. A business is less likely to support controversial issues that may alienate its various
publics.
</h5></div><h5 id='q87'>87. Which of the following is a guideline for writing a news release:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Close with a summary of the main points</option><option value="B">B. Be objective in presenting facts</option><option value="C">C. Use several pages to tell the complete story</option><option value="D">D. Allow the media to correct spelling and grammar</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Be objective in presenting facts</h5><h5>News releases are supposed to be objective. Don't include your opinion
or let your feelings show. A news release follows the format of a news story and begins by answering the
questions "Who?" "What?" "When?" "Where?" and "Why?" There is no need to close with a summary of
the main points. A news release should be a maximum of two type-written pages in length. You should
check your spelling and grammar because the media often use a news release just the way they receive
it.
</h5></div><h5 id='q88'>88. What do many businesses plan to attract customers and encourage them to visit their facilities?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Market trips</option><option value="B">B. Trade shows</option><option value="C">C. Press kits</option><option value="D">D. Special events</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: Special events</h5><h5>Businesses often plan a variety of special events to attract customers and encourage
them to visit the store. Special events might include special sales, grand openings, celebrity visits,
product demonstrations, etc. Businesses usually try to plan special events that will appeal to the target
market. Trade shows are events where businesses display and/or demonstrate their products to build
sales leads and interest. Press kits are developed by businesses for the media. Market trips involve
retail buyers visiting market centers to buy merchandise for their stores.
</h5></div><h5 id='q89'>89. Putting out seasonal merchandise and creating festive displays are activities that are part of a</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. liquidation sale.</option><option value="B">B. holiday open house.</option><option value="C">C. staff party.</option><option value="D">D. customer appreciation day.

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: holiday open house.</h5><h5>Preparing for a special event, but especially a holiday open house, includes
providing seasonal merchandise to customers and also creating festive displays. This kind of event is fun
for customers and retailers alike but also involves a lot of work. It is important to start early and
thoroughly plan all the details. A liquidation sale does not involve seasonal merchandise or festive
displays, nor does a staff party. A customer appreciation day might involve special merchandise and/or
special displays, but these would generally not be seasonal in nature but would reflect customer-focused
themes.
</h5></div><h5 id='q90'>90. Which of the following is an important part of display maintenance:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Selecting proper lighting</option><option value="B">B. Choosing an effective principle of design</option><option value="C">C. Selecting an arrangement pattern</option><option value="D">D. Replacing missing items immediately</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: Replacing missing items immediately</h5><h5>Display items may be removed from the display because they
have become soiled, been damaged or stolen, or sold. Many businesses do not sell items directly from a
display because it will disrupt the display and damage its appearance. However, even these businesses
will occasionally agree to sell a displayed item when no other item is available for the customer to
purchase. When this happens, an appropriate replacement item should be put in the display as quickly as
possible. The alternatives are actions taken in creating a display rather than maintaining it.
</h5></div><h5 id='q91'>91. One way of tracking marketing-communications activities is through the use of</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. questionnaires.</option><option value="B">B. databases.</option><option value="C">C. surveys.</option><option value="D">D. interviews.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: databases.</h5><h5>A database is computerized storage for information and facts. The use of databases is one
way of tracking marketing-communications activities. For example, a business sends out 100,000
promotional letters to customers and receives 25,000 responses. The business maintains a database of
the names and characteristics of 100,000 customers as well as information about those who responded.
The business can analyze the database to track the effectiveness of the mailing in reaching the target
market. Questionnaires, surveys, and interviews are ways of obtaining marketing information rather than
ways of tracking marketing-communications activities.
</h5></div><h5 id='q92'>92. Which of the following is an example of a sales promotion that hotels often use to attract customers:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Public relations campaign</option><option value="B">B. Local newspaper advertisement</option><option value="C">C. Weekend discount package</option><option value="D">D. Cable television commercial</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Weekend discount package</h5><h5>Sales promotion is promotional activities other than advertising, personal
selling, and publicity that stimulate customer purchases. These activities include coupons, contests,
discounts, and premiums that are intended to attract customers. A hotel that offers a special weekend
discount package is using sales promotion to encourage customers to visit during what might be a slow
time for the hotel. A local newspaper advertisement and a cable television commercial are examples of
traditional advertising rather than sales promotion. A public relations campaign is not sales promotion.
</h5></div><h5 id='q93'>93. What might a travel agency include in a display to graphically show people enjoying a destination or
participating in a tour of exotic places?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Videos</option><option value="B">B. Testimonials</option><option value="C">C. Facts</option><option value="D">D. Souvenirs</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: Videos</h5><h5>Many travel agencies are developing displays that include videos to be able to graphically show
people enjoying a destination or participating in a tour. The benefit of using videos is that it enables
potential customers to see what they would see on a tour and to see what they might do at a destination.
The videos are able to show action and excitement and create an atmosphere that attracts customers
and increases sales. For example, a video of people white-water rafting or touring a castle is more
interesting than a simple photograph. A display might include facts, testimonials from satisfied customers,
and sample souvenirs; but these are static parts of a display and do not graphically show people
participating in activities.
</h5></div><h5 id='q94'>94. What type of selling question is the following: "What color of car do you want?"</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Open-ended</option><option value="B">B. Assumptive</option><option value="C">C. Impersonal</option><option value="D">D. Interpretive</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Open-ended</h5><h5>An open-ended question requires more than a simple "yes" or "no" response. Assumptive
questions are used when you think you know how customers feel and what they will say. Interpretive
questions help you to understand what the customers have said. An impersonal question would be
unrelated to the customer's preferences.
</h5></div><h5 id='q95'>95. Salespersons who use the products they sell are able to suggest appropriate substitute products to
customers because of their own personal</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. experience.</option><option value="B">B. preference.</option><option value="C">C. feelings.</option><option value="D">D. opinion.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: experience.</h5><h5>Salespeople often try the products they sell in order to acquire product information. They are
able to explain the features and benefits of substitute items based on information they have obtained
from using the items themselves. Salespeople should not let their own personal preferences, opinions,
and feelings influence the product information or suggestions that they give to customers.
</h5></div><h5 id='q96'>96. Which of the following is an example of a salesperson empathizing with a customer's objection:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. "I understand how you feel."</option><option value="B">B. "You think the price is too high."</option><option value="C">C. "Everyone is buying this item."</option><option value="D">D. "This is the best deal in town."</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: "I understand how you feel."</h5><h5>Salespeople do not always have to agree with customers, but they should
show that they understand the customers' feelings and appreciate their points of view. With a statement
such as, "I understand how you feel," salespeople can tell customers that they think their objections are
important. As a result, salespeople will probably find that customers will be more open and honest with
them. The other responses do not show empathy with customers' objections.
</h5></div><h5 id='q97'>97. A salesperson should answer a customer's questions and fully explain the benefits of products so that
the customer will</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. feel good about the buying decision.</option><option value="B">B. think about making a decision.</option><option value="C">C. be left in a state of indecision.</option><option value="D">D. make a quick decision.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: feel good about the buying decision.</h5><h5>Customers often are not able to make a decision on what they
want, and the salesperson should help them make the buying decision by answering their questions and
providing them with information. Salespeople who answer questions and explain benefits will help
customers to feel good about their decision to buy. Customers should not be rushed into making a quick
decision as this may lead to dissatisfaction later. Salespeople should not leave customers in a state of
indecision or thinking about making a decision.
</h5></div><h5 id='q98'>98. What type of technique might be effective if a business is trying to sell a large, complex product to
another business?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Retail selling</option><option value="B">B. Mass marketing</option><option value="C">C. Sale pricing</option><option value="D">D. Team selling</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is D: Team selling</h5><h5>Team selling is a technique that involves putting together a group, or team, of specialists to
sell to a business. Some products are large and complex and require the expertise of several different
specialists to effectively explain their features and benefits. A selling team is able to present a large
amount of information to a potential customer, answer technical questions, and project a strong sales
effort. Mass marketing is designing products and directing marketing activities in order to appeal to the
whole market. Sale pricing is pricing items at low levels and promoting them for a limited period of time.
Retail selling is selling directly to the ultimate consumer.
</h5></div><h5 id='q99'>99. A circumstance that often motivates people to select one lodging facility over another is the</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. food and beverage tax rate.</option><option value="B">B. seller's personal preferences.</option><option value="C">C. use of positioning strategies.</option><option value="D">D. location of the property.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: location of the property.</h5><h5>People travel for many reasons, including business and leisure. The purpose of
the trip, as well as the site location, often influences the selection process. For example, a
businessperson traveling to meet with a customer might select a property close to the customer's office.
A leisure traveler might select a beachfront resort hotel over a nearby roadside motel because it might
offer more amenities geared to vacationers. A trucker, on the other hand, might select the roadside motel
because of its easy access to the highway. Positioning strategies are methods that members of the
hospitality industry use to create a particular image or standing in the marketplace. Although hotels use
positioning strategies to appeal to customers, customers do not generally consider the specific
techniques that businesses use to position products. A traveler selects a lodging facility based on his/her
personal preferences, not the seller's (hotel). Although some travelers might consider tax rates when
selecting a lodging facility, it is usually not a primary factor in the selection process. In addition, lodging
facilities in the same general area most likely have the same tax rates.
</h5></div><h5 id='q100'>100. Which of the following factors characterizes the growth phase of business cycles:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Demand for resources exceeds their availability.</option><option value="B">B. Consumers and producers are borrowing more money.</option><option value="C">C. Consumers are putting more money into savings.</option><option value="D">D. Producers are reducing their purchases of new goods.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consumers and producers are borrowing more money.</h5><h5>During the growth, or expansion, phase of
business cycles, interest rates on loans are low, thereby encouraging consumers and producers to
borrow more money in order to make even more purchases. During the peak phase, demand for all
resources exceeds their availability. During the peak and the contraction phases, people become less
hopeful about the future of business and begin to save more money. Also during the contraction phase,
producers reduce their purchase of new goods; instead, they try to sell the goods which are currently in
inventory.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Hospitality/Hospitality_4_Split_Master.js"></script></html>