<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 3</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. A basic principle of procedural due process involves __________ before taking action.</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. awarding damages</option><option value="B">B. obtaining witnesses</option><option value="C">C. providing notice</option><option value="D">D. creating evidence</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is C: providing notice</h5><h5>Due process is the concept that the government must respect all of the legal rights that
are owed to individuals and businesses according to the law of the land. Legal procedure refers to the
methods and processes that are used to protect an individual's or business's legal rights. In many
societies, these rights include the right to be notified of accusation or lawsuit (providing notice), the right
to obtain legal counsel, the right to be heard in court, the right to confront the accuser, etc. Obtaining
witnesses is a pretrial activity. Awarding damages is a possible remedy or outcome of civil litigation. Due
process involves presenting evidence, not creating it.
</h5></div><h5 id='q2'>2. Walt purchased stock based on false information from an online message board. The scammers who
posted the information had purchased the stock and hyped it up on the Internet to encourage
unsuspecting investors to buy it and drive up its price. After the price went up, the scammers sold off their
stock. The price of the stock then fell, leaving Walt with worthless stock. Walt was the victim of</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. a pyramid scheme.</option><option value="B">B. pump and dump.</option><option value="C">C. affinity fraud.</option><option value="D">D. phishing.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: pump and dump.</h5><h5>Pump and dump is an investment scam that takes place mostly online. Scammers buy
a small stock and then hype it up to other investors, causing its price to rise. When the price is high, the
scammers sell their stock, leaving the victims to deal with the rapid price decline afterwards. A pyramid
scheme is an illegal form of multi-level marketing in which emphasis is placed on collecting initial fees
from as many people as possible. Affinity fraud is an investment scam in which the scammer claims to be
a member of the group s/he is targeting. Affinity fraud often takes the form of a Ponzi or pyramid scheme.
Phishing is an online identity-theft scam that fools its victims into believing they are submitting sensitive,
personal information (such as credit card numbers or bank passwords) to a legitimate web site.
</h5></div><h5 id='q3'>3. Frank is an officer of the MUD corporation who recently sold his shares of MUD stock based on
confidential company information. Frank is guilty of illegal</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. affinity fraud.</option><option value="B">B. insider trading.</option><option value="C">C. accounting fraud.</option><option value="D">D. phishing.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: insider trading.</h5><h5>Insider trading occurs when a company's owners, directors, or key management trade its
stock. In some cases, insider trading is legal. It is illegal, however, when these individuals trade their
company's stock based on information that is not disclosed to the public. Affinity fraud is an investment
scam in which the scammer claims to be a member of the group s/he is targeting. Affinity fraud often
takes the form of a Ponzi or pyramid scheme. Accounting fraud occurs when a company or organization
knowingly publishes incorrect information on its financial statements. Phishing is an online identity-theft
scam that fools its victims into believing they are submitting sensitive, personal information (such as
credit card numbers or bank passwords) to a legitimate web site.
</h5></div><h5 id='q4'>4. Six months ago, Xander bought 500 shares of stock at $25 per share. Today, he sold all 500 shares for
$48 per share. What type of tax is Xander obligated to pay as a result of this financial transaction?</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. Luxury tax</option><option value="B">B. Capital gains tax</option><option value="C">C. Excise tax</option><option value="D">D. Stock sales tax</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: Capital gains tax</h5><h5>A capital gain is the increase in an asset's value from the time that it is purchased to
the time that it is sold. The federal government charges capital gains taxes on most capital gains. A
luxury tax is a tax paid on nonessential (and, in many cases, expensive) goods. An excise tax is a tax
placed on a specific good. Luxury and excise taxes can be used to discourage consumption of certain
products or to raise some easy money on products that the government knows people will continue to
purchase, regardless of the tax. Stock sales tax is a fictitious term.
</h5></div><h5 id='q5'>5. Which of the following is often cited as the most significant stumbling block in achieving compliance goals
within large financial organizations:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Poor data quality</option><option value="B">B. Lack of training</option><option value="C">C. Inadequate funding</option><option value="D">D. Improper accounting system</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is A: Poor data quality</h5><h5>Due to the size and complexity of most large financial organizations, data quality is a
challenge. Multiple business units, geographic locations, and product lines create an environment in
which it is difficult to properly integrate data to meet compliance requirements while retaining the quality
and integrity of that data. Lack of training and inadequate funding can make it difficult to reach
compliance goals, but they are not usually cited as the most significant problem in compliance. An
improper accounting system is unlikely to be directly related to the achievement of compliance goals.
</h5></div><h5 id='q6'>6. Which of the following quality management approaches is often used in the finance industry to sustain
regulatory compliance:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Just-in-Time</option><option value="B">B. Six Sigma</option><option value="C">C. Reassurance</option><option value="D">D. Crisis management</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: Six Sigma</h5><h5>Aspects of the Six Sigma approach to quality management are applied in the finance industry
to sustain regulatory compliance. Specifically, Six Sigma's closed-loop control principles (definemeasure-analyze-improve-control) are often incorporated in compliance processes and procedures. Justin-Time, reassurance, and crisis management are not quality management approaches.
</h5></div><h5 id='q7'>7. Which compliance reasoning process detects unbalanced journal entries?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Symbolic reasoning</option><option value="B">B. Contextual reasoning</option><option value="C">C. Temporal reasoning</option><option value="D">D. Cross-source reasoning</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is A: Symbolic reasoning</h5><h5>Compliance technology such as a virtual auditor uses multiple reasoning processes
to identify abnormalities and compliance issues. Symbolic reasoning searches for known compliance
exceptions and problematic patterns of events, including unbalanced journal entries and duplicate journal
entries within a single accounting period. Contextual reasoning examines the circumstances surrounding
each transaction and compares the situation to those of the past to determine compliance issues.
Temporal reasoning considers the timing of each transaction. Cross-source reasoning compares multiple
records of financial transactions to determine if the records are consistent.
</h5></div><h5 id='q8'>8. Which of the following potential compliance issues would temporal reasoning detect:</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. A travel-expense account has a credit balance at the end of an accounting period rather than a
debit balance.</option><option value="B">B. Purchase orders 2870 from Bryan Industries and 2870a from Bryant Industries are very similar.</option><option value="C">C. A new customer recently placed an order that is three times larger than the average order.</option><option value="D">D. Jack temporarily changed a vendor file so funds destined for the vendor would instead be
diverted to his personal checking account.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is A: A travel-expense account has a credit balance at the end of an accounting period rather than a
debit balance.</h5><h5>Explanation not available</h5></div><h5 id='q9'>9. To be reimbursed for business expenses, Luke must obtain and complete an expense-reimbursement
form, attach the original transaction receipts to the completed form, and submit the documentation to his
manager for approval. What is Luke doing?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Developing company policies</option><option value="B">B. Following company procedures</option><option value="C">C. Evaluating company feedback</option><option value="D">D. Assessing company guidelines</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Following company procedures</h5><h5>Policies are the general rules to be followed by company personnel. For
example, a business owner may develop a policy that states the company will reimburse employees for
certain business-related expenses. A procedure is the step-by-step process that personnel follow in
performing a specific task. In the example, Luke was following certain steps to obtain reimbursement for
out-of-pocket expenses that he incurred—obtaining and completing the appropriate form, attaching
receipts, and submitting the documentation to his manager. In the example, Luke did not develop the
policies, evaluate company feedback, or assess company guidelines.
</h5></div><h5 id='q10'>10. Rosemary is making a sales presentation to a group of potential customers. What communication style is
the most appropriate for Rosemary to use with this audience?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Cooperative</option><option value="B">B. Casual</option><option value="C">C. Persuasive</option><option value="D">D. Traditional
</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: Persuasive</h5><h5>Because Rosemary is making a sales presentation, she must present herself in a
professional way that will encourage the audience to buy the product. To do this, she must persuasively
communicate information. Casual communication is generally used with family and friends. When you
cooperate with people, you are trying to get along with them. Traditional is not a communication style.
</h5></div><h5 id='q11'>11. An accounts-receivable employee monitors delinquent accounts by placing them into three folders—30
days past due, 60 days past due, and 90 days past due. How has the employee organized the
information?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Name</option><option value="B">B. Invoice number</option><option value="C">C. Location</option><option value="D">D. Time</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: Time</h5><h5>The system used or the way information is organized often depends on the type of information or
task at hand. In the example, the employee must track delinquent accounts. Because some accounts are
more overdue than other accounts the employee may use time as a method of organizing the
information. Each interval may require the employee to take a different action, such as mailing a late
notice to accounts that are 30 days past due, calling accounts that are 60 days past due, and turning
accounts over to collection agencies that are 90 days past due. Each action is based on a certain time
frame. The example does not indicate if the invoice numbers, locations, or names are organized in a
specific manner.
</h5></div><h5 id='q12'>12. Which of the following statements is true about professional writing standards and manuals:</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. Employers aren't concerned about which writing style their employees use to prepare
documents, as long as the reports are accurate.</option><option value="B">B. Most businesses use a different citation method for each type of report they develop.</option><option value="C">C. Some employers use a different style manual than the one that the experts suggest.</option><option value="D">D. The most widely-used writing style manuals format their bibliographies the same way.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: Some employers use a different style manual than the one that the experts suggest.</h5><h5>Using a specific
writing style provides consistency throughout all of a business's written documents. Generally, certain
fields or disciplines use a particular writing style. For example, the social science and natural science
disciplines tend to use the American Psychological Association (APA) style, while textbook publishers
tend to use the Modern Language Association (MLA) style. However, some organizations do not use the
particular writing style that experts suggest. Therefore, employees must determine and apply their
employers' style preference when preparing business documents. To maintain consistency, businesses
do not usually change writing styles based on the type of report they are writing at a particular time.
Employers may be very rigid about the writing style because the style can affect their professional
integrity or their ability to get funding for a project. Each writing style varies, including the ways in which
bibliographies are formatted.
</h5></div><h5 id='q13'>13. Lucille has created a six-page synopsis to include as a section in the beginning of her 224-page report.
What should Lucille call this section when she creates the report's table of contents?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. Executive summary</option><option value="B">B. Bibliography</option><option value="C">C. Footnotes</option><option value="D">D. Results and recommendations</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is A: Executive summary</h5><h5>The purpose of the executive summary is usually placed at the beginning of a long
report to provide the reader with an overview of the entire document. The audience tends to read the
executive summary to determine whether it is worthwhile to read the rest of the report. The bibliography
lists the resources that the report writer used to obtain the report information. Footnotes are citations or
“notes” that are placed at the bottom of the page of a report or manuscript that includes pertinent
information that is not as important as the primary document information. The results and
recommendations is the section of a report in which the writer provides the outcome of an activity and
recommendations to take a certain course of action.
</h5></div><h5 id='q14'>14. What is the most important aspect of a company's brand promise?</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. Profit maximization</option><option value="B">B. Consistent follow-through</option><option value="C">C. Ongoing promotion</option><option value="D">D. Long-term planning</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: Consistent follow-through</h5><h5>A brand promise is a company's agreement, spoken or unspoken, with
customers that it will meet their expectations and deliver on its brand characteristics and values. A
company must follow through by performing certain actions in consistent ways to fulfill that promise. Both
long- and short-term planning can help the company develop strategies to carry out the brand promise;
however, unless the strategies are carried out consistently, the planning efforts are useless. Ongoing
promotion helps maintain brand awareness, but it does not fulfill the company's commitment to the
customer through product quality, service, etc. The company's profits involve setting internal goals rather
than carrying out promises made to customers.
</h5></div><h5 id='q15'>15. How can a business build its customers' trust and communicate its commitment to ethical practices?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Publish its confidentiality statement</option><option value="B">B. Develop liberal business policies</option><option value="C">C. Hire employees who have a positive attitude</option><option value="D">D. Post its earnings on its web site</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is A: Publish its confidentiality statement</h5><h5>A business can build its customers' trust by communicating that it
will not share its customers' confidential information with third parties, and that it will take measures to
secure online transactions. One way to communicate this commitment is by publishing its confidentiality
statement in company brochures, in e-mail messages, and on its web site. Developing liberal business
policies, hiring employees who have a positive attitude and posting its earnings on its web site may help
build trust with customers; however, these actions do not communicate the business's commitment to
adhering to its ethics.
</h5></div><h5 id='q16'>16. Which of the following scenarios best illustrates a finance professional's commitment to customer
service:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Ann strives to solve customer problems promptly and accurately.</option><option value="B">B. Patricia wears a business suit every day, including casual Fridays.</option><option value="C">C. Jake takes a cell phone call while meeting with a customer.</option><option value="D">D. Gennifer uses technical jargon when speaking with customers.</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is A: Ann strives to solve customer problems promptly and accurately.</h5><h5>To meet or exceed customer
expectations, finance professionals should respond promptly to customer needs, requests, and problems.
While wearing a business suit every day can help to demonstrate a finance professional's commitment to
her/his job, doing so doesn't necessarily demonstrate the person's commitment to customer service.
Finance professionals should not take cell phone calls while meeting with customers, nor should they use
technical jargon. Instead, they should speak in simple terms that customers will understand.
</h5></div><h5 id='q17'>17. Jonathan, an insurance agent, explains both the pros and cons of his products to all of his customers to
help them decide which policies to purchase. Hank, also an insurance agent, explains to his customers
why they should purchase his products, but he doesn't talk about anything negative before making a
sale. Based on this information, which agent is more likely to retain and grow his client base?</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. Jonathan, because he gives his customers too much information.</option><option value="B">B. Jonathan, because his customers feel that they can trust him.</option><option value="C">C. Hank, because he doesn't scare his customers away.</option><option value="D">D. Hank, because he is a very optimistic, upbeat person.</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: Jonathan, because his customers feel that they can trust him.</h5><h5>Jonathan educates his customers about
his products, explaining the positives as well as the negatives. By doing so, Jonathan presents himself as
a truthful, trustworthy individual. Customers are much more likely to return to Jonathan and refer others
to him because they see him as a person they can trust. There is no indication that Jonathan provides his
customers with too much information. Hank is not likely to retain and grow his client base simply because
he is optimistic. And, while customers appreciate an upbeat salesperson, they are likely to get angry with
Hank if something goes wrong that Hank could have warned them about. Angry, displeased customers
are unlikely to return to Hank or refer others to him in the future.
</h5></div><h5 id='q18'>18. Customer Relationship Management (CRM) data are sometimes called “perishable” data because the
data</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. are often duplicated.</option><option value="B">B. can become inaccurate over time.</option><option value="C">C. may be non-standardized or unformatted.</option><option value="D">D. often contain junk or garbage.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is B: can become inaccurate over time.</h5><h5>Customer Relationship Management (CRM) data are often referred to
as “perishable” data because while the data are true at the time they are recorded, the data are likely to
become inaccurate over time. For example, someone's address or phone number may change as the
result of a move. CRM data are sometimes duplicated, non-standardized, unformatted, junk, or garbage,
but those characteristics alone do not make them perishable.
</h5></div><h5 id='q19'>19. While filing a homeowner's insurance claim, Mrs. Ramirez was accidentally disconnected from the call
center representative who was helping her. When Mrs. Ramirez called back, she didn't know whom to
ask for because she couldn't remember the name of the representative who had been assisting her.
What type of Customer Relationship Management (CRM) data would be most helpful in identifying the
representative?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Self-provided data</option><option value="B">B. Demographic data</option><option value="C">C. Interaction data</option><option value="D">D. Historical data

