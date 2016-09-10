<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Marketing Exam 1</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. A jurisdiction's judicial system strives to treat all parties fairly by</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. developing contracts.</option><option value="B">B. implementing flexible laws.</option><option value="C">C. interrogating witnesses.</option><option value="D">D. following legal procedure.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is D: following legal procedure.</h5><h5>Legal procedure refers to the methods that are used to protect an individual's
or business's legal rights. Each jurisdiction's court system requires that certain procedures be followed to
ensure fair treatment to both the plaintiff and the defendant. This involves following legal procedures to
file complaints with the court, to serve documents to the opposition, and to exhibit proper behavior with
witnesses and jurors during court proceedings. The purpose of legal procedures is to provide consistent
and fair treatment to all parties involved in a legal dispute. The judicial system does not develop contracts
or implement laws; it rules on contract validity by interpreting laws.
</h5></div><h5 id='q2'>2. It is often best for a business to use an exclusive distribution pattern when it</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. needs to maintain tight control over a product.</option><option value="B">B. prefers to have its intermediaries promote the product.</option><option value="C">C. chooses to eliminate intermediaries.</option><option value="D">D. wants the product to be available in all possible locations.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: needs to maintain tight control over a product.</h5><h5>Exclusive distribution involves selling a product through
one intermediary or middlemen, in a geographic area. Exclusive distribution is often preferred for
specialty, highly complex, and technical products, or products that require special handling or training,
such as airplanes or large machinery. When a business wants to deal with intermediaries that will do the
best job to promote and sell their products, it would use selective distribution. Selective distribution
means selling a product through a limited number of wholesalers and retailers in a geographic location. A
business that wants to bypass middlemen (intermediaries) would choose a direct-distribution strategy.
Intensive distribution involves selling a product (e.g., candy bars) through every available wholesaler and
retailer in a geographic area where consumers might look for the product.
</h5></div><h5 id='q3'>3. Sasha has just received a fax order from a customer. The customer has requested six each of a certain
product, but has not indicated the desired color. What can Sasha do to make sure that the customer
receives the desired product?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Contact the customer and ask him/her what color s/he wants</option><option value="B">B. Select the color based on the most available in stock</option><option value="C">C. Have the warehouse staff ship one in each color</option><option value="D">D. E-mail the customer to advise him/her that the order is incomplete</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Contact the customer and ask him/her what color s/he wants</h5><h5>An important aspect of customer service is
making sure the customer gets what s/he wants when s/he needs it. If Sasha has incomplete information
to process the order, then she should contact the customer to obtain that information. When contacting
the customer, Sasha should indicate why the order is incomplete and what information is needed to
process the order. If Sasha was to select and ship products based on the colors available in inventory or
was to ship one of each color available, the customer may not get what s/he wants, and send the
products back, which is costly to the business.
</h5></div><h5 id='q4'>4. The primary advantage to businesses using electronic data interchange (EDI) systems in the channel
management function is that the systems</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. ensure that product quality standards are achieved.</option><option value="B">B. provide buyers with a greater selection of goods and services.</option><option value="C">C. allow sellers to track the transportation route of orders.</option><option value="D">D. streamline communication between buyers and sellers.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: streamline communication between buyers and sellers.</h5><h5>Electronic data interchange (EDI) systems allow
businesses to use their computers to send information to another business's computers. Businesses use
an EDI system to monitor inventory and order products. EDI systems reduce paperwork and streamline
communication, which result in better channel efficiency. EDI systems do not always provide buyers with
a greater selection of products, nor do they ensure that product quality standards are achieved.
Businesses use global positioning systems (GPS) to track the shipments.
</h5></div><h5 id='q5'>5. Slotting allowances are an ethical issue that businesses must consider because these types of fees can</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. increase customers' choices.</option><option value="B">B. encourage high tariffs.</option><option value="C">C. discourage innovation.</option><option value="D">D. decrease channel reliability.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: discourage innovation.</h5><h5>A slotting allowance (fee) is a cash premium that manufacturers pay to
businesses to cover the costs involved in carrying a new product. Because larger manufacturers tend to
have more money than small manufacturers, they are often awarded shelf space for new products
because they can afford to pay higher slotting allowances. Consequently, this limits the small
manufacturers' exposure in the marketplace and their ability to effectively compete in the marketplace.
When small manufacturers believe that that they cannot compete, they are less likely to act on new
product ideas. When fewer products are on the market, customers have fewer choices. Tariffs are taxes
on imports and are levied by governments. Slotting allowances do not always decrease channel
reliability.
</h5></div><h5 id='q6'>6. Chadwell's Toy Palace is planning a “buy one, get one free” sale for some popular toys. What will the
store need to do to ensure that there are enough products available to meet the changing demand?</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Send copies of the promotional literature to the store's vendors</option><option value="B">B. Hire additional warehouse staff for the duration of the sale</option><option value="C">C. Change the distribution strategy from selective to intensive</option><option value="D">D. Purchase higher quantities of the sale items in a timely manner</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: Purchase higher quantities of the sale items in a timely manner</h5><h5>Channel management is the process by
which marketers ensure that products are distributed to customers efficiently and effectively.
Coordinating channel management with other marketing activities is important because the store must
have items available to sell to the customers. This involves ordering the appropriate amount of items and
ensuring that the items are delivered to the store before the promotional event or sale. Stores that
promote goods they do not have in stock often annoy the customers who want to buy the items. A
selective distribution strategy is a distribution pattern in which a producer sells a product through a limited
number of intermediaries in a geographic location. An intensive distribution strategy involves a producer
selling a product through every available intermediary. A business would not change its overall
distribution strategy for a single promotional event. Hiring additional warehouse staff and sending copies
of promotional literature to vendors will not ensure that the store has enough products available to meet
the demand for the items during the sale.
</h5></div><h5 id='q7'>7. Which of the following is a situation in which horizontal conflict may occur among channel members:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Scrambled merchandising</option><option value="B">B. Chargebacks</option><option value="C">C. Direct selling</option><option value="D">D. Franchisor restrictions on franchisees</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: Scrambled merchandising</h5><h5>Horizontal channel conflict occurs among channel members at the same level
(e.g., retailers). Scrambled merchandising is a situation in which intermediaries add products lines to their
product mix that were traditionally sold by other businesses, thereby creating a more competitive
environment. For example, many pharmacy chains are adding perishable food items (milk, eggs) to their
product lines. By doing so, they are now competing with grocery and convenience stores for scarce
customer dollars, which creates horizontal conflict. Chargebacks (penalties), direct selling (bypassing
intermediaries), and franchisor restrictions on franchisees often create vertical conflict among channel
members. Vertical conflict occurs among channel members at different levels in a distribution channel.
</h5></div><h5 id='q8'>8. One way to demonstrate active listening is by</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. focusing your attention on distractions.</option><option value="B">B. interrupting the speaker to ask questions.</option><option value="C">C. taking steps to minimize barriers.</option><option value="D">D. concentrating only on the points that you want to hear.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is C: taking steps to minimize barriers.</h5><h5>Active listening involves the use of nonverbal cues, paraphrasing,
questioning, and other techniques to let a speaker know that a message has been heard and
understood. Barriers such as telephone calls, loud music, and other noises can hinder the ability to focus
on what the speaker is saying. Taking steps to minimize barriers, such as closing a door, or letting a
phone call go to voice mail can decrease distractions and improve active listening. Active listeners wait
until a speaker has finished talking before asking questions. Interrupting the speaker is rude and
distracting. If the listener pays attention only to the points s/he wants to hear, the message may be
misunderstood.
</h5></div><h5 id='q9'>9. Effective note-taking involves summarizing key concepts in ways that</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. reflect proper punctuation and grammar.</option><option value="B">B. are meaningful to the note-taker.</option><option value="C">C. make sense to the speaker.</option><option value="D">D. include personal opinion and bias.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: are meaningful to the note-taker.</h5><h5>Effective note-taking involves writing down the most important
information or key points for future reference. Writing or typing key phrases, words, or symbols that are
meaningful to the note-taker are ways of capturing the most important information. Because the notes are
for personal use, they do not need to reflect proper punctuation and grammar or make sense to the
speaker. Notes do not always include personal opinion and bias.
</h5></div><h5 id='q10'>10. What component is important to include in all types of inquiry letters?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Attention-getting title</option><option value="B">B. Personal qualifications</option><option value="C">C. Project specifications</option><option value="D">D. Contact information

®
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: Contact information

