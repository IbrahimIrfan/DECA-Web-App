<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 6</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Business A's failure to keep an agreement to supply Business B with a certain good or service is an
example of a situation that is covered by __________ law.</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. trade</option><option value="B">B. antitrust</option><option value="C">C. contract</option><option value="D">D. property</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: contract</h5><h5>A contract is an agreement between two or more businesses stating that one party is to do
something in return for something provided by the other party. Contract law recognizes contracts as
voluntary promises that must be fulfilled. If Business A fails to honor its agreement to supply Business B
with a good or service, Business A is in breach of contract. This is a situation that is covered by contract
law, and Business B would be able to appeal to the legal system to enforce the contract. Trade law deals
with transactions between nations. Antitrust laws deal with restraint of trade. Property law deals with real
property.
</h5></div><h5 id='q2'>2. A debtor-creditor relationship exists when</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. interest is charged.</option><option value="B">B. a sale is paid in full.</option><option value="C">C. a contract is invalidated.</option><option value="D">D. stocks are liquidated.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is A: interest is charged.</h5><h5>When an individual or business charges interest on money that another individual or
business borrows, a debtor-creditor relationship exists. An invalid contract and a sale that is paid in full at
the time of transaction do not establish a debtor-creditor relationship. In some situations, a debtor may
liquidate stocks to pay a creditor; however, this does not always occur.
</h5></div><h5 id='q3'>3. Walt purchased stock based on false information from an online message board. The scammers who
posted the information had purchased the stock and hyped it up on the Internet to encourage
unsuspecting investors to buy it and drive up its price. After the price went up, the scammers sold off their
stock. The price of the stock then fell, leaving Walt with worthless stock. Walt was the victim of</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. pump and dump.</option><option value="B">B. a pyramid scheme.</option><option value="C">C. affinity fraud.</option><option value="D">D. phishing.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: pump and dump.</h5><h5>Pump and dump is an investment scam that takes place mostly online. Scammers buy
a small stock and then hype it up to other investors, causing its price to rise. When the price is high, the
scammers sell their stock, leaving the victims to deal with the rapid price decline afterwards. A pyramid
scheme is an illegal form of multi-level marketing in which emphasis is placed on collecting initial fees
from as many people as possible. Affinity fraud is an investment scam in which the scammer claims to be
a member of the group s/he is targeting. Affinity fraud often takes the form of a Ponzi or pyramid scheme.
Phishing is an online identity-theft scam that fools its victims into believing they are submitting sensitive,
personal information (such as credit card numbers or bank passwords) to a legitimate website.
</h5></div><h5 id='q4'>4. Last year, Mr. McKinney gave a portion of his wages to a local charity and was not required to pay taxes
on the amount of his donation. This is an example of a(n)</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. estate allocation.</option><option value="B">B. tax deduction.</option><option value="C">C. tax-deferred investment.</option><option value="D">D. investment disbursement.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: tax deduction.</h5><h5>The government does not require individuals and businesses to pay tax on income under
certain circumstances, such as charitable contributions. Estate allocation involves dividing or designating
a person's assets among his/her beneficiaries. Tax-deferred investments are financial products that are
taxed at the time of disbursement.
</h5></div><h5 id='q5'>5. After finding several inconsistencies with its financial data, the MSV Company hired a compliance officer
to monitor its financial processes and to ensure that the company is complying with regulations. What
type of internal control has the business implemented?</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Product</option><option value="B">B. Preventative</option><option value="C">C. Corrective</option><option value="D">D. Conditional</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: Corrective</h5><h5>Corrective controls are initiatives taken to fix a problem that has already been detected. Hiring
a compliance officer to monitor financial processes is a corrective action because someone had already
detected data inconsistencies. Preventative controls involve actions to keep something from happening
before it occurs. Product controls are activities the business uses to manage the processes, quality, and
quantity of goods and services. Conditional controls allow certain actions to occur within a specific set of
circumstances.
</h5></div><h5 id='q6'>6. To be most effective, continuous-inspection compliance technology should have access to transactional
information</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. at its source.</option><option value="B">B. biweekly.</option><option value="C">C. samples.</option><option value="D">D. liquidity ratios.</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is A: at its source.</h5><h5>To prevent an intermediary from tampering with transactional data, continuous-inspection
compliance technology such as a virtual auditor must have access to the information at its source.
Because continuous-inspection technology works continually to identify errors and violations, it needs
access to transactional information as the transactions actually occur, not biweekly. Rather than
reviewing samples of transactional information to verify compliance, the technology must have access to
all transactional data. Liquidity ratios are not relevant to a conversation about continuous-inspection
compliance technology.
</h5></div><h5 id='q7'>7. Tyrone is writing a research paper for his business class. What question should Tyrone ask as he looks
for valid sources?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Do I agree with the viewpoint of this author?</option><option value="B">B. Is this material interesting and easy to read?</option><option value="C">C. Does this source provide relevant graphic aids?</option><option value="D">D. Is the information in this source up to date?

®
</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: Is the information in this source up to date?

®
</h5><h5>Explanation not available</h5></div><h5 id='q8'>8. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1105

FINANCE CLUSTER EXAM

1

1. Business A's failure to keep an agreement to supply Business B with a certain good or service is an
example of a situation that is covered by __________ law.</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. Ask her supervisor to clarify the directions</option><option value="B">B. Turn in her work quickly so her supervisor can identify the needed corrections</option><option value="C">C. Restart the assignment working off her new thought for step two</option><option value="D">D. Email her work to three coworkers to get their opinions</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is P: Email her work to three coworkers to get their opinions</h5><h5>relationships with international clients, businesspeople should try to learn as much as they can
about their clients' cultures, customs, and social values. Adapting communication styles requires
businesspeople to be patient, flexible, empathetic, respectful, confident (but not overly so), honest
(transparent), and sensitive to their clients' cultures and customs. Projecting biased, demanding,
manipulative, or indifferent attitudes may offend the clients.
</h5></div><h5 id='q9'>9. Jack says to Wendi, “If I understand you correctly, you are saying that you want to change the format of
the inventory report so it will be easier for the managers to analyze.” What communication technique is
Jack using to clarify Wendi's suggestion?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Passive listening</option><option value="B">B. Expressing an opinion</option><option value="C">C. Paraphrasing</option><option value="D">D. Quoting</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is C: Paraphrasing</h5><h5>Message recipients use many techniques to encourage and indicate their understanding of
a speaker's message. In the example, Jack is paraphrasing to verify his understanding of Wendi's
statement. Paraphrasing involves restating a message in other words to confirm the message recipient's
understanding. To use paraphrasing effectively, the message recipient must actively listen to the
speaker's message. Paraphrasing does not involve expressing an opinion. Quoting involves reciting or
writing a thought, idea, or statement using the speaker's exact words.
</h5></div><h5 id='q10'>10. What is the purpose of developing and using graphics in business reports?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. To communicate information</option><option value="B">B. To entertain the audience</option><option value="C">C. To fill up the page layout</option><option value="D">D. To highlight reference material</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is A: To communicate information</h5><h5>The purpose of developing and using graphics in business reports is to
communicate information. In most cases, graphics are used to explain complex information or to highlight
information that is of the most importance. The use of graphics often adds interest and makes the
information easier to understand. Graphics are not used to entertain the audience, fill up the page layout,
or highlight reference material.
</h5></div><h5 id='q11'>11. Which of the following is a formatting characteristic of a full-block business letter:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Indented first paragraph</option><option value="B">B. Double-spacing within the paragraph</option><option value="C">C. No paragraph indents</option><option value="D">D. All paragraphs use right justification.</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is C: No paragraph indents</h5><h5>Many businesses use the full-block method to format business letters. All
components of the letter (date, address, greeting, body, closing, signature block) use left justification,
which means all text is aligned on the left side of the margin. Writers using the full-block format do not
indent the first sentence of each paragraph. Other formatting characteristics of full-block letters are the
use of single-spacing within the paragraphs and the use of double-spacing between the paragraphs.
</h5></div><h5 id='q12'>12. Which of the following is an example of persuasive messages that businesses write:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Electronic mail</option><option value="B">B. Collection letter</option><option value="C">C. Handwritten note</option><option value="D">D. Interoffice memo</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is B: Collection letter</h5><h5>A collection letter is a type of persuasive message that many businesses write to
customers who are delinquent in making payments on their accounts. The purpose of the collection letter
is to persuade customers to send payment or to contact the business to make some type of arrangement.
Collection letters should not offend customers but should convince them to respond immediately. Many
businesses write electronic mail, handwritten notes, and interoffice memos, but these types of messages
are not necessarily persuasive.
</h5></div><h5 id='q13'>13. A characteristic of a simple written report is that it usually is</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. abstract.</option><option value="B">B. formal.</option><option value="C">C. short.</option><option value="D">D. detailed.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is C: short.</h5><h5>A characteristic of a simple written report is that it usually is short and to the point. The purpose of
writing simple reports is to present basic information in an abbreviated form so that the recipients can
read it quickly and use the information in their decision making. Simple written reports are informal rather
than formal. They should address the issue in simple terms rather than present abstract information.
Simple written reports provide the basic points rather than detailed information.
</h5></div><h5 id='q14'>14. Three types of communication usually found in a business with a formal communication network are</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. informational, official, and conversational.</option><option value="B">B. grapevine, informal, and standard.</option><option value="C">C. upward, horizontal, and diagonal.</option><option value="D">D. downward, upward, and lateral.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: downward, upward, and lateral.</h5><h5>Communication in a business with a formal staff communication system
usually moves in three directions—up, down, and sideways. Upward communication is from employees
to management, downward communication is from management to employees, and lateral is
communication between staff members on the same level. Grapevine communication is unofficial
information passed from one person to another in writing or through conversation. An informal
communication system usually has an active grapevine. The other alternatives are not types of
communication.
</h5></div><h5 id='q15'>15. Which of the following is most likely to happen to employees who are discourteous to the business's
customers:</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. They may be promoted.</option><option value="B">B. They may be fired.</option><option value="C">C. They may win an award.</option><option value="D">D. They may lose their benefits.

