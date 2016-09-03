<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 6</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Brix Beauty Salon used a celebrity's name and photograph in a recent newspaper advertisement, even
though the celebrity had not given Brix permission to use her name and likeness. What tort did Brix
Beauty Salon commit?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Defamation</option><option value="B">B. Wrongful interference</option><option value="C">C. Appropriation</option><option value="D">D. Conversion</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: Appropriation</h5><h5>Torts are civil wrongdoings that cause harm or injury to another party. Appropriation,
wrongful interference, defamation, and conversion are four kinds of torts. Appropriation, which Brix
Beauty Salon committed, involves a business or person who uses—without permission—another
person's name, likeness, and other unique characteristics for the benefit or gain of the user. Brix Beauty
Salon used the celebrity's name and picture to attract customers to the salon. Unfortunately, Brix had not
obtained permission to use the celebrity's name or likeness. As a result, the celebrity could sue Brix for
appropriation. Wrongful interference consists of predatory behavior undertaken by a business to draw
either customers or employees away from a competitor. Defamation involves making false, malicious
statements about a person or organization. Conversion occurs when personal property is taken from the
owner and given to someone else to use.
</h5></div><h5 id='q2'>2. Which of the following forms of ownership is a group of individuals organized by a charter that is granted
by a state:</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Corporation</option><option value="B">B. Proprietorship</option><option value="C">C. Partnership</option><option value="D">D. Cooperative</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: Corporation</h5><h5>A corporation acts as a "legal person" in doing business and is owned by stockholders who
have purchased stock. A partnership is a form of business ownership in which the business is owned by
two or more persons. A sole proprietorship is a form of business ownership in which the business is
owned by one person. A cooperative is owned and operated by its user-owners to supply goods and
services to its members.
</h5></div><h5 id='q3'>3. Computer manufacturers sell their products through retailers, such as Best Buy. This is an example of
the __________ function of marketing.</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. promotion</option><option value="B">B. channel management</option><option value="C">C. pricing</option><option value="D">D. product/service management</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: channel management</h5><h5>Channel management involves understanding the concepts and processes
needed to identify, select, monitor, and evaluate sales channels. This example entails the transfer of
ownership of the computers from the manufacturer to the retailer. Promotion involves understanding the
concepts and strategies needed to communicate information about goods, services, images, and/or ideas
to achieve a desired outcome. Pricing is the marketing function that involves determining and adjusting
prices to maximize return and meet customers' perceptions of value. Product/service management is the
marketing function that involves obtaining, developing, maintaining, and improving a product or service
mix in response to market opportunities.
</h5></div><h5 id='q4'>4. Indirect channels of distribution are the only channels that involve</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. producers.</option><option value="B">B. industrial consumers.</option><option value="C">C. intermediaries.</option><option value="D">D. ultimate consumers.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: intermediaries.</h5><h5>Intermediaries are also called middlemen and include sales agents, wholesalers, and
retailers who perform specific functions in the movement of goods from producers to consumers. Direct
channels of distribution do not involve intermediaries. All channels of distribution involve producers and
either industrial or ultimate consumers.
</h5></div><h5 id='q5'>5. Packaging a product in a biodegradable or recyclable container is one way a channel member can
participate in the ethical practice of</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. international marketing.</option><option value="B">B. consumer protection.</option><option value="C">C. social awareness.</option><option value="D">D. green marketing.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: green marketing.</h5><h5>Green marketing refers to the practice of pricing, promoting, and distributing products
in such a way that they do not harm the natural environment. Most manufacturers choose to participate in
this practice because of their code of ethics. Consumer protection deals with safety features and product
labeling standards that protect the consumer. Social awareness is a term used to describe the practice of
enlightening the community of business actions to promote social welfare. International marketing refers
to marketing goods and services in foreign countries.
</h5></div><h5 id='q6'>6. One aspect of coordinating channel management with pricing activities involves</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. implementing accounting policies.</option><option value="B">B. setting appropriate prices.</option><option value="C">C. earning high profits.</option><option value="D">D. developing product standards.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: setting appropriate prices.</h5><h5>Businesses not only need to make their products available, but they also must
sell them at a price that customers are willing to pay. If a product is not priced appropriately, customers
usually will not buy even if the product is widely distributed. Therefore, it is important for businesses to
coordinate the pricing activities with the appropriate channel members. Businesses must set appropriate
prices that customers are willing to pay and have the products in stock when customers want them in
order to successfully sell to customers. Coordinating the channel-management function with pricing does
not involve implementing accounting policies, earning high profits, or developing product standards.
</h5></div><h5 id='q7'>7. Why is it important to identify sources that provide relevant, valid written material?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. To understand business communication</option><option value="B">B. To compile a database</option><option value="C">C. To read useful information</option><option value="D">D. To prepare a routine message</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: To read useful information</h5><h5>Business employees often read written material to obtain useful information
that they can use to apply to a specific task or problem. For the information to be useful, the sources
must provide relevant, valid written material. For example, employees might read industry publications to
identify trends so the business can take steps to remain competitive. Industry information is relevant and
valid and useful to businesses. It is not important to identify sources that provide relevant, valid written
material to compile a database, understand business communication, or prepare a routine message.
</h5></div><h5 id='q8'>8. Which of the following is a company resource that employees often analyze to ascertain policies and
procedures:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Research documents</option><option value="B">B. Sales reports</option><option value="C">C. Promotional brochures</option><option value="D">D. Training materials

®
</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: Training materials

®
</h5><h5>Explanation not available</h5></div><h5 id='q9'>9. Jacob was nervous about making his valedictorian speech, but when he stood up to walk to the podium,
the audience cheered and gave him a standing ovation, which helped him relax and enjoy the moment.
What was the audience doing?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Exhibiting unprofessional behavior</option><option value="B">B. Mocking the speaker</option><option value="C">C. Encouraging the speaker</option><option value="D">D. Engaging in passive listening</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Encouraging the speaker</h5><h5>In many cultures, a standing ovation is the ultimate show of support for a
speaker. It indicates the audience's respect for the speaker, and its desire to hear what the speaker has
to say. Because cheering provides positive feedback, the audience was not mocking or insulting the
speaker. Some cultures might view the audience's behavior as unruly or disrespectful; however, this
situation involves a school event, rather than a business event, so the audience isn't exhibiting
unprofessional behavior. Because Jacob has not started speaking, the audience is not actively listening
to what he is saying.
</h5></div><h5 id='q10'>10. A message which is as short and to the point as possible is referred to as</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. complete.</option><option value="B">B. courteous.</option><option value="C">C. correct.</option><option value="D">D. concise.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: concise.</h5><h5>Concise messages are clear and short. A courteous message addresses others with respect.
Completeness in communication means giving all the information required. Carefully checking all facts
and figures for accuracy before delivering a message should ensure correctness.
</h5></div><h5 id='q11'>11. Writing key points on notecards and then placing the cards in order of their importance is one way to</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. organize information.</option><option value="B">B. access files.</option><option value="C">C. revise facts.</option><option value="D">D. verify accuracy.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: organize information.</h5><h5>Business employees often read written material to obtain useful information
that they can use to apply to a specific task or problem. For the information to be useful, the sources
must provide relevant, valid written material. For example, employees might read industry publications to
identify trends so the business can take steps to remain competitive. Industry information is relevant and
valid and useful to businesses. It is not important to identify sources that provide relevant, valid written
material to compile a database, understand business communication, or prepare a routine message.
</h5></div><h5 id='q12'>12. Which of the following is an example of an effective subject line for a professional email:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. New product information</option><option value="B">B. Mtg. rescheduled for 3 p.m.</option><option value="C">C. One more thing . . .</option><option value="D">D. Can we talk for a minute?</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: Mtg. rescheduled for 3 p.m.</h5><h5>An effective subject line for a professional email should summarize the body
of the message and make it easy for the recipient to understand the purpose of the email. "Mtg.
rescheduled for 3 p.m.", for example, clearly communicates the focus of the email (the meeting) and
provides enough information for the recipient to understand why the email was sent to him/her (to inform
him/her that the new time for the meeting is 3 p.m.). "New product information" is not specific enough for
the recipient to understand what product is the focus of the message. "One more thing . . ." and "Can we
talk for a minute?" are vague and provide little information to help the recipient understand the reason for
the email.
</h5></div><h5 id='q13'>13. When writing informational messages, business employees should explain the situation and include
sufficient data for the recipient to be able to</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. make a decision.</option><option value="B">B. read the message.</option><option value="C">C. contact the business.</option><option value="D">D. agree with the content.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: make a decision.</h5><h5>Informational messages are intended to inform and provide data to the recipients. In
many cases, the purpose of an informational message is to help the recipient make a decision. For this to
happen, the business employee should explain the situation and include sufficient data. If recipients
clearly understand the who, what, where, when, why, and how of the situation, they usually have
sufficient information to make a decision. Clear and concise writing enables a recipient to read the
message. The letterhead usually includes the business's name, address, and phone number so
recipients are able to contact the business. Explaining the situation and including sufficient data does not
guarantee that the recipient will agree with the content.
</h5></div><h5 id='q14'>14. Which of the following is an example of a simple written report that a business might prepare on a regular
basis:</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Results of a research study</option><option value="B">B. Minutes of a staff meeting</option><option value="C">C. Findings of a major investigation</option><option value="D">D. Analysis of a publicity campaign</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: Minutes of a staff meeting</h5><h5>Simple written reports are often intended to provide information to the
business's employees. An example of a simple written report that a business might prepare on a regular
basis is the minutes of a staff meeting. Businesses often have routine staff meetings and prepare a brief
summary to distribute to all employees. This serves to remind employees of the topics discussed and
provide that information to employees who may have been unable to attend. Results of a research study,
findings of a major investigation, and analysis of a publicity campaign are examples of complex written
reports.
</h5></div><h5 id='q15'>15. Which is the most effective way for an employee to communicate interest in providing good service to
customers?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Informal product demonstration</option><option value="B">B. Body language</option><option value="C">C. Social status</option><option value="D">D. Closing statements</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: Body language</h5><h5>Body language is gestures, facial expression, tone of voice, or any other form of
communicating without words. An employee's body language conveys a message to customers. For
example, if an employee is talking to one customer and ignores a new customer, the employee's body
language is telling the new customer that s/he is not important. On the other hand, an employee who
smiles or motions that s/he will be with the customer shortly is communicating an interest in providing
good service. Employees usually do not communicate their social status to customers. The verbal and
nonverbal communications employees use during the closing statements indicate their interest in being of
service, not the closing statements themselves. Informal product demonstrations do not communicate
interest in providing good service to customers.
</h5></div><h5 id='q16'>16. A customer complains that an item purchased last week does not fit properly. The real reason for
returning the item is that it is too expensive. This is an example of a __________ complaint.</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. service</option><option value="B">B. sincere</option><option value="C">C. hidden</option><option value="D">D. business

