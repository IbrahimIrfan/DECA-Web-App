<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 13</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. A primary responsibility of administrative law is to</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. enforce agency regulations.</option><option value="B">B. establish congressional/parliamentary committees.</option><option value="C">C. interpret constitutional laws.</option><option value="D">D. overturn lower courts' decisions.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is A: enforce agency regulations.</h5><h5>Administrative law deals with the rules and regulations that have been
established by governmental agencies. Government and independent agencies have the authority to
enact and enforce regulations for various administrative functions, including aviation, taxation, and
commerce. The legislative branch of government establishes congressional/parliamentary committees.
The judicial branch of government interprets constitutional law and in some instances may overturn a
lower court's judicial decision.
</h5></div><h5 id='q2'>2. What distribution method is best for a manufacturer to use when the product is complex and is difficult to
install and repair?</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. Selective</option><option value="B">B. Intensive</option><option value="C">C. Exclusive</option><option value="D">D. Invasive</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: Exclusive</h5><h5>Exclusive distribution involves selling a product through just one middleman in a geographic
area and allows the manufacturer to maintain tight control over the product. This method is often used
when the products are technical in nature and require specialized knowledge to install and repair.
Intensive distribution involves selling a product through every available wholesaler and retailer in a
geographic area where consumers might look for it. Chewing gum is an example of a product sold
through intensive distribution. Selective distribution involves selling a product (e.g., designer handbags)
through a limited number of wholesalers and retailers in a geographic area. Invasive is not a distribution
method.
</h5></div><h5 id='q3'>3. When a retailer follows up with a vendor to verify that an individual's order shipped on time, it is</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. facilitating customer service.</option><option value="B">B. evaluating sales quotas.</option><option value="C">C. requesting special attention.</option><option value="D">D. negotiating shipping terms.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: facilitating customer service.</h5><h5>It is important for a business to monitor its channel members (e.g.,
vendors) to ensure that things are operating efficiently. Monitoring often involves following up with
channel members to verify inventory levels and shipping dates. By following up with a vendor to ensure
that the products arrive when and where their customers need them, the business is facilitating customer
service. There is not enough information to determine if the retailer is requesting that the vendor give the
order special attention. The retailer is not evaluating sales quotas or negotiating shipping terms.
</h5></div><h5 id='q4'>4. Kendra owns a small business that sells handmade quilts to residents and tourists in her community.
What type of distribution channel being used?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Producer to retailer to consumer</option><option value="B">B. Producer to wholesaler to consumer</option><option value="C">C. Producer to agent to industrial distributor to user</option><option value="D">D. Producer to industrial distributor to user</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: Producer to retailer to consumer</h5><h5>The distribution channel consists of the path or route that goods or
services take from the producer to the ultimate consumer or industrial user. In the example, the
producers are the individuals who make the quilts, and Kendra is the retailer who sells the quilts to the
consumers—the individuals who use the quilts. Wholesalers are intermediaries who help move goods
between producers and retailers. Agents are intermediaries who assist in the sale and/or promotion of
goods and services but do not take title to them. Industrial distributors are intermediaries that sell
products to industrial users (businesses).
</h5></div><h5 id='q5'>5. What form of technology allows channel members to track a product's movement through the supply
chain in real time?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Supplier performance index (SPI)</option><option value="B">B. Universal product code (UPC)</option><option value="C">C. Radio frequency identification (RFID)</option><option value="D">D. Global transit mapping system (GTMS)</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: Radio frequency identification (RFID)</h5><h5>A radio frequency identification (RFID) tag is a small computer
chip that is attached to the item. The tag contains product information such as price, style, model
number, etc., and allows channel members to track the item's movements from the time it leaves the
production line to the point of purchase. The tag allows channel members to know where the product is at
all times. Universal product codes are bar-coded tags that are read by a scanner. Supplier performance
index is a method to measure and evaluate a channel member's performance. A global transit mapping
system, universal product codes, and the supplier performance index are not forms of technology that
track a product's movement through the supply chain.
</h5></div><h5 id='q6'>6. A business should communicate inventory needs with its vendors before a planned sales promotion to
ensure that the vendors</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. improve their products' quality.</option><option value="B">B. pay the necessary service fees.</option><option value="C">C. change their credit terms.</option><option value="D">D. have the products available to ship.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: have the products available to ship.</h5><h5>It is important for a business to coordinate its promotional efforts with
its vendors because the products must be in stock and available to sell during an advertised sales event.
A business that is planning to advertise a sale must first make sure the products are in stock. If
customers visit the business to buy products that are not available, they may become irritated with the
business and go elsewhere to buy. A business does not need to communicate inventory needs with its
vendors to ensure that the vendors pay service fees, change their credit terms, or improve their products'
quality.
</h5></div><h5 id='q7'>7. A producer can minimize channel conflict among its distributors and retailers by</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. establishing slotting fees for certain channels.</option><option value="B">B. selling its items directly to the end users.</option><option value="C">C. offering different products through each channel.</option><option value="D">D. requesting that the channel members carry only its brand.</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: offering different products through each channel.</h5><h5>Channel conflict can occur when channel members are
competing among themselves for customers. When each channel sells different products, they are not
directly competing among themselves for business. For example, if a guitar manufacturer sells its line of
guitars through authorized distributors and sells accessories for the guitars through online retailers, the
channel members are not competing for the customers because they are selling different products.
Bypassing channel members and selling directly to end users, establishing slotting fees, and requesting
channel members to carry only its brand are actions that tend to create channel conflict rather than
minimize it.
</h5></div><h5 id='q8'>8. Which of the following statements contains the most relevant information to include in a business report
about the specific market share of computer manufacturers during a particular time frame:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. In 2009, Hewett Packard shipped more computers than Dell or Apple.</option><option value="B">B. In 2009, Hewett Packard held 29.1 percent of the market share, followed by Dell, which held 21.9
percent.</option><option value="C">C. Hewett Packard, Dell, Acer, Toshiba, and Apple sold more computers in 2009 than other
computer manufacturers.</option><option value="D">D. Apple Computers held the fifth highest share of the computer market in 2009.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: In 2009, Hewett Packard held 29.1 percent of the market share, followed by Dell, which held 21.9
percent.</h5><h5>This option provides the most detailed information about market share during a specific time
frame because it provides specific percentage amounts in relation to one year. The ability to read
information and extract the most important facts is an important skill to possess. Businesspeople often
need to extract the most important content from various documents and articles to analysis reports,
complete projects, and make business decisions.
</h5></div><h5 id='q9'>9. Which of the following is an example of formal communication in the workplace:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Susan tells a coworker that she thinks her manager is going to be fired.</option><option value="B">B. Tessa asks Ken for his opinion about an article that she has written.</option><option value="C">C. Phil asks Mark if he has an extra product brochure that he can give to a customer.</option><option value="D">D. Melinda meets with her manager to discuss a possible promotion.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is D: Melinda meets with her manager to discuss a possible promotion.</h5><h5>A discussion between an employee
and a supervisor about work related issues is formal communication. Formal communication in the
workplace involves behaving professionally and using a respectful tone. Asking another person
(coworker) for an opinion or brochure are informal forms of workplace communication. A possible firing in
the workplace is an example of gossip, which is a type of informal communication that should be avoided.
</h5></div><h5 id='q10'>10. Writing key points on notecards and then placing the cards in order of their importance is one way to</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. verify accuracy.</option><option value="B">B. access files.</option><option value="C">C. revise facts.</option><option value="D">D. organize information.
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: organize information.
</h5><h5>Explanation not available</h5></div><h5 id='q11'>11. When developing an executive summary for a written report, the writer should include</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. all supporting evidence.</option><option value="B">B. the most important points.</option><option value="C">C. technical jargon.</option><option value="D">D. mostly background information.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is B: the most important points.</h5><h5>The executive summary provides an overview of the entire report and
contains the most important information included in the body of the report. Although it may be appropriate
to include some background information, some supporting evidence, and a limited amount of technical
jargon, the primary purpose of the executive summary is to provide a concise and clear overview of the
entire document. Comprehensive background information and detailed supporting evidence are placed in
the body of the report or in the appendices.
</h5></div><h5 id='q12'>12. Samantha manages the marketing department for a large company and has just hired a new employee to
run the company's cooperative advertising program. The most appropriate way for Samantha to advise
staff members that a new employee will be joining their team is by</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. writing a news article for the company's semi-annual newsletter.</option><option value="B">B. making an announcement during the weekly departmental meeting.</option><option value="C">C. posting a short message on her personal weblog.</option><option value="D">D. sending a personalized text message to each employee in the department.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: making an announcement during the weekly departmental meeting.</h5><h5>Samantha should tell her staff about
the new employee at the next staff meeting. It is an efficient way to communicate because Samantha can
tell all of the staff members in her department about their new colleague at one time. Text messages,
personal weblogs, and a semi-annual newsletter are not appropriate ways to communicate this type of
workplace news.
</h5></div><h5 id='q13'>13. Rosa Sanchez is a Latin-American businessperson who is meeting with a potential client, Mr.
Devonshire, who is from London, England. When Rosa leaned in to shake Mr. Devonshire's hand, he
backed away. This is an example of a cultural issue related to</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. punctuality.</option><option value="B">B. language variances.</option><option value="C">C. personal space preferences.</option><option value="D">D. appearance.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: personal space preferences.</h5><h5>Businesspeople should try to learn as much as they can about a client's
culture, customs, and social values. By understanding and being aware of cultural differences,
businesspeople can adapt their communication styles to make a positive impression on their clients and
not make them feel uncomfortable. The concept of space and proximity differs among cultures. In some
countries (e.g., England), people prefer to maintain distance from others during conversation. In these
countries, maintaining space is a sign of respect for the other person. On the other hand, people from
Latin-American countries (e.g., Venezuela) believe that it is unfriendly to maintain distance and prefer to
stand or sit closely when conversing. The example is not a cultural issue related to punctuality (time),
language, or personal appearance and dress.
</h5></div><h5 id='q14'>14. Jordan takes time to follow up with his clients on a regular basis and lets them know about new product
releases and updates. He makes sure that he answers his clients' questions and resolves their problems
quickly. Jordan is carrying out activities that relate to</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. product/service management.</option><option value="B">B. customer relationship management.</option><option value="C">C. human resource management.</option><option value="D">D. business operations management.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: customer relationship management.</h5><h5>Customer relationship management is an effort to build loyal,
trusting, personal, and long-term associations with the clients or customers that have the potential to
generate profit for the business. To build customer loyalty, the business must keep in regular contact with
clients. Product/Service management is the marketing function that involves obtaining, developing,
maintaining, and improving a product or service mix in response to market opportunities. Human
resource management is the process of planning, staffing, leading, and organizing the employees of the
business. Operations management is the process of planning, controlling, and monitoring the day-to-day
activities required for continued business functioning.
</h5></div><h5 id='q15'>15. An electronics company scaled back its production of camcorders during an economic recession when
the demand for them decreased. In this situation, the company adapted to market changes by</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. improving the product's features.</option><option value="B">B. managing its innovation processes.</option><option value="C">C. monitoring consumer spending trends.</option><option value="D">D. gathering information about its competitors.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: monitoring consumer spending trends.</h5><h5>Businesses adapt to market changes by monitoring consumer
spending trends. When trends indicate that consumers are spending more money, businesses increase
their production activities to accommodate the higher demand, so they can remain competitive in the
marketplace. On the flip side, businesses tend to scale back production when demand decreases and
consumers are not spending their money. The company did not adapt to market changes by managing its
innovative processes, improving the product's features, or gathering information about its competitors.
</h5></div><h5 id='q16'>16. Which of the following statements is true about a mixed economy:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Businesses are the primary economic decision makers, and the government controls the system.</option><option value="B">B. Individuals are the primary economic decision makers, and businesses control and regulate the
system.</option><option value="C">C. Individuals and businesses are the primary economic decision makers, and the government
helps regulate the system.</option><option value="D">D. The government is the primary economic decision maker and also regulates individual and
business behavior.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Individuals and businesses are the primary economic decision makers, and the government
helps regulate the system.</h5><h5>Explanation not available</h5></div><h5 id='q17'>17. What type of tax is used to pay for national defense and interstate highways?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Unemployment</option><option value="B">B. Sales</option><option value="C">C. Local property</option><option value="D">D. Federal income</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: Federal income</h5><h5>Governments levy taxes to raise money to pay for various programs and initiatives. The
federal government uses income tax to pay for initiatives such as national defense and interstate
highways. Local communities and state/provinces levy sales tax, which are typically charged on
nonessential goods and services such as hotel rooms, candy, and books. Local property taxes are levied
on buildings and land, and are often used to pay for community schools. Governments collect
unemployment taxes from businesses, which are used to cover living expenses for workers who are
temporarily laid off from their jobs.
</h5></div><h5 id='q18'>18. According to the law of diminishing returns, what aspect of production decreases when fixed resources
have reached their maximum level of efficiency?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Lead time</option><option value="B">B. Quality</option><option value="C">C. Outputs</option><option value="D">D. Product usefulness</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is C: Outputs</h5><h5>The law of diminishing returns is an economic principle stating that after a certain point, hiring
additional employees will result in a decrease in the overall level of production. Most often, available
resources are finite, which means that there are fixed amounts of resources (e.g., equipment) available to
produce goods and services. Overall productivity reaches its peak when there are a certain number of
employees using all of the available resources to do the work. When there are too many laborers and not
enough fixed resources, resource efficiency and output decreases. The reduction of outputs does not
necessarily affect product quality, order lead time, or product usefulness.
</h5></div><h5 id='q19'>19. The exchange rate of a nation's currency is most likely to decrease when the nation</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. exports more than it imports.</option><option value="B">B. experiences political instability.</option><option value="C">C. carries a low level of debt.</option><option value="D">D. limits the amount of money it prints.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: experiences political instability.</h5><h5>Currency exchange rates are constantly fluctuating, and are affected by
many factors. When a nation experiences political instability, the value of its currency tends to decrease
because the nation's future is uncertain. A nation's currency value tends to increase when its exports
exceed its imports, when it carries a low level of debt, and when it limits the amount of money it prints
and circulates.
</h5></div><h5 id='q20'>20. Rick believes that employees who are close to retirement lack the basic computer skills that the
company's young new hires have. Rick is stereotyping individuals on the basis of</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. gender.</option><option value="B">B. age.</option><option value="C">C. politics.</option><option value="D">D. nationality.

