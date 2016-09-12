<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Hospitality Exam 9</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. The purpose of legal procedure is to ensure that each party receives</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. a reasonable verdict.</option><option value="B">B. ongoing advice.</option><option value="C">C. consistent treatment.</option><option value="D">D. an indictment.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: consistent treatment.</h5><h5>Legal procedure refers to the methods and processes used to protect an
individual's or business's legal rights. These rights include the right to obtain legal counsel, the right to be
heard in court, the right to confront the accuser, etc. Legal procedure involves following the same steps
and protocol to ensure that both the defendant and the plaintiff are treated in a fair and consistent
manner. The purpose of legal procedure is not to ensure that each party receives ongoing advice. In
most legal proceedings, one party is not going to be satisfied with the verdict or outcome. An indictment
is a formal charge or accusation of a crime.
</h5></div><h5 id='q2'>2. From a legal standpoint, hospitality and tourism customers have the right to expect businesses in this
industry to take</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. reasonable care.</option><option value="B">B. no risks.</option><option value="C">C. insurance out of each customer.</option><option value="D">D. total responsibility for accidents.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: reasonable care.</h5><h5>When hospitality and tourism businesses act in a way that a reasonable hospitality and
tourism business would have acted, the business exhibits reasonable care. If hospitality and tourism
businesses can prove that they acted with reasonable care, they are not fined by the courts. Otherwise,
the courts can find them guilty of negligence, and they would be charged a fine. It's not possible for
hospitality and tourism businesses to avoid all risks. There is always the chance that something bad can
happen. Hospitality and tourism businesses are not insurers of their customers nor do they take out
insurance on each customer. Instead, they take out liability insurance that transfers risk to an insurance
company. Hospitality and tourism businesses act so that they limit their responsibility for accidents.
</h5></div><h5 id='q3'>3. Which of the following activities represents a way in which a company with a dominant position can
restrict trade:</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Exclusive agreements</option><option value="B">B. Partnership agreements</option><option value="C">C. Binding contracts</option><option value="D">D. Joint ventures</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Exclusive agreements</h5><h5>Exclusive agreements are a supplier's requirements for its customer to handle
only its products or to agree to not handle other companies' products. When this restricts trade, it is
considered illegal in Canada and in the U.S. A partnership agreement is a written agreement signed by
business partners that specifies the terms of the partnership arrangement. Contracts are legal
agreements between two or more businesses stating that one party is to do something in return for
something provided by the other party. Once contracts are signed and accepted by the businesses, they
are considered binding agreements in that if one of the parties fails to live up to the agreement, the party
will be guilty of breach of contract. Joint ventures are arrangements that involve two or more businesses
entering into a relationship by combining complementary resources such as technology, skills, capital, or
distribution channels, for the benefit of all parties; the relationship is usually short-term or for a single
project/transaction. Joint ventures, binding contracts, and partnership agreements do not inhibit trade.
</h5></div><h5 id='q4'>4. A local, gourmet restaurant has decided to sell its baked goods through its website. To ensure that as
many people as possible are told about the new store, the marketing communications director is
appearing on a noon talk show to offer incentives to people placing orders on the website the first day.
What two marketing activities had to be coordinated in this situation?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Channel management and promotion</option><option value="B">B. Marketing-information management and product/service management</option><option value="C">C. Product/service management and promotion</option><option value="D">D. Channel management and marketing-information management</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is A: Channel management and promotion</h5><h5>The restaurant is using a new channel, its website, to offer its
baked goods to customers. To attract traffic to the website, the marketing communications director used
publicity when appearing on the talk show and sales promotion by offering incentives. The website had to
function properly to accommodate the sales volume generated by the incentives. Marketing-information
management deals with gathering, accessing, synthesizing, evaluating, and disseminating information for
use in making business decisions. Product/service management involves obtaining, developing,
maintaining, and improving a product or service mix in response to market opportunities. In this scenario,
the product mix has not been changed.
</h5></div><h5 id='q5'>5. What type of information should employees be able to locate in their company's employee handbook?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. The number of vacation days that an employee has taken</option><option value="B">B. The company's list of current job openings</option><option value="C">C. The company's annual report</option><option value="D">D. The use of company property</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: The use of company property</h5><h5>Businesses often develop employee handbooks, which provide
information about their general policies and procedures. Employee handbooks are usually given to new
employees when they are hired. Employee handbooks usually provide information about overtime and
vacation policies, disciplinary and grievance procedures, pay schedules, dress codes, and behavioral
expectations in its employee handbook. Many employee handbooks include information about employees
and their personal use of company property. Company-property issues that the handbook might address
include making personal long-distance phone calls on the company phone and using the office copy
machine or laser printer for non-business purposes. Lists of the company's current job openings and
personal information about vacation days are usually available through the human-resources department,
and are not included in the employee handbook. Additionally, the company's annual report is not usually
included in the employee handbook. Often, corporations post their annual reports on the company's web
site.
</h5></div><h5 id='q6'>6. While conducting a staff meeting, the speaker noticed that Colin was texting on his cell phone. Colin's
nonverbal behavior indicates that he was</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. annoyed.</option><option value="B">B. distracted.</option><option value="C">C. listening to the speaker.</option><option value="D">D. interested in the topic.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: distracted.</h5><h5>Nonverbal cues are the elements of communication that involve gestures and facial
expressions rather than words. Nonverbal cues often express what the senders and recipients think
about their messages. If Colin was interested in the meeting topic or was listening to the speaker, he
would be directing his attention to the speaker. Since Colin was looking at his phone and text messaging,
he was distracted and was probably not paying attention to what the speaker was saying. The speaker
likely felt that Colin's nonverbal behavior was rude and inconsiderate. There is not enough information to
determine if Colin was annoyed.
</h5></div><h5 id='q7'>7. Allison is attending a business seminar. Because the seminar presenter is speaking very quickly, Allison
is having a difficult time taking accurate notes. What technique would help Allison take notes quickly?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Use abbreviations and symbols</option><option value="B">B. Write notes on index cards</option><option value="C">C. Focus on the subtopics</option><option value="D">D. Ask the speaker to provide handouts</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: Use abbreviations and symbols</h5><h5>Developing a system of and writing down abbreviations and symbols
(i.e., shorthand) is much quicker than writing out long phrases and complete sentences. For example, to
remember a very important point, Allison might place a star or asterisk by a key word, short phrase, or
abbreviation. After the seminar, Allison can refer to her “shorthand” notes and write more comprehensive
notes for future use. Writing on note cards, focusing on subtopics, and asking the speaker to provide
handouts will not help Allison take accurate notes in real time.
</h5></div><h5 id='q8'>8. The primary purpose of placing headings and subheadings in a long business report is to</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. organize content in a cohesive, manageable way.</option><option value="B">B. attract attention to the writer's hidden agenda.</option><option value="C">C. provide supporting evidence for key points.</option><option value="D">D. solicit an opinion or response from the audience.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: organize content in a cohesive, manageable way.</h5><h5>Long business reports often contain a lot of
information about different topics. To organize the information so the audience can understand the
report's contents, report writers often break content into chunks of related information. Headings and
subheadings are often included before the section or topic to let the audience know the issue at hand.
Headings and subheadings do attract attention because they are often formatted with a larger or colorcoded font; however, the primary purpose is not to convey a hidden agenda, provide supporting
evidence, or solicit an opinion from the audience.
</h5></div><h5 id='q9'>9. A businessperson is writing a letter of inquiry to a vendor asking about the price of a specific piece of
office equipment. What does the businessperson need to include in the letter?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Product model number, invoice number, and quantity desired</option><option value="B">B. Purchase order number, contact information, and shipping address</option><option value="C">C. Contact information, product model number, and manufacturer</option><option value="D">D. Shipping address, manufacturer, and purchase order number
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Contact information, product model number, and manufacturer</h5><h5>A letter of inquiry is a request for
information. The businessperson should provide the manufacturer of the equipment and the product's
model number so the letter recipient knows which item to provide a price for. The letter writer should also
include his/her contact information—-e-mail address, telephone number, mailing address—so the
message recipient knows who or where to send the requested information. The businessperson is asking
for a price but not placing an order. So, the business person would not provide a purchase order number.
The vendor generates an invoice after the order has been placed. If the vendor provides quantity
discounts, the businessperson may need to indicate the quantity desired to provide accurate prices.
</h5></div><h5 id='q10'>10. David works for a busy travel agency. On Thursday, a client calls David and requests information about a
two-week Caribbean cruise. David needs to do some research before he can provide the client with the
desired information. Which of the following is the best way for David to respond to the client's inquiry:</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. "I'm in the middle of something right now. Call me back in 15 minutes."</option><option value="B">B. “I'm very busy right now, so I'll get back to you when I have time.”</option><option value="C">C. “I don't have information about this cruise. I'll ask my supervisor to call you next week.”</option><option value="D">D. “I need to look into this, but will call you back by the end of the day with an answer.”</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: “I need to look into this, but will call you back by the end of the day with an answer.”</h5><h5>Clients expect
prompt, courteous service. If David needs to obtain more information, he should advise the client that he
will call back with the correct information as soon as possible. David should be able to call the client back
himself for routine questions instead of asking his supervisor to make the call. Asking the client to call
back or telling the client to expect a call at David's convenience is rude and is providing poor customer
service.
</h5></div><h5 id='q11'>11. Customer relationship management involves building positive, long-term business connections with
customers who are</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. interested in change.</option><option value="B">B. easily influenced.</option><option value="C">C. loyal to many brands.</option><option value="D">D. profitable for the business.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: profitable for the business.</h5><h5>Because the marketplace is extremely competitive, many businesses are
focusing their efforts on building good, long-term relationships with the customers who have the most
potential to buy. These customers are the ones who will generate sales and profits for the businesses.
This effort is often referred to as customer relationship management. By viewing the relationship as a
partnership, a business has a better chance of keeping the customer for the long-term and keeping them
loyal to the business and to its brands. Customers who are easily influenced or interested in change are
more likely to be motivated to try another business's products.
</h5></div><h5 id='q12'>12. Which of the following factors has expanded the concept of place in the hospitality and tourism industry:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Global distribution systems</option><option value="B">B. Differentiated pricing strategies</option><option value="C">C. Methods for reaching new target markets</option><option value="D">D. Customization of services</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is A: Global distribution systems</h5><h5>The Internet makes it possible to market hospitality services to any location
in the world. The concept of a business's location now far exceeds its physical location. Customers can
log into such sites as Orbitz, Travelocity, and Expedia to book their travel needs for air, car, bus, train,
and lodging. Differentiated pricing strategies are an aspect of pricing considerations. Methods for
reaching new target markets pertains to promotional considerations. Customization of services pertains
to product considerations.
</h5></div><h5 id='q13'>13. When the price of premium gasoline increased to $3.75 a gallon, Joseph bought regular gasoline instead,
because it cost $2.97 a gallon. This is an example of</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. the substitution effect.</option><option value="B">B. a price ceiling.</option><option value="C">C. the market-clearing price.</option><option value="D">D. a buyer's market.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: the substitution effect.</h5><h5>A change in relative prices that causes buyers to replace the purchase of one
product with another is a phenomenon called the substitution effect. In the example, Joseph decided that
he did not want to pay the increased amount for premium gasoline and opted to buy regular gasoline
instead because it was less expensive. A price ceiling is a maximum legal price that businesses can
charge for certain products. The market-clearing (equilibrium) price is the point at which the quantity of a
product that buyers want to buy is equal to the quantity that sellers are willing to sell at a certain price. A
buyer's market is the best time for consumers to buy, which usually occurs when there is a large supply,
small demand, and low prices.
</h5></div><h5 id='q14'>14. Determine if the following statement is true or false: A business's employees and customers are the key
stakeholders who are impacted by unethical business practices.</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. True. Executive managers who engage in unethical and illegal behavior risk going to jail.</option><option value="B">B. False. Employees are affected the most by unethical practices because they may lose their jobs.</option><option value="C">C. False. Other stakeholders can be affected by unethical business behavior.</option><option value="D">D. True. Employees and customers have the most time and money invested in the company.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is C: False. Other stakeholders can be affected by unethical business behavior.</h5><h5>Although employees and
customers are affected by unethical business practices, businesses must fulfill obligations to other
stakeholders including investors and the community at large. For example, investors lost billions dollars
in relation to the Enron scandal in the early 2000s. Thousands of people lost retirement funds due to
unethical behavior by Enron leaders. In addition, companies engaging in the controversial practice of
offshoring, cost jobs and tax revenue for the local community.
</h5></div><h5 id='q15'>15. One of the main ways that hospitality and tourism contributes to economic growth is through</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. provision of conference space.</option><option value="B">B. sustainable resources.</option><option value="C">C. visitor exports.</option><option value="D">D. use of global positioning systems.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: visitor exports.</h5><h5>The money spent by foreign travelers in another country is known as visitor exports. The
earnings from these sources was expected to be to be more than 6% of total exports by 2010. That
translates to a dollar figure of $1,086,000,000, and that figure is expected to more than double by 2020.
When international travelers visit other countries, they also buy other goods and services while visiting.
This helps businesses in addition to those in hospitality and tourism. Although hospitality and tourism
businesses are encouraged to use sustainable resources, their use does not contribute to economic
growth. Provision of conference space is a first step in getting groups to visit an area, but they do not in
and of themselves create economic growth. Global positioning systems help to determine how to get to
and from locations. They do not impact economic growth.
</h5></div><h5 id='q16'>16. When she opens her new business, what type of risk is Lauren taking?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Temporary</option><option value="B">B. Pure</option><option value="C">C. Speculative</option><option value="D">D. Safety</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Speculative</h5><h5>Speculative risk brings the possibility of gain, no change, or loss. When opening and running
a business, the owner may turn a profit (gain), break even (no change) or go bankrupt (loss). A pure risk
involves the possibility of loss or no loss. For example, if a tornado occurs, it may hit the building and
cause damage (loss) or pass the building and not cause damage (no loss). Because many factors affect
the risk involved in opening and operating a business, the risk is ongoing rather than temporary—until
Lauren closes or sells the business. Safety risks are preventable or controllable types of risks that involve
the physical well-being of employees, customers, and visitors.
</h5></div><h5 id='q17'>17. Which of the following factors is most likely to cause consumer spending to decrease:</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Low interest rates</option><option value="B">B. High unemployment</option><option value="C">C. Decreased inflation</option><option value="D">D. Increased business expansion</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: High unemployment</h5><h5>Consumer spending is one factor that indicates the health of the economy.
Spending tends to decrease as unemployment increases because consumers do not have a lot of
income to spend. Low inflation, low interest rates, and increased business expansion are factors that
indicate that the economy is growing and that consumers are spending.
</h5></div><h5 id='q18'>18. Who benefits the most when interest rates increase?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Lenders</option><option value="B">B. Borrowers</option><option value="C">C. Retailers</option><option value="D">D. Manufacturers</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is A: Lenders</h5><h5>Lenders make money from borrowers by charging interest. When interest rates increase,
lenders earn more money. Borrowers (individuals and all types of businesses) benefit when interest rates
decrease because it is cheaper for them to borrow money for homes, cars, business expansions, and
other expensive goods and services.
</h5></div><h5 id='q19'>19. Which of the following personal traits would be considered essential for success in most careers in
hospitality and tourism:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Athletic skills</option><option value="B">B. Mathematical skills</option><option value="C">C. Writing skills</option><option value="D">D. Communication skills</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: Communication skills</h5><h5>Since careers in hospitality and tourism often require personal interactions, most
employees need solid communication skills. Although some careers in hospitality and tourism require
mathematical and writing skills, those skills are not required by most hospitality and tourism careers.
Athletic skills are generally not needed in hospitality and tourism careers.
</h5></div><h5 id='q20'>20. Which of the following statements supports the concept of cultural individualism:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Middle-Eastern cultures tend to emphasize strict gender roles rather than diversity.</option><option value="B">B. The Latin American culture tends to view time in a more relaxed manner than other cultures.</option><option value="C">C. The Chinese culture values group decision making and a “we're in this together” attitude.</option><option value="D">D. Western cultures embrace the idea that working hard will reap personal rewards and fulfillment.