</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: hidden</h5><h5>Customers sometimes conceal the real complaint by stating another believable but secondary
reason for their dissatisfaction. A sincere complaint is an honestly felt dissatisfaction. A service complaint
results from poor service, and a business complaint is customer dissatisfaction with the business in
general.
</h5></div><h5 id='q17'>17. Employees can reinforce their company's positive image by</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. developing a broad product/service mix.</option><option value="B">B. delivering on the company's brand promise.</option><option value="C">C. sharing its intellectual property with competitors.</option><option value="D">D. advocating prestige pricing and price skimming.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: delivering on the company's brand promise.</h5><h5>A brand promise is a business's agreement (spoken or
unspoken) with customers that it will consistently meet their expectations and deliver on its brand
characteristics and values. By delivering on their company's brand promise, employees can reinforce the
company's positive image among customers. These employees become brand ambassadors,
communicating the company's vision, mission, and brand through their actions and words, both on the
job and off. Developing a broad product/service mix does not necessarily reinforce the company's
positive image. Betraying a company by sharing its intellectual property with competitors does nothing to
reinforce the company's positive image. Prestige pricing and price skimming do not reinforce a
company's positive image in every case.
</h5></div><h5 id='q18'>18. A local hardware store purchased a large shipment of snow shovels in November in order to prepare for
winter weather. The hardware store is helping to create __________ utility.</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. form</option><option value="B">B. place</option><option value="C">C. time</option><option value="D">D. possession</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is C: time</h5><h5>Time utility is created when products are available at the time they are needed or wanted by
customers. Form utility is usefulness created by altering or changing the form or shape of a good to make
it more useful to customers. Place utility is usefulness created by making sure that goods and services
are available at the place where they are needed or wanted by customers. Possession utility is
usefulness created when ownership of a product is transferred from the seller to the user.
</h5></div><h5 id='q19'>19. A manufacturer wants to ensure that each product it makes meets certain standards so that customer
complaints and product returns will be kept at minimal levels. Meeting this goal depends on the part of
operations known as</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. inventory management.</option><option value="B">B. strategic management.</option><option value="C">C. purchasing.</option><option value="D">D. quality control.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: quality control.</h5><h5>Ensuring that products meet predetermined standards for excellence is known as quality
control, and it is part of operations. Purchasing and inventory management are also part of operations,
but purchasing refers to acquiring necessary goods and services, and inventory management means
supervising inventory levels to make sure there is an appropriate balance. Strategic management refers
to the business's plans and goals for the future.
</h5></div><h5 id='q20'>20. Which of the following factors has aided the most in creating a global business environment:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Technology</option><option value="B">B. Government</option><option value="C">C. Cultural changes</option><option value="D">D. Exchange rates</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: Technology</h5><h5>Technologies of all types have enabled global markets to function effectively. As examples,
refrigeration has enabled perishable products to be transported between countries; and computers have
facilitated communication and exchange of payments. Government, culture, and exchange rates have
both facilitated and hampered global trade.
</h5></div><h5 id='q21'>21. Which of the following is a characteristic of private enterprise that enables consumers to buy quality
products at fair prices:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Unlimited resources</option><option value="B">B. Competition</option><option value="C">C. Inflation</option><option value="D">D. Profit motive</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Competition</h5><h5>Competition is the rivalry between two or more businesses to attract scarce (limited)
customer dollars. In order to be competitive, businesses must try to offer consumers quality products at
fair prices. The profit motive is the desire to make a profit, which moves people to invest in business.
Inflation is a rapid rise in prices usually occurring when demand exceeds supply. Resources are limited in
all economic systems.
</h5></div><h5 id='q22'>22. Which of the following is an example of a tax that government collects from some businesses:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Subsidy</option><option value="B">B. Excise</option><option value="C">C. Bond</option><option value="D">D. Discount</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: Excise</h5><h5>Excise is a special government tax on certain items, such as gasoline. Government collects
several kinds of taxes from businesses. Businesses are responsible for collecting income and social
insurance taxes from employees and sales, excise, and duty taxes from customers. Businesses pay tax
on their income and property, and they also pay fees for licenses and permits. Subsidy is government
financial help given to a business. Bonds are interest-bearing certificates issued by government that
promise to pay bond owners a certain sum at a specified time. Discount is the amount by which the price
of something is reduced.
</h5></div><h5 id='q23'>23. Shelly is a union member who has been having problems with management. Shelly should report her
problems to her union's</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. mediator.</option><option value="B">B. president.</option><option value="C">C. steward.</option><option value="D">D. arbitrator.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: steward.</h5><h5>Union stewards are called shop stewards, and they are union members elected by their peers
to handle any grievances or problems members might have with management. A union president's
responsibilities involve leading the union as a whole rather than assisting individuals. A mediator is
involved in union negotiations, clarifying issues, and making suggestions concerning the contract. An
arbitrator also assists with negotiations. In binding arbitration, this person's decisions regarding the
contract are final and cannot be changed.
</h5></div><h5 id='q24'>24. Which of the following is a disadvantage of weak currency:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. It reduces business profits.</option><option value="B">B. It makes acquiring foreign companies more expensive.</option><option value="C">C. It negatively affects the balance of trade.</option><option value="D">D. It makes buying imports less expensive.