</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Interaction data</h5><h5>Lack of training and inadequate funding can make it difficult to reach
compliance goals, but they are not usually cited as the most significant problem in compliance. An
improper accounting system is unlikely to be directly related to the achievement of compliance goals.
</h5></div><h5 id='q20'>20. To lower costs, SuperCard International has moved its customer-service function from Vancouver to
Delhi, India. What business practice is the company engaging in?</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. Licensing</option><option value="B">B. Diversification</option><option value="C">C. Offshoring</option><option value="D">D. Free agency</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is C: Offshoring</h5><h5>Offshoring is the practice of producing goods in foreign countries and typically involves
moving domestic jobs overseas. Although offshoring can save money for the business and improve
another country's standard of living, it also can cost the business's home country thousands of jobs,
which hurts the domestic economy. Diversification is the management of risks by spreading out financial
investments among a number of different securities or business ventures. Licensing is a business
structure that requires the authorization or permission from an owner entity to use trademarked,
copyrighted, or patented material for a specific activity during a specific time for the profit of both parties.
Free agency is an athlete's ability to renegotiate his/her contract with his/her existing team or with
another team.
</h5></div><h5 id='q21'>21. To accommodate recent regulation changes, a brokerage firm must implement new financial reporting
activities. What positive action can the firm take to help its employees adapt to the change?</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. Hire additional employees who are knowledgeable about the regulations</option><option value="B">B. Survey the employees to get their opinions about the regulatory changes</option><option value="C">C. Revise the firm's vision statement to include the importance of following regulations</option><option value="D">D. Educate and train the employees about the regulatory changes</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is D: Educate and train the employees about the regulatory changes</h5><h5>Businesses must be able to adapt to
environmental changes to thrive in the marketplace. External factors, such as regulation changes, may
require businesses to change the way they carry out certain processes. These processes can affect the
ways in which employees perform their jobs. To help employees adapt to these types of changes,
management must communicate with employees. This may involve providing training and education
programs to help them understand the changes, so they can effectively transition to a new way of doing
things. Surveying employees, revising the firm's vision statement, and hiring additional employees will not
help the employees adapt to regulatory changes.
</h5></div><h5 id='q22'>22. Which of the following is an example of a subsidy:</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Financial grant</option><option value="B">B. Tax increase
</option><option value="C">C. Processing fee</option><option value="D">D. Legal sanction
</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is A: Financial grant</h5><h5>A subsidy is financial aid provided by the government. Governments offer different types
of subsidies to individuals and businesses, including grants. Grants are financial aid that the individual or
business does not need to repay to the government. For example, a private business or institution that
develops medical processes or products may apply for a grant from the government to help finance the
research and development costs. If the business or institution meets the government's requirements, the
government may provide the grant. Taxes, processing fees, and legal sanctions (e.g., fines) are methods
that governments use to acquire funds.
</h5></div><h5 id='q23'>23. One factor that may cause a nation to experience demand-pull inflation is a</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. decrease in demand.</option><option value="B">B. shortage of supply.</option><option value="C">C. fluctuation of interest rates.</option><option value="D">D. change in credit ratings.</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: shortage of supply.</h5><h5>Inflation is a rapid rise in prices. Demand-pull inflation is a type of inflation that results
when demand exceeds supply. When there isn't enough of something, producers often raise prices.
Prices stabilize when equilibrium is reached. Interest rates fluctuate slightly on a daily basis. Unless the
fluctuations result in substantial increases due to different factors, such as government policy changes,
normal interest-rate fluctuations are unlikely to have a dramatic effect on inflation. Credit ratings indicate
a business's or an individual's credit worthiness.
</h5></div><h5 id='q24'>24. A Chilean businessperson wants to greet a British client in English. Instead of saying, "Good afternoon
Ms. Winchester. It is a pleasure to meet you," the Chilean says, "Hello, Mr. Winchester. I'm happy to see
your feet." This is an example of a cultural issue related to</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. spatial differences.</option><option value="B">B. offensive gestures.</option><option value="C">C. inappropriate gift-giving.</option><option value="D">D. language translation.</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: language translation.</h5><h5>Incorrect translations are embarrassing, and may offend foreigners rather than
impress them. Therefore, businesspeople should ensure that they have the correct translation before
using a greeting or phrase in a foreign language. Foreigners should practice saying the phrase several
times to ensure that they pronounce the words correctly. Gestures are nonverbal actions, such as hand
signals, eye contact, hand-shaking, etc. Gift-giving is a behavior that may be viewed as bribery in some
cultures. Spatial issues involve the amount of personal space (close, distant) different cultures allow
during interpersonal interaction.
</h5></div><h5 id='q25'>25. Which of the following statements is true about self-esteem:</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. To have high self-esteem, you must be willing to overlook your faults and weaknesses.</option><option value="B">B. Your level of self-esteem depends on your ability to accept yourself as you are.</option><option value="C">C. Low self-esteem usually motivates a person to try harder and strive for success.</option><option value="D">D. To build self-esteem, individuals must value their abilities above others' abilities.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: Your level of self-esteem depends on your ability to accept yourself as you are.</h5><h5>Self-esteem is how you
feel about yourself at any given time. Your level of self-esteem can fluctuate from time to time; however,
if you have an overall high level of self-esteem, you can accept yourself as you are—both your positive
and negative qualities. Having good self-esteem does not mean that you overlook your faults,
weaknesses and mistakes; rather, you recognize them and strive to improve over time. A person with
high self-esteem has the ability to recognize others' abilities and accomplishments without feeling
threatened or discouraged about their own abilities and accomplishments. Many people who have low
self-esteem do not trust their own abilities and are less likely to try harder or strive for success because
they fear they will fail.
</h5></div><h5 id='q26'>26. Which of the following is an example of violating a coworker's privacy in the workplace:</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Ruby saw that her coworkers were having a serious discussion, so she walked away.</option><option value="B">B. Joe needed a pen, so he opened Ali's desk drawer to look for one while she was away.</option><option value="C">C. Thomas changed the wording on Carrie's report with her approval.</option><option value="D">D. Paige sent a personal e-mail from her work computer to her friend Alan.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: Joe needed a pen, so he opened Ali's desk drawer to look for one while she was away.</h5><h5>Employees
should not go through their coworkers' desks, files, correspondence, or personal belongings in the
workplace. To do so is a violation of privacy. When employees respect the privacy of others in the
workplace, they are more likely to gain the trust and respect of their coworkers and managers. Walking
away from a serious discussion and changing a document with the writer's approval are not violations of
privacy. Sending a personal e-mail from work is not an invasion of privacy, but it is wasting company
resources because it is not business-related.
</h5></div><h5 id='q27'>27. Before beginning negotiations with others, what should you be prepared to do?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Exhibit a competitive mindset</option><option value="B">B. Focus only on your interests</option><option value="C">C. Minimize your expectations</option><option value="D">D. Compromise on some points</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is D: Compromise on some points</h5><h5>The key to successful negotiations is in the preparation. Before entering a
negotiation, you should understand the other party's interests and leverage, as well as your own. You
should also determine what points, if any, that you are willing to compromise on. Experienced negotiators
tend to concede small points before larger points to maximize their ability to reach a satisfactory
agreement. Focusing only on your interests and using overly aggressive or competitive strategies are
more likely to create distrust and stall the negotiation process. To build long-term positive working
relationships, it is best to enter a negotiation with an open mind, positive expectations, and a desire for a
mutually beneficial outcome.
</h5></div><h5 id='q28'>28. A primary difference between groups and teams is that team members _________, while group members
__________.</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. are personally accountable, share accountability</option><option value="B">B. function independently, function interdependently</option><option value="C">C. follow authority, assume leadership roles</option><option value="D">D. work collaboratively, work separately</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is D: work collaboratively, work separately</h5><h5>Teams and groups differ in a variety of ways. In teams, all
members share accountability, set goals together, assume a leadership role, encourage creativity, and
collaborate. In groups, there is one leader who establishes the goals. Group members work separately
(independently), follow the leader's rules, and are held personally accountable for their tasks and actions.
</h5></div><h5 id='q29'>29. Eric sends staff members an e-mail stating that their department's performance during the third quarter
exceeded the company's goals, so each of them will receive a $200 bonus. What technique is Eric using
to motivate staff members to continue the good work?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Public recognition</option><option value="B">B. Verbal encouragement</option><option value="C">C. Acknowledgment plaque</option><option value="D">D. Financial incentive