2012 HS ICDC

MARKETING CLUSTER EXAM

3
</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: age.</h5><h5>Stereotyping does not consider the individual's unique skills, beliefs, and attitudes. Instead,
stereotyping is a set image or assumption about a person or thing. Stereotyping tends to classify certain
people in groups (e.g., gender, race, age) that possess certain characteristics. These characteristics are
often based on unproven, false, or distorted beliefs and information. In the example, Rick is stereotyping
older workers by assuming that they lack basic computer skills. This is a broad assumption that is not
always true. In fact, many older workers are very computer savvy and willing to learn new technology.
The example is not a stereotype based on gender, politics, or nationality.
</h5></div><h5 id='q21'>21. Which of the following is a characteristic of individuals who have self-confidence:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Taking few risks because of a fear of doing something wrong</option><option value="B">B. Realizing that mistakes are a part of personal growth</option><option value="C">C. Exhibiting aggressive behavior when expressing opinions</option><option value="D">D. Being overly concerned with what others think</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Realizing that mistakes are a part of personal growth</h5><h5>Self-confidence is a positive belief in your own
talents, skills, and objectives. Individuals with self-confidence are willing to accept, admit, and learn from
their mistakes, and they are not afraid to take positive risks. Other characteristics of self-confident people
are that they respect others' rights to differing opinions, and can assertively communicate their beliefs,
regardless of what others think.
</h5></div><h5 id='q22'>22. When Kaitlin walked into the office conference room, she saw a coworker speaking on the telephone. To
respect her coworker's privacy, Kaitlin should</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. cough loudly to let her coworker know that she is in the room.</option><option value="B">B. stand quietly until her coworker notices her.</option><option value="C">C. leave the room immediately and shut the door.</option><option value="D">D. shut the door and wait quietly in the room until the phone call is over.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: leave the room immediately and shut the door.</h5><h5>An employee who respects others' privacy would leave
the room when a coworker is on the telephone. Standing quietly until being noticed, coughing loudly, and
shutting the door and waiting for the telephone call to end are not ways of respecting a coworker's
privacy.
</h5></div><h5 id='q23'>23. Rumors were flying at Bennett Corporation that the company was planning staff layoffs. Management did
not address the issue with employees, so the work environment became tense and distrustful. This is an
example of how grapevine communication can</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. prepare employees for changes.</option><option value="B">B. generate fear in the workplace.</option><option value="C">C. enhance the company's image.</option><option value="D">D. influence the company's policies.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: generate fear in the workplace.</h5><h5>Gossip is rumor or talk that discloses confidential information. In many
instances, the information disclosed is exaggerated or untrue. Rumors about layoffs generate fear
because employees are afraid that they will lose their jobs, and the fear tends to escalate when
management ignores the rumors. And if management ignores the rumors, the company's credibility and
image are likely to suffer. In the example, grapevine communication is not preparing the employees for
changes because they are not certain that the changes (layoffs) are going to occur. There is no evidence
that grapevine communication has influenced the company's various policies.
</h5></div><h5 id='q24'>24. After a few hours of working nonstop on a report to meet a deadline, Thomas starts to panic, wonders if
he will be able to finish on time, and loses his focus. So, he decides to take a short break and go for a
walk outside the office building. When he gets back to his desk, he is able to refocus and finish his report.
Thomas's break helped to</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. set his goals.</option><option value="B">B. prioritize his work.</option><option value="C">C. improve his skills.</option><option value="D">D. reduce his stress.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: reduce his stress.</h5><h5>Tight deadlines in the workplace are common occurrences and can cause stress.
Sometimes, a short break from a situation can relieve a person's stress and help him/her to regain focus.
Taking a break did not help Thomas prioritize his work, improve his skills, or set his goals. Thomas is well
aware that his priority is the report and that his goal is to meet the stated deadline. Thomas already had
the skills to perform his work.
</h5></div><h5 id='q25'>25. An advantage to forming collaborative partnerships with coworkers is that</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. decision making tends to take less time.</option><option value="B">B. conflict among various departments usually decreases.</option><option value="C">C. discussions usually stay focused and on topic.</option><option value="D">D. different perspectives often facilitate creativity.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: different perspectives often facilitate creativity.</h5><h5>Coworkers must often collaborate with one another to
accomplish business goals. An advantage to collaboration is that individuals have different perspectives,
which can help generate different types of creative ideas. Disadvantages to collaboration is that conflict
may occur when others do not agree with an idea, discussions may go off topic and waste company time
and money, and decision making may take longer to achieve.
</h5></div><h5 id='q26'>26. Which of the following is an example of legal tender issued by the federal government:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Municipal bonds</option><option value="B">B. Corporate bonds</option><option value="C">C. Mutual funds</option><option value="D">D. Bank notes</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bank notes</h5><h5>Bank notes are currency. Currency is the paper or metal (coin) money that individuals and
businesses use to buy and sell goods and services. Paper money and coins are issued by a country's
government. Corporate bonds are bonds issued by corporations to fund operating expenses. A mutual
fund is a collection of shareholders' money that is invested by professional fund managers in an
assortment of different securities, such as stocks and bonds. A bond is a piece of paper (real or virtual)
that says the governing body or corporation will borrow your money at a particular interest rate for a
particular period of time. Municipal bonds are issued by local governments.
</h5></div><h5 id='q27'>27. Martin keeps money in a special savings account to cover his living expenses for three months in case
he loses his job or gets sick and can't work. Martin has set up a(n)</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. emergency fund.</option><option value="B">B. education plan.</option><option value="C">C. retirement account.</option><option value="D">D. insurance policy.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: emergency fund.</h5><h5>Many financial planners advise their clients to maintain a savings account specifically to
cover unexpected events, such as job loss or illness. The money in an individual's emergency fund is
used to cover basic living expenses (e.g., mortgage, rent, car insurance, food) until s/he can work and
earn a steady income. Many financial planners advise individuals to maintain enough money to cover
living expenses for three to six months. Education plans are savings accounts that allow parents to save
money for their children's college education. Retirement funds are financial instruments that build wealth
for an individual's retirement. An insurance policy is a contractual agreement in which one company
(insurer) will pay for specified losses incurred by the other company (insured) in return for installment
payments (premium).
</h5></div><h5 id='q28'>28. When Lara purchased a sweater priced at $35.00, the dollar amount of her purchase totaled $37.43.
What type of tax did Lara pay?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Income</option><option value="B">B. Property</option><option value="C">C. Excise</option><option value="D">D. Sales</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sales</h5><h5>Sales tax is a fee that the government charges on retail products. Businesses collect sales taxes
from the customers and pay the government the taxes at set intervals. Property tax is a tax on land and
buildings. An excise tax (“sin” tax) is a specific type of sales tax on specific goods such as gasoline,
cigarettes, and alcohol. Excise taxes are often included in the price of the product. Income tax is a tax on
the income a person earns, such as wages earned by performing work for an employer.
</h5></div><h5 id='q29'>29. When selecting a qualified financial planner, it is important to consider his/her</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. education and licensure.</option><option value="B">B. living expenses and personal goals.</option><option value="C">C. personal goals and education.</option><option value="D">D. living expenses and licensure.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is A: education and licensure.</h5><h5>When selecting a financial-services provider, it is important to make sure that
the provider is qualified. One way to do this is to verify the provider's credentials. In many jurisdictions,
financial-services providers must pass an exam to obtain a license. These credentials verify that the
provider has the necessary training and background to give financial advice, help develop financial plans,
and make investments. When selecting a financial planner, his/her personal goals and living expenses
are not primary considerations.
</h5></div><h5 id='q30'>30. Accountants are legally required to follow established guidelines when preparing financial documents to
ensure that the information presented is</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. transparent and subjective.</option><option value="B">B. clear and consistent.</option><option value="C">C. subjective and consistent.</option><option value="D">D. irrational and clear.

2012 HS ICDC

MARKETING CLUSTER EXAM

4
</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: clear and consistent.</h5><h5>The accounting function is responsible for collecting and reporting the business's
financial information. Governments require businesses to provide certain types of financial information to
regulatory agencies and shareholders in specific ways. By requiring businesses to follow the same
standards and rules, financial reports are prepared in a consistent way, so the information is clear,
objective, and transparent to all people who read and work with financial information. Subjective
information is open for interpretation. Irrational information is not logical or meaningful to the reader. In
other words, it is unclear.
</h5></div><h5 id='q31'>31. A business's finance function may be compromised by groupthink because the practice is likely to</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. provoke conflict because it encourages others to express their opinions.</option><option value="B">B. pressure employees to conform under questionable circumstances.</option><option value="C">C. hinder consensus building in favor of individuality.</option><option value="D">D. take a lot of time to evaluate problems to make ethical business decisions.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: pressure employees to conform under questionable circumstances.</h5><h5>Groupthink is a psychological
phenomenon that evolves when conformity and the cohesiveness of the group become more important
than the group's objective, purpose, or problem. As a result, group members often feel pressured to
conform and behave in ways that they normally would not. Members learn to not “rock the boat” by
sacrificing their individuality, opinions, and personal ethics so they are not ostracized from the group. In
its extreme form, groupthink practices may result in unethical practices such covering up financial
mistakes, using company money inappropriately or carelessly, lying to the business's shareholders about
the financial health of the company, embezzling activities, etc.
</h5></div><h5 id='q32'>32. William is a human-resources manager who networks on a professional web site with acquaintances and
former business associates for the purpose of finding new employees for his company. William is using</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. a database for employee-performance reviews.</option><option value="B">B. the company intranet for interviewing candidates.</option><option value="C">C. an online networking method for recruitment purposes.</option><option value="D">D. the company blog for hiring recent college graduates.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: an online networking method for recruitment purposes.</h5><h5>Human resources managers often use web sites
such as LinkedIn to connect and network with business associates, as well as former managers and
coworkers. Using this method of recruiting, human-resources managers hope that their networking
connections will provide information about job seekers who might be qualified for various job openings
with the company. William is not using the company intranet to interview job candidates, a database to
perform employee reviews, or the company blog to hire recent college graduates.
</h5></div><h5 id='q33'>33. LMN Company is losing market share to the RST Corporation. LMN can quickly obtain useful information
about the RST's product offerings by</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. analyzing economic reports.</option><option value="B">B. visiting RST's web site.</option><option value="C">C. obtaining feedback from RST's employees.</option><option value="D">D. evaluating industry standards.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is B: visiting RST's web site.</h5><h5>A business needs to determine why it is losing market share to another company
so it can take corrective action. Visiting the competitor's web site is a quick, inexpensive way to learn
about a competitor's activities. The web site is likely to post photos of its products and list product
specifications, customer testimonials, and other information that the business can use to evaluate the
competitor's activities. Economic reports and industry standards will not provide specific information
about the competitor's products and activities. RST's employees are unlikely to provide information to a
competitor.
</h5></div><h5 id='q34'>34. FRUGGING is an activity that presents marketing researchers with legal issues because it</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. is a deceptive practice.</option><option value="B">B. involves solicited selling.</option><option value="C">C. relates to identity theft.</option><option value="D">D. affects antitrust laws.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: is a deceptive practice.</h5><h5>FRUGGING is acronym for "fund-raising under the guise of research."
FRUGGING is unethical and, in some jurisdictions, an illegal practice in which a researcher pretends to
conduct research but is really trying to solicit a donation for a group or organization. Researchers who
use FRUGGING use dishonesty (deception) to achieve their true objectives of obtaining donations,
usually money. FRUGGING harms the integrity of marketing researchers and nonprofit organizations
because potential respondents who have been subjected to FRUGGING are less likely to trust
researchers and reputable fund-raising groups. When a customer requests that a salesperson contact
him/her, s/he is soliciting or asking for product information. Identity theft involves using another person's
name and information for fraudulent purposes. FRUGGING does not affect antitrust laws because it does
not hinder competition in a open market.
</h5></div><h5 id='q35'>35. A business introduces a new product to mid-sized cities in the southeastern section of the country. The
business monitors the product's sales to determine if it should introduce the product nationwide. What
marketing-research method is the business using?</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Survey</option><option value="B">B. Observation</option><option value="C">C. Consumer panel</option><option value="D">D. </option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: </h5><h5>behavior.
17. What type of tax is used to pay for national defense and interstate highways?
A. Unemployment
C. Local property
B. Sales
D. Federal income
18. According to the law of diminishing returns, what aspect of production decreases when fixed resources
have reached their maximum level of efficiency?
A. Lead time
C. Outputs
B. Quality
D. Product usefulness
19. The exchange rate of a nation's currency is most likely to decrease when the nation
A. exports more than it imports.
C. carries a low level of debt.
B. experiences political instability.
D. limits the amount of money it prints.
20. Rick believes that employees who are close to retirement lack the basic computer skills that the
company's young new hires have. Rick is stereotyping individuals on the basis of
A. gender.
C. politics.
B. age.
D. nationality.

