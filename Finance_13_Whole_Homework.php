<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 13</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. A contract is unenforceable if it</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. violates a statute.</option><option value="B">B. is unilateral.

1
</option><option value="C">C. requires collateral.</option><option value="D">D. contains stipulations.
</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is A: violates a statute.</h5><h5>If the contract involves carrying out illegal activities, the contract is unenforceable
because it requires one or both parties to break laws. Unilateral contracts are contracts that involve
promises made by one party. Collateral is anything of value belonging to the borrower that is pledged to
the lender to guarantee that the loan (contract) will be repaid. A stipulation is a restriction or circumstance
that one party requires the other party to agree to. Unilateral contracts and contracts that require
collateral or other stipulations are legal if the contract meets all of the features of legal contracts
(agreement, consideration, capacity, genuineness of assent, and legality of purpose).
</h5></div><h5 id='q2'>2. Jack is a senior executive at the Farkle Corporation. He recently told his sister that Farkle is getting ready
to declare bankruptcy. However, Farkle doesn't plan to announce this news to its general shareholders
until next week. If Jack's sister sells her shares of Farkle before the public learns about the bankruptcy,
Jack and his sister could be prosecuted for</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. affinity fraud.</option><option value="B">B. accounting fraud.</option><option value="C">C. insider trading.</option><option value="D">D. market capitalization.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: insider trading.</h5><h5>If a corporate “insider” such as an owner, director, or high-level manager shares
confidential company information with someone who then buys or sells the company's stock as a result of
this knowledge, illegal insider trading occurs. Insider trading is not always illegal, though. Legal insider
trading takes place when corporate insiders buy or sell their own company's securities and report the
trades to the SEC. Accounting fraud occurs when a company or organization knowingly publishes
incorrect information on its financial statements. Affinity fraud, often in the form of a Ponzi or pyramid
scheme, is an investment scam in which the scammer claims to be a member of the group s/he is
targeting. Market capitalization is an indicator of the size of a public company as measured by the total
dollar value of its stock.
</h5></div><h5 id='q3'>3. Chris purchased 500 shares of microcap HRR stock. Then, he posted false information about HRR on
several investment web sites to "hype up" the stock. After driving up the price of HRR stock, Chris quickly
sold all of his stock in the company and earned a large profit. The price of the stock then fell, leaving
HRR investors with worthless stock. What type of investment scam did Chris commit?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. Pump and dump</option><option value="B">B. Pyramid scheme</option><option value="C">C. Ponzi scheme</option><option value="D">D. Phishing</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: Pump and dump</h5><h5>Pump and dump is an investment scam that takes place mostly online. It typically
involves scammers who buy a small stock and then hype it up to other investors, causing its price to rise.
The scammers sell when the price is high, leaving the victims to deal with the rapid price decline
afterwards. A pyramid scheme is an illegal form of multi-level marketing in which emphasis is placed on
collecting initial fees from as many people as possible. A Ponzi scheme is an investment scam that lures
in new investors by promising high rates of return with little to no risk. Phishing is an online identity-theft
scam that fools its victims into believing they are submitting sensitive, personal information (such as
credit card numbers or bank passwords) to a legitimate web site.
</h5></div><h5 id='q4'>4. Which of the following is commonly used to reduce an investor's capital gains tax burden:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Value stocks</option><option value="B">B. Short-term investments</option><option value="C">C. Puttable bonds</option><option value="D">D. Capital losses</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is D: Capital losses</h5><h5>An investor's capital gains are her/his earnings from the appreciation of investments. Most
federal governments collect taxes from investors on these capital gains. One way to reduce an investor's
capital gains tax burden is to subtract his/her capital losses (money that s/he has lost from the
depreciation of investments) from the capital gains. S/He would only pay taxes on the difference, if it is
positive. If her/his capital losses are greater than the capital gains, then s/he wouldn't pay any capital
gains tax at all. Long-term, rather than short-term, investments help investors to reduce their capital gains
tax burden, especially in the United States where long-term capital gains are taxed at a lower rate than
short-term capital gains. Puttable bonds and value stocks typically have no impact on an investor's
capital gains taxes.
</h5></div><h5 id='q5'>5. In addition to ensuring that the company is adhering to all rules and regulations affecting business
operations, what else is a chief compliance officer often responsible for doing?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Evaluating the company's different channels of distribution</option><option value="B">B. Investigating possible conflicts of interest within the company</option><option value="C">C. Determining the company's point of diminishing returns</option><option value="D">D. Preparing and submitting the company's financial statements</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is B: Investigating possible conflicts of interest within the company</h5><h5>The chief compliance officer is responsible
for developing policies and procedures that ensure that her/his company is adhering to all rules and
regulations affecting business operations. In addition, s/he is often in charge of investigating and
managing conflicts of interest within the company. These conflicts of interest might arise between the
business and its customers, among the business's customers, or among business functions. Such
conflicts of interest have the potential to interfere with the business's compliance with organizational,
industry, and government regulations. Members of the business's marketing department are likely to
evaluate the company's different channels of distribution. Operations management determines the
company's point of diminishing returns, possibly with the accounting or finance department's assistance.
The accounting department prepares and submits the company's financial statements to interested
parties such as the SEC.
</h5></div><h5 id='q6'>6. To evaluate the effectiveness of their compliance programs, many businesses conduct</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. direct trading.</option><option value="B">B. training sessions.</option><option value="C">C. marketing research.</option><option value="D">D. internal audits.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is D: internal audits.</h5><h5>Many businesses conduct independent internal audits to evaluate the effectiveness of
their compliance programs. Internal auditors are typically company employees who are responsible for
reviewing such things as reports, policies, procedures, training, and corrective actions to determine if the
company's compliance function is working properly. In essence, internal auditors conduct investigations
to find out if the compliance program is successfully ensuring that the firm and its employees are
following all rules and regulations impacting business operations. While it is important to stress
compliance during training, employee training sessions are not used to evaluate the effectiveness of a
business's compliance program. Marketing research and direct trading are typically not related to internal
audits or compliance programs in general.
</h5></div><h5 id='q7'>7. What virtual-auditor reasoning technique is most likely to detect segregation of duties violations?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Incremental</option><option value="B">B. Symbolic</option><option value="C">C. Temporal</option><option value="D">D. Cross-source</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is B: Symbolic</h5><h5>One form of compliance technology is the virtual auditor, a computer application that monitors
financial transactions continuously to detect and analyze compliance violations. The virtual auditor uses
multiple reasoning techniques, including symbolic, incremental, temporal, cross-source, contextual, and
comparative, to identify these violations. Symbolic reasoning, which is based on the experiences and
expertise of actual internal auditors and fraud investigators, involves examining patterns of events and
looking for common signs of questionable activities. Compliance violations that symbolic reasoning is
likely to detect are segregation of duties violations and general ledger errors. Incremental reasoning
examines situations in which multiple questionable events seem to build on each other, leading to a
potentially significant compliance violation. Temporal reasoning considers the timing of an event or
transaction when determining questionable activities. Cross-source reasoning involves looking at data in
multiple financial systems to detect anomalies and potential compliance violations.
</h5></div><h5 id='q8'>8. To be most effective, continuous-inspection compliance technology should have access to transactional
information</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. liquidity ratios.</option><option value="B">B. biweekly.</option><option value="C">C. samples.</option><option value="D">D. at its source.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is D: at its source.</h5><h5>To prevent an intermediary from tampering with transactional data, continuous-inspection
compliance technology such as a virtual auditor must have access to the information at its source.
Because continuous-inspection technology works continually to identify errors and violations, it needs
access to transactional information as the transactions actually occur, not biweekly. Rather than
reviewing samples of transactional information to verify compliance, the technology must have access to
all transactional data. Liquidity ratios are not relevant to a conversation about continuous-inspection
compliance technology.
</h5></div><h5 id='q9'>9. It is important for employees to apply written directions in the order they are presented to</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. prioritize daily tasks.</option><option value="B">B. correct mistakes.</option><option value="C">C. perform tasks properly.</option><option value="D">D. formulate plans.</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: perform tasks properly.</h5><h5>If employees do not read the directions and apply them in the proper sequence,
they may perform the tasks incorrectly. If employees perform tasks incorrectly, they may be required to
go back and correct their mistakes, which cost the company time and money. Applying written directions
in the order they are presented does not help employees prioritize daily tasks or formulate plans.
</h5></div><h5 id='q10'>10. After a presentation about safety, robbery, and theft issues in the community's business district, Jeff
asked the speaker, “Did you say that the crime rate in the area decreased by 10 percent or 15 percent
last year?” What type of question did Jeff ask?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. An open-ended question to obtain the speaker's personal opinion about an issue</option><option value="B">B. A relevant question to clarify information that the speaker had provided</option><option value="C">C. A follow-up question that had little to do with the topic at hand</option><option value="D">D. A reflective question that required the speaker to carefully word his/her response</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is B: A relevant question to clarify information that the speaker had provided</h5><h5>Jeff asked the speaker to clarify
a fact that was stated during the presentation. The question was about the area's crime rate, which was
relevant to the topic at hand. Jeff's question was a close-ended inquiry because it required the message
recipient to provide a response in one of two ways—10 percent or 15 percent. The question was not
reflective in nature, so the message recipient did not need to put a lot of thought into or carefully word
his/her response. A follow-up question is a question asked to clarify a previous question. There is not
enough information provided to determine if Jeff previously asked a question.
</h5></div><h5 id='q11'>11. Which of the following visual aids is often used to clearly illustrate company's sales by region:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Geographical map</option><option value="B">B. Organizational chart</option><option value="C">C. Flowchart</option><option value="D">D. Venn diagram</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is A: Geographical map</h5><h5>Graphics typically add interest and make information easier to understand. Maps are
often appropriate graphics to use when the topic at hand relates to geographical regions. Each region
depicted on the map may be color-coded by the range of sales generated to support and clarify the sales
data presented in a report. A flowchart presents a visual depiction of activities or processes in sequential
order. An example of a flowchart is an organizational chart, which depicts the hierarchy of positions and
departments within an organization. A Venn diagram indicates the overlapping relationships among finite
sets of data.
</h5></div><h5 id='q12'>12. Luke is writing a complex report that will be submitted to the company's board of directors. He has
collected relevant information that he would like to provide to the audience—information that is not
necessary to include in the body of the report. In what section of the report should Luke include this
supplemental information?</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Executive summary</option><option value="B">B. Bibliography</option><option value="C">C. Appendix</option><option value="D">D. Table of contents</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: Appendix</h5><h5>Supplemental information for long or complex reports is presented in an appendix, which is a
separate section placed at the end of a report. The information in the appendix might contain graphs,
text, or a combination of both elements. A bibliography is a component of a report that summarizes the
information sources that the writer used to prepare the report. An executive summary is an overview of
the entire report. The table of contents is the portion of a long report in which the sections are listed with
their page numbers.
</h5></div><h5 id='q13'>13. During a staff meeting, Lindsay started to ask Tom a question while he was presenting his report. What
did Lindsay do wrong?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. She strayed from the topic at hand.</option><option value="B">B. She expressed an opinion.</option><option value="C">C. She used distracting gestures.</option><option value="D">D. She interrupted the speaker.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: She interrupted the speaker.</h5><h5>Because it is rude to interrupt another person while s/he is speaking,
Lindsay should have waited until Tom was finished speaking before asking a question. In many
meetings, the leader or speaker will ask the participants if they have questions, so it would be appropriate
to ask for clarification at that time. There is not enough information provided to determine if Lindsay
expressed an opinion, asked a question irrelevant to the topic at hand, or used distracting gestures.
</h5></div><h5 id='q14'>14. When Mr. Schwarz's order did not arrive at the expected time, he called Karl, the salesperson with whom
he had placed his order. Karl apologized for the delay and told Mr. Schwarz that he would check into the
issue. After Karl talked with the transportation company, he immediately called Mr. Schwarz to let him
know where the order was and when to expect delivery. Mr. Schwarz thanked Karl for getting back with
him so quickly. In this situation, Karl reinforced the company's image by</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. giving vague answers.</option><option value="B">B. providing efficient follow-up.</option><option value="C">C. delegating work tasks.</option><option value="D">D. complimenting the customer.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: providing efficient follow-up.</h5><h5>Customers often base their impressions of a business on the interactions
they have with the business's employees. In the situation provided, Karl worked quickly to find out the
status of the order and immediately called Mr. Schwarz with specific information about where the order
was and when to expect delivery. This is an example of efficient follow-up. By providing efficient service,
Karl is building favorable relationships with customers. There is not enough information provided to
determine if Karl delegated work tasks to facilitate his follow-up activities or if he complimented Mr.
Schwarz.
</h5></div><h5 id='q15'>15. The advantage to businesses that use mobile-application technology is that their salespeople can obtain
and send customer information from their</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. fax machines.</option><option value="B">B. autoresponders.</option><option value="C">C. data banks.</option><option value="D">D. smartphones.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is D: smartphones.</h5><h5>Smartphones are quickly becoming a critical business tool for customer relationship
management. The devices not only include cellular telephone capabilities, but also a variety of computer
applications, including Internet access. Businesspeople can call customers from remote locations, check
e-mail, verify inventory levels, and place orders from smartphones. In many situations, smartphones
reduce the need to carry laptops and tablet computers because many of the applications that
salespeople need to conduct business are on these devices. Businesses can also send promotional
messages to their customers' smartphones. Autoresponder applications provide e-mail recipients the
ability to send automatic messages back to the message sender (e.g., out-of-office announcements).
Data banks and fax machines are not forms of mobile-application technology.
</h5></div><h5 id='q16'>16. Before recommending specific products or services to clients, what should a finance professional do?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Place a stop or buy order</option><option value="B">B. Develop a proxy statement</option><option value="C">C. Conduct a needs analysis</option><option value="D">D. Conduct dollar cost averaging</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Conduct a needs analysis</h5><h5>Before recommending a specific product or service to his/her client, a finance
professional should conduct a needs analysis. In other words, as an ethical finance professional, s/he
should first determine what the client truly desires or requires and then select products and services that
will meet the client's wants and needs. A finance professional would not develop a proxy statement,
place a stop or buy order, or conduct dollar cost averaging before recommending specific products or
services to clients.
</h5></div><h5 id='q17'>17. What is the most common reason for a client to leave or fire his/her financial advisor?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Poor investment return</option><option value="B">B. Lack of communication</option><option value="C">C. High commission fees</option><option value="D">D. Location of the office</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: Lack of communication</h5><h5>Although a poor investment return, high commission fees, or the geographic
location of the financial advisor's office may influence a client's decision to leave the advisor, the most
common reason given for firing a financial advisor is a lack of communication. Above all else, financial
clients expect—and need—their advisors to communicate on a regular basis. This means returning the
clients' phone calls as soon as possible, replying quickly to their e-mails, and contacting them regularly to
discuss their accounts and answer any questions that they might have.
</h5></div><h5 id='q18'>18. What customer-relationship-management analytic would be most suitable for sorting clients based on
how likely they are to repurchase a particular product?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Profitability analysis</option><option value="B">B. Account personalization</option><option value="C">C. Event monitoring</option><option value="D">D. Customer segmentation</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: Customer segmentation</h5><h5>Customer-relationship-management (CRM) analytics can be used to analyze
and evaluate customer data in many different ways. For example, a business can use CRM technology to
segment its customers into groupings based on each client's likelihood of purchasing or repurchasing a
particular product. Personalization allows a business to market to specific customers based on data in
the CRM system. Event monitoring helps businesses to identify when a customer reaches a specific
dollar amount of purchasing or requests an excessive number of refunds. Profitability analysis helps
businesses to identify their most profitable customers.
</h5></div><h5 id='q19'>19. Kaleb is removing duplicate records from his company's customer-relationship-management system.
Kaleb is conducting</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. exploratory research.</option><option value="B">B. environmental scanning.</option><option value="C">C. technical analysis.</option><option value="D">D. data cleansing.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is D: data cleansing.</h5><h5>If the data contained in a business's customer-relationship-management (CRM) system
is incorrect, out-of-date, duplicated, or unformatted, the value and effectiveness of the CRM system is
potentially compromised. Therefore, it is in the business's best interest to cleanse the data in its system
on a regular—or even continual—basis. The correction, removal, and/or formatting of questionable
customer records is called data cleansing. Environmental scanning involves collecting information about
the environment surrounding a business. Technical analysis involves using historical information from
market activity, prices, and volume to evaluate securities and predict future price activity. Exploratory
research is a form of marketing research used to collect information that will help the business define its
issue, situation, or concern and decide which direction to go in to address it.
</h5></div><h5 id='q20'>20. Jacob will not sell the oak desk that he made for anything less than $235. This is an example of the
___________ price.</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. demand</option><option value="B">B. supply</option><option value="C">C. equilibrium</option><option value="D">D. market</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: supply</h5><h5>The supply price is the minimum price that producers are willing and able to receive for a
product. The demand price is the maximum price that buyers are able and willing to pay for the product.
The market price is the actual price that prevails in a market at any particular time—the price that you
actually pay for a service or good. The equilibrium price occurs when the quantity of a product that
buyers want to buy is equal to the quantity that sellers are willing to sell at a certain price.
</h5></div><h5 id='q21'>21. Which of the following is an example of a business involved in offshoring activities:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. BVC Corporation and Tyrone Industries combine their resources to open a new company in
Belgium.</option><option value="B">B. DigiTech moves its production facility from Los Angeles, California to Jaipur, India to cut costs.</option><option value="C">C. Canadian-based Randall Enterprises purchases an existing firm that is located in Venezuela.</option><option value="D">D. A German-based company operates offices in several countries including Japan, South Africa,
and Australia.