</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is D: Western cultures embrace the idea that working hard will reap personal rewards and fulfillment.

</h5><h5>Explanation not available</h5></div><h5 id='q21'>21. Norman overheard Gina tell a coworker that the company's operations manager is going to be fired.
Should Norman tell the operations manager about the conversation?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. No. Gina is gossiping about something that may or may not be true.</option><option value="B">B. No. Because if Norman believes that the gossip isn't true, he should confront Gina.</option><option value="C">C. Yes. The operations manager needs to start looking for another job.</option><option value="D">D. Yes. If the operations manager is Norman's boss, Norman should warn him/her about the
situation.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is A: No. Gina is gossiping about something that may or may not be true.</h5><h5>Gossip is rumor or talk that discloses
personal information about another person. Gossiping is unethical behavior because the information may
be false. When false rumors are spread about a person, the person may be hurt personally and
professionally. Employees should avoid gossiping rather than risk spreading false information; therefore,
Norman should not say anything to anyone. Gina's personal conversations and the operations manager's
employment status do not involve Norman, and are not any of his business.
</h5></div><h5 id='q22'>22. Tim thought his manager told him to have the sales report done by 2:00 on Thursday, but his manager
actually wanted the report by noon on Tuesday. When the report was not ready on Tuesday, Tim's
manager became irritated with him. What was the reason for the disagreement or conflict?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Authority struggles</option><option value="B">B. Limited resources</option><option value="C">C. Miscommunication</option><option value="D">D. Inconsistent opinions</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: Miscommunication</h5><h5>Conflicts are disagreements. Disagreements happen for different reasons.
Sometimes, it's a matter of miscommunication or misunderstanding. In the example, Tim thought he
heard his manager say one day and time, when his manager actually said something else. Or, perhaps
Tim's manager thought he told Tim that he wanted the report earlier than he originally requested, but
really forgot to tell Tim. The disagreement did not occur because Tim had limited resources, because he
questioned his manager's authority, or because each party held inconsistent opinions.
</h5></div><h5 id='q23'>23. What is the primary advantage to groups that make decisions by consensus?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. The group reaches decisions quickly because consensus is rule by a single leader.</option><option value="B">B. Each group member involved in the process gets to vote.</option><option value="C">C. The process reduces the risk of conflict among group members.</option><option value="D">D. Everyone who is involved in the process holds equal power.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is D: Everyone who is involved in the process holds equal power.</h5><h5>A consensus is a decision-making outcome
that requires the substantial agreement of each group member. Every member must agree to a decision
or outcome. The decision may not be each member's first choice, but each member agrees with all
options. In consensus building, every group member has an equal level of power, so there are no
leaders. Because each member has equal power, it reduces behavior that promotes self-interest over the
best interest of the entire group. Voting is a decision-making method in which votes are counted for or
against an alternative, and whichever alternative has the greatest number of votes, wins. Drawbacks to
using consensus as a decision-making method is that it is often time-consuming and conflicts are likely to
occur because each member must discuss his/her opinions and points of difference.
</h5></div><h5 id='q24'>24. Elise smiles brightly and says, "Martin, you are making incredible progress. I am very proud of your
efforts—keep up the good work!" What characteristic of coaching is Elise demonstrating?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Enthusiasm</option><option value="B">B. Humility</option><option value="C">C. Empathy</option><option value="D">D. Patience</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: Enthusiasm</h5><h5>Coaching is the process of helping others to reach their full potential and to overcome the
barriers that are keeping them from doing so. Effective coaching involves exhibiting certain qualities and
characteristics, including enthusiasm. When coaches show their own excitement and interest in helping
them, their protégés are more likely to be motivated to make changes and improvements to reach their
goals. Empathy is the ability to put yourself in another person's place. Humility is a lack of pride. Patience
is the ability to endure life's aggravations and difficulties calmly. Although these are also important traits
for effective coaches to have, Elise is not demonstrating those particular traits in the example.
</h5></div><h5 id='q25'>25. Does political behavior within a business usually create negative outcomes?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. No. In many situations, political coalitions can influence management to make positive changes.</option><option value="B">B. No. Most organizations have policies that limit the use of political tactics in the workplace.</option><option value="C">C. Yes. Employees tend to further their careers by using scapegoating and backstabbing tactics
against coworkers.</option><option value="D">D. Yes. Organizational politics usually lead to the formation of cliques, which reduces efficiency and
causes conflict.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is A: No. In many situations, political coalitions can influence management to make positive changes.</h5><h5>Political
relationships involve influencing others to take a certain course of action. Political relationships form at
different levels of a business for different reasons. Political coalitions tend to form when employees share
similar concerns or ideas about a single issue. The coalition may last for a limited time to accomplish a
specific goal. For example, several employees may have a common goal to improve a production
process so they can perform their jobs more efficiently. Once the improvements have been made, the
coalition would likely dissolve. Employees may engage in scapegoating and backstabbing practices to
advance their careers, but this is not normal behavior for most workers. Cliques are groups of people
who share similar interests and values. Cliques can form in any type of group or organization. While
some cliquish behavior may negatively impact a business, it does not always result in inefficiencies or
conflict. Conflict or disagreement is unavoidable in business—the way the conflict is handled influences
the outcome.
</h5></div><h5 id='q26'>26. Which of the following is categorized as a fixed expense in a personal budget:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Clothing</option><option value="B">B. Groceries</option><option value="C">C. Home repairs</option><option value="D">D. Car payment</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is D: Car payment</h5><h5>Developing a personal budget helps individuals manage their income and expenses. An
important consideration in budgeting involves identifying fixed expenses, which are the expenses (cash
outflows) that do not fluctuate or change from month to month. Car payments, insurance, and rent are
examples of fixed expenses. Groceries, home repairs, and clothing are variable expenses, or expenses
that may fluctuate slightly from month to month.
</h5></div><h5 id='q27'>27. Ian's employer electronically places Ian's paycheck directly into his bank checking account every pay
period. In what column on Ian's bank statement will he find these transactions?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Withdrawals and debits</option><option value="B">B. Deposits and credits</option><option value="C">C. Deposits and debits</option><option value="D">D. Withdrawals and credits</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: Deposits and credits</h5><h5>A bank statement is a summary of all transactions that occur for a certain period of
time, usually one month. The bank statement will indicate the day, amount, and transaction type on the
statement. The account holder compares the bank statement with his/her checkbook to determine
problems or discrepancies. Ian's employer is electronically putting his paycheck into his account;
therefore, the amount will be recorded as a deposit (credit) since money is being added to the account on
Ian's behalf. The withdrawals and debits column on the bank statement records all of Ian's withdrawals
(debits). Ian bills are located in this column—rent, car payment, groceries, etc.
</h5></div><h5 id='q28'>28. Fiona made a $500 donation to a local homeless shelter last year. When she prepares her personal
income tax form, she can claim the donation as part of her</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. tax deductions.</option><option value="B">B. public property.</option><option value="C">C. living expenses.</option><option value="D">D. discretionary income.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: tax deductions.</h5><h5>Tax deductions are expenses that can be subtracted from gross income. For example,
charitable donations can be claimed as tax deductions on an individual's personal tax return. The tax filer
may need to provide a receipt for donations that exceed a certain amount of money. Other examples of
tax deductible expenses include college tuition, home-mortgage interest, and child care. Charitable
donations are not claimed on tax returns as public property, living expenses, or discretionary income.
</h5></div><h5 id='q29'>29. Which of the following is a question that investors should ask prospective financial planners:</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. How many references do I need to provide? </option><option value="B">B. How are your fees structured?</option><option value="C">C. What is your income?</option><option value="D">D. Where did you attend school?</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: How are your fees structured?</h5><h5>Because financial planners are compensated in different ways, it is
important to consider the fee structure when selecting a financial-services provider. Some financial
planners charge a flat fee, while others base their fees on the number and size of transactions. Some
financial planners charge for research and consulting time. Therefore, it is important to ask financial
planners about their fee structures, so investors can determine if they can afford the fees. A financial
planner may provide references for a potential client, but the potential client does not generally need to
provide the financial planner with references. It is inappropriate to ask the financial planner about his/her
personal income. Where the financial planner attended school is irrelevant.
</h5></div><h5 id='q30'>30. Which of the following offers investors the advantage of securities diversification:</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. Treasury bonds</option><option value="B">B. Corporate bonds</option><option value="C">C. Certificates of deposit</option><option value="D">D. Mutual funds