2012 HS ICDC

MARKETING CLUSTER EXAM

3

21. Which of the following is a characteristic of individuals who have self-confidence:
A. Taking few risks because of a fear of doing something wrong
B. Realizing that mistakes are a part of personal growth
C. Exhibiting aggressive behavior when expressing opinions
D. Being overly concerned with what others think
22. When Kaitlin walked into the office conference room, she saw a coworker speaking on the telephone. To
respect her coworker's privacy, Kaitlin should
A. cough loudly to let her coworker know that she is in the room.
B. stand quietly until her coworker notices her.
C. leave the room immediately and shut the door.
D. shut the door and wait quietly in the room until the phone call is over.
23. Rumors were flying at Bennett Corporation that the company was planning staff layoffs. Management did
not address the issue with employees, so the work environment became tense and distrustful. This is an
example of how grapevine communication can
A. prepare employees for changes.
C. enhance the company's image.
B. generate fear in the workplace.
D. influence the company's policies.
24. After a few hours of working nonstop on a report to meet a deadline, Thomas starts to panic, wonders if
he will be able to finish on time, and loses his focus. So, he decides to take a short break and go for a
walk outside the office building. When he gets back to his desk, he is able to refocus and finish his report.
Thomas's break helped to
A. set his goals.
C. improve his skills.
B. prioritize his work.
D. reduce his stress.
25. An advantage to forming collaborative partnerships with coworkers is that
A. decision making tends to take less time.
B. conflict among various departments usually decreases.
C. discussions usually stay focused and on topic.
D. different perspectives often facilitate creativity.
26. Which of the following is an example of legal tender issued by the federal government:
A. Municipal bonds
C. Mutual funds
B. Corporate bonds
D. Bank notes
27. Martin keeps money in a special savings account to cover his living expenses for three months in case
he loses his job or gets sick and can't work. Martin has set up a(n)
A. emergency fund.
C. retirement account.
B. education plan.
D. insurance policy.
28. When Lara purchased a sweater priced at $35.00, the dollar amount of her purchase totaled $37.43.
What type of tax did Lara pay?
A. Income
C. Excise
B. Property
D. Sales
29. When selecting a qualified financial planner, it is important to consider his/her
A. education and licensure.
C. personal goals and education.
B. living expenses and personal goals.
D. living expenses and licensure.
30. Accountants are legally required to follow established guidelines when preparing financial documents to
ensure that the information presented is
A. transparent and subjective.
C. subjective and consistent.
B. clear and consistent.
D. irrational and clear.

2012 HS ICDC

MARKETING CLUSTER EXAM

4

31. A business's finance function may be compromised by groupthink because the practice is likely to
A. provoke conflict because it encourages others to express their opinions.
B. pressure employees to conform under questionable circumstances.
C. hinder consensus building in favor of individuality.
D. take a lot of time to evaluate problems to make ethical business decisions.
32. William is a human-resources manager who networks on a professional web site with acquaintances and
former business associates for the purpose of finding new employees for his company. William is using
A. a database for employee-performance reviews.
B. the company intranet for interviewing candidates.
C. an online networking method for recruitment purposes.
D. the company blog for hiring recent college graduates.
33. LMN Company is losing market share to the RST Corporation. LMN can quickly obtain useful information
about the RST's product offerings by
A. analyzing economic reports.
C. obtaining feedback from RST's employees.
B. visiting RST's web site.
D. evaluating industry standards.
34. FRUGGING is an activity that presents marketing researchers with legal issues because it
A. is a deceptive practice.
C. relates to identity theft.
B. involves solicited selling.
D. affects antitrust laws.
35. A business introduces a new product to mid-sized cities in the southeastern section of the country. The
business monitors the product's sales to determine if it should introduce the product nationwide. What
marketing-research method is the business using?
A. Survey
C. Consumer panel
B. Observation
D. Test marketing
36. Which of the following is an example of an internal source of secondary marketing data:
A. Census reports
C. Consumer blogs
B. Warranty agreements
D. Business directories
37. What can a business do to determine why sales for its mid-priced product line have been steadily
declining over the past year?
A. Increase advertising efforts to reinforce brand awareness
B. Conduct discovery-oriented marketing research
C. Determine ways in which the business can reach new markets
D. Monitor its customers' online shopping behavior
38. A company wants to collect information from various sources to determine if it should consider expanding
to international markets. What research method should the company use, if it does not want to spend a
lot of time or money to obtain the information?
A. Experimental
C. Interview
B. Causal
D. Exploratory
39. Which of the following is true about a survey-sampling plan:
A. Is more reliable than observation
C. Represents a larger group
B. Eliminates respondent bias
D. Tends to have extremely low error rates
40. What type of survey rating scale involves assigning a value to each option within a set of circumstances
provided on a questionnaire?
A. Constant sum
C. Semantic differential
B. Likert
D. Frequency

2012 HS ICDC

MARKETING CLUSTER EXAM

5

41. A marketing research firm asks the participants of a study to record information for one month about the
radio stations that they listen to. This is an example of acquiring marketing data from
A. production diaries.
C. media-use diaries.
B. commercial journals.
D. attitude journals.
42. Businesses can determine their customers' ordering frequency by reviewing
A. income statements.
C. stock plans.
B. meta tags.
D. invoices.
43. What is an indirect, mechanical-observation data-collection method that a business can use to obtain
accurate information about the specific types of products that its customers are buying?
A. Point-of-sale scanners
C. Manual equipment
B. Comment cards
D. Sound-wave meters
44. Laura is responsible for coding the results of a marketing-research survey. While scanning the
responses, the computer software flags a value that lies outside the range of possible answers. Laura will
need to review the answer and determine how to best resolve the response error. What stage of the
coding process is Laura performing?
A. Data entry
C. Manual scanning
B. Editing answers
D. Data cleansing
45. What type of marketing-research error occurs when the researcher interviews unqualified people?
A. Respondent-selection
C. Respondent-inability
B. Deliberate-falsification
D. Data-analysis
46. What type of question should be avoided when designing a questionnaire?
A. Leading
C. Unstructured
B. Structured
D. Qualitative
47. A business has very little information about the way its customers view its new product line. Which of the
following is a marketing research method that will help the business acquire a variety of perspectives and
opinions in a short period of time:
A. Environmental scan
C. Service evaluation form
B. In-depth personal interview
D. Focus group
48. Which of the following is an example of a customer engaging in habitual buying behavior:
A. Porter conducts online research to evaluate several brands of computers and decides to
purchase a Dell laptop.
B. Mike goes to three automobile dealerships and test drives different vehicles to determine the one
he likes best.
C. Lynnette buys paper for her computer printer at the local office-supply store.
D. Gabriella tells her realtor that she wants to look at three-bedroom ranch homes on the northwest
side of town.
49. Which of the following actions is most appropriate for a business to take when competitors introduce
similar products to the marketplace:
A. Adjust its marketing strategies
C. Reduce its advertising efforts
B. Increase its prices to improve its image
D. Focus on its working conditions
50. Which of the following are types of products for which producers are most likely to use mass marketing:
A. Textbooks, chewing gum, and farm equipment
B. Chewing gum, local tax services, and soda
C. Toothpaste, designer handbags, and textbooks
D. Soda, personal computers, and toothpaste

2012 HS ICDC

MARKETING CLUSTER EXAM

6

51. While conducting a situation analysis, the CCB Company discovers that the government is planning to
tighten industry regulations. As a result of the stricter regulations, the CCB Company will have to make
costly operating improvements. This is an example of a(n)
A. internal threat.
C. internal opportunity.
B. external opportunity.
D. external threat.
52. A business sends a survey to ask its customers about their buying intentions for the next year and will
use the survey data to develop its annual sales forecast. What type of sales forecast is the business
using?
A. Qualitative
C. Exploratory
B. Cooperative
D. Predatory
53. While researching information for a business report, Tara reads the following statement in an online
newspaper article:
"Although unemployment has dropped slightly over the past few months, many politicians have indicated
that they believe the government has done enough to get our country out of this recession."
This is an example of information that contains
A. statistics.
B. historical facts.

C. criticism.
D. poll data.

54. Lamar Enterprises is using a trademark that looks very similar to the Seward Company's trademark. To
prevent Lamar from continuing to use the trademark, Seward can take legal action by
A. requiring Lamar to pay a licensing fee.
B. charging Lamar with obstruction of justice.
C. filing an infringement lawsuit against Lamar.
D. obtaining an arrest warrant.
55. What is an advantage to companies that use integrated software programs?
A. Integrated software reduces the need for firewalls.
B. The software does not require companies to purchase licenses for multiple users.
C. Users can combine information from different applications.
D. Users need to exit one application before they can access another application.
56. A business is mostly likely to review customer invoices from the previous year to
A. execute promotions.
C. forecast sales.
B. evaluate ideas.
D. improve service.
57. All employees can help maintain a safe work environment by
A. replenishing supplies when they are needed.
B. performing their daily duties in a timely manner.
C. reporting noticeable hazards to management.
D. cleaning up toxic waste when they see it.
58. When Madeline saw that a customer had slipped an iPad in his backpack and began to walk toward the
store's exit, she immediately notified the police officer who was guarding the door. What was Madeline
doing?
A. Setting the alarm system
C. Accusing a witness of theft
B. Following security procedures
D. Revealing confidential information
59. A project manager may schedule a meeting with his project team when closing the project to
A. determine project priorities and processes.
B. establish the project's long-term goals.
C. delegate the project's tasks to team members.
D. evaluate the project's successes and obstacles.

2012 HS ICDC

MARKETING CLUSTER EXAM

7

60. A purchasing manager is most likely to send a request for quotation (RFQ) to obtain bids from vendors
when
A. the volume is low.
C. the company has a preferred supplier.
B. there are many qualified sellers.
D. there is a short lead time.
61. What do lean operations involve?
A. Lowering productivity to maintain quality
B. Decreasing the need for skilled labor
C. Cutting costs to improve the business's image
D. Reducing waste throughout the entire supply chain
62. A company discovers a way to reduce the time it takes to produce a good. This is an example of
__________ innovation.
A. position
C. process
B. product
D. program
63. Jane wants to find out the estimated growth potential for marketing professionals over the next 10 years.
Which of the following sources will provide Jane with the most relevant and up-to-date statistics:
A. Social media webinar
C. News magazine
B. Career textbook
D. Government web site
64. What information should be included on a résumé?
A. Personal goals, education, and references
B. Work experience, education, and personal interests
C. Contact information, political affiliation, and education
D. Education, work experience, and contact information
65. Ramona took some computer classes at the local community college to keep up with the technological
changes in the workplace. As a result, Ramona was promoted to executive manager because she
possessed the technical skills her employer needed for the position. The primary reason Ramona was
promoted was due to her
A. willingness to learn.
C. ability to delegate.
B. seniority in the workplace.
D. outgoing personality.
66. Which of the following are examples of customer-related services that a business might consider when
setting a product's price:
A. Research, credit, and advertising
C. Installation, advertising, and research
B. Delivery, credit, and advertising
D. Credit, delivery, and installation
67. A retailer that overcharges customers for small items at the point of purchase may be engaging in the
unethical practice of
A. price fixing.
C. retail price maintenance.
B. predatory pricing.
D. scanner fraud.
68. Optimal pricing software takes which of the following into consideration when pricing a business's
products:
A. Management methods
C. Consumer demand
B. The income tax rate
D. Opportunity costs
69. During what phase of a product's life cycle is a business most likely to develop advertising campaigns to
remind customers about the product or promote features added to the product?
A. Maturity
C. Introduction
B. Decline
D. Obsolescence
70. What type of software program do businesses use to monitor and order the items they need for resale?
A. Project management
C. Inventory management
B. Production scheduling
D. Asset depreciation