</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is B: It makes acquiring foreign companies more expensive.</h5><h5>One disadvantage of weak currency is making the
acquisition of foreign companies more expensive since domestic currency doesn't go as far overseas.
Reduction of business profits and a negative effect on the balance of trade are disadvantages of strong
currency, not weak currency. Weak currency makes buying imports more expensive, not less expensive.
</h5></div><h5 id='q25'>25. In some cultures, creating relationships during business negotiations is key; in other cultures, negotiators
want a signed contract. This illustrates cultural differences in negotiating</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. styles.</option><option value="B">B. attitudes.</option><option value="C">C. schedules.</option><option value="D">D. goals.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: goals.</h5><h5>Different cultures have different goals when it comes to business negotiations. For some, only a
signed contract will do. For others, creating relationships equals success. Different cultures also have
different attitudes (win-win v. win-lose), schedules (open-ended v. time-sensitive), and styles (informal v.
formal); however, achieving a contract v. achieving a relationship pertains to negotiation goals.
</h5></div><h5 id='q26'>26. Why is it sometimes difficult to be honest about strengths?</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. No one likes to recognize strengths.</option><option value="B">B. We don't want to brag.</option><option value="C">C. Weaknesses are more significant than strengths.</option><option value="D">D. Few people have strengths.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: We don't want to brag.</h5><h5>It's sometimes difficult to be honest about strengths. We don't want to seem as if
we're bragging or “stuck up.” However, recognizing our talents, abilities, and the things we do well is a
healthy and acceptable thing to do. Everyone has strengths. Weaknesses are not more significant than
strengths.
</h5></div><h5 id='q27'>27. As a sales representative for a large distributor, you hear a lot of information from your clients about the
competition. Which of the following characteristics would help you to demonstrate initiative in this
situation:</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Creativity and self-understanding</option><option value="B">B. Patience and resourcefulness</option><option value="C">C. Empathy and self-control</option><option value="D">D. Alertness and assertiveness</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Alertness and assertiveness</h5><h5>Alertness and assertiveness are two personal characteristics that are
interdependent with initiative. A sales representative can show initiative by being alert to information
about competitors and being assertive enough to express his/her views. Empathy is the ability to put
yourself in another person's place. Resourcefulness helps you to make the best of any situation.
Creativity is the ability to generate unique ideas, approaches, solutions, etc. Self-understanding is
comprehending one's personal needs, interests, values, and motives and recognizing their effects on
one's behavior. Patience is the ability to endure life's aggravations and difficulties calmly.
</h5></div><h5 id='q28'>28. The night clerk in a local motel often complains to the manager about having to assist his/her coworkers.
This is an example of an employee having a(n) __________ attitude.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. negative</option><option value="B">B. productive</option><option value="C">C. innovative</option><option value="D">D. indifferent</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: negative</h5><h5>People who have negative attitudes do not like to assist others. They are usually self-centered
and focus only on their own needs. People who are productive and innovative are positive people.
Indifferent people lack concern about or interest in things.
</h5></div><h5 id='q29'>29. Instead of going through Jeff's files, Amanda waits until Jeff returns from lunch to obtain a file that she
needs to review. This is an example of one coworker ________ of another coworker.</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. respecting the privacy</option><option value="B">B. violating the workspace</option><option value="C">C. correcting the work</option><option value="D">D. reinforcing the efforts</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: respecting the privacy</h5><h5>When employees respect the privacy of others in the workplace, they are more
likely to gain the trust and respect of their coworkers and managers. Respecting coworkers' privacy
means that an employee does not read correspondence that is not addressed to him/her. In addition, the
employee does not listen to others' private conversations or go through their personal belongings. In the
example, Amanda waited until her coworker Jeff returned from lunch to obtain a file that she needed.
Because she did not go through Jeff's workspace, she was respecting rather than violating his privacy.
The example does not indicate that Amanda's intention was to correct Jeff's work or to reinforce his
efforts—she simply needed to review information in the file.
</h5></div><h5 id='q30'>30. Behavior that is characterized by a willingness to ignore the rights of others and to exploit them in order
to achieve personal goals is __________ behavior.</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. offensive</option><option value="B">B. passive</option><option value="C">C. assertive</option><option value="D">D. aggressive</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: aggressive</h5><h5>Offensive behavior is unpleasant or displeasing. Assertive behavior is characterized by
respect for personal rights as well as for the rights of others. Passive behavior is characterized by a
failure to exercise personal rights and a lack of respect for personal needs.
</h5></div><h5 id='q31'>31. One of the reasons that teams are important to businesses is that they can increase</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. procrastination.</option><option value="B">B. conflicts.</option><option value="C">C. costs.</option><option value="D">D. productivity.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: productivity.</h5><h5>Productivity is the amount and value of goods and services produced (outputs) from set
amounts of resources (inputs). The overall output of all employees is often increased when businesses
use teams because workers who feel they are an important part of a team often work harder and produce
more. Other reasons that teams are important to businesses are that they reduce costs and workplace
conflicts. Teams do not increase procrastination—putting off until tomorrow what should have been done
today.
</h5></div><h5 id='q32'>32. Which of the following statements is true about consensus building:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. The agreed upon option is not always each person's first choice.</option><option value="B">B. In most cases, consensus allows for a minority to rule.</option><option value="C">C. Each group member's opinion is less important than the leader's opinion.</option><option value="D">D. Consensus can be reached without everyone's agreement.

</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: The agreed upon option is not always each person's first choice.</h5><h5>Consensus is a decision-making
outcome that requires the substantial agreement of each group member. This means that for everyone to
agree, the option doesn't have to be each group member's first choice, but an option that has been
presented and agreed upon as acceptable by all members of the group. Minority rule means that a few
people in the group make the decision. Consensus is not minority rule, is not rule by a single leader, and
cannot be reached without each group member's input and agreement, which often requires
compromise.
</h5></div><h5 id='q33'>33. What is true about personal vision?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Realistic visions are based on mission statements.</option><option value="B">B. Good visions have permanent results.</option><option value="C">C. Specific goals are necessary to determine your vision.</option><option value="D">D. Achievable visions are time bound.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: Good visions have permanent results.</h5><h5>A vision is a desire for the future that is achieved over time with
determination and hard work. Good visions create positive results and may involve the input of many
people over a long period of time. Visions are not based on mission statements, nor do they start out with
specific goals. Visions are timeless rather than time bound.
</h5></div><h5 id='q34'>34. Being a good listener is an example of what type of behavior that builds positive working relationships?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Being cooperative</option><option value="B">B. Carrying your own weight</option><option value="C">C. Getting to know others on your work team</option><option value="D">D. Having a good attitude</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: Being cooperative</h5><h5>Being a good listener is an example of being cooperative in the process of building
positive working relationships. Being cooperative involves valuing the work of others as much as you
value your own work. If someone needs help or is falling behind, you do your best to support him/her.
This includes listening attentively when your coworker is communicating with you. Being a good listener
is not an example of carrying your own weight. It may go along with getting to know others and having a
good attitude, but it is best as an example of being cooperative.
</h5></div><h5 id='q35'>35. Every pay period, Amanda places $100 from her paycheck into a savings account that earns 4.5 percent
interest. In this situation, money functions as a</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. store of value.</option><option value="B">B. medium of exchange.</option><option value="C">C. form of barter.</option><option value="D">D. measure of income.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is A: store of value.</h5><h5>Product/service management is the
marketing function that involves obtaining, developing, maintaining, and improving a product or service
mix in response to market opportunities.
</h5></div><h5 id='q36'>36. Which of the following statements about understanding your spending habits is true:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. The first step in creating a financial plan</option><option value="B">B. A key aspect in exceeding financial goals</option><option value="C">C. A key aspect of opening a bank account</option><option value="D">D. The last step in creating a financial plan</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is A: The first step in creating a financial plan</h5><h5>Knowing how you spend your money—understanding your
spending habits—is the first step in creating a financial plan. Knowing your spending habits does not
guarantee that you will exceed your financial goals. Although it's helpful to know how many checks you
expect to write in a month, you don't need to understand your spending habits to open a bank account.
</h5></div><h5 id='q37'>37. When Armand is comparing his checkbook balance with his bank statement, he must make sure that he
has subtracted the ____________ from his checkbook.</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. accumulated interest</option><option value="B">B. transaction fees</option><option value="C">C. payroll deposits</option><option value="D">D. check numbers</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: transaction fees</h5><h5>Reconciling bank statements involves comparing the entries in a checkbook with the
entries listed on the bank statement. It is important to make these comparisons to determine
inconsistencies and mistakes. If a check is not recorded correctly, and if the mistake is not caught, the
individual runs the risk of having insufficient funds in his/her checking account, which results in bounced
checks. Some financial institutions charge transaction fees for checking accounts, so it is important to
make sure that those fees are subtracted from the checking account balance. Accumulated interest and
payroll deposits are added to the checking account balance rather than subtracted from it. Check
numbers are not subtracted from the checkbook when reconciling bank statements and checkbook
balances.
</h5></div><h5 id='q38'>38. Which of the following is a type of financial-services provider:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Taxation department</option><option value="B">B. Stock market</option><option value="C">C. Commercial bank</option><option value="D">D. Retirement community</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is C: Commercial bank</h5><h5>A commercial bank provides a variety of financial services to individuals and
businesses. Besides providing savings accounts and other savings options, banks also make loans and
offer credit cards. Many large banks have trust departments and help individuals plan for retirement.
Depending on the size of the bank, it may be possible to obtain all necessary financial services from that
institution. The stock market itself does not provide financial services. A taxation department collects
various types of taxes. A retirement community provides housing rather than financial services.
</h5></div><h5 id='q39'>39. A decrease in the availability of raw materials is an economic risk that may result in __________ for a
business.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. high interest rates</option><option value="B">B. increased regulation</option><option value="C">C. financial loss</option><option value="D">D. lower turnover</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: financial loss</h5><h5>A decrease in the availability of raw materials, supplies, or products needed by a business
are economic risks that can result in financial loss for the business. For example, a decrease in the
availability of petroleum can cause business's transportation costs to skyrocket. High interest rates is a
business condition that can create economic risks. The involvement of government in the regulation of
business may cause financial loss for some businesses. High turnover, rather than low turnover, is an
economic risk.
</h5></div><h5 id='q40'>40. What do all businesses need to be aware of with regard to the accounting process?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Legal considerations</option><option value="B">B. Management styles</option><option value="C">C. System specifications</option><option value="D">D. Research techniques