</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is B: They may be fired.</h5><h5>More people lose their jobs because they can't get along with other people than for
any other reason. Establishing positive customer/client relations is very important to a business's
success. Employees who damage customer relations are not likely to be promoted or given awards.
Benefits cannot be taken away for misconduct.
</h5></div><h5 id='q16'>16. Businesses benefit when employees handle customer inquiries in an effective manner because</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. customers feel the need to ask more questions.</option><option value="B">B. customers feel free to return products.</option><option value="C">C. customers' confidence in the business increases.</option><option value="D">D. customers' total purchases are reduced.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: customers' confidence in the business increases.</h5><h5>Customers' confidence in a business grows when the
business provides accurate answers to their product questions. They feel the sales staff are
knowledgeable, which also gives customers more confidence in the products they buy. Customers are
less likely to need to return products when their questions about those products have been answered,
and their total purchases are more likely to increase than decrease. Customers may need to ask fewer
questions when their inquiries are handled in an effective manner.
</h5></div><h5 id='q17'>17. What should help businesspeople adapt their communication styles to appeal to clients from other
cultures?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Being patient, flexible, and empathetic</option><option value="B">B. Being confident, biased, and manipulative</option><option value="C">C. Being sensitive, transparent, and demanding</option><option value="D">D. Being respectful, indifferent, and honest</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is A: Being patient, flexible, and empathetic</h5><h5>Explanation not available</h5></div><h5 id='q18'>18. When providing services to clients, financial professionals have the responsibility to supply</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. payment options.</option><option value="B">B. accurate information.</option><option value="C">C. credit counseling.</option><option value="D">D. bank statements.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: accurate information.</h5><h5>The purpose of developing and using graphics in business reports is to
communicate information. In most cases, graphics are used to explain complex information or to highlight
information that is of the most importance. The use of graphics often adds interest and makes the
information easier to understand. Graphics are not used to entertain the audience, fill up the page layout,
or highlight reference material.
</h5></div><h5 id='q19'>19. Customer Relationship Management (CRM) data are sometimes called “perishable” data because the
data</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. may be non-standardized or unformatted.</option><option value="B">B. are often duplicated.</option><option value="C">C. can become inaccurate over time.</option><option value="D">D. often contain junk or garbage.</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: can become inaccurate over time.</h5><h5>Customer Relationship Management (CRM) data are often referred to
as “perishable” data because while the data are true at the time they are recorded, the data are likely to
become inaccurate over time. For example, someone's address or phone number may change as the
result of a move. CRM data are sometimes duplicated, non-standardized, unformatted, junk, or garbage,
but those characteristics alone do not make them perishable.
</h5></div><h5 id='q20'>20. Which of the following statements about economic resources is true:</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. All economic resources are limited.</option><option value="B">B. All natural resources can be replaced.</option><option value="C">C. Economic resources are considered consumer goods.</option><option value="D">D. Economic resources are the outputs of production.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: All economic resources are limited.</h5><h5>Economic resources are items that can be used to produce goods
and services, and they are in limited supply. The categories of economic resources are natural
resources, human resources, and capital goods. Some natural resources, such as forests, can be
replaced, but others, such as oil or coal, cannot. Consumer goods are products that are purchased and
consumed by their ultimate users. Economic resources are the inputs of production.
</h5></div><h5 id='q21'>21. Which of the following factors affecting the business environment is represented by the business's
location:</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Cultural</option><option value="B">B. Environmental</option><option value="C">C. Economic</option><option value="D">D. Political</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is B: Environmental</h5><h5>Access to raw materials, availability of natural resources, amount of pollution, and a
business's location are examples of environmental factors affecting the business environment. Cultural
factors involve customers' values, preferences, beliefs, etc. Economic factors relate to how people
generate revenue to obtain desired goods and services. Government stability and laws are political
factors that operate in the business environment.
</h5></div><h5 id='q22'>22. In a market economy what consumers want and need helps to answer the basic economic question of</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. how products will be produced.</option><option value="B">B. who will do the production.</option><option value="C">C. what products will be produced.</option><option value="D">D. how products will be allocated.</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is C: what products will be produced.</h5><h5>Some of the factors that affect the decision as to what will be produced
include which items are profitable, what consumers want and need, and what resources are available.
Who will do the production and how products will be produced are not basic economic questions. How
products will be allocated depends upon the type of economic system.
</h5></div><h5 id='q23'>23. What exists when a market is legally controlled by one supplier and there are no substitute
goods/services readily available?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. Price discrimination</option><option value="B">B. Regulated monopoly</option><option value="C">C. Price competition</option><option value="D">D. Nonprice competition</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: Regulated monopoly</h5><h5>These companies are allowed to exist when legislators believe that one large
company can more efficiently serve consumers than several small ones. Price discrimination is an illegal
activity in which a business charges customers different prices for similar products. Price competition
occurs when businesses use prices to attract scarce customer dollars. Nonprice competition occurs when
businesses compete on a basis other than price.
</h5></div><h5 id='q24'>24. What type of tax are businesses required to pay on the profits they earn?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Sales</option><option value="B">B. Excise</option><option value="C">C. Income</option><option value="D">D. Property

3

</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is C: Income</h5><h5>Income tax is a tax on profit. When businesses earn a profit from supplying goods and services
to consumers, they pay a certain percentage of that profit to the government. The tax that businesses
pay on the profits they earn is not an example of excise or sales tax. Property tax is a tax on material
goods rather than on profit.
</h5></div><h5 id='q25'>25. What usually decreases as the rate of inflation increases?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. Interest rates</option><option value="B">B. Purchasing power</option><option value="C">C. Export quotas</option><option value="D">D. Money supply</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: Purchasing power</h5><h5>Purchasing power is a consumer's ability to purchase goods and services. The rate of
inflation, the percentage of change in price levels, has a major effect on purchasing power because when
inflation is high, a dollar will not buy as much. For example, if the rate of inflation increases from last year
to this year, $1.00 will buy less this year than it did last year. If inflation increases and incomes stay the
same, people will lose purchasing power and not be able to buy the same amount of goods and services.
Money supply is the total quantity of money that exists at one time in a nation. The interest rate is the
percentage figure used in calculating interest charges. Export quotas are the restrictions on the quantity
of goods that can move out of a country.
</h5></div><h5 id='q26'>26. Which of the following is an internal factor that has an effect on business cycles:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Inventory levels</option><option value="B">B. Political changes</option><option value="C">C. New discoveries</option><option value="D">D. Foreign conflicts</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is A: Inventory levels</h5><h5>A
descriptive test key, including question sources and answer rationale, has been provided the
DECA chartered association advisor.

Copyright © 2015 by Marketing & Business Administration Research and
Curriculum Center®, Columbus, Ohio (dba MBAResearch). Each individual test item contained
herein is the exclusive property of MBAResearch. Items are licensed to DECA only for use as
configured within this exam, in its entirety. Use of individual items for any purpose other than as
specifically authorized is prohibited. Possession of this exam, without written authorization,
under any other circumstances is a copyright violation. Posting to inter- or intranet sites is
specifically forbidden unless written permission is obtained prior to posting. Report violations to
DECA at 703.860.5000 and MBAResearch at 800.448.0398. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1105

FINANCE CLUSTER EXAM—KEY

14