</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: Financial incentive

</h5><h5>Explanation not available</h5></div><h5 id='q30'>30. Although Terri, Adele, and Jeff work in different departments, they all use the same computer program—
one that is outdated and inefficient. During their breaks and lunch hours, they have been discussing ways
in which they can convince management to upgrade the system. Terri, Adele, and Jeff have formed a</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. political coalition.</option><option value="B">B. public-relations board.</option><option value="C">C. departmental project team.</option><option value="D">D. workplace grievance committee.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is A: political coalition.</h5><h5>Political relationships involve influencing others to take a certain course of action.
Political relationships form at different levels for different reasons. The characteristics of a political
coalition involve employees coming together for a single issue for a limited time to accomplish a specific
goal. Because Terri, Adele, and Jeff have a common goal to improve a computer program so they can
perform their jobs more efficiently, it is likely the push for improvements will cease after implementation.
Therefore, the three employees have formed a political coalition. The group does not exist to address
workplace grievances or enhance public relations. Because the employees are in different departments,
they are not members of a departmental project team.
</h5></div><h5 id='q31'>31. Every pay period, Amanda places $100 from her paycheck into a savings account that earns 4.5 percent
interest. In this situation, money functions as a</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. medium of exchange.</option><option value="B">B. store of value.</option><option value="C">C. form of barter.</option><option value="D">D. measure of income.</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: store of value.</h5><h5>Money functions as a store of value when it is saved rather than spent. The money can be
held over time, and it retains value for future purchasing power. In some situations, money is invested or
placed in an account that generates more value. Money also serves as a medium of exchange. This
occurs when money is used to obtain goods and services. Bartering involves trading one good or service
for another good or service. Money also functions as a measure of value. When money functions as a
measure of value, the individual holding the money assesses what s/he is willing to pay for a good or
service, thereby communicating the product's value or worth.
</h5></div><h5 id='q32'>32. Zach invested $300 in the stock market. With the stock market's average yearly gain of 10 percent, his
original $300 grew to $330 after one year. In two years' time, his $300 became $363. The year after that,
his original investment had become $399. Zach's investment grew as a result of</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. compounding.</option><option value="B">B. opportunity cost.</option><option value="C">C. banking services.</option><option value="D">D. globalization.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is A: compounding.</h5><h5>Compounding takes place whenever you earn interest on interest. It has the potential to
increase the value of an investment exponentially over time. Zach's original investment of $300 grew by
$30 over the first year. In the second year, Zach experienced a 10 percent gain on his original $300 plus
on the additional $30 that he had earned during the first year. In the third year, Zach experienced another
10 percent on his original $300 plus on the additional $63 that he had earned during the first two years.
Opportunity cost refers to the trade-off that occurs when you choose one alternative over another.
Banking services is a career area in which employees are primarily concerned with accepting deposits,
lending funds, and extending credit to bank customers. Globalization refers to the rapid and unimpeded
flow of capital, labor, and ideas across national borders.
</h5></div><h5 id='q33'>33. Alexander's savings account earns 1.50% in interest. Using the Rule of 72, how many years would it take
for Alexander's savings to double?</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. 108 years</option><option value="B">B. 15 years</option><option value="C">C. 36 years</option><option value="D">D. 48 years</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: 48 years</h5><h5>The Rule of 72 can be used to determine how long it will take to double money that is saved or
invested. To calculate how long it will take to double the money, divide 72 by the interest rate (72 / 1.50 =
48). It will take 48 years for Alexander's savings to double.
</h5></div><h5 id='q34'>34. To endorse a check, the payee must sign his/her name on the</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. back of the check.</option><option value="B">B. signature block of the check.</option><option value="C">C. check's memo line.</option><option value="D">D. check's “Pay to the order of” section.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is A: back of the check.</h5><h5>Endorsement involves signing the back of the check, which allows the funds to be
transferred from the payer (check source) to the payee (check recipient). The payer completes the front
of the check, which includes the "Signature" line and the "Pay to the order of" line, which identifies who
can cash the check—usually the payee. The memo line is used to identify the purpose of the check.
</h5></div><h5 id='q35'>35. Jane can determine her credit rating by</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. asking her employer for the information.</option><option value="B">B. adding together her credit-card balances.
</option><option value="C">C. obtaining a report from a credit bureau.</option><option value="D">D. applying for an account with a credit union.
</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: obtaining a report from a credit bureau.</h5><h5>By reviewing her credit-history reports, Jane can determine if
there are any problems or discrepancies with her credit and work to get them resolved. Individuals and
businesses can obtain credit reports from an authorized credit bureau. The credit report contains a credit
rating, which "scores" the individual's ability or willingness to pay previous loans. Individuals often
validate their credit history before applying for additional credit to make sure that the information in the
history is accurate. Businesses review a person's credit report to make decisions about extending credit
to him/her. Jane cannot obtain her credit rating by adding together her credit-card balances or by
applying for an account with a credit union. A credit union is a financial cooperative set up to provide
savings and credit services to its members—usually within a business or labor union. Although an
employer may obtain an employee's credit report from an authorized credit bureau, the employer may not
have the most current information on file.
</h5></div><h5 id='q36'>36. Which type of investment institution helps firms to raise funds by issuing securities?</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Pension fund</option><option value="B">B. Investment company</option><option value="C">C. Investment bank</option><option value="D">D. Securities exchange</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is C: Investment bank</h5><h5>This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

2011 HS ICDC

FINANCE CLUSTER EXAM

7

60. Which of the following statements regarding business budgeting software is true:
A. Most budgeting software can be used to measure the impact of different actions on the budget.
B. Creating line-item projections using budgeting software is extremely time-consuming.
C. Budgeting software makes it difficult to adapt to changing economic conditions.
D. Most budgeting software is appropriate for both business and personal use.
61. Helena's manager asked her to put together a report containing a number of different financial ratios,
including the company's current ratio and rate of return on equity. To create the report, Helena should
use __________ software.
A. budgeting
C. data mining
B. financial analysis
D. field service
62. Shelley's business uses financial analysis software to align its operational and long-term plans, as well as
develop key performance indicators to monitor the organization's overall performance. The business is
using its financial analysis software to support which of the following business activities:
A. Cost and profitability management
C. Financial and management reporting
B. Payment behavior analysis
D. Strategic management and scorecards
63. Jill needs to find several records with similar, but not identical, information in her company database. To
do so, Jill should use a(n) __________ query.
A. action
C. sum function in her
B. crosstab
D. wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

2011 HS ICDC

FINANCE CLUSTER EXAM

8

71. Bonnie is responsible for determining whether her firm should extend credit to a potential business
customer. The customer's trade reference information should include
A. the current balance that the customer owes to each of its existing suppliers.
B. the name of the purchasing agent who buys from the business's suppliers.
C. the articles of incorporation for each of the suppliers.
D. a list of the items that the business typically purchases from each supplier.
72. Kramer Bank uses sophisticated computer software to analyze its commercial customers' financial
information. The software reviews each customer's data and identifies additional business opportunities
that the bank should pursue with the customer. The bank should share information about these other
opportunities with personnel who specialize in
A. risk management and sales.
C. relationship management and pricing.
B. relationship management and sales.
D. risk management and pricing.
73. The IHF Company is experiencing a temporary cash shortage and doesn't have enough cash available to
cover its payroll for this pay period. Since the company expects to receive a large payment from a
customer in the next four weeks, though, management has decided to obtain a short-term loan to pay
company employees. By analyzing financial data, company management was able to identify
A. ways to reduce the cost of credit.
C. possible investment opportunities.
B. methods to reduce expenses.
D. financial risks and deficiencies.
74. What technology is the most effective way to interview a job applicant who is located 1,500 miles away
from the company's corporate office?
A. Intranet
C. Web-based e-mail
B. Text messaging
D. Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