</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: Legal considerations</h5><h5>There are laws that regulate the reporting of financial information. Since accounting
is the process of keeping and interpreting financial records, all businesses need to be aware of legal
considerations and understand what is legal and what is not. For example, there are laws regulating the
way that businesses report income and pay taxes. If businesses violate the law, they may be fined or
face other types of legal action. With regard to the accounting process, it is not necessary for all
businesses to be aware of management styles, system specifications, or research techniques.
</h5></div><h5 id='q41'>41. Claudia is creating a balance sheet for her business. She lists the full value of all of her assets, even
some office equipment she hasn't completely paid for. However, to find the true net worth of her
business, Claudia must subtract the money she owes on the equipment, since the debt is considered
a(n)</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. liability.</option><option value="B">B. liquid asset.</option><option value="C">C. accounts receivable.</option><option value="D">D. dividend.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: liability.</h5><h5>Liabilities are the financial obligations a business has. In Claudia's case, the money she still
owes on her office equipment is considered a liability. To find the net worth of her business, she must
subtract her total liabilities from her total assets. This gives her an accurate picture of her business's
health. A liquid asset is cash or any asset that can be quickly converted into cash. Accounts receivable
are money owed to the business for purchases made by customers. Dividends are sums of money paid
to investors or stockholders as earnings on investments.
</h5></div><h5 id='q42'>42. A business should strive to keep its cash conversion cycle as short as possible so it</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. can earn dividends.</option><option value="B">B. has cash available to use.</option><option value="C">C. can increase its profit margin.</option><option value="D">D. has fewer liquid assets.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: has cash available to use.</h5><h5>The cash conversion cycle is the ratio that reflects the number of days
between a company paying for raw materials and receiving cash from selling the products made from
those raw materials. The longer this period of time, the longer the company's money is tied up and
unavailable for other uses. Therefore, a financial manager strives to keep the cash conversion cycle as
short as possible, so that the business has more free cash to work with. A dividend is the amount of
money that a corporation pays to a stockholder as earnings on an investment. The profit margin is a
product pricing consideration. The profit margin is the amount of money that a business earns on sales
after expenses and is expressed as a ratio. Liquid assets are things of value that the business owns,
which can be quickly converted to cash.
</h5></div><h5 id='q43'>43. One reason why human resources management is important to the success of a business is because this
process is responsible for</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. creating jobs for the company.</option><option value="B">B. eliminating turnover.</option><option value="C">C. staffing the business.</option><option value="D">D. reducing compensation.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: staffing the business.</h5><h5>Explaining the situation and including sufficient data does not
guarantee that the recipient will agree with the content.
</h5></div><h5 id='q44'>44. Which of the following is a way that marketers can use data to “follow up” on any problems or issues with
a product:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Providing salespeople with additional training</option><option value="B">B. Determining what new products to offer</option><option value="C">C. Deciding what wholesalers to use for distribution</option><option value="D">D. Budgeting for product development</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Providing salespeople with additional training</h5><h5>Data may show that salespeople need additional training
for a certain product. This is something marketers want to provide so sales and profits can be as high as
possible. Determining what new products to offer, deciding which wholesalers to use for distribution, and
budgeting for product development are all activities that should take place before a product hits the
market.
</h5></div><h5 id='q45'>45. Software that allows for real-time analysis of marketing information enables businesses to search many
databases and identify</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. obscure relationships.</option><option value="B">B. pricing strategies.</option><option value="C">C. hidden objections.</option><option value="D">D. distribution channels.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: obscure relationships.</h5><h5>Being cooperative involves valuing the work of others as much as you
value your own work. If someone needs help or is falling behind, you do your best to support him/her.
This includes listening attentively when your coworker is communicating with you. Being a good listener
is not an example of carrying your own weight. It may go along with getting to know others and having a
good attitude, but it is best as an example of being cooperative.
</h5></div><h5 id='q46'>46. A business should decide at the beginning of a marketing-research project how much it can afford to
spend in order to</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. tell the researcher when to stop the project.</option><option value="B">B. narrow the focus of the research if necessary.</option><option value="C">C. cut the project in half if that is all it can afford.</option><option value="D">D. skip some of the research steps if it needs to save time.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: narrow the focus of the research if necessary.</h5><h5>Many businesses allocate a specific amount in the budget
for marketing research. If the amount will not cover the expense of the entire research project, then the
business should stop at this point or narrow the focus of the project to the part that would be most useful
at that time. The steps in the marketing-research process must be taken in a specific order, and none of
them can be skipped. Starting a project and then telling the researcher to stop or cutting the project in
half would not be effective.
</h5></div><h5 id='q47'>47. A business conducts marketing research when it needs to solve a problem or when it wants to</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. identify a new market opportunity.</option><option value="B">B. increase its sales staff.</option><option value="C">C. coordinate activities.</option><option value="D">D. analyze financing options.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: identify a new market opportunity.</h5><h5>Marketing research is the systematic gathering, recording, and
analyzing of data about a specific issue, situation, or concern. To remain competitive in the marketplace,
businesses conduct marketing research. One way to remain competitive in the marketplace is to identify,
select, and distribute products to a new market segment, whose identification requires marketing
research. If the business finds that a new market opportunity is feasible, it might decide to increase its
sales staff, coordinate new marketing activities, or analyze financing options. Analyzing financing options
is a business activity rather than a marketing-research activity.
</h5></div><h5 id='q48'>48. Marketers may want to use research to study the economy, a factor that is subject to change. In this
context, the economy can be described as a(n)</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. variable.</option><option value="B">B. case study.</option><option value="C">C. experiment.</option><option value="D">D. hypothesis.