1. C
Contract. A contract is an agreement between two or more businesses stating that one party is to do
something in return for something provided by the other party. Contract law recognizes contracts as
voluntary promises that must be fulfilled. If Business A fails to honor its agreement to supply Business B
with a good or service, Business A is in breach of contract. This is a situation that is covered by contract
law, and Business B would be able to appeal to the legal system to enforce the contract. Trade law deals
with transactions between nations. Antitrust laws deal with restraint of trade. Property law deals with real
property.
</h5></div><h5 id='q27'>27. The French-Canadian culture relies heavily on nonverbal communication to get messages across. This
means it is a(n)</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. ethnocentric culture.</option><option value="B">B. religious culture.</option><option value="C">C. corrupt culture.</option><option value="D">D. high-context culture.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: high-context culture.</h5><h5>Since the French-Canadian culture relies heavily on nonverbal communication to
get messages across, it is a high-context culture. A low-context culture is one in which people speak
more directly. Relying on nonverbal communication does not make a culture more religious, more
corrupt, or more ethnocentric (believing their culture is superior).
</h5></div><h5 id='q28'>28. John is generally a good worker, except that he lacks the ability to see what needs to be done without
being told. What personal trait is John lacking?</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. Empathy</option><option value="B">B. Honesty</option><option value="C">C. Initiative</option><option value="D">D. Creativity</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is C: Initiative</h5><h5>Initiative is willingness to act without having to be told to do so and sometimes includes
willingness to accept/seek additional or unpleasant duties. A person with initiative is ready, willing, and
able to think and act on his/her own. Creativity is the ability to generate unique ideas, approaches, and
solutions. Empathy is the ability to put oneself in another person's place. Honesty is acting in a truthful,
fair manner.
</h5></div><h5 id='q29'>29. Employees who never discuss confidential or personal business information with other employees are
demonstrating their</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. ability to communicate.</option><option value="B">B. honesty and integrity.</option><option value="C">C. intelligence and initiative.</option><option value="D">D. orderly and systematic behavior.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is B: honesty and integrity.</h5><h5>Employees demonstrate their honesty and integrity when they refuse to violate the
trust a company places in them. Many employees have access to some confidential information and
should discuss it only as dictated by company policy. Intelligence is the individual's ability to learn, and
initiative is the willingness to act without having to be told to do so. Orderly and systematic behavior
results from being organized and following a plan. Communicating involves exchanging information.
</h5></div><h5 id='q30'>30. In order to benefit from criticism, you must take an objective look at it and decide how much of it is</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. too difficult to worry about.</option><option value="B">B. short term versus long term.</option><option value="C">C. from someone you dislike.</option><option value="D">D. valid and based on fact.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is D: valid and based on fact.</h5><h5>In order to benefit from criticism, you must take an objective look at it and decide
how much of it is valid and based on fact. If it is relevant feedback and points out areas that truly need
improvement, work on them. It is not necessary to determine how much of the criticism is short term or
long term. In order to benefit from criticism, you need to look past the person who gave you the criticism
to the validity of the criticism itself. It is possible to receive valid criticism from someone whom you don't
like. If the criticism is difficult to understand, ask your supervisor, coworkers, or others around you for
specific suggestions on what to do or how to change.
</h5></div><h5 id='q31'>31. Which of the following is a way to demonstrate empathy:</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. Give advice to people in need.</option><option value="B">B. Develop a good imagination.</option><option value="C">C. Use tact when speaking.</option><option value="D">D. Ignore a coworker who is different.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is C: Use tact when speaking.</h5><h5>Tact is the ability to do or to say the right thing in any circumstance. Empathy is
the ability to put yourself in another person's place. Using tact is one way to demonstrate empathy.
Developing a good imagination is a way to develop empathy. Empathetic individuals refrain from
criticizing or giving advice. Ignoring a coworker because s/he is different is prejudicial. Empathetic people
are not prejudiced.
</h5></div><h5 id='q32'>32. Melanie dressed for her job interview at a local bank in a pair of old, comfortable jeans, a sweatshirt, and
well-worn Nikes. Which of the following messages is Melanie sending to the interviewer through her
choice of clothes:</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. I care a lot about the outcome of this interview.</option><option value="B">B. I would really like to be hired for this job.</option><option value="C">C. I consider my own comfort my first priority.</option><option value="D">D. I'm someone who will support the image of the bank.

</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: I consider my own comfort my first priority.</h5><h5>The clothing that people choose to wear sends a message to
other people and is considered a form of nonverbal communication, or body language. An individual who
does not dress appropriately for a job interview is sending a clear message that s/he did not consider the
interview important. In this situation, Melanie dressed for her own comfort, rather than dressing in a
professional manner. The interviewer is likely to interpret Melanie's nonverbal message to be that she
would not like to be hired for the job, does not care about the outcome of the interview, and would not
support the bank's image.
</h5></div><h5 id='q33'>33. What is one factor that determines a manager's credibility with employees?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. Reputation</option><option value="B">B. Creativity</option><option value="C">C. Patience</option><option value="D">D. Aptitude</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: Reputation</h5><h5>A manager who has the reputation of being knowledgeable and experienced usually has
credibility with employees. Credibility is believability, and employees are more likely to believe a manager
who has the appropriate background and ability. Managers who have a reputation of being unethical or
poorly informed often have difficulty persuading employees because the managers lack credibility.
Aptitudes are natural talents for learning specific skills. Creativity is the ability to generate unique ideas,
approaches, or solutions. Patience is the ability to endure life's aggravations and difficulties calmly.
</h5></div><h5 id='q34'>34. Which of the following statements is true about determining your personal vision for the future:</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. It involves following a step-by-step plan.</option><option value="B">B. It depends more on emotion than logic.</option><option value="C">C. It requires facts and concrete goals.</option><option value="D">D. It is risk free and time bound.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: It depends more on emotion than logic.</h5><h5>A vision is the future you wish to create. Often, a vision begins
with an abstract idea that is based on emotion rather than logic. Because a vision is abstract (indefinite),
you must have or develop the tolerance for dealing with abstract terms and ideas rather than facts. For
this reason, a step-by-step plan does not always work when a person is working toward a vision for the
future. Working toward and achieving a vision requires the willingness to take risks over a long period of
time.
</h5></div><h5 id='q35'>35. When making a plan for improvement, the coachee's job is to</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. give constructive criticism.</option><option value="B">B. use questioning skills.</option><option value="C">C. provide motivation.</option><option value="D">D. take personal responsibility for making the changes.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: take personal responsibility for making the changes.</h5><h5>When making a plan for improvement, the
coachee's job is to take personal responsibility for making the changes. Nothing you say or do to
motivate the coachee will be effective if s/he hasn't taken ownership of the need to improve. It's the job of
the coach to use questioning skills, provide motivation, and give constructive criticism.
</h5></div><h5 id='q36'>36. Why are there no specific rules for workers to follow in treating others fairly?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Businesses object to having rules.</option><option value="B">B. Every workplace is different.</option><option value="C">C. Workers know how to be fair.</option><option value="D">D. Rules are difficult to remember.</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Every workplace is different.</h5><h5>There are no hard-and-fast rules for treating coworkers with fairness and
respect because every workplace is different, and each group of workers is different. Businesses would
not object to having fairness rules, but since this is not feasible, they often set policies for employees to
follow. Fairness rules would not necessarily be difficult to remember. Workers need training or policies to
follow since most people do not automatically know how to be fair.
</h5></div><h5 id='q37'>37. When Matthew receives a check four times a year for income he has earned on his stock investments, he
is receiving</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. deposits.</option><option value="B">B. credit.</option><option value="C">C. dividends.</option><option value="D">D. cash.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: dividends.</h5><h5>A dividend is a sum of money that a corporation pays to a stockholder as earnings on an
investment. The corporation usually pays dividends by check to stockholders on a quarterly basis. The
stockholder can deposit the dividend check into a savings or checking account or convert it to cash.
Credit, deposits, and cash are not forms of income that are earned by owning stock.
</h5></div><h5 id='q38'>38. Choosing to buy an item at the check-out counter is often an example of</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. smart shopping.</option><option value="B">B. poor use of credit.</option><option value="C">C. financial self-control.</option><option value="D">D. impulsive spending.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: impulsive spending.</h5><h5>Choosing to buy an item at the check-out counter is a classic example of impulsive
spending. Poor use of credit may or may not be involved. Choosing not to buy the item would illustrate
financial control and would be a good example of smart shopping.
</h5></div><h5 id='q39'>39. Which of the following is a financial want rather than a financial need:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Food</option><option value="B">B. Education</option><option value="C">C. Clothing</option><option value="D">D. Shelter</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is B: Education</h5><h5>Education is a financial want rather than a financial need. Financial needs are the basics that
are necessary for survival. Food, clothing, and shelter are necessary for survival, but education isn't.
</h5></div><h5 id='q40'>40. Melissa writes checks to pay for her rent, utilities, and groceries, and she keeps a record of all these
transactions in her check register. Keeping an accurate check register helps Melissa</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. determine when she needs to add funds to her savings account.</option><option value="B">B. track the amount of money she has spent.</option><option value="C">C. understand the checking account's restrictions and fees.</option><option value="D">D. decide when to order new checks.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: track the amount of money she has spent.</h5><h5>A check is a negotiable instrument or bank draft made
payable to a specific party for a specific amount of money. A check serves as a written promise to the
check bearer that money is available in the issuer's bank account. Checks are a common form of
financial exchange. Both individuals and businesses use checks to pay for goods and services such as
rent, utilities, food, and supplies. When writing a check, an individual or business keeps a check register
that records information about the transaction. This information includes the date the check is written, to
whom the check is made payable, the amount of the check, and the check number. The register is a
central location to record and track all of the checks written and the amount of money spent. Check
registers do not help the check issuers determine when to add funds to a savings account, understand
the checking account's restrictions and fees, or decide when to order new checks.
</h5></div><h5 id='q41'>41. Why is it important for individuals to periodically validate their credit histories?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. To avoid being denied credit</option><option value="B">B. To understand credit laws</option><option value="C">C. To find out about different types of credit</option><option value="D">D. To protect themselves from slander