2012 HS ICDC

FINANCE CLUSTER EXAM

3
</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: DigiTech moves its production facility from Los Angeles, California to Jaipur, India to cut costs.</h5><h5>Explanation not available</h5></div><h5 id='q22'>22. When the government requires businesses to pay their employees a minimum hourly wage for the tasks
they perform, it is</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. regulating workplace conditions.</option><option value="B">B. protecting business property.</option><option value="C">C. conserving the environment.</option><option value="D">D. providing public welfare programs.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: regulating workplace conditions.</h5><h5>Governments pass and enforce laws to protect consumers, businesses,
and other resources. Many of these laws address business practices. When the government requires
businesses to pay their employees a minimum hourly wage, it is regulating workplace conditions.
Minimum-wage laws protect workers because they are legally guaranteed a “living wage,” which is a
minimal amount of money needed to meet basic survival needs. To protect the business's property,
including its products and ideas, the government issues trademarks, patents, and copyrights. The
government passes and enforces environmental laws to protect and conserve our natural resources such
as water, air, botanical life, and wildlife from the potentially unhealthy and unsafe outcomes of production
processes. Government provides public welfare programs to assist people who are unable to provide for
themselves.
</h5></div><h5 id='q23'>23. Consumer spending is most likely to increase when</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. the government tightens the money supply.</option><option value="B">B. manufacturers scale back their production.
</option><option value="C">C. businesses expand and hire additional staff.</option><option value="D">D. unemployment rates begin to increase.
</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is C: businesses expand and hire additional staff.</h5><h5>When businesses expand and hire workers, the workers
(consumers) have income to spend. Manufacturers usually scale back their production when consumers
are not spending money to buy their products. When production decreases, businesses are more likely to
lay off employees, which usually cause the unemployment rate to increase. And, when people are not
working, they do not have money to spend. When the money supply is tight, there is less money in
circulation and consumer spending tends to decrease.
</h5></div><h5 id='q24'>24. Which of the following is a characteristic of a society that has a low tolerance of uncertainty:</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Engages in high risk taking</option><option value="B">B. Embraces differing opinions</option><option value="C">C. Values individual accomplishments</option><option value="D">D. Prefers rules and structure</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: Prefers rules and structure</h5><h5>Members of uncertainty-avoidance cultures prefer structure, rules, safety,
and low risk taking. Cultures that have a high tolerance of uncertainty are open to differing opinions.
Individualist societies expect members to take care of themselves and value individual accomplishments.
</h5></div><h5 id='q25'>25. Assessing your personal strengths and weaknesses in an objective way involves</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. working to improve most of your weaknesses at one time.</option><option value="B">B. basing a strength or weakness on one isolated incident.</option><option value="C">C. comparing your attributes with others' skills and talents.</option><option value="D">D. looking for behavior patterns that occur regularly over time.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is D: looking for behavior patterns that occur regularly over time.</h5><h5>By assessing your personal strengths and
weaknesses, you can apply your talents where they are best used and select a career in which you are
most likely to be successful. A successful assessment of your strengths and weaknesses requires being
aware of your behavior patterns over time. By being aware of your behavior patterns, you can determine
the things that you do well and things that you want to improve. When assessing your personal strengths
and weaknesses, avoid making false generalizations about yourself, which is basing your idea of a
personal strength or weakness on one isolated incident. And, because everyone is different, avoid
comparing yourself to others. After identifying the weaknesses that you want to work on, try improving
one weakness at a time. Taking on too many changes at once can be very frustrating.
</h5></div><h5 id='q26'>26. Lara arrived at work on Tuesday to cover Martin's shift, just as she had promised she would. In terms of
ethical work habits, Lara demonstrated that she is</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. productive.</option><option value="B">B. empathic.</option><option value="C">C. reliable.</option><option value="D">D. resourceful.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: reliable.</h5><h5>Reliable people follow through on their promises—they do what they say they will do. Because
Lara arrived at work when she said she would, she is showing her employer that she is reliable. Empathy
is the ability to put yourself in another person's place. A person who is productive completes the required
tasks correctly and efficiently. A resourceful person has the ability to act imaginatively when new ideas or
solutions are required. There is not enough information provided to determine if Lara is an empathic,
productive, or resourceful person.
</h5></div><h5 id='q27'>27. During a negotiation, Dexter said, “Debra, our companies need to reach agreement on the contract terms
by next Tuesday, or we will need to find another supplier. Our project is already three weeks behind.”
What negotiation tactic is Dexter using?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Deadline driven</option><option value="B">B. Limited authority</option><option value="C">C. Bargaining</option><option value="D">D. Good cop/Bad cop</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is A: Deadline driven</h5><h5>There are several negotiating strategies, and some are more effective than others in
certain situations. The deadline-driven strategy involves one party giving the other party a time limit to
take action. In the situation provided, Dexter communicates a deadline—next Tuesday. Limited authority
is a negotiating strategy in which one person claims that s/he does not have the authority to make a
decision and must consult another person who is not present during the negotiation process. Bargaining
is a "give-and-take" strategy. Good cop/Bad cop sets up one person as reasonable and the other person
as unreasonable.
</h5></div><h5 id='q28'>28. Parker, Lily, Paula, and David are members of different departments who are working together from
March to December to develop an intranet application that affects all of their departments. This is an
example of a(n)</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. quality circle.</option><option value="B">B. project team.</option><option value="C">C. standing committee.</option><option value="D">D. short-term committee.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is B: project team.</h5><h5>A project is any type of undertaking or task that has a distinct beginning and end. Because
the group is working together for a set period of time (March to December) to complete a specific task
(develop an intranet application), it is a project team. A quality circle is a problem-solving group of
coworkers who are given work situations or problems to study and discuss in order to recommend
solutions to management. A standing committee is one whose work continues over a long period of time
(e.g., three years). A short-term committee has an immediate goal, such as planning a social event for
employees.
</h5></div><h5 id='q29'>29. Melanie has convinced her supervisor that the department should implement a new computer program to
increase efficiency. Unfortunately, not everyone in the department is on board with the change, including
Rita. Rita thinks that she will not be able to learn the program quickly and will make a lot of mistakes.
Rita's resistance to Melanie's proposed change is based on</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. indifference.</option><option value="B">B. anger.</option><option value="C">C. jealously.</option><option value="D">D. fear.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: fear.</h5><h5>Change leaders should expect some resistance and know how to address others' concerns about
the change. By addressing concerns, the change leader may help others feel more comfortable with the
change and be persuaded to accept it. In the situation presented, Rita is afraid that she won't be able to
learn the program quickly and that she will make a lot of mistakes. Rita's resistance is based on fear.
Melanie may be able to decrease Rita's fears by telling her about the software training program and by
letting her know that most people are likely to make mistakes when they are learning a new program or
skill. Rita's resistance is not based on anger, jealously or indifference.
</h5></div><h5 id='q30'>30. Emily and Becca are team members at work. Emily is married, lives on a farm, and likes sewing and
doing puzzles. Becca is single, lives in the city, and enjoys snow skiing and running in marathons. The
coworkers' differences are based on</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. personality.</option><option value="B">B. age.</option><option value="C">C. education.</option><option value="D">D. lifestyles.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: lifestyles.</h5><h5>To treat others fairly at work, employees must understand and respect their differences, one of
which is lifestyles. The ways in which people lead their daily lives create their lifestyle. Many factors
define individuals' lifestyles, including the way people spend their time, the activities they pursue, and
their marital status. In the example, Emily is married and Becca is single. Emily prefers to spend her free
time sewing and doing puzzles, while Becca enjoys participating in athletic activities. There is not enough
information provided to determine if Emily and Becca differ in age, education, and personality.
</h5></div><h5 id='q31'>31. Under which of the following circumstances is a co-signer held legally responsible for paying the balance
owed on a bank loan:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. The lender's interest rate increases.</option><option value="B">B. The lender defaults on the loan.</option><option value="C">C. The borrower's interest rate increases.</option><option value="D">D. The borrower defaults on the loan.