</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: variable.</h5><h5>A variable is any factor that is subject to change. Sometimes, the economy is the variable that
marketers want to study through research. A case study is an in-depth analysis of a person, group, or
event. An experiment is a marketing-research method that tests cause and effect by test marketing new
products or comparing test groups with control groups. A hypothesis is a proposed explanation for
something.
</h5></div><h5 id='q49'>49. The purpose of semantic-differential rating scales is to measure</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. talent.</option><option value="B">B. behavior.</option><option value="C">C. personality.</option><option value="D">D. attitude.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: attitude.</h5><h5>Semantic-differential rating scales are used to measure attitude. Research participants are
asked to check the box that best describes their feelings. Each box on the scale contains an adjective or
phrase, such as courteous or discourteous. By checking a box, respondents indicate their attitude or how
they feel about statements. Behavior is the manner in which individuals act. Personality is an individual's
qualities or traits and behavior. Talent is an individual's aptitude for learning specific skills.
</h5></div><h5 id='q50'>50. What data-collection method can be used to obtain product information during the point-of-purchase
process?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Statistical survey</option><option value="B">B. Photographic scanner</option><option value="C">C. Email survey</option><option value="D">D. Volume-tracking scanner</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Volume-tracking scanner</h5><h5>A scanner is an electronic device that reads or translates codes that are placed
on products and enters the product information into a computer. Scanners are commonly used during a
sales transaction, which is the point of purchase. This is a popular method of collecting information about
customers' buying habits and inventory status because the scanning system can track large volumes of
goods. Once enough data are collected, researchers evaluate the data to determine how fast or slow
certain products are moving, which is information they can use to make business decisions. Photographic
scanners, email surveys, and statistical surveys are not data-collection methods that researchers use
during the point-of-purchase process.
</h5></div><h5 id='q51'>51. Which of the following is an example of range:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Consumers buy between four and eight widgets per week.</option><option value="B">B. Consumers buy an average of six widgets per week.</option><option value="C">C. Most consumers buy five widgets per week.</option><option value="D">D. Half of all consumers buy more than four widgets per week.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: Consumers buy between four and eight widgets per week.</h5><h5>Range is the distance between the smallest
and largest value in a set of responses. In the example, four was the smallest number of widgets
purchased, and eight was the largest number. The distance between four and eight is the range. Range
is often used to describe the relation between numbers, such as the variation between the number of
widgets purchased. Mean is the average, such as consumers buying an average of six widgets per week.
Mode is the most common response, such as most consumers buy five widgets per week. Median is the
exact middle, such as half of all consumers buying more than four widgets per week.
</h5></div><h5 id='q52'>52. Which of the following is a source of error in the research process:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Key summary</option><option value="B">B. Interview location</option><option value="C">C. Sample design</option><option value="D">D. Project purpose</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sample design</h5><h5>When collecting information, researchers usually select a sample of the target population
to contact or include in the study. The design of this sample may lead to errors in the research.
Researchers need to make sure the sample they select accurately represents the target population. For
example, errors may occur if all those in the sample are 20-year-old males who live in one small city, but
the research involves all men between the ages of 18 and 50. Interview location, key summary, and
project purpose are not sources of error in the research process.
</h5></div><h5 id='q53'>53. Which of the following is a possible weakness associated with a secondary-data source:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Internet accessibility</option><option value="B">B. Recent industry approval</option><option value="C">C. Reasonable purchase price</option><option value="D">D. Inconsistent collection method</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: Inconsistent collection method</h5><h5>Secondary data are information that have been collected for purposes
other than the project at hand. Marketers collect secondary data from a variety of sources, such as
business websites, research companies, trade associations, and industry journals. Although secondarydata sources can be inexpensive and provide current information, researchers must be careful to
examine the way in which the source collected information. If the source publishes statistical data it has
collected in an inconsistent or subjective way, the data may be skewed or exhibit bias. Industry approval,
reasonable prices, and Internet accessibility are advantages associated with secondary-data sources.
</h5></div><h5 id='q54'>54. The marketing function that best enables a company to make informed decisions about what to sell is</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. promotion.</option><option value="B">B. product/service management.</option><option value="C">C. selling.</option><option value="D">D. marketing-information management.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: marketing-information management.</h5><h5>Channel management involves understanding the concepts and processes
needed to identify, select, monitor, and evaluate sales channels. This example entails the transfer of
ownership of the computers from the manufacturer to the retailer. Promotion involves understanding the
concepts and strategies needed to communicate information about goods, services, images, and/or ideas
to achieve a desired outcome. Pricing is the marketing function that involves determining and adjusting
prices to maximize return and meet customers' perceptions of value. Product/service management is the
marketing function that involves obtaining, developing, maintaining, and improving a product or service
mix in response to market opportunities.
</h5></div><h5 id='q55'>55. The owner of a business is meeting with the company's managers and supervisors to set objectives for
the next year. This group is developing the company's</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. business goals.</option><option value="B">B. channels of distribution.</option><option value="C">C. market share.</option><option value="D">D. promotional mix.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is A: business goals.</h5><h5>Visions are timeless rather than time bound.
</h5></div><h5 id='q56'>56. When a local athletic apparel store sells shoes, clothing, and accessories that are designed specifically
for runners, it is using ____________ segmentation.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. demographic</option><option value="B">B. geographic</option><option value="C">C. psychographic</option><option value="D">D. rate of usage</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: psychographic</h5><h5>Market segmentation is dividing the market into groups that have similar characteristics.
Segmenting markets helps businesses identify the people who are most likely to buy their products.
Businesses segment markets in different ways. In the example, the athletic apparel store used
psychographics to divide the market, which means that the market is divided on the basis of a lifestyle
choice—running. Geographic segmentation involves dividing a market on the basis of location (e.g., zip
code). Demographics are the physical and social characteristics of the population. A business that
segments the market on the basis of demographics considers factors such as the age, gender, and
ethnicity of the population. Rate of usage is a type of behavioral segmentation, which involves dividing
customers into groups according to their response to a product.
</h5></div><h5 id='q57'>57. To evaluate an Internet source, what aspect would you consider when assessing whether its information
is clearly laid out so that it is easy to read?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Relevance</option><option value="B">B. Presentation</option><option value="C">C. Objectivity</option><option value="D">D. Timeliness

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: Presentation</h5><h5>Presentation is the way in which the information is communicated. It addresses such
factors as clarity of language used, sufficiency of font size, clarity of layout, effectiveness of colors,
usefulness of graphics or photos, clarity of audio or video (if included), and helpfulness of any animation
used. Presentation is particularly important on the Web since so much time is spent reading online.
Relevance deals with whether the information pertains to the topic being researched. Objectivity deals
with presenting unbiased information. Timeliness deals with how up to date the information is; however,
the importance of timeliness will vary from topic to topic.
</h5></div><h5 id='q58'>58. What do businesses often develop to be able to store and analyze data for the purpose of making
business decisions?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Management policies</option><option value="B">B. Operating procedures</option><option value="C">C. Survey methods</option><option value="D">D. Information systems</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: Information systems</h5><h5>An information system is a method of gathering, storing, and analyzing data for the
purpose of making business decisions. Businesses acquire vast amounts of information that must be
stored and analyzed to make it useful. An effective information system enables a business to quickly and
accurately process information and use that information to make decisions. Businesses do not develop
operating procedures, survey methods, or management policies to be able to store and analyze data for
the purpose of making business decisions.
</h5></div><h5 id='q59'>59. Which of the following is available to all people around the world who have access to a computer that has
connectivity:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Extranet</option><option value="B">B. Intranet</option><option value="C">C. Internet</option><option value="D">D. Broadband</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is C: Internet</h5><h5>The Internet is a worldwide network of computers that enables users to access information and
communicate with others. The Internet is available to all people around the world who have access to a
computer that has connectivity. Today, connectivity may be by dial-up to telephone lines, through
broadband technology, or through wireless routers. All people around the world do not have access to an
Intranet or an Extranet. Broadband is a type of technology.
</h5></div><h5 id='q60'>60. Many presentation software programs allow users to</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. copyright their graphics.</option><option value="B">B. include voice narration.</option><option value="C">C. calculate numerical data.</option><option value="D">D. analyze organizational progress.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: include voice narration.</h5><h5>Many multimedia software programs have options that allow sound (e.g., voice or
ringing bell) to be included to add interest to the presentation. Sound should be appropriately placed and
pertinent to the presentation theme. Businesses use spreadsheet software to make, document, and
calculate numerical data. Businesses do not use presentation software to analyze organizational
progress.
</h5></div><h5 id='q61'>61. What is one reason that a local business would keep records of all its customer-sales transactions?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. To cancel orders</option><option value="B">B. To issue rebates</option><option value="C">C. To handle returns</option><option value="D">D. To budget expenses</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is C: To handle returns</h5><h5>Businesses, such as retailers, keep a financial record of each sales transaction and
give a copy of the record, a receipt, to the customer. When a customer returns an item, a business uses
the information in the financial record to issue the customer a refund or a credit. The return transaction
also becomes a part of the business's financial records. Businesses do not keep records of sales
transactions in order to cancel orders. Rebates are a return of part of the price a customer pays for a
good or service. They are usually offered by the product's manufacturer rather than by retailers.
Expenses are monies the business spends, whereas sales transactions usually result in income.
</h5></div><h5 id='q62'>62. Which of the following is an example of a current trend in business:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Protecting consumer privacy</option><option value="B">B. Expanding economic growth</option><option value="C">C. Developing market research</option><option value="D">D. Promoting private enterprise</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Protecting consumer privacy</h5><h5>Businesses are becoming more concerned with ways of protecting
consumer privacy because of the new technology that makes it easy to gather and disseminate personal
information. The rapid growth of electronic commerce, which enables consumers to purchase products
online, also enables businesses to collect information about credit cards, personal preferences, and
buying habits that many consumers prefer to keep private. In response to a growing concern on the part
of consumers, businesses are trying to develop techniques that will protect consumer privacy—not only
online—but also from other types of abuses. Economic expansion and marketing research are
fundamental business activities rather than current trends. Private enterprise is an economic system in
which individuals and groups, rather than government, own or control the means of production.
</h5></div><h5 id='q63'>63. When conducting an environmental scan, which of the following is an economic factor that a business
should consider:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Local demographics</option><option value="B">B. Global trade regulations</option><option value="C">C. Consumer spending habits</option><option value="D">D. Restricted sales territories</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is C: Consumer spending habits</h5><h5>An environmental scan is an analysis of external forces that influence a
business's success. By examining economic, political, socio-cultural, and technological factors that affect
the business, the business can take steps to ward off the threats and to take advantage of the
opportunities based on the information that the scan provides. Consumer spending habits are an
economic factor that might be a threat or an opportunity. If spending is increasing because the economy
is healthy, businesses will be able to increase production and sell more. Global trade regulations are a
political factor. Local demographics and restricted sales territories are not economic factors.
</h5></div><h5 id='q64'>64. A clothing manufacturer checks one pair of pants out of every shipment to ensure the quality of its
product. This process is known as quality</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. inspection.</option><option value="B">B. guarantee.</option><option value="C">C. delivery.</option><option value="D">D. assurance.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: inspection.</h5><h5>Checking a sample item for defects after it has already been produced is part of a process
known as quality inspection. Quality assurance is a process businesses use to prevent defective
products from being created, not just to eliminate or correct them after they've already been produced.
Quality guarantee and quality delivery are not traditional terms used in operations or quality control.
</h5></div><h5 id='q65'>65. What should employees who are learning a new skill avoid doing?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Acting safely</option><option value="B">B. Following rules</option><option value="C">C. Taking shortcuts</option><option value="D">D. Asking questions</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Taking shortcuts</h5><h5>Employees who are learning a new skill should work slowly and cautiously, and avoid
taking shortcuts. The quickest way is not necessarily the best way to complete tasks. Employees should
practice the new skill using the appropriate steps and following the order in which they were instructed to
use them. Employees who are learning a new skill should ask questions, follow rules, and act safely.
</h5></div><h5 id='q66'>66. An author's new book is an example of a</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. derivative project.</option><option value="B">B. breakthrough project.</option><option value="C">C. R&D project.</option><option value="D">D. platform project.

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: platform project.