2012 HS ICDC

MARKETING CLUSTER EXAM

8

71. A hospital technician developed a system to stabilize small children when taking x-rays. The system
improves the technician's ability to obtain clear x-rays more quickly because the patients cannot squirm
or move around as much. The system includes visual entertainment for patients, which helps keep them
calm and quiet. The system is now being used in hospitals worldwide. This is an example of a product
opportunity that evolved from a
A. market change.
C. problem.
B. suggestion.
D. trend.
72. As a result of increased interest in making health and fitness fun, businesses have developed many new
goods and services, including interactive fitness video games and dance-based workout classes. This is
an example of businesses developing new products in response to
A. a trend.
C. elasticity.
B. touch points.
D. an opinion.
73. While facilitating a brainstorming session to generate product ideas, Gavin told Amy that her idea would
be too expensive to implement. What did Gavin do wrong while facilitating the brainstorming session?
A. Asking for opinions
C. Evaluating the idea
B. Ignoring a group member
D. Exceeding the time limit
74. The receptionist at a medical practice schedules patients' appointments for Dr. Langdon. Typically, Dr.
Langdon needs 15 minutes for a sick-patient visit and 30 minutes for a well-patient's annual check-up.
This is an example of a service standard related to
A. quality.
C. cost.
B. time.
D. regulations.
75. What can a pharmaceutical manufacturer do to help ensure that its pain reliever and allergy medications
are safe for consumer use?
A. Price the products competitively
C. Include vague product labels
B. Use protective packaging
D. Display a disclaimer on the package
76. What is an advantage to businesses that use product-bundling strategies?
A. Businesses usually reduce their suggestion selling and advertising efforts.
B. It usually reduces the need for the business to follow up with customers.
C. Businesses tend to spend less time training their employees about the products.
D. It often reduces customers' comparison-shopping activities.
77. The following statement appears on a company's web site:
"Unlike our competitors, Naturally Yours Cosmetics uses organically-grown ingredients in its facial scrubs
and lotions."
What strategy is the company using to position its line of skin-care items?
A. Unique attributes
C. Customization
B. Price
D. Product reliability
78. McDonald's golden arches are an example of a brand
A. cue.
C. preference.
B. personality.
D. value.
79. A company should consider the target market's needs and wants, when it
A. positions its corporate brand.
C. develops its personal budget.
B. achieves its short-term goals.
D. prepares its weekly expense reports.
80. What element of the promotional mix is most appropriate to use for a complex or technical product that is
difficult to explain?
A. Personal selling
C. Mass advertising
B. Sales promotion
D. Solicited publicity

2012 HS ICDC

MARKETING CLUSTER EXAM

9

81. The Zip-N-Go Mobility Scooter Company recently launched an advertising campaign for its Model ZP2
scooter. One of the company's advertisements shows frail, feeble senior citizens riding the scooters at a
rehabilitation center. What concept is the advertisement reinforcing?
A. Ethnic bias
C. Cultural puffery
B. Age stereotypes
D. Social norms
82. The government requires a business to stop running an advertisement that consumers find offensive.
What type of remedy is the government using to enforce promotional regulations?
A. Indictment
C. Appropriation
B. Affirmative disclosure
D. Cease-and-desist order
83. The primary difference between amplified word-of-mouth marketing and organic word-of-mouth
marketing is that
A. amplified is goods-oriented, and organic is service-oriented.
B. amplified is personal, and organic is nonpersonal.
C. amplified is planned, and organic is spontaneous.
D. amplified is passive, and organic is interactive.
84. Which of the following is an example of a business using direct marketing:
A. A restaurant placed an ad in a coupon booklet that is distributed to all residents and businesses
located in the community.
B. A national sporting-goods store paid $3.5 million for advertising that appeared during a televised
football game.
C. An online bookstore sent a personalized e-mail message that included a coupon to a customer.
D. An apparel retail chain developed a seasonal catalog and posted it on the company's website.
85. Which of the following are communication channels that businesses often use when engaging in the push
promotion strategy:
A. Mass advertising and trade shows
C. Trade advertising and pricing
B. Trade advertising and trade shows
D. Mass advertising and coupons
86. Elise is the public-relations director for Divine Frozen Yogurt and has assembled a packet that contains
key information about the company. The packet contains a cover letter, an overview of the company,
photos, recent press releases, published news articles, staff biographical information, and product
brochures. Elise had developed a(n)
A. creative brief.
C. media kit.
B. sponsorship program.
D. advertising profile.
87. A print advertisement's headline, graphics, signature, and copy should coordinate with one another so
that the message
A. is clear.
C. provides entertainment.
B. conveys humor.
D. creates uncertainty.
88. Which of the following are public-relations activities:
A. Identifying trends, writing press releases, and hiring new staff members
B. Holding press conferences, identifying trends, and hiring new staff members
C. Sponsoring events, developing new products, and distributing company newsletters
D. Writing press releases, distributing company newsletters, and sponsoring events
89. Which of the following is an activity that a firm's public-relations department would perform to influence
legislation:
A. Conducting a public-relations audit
C. Lobbying government officials
B. Moderating a political debate
D. Coordinating service projects

2012 HS ICDC

MARKETING CLUSTER EXAM

10

90. TechnoMedia is attending a regional trade show to introduce its new tablet computer. An effective way
for the company to draw traffic to its exhibit booth is by
A. using interactive displays that allow attendees to try the tablet.
B. handing out trade-show programs at the facility's entrance.
C. placing a sign with the company's name and logo on the exhibit table.
D. requiring staff to wear name badges that have a picture of the tablet on them.
91. When deciding if it should participate in an industry trade show, a company should consider the number
of potential contacts in relation to the company's
A. pricing strategies.
C. trade-in allowance.
B. primary circulation.
D. exhibit costs.
92. The tactics and activities in a business's promotional plan should be based on the
A. business's promotional objectives.
C. business's production needs.
B. promotional plan's executive summary.
D. channel members' preferences.
93. A business that provides excellent customer service is more likely to
A. obtain referrals.
C. have narrow profit margins.
B. expand its product line.
D. provide rebates.
94. What terms-of-sale policy assures the buyer that the product will perform as expected for a certain
amount of time or the seller will replace the product?
A. Guarantee
C. Delivery
B. Adjustment
D. Installation
95. What activity might be viewed as unethical selling behavior?
A. Asking for sales leads
C. Allowing customers to try a product
B. Giving gifts to customers
D. Holding sales events
96. Because Jasmine is an outside sales representative, she spends a lot of her time driving her car to call
on her clients at their offices. What form of technology may help Jasmine avoid traffic jams and prevent
her from getting lost?
A. Automated personal planner
C. Electronic data interchange
B. Global positioning system
D. Business analysis software
97. A consumer advantage of cooling-off laws is that it allows
A. sellers an unlimited time frame to file a lawsuit if the buyers back out of the sales contract.
B. buyers a limited amount of time to withdraw from a purchase agreement without penalty.
C. buyers to withdraw from the purchase agreement but must pay high fines to the sellers.
D. sellers to withdraw from the purchase agreement but must pay high fines to the government.
98. What is the benefit to a customer of buying a self-cleaning oven?
A. Size
C. Durability
B. Appearance
D. Convenience
99. A customer is most likely to raise objections during the selling process when the
A. product is expensive.
B. customer is impulsive.
C. salesperson is discovering the customer's needs.
D. salesperson reaffirms the buyer-seller relationship.
100. Patrick has taken his car to Parnell's auto repair shop for several years. He feels comfortable taking his
car to Parnell's because the employees perform their work competently, and the business charges a
reasonable fee for the work. In this situation, Patrick's buying motive is based on
A. culture.
C. patronage.
B. testimonials.
D. status.

2012 HS ICDC

MARKETING CLUSTER EXAM—KEY

11

1. A
Enforce agency regulations. Administrative law deals with the rules and regulations that have been
established by governmental agencies. Government and independent agencies have the authority to
enact and enforce regulations for various administrative functions, including aviation, taxation, and
commerce. The legislative branch of government establishes congressional/parliamentary committees.
The judicial branch of government interprets constitutional law and in some instances may overturn a
lower court's judicial decision.
</h5></div><h5 id='q36'>36. Which of the following is an example of an internal source of secondary marketing data:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Census reports</option><option value="B">B. Warranty agreements</option><option value="C">C. Consumer blogs</option><option value="D">D. Business directories</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Warranty agreements</h5><h5>Internal secondary data is data from within the business that has been collected
for purposes other than the project at hand. Warranty agreements outline conditions under which the
seller will repair or replace a product. Customers can often upgrade or extend the warranties for a fee.
Businesses usually maintain their customers' warranty information in their computer systems. This
information usually contains contact information, product information, purchase date, types of repairs
made, etc. The business might gather the contact information on warranty agreements to send
promotional information about a new product. Or, the business might want to determine a pattern for
product defects by examining repair information. Census reports, consumer blogs, and business
directories are external sources of information.
</h5></div><h5 id='q37'>37. What can a business do to determine why sales for its mid-priced product line have been steadily
declining over the past year?</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Increase advertising efforts to reinforce brand awareness</option><option value="B">B. Conduct discovery-oriented marketing research</option><option value="C">C. Determine ways in which the business can reach new markets</option><option value="D">D. Monitor its customers' online shopping behavior</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: Conduct discovery-oriented marketing research</h5><h5>The business has a problem—its sales are declining.
So, the business needs to determine (discover) why sales have fallen by conducting marketing research.
Marketing research is the systematic gathering, recording, and analyzing of data about a specific issue,
situation, or concern. The business needs to discover the reasons why its customers have not been
purchasing its products. To find out what customers think about the business and its products, the
business might distribute a survey or interview customers for feedback. If the marketing-research
feedback indicates that customers are unhappy with service levels, the business can take corrective
action. A business cannot determine why its sales have been declining by increasing advertising or
reaching new markets. Simply monitoring its customers' online shopping behavior will not provide specific
information about why customers are not purchasing the business's products.
</h5></div><h5 id='q38'>38. A company wants to collect information from various sources to determine if it should consider expanding
to international markets. What research method should the company use, if it does not want to spend a
lot of time or money to obtain the information?</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Experimental</option><option value="B">B. Causal</option><option value="C">C. Interview</option><option value="D">D. Exploratory</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Exploratory</h5><h5>Exploratory research involves collecting information to help the business define its issue,
situation, or concern, and decide how to proceed with its research. Causal or conclusive research
focuses on cause and effect and tests “what if” theories. Interviews are conversations in which a
researcher surveys an individual to obtain research data. An experiment is a research method that tests
“cause and effect” by test marketing new products or comparing test groups with control groups.
</h5></div><h5 id='q39'>39. Which of the following is true about a survey-sampling plan:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Is more reliable than observation</option><option value="B">B. Eliminates respondent bias</option><option value="C">C. Represents a larger group</option><option value="D">D. Tends to have extremely low error rates</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Represents a larger group</h5><h5>A sampling plan is the course of action for gathering marketing information
from a section or portion of a target market. A business gathers data from a portion of the target market
because the market is often too large to obtain data from each market member. Therefore, researchers
use the sample group's responses to represent the larger group's opinions and ideas. Sampling plans
use different methods to select and gather information. The marketing-research issue or problem and the
way the sample data are collected influence but do not eliminate the respondents' bias and error rates.
Observation is a method of collecting primary data, which may or may not be more reliable than other
research methods.
</h5></div><h5 id='q40'>40. What type of survey rating scale involves assigning a value to each option within a set of circumstances
provided on a questionnaire?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Constant sum</option><option value="B">B. Likert</option><option value="C">C. Semantic differential</option><option value="D">D. Frequency

2012 HS ICDC

MARKETING CLUSTER EXAM