2012 HS ICDC

FINANCE CLUSTER EXAM

4
</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: The borrower defaults on the loan.

2012 HS ICDC

FINANCE CLUSTER EXAM

4
</h5><h5>Explanation not available</h5></div><h5 id='q32'>32. Brandon is developing a financial plan, and one of his goals is to save enough money to buy a new car in
two years. Has Brandon set a SMART goal?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Yes, his goal is attainable and specific.</option><option value="B">B. No, his goal is not attainable or results-oriented.</option><option value="C">C. Yes, his goal is time-bounded and measureable.</option><option value="D">D. No, his goal is not specific or measurable.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: No, his goal is not specific or measurable.</h5><h5>A financial goal is a short- or long-term objective that is
measured in terms of money. Effective financial goals are SMART goals—specific, measurable,
attainable, results-oriented, and time-bounded. The goal is time-bounded because Brandon wants to
save money to buy a car two years from now. It is results-oriented because Brandon will have something
to show for his effort in two years—a car. However, the goal is not specific or measurable because
Brandon has not indicated how much he wants to save for the car. Also, Brandon has not indicated how
he plans to save for the car, such as placing 15% of his weekly paycheck in a special savings account.
There is not enough information to determine if the goal is attainable because it is not specific.
</h5></div><h5 id='q33'>33. Cheryl invested $6,000 in the stock market. During year one, her $6,000 grew to $6,600. The year after
that, her $6,600 turned into $7,260. Cheryl's monetary gains are the result of</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. compounding.</option><option value="B">B. phishing.</option><option value="C">C. diversifying.</option><option value="D">D. market timing.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: compounding.</h5><h5>The magic of compounding is earning interest upon interest. Compounding takes place
anytime you earn interest, but its effects are most dramatic when you're investing. Key factors involved in
compounding growth are the amount of money invested, how long the money is invested, and how much
the investment grows each year. With the stock market's average yearly gain of 10 percent, after one
year, Cheryl's $6,000 was $6,600. With the same 10 percent return the next year, Cheryl's $6,600 turned
into $7,260. She earned interest on her interest. Phishing is an online identify-theft scam that fools its
victims into believing they are submitting sensitive personal information to a legitimate web site. To
diversify means to spread out your investment dollars among a number of different securities. Market
timing is a form of the “buy low and sell high” trading strategy, in which investors purchase securities at
low prices and sell them at high prices to profit from the difference. There is no indication that Cheryl's
profit is the result of phishing, diversifying, or market timing.
</h5></div><h5 id='q34'>34. Exactly one year ago, Kim’s dad gave her a $10 bill. Kim saved the money “for a rainy day.” Now, her
$10 bill has less buying power than it did a year ago. What caused the decline in the value of Kim’s
money?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Unemployment</option><option value="B">B. Taxes</option><option value="C">C. Globalization</option><option value="D">D. Inflation</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is D: Inflation</h5><h5>Inflation is an increase in the cost of goods and services. What your dollar buys today won't be
the same as what it buys next year. Over the years, the value of money declines. That means that the
$10 bill Kim was given last year has less buying power today. Taxes are monies that individuals or
businesses must pay to the government. There's no indication that Kim paid taxes on her $10.
Globalization is the rapid and unimpeded flow of capital, labor, and ideas across national borders.
Unemployment is also known as joblessness. Although taxes, globalization, and unemployment levels
can impact the economy, none of the three are the direct cause of the decline in the buying power of
Kim's money.
</h5></div><h5 id='q35'>35. This is an example of the
___________ price.</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. withdraw money from a savings account.</option><option value="B">B. obtain a bank loan.</option><option value="C">C. pay monthly credit-card balances.</option><option value="D">D. earn interest on stock holdings.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is B: obtain a bank loan.</h5><h5>Banks obtain credit reports to make decisions about providing loans; therefore, it is
important for individuals to periodically review the accuracy of their credit reports. By obtaining copies of
their credit reports from an authorized credit agency, individuals can identify problems and take corrective
action. Information presented in a credit report does not affect an individual's ability to withdraw money
from a savings account, pay monthly credit-card balances, or earn interest on stock holdings.
</h5></div><h5 id='q36'>36. As financial intermediaries, what is all financial institutions' primary responsibility?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Investing clients' money in mid-cap growth companies</option><option value="B">B. Transferring money from those who have it to those who need it</option><option value="C">C. Calculating the opportunity costs of clients' potential investments</option><option value="D">D. Conducting fundamental and technical analyses to evaluate securities</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Transferring money from those who have it to those who need it</h5><h5>Financial institutions play an integral
role in our economic system. They act as financial intermediaries (middlemen) by transferring money
from those who have it to those who need it. In essence, financial institutions facilitate the flow/movement
of money through the economy. Investment institutions such as mutual funds, investment banks, pension
funds, and exchanges may invest clients' money in mid-cap growth companies; calculate the opportunity
costs of clients' potential investments; and conduct fundamental and technical analyses to evaluate
securities. However, none of those activities is the primary responsibility of all financial institutions,
including deposit-taking institutions, finance and insurance institutions, and investment institutions.
</h5></div><h5 id='q37'>37. Deposit-taking institutions are commonly responsible for</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. using funds from insurance premiums to offer loans.</option><option value="B">B. raising funds for clients by issuing securities.</option><option value="C">C. carrying out regulatory and supervisory functions.</option><option value="D">D. making payments on behalf of savers to creditors.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is D: making payments on behalf of savers to creditors.</h5><h5>Deposit-taking institutions commonly accept deposits
(funds) from savers and use those deposits to make payments on behalf of savers to individuals, firms,
and creditors to whom the savers owe money. Deposit-taking institutions, which include commercial
banks, credit unions, savings and loan associations, trust companies, and mortgage companies, also use
those deposits to offer loans to borrowers. Investment banks, which are investment institutions, raise
funds for clients by issuing securities. Government and semigovernment financial institutions carry out
regulatory and supervisory functions. They also increase the funds available to investors, manage risk,
and assume risk. Insurance companies, which are categorized as finance and insurance institutions, use
funds from premiums to offer loans. They also manage and pool individuals' risk, invest funds to raise
more capital, and create investment products.
</h5></div><h5 id='q38'>38. The largest, most liquid financial market in the world is the __________ market.</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. debt</option><option value="B">B. foreign exchange</option><option value="C">C. equity</option><option value="D">D. commodity</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is B: foreign exchange</h5><h5>The largest, most liquid financial market in the world is the foreign exchange market.
There are typically more active traders and a higher volume of trading on the foreign exchange market
than any of the other markets. Very liquid markets such as the foreign exchange market experience very
gradual, small price changes, while markets with low liquidity often experience volatile changes in price,
meaning that prices change abruptly and in larger increments than in highly liquid markets. The debt
market is also known as the bond market, and the equity market is also called the stock market. A
commodity market deals in raw, primary products such as oil, silver, gold, etc.
</h5></div><h5 id='q39'>39. Which of the following are common categories of commodities:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Energy, metals, and grains</option><option value="B">B. Energy, metals, and consumer goods</option><option value="C">C. Energy, grains, and consumer goods</option><option value="D">D. Metals, grains, and consumer goods</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: Energy, metals, and grains</h5><h5>Commodities are raw, primary products commonly categorized as energy,
metals, and agricultural products, which are often further divided into grains, livestock, and softs. Energy
commodities include different types of fuel, including natural gas, crude oil, heating oil, etc. Metals
commodities include precious and industrial metals such as gold, silver, and copper. Grains are probably
the most popular of the commodities and include corn, soybeans, wheat, etc. Livestock include cattle and
hogs, while softs are food and fiber commodities such as cocoa, cotton, orange juice, etc. Consumer
goods, tangible items produced for personal use, are finished goods, not raw, primary products.
Therefore, they are not referred to as commodities.
</h5></div><h5 id='q40'>40. Which of the following statements regarding convergence and consolidation in the finance industry is
true:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Financial companies often enjoy higher earnings as a result of convergence and consolidation.</option><option value="B">B. When multiple financial firms merge, they often end up with less capital to invest.</option><option value="C">C. A desire for lower costs has slowed the pace of convergence and consolidation.</option><option value="D">D. Technological advancements have increased the costs of offering new and different products.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is A: Financial companies often enjoy higher earnings as a result of convergence and consolidation.</h5><h5>Explanation not available</h5></div><h5 id='q41'>41. What do bond yields typically do during an economic expansion?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Gradually decrease</option><option value="B">B. Increase</option><option value="C">C. Drop to near zero</option><option value="D">D. Remain unchanged</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: Increase</h5><h5>During an economic expansion, production, employment, income, sales, the demand for
money, and interest rates rapidly increase. As a result, businesses borrow more money (at higher rates)
to expand their operations. And, when businesses borrow more at higher interest rates, bond yields go
up.
</h5></div><h5 id='q42'>42. An economic trend that typically precedes an upturn in commodity prices is the __________ for at least a
year.</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. stock market in decline</option><option value="B">B. dollar increasing in value</option><option value="C">C. growth of the money supply declining</option><option value="D">D. yield curve leveling out