</h5><h5>Explanation not available</h5></div><h5 id='q67'>67. Before identifying the right people to work on a project, it is important to</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. develop accurate job descriptions.</option><option value="B">B. select necessary supplies.</option><option value="C">C. ask organizations for contributions.</option><option value="D">D. prepare construction specifications.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is A: develop accurate job descriptions.</h5><h5>Before identifying the right people to work on a project, it is important
to develop accurate descriptions of the jobs these people will need to perform. The descriptions should
explain exactly what is involved such as qualifications, education, or experience. Then, match the skills of
project members to the job descriptions to find the people who will be able to do the work. It is not
important to select necessary supplies, ask for contributions, or prepare specifications before identifying
the right people to work on a project.
</h5></div><h5 id='q68'>68. When managing a project, the first activity is for the project leader to</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. develop a schedule.</option><option value="B">B. set goals.</option><option value="C">C. negotiate terms.</option><option value="D">D. monitor progress.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: set goals.</h5><h5>Visions are timeless rather than time bound.
</h5></div><h5 id='q69'>69. A reason that many companies update or alter existing products is to</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. be able to plan production quantities.</option><option value="B">B. make them competitive with similar products.</option><option value="C">C. create new products to put on the market.</option><option value="D">D. use a familiar production process.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is B: make them competitive with similar products.</h5><h5>Updating or altering an existing product is a good way to
compete effectively with similar products produced by other companies. Changing products is usually
much less expensive than creating new products. Updated or altered products are not new products but
new versions of old products. Changing products does not help the business to plan quantities since it
does not know how well the revised product will sell. Being able to use a known production process
would not be a valid reason for updating or altering products.
</h5></div><h5 id='q70'>70. A focus on how things are done, rather than just outcomes, is known as</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. continual improvement.</option><option value="B">B. lean production.</option><option value="C">C. process orientation.</option><option value="D">D. concurrent engineering.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: process orientation.</h5><h5>Process orientation is a focus on how things are done, rather than just outcomes. It
is a central principle of ISO 9000. Lean production is maximizing customer value while minimizing waste.
Continual improvement is a focus on increasing efficiency and effectiveness in all areas of the
organization. Concurrent engineering is performing the stages of product design and development
simultaneously, instead of one after another.
</h5></div><h5 id='q71'>71. When the LXT Audio-Book Company was founded 15 years ago, its target market was blind and visuallyimpaired individuals who enjoyed listening to nonfiction audio books. Recently, though, the company has
begun marketing these same audio books as “learning solutions” for individuals with dyslexia and other
learning disabilities. This is an example of __________ innovation.</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. paradigm</option><option value="B">B. product</option><option value="C">C. process</option><option value="D">D. positioning</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: positioning</h5><h5>Innovation is the lifeblood of business, helping firms to stay competitive and to move forward.
There are four specific types of innovation: product, process, positioning, and paradigm. Product
innovation involves the development of totally new or improved products. Process innovation involves
improving of some aspect of a process (e.g., manufacturing process). Positioning innovation involves
identifying new, different ways to position a product or a company. LXT capitalized on positioning
innovation by finding a different way to position its audio books in the marketplace. Paradigm innovation
is a shift in the way of thinking that causes change.
</h5></div><h5 id='q72'>72. Which of the following is an example of gathering information before making a decision:</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Watching movies</option><option value="B">B. Writing letters</option><option value="C">C. Reading novels</option><option value="D">D. Asking questions</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: Asking questions</h5><h5>Before individuals can make decisions, they need to obtain information about the
problem or situation. One way of gathering information is to ask questions of friends, family, coworkers,
or supervisors. Asking questions enables individuals to gather additional information that may be useful
in helping them to make good decisions. Watching movies, writing letters, and reading novels are not
ways of obtaining information to use in decision making.
</h5></div><h5 id='q73'>73. Employees who are unable to manage their time effectively often experience</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. decreased pressure.</option><option value="B">B. increased stress.</option><option value="C">C. increased self-esteem.</option><option value="D">D. decreased tension.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is B: increased stress.</h5><h5>Stress is a mental or emotional feeling of pressure or tension. Employees who do not
manage their time effectively often experience increased levels of stress. They find that they do not have
the time to complete their tasks at work, and feel overwhelmed and under pressure to get everything
done. The stress may follow them home and impact on their relationships with family and friends.
Employees who are unable to effectively manage their time often experience increased pressure and
tension, and decreased self-esteem.
</h5></div><h5 id='q74'>74. What should you avoid doing when filling out an employment application?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Leaving blank spaces</option><option value="B">B. Specifying certain jobs</option><option value="C">C. Providing exact data</option><option value="D">D. Signing your name</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: Leaving blank spaces</h5><h5>When completing an employment application, you should answer all the questions
and fill in all the blanks. If the question does not pertain to you, write "NA" for not applicable. If you do not
know the answer, write "unknown." By filling in all the spaces, you indicate to the employer that you have
read all the questions even if you don't have the answers. Employment applications usually require your
signature. You should always specify the job for which you are applying and provide exact data on the
employment application.
</h5></div><h5 id='q75'>75. The basic purpose of writing a letter of application concerning a job opening is to</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. interest the employer in interviewing you.</option><option value="B">B. describe your job skills in detail.</option><option value="C">C. tell the employer how you found out about the job.</option><option value="D">D. provide the employer with your complete work history.