®
</h5><h5>Explanation not available</h5></div><h5 id='q11'>11. What should the first section of an executive summary contain?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. A letter of authorization</option><option value="B">B. A recommended course of action</option><option value="C">C. A statement of the report's purpose</option><option value="D">D. An acknowledgement of the report's sponsors</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: A statement of the report's purpose</h5><h5>The executive summary provides an overview of the entire report
and contains the most important information included in the body of the report. The first section of the
executive summary should inform the reader about the purpose of the report—the reason the report
exists. For example, if the report addresses a specific business problem, the report should cite the
problem in the purpose statement of the executive summary. Recommendations are addressed in the
recommendations section of the report. A letter of authorization might be included in a proposal that a
business submits to a potential client. By signing the letter of authorization, the client provides approval to
proceed with an activity or project. The first section of an executive summary does not acknowledge
sponsors. Sponsors support activities, events, or projects rather than reports.
</h5></div><h5 id='q12'>12. When participating in a project-status meeting, it is important for a participant to</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. be prepared to provide an update.</option><option value="B">B. monopolize the conversation.</option><option value="C">C. provide information about new company policies.</option><option value="D">D. take notes for the group.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: be prepared to provide an update.</h5><h5>It is important for a meeting participant to be prepared to present the
required information at a scheduled meeting. Being unprepared is unprofessional and inconsiderate of
the other participants' time. Without the necessary information, the meeting may need to be rescheduled.
Meeting participants should not monopolize the conversation. New company policies would be relevant
only if they affect the project. Otherwise, they should be communicated outside the project-status
meeting. It is not always necessary to take notes for the group.
</h5></div><h5 id='q13'>13. An important aspect of fulfilling a company's brand promise is to</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. develop different trade characters for different market segments.</option><option value="B">B. change the company's slogan on a regular basis.</option><option value="C">C. establish different policies for different types of customers.</option><option value="D">D. use touch points to create positive customer experiences.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: use touch points to create positive customer experiences.</h5><h5>The brand promise is a company's agreement
(spoken or unspoken) with customers that it will consistently meet their expectations and deliver on its
brand characteristics and values. To build and maintain customer relationships, a company's brand
promise should strive to create positive experiences for customers—experiences that will encourage
them to return to the business again and again. Companies use various touch points to create these
experiences for their customers. Touch points are all of the opportunities that a company has to connect
with its customers and reinforce its brand value. Touch points may include the company's employees,
product attributes and packaging, and technological systems (e.g., telephone, web site). A slogan (tag
line) is a phrase that is easy to remember, such as "Nationwide is on your side." A trade character is a
symbol that is personified (e.g., Tony the Tiger). Businesses often use slogans and trade characters as
elements of their brands. Changing slogans frequently or developing different trade characters may
confuse customers, which may reduce brand recognition. One reason that businesses establish certain
types of policies (e.g., sales, service) is to ensure that customers are treated fairly. Establishing different
policies for different customers is not treating customers fairly, and in circumstances, these actions are
illegal.
</h5></div><h5 id='q14'>14. What type of software program allows a business employee and a customer to communicate in real time
from a computer by typing text?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Call tracking</option><option value="B">B. Database</option><option value="C">C. Procurement</option><option value="D">D. Instant messaging</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: Instant messaging</h5><h5>Instant messaging software allows two or more people to communicate in real time by
typing text into computers. Many online businesses use instant messaging as an element of the customer
service that they provide their customers. For example, a customer can type a question into a text field
on the business's web site, and the business's customer-service representative can respond immediately
to the question by posting a reply message. Having this form of technology helps businesses manage
their customer relationships in an efficient, positive way. A database is computerized storage for
information and facts. Procurement software helps businesses obtain and manage inventory. Calltracking software helps businesses monitor their telephone calls.
</h5></div><h5 id='q15'>15. A primary reason that businesses expand their operations in foreign countries is to</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. eliminate tax obligations.</option><option value="B">B. increase revenues.</option><option value="C">C. condense their market shares.</option><option value="D">D. promote environmental issues.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: increase revenues.</h5><h5>By expanding operations in foreign countries, businesses have the opportunity to sell
goods and services in another market. If the market buys the business's products, the business
increases both its market share and its revenues. Foreign expansion doesn't eliminate the business's tax
responsibility. A business exists to make a profit, so its primary goal is to earn money to keep operating.
Promoting environmental issues may be an important goal to some international businesses; however,
the businesses must focus on generating revenues, so they are around to promote environmental issues
or other issues of organizational importance.
</h5></div><h5 id='q16'>16. Which of the following is a legal factor that may affect the business environment:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Market trends</option><option value="B">B. Wage regulations</option><option value="C">C. International tensions</option><option value="D">D. Interest rates</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is B: Wage regulations</h5><h5>Many external factors can affect the business environment. Laws that govern what
businesses can and cannot do are legal factors. Wage regulations require businesses to follow certain
laws in relation to the ways in which employees are compensated. For example, minimum-wage laws set
the lowest amount of hourly wages that a business may pay its employees. Minimum-wage regulations
are designed to protect employees from unfair treatment by businesses. If businesses fail to follow wageregulations, the government is likely to penalize them. Market trends are social factors that affect the
business environment. International tensions are political factors that affect the business environment.
Interest rates are economic factors that affect the business environment.
</h5></div><h5 id='q17'>17. A government establishes an organization that monitors and ensures that businesses are complying with
advertising laws. This organization is an example of a</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. regulatory agency.</option><option value="B">B. lobbying group.</option><option value="C">C. legislative body.</option><option value="D">D. watchdog corporation.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: regulatory agency.</h5><h5>Established by the government, a regulatory or watchdog agency is an organization
that monitors business activities and ensures that businesses follow the law. Some regulatory agencies
have the authority to impose fines or other types of punishment on businesses that violate the law. The
legislative body consists of government officials who develop and enact the laws. Lobbying groups are
special-interest organizations that work to influence government policies. The government does not
establish corporations to monitor businesses and enforce laws.
</h5></div><h5 id='q18'>18. As an employee of Simpson and Associates, Kevin performs a variety of activities each day, sets his own
work pace, and has the authority to make many business decisions. Kevin's job involves __________
scope and __________ depth.</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. low, high</option><option value="B">B. high, low</option><option value="C">C. high, high</option><option value="D">D. low, low</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is C: high, high</h5><h5>Scope is the number of tasks involved in a job and the frequency with which they occur.
Because Kevin performs a lot of different activities, the scope of his job is high. If Kevin were to repeat
the same tasks, his job scope would be low. Depth refers to the amount of control and decision-making
an employee has in a job. Because Kevin sets his own pace and has the authority to make many
decisions, the depth of his job is high. If Kevin had little control over his work and did not have the
authority to make major decisions about his work, his job depth would be low.
</h5></div><h5 id='q19'>19. Consumers may be prompted to increase their spending when</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. the government implements expansionary monetary policies.</option><option value="B">B. unemployment rates steadily increase over an extended period of time.</option><option value="C">C. businesses purchase fewer raw materials.</option><option value="D">D. their confidence levels in the health of the economy decline.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is A: the government implements expansionary monetary policies.</h5><h5>Government monetary policies involve
making decisions about the amount of money that will be in circulation and the level of interest rates. The
government considers the state of the economy when determining in what ways, if any, it should change
monetary policies. If trends indicate a recession is or may occur, the government will implement
strategies to prevent the recession or to jumpstart the economy during a recession. To jumpstart the
economy, the government might lower interest rates and/or expand the money supply. Lowering interest
rates often stimulates borrowing and having more money in circulation often encourages consumer
spending. As unemployment increases, consumer spending decreases. Businesses tend to purchase
fewer raw materials when production decreases or when the resources (e.g., money, natural, human) are
not available. Consumer spending increases when consumers feel confident about the economy and
decreases when confidence levels in the economy fall.
</h5></div><h5 id='q20'>20. In relation to career success, it important for individuals to assess their strengths and weaknesses so
they can</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. change their personalities.</option><option value="B">B. apply their talents where they are best used. </option><option value="C">C. improve their relationships with friends.</option><option value="D">D. eliminate conflict.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: apply their talents where they are best used. </h5><h5>Explanation not available</h5></div><h5 id='q21'>21. What is a potential benefit to an employee who demonstrates initiative on the job?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. More advancement opportunities</option><option value="B">B. Fewer performance reviews</option><option value="C">C. Decreased job responsibilities</option><option value="D">D. Increased emotional intelligence

2010 HS ICDC

MARKETING CLUSTER EXAM