2011 HS ICDC

FINANCE CLUSTER EXAM

9

79. A company sent a promotional mailing to 20,000 customers who are stored in the company's database.
3,241 pieces were returned to the business because the customers were no longer located at the
address listed on the envelopes, costing the company over $1,100 in postage expenses. The company
could have avoided these unnecessary expenses by
A. paying for express mail instead of the bulk-mail postage price.
B. calling the customers a few days before the mailing was sent.
C. requesting alternate mailing addresses from the post office.
D. continuously updating their customers' contact information.
80. Because a business did not maintain the facility's air-circulation systems, its employees were exposed to
dangerous chemicals. The government is likely to fine the business for
A. failing to secure property.
C. violating health regulations.
B. disregarding storage standards.
D. breaking product-safety laws.
81. An important reason why employees should follow instructions when using heavy machinery is to
A. avoid serious injury.
C. stop malfunctions from occurring.
B. eliminate ongoing problems.
D. reduce production conflicts.
82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?
A. Internal audit
C. Team review
B. Administrative appraisal
D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

2011 HS ICDC

FINANCE CLUSTER EXAM

10

89. Which of the following is NOT essential to having a successful career?
A. Learning to work well with others in teams
B. Accepting responsibility at work when you make a mistake
C. Communicating clearly both verbally and in writing
D. Knowing the right people that will get you your first job
90. Chartered Financial Analysts (CFAs) possess extensive knowledge of
A. banking services.
C. insurance.
B. securities and investments.
D. entrepreneurship.
91. Which of the following topics is most likely to be included on a certification exam for accounting
professionals:
A. Law of diminishing returns
C. Futures and swaps
B. Actuarial science
D. Auditing and assurance
92. Which of the following professional relationships is most likely to be successful:
A. Competing financial planners socialize at professional association meetings.
B. An investment planner takes donuts to a tax accountant every Monday.
C. A trust officer sends birthday and holiday cards to her clients.
D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

2011 HS ICDC

FINANCE CLUSTER EXAM

11

98. Vanessa, who is opening a new fitness center, is concerned about the risks that she, her employees, and
her customers could encounter while at her facility. As a result, Vanessa has developed a list of
guidelines for her staff to follow: gather a medical history from each customer, provide every customer
with instructions for using the exercise equipment, and maintain CPR certification. By instituting these
policies, Vanessa hopes to avoid __________ lawsuits.
A. private nuisance
C. breach-of-contract
B. negligence
D. discrimination
99. A company installs automatic sprinklers in all of its facilities. Which of the following techniques is the
company using to combat the internal threat of fire:
A. Loss reduction
C. Loss prevention
B. Loss avoidance
D. Risk transfer
100. Loss prevention, loss avoidance, and loss reduction are risk- __________ techniques.
A. control
C. transfer
B. financing
D. retention

2011 HS ICDC

FINANCE CLUSTER EXAM—KEY

12

1. C
Providing notice. Due process is the concept that the government must respect all of the legal rights that
are owed to individuals and businesses according to the law of the land. Legal procedure refers to the
methods and processes that are used to protect an individual's or business's legal rights. In many
societies, these rights include the right to be notified of accusation or lawsuit (providing notice), the right
to obtain legal counsel, the right to be heard in court, the right to confront the accuser, etc. Obtaining
witnesses is a pretrial activity. Awarding damages is a possible remedy or outcome of civil litigation. Due
process involves presenting evidence, not creating it.
</h5></div><h5 id='q37'>37. Which of the following statements regarding financial institutions is true:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Finance and insurance institutions typically hinder the flow or movement of money through the
economy.</option><option value="B">B. If the flow of money into a financial institution slows down, there is less money available for the
institution to lend or invest.</option><option value="C">C. Financial institutions concentrate the risk that individual savers and investors face among a small
number of borrowers.</option><option value="D">D. Because each financial institution functions independently, the failure of one financial institution
has little effect on the others.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: If the flow of money into a financial institution slows down, there is less money available for the
institution to lend or invest.</h5><h5>Explanation not available</h5></div><h5 id='q38'>38. Corporate stocks, long-term government securities, state and local government bonds, and bank
commercial loans are traded on the __________ market.</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. spot</option><option value="B">B. money</option><option value="C">C. debt</option><option value="D">D. capital</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: capital</h5><h5>Longer-term securities due to mature in more than one year are typically traded on the capital
market. Examples of longer-term securities include corporate stocks (because they have no maturity
date), long-term government securities, state and local government bonds, commercial loans, and
mortgages. On the other hand, securities on the money market are due to mature in one year or less.
Treasury bills, Eurodollars, and most certificates of deposit are traded on the money market. While bonds
and loans are debt instruments, stocks are equity instruments. The spot market is a form of commodities
market.
</h5></div><h5 id='q39'>39. Which of the following is a drawback of convergence and consolidation in the finance industry:</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. Fewer customer loans</option><option value="B">B. Fewer different products</option><option value="C">C. Increased customer risk</option><option value="D">D. Increased liquidity constraints</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is C: Increased customer risk</h5><h5>While convergence and consolidation in the finance industry have created a
“one-stop shopping” environment for customers, they have also increased the risk that many customers
face. If a customer relies upon a single financial firm to satisfy all of her/his financial needs, there is a
higher chance that the customer will suffer if and when the firm experiences financial and/or legal
difficulties. Because of convergence and consolidation, financial providers are able to provide a wider
variety of products. The convergence and consolidation of multiple financial companies usually result in
more liquid capital for all companies involved. As a result, companies that previously had limited funds to
lend may now have more capital available to offer in the form of loans.
</h5></div><h5 id='q40'>40. What type of financial firm offers multiple types of financial products using one pool of capital?</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. Financial holding company</option><option value="B">B. Universal bank and trust corporation</option><option value="C">C. Fully integrated financial services provider</option><option value="D">D. Consolidated cross-product parent company

</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: Fully integrated financial services provider</h5><h5>There are several different types of financial firms that offer
integrated financial services. A fully integrated financial services provider offers multiple types of financial
products (e.g., loans, insurance, trust services, etc.) using one pool of capital. A universal bank is a
corporate entity that offers banking products directly to customers but also sells other financial products,
especially insurance, through subsidiaries. Each subsidiary has its own pool of capital. A financial holding
company, also known as a parent company, owns most or all of the shares of individually incorporated
subsidiaries that engage in different types of financial activities. Like subsidiaries of a universal bank,
each subsidiary of a financial holding company has its own pool of capital. Universal bank and trust
corporations and consolidated cross-product parent companies are fictitious terms.
</h5></div><h5 id='q41'>41. Stock market returns are a(n) ___________ economic indicator.</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. coincident</option><option value="B">B. lagging</option><option value="C">C. leading</option><option value="D">D. acyclic</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is C: leading</h5><h5>Stock market returns are considered to be a leading economic indicator because the stock
market typically changes before the economy does. If the stock market declines, the economy is likely to
decline as well. In turn, stock market returns start to rise before the economy improves. Lagging
economic indicators change several months after the economy begins to improve or worsen. Coincident
economic indicators move at the same time as the economy. Acyclic economic indicators have no
relation to the economy.
</h5></div><h5 id='q42'>42. What type of economic indicator are nominal interest rates?</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Procyclic and lagging</option><option value="B">B. Countercyclic and lagging</option><option value="C">C. Procyclic and coincident</option><option value="D">D. Countercyclic and coincident</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: Procyclic and coincident</h5><h5>Nominal interest rates are interest rates that have not been adjusted for
inflation. In other words, nominal interest rates include both the real interest rate and inflation. Like
inflation, nominal interest rates are procyclic and coincident economic indicators. They move in the same
direction as the general economy, and they move at the same time as the general economy.
Countercyclic economic indicators such as the unemployment rate move in the opposite direction as the
economy. Lagging economic indicators change several months after the economy begins to improve or
worsen.
</h5></div><h5 id='q43'>43. Financial globalization helps investors to reduce their exposure to</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. capital appreciation.</option><option value="B">B. speculative bubbles.</option><option value="C">C. regulatory liberalization</option><option value="D">D. business cycle risks.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: business cycle risks.</h5><h5>By investing their funds in many different countries, investors are able to diversify
their risk and reduce their exposure to business cycle risks. However, financial globalization seems to
increase the risks of “speculative bubbles” and “herd behavior” of investors. Liberalization is the removal
of government regulations on the flow of capital and international trade. Many countries around the world
have reduced or eliminated limits on foreigners' access to their financial markets. Capital appreciation
occurs when stock that a person owns becomes worth more than what the person paid for it. Capital
appreciation is a positive aspect of investing, not something to avoid.
</h5></div><h5 id='q44'>44. To enable capital to flow more freely across their national borders, many countries around the world have</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. encouraged foreign investors to demonstrate a home bias.</option><option value="B">B. moved from floating exchange rates to fixed exchange rates.</option><option value="C">C. increased tariffs on imports and lowered taxes on international transactions.</option><option value="D">D. removed limits on foreigners' access to domestic financial markets.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: removed limits on foreigners' access to domestic financial markets.</h5><h5>Liberalization and deregulation have
had a positive effect on financial globalization. Many nations have removed limits on foreigners' access to
their domestic financial markets so that it is easier for foreigners to invest in their countries. Moving from
fixed exchange rates to floating exchange rates (not the other way around) has helped increase global
investment in foreign markets. Decreased tariffs on imports and lowered taxes on international
transactions make it easier for capital to flow across international borders. A home bias is a preference
for investments in domestic markets versus markets in other countries. Nations hoping to attract foreign
investment want investors in other countries to eliminate (rather than demonstrate) their home biases and
invest their funds internationally.
</h5></div><h5 id='q45'>45. What type of financial statement includes an accounting of the shareholders' equity for a company?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Balance sheet</option><option value="B">B. Income statement</option><option value="C">C. Cash flow statement</option><option value="D">D. Annual report</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Balance sheet</h5><h5>The balance sheet gives a summary of a company's financial health at a specific point in
time. It contains two major sections: a listing of the company's assets and a listing of its liabilities. The
liabilities section also indicates the shareholders' equity, which is the value of all the outstanding stock
owned by shareholders. Shareholders' equity is determined by subtracting the liabilities from the assets.
The income statement, also known as the profit-and-loss statement, shows a company's profitability over
a specific period of time. The cash flow statement tracks the money that comes into and flows out of a
company. An annual report is not a type of financial statement. But, it does contain financial statements,
along with a good deal of other information about the company.
</h5></div><h5 id='q46'>46. Which of the following is a well-regarded source of information about stocks:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Mediaweek</option><option value="B">B. Security Dealer</option><option value="C">C. Value Line</option><option value="D">D. Financial Executive</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: Value Line</h5><h5>The Value Line Investment Survey is a well-regarded publication that provides detailed
reports on approximately 1,700 stocks. Security Dealer is a monthly magazine for security professionals
who sell and/or install business and home security systems and alarms—not financial securities.
Mediaweek focuses on the television industry. Financial Executive also does not focus on stocks.
Instead, it includes news, information about current trends, and professional advice for senior financial
executives.
</h5></div><h5 id='q47'>47. Analyze the information in the securities table about Home Depot.
52-WEEK
HI
LO
37.03
26.62