</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is A: interest the employer in interviewing you.</h5><h5>The purpose of a letter of application is to catch the interest of
the prospective employer so that you will be called in for a personal interview. Few employees are hired
without a personal interview. The letter of application should tell the employer how you found out about
the job, but that is not a basic purpose of the letter. The letter should touch on your work history and job
skills, but the complete details should be presented in your résumé.
</h5></div><h5 id='q76'>76. The primary reason why many people engage in career-oriented networking activities is to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. connect with others who might help them accomplish professional goals.</option><option value="B">B. develop an extensive list of sales prospects and contacts.</option><option value="C">C. obtain letters of recommendation from previous employers.</option><option value="D">D. cultivate a wide circle of social and personal contacts.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: connect with others who might help them accomplish professional goals.</h5><h5>People engage in networking
activities by communicating with customers, friends, family, teachers, and former coworkers. Networking
often provides people with information regarding work-related opportunities, such as job openings.
Although networking is often used to develop a list of sales prospects and contacts, many people are not
involved in selling activities in their occupation. Career-networking activities are primarily used to improve
or enhance work-related situations rather than social standing. Obtaining letters of recommendation is
often a result of networking activities. However, it is not always the primary reason why people network.
</h5></div><h5 id='q77'>77. A characteristic of effective prices is that they must be</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. high.</option><option value="B">B. inflexible.</option><option value="C">C. competitive.</option><option value="D">D. low.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: competitive.</h5><h5>When a similar product is offered by other businesses, a business needs to be aware of the
prices of those businesses. If not, the business will probably lose customers because it is not
competitive. Businesses must be willing to adjust their prices, depending on the circumstances faced by
the business. Changes in the economy, demand, and other factors can affect pricing.
</h5></div><h5 id='q78'>78. Which of the following pricing practices is illegal in some countries because it may drive a company's
competitors' out of business:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Below-cost pricing</option><option value="B">B. One-price policies</option><option value="C">C. Price skimming</option><option value="D">D. Markup pricing</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Below-cost pricing</h5><h5>When a company prices its products below cost, it makes it difficult for other
companies to compete with the low prices, which they cannot afford to charge, and might eventually force
them out of business. To prevent this situation from happening, many governments have laws that make
it illegal for businesses to use below-cost pricing. When a business charges one price for all items it sells,
it is using a one-price policy. Price skimming is a pricing strategy that involves setting prices higher than
those of the competition. Markup is the difference between the cost of a product and its selling price.
</h5></div><h5 id='q79'>79. One way that advances in technology are impacting the product/service management function is by
making it possible for businesses to</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. improve existing products.</option><option value="B">B. eliminate human errors.</option><option value="C">C. simplify production systems.</option><option value="D">D. control customer preferences.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: improve existing products.</h5><h5>As a result of advances in technology, new materials and operating
techniques have been developed. These materials and techniques have made it possible for businesses
to improve existing products. This impacts the product/service management function because it enables
businesses to extend the life of existing products and keep them on the market. Businesses have found
that it is usually less expensive to update existing products than to develop entirely new products.
Advances in technology are allowing businesses to do this. Advances in technology often help to reduce
human errors but cannot completely eliminate them. Advances in technology often make production
systems more complex because they rely on complicated computer systems. Businesses are not able to
control customer preferences.
</h5></div><h5 id='q80'>80. Pick the best response: Where do product opportunities exist?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Anywhere that people have had their needs satisfied</option><option value="B">B. Where people work</option><option value="C">C. Where people participate in their hobbies</option><option value="D">D. Anywhere there is an un- or under-met need</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Anywhere there is an un- or under-met need</h5><h5>People can recognize unmet or under-met needs wherever
they are. This could be at work or where they are enjoying their hobbies. When people have their needs
satisfied, product opportunities don't exist. It's when there's a problem or situation that isn't being taken
care of that people can find product opportunities.
</h5></div><h5 id='q81'>81. When using mind mapping to generate product ideas, you begin by writing down the main problem or</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. situational analysis.</option><option value="B">B. supporting facts.</option><option value="C">C. primary associations.</option><option value="D">D. market opportunity.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: market opportunity.</h5><h5>Marketing research is the systematic gathering, recording, and
analyzing of data about a specific issue, situation, or concern. To remain competitive in the marketplace,
businesses conduct marketing research. One way to remain competitive in the marketplace is to identify,
select, and distribute products to a new market segment, whose identification requires marketing
research. If the business finds that a new market opportunity is feasible, it might decide to increase its
sales staff, coordinate new marketing activities, or analyze financing options. Analyzing financing options
is a business activity rather than a marketing-research activity.
</h5></div><h5 id='q82'>82. True or False: Only express warranties hold up in court.</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. False; express warranties must be in writing.</option><option value="B">B. True; implied warranties cannot be verified.</option><option value="C">C. False; implied warranties are valid.</option><option value="D">D. True; only written evidence can be submitted in court.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: False; implied warranties are valid.</h5><h5>There was a time when only express warranties held up in court, but
today's courts recognize implied warranties as valid. Express warranties are warranties that are in writing
or expressed verbally.
</h5></div><h5 id='q83'>83. What strategy can make or break a business's product mix?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Positioning</option><option value="B">B. Contracting</option><option value="C">C. Altering</option><option value="D">D. Expanding</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: Positioning</h5><h5>Positioning is a product-mix strategy in which a business creates a certain image or
impression of a product in the minds of consumers. Businesses must determine the best position to seek
for their products because correct positioning is necessary to sales and profits. Positioning can make or
break a business's product mix. Contraction is a product-mix strategy in which a business removes, or
deletes, product items or product lines from its product mix. Alteration is a product-mix strategy in which a
business makes changes to its products or product lines. Expansion is a product-mix strategy in which a
business expands its product mix by adding additional product items or product lines.
</h5></div><h5 id='q84'>84. Text that continues or clarifies the thought expressed in the print ad's headline is referred to as the</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. tag line.</option><option value="B">B. subhead.</option><option value="C">C. identification.</option><option value="D">D. white space.

10