3
</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: More advancement opportunities</h5><h5>Initiative is the willingness to act without having to be told to do so.
People who demonstrate initiative are willing to accept and seek out additional or even unpleasant duties.
Employers notice employees who demonstrate initiative because employees who take initiative can
positively impact the business. Employees who take initiative often benefit because employers are more
likely to promote these individuals and provide them with more job responsibilities, which can help them
advance in their careers. Employees who demonstrate initiative often receive higher ratings on their job
performance reviews. Having higher job-performance ratings does not mean that the employee will have
fewer performance reviews. Demonstrating initiative on the job does not always increase an employee's
emotional intelligence.
</h5></div><h5 id='q22'>22. A good indication that you may be making an unethical choice is if you</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. make excuses to justify your behavior.</option><option value="B">B. attempt to be objective.</option><option value="C">C. maintain confidential information.</option><option value="D">D. disagree with the rules.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: make excuses to justify your behavior.</h5><h5>Making excuses means that you are trying to convince yourself
that what you are doing or thinking of doing is okay—that you are justifying a wrong or inappropriate
choice. Maintaining confidential information (unless it is harmful to others) and being objective are ethical
behaviors. Simply disagreeing with certain rules does not always indicate that you are making an
unethical choice.
</h5></div><h5 id='q23'>23. During lunch in the company's cafeteria, McKenzie overheard her coworker, Abby tell Kyle that she has a
job interview with another firm next week. To respect Abby's privacy, McKenzie should</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. drop vague hints to her supervisor that Abby is unhappy and looking for another job.</option><option value="B">B. keep the information to herself and not say anything to anyone.</option><option value="C">C. promise Kyle that she will not tell anyone about his conversation with Abby.</option><option value="D">D. tell Abby that she overheard the conversation, and assure Abby that her secret is safe.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: keep the information to herself and not say anything to anyone.</h5><h5>An important aspect of respecting a
person's privacy is not to talk to about things that do not affect or concern you. If McKenzie tells other
people—including her supervisor, Abby, and Kyle—about a confidential conversation that she overheard,
she may gain the reputation of being a gossip, which can greatly reduce her trustworthiness and
credibility in the workplace.
</h5></div><h5 id='q24'>24. What is the first thing you need to do when you want to persuade others to take a certain course of
action?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Understand your audience</option><option value="B">B. State your case</option><option value="C">C. Express a need or want</option><option value="D">D. Communicate clearly</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: Understand your audience</h5><h5>When you are persuading others, you are trying to get them to see things a
certain way or to take a certain course of action. Before you can persuade people, you must first know
what appeals to them. When you have a general idea about their likes, dislikes, opinions, and needs, you
will be able to prepare a message that will appeal to them. After you understand your audience, and you
know how to present your message in a way that will appeal to them, you can state your case using clear
communication, which may include expressing a particular want or need.
</h5></div><h5 id='q25'>25. What does a businessperson need to do when preparing for an upcoming negotiation?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Develop a strategy that avoids conflict</option><option value="B">B. Analyze the other person's position</option><option value="C">C. Embrace an all or nothing attitude</option><option value="D">D. Adopt an aggressive negotiating style</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: Analyze the other person's position</h5><h5>Understanding the other person's position—what s/he believes or
feels about an idea or issue—is an important aspect of preparing for a negotiation. By understanding the
other person's position, the businessperson can determine the common interests s/he shares with the
other person, and emphasize those points during the negotiation. If the other person believes that the
businessperson wants to reach a mutually beneficial agreement, a win-win outcome is more likely to
occur. If each party agreed on every point, there would be no conflict to begin with, and no need for
negotiation. Embracing an all or nothing attitude and adopting an aggressive negotiating style tends to
create defensiveness and distrust, making a satisfactory outcome unlikely.
</h5></div><h5 id='q26'>26. Which of the following is an example of a team leader using a positive incentive to motivate his/her team
members:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Ali told the team that everyone could take the afternoon off if the project was completed on time.</option><option value="B">B. Kate rudely told her team members, "Since the two of you can't do this right, I'll just do it myself."</option><option value="C">C. Karl said, "If this project isn't done on time, we're all going to receive bad performance reviews."</option><option value="D">D. To ease the tension in the group, Calvin told a joke, which made all the team members laugh.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: Ali told the team that everyone could take the afternoon off if the project was completed on time.</h5><h5>When a
team leader attempts to motivate a work team, s/he is trying to prompt them to take some kind of action.
Often, offering an incentive or reward goes a long way to encourage people to take the desired action. By
offering the group members the afternoon off, Ali is providing an incentive for them to complete their work
on time. Being rude to team members and threatening workers with unfavorable performance reviews are
not examples of using positive incentives to motivate team members. Telling a joke may ease an
uncomfortable situation, but it does not motivate people to complete their work.
</h5></div><h5 id='q27'>27. A critical aspect of financial planning involves</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. saving money for unexpected situations.</option><option value="B">B. obtaining several credit cards.
</option><option value="C">C. investing money in high-risk securities.</option><option value="D">D. setting broad financial goals.
</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: saving money for unexpected situations.</h5><h5>Financial goals are objectives measured in terms of money.
Setting financial goals involves financial planning, which is the determination of how to achieve the
financial goals. An important aspect of financial planning involves saving money for unexpected
situations. Saving money for unexpected situations provides you with funds to pay your bills if you are
unable to earn an income for some reason, such as job loss or illness. Obtaining and using several credit
cards is problematic if you cannot pay the balances due in a timely manner. The level of investment risk
depends on many factors including the individual's comfort level with risk, income level, and age.
Financial goals should be specific rather than broad.
</h5></div><h5 id='q28'>28. An apartment building is an example of a(n) __________ investment.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. lending</option><option value="B">B. ownership</option><option value="C">C. realistic</option><option value="D">D. domestic</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: ownership</h5><h5>An investment is the use of money to generate a profit or gain. An ownership investment is a
type of investment that provides the owner with certain rights in return for using the money. Real estate is
an example of an ownership investment. Because the owner of the apartment building rents living space
to others, the owner has a right to expect payment (rent) from the renter. A lending investment involves
letting someone borrow your money for a specific timeframe for a certain price. Savings accounts, bonds,
and certificates of deposit are examples of lending investments. A domestic investment involves
generating profits within one's own country. Insufficient information is provided to know whether buying
an apartment building is a realistic investment.
</h5></div><h5 id='q29'>29. A business should strive to keep its cash conversion cycle as short as possible so it</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. has fewer liquid assets.</option><option value="B">B. can earn dividends.</option><option value="C">C. can increase its profit margin.</option><option value="D">D. has cash available to use.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: has cash available to use.</h5><h5>The cash conversion cycle is the ratio that reflects the number of days
between a company paying for raw materials and receiving cash from selling the products made from
those raw materials. The longer this period of time, the longer the company's money is tied up and
unavailable for other uses. Therefore, a financial manager strives to keep the cash conversion cycle as
short as possible, so that the business has more free cash to work with. A dividend is the amount of
money that a corporation pays to a stockholder as earnings on an investment. The profit margin is a
product pricing consideration. The profit margin is the amount of money that a business earns on sales
after expenses and is expressed as a ratio. Liquid assets are things of value that the business owns,
which can be quickly converted to cash.
</h5></div><h5 id='q30'>30. Why is it important for a business to clearly communicate its budget to employees?</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. So employees know when they should work overtime</option><option value="B">B. So employees are aware of their effect on the business's profits</option><option value="C">C. Because the business is legally required to disclose financial information</option><option value="D">D. Because employees need to know when they need to adjust the budget</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: So employees are aware of their effect on the business's profits</h5><h5>A budget is an estimate of income and
expenses for a specific period of time. A budget is a tool that helps a business to manage its money. A
budget should be realistic, well planned, and communicated to employees. Employees need to know how
their actions affect the amount of money that flows into and out of the business—how their decisions
affect the business's bottom line. Knowing about the budget can motivate employees to be more costconscious, which can help the business become more profitable. Overtime for hourly employees is one
aspect that may affect the business's profits. Privately-held businesses are not legally required to
disclose certain types of financial information to employees in certain jurisdictions. If necessary,
management, rather than employees, can adjust the budget.
</h5></div><h5 id='q31'>31. Ethan is a human resources manager who is attending a job fair to discuss employment opportunities
with job-fair attendees. This is an example of a ___________ activity.</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. sales-promotion</option><option value="B">B. training</option><option value="C">C. recruiting</option><option value="D">D. compliance</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: recruiting</h5><h5>Recruiting is the human-resources activity that involves seeking out and attracting qualified
potential employees. Participating in job fairs is one way that businesses use to find job candidates.
Training is an activity that involves teaching or developing a specific skill. Sales-promotion consists of
promotional activities other than advertising, personal selling, and publicity that stimulate customer
purchases. Compliance is adhering to rules or laws.
</h5></div><h5 id='q32'>32. Which of the following is an unethical practice in relation to marketing-information management:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Summarizing statistical data in an unusual format</option><option value="B">B. Obtaining a customer's personal data</option><option value="C">C. Implementing opt-in and opt-out e-mail policies</option><option value="D">D. Using spyware computer programs

2010 HS ICDC

MARKETING CLUSTER EXAM

4
</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: Using spyware computer programs

2010 HS ICDC

MARKETING CLUSTER EXAM

4
</h5><h5>Explanation not available</h5></div><h5 id='q33'>33. Which of the following situations is an example of SUGGING:</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. A salesperson offers a customer the opportunity to try an expensive product free of charge.</option><option value="B">B. A telemarketer asks a customer if s/he knows anyone who would want to buy a certain product.</option><option value="C">C. A marketer tells a customer that s/he is conducting research, and then begins a sales pitch.</option><option value="D">D. A business promotes a product by sending samples to its customers without authorization.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is C: A marketer tells a customer that s/he is conducting research, and then begins a sales pitch.</h5><h5>SUGGING is
an acronym for “selling under the guise of research.” SUGGING is an unethical practice in which a
marketer pretends to conduct research, but, in fact, is really attempting to sell a good or service to a
consumer. SUGGING is deceptive and rarely facilitates a long-term selling relationship. It also harms the
integrity of the general marketing-research field because potential respondents who have been subjected
to SUGGING are less likely to trust researchers and are likely to question their true motives. A
telemarketer who asks a person if s/he knows anyone who might buy a certain product is trying to obtain
a referral. Sending samples to consumers is a promotional technique. A salesperson providing a
customer the opportunity to try a product for a certain period of time is implementing a strategy to make a
sale.
</h5></div><h5 id='q34'>34. Which of the following is an example of a secondary source of data that a business can obtain internally:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Sales report</option><option value="B">B. Trade journal</option><option value="C">C. Government web site</option><option value="D">D. Magazine article</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: Sales report</h5><h5>The first section of the
executive summary should inform the reader about the purpose of the report—the reason the report
exists. For example, if the report addresses a specific business problem, the report should cite the
problem in the purpose statement of the executive summary. Recommendations are addressed in the
recommendations section of the report. A letter of authorization might be included in a proposal that a
business submits to a potential client. By signing the letter of authorization, the client provides approval to
proceed with an activity or project. The first section of an executive summary does not acknowledge
sponsors. Sponsors support activities, events, or projects rather than reports.
</h5></div><h5 id='q35'>35. Which of the following situations indicates that a marketer should conduct marketing research to resolve
a problem:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Declining inflation</option><option value="B">B. Testing new products</option><option value="C">C. Monitoring competitors</option><option value="D">D. Losing market share</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: Losing market share</h5><h5>Marketing research is the systematic gathering, recording and analyzing of data
about a specific issue, situation, or concern. Marketers often conduct marketing research when they want
to determine why problems are occurring, such as market-share loss. Market-share loss is a problem
because it usually indicates that the business is selling less and losing profits. In other situations, the
business wants to obtain information about competitors, new products, new market opportunities, or
economic conditions (e.g., inflation), which are not always problems for the business.
</h5></div><h5 id='q36'>36. Because the Hubert Company is not sure how to define its marketing problem, it should begin examining
the issue by</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. gathering primary marketing data.</option><option value="B">B. selecting a survey format.</option><option value="C">C. analyzing the sampling error.</option><option value="D">D. conducting exploratory research.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: conducting exploratory research.</h5><h5>Exploratory research is marketing research that collects information to
help the business define its issue, situation, or concern and decide which direction to go in order to
address it. For example, a business experiencing a drop in sales might conduct exploratory research to
determine why it is happening. It might form a plan of action to figure out whether the problem involves
customer-service issues, lack of promotion, lack of salesperson knowledge, product quality, etc. After the
business decides to conduct exploratory research, it can determine the types of primary and/or
secondary information that it needs, which may include formatting any necessary surveys and developing
a framework for sampling.
</h5></div><h5 id='q37'>37. When developing a sampling plan for a marketing-research project, a business must first determine</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. the size of the group it intends to survey.</option><option value="B">B. the validity of the information.</option><option value="C">C. how the researchers should code the responses.</option><option value="D">D. how to predict the sample group's responses.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: the size of the group it intends to survey.</h5><h5>A sampling plan is the course of action or blueprint for
gathering marketing information from a section of a target market. When a business designs its sampling
plan, it must determine the size of the group that it intends to survey and the process that it intends to
use to select the participants. Researchers determine the validity of the data after coding and analyzing
it, which can only occur after the sample group has been selected and surveyed. Researchers usually
assign response codes during the survey-development process. Predicting the sample group's
responses is not a necessary action to take when a business develops a sampling plan.
</h5></div><h5 id='q38'>38. Which of the following data-collection methods obtains product information during the point-of-purchase
process:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Volume-tracking scanner</option><option value="B">B. Photographic scanner</option><option value="C">C. E-mail survey</option><option value="D">D. Statistical survey</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is A: Volume-tracking scanner</h5><h5>A scanner is an electronic device that reads or translates codes that are placed
on products and enters the product information into a computer. Scanners are commonly used during a
sales transaction, which is the point of purchase. This is a popular method of collecting information about
customers' buying habits and inventory status because the scanning system can track large volumes of
goods. Once enough data are collected, researchers evaluate the data to determine how fast or slow
certain products are moving, which is information they can use to make business decisions. Photographic
scanners, e-mail surveys, and statistical surveys are not data-collection methods that researchers use
during the point-of-purchase process.
</h5></div><h5 id='q39'>39. Which of the following is a device that helps to ensure that direct-observation research is collected in a
neutral way:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Fax machine</option><option value="B">B. Global-orientation system</option><option value="C">C. Video camera</option><option value="D">D. Computer-disk player</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Video camera</h5><h5>Direct-observation research is a type of marketing research that involves watching
customers' in real time to assess their behaviors. For example, a business may want to watch its
customers' shopping habits and browsing patterns to determine if the business is merchandising its
products effectively. The business may have a researcher use a video camera to record the customers'
behavior so that the researcher can review it later in detail. A global-orientation system, a fax machine,
and a computer-disk player are not direct-observation methods that researchers use to collect data in a
neutral way.
</h5></div><h5 id='q40'>40. The Fragrantly Yours Flower Shop determined that it sells between 35 and 50 dozen red roses each
week. What measure is the flower shop using to analyze product sales?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Mode</option><option value="B">B. Average</option><option value="C">C. Median</option><option value="D">D. Range</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is D: Range</h5><h5>Range is the distance between the smallest and largest value in a set of responses. Thirty-five
dozen was the smallest number of red roses sold during a week, and 50 dozen was the largest number.
An average (mean) is the sum of all of the responses divided by the number of options provided. The
median is the middle value of the established sample criteria; half of the data or responses are below the
median (numerical) value, and half of the responses are above the median (numerical) value. Mode is
the most common value in a set of responses to a question.
</h5></div><h5 id='q41'>41. Which of the following questions does a well-written marketing-research brief answer:</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Can we effectively enter a new market?</option><option value="B">B. Why are sales decreasing?</option><option value="C">C. What is the purpose of the research?</option><option value="D">D. Did we achieve the desired outcome?</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: What is the purpose of the research?</h5><h5>An important aspect of the marketing-research brief is to present an
overview of the proposed research project. A good marketing-research brief should define the problem or
issue and state the objectives of the research project. The brief should also suggest ways to approach
the research process and identify appropriate methods to use to obtain the desired information. The
marketing-research brief is a way to ensure that the researcher and others (e.g., clients, decision
makers) who are involved in the process agree on the purpose and format of the research project.
Questions about decreasing sales and new-market entry may or may not be reasons for conducting the
research. Questions about achieving the desired outcome cannot be answered until the marketingresearch project has been completed.
</h5></div><h5 id='q42'>42. When Elliot was tabulating marketing research data, he transposed some numbers as he was converting
raw data into numerical values. What type of error occurred?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Response</option><option value="B">B. Measurement</option><option value="C">C. Sampling</option><option value="D">D. Recording</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: Recording</h5><h5>Errors can occur at any stage during the marketing-research process. When a researcher
transposes numbers while transferring information from surveys or other research documentation into a
computer spreadsheet or in a written document, it is a recording error. The example does not present a
measurement, sampling, or response error.
</h5></div><h5 id='q43'>43. When evaluating the wording of a survey, the editor should make sure that each question contains</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. clear, technical terms.</option><option value="B">B. impressive but vague language.</option><option value="C">C. simple words without jargon.</option><option value="D">D. vocabulary with dual meanings.