</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: Mutual funds

</h5><h5>Explanation not available</h5></div><h5 id='q31'>31. An important aspect of upholding ethical accounting standards involves the ability to be</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. resourceful.</option><option value="B">B. objective.</option><option value="C">C. intolerant.</option><option value="D">D. unconventional.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: objective.</h5><h5>Accountants prepare the accounting information that businesses use to make financial
decisions. Therefore, it is important for accountants to uphold the ethical standards of their profession by
providing accurate, objective (unbiased) financial information. A person who uses unique processes or
creativity to achieve a goal is being resourceful. Accountants need to follow the GAAP to perform their
jobs rather than use unique processes. An intolerant person is prejudiced. An unconventional person is
often viewed as unusual or eccentric.
</h5></div><h5 id='q32'>32. Which of the following is essential to record at the time money is taken from petty cash:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Account to which transaction should be charged</option><option value="B">B. General purpose of the transaction</option><option value="C">C. Person or business name that will be paid the money</option><option value="D">D. Name of person who witnessed the cash withdrawal</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is B: General purpose of the transaction</h5><h5>Petty cash is used for small purchases/payments such as parking
meter charges, flowers, COD charges, stamps, etc. When money is removed from petty cash, the date,
amount of the transaction, and the general purpose of the transaction should be recorded. The account
to which the transaction will be charged can be done later when all petty cash charges to that account
can be totaled and one entry made. It's not necessary to record the name of the person or business that
will be paid the money. Many businesses require the signature of the person taking the money from petty
cash but not the name of a witness.
</h5></div><h5 id='q33'>33. A human-resources manager is reviewing job applications for a marketing position to select which
candidates to call for an interview. What process is the human-resources manager performing?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Negotiating</option><option value="B">B. On-boarding</option><option value="C">C. Prospecting</option><option value="D">D. Screening</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: Screening</h5><h5>In the human-resources function, screening involves “weeding out” the applicants that do not
meet minimum requirements for the job or have not satisfactorily completed the application. On-boarding
activities are human-resources tasks that must be performed when a new employee joins the company
(e.g., orientation and paperwork). Prospecting is a sales activity that involves identifying any person or
organization with the potential to buy a product. Negotiating is the process of influencing someone to take
a certain course of action in order to achieve a desired outcome.
</h5></div><h5 id='q34'>34. The sales manager at a full-service resort will be using the results of a marketing-research study for
planning purposes. Which of the following is a question that the sales manager should ask:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. What promotional mix has been most effective?</option><option value="B">B. Are our guests satisfied with our services?</option><option value="C">C. What new distribution channels could we use?</option><option value="D">D. How can we lower our costs?</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: What new distribution channels could we use?</h5><h5>When using marketing research for planning, marketers
are trying to identify potential opportunities for the company. Examining new distribution channels is a
potential opportunity for the marketer to pursue. By asking whether guests are satisfied with the services
it is using marketing research for control purposes. Determining how to lower costs and what promotional
mix has been most effective are using marketing research for problem-solving purposes.
</h5></div><h5 id='q35'>35. Which of the following is a source of secondary data that Angela could use to obtain information about a
competitor's promotional activities:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. Interview conducted with the competitor's advertising agency</option><option value="B">B. Focus group feedback she obtains from the competitor's former employees</option><option value="C">C. Survey administered to competitor's customers to determine the effectiveness of its promotional
activities</option><option value="D">D. Statistics in a trade publication's article about the competitor's advertising campaign</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: Statistics in a trade publication's article about the competitor's advertising campaign</h5><h5>Secondary data are
facts, figures, and statistics that have been collected for projects other than the one at hand. In this case,
the statistics in the trade publication's article were generated for a purpose other than providing the
competition with data about its promotional activities. Surveys, focus groups, and interviews are used to
collect primary data: facts, figures, and statistics collected for the project at hand.
</h5></div><h5 id='q36'>36. From what part of a database can you obtain all the information about one person?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. A form</option><option value="B">B. A view</option><option value="C">C. A report</option><option value="D">D. A record</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: A record</h5><h5>A record is the central entry into a database and it maintains all of one person's information. A
view is a window in a database. A form is a way of looking at information in a view. A report is a view that
shows data from multiple records on a single page.
</h5></div><h5 id='q37'>37. To track environmental changes impacting hospitality and tourism marketing, a destination marketer
should use</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. push technology.</option><option value="B">B. model building.</option><option value="C">C. customer discovery.</option><option value="D">D. market-basket analysis.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is A: push technology.</h5><h5>Marketers can keep up with environmental changes by scanning information that is
automatically delivered to their computer by push technology. This helps marketers identify trends in their
early stages of development. LexisNexis is an example of a company that scans information, finds
relevant information, and forwards it to subscribers so that they can review and interpret the information
at their convenience. Model building involves identifying relationships between variables. Customer
discovery is a data-mining application that enables researchers to determine who will make a valuable
customer. Market-basket analysis is another data-mining technique used to identify relationships
between product purchases and retail shopping information.
</h5></div><h5 id='q38'>38. Which of the following actions encourages participation in a telephone interview:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Using graphic aids to encourage the interviewee to talk</option><option value="B">B. Promising to send the interviewee the study results</option><option value="C">C. Calling the interviewee's mobile phone</option><option value="D">D. Keeping the interview short—10 minutes or less</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Keeping the interview short—10 minutes or less</h5><h5>Research studies indicate that the shorter the interview,
the more likely an interviewee is to participate in the study. Promising to send the study results would
only encourage those with a special interest in the interview topic to participate. Mobile phones are not to
be used since the interviewee may have to pay for the call. Graphic aids cannot be shown in many
telephone interviews.
</h5></div><h5 id='q39'>39. When examining two data sets, the hotel manager found that one set had a correlation of +1 and the
other had a correlation of -1. What should the hotel manager understand about the strength of the
relationship of the two data sets?</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. The strength of the relationship of the +1 correlation is twice as strong as the -1 correlation.</option><option value="B">B. No relationship exists with the -1 correlation.</option><option value="C">C. The strength of the relationship of the two data sets is the same.</option><option value="D">D. The strength of the relationship of the -1 correlation is less than that of the +1 correlation.</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: The strength of the relationship of the two data sets is the same.</h5><h5>The +1 correlation has a direct
relationship with the X and Y coordinates, while the -1 correlation has an inverse relationship with them.
However, the strength of that relationship is the same.
</h5></div><h5 id='q40'>40. The audience for the research report is young professionals. What should you incorporate into the visual
presentation that will appeal specifically to that audience?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Pictures</option><option value="B">B. Animated backgrounds</option><option value="C">C. Concise information</option><option value="D">D. Different backgrounds in each slide