5
</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: Constant sum</h5><h5>Constant sum is a type of comparative rating scale that requires the respondent to assign
a value (e.g., percentage or points) to the options provided on the questionnaire. For example, the survey
may ask respondents to rate the importance of various factors in relation to one another, such as
characteristics of delivery service including charges, timeliness, invoice accuracy. The respondents
assign a percentage value to each factor on the basis of importance to the respondent in a way that the
total of all of the values added together totals 100%. The Likert scale rates respondents' attitudes or
feelings according to degree. An example is asking participants to respond to questions on a scale of 1 to
5 with 1 indicating strong disagreement and 5 indicating strong agreement. The semantic differential
scale provides seven spaces, which are bounded by descriptive antonyms at each end, such as durable
and fragile. The respondent places an "X" at the point or space on the continuum that best describes
his/her feelings about the object or idea that s/he is rating. Frequency is a type of category scale and
provides respondents with options such as very often, often, sometimes, rarely, and never.
</h5></div><h5 id='q41'>41. A marketing research firm asks the participants of a study to record information for one month about the
radio stations that they listen to. This is an example of acquiring marketing data from</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. production diaries.</option><option value="B">B. commercial journals.</option><option value="C">C. media-use diaries.</option><option value="D">D. attitude journals.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: media-use diaries.</h5><h5>To obtain information about radio market share, marketing researchers conduct
studies that require participants to keep a written record of their radio listening habits. This detailed
record is a media-use diary. Participants are often asked to complete a preprinted form describing their
listening activities including time of day, station, length of time, etc. The information helps research firms
and businesses segment the market for the purpose of selecting the appropriate audience for radio
commercials that promote various products. Marketers do not use the terms commercial journals,
production diaries, or attitude journals to describe the type of diary described in the situation.
</h5></div><h5 id='q42'>42. Businesses can determine their customers' ordering frequency by reviewing</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. income statements.</option><option value="B">B. meta tags.</option><option value="C">C. stock plans.</option><option value="D">D. invoices.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: invoices.</h5><h5>An invoice is the formal, printed record of a sale that includes all necessary information about a
sales transaction. The information includes the buyer, the seller, items purchased, amounts, prices,
delivery date, credit, discount terms, etc. Businesses can review their invoices to determine how often the
customers are ordering from the business and the types of products they are purchasing. Meta tags are
HTML codes that display information about web pages. A stock plan is a list of items that a business
needs to purchase for inventory. An income statement is a financial summary that shows how much
money the business has made or has lost over a period of time. Meta tags, stock plans, and income
statements do not indicate how often specific customers place orders with a business.
</h5></div><h5 id='q43'>43. What is an indirect, mechanical-observation data-collection method that a business can use to obtain
accurate information about the specific types of products that its customers are buying?</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Point-of-sale scanners</option><option value="B">B. Comment cards</option><option value="C">C. Manual equipment</option><option value="D">D. Sound-wave meters</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: Point-of-sale scanners</h5><h5>Many businesses use data from their point-of-sale devices (computerized cash
registers) to collect marketing information. Because the point-of-sale scanner records all of the
customers' purchases, a business can use the device to (indirectly) “observe” its customers' purchasing
habits on an ongoing basis. The business can use the data to determine its fast-moving items and its
customers' brand preferences. Comment cards are small, short, preprinted questionnaires. Manual
equipment is too broad a term to specifically address how marketing researchers collect data. Marketing
researchers do not use sound-wave meters to collect information about the types of products that
customers are buying.
</h5></div><h5 id='q44'>44. Laura is responsible for coding the results of a marketing-research survey. While scanning the
responses, the computer software flags a value that lies outside the range of possible answers. Laura will
need to review the answer and determine how to best resolve the response error. What stage of the
coding process is Laura performing?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Data entry</option><option value="B">B. Editing answers</option><option value="C">C. Manual scanning</option><option value="D">D. Data cleansing</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Data cleansing</h5><h5>Data cleansing is the process of detecting incorrect or insufficient data. Powerful
computer software programs can quickly detect and flag inconsistencies so the marketing researcher can
investigate the error in further detail or follow established procedures for correcting the issue, which often
involves removing the response from the data field. Laura is not editing answers, manually scanning, or
entering data.
</h5></div><h5 id='q45'>45. What type of marketing-research error occurs when the researcher interviews unqualified people?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Respondent-selection</option><option value="B">B. Deliberate-falsification</option><option value="C">C. Respondent-inability</option><option value="D">D. Data-analysis</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Respondent-selection</h5><h5>When interviewers survey an inappropriate sample of the population, the
marketing research becomes skewed. For example, an interviewer who is supposed to interview only
18- to 24-year-old males but interviews some 25- to 40-year-old-males, is not conducting the research
appropriately. This type of error is called a respondent-selection error. Deliberate-falsification errors occur
when people provide false information on purpose. These errors often occur when the respondents do
not want to reveal personal information, are bored, or are embarrassed by the question. Respondentinability errors occur when respondents forget the answer to a question (e.g., What did you have for
lunch last Tuesday?). Data-analysis errors occur during the data-analysis phase rather than the datacollection phase of the marketing-research process.
</h5></div><h5 id='q46'>46. What type of question should be avoided when designing a questionnaire?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Leading</option><option value="B">B. Structured</option><option value="C">C. Unstructured</option><option value="D">D. Qualitative</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is A: Leading</h5><h5>Marketing researchers should avoid the use of leading questions on their questionnaires
because these tend to influence the respondents' answers and create bias, which skews results. An
example of a leading question is, “Don't you agree that teachers should earn more money for all that they
do?” The way that the question is worded is likely to make the respondent feel like s/he is not a
proponent of education and the teaching profession if s/he answers “no.” Structured questions provide
options from which the respondent can chose. Unstructured questions are open-ended questions that
allow respondents to provide qualitative information and in-depth responses. Structured and unstructured
questions are acceptable question formats to use on questionnaires.
</h5></div><h5 id='q47'>47. A business has very little information about the way its customers view its new product line. Which of the
following is a marketing research method that will help the business acquire a variety of perspectives and
opinions in a short period of time:</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Environmental scan</option><option value="B">B. In-depth personal interview</option><option value="C">C. Service evaluation form</option><option value="D">D. Focus group</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Focus group</h5><h5>In
its extreme form, groupthink practices may result in unethical practices such covering up financial
mistakes, using company money inappropriately or carelessly, lying to the business's shareholders about
the financial health of the company, embezzling activities, etc.
</h5></div><h5 id='q48'>48. Which of the following is an example of a customer engaging in habitual buying behavior:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Porter conducts online research to evaluate several brands of computers and decides to
purchase a Dell laptop.</option><option value="B">B. Mike goes to three automobile dealerships and test drives different vehicles to determine the one
he likes best.</option><option value="C">C. Lynnette buys paper for her computer printer at the local office-supply store.</option><option value="D">D. Gabriella tells her realtor that she wants to look at three-bedroom ranch homes on the northwest
side of town.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: Lynnette buys paper for her computer printer at the local office-supply store.</h5><h5>Habitual or routine buying
behavior involves buying inexpensive goods on a frequent basis, such as computer printer paper. These
types of purchases require little involvement or thought, and in most situations, there are few differences
among brands. The remaining options are examples of individuals exhibiting complex buying behavior.
Complex buying behavior involves much customer involvement because the items are expensive and
purchased infrequently, such as cars, laptop computers, and homes.
</h5></div><h5 id='q49'>49. Which of the following actions is most appropriate for a business to take when competitors introduce
similar products to the marketplace:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Adjust its marketing strategies</option><option value="B">B. Increase its prices to improve its image</option><option value="C">C. Reduce its advertising efforts</option><option value="D">D. Focus on its working conditions</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is A: Adjust its marketing strategies</h5><h5>Changes in the marketplace require changes in marketing strategy.
Changes such an increase in operating expenses, tighter government regulations, and the entry of new
competitors in the marketplace require that businesses have flexible strategies so it can respond quickly
to those changes. Pricing changes and advertising efforts are often considerations when a new
competitor arrives on the scene. The business is more likely to increase advertising and reduce its prices,
depending on the competitor's marketing and positioning activities. The business should always be
concerned about maintaining safe working conditions, but this consideration does not impact marketing
decisions in relation to its competitors.
</h5></div><h5 id='q50'>50. Which of the following are types of products for which producers are most likely to use mass marketing:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Textbooks, chewing gum, and farm equipment</option><option value="B">B. Chewing gum, local tax services, and soda</option><option value="C">C. Toothpaste, designer handbags, and textbooks</option><option value="D">D. Soda, personal computers, and toothpaste

2012 HS ICDC

MARKETING CLUSTER EXAM

6
</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Soda, personal computers, and toothpaste

2012 HS ICDC

MARKETING CLUSTER EXAM

6
</h5><h5>Explanation not available</h5></div><h5 id='q51'>51. While conducting a situation analysis, the CCB Company discovers that the government is planning to
tighten industry regulations. As a result of the stricter regulations, the CCB Company will have to make
costly operating improvements. This is an example of a(n)</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. internal threat.</option><option value="B">B. external opportunity.</option><option value="C">C. internal opportunity.</option><option value="D">D. external threat.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: external threat.</h5><h5>A situation analysis is a determination of a business's current situation and the direction
in which the business is headed. Government regulations are external factors that affect a business.
Regulatory changes that are costly to the business pose a threat to the business's well-being. The
situation is not an example of an external opportunity, internal opportunity, or internal threat.
</h5></div><h5 id='q52'>52. A business sends a survey to ask its customers about their buying intentions for the next year and will
use the survey data to develop its annual sales forecast. What type of sales forecast is the business
using?</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. Qualitative</option><option value="B">B. Cooperative</option><option value="C">C. Exploratory</option><option value="D">D. Predatory</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: Qualitative</h5><h5>A sales forecast is a prediction of future sales over a specific period of time. Businesses use
many tools to forecast sales. Qualitative methods are based on expert opinions and feedback, as well as
personal experience. Asking customers to complete a survey of buyer intentions provides the business
with general feedback about their customers' anticipated buying activities. The information gathered from
this type of survey usually does not provide specific numerical data that the business can obtain from
previous sales reports; however, it does help the business identify and consider customer trends when it
develops its sales forecast. Cooperative, predatory, and exploratory are not types of sales forecasts.
</h5></div><h5 id='q53'>53. While researching information for a business report, Tara reads the following statement in an online
newspaper article:
"Although unemployment has dropped slightly over the past few months, many politicians have indicated
that they believe the government has done enough to get our country out of this recession."
This is an example of information that contains</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. statistics.</option><option value="B">B. historical facts.
</option><option value="C">C. criticism.</option><option value="D">D. poll data.
</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: criticism.</h5><h5>When assessing information, it is important to discern fact from opinion and criticism. The
example is a statement of disapproval, which is criticism. It is based on opinion or beliefs rather than
facts. Facts contain information or data that are indisputable and true.
</h5></div><h5 id='q54'>54. Lamar Enterprises is using a trademark that looks very similar to the Seward Company's trademark. To
prevent Lamar from continuing to use the trademark, Seward can take legal action by</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. requiring Lamar to pay a licensing fee.</option><option value="B">B. charging Lamar with obstruction of justice.</option><option value="C">C. filing an infringement lawsuit against Lamar.</option><option value="D">D. obtaining an arrest warrant.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: filing an infringement lawsuit against Lamar.</h5><h5>A trademark is symbol, design, or word used by a producer
to identify a good or service. To prevent unauthorized use of the trademark (or a similar trademark), the
trademark owner should register the trademark with the government. If another company (Lamar) uses a
trademark that is similar to one that has been previously registered (Seward), the original owner
(Seward) can file an infringement lawsuit against the company (Lamar) to stop the unauthorized use. And
in some situations, the owner can obtain monetary damages from the unauthorized user. Directly asking
Lamar to pay a fee is not a legal action. Obstruction of justice is a formal charge in which the judicial
system accuses an individual with the crime of withholding critical evidence that can affect the outcome
of a trial. An arrest warrant is an order issued by a judge that instructs law-enforcement officers to bring
to jail an individual who has been charged with a crime.
</h5></div><h5 id='q55'>55. What is an advantage to companies that use integrated software programs?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Integrated software reduces the need for firewalls.</option><option value="B">B. The software does not require companies to purchase licenses for multiple users.</option><option value="C">C. Users can combine information from different applications.</option><option value="D">D. Users need to exit one application before they can access another application.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Users can combine information from different applications.</h5><h5>Integrated software applications consist of two
or more related computer programs that work together to record information or perform specific business
tasks or functions. For example, Microsoft Office combines a variety of programs that perform wordprocessing, spreadsheet, slideshow presentation, desktop publishing, and database functions. The
software allows users to import data, text, or graphics from one application to another and allows users to
access multiple applications at one time. Licensing requirements vary by software producer. Integrated
software does not reduce the need for firewalls.
</h5></div><h5 id='q56'>56. A business is mostly likely to review customer invoices from the previous year to</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. execute promotions.</option><option value="B">B. evaluate ideas.</option><option value="C">C. forecast sales.</option><option value="D">D. improve service.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: forecast sales.</h5><h5>Qualitative methods are based on expert opinions and feedback, as well as
personal experience. Asking customers to complete a survey of buyer intentions provides the business
with general feedback about their customers' anticipated buying activities. The information gathered from
this type of survey usually does not provide specific numerical data that the business can obtain from
previous sales reports; however, it does help the business identify and consider customer trends when it
develops its sales forecast. Cooperative, predatory, and exploratory are not types of sales forecasts.
</h5></div><h5 id='q57'>57. All employees can help maintain a safe work environment by</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. replenishing supplies when they are needed.</option><option value="B">B. performing their daily duties in a timely manner.</option><option value="C">C. reporting noticeable hazards to management.</option><option value="D">D. cleaning up toxic waste when they see it.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is C: reporting noticeable hazards to management.</h5><h5>One way to prevent hazardous conditions is to be aware
of the things that create these types of situations. For example, if an employee notices that an electrical
cord is frayed, s/he should notify the appropriate manager about the problem so the manager can take
steps to have the electrical cord repaired or replaced. If the electrical cord is not repaired or replaced,
someone could be shocked or a fire could start. All employees should perform their daily duties in a
timely manner regardless of hazards that they may encounter. Employees should replenish supplies
(e.g., paper in the copy machine) to be courteous of their coworkers. Toxic waste must be handled in
specific ways; therefore, employees should report this problem to management so it can be removed
safely.
</h5></div><h5 id='q58'>58. When Madeline saw that a customer had slipped an iPad in his backpack and began to walk toward the
store's exit, she immediately notified the police officer who was guarding the door. What was Madeline
doing?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Setting the alarm system</option><option value="B">B. Following security procedures</option><option value="C">C. Accusing a witness of theft</option><option value="D">D. Revealing confidential information</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is B: Following security procedures</h5><h5>Retrieved February 15,
2012, from http://www.coe-dmha.org/care/pdf/CH3.pdf
58. B
Following security procedures. Businesses establish security procedures to protect their assets—
equipment, products, facilities, money, information, and employees. Businesses need to communicate
these security procedures to employees so the employees know what they need to do to maintain a
secure work environment and reduce the risk of business loss. In the example, an employee saw a
customer shoplifting, so she notified the guard at the front door to prevent the customer from leaving the
store without paying. Madeline carried out the steps that her employer told her to follow if a security issue
occurred. Madeline did not set the alarm, accuse a witness of theft, or reveal confidential information.
</h5></div><h5 id='q59'>59. A project manager may schedule a meeting with his project team when closing the project to</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. determine project priorities and processes.</option><option value="B">B. establish the project's long-term goals.</option><option value="C">C. delegate the project's tasks to team members.</option><option value="D">D. evaluate the project's successes and obstacles.