</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: To avoid being denied credit</h5><h5>Individuals should periodically validate their credit histories to make sure
that the information is correct. In some cases, inaccurate or false information may appear in a credit
history, which will result in an individual being denied credit. To make sure this doesn't happen,
individuals should review the information and contact the credit bureau to change or remove inaccurate
information. Individuals do not validate their credit histories to understand credit laws, find out about
different types of credit, or protect themselves from slander.
</h5></div><h5 id='q42'>42. Henry is a professional banker. Only certain people—"members"—may save at or borrow money from his
deposit-taking financial institution. Henry most likely works for a(n)</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. mortgage company.</option><option value="B">B. credit union.</option><option value="C">C. insurance company.</option><option value="D">D. CPA firm.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is B: credit union.</h5><h5>Credit unions are essentially cooperatives providing financial products and services to a
group of individuals who work for the same employer or share some other common interest or
characteristic. Only members may save at or borrow from a credit union. Credit unions offer many
different types of accounts, including interest-bearing checking accounts, also called share-draft
accounts. Mortgage companies, insurance companies, and Certified Public Accounting (CPA) firms are
not deposit-taking financial institutions.
</h5></div><h5 id='q43'>43. Thad is investing in a money market, which buys and sells products such as</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. agricultural goods.</option><option value="B">B. shares of stock.</option><option value="C">C. treasury bills.</option><option value="D">D. technology.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is C: treasury bills.</h5><h5>A financial market is an organized effort or exchange that facilitates the buying and selling
of financial assets. There are many types of financial markets, including money markets. Money markets
involve the buying and selling of short-term, low-risk financial products such as treasury bills, which are
issued by the government. Stock, agricultural goods (soft commodities), and technology are often highrisk investments.
</h5></div><h5 id='q44'>44. Which of the following is not a factor contributing to financial convergence and consolidation:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Desire for illiquid assets</option><option value="B">B. Technological advances</option><option value="C">C. Financial deregulation</option><option value="D">D. Desire for lower costs</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: Desire for illiquid assets</h5><h5>Liquid assets are financial assets such as stocks that can easily be converted
into cash. Illiquid assets, therefore, are assets that cannot be easily converted into cash or sold without a
significant drop in their value. Subprime mortgage assets, for example, became illiquid assets during the
recent financial crisis. Financial firms don't merge because they want illiquid assets that are worth very
little. Instead, financial convergence and consolidation may be driven by financial companies' desire to
acquire more liquid capital. Technological advances, financial deregulation, and a desire for lower costs
have also contributed to financial convergence and consolidation.
</h5></div><h5 id='q45'>45. Under what circumstances would stock prices increase?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. When consumer spending increases</option><option value="B">B. During times of high unemployment</option><option value="C">C. When interest rates increase</option><option value="D">D. During a bear market period</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: When consumer spending increases</h5><h5>Increased consumer spending usually indicates that the economy
is growing and unemployment is low. Because more people are working, they have more money to invest
in the financial markets. Higher interest rates make it more expensive for businesses to obtain the funds
they need to expand their operations and typically causes stock prices to decrease. A bear market exists
when stock prices decrease, and a bull market exists when the stock prices increase.
</h5></div><h5 id='q46'>46. Certain health and safety regulations require many types of businesses to</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. offer exercise programs.</option><option value="B">B. purchase new machinery.</option><option value="C">C. routinely inspect equipment.</option><option value="D">D. install security cameras.</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: routinely inspect equipment.</h5><h5>Some businesses operate equipment that may present a safety hazard if
the equipment is not operating properly. As a result, certain health and safety regulations require these
businesses to routinely inspect equipment to make sure it is safe. In some cases, government inspectors
routinely visit the business to inspect equipment. If the inspectors find that the equipment is
malfunctioning, they have the authority to force the business to stop using the equipment until it has been
repaired and inspected again. Health and safety regulations do not require businesses to purchase new
machinery, offer exercise programs, or install security cameras.
</h5></div><h5 id='q47'>47. Financial globalization tends to cause an increase in</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. taxes on international transactions.</option><option value="B">B. investors' exposure to business cycle risks.</option><option value="C">C. herd behavior among investors.</option><option value="D">D. limits on foreigners' access to domestic markets.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is C: herd behavior among investors.</h5><h5>Although financial globalization tends to increase investors' access to
many different financial markets, financial globalization also seems to increase the risks of speculative
bubbles and herd behavior among investors. Herd behavior involves individuals who act together as a
group without any planned direction. It is usually irrational and driven by emotions. In good times,
investors hurry to join others in a buying frenzy. But, in bad financial times, fearful investors join others in
a rush to get out of risky markets. By diversifying their funds in many different countries, investors are
able to diversify their risk and reduce their exposure to business cycle risks. To enable capital to flow
more freely across their national borders, many countries have lowered their taxes on international
financial transactions.
</h5></div><h5 id='q48'>48. A mutual fund's total liabilities are $5,600,000, and its assets total $7,950,000. There are currently
31,000,000 shares outstanding. What is the net asset value of the fund?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. 7.58%</option><option value="B">B. 6.45%</option><option value="C">C. 7.29%</option><option value="D">D. 8.06%</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is A: 7.58%</h5><h5>The net asset value of a mutual fund is the dollar value for one share of its stock. To find the net
asset value, first subtract the total liabilities from the total assets to calculate the fund's total value
($7,950,000 - $5,600,000 = $2,350,000). Then, divide the fund's total value by the number of shares
outstanding ($2,350,000 ÷ 31,000,000 = 0.0758 = 7.58%).
</h5></div><h5 id='q49'>49. According to today's stock quotation table, the current price of Macy's stock is $18.99 per share. Last
year, the company paid investors a dividend of $0.20 per share. What is the current yield on Macy's
stock?</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. 3.80%</option><option value="B">B. 2.00%</option><option value="C">C. 1.05%</option><option value="D">D. 4.95%