</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: Animated backgrounds</h5><h5>The use of animated backgrounds appeals to young professionals, whereas
older professionals would prefer having clear, concise information. Pictures and concise information
appeal to all audiences. Using different backgrounds on each slide makes the presentation appear
“busy.”
</h5></div><h5 id='q41'>41. What should you talk about first when presenting research findings orally?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Overview of others' work on the research topic</option><option value="B">B. Problem/issue being addressed</option><option value="C">C. Description of participants and how they were selected</option><option value="D">D. Graphs depicting main findings</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Problem/issue being addressed</h5><h5>There is a logical sequence for presenting research orally. The
presenter needs to first discuss why the study was conducted. This involves explaining the
problem/issue. The researcher then moves on to explain what was done, what was found out, and what
is recommended.
</h5></div><h5 id='q42'>42. Over the years, Splash-O-Rama Water Park has worked hard to develop and maintain an image of a fun,
and friendly entertainment venue for families. What action can the front-line employees take to maintain
this image?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Print flyers to hand out at the entrance that lists the park's daily activities and shows.</option><option value="B">B. Arrive an hour after the park opens to ensure that the park is clean and ready for business.</option><option value="C">C. Develop a public-relations campaign to reinforce the park's commitment to the community.</option><option value="D">D. Learn where activities are located in the park to answer visitors' questions courteously.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is D: Learn where activities are located in the park to answer visitors' questions courteously.</h5><h5>Businesses work
hard to develop and maintain a certain brand or image in the minds of their customers. Employees are
touch points that help the business reinforce that image by the ways in which they conduct their work.
Front-line employees (e.g., ticket takers, concession workers, ride operators) should greet the customers
pleasantly and be able to direct them to various park services. So employees understand what is
expected of them, management should communicate and train the employees and familiarize them with
the park. Front-line employees may hand out brochures, but they usually do not print them. The publicrelations function carries out public-relations activities. Designated employees will arrive at the park
before it opens to perform pre-opening duties.
</h5></div><h5 id='q43'>43. Which of the following should hospitality and tourism marketers do to overcome a negative customer
review on TripAdvisor or other customer-review website:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Add a Guest Satisfaction Survey on its own website</option><option value="B">B. Remove a Complaint Handler Survey on TripAdvisor's website</option><option value="C">C. Publicize the business's desire to identify complaints</option><option value="D">D. Require customers to complete feedback surveys after the sale</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: Add a Guest Satisfaction Survey on its own website</h5><h5>Explanation not available</h5></div><h5 id='q44'>44. A tour operator put together a tour package for baby boomers who are interested in southwestern art.
The tour group will visit a variety of locations in the southwest but will operate individually rather than as a
guided tour. What factors did the tour operator use to segment the market?</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Personality and life cycle</option><option value="B">B. Gender and culture</option><option value="C">C. Geography and gender</option><option value="D">D. Age and life cycle</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Age and life cycle</h5><h5>Baby boomers were born between 1946 and 1964. Baby boomers, therefore,
represent people of a particular age range that is aging. Many baby boomers are empty nesters, and they
have the money and time to travel. Art appeals to males and females; therefore, gender was not used as
a basis for segmentation. Although the tour group will experience different cultures, personalities, and
geographies, those were not used as the basis for market segmentation.
</h5></div><h5 id='q45'>45. What is the best way for Michelle to organize the information that she has collected for a research report
that she is writing?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Edit her draft</option><option value="B">B. Create the appendices</option><option value="C">C. Correct grammatical errors</option><option value="D">D. Develop an outline</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: Develop an outline</h5><h5>An outline helps the writer organize key points in a logical, cohesive manner. After
the information is organized in the desired way, the writer uses the outline to develop a draft of the report.
After developing the draft, Michelle should edit and correct grammatical errors. The appendices are
supporting information placed at the end of the document.
</h5></div><h5 id='q46'>46. A company's computer network allows many users to access the same programs on different computer
units throughout the company. What type of computer operating system is the company using?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Multithreading</option><option value="B">B. Multiprocessing</option><option value="C">C. Augmented</option><option value="D">D. Hosted</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: Multiprocessing</h5><h5>The computer's operating system consists of the components needed to run all of the
computer applications and programs. An operating system that allows several central processing units
(computers) to access a single program has multiprocessing capabilities. Multithreading capabilities allow
different components of one computer program to run at the same time. Augmented and hosted are not
types of operating systems.
</h5></div><h5 id='q47'>47. Jamal wants to purchase software for his small business that allows him to create text documents,
prepare presentations, maintain a customer database, and develop numerical charts. What type of
software would best meet Jamal's needs?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Spreadsheet</option><option value="B">B. Word processing</option><option value="C">C. Integrated</option><option value="D">D. Trajectory</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: Integrated</h5><h5>Integrated software applications consist of two or more related computer programs that work
together to record information or perform specific business tasks or functions. An example of integrated
software is Microsoft Office—it consists of several related programs, such as word-processing (Word),
spreadsheet (Excel), presentation (PowerPoint), and database (Access). Trajectory software is used to
measure velocity, wind drift, momentum, etc.
</h5></div><h5 id='q48'>48. Which of these lodging services would most likely be automated using software:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Concierge</option><option value="B">B. Registration</option><option value="C">C. Room set-up</option><option value="D">D. Sales forecasting</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is B: Registration</h5><h5>Software best handles routine tasks such as registration. Registration can be handled
online, over the phone, or in person. All registrations go into a software program. This makes it easy to
analyze sales and marketing data. Concierge and room set-up services are performed by humans. Sales
forecasting is not a service.
</h5></div><h5 id='q49'>49. Trends indicate that a large segment of the population is between 60- and 70-years-old. A
hospitality/tourism business can act on this trend by</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. selling international vacation packages to recent college graduates.</option><option value="B">B. developing tour products specifically designed to appeal to retirees.</option><option value="C">C. offering discounted hotel rates for guests who have children under the age of five.</option><option value="D">D. implementing a loyalty program for corporate business accounts.