2012 HS ICDC

MARKETING CLUSTER EXAM

7
</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: evaluate the project's successes and obstacles.

2012 HS ICDC

MARKETING CLUSTER EXAM

7
</h5><h5>Explanation not available</h5></div><h5 id='q60'>60. A purchasing manager is most likely to send a request for quotation (RFQ) to obtain bids from vendors
when</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. the volume is low.</option><option value="B">B. there are many qualified sellers.</option><option value="C">C. the company has a preferred supplier.</option><option value="D">D. there is a short lead time.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: there are many qualified sellers.</h5><h5>The request for quotation (RFQ) summarizes the details about the
business's needs, bid requirements, and deadlines. After the business obtains the bids, it can assess
each bidder's strengths and weaknesses. The vendors' goal is to win the bid, and the business's goal is
obtain the best price. RFQs are appropriate to use when there are many qualified sellers (vendors) with
similar products and pricing. Businesses often send out RFQs when the dollar or product volume is high
or the product or project is complex. In some situations, the vendors must take a lot of time to develop
their quotations when the request is complex. RFQs are not generally used when product volume is low,
there is a short lead time, or the company has a preferred supplier.
</h5></div><h5 id='q61'>61. What do lean operations involve?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Lowering productivity to maintain quality</option><option value="B">B. Decreasing the need for skilled labor</option><option value="C">C. Cutting costs to improve the business's image</option><option value="D">D. Reducing waste throughout the entire supply chain</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reducing waste throughout the entire supply chain</h5><h5>Lean operations are often associated with
manufacturing processes but have evolved to include all business functions throughout the supply chain.
Businesses that are lean operations optimize their resources and productivity levels and reduce wasted
resources, including time, materials, money, etc. Lean operations strive to continuously reduce waste
and maximize efficiency. Lean operations may improve the business's image with the public, but that is
not the primary purpose. Eliminating certain jobs is an action that a business may take to reduce waste,
but this action is not what drives the concept of lean operations.
</h5></div><h5 id='q62'>62. A company discovers a way to reduce the time it takes to produce a good. This is an example of
__________ innovation.</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. position</option><option value="B">B. product</option><option value="C">C. process</option><option value="D">D. program</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: process</h5><h5>Process innovation involves changing the way that a product is produced or delivered.
Discovering a way to improve the efficiency of producing a good is an example of process innovation.
Product innovation takes place when a company creates a new product or redesigns an existing product.
Position innovation occurs when an existing product is repositioned. A company that seeks to create a
different image of an existing product in the minds of consumers is repositioning the product. Program is
not a type of innovation.
</h5></div><h5 id='q63'>63. Jane wants to find out the estimated growth potential for marketing professionals over the next 10 years.
Which of the following sources will provide Jane with the most relevant and up-to-date statistics:</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Social media webinar</option><option value="B">B. Career textbook</option><option value="C">C. News magazine</option><option value="D">D. Government web site</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: Government web site</h5><h5>A business needs to determine why it is losing market share to another company
so it can take corrective action. Visiting the competitor's web site is a quick, inexpensive way to learn
about a competitor's activities. The web site is likely to post photos of its products and list product
specifications, customer testimonials, and other information that the business can use to evaluate the
competitor's activities. Economic reports and industry standards will not provide specific information
about the competitor's products and activities. RST's employees are unlikely to provide information to a
competitor.
</h5></div><h5 id='q64'>64. What information should be included on a résumé?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Personal goals, education, and references</option><option value="B">B. Work experience, education, and personal interests</option><option value="C">C. Contact information, political affiliation, and education</option><option value="D">D. Education, work experience, and contact information</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Education, work experience, and contact information</h5><h5>Every résumé should include the job applicant's
education, work experience, and contact information. References are often listed on a separate
document. Personal goals, personal interests, and political affiliation are not necessary elements to
include on a résumé.
</h5></div><h5 id='q65'>65. Ramona took some computer classes at the local community college to keep up with the technological
changes in the workplace. As a result, Ramona was promoted to executive manager because she
possessed the technical skills her employer needed for the position. The primary reason Ramona was
promoted was due to her</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. willingness to learn.</option><option value="B">B. seniority in the workplace.</option><option value="C">C. ability to delegate.</option><option value="D">D. outgoing personality.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: willingness to learn.</h5><h5>Employees who are willing to learn new skills show their employers that they can
take initiative and have the desire to grow. These characteristics help employees receive job promotions.
Although seniority, the ability to delegate, and an outgoing personality are often considerations when
employers decide to promote employees, these factors are not the primary reason that Ramona was
promoted.
</h5></div><h5 id='q66'>66. Which of the following are examples of customer-related services that a business might consider when
setting a product's price:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Research, credit, and advertising</option><option value="B">B. Delivery, credit, and advertising</option><option value="C">C. Installation, advertising, and research</option><option value="D">D. Credit, delivery, and installation</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: Credit, delivery, and installation</h5><h5>Services are costs for the business and should be considered when
setting a product's price. Credit, delivery, and installation are types of services that businesses often
provide their customers. Although advertising is a consideration when pricing products, it is a form of
promotion rather than a service that businesses provide for their customers. Research is a product
consideration when setting prices.
</h5></div><h5 id='q67'>67. A retailer that overcharges customers for small items at the point of purchase may be engaging in the
unethical practice of</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. price fixing.</option><option value="B">B. predatory pricing.</option><option value="C">C. retail price maintenance.</option><option value="D">D. scanner fraud.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: scanner fraud.</h5><h5>Businesses occasionally make honest pricing mistakes. An employee may forget to key in
the sale price of an item or key it incorrectly into the computer system. When this happens the customer
is charged an incorrect amount for the item when it is scanned at the checkout counter. On the other
hand, scanner fraud is a deliberate action that involves overcharging customers, usually for smaller
goods, with the expectation the customer will not notice or fuss about it. This is unethical behavior
because the business is acting in a deceptive, intentional way to pad the business's bottom line.
Predatory pricing is the practice of pricing goods extremely low with the goal of driving the competition
out of business. Retail price maintenance involves producers pressuring retailers to sell goods at the
suggested retail price, which is unethical and, in some jurisdictions, an illegal practice. Price fixing is an
illegal agreement in which businesses agree on prices of their goods or services, resulting in little choice
for customers.
</h5></div><h5 id='q68'>68. Optimal pricing software takes which of the following into consideration when pricing a business's
products:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Management methods</option><option value="B">B. The income tax rate</option><option value="C">C. Consumer demand</option><option value="D">D. Opportunity costs</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: Consumer demand</h5><h5>Optimal pricing software makes calculations using a variety of product and pricing
data. Businesses enter (input) information, such as point-of-sale data, sales goals, inventory levels, and
product costs into the computer program. Based on a business's inputs, the program makes calculations
that recommend prices, product promotions, and sale items. Using the software to make pricing
decisions saves a business time and money because employees do not need to manually calculate the
pricing. Opportunity cost is the benefit that is lost when you decide to use scarce resources for one
purpose rather than for another. Opportunity costs, the income tax rate, and management methods are
factors that optimal pricing software takes into consideration when pricing products.
</h5></div><h5 id='q69'>69. During what phase of a product's life cycle is a business most likely to develop advertising campaigns to
remind customers about the product or promote features added to the product?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Maturity</option><option value="B">B. Decline</option><option value="C">C. Introduction</option><option value="D">D. Obsolescence</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: Maturity</h5><h5>During the maturity phase, sales peak and then slowly start to decline. Because there are more
competitors that market similar products, a business uses advertising to remind customers about its
goods and services. Businesses often make small changes to their products to make them appealing to
the market's evolving needs and wants. This might involve adding new sizes or colors to the existing
product line. During the decline phase, sales drop sharply, and businesses tend to reduce advertising.
Obsolescence, which is the state of being outdated or unfashionable, occurs during the decline phase of
the product's life cycle. At this point, businesses determine whether to continue to offer the product.
Businesses communicate that their products are available during the introduction phase.
</h5></div><h5 id='q70'>70. What type of software program do businesses use to monitor and order the items they need for resale?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Project management</option><option value="B">B. Production scheduling</option><option value="C">C. Inventory management</option><option value="D">D. Asset depreciation

2012 HS ICDC

MARKETING CLUSTER EXAM