STOCK (SYM)
Home Depot (HD)

P/E
18.92

CLOSE
35.01

CHG
+.62

EARNINGS
1.85

DIV
0.95

YLD
%
2.7

Based on the information provided, which of the following statements about Home Depot is most likely to
be accurate:
A.
B.
C.
D.

Home Depot's stock share price is 2.7 times higher than its earnings per share.
The previous day's closing price was $34.39, $0.62 less than the last price for today.
The lowest price paid for Home Depot stock during the last year was $18.92.
An investor who owned 100 shares of Home Depot's stock last quarter earned $27 in dividends.

48. What type of insurance do you need to purchase if you want to ensure that your beneficiaries receive an
inheritance?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Disability insurance</option><option value="B">B. Term life insurance</option><option value="C">C. Universal life insurance</option><option value="D">D. Long-term care insurance
49. Which of the following is a computer application that increases the efficiency of the accounts-receivable
function:
A. Sales forecasting
C. Payroll taxation
B. Inventory valuation
D. Batch invoicing
50. Which of the following would a business classify as a current liability on its balance sheet:
A. Marketable securities
C. Production equipment
B. Interest accumulated
D. Sales-tax payable

</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: Term life insurance</h5><h5>With universal life insurance, you will be insured for life and be able to grow your
savings tax-free. This coverage is adapted to meet your insurance needs at any stage of life. It also lets
you build your savings so that your beneficiaries are left with an inheritance. Term life insurance provides
coverage for a set period of time—one, five, 10, or 20 years. This insurance pays only if you are insured
at the time of injury or illness. At the end of the coverage, you can renew your coverage, convert the term
life insurance into permanent coverage, or let the policy lapse. Disability insurance pays a non-taxable
benefit every month that you are disabled. Its coverage ends when your disability ends and does not
include an inheritance for beneficiaries. Long-term care insurance is needed if you lose your
independence due to physical or mental limitations following an accident or illness.
</h5></div><h5 id='q48'>48. What type of insurance do you need to purchase if you want to ensure that your beneficiaries receive an
inheritance?</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. Sales forecasting</option><option value="B">B. Inventory valuation</option><option value="C">C. Payroll taxation</option><option value="D">D. Batch invoicing
50. Which of the following would a business classify as a current liability on its balance sheet:
A. Marketable securities
C. Production equipment
B. Interest accumulated
D. Sales-tax payable

</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is C: Payroll taxation</h5><h5>Explanation not available</h5></div><h5 id='q49'>49. Which of the following is a computer application that increases the efficiency of the accounts-receivable
function:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Marketable securities</option><option value="B">B. Interest accumulated</option><option value="C">C. Production equipment</option><option value="D">D. Sales-tax payable

</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: Sales-tax payable

</h5><h5>Explanation not available</h5></div><h5 id='q50'>50. Which of the following would a business classify as a current liability on its balance sheet:</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. Non-financial managers have difficulty accessing needed financial data.</option><option value="B">B. Non-financial managers are bombarded with excess financial data.</option><option value="C">C. Financial-information management personnel often maintain operational data instead of financial
data.</option><option value="D">D. Most large companies do not have a financial-information management system.
52. A financial-information management system is often responsible for
A. assisting in the preparation of financial statements.
B. developing a corporate investment portfolio.
C. purchasing raw materials for production.
D. supervising the accounting and finance departments.
53. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.
A. interpreter
C. analyst
B. steward
D. agent
54. Which of the following can be used to identify the unethical manipulation of records in a financialinformation management system:
A. Long-term liabilities
C. Audit trails
B. What-if planning
D. Direct checks
55. Which of the following software applications is commonly used when conducting financial analysis:
A. Database
C. Groupware
B. Spreadsheet
D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is D: Most large companies do not have a financial-information management system.
52. A financial-information management system is often responsible for
A. assisting in the preparation of financial statements.
B. developing a corporate investment portfolio.
C. purchasing raw materials for production.
D. supervising the accounting and finance departments.
53. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.
A. interpreter
C. analyst
B. steward
D. agent
54. Which of the following can be used to identify the unethical manipulation of records in a financialinformation management system:
A. Long-term liabilities
C. Audit trails
B. What-if planning
D. Direct checks
55. Which of the following software applications is commonly used when conducting financial analysis:
A. Database
C. Groupware
B. Spreadsheet
D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</h5><h5>Explanation not available</h5></div><h5 id='q51'>51. Which of the following is the most common flaw in financial-information management:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. assisting in the preparation of financial statements.</option><option value="B">B. developing a corporate investment portfolio.</option><option value="C">C. purchasing raw materials for production.</option><option value="D">D. supervising the accounting and finance departments.
53. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.
A. interpreter
C. analyst
B. steward
D. agent
54. Which of the following can be used to identify the unethical manipulation of records in a financialinformation management system:
A. Long-term liabilities
C. Audit trails
B. What-if planning
D. Direct checks
55. Which of the following software applications is commonly used when conducting financial analysis:
A. Database
C. Groupware
B. Spreadsheet
D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is A: assisting in the preparation of financial statements.</h5><h5>Financial-information management systems are often
responsible for collecting, maintaining, and reporting data about financial transactions; assisting in the
preparation of financial statements; supporting budgeting activities; and storing and protecting customers'
financial information. Individuals in the finance department are typically responsible for developing a
corporate investment portfolio. Operations personnel normally purchase raw materials for production.
Someone within the finance or accounting department is likely to supervise the financial-information
management system, rather than the financial-information management system supervising the
accounting and finance departments.
</h5></div><h5 id='q52'>52. A financial-information management system is often responsible for</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. interpreter</option><option value="B">B. steward</option><option value="C">C. analyst</option><option value="D">D. agent
54. Which of the following can be used to identify the unethical manipulation of records in a financialinformation management system:
A. Long-term liabilities
C. Audit trails
B. What-if planning
D. Direct checks
55. Which of the following software applications is commonly used when conducting financial analysis:
A. Database
C. Groupware
B. Spreadsheet
D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: interpreter</h5><h5>Explanation not available</h5></div><h5 id='q53'>53. By protecting financial information from tampering, loss, and unauthorized use, a financial-information
management professional acts as a(n) __________ of that financial information.</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. Long-term liabilities</option><option value="B">B. What-if planning</option><option value="C">C. Audit trails</option><option value="D">D. Direct checks
55. Which of the following software applications is commonly used when conducting financial analysis:
A. Database
C. Groupware
B. Spreadsheet
D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is B: What-if planning</h5><h5>What-if planning involves identifying and considering options for financial
decision-making by applying different assumptions to financial data within spreadsheet software.
Database applications are typically used to store data and information. Groupware applications are
usually used by multiple individuals who are all working on the same project, yet are not physically
together in the same location. Presentation software is used to create and show slide shows containing
text, graphics, and sound.
</h5></div><h5 id='q54'>54. Which of the following can be used to identify the unethical manipulation of records in a financialinformation management system:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Database</option><option value="B">B. Spreadsheet</option><option value="C">C. Groupware</option><option value="D">D. Presentation
56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.
A. financial holding company
C. intrusion detection system
B. disparate data system
D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: Groupware</h5><h5>Explanation not available</h5></div><h5 id='q55'>55. Which of the following software applications is commonly used when conducting financial analysis:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. financial holding company</option><option value="B">B. disparate data system</option><option value="C">C. intrusion detection system</option><option value="D">D. central data repository
57. Which of the following contains the steps used to perform data mining in the proper order:
A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.
B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.
C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.
D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: disparate data system</h5><h5>Explanation not available</h5></div><h5 id='q56'>56. More consistent and up-to-date data, faster response to queries, and economies of scale are benefits of
using a(n) __________ to store financial data.</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Choose the data-mining technique; define the objectives; gather data; interpret the data; create
models; use the data as specified in the objectives.</option><option value="B">B. Create models; define the objectives; gather data; interpret the data; choose the data-mining
technique; use the data as specified in the objectives.</option><option value="C">C. Gather data; choose the data-mining technique; create models; interpret the data; define the
objectives; use the data as specified in the objectives.</option><option value="D">D. Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is D: Define the objectives; gather data; choose the data-mining technique; create models; interpret
the data; use the data as specified in the objectives.
58. Which of the following questions would be the least difficult to answer using data mining techniques:
A. What product will a particular customer order next?
B. When will this customer place his/her next order?
C. Why did this customer move her/his checking account to another bank?
D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</h5><h5>Explanation not available</h5></div><h5 id='q57'>57. Which of the following contains the steps used to perform data mining in the proper order:</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. What product will a particular customer order next?</option><option value="B">B. When will this customer place his/her next order?</option><option value="C">C. Why did this customer move her/his checking account to another bank?</option><option value="D">D. What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is D: What makes some customers a better credit risk than others?
59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic
A. tracking.
C. alerts.
B. back up.
D. affirmation.

</h5><h5>Explanation not available</h5></div><h5 id='q58'>58. Which of the following questions would be the least difficult to answer using data mining techniques:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. tracking.</option><option value="B">B. back up.</option><option value="C">C. alerts.</option><option value="D">D. affirmation.

</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is D: affirmation.