</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: developing tour products specifically designed to appeal to retirees.</h5><h5>Demographics are the physical and
social characteristics (e.g., age, gender, education) of a population or market segment. Businesses
consider demographic trends because changes in the population have an effect on the existing and
potential products they market. Because trends indicate that a large segment of the population is aging
and reaching retirement, hospitality/tourism businesses are developing products to attract retirees who
are no longer in the workforce and have more time to travel. Tour products designed for retirees would
not likely appeal to recent college graduates, families with young children, or business travelers.
</h5></div><h5 id='q50'>50. A current trend is social networking sites. How are many businesses in the hospitality and tourism
industry using their social networking sites?</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. To book travelers' upcoming trips</option><option value="B">B. To match travelers with others who have similar interests</option><option value="C">C. To provide a way for travelers to share their experiences</option><option value="D">D. To notify travelers of flight cancellations</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: To provide a way for travelers to share their experiences</h5><h5>The Internet has provided a mechanism for
satisfied and unsatisfied customers to tell others about their experiences with a business. The comments
of other customers are viewed as more credible statements than advertisements from the business.
Therefore, travel and tourism businesses are providing this forum so that satisfied customers can spread
the good word, while the problems identified can be addressed and corrections made, if needed.
Hospitality and tourism businesses are not using social networking to connect travelers with similar
interests, to book travelers' upcoming trips, or to notify travelers of flight cancellations.
</h5></div><h5 id='q51'>51. Which of the following is an example of a probable conflict of interest in business operations:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. An employee meets a new client for lunch at an upscale restaurant.</option><option value="B">B. A purchasing agent provides a customer with a discount.</option><option value="C">C. A purchasing agent awards a large order to a relative's employer.</option><option value="D">D. An employee uses the company discount to purchase goods.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is C: A purchasing agent awards a large order to a relative's employer.</h5><h5>A conflict of interest occurs when
decision making is affected by personal gain or interest. If the purchasing agent's relative is a spouse
who may earn a bonus on the order, then the purchasing agent has a personal interest in the transaction.
Many businesses address conflicts of interest in their ethics policies. If the company's ethical policies are
followed, providing customer discounts, having lunch with clients, and using the company discount to
purchase goods are not examples of unethical behavior nor are they a conflict of interest.
</h5></div><h5 id='q52'>52. It is appropriate for an employee to report his/her employer's noncompliance with health and safety
regulations when</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. the employer does not take steps to correct the issue.</option><option value="B">B. the housekeeping staff disposes the company's hazardous materials.</option><option value="C">C. a coworker blocks the fire escape route with boxes of old files.</option><option value="D">D. a vendor does not have a ventilation system that meets code.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: the employer does not take steps to correct the issue.</h5><h5>Businesses must follow certain health and safety
regulations to ensure a safe working environment for employees. When employers do not follow
regulations, it is important to take action to correct the situation. In many situations, the issue can be
resolved easily. For example, an employee might notice that boxes are blocking an exit and tell his/her
supervisor about the infraction. Then, the supervisor can take steps to ensure the boxes are moved to an
appropriate location. When the employer does not take steps to correct the issue, employees should
report the infraction to the appropriate government agency. There is not enough information provided to
determine if housekeeping personnel are violating the regulations that govern the way businesses must
dispose of hazardous-materials. The vendor is not the employee's employer.
</h5></div><h5 id='q53'>53. A person approaches you at a hotel's front desk and asks for a guest's room number. What should you
do to keep that data secure?</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Give the person the phone number of the central reservations system to obtain the room number</option><option value="B">B. Write down the room number on a piece of paper so people within earshot won't learn the
number</option><option value="C">C. Tell the person that you are not allowed to give out that information</option><option value="D">D. Invite the person to use the house phone to call the guest</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is D: Invite the person to use the house phone to call the guest</h5><h5>Front-desk attendants should not give others
the room numbers of guests either orally or in writing. This helps to protect the guest's privacy and
security. Although front desk attendants can mention that they're not allowed to give out the guest's room
number, they shouldn't stop there. The central reservations system will not have the guest's room
number.
</h5></div><h5 id='q54'>54. Ben recently developed a logo for his new business. What can Ben do to legally protect the logo from
unauthorized use?</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. File a patent request</option><option value="B">B. Register the logo as copyrighted material</option><option value="C">C. Trademark the logo</option><option value="D">D. Obtain a subpoena from the government</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: Trademark the logo</h5><h5>A business can legally protect its logo from unauthorized use by registering the logo
with the appropriate government agency. If an unauthorized entity compromises or uses the logo in
harmful, embarrassing, or negative ways, trademark protection provides the business with legal recourse.
Copyrights provide legal protection for written, musical, and artistic works. Patents are obtained to legally
protect inventions and certain types of processes for a limited amount of time. A subpoena is a formal
request issued by the court for an individual to submit evidence or serve as a witness at trial.
</h5></div><h5 id='q55'>55. What is the most important factor for a west-coast business to consider if it plans to use a supplier who is
located in the same country on the east-coast?</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Return on sales</option><option value="B">B. Personnel policies</option><option value="C">C. Exchange rates</option><option value="D">D. Delivery timeliness</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: Delivery timeliness</h5><h5>When selecting a supplier, businesses must consider delivery timeliness. The
business must ask if the supplier can deliver the goods when they are needed. In some situations, it may
be better for a business to use a supplier who may be a little more expensive, but in closer physical
proximity of the business, if that supplier can consistently meet delivery requirements. Personnel policies
are guidelines for employees' behavior in the workplace. The exchange rate is the value of one nation's
currency in relation to another nation's currency. Return on sales or target return is a profit-oriented
pricing objective in which the business bases the amount of profit it wants to earn on the amount of its
sales.
</h5></div><h5 id='q56'>56. The Six Sigma model involves continuously implementing activities that</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. stimulate revenue and lessen decision making.</option><option value="B">B. promote consistency and eliminate resources.</option><option value="C">C. improve quality and reduce inefficiencies.</option><option value="D">D. influence regulation and decrease outputs.</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is C: improve quality and reduce inefficiencies.</h5><h5>Six Sigma is a quality-management framework that involves
continuously setting higher goals of perfection. Six Sigma builds upon previous goals to set higher goals
in order to continuously improve the quality of the business's goods, services, or processes. The ultimate
goal is to maximize outputs, reduce inefficiencies and waste, have no process or product defects, and
minimize production costs. If these actions are successful, the business's profits may increase. As a
quality-control framework, the primary purpose of Six Sigma is not to eliminate resources, lessen
decision making, influence regulation, or decrease outputs.
</h5></div><h5 id='q57'>57. What is the best, least costly technique for an event management company to use to encourage
recycling at an event?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Purchase paper goods that do not need to be recycled</option><option value="B">B. Require attendees to turn in solid waste following the event</option><option value="C">C. Hire a waste management company to clean up the venue</option><option value="D">D. Place recycling bins throughout the venue</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: Place recycling bins throughout the venue</h5><h5>Many universities and businesses are using large, green
recycling bins to encourage event goers to participate in recycling efforts. It's not feasible to require
attendees to turn in solid waste following an event. Some attendees would, but others would resist being
told what to do. Hiring a waste management company is a good technique to use; however, it's more
costly than providing recycling bins. Purchasing paper products that don't need to be recycled defeats the
whole purpose of encouraging recycling efforts.
</h5></div><h5 id='q58'>58. Which of the following is a security consideration for people employed in the hospitality and tourism
industry:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Unauthorized individuals found on the scene</option><option value="B">B. Patron choking on food</option><option value="C">C. Spilled water on a marble floor</option><option value="D">D. Patron calling back to determine whether an item is in lost and found