</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is C: 1.05%</h5><h5>A stock's current yield is a measure of the amount of last year's dividend as a percentage of the
stock's current price. To calculate the current yield on Macy's stock, divide last year's dividend per share
by the current price per share ($0.20 ÷ $18.99 = 0.0105318 = 1.05%).
</h5></div><h5 id='q50'>50. A severe storm blows down trees that fall on a business and collapse the roof and break windows. This
type of damage results from ___________ risks.</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. financial</option><option value="B">B. human</option><option value="C">C. economic</option><option value="D">D. natural</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: natural</h5><h5>Natural risks are chances of loss that result from natural phenomena, such as a severe storm.
Human risks are chances of loss caused by human weakness and unpredictability, such as dishonesty.
Economic risks are risks caused by changes in the market that force a lowering of prices, a change of
product, or failure of a business—such as competition. Financial risks involve the money of the
business—the capital. Financial risks are the basic risk in marketing.
</h5></div><h5 id='q51'>51. When Alana prepares a report so that all of the financial data is clearly disclosed, she is ensuring that the
information is</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. flexible.</option><option value="B">B. relevant.</option><option value="C">C. timely.</option><option value="D">D. transparent.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: transparent.</h5><h5>When financial information is fully disclosed and is presented in a clear, understandable
way, it is transparent. Transparent information is not buried in a document or presented in a way that
deliberately confuses the reader. Relevant information consists of data that are helpful to users of the
information. Timely information is current or up to date. Flexible data are often used in or applicable to
different situations. Alana's report may or may not contain flexible, relevant, or timely information.
</h5></div><h5 id='q52'>52. Calculate a business's total cash receipts for one month if it had cash sales of $6,500, credit sales of
$2,450, cost of goods sold of $2,725, and total expenses of $1,980.</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. $6,500</option><option value="B">B. $8,900</option><option value="C">C. $6,225</option><option value="D">D. $4,245</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: $6,500</h5><h5>Total cash receipts is the total of all of the sources of income that the business lists under cash
receipts. Total cash receipts includes cash sales. Only collected money, not monies owed to the
business from credit sales, is recorded under cash receipts. In this example, only cash sales of $6,500 is
part of total cash receipts. Total cash paid out includes cost of goods sold and all other business
expenses.
</h5></div><h5 id='q53'>53. Businesses use budgets to estimate how they will</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. file their taxes.</option><option value="B">B. spend their money.</option><option value="C">C. calculate their assets.</option><option value="D">D. depreciate their assets.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: spend their money.</h5><h5>A budget estimates how a business will earn and spend its money. Businesses use
budgets to estimate how they will spend the money they earn as income. Businesses have expenses,
and budgets help businesses plan how to allocate income in order to pay those expenses. Businesses
do not use budgets to calculate their assets, file their taxes, or depreciate their assets.
</h5></div><h5 id='q54'>54. A financial-information management system can help a financial manager to make which of the following
types of decisions:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Employee scheduling</option><option value="B">B. Capital budgeting</option><option value="C">C. Vendor selections</option><option value="D">D. Adding/dropping products</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is B: Capital budgeting</h5><h5>A financial-information management system is a set of processes, people, and
equipment used to gather, store, organize, and provide financial information to decision makers. A
financial manager might use a financial-information management system to make capital budgeting
decisions. Capital budgeting involves developing a plan to acquire and finance long-term business
assets. Financial managers would not use a financial-information management system to schedule
employees. Although a financial-information management system might be useful when selecting
vendors or adding/dropping products, those decisions would not be made by financial managers.
</h5></div><h5 id='q55'>55. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. agent</option><option value="B">B. interpreter</option><option value="C">C. analyst</option><option value="D">D. steward</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is D: steward</h5><h5>Financial-information management's stewardship function involves protecting financial data
from tampering, loss, unauthorized access, and unauthorized use. While a financial-information
management professional's job responsibilities might include interpreting or analyzing financial data,
those are not the functions that s/he is carrying out when protecting the financial information. An agent is
an intermediary who assists in the sale and/or promotion of goods and services but does not take title to
them.
</h5></div><h5 id='q56'>56. An advantage to businesses that use master data management applications is the ___________ of the
data.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. complexity</option><option value="B">B. variation</option><option value="C">C. replication</option><option value="D">D. consistency</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: consistency</h5><h5>Master data management involves the collection, storage, accessibility, and maintenance of
the business's nontransactional data (e.g., product, employee). Effective master data management
involves providing consistent, accurate data for all employees who use the data throughout the
organization. An important aspect of master data management is ensuring that the organization uses one
rather than several versions of a particular computer application. Effective master data management
applications reduce the replication of data records. Master data management applications often handle
complex data; however, if the complex data are not consistent, the data are not useful to the employees
who use it.
</h5></div><h5 id='q57'>57. A business wants to determine which customers are most likely to buy $100,000 in products from them in
the next year, so it uses its computer system to search for customers who meet a set of criteria related to
sales. What process is the business using to obtain the desired financial information?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Accounting</option><option value="B">B. Data mining</option><option value="C">C. Surveying</option><option value="D">D. Industry forecasting

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: Data mining</h5><h5>Data mining is the process of searching computer databases to look for patterns of
information and correlations among information. Businesses use the information they obtain from data
mining to make business decisions, such as analyzing and determining the customers who possess the
highest buying potential. By having this type of information available, businesses can target their
marketing efforts to these customers. Accounting is the process of keeping and interpreting financial
records. Surveying is a marketing research technique that involves asking customers questions to learn
their opinions and the reasons behind those opinions. Industry forecasting involves making predictions of
the future prospects for entire industries (e.g., housing, retailing).
</h5></div><h5 id='q58'>58. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data-mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Artificial neural networks</option><option value="B">B. Decision trees</option><option value="C">C. Nearest-neighbor method</option><option value="D">D. Dashboards</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is A: Artificial neural networks</h5><h5>Three common data mining techniques are artificial neural networks, decision
trees, and the nearest-neighbor method. An artificial neural network is a data-mining technique often
used to review financial records to identify possible errors and questionable entries. Decision trees, on
the other hand, are commonly used to classify data and build models. The nearest-neighbor method
classifies data records according to similar historical data. A dashboard is a data-mining tool that
summarizes a business's financial data and presents that information in easy-to-read charts and/or
tables.
</h5></div><h5 id='q59'>59. Which of the following budgeting software applications tracks a business's cash, interest, and dividends:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Revenue recognition</option><option value="B">B. Workflow management</option><option value="C">C. Inventory planning</option><option value="D">D. Capital expenses</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Revenue recognition</h5><h5>The primary function of budgeting software is to help a business forecast and
monitor income and expenses for all of its functions, including sales, promotion, production, payroll, etc.
Advanced software can generate different types of reports by integrating financial data from a variety of
sources (e.g., cash flows) to help the business make decisions about how to best manage its money.
Because an important aspect of budgeting involves knowing how much money the business has at any
given time, revenue recognition applications help the business track various sources of revenue.
Analyzing the amount of revenue available helps the business determine how to allocate funds to cover
its various cash outflows, such as capital expenses, inventory purchases, and operating (e.g., workflow)
expenses.
</h5></div><h5 id='q60'>60. Lawrence's manager asked him to prepare a visual representation of key performance indicators,
including cash flow, liquidity, profitability, and liability. Lawrence should use his company's analytic
software to create a(n)</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. operating agreement.</option><option value="B">B. profit-and-loss statement.</option><option value="C">C. cost standard.</option><option value="D">D. financial scorecard.</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: financial scorecard.</h5><h5>Many financial analysis applications include the capability to create financial
scorecards containing key financial indicators and up-to-date financial information. Cash flow, liquidity,
profitability, and liability are examples of metrics that are often included on a financial scorecard. Rather
than simply listing data on the scorecard, business employees can use financial analysis applications to
develop charts and graphs that present the data in much more readily understandable ways. A profit-andloss statement is a summary of business transactions that shows net profit before and after taxes by
analyzing sales, purchases, cost of goods sold, and operating expenses for a specified period. While
Lawrence's financial scorecard probably contains information that also appears on the company's profitand-loss statement, the financial scorecard presents additional financial metrics. Cost standards are
established specifications used to measure how much a project or product costs. An operating
agreement is a written document signed by members of a limited liability partnership or limited liability
company that specifies the terms of the business arrangement.
</h5></div><h5 id='q61'>61. Yvonne is running a query to create, delete, or modify other database objects. What type of query is
Yvonne running?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Select</option><option value="B">B. Data-definition</option><option value="C">C. Crosstab</option><option value="D">D. Pass-through</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Data-definition</h5><h5>Running a query in a database is the equivalent of giving the database instructions for
working with specific data. Data-definition queries tell the database to create, delete, or modify other
database objects. Select and crosstab queries are used to retrieve specific data and present them in
reports. A pass-through query tells the database engine to pass the query to a remote database server
for processing.
</h5></div><h5 id='q62'>62. Which of the following individuals is an internal user of a business's financial data:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Creditor</option><option value="B">B. Investor</option><option value="C">C. Manager</option><option value="D">D. Tax collector</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is C: Manager</h5><h5>Managers are internal users of a business's financial data. Managers use these data—often in
the form of custom-designed financial reports—to control day-to-day operations and to make financial
decisions and plans that affect the business. They rely on the data to help them make smart decisions,
so it is imperative that the data are reported accurately. Investors, creditors, and government tax
collectors also use a business's financial data, but they are all considered to be external users of the data
because they do not work for the company.
</h5></div><h5 id='q63'>63. The primary purpose of the accounting function is to prepare and present relevant financial information,
while the primary purpose of the finance function is to</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. adjust journal entries based on the information provided.</option><option value="B">B. modify accounts receivable based on the information provided.</option><option value="C">C. apply the information to calculate the business's equity.</option><option value="D">D. use the information to make financial decisions.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: use the information to make financial decisions.</h5><h5>Accounting is the process of keeping and interpreting
financial records. The finance function is responsible for obtaining funds and managing the business's
money in ways that achieve the business's goals. The financial records that are maintained and prepared
by the accounting function are analyzed by the finance function of the business, which uses the
information to make decisions about how to achieve the business's goals. Adjusting journal entries,
tracking accounts receivable, and calculating ratios (e.g., equity) are tasks carried out by a business's
accounting department.
</h5></div><h5 id='q64'>64. Which of the following statements is true about accounting systems:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. The managerial accounting system is useful for planning and internal decision making.</option><option value="B">B. The financial accounting system focuses on segments of the company rather than the company
as a whole.</option><option value="C">C. The government requires all businesses to use the managerial accounting system.</option><option value="D">D. The financial accounting system is used by external audiences, so reporting flexibility is an
advantage to the business.</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is A: The managerial accounting system is useful for planning and internal decision making.</h5><h5>Businesses use
managerial accounting systems for internal use. These systems help managers plan, control resources,
and make decisions for various segments of the company. For example, the managerial accounting
system often involves obtaining financial information to determine if the business should order more
goods for inventory or if it should hire additional production workers. The government requires
businesses to use the financial accounting system to report their financial positions to external users. The
financial accounting system involves reporting financial information in certain ways by applying the
generally accepted accounting principles (GAAP). The government does not require businesses to use
managerial accounting systems, so the ways in which managerial accounting systems obtain and use
information are flexible.
</h5></div><h5 id='q65'>65. In relation to recording business transactions, a primary difference between the cost and accrual
accounting systems is</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. timing.</option><option value="B">B. scope.</option><option value="C">C. frequency.</option><option value="D">D. complexity.