2012 HS ICDC

FINANCE CLUSTER EXAM

5
</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: dollar increasing in value</h5><h5>An upturn or increase in commodity prices is typically preceded by a number
of economic trends and conditions. These trends include the dollar strengthening or increasing in value
for at least a year; the stock market increasing and improving for at least a year; the growth of the money
supply increasing for at least a year; and the yield curve steepening for at least a year. Growth in
employment and industrial production also accompany an upturn in commodity prices.
</h5></div><h5 id='q43'>43. Which of the following securities is commonly used to help reduce the impact of significant fluctuations in
exchange rates and commodities:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. Derivatives</option><option value="B">B. Stocks</option><option value="C">C. Bonds</option><option value="D">D. Real estate</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is A: Derivatives</h5><h5>Derivatives, including options, futures, and swaps, are complex financial instruments whose
value depends upon the value of other financial instruments (e.g., currencies, securities, commodities,
etc.) or a market index. Derivatives are often used on a global scale to help reduce the impact of
significant fluctuations in currency exchange rates, the prices of specific commodities, etc. Stocks, bonds,
and real estate are not commonly used in this manner. Stocks are shares of ownership in a corporation.
Bonds are lending investments in which individuals lend money to a government, municipality, or
corporation to earn a set rate of interest for a specified time period. Real estate is an ownership
investment in which individuals purchase property in buildings and land.
</h5></div><h5 id='q44'>44. By investing their funds in several different countries, investors</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. reduce foreigners' access to domestic financial markets.</option><option value="B">B. demonstrate their liberalization and home biases.</option><option value="C">C. easily avoid integrated and emerging financial markets.</option><option value="D">D. reduce their exposure to business cycle risks.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: reduce their exposure to business cycle risks.</h5><h5>As a result of financial globalization, investors have
access to many more markets and investments worldwide. By investing their funds in several different
countries, investors are able to diversify their risk and reduce their exposure to business cycle risks within
any particular country. Liberalization is the removal of government regulations on the flow of capital and
international trade. A home bias is a preference for investments in domestic markets versus markets in
other countries. An investor who invests funds in several different countries demonstrates that s/he does
not have a home bias. While international investors can purposefully avoid emerging markets located in
developing countries when investing, integrated financial markets-markets that facilitate the free flow of
capital across national borders-are not so easy for international investors to avoid. Liberalization and
financial globalization have increased foreigners' access to domestic financial markets.
</h5></div><h5 id='q45'>45. Which part of a company's annual report is most valuable for potential investors to examine?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Listing of management/directors</option><option value="B">B. Auditor's report</option><option value="C">C. Financial statements</option><option value="D">D. Letter to the shareholders</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is C: Financial statements</h5><h5>Affinity fraud, often in the form of a Ponzi or pyramid
scheme, is an investment scam in which the scammer claims to be a member of the group s/he is
targeting. Market capitalization is an indicator of the size of a public company as measured by the total
dollar value of its stock.
</h5></div><h5 id='q46'>46. Before deciding whether to purchase any Upside Corporation stock, Anna wants to study the company's
financials. What part of Upside's web site is likely to contain the company's most recent annual report?</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Sustainability</option><option value="B">B. Investor Relations</option><option value="C">C. Public Relations</option><option value="D">D. Leadership</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: Investor Relations</h5><h5>Most publicly-traded companies have an "Investor Relations" section within their web
sites where individuals such as Anna can find the companies' annual reports as well as any other
information and filings they have made public throughout the year. Some companies also devote a
portion of their web sites to "Sustainability," which emphasizes the companies' dedication to impacting
the environment and society in positive ways. The "Public Relations" component of most companies' web
sites contains press releases, press kits, and media resources such as product images and information.
The "Leadership" section typically contains biographical profiles of senior executives and members of the
board of directors.
</h5></div><h5 id='q47'>47. Which of the following components of a securities table indicates the last price paid when trading ended
for the day:</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Volume</option><option value="B">B. Net change</option><option value="C">C. Close</option><option value="D">D. Yield</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: Close</h5><h5>“Close,” which is sometimes listed as “Last,” represents the last price paid when trading ended for
the day. “Net change” compares the closing price with the previous day's closing price. A negative net
change indicates that the price is down when compared to the previous day's last price. A positive net
change means that the price is up. “Volume” (sometimes listed as “Sales”) tells you how many shares
were traded that day. “Yield” signifies the rate of return on the security, determined by dividing the
dividend by the actual closing price.
</h5></div><h5 id='q48'>48. Which of the following are types of lending investments:</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Money market accounts, certificates of deposit, and bonds</option><option value="B">B. Bonds, certificate of deposits, and collectibles</option><option value="C">C. Savings accounts, collectibles, and stocks</option><option value="D">D. Certificates of deposit, stocks, and real estate</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: Money market accounts, certificates of deposit, and bonds</h5><h5>Investments in which individuals allow
borrowers to use their money for a period of time for a specified fee or rate of interest are lending
investments. Money market accounts, certificates of deposit, bonds, and savings accounts are types of
lending investments. Investments in which individuals purchase a portion or all of an item are called
ownership investments. Collectibles, stocks, and real estate are types of ownership investments.
</h5></div><h5 id='q49'>49. Ethan has health insurance through his employer. Each time Ethan needs medical attention, he must
write a check in the amount of $25.00 to the doctor's office to cover his out-of-pocket expense. This outof-pocket expense is Ethan's</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. total premium.</option><option value="B">B. copayment.</option><option value="C">C. surrender charge.</option><option value="D">D. waiver.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is B: copayment.</h5><h5>Health insurance covers such medical expenses as hospital bills, doctors' fees, and lab
charges. Employers negotiate contracts with health insurance companies to obtain favorable or
discounted group rates. Depending on the terms of the contract, the employers and employees pay a
portion of the health insurance premium. A copayment is a predetermined out-of-pocket expense that the
insured (employee) often pays at the time of service to cover a portion of the health-care provider's fee.
The balance of the health-care provider's fee is applied to the employee's annual deductible or is covered
by the insurance company after the deductible has been met. A surrender charge is a fee charged to a
policyholder by a life insurance company when the insurance policy or annuity is surrendered or waivered
for its cash value.
</h5></div><h5 id='q50'>50. Which of the following is the first step in a business's accounting cycle:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Collecting the source documents</option><option value="B">B. Journalizing transactions</option><option value="C">C. Balancing the books</option><option value="D">D. Preparing financial statements</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: Collecting the source documents</h5><h5>The accounting cycle is the process that a business uses to maintain
its financial records. The first step involves collecting all of the necessary financial records or source
documents—checks, receipts, invoices, purchase orders, etc. Without this basic information, the
business cannot journalize the transactions, balance the books, or prepare financial statements, which
are subsequent steps in the accounting cycle.
</h5></div><h5 id='q51'>51. Which of the following is a common cause of disparate data structures within many large corporations'
financial-information management systems?</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. Channels of distribution</option><option value="B">B. Mergers and acquisitions</option><option value="C">C. Capital structure</option><option value="D">D. Accounting method</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: Mergers and acquisitions</h5><h5>Mergers and acquisitions commonly handicap large corporations' financialinformation management systems because of disparate data structures. Even though two companies
may become one as a result of a merger or acquisition, the two companies' historical financial data may
be incompatible or housed in different data structures, making a merge of the data difficult. Channels of
distribution, the company's capital structure, and the accounting method that the company uses do not
commonly cause disparate data structures within financial-information management systems.
</h5></div><h5 id='q52'>52. In addition to collecting, maintaining, and reporting data about financial transactions, financial-information
management is also responsible for analyzing and reporting</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. recent third-party agreements.</option><option value="B">B. participative decision-making.</option><option value="C">C. dominant buying motives.</option><option value="D">D. market and competitive indicators.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is D: market and competitive indicators.</h5><h5>In addition to collecting, maintaining, and reporting data about
financial transactions, financial-information management is also responsible for maintaining internal
operational data and analyzing and reporting external market and competitive indicators. The financialinformation management function is not typically responsible for maintaining information about
participative decision-making, dominant buying motives, or recent third-party agreements.
</h5></div><h5 id='q53'>53. Alexei determines who in his company is permitted to read data within the financial-information
management system. Alexei has assumed responsibility for the __________ stewardship of the
company's financial information.</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. access</option><option value="B">B. definition</option><option value="C">C. environmental</option><option value="D">D. geospatial

2012 HS ICDC

FINANCE CLUSTER EXAM