8
</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: Inventory management</h5><h5>Customer relationship management is an effort to build loyal,
trusting, personal, and long-term associations with the clients or customers that have the potential to
generate profit for the business. To build customer loyalty, the business must keep in regular contact with
clients. Product/Service management is the marketing function that involves obtaining, developing,
maintaining, and improving a product or service mix in response to market opportunities. Human
resource management is the process of planning, staffing, leading, and organizing the employees of the
business. Operations management is the process of planning, controlling, and monitoring the day-to-day
activities required for continued business functioning.
</h5></div><h5 id='q71'>71. A hospital technician developed a system to stabilize small children when taking x-rays. The system
improves the technician's ability to obtain clear x-rays more quickly because the patients cannot squirm
or move around as much. The system includes visual entertainment for patients, which helps keep them
calm and quiet. The system is now being used in hospitals worldwide. This is an example of a product
opportunity that evolved from a</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. market change.</option><option value="B">B. suggestion.</option><option value="C">C. problem.</option><option value="D">D. trend.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: problem.</h5><h5>The technician had a problem getting clear images because then children were moving around
during the x-ray process. The system limits the patient's ability to move around for a short period of time,
which resolves the technician's problem. The problem is an example of a product opportunity because
the system helps other x-ray technicians who experience the same problem while carrying out their work.
The example is not a result of a market change or a trend. There is not enough information provided to
determine if the system was a suggestion offered by another person.
</h5></div><h5 id='q72'>72. As a result of increased interest in making health and fitness fun, businesses have developed many new
goods and services, including interactive fitness video games and dance-based workout classes. This is
an example of businesses developing new products in response to</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. a trend.</option><option value="B">B. touch points.</option><option value="C">C. elasticity.</option><option value="D">D. an opinion.</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: a trend.</h5><h5>There is not enough information provided to
determine if the system was a suggestion offered by another person.
</h5></div><h5 id='q73'>73. While facilitating a brainstorming session to generate product ideas, Gavin told Amy that her idea would
be too expensive to implement. What did Gavin do wrong while facilitating the brainstorming session?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Asking for opinions</option><option value="B">B. Ignoring a group member</option><option value="C">C. Evaluating the idea</option><option value="D">D. Exceeding the time limit</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Evaluating the idea</h5><h5>Brainstorming is a creative-thinking activity that businesses often use to generate
product ideas. Many businesses find that it is beneficial to have several employees involved in the
process because that helps generate a lot of different ideas. The facilitator is a person who guides the
brainstorming session. The facilitator helps keep the members of the group brainstorming session on
track. This person keeps order, encourages participation, fosters a creative environment, and documents
the ideas for further review. The facilitator should not evaluate the ideas or initiate debate during a
brainstorming session. These actions may hinder the creative-thinking process and discourage group
members from participating. Gavin did not ignore Amy, but provided his opinion of her idea. There is not
enough information provided to determine if Gavin exceeded the brainstorming time limit or asked others
for their opinions.
</h5></div><h5 id='q74'>74. The receptionist at a medical practice schedules patients' appointments for Dr. Langdon. Typically, Dr.
Langdon needs 15 minutes for a sick-patient visit and 30 minutes for a well-patient's annual check-up.
This is an example of a service standard related to</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. quality.</option><option value="B">B. time.</option><option value="C">C. cost.</option><option value="D">D. regulations.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: time.</h5><h5>Time standards are often tied to various types of services that a business might offer, such as
medical and dental services. Doctors usually allocate a certain amount of time for a patient based on the
patient's needs. A sick patient with a common ailment (cold) can usually explain specific symptoms,
allowing the doctor to focus on those symptoms and provide a diagnosis fairly quickly. An annual checkup usually involves more discussion with the patient and multiple examination procedures, so this type of
visit requires more of the doctor's time. Cost standards are used to specify project or product costs.
Quality standards involve the degree of excellence expected from product. Regulations often influence
various types of business standards, but are not types of standards.
</h5></div><h5 id='q75'>75. What can a pharmaceutical manufacturer do to help ensure that its pain reliever and allergy medications
are safe for consumer use?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Price the products competitively</option><option value="B">B. Use protective packaging</option><option value="C">C. Include vague product labels</option><option value="D">D. Display a disclaimer on the package</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: Use protective packaging</h5><h5>To reduce the risk of product tampering, businesses package their products in
ways that ensure that the products are safe for consumption. For example, pharmaceutical companies
often use heat seals, blister packs, and bottle safety caps to make it difficult to alter the product before it
is sold to the end user. Consumers feel more confident about using the product when they open the
package and the item is sealed and protected. Governments often require businesses to place clear,
detailed labels on product packages that indicate the ingredients and the proper way to use or administer
the products. Competitive pricing and a disclaimer on the package do not ensure a product's safety.
</h5></div><h5 id='q76'>76. What is an advantage to businesses that use product-bundling strategies?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Businesses usually reduce their suggestion selling and advertising efforts.</option><option value="B">B. It usually reduces the need for the business to follow up with customers.</option><option value="C">C. Businesses tend to spend less time training their employees about the products.</option><option value="D">D. It often reduces customers' comparison-shopping activities.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is D: It often reduces customers' comparison-shopping activities.</h5><h5>Product bundling is the practice of putting
together two or more goods/services to create a one-price package, which is less expensive for the
customer than purchasing the products individually. Product bundling provides customers with a greater
sense of value because they are getting more for less. When customers believe that they are getting a
bargain, they are more likely to purchase the bundled package quickly rather than comparison shop for
similar products. This is an advantage to a business providing the bundled products because it is less
likely to lose sales to a competitor. Bundled products do not necessarily reduce a business's need to
follow up with customers, reduce product training activities, or reduce suggestion selling and advertising
efforts.
</h5></div><h5 id='q77'>77. The following statement appears on a company's web site:
"Unlike our competitors, Naturally Yours Cosmetics uses organically-grown ingredients in its facial scrubs
and lotions."
What strategy is the company using to position its line of skin-care items?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Unique attributes</option><option value="B">B. Price</option><option value="C">C. Customization</option><option value="D">D. Product reliability</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unique attributes</h5><h5>Product positioning is the customer's image or impression of a product as compared to
that of competitive products. In the example, the company emphasizes that its products' ingredients are
organically grown. Because organic ingredients are product attributes, Naturally Yours Cosmetics is
using the attributes to set itself apart from other cosmetic companies that provide similar products. The
business is not using price, customization, or product reliability to position its skin-care line.
</h5></div><h5 id='q78'>78. McDonald's golden arches are an example of a brand</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. cue.</option><option value="B">B. personality.</option><option value="C">C. preference.</option><option value="D">D. value.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: cue.</h5><h5>Brand cues provide tangible evidence of a brand. Brand cues create a psychological signal that
generates a desire for a product or prompt individuals to take action to purchase a product. The signals
may involve colors, shapes, symbols, logos etc. McDonald's golden arch is an example of a successful
brand cue. For example, an individual may be driving to work and see the golden arches on the
McDonald's sign. The golden arches represent food. This reminds the individual that s/he is hungry and
may prompt him/her to stop at the restaurant to purchase a breakfast sandwich. The golden arches
combine color and shape to remind people instantaneously that McDonald's provides food, which
satisfies hunger. Brand cues are elements of the brand personality, which is the projection of a brand that
encompasses its values (beliefs) and emotional connections with consumers. Brand preference is the
level of brand loyalty in which customers desire one brand over another but will accept substitutes if the
brand is not available. Value is the amount of satisfaction that a good or service will provide a customer.
</h5></div><h5 id='q79'>79. A company should consider the target market's needs and wants, when it</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. positions its corporate brand.</option><option value="B">B. achieves its short-term goals.</option><option value="C">C. develops its personal budget.</option><option value="D">D. prepares its weekly expense reports.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: positions its corporate brand.</h5><h5>A corporate brand is the combined impressions, images, or experiences
associated with a company or parent entity. When positioning corporate brands, the company considers
many factors such as its values and mission, its products' attributes, and its target market's needs and
wants. The business must consider the target market's needs and wants because this group is most
likely to purchase the company's products. If it doesn't consider the target market's needs and wants, the
target customers may purchase from competitors, which can negatively affect the corporate brand. The
business may consider the target market's needs and wants when it sets short-term goals. When the
business has accomplished its goals, the goals have been achieved. The target market's needs and
wants are not a primary consideration when preparing routine expense reports. Individuals develop
personal budgets, and businesses prepare a variety of company budgets.
</h5></div><h5 id='q80'>80. What element of the promotional mix is most appropriate to use for a complex or technical product that is
difficult to explain?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Personal selling</option><option value="B">B. Sales promotion</option><option value="C">C. Mass advertising</option><option value="D">D. Solicited publicity

2012 HS ICDC

MARKETING CLUSTER EXAM

9
</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Personal selling</h5><h5>Promotional mix is the blend of marketing communications channels (advertising, sales
promotion, personal selling, and publicity) that a business uses to send its messages to customers.
Personal selling uses planned, personalized communication in order to influence purchase decisions and
enhance future business opportunities. Although personal selling is an expensive type of promotion, it is
most effective to use when the product is complex or difficult to explain. Companies train salespeople
about complex or technical products so they can clearly explain the items' features and benefits to
potential customers. Sales promotion consists of promotional activities other than advertising, personal
selling, and publicity that stimulate customer/client purchases. Examples of sales promotion include
premiums, coupons, and free samples. Advertising is a nonpersonal form of promotion that is paid for by
the company. Examples of advertising include television commercials, billboards, and newspaper
advertisements. Publicity is a nonpersonal form of promotion that is not paid for by the company or
individual that benefit from it.
</h5></div><h5 id='q81'>81. The Zip-N-Go Mobility Scooter Company recently launched an advertising campaign for its Model ZP2
scooter. One of the company's advertisements shows frail, feeble senior citizens riding the scooters at a
rehabilitation center. What concept is the advertisement reinforcing?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Ethnic bias</option><option value="B">B. Age stereotypes</option><option value="C">C. Cultural puffery</option><option value="D">D. Social norms</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: Age stereotypes</h5><h5>A stereotype is a set image or an assumption about a person or thing. Businesses must
be careful to avoid stereotyping people in their advertising because viewers may find it offensive. An
advertisement that portrays a group of elderly people as frail and feeble is reinforcing a stereotype.
Because many senior citizens are embracing active, healthy, and busy lifestyles, the ad does not
represent social norms. Ethnic bias involves unfair or preconceived ideas about an ethnic group or
culture. Puffery is the practice of using exaggerated expressions to describe a product or its features
(e.g., "the best").
</h5></div><h5 id='q82'>82. The government requires a business to stop running an advertisement that consumers find offensive.
What type of remedy is the government using to enforce promotional regulations?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Indictment</option><option value="B">B. Affirmative disclosure</option><option value="C">C. Appropriation</option><option value="D">D. Cease-and-desist order</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cease-and-desist order</h5><h5>A cease-and-desist order is a court-ordered demand requiring an advertiser to
stop running an advertisement. Affirmative disclosure is a legal remedy in which the government orders
the advertiser to include product information in future advertisements that it omitted in its previous
advertisements. Appropriation refers to the unauthorized use of an individual's name or likeness for
commercial purposes. An indictment is the legal process of formally accusing a person of a crime and
putting that person on trial.
</h5></div><h5 id='q83'>83. The primary difference between amplified word-of-mouth marketing and organic word-of-mouth
marketing is that</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. amplified is goods-oriented, and organic is service-oriented.</option><option value="B">B. amplified is personal, and organic is nonpersonal.</option><option value="C">C. amplified is planned, and organic is spontaneous.</option><option value="D">D. amplified is passive, and organic is interactive.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: amplified is planned, and organic is spontaneous.</h5><h5>Word-of-mouth promotion involves customers telling
others about their satisfaction with a business and its goods and/or services. Amplified word-of-mouth
promotion involves the use of planned efforts (campaigns) in which the business provides specific
information to customers (activists) to pass along to their friends, family, and business contacts. On the
other hand, organic word-of-mouth promotion occurs naturally. Because customers are satisfied with the
business and its products, they tell others about their satisfaction in the course of normal, interpersonal
conversation. Both forms of word-of-mouth marketing are interactive. Passive behavior is conduct in
which people fail to exercise their own rights and to respect their own needs.
</h5></div><h5 id='q84'>84. Which of the following is an example of a business using direct marketing:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. A restaurant placed an ad in a coupon booklet that is distributed to all residents and businesses
located in the community.</option><option value="B">B. A national sporting-goods store paid $3.5 million for advertising that appeared during a televised
football game.</option><option value="C">C. An online bookstore sent a personalized e-mail message that included a coupon to a customer.</option><option value="D">D. An apparel retail chain developed a seasonal catalog and posted it on the company's website.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: An online bookstore sent a personalized e-mail message that included a coupon to a customer.</h5><h5>Direct
marketing involves communicating messages directly to the customers or potential customers who are
most likely to act upon the message content or offer. A form of direct marketing is direct e-mail, which is a
promotional medium that comes to customers' computers. Businesses often use their customers' sales
history to determine what they are most likely to buy and customize promotional messages based on the
customers' preferences. For example, an online bookstore has sales records of the books that a
customer buys. If the customer tends to buy suspense novels, the bookstore can customize their
promotional messages to include coupons and sales information about a specific book genre. A
television ad and a coupon booklet are forms of nonpersonal communication. Although catalogs are often
sent as direct mail to customers, posting the catalog on a web site is a form of nonpersonal
communication.
</h5></div><h5 id='q85'>85. Which of the following are communication channels that businesses often use when engaging in the push
promotion strategy:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Mass advertising and trade shows</option><option value="B">B. Trade advertising and trade shows</option><option value="C">C. Trade advertising and pricing</option><option value="D">D. Mass advertising and coupons</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Trade advertising and trade shows</h5><h5>Sales promotion encompasses promotional activities other than
advertising, personal selling, and publicity. Depending on their target markets, businesses use different
types of sales-promotion strategies to stimulate sales. When a business uses the “push” sales-promotion
strategy, it is attempting to move or push the product through the distribution channel to the end user. To
do this, businesses use sales-promotion techniques (e.g., discount coupons and rebates) to provide
channel members with incentives to sell the products to their customers, which are often the end users.
Businesses often use trade advertising and trade shows to inform channel members about their products
and sales promotions. If a business uses a pull strategy, it is likely use mass advertising communication
channels (e.g., national television commercials) to reach the target market. Pricing is a marketing
function that involves determining and adjusting prices to maximize returns and to meet customers'
perceptions of value.
</h5></div><h5 id='q86'>86. Elise is the public-relations director for Divine Frozen Yogurt and has assembled a packet that contains
key information about the company. The packet contains a cover letter, an overview of the company,
photos, recent press releases, published news articles, staff biographical information, and product
brochures. Elise had developed a(n)</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. creative brief.</option><option value="B">B. sponsorship program.</option><option value="C">C. media kit.</option><option value="D">D. advertising profile.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is C: media kit.</h5><h5>The public-relations function involves establishing good relationships between the business
and the public. A business tries to maintain positive relationships with different groups that make up the
public, such as employees, shareholders, local businesses, government officials, and the media. It is
important for a business to build positive relationships with the media because they have access to large
groups of people through the airwaves and their publications. Often, a business provides newspaper and
magazine publishers and television and radio stations with media kits that provide information about the
business and its employees. It is the business's goal that the media will air or publish news stories that
portray the business in a favorable way, which provides positive publicity. The public-relations director did
not develop a sponsorship program, creative brief, or advertising profile.
</h5></div><h5 id='q87'>87. A print advertisement's headline, graphics, signature, and copy should coordinate with one another so
that the message</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. is clear.</option><option value="B">B. conveys humor.</option><option value="C">C. provides entertainment.</option><option value="D">D. creates uncertainty.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: is clear.</h5><h5>The advertisement's headline, illustration, copy, and signature should attract the reader's
attention in a balanced, visually attractive, and clear way. The advertisement's elements should relate to
one another to convey the ad's theme and reinforce the message. The purpose of an advertisement
determines if it is appropriate to convey humor or entertain the audience. Clear advertisements should
not create uncertainty.
</h5></div><h5 id='q88'>88. Which of the following are public-relations activities:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Identifying trends, writing press releases, and hiring new staff members</option><option value="B">B. Holding press conferences, identifying trends, and hiring new staff members</option><option value="C">C. Sponsoring events, developing new products, and distributing company newsletters</option><option value="D">D. Writing press releases, distributing company newsletters, and sponsoring events</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: Writing press releases, distributing company newsletters, and sponsoring events</h5><h5>Public relations are a
function of business that is designed to establish good relations between the business and the public.
The business can foster goodwill with its various publics—its customers, its investors, its employees, the
community—using a variety of tools and activities. Some public-relations tools and activities include
writing press releases, distributing company newsletters, sponsoring events, and holding press
conferences. Identifying trends is a marketing-research activity. Hiring new staff members is a humanresources activity. Product development is a product/service management activity.
</h5></div><h5 id='q89'>89. Which of the following is an activity that a firm's public-relations department would perform to influence
legislation:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Conducting a public-relations audit</option><option value="B">B. Moderating a political debate</option><option value="C">C. Lobbying government officials</option><option value="D">D. Coordinating service projects