</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is A: timing.</h5><h5>The cash accounting system involves recording transactions when the business receives or
spends money. Businesses that use the accrual accounting system record their transactions at the time
they occur—regardless of when money is exchanged. Scope, frequency, and complexity are not primary
differences between the cost and accrual accounting systems.
</h5></div><h5 id='q66'>66. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Comparative statement</option><option value="B">B. Frequency ratio</option><option value="C">C. Accounts-receivable summary</option><option value="D">D. Sales-transaction log</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: Comparative statement</h5><h5>A comparative statement is a financial report that compares the same types of
data from different periods of time (e.g., year to year). Comparative statements help businesses identify
changes and trends in a business's production activities including production rates, raw-material costs,
product quality, etc. Businesses also use comparative reports to evaluate other business activities such
as sales, accounts-receivable, and payroll. Frequency is a quantitative measure of the average number
of times a target consumer is exposed to an advertising message.
</h5></div><h5 id='q67'>67. A creditor carefully examines a business's financial information to determine whether the business has
sufficient money to meet its short-term obligations when they come due. In this situation, the creditor is
concerned about the business's</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. profitability.</option><option value="B">B. liquidity.</option><option value="C">C. efficiency.</option><option value="D">D. investment return.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is B: liquidity.</h5><h5>The creditor wants to know that the business has sufficient cash on hand to meet its
obligations. If the creditor determines that the business is unable to meet its current short-term
obligations, the creditor most likely will deny the credit request. Profitability is concerned with whether the
business is making a profit and whether it's sufficient to maintain business operations. Efficiency focuses
on whether the business is making the best use of its resources. Investment return lets investors and
creditors know what return they can expect to get from a business.
</h5></div><h5 id='q68'>68. Susan wants to obtain a loan to purchase business equipment. She calls different banks to obtain
information about the interest rates and the types of loans available, so she can determine which bank is
the best option. Susan is analyzing the financial information that she is collecting to</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. correct inaccurate financial data.</option><option value="B">B. guide her decision making.</option><option value="C">C. determine business profitability.</option><option value="D">D. solve a business problem.</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: guide her decision making.</h5><h5>Many businesspeople analyze financial data to make business decisions,
such as obtaining a loan with the best interest rates and payment plans. Susan is not analyzing the
information to correct inaccurate data, nor is she trying to determine her business's profitability. There
isn't enough information available to determine if Susan is trying to solve a business problem.
</h5></div><h5 id='q69'>69. The accounting treatment of capital expenditures should be __________ over multiple reporting periods.</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. hedged</option><option value="B">B. flexible</option><option value="C">C. consistent</option><option value="D">D. callable</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: consistent</h5><h5>An accounting treatment is a set of rules that specifies how to handle specific accounts and
transactions such as capital expenditures. The accounting treatment of like items should be consistent
within each reporting period and from one reporting period to the next. If a company does not treat a
particular account or type of transaction consistently from period to period or year to year, the data
become incomparable, less meaningful, and possibly even useless to users of the company's financial
information. If investors or financial experts analyze the company's financial data and discover that the
accounting treatment of capital expenditures varies—and if the company has no valid explanation for not
treating these expenditures the same way during different reporting periods—the investors and financial
analysts may avoid investing in that particular company. Therefore, it is usually in a company's best
interest to be consistent in its accounting treatment of different accounts and transactions. Accounting
treatment of capital expenditures should not be flexible, hedged, or callable over multiple reporting
periods.
</h5></div><h5 id='q70'>70. Group orientation sessions for new employees are very important because they</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. explain the duties of each job.</option><option value="B">B. help to motivate employees.</option><option value="C">C. encourage organizational input.</option><option value="D">D. provide in-depth training.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: help to motivate employees.</h5><h5>A good orientation program makes new employees feel welcome, gives
them an overview of the business, and helps to motivate them to do their best. Orientation often includes
giving the new workers a handbook so that they have a copy of the information being presented. The
primary purpose of an orientation session is to provide general information; it is not used to discuss
specific job duties, provide in-depth training, or solicit input about organizational processes.
</h5></div><h5 id='q71'>71. What does determining the target market's buying behavior involve?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. Finding out where the market is located</option><option value="B">B. Finding out what the market will purchase</option><option value="C">C. Finding out how the market is organized</option><option value="D">D. Finding out why the market exists</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is B: Finding out what the market will purchase</h5><h5>One aspect of determining the target market's buying behavior
involves finding out what the market will purchase. Businesses need to know what the market wants in
order to provide those products. If the target market does not want or need a business's products, the
market will not buy even if the products are readily available and competitively priced. Finding out where
the market is located, how the market is organized, and why the market exists are part of determining the
target market rather than the target market's buying behavior.
</h5></div><h5 id='q72'>72. Todd created a graphic organizer to illustrate his business's quality-control processes. He used a
combination of pictures, graphs, and simple statements to sequentially present the information. What did
Todd develop?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Proposal</option><option value="B">B. Outline</option><option value="C">C. Draft</option><option value="D">D. Storyboard</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is D: Storyboard</h5><h5>Business professionals sometimes use graphic organizers to illustrate certain processes or
to describe a problem and its solution. A storyboard uses a combination of pictures, graphs, and simple
statements to present information in a sequential order. An outline is a general plan giving only the main
points of a topic. A draft is the preliminary version of a piece of writing. A proposal is a plan or
suggestion. Outlines, drafts, and proposals are not graphic organizers.
</h5></div><h5 id='q73'>73. Carson is a staff accountant, and he needs to look at last year's tax return. However, he can't find it
anywhere. Which information management guideline is not being followed in this situation?</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Set and consistently follow organizational information management practices.</option><option value="B">B. Make sure that information is accurate.</option><option value="C">C. Make sure that information is retrievable.</option><option value="D">D. Prioritize information management needs according to business needs.