2010 HS ICDC

MARKETING CLUSTER EXAM

5
</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: simple words without jargon.</h5><h5>Wording is an important consideration when developing a survey. To obtain
objective, honest answers, respondents must be able to understand the questions. This requires the use
of simple and clear (not vague) wording so respondents are not confused when they read the questions.
Jargon is technical language, which may confuse respondents. Surveys should not contain words with
dual meanings because these words may confuse respondents, too.
</h5></div><h5 id='q44'>44. Which of the following is a primary advantage of conducting a focus group to obtain marketing
information:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Moderator objectivity</option><option value="B">B. Cost effectiveness</option><option value="C">C. Limited preparation</option><option value="D">D. Discussion relevance</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Discussion relevance</h5><h5>A focus group is a group that gathers to discuss a specific topic. Businesses often
hold focus groups to obtain marketing information about their goods and services. When a business
holds a focus group, it is collecting marketing information about a specific topic, which makes it primary
research data for the business. Because the business is collecting the information for a specific purpose,
the data are relevant to the business. Weaknesses or disadvantages for businesses that hold focus
groups are that they can be expensive and can take a lot of time to prepare for. And, sometimes, the
focus-group moderator projects a bias, which hurts the objectivity of the research.
</h5></div><h5 id='q45'>45. Which of the following statements is true about the timeliness of research information:</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. A company that uses out-of-date research data may make poor business decisions.</option><option value="B">B. Timely information is usually relevant to the problem or situation at hand.</option><option value="C">C. Timely information that is obtained from online sources is usually accurate.</option><option value="D">D. Older information that is obtained from secondary sources lacks credibility.</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: A company that uses out-of-date research data may make poor business decisions.</h5><h5>For example,
suppose a business obtains older research stating that a large segment of the market wants product X.
The business develops and markets product X, but the good or service doesn't sell because
circumstances in the marketplace have changed. The business stands to lose a lot of money because it
did not use current research data to make its decision to proceed with producing and marketing product
X. Information may be timely or up-to-date, but it doesn't always relate to the business's problem or
situation at hand. Information that a business obtains from online sources is not always accurate or
correct. Older Information that is obtained from secondary sources may be credible, if circumstances
have not changed.
</h5></div><h5 id='q46'>46. Which of the following research methods is an appropriate way to gather marketing information when
quick responsiveness and low costs are important issues:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Face-to-face interviews</option><option value="B">B. Test marketing</option><option value="C">C. Internet survey</option><option value="D">D. Field experiment</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: Internet survey</h5><h5>A sampling plan is the course of action or blueprint for
gathering marketing information from a section of a target market. When a business designs its sampling
plan, it must determine the size of the group that it intends to survey and the process that it intends to
use to select the participants. Researchers determine the validity of the data after coding and analyzing
it, which can only occur after the sample group has been selected and surveyed. Researchers usually
assign response codes during the survey-development process. Predicting the sample group's
responses is not a necessary action to take when a business develops a sampling plan.
</h5></div><h5 id='q47'>47. What marketing function directly affects how well a product will sell and the amount of money the
business will make?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Channel Management</option><option value="B">B. Promotion</option><option value="C">C. Product/Service Management</option><option value="D">D. Pricing</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is D: Pricing</h5><h5>Marketing functions are interrelated activities that work together to get goods and services from
producers to consumers. Pricing is the marketing function that involves determining and adjusting prices
to maximize return and meet customers' perceptions of value. If customers believe that the product's
value is worth the price, then the product is likely to sell well. If the product sells well, then the business
earns revenue and a profit. Promotion is a marketing function that communicates information about
goods, services, images, and/or ideas to achieve a desired outcome. Product/Service management is the
marketing function that involves obtaining, developing, maintaining, and improving a product or service
mix in response to market opportunities. Channel management is the marketing function that involves the
processes by which marketers ensure that products are distributed to customers efficiently and
effectively.
</h5></div><h5 id='q48'>48. What element of the marketing mix involves considerations such as the types of brands that the business
carries and the types of support services the business offers?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Place</option><option value="B">B. Price</option><option value="C">C. Product</option><option value="D">D. Promotion</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: Product</h5><h5>The marketing mix is made up of a distinct blend of marketing elements—product, place,
promotion, and price. The business must first determine the products that it wants to sell, which may
include specific brands and support services (e.g., warranties, maintenance). Price is the marketing-mix
element that involves determining the amount of money to ask in exchange for the business's products.
The place element of the marketing mix focuses on the distribution of the products—getting the product
to the right place at the right time. The promotion element of the marketing mix involves the use of
various forms of communication to inform, persuade, or remind customers about the business's goods
and services.
</h5></div><h5 id='q49'>49. A business determines that it can increase its market share 12 percent by promoting its goods and
services to Hispanic females who are 18- to 34-years old. The business is segmenting the market on the
basis of</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. geographics.</option><option value="B">B. psychographics.</option><option value="C">C. demographics.</option><option value="D">D. behavior.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: demographics.</h5><h5>Demographics are the physical and social characteristics of the population. A business
that segments the market on the basis of demographics considers factors such as the age, gender, and
ethnicity of the population. Psychographic segmentation is the division of a market on the basis of
consumers' lifestyles and personalities, which are influenced by their behavior. Geographic segmentation
involves dividing a market on the basis of location (e.g., zip code).
</h5></div><h5 id='q50'>50. Maria is developing her marketing plan for her small, but growing, business. She notes that one of the
advantages of her company is that her staff is highly creative and flexible; however, a primary limitation
that she faces is that she does not have sufficient financial resources to expand her product line. In which
component of the marketing plan would Maria place this information?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Financial statement</option><option value="B">B. Promotional plan</option><option value="C">C. Marketing mix</option><option value="D">D. SWOT analysis</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: SWOT analysis</h5><h5>A marketing plan is a set of procedures or strategies for attracting the target customer to
a business. A component of the marketing plan is the SWOT analysis, which describes the businesses
strengths, weaknesses, opportunities, and threats. Because Maria is describing one of her business's
strengths (highly creative and flexible staff) and one of her business's weaknesses (lack of financial
resources), she is working on the SWOT analysis. The promotional plan is the set of procedures or
strategies for the business's promotional efforts. The marketing mix is the four elements of marketing—
product, place, promotion, and price. A financial statement is a summary of accounting information.
</h5></div><h5 id='q51'>51. Which of the following is an external threat that a company might identify while conducting a situation
analysis:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Increasing GDP</option><option value="B">B. Falling interest rates</option><option value="C">C. Rising inflation rate</option><option value="D">D. Declining unemployment</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: Rising inflation rate</h5><h5>A situation analysis is a determination of a company's current business situation and
the direction in which the company is headed. When a company conducts a situation analysis, it
evaluates many internal and external factors. Some external factors that a company evaluates are the
economic indicators that affect the overall health of the economy, such as the interest rates, the
unemployment rate, and the inflation rate. Inflation is the rapid rise in prices. Rising inflation is a threat to
a company because customers have less money to spend on the company's products, which can
negatively impact its sales. In addition, the company may also need to spend more money for raw
materials, which can lower the company's profitability. When interest rates fall, customers are more likely
to use credit or obtain loans to purchase goods and services, which may benefit the company. Likewise,
an increase in GDP and a decline in unemployment indicate a strong economy in which customers are
spending their money, which may positively impact on the company's sales.
</h5></div><h5 id='q52'>52. Which of the following situations best demonstrates why businesses should retain their records:</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. A business is planning to sell out to another company.</option><option value="B">B. A business is planning to send anniversary cards to employees on the date of their employment.</option><option value="C">C. A business is planning to send press releases to the local newspaper.</option><option value="D">D. A business is planning to use webinars for employee training.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: A business is planning to sell out to another company.</h5><h5>When businesses merge or sell out to other
companies, they need to provide records to prove their value to the other companies. Although
businesses might retain documentation of employee anniversaries, press releases, and training plans,
theses records have less significance than records needed to provide proof of a business's income,
expenses, and capital investments.
</h5></div><h5 id='q53'>53. Which of the following are characteristics of effective business information:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Usable, accurate, and retrievable</option><option value="B">B. Current, simple, and accessible</option><option value="C">C. Applicable, historical, and complete</option><option value="D">D. Organized, complex, and superficial