</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: subhead.</h5><h5>A subhead, or subheadline, adds information to that expressed in the headline. It is usually
positioned below the headline and set in slightly smaller size type. The tag line is a slogan used in an
advertisement. It may be part of the identification element, the part of the ad that identifies the product's
brand or advertiser. White space is the blank space in a print advertisement that is unoccupied by text or
illustrations.
</h5></div><h5 id='q85'>85. Why do companies use brands for their products?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. To demonstrate creativity</option><option value="B">B. To charge higher prices</option><option value="C">C. To encourage materialism</option><option value="D">D. To differentiate their products</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: To differentiate their products</h5><h5>Companies want their products to be perceived as different from those of
other companies. They can do this through the use of brands. Charging higher prices and encouraging
materialism are seen by consumers as negative aspects of brands. Creating an appealing brand often
requires creativity, but demonstrating creativity is not a purpose of using brands.
</h5></div><h5 id='q86'>86. Which of the following is an example of a purchase experience touchpoint:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Word-of-mouth</option><option value="B">B. Direct sales</option><option value="C">C. Customer satisfaction surveys</option><option value="D">D. Warranty programs</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: Direct sales</h5><h5>Touchpoints are the interactions that customers have with the business, and they can be
divided into three categories: pre-purchase, purchase, and post-purchase experiences. Direct sales
would occur during a purchase experience. Other examples of purchase experience touchpoints are
physical stores and contact with customer representatives. Word-of-mouth is an example of a prepurchase touchpoint. Customer satisfaction surveys, and warranty programs are examples of postpurchase experience touchpoints.
</h5></div><h5 id='q87'>87. Many of the town's residents have heard that this coming summer is predicted to be the hottest summer
ever. As a result of hearing this, Tim, the owner of an appliance store, decided to do more advertising for
air conditioners. Which of the following external factors has affected Tim and his business:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Cultural and social trends</option><option value="B">B. Legal and political factors</option><option value="C">C. Technology</option><option value="D">D. Demand</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is D: Demand</h5><h5>Demand for certain products tends to change with the seasons, such as air conditioners for
summer. This means that Tim needs to adjust his promotion to meet this change. Technology deals with
technological developments, not demand for a product. Legal and political factors deal with government
regulations and restrictions, not demand for a product. Cultural and social trends deal with changes in
attitudes, lifestyles, and tastes of the consumers, not demand for a product.
</h5></div><h5 id='q88'>88. The specific goal of product promotion is to</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. persuade consumers to buy a particular good or service.</option><option value="B">B. inform consumers about the company.</option><option value="C">C. show the company's commitment to technology or research.</option><option value="D">D. change a particular attitude toward a firm or its products.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: persuade consumers to buy a particular good or service.</h5><h5>Product promotion is used to stimulate
consumer purchases of goods or services. Showing the company's commitment to technology or
research, informing consumers about the company, and changing a particular attitude toward a firm or its
product are goals of institutional promotion.
</h5></div><h5 id='q89'>89. Which of the following is the most visible element of the promotional mix:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Personal selling</option><option value="B">B. Sales promotion</option><option value="C">C. Publicity</option><option value="D">D. Advertising</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: Advertising</h5><h5>Advertising is any paid form of nonpersonal presentation of ideas, images, goods, or
services. It is the most visible element of the promotional mix because it can be delivered to a wide range
of consumers through a variety of mass media. Sales promotion includes promotional activities other
than advertising, personal selling, and publicity that stimulate consumer purchases. Publicity is any
nonpersonal presentation of ideas, goods, or services that is not paid for by the company or individual
which benefits from it. Personal selling is the form of promotion that uses planned, personalized
communication in order to influence purchase decisions and enhance future business opportunities.
</h5></div><h5 id='q90'>90. What type of information are businesses that sponsor sales promotion sweepstakes and contests
required to make available to the customers who participate in those promotions?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Odds of winning</option><option value="B">B. Amount of rebate</option><option value="C">C. Value of coupon</option><option value="D">D. Samples of product</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: Odds of winning</h5><h5>In order to operate ethically, businesses that sponsor sweepstakes and contests are
required to inform potential participants about the odds of winning. By providing this type of information,
businesses are not misleading or deceiving customers about the possibility of winning. Customers have
the right to know what their chances of winning are in order to decide if they want to participate. A rebate
is a return of part of the price a customer pays for a good or service. A coupon is a certificate or part of a
printed advertisement entitling the holder to a reduced purchase price. A sample is a small amount of a
product.
</h5></div><h5 id='q91'>91. Governments that have passed “do not call” laws are restricting promotional activities related to</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. contests.</option><option value="B">B. telemarketing.</option><option value="C">C. Internet downloads.</option><option value="D">D. direct mail.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: telemarketing.</h5><h5>Telemarketing is an advertising medium that utilizes telephone service to promote a
product either by phoning prospective customers or providing a number for them to call. In the past few
years, consumer groups have complained that telemarketing has become intrusive, so many
governments have started to regulate telemarketing practices. Some governments have developed “do
not call” laws. These laws allow consumers to register their phone numbers with a “do not call” registry.
Qualifying businesses must obtain this list and not call consumers who have registered with the program.
If they violate these laws, the businesses may be fined. “Do not call” laws do not regulate contests,
Internet downloads, or direct mail.
</h5></div><h5 id='q92'>92. A local, exclusive business is having a sale. Which of the following advertising media would be most
effective in promoting the sale to the business's clientele:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Out-of-home</option><option value="B">B. Broadcast</option><option value="C">C. Magazine</option><option value="D">D. Direct mail</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: Direct mail</h5><h5>Direct mail is a promotional medium that comes to consumers' homes in the form of letters,
catalogs, postcards, and folders. Direct mail would be the most effective medium because the business
can choose the clientele who will receive the promotional message. Broadcast and out-of-home media
have limited selectivity. Magazine advertising is selective but costly, and the timing of the message may
not be appropriate.
</h5></div><h5 id='q93'>93. What is the primary goal of viral marketing?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Managing</option><option value="B">B. Staging</option><option value="C">C. Sharing</option><option value="D">D. Manipulating

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Sharing</h5><h5>Viral marketing is a promotional tactic that involves sending or forwarding promotional
messages over the Internet (e.g., email, social-media websites, and blogs) to generate buzz about a
brand, company, or product. Marketers often use humor, incentives, events, spoofs, videos, and other
unusual techniques to spark conversations and encourage people to share their messages with others. It
is important for marketers to prepare (stage) and manage the message content; however, staging,
managing, and manipulating are not the primary goals of viral marketing.
</h5></div><h5 id='q94'>94. What communication channels is a corporation's public-relations department most likely to use to
maintain positive relationships with shareholders?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. News conferences, consumer blogs, and employee manuals</option><option value="B">B. Press releases, online social networks, and print advertisements</option><option value="C">C. Newsletters, annual reports, and the company's website</option><option value="D">D. Policy manuals, commercials, and sponsorships</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: Newsletters, annual reports, and the company's website</h5><h5>Public relations involves establishing good
relationships between the business and the public. A business tries to maintain positive relationships with
different groups that make up the public, such as employees, local businesses, government officials, the
media, and the business's shareholders. Because the shareholders are the owners of the company, it is
important to develop and maintain positive relationships with them. The public-relations department does
this by communicating with them through newsletters, annual reports, the company's website, and online
social networks. Print advertisements and commercials are forms of nonpersonal advertising. Businesses
use press releases and news conferences to convey information to the media. Policy manuals help guide
employees' actions on the job. Consumer blogs can be developed by anyone to communicate positive
and negative information about various goods and services. A sponsorship is a partnership in which a
company pays a fee to affiliate itself with a team, league, or event.
</h5></div><h5 id='q95'>95. Successful positioning appeals to customers'</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. emotions.</option><option value="B">B. five senses.</option><option value="C">C. desire to save money.</option><option value="D">D. logic.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: emotions.</h5><h5>Successful positioning appeals to customers' emotions. It connects with their feelings rather
than just their logical or rational thoughts. Positioning is not a tangible experience that involves the five
senses. A product may be positioned as a “value item,” or a way for customers to save money, but not all
successful positioning depends on this desire.
</h5></div><h5 id='q96'>96. When salespeople demonstrate the features and benefits of goods or services, they often are able to</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. provide jobs for more employees.</option><option value="B">B. add usefulness to products.</option><option value="C">C. develop new and improved products.</option><option value="D">D. create desire for products.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: create desire for products.</h5><h5>Through the selling process, salespeople are often able to create desire for
products by demonstrating the features and benefits of goods or services. By presenting the features and
benefits, salespeople can explain to customers how the particular products will satisfy their wants and
needs. As a result of creating desire, salespeople are often able to sell the product. Demonstrating the
features and benefits of goods or services does not add usefulness to products, develop new and
improved products, or provide jobs for more employees.
</h5></div><h5 id='q97'>97. Why do businesses try to build a clientele?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Leads to repeat business</option><option value="B">B. Gives the business a new image</option><option value="C">C. Attracts well-to-do customers</option><option value="D">D. Provides continuing sources of new workers</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: Leads to repeat business</h5><h5>A company's clientele consists of a body of customers upon which the
organization can rely for significant repeat business. These are the customers who return to shop
regularly. Other benefits of building a clientele include reduced selling costs, increased sales volume, and
personal satisfaction. A loyal clientele does not change the business's image, provide it with a source of
workers, or attract well-to-do customers.
</h5></div><h5 id='q98'>98. Which of the following is a reason why the ethical and legal issues involved in selling activities are
extremely important:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Buyers avoid doing business with unethical salespeople.</option><option value="B">B. Sellers must understand how to criticize competitors.</option><option value="C">C. Sales staff must know when they can legally bend the truth.</option><option value="D">D. Sales managers are not responsible for what the sales staff does.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: Buyers avoid doing business with unethical salespeople.</h5><h5>Unethical salespeople often lose customers and
create a negative image of their company. Making erroneous statements about competitors or bending
the truth to make a sale are typical examples of unethical sales practices. Sales managers must monitor
the practices of their sales staff because they are ultimately responsible for the actions and claims of their
staff.
</h5></div><h5 id='q99'>99. What type of law prevents salespeople from one company from interfering with their competitions'
activities?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Product safety</option><option value="B">B. Unfair trade</option><option value="C">C. Consumer credit</option><option value="D">D. Warranty liability</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: Unfair trade</h5><h5>Activities such as stealing a competitor's trade secrets, or attempting to get a competitor's
customer to breach a contract, are considered unfair trade practices and are illegal practices in many
countries. Consumer protection laws address issues such as product safety, consumer credit, and
warranties.
</h5></div><h5 id='q100'>100. Which of the following factors has aided the most in creating a global business environment:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Technology</option><option value="B">B. Government</option><option value="C">C. Cultural changes</option><option value="D">D. Exchange rates</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: Technology</h5><h5>Technologies of all types have enabled global markets to function effectively. As examples,
refrigeration has enabled perishable products to be transported between countries; and computers have
facilitated communication and exchange of payments. Government, culture, and exchange rates have
both facilitated and hampered global trade.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Marketing/Marketing_1_Split_Master.js"></script></html>