</h5><h5>Explanation not available</h5></div><h5 id='q59'>59. A small-business owner set up his budgeting software so that it connects directly to his business's bank
accounts and loans. That way, he doesn't have to record each business expense individually. Instead, he
just has to compare his receipts to the numbers that the software downloads from the bank. This
budgeting-application feature is commonly known as automatic</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Most budgeting software can be used to measure the impact of different actions on the budget.</option><option value="B">B. Creating line-item projections using budgeting software is extremely time-consuming.</option><option value="C">C. Budgeting software makes it difficult to adapt to changing economic conditions.</option><option value="D">D. Most budgeting software is appropriate for both business and personal use.
61. Helena's manager asked her to put together a report containing a number of different financial ratios,
including the company's current ratio and rate of return on equity. To create the report, Helena should
use __________ software.
A. budgeting
C. data mining
B. financial analysis
D. field service
62. Shelley's business uses financial analysis software to align its operational and long-term plans, as well as
develop key performance indicators to monitor the organization's overall performance. The business is
using its financial analysis software to support which of the following business activities:
A. Cost and profitability management
C. Financial and management reporting
B. Payment behavior analysis
D. Strategic management and scorecards
63. Jill needs to find several records with similar, but not identical, information in her company database. To
do so, Jill should use a(n) __________ query.
A. action
C. sum function in her
B. crosstab
D. wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Most budgeting software can be used to measure the impact of different actions on the budget.</h5><h5>Explanation not available</h5></div><h5 id='q60'>60. Which of the following statements regarding business budgeting software is true:</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. budgeting</option><option value="B">B. financial analysis</option><option value="C">C. data mining</option><option value="D">D. field service
62. Shelley's business uses financial analysis software to align its operational and long-term plans, as well as
develop key performance indicators to monitor the organization's overall performance. The business is
using its financial analysis software to support which of the following business activities:
A. Cost and profitability management
C. Financial and management reporting
B. Payment behavior analysis
D. Strategic management and scorecards
63. Jill needs to find several records with similar, but not identical, information in her company database. To
do so, Jill should use a(n) __________ query.
A. action
C. sum function in her
B. crosstab
D. wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: budgeting</h5><h5>Explanation not available</h5></div><h5 id='q61'>61. Helena's manager asked her to put together a report containing a number of different financial ratios,
including the company's current ratio and rate of return on equity. To create the report, Helena should
use __________ software.</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Cost and profitability management</option><option value="B">B. Payment behavior analysis</option><option value="C">C. Financial and management reporting</option><option value="D">D. Strategic management and scorecards
63. Jill needs to find several records with similar, but not identical, information in her company database. To
do so, Jill should use a(n) __________ query.
A. action
C. sum function in her
B. crosstab
D. wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Payment behavior analysis</h5><h5>Explanation not available</h5></div><h5 id='q62'>62. Shelley's business uses financial analysis software to align its operational and long-term plans, as well as
develop key performance indicators to monitor the organization's overall performance. The business is
using its financial analysis software to support which of the following business activities:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. action</option><option value="B">B. crosstab</option><option value="C">C. sum function in her</option><option value="D">D. wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: wildcard in her
64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and
A. personal net worth.
C. internal accounting controls.
B. human resources needs.
D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</h5><h5>Explanation not available</h5></div><h5 id='q63'>63. The year after that,
his original investment had become $399. Zach's investment grew as a result of</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. personal net worth.</option><option value="B">B. human resources needs.</option><option value="C">C. internal accounting controls.</option><option value="D">D. operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: operational inefficiencies.
65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:
A. Two-for-one stock splits
C. Civil and/or criminal penalties
B. A large influx of capital
D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</h5><h5>Explanation not available</h5></div><h5 id='q64'>64. Managers often use financial data and reports to determine a business's profitability, competitiveness,
and</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Two-for-one stock splits</option><option value="B">B. A large influx of capital</option><option value="C">C. Civil and/or criminal penalties</option><option value="D">D. An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: An economic contraction
66. Which of the following statements regarding accounting and finance is correct:
A. Accounting focuses on the past, while finance focuses on the future.
B. Accounting is much broader than finance, which focuses on investments.
C. Financial managers typically report to the vice president of accounting.
D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</h5><h5>Explanation not available</h5></div><h5 id='q65'>65. Which of the following is a likely consequence of reporting inaccurate financial data to lenders and
investors:</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Accounting focuses on the past, while finance focuses on the future.</option><option value="B">B. Accounting is much broader than finance, which focuses on investments.</option><option value="C">C. Financial managers typically report to the vice president of accounting.</option><option value="D">D. The finance department focuses on assets, while accountants track liabilities.
67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?
A. Accrual
C. Tax
B. Financial
D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is C: Financial managers typically report to the vice president of accounting.</h5><h5>Explanation not available</h5></div><h5 id='q66'>66. Which of the following statements regarding accounting and finance is correct:</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Accrual</option><option value="B">B. Financial</option><option value="C">C. Tax</option><option value="D">D. Managerial
68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.
A. job order
C. consumer
B. process
D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is A: Accrual</h5><h5>Explanation not available</h5></div><h5 id='q67'>67. What field of accounting involves developing very detailed, specialized internal reports for managers as
frequently as necessary?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. job order</option><option value="B">B. process</option><option value="C">C. consumer</option><option value="D">D. cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is D: cyclic
69. Which of the following is a trend that financial information can be used to identify:
A. A bakery's artisan breads are growing in popularity.
B. Jeannie ordered a red velvet birthday cake for her father.
C. The delivery truck typically arrives 10 minutes early.
D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</h5><h5>Explanation not available</h5></div><h5 id='q68'>68. Auto mechanics and attorneys are likely to use a __________ cost accounting system.</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. A bakery's artisan breads are growing in popularity.</option><option value="B">B. Jeannie ordered a red velvet birthday cake for her father.</option><option value="C">C. The delivery truck typically arrives 10 minutes early.</option><option value="D">D. Customers say that sourdough bread tastes better than rye bread.
70. Which of the following financial tools is often used to identify trends:
A. Financial ratios
C. Financial goals
B. Accrual accounting
D. Actuaries

</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is A: A bakery's artisan breads are growing in popularity.</h5><h5>Business managers and owners typically review their
financial information on a regular basis to identify patterns and trends. This financial information might
help them to determine which products are most or least profitable, which products are experiencing a
drop in sales, and which products are growing in popularity and sales. What a customer ordered for a
particular occasion is not a trend. While a delivery truck arriving early on a regular basis may be a pattern
or trend, financial information is not likely to help a person identify that trend. Financial information would
not tell managers which type of bread customers say that they like best. Marketing research is much
more likely to provide that sort of information.
</h5></div><h5 id='q69'>69. Which of the following is a trend that financial information can be used to identify:</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Financial ratios</option><option value="B">B. Accrual accounting</option><option value="C">C. Financial goals</option><option value="D">D. Actuaries

</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: Financial ratios</h5><h5>Many business owners, managers, investors, and analysts use financial ratios to identify
trends impacting individual businesses. There are many different types of financial ratios, including
liquidity ratios, leverage ratios, management ratios, etc. Although each ratio by itself provides some
indication as to the health of the business, comparing each type of ratio over time (e.g., monthly,
quarterly, annually) and against competitors in the same industry is much more useful when identifying
trends in business performance. Accrual accounting records transactions at the time they occur even if
no money changes hands at the time. Actuaries are business professionals who use mathematical
equations and statistics to assess the financial impact of certain risks and uncertainties. Financial goals
are objectives measured in terms of money.
</h5></div><h5 id='q70'>70. Which of the following financial tools is often used to identify trends:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. the current balance that the customer owes to each of its existing suppliers.</option><option value="B">B. the name of the purchasing agent who buys from the business's suppliers.</option><option value="C">C. the articles of incorporation for each of the suppliers.</option><option value="D">D. a list of the items that the business typically purchases from each supplier.
72. Kramer Bank uses sophisticated computer software to analyze its commercial customers' financial
information. The software reviews each customer's data and identifies additional business opportunities
that the bank should pursue with the customer. The bank should share information about these other
opportunities with personnel who specialize in
A. risk management and sales.
C. relationship management and pricing.
B. relationship management and sales.
D. risk management and pricing.
73. The IHF Company is experiencing a temporary cash shortage and doesn't have enough cash available to
cover its payroll for this pay period. Since the company expects to receive a large payment from a
customer in the next four weeks, though, management has decided to obtain a short-term loan to pay
company employees. By analyzing financial data, company management was able to identify
A. ways to reduce the cost of credit.
C. possible investment opportunities.
B. methods to reduce expenses.
D. financial risks and deficiencies.
74. What technology is the most effective way to interview a job applicant who is located 1,500 miles away
from the company's corporate office?
A. Intranet
C. Web-based e-mail
B. Text messaging
D. Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is A: the current balance that the customer owes to each of its existing suppliers.</h5><h5>Businesses often analyze
customer financial information to determine their customers' creditworthiness. If a potential business
customer applies for a loan or line of credit, the creditor is likely to review the customer's bank
information, financial statements, and trade references. These trade references should come from three
or four of the customer's existing suppliers who have already extended credit to the customer. Each trade
reference should provide information such as the customer's credit line, high balance, current balance,
and payment history. Reviewing this information will help the company to determine whether it wants to
extend credit to the customer, too. The name of the customer's purchasing agent, each supplier's articles
of incorporation, and a list of the items that the business typically purchases from each supplier are not
usually needed when determining whether to extend credit to a potential customer.
</h5></div><h5 id='q71'>71. Bonnie is responsible for determining whether her firm should extend credit to a potential business
customer. The customer's trade reference information should include</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. risk management and sales.</option><option value="B">B. relationship management and sales.</option><option value="C">C. relationship management and pricing.</option><option value="D">D. risk management and pricing.
73. The IHF Company is experiencing a temporary cash shortage and doesn't have enough cash available to
cover its payroll for this pay period. Since the company expects to receive a large payment from a
customer in the next four weeks, though, management has decided to obtain a short-term loan to pay
company employees. By analyzing financial data, company management was able to identify
A. ways to reduce the cost of credit.
C. possible investment opportunities.
B. methods to reduce expenses.
D. financial risks and deficiencies.
74. What technology is the most effective way to interview a job applicant who is located 1,500 miles away
from the company's corporate office?
A. Intranet
C. Web-based e-mail
B. Text messaging
D. Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is A: risk management and sales.</h5><h5>Many organizations use automated software to analyze existing
customers' financial information. In some cases, this software is designed to identify cross-selling
opportunities—opportunities for the firm to do additional business with its existing customers. Information
of this sort is usually passed on to individuals who work in relationship management and sales. After
receiving the information, the relationship managers and sales professionals can pursue these other
business opportunities with the customers. Risk management and pricing personnel are not likely to
receive information about cross-selling opportunities with bank customers.
</h5></div><h5 id='q72'>72. Kramer Bank uses sophisticated computer software to analyze its commercial customers' financial
information. The software reviews each customer's data and identifies additional business opportunities
that the bank should pursue with the customer. The bank should share information about these other
opportunities with personnel who specialize in</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. ways to reduce the cost of credit.</option><option value="B">B. methods to reduce expenses.</option><option value="C">C. possible investment opportunities.</option><option value="D">D. financial risks and deficiencies.
74. What technology is the most effective way to interview a job applicant who is located 1,500 miles away
from the company's corporate office?
A. Intranet
C. Web-based e-mail
B. Text messaging
D. Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: methods to reduce expenses.</h5><h5>Explanation not available</h5></div><h5 id='q73'>73. The IHF Company is experiencing a temporary cash shortage and doesn't have enough cash available to
cover its payroll for this pay period. Since the company expects to receive a large payment from a
customer in the next four weeks, though, management has decided to obtain a short-term loan to pay
company employees. By analyzing financial data, company management was able to identify</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. Intranet</option><option value="B">B. Text messaging</option><option value="C">C. Web-based e-mail</option><option value="D">D. Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: Videoconferencing
75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates
A. personal competence.
C. due diligence.
B. corporate responsibility.
D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</h5><h5>Explanation not available</h5></div><h5 id='q74'>74. What technology is the most effective way to interview a job applicant who is located 1,500 miles away
from the company's corporate office?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. personal competence.</option><option value="B">B. corporate responsibility.</option><option value="C">C. due diligence.</option><option value="D">D. profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is D: profit orientation.
76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:
A. [-the -truth -about -commercial- interest -rate -increases]
B. { truth_ commercial interest rate_ increases}
C. "the truth about commercial interest rate increases"
D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</h5><h5>Explanation not available</h5></div><h5 id='q75'>75. A financial-services company allocates a certain portion of its earnings to a college scholarship fund for
business students. This is a positive company action that demonstrates</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. [-the -truth -about -commercial- interest -rate -increases]</option><option value="B">B. { truth_ commercial interest rate_ increases}</option><option value="C">C. "the truth about commercial interest rate increases"</option><option value="D">D. “{-the_truth_about_commercial_interest_rate_increases-}”
77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?
A. Request the trademark registration code from the originator
B. Acknowledge the author in the republished article
C. Obtain written permission from the copyright owner
D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: { truth_ commercial interest rate_ increases}</h5><h5>Explanation not available</h5></div><h5 id='q76'>76. To complete a report about commercial loans, Lola needs to review a specific online article called, “The
Truth About Commercial Interest Rate Increases.” Which of the following search entries will provide Lola
with the most accurate results:</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Request the trademark registration code from the originator</option><option value="B">B. Acknowledge the author in the republished article</option><option value="C">C. Obtain written permission from the copyright owner</option><option value="D">D. Inform the patent agency that he wants to publish the article.
78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?
A. Place the client's name in her address book C. Flag the message for follow-up
B. Forward the message to her supervisor
D. Move the message to her spam folder