2010 HS ICDC

MARKETING CLUSTER EXAM

6
</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: Usable, accurate, and retrievable</h5><h5>Companies use many sources of internal and external information to
make decisions about their business activities. Effective information should be usable (applicable),
accurate, and retrievable (accessible). Whether the information needs to be current, historical, organized,
complete, simple, or complex depends on the type of information the company needs, and how the
company intends to use the information. Making important business decisions based on superficial
information could be costly to companies.
</h5></div><h5 id='q54'>54. Ingrid is able to access information from her desktop publishing software, word-processing software, and
spreadsheet software at the same time on her personal computer. This is an example of an operating
system with _____________ capabilities.</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. multiprocessing</option><option value="B">B. multi-user</option><option value="C">C. multitasking</option><option value="D">D. multithreading</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: multitasking</h5><h5>The computer's operating system consists of the components needed to run all of the
computer applications and programs. When the operating system allows the user to open and use more
than one software program at a time, it has multitasking abilities. An operating system that allows more
than one user to access a particular program at one time has multi-user capabilities. An operating system
that allows several central processing units (computers) to access a single program has multiprocessing
capabilities. Multithreading capabilities allow different components of one computer program to run at the
same time.
</h5></div><h5 id='q55'>55. After The IWP Company receives online orders from its customers, it quickly replies to all of its
customers with the following e-mail message: “Thank you for your order. It will be processed within the
next 48 hours.” The e-mail function that generates these types of messages is called a(n)</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. mechanical reaction.</option><option value="B">B. instant message.</option><option value="C">C. autoresponder.</option><option value="D">D. timed reply.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: autoresponder.</h5><h5>Autoresponder is a computer program that automatically returns a specified message to
anyone who e-mailed a particular address. The autoresponder function is a way for a business to quickly
acknowledge the customer's message and to let him/her know that the company is going to take action
within a certain timeframe. It is a way to provide customer service. Instant messaging is a computer
program that allows one or more individuals to send typed messages via the computer in real time.
Mechanical-reaction and timed reply are fictitious terms.
</h5></div><h5 id='q56'>56. Which of the following is an important aspect of a business's operations function:</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Establishing efficient processes</option><option value="B">B. Locating potential customers</option><option value="C">C. Providing access to information</option><option value="D">D. Hiring qualified employees</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: Establishing efficient processes</h5><h5>Operations management is the process of planning, controlling, and
monitoring the day-to-day activities required for continued business function. To keep the business
running smoothly and effectively, the operations function makes sure that employees are ordering goods
for resale or manufacturing and developing quality goods and services in the most efficient ways
possible. To work efficiently, the operations function establishes processes or steps to help improve
productivity and reduce waste. Locating potential customers is a marketing activity. Providing access to
information is an information-management activity. Hiring qualified employees is a human resources
activity.
</h5></div><h5 id='q57'>57. What is the advantage to a business that installs external surveillance cameras in prominent locations
around its property?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Eliminates the need to install alarms</option><option value="B">B. Reduces the risk of extortion</option><option value="C">C. Discourages attempted burglaries</option><option value="D">D. Prevents armed robberies</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is C: Discourages attempted burglaries</h5><h5>When would-be burglars see surveillance cameras in several
locations around a business, they are less likely to attempt a break-in because they will be video-taped or
photographed by the cameras. And when the burglars' actions are taped, law enforcement agencies are
more likely to identify and arrest them. Although surveillance cameras don't prevent all burglaries or
robberies, they can often deter these activities. Most businesses use a combination of security measures
to secure their facilities, including door and window locks and different types of alarm systems.
Businesses need and use different types of alarm systems, such as fire alarms or smoke detectors,
which are often required by law. Therefore, the use of surveillance cameras does not eliminate the need
for alarm systems. Extortion is blackmail and is considered a nonviolent form of deception (white-collar
crime).
</h5></div><h5 id='q58'>58. Office supplies, computers, steel, and signage are examples of __________ resources that might be
needed for projects.</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. perishable</option><option value="B">B. support</option><option value="C">C. donated</option><option value="D">D. tangible</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: tangible</h5><h5>Many types of resources—human, materials, time, money—are needed to complete projects.
Tangible resources are those that can be touched, smelled, tasted, seen, or heard. Office supplies,
computers, steel, and signage are tangible items because they can be seen and touched. Perishable
goods (e.g., various foods) are items that are capable of spoiling, decaying and dying. Donated
resources are contributed or given by others. There is not enough information to determine if the goods in
the example are donated items. Often, projects require support services. These are technical or
complicated activities the project members cannot do themselves.
</h5></div><h5 id='q59'>59. Which of the following is often a factor that a business considers when evaluating a vendor's
performance:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Business plan</option><option value="B">B. Order accuracy</option><option value="C">C. Invoice number</option><option value="D">D. Accounting methods</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: Order accuracy</h5><h5>Businesses evaluate their vendors' strengths and weaknesses to determine if changes
should be made. One factor that businesses evaluate is the accuracy of a vendor's orders. If the vendor
consistently sends incorrect items, the business can work with the vendor to correct the problems, or it
can decide to terminate the relationship with the vendor. Other considerations might include invoice
accuracy, order lead-time, and delivery time. The business does not usually evaluate the vendor's
business plan, invoice numbers, or accounting methods.
</h5></div><h5 id='q60'>60. An important aspect of a business's production efforts is</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. obtaining the necessary resources.</option><option value="B">B. scheduling a sales promotion.</option><option value="C">C. identifying financing options.</option><option value="D">D. developing compensation policies.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: obtaining the necessary resources.</h5><h5>Production is the process or activity of producing goods and
services. Businesses must obtain the appropriate resources—skilled workers, raw materials, inventory,
supplies, and equipment—to produce the business's goods and services. Scheduling a sales promotion
is a promotional activity. Identifying financing options is a finance activity. Developing compensation
policies is a human-resources activity.
</h5></div><h5 id='q61'>61. Julianne is going to a chamber-of-commerce luncheon where she will meet several important business
leaders in her community. What is the most appropriate clothing for Julianne to wear?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Colorful blouse, short skirt, and sandals</option><option value="B">B. Dark pantsuit, blouse, and low-heel shoes</option><option value="C">C. Casual pants, long-sleeve t-shirt, and athletic shoes</option><option value="D">D. Black, sequin dress; short jacket; and high-heel shoes</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Dark pantsuit, blouse, and low-heel shoes</h5><h5>Because a chamber-of-commerce luncheon is a business
function, Julianne should wear conservative business apparel. A dark pantsuit, blouse, and low-heel
shoes (e.g., pumps) are appropriate clothing choices for business functions. Short skirts, bold or colorful
blouses, sandals, casual pants, t-shirts, and athletic shoes are too casual for the event. A black, sequin
dress; short jacket; and high-heel shoes are appropriate clothing options for formal evening events.
</h5></div><h5 id='q62'>62. Before you analyze the available information to solve a problem, it is important to</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. identify and check your assumptions.</option><option value="B">B. brainstorm possible solutions.</option><option value="C">C. determine the best solution from several alternatives.</option><option value="D">D. ask for input from your peers.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: identify and check your assumptions.</h5><h5>An assumption is a thought or idea that you presume (take for
granted) is true. In some situations, a person makes incorrect assumptions. For example, a supervisor
may assume that an employee has completed a task by the deadline. The supervisor makes this
assumption because the employee has completed tasks by the given deadlines in the past. The
supervisor's assumption is based on his/her experience. However, the employee experienced a
computer problem, which prevented her/him from completing the task by deadline. So in this particular
situation, the supervisor's assumption was incorrect. Therefore, when you are solving problems, it is
important to make sure that you have all of the correct information available and that you look at
situations and issues objectively. After collecting all of the necessary information and checking
assumptions, you can brainstorm solutions and determine the best solution to implement. The nature of
the problem depends on whether or not you need to ask for input from your peers.
</h5></div><h5 id='q63'>63. To take advantage of work-related networking opportunities, a businessperson might benefit by</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. planning a meeting with a sales trainer.</option><option value="B">B. participating in an online social network.</option><option value="C">C. developing a creative résumé and cover letter.</option><option value="D">D. joining a professional organization.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: joining a professional organization.</h5><h5>A professional organization is a group of persons in the same
profession who form a society to further their common interests. By joining a professional organization, a
businessperson has the opportunity to meet others who work in the same field or industry. When a
businessperson talks or networks with other businesspeople about topics such as career-development
activities or job leads, s/he is taking steps to advance his/her career. Participating in an online social
network, developing a creative résumé and cover letter, and planning a meeting with a sales trainer do
not necessarily provide a businessperson with work-related networking opportunities.
</h5></div><h5 id='q64'>64. To obtain experience and satisfy graduation requirements, The XYZ University arranged for Desmond to
work for a local business in his specific field of study during one semester of the school year. How did
Desmond obtain work experience?</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Temporary employment</option><option value="B">B. Volunteer work</option><option value="C">C. Mentorship</option><option value="D">D. Internship

2010 HS ICDC

MARKETING CLUSTER EXAM

7
</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Internship

2010 HS ICDC

MARKETING CLUSTER EXAM