</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: Unauthorized individuals found on the scene</h5><h5>The presence of unauthorized people is a threat to the
security of patrons, employees, and to the hospitality and tourism business. Individuals responsible for
security will need to quickly determine the reason that the unauthorized people are present. Spilled water
and a choking patron are safety threats. A phone call about an item in lost and found is not a safety or
security issue.
</h5></div><h5 id='q59'>59. Rechargeable batteries are an example of what type of innovation?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Paradigm</option><option value="B">B. Product</option><option value="C">C. Convertible</option><option value="D">D. Categorical</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is B: Product</h5><h5>Product innovation takes place when a company creates a new product or redesigns an existing
product. Paradigm innovation takes place when the entire perception of a product, company, or industry
takes place. Convertible and categorical are not types of innovation.
</h5></div><h5 id='q60'>60. Paul is a 45-year-old manager of a large company who makes offensive, gender-related comments to
Elizabeth, a 28-year old buyer, who has been with the company for six months. Paul's behavior violates
Elizabeth's workplace rights because he is engaging in</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. sexual harassment.</option><option value="B">B. cultural supremacy.</option><option value="C">C. age discrimination.</option><option value="D">D. ethnocentrism.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: sexual harassment.</h5><h5>Sexual harassment is any unwelcomed sexual remarks, advances, conduct, or
requests. Employees have certain rights in the workplace, including the right to not be sexually harassed
by other employees and managers. The example is not age discrimination, cultural supremacy, or
ethnocentrism.
</h5></div><h5 id='q61'>61. Janice worked a as chef with an upscale restaurant for several years. She worked unusual and long
hours, including most holidays and weekends. Last year, she quit her job and started her own catering
business. Now, Janice has the ability to set her own schedule and take on only the events that she wants
to cater, so she can focus on other interests. In this situation, the advantage entrepreneurship provides
Janice is</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. flexibility.</option><option value="B">B. a higher income.</option><option value="C">C. the satisfaction of helping others.</option><option value="D">D. prestige.</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is A: flexibility.</h5><h5>People choose to open their own businesses for a variety of reasons. In Janice's situation, she
tired of working the long and unusual hours professional chefs must work. And, because she wants to
focus on other interests, catering gives her the flexibility to pursue those interests since she can select
the events she wants to work. There is not enough information in the example to determine if Janice's
entrepreneurial venture provides her with the satisfaction of helping others, a higher income, or the
desired prestige.
</h5></div><h5 id='q62'>62. Does the hospitality and tourism industry offer career opportunities for entrepreneurs?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Yes. Businesses in the hospitality and tourism industry are started with state funding.</option><option value="B">B. No. Businesses in the hospitality and tourism industry are franchises.</option><option value="C">C. No. Businesses in the hospitality and tourism industry are too large for start-up businesses.</option><option value="D">D. Yes. Businesses in the hospitality and tourism industry can start small and expand.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: Yes. Businesses in the hospitality and tourism industry can start small and expand.</h5><h5>There are lots of
opportunities for people to dream and actualize those dreams when they open their businesses. Not all
hospitality and tourism businesses start out as large companies—many are one-person operations and
are not part of a franchise. Most hospitality and tourism businesses are started with the owner's debt or
equity financing rather than with state funding.
</h5></div><h5 id='q63'>63. To determine if Ethan is interested in a career in the hospitality industry, he went to work with his aunt at
the Rolling Hills Golf Resort once a week last summer to observe how she spends her days. What
technique did Ethan use to learn about the industry?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. Service learning</option><option value="B">B. Paid internship</option><option value="C">C. Exploratory interview</option><option value="D">D. Job shadowing</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: Job shadowing</h5><h5>There are many opportunities for individuals to learn about careers. Job shadowing
involves observing an individual perform his/her daily job activities in the workplace. Internships are
training in which businesses provide on-the-job practice for learners. Internships are often coordinated
with schools and may be paid or unpaid, lasting a certain amount of time. An exploratory interview
involves asking an experienced businessperson questions about his/her career, field, or industry. Service
learning involves an organized volunteer effort associated with a specific school, community, or
organization.
</h5></div><h5 id='q64'>64. Which of the following actions is best for advancing in a hospitality and tourism career:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Bragging about your accomplishments to coworkers</option><option value="B">B. Downplaying compliments on your work</option><option value="C">C. Discussing business before orders are placed at business lunches</option><option value="D">D. Serving on committees outside your job description</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Serving on committees outside your job description</h5><h5>By volunteering to serve on committees not directly
related to your job description, you have the opportunity to keep your name in the minds of company
leaders. That will help them to think of you when opportunities arise. You should thank people for
compliments that you receive on your work rather than acting as if the work were no big deal. Etiquette is
important for business lunches. You should not discuss business until after people at the table have
placed their orders. Bragging to coworkers about your accomplishments can make them resent you.
Instead, send regular memos to your bosses to apprise them of the work you've accomplished.
</h5></div><h5 id='q65'>65. In what segment of the hospitality and tourism industry is destination marketing?</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Travel and tourism</option><option value="B">B. Assembly and event management</option><option value="C">C. Recreation</option><option value="D">D. Restaurants and managed services</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: Assembly and event management</h5><h5>Destination marketers “sell” locations to clients. In many cases,
destination marketers are trying to obtain convention or meeting business for a community. Other
segments in assembly and event management include convention and visitors bureaus and event
planning. The travel and tourism segment consists of air, cruise ships, online travel services, rail, bus,
car, and tourism. Recreation consists of attractions, gaming, theme parks, clubs, and recreational
activities. Restaurants and managed services include full-service restaurants; casual dining; dinner
house restaurants; and food operations for institutions, government agencies, airlines, and businesses.
</h5></div><h5 id='q66'>66. What factor determines the lowest price that would be charged for hospitality and tourism products?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Government regulation</option><option value="B">B. Demand</option><option value="C">C. Costs</option><option value="D">D. Consumer perceptions of value</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: Costs</h5><h5>To survive, businesses must cover their costs. Therefore, the lowest price is determined by the
businesses' costs. Demand, on the other hand, determines the high end of what businesses can charge.
Although government regulation and consumer perceptions of value are factors that impact prices, they
do not determine the limits of prices.
</h5></div><h5 id='q67'>67. With the upswing in the economy, a major discount hotel chain brainstormed ideas and interviewed a
variety of people to generate options for new products. A team determined that the best idea was to open
a chain of upscale hotels. The marketing department developed strategies to introduce the new hotel
chain. The corporate office created a prototype of the new hotel, opened it to a test market of guests, and
decided when, where, how, and to whom to market the hotel. Unfortunately, the new hotel chain failed.
What aspects of the new product-development process did the hotel chain fail to do?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Test marketing and commercialization</option><option value="B">B. Concept testing and business analysis</option><option value="C">C. Concept testing and commercialization</option><option value="D">D. </option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: Concept testing and business analysis</h5><h5>The hotel chain failed to test the concept of the upscale hotel
chain with its target consumers. If they had completed this phase in the new-product development
process, the corporate office might have determined that the size of the target market was inadequate,
the timing of the concept was inappropriate, etc. In any of these cases, the hotel chain could have saved
time and money by deciding not to move forward with the idea. Another phase that the corporate office
failed to complete was business analysis: projection of sales, costs, and profit. If this phase had been
completed, the corporate office could have determined that sales would be insufficient, costs would be
too high, and/or profit inadequate to support the new venture. The company actually built a hotel property
to conduct its test market. It also commercialized its product idea by deciding when, where, how, and to
whom to market the hotel.
</h5></div><h5 id='q68'>68. When people think of Disney World, they know that it's the happiest place on earth; a place where
dreams really do come true. The place that Disney World's image occupies in people's minds is known
as its</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. trade character.</option><option value="B">B. product position.</option><option value="C">C. brand identity.</option><option value="D">D. touch points.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: product position.</h5><h5>Disney has used its marketing skills to position the theme park as the happiest place on
earth and a place where dreams really do come true. Marketing activities, employee behavior, and the
entire Disney World environment are designed to support and reinforce that image in people's minds.
Touch points are the opportunities that Disney has to interact with its customers. Brand identity is the
name, symbols, characters, etc., that are used to identify Disney and its products. A trade character is a
person, animal, or animated character used in advertising and is associated with a product or company.
</h5></div><h5 id='q69'>69. Inventory at the Fondue Inn was $86,150 on April 1 and $66,550 on April 30. During the month, retail
sales were $350,000. What was the Fondue Inn's stock turnover at retail during April?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. 17.86</option><option value="B">B. .22</option><option value="C">C. 4.58</option><option value="D">D. .06</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: 4.58</h5><h5>To determine stock turnover at retail, you will first need to determine the average inventory for the
time period. To do this, add the beginning and ending inventory amounts and divide by 2 ($86,150 +
$66,550 ÷ 2 = $76,350). You then divide the average inventory into the retail sales for the time period to
obtain the stock turnover at retail ($350,000 ÷ $76,350 = 4.5842). The Fondue Inn sold the value of its
entire inventory 4.58 times during April.
</h5></div><h5 id='q70'>70. Claire booked a room at an inn in Charleston, SC. When she arrived, she parked her car in the onproperty parking garage. After checking in, she used the inn's check-cashing service and got restaurant
recommendations from the concierge. In the evening, Claire enjoyed the cookies and milk provided by
the inn. What is the supporting product in this scenario?</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. On-property parking garage</option><option value="B">B. Check-cashing service</option><option value="C">C. When she arrived, she parked her car in the onproperty parking garage. After checking in, she used the inn's check-cashing service and got restaurant
recommendations from the concierge. In the evening, Claire enjoyed the cookies and milk provided by
the inn. What is the supporting product in this scenario?
A. On-property parking garage
C. Cookies and milk</option><option value="D">D. Restaurant recommendations</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: When she arrived, she parked her car in the onproperty parking garage. After checking in, she used the inn's check-cashing service and got restaurant
recommendations from the concierge. In the evening, Claire enjoyed the cookies and milk provided by
the inn. What is the supporting product in this scenario?
A. On-property parking garage
C. Cookies and milk</h5><h5>Explanation not available</h5></div><h5 id='q71'>71. Which of the following is a service often offered by the travel and tourism sector (e.g., air, cruise, car,
tourism, online services, rail, and coach):</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Car repair</option><option value="B">B. Insurance</option><option value="C">C. Cookies and milk</option><option value="D">D. Medical checkups</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Insurance</h5><h5>Many travel and tourism businesses offer insurance to protect customers from a variety of
risks. Examples include insurance for cancelled, interrupted, or delayed trips; medical expenses; travel
accident protection; lost/stolen luggage; etc. Car repair, investment advice, and medical checkups are
outside the realm of frequently offered hospitality and tourism services.
</h5></div><h5 id='q72'>72. What technique should be used when evaluating multiple vendors' canned goods to ensure that the
evaluators provide unbiased reviews?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Can-cutting</option><option value="B">B. Blind testing</option><option value="C">C. Investment advice</option><option value="D">D. Sampling</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Blind testing</h5><h5>To evaluate multiple vendors' canned goods, restaurants can obtain input from crossfunctional teams of employees as well as guests. To avoid receiving biased input, use of blind testing is
recommended. With this technique, the food items are removed from their cans so that evaluators do not
know on which brand they are providing feedback. Can-cutting is an evaluation procedure in which
canned goods are opened and their contents compared. This does not ensure unbiased feedback,
however. Random access and sampling are research terms and do not apply to product evaluation.
</h5></div><h5 id='q73'>73. Which of the following best enables marketers to target specific groups of customers so that the
marketers can focus their promotional efforts to get the best results:</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Sales promotion</option><option value="B">B. Advertising</option><option value="C">C. Random access</option><option value="D">D. Direct marketing</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: Direct marketing</h5><h5>Retrieved February 7, 2011, from
http://www.ecornell.com/certificate-programs-community/hospitality-and-foodservicemanagement-training/hospitality-marketing-certificate/crt/SHAC10
13. A
The substitution effect. A change in relative prices that causes buyers to replace the purchase of one
product with another is a phenomenon called the substitution effect. In the example, Joseph decided that
he did not want to pay the increased amount for premium gasoline and opted to buy regular gasoline
instead because it was less expensive. A price ceiling is a maximum legal price that businesses can
charge for certain products. The market-clearing (equilibrium) price is the point at which the quantity of a
product that buyers want to buy is equal to the quantity that sellers are willing to sell at a certain price. A
buyer's market is the best time for consumers to buy, which usually occurs when there is a large supply,
small demand, and low prices.
</h5></div><h5 id='q74'>74. Which of the following is an advantage associated with RSS feeds:</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. They optimize search engine standings.</option><option value="B">B. They lack spam.</option><option value="C">C. Publicity</option><option value="D">D. They enable customization of web content.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: They lack spam.</h5><h5>RSS (Really Simple Syndication) enables businesses to syndicate content from its
website, rather than customizing it. Another advantage to RSS feeds is that they are easy to sign up for
and to unsubscribe from. They do not replace the need for web pages since that is what is being
syndicated. They do not optimize search engine standings.
</h5></div><h5 id='q75'>75. Which of the following is an example of how businesses are using advergaming:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Using pop-up ads on a competitor's website</option><option value="B">B. Showing a product being used in a movie scene</option><option value="C">C. They replace the need for web pages.</option><option value="D">D. Featuring products on billboards in online games</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: Featuring products on billboards in online games</h5><h5>Advergaming is an online video game that promotes a
product, brand, or company by incorporating it into the game. There are a variety of ways in which
businesses are using advergaming. One such way is by featuring products on billboards that show up
during the game. Another popular advergaming technique is to feature a company's mascot or symbol in
a game. Showing a product being used in a movie scene is an example of product placement. Running
advertisements during a national sports game is an expensive use of advertising. Competitors would not
grant permission to use pop-up ads on their websites.
</h5></div><h5 id='q76'>76. What technology should a travel agent use specifically to notify clients of web pages of interest?</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. HTML</option><option value="B">B. Social bookmarks</option><option value="C">C. Running advertisements during a national sports game</option><option value="D">D. Search engine optimization</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: Social bookmarks</h5><h5>Social bookmarks enable businesses to store, organize, search, share, and manage
web pages they find of interest. By tagging, or categorizing, websites or web pages, businesses can
share information with as many or as few customers as they'd like. Examples of social bookmarking sites
include Digg, StumbleUpon, Delicious, Reddit, Technorati, and many others. Although email could be
used to give this information to clients, it is not specific to this purpose. HTML, hypertext markup
language, is language used in developing websites. Search engine optimization, SEO, involves a variety
of techniques used to improve the rank of websites in search engines.
</h5></div><h5 id='q77'>77. Currently, which of the following mobile advertising strategies has been most successful:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Cross-platform campaign</option><option value="B">B. Rich media</option><option value="C">C. Email</option><option value="D">D. Banner ad campaign</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Email</h5><h5>Explanation not available</h5></div><h5 id='q78'>78. What is an example of a “black hat” search engine optimization (SEO) strategy?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. Filling a web page with irrelevant key words</option><option value="B">B. Publishing web content to make money</option><option value="C">C. Text message with coupon</option><option value="D">D. Pretending to be a trustworthy business to gain confidential information