2012 HS ICDC

MARKETING CLUSTER EXAM

10
</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: Lobbying government officials</h5><h5>The government regulates many types of industries and businesses.
Businesses often want to influence legislation that affects the way they operate. The activities that the
business uses to influence legislators are called lobbying. Lobbying efforts are a public-relations function.
A debate moderator is a neutral third party who guides a discussion about a controversial issue. A publicrelations audit is an examination of the business's public-relations processes and activities. Coordinating
service projects is not a public-relations activity that businesses use to influence legislation.
</h5></div><h5 id='q90'>90. TechnoMedia is attending a regional trade show to introduce its new tablet computer. An effective way
for the company to draw traffic to its exhibit booth is by</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. using interactive displays that allow attendees to try the tablet.</option><option value="B">B. handing out trade-show programs at the facility's entrance.</option><option value="C">C. placing a sign with the company's name and logo on the exhibit table.</option><option value="D">D. requiring staff to wear name badges that have a picture of the tablet on them.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is A: using interactive displays that allow attendees to try the tablet.</h5><h5>Participating in a trade show is a way for
a business to communicate with the individuals or businesses most likely to buy the business's products.
Because there are many other exhibitors, a business needs to design a visually attractive space, offer
sales promotions, and display products in an appealing way to encourage attendees to stop at its booth.
When a business's salesperson demonstrates the product, trade-show attendees see the product's
attributes and how it works. In some demonstrations, the show attendees have an opportunity to try the
product (e.g., tablet computer) themselves. The event's staff members are responsible for handing out
the trade-show programs at the facility's entrance. A sign and name badges that depict a photo of the
product are not the most effective ways of drawing attention to a trade-show booth.
</h5></div><h5 id='q91'>91. When deciding if it should participate in an industry trade show, a company should consider the number
of potential contacts in relation to the company's</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. pricing strategies.</option><option value="B">B. primary circulation.</option><option value="C">C. trade-in allowance.</option><option value="D">D. exhibit costs.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: exhibit costs.</h5><h5>Trade shows are events where businesses display and/or demonstrate their products to
build sales leads and interest. A business considers many factors when deciding if it should participate in
a particular trade show. There are many costs associated with trade shows including employees' travel
and lodging expenses, exhibit booth rental space, audio/visual rentals and Internet hookups, display
shipping costs, etc. If the number of expected visitors is low and the show takes place in a distant
location, the costs of participation may not be feasible. Primary circulation is the total number of copies of
a newspaper or magazine sold at newsstands or by subscription. A trade-in allowance is a price
reduction offered for selling back an old model of the product being purchased. Pricing strategies are the
tactics that a business uses to convey the value of a product in relation to the amount of money it
charges for the product (e.g., prestige).
</h5></div><h5 id='q92'>92. The tactics and activities in a business's promotional plan should be based on the</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. business's promotional objectives.</option><option value="B">B. promotional plan's executive summary.</option><option value="C">C. business's production needs.</option><option value="D">D. channel members' preferences.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is A: business's promotional objectives.</h5><h5>A promotional plan is the framework or blueprint that guides the
business's promotional activities. The activities that a business selects should align with its promotional
objectives, which are the goals that the business hopes to accomplish through its promotional efforts—
advertising, sales promotion, public relations, and personal selling. The executive summary is the section
of the promotional plan that provides an overview of the entire document and is usually the last
component developed for the promotional plan. Channel members and other business activities might be
considerations when setting the business's promotional objectives.
</h5></div><h5 id='q93'>93. A business that provides excellent customer service is more likely to</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. obtain referrals.</option><option value="B">B. expand its product line.</option><option value="C">C. have narrow profit margins.</option><option value="D">D. provide rebates.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: obtain referrals.</h5><h5>A referral is a method of prospecting that involves asking for names of individuals who
might be interested in the business's products. Customers who have had positive service experiences
with the business are more likely to provide the business with referrals. Referrals often lead to more sales
and profits for the business. The business's profit margin depends on many factors, including the type of
product and the business's objectives. Excellent customer service does not always involve providing
rebates or expanding the business's product line.
</h5></div><h5 id='q94'>94. What terms-of-sale policy assures the buyer that the product will perform as expected for a certain
amount of time or the seller will replace the product?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Guarantee</option><option value="B">B. Adjustment</option><option value="C">C. Delivery</option><option value="D">D. Installation</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Guarantee</h5><h5>Selling policies are the general rules established by management to guide the personal
selling effort—they outline how things must be done. Terms-of-sale policies are the guidelines covering
the aspects of the sale with which customers are usually most concerned. A guarantee policy is a type of
terms-of-sale policy that addresses the quality or performance of a product. It's a promise made by the
seller to the buyer that the seller will replace or fix a product if it does not perform as expected. Delivery
policies are guidelines that address product transportation and delivery. Installation policies are service
policies that address issues that involve setting up products so they can be used. Adjustment policies are
service policies that guide the conditions under which businesses implement credit adjustments or cash
reimbursements when their customers return products.
</h5></div><h5 id='q95'>95. What activity might be viewed as unethical selling behavior?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Asking for sales leads</option><option value="B">B. Giving gifts to customers</option><option value="C">C. Allowing customers to try a product</option><option value="D">D. Holding sales events</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: Giving gifts to customers</h5><h5>Some businesses view giving and/or accepting gifts as a form of bribery.
Therefore, it is important for businesses to establish specific gift-giving policies for their salespeople. If a
salesperson does not know if it is appropriate to give a certain type of gift, s/he can refer to the
company's written guidelines about acceptable and unacceptable behavior. In general, expensive gifts
such as vacations are not appropriate. On the other hand, giving or accepting a holiday gift basket may
be an acceptable practice for some businesses. Asking for sales leads, allowing customers to try a
product, and holding sales events are ethical practices.
</h5></div><h5 id='q96'>96. Because Jasmine is an outside sales representative, she spends a lot of her time driving her car to call
on her clients at their offices. What form of technology may help Jasmine avoid traffic jams and prevent
her from getting lost?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Automated personal planner</option><option value="B">B. Global positioning system</option><option value="C">C. Electronic data interchange</option><option value="D">D. Business analysis software</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: Global positioning system</h5><h5>Global positioning systems (GPS) make it possible for drivers to determine
their exact location and obtain accurate directions to destinations. Because outside salespeople usually
have established meeting times with their clients, a GPS provides directions and routes that will get them
to their destinations in the shortest amount of time and reduces the risk of getting lost. An electronic data
interchange (EDI) is used to place orders, invoice, or provide shipping information. An electronic data
interchange, an automated personal planner, and business analysis software are not forms of technology
that outside salespeople use to obtain directions to their destinations.
</h5></div><h5 id='q97'>97. A consumer advantage of cooling-off laws is that it allows</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. sellers an unlimited time frame to file a lawsuit if the buyers back out of the sales contract.</option><option value="B">B. buyers a limited amount of time to withdraw from a purchase agreement without penalty.</option><option value="C">C. buyers to withdraw from the purchase agreement but must pay high fines to the sellers.</option><option value="D">D. sellers to withdraw from the purchase agreement but must pay high fines to the government.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: buyers a limited amount of time to withdraw from a purchase agreement without penalty.</h5><h5>Cooling-off laws
protect consumers who purchase products as a result of high-pressure or fear-based sales tactics. Such
laws provide buyers with a set amount of time to think about their purchases and allow the buyers an
opportunity to withdraw from the purchase agreement without penalty.
</h5></div><h5 id='q98'>98. What is the benefit to a customer of buying a self-cleaning oven?</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Size</option><option value="B">B. Appearance</option><option value="C">C. Durability</option><option value="D">D. Convenience</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is D: Convenience</h5><h5>Benefits are advantages that consumers receive from using a product. In the example,
convenience is a benefit because the customer will not need to physically clean the oven. When the
customer does not need to clean the oven, s/he has time to do other things. Features are facts or
characteristics of a product, such as appearance, durability, and size.
</h5></div><h5 id='q99'>99. A customer is most likely to raise objections during the selling process when the</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. product is expensive.</option><option value="B">B. customer is impulsive.</option><option value="C">C. salesperson is discovering the customer's needs.</option><option value="D">D. salesperson reaffirms the buyer-seller relationship.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: product is expensive.</h5><h5>Salespeople go through many phases during the selling process. When trying to
close a sale, a salesperson may encounter objections raised by a customer. An objection is a point of
difference between a customer and a salesperson that may prevent the sale. Generally, salespeople
encounter objections when they are selling expensive products such as appliances, cars, and homes.
Because customers tend to spend more time making decisions about high-priced items, they are more
likely to find reasons not to buy. It's the salesperson's job to overcome these objections and help the
customers realize that the items will meet their specific needs. Impulsive customers are less likely to
raise objections because they tend to put little thought into their purchases. While discovering the
customer's needs, the salesperson is determining what product will best satisfy the customer. Because a
specific product has not been presented during the discovery phase, the customer does not have enough
product information to provide a reason not to buy. The salesperson reaffirms the buyer-seller
relationship after the customer has agreed to purchase the product. By that time, the customer's
objections have been addressed.
</h5></div><h5 id='q100'>100. Rick believes that employees who are close to retirement lack the basic computer skills that the
company's young new hires have. Rick is stereotyping individuals on the basis of</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. gender.</option><option value="B">B. age.</option><option value="C">C. politics.</option><option value="D">D. nationality.

2012 HS ICDC

MARKETING CLUSTER EXAM

3
</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: age.</h5><h5>Stereotyping does not consider the individual's unique skills, beliefs, and attitudes. Instead,
stereotyping is a set image or assumption about a person or thing. Stereotyping tends to classify certain
people in groups (e.g., gender, race, age) that possess certain characteristics. These characteristics are
often based on unproven, false, or distorted beliefs and information. In the example, Rick is stereotyping
older workers by assuming that they lack basic computer skills. This is a broad assumption that is not
always true. In fact, many older workers are very computer savvy and willing to learn new technology.
The example is not a stereotype based on gender, politics, or nationality.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Marketing_13_Whole_Homework.js"></script></html>