7
</h5><h5>Explanation not available</h5></div><h5 id='q65'>65. What is a negative consequence to a business that engages in the unethical practice of price gouging?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Excessive profits</option><option value="B">B. High sales</option><option value="C">C. Poor image</option><option value="D">D. Weak competition</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Poor image</h5><h5>Price gouging is a pricing practice that involves raising prices above market value when
demand is high, and no alternative is available to consumers. A business that temporarily increases
prices for goods (e.g., lumber, milk, medicine) during a crisis is behaving in an unethical and, in many
jurisdictions, an illegal manner. When a business engages in price gouging activities, it runs the risk of
losing credibility with the public, which can result in a poor image or damaged reputation. When a
business has a poor public image, its customers often begin to buy products from the business's
competitors, which can reduce the business's sales and profits.
</h5></div><h5 id='q66'>66. Which of the following statements is true about the use of computer-coded frequent-shopper cards:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Cardholders receive better discounts on certain products than non-cardholders.</option><option value="B">B. Non-cardholders pay service fees to obtain the lower prices that cardholders pay.</option><option value="C">C. Non-cardholders receive reward points rather than price discounts.</option><option value="D">D. Frequent-shopper cards serve as incentives for customers to buy from other businesses.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: Cardholders receive better discounts on certain products than non-cardholders.</h5><h5>Many businesses (e.g.,
grocers) have implemented frequent-shopper programs to encourage repeat sales and build customer
loyalty. Many businesses use a computer-coded card that the customer or cashier scans at the point-ofsale. This provides the cardholder with special or better discounts than non-cardholders; therefore, the
prices that cardholders pay for many products are less than the prices that non-cardholders pay. Noncardholders are not charged service fees to obtain lower prices. Some frequent-shopper programs often
use reward points or a combination of reward points and price discounts for cardholders. Frequentshopper cards are an incentive for customers to continue buying from the business offering the program
rather than its competitors.
</h5></div><h5 id='q67'>67. A retailer advertises discounted prices for certain items in a local newspaper and deliberately does not
change the prices of the items in its computer system during the sale. As a result, customers were
charged the original prices at the point of sale. This deceptive pricing practice is called</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. price discrimination.</option><option value="B">B. scanner fraud.</option><option value="C">C. collusion.</option><option value="D">D. dumping.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: scanner fraud.</h5><h5>Some pricing errors in business computer systems are honest mistakes. There are,
however, businesses that do not change the original prices to sale prices in their computers on purpose,
hoping that customers will not notice at checkout. This activity is scanner fraud, and it is a deceptive
advertising practice. Many governments have regulations in place to protect consumers against this
deceptive practice. Price discrimination is an illegal activity in which a business charges different
customers different prices for similar amounts and types of products. Collusion (price fixing) is an illegal
business agreement in which businesses agree on prices of their goods or services, resulting in little
choice for the consumer. Dumping is a practice that involves selling products for lower prices in foreign
markets. Many countries have anti-dumping regulations.
</h5></div><h5 id='q68'>68. During which phase of a product's life cycle do its profit margins tend to narrow?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Introduction</option><option value="B">B. Decline</option><option value="C">C. Maturity</option><option value="D">D. Growth</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: Maturity</h5><h5>The product life cycle is the stages through which goods and services move from the time they
are introduced on the market until they are taken off the market. When a product reaches its maturity
stage, it has been in the market for a while. During this stage, sales tend to peak, and then increase at a
slower rate or start to decline. Because sales tend to slow, the business is likely to price the product to
maintain market share—it might even need to reduce the price. By reducing the price, the business's
profit margins tend to narrow. If the business maintains the product's pricing, and sales start to slow or
decline, the profit margins will also narrow. During the introduction stage of the product's life cycle, the
business may not make any profit because it is trying to recoup its research and development costs.
During the growth stage, the business is likely to see profits increase and peak. During the decline stage,
profit margins are likely to start declining rapidly.
</h5></div><h5 id='q69'>69. An electronic data interchange (EDI) system facilitates a company's ability to</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. test product quality.</option><option value="B">B. improve product durability.</option><option value="C">C. manage product availability.</option><option value="D">D. develop new products.</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: manage product availability.</h5><h5>An electronic data interchange (EDI) system allows a company to monitor its
inventory and order products through a computer connection that it shares with its vendors. An EDI
system helps a company monitor its inventory to ensure that enough products are available when and
where they are needed. An EDI system does not facilitate a company's ability to improve product
durability, test product quality, or develop new products.
</h5></div><h5 id='q70'>70. Which of the following is an unethical situation in product/service management:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Vincent Electronics discontinues production of a slow-moving solar calculator.</option><option value="B">B. Travis Manufacturing uses recycled materials for its product packaging.</option><option value="C">C. Donna's Dress Boutique obtains deep discounts from a new clothing designer.</option><option value="D">D. The Simpson Company embellishes the information that it places on its product labels.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is D: The Simpson Company embellishes the information that it places on its product labels.</h5><h5>When a company
embellishes information on product labels, it is exaggerating the attributes or performance of the product.
This is unethical behavior because the company is misleading customers. If the company misleads its
customers, the customers may use the product inappropriately, which may harm them or others. Using
recyclable materials for product packaging and discontinuing the production of a slow-moving item are
ethical actions. There is not enough information provided to determine if the dress boutique is obtaining
vendor discounts.
</h5></div><h5 id='q71'>71. In the past several years, Jenny noticed that many younger people have moved from her town to larger
cities and that a large segment of the town's citizens are reaching retirement age. Jenny realized a need
for a variety of home-health care services for the town's senior citizens. What factor presented Jenny with
this product opportunity?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Personal attitudes</option><option value="B">B. Demographic changes</option><option value="C">C. Geographic limitations</option><option value="D">D. Economic resources</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Demographic changes</h5><h5>A product opportunity is a favorable circumstance that presents itself to provide a
good or service that people are willing to buy. Individuals often discover product opportunities by simply
being aware of changes that are occurring around them. Demographics are the physical and social
characteristics of the population. Age is a demographic characteristic of the population or market
segment. As a segment of the population ages, its wants and needs change. When an individual
recognizes physical and social changes, s/he has identified a product opportunity due to demographic
shifts. Personal attitudes are psychographic factors. Psychographics are a market segment's shared
attitudes, opinions, and values. Geographic limitations relate to a specific location or region such as
hilliness or a lack of water. Economic resources are the human and natural resources and capital goods
used to produce goods and services.
</h5></div><h5 id='q72'>72. Kelsey's work team decides that the best way to approach a situation is to have each member focus on
different aspects of the issue, such as fact finding, positives, negatives, and emotions. What creativethinking technique is the work team using?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Six Thinking Hats</option><option value="B">B. Brainstorming</option><option value="C">C. Mind mapping</option><option value="D">D. Unconscious problem solving</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: Six Thinking Hats</h5><h5>Six Thinking Hats is a creative-thinking technique that involves categorizing and
focusing on different aspects of a problem, issue, or situation. Each “hat” represents one aspect or way
(i.e., facts, positives, negatives, emotions, new ideas, organization) of looking at the situation.
Brainstorming involves identifying as many different ideas as possible during a set time frame. Mind
mapping is a form of brainstorming that organizes ideas and information graphically using shapes,
pictures, and words. Unconscious problem solving involves relaxation and distraction from the product,
situation, or issue.
</h5></div><h5 id='q73'>73. JIB Corporation's research and development team examined the company's top-selling item and
determined ways to improve it. JIB generated these product ideas in relation to</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. product modification.</option><option value="B">B. competitors' products.</option><option value="C">C. customers' suggestions.</option><option value="D">D. product placement.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: product modification.</h5><h5>Businesses generate product ideas in many ways. Product modification involves
changing one or more of an existing product's attributes to improve its appearance, durability, or
performance. By changing a product's attributes, a business may attract a new market or extend the
product's life cycle. The example does not indicate that the company's research and development team
examined competitors' products or used customers' suggestions to generate ideas to improve or change
the product. Product placement is a type of promotional media that uses products as props.
</h5></div><h5 id='q74'>74. Size, weight, condition, and quality are often factors that government agencies consider when they</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. enforce safety policies.</option><option value="B">B. establish cost standards.</option><option value="C">C. assign product grades.</option><option value="D">D. review inventory systems.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is C: assign product grades.</h5><h5>Grading is the process of rating products according to certain established
standards or characteristics. Grades help customers know to what extent the product meets certain
standards. Depending on the product, the standards may relate to the product's appearance, safety, cost,
etc. Cost standards are established specifications used to measure how much a project or product costs.
Safety policies are procedures that employees follow in the workplace to reduce the risk of injury.
Inventory systems are the ways in which a business tracks and manages its supplies and products.
</h5></div><h5 id='q75'>75. What is an advantage of product bundling to a business?</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. The business is less likely to experience cash-flow problems.</option><option value="B">B. Customers are usually satisfied with the quality of all the bundled items.</option><option value="C">C. The business usually increases its profit margins by offering deep discounts.</option><option value="D">D. Customers are less likely to buy the individual items from competitors later.

2010 HS ICDC

MARKETING CLUSTER EXAM

8
</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: Customers are less likely to buy the individual items from competitors later.

2010 HS ICDC

MARKETING CLUSTER EXAM