</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: Filling a web page with irrelevant key words</h5><h5>Doing this helps to improve the ranking of the website in
search engines; however, customers are not obtaining anything of value. Ultimately, businesses sponsor
web sites to make money. Phishing is an illegal activity in which someone pretends to be a trustworthy
business so that s/he can obtain another person's confidential information. It is most often used through
email and instant messaging. To overcome phishing, some businesses are requiring their customers to
select a personal image that they display when they access password protected sites.
</h5></div><h5 id='q79'>79. What should a destination marketer put in the lower right-hand corner of an ad layout?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. White space</option><option value="B">B. Headline</option><option value="C">C. Displaying a personal image when accessing password protected sites</option><option value="D">D. Logo</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Logo</h5><h5>Readers in the U.S. and Canada generally read from left to right and top to bottom. Putting the
logo in the bottom right-hand corner of an advertising layout makes the logo the last element of the ad
that the reader sees and makes it the most likely element to be remembered. Headlines generally appear
towards the top of advertising layouts to attract attention. White space is blank space that is good to use
in advertising layouts to unify the elements of an advertisement and to attract attention. The illustration is
used to attract attention and helps to lead the reader into the headline and copy.
</h5></div><h5 id='q80'>80. The marketing director at the corporate office of a hotel chain asked one of the company's graphic artists
to create a pencil rendering of a special event hosted by the hotel. To show texture in the drawing, the
graphic artist should use</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. shading.</option><option value="B">B. crosshatching.</option><option value="C">C. Illustration</option><option value="D">D. sketching.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is B: crosshatching.</h5><h5>By crisscrossing lines, the graphic artist could depict texture. Shading is used to show
shadows, while highlighting is used to put light on objects. Sketching is the process of drawing quickly.
</h5></div><h5 id='q81'>81. When reviewing color proofs of an upcoming magazine advertisement for an island resort, the resort's
marketing communications specialist felt that the ad's colors weren't very noticeable. Which of the
following probably caused that problem:</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Saturated hues appeared far from each other.</option><option value="B">B. Lighter versus darker colors were used.</option><option value="C">C. highlighting.</option><option value="D">D. There was little difference in hues.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: There was little difference in hues.</h5><h5>As colors get closer to gray, closer in hue, and equal in shade, they
are less noticeable. Color contrast occurs when lighter, saturated colors are used. When saturated hues
are separated from each other, the colors are noticeable. It's when they're next to each other that they
become more difficult to discern.
</h5></div><h5 id='q82'>82. Why is the audience a key factor to consider when developing viral marketing campaigns?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. They identify the time of day that the marketing campaign is to run on the Internet.</option><option value="B">B. They determine the type of product to give away.</option><option value="C">C. Saturated versus desaturated hues were used.</option><option value="D">D. They designate the theme of the viral marketing campaign.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: Saturated versus desaturated hues were used.</h5><h5>Explanation not available</h5></div><h5 id='q83'>83. Which of the following is used most often to obtain customer referrals:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Discounts</option><option value="B">B. Free product</option><option value="C">C. They signal the type of Internet medium that best reaches the audience.</option><option value="D">D. Job interviews</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is A: Discounts</h5><h5>Often, offering customers incentives for referrals encourages them to provide the name and
contact information of their friends and associates. The incentives offered are generally small so that the
salesperson doesn't “go broke” from providing them. Free product and trips would generally fall into the
category of being too costly for the salesperson. Job interviews are not tied to customer referral
programs.
</h5></div><h5 id='q84'>84. In a movie that's about to be released, the main actors stop their car in front of a billboard for
InterContinental Hotels. For the audience, this is an example of</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. special events.</option><option value="B">B. out-of-home advertising.</option><option value="C">C. Trips</option><option value="D">D. product placement.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: product placement.</h5><h5>Running
advertisements during a national sports game is an expensive use of advertising. Competitors would not
grant permission to use pop-up ads on their websites.
</h5></div><h5 id='q85'>85. What should you do to write effective direct marketing copy?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Send readers to the company's Facebook page to obtain the order form</option><option value="B">B. Introduce the call to action early in the material</option><option value="C">C. personal selling.</option><option value="D">D. Make incredible claims to hook readers into finishing the material</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is B: Introduce the call to action early in the material</h5><h5>When readers are skimming through direct marketing
materials, they often stop reading before getting to the end of the material. Therefore, writers shouldn't
wait until the end of the material to mention the call to action. Naturally, it should be repeated and could
be included in the P.S. of the material. Writers want to set their products off from those of the competitors
so that readers clearly understand what makes their products the best buy. Writers want to make the call
to action as simple as possible for readers rather than sending them to another location to obtain an
order form. Incredible claims can damage the company's image. Claims need to be credible.
</h5></div><h5 id='q86'>86. Which of the following is a characteristic of effective Internet ad copy:</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. Inclusive by addressing the copy as "we" and "us"</option><option value="B">B. Detailed so that the copy answers all possible customer questions</option><option value="C">C. Tell readers how your product is like those of your competitors</option><option value="D">D. Bulleted content to facilitate skimming and understanding</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bulleted content to facilitate skimming and understanding</h5><h5>When people read Internet ad copy, they
generally skim content rather than reading ads in-depth or looking for detailed copy. The ad copy should
be emotional to gain the readers' interest. Rather than talking about “we,” the writer should direct the
copy to “you.”
</h5></div><h5 id='q87'>87. Over the years, the Mayberry Theme Park has worked to develop its image as a safe place for kids. So,
which of the following community issues should you propose to an amusement park's public relations
director:</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. An evening for fifth graders while their parents shop at the mall</option><option value="B">B. A block party for the surrounding neighborhood that will be held after the park closes at midnight</option><option value="C">C. Non-emotional to keep from upsetting the readers</option><option value="D">D. A wine-tasting event whose funds will support the local community college