6
</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: access</h5><h5>Stewardship of a company's financial information is an aspect of financial-information
management. In other words, the financial-information management function is responsible for protecting
the quality and integrity of any financial information that the company possesses. Several types of
financial-information stewardship exist, including both access and definition stewardship. Access
stewardship is the ability to decide who is permitted or denied access to data within the financialinformation management system. Definition stewardship is the ability to determine what data within the
financial-information management system mean. Environmental stewardship is not usually associated
with financial-information management; it involves responsibility for the protection and conservation of
nature resources. Geospatial is not a form of stewardship.
</h5></div><h5 id='q54'>54. Which of the following can be used to trace a financial transaction from beginning to end to ensure that
the data are accurate and have not been altered:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Supply chain</option><option value="B">B. Separation of duties</option><option value="C">C. Accounting standards</option><option value="D">D. Audit trail</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is D: Audit trail</h5><h5>One way to identify potential ethical violations in financial-information management is to trace
financial transactions from beginning to end using audit trails. A financial-information manager can utilize
an audit trail to review all documents pertaining to a particular transaction and determine if data recorded
in the system are accurate or altered. Separation of duties is an internal control requiring more than one
person to complete a task. Accounting standards are principles or rules that businesses must follow
when recording and presenting their financial information. The supply chain is a system of organizations,
people, processes, etc. used to move a product from supplier to user.
</h5></div><h5 id='q55'>55. More consistent and up-to-date data, faster response to queries, and economies of scale are all benefits
of using a(n)</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. intrusion detection system.</option><option value="B">B. encryption technology.</option><option value="C">C. central data repository.</option><option value="D">D. principle of least authority.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: central data repository.</h5><h5>A central data repository is a centralized comprehensive database used to store
financial management from across an organization. Benefits of a central data repository include more
consistent and up-to-date data, faster response to queries, economies of scale, and accessibility by
several different software applications. Encryption technology and intrusion detection systems are used
to ensure the security of financial information. The principle of least authority is a concept that promotes
providing database users with permission to access only those data that are absolutely necessary for
fulfilling their duties and work obligations.
</h5></div><h5 id='q56'>56. What data mining application is used to identify anomalies in a data set?</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Visualization</option><option value="B">B. Regression</option><option value="C">C. Prediction</option><option value="D">D. Outlier detection</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: Outlier detection</h5><h5>Outlier detection is a data mining application used to measure the distance between
data objects and identify any data that are significantly dissimilar to the remainder of the data set.
Regression is used to identify the relationship between an independent variable and a dependent
variable. Prediction estimates future values based on the patterns found in current data. Visualization can
be used to convert complicated data into clear patterns that are easily understood.
</h5></div><h5 id='q57'>57. Rule-induction data mining techniques are commonly used to</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. create a set of if-then permutations that can be used to predict future behavior.</option><option value="B">B. modify an existing set of solutions to create a new, more useful solution.</option><option value="C">C. present complex data in readily understandable graphs and charts.</option><option value="D">D. conduct statistical exploratory research and identify the distribution of variables.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is A: create a set of if-then permutations that can be used to predict future behavior.</h5><h5>Rule-induction data
mining techniques are frequently used to determine if-then relationships among a set of data. After these
if-then rules are developed, they can be used to predict future behavior. One common type of ruleinduction modeling is the decision tree technique. Genetic algorithms can be used to modify an existing
set of solutions to create a new, more useful solution. Data visualization allows complex data to be
presented in readily understandable graphs and charts. Statistical-inference techniques may be used to
conduct statistical exploratory research and identify the distribution of variables within a data set.
</h5></div><h5 id='q58'>58. Because she is running out of space, Carrie wants to transition her home business to a paperless office.
Given her situation, she should use a budgeting software program with __________ capabilities.</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. internal-control</option><option value="B">B. forecasting</option><option value="C">C. scanning</option><option value="D">D. variance</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: scanning</h5><h5>Some budgeting software programs come complete with scanning capabilities, making it
possible for a small business owner such as Carrie to scan and save certain documents digitally.
Depending on the nature of these documents, Carrie may be able to dispose of the paper copies, freeing
up precious space in her home office. While forecasting, internal-control, and variance-analysis
capabilities are helpful, they are not as well suited as scanning capabilities are to help Carrie transition to
a paperless office.
</h5></div><h5 id='q59'>59. Xavier is inputting several data to his budgeting software application, including the predicted cost of
vehicle maintenance and the predicted revenue from a particular asset. Xavier is entering __________
into the budgeting software.</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. internal controls</option><option value="B">B. marketing data</option><option value="C">C. expense data</option><option value="D">D. key assumptions</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: key assumptions</h5><h5>Many business budgeting applications allow users to input and/or change key
assumptions assigned to the budgets. These key assumptions are the predicted values of various budget
items. While the predicted cost of vehicle maintenance is expense data, the predicted revenue from a
particular asset is not. There is no indication that Xavier is entering marketing data or internal controls
into the budgeting software.
</h5></div><h5 id='q60'>60. Cheryl's monetary gains are the result of</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. profit-and-loss statement.</option><option value="B">B. financial scorecard.</option><option value="C">C. cost standard.</option><option value="D">D. operating agreement.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is B: financial scorecard.</h5><h5>Many financial analysis applications include the capability to create financial
scorecards containing key financial indicators and up-to-date financial information. Cash flow, liquidity,
profitability, and liability are examples of metrics that are often included on a financial scorecard. Rather
than simply listing data on the scorecard, business employees can use financial analysis applications to
develop charts and graphs that present the data in much more readily understandable ways. A profit-andloss statement is a summary of business transactions that shows net profit before and after taxes by
analyzing sales, purchases, cost of goods sold, and operating expenses for a specified period. While
Lawrence's financial scorecard probably contains information that also appears on the company's profitand-loss statement, the financial scorecard presents more different financial metrics. Cost standards are
established specifications used to measure how much a project or product costs. An operating
agreement is a written document signed by members of a limited liability partnership or limited liability
company that specifies the terms of the business arrangement.
</h5></div><h5 id='q61'>61. Ginny set up two related tables in a database so that when an entry in the primary table is modified, the
database application automatically updates all matching entries in the related table. What type of
relationship did Ginny create?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Logical design</option><option value="B">B. Hyperlinked</option><option value="C">C. Object-oriented</option><option value="D">D. Cascading upward</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cascading upward</h5><h5>Ginny created a cascading upward relationship between the two tables so that when
an entry in the primary table is modified, all matching entries in the related table are updated to match.
Ginny did not create a hyperlinked, object-oriented, or logical design relationship. A hyperlink is a
component of an electronic document that can be clicked on to jump to another place within the
document or into a different document or web site. Object-oriented is a type of database model, not a
relationship within a database. Logical design is typically considered to be the first stage in the life cycle
of a database.
</h5></div><h5 id='q62'>62. Yvonne is running a query to create, delete, or modify other database objects. What type of query is
Yvonne running?</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Pass-through</option><option value="B">B. Select</option><option value="C">C. Crosstab</option><option value="D">D. Data-definition</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: Data-definition</h5><h5>Running a query in a database is the equivalent of giving the database instructions for
working with specific data. Data-definition queries tell the database to create, delete, or modify other
database objects. Select and crosstab queries are used to retrieve specific data and present them in
reports. A pass-through query tells the database engine to pass the query to a remote database server
for processing.
</h5></div><h5 id='q63'>63. Investors and financial analysts are most likely to study a publicly-traded company's financial statements
to</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. measure the firm's competitiveness and performance.</option><option value="B">B. identify new products that the firm plans to introduce next year.</option><option value="C">C. determine the size and makeup of the firm's workforce.</option><option value="D">D. assess the effectiveness of the firm's risk-management system.

2012 HS ICDC

FINANCE CLUSTER EXAM