8
</h5><h5>Explanation not available</h5></div><h5 id='q76'>76. What is a business communicating when it positions a product by emphasizing the unique attributes of
that product in relation to similar products marketed by competitors?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Time utility</option><option value="B">B. Touch points</option><option value="C">C. Competitive advantage</option><option value="D">D. Superior quality</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: Competitive advantage</h5><h5>Competitive advantage is the edge achieved by a business that offers something
better than its competitors. For example, one business might create a competitive advantage by
providing a service that its competitors do not, such as same-day delivery or free installation. Another
business might have a competitive advantage if it offers a product made with high-quality (superior)
materials or rare resources. To create a competitive advantage, the business must communicate these
unique attributes or benefits to customers. Touch points are all of the opportunities that a business has to
connect with customers and reinforce its brand value. Touch points include the business's employees,
web site, advertising, facilities, etc. If used appropriately, touch points can create a competitive
advantage. Time utility is the usefulness created when products are made available at the time they are
needed or wanted by customers.
</h5></div><h5 id='q77'>77. Which of the following are touch points that a successful company often uses to communicate its
corporate brand to its target market:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Employees, sales staff, and compensation policies</option><option value="B">B. Company web site, sales calls, and trade shows</option><option value="C">C. Trade shows, sales reports, and employees</option><option value="D">D. Sales calls, company web site, and marketing audits</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is B: Company web site, sales calls, and trade shows</h5><h5>A corporate brand is all of the combined impressions
and experiences associated with a particular company. A successful corporate brand involves developing
product and promotional mixes that communicate a desired image of the business. This communication
occurs through a variety of touch points. Touch points are the opportunities that the business has to
connect with customers and reinforce its brand. Some opportunities that the business has to
communicate and reinforce the corporate brand are through the company's web site and during sales
calls and trade shows. These opportunities involve the efforts of many of the company's employees,
including the sales staff. Compensation policies, sales reports, and marketing audits are not targetmarket touch points.
</h5></div><h5 id='q78'>78. When positioning its corporate brand, it is important for a company to evaluate its competitors so it can
determine</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. profit margins.</option><option value="B">B. points of difference.</option><option value="C">C. managerial styles.</option><option value="D">D. support services.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: points of difference.</h5><h5>Positioning refers to the ways in which a business creates a certain image or
impression of itself in the minds of customers. A company evaluates many factors when it positions
itself—its target market, its products, and its competitors. By evaluating its competitors, the company can
determine ways in which it differs from other companies that provide similar products. By doing so, the
business is determining its points of difference with other businesses. By knowing these points of
difference, which include the competitors' strengths and weaknesses as well as its own, the business can
determine how to set itself apart from the competition. Then, the business can use this information to
position itself by emphasizing its uniqueness in comparison to its competitors. Profit margins, managerial
styles, and support services might be points of difference.
</h5></div><h5 id='q79'>79. What type of unethical advertising is being used when a television commercial convinces consumers that
they can avoid serious illness by using a particular product?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Stereotyping</option><option value="B">B. Fear-based</option><option value="C">C. Gender bias</option><option value="D">D. Puffery</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is B: Fear-based</h5><h5>Fear-based advertising involves communicating nonpersonal promotional messages in ways
that scare buyers into thinking that they need to purchase a product to stay healthy or safe. Many
consumers, businesses, and government agencies believe that this type of emotional appeal is unethical
behavior. Stereotyping is a set image or an assumption about a person or thing. Gender (male or female)
bias is an opinion or judgment based on feelings about gender rather than fact. Puffery involves
exaggerating a product's characteristics, benefits, or capabilities.
</h5></div><h5 id='q80'>80. What entertaining form of Internet promotion involves animations that float across the computer screen
and move back to their original space?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Media-rich advertising</option><option value="B">B. Blogs</option><option value="C">C. Interstitials</option><option value="D">D. Banner ads</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Media-rich advertising</h5><h5>As the growth of e-commerce continues, many businesses are increasing their
use of Internet advertising to communicate promotional information. Media-rich advertisements use
animation, sound, and video to send interactive promotional messages. Blogs are online diaries.
Interstitials are Internet ads that appear on the computer screen between web-site page changes. Banner
ads are Internet ads that appear across the middle, top, side, or bottom of a computer screen when the
Internet user accesses a web page.
</h5></div><h5 id='q81'>81. Governments that have passed “do not call” laws are restricting promotional activities related to</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. direct mail.</option><option value="B">B. contests.</option><option value="C">C. Internet downloads.</option><option value="D">D. telemarketing.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: telemarketing.</h5><h5>Telemarketing is an advertising medium that utilizes telephone service to promote a
product either by phoning prospective customers or providing a number for them to call. In the past few
years, consumer groups have complained that telemarketing has become intrusive, so many
governments have started to regulate telemarketing practices. Some governments have developed “do
not call” laws. These laws allow consumers to register their phone numbers with a “do not call” registry.
Qualifying businesses must obtain this list and not call consumers who have registered with the program.
If they violate these laws, the businesses may be fined. “Do not call” laws do not regulate contests,
Internet downloads, or direct mail.
</h5></div><h5 id='q82'>82. Which of the following best describes the goal of amplified word-of-mouth:</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. Improving the quality of goods and services the business offers</option><option value="B">B. Encouraging customers to provide both positive and negative feedback</option><option value="C">C. Building loyal relationships with the customers</option><option value="D">D. Providing information to activists to share with others</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is D: Providing information to activists to share with others</h5><h5>Word-of-mouth promotion involves customers who
tell others about their satisfaction with the business. Amplified word-of-mouth promotion involves the use
of proactive efforts (campaigns) in which the business provides specific information to customers
(activists) to pass along to their friends, family, and business contacts. On the other hand, organic wordof-mouth promotion occurs naturally. Because customers are satisfied with the business and its products,
they tell others about this satisfaction in the course of normal conversation. For example, if a business
shows a sincere interest in the customer by asking for feedback, taking actions to ensure customer
loyalty, or improving products, the customer is likely to share those positive experiences with others.
</h5></div><h5 id='q83'>83. A primary advantage to businesses using direct marketing to promote their goods and services is that the
messages</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. are sent to those who are mostly likely to buy.</option><option value="B">B. enhance the business's credibility.</option><option value="C">C. are relatively inexpensive to produce.</option><option value="D">D. provide customers with direct access to knowledgeable salespeople.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: are sent to those who are mostly likely to buy.</h5><h5>Direct marketing is an effort to obtain business by sending
promotional information to customers directly in their businesses or homes. Primary direct marketing
channels include postal mail, telephone, and electronic mail. The advantage to direct marketing is that
the business can send promotional messages to the people who are most likely to buy their goods and
services. This can save the business time and money because it is not wasting its resources by sending
promotional information to people who would not buy its products. Direct marketing does not always
enhance a business's credibility. In fact, a business that sends too many direct marketing messages may
turn off a customer, thereby reducing the business's credibility. Some direct marketing materials can be
very expensive to produce and mail to customers, which is a clear disadvantage of direct marketing.
Direct marketing does not always provide customers with direct access to knowledgeable salespeople.
</h5></div><h5 id='q84'>84. Ben recently purchased a cellular telephone. The manufacturer provided a form and a special code with
the telephone's packaging. Ben completed the form, copied his sales receipt, and mailed these items
back to the manufacturer along with the part of the packaging that contained the special code. Within six
weeks, Ben received a $50 check from the telephone manufacturer. What type of sales-promotion
technique was used?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Coupon</option><option value="B">B. Rebate</option><option value="C">C. Sweepstakes</option><option value="D">D. Warranty

2010 HS ICDC

MARKETING CLUSTER EXAM