</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: Make sure that information is retrievable.</h5><h5>When Carson is unable to find last year's tax return when he
needs it, information is not retrievable. This will slow down Carson's productivity on the job. The tax
return may or may not be accurate. Setting and following organizational practices and prioritizing
according to business needs may or may not relate to Carson's information not being retrievable.
</h5></div><h5 id='q74'>74. What is the primary function of the Random Access Memory (RAM) component of a computer?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Serves as a temporary holding area for files and programs</option><option value="B">B. Reads the computer code that provide visual effects</option><option value="C">C. Stores data and programs permanently</option><option value="D">D. Enables the user to apply point-and-click commands</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: Serves as a temporary holding area for files and programs</h5><h5>Random Access Memory or RAM is a
temporary workspace that stores data and programs that the user is actively using. A computer
containing a lot of RAM enables users to open and work on several files and programs at one time. When
the user has finished working with a file or program, s/he saves or stores the information permanently on
the hard drive. The video card is a component of the system that converts code so the user can view
items on the computer monitor. The computer mouse is a tool that enables computer users to enter
commands.
</h5></div><h5 id='q75'>75. Which of the following demonstrates the correct method to ensure that all words in a phrase are included
in a web search:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. (Discipline is the most important part of success)</option><option value="B">B. [There is no tree that the wind has not shaken]</option><option value="C">C. 'To be or not to be'</option><option value="D">D. "Confidence in itself is the secret of success"</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is D: "Confidence in itself is the secret of success"</h5><h5>Explanation not available</h5></div><h5 id='q76'>76. Most businesses maintain records about what customers are buying and how much they are spending in
order to</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. analyze the information.</option><option value="B">B. plan an inventory count.</option><option value="C">C. offer quality service.</option><option value="D">D. develop a quality environment.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: analyze the information.</h5><h5>Most businesses maintain customer records that contain information about what
customers are buying, when they are buying, and how much they are spending. By analyzing this
information, businesses are able to plan future sales and obtain the products that will appeal to
customers and encourage them to buy. Without this type of information, businesses might have no idea
what customers will want to buy in the future, or how much they will be willing to spend. Businesses do
not maintain records about what customers are buying and how much they are spending in order to plan
an inventory count, offer quality service, or develop a quality environment.
</h5></div><h5 id='q77'>77. Which of the following is a business trend that affects all countries:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Decreased inflation</option><option value="B">B. Socialism</option><option value="C">C. Increased regulation</option><option value="D">D. Globalization</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: Globalization</h5><h5>A trend is the general direction in which people or events are moving. Globalization is the
rapid and unimpeded flow of capital, labor, and ideas across national borders. Several factors influence
globalization, including technological advancements (e.g., Internet) and the various trade agreements
(e.g., NAFTA) that have decreased trade regulations. The opening of trade in countries, such as India
and China, which has permitted more foreign businesses to operate within their borders, has also
affected globalization. Socialism is an economic system rather than a trend. Inflation is an economic
factor that often affects trends.
</h5></div><h5 id='q78'>78. A firm's environmental scan reveals that a country is on the brink of civil war, which would affect the firm's
ability to do business in the country. This is an example of a(n) __________ consideration.</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. political</option><option value="B">B. economic</option><option value="C">C. cultural</option><option value="D">D. regulatory</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: political</h5><h5>The purpose of an environmental scan is to determine what conditions are affecting the
business environment. The environmental scan helps the business to determine what, if any, changes it
needs to make, so it remains competitive in the marketplace. Political considerations are important
because government changes, such as a civil war or the presidential elections, could indicate the
possibility of other changes that might affect a specific country's business environment, including
economic, cultural, and regulatory changes.
</h5></div><h5 id='q79'>79. Which of the following forms of technology is most useful in operations:</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. Smart phones</option><option value="B">B. E-readers</option><option value="C">C. Assistive technology</option><option value="D">D. Computer-aided design</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: Computer-aided design</h5><h5>Computer-aided design is very useful in operations. Designing and testing
products in the virtual world before trying them out in the real world can save companies a lot of time and
money. Using computer software, a company can design, test, and redesign a product many times over
until it's ready for production—all without wasting unnecessary resources. Assistive technology is any
device that enables people with disabilities to participate fully in the workplace. The term is too broad to
determine whether it would be useful in operations. E-readers are devices that enable people to
download electronic books. While smart phones might also be useful in operations, computer-aided
design stands out as the most useful and specific technology to enhance this business function.
</h5></div><h5 id='q80'>80. What do bond yields typically do during an economic expansion?</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Drop to near zero</option><option value="B">B. Gradually decrease</option><option value="C">C. Increase</option><option value="D">D. Remain unchanged</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: Increase</h5><h5>During an economic expansion, production, employment, income, sales, the demand for
money, and interest rates rapidly increase. As a result, businesses borrow more money (at higher rates)
to expand their operations. And, when businesses borrow more at higher interest rates, bond yields go
up.
</h5></div><h5 id='q81'>81. What is the advantage to a business that installs external surveillance cameras in prominent locations
around its property?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Eliminates the need to install alarms</option><option value="B">B. Reduces the risk of extortion</option><option value="C">C. Discourages attempted burglaries</option><option value="D">D. Prevents armed robberies

</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is C: Discourages attempted burglaries</h5><h5>When would-be burglars see surveillance cameras in several
locations around a business, they are less likely to attempt to break in because they will be videotaped or
photographed by the cameras. When the burglars' actions are taped, law enforcement agencies are
more likely to identify and arrest them. Although surveillance cameras don't prevent all burglaries or
robberies, they can often deter these activities. Most businesses use a combination of security measures
to secure their facilities, including door and window locks and different types of alarm systems.
Businesses need and use different types of alarm systems, such as fire alarms or smoke detectors,
which are often required by law. Therefore, the use of surveillance cameras does not eliminate the need
for alarm systems. Extortion is blackmail and would not necessarily be impacted by surveillance
cameras.
</h5></div><h5 id='q82'>82. It is important for a business to evaluate the financial condition of a potential vendor during the vendorselection process to assess the</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. risk levels of doing business with the vendor.</option><option value="B">B. reliability of the products that the vendor carries.</option><option value="C">C. vendor's levels of customer service.</option><option value="D">D. vendor's required lead times.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: risk levels of doing business with the vendor.</h5><h5>If a vendor is not financially stable, there is a risk that the
vendor may not have the resources to meet the business's needs. And, if the vendor's financial condition
is extremely poor, the vendor may go out of business. A lack of financial resources may affect the
vendor's products, its level of customer services, and its lead times.
</h5></div><h5 id='q83'>83. Which of the following is a production activity:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Receiving</option><option value="B">B. Advertising</option><option value="C">C. Scheduling</option><option value="D">D. Marketing</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is C: Scheduling</h5><h5>Scheduling is the production activity that establishes the timetable to be followed in
production. Businesses establish schedules in order to have the necessary raw materials and the right
number of employees on hand to produce the goods. Scheduling helps businesses to produce the goods
that customers need and have those goods available when customers want them. Marketing is the
process of planning and executing the conception, pricing, promotion, and distribution of ideas, goods,
and services to create exchanges that satisfy individual and organizational objectives. Advertising is any
paid form of nonpersonal presentation of ideas, goods, or services. Receiving is the acceptance of a
shipment of goods.
</h5></div><h5 id='q84'>84. “Big Q” focuses on</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. improving factory conditions.</option><option value="B">B. exceeding customer expectations.</option><option value="C">C. conforming to specifications.</option><option value="D">D. designing and developing products.</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: exceeding customer expectations.</h5><h5>“Big Q” focuses on ingraining quality into every aspect of the
organization to meet and exceed customer expectations. “Little Q” focuses on conforming to
specifications. Neither approach to quality management specifically focuses on improving factory
conditions or designing and developing products, although those may certainly be important goals of a
quality-management system.
</h5></div><h5 id='q85'>85. One of the major functions of business maintenance is to</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. prevent fraudulent behavior.</option><option value="B">B. motivate employees.</option><option value="C">C. create a favorable impression.</option><option value="D">D. guarantee the business's success.</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: create a favorable impression.</h5><h5>The overall impression customers receive as a result of a business's
appearance influences their buying behavior. Therefore, performing routine housekeeping duties (e.g.,
dusting and vacuuming) and maintaining the condition of the equipment, furniture, displays, and fixtures
help a business create a good impression. The primary reason for conducting maintenance activities is
not to motivate employees or prevent fraudulent behavior. Performing maintenance activities cannot
guarantee the success of the business.
</h5></div><h5 id='q86'>86. An overall purpose of establishing goals is to increase your chances of</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. achieving immediate success.</option><option value="B">B. satisfying your wants.</option><option value="C">C. enlarging your income.</option><option value="D">D. avoiding making mistakes.</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: satisfying your wants.</h5><h5>Clear, meaningful goals can also serve as guidelines and help you make better
decisions. Enlarging your income might be a personal goal. Establishing goals cannot guarantee
immediate success or the avoidance of mistakes.
</h5></div><h5 id='q87'>87. Which type of business is known for often being the most innovative?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Old businesses</option><option value="B">B. Small businesses</option><option value="C">C. New businesses</option><option value="D">D. Large businesses</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Small businesses</h5><h5>Although many people assume that large businesses are more innovative, innovations
often come from small businesses. In fact, some studies show that small entrepreneurial companies
create twice as many innovations as large companies. The age of a business does not necessarily affect
its innovative abilities.
</h5></div><h5 id='q88'>88. The essence of time management is to</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. eliminate the need to prioritize activities.</option><option value="B">B. control events in order to accomplish priorities.</option><option value="C">C. focus on spreading work over a period of time.</option><option value="D">D. set a fixed schedule and follow it.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: control events in order to accomplish priorities.</h5><h5>All people need to learn how to manage their time. They
need to maintain control over the events in their lives so that there is a balance among those events. This
involves planning and organizing their personal and professional activities. Time management involves
prioritizing activities, but it does not mean setting a fixed schedule and never deviating. Schedules should
have some flexibility built in to take care of unexpected events. Time management focuses on making the
best use of time rather than on spreading work over a period of time.
</h5></div><h5 id='q89'>89. Which of the following is an example of an employee who is meeting his/her employer's expectations:</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Tom spends the first half hour of the workday chatting with Kate.</option><option value="B">B. Allison focuses on her work tasks so she can meet her deadlines.</option><option value="C">C. Rachel sends a text message to her roommate during a meeting.</option><option value="D">D. Calvin tells a customer about his issues with a difficult coworker.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is B: Allison focuses on her work tasks so she can meet her deadlines.</h5><h5>Businesses have basic expectations
regarding their employees' behavior in the workplace. Employers expect employees to arrive at work on
time; perform their work accurately and efficiently; be honest; and exhibit respect for coworkers,
customers, and company property. Because Allison is focused on her work and strives to meet her
deadlines, she is meeting her employer's expectations. Engaging in idle chitchat and texting during a
meeting are disrespectful actions that waste the company's time and money. Confiding in a customer
about problems with coworkers is inappropriate behavior.
</h5></div><h5 id='q90'>90. Job seekers can often find out about local employment opportunities by accessing a business's</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. employee newsletter.</option><option value="B">B. website.</option><option value="C">C. online catalog.</option><option value="D">D. annual report.