</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is C: Obtain written permission from the copyright owner</h5><h5>To avoid copyright infringement, it is important to
contact the owner of the copyrighted materials (e.g., written works or artistic works) to obtain permission
to reprint in other formats. Written authorization provides clear documentation that the copyright owner
has provided approval to reprint. Approval to reprint copyrighted material usually includes
acknowledgement of the copyright owner, who may be the author or the author's employer. Trademarks
provide legal protection to prevent unauthorized use of symbols, designs, or words. Patents are legal
protection for inventions.
</h5></div><h5 id='q77'>77. What does Pedro need to do before he includes someone else's journal article about portfolio
diversification in the e-newsletter that he sends to his clients?</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Place the client's name in her address book </option><option value="B">B. Forward the message to her supervisor</option><option value="C">C. Flag the message for follow-up</option><option value="D">D. Move the message to her spam folder

</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Flag the message for follow-up</h5><h5>The follow-up function reminds the message recipient to follow-up with
the message at a later time. Some e-mail programs such as Outlook provide color-coded flags so users
can "flag" the message, so it stands out from other messages. When the follow-up is complete, the user
can place a checkmark in the follow-up/flag field to remind him/her that s/he has completed the follow-up.
The forward function allows the message recipient to send the message to another person. Sending the
message to her supervisor will not help Claire to remember to follow up with the client—and her
supervisor should not do Claire's work for her. Spam is junk-mail. Putting the message in her spam folder
and placing the client's contact information in the address book will not help Claire remember to send the
requested information when it is available.
</h5></div><h5 id='q78'>78. Claire receives a lot of e-mail messages every day. One client has sent her a message requesting some
information that won't be available to Claire until next week. What can Claire do to remind herself to send
the client the information when it is available?</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. paying for express mail instead of the bulk-mail postage price.</option><option value="B">B. calling the customers a few days before the mailing was sent.</option><option value="C">C. requesting alternate mailing addresses from the post office.</option><option value="D">D. continuously updating their customers' contact information.
80. Because a business did not maintain the facility's air-circulation systems, its employees were exposed to
dangerous chemicals. The government is likely to fine the business for
A. failing to secure property.
C. violating health regulations.
B. disregarding storage standards.
D. breaking product-safety laws.
81. An important reason why employees should follow instructions when using heavy machinery is to
A. avoid serious injury.
C. stop malfunctions from occurring.
B. eliminate ongoing problems.
D. reduce production conflicts.
82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?
A. Internal audit
C. Team review
B. Administrative appraisal
D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is C: requesting alternate mailing addresses from the post office.</h5><h5>Explanation not available</h5></div><h5 id='q79'>79. A company sent a promotional mailing to 20,000 customers who are stored in the company's database.
3,241 pieces were returned to the business because the customers were no longer located at the
address listed on the envelopes, costing the company over $1,100 in postage expenses. The company
could have avoided these unnecessary expenses by</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. failing to secure property.</option><option value="B">B. disregarding storage standards.</option><option value="C">C. violating health regulations.</option><option value="D">D. breaking product-safety laws.
81. An important reason why employees should follow instructions when using heavy machinery is to
A. avoid serious injury.
C. stop malfunctions from occurring.
B. eliminate ongoing problems.
D. reduce production conflicts.
82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?
A. Internal audit
C. Team review
B. Administrative appraisal
D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is D: breaking product-safety laws.
81. An important reason why employees should follow instructions when using heavy machinery is to
A. avoid serious injury.
C. stop malfunctions from occurring.
B. eliminate ongoing problems.
D. reduce production conflicts.
82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?
A. Internal audit
C. Team review
B. Administrative appraisal
D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</h5><h5>Explanation not available</h5></div><h5 id='q80'>80. Because a business did not maintain the facility's air-circulation systems, its employees were exposed to
dangerous chemicals. The government is likely to fine the business for</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. avoid serious injury.</option><option value="B">B. eliminate ongoing problems.</option><option value="C">C. stop malfunctions from occurring.</option><option value="D">D. reduce production conflicts.
82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?
A. Internal audit
C. Team review
B. Administrative appraisal
D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is C: stop malfunctions from occurring.</h5><h5>Explanation not available</h5></div><h5 id='q81'>81. An important reason why employees should follow instructions when using heavy machinery is to</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Internal audit</option><option value="B">B. Administrative appraisal</option><option value="C">C. Team review</option><option value="D">D. Productivity evaluation
83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?
A. To ensure product quality
C. To meet minimal expectations
B. To prevent stockouts
D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is A: Internal audit</h5><h5>An audit is an evaluation of an organization, process, or project. The project manager and
team members can determine its successes, strengths, problems, and weaknesses by evaluating all
aspects of the project upon completion. The evaluation helps the project team develop a “lessons
learned” document that can be used by teams that execute similar projects for the organization in the
future. A comprehensive audit will evaluate many different activities associated with the project, including
resource utilization, team productivity and performance, efficiency of processes, and stakeholders'
satisfaction, which is done by comparing the objectives with the actual results.
</h5></div><h5 id='q82'>82. Ingrid must analyze various aspects of the completed project by comparing the results with the
objectives. What process is Ingrid likely to use to obtain all of the information for analysis?</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. To ensure product quality</option><option value="B">B. To prevent stockouts</option><option value="C">C. To meet minimal expectations</option><option value="D">D. To reduce the need to forecast
84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?
A. Supporting external resources
C. Creating a quality culture
B. Developing new products
D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: To ensure product quality</h5><h5>Explanation not available</h5></div><h5 id='q83'>83. Why does Dan order extra copy paper, post-it notes, and printer ink cartridges for the department, when
he places an order for office supplies?</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Supporting external resources</option><option value="B">B. Developing new products</option><option value="C">C. Creating a quality culture</option><option value="D">D. Reorganizing priorities
85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.
A. False, an employee's appearance can influence the customers' perceptions about the company.
B. False, employers are most concerned with an employee's ability to work well with others.
C. True, employees must have skills because most employers do not have resources to train them.
D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is B: Developing new products</h5><h5>Explanation not available</h5></div><h5 id='q84'>84. Stan is a small business owner who is always looking for ways to increase his company's ability to do the
job right the first time. He listens to his staff members' suggestions and implements many of their ideas
for improvement. What is Stan doing?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. False, an employee's appearance can influence the customers' perceptions about the company.</option><option value="B">B. False, employers are most concerned with an employee's ability to work well with others.</option><option value="C">C. True, employees must have skills because most employers do not have resources to train them.</option><option value="D">D. True, an employee's clothing and hygiene are not as important as her/his efficiency levels.
86. Before you can collect information about a problem, you must first
A. solicit others' input.
C. brainstorm ideas.
B. evaluate solutions.
D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is C: True, employees must have skills because most employers do not have resources to train them.</h5><h5>Explanation not available</h5></div><h5 id='q85'>85. Determine if the following statement is true or false: Employers are more concerned with their employees'
job skills than with the employees' personal appearance.</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. solicit others' input.</option><option value="B">B. evaluate solutions.</option><option value="C">C. brainstorm ideas.</option><option value="D">D. define the problem.
87. To develop a professional looking résumé, the writer should
A. proofread the document for spelling errors.
B. organize information in chronological order.
C. begin by describing his/her work history.
D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is A: solicit others' input.</h5><h5>Explanation not available</h5></div><h5 id='q86'>86. Before you can collect information about a problem, you must first</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. proofread the document for spelling errors.</option><option value="B">B. organize information in chronological order.</option><option value="C">C. begin by describing his/her work history.</option><option value="D">D. create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is D: create interest by using colorful text.
88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)
A. accountant.
C. underwriter.
B. agent.
D. financial analyst.

</h5><h5>Explanation not available</h5></div><h5 id='q87'>87. To develop a professional looking résumé, the writer should</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. accountant.</option><option value="B">B. agent.</option><option value="C">C. underwriter.</option><option value="D">D. financial analyst.