9
</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: Rebate</h5><h5>Sales-promotion techniques are activities other than advertising, selling, and personal selling
that stimulate customer purchases. A rebate is a sales-promotion technique in which a business
(manufacturer) returns part of the price that a customer (Ben) pays for a good (cellular telephone) or
service. Rebates stimulate sales because customers want to receive money back for their purchases.
Couponing involves the use of printed certificates that entitle the holder to a reduced purchase price.
Coupons are generally processed at the point of sale. Sweepstakes involve a game of chance in which a
customer wins a prize. A warranty is a promise made by the seller to the customer that the seller will
repair or replace a product that does not perform as expected. A warranty is a benefit of purchase rather
than a sales-promotion technique.
</h5></div><h5 id='q85'>85. Which of the following communication channels is a corporation's public-relations department most likely
to use to maintain positive relationships with shareholders:</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Newsletters, annual reports, and the company's web site</option><option value="B">B. Press releases, online social networks, and print advertisements</option><option value="C">C. News conferences, consumer blogs, and employee manuals</option><option value="D">D. Policy manuals, commercials, and sponsorships</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: Newsletters, annual reports, and the company's web site</h5><h5>Public relations involves establishing good
relationships between the business and the public. A business tries to maintain positive relationships with
different groups that make up the public, such as employees, local businesses, government officials, the
media, and the business's shareholders. Because the shareholders are the owners of the company, it is
important to develop and maintain positive relationships with them. The public-relations department does
this by communicating with them through newsletters, annual reports, the company's web site, and online
social networks. Print advertisements and commercials are forms of nonpersonal advertising. Businesses
use press releases and news conferences to convey information to the media. Policy manuals help guide
employees' actions on the job. Consumer blogs can be developed by anyone to communicate positive
and negative information about various goods and services. A sponsorship is a partnership in which a
company pays a fee to affiliate itself with a team, league, or event.
</h5></div><h5 id='q86'>86. How can a business communicate a print advertisement's message to its audience in an appealing way?</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Coordinate the advertisement's elements</option><option value="B">B. Focus more on the text and less on graphics</option><option value="C">C. Use testimonials from celebrities in the news</option><option value="D">D. Select a variety of bold fonts and unrelated graphics</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: Coordinate the advertisement's elements</h5><h5>To maximize an advertisement's impact, the four main
elements of an advertisement should be coordinated. The advertisement's headline, illustration, copy,
and signature should attract the reader's attention in a balanced, visually attractive, and clear way. The
advertisement's elements should relate to one another to convey the ad's theme and reinforce the
message. The font, amount of text and graphics, and the use of celebrity testimonials vary and depend
on the ad's theme, the intended message, and the designer's style. Celebrities are in the news for both
good and bad reasons. Insufficient information is provided to determine whether the business would want
its brand associated with the celebrity. The use of a variety of fonts is not recommended since they
detract from the advertisement's message.
</h5></div><h5 id='q87'>87. Which of the following situations is an example of a public-relations activity:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Evan coordinates an upcoming sales promotion with the company's purchasing manager.</option><option value="B">B. Jana prepares a press release about her firm's new licensing agreement with a large company.</option><option value="C">C. Colleen telephones a prospective customer to try to schedule a product demonstration.</option><option value="D">D. Eli reviews a report to determine which clients have overdue payments due on their accounts.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Jana prepares a press release about her firm's new licensing agreement with a large company.</h5><h5>The
public-relations department is the area of the business that is responsible for establishing good relations
between the business and the public. Public-relations staff members are responsible for developing and
distributing press releases. Press releases include newsworthy information about the business and are
provided to the media to obtain publicity. Businesses often distribute press releases to announce new
products, employee promotions, mergers, awards, licensing agreements, etc. Sales promotion is a
product-promotion activity. Calling on prospective customers to schedule product demonstrations is a
sales activity. Reviewing an overdue-accounts report is an accounting activity.
</h5></div><h5 id='q88'>88. Which of the following is an example of a public-relations activity that involves communicating with an
internal audience:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Developing an employee newsletter</option><option value="B">B. Holding a weekly press conference</option><option value="C">C. Distributing a press release</option><option value="D">D. Making a donation to a charity</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: Developing an employee newsletter</h5><h5>A business's public-relations efforts involve creating and
maintaining goodwill between the business and the public. There are often many subgroups of the public
with whom the business wants to maintain good relations, such as the customers, shareholders, local
residents, community organizations, local businesses, local residents, and the business's own
employees. The business's employees are part of the business's internal audience. Maintaining positive
relationships with employees is important because employees are often customers who buy the
business's products. They also talk to their friends and family about the business and its products.
Therefore, it is important for a business's public-relations department to develop and implement publicrelations activities that affect its employees. One activity that the public-relations staff members are often
responsible for is developing the employee newsletter. The newsletter updates the employees about new
products, community events, employee promotions, awards, etc. Press conferences, press releases, and
charity donations are activities that involve informing the business's external audiences about the
business's activities.
</h5></div><h5 id='q89'>89. The most appropriate way for the High-Tech Computer Company to communicate information about its
new line of computers at a trade show is by</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. holding product demonstrations.</option><option value="B">B. sending direct mail.</option><option value="C">C. placing billboard advertisements.</option><option value="D">D. developing a contest.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: holding product demonstrations.</h5><h5>A trade show is an event where businesses communicate information
about products to build sales leads and interest. Trade-show participation is a way for businesses to
communicate with the individuals or businesses most likely to buy the business's products. When a
business's salesperson demonstrates the product, trade-show attendees see the product's attributes and
how it works. In some demonstrations, the show attendees often have an opportunity to try the product
themselves. Businesses send direct mail to their customers' homes and businesses. A billboard is a form
of outdoor advertising. Direct mail and billboards are not the most appropriate ways to communicate at a
trade show. A contest is a sales promotion activity that offers a prize or award. Holding a contest, rather
than developing one, is a good way to draw attendees to a trade-show booth, so the business can
communicate information about its products.
</h5></div><h5 id='q90'>90. A primary factor that a business considers when deciding to participate in a trade show is the</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. business's inventory levels.</option><option value="B">B. business's operating policies.</option><option value="C">C. number of expected visitors.</option><option value="D">D. cost of the concessions.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: number of expected visitors.</h5><h5>Trade shows are events where businesses display and/or demonstrate their
products to build sales leads and interest. A business considers many factors when deciding to
participate in a particular trade show. Some factors that businesses consider are the trade-show location,
travel and hotel expenses, booth costs, target audience, and the number of expected visitors. If the
number of expected visitors is low and the show takes place in a distant location, the costs of
participation may not be feasible. Operating policies, inventory levels, and the costs of buying food at
concession stands are not primary factors that a business considers when deciding if it should participate
in a trade show.
</h5></div><h5 id='q91'>91. Sophie is developing the promotional plan for her company, and is working on the section of the plan that
involves forecasting the expenses associated with various promotional activities. What component of the
promotional plan is Sophie working on?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Strategy</option><option value="B">B. Executive summary</option><option value="C">C. Budget</option><option value="D">D. Situation analysis</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Budget</h5><h5>The promotional plan is the framework for the promotional activities of a business. An important
element of the promotional plan is the budget. A budget is an estimate of what income and expenses will
be for a specific timeframe or for a specific project. A budget is an important tool that helps a business
allocate money and monitor spending. The executive summary is an overview of the plan. The strategy
section of the promotional plan provides information about the specific activities that the business will use
to accomplish its promotional goals. A situation analysis is a determination of a firm's current business
situation and the direction in which the business is headed.
</h5></div><h5 id='q92'>92. A business can enhance its customer-service levels after the sales transaction has occurred by</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. arranging financing and suggestion selling.</option><option value="B">B. offering training programs and providing technical support.</option><option value="C">C. providing product information and generating referrals.</option><option value="D">D. checking inventory status and advertising product specials.</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: offering training programs and providing technical support.</h5><h5>Providing quality customer service after the
sale helps to reinforce the customer's buying decision and often leads to repeat sales. Offering training
programs and providing technical support are two ways in which a business can provide customer
service after the sale. Arranging financing, suggestion selling, providing product information, checking
inventory, and advertising are actions that businesses take before the sales transaction occurs.
Generating referrals is a way for salespeople to increase their clientele rather than providing customer
service after the sale.
</h5></div><h5 id='q93'>93. A business's selling policies are beneficial to customers when they</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. maximize profitability and achieve sales goals.</option><option value="B">B. restrict the salespeople's selling activities.</option><option value="C">C. provide customers with limited credit options.</option><option value="D">D. ensure that all customers are treated fairly.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: ensure that all customers are treated fairly.</h5><h5>Selling policies are the general rules established by
management to guide the personal selling effort and outline how things must be done. Selling policies are
beneficial to customers because they ensure that all customers receive fair and equitable treatment.
Although some businesses offer credit options, not all businesses do. If credit requirements are too rigid,
then they are not beneficial to many customers. A disadvantage to salespeople of selling policies occurs
when the policies are rigid and inflexible, which can restrict the salesperson's authority, which in turn can
negatively affect a customer's experience with the business. Selling policies that maximize profitability
and help achieve sales goals are advantages to the business rather than to the customers.
</h5></div><h5 id='q94'>94. To reduce the risk of bribery in selling situations, it is a good idea for businesses to develop</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. diversity training manuals.</option><option value="B">B. promotional budgets.</option><option value="C">C. entertainment guidelines.</option><option value="D">D. product delivery policies.

2010 HS ICDC

MARKETING CLUSTER EXAM

10
</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: entertainment guidelines.</h5><h5>During the selling process, salespeople often encounter situations that are not
clearly right or wrong. Salespeople tend to judge these situations differently—according to their personal
code of ethics. One of the "questionable" situations that salespeople might encounter involves
entertaining customers. While some businesses view entertainment as a way to build positive customer
relationships, others view it as favoritism or bribery. By developing entertainment guidelines for their
salespeople, businesses can clearly communicate acceptable and unacceptable entertainment activities.
A promotional budget is a forecast of the money that the business plans to spend on promoting its goods
and services during a certain timeframe. Diversity training manuals are designed to help employees
understand diversity issues in the workplace. Product delivery policies are the business's guidelines for
delivering products to its customers.
</h5></div><h5 id='q95'>95. Jason is a salesperson who has just landed an appointment with a prospective client who has the
potential to provide Jason's company with a lot of business. Jason wants to make sure he is well
prepared for his meeting and presentation, so he decides that he needs to obtain information about the
client. How can Jason quickly and effectively use technology to learn about the prospective client's
business?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Telephone the prospective client's vendors</option><option value="B">B. Review the prospective client's web site</option><option value="C">C. Access the prospective client's Intranet</option><option value="D">D. Send e-mail inquires to the prospective client's employees</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is B: Review the prospective client's web site</h5><h5>Salespeople can learn a lot about their prospective clients by
reviewing their web sites. Salespeople can obtain historical data about the business, find information
about the products it offers, determine its target market, and its business philosophy. This type of
information helps salespeople prepare presentations that will appeal to the business. The prospective
clients' vendors and employees may not be willing to share information with salespeople. Because the
Intranet is the business's internal computer network, the salesperson is not likely to obtain access to it.
</h5></div><h5 id='q96'>96. A pharmaceutical company fails to warn the public about the possible side effects associated with a new
medication. This is an example of a business violating selling regulations through</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. branding.</option><option value="B">B. exaggeration.</option><option value="C">C. misrepresentation.</option><option value="D">D. exclusivity.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: misrepresentation.</h5><h5>By omitting important facts about a product, the business is misrepresenting the
product and misleading consumers, which is illegal in many countries. Businesses that misrepresent their
products often face lawsuits and fines. When a business overstates the capabilities of a product, it is
exaggeration. Branding is the process of creating certain images about a product or business in the
minds of consumers. In a sponsorship agreement, exclusivity is the sponsor's privilege of being the only
company in its particular category of goods or services.
</h5></div><h5 id='q97'>97. Kevin is a salesperson for the Branson Company. A customer asks Kevin for specific warranty
information about a new product that Branson recently started selling. Which of the following is the
quickest, most reliable source for Kevin to use to obtain the desired information:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Customers who already own the product</option><option value="B">B. The manufacturer's product literature</option><option value="C">C. Branson's newspaper advertisement</option><option value="D">D. The display model of the product</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: The manufacturer's product literature</h5><h5>The most reliable source of information about a new product
comes from the manufacturer. A salesperson can obtain accurate warranty information, product
specifications, and operating instructions from the manufacturer's web site or printed materials. Branson's
advertisement and the display model may not contain information about the product's warranty.
Salespeople might contact customers who already own the product to find out how the customers like or
use the product, but they wouldn't contact customers to obtain warranty information.
</h5></div><h5 id='q98'>98. When a salesperson first begins to establish a relationship with a customer, s/he should focus on</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. putting the customer at ease.</option><option value="B">B. describing the product's benefits.</option><option value="C">C. asking the customer for the sale.</option><option value="D">D. recommending complementary items.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: putting the customer at ease.</h5><h5>To sell effectively, the salesperson must first take steps to put the customer
at ease. Offering prompt assistance and being friendly and approachable are ways in which the
salesperson can make the customer feel comfortable to discuss his/her product needs. After putting the
customer at ease, the salesperson can determine the customer's needs, recommend a product, describe
the product's benefits, and ask for the sale. Complementary items are goods that go with the primary
product. A salesperson would recommend complementary items after the customer makes the decision
to buy the primary product.
</h5></div><h5 id='q99'>99. According to Maslow's Hierarchy of Needs Theory, buying behavior that involves the acquisition of goods
and services to elevate a person's status or recognition are _____________ needs.</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. self-actualization</option><option value="B">B. physiological</option><option value="C">C. esteem</option><option value="D">D. safety</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is C: esteem</h5><h5>Maslow's Hierarchy of Needs Theory states that motivation is related to five levels of needs. The
basic needs must first be met before a person is motivated to fulfill the next level of needs. Physiological
needs are the first level and involve obtaining the most basic needs—food, shelter, and clothing. The
next level involves meeting safety needs. Esteem needs, which are the level of needs after social needs,
involve obtaining goods and services that provide the buyer with status and recognition. For example,
esteem needs motivate a person to buy a designer handbag or sports car. Self-actualization needs are
related to a person's self-development and desire to accomplish a goal or meet a challenge.
</h5></div><h5 id='q100'>100. In relation to career success, it important for individuals to assess their strengths and weaknesses so
they can</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. change their personalities.</option><option value="B">B. apply their talents where they are best used. </option><option value="C">C. improve their relationships with friends.</option><option value="D">D. eliminate conflict.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: apply their talents where they are best used. </h5><h5>Explanation not available</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Marketing_1_Whole_Homework.js"></script></html>