</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: website.</h5><h5>Many companies post their job openings on their websites. In most situations, a business has a
set of procedures for applicants to follow when they apply for jobs online. Some businesses allow job
seekers the ability to set up an account, so they can track and check the status of their applications and
receive email updates about new job openings. Employee newsletters do not always contain information
about current job openings. Online catalogs provide information about the business's goods and
services. Annual reports do not contain information about job openings.
</h5></div><h5 id='q91'>91. After a job interview, an applicant should prepare a follow-up letter that</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. is long and detailed.</option><option value="B">B. is short and typed.</option><option value="C">C. includes a résumé.</option><option value="D">D. contains a photo.</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is B: is short and typed.</h5><h5>A follow-up letter after a job interview should be short and to the point. The purpose is
to briefly thank the interviewer. Typed letters are preferred. Follow-up letters do not contain a photo or
another résumé. They should not be long and detailed.
</h5></div><h5 id='q92'>92. Which of the following is an example of the impact of technology on the financial-services industry:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Blurring the lines between banking, insurance, and investments</option><option value="B">B. More walk-in bank customers</option><option value="C">C. Greater demand for investment professionals</option><option value="D">D. Rising concern about fraud and identity theft</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: Rising concern about fraud and identity theft</h5><h5>One of the impacts of technology on the financial-services
industry is rising concern about fraud and identity theft since so many financial products and services are
now bought and sold online. Encryption technology helps guard against fraud and theft. Banks have
fewer walk-in customers when they offer online banking. Blurred lines between the banking, insurance,
and investment industries is the result of deregulation. Greater demand for investment professionals is
the result of changing demographics.
</h5></div><h5 id='q93'>93. After passing the General Securities Registered Representative Examination or the Canadian Securities
Course exam, a businessperson obtains licensure or certification that allows him/her to work as a(n)</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. estate planner.</option><option value="B">B. accountant.</option><option value="C">C. underwriter.</option><option value="D">D. stockbroker.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is D: stockbroker.</h5><h5>Stockbrokers are required to obtain a license to trade securities. To obtain the license,
stockbrokers must take and pass the General Securities Registered Representative Examination in the
United States. In Canada, individuals must pass the Canadian Securities Course (CSC) exam to work as
a stockbroker. Exam names vary by country, but in the United States, accountants obtain the Certified
Public Accountant (CPA) certification; insurance underwriters obtain the Chartered Life Underwriter
(CLU) certification; and estate planners obtain the Accredited Estate Planner (AEP) certification.
</h5></div><h5 id='q94'>94. Which of the following would afford finance professionals the best opportunity to build long-lasting
relationships with other finance professionals:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Regularly attending trade shows for the finance industry</option><option value="B">B. Actively participating in a local professional association for the finance industry</option><option value="C">C. Occasionally auditing classes at a local postsecondary institution</option><option value="D">D. Actively attending meetings sponsored by the local chamber of commerce</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is B: Actively participating in a local professional association for the finance industry</h5><h5>Active participation in a
professional organization specific to the finance industry affords finance professionals the opportunity to
serve on committees, hold offices, and attend seminars with other local finance professionals. This
involvement may result in a long-term professional relationship for the participants. Regularly attending
trade shows for the finance industry is more likely to result in short-term relationships. Insufficient
information is provided to determine whether the audited classes are for professionals in finance. Actively
attending chamber of commerce meetings gives finance professionals the opportunity to develop
professional relationships with people employed in a variety of industries—not necessarily with other
finance professionals.
</h5></div><h5 id='q95'>95. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. networking.</option><option value="B">B. cooperating.</option><option value="C">C. advertising.</option><option value="D">D. up-selling.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: networking.</h5><h5>Networking involves connecting with individuals who might help accomplish career and
professional goals. By serving on trade association committees, co-authoring articles for publication, and
treating business contacts to dinner or golf, Brynn creates situations in which she has the opportunity to
get to know other professionals and possibly build relationships that will be beneficial for everyone
involved. Cooperating with others shows a willingness to work together to resolve differences or achieve
common goals. Although Brynn is cooperating with others while carrying out these activities, her ultimate
goal is to build a network of business professionals who can help her to achieve her career goals.
Advertising is any paid form of nonpersonal presentation of ideas, images, goods, or services. Up-selling
is a sales technique in which a salesperson suggests a higher priced product than the one originally
requested by the customer.
</h5></div><h5 id='q96'>96. Which of the following risks might result from ethical misconduct:</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Decreased whistle-blowing</option><option value="B">B. Decreased company value</option><option value="C">C. Increased employee support of the company</option><option value="D">D. Increased positive publicity</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: Decreased company value</h5><h5>Once word spreads about the business's unethical behavior, investors will
probably withdraw their financial support of the business. This would cause the company's value to
decrease. With unethical business behavior, the business can expect whistle-blowing to increase
because employees have more activities that they could report. Employees' support for the company is
likely to decrease, along with their productivity. The publicity that appears in the media will be negative,
not positive.
</h5></div><h5 id='q97'>97. To secure confidential financial data that are transmitted through the Internet, businesses often use</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. cross-platform technology.</option><option value="B">B. encryption techniques.</option><option value="C">C. bots.</option><option value="D">D. debuggers.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is B: encryption techniques.</h5><h5>Retrieved August 14,
2014, from https://iaonline.theiia.org/data-mining-101-tools-and-techniques

Test 1105

FINANCE CLUSTER EXAM—KEY

25

59. A
Revenue recognition. The primary function of budgeting software is to help a business forecast and
monitor income and expenses for all of its functions, including sales, promotion, production, payroll, etc.
Advanced software can generate different types of reports by integrating financial data from a variety of
sources (e.g., cash flows) to help the business make decisions about how to best manage its money.
Because an important aspect of budgeting involves knowing how much money the business has at any
given time, revenue recognition applications help the business track various sources of revenue.
Analyzing the amount of revenue available helps the business determine how to allocate funds to cover
its various cash outflows, such as capital expenses, inventory purchases, and operating (e.g., workflow)
expenses.
</h5></div><h5 id='q98'>98. Permission for reprinting is granted
to DECA chartered associations authorized by DECA Inc.
DECA Inc. will impose sanctions on chapters and chartered associations for violations of this
policy up to and including disqualification of competitors and chapters from further participation.

Test 1105

FINANCE CLUSTER EXAM

1

1. Business A's failure to keep an agreement to supply Business B with a certain good or service is an
example of a situation that is covered by __________ law.</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. expropriation.</option><option value="B">B. obstruction of justice.</option><option value="C">C. breach of contract.</option><option value="D">D. substantiation.

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is P: substantiation.

</h5><h5>relationships with international clients, businesspeople should try to learn as much as they can
about their clients' cultures, customs, and social values. Adapting communication styles requires
businesspeople to be patient, flexible, empathetic, respectful, confident (but not overly so), honest
(transparent), and sensitive to their clients' cultures and customs. Projecting biased, demanding,
manipulative, or indifferent attitudes may offend the clients.
</h5></div><h5 id='q99'>99. The primary reason that firms must take steps to control their levels of business risk is to</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. increase their financial liability levels.</option><option value="B">B. increase their visibility in the market.</option><option value="C">C. contribute to the well-being of society.</option><option value="D">D. reduce the chance of financial losses.</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: reduce the chance of financial losses.</h5><h5>Because risk involves the possibility of loss, businesses must be
diligent to control their levels of risk. Businesses can experience financial losses in all areas of the
business—from product recalls and poor hiring selections to poor credit policies and workplace injuries.
Businesses can control their various risks by implementing appropriate business policies, training
employees, and acquiring adequate insurance coverage. By controlling financial risk, businesses can
limit their debt (liabilities). When businesses have low debt, they increase the potential to earn profit,
which contributes to the well-being of society. Businesses increase their visibility in the market in different
ways (positive and negative) and are not always related to controlling their levels of risk.
</h5></div><h5 id='q100'>100. Which of the following statements about economic resources is true:</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. All economic resources are limited.</option><option value="B">B. All natural resources can be replaced.</option><option value="C">C. Economic resources are considered consumer goods.</option><option value="D">D. Economic resources are the outputs of production.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: All economic resources are limited.</h5><h5>Economic resources are items that can be used to produce goods
and services, and they are in limited supply. The categories of economic resources are natural
resources, human resources, and capital goods. Some natural resources, such as forests, can be
replaced, but others, such as oil or coal, cannot. Consumer goods are products that are purchased and
consumed by their ultimate users. Economic resources are the inputs of production.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Finance/Finance_1_Split_Master.js"></script></html>