</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is A: accountant.</h5><h5>Explanation not available</h5></div><h5 id='q88'>88. Bobbi, who works for an insurance company, is responsible for calculating the risk of loss, establishing
premium rates, and designing insurance policies to cover risk. Bobbi works as a(n)</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Learning to work well with others in teams</option><option value="B">B. Accepting responsibility at work when you make a mistake</option><option value="C">C. Communicating clearly both verbally and in writing</option><option value="D">D. Knowing the right people that will get you your first job
90. Chartered Financial Analysts (CFAs) possess extensive knowledge of
A. banking services.
C. insurance.
B. securities and investments.
D. entrepreneurship.
91. Which of the following topics is most likely to be included on a certification exam for accounting
professionals:
A. Law of diminishing returns
C. Futures and swaps
B. Actuarial science
D. Auditing and assurance
92. Which of the following professional relationships is most likely to be successful:
A. Competing financial planners socialize at professional association meetings.
B. An investment planner takes donuts to a tax accountant every Monday.
C. A trust officer sends birthday and holiday cards to her clients.
D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is C: Communicating clearly both verbally and in writing</h5><h5>Explanation not available</h5></div><h5 id='q89'>89. Which of the following is NOT essential to having a successful career?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. banking services.</option><option value="B">B. securities and investments.</option><option value="C">C. insurance.</option><option value="D">D. entrepreneurship.
91. Which of the following topics is most likely to be included on a certification exam for accounting
professionals:
A. Law of diminishing returns
C. Futures and swaps
B. Actuarial science
D. Auditing and assurance
92. Which of the following professional relationships is most likely to be successful:
A. Competing financial planners socialize at professional association meetings.
B. An investment planner takes donuts to a tax accountant every Monday.
C. A trust officer sends birthday and holiday cards to her clients.
D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: entrepreneurship.
91. Which of the following topics is most likely to be included on a certification exam for accounting
professionals:
A. Law of diminishing returns
C. Futures and swaps
B. Actuarial science
D. Auditing and assurance
92. Which of the following professional relationships is most likely to be successful:
A. Competing financial planners socialize at professional association meetings.
B. An investment planner takes donuts to a tax accountant every Monday.
C. A trust officer sends birthday and holiday cards to her clients.
D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</h5><h5>Explanation not available</h5></div><h5 id='q90'>90. Chartered Financial Analysts (CFAs) possess extensive knowledge of</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Law of diminishing returns</option><option value="B">B. Actuarial science</option><option value="C">C. Futures and swaps</option><option value="D">D. Auditing and assurance
92. Which of the following professional relationships is most likely to be successful:
A. Competing financial planners socialize at professional association meetings.
B. An investment planner takes donuts to a tax accountant every Monday.
C. A trust officer sends birthday and holiday cards to her clients.
D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is B: Actuarial science</h5><h5>and natural science
disciplines tend to use the American Psychological Association (APA) style, while textbook publishers
tend to use the Modern Language Association (MLA) style. However, some organizations do not use the
particular writing style that experts suggest. Therefore, employees must determine and apply their
employers' style preference when preparing business documents. To maintain consistency, businesses
do not usually change writing styles based on the type of report they are writing at a particular time.
Employers may be very rigid about the writing style because the style can affect their professional
integrity or their ability to get funding for a project. Each writing style varies, including the ways in which
bibliographies are formatted.
</h5></div><h5 id='q91'>91. Which of the following topics is most likely to be included on a certification exam for accounting
professionals:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Competing financial planners socialize at professional association meetings.</option><option value="B">B. An investment planner takes donuts to a tax accountant every Monday.</option><option value="C">C. A trust officer sends birthday and holiday cards to her clients.</option><option value="D">D. A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is D: A real estate agent and an insurance broker refer clients to each other.
93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of
A. advertising.
C. networking.
B. cooperating.
D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</h5><h5>Explanation not available</h5></div><h5 id='q92'>92. Which of the following professional relationships is most likely to be successful:</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. advertising.</option><option value="B">B. cooperating.</option><option value="C">C. networking.</option><option value="D">D. up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: up-selling.
94. Which of the following is most likely to be an unethical risk management activity:
A. Securing fair, favorable premium rates from insurers
B. Paying a share of the loss exposures pooled through insurance
C. Reporting that an employee is embezzling from the organization
D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</h5><h5>Explanation not available</h5></div><h5 id='q93'>93. To build professional relationships, Brynn serves on several trade association committees, co-authors
articles with other finance professionals to publish in the local newspaper, and treats business contacts to
dinner or golf. These activities are forms of</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Securing fair, favorable premium rates from insurers</option><option value="B">B. Paying a share of the loss exposures pooled through insurance</option><option value="C">C. Reporting that an employee is embezzling from the organization</option><option value="D">D. Withholding pertinent information from insurance underwriters
95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.
A. risk map
C. liability
B. property exposure
D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is C: Reporting that an employee is embezzling from the organization</h5><h5>Explanation not available</h5></div><h5 id='q94'>94. Which of the following is most likely to be an unethical risk management activity:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. risk map</option><option value="B">B. property exposure</option><option value="C">C. liability</option><option value="D">D. catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is D: catastrophe modeling
96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of
A. hurricanes, earthquakes, and terrorist attacks.
B. hurricanes, embezzlement, and terrorist attacks.
C. robberies, embezzlement, and terrorist attacks.
D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</h5><h5>Explanation not available</h5></div><h5 id='q95'>95. The Sarta Company's risk management information system (RMIS) contains a master list of all claims;
data detailing the status of individual claims; and information regarding exposure bases such as payroll,
number of employees, number of company vehicles, etc. These data are likely to be housed within the
__________ section of the RMIS database.</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. hurricanes, earthquakes, and terrorist attacks.</option><option value="B">B. hurricanes, embezzlement, and terrorist attacks.</option><option value="C">C. robberies, embezzlement, and terrorist attacks.</option><option value="D">D. robberies, embezzlement, and sexual harassment claims.
97. Risk retention groups are typically only allowed to offer __________ insurance coverage.
A. liability
C. homeowners
B. life
D. health

</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is C: robberies, embezzlement, and terrorist attacks.</h5><h5>Explanation not available</h5></div><h5 id='q96'>96. Risk managers often use computerized catastrophe modeling to estimate the losses that their company
could suffer as a result of</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. liability</option><option value="B">B. life</option><option value="C">C. homeowners</option><option value="D">D. health

</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is A: liability</h5><h5>Risk retention groups are liability insurance companies owned by their members, who are
typically businesses, professionals, and municipalities that are unable to acquire liability insurance from
traditional insurance companies. Types of liability insurance that risk retention groups typically offer
include errors and omissions, medical malpractice, directors and officers, product liability, professional
liability, etc. Risk retention groups are not legally permitted to offer life, homeowners, or health insurance
in most countries.
</h5></div><h5 id='q97'>97. Risk retention groups are typically only allowed to offer __________ insurance coverage.</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. private nuisance</option><option value="B">B. negligence</option><option value="C">C. breach-of-contract</option><option value="D">D. discrimination
99. A company installs automatic sprinklers in all of its facilities. Which of the following techniques is the
company using to combat the internal threat of fire:
A. Loss reduction
C. Loss prevention
B. Loss avoidance
D. Risk transfer
100. Loss prevention, loss avoidance, and loss reduction are risk- __________ techniques.
A. control
C. transfer
B. financing
D. retention

</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: private nuisance</h5><h5>lawsuit if s/he has been unable to live peacefully at home as a result of a
neighbor's barking dog, teenagers having a loud party nearby, etc. If someone fails to fulfill his/her
contract (e.g., does not complete promised work, does not pay for services rendered, etc.), the individual
or company who entered into that contract with the violator might file a breach-of-contract against
him/her. People file discrimination lawsuits when they feel that they were treated unfairly because of their
race, religion, gender, or other characteristic.
</h5></div><h5 id='q98'>98. Vanessa, who is opening a new fitness center, is concerned about the risks that she, her employees, and
her customers could encounter while at her facility. As a result, Vanessa has developed a list of
guidelines for her staff to follow: gather a medical history from each customer, provide every customer
with instructions for using the exercise equipment, and maintain CPR certification. By instituting these
policies, Vanessa hopes to avoid __________ lawsuits.</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. Loss reduction</option><option value="B">B. Loss avoidance</option><option value="C">C. Loss prevention</option><option value="D">D. Risk transfer
100. Loss prevention, loss avoidance, and loss reduction are risk- __________ techniques.
A. control
C. transfer
B. financing
D. retention

</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is B: Loss avoidance</h5><h5>when they choose not to take part in risky
activity. Loss prevention focuses on stopping certain losses from occurring. Companies transfer risk by
purchasing insurance and entering into contracts that transfer the risk to others.
</h5></div><h5 id='q99'>99. Zach's investment grew as a result of</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. control</option><option value="B">B. financing</option><option value="C">C. transfer</option><option value="D">D. retention

</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: control</h5><h5>Risk control methods are used to reduce or minimize loss. Three common risk-control
techniques include loss prevention, loss avoidance, and loss reduction. Loss prevention focuses on
stopping certain losses from occurring. Companies utilize loss avoidance when they choose not to take
part in risky activity. Loss reduction lessens the impact of a loss after it occurs. Risk financing involves
setting aside funds to pay for unavoidable losses. Companies transfer risk by purchasing insurance and
entering into contracts that transfer the risk to others. Risk retention involves financing the loss through
self-insurance and other methods.
</h5></div><h5 id='q100'>100. To lower costs, SuperCard International has moved its customer-service function from Vancouver to
Delhi, India. What business practice is the company engaging in?</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. Licensing</option><option value="B">B. Diversification</option><option value="C">C. Offshoring</option><option value="D">D. Free agency</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is C: Offshoring</h5><h5>Offshoring is the practice of producing goods in foreign countries and typically involves
moving domestic jobs overseas. Although offshoring can save money for the business and improve
another country's standard of living, it also can cost the business's home country thousands of jobs,
which hurts the domestic economy. Diversification is the management of risks by spreading out financial
investments among a number of different securities or business ventures. Licensing is a business
structure that requires the authorization or permission from an owner entity to use trademarked,
copyrighted, or patented material for a specific activity during a specific time for the profit of both parties.
Free agency is an athlete's ability to renegotiate his/her contract with his/her existing team or with
another team.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="exams/Finance/Finance_3_Whole_Master.js"></script></html>