7
</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is A: measure the firm's competitiveness and performance.</h5><h5>Because many investors and financial analysts
look at a business's financial statements to measure the firm's competitiveness and performance, the
business should make every effort to report its financial position accurately. If it does not, investors and
financial analysts may shy away from purchasing the company's stock. If the company's financial
statements underestimate its performance, investors and financial analysts may avoid the company
because it looks unprofitable. And, if the financial statements are overly positive, investors and financial
analysts may come to distrust the company because it overstates its success. A company's financial
statements are not likely to help investors and financial analysts to identify new products that the firm
plans to introduce next year, determine the size and makeup of the firm's workforce, or assess the
effectiveness of the firm's risk-management system.
</h5></div><h5 id='q64'>64. Which of the following individuals is an internal user of a business's financial data:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Tax collector</option><option value="B">B. Investor</option><option value="C">C. Creditor</option><option value="D">D. Manager</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Manager</h5><h5>Managers are internal users of a business's financial data. Managers use these data—often in
the form of custom-designed financial reports—to control day-to-day operations and to make financial
decisions and plans that affect the business. They rely on the data to help them make smart decisions,
so it is imperative that the data are reported accurately. Investors, creditors, and government tax
collectors also use a business's financial data, but they are all considered to be external users of the data
because they do not work for the company.
</h5></div><h5 id='q65'>65. Which of the following statements about accounting and finance is true:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Accounting obtains business funds, and finance keeps business records.</option><option value="B">B. Finance focuses on the past, while accounting focuses on the future.</option><option value="C">C. Accounting focuses on the past, while finance focuses on the future.</option><option value="D">D. The accounting business function is broader than the finance function.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Accounting focuses on the past, while finance focuses on the future.</h5><h5>The accounting function is
responsible for keeping and interpreting financial records based on past financial transactions. Finance,
on the other hand, is responsible for obtaining funds and using them to achieve the goals of the
business. Essentially, finance—which is broader than accounting—looks for ways to help the business be
successful in the future.
</h5></div><h5 id='q66'>66. The emphases in accounting are on documenting and reporting financial data, while the emphasis in
finance is on</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. liquidity ratios.</option><option value="B">B. bookkeeping.</option><option value="C">C. closing the books.</option><option value="D">D. decision making.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is D: decision making.</h5><h5>While the emphases in accounting are on recording and reporting financial data in the
form of financial statements, the emphasis in finance is on decision making. Financial managers must
make decisions about a company's investments and financing. Specifically, they are responsible for
determining what types of assets the company should own, as well as the proper mix of those assets.
Financial managers are also responsible for deciding which method or methods of financing will be most
beneficial for the company. Bookkeeping is an aspect of accounting, and closing the books is the final
step of the accounting cycle. While financial managers may calculate liquidity ratios to determine the
company's ability to turn its assets into cash and pay its bills on time, they are just as likely to use other
ratios, including asset management, debt management, profitability, and market performance ratios, to
evaluate business performance.
</h5></div><h5 id='q67'>67. What accounting method involves journalizing income and expenditures at the time they occur even if no
money changes hands at that time?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Cash</option><option value="B">B. Accrual</option><option value="C">C. Tax</option><option value="D">D. Double entry</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: Accrual</h5><h5>Businesses using the accrual accounting method journalize income and expenditures at the time
they occur even if no money changes hands at that time. This means, for instance, that the business
enters the amount of a transaction into the appropriate journal when a customer makes a credit purchase
or when the business orders goods from a supplier. No money changes hands at the time, but the
business's records indicate the transaction as either income or an expense. Cash accounting involves
recording income and expenditures at the time the money changes hands. This means that the business
enters the amount of a transaction into one of its journals on the day the money is received from a
customer or paid out to a creditor. Tax accounting is essentially accounting for tax purposes. Aspects of
tax accounting include preparing tax strategies and completing tax forms. Double entry accounting is a
bookkeeping method that involves recording each transaction in two or more different accounts, resulting
in a credit to at least one account and a debit to at least one other account.
</h5></div><h5 id='q68'>68. What type of accounting involves preparing and reporting financial data to internal users who use the
data to plan, direct, and control business operations?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Tax</option><option value="B">B. Financial</option><option value="C">C. Cash</option><option value="D">D. Cost</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is D: Cost</h5><h5>Cost accounting, also referred to as management or managerial accounting, involves preparing
and reporting financial data to internal users, usually managers, who need financial information to control
day-to-day operations and to make financial decisions and plans affecting the business. Financial
accounting is a type of accounting that involves preparing and reporting financial data to external users
who are not directly involved in business operations. Cash accounting involves recording income and
expenditures at the time the money changes hands. This means that the business enters the amount of a
transaction into one of its journals on the day the money is received from a customer or paid out to a
creditor. Tax accounting is essentially accounting for tax purposes. Aspects of tax accounting include
preparing tax strategies and completing tax forms.
</h5></div><h5 id='q69'>69. Which of the following is often used to identify trends and patterns over time for a company:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Financial ratios</option><option value="B">B. Bookkeeping</option><option value="C">C. Opportunity cost</option><option value="D">D. Market timing</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: Financial ratios</h5><h5>A ratio is a comparison created when one number is divided into another. A financial
ratio is the comparison of two numbers from a business's financial statement. Financial ratio analysis is
commonly used by businesses to see relationships between dollars, numbers, and percentages. Many
businesses compare their current financial ratios to those calculated using last year's financial
statements, the statements for the year before that, etc. By comparing these financial ratios over time,
the businesses can identify trends and patterns in their sales, spending, liquidity, etc. Bookkeeping is an
aspect of accounting. Opportunity cost is the benefit that is lost when you decide to use scarce resources
for one purpose rather than another. Market timing is a form of the “buy low and sell high” trading
strategy in which investors purchase securities at low prices and sell them at high prices to profit from the
difference.
</h5></div><h5 id='q70'>70. Stefania hopes to identify some meaningful trends by reviewing and comparing data on her small
business's financial statements for the last five years. Stefania is planning to conduct __________
analysis.</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. break-even</option><option value="B">B. vertical</option><option value="C">C. horizontal</option><option value="D">D. competitive</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: horizontal</h5><h5>Horizontal analysis, which is also sometimes referred to as trend analysis, involves reviewing
and comparing data on a business's financial statements over a period of several quarters or years. By
comparing data on financial statements over time, the business can identify trends and patterns in its
sales, spending, liquidity, etc. Vertical analysis involves reporting each amount on a financial statement
as a percentage of another item appearing on the same financial statement. The percentages or restated
amounts from the different financial statements are presented as common-size financial statements.
Break-even analysis's purpose is to identify the level of sales needed to reach the break-even point at
various prices. A competitive analysis is the process of comparing a business's income statement with
that of its competitors to see how it is doing by industry standards.
</h5></div><h5 id='q71'>71. An automotive parts supplier must decide whether to extend a credit line to a new business customer.
Before approving or denying credit for the new customer, what should the supplier do?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Evaluate the qualifications and work histories of the customer's management team</option><option value="B">B. Contact company shareholders and ask for permission to extend credit to the customer</option><option value="C">C. Discuss the customer's request for credit with the supplier's financial accountants</option><option value="D">D. Analyze the customer's credit application, credit report, bank information, and financial
statements</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is D: Analyze the customer's credit application, credit report, bank information, and financial
statements</h5><h5>Explanation not available</h5></div><h5 id='q72'>72. Jack is studying the difference between the labor cost that his business budgeted for last quarter and the
actual amount that the business spent on labor during those three months. What type of analysis is Jack
conducting?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Variance</option><option value="B">B. Break-even</option><option value="C">C. Fundamental</option><option value="D">D. Cash-flow</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is A: Variance</h5><h5>A variance is the difference between a budgeted amount and an actual amount. Business
managers often conduct variance analysis to determine if their businesses have spent or received more
or less money than was budgeted. If there is a discrepancy between what was budgeted and what was
actually spent or received, then managers can investigate the cause(s) of the variance and handle the
situation as necessary. Break-even analysis is conducted to identify the level of sales needed to reach
the break-even point at various prices. Investors commonly conduct fundamental analysis, which is the
study of all aspects of a company in an attempt to understand its intrinsic value. Cash-flow analysis is
used to predict whether the cash generated by a business can cover the operation expenses and loan
repayments.
</h5></div><h5 id='q73'>73. The accounting treatment of capital expenditures should be __________ over multiple reporting periods.</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. consistent</option><option value="B">B. flexible</option><option value="C">C. hedged</option><option value="D">D. callable

2012 HS ICDC

FINANCE CLUSTER EXAM

8
</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is A: consistent</h5><h5>An accounting treatment is a set of rules that specifies how to handle specific accounts and
transactions such as capital expenditures. The accounting treatment of like items should be consistent
within each reporting period and from one reporting period to the next. If a company does not treat a
particular account or type of transaction consistently from period to period or year to year, the data
become incomparable, less meaningful, and possibly even useless to users of the company's financial
information. If investors or financial experts analyze the company's financial data and discover that the
accounting treatment of capital expenditures varies—and if the company has no valid explanation for not
treating these expenditures the same way during different reporting periods—the investors and financial
analysts may avoid investing in that particular company. Therefore, it is usually in a company's best
interest to be consistent in their accounting treatment of different accounts and transactions. Accounting
treatment of capital expenditures should not be flexible, hedged, or callable over multiple reporting
periods.
</h5></div><h5 id='q74'>74. A human-resources manager is working with the company's payroll-processing service to have a new
employee's paycheck directly deposited into the employee's checking account. What human-resources
activity is the manager carrying out?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Interviewing</option><option value="B">B. Recruiting</option><option value="C">C. Organizing</option><option value="D">D. Onboarding</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: Onboarding</h5><h5>Human-resources management tasks that are performed when a new employee joins the
company are onboarding activities. Onboarding activities include ensuring that the new employee
completes the necessary tax and insurance forms and arranging direct paycheck deposit into the
employee's bank account. Recruiting, interviewing, and organizing are not onboarding activities.
Recruiting involves seeking out and attracting qualified employees. Interviewing is a recruiting activity
that involves speaking with a job candidate to discuss his/her qualifications in detail. Organizing is the
management function of setting up the way the business's work will be done.
</h5></div><h5 id='q75'>75. Trevor is a small business owner who usually purchases his janitorial supplies from the store that is
located across the street from his office. In this situation, Trevor's buying behavior is most likely based on</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. brand insistence.</option><option value="B">B. convenience.</option><option value="C">C. price.</option><option value="D">D. product dependability.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: convenience.</h5><h5>Trevor is most likely motivated to buy from this particular store because it is close and
convenient to his business. If Trevor needs cleaning supplies right away, he just has to walk across the
street to buy them. Although brand, price, and product dependability might influence his buying behavior,
there is not enough information provided to determine if these factors are important to Trevor in this
situation.
</h5></div><h5 id='q76'>76. The most efficient way to obtain the current interest rates on certificates of deposit purchased through
Main Street Community Bank is to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. visit the bank's web site.</option><option value="B">B. call the bank's financial officer.</option><option value="C">C. make an appointment with a bank teller.</option><option value="D">D. go to the bank to get product brochure.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: visit the bank's web site.</h5><h5>Because many businesses post and update product information on their web
sites, their customers can access information they need 24 hours a day, seven days a week. Many
customers obtain product information from web sites because it is quick, convenient, accurate, and
secure. A bank's financial officer does not usually take routine customer-service calls and may not be
available to take a customer's call. Customers usually do not need to make appointments with bank
tellers. Driving to the bank to get a product brochure is not as efficient as visiting the bank's web site.
Because the interest rates for financial products change, product brochures may not contain the most
current rates.
</h5></div><h5 id='q77'>77. Stella has just finished designing the web page for her new business. Next, she needs to select a
___________ and register the web site's ____________.</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. file link, ethernet</option><option value="B">B. hyperlink, modem</option><option value="C">C. media permit, server</option><option value="D">D. web host, domain name</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: web host, domain name</h5><h5>After creating a web page, the developer needs to post the web page through a
web host (web server) or Internet service provider (IPS). The web host may charge a fee to post and
store the web page, although some web hosts will provide the service free of charge. The domain name
is the business's web address. Internet users enter the web address to view Stella's web site. Stella can
register her domain name directly with the Internet Corporation for Assigned Names and Numbers
(ICANN). Or, Stella can work with her web host to register the domain name for her. Stella does not need
to register a hyperlink, media permit, or file link with any organization. A hyperlink (link) is the component
of an electronic document (file) that can be clicked on in order to jump to another place within the
document or into a different document. A modem is an internal or external computer communications
device that is used to transmit information over a particular medium such as telephone lines or television
cables. Ethernet is a local area network.
</h5></div><h5 id='q78'>78. Businesses may review invoices to evaluate their customers'</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. business plans.</option><option value="B">B. purchasing habits.</option><option value="C">C. storage needs.</option><option value="D">D. selling policies.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is B: purchasing habits.</h5><h5>An invoice is the formal, printed record of a sale that includes all necessary
information as to the buyer, the seller, items purchased, amounts, prices, delivery date, credit or discount
terms, etc. By analyzing past sales records such as invoices, a business can determine what its
customers are buying, when they are buying, and how much they are buying. This helps a business to
forecast future sales and to be prepared to offer the products that customers want. Businesses do not
review invoices to evaluate their customers' business plans, storage needs, or selling policies.
</h5></div><h5 id='q79'>79. To remain competitive and reduce the risk of failure, a business should</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. monitor emerging trends.</option><option value="B">B. access competitors' records.</option><option value="C">C. appeal to all markets.</option><option value="D">D. expand internationally.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: monitor emerging trends.</h5><h5>Because the world is constantly changing, businesses need to continuously
pay attention to trends and adjust their activities accordingly to remain competitive in the marketplace. If
a business fails to act in response to the various types of changes—technological, market, industry—it is
likely to lose business to competitors, which may result in business failure or closure. A business is not
likely to obtain a competitor's business records, many of which are confidential. Successful businesses
select their target markets carefully because they understand that it is not possible to appeal to all
markets. The decision to expand internationally depends on the type of business and its organizational
goals.
</h5></div><h5 id='q80'>80. When a business has too much inventory on hand for an extended period of time, what type of business
cost increases?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Holding</option><option value="B">B. Maintenance</option><option value="C">C. Production</option><option value="D">D. Stockout</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: Holding</h5><h5>The money it takes to keep inventory in stock is called holding cost. Holding costs include
storage space, taxes, and insurance. By minimizing its holding costs, a business is taking steps to reduce
its overall operating costs. Maintenance costs are expenses associated with the upkeep of the business's
facility and equipment. Production costs are expenses associated with the creation of goods and
services. Stockout costs are associated with running out of needed inventory and are considered in terms
of lost money and sales, lost productivity, and lost customer satisfaction.
</h5></div><h5 id='q81'>81. The FGH Company has received several warnings from a government agency to fix unsafe electrical
wiring throughout the company's facility. According to common law, the company has breached its duty
of</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. reasonable care.</option><option value="B">B. personal reform.</option><option value="C">C. general authority.</option><option value="D">D. charitable trust.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: reasonable care.</h5><h5>The duty of reasonable care is a common-law principle supporting the idea that each
person and business should use caution, watch out for one another, and act in a socially responsible
way. A business that fails to fix unsafe electrical wiring after several warnings is being socially
irresponsible. Therefore, it is breaching its duty of reasonable care because it is placing its employees
and customers in danger. The example is not a breach of duty of personal reform, general authority, or
charitable trust.
</h5></div><h5 id='q82'>82. A business can protect its confidential computer information from unauthorized users by</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. developing Internet message boards.</option><option value="B">B. encrypting computer files.</option><option value="C">C. conducting annual virus scans.</option><option value="D">D. classifying business data.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is B: encrypting computer files.</h5><h5>Encryption is the process of transforming information into a secret code so that
specified individuals can read it. By encrypting confidential computer files, the business protects the
information from unauthorized access by internal and external sources. For optimal protection from
computer viruses, businesses should conduct computer virus scans continuously rather than once a
year. Activities such as classifying information and developing Internet message boards do not protect
the information from unauthorized users.
</h5></div><h5 id='q83'>83. Which of the following is a tool that is specifically designed to schedule and track their projects:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Venn diagram</option><option value="B">B. Pyramid diagram</option><option value="C">C. Bubble chart</option><option value="D">D. Gantt chart</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: Gantt chart</h5><h5>Developed by Henry Gantt, the Gantt chart is a type of bar chart that is specifically designed
to graphically depict a project's work breakdown structure in a horizontal format in relation to time. Project
managers often use Gantt charts to schedule and track the progress of their projects. A pyramid diagram
or chart presents data in a hierarchical format. A bubble chart is a type of scatter chart that is often used
to compare data. A Venn diagram indicates the overlapping relationships among finite sets of data.
Pyramid diagrams, bubble charts, and Venn diagrams are not tools that are specifically designed to
schedule and track projects.
</h5></div><h5 id='q84'>84. Claire is responsible for maintaining an inventory of routine office supplies for a small business. To
determine the optimal level of inventory of each item to keep on hand, Claire should consider the</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. employees' individual preferences.</option><option value="B">B. average product usage amount per month.</option><option value="C">C. business's budgeting method.</option><option value="D">D. vendors' daily sales promotions.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: average product usage amount per month.</h5><h5>Businesses need office supplies to operate efficiently. The
types and quantities of supplies vary by business. To determine the optimal level of inventory to keep on
hand, Claire needs to first determine the average amount of the product used for a certain time period,
such as a month. For example, if the business goes through two cases of copy paper in June and three
cases in July and four cases in August, the average or optimal amount to keep on hand is three cases of
copy paper. By determining an average usage amount of routine supplies, the business does not tie up
funds by purchasing too many items or risk running out of the items. Employees' preferences, the
budgeting method, and the vendors' daily sales promotions are not primary considerations when
determining the optimal level of supplies that the business should keep on hand.
</h5></div><h5 id='q85'>85. What is a common activity that takes place during the “determining possible solutions” stage of the
problem-solving process?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Detecting issues</option><option value="B">B. Collecting relevant data</option><option value="C">C. Brainstorming ideas</option><option value="D">D. Checking assumptions