</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: An evening for fifth graders while their parents shop at the mall</h5><h5>This topic ties into the image of the park
being a safe place for kids. It will appeal to both fifth graders who ask to go to the theme park as well as
to their parents who pay for the theme-park visits. A midnight block party would be too late for children to
participate. An ESL workshop and wine-tasting do not relate to the park's image of a safe place for kids.
</h5></div><h5 id='q88'>88. Best Buy chose to sponsor free evening classes for community members to teach them how to efficiently
use a new operating system on PCs. What is the most logical reason for Best Buy's choosing this
community outreach activity?</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. The activity contributes to the company's mission.</option><option value="B">B. Best Buy has exclusive distribution rights to the operating system.</option><option value="C">C. A workshop to teach English to the community's non-English speaking new residents</option><option value="D">D. The activity closely relates to products it offers.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is D: The activity closely relates to products it offers.</h5><h5>Some of Best Buy's employees are computer savvy, so
teaching community members about using the new operating system would be a logical choice for a
community outreach activity. This helps Best Buy's employees develop relationships with community
members that go beyond “making the sale,” and will hopefully translate into sales in the long term.
Although Best Buy is a large national chain, it would not have exclusive distribution rights to the operating
system. Since the workshop was free, Best Buy was not making any profit on the workshops. There is no
way for us to determine whether the activity contributes to the company's mission.
</h5></div><h5 id='q89'>89. Which of the following activities occurs during the planning phase of the website development process:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Determining how to take orders</option><option value="B">B. Writing easy-to-understand copy</option><option value="C">C. Best Buy can share its workshop profits with local schools.</option><option value="D">D. Ensuring compatibility of website with browsers</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: Determining how to take orders</h5><h5>During the planning phase of the website development process, the
developer is making decisions that will impact the website's design. Deciding whether and how to take
orders is one of those initial decisions that needs to occur. Writing copy, designing page layout, and
ensuring compatibility of the website with browsers occur during the design phase of the process.
</h5></div><h5 id='q90'>90. Which of the following is an essential element in a press kit:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Coupons for journalists</option><option value="B">B. Compilation of press releases</option><option value="C">C. Designing the page layout</option><option value="D">D. Copy of CEO's last speech</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Compilation of press releases</h5><h5>A compilation of press releases gives an overview of important activities
that have recently occurred at the company. This might include new product releases, hiring of a key staff
member, philanthropic activities in which the business has engaged, etc. A permission to print form is not
needed since the goal of the press kit is to get information published. Providing coupons and a copy of
the CEO's latest speech could be included in the press kit; however, they are not as critical as the press
releases.
</h5></div><h5 id='q91'>91. What activity should occur first when planning a special event?</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Brainstorming</option><option value="B">B. Scheduling</option><option value="C">C. Permission to print form</option><option value="D">D. Budgeting</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: Brainstorming</h5><h5>When planning special events, the event planners should brainstorm ideas to identify
events that would be of interest to the target audience. Once the idea for the special event is identified,
the event planners can move forward with budgeting, scheduling, and shopping.
</h5></div><h5 id='q92'>92. Why should a marketing specialist at a convention and visitors bureau want to track its promotional
activities?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. To determine the best ticket price to offer</option><option value="B">B. To determine their impact on sales</option><option value="C">C. Shopping</option><option value="D">D. To determine the best time for shows to begin</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: To determine their impact on sales</h5><h5>The marketing specialist needs to establish a baseline number on
whatever s/he wants to measure. And then, s/he needs to determine increases and decreases in that
baseline number when promotional activities appear. Ticket prices, target market, and show times would
not be impacted by promotional activities.
</h5></div><h5 id='q93'>93. When customers buy menu items at McDonalds' Restaurants, they are given Monopoly pieces for the
chance to win prizes. What type of promotional technique is that?</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Publicity</option><option value="B">B. Transit advertising</option><option value="C">C. To determine its target market</option><option value="D">D. Sales promotion</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sales promotion</h5><h5>The restaurant is using a new channel, its website, to offer its
baked goods to customers. To attract traffic to the website, the marketing communications director used
publicity when appearing on the talk show and sales promotion by offering incentives. The website had to
function properly to accommodate the sales volume generated by the incentives. Marketing-information
management deals with gathering, accessing, synthesizing, evaluating, and disseminating information for
use in making business decisions. Product/service management involves obtaining, developing,
maintaining, and improving a product or service mix in response to market opportunities. In this scenario,
the product mix has not been changed.
</h5></div><h5 id='q94'>94. The marketing director of the Columbus Zoo and Aquarium selected the Halloween theme of “Boo at the
Zoo” for this year's special event. What display techniques would be the best to use in the zoo's gift shop
to support that theme?</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Showcase stuffed animals surrounding a papier mâché witch on a broom stick</option><option value="B">B. Place photos of the zoo animals at varying heights throughout the gift shop</option><option value="C">C. Personal selling</option><option value="D">D. Suspend the word “BOO” from the ceiling throughout the gift shop</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Showcase stuffed animals surrounding a papier mâché witch on a broom stick</h5><h5>Good displays feature the
product that is for sale. Using the papier mâché witch reinforces the “Boo at the Zoo” theme. The other
alternatives do not feature products. Placing photos of the zoo animals at varying heights throughout the
gift shop fails to tie the decorations into the special theme.
</h5></div><h5 id='q95'>95. The wait staff recommends dessert items to restaurant customers. This is an example of</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. trading up.</option><option value="B">B. closing the sale.</option><option value="C">C. Turn the gift shop into a haunted house with scary noises created by zoo animals</option><option value="D">D. overcoming objections.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: Turn the gift shop into a haunted house with scary noises created by zoo animals</h5><h5>Explanation not available</h5></div><h5 id='q96'>96. Car rental agents usually suggest that customers rent a larger car than the one requested online. This
technique is known as</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. substitute selling.</option><option value="B">B. upselling.</option><option value="C">C. suggestion selling.</option><option value="D">D. outsourcing.</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: upselling.</h5><h5>When car rental agents suggest that customers rent more expensive vehicles than the ones
they signed up for online, the agents are using a sales technique known as upselling. This helps to
increase the amount of the sale. Substitute selling occurs when the requested item is not in stock or does
not meet the customer's needs. Suggestion selling involves recommending an additional item to
accompany the original purchase. Outsourcing involves the use of a third party to handle tasks that the
company used to handle internally.
</h5></div><h5 id='q97'>97. To celebrate their 10th wedding anniversary in February, a husband and wife are planning a trip to a
tropical island so that they can relax and get away from the hassles of everyday life. What motives are
they satisfying?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Self-actualization</option><option value="B">B. Physiological</option><option value="C">C. suggestion selling.</option><option value="D">D. Safety and security

</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: Physiological</h5><h5>When people travel for the purpose of relaxation, they are satisfying their physiological
needs. These are basic needs that people have, such as the need for food, water, and sleep. With selfactualization needs, people would travel to develop their full potential. Self-esteem needs are met when
people travel for self-respect and the respect of other people. Safety and security needs are being met
when people travel for personal security and for a source of income.
</h5></div><h5 id='q98'>98. Which of the following are cruise-ship services that you should recommend to a bachelor and his wheelchair bound mother:</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Raft ride over river rapids</option><option value="B">B. Onboard fitness center</option><option value="C">C. Self-esteem</option><option value="D">D. Horseback riding along the beach</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: Self-esteem</h5><h5>Explanation not available</h5></div><h5 id='q99'>99. When transferring phone calls, why should you give the extension number of the person to whom the call
is being forwarded?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. To minimize the number of incoming calls</option><option value="B">B. To make it more convenient for the caller to contact the person in the future</option><option value="C">C. Onboard cooking demonstration</option><option value="D">D. To keep the caller from hanging up</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is B: To make it more convenient for the caller to contact the person in the future</h5><h5>This helps to save the
caller's time and makes calling more efficient. Also, if the caller loses her/his connection, it helps in
calling back. Giving a caller a person's extension number will not affect the number of incoming calls.
Callers do not hang up when they are given a person's extension number nor should they think that
calling at any time is acceptable.
</h5></div><h5 id='q100'>100. Which of the following statements supports the concept of cultural individualism:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Middle-Eastern cultures tend to emphasize strict gender roles rather than diversity.</option><option value="B">B. The Latin American culture tends to view time in a more relaxed manner than other cultures.</option><option value="C">C. The Chinese culture values group decision making and a “we're in this together” attitude.</option><option value="D">D. Western cultures embrace the idea that working hard will reap personal rewards and fulfillment.

</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is D: Western cultures embrace the idea that working hard will reap personal rewards and fulfillment.

</h5><h5>Explanation not available</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Hospitality_9_Whole_Homework.js"></script></html>