2012 HS ICDC

FINANCE CLUSTER EXAM

9
</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Brainstorming ideas</h5><h5>and
ventures. Now, Margaret is very interested in providing Marcus Williams with the financial support that he
needs to start his new business. Margaret is a(n) ____________ , and Marcus is a(n) ____________.
A. licensor, sponsor
C. manager, loan officer
B. franchisee, franchisor
D. angel investor, entrepreneur
87. The reason to write a letter of application to submit with your résumé is to
A. list former employers who are willing to serve as references.
B. summarize why you are a good candidate for the job.
C. include critical information that was left out of the résumé.
D. indicate what days and times are available for an interview.
88. Which of the following finance professionals typically oversees a company's cash management, capital
raising, and investment activities:
A. Treasurer
C. Cash manager
B. Risk manager
D. Underwriter
89. Kyrie is licensed to buy and sell securities and offer financial advice to clients. She is most likely to find
employment with a(n)
A. insurance carrier.
C. brokerage house.
B. investment bank.
D. actuarial service.
90. Who should be take continuing education classes to keep up with changes in tax regulations?
A. Gwen Colbert, Accounts Receivable Supervisor
B. Paul Stanton, Corporate Security Advisor
C. Martha Winters, Certified Public Accountant
D. Carlos Ramirez, Product Acquisition Manager
91. Tosha prepares monthly financial reports for her company's senior executives, helps create company
budgets, reviews the company's tax returns, and analyzes the company's finances. Tosha is most likely
to be a
A. Certified Internal Auditor (CIA).
C. Certified Management Accountant (CMA).
B. Certified Public Accountant (CPA).
D. Certified Fraud Examiner (CFE).
92. Hank would like to meet regularly in person with other financial planners in his geographic area to
discuss trends and issues impacting their profession. Which of the following professional organizations
would best meet Hank's needs:
A. National Association of Professional Financial Advisors
B. Federal Organization of Financial Planners
C. Local Society of Financial Planning Professionals
D. International Financial Planning Association
93. A strong professional relationship is usually a(n) __________ relationship.
A. one-sided
C. majority-rule
B. reciprocal
D. easily maintained
94. Which of the following is an ethical hazard in risk management:
A. Contracting with an insurer with a reputation of adequate claims reserving
B. Working with a public accounting firm that has a whistleblower mechanism
C. Understating loss experience and exposure to an insurance underwriter
D. Questioning a supplier's history of disobeying state and federal regulations
95. Siobhan is utilizing risk-management technology to quantify the potential losses that her company would
incur if a tornado destroyed its largest manufacturing plant. What technique is Siobhan using to forecast
the likely losses?
A. Risk transference
C. Risk modeling
B. Cost-benefit analysis
D. Fundamental analysis

2012 HS ICDC

FINANCE CLUSTER EXAM

10

96. What type of risk-management technology can track individual traders' risk limits and notify management
immediately if any trader exceeds her/his pre-set limit?
A. Data aggregation
C. Automated oversight
B. Stress testing
D. Corporate governance
97. How does forming a captive insurance company typically impact a corporation's federal tax liability?
A. Eliminates the corporation's state tax liabilities
B. Increases tax due on the captive's loss reserves
C. Increases the corporation's sales tax liabilities
D. Reduces tax due on the captive's premiums
98. Reggie recently learned that four consumers have injured themselves while using the 2X400 Chop It
Right blender, a kitchen appliance that his company sells. As a result, he is urging company
management to discontinue sales of the 2X400 Chop It Right. Reggie is attempting to limit the company's
__________ -liability exposure.
A. employment
C. product
B. employee
D. fiduciary
99. Which of the following statements regarding internal control systems is true:
A. If a company has an internal control system, monitoring and reporting are unnecessary.
B. The purpose of an internal control system is to eliminate risk.
C. Many companies use internal control systems instead of risk management.
D. Internal controls are a component of enterprise risk management.
100. What type of control is typically used to help company executives understand the impact of external risks
on the organization and its long-range plans?
A. Process
C. Strategic
B. Management
D. Variable

2012 HS ICDC

FINANCE CLUSTER EXAM—KEY

11

1. A
Violates a statute. If the contract involves carrying out illegal activities, the contract is unenforceable
because it requires one or both parties to break laws. Unilateral contracts are contracts that involve
promises made by one party. Collateral is anything of value belonging to the borrower that is pledged to
the lender to guarantee that the loan (contract) will be repaid. A stipulation is a restriction or circumstance
that one party requires the other party to agree to. Unilateral contracts and contracts that require
collateral or other stipulations are legal if the contract meets all of the features of legal contracts
(agreement, consideration, capacity, genuineness of assent, and legality of purpose).
</h5></div><h5 id='q86'>86. Margaret Holden is a wealthy woman who has financially supported other individuals' business ideas and
ventures. Now, Margaret is very interested in providing Marcus Williams with the financial support that he
needs to start his new business. Margaret is a(n) ____________ , and Marcus is a(n) ____________.</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. licensor, sponsor</option><option value="B">B. franchisee, franchisor</option><option value="C">C. manager, loan officer</option><option value="D">D. angel investor, entrepreneur</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: angel investor, entrepreneur</h5><h5>An entrepreneur is an individual who identifies an opportunity to create new
value, develops and offers a unique product, assumes the risks of starting and building a business,
focuses on the improvement and growth of that business, and receives personal and financial rewards for
her/his efforts. An angel investor is someone who provides start-up money to a new business. A
franchisee is someone who buys the right to sell the goods or services of the parent company
(franchisor). A manager is an individual responsible for the coordination of resources in order to
accomplish an organization's goals. Loan officers are employees who coordinate the loan process for
their employers (e.g., bank, mortgage company) and the loan applicant. A licensor is the owner of
copyrighted, patented, or trademarked material. A sponsor is a business, individual, or organization that
pays a fee to be associated with another organization's event.
</h5></div><h5 id='q87'>87. The reason to write a letter of application to submit with your résumé is to</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. list former employers who are willing to serve as references.</option><option value="B">B. summarize why you are a good candidate for the job.</option><option value="C">C. include critical information that was left out of the résumé.</option><option value="D">D. indicate what days and times are available for an interview.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: summarize why you are a good candidate for the job.</h5><h5>A letter of application serves as a way to introduce
yourself, express your interest in a job with the company, and briefly describe why you are a good
candidate for the job. Job seekers should provide a list of references in a separate document. Critical
information should be included in the résumé rather than the letter of application. Job seekers should not
indicate their availability for interviewing in a letter of application because it is rude and arrogant.
</h5></div><h5 id='q88'>88. Which of the following finance professionals typically oversees a company's cash management, capital
raising, and investment activities:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Treasurer</option><option value="B">B. Risk manager</option><option value="C">C. Cash manager</option><option value="D">D. Underwriter</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: Treasurer</h5><h5>A treasurer working in corporate finance typically oversees the business's cash management,
capital raising, and investment activities. The treasurer is also usually responsible for the business's
financial goals and objectives. Risk managers and cash managers are also financial managers, but their
duties are more limited than those of the treasurer. Risk and insurance managers oversee the company's
risk-management programs as well as the organizational insurance budget. Cash managers monitor the
organization's cash flow. Underwriters work in the insurance industry. They are responsible for
calculating the risk of loss, establishing premium rates, and designing policies to cover risk.
</h5></div><h5 id='q89'>89. Kyrie is licensed to buy and sell securities and offer financial advice to clients. She is most likely to find
employment with a(n)</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. insurance carrier.</option><option value="B">B. investment bank.</option><option value="C">C. brokerage house.</option><option value="D">D. actuarial service.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is C: brokerage house.</h5><h5>The most common type of firm that specializes in trading securities is the brokerage
house. Agents who work for brokerage houses, trading securities for clients, are known by titles such as
brokers, stockbrokers, registered representatives, and account executives. They must pass difficult
exams to obtain the licensing necessary for trading on the stock exchange. Investment banks specialize
in helping corporations and governments issue securities. They also aid in complicated financial matters
such as mergers and acquisitions. An insurance carrier is an insurance company. It sells policies to
individuals and businesses to protect them from financial losses resulting from an accident or disaster.
Actuaries typically work for insurance companies and are responsible for assessing risk using statistical
analysis and for helping to design policies to minimize the cost of that risk.
</h5></div><h5 id='q90'>90. Who should be take continuing education classes to keep up with changes in tax regulations?</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Gwen Colbert, Accounts Receivable Supervisor</option><option value="B">B. Paul Stanton, Corporate Security Advisor</option><option value="C">C. Martha Winters, Certified Public Accountant</option><option value="D">D. Carlos Ramirez, Product Acquisition Manager</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: Martha Winters, Certified Public Accountant</h5><h5>Many professions require businesspeople to complete
continuing education courses to maintain their certifications and licensures. Because Certified public
accountants work with financial data, they need to keep up with changes in regulations, including taxes.
Security advisors, accounts-receivable supervisors, and product-acquisition (purchasing) managers need
to keep up with changes in their fields; however, these positions do not usually require extensive
knowledge about changes in tax regulations.
</h5></div><h5 id='q91'>91. Tosha prepares monthly financial reports for her company's senior executives, helps create company
budgets, reviews the company's tax returns, and analyzes the company's finances. Tosha is most likely
to be a</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Certified Internal Auditor (CIA).</option><option value="B">B. Certified Public Accountant (CPA).</option><option value="C">C. Certified Management Accountant (CMA).</option><option value="D">D. Certified Fraud Examiner (CFE).</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Certified Management Accountant (CMA).</h5><h5>Management accountants typically prepare financial reports
for managers and other internal users. In turn, these managers and other internal users use the data to
control day-to-day operations and to make financial decisions and plans that affect the company.
Management accountants also typically help create company budgets, prepare and review company tax
returns, and analyze the company finances, among other things. The Certified Management Accountant
(CMA) designation is the most appropriate certification for management accountants such as Tosha. A
Certified Public Accountant (CPA) is a general accountant who completes a variety of tasks for multiple
clients. These tasks are likely to include preparing individual clients' tax returns, conducting audits, and
assisting with financial planning. A Certified Internal Auditor (CIA) is usually responsible for assessing the
accuracy of his/her company's accounting records and determining if the company's internal controls are
effective. A Certified Fraud Examiner (CFE) typically detects, investigates, and prevents cases of
accounting fraud.
</h5></div><h5 id='q92'>92. Hank would like to meet regularly in person with other financial planners in his geographic area to
discuss trends and issues impacting their profession. Which of the following professional organizations
would best meet Hank's needs:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. National Association of Professional Financial Advisors</option><option value="B">B. Federal Organization of Financial Planners</option><option value="C">C. Local Society of Financial Planning Professionals</option><option value="D">D. International Financial Planning Association</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is C: Local Society of Financial Planning Professionals</h5><h5>If Hank is interested in meeting other area financial
planners in person regularly to discuss trends and issues impacting financial planning, he would be wise
to join a local organization such as the Local Society of Financial Planning Professionals. Since the
members work in close proximity to each other, they are more likely to hold face-to-face meetings on a
regular basis. A national or international professional organization may not necessarily have a chapter in
Hank's area.
</h5></div><h5 id='q93'>93. A strong professional relationship is usually a(n) __________ relationship.</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. one-sided</option><option value="B">B. reciprocal</option><option value="C">C. majority-rule</option><option value="D">D. easily maintained</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: reciprocal</h5><h5>Strong professional relationships are essential for success in the finance industry, and for
these relationships to be strong, they must also be reciprocal. A reciprocal relationship is one in which
each member of the relationship helps the other. In finance, this usually means referring clients to each
other for the different services that they require. For instance, a bank loan officer may refer clients to a
particular insurance agent for their homeowners' insurance. Likewise, that insurance agent would refer
clients interested in refinancing their mortgage or purchasing a home to the bank loan officer. A strong
professional relationship in finance is not a one-sided or majority-rule relationship. Instead, the
professionals should help each other and consider each other to be equals. A strong professional
relationship is not necessarily easily maintained.
</h5></div><h5 id='q94'>94. Which of the following is an ethical hazard in risk management:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Contracting with an insurer with a reputation of adequate claims reserving</option><option value="B">B. Working with a public accounting firm that has a whistleblower mechanism</option><option value="C">C. Understating loss experience and exposure to an insurance underwriter</option><option value="D">D. Questioning a supplier's history of disobeying state and federal regulations</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: Understating loss experience and exposure to an insurance underwriter</h5><h5>Ethical behavior and risk
management are closely related. Unethical behavior can expose a company to a variety of different risks.
To manage these risks, a risk manager must exercise ethical behavior and expect it of other employees
within the company as well. A wide range of internal ethical hazards arise when working with an
insurance company. If the risk manager unethically understates the company's loss experience or loss
exposure to an insurance underwriter to reduce the company's insurance premium, s/he exposes the
company to legal and financial risks. A risk manager can reduce his/her company's exposure to risk by
working with a public accounting firm that has a whistleblower mechanism, contracting with an insurer
with a reputation of adequate claims reserving, and questioning a supplier's history of disobeying state
and federal regulations.
</h5></div><h5 id='q95'>95. Siobhan is utilizing risk-management technology to quantify the potential losses that her company would
incur if a tornado destroyed its largest manufacturing plant. What technique is Siobhan using to forecast
the likely losses?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. Risk transference</option><option value="B">B. Cost-benefit analysis</option><option value="C">C. Risk modeling</option><option value="D">D. Fundamental analysis

2012 HS ICDC

FINANCE CLUSTER EXAM

10
</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: Risk modeling</h5><h5>Businesses commonly use risk modeling to quantify the potential losses that they would
incur if certain events took place, such as a tornado destroying a company's largest manufacturing plant.
Because risk modeling is a very complex process, businesses usually rely on risk-management
technology to aid in the analyses and forecasts. Cost-benefit analysis involves quantifying the costs and
benefits of a certain project to determine the most appropriate course of action to pursue. Risk
transference is a risk-response strategy that involves moving the impact of a risk to someone or
something else. In investing, fundamental analysis is the study of all aspects of a company in an effort to
understand its intrinsic value.
</h5></div><h5 id='q96'>96. What type of risk-management technology can track individual traders' risk limits and notify management
immediately if any trader exceeds her/his pre-set limit?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Data aggregation</option><option value="B">B. Stress testing</option><option value="C">C. Automated oversight</option><option value="D">D. Corporate governance</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is C: Automated oversight</h5><h5>Risk managers can use automated oversight technology to assign specific risk
limits to individual divisions, departments, or employees. If focused on individual employees, the
automated oversight technology tracks each employee's activity to determine if and when s/he exceeds
the pre-set risk limit. If the employee exceeds his/her limit, the software notifies management
immediately. Management can then take the necessary actions to reduce the risk exposure. Financial
analysts use stress testing to determine a particular financial instrument's stability in different extreme
events. Data aggregation involves pulling together data from several disparate systems into one central
repository or database. Corporate governance is the system by which directors handle their responsibility
toward shareholders.
</h5></div><h5 id='q97'>97. How does forming a captive insurance company typically impact a corporation's federal tax liability?</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Eliminates the corporation's state tax liabilities</option><option value="B">B. Increases tax due on the captive's loss reserves</option><option value="C">C. Increases the corporation's sales tax liabilities</option><option value="D">D. Reduces tax due on the captive's premiums</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is D: Reduces tax due on the captive's premiums</h5><h5>Even if it is not associated with an insurance company, an
individual company, industry, or association may create a captive insurance company to specifically
protect its parent group(s). The captive insurer aids its parent group(s) by reducing premium expenses,
freeing up capital, and covering risks not commonly addressed by the greater insurance company. In
addition, forming a captive insurance company can reduce, eliminate, or defer federal taxes due on the
corporation's insurance premiums. A captive insurer typically decreases the tax due on a company's loss
reserves. Forming a captive insurance company does not typically increase the corporation's sales tax
liabilities, nor does it eliminate the corporation's state tax liabilities.
</h5></div><h5 id='q98'>98. Reggie recently learned that four consumers have injured themselves while using the 2X400 Chop It
Right blender, a kitchen appliance that his company sells. As a result, he is urging company
management to discontinue sales of the 2X400 Chop It Right. Reggie is attempting to limit the company's
__________ -liability exposure.</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. employment</option><option value="B">B. employee</option><option value="C">C. product</option><option value="D">D. fiduciary</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: product</h5><h5>One aspect of risk management involves limiting a company's liability exposures as much as
possible. Even though only four people have injured themselves using the 2X400 Chop It Right blender—
and there's no indication that any of these consumers are taking legal action against the company—
Reggie knows that continuing to sell the blender could open the company up to expensive productliability lawsuits. Therefore, to limit the risk of being sued and having to pay thousands of dollars in
damages, the company should discontinue sales of that particular blender. Reggie is not attempting to
limit his company's employee-, employment-, or fiduciary-liability exposures.
</h5></div><h5 id='q99'>99. Which of the following statements regarding internal control systems is true:</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. If a company has an internal control system, monitoring and reporting are unnecessary.</option><option value="B">B. The purpose of an internal control system is to eliminate risk.</option><option value="C">C. Many companies use internal control systems instead of risk management.</option><option value="D">D. Internal controls are a component of enterprise risk management.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: Internal controls are a component of enterprise risk management.</h5><h5>An internal control system consists of
procedures and practices designed to ensure compliance, protect resources, and increase reliability of
company data. Risk management and internal control systems are both key components of enterprise
risk management (ERM). Company management uses ERM to assess, manage, and limit risks
throughout business operations and across all business departments, divisions, etc. By assessing,
managing, and limiting the company's risks, the enterprise risk management system (including internal
controls and risk management) helps the business to reach its objectives and goals. Although an internal
control system can reduce risk, it cannot eliminate all risk. Internal control systems and risk management
work together in an organization; a business cannot have one without the other. Even if a company has
an internal control system, periodic monitoring and reporting of business processes and data are still
necessary.
</h5></div><h5 id='q100'>100. Jacob will not sell the oak desk that he made for anything less than $235. This is an example of the
___________ price.</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. demand</option><option value="B">B. supply</option><option value="C">C. equilibrium</option><option value="D">D. market</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: supply</h5><h5>The supply price is the minimum price that producers are willing and able to receive for a
product. The demand price is the maximum price that buyers are able and willing to pay for the product.
The market price is the actual price that prevails in a market at any particular time—the price that you
actually pay for a service or good. The equilibrium price occurs when the quantity of a product that
buyers want to buy is equal to the quantity that sellers are willing to sell at a certain price.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Finance_13_Whole_Homework.js"></script></html>