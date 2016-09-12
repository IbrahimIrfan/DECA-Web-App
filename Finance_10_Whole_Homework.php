<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 10</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Pedro Sanchez works as a loan processor for the MON Company, which is located in Smithsville. Pedro
has recently approved an application to extend a $10,000 line of credit to Mrs. Jones. Who is the creditor
in this situation?</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. Pedro Sanchez</option><option value="B">B. MON Company</option><option value="C">C. Mrs. Jones</option><option value="D">D. City of Smithsville</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: MON Company</h5><h5>The merger is
an example of __________ in the finance industry.
A. convergence
C. tactical planning
B. consolidation
D. licensing
40. Which of the following statements regarding the merger of multiple financial firms is true:
A. The merger typically results in a smaller variety of products and services, lower costs, and
reduced consumer risks.
B. More consumer loans may be available from the new larger firm than were available from the
smaller, individual firms.
C. A merger usually makes it easier to determine which supervisory agency should oversee the
new, larger company.
D. The merger usually helps financial experts to get an accurate picture of the new, larger firm's
financial condition.
41. When the Consumer Price Index (CPI) increases sharply, stock prices usually
A. rise.
C. stay the same.
B. fall.
D. fluctuate daily.
42. When nominal Gross National Product (GNP) increases, the money supply typically
A. decreases.
C. increases.
B. stays the same.
D. fluctuates daily.
43. Financial globalization tends to cause an increase in
A. limits on foreigners' access to domestic markets.
B. investors' exposure to business cycle risks.
C. taxes on international transactions.
D. herd behavior among investors.
44. To hedge the risk of investing in the foreign exchange market, some investors use
A. derivatives.
C. venture capital.
B. emerging markets.
D. no-load funds.
45. Adam wants to hire a financial-services provider who will provide him a wide variety of services, such as
recommending insurance coverage, providing in-depth financial advice, and making investments on his
behalf. What type of financial-services provider would be best suited to handle Adam's needs?
A. Full-service broker
C. Beneficiary
B. Discount broker
D. Insurance agent
46. Which of the following web sites is most likely to contain accurate, trustworthy securities information:
A. Wikipedia
C. StandardLine
B. Morningstar
D. Facebook Finance
47. The Milton Ladder Corporation, which is publicly traded, is in the process of acquiring the Bradley Chute
Company. What type of document is Milton Ladder required to file within 15 days of the acquisition?
A. Form 10-K
C. Form 10-Q
B. Form 8-K
D. Form 4
48. An investor using a securities table can learn about a stock's volatility by checking the stock's
A. CLOSE.
C. VOL.
B. DIV.
D. 52-Week HI/LO.
49. Which of the following is one way that small businesses use technology to perform accounting tasks:
A. Developing institutional policies
C. Establishing tax codes
B. Requesting quotes by e-mail
D. Filing tax returns online

2010 HS ICDC

FINANCE CLUSTER EXAM

6

50. A primary reason that governments regulate corporations' financial activities is to
A. protect stockholders.
C. limit benefits.
B. ensure earnings.
D. control costs.
51. Which of the following is the most likely reason why a manager would review financial information for
her/his industry and compare his/her business's operating results with industry averages:
A. To calculate the business's percentage increase in net sales
B. To determine if the business is performing above or below average
C. To prepare a company budget for the following year
D. To determine the return on common stockholders' equity
52. During its 20 years of operation, the Normandy Company has made very few changes to its accounting
methods and system. As a result, the company's financial information is likely to be very
A. consistent.
C. reliable.
B. comparable.
D. conservative.
53. Which of the following statements regarding the financial-information management function is true:
A. The financial-information management function's responsibilities have declined in recent years.
B. The financial-information management function is an electronic, web-based activity.
C. A financial-information management system can be used to support operations management
decisions.
D. Data in a financial-information management system are typically at least four to six months old.
54. A financial-information management system can help a financial manager to make which of the following
types of decisions:
A. Capital budgeting
C. Vendor selections
B. Employee scheduling
D. Adding/dropping products
55. Which of the following is a common outcome of poor financial-information management in a finance
department:
A. Employees cannot understand financial statements.
B. Employees receive information before it's needed in the department.
C. Employees cannot correctly assess trends.
D. Employees are able to increase their efficiency.
56. Which of the following leads accountants to apply unethical earnings-management practices:
A. Postponing a large purchase to a later time
B. Meeting analysts' estimated earnings
C. Accelerating payment of expenses when earnings are high
D. Selling securities for a gain
57. How can businesses benefit from using a central data repository for its financial information?
A. They are able to overcome economies of scale.
B. They can obtain faster responses to queries.
C. They no longer have to generate consistent data.
D. They can rely on old data.
58. Why has online technology's use increased in financial-information management?
A. Recognition that the security of transactions is no longer an issue
B. Removal of electronic information exchange procedures
C. Passage of laws that recognize electronic documents as legally binding
D. Protection of customers' right to privacy
59. In what stage of the data-mining process would you clean data in a database?
A. Exploration
C. Prediction
B. Model building and validation
D. Deployment

2010 HS ICDC

FINANCE CLUSTER EXAM

7

60. Why would a meta-learner be used in data mining?
A. To determine the best fit of classifications resulting from multiple models
B. To orient analytic models to the data stored in a data base
C. To enhance search engine optimization (SEO) strategies
D. To select the analytic model to apply to the data in a database
61. What is a benefit of managing budgeting data efficiently through budgeting applications?
A. Decreases auditors' ability to trace the numbers used in budgets
B. Increases amount of time that needs to be spent on value-added activities
C. Decreases the need for having an audit trail
D. Increases management's confidence in budgets
62. Which of the following would a small business's budgeting applications most likely be able to do:
A. Show the business's cash-flow status
B. Predict new services to offer customers
C. Determine the business's electronic data interchange (EDI) needs
D. Identify equipment needing repairs
63. How could financial analysis applications be used to identify possible conflicts of interest?
A. By comparing yearly volume with on-hand quantity for stock item
B. By isolating entries against authorization records for new or terminated employees
C. By comparing vendor payables posted to purchase orders
D. By comparing employee phone numbers and addresses to vendor information for payables
64. Which of the following would be appropriate to use as a primary key for identification of customers at a
financial institution:
A. Person's first and last names
C. Person's zip code
B. Person's social security number
D. Person's individual account number
65. Investment firms must accurately report their financial position because
A. they are trusted to maintain an accurate accounting of people's revenue and expenses.
B. others rely on the information when making credit and/or investment decisions.
C. they maintain both brick-and-mortar and virtual businesses for trading.
D. people know that investment firms would not take advantage of them.
66. What is the connection between accounting and finance?
A. Accounting relies on finance to generate reports that it uses to create financial statements.
B. Accounting and finance perform the same functions.
C. Accounting's reports aid finance in analyzing a company's financial position.
D. Accounting uses the revenue and expense reports generated by finance to make financial
decisions.
67. Which of the following represents a difference between accounting and finance:
A. Finance collects and presents financial information, while accounting determines financial
strategies.
B. Finance tracks revenues and expenses when they are incurred, while accounting recognizes
them when money is exchanged.
C. Accounting recognizes revenue and expenses when they are incurred, while finance recognizes
them when money is exchanged.
D. Accounting collects and presents financial information, while finance creates financial
statements.
68. Which of the following is an output of a financial system?
A. Sales slips
C. Invoices
B. Financial condition
D. Classification of expenses

2010 HS ICDC

FINANCE CLUSTER EXAM

8

69. In what type of accounting system are revenue and expenses accounted for at the time money is
received or spent?
A. Cash
C. Financial
B. Accrual
D. Managerial
70. Which of the following is essential to the identification of trends in financial data for a horizontal analysis:
A. Data in a Statement of Cash Flows
B. Data from the most recent financial report
C. Data in financial reports from multiple time periods
D. Data from a zero-based budget
71. What is the significance of the base year in horizontal trend analysis?
A. It is the time period in which the difference between revenue and expenses is the greatest.
B. It represents the time period in which a trend is first detected.
C. It is the time period that is used as the basis for comparisons.
D. It represents the time period in which the difference between accounts receivable and accounts
payable is the smallest.
72. Why would creditors during the tough economic times of the last few years have increased their
surveillance of customers' financial information?
A. To make credit easier to obtain once customers have met the desired criteria
B. To reduce the likelihood that customers will not pay their bills
C. To increase their chances of having customers default on their loans
D. To increase their reliance on Dun and Bradstreet reports
73. A creditor carefully examines a business's financial information to determine whether the business has
sufficient money to meet its short-term obligations when they come due. In this situation, the creditor is
concerned about the business's
A. investment return.
C. efficiency.
B. profitability.
D. liquidity.
74. When a creditor analyzes financial data to determine whether a client should be able to pay the principal
and interest on a loan, the credit is assessing the client's
A. long-term solvency.
C. long-term return on investment.
B. short-term liquidity.
D. short-term return on investment.
75. When a human resources department uses interactive computer simulations to help employees learn
how to do their jobs, it is using technology for ___________ purposes.
A. evaluation
C. hiring
B. training
D. compliance
76. Complex buying behavior is most likely involved when the customer is purchasing
A. a car.
C. socks.
B. a meal.
D. gasoline.
77. Todd needs to develop an overall plan for his business but does not know what type of information to
include in the document. Todd logs onto a search engine to quickly locate the information he needs.
Which of the following search terms are most likely to provide Todd with desired search results:
A. Plan components
C. Business plan elements
B. Develop planning document
D. Business document components

2010 HS ICDC

FINANCE CLUSTER EXAM

9

78. Which of the following is a situation that involves the illegal use of copyrighted material:
A. An online business allows its customers to download and share music without the recording
artist's consent.
B. An apparel company imprints a hockey league's logo on a new line of sportswear.
C. A manufacturer attempts to produce another business's invention, which has been registered
with the government.
D. A computer company develops a new project-management software program.
79. A customer sent the Webster Company a check in the amount of $1,725 as partial payment for a
$2,456.29 purchase. During the current billing cycle, the customer made several purchases, totaling
$466.23. Now, Webster must generate a new account statement to send to the customer. How much
money does the customer owe Webster?
A. $1,197.52
C. $466.23
B. $731.29
D. $1,719.51
80. A business report provides statistical data indicating that the demand for a specific type of product has
been increasing between three and six percent over the past several months. This information is useful to
companies to
A. identify trends.
C. reduce inventory.
B. decrease costs.
D. achieve quotas.
81. A company trains its human resources department in how to handle emergency situations. Is this an
example of operations management?
A. Yes, because the human resources department is considered an outside customer.
B. Yes, because it involves the operational aspects of safety and security.
C. No, because the human resources department does not interact with outside customers.
D. No, because human resources does not use operations.
82. Jane works in a factory. She has noticed that sections of the factory floor are consistently slippery
because oil drips on them. She has reported this to her manager twice, but the problem hasn't been
corrected. Jane is so worried that an employee could slip and fall that she contacts the government
agency that handles workplace safety. This is an example of
A. whistleblowing.
C. handling an accident appropriately.
B. being a tattle tale.
D. establishing security procedures.
83. To prevent injuries when operating machinery, it is important to
A. know standard first aid.
C. purchase the newest equipment.
B. purchase the most efficient equipment.
D. follow the instruction manual.
84. Which of the following is NOT a benefit of a post-implementation review?
A. Identifying cost-savings opportunities for future projects
B. Identifying cost-savings opportunities for the current project
C. Identifying ways to improve project planning
D. Identifying ways to improve the company's processes
85. What must be done first to begin a Six Sigma Improvement Model?
A. Review data to determine if change needs to be made
B. Collect data to measure areas identified as problematic
C. Make improvements to areas with low customer satisfaction scores
D. Define the gaps between customer satisfaction and the company's capabilities
86. The Dewberry Company pays both its female employees and its male employees the same salary range
for the same type of work. Dewberry is providing its employees with
A. a safe work environment.
C. the right to privacy.
B. fair treatment.
D. the option to buy stock.

2010 HS ICDC

FINANCE CLUSTER EXAM

10

87. Why is it important to select an occupation that matches your aptitudes?
A. Matching aptitudes to careers leads to the highest possible income.
B. Considering your aptitudes will make achieving your career goals realistic.
C. A positive aptitude will allow you to succeed in any career.
D. Selecting a career based on your aptitudes will require less time in college.
88. Which of the following is a financial concern that entrepreneurs often face when starting new businesses:
A. Irregular paychecks
C. Shorter vacations
B. Long working hours
D. Lower production standards
89. If you wanted to pursue a career that specializes in helping corporations and governments issue
securities, you would work in
A. investment banking.
C. a brokerage house.
B. a stock exchange.
D. financial planning.
90. Smith Company typically promotes employees based on seniority. To do this, which of the following
pieces of information would Smith Brothers need for each employee:
A. Years of college education
C. Years worked at current job
B. Years of experience in the career field
D. Years of good performance at the current job
91. Which of the following is a certification sought by individuals who evaluate companies and industries and
make buy, sell, and hold recommendations for certain securities:
A. Chartered Financial Analyst (CFA)
C. Chartered Financial Consultant (ChFC)
B. Certified Financial Planner (CFP)
D. Certified Stock Broker (CSB)
92. What certification is sought by individuals who provide guidance to individuals and families about their
investments and financial decisions and also buy and sell certain financial products such as insurance
and retirement plans?
A. Certified Banker (CB)
C. Certified Stock Broker (CSB)
B. Chartered Financial Analyst (CFA)
D. Chartered Financial Consultant (CsFC)
93. Which of the following would afford finance professionals the best opportunity to build long-lasting
relationships with other finance professionals:
A. Regularly attending trade shows for the finance industry
B. Actively participating in a local professional association for the finance industry
C. Occasionally auditing classes at a local postsecondary institution
D. Actively attending meetings sponsored by the local chamber of commerce
94. Which of the following has proven to be an effective way to initiate a professional relationship with a
vendor:
A. Treating the person to a round of golf
C. Having salespeople talk to the vendor
B. Giving the vendor an expensive gift
D. Offering jobs to people on the vendor's staff
95. How do ethics relate to risk management?
A. The best form of business ethics is risk management.
B. Risk management is all about the ethical treatment of customers.
C. Risk management is insurance for lapses in business ethics.
D. The best form of risk management is adherence to business ethics.
96. What risk is being avoided when financial institutions use cloud computing?
A. Speculative risk
C. Loss of customers risk
B. Pure risk
D. Return on investment risk

2010 HS ICDC

FINANCE CLUSTER EXAM

11

97. Which of the following issues is keeping risk managers from getting the right information into the right
context so that the right decisions can be made:
A. Having transparency around the effects of volatility on the organization
B. Having too little information that can be used to assess and understand risk
C. Having many different sources of data that can be used to assess risk
D. Having a centralized enterprise risk management system
98. A control that financial institutions have implemented to protect bank accounts when debit cards are used
to pay for online transactions is
A. e-invoicing.
B. malware.
C. PIN debits.
D. PEPPOL (Pan-European Public Procurement On-line)
99. Why are financial institutions using tokenization?
A. To protect online transactions
B. To create credit-cards
C. To provide incentives for increased investing
D. To overcome government-regulated quotas
100. Which of the following is a true statement about managers:
A. Managers usually train the employees to do the work.
B. Managers must be able to do their employees' jobs.
C. Managers allow employees to set the organizational standards.
D. Managers decide how to use the business's resources.

2010 HS ICDC

FINANCE CLUSTER EXAM – KEY

12

1. B
MON Company. The debtor is the individual or business that owes money to another individual or
business, which is the creditor. In the situation presented, MON Company is the creditor because the
company has the finances to extend credit to Mrs. Jones (the debtor), allowing her to pay later. Pedro
Sanchez is an employee of the creditor. The location of the company is not a factor in determining the
debtor-creditor relationship.
</h5></div><h5 id='q2'>2. An important purpose of full-disclosure laws and regulations is to</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. allow company employees to use inside information for personal gain.</option><option value="B">B. provide information to investors so they can make informed decisions.</option><option value="C">C. require companies to disclose all information about their operations.</option><option value="D">D. prevent a stock's par value from dropping below its market value.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is B: provide information to investors so they can make informed decisions.</h5><h5>Full-disclosure laws and
regulations require companies to disclose—publicize—any information that could affect the value of the
firms' stocks. Investors need this information so they can make informed buy, hold, or sell decisions
about investments. Full-disclosure laws also prevent company employees and other insiders from using
privileged information for their personal gain. Full-disclosure laws do not require companies to disclose
every bit of information about their operations—some undisclosed trade secrets are permitted. Fulldisclosure laws and regulations are not designed to impact par values of stock.
</h5></div><h5 id='q3'>3. Last week, a man who frequents Alice's health club and goes to the same church approached her and
struck up a conversation. After a bit of small talk, the man said that he would love to help Alice earn some
money on the stock market. “You can trust me,” the man said. “We go to the same church and the same
gym. In fact, our minister and the manager of the gym just gave me a ton of money to invest for them!”
The man is attempting to commit __________ fraud.</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. natural resource investing</option><option value="B">B. group affinity</option><option value="C">C. private placement offering</option><option value="D">D. life settlement</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is B: group affinity</h5><h5>Group affinity fraud typically involves a scammer who either claims or actually is a member
of the investor's group. In this case, the man is a member of the same health club and attends the same
church as Alice. Because the scammer is a member of the same group, investors may falsely believe
they can trust the scammer, especially if the scammer has lured in a few well-respected group members
(like the minister or the gym manager) to buy into the scam early on. Natural resource investing fraud
occurs when a scammer convinces investors to put money in fraudulent energy investments. Investors
are tempted by the scammer's promise of a fast, easy return. Private placement offering fraud involves
convincing investors to buy nonexistent stock from businesses. Life settlement fraud occurs when a
scammer purchases a large life insurance policy from the insured for an unreasonably small amount of
money. This usually occurs when the insured person needs money to pay necessities such as medicine
and medical care before death.
</h5></div><h5 id='q4'>4. Which of the following mutual funds is most likely to be tax inefficient:</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. A fund with a low portfolio turnover rate</option><option value="B">B. A fund with a high portfolio turnover rate</option><option value="C">C. A fund that concentrates on a specialized sector</option><option value="D">D. A fund that attempts to match a broad market index</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is B: A fund with a high portfolio turnover rate</h5><h5>Regardless of fund type, a fund with a high portfolio rate
replaces a high percentage of its investments every year. Every time that the fund sells one item in its
portfolio and purchases another, a capital gain or loss is being realized. Because these capital gains or
losses occur so frequently, it is difficult for fund investors to successfully time the realizations and
manage their overall tax obligations effectively. Specialized sector funds focus on a certain industry, and
index funds attempt to match broad market indices.
</h5></div><h5 id='q5'>5. Which of the following statements best describes the taxation of Roth IRAs:</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. Contributions and withdrawals during retirement are tax deductible.</option><option value="B">B. Contributions are tax deductible, but withdrawals during retirement are taxed.</option><option value="C">C. Contributions and withdrawals during retirement are both taxed.</option><option value="D">D. Contributions are taxed, but withdrawals during retirement are not.</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is D: Contributions are taxed, but withdrawals during retirement are not.</h5><h5>Contributions paid into Roth Individual
Retirement Accounts (IRAs) are taxed. But, earnings on the growing funds in the account and
withdrawals during retirement are tax-free. Unlike Roth IRAs, contributions to traditional IRAs are tax
deductible, but investors must pay taxes on the withdrawals they make from these accounts during
retirement.
</h5></div><h5 id='q6'>6. Which of the following is an example of a preventive internal control:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Variance analyses</option><option value="B">B. Data reconciliations</option><option value="C">C. Segregation of duties</option><option value="D">D. Physical inventories</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is C: Segregation of duties</h5><h5>Several types of internal controls are used in compliance. Preventive controls such
as the segregation of duties attempt to prevent unwanted events (noncompliance) from occurring.
Detective controls, on the other hand, are used to identify and document noncompliance. Data
reconciliations, variance analyses, and physical inventories are all detective internal controls. Corrective
controls are used after noncompliance has been identified. They may include disciplinary action or
additional training.
</h5></div><h5 id='q7'>7. Which of the following is most likely to be a benefit of proactive compliance plans for businesses?</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Minimized costs and a reduction in senior management</option><option value="B">B. A competitive advantage and a reduction in senior management</option><option value="C">C. A competitive advantage and minimized costs</option><option value="D">D. Increased government scrutiny and minimized costs</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is C: A competitive advantage and minimized costs</h5><h5>By developing a proactive compliance plan, a business is
likely to create a competitive advantage for itself and enhance its reputation. At the same time, a
proactive approach to compliance can help the business to minimize costs and reduce risks. Rather than
waiting for a problem or instance of noncompliance to occur, many businesses choose to do things
properly—in compliance—from the start. Most proactive businesses have grown their senior
management to address increasing compliance and risk concerns. This senior level position, often known
as a chief compliance officer, is responsible for ensuring corporate compliance with government and
industry laws and regulations. By avoiding noncompliance issues, proactive companies are likely to
receive less government scrutiny than those that wait to react to instances of noncompliance.
</h5></div><h5 id='q8'>8. The most significant barriers that many companies face when implementing integrated governance, risk,
and compliance (GRC) technology are the perceived</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. high cost and overdependence on a single GRC platform.</option><option value="B">B. high cost and overabundance of adequate technology solutions.</option><option value="C">C. high cost and lack of evidence of return on investment.</option><option value="D">D. centralization of business risk and lack of adequate technology solutions.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is C: high cost and lack of evidence of return on investment.</h5><h5>Although GRC technology can be very beneficial
for business, many companies encounter difficulties when implementing the technology. The most
significant barriers are the perceived high cost of the technology and a lack of evidence that the
technology will provide a sufficient return on investment. Other barriers include a lack of adequate
technology solutions, the absence of a common risk management/compliance “language,” and poor
change management during the implementation process. Benefits of GRC technology include the use of
a single GRC platform, increased communication among risk management teams, and centralized risk
and compliance oversight. Centralized business risk is neither a barrier nor a benefit of GRC technology.
</h5></div><h5 id='q9'>9. While reviewing a business's general ledger, a virtual auditor identified two identical journal entries within
the same accounting period. What reasoning technique did the virtual auditor use?</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. Contextual</option><option value="B">B. Symbolic</option><option value="C">C. Comparative</option><option value="D">D. Cross-source
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: Symbolic</h5><h5>A virtual auditor uses several different reasoning techniques to evaluate financial activities.
Symbolic reasoning looks for "signatures"—clues—of noncompliance as well as patterns of events such
as duplicate journal entries within one accounting period. Contextual reasoning involves determining the
seriousness of the noncompliance incident identified by symbolic reasoning. Comparative reasoning
identifies and compares similar transactions and information. It does not focus on identical transactions
such as duplicate journal entries. Cross-source reasoning inspects transactions within multiple financial
systems.
</h5></div><h5 id='q10'>10. A researcher should consider an author's expertise in a particular topic when assessing the validity of
written articles and publications to</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. confirm personal understanding of the information.</option><option value="B">B. verify the timeliness of the information.</option><option value="C">C. analyze the author's emotional intelligence.</option><option value="D">D. evaluate the author's level of credibility.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is D: evaluate the author's level of credibility.</h5><h5>When conducting research for a business, it is important to
consider the source's level of credibility. A person who has extensive knowledge of or expertise of a
specific topic is more credible and more likely to present valid or reliable information. For example, an
article about the side effects of a medication tends to be more credible if it was written by a doctor or
pharmacist rather than if the article was written by a financial planner or mechanic. Although the
timeliness of written material is a consideration, it is not related to the author's level of expertise. A
researcher cannot always determine the author's level of emotional intelligence by reading a written
document. And, it is possible to possess a high level of knowledge about a subject and have low
emotional intelligence. The way in which the article is written, rather the author's expertise, will impact the
understandability of the information.
</h5></div><h5 id='q11'>11. Brandon has been given a 385-page report and does not have time to review the entire document, but he
does need to understand specific information that is included in the report. What section of the report will
guide Brandon to the information he needs?</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Bibliography</option><option value="B">B. Appendices</option><option value="C">C. Analysis</option><option value="D">D. Table of contents</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: Table of contents</h5><h5>When trying to locate specific information from a lengthy document or a book, it often
saves time to first look at the table of contents. The table of contents is the portion of the text in which the
sections are listed with their page numbers for easy access. For example, if Brandon wants to obtain
information about industry trends, he can look at the table of contents, find the section that discusses
trends, and turn to the designated page of the document to read the desired information. The
bibliography contains the citations or sources used to construct the primary document. The appendices
are the segments added to the end of the primary document that include supporting information. Some
research reports contain an analysis of the document's contents or research. By looking at the table of
contents, the reader can determine if the desired information is included in the appendices or analysis
sections of the report.
</h5></div><h5 id='q12'>12. If an employee needs to do some research to answer a customer's telephone inquiry, the best action for
the employee to take is to obtain the customer's telephone number and then</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. put the customer on hold until the research has been completed.</option><option value="B">B. ask the sales manager to call the customer back.</option><option value="C">C. send the customer literature about the business and its products.</option><option value="D">D. follow-up with the customer after obtaining the requested information.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is D: follow-up with the customer after obtaining the requested information.</h5><h5>When employees do not know the
answer to their customers' questions, they should take steps to get the answers. This often involves
researching the problem or issue. When extensive research is required, an employee should obtain the
customer's contact information and call him/her back with the requested information after the research
has been completed. The nature of the inquiry determines if literature should be sent to the customer or if
another employee or manager should answer the customer's inquiry. For example, a question about a bill
may be better answered by an accounts-receivable employee than a purchasing agent. And, in this
situation, it would be inappropriate to send product information.
</h5></div><h5 id='q13'>13. In which situation is it most appropriate to use technical jargon to communicate information?</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. While casually talking with acquaintances during a social gathering</option><option value="B">B. During a meeting in which businesspeople share the same vocabulary</option><option value="C">C. When making a public speech to the residents of a local community</option><option value="D">D. While demonstrating a complex machine to a new customer</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is B: During a meeting in which businesspeople share the same vocabulary</h5><h5>Jargon is specialized language
known only to a certain group of people. Jargon is most often used by people who work within the same
organization or industry. Using jargon in social situations, during speeches, or with new customers may
confuse the message that recipients receive because these audiences may not be familiar with the
meaning of the jargon.
</h5></div><h5 id='q14'>14. Anna, a new employee with Turbo Electronics, must write a letter to a customer. Because Anna does not
know which letter format to use, she should</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. develop the letter in several formats and send the letter that her supervisor likes best.</option><option value="B">B. select the block format because it is the mostly widely used.</option><option value="C">C. select the simplified format because it is impersonal.</option><option value="D">D. ask her supervisor which letter format the company uses.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is D: ask her supervisor which letter format the company uses.</h5><h5>Companies may prefer that their employees
format business correspondence in a specific way to ensure consistency within the organization. To save
time and effort, Ann should ask her supervisor which letter format the company uses, such as the block
format or simplified format. Developing the letter in a variety of formats is an inefficient use of time.
</h5></div><h5 id='q15'>15. What is an important aspect of a customer-centric business?</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. Being satisfied with the status quo</option><option value="B">B. Limiting the employees' decision making</option><option value="C">C. Aligning business activities with customer needs</option><option value="D">D. Reducing the number of touch points with customers</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: Aligning business activities with customer needs</h5><h5>A customer-centric business focuses on customer
needs and wants. To focus on the customers' needs and wants, the business must ensure that its
business objectives and activities align with its customers' needs and wants. A customer-centric business
must continuously improve its processes and products to accommodate its customers' changing needs
and wants—the business cannot be satisfied with the status quo. A customer-centric business allows its
employees to provide input and make decisions in relation to customer relationships. Touch points are all
of the opportunities that businesses have to connect with customers and reinforce their brand value. A
customer-centric business is not likely to reduce the number of customer touch points.
</h5></div><h5 id='q16'>16. The MSB Company provides its customers with critical or time-sensitive product information by sending
them alerts or messages through their cellular phones. What form of technology is MSB using as an
element of customer relationship management?</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Global positioning</option><option value="B">B. Traditional</option><option value="C">C. Wireless</option><option value="D">D. Dial up</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Wireless</h5><h5>Wireless technology is redefining the way in which the world communicates. Cellular phones
are a wireless form of communication. Businesses have the ability to send time-sensitive text messages
at any time to their customers who have opted-in to receive updates on their cell phones. Cell phones are
not examples of traditional, global positioning (GPS), or dial-up technology.
</h5></div><h5 id='q17'>17. When providing product information to clients, finance professionals should use</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. standard responses.</option><option value="B">B. technical terms.</option><option value="C">C. financial acronyms.</option><option value="D">D. simple explanations.

2010 HS ICDC

FINANCE CLUSTER EXAM

3
</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is D: simple explanations.

2010 HS ICDC

FINANCE CLUSTER EXAM

3
</h5><h5>Explanation not available</h5></div><h5 id='q18'>18. While Tobi is in the middle of an important meeting with some new clients, her assistant steps into the
room to let Tobi know that her biggest customer, Mr. Williams, is on the phone with some questions
about his account. It is 3:30 p.m. What should Tobi do?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Invite the new clients out for dinner and call Mr. Williams in the morning</option><option value="B">B. Ask the new clients to take a break so that she can take the call immediately</option><option value="C">C. Ask her assistant to handle Mr. Williams' call and answer his questions</option><option value="D">D. Ask her assistant to inform Mr. Williams that Tobi will return his call at 5:00 p.m.</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: Ask her assistant to inform Mr. Williams that Tobi will return his call at 5:00 p.m.</h5><h5>An important factor in
retaining clients is returning their calls in a timely fashion. By personally responding to Mr. Williams'
questions promptly instead of calling him back in the morning or having her assistant answer his
questions, Tobi shows him that he is important to her. At the same time, though, Tobi needs to show the
new clients that she respects them and their time. For that reason, Tobi should finish her meeting with
them prior to speaking with Mr. Williams.
</h5></div><h5 id='q19'>19. Rather than studying individual customer data, First Bell Bank is interested in analyzing groups of
customers. Members of a group should be similar and markedly different from other customer groups.
Which of the following Customer Relationship Management (CRM) activities should be used to prepare
First Bell Bank's customer data for analysis:</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Regression</option><option value="B">B. Estimation</option><option value="C">C. Clustering</option><option value="D">D. Prediction</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is C: Clustering</h5><h5>Clustering involves dividing customers in a database into groups based on their similarities
and differences. Estimation is used to determine a value for an unknown variable such as a sales
forecast. Regression involves using existing values to forecast what continual values will be. Prediction
uses historical data to build a model to forecast future customer behavior.
</h5></div><h5 id='q20'>20. A stock broker is using Customer Relationship Management (CRM) technology to learn more about his
typical customer's purchasing pattern. The stock broker is using CRM technology to analyze the typical
customer</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. duration.</option><option value="B">B. trajectory.</option><option value="C">C. vintage.</option><option value="D">D. touch point.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is B: trajectory.</h5><h5>CRM technology is frequently used to measure and analyze a business's typical customer
trajectory, which is a pattern of purchases. Duration is the length of time that a customer stays a
customer. A vintage is a group of customers that are similar in some way. For instance, they might be
grouped together because they all became a business's customers in the same year. Touch points are all
of the opportunities that a business has to connect with customers and reinforce its brand image.
</h5></div><h5 id='q21'>21. A business is behaving unethically if it</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. obtains information about its competitors.</option><option value="B">B. misinterprets a customer's requests.</option><option value="C">C. misrepresents its capabilities to customers.</option><option value="D">D. partners with another business for financial gain.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: misrepresents its capabilities to customers.</h5><h5>A business that intentionally misrepresents its capabilities to
customers is exhibiting dishonest and unethical behavior. Customers are unlikely to return to a business
that is dishonest. Misinterpreting a customer's request is a miscommunication problem and doesn't
present an ethical issue. Partnering with another business is a common practice. There is not enough
information to determine if the partnership has engaged in unethical activities or if the business obtained
information about its competitors in an unethical way.
</h5></div><h5 id='q22'>22. To maintain its current customer base and attract new markets, the KMV Company lowered the prices of
some of its products. What external factor most likely influenced this action?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Operating cost increases</option><option value="B">B. Changes in consumer spending</option><option value="C">C. Production line improvements</option><option value="D">D. Comprehensive employee training programs</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: Changes in consumer spending</h5><h5>Phases of the business cycle affect consumers' spending habits. During
the contraction phase, unemployment tends to increase, so consumers have less money to spend on
goods and services. Under the right conditions, a business might be able to lower its prices on some of
its popular items, if operating costs do not increase and the business can maintain a reasonable profit. By
lowering prices, the business may be able to keep it customers and attract new price-oriented markets.
Production line improvements are internal factors that may prompt a business to lower its selling prices.
As production becomes more efficient, production costs tend to decrease, making it possible to lower
selling prices and still earn a profit. Providing employees with effective training helps to improve
productivity.
</h5></div><h5 id='q23'>23. A small tool manufacturer's total costs were $56,000 before it began to produce hammers. When the
manufacturer produced its first 2,000 hammers, costs increased to $62,500. What was the marginal cost
of producing each hammer?</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. $2.75</option><option value="B">B. $3.25</option><option value="C">C. $3.75</option><option value="D">D. $2.50</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is B: $3.25</h5><h5>Marginal cost is the change in cost that occurs when a business increases or decreases
production, and is used to calculate the extra cost of producing one additional item. To determine the
marginal cost of producing each additional hammer, first calculate the change in total cost by subtracting
the total costs before production from the total costs after production began ($62,500 - $56,000 =
$6,500). Therefore, the company's costs increased by $6,500 after it produced 2,000 hammers. To
calculate the marginal cost, divide the change in total cost by the number of hammers ($6,500 ÷ 2,000 =
$3.25).
</h5></div><h5 id='q24'>24. What is likely to occur when the inflation rate increases, and workers do not receive pay increases?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Increased spending</option><option value="B">B. Higher consumer demand</option><option value="C">C. Decreased unemployment</option><option value="D">D. Lower standard of living</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is D: Lower standard of living</h5><h5>The inflation rate is the speed in which prices rise in the marketplace. When
inflation increases, and employers do not provide their workers with raises to keep up with the rate of
inflation, then the employees do not have as much money to spend on goods and services. When
workers have less purchasing power, their standard of living (quality of life) may be negatively impacted
because they cannot buy things that they were once able to afford. When workers are not earning more
money, they are not increasing their spending levels. When people are spending less money, lower
demand for some consumer products may occur. When there is a reduced demand for products,
businesses often lower production and lay off workers, which increases the level of unemployment.
</h5></div><h5 id='q25'>25. If one Canadian dollar is equal to .958750 U.S. dollar, how much would you pay for an item that costs
$624.60 Canadian dollars in U.S. dollars?</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. $577.16</option><option value="B">B. $598.84</option><option value="C">C. $564.22</option><option value="D">D. $582.24</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: $598.84</h5><h5>Most countries have their own currency. A country's currency value fluctuates in relation to
other countries' currency values. Businesses monitor these fluctuations because dramatic changes in
currency values can affect their profits. To calculate the amount that you would pay in U.S. dollars,
multiply the price of the product in Canadian dollars by the value of the U.S. dollar ($624.60 x .958750 =
$598.835 or $598.84).
</h5></div><h5 id='q26'>26. Marisa believes that she possesses the skills to make a positive contribution to the work team. Marisa is
exhibiting</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. ethical standards.</option><option value="B">B. self-confidence.</option><option value="C">C. systematic behavior.</option><option value="D">D. empathy.</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is B: self-confidence.</h5><h5>Self-confidence is a positive belief in your own talents, skills, and objectives. Ethical
standards are the basic principles or unwritten rules that govern your behavior and help you recognize
right from wrong. Systematic behavior involves conducting activities in an organized, logical, and
methodical manner. Empathy is the ability to put yourself in another person's place.
</h5></div><h5 id='q27'>27. To be an effective team member, an employee needs to be willing to</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. provide insensitive feedback.</option><option value="B">B. collaborate with others.</option><option value="C">C. take on all jobs.</option><option value="D">D. withhold his/her opinions.

2010 HS ICDC

FINANCE CLUSTER EXAM

4
</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is B: collaborate with others.</h5><h5>Effective team members must be willing to help, work well with, recognize the
strengths of, and listen to other team members. It is important for team members to be objective, provide
positive and negative feedback in a courteous, respectful way, and offer their opinions as needed. Team
members should be willing to perform any activities they can—even those activities they don't like to do,
but they shouldn't take on complex or technical jobs that they are not qualified to perform.
</h5></div><h5 id='q28'>28. One way for Sidney to motivate her team members to accomplish a certain goal in a specific amount of
time is by</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. providing an incentive.</option><option value="B">B. taking over their activities.</option><option value="C">C. removing unexpected obstacles.</option><option value="D">D. delegating her responsibilities.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: providing an incentive.</h5><h5>An incentive is something that will fulfill a desire or need. Incentives often help
motivate team members to finish a project or perform a task, which helps the business achieve its goals.
Incentives may include anything from a free lunch and comp time to a large bonus. Taking over activities
and delegating responsibilities do not necessarily motivate others to take a certain course of action. And,
while it would be nice to be able to remove unexpected obstacles, it's not possible to do so.
</h5></div><h5 id='q29'>29. Important considerations when identifying your personal vision are your</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. logic and emotions.</option><option value="B">B. skills and natural resources.</option><option value="C">C. specific goals and income.</option><option value="D">D. values and aspirations.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: values and aspirations.</h5><h5>Vision refers to the future you wish to create. A vision is a reflection of your
values—what is important to you. A vision is also a reflection of your aspirations—your dreams and
passions. Often, a vision begins with an abstract idea that is based on emotion rather than logic. After
realizing or acknowledging a vision, then you should consider the resources (e.g., special skills and
money) that you will need to carry out the vision, which involves setting goals to achieve the vision.
</h5></div><h5 id='q30'>30. If you are going to successfully lead change within your organization, you need to be</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. subtle.</option><option value="B">B. persuasive.</option><option value="C">C. indifferent.</option><option value="D">D. resistant.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: persuasive.</h5><h5>Change doesn't just happen on its own. To lead change, change leaders need to be
persuasive—they must be able to get others within their organizations to see things their way, do things
their way, or agree with them. Subtle and indifferent (uncaring) attitudes don't usually prompt resistant
people to embrace change.
</h5></div><h5 id='q31'>31. Effective collaboration among coworkers requires</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. similar personality traits.</option><option value="B">B. mutual respect.
</option><option value="C">C. authoritarian attitudes.</option><option value="D">D. selective communication.
</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is B: mutual respect.
</h5><h5>Explanation not available</h5></div><h5 id='q32'>32. For an investment to yield positive results at the end of the investment period, the earnings should</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. be documented appropriately.</option><option value="B">B. grow by at least ten percent.</option><option value="C">C. be accrued on a debt security.</option><option value="D">D. exceed the rate of inflation.</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is D: exceed the rate of inflation.</h5><h5>When making investments, it is important to consider the time value of
money, which is the difference between the money's current purchasing power in relation to its
purchasing power at a future date. Earnings from investments can come in different forms, such as
accumulated interest from debt securities or dividends from equity securities. At the end of the
investment period, a successful investment will yield more money than the investor started with.
However, it is important to consider the rate of inflation—which is an increase in prices of goods and
services. If inflation increases more rapidly than the investment earns (e.g., 10%) during the investment
period, then the value of money earned will not yield the desired results. Documents and forms do not
affect the time value of money.
</h5></div><h5 id='q33'>33. The key factors involved in compounding growth are the amount of money you invest, how much your
investment grows each year, and</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. your mutual fund manager's education.</option><option value="B">B. how you earn the money that you invest.</option><option value="C">C. your educational background and career.</option><option value="D">D. how long your money is invested.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is D: how long your money is invested.</h5><h5>The most important factors to consider in compounding growth are
how much money you invest, how much your investment grows each year, and how long your money is
invested. Investing is using money to make money, which means that if you invest money in the stock
market, for example, you are likely to make an average of 10 percent each year. As the years pass, your
investment will grow tremendously because you will be earning interest on interest. So, it is beneficial to
invest for as long as possible to earn the largest amount of compound interest as possible. How you earn
the money that you invest, your educational background and career, and your mutual fund manager's
education have a much smaller impact on compounding growth than time does.
</h5></div><h5 id='q34'>34. On January 3, Anna mailed her credit-card payment, which was due on January 5. The credit-card issuer
received the payment on January 7. What most likely appeared on Anna's credit-card statement the
following month?</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. Application charge</option><option value="B">B. Late fee</option><option value="C">C. Processing charge</option><option value="D">D. Over-limit fee</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is B: Late fee</h5><h5>Credit-card issuers often charge late fees for payments that do not arrive on time. Some creditcard issuers charge application fees, which involves billing a customer for applying for credit. Processing
fees are charges to complete certain activities. Over-limit fees are charges applied for credit transactions
that go over or exceed the credit-card holder's credit limit.
</h5></div><h5 id='q35'>35. Which of the following statements about deposit-taking financial institutions is true:</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. The Small Business Administration and the Federal Housing Administration are examples of
deposit-taking financial institutions.</option><option value="B">B. When a saver deposits funds, s/he receives a claim on the individual or firm to whom the
depository institution lends these funds.</option><option value="C">C. A deposit-taking institution's primary liabilities are checking accounts, savings accounts, money
market accounts, and certificates of deposit.</option><option value="D">D. Two types of commercial banks are mutual savings banks and savings and loan associations
(S&Ls).</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is C: A deposit-taking institution's primary liabilities are checking accounts, savings accounts, money
market accounts, and certificates of deposit.</h5><h5>Explanation not available</h5></div><h5 id='q36'>36. Which of the following types of insurance companies serves as a financial intermediary:</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. Property</option><option value="B">B. Life</option><option value="C">C. Liability</option><option value="D">D. Health</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is B: Life</h5><h5>Life insurance companies are a type of financial intermediary because they receive funds from their
customers (savers) and lend the funds to other customers (borrowers). Property, liability, and health
insurance companies are not financial intermediaries. Like life insurance companies, they sell their
services to customers, but they do not lend funds to borrowers.
</h5></div><h5 id='q37'>37. Frankfort and Sons, an American firm, is preparing to issue bonds overseas. Even though the bonds will
be sold outside the U.S., they will be denominated in American dollars. These bonds are called</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. Interbonds.</option><option value="B">B. Yankee bonds.</option><option value="C">C. Eurobonds.</option><option value="D">D. Savings bonds.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is C: Eurobonds.</h5><h5>Eurobonds are bonds sold in a foreign country in the currency of the issuing company.
Frankfort and Sons, for example, is an American firm, so its Eurobonds will be denominated in American
dollars. However, these bonds will be sold overseas, not in the United States. Yankee bonds are issued
in the U.S. by a foreign company and denominated in American dollars. Interbonds are fictitious. Savings
bonds are issued by the U.S. Department of the Treasury. They are nontransferable securities that can
be cashed prior to their maturity date.
</h5></div><h5 id='q38'>38. Very small companies and companies with poor credit ratings are most likely to trade their stock on the</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. American Stock Exchange (AMEX).</option><option value="B">B. New York Stock Exchange (NYSE).</option><option value="C">C. Toronto Stock Exchange (TSX).</option><option value="D">D. Over the Counter Bulletin Board (OTCBB).

2010 HS ICDC

FINANCE CLUSTER EXAM

5
</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Over the Counter Bulletin Board (OTCBB).

2010 HS ICDC

FINANCE CLUSTER EXAM

5
</h5><h5>Explanation not available</h5></div><h5 id='q39'>39. The Money for You Bank recently merged with the Keeping You Safe Insurance Company. The merger is
an example of __________ in the finance industry.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. convergence</option><option value="B">B. consolidation</option><option value="C">C. tactical planning</option><option value="D">D. licensing</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is A: convergence</h5><h5>Convergence occurs when financial providers from different financial sectors (e.g.,
banking services and insurance) merge. Consolidation takes place when financial providers within the
same institutional category merge. For example, if two banks were to merge, they would be consolidating
their companies. Tactical planning is short-range planning (one year) of specific actions the business will
take. Two businesses should look much further ahead than just one year before making the decision to
merge. Licensing is a business structure that requires the authorization or permission from an owner of
another entity to use trademarked, copyrighted, or patented material for a specific activity, during a
specific time period, for the profit of both parties. Businesses that enter into licensing agreements do not
merge.
</h5></div><h5 id='q40'>40. Which of the following statements regarding the merger of multiple financial firms is true:</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. The merger typically results in a smaller variety of products and services, lower costs, and
reduced consumer risks.</option><option value="B">B. More consumer loans may be available from the new larger firm than were available from the
smaller, individual firms.</option><option value="C">C. A merger usually makes it easier to determine which supervisory agency should oversee the
new, larger company.</option><option value="D">D. The merger usually helps financial experts to get an accurate picture of the new, larger firm's
financial condition.</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is B: More consumer loans may be available from the new larger firm than were available from the
smaller, individual firms.</h5><h5>Explanation not available</h5></div><h5 id='q41'>41. When the Consumer Price Index (CPI) increases sharply, stock prices usually</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. rise.</option><option value="B">B. fall.</option><option value="C">C. stay the same.</option><option value="D">D. fluctuate daily.</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is B: fall.</h5><h5>The Consumer Price Index measures the prices of consumer goods. In the U.S., it is published
monthly by the Bureau of Labor Statistics. However, most experts conduct a “year-on-year” comparison
to better understand increases and/or decreases in the CPI. An increase in the CPI signals an increase in
inflation. A sharp increase in inflation causes interest rates and bond values to rise and stock prices to
fall.
</h5></div><h5 id='q42'>42. When nominal Gross National Product (GNP) increases, the money supply typically</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. decreases.</option><option value="B">B. stays the same.</option><option value="C">C. increases.</option><option value="D">D. fluctuates daily.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: increases.</h5><h5>Nominal GNP (the Gross National Product measured in current prices) and the money supply
are directly related. When nominal GNP increases, the money supply typically increases as well.
Conversely, when nominal GNP goes down, the money supply decreases. And, when the nominal GNP
and the money supply increase, the Federal Reserve typically raises interest rates, too. Since the
nominal GNP is a long-term economic measure, it would not cause the money supply to fluctuate on a
daily basis. Instead, the money supply would increase or decrease over the long term.
</h5></div><h5 id='q43'>43. Financial globalization tends to cause an increase in</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. limits on foreigners' access to domestic markets.</option><option value="B">B. investors' exposure to business cycle risks.</option><option value="C">C. taxes on international transactions.</option><option value="D">D. herd behavior among investors.</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: herd behavior among investors.</h5><h5>Although financial globalization tends to increase investors' access to
many different financial markets, financial globalization also seems to increase the risks of speculative
bubbles and herd behavior among investors. Herd behavior involves individuals who act together as a
group without any planned direction. It is usually irrational and driven by emotions. In good times,
investors hurry to join others in a buying frenzy. But, in bad financial times, fearful investors join others in
a rush to get out of risky markets. By diversifying their funds in many different countries, investors are
able to diversify their risk and reduce their exposure to business cycle risks. To enable capital to flow
more freely across their national borders, many countries have lowered their taxes on international
financial transactions.
</h5></div><h5 id='q44'>44. To hedge the risk of investing in the foreign exchange market, some investors use</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. derivatives.</option><option value="B">B. emerging markets.</option><option value="C">C. venture capital.</option><option value="D">D. no-load funds.</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is A: derivatives.</h5><h5>Derivatives are financial instruments whose value depends upon the value of other financial
instruments or market indices. Investors frequently use derivatives to hedge or reduce the risk of
investing in the foreign exchange market, which is sometimes volatile. The derivatives help to reduce the
impact of significant fluctuations in foreign exchange markets. Emerging markets are financial markets in
countries with developing economies. Emerging markets are usually receptive to foreign investment, but
they are also more volatile and risky than financial markets in developed countries. Venture capital is
invested money that is used for new business opportunities. No-load mutual funds have no up-front sales
charges.
</h5></div><h5 id='q45'>45. Adam wants to hire a financial-services provider who will provide him a wide variety of services, such as
recommending insurance coverage, providing in-depth financial advice, and making investments on his
behalf. What type of financial-services provider would be best suited to handle Adam's needs?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Full-service broker</option><option value="B">B. Discount broker</option><option value="C">C. Beneficiary</option><option value="D">D. Insurance agent</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is A: Full-service broker</h5><h5>Full-service brokers provide “one-stop shopping” for investors. They provide a wide
variety of financial products and services. Full-service brokers are often desirable for people who require
ongoing, comprehensive financial guidance and do not have the time to research investment options in
detail. Discount brokers primarily provide the client with basic information about financial products and do
not offer advice or conduct in-house research. A beneficiary is an individual or institution that receives
specified benefits under certain circumstances such as money from a life-insurance policy upon the
insured's death. Although insurance professionals may be employed by full-service brokerage firms, not
all insurance agents have the expertise to provide comprehensive financial advice.
</h5></div><h5 id='q46'>46. Which of the following web sites is most likely to contain accurate, trustworthy securities information:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. Wikipedia</option><option value="B">B. Morningstar</option><option value="C">C. StandardLine</option><option value="D">D. Facebook Finance</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is B: Morningstar</h5><h5>Morningstar is an independent company that provides up-to-date, reliable information and
analyses of a variety of securities, including stocks, bonds, and mutual funds. Although Wikipedia
contains a wealth of information, it is less likely to be accurate or trustworthy because the content is
primarily provided by anonymous Internet users. StandardLine does not provide financial information.
Facebook Finance is a fictitious web site.
</h5></div><h5 id='q47'>47. The Milton Ladder Corporation, which is publicly traded, is in the process of acquiring the Bradley Chute
Company. What type of document is Milton Ladder required to file within 15 days of the acquisition?</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. Form 10-K</option><option value="B">B. Form 8-K</option><option value="C">C. Form 10-Q</option><option value="D">D. Form 4</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is B: Form 8-K</h5><h5>Publicly-traded companies are required to provide information about their finances to the
Securities and Exchange Commission (SEC) every quarter. For the first three quarters of the fiscal year,
publicly-traded companies file 10-Q reports that focus on the company's financial situation for that period
of time. At the end of the fourth quarter of each fiscal year, each company is required to file a Form 10-K,
which is similar to an annual report. It includes detailed information about the company, its competitors,
risks it faces, legal proceedings that the company is involved in, and audited financial statements. In
addition to these standard, routine documents, a company is also required to file a Form 8-K, also known
as a current report if a significant, non-recurring event occurs before a 10-Q or 10-K is due. Events might
include changes in key management, introduction of a new product, legal actions, or the acquisition of
another company. Form 4 tells you when insiders are buying or selling the company's stock.
</h5></div><h5 id='q48'>48. An investor using a securities table can learn about a stock's volatility by checking the stock's</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. CLOSE.</option><option value="B">B. DIV.</option><option value="C">C. VOL.</option><option value="D">D. 52-Week HI/LO.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is D: 52-Week HI/LO.</h5><h5>The highest and lowest prices paid during the past year can be used to learn how
volatile a stock is. If the range between the lowest and highest prices is large, then the stock's price has
risen or fallen sharply in the past year. Such a stock would be considered volatile. The stock's dividend,
volume, and closing price are much less reliable indicators of a stock's volatility.
</h5></div><h5 id='q49'>49. Which of the following is one way that small businesses use technology to perform accounting tasks:</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. Developing institutional policies</option><option value="B">B. Requesting quotes by e-mail</option><option value="C">C. Establishing tax codes</option><option value="D">D. Filing tax returns online

2010 HS ICDC

FINANCE CLUSTER EXAM

6
</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: Filing tax returns online

2010 HS ICDC

FINANCE CLUSTER EXAM

6
</h5><h5>Explanation not available</h5></div><h5 id='q50'>50. A primary reason that governments regulate corporations' financial activities is to</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. protect stockholders.</option><option value="B">B. ensure earnings.</option><option value="C">C. limit benefits.</option><option value="D">D. control costs.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is A: protect stockholders.</h5><h5>Public corporations often have thousands of shareholders. To protect the rights and
financial wellbeing of the shareholders, governments regulate corporations' financial activities—activities
that are carried out by the corporations' management teams and their boards of directors. The regulation
of financial activities does not ensure earnings, limit benefits, or control costs.
</h5></div><h5 id='q51'>51. Which of the following is the most likely reason why a manager would review financial information for
her/his industry and compare his/her business's operating results with industry averages:</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. To calculate the business's percentage increase in net sales</option><option value="B">B. To determine if the business is performing above or below average</option><option value="C">C. To prepare a company budget for the following year</option><option value="D">D. To determine the return on common stockholders' equity</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is B: To determine if the business is performing above or below average</h5><h5>Managers often compare their
businesses' operating results with industry averages to determine if their businesses are doing better
than, worse than, or about the same as other firms in the same industry. The business's percentage
increase in net sales, next year's budget, and the return on common stockholders' equity can be
determined without industry financial information and averages.
</h5></div><h5 id='q52'>52. During its 20 years of operation, the Normandy Company has made very few changes to its accounting
methods and system. As a result, the company's financial information is likely to be very</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. consistent.</option><option value="B">B. comparable.</option><option value="C">C. reliable.</option><option value="D">D. conservative.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: consistent.</h5><h5>Consistent financial information results from the application of similar or identical accounting
methods and systems over time within an organization. The Normandy Company has applied very similar
accounting methods over its 20 years of operation. Therefore, the company's financial information is
likely to be consistent. However, consistent information is not necessarily comparable, reliable, or
conservative. There is no way of knowing if the company's accounting methods are similar to those of
other businesses in the industry, so the accounting information may not be comparable. Reliable
information is accurate and unbiased. The Normandy Company, though, could easily have inaccurate
financial information, even though it is consistent. Conservative financial information does not overstate
assets and sales or understate liabilities and expenses. There is no indication that the Normandy
Company's information is conservative.
</h5></div><h5 id='q53'>53. Which of the following statements regarding the financial-information management function is true:</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. The financial-information management function's responsibilities have declined in recent years.</option><option value="B">B. The financial-information management function is an electronic, web-based activity.</option><option value="C">C. A financial-information management system can be used to support operations management
decisions.</option><option value="D">D. Data in a financial-information management system are typically at least four to six months old.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is C: A financial-information management system can be used to support operations management
decisions.</h5><h5>Explanation not available</h5></div><h5 id='q54'>54. A financial-information management system can help a financial manager to make which of the following
types of decisions:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Capital budgeting</option><option value="B">B. Employee scheduling</option><option value="C">C. Vendor selections</option><option value="D">D. Adding/dropping products</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is A: Capital budgeting</h5><h5>A financial-information management system is a set of processes, people, and
equipment used to gather, store, organize, and provide financial information to decision-makers. A
financial manager might use a financial-information management system to make capital budgeting
decisions. Capital budgeting involves developing a plan to acquire and finance long-term business
assets. Financial managers would not use a financial-information management system to schedule
employees. Although a financial-information management system might be useful when selecting
vendors or adding/dropping products, those decisions would not be made by financial managers.
</h5></div><h5 id='q55'>55. Which of the following is a common outcome of poor financial-information management in a finance
department:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Employees cannot understand financial statements.</option><option value="B">B. Employees receive information before it's needed in the department.</option><option value="C">C. Employees cannot correctly assess trends.</option><option value="D">D. Employees are able to increase their efficiency.</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is C: Employees cannot correctly assess trends.</h5><h5>When financial information is poorly managed, employees
are hindered from correctly assessing their performance and trends. It also takes a long time to access
requested information, thereby delaying use of the information and decreasing employee efficiency.
Employees' ability to understand financial statements is not an outcome.
</h5></div><h5 id='q56'>56. Which of the following leads accountants to apply unethical earnings-management practices:</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. Postponing a large purchase to a later time</option><option value="B">B. Meeting analysts' estimated earnings</option><option value="C">C. Accelerating payment of expenses when earnings are high</option><option value="D">D. Selling securities for a gain</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is B: Meeting analysts' estimated earnings</h5><h5>Managers are often pressured to ensure that analysts' estimated
earnings are reached. Managers should focus on use of accounting principles that provide the most
accurate results rather than on providing the most desired results. Otherwise, they will be guilty of
cooking the books to provide a more favorable financial report than actually exists. Postponing
purchases, accelerating expense payments, and selling securities for a gain are ethical earningsmanagement practices.
</h5></div><h5 id='q57'>57. How can businesses benefit from using a central data repository for its financial information?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. They are able to overcome economies of scale.</option><option value="B">B. They can obtain faster responses to queries.</option><option value="C">C. They no longer have to generate consistent data.</option><option value="D">D. They can rely on old data.</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is B: They can obtain faster responses to queries.</h5><h5>Since data are housed in one location, querying the data is
faster, thereby improving organizational efficiency. Having a central depository ensures that data from
different applications are combined into one common storage area which increases the speed with which
queries can be run. Using a central repository for financial information enables businesses to achieve
economies of scale rather than overcoming them. They also have access to more consistent, up-to-date
information rather than relying on old data.
</h5></div><h5 id='q58'>58. Why has online technology's use increased in financial-information management?</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Recognition that the security of transactions is no longer an issue</option><option value="B">B. Removal of electronic information exchange procedures</option><option value="C">C. Passage of laws that recognize electronic documents as legally binding</option><option value="D">D. Protection of customers' right to privacy</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: Passage of laws that recognize electronic documents as legally binding</h5><h5>As businesses have become
more comfortable with the use of electronic information, their willingness to accept electronic documents
as legally binding contracts has also increased. This has been buoyed by the passage of laws
recognizing electronic documents and signatures as legally binding. Electronic information exchange
procedures have not been removed. These procedures provide a way for people to exchange information
electronically. Security remains an issue for online financial-information management. Although the
customers' right to privacy is an issue, it has not contributed to the increased use of online technology in
financial-information management.
</h5></div><h5 id='q59'>59. In what stage of the data-mining process would you clean data in a database?</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. Exploration</option><option value="B">B. Model building and validation</option><option value="C">C. Prediction</option><option value="D">D. Deployment

2010 HS ICDC

FINANCE CLUSTER EXAM

7
</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is A: Exploration</h5><h5>The exploration stage of data mining generally starts with preparation of the data. This
includes such activities as data cleaning, data transformation, selecting subsets of records for analysis,
selecting the variables of interest, and choosing the analytic method to apply. The second phase of the
data-mining process is model building and validation in which various models appropriate for the study
are identified, and the best one is selected. Deployment is use of the selected model. Prediction is not a
stage in the data-mining process; however, data miners want to make predictions from their data-mining
activities.
</h5></div><h5 id='q60'>60. Why would a meta-learner be used in data mining?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. To determine the best fit of classifications resulting from multiple models</option><option value="B">B. To orient analytic models to the data stored in a data base</option><option value="C">C. To enhance search engine optimization (SEO) strategies</option><option value="D">D. To select the analytic model to apply to the data in a database</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is A: To determine the best fit of classifications resulting from multiple models</h5><h5>Often, businesses use a variety
of models to understand the data in their data bases. When they generate different results from one
another, the business applies a meta-learner to figure out which results are best. Search engine
optimization (SEO) strategies relate to increasing the number of hits to a web site from search engines.
By the time meta-learners are applied, businesses have already selected a variety of analytic models.
The meta-learner is not responsible for orienting models to data in a data base.
</h5></div><h5 id='q61'>61. What is a benefit of managing budgeting data efficiently through budgeting applications?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Decreases auditors' ability to trace the numbers used in budgets</option><option value="B">B. Increases amount of time that needs to be spent on value-added activities</option><option value="C">C. Decreases the need for having an audit trail</option><option value="D">D. Increases management's confidence in budgets</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is D: Increases management's confidence in budgets</h5><h5>The efficient management of budget data benefits
businesses in a variety of ways, including error detection and control, decreasing the time needed for
completing the accounting cycle, and increasing management's confidence, not only in budgets, but also
in financial statements and performance scorecards, etc. Since use of efficient budgeting applications
decreases the amount of time required to complete the accounting cycle, financial professionals have
time to spend on value-added activities, such as decision-making and presentation of information, rather
than having to spend more time on them. An audit trail and increased ability to trace the numbers used in
budgets are natural outgrowths of the use of budgeting applications.
</h5></div><h5 id='q62'>62. Which of the following would a small business's budgeting applications most likely be able to do:</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. Show the business's cash-flow status</option><option value="B">B. Predict new services to offer customers</option><option value="C">C. Determine the business's electronic data interchange (EDI) needs</option><option value="D">D. Identify equipment needing repairs</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is A: Show the business's cash-flow status</h5><h5>Budgeting applications enable businesses to maintain, monitor,
and forecast a business's financial status and generate financial reports that can be shared with a
business's decision-makers. Expenses, revenue, cash flow, profit/loss, etc., are easily tracked and
determined using budgeting applications. Equipment needing repairs, new services to offer customers,
and EDI needs are not captured and predicted by budgeting applications.
</h5></div><h5 id='q63'>63. How could financial analysis applications be used to identify possible conflicts of interest?</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. By comparing yearly volume with on-hand quantity for stock item</option><option value="B">B. By isolating entries against authorization records for new or terminated employees</option><option value="C">C. By comparing vendor payables posted to purchase orders</option><option value="D">D. By comparing employee phone numbers and addresses to vendor information for payables</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is D: By comparing employee phone numbers and addresses to vendor information for payables</h5><h5>A conflict of
interest is any relationship that is, or appears to be, not in the business's best interest. It would prevent
someone from performing her/his duties and responsibilities objectively. To spot probable conflicts of
interest, businesses can use their financial analysis applications to cross check employee data with that
of vendors. The other examples can be used to analyze financial data for other purposes.
</h5></div><h5 id='q64'>64. Which of the following would be appropriate to use as a primary key for identification of customers at a
financial institution:</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. Person's first and last names</option><option value="B">B. Person's social security number</option><option value="C">C. Person's zip code</option><option value="D">D. Person's individual account number</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: Person's individual account number</h5><h5>Databases depend upon keys to store, sort and compare records. A
primary key is the unique identifier assigned to a record in a table. When choosing a primary key,
database builders need to be sure that the identifier will be unique to an individual. The person's account
number would be unique to the individual. Most customers consider their social security numbers to be
private information that they do not want entered into databases. In addition, the government can
reassign social security numbers upon the death of the owner of a social security number. In addition,
some people do not have those numbers if they are not U.S. citizens. Zip codes are not unique to an
individual or to a location. A person's first and last names may not be unique, e.g., there may be many
John Smiths.
</h5></div><h5 id='q65'>65. Investment firms must accurately report their financial position because</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. they are trusted to maintain an accurate accounting of people's revenue and expenses.</option><option value="B">B. others rely on the information when making credit and/or investment decisions.</option><option value="C">C. they maintain both brick-and-mortar and virtual businesses for trading.</option><option value="D">D. people know that investment firms would not take advantage of them.</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is B: others rely on the information when making credit and/or investment decisions.</h5><h5>It's important for
investment firms to share their actual financial situation rather than manipulate the numbers to present
the most desired financial situation. Accountants, rather than investment firms, maintain an accurate
accounting of people's revenue and expenses. Having both brick-and-mortar and virtual businesses
would not impact the accuracy of investment firms' reporting. Unfortunately, most people understand that
not all people are honest. Therefore, they need to know enough about investing to make good choices.
</h5></div><h5 id='q66'>66. What is the connection between accounting and finance?</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. Accounting relies on finance to generate reports that it uses to create financial statements.</option><option value="B">B. Accounting and finance perform the same functions.</option><option value="C">C. Accounting's reports aid finance in analyzing a company's financial position.</option><option value="D">D. Accounting uses the revenue and expense reports generated by finance to make financial
decisions.</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: Accounting's reports aid finance in analyzing a company's financial position.</h5><h5>Accounting and finance are
closely related because finance relies on accounting to generate the reports it needs to make financial
decisions. These reports show revenue and expenses on the financial statements. Finance's work begins
where accounting's work leaves off.
</h5></div><h5 id='q67'>67. Which of the following represents a difference between accounting and finance:</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Finance collects and presents financial information, while accounting determines financial
strategies.</option><option value="B">B. Finance tracks revenues and expenses when they are incurred, while accounting recognizes
them when money is exchanged.</option><option value="C">C. Accounting recognizes revenue and expenses when they are incurred, while finance recognizes
them when money is exchanged.</option><option value="D">D. Accounting collects and presents financial information, while finance creates financial
statements.</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: Accounting recognizes revenue and expenses when they are incurred, while finance recognizes
them when money is exchanged.</h5><h5>Explanation not available</h5></div><h5 id='q68'>68. Which of the following is an output of a financial system?</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Sales slips</option><option value="B">B. Financial condition</option><option value="C">C. Invoices</option><option value="D">D. Classification of expenses

2010 HS ICDC

FINANCE CLUSTER EXAM

8
</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is B: Financial condition</h5><h5>A merger is likely to create a
large corporation with product offerings that encompass multiple financial sectors. Because the
corporation offers products from multiple financial sectors, it is difficult to determine which supervisory
agency should regulate and oversee company operations.
</h5></div><h5 id='q69'>69. In what type of accounting system are revenue and expenses accounted for at the time money is
received or spent?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Cash</option><option value="B">B. Accrual</option><option value="C">C. Financial</option><option value="D">D. Managerial</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is A: Cash</h5><h5>With cash accounting, transactions are recorded when money is received or spent. This results in
problems since the service might be provided during one accounting period, but payment is not received
until another accounting period. In addition, businesses can be accused of manipulating their numbers to
their advantage. With accrual accounting, transactions are recorded at the time they occur regardless of
when money is exchanged. Managerial accounting is concerned with providing financial information
internally to managers. The number and types of reports generated vary based on a manager's needs.
With financial accounting, accountants prepare financial information for external users such as the
government, bankers, and stockholders. The number and type of reports generated for financial
accounting does not vary.
</h5></div><h5 id='q70'>70. Which of the following is essential to the identification of trends in financial data for a horizontal analysis:</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. Data in a Statement of Cash Flows</option><option value="B">B. Data from the most recent financial report</option><option value="C">C. Data in financial reports from multiple time periods</option><option value="D">D. Data from a zero-based budget</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is C: Data in financial reports from multiple time periods</h5><h5>Trends indicate the direction that something is
headed. They depict patterns. Horizontal analysis requires the comparison of data over a period of time.
You cannot look at a single financial report and spot trends for a horizontal analysis.
</h5></div><h5 id='q71'>71. What is the significance of the base year in horizontal trend analysis?</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. It is the time period in which the difference between revenue and expenses is the greatest.</option><option value="B">B. It represents the time period in which a trend is first detected.</option><option value="C">C. It is the time period that is used as the basis for comparisons.</option><option value="D">D. It represents the time period in which the difference between accounts receivable and accounts
payable is the smallest.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: It is the time period that is used as the basis for comparisons.</h5><h5>The base year is the starting point for
comparisons; therefore, each category on a financial statement in the base year is 100%. By subtracting
the base year's amount from each future amount, and then dividing by the base year amount, you can
determine the percent of increase or decrease from year to year. The other responses do not relate to
the base year that is used in horizontal analysis.
</h5></div><h5 id='q72'>72. Why would creditors during the tough economic times of the last few years have increased their
surveillance of customers' financial information?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. To make credit easier to obtain once customers have met the desired criteria</option><option value="B">B. To reduce the likelihood that customers will not pay their bills</option><option value="C">C. To increase their chances of having customers default on their loans</option><option value="D">D. To increase their reliance on Dun and Bradstreet reports</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: To reduce the likelihood that customers will not pay their bills</h5><h5>Creditors must protect themselves from
customers who fail to pay their bills. They're doing this by more closely examining customers' financial
statements, determining whether there are cash flow problems that would delay payment, asking for
trade references, etc. This is making it more difficult for customers to obtain credit, but the actions help to
reduce creditor risk. The goal of the additional surveillance is to decrease the chances of having
customers default on their loans, rather than increase them. Creditors are using more stringent methods
of verifying a customer's credit than relying on Dun and Bradstreet reports.
</h5></div><h5 id='q73'>73. A creditor carefully examines a business's financial information to determine whether the business has
sufficient money to meet its short-term obligations when they come due. In this situation, the creditor is
concerned about the business's</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. investment return.</option><option value="B">B. profitability.</option><option value="C">C. efficiency.</option><option value="D">D. liquidity.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is D: liquidity.</h5><h5>The creditor wants to know that the business has sufficient cash on hand to meet its
obligations. If the creditor determines that the business is unable to meet its current short-term
obligations, the creditor most likely will deny the credit request. Profitability is concerned with whether the
business is making a profit and whether it's sufficient to maintain business operations. Efficiency focuses
on whether the business is making the best use of its resources. Investment return lets investors and
creditors know what return they can expect to get from a business.
</h5></div><h5 id='q74'>74. When a creditor analyzes financial data to determine whether a client should be able to pay the principal
and interest on a loan, the credit is assessing the client's</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. long-term solvency.</option><option value="B">B. short-term liquidity.</option><option value="C">C. long-term return on investment.</option><option value="D">D. short-term return on investment.</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is A: long-term solvency.</h5><h5>Creditors need to predict whether clients will be able to pay off their loans.
Therefore, they want to assess clients' long-term prospects of having sufficient funds. They do this by
calculating two financial ratios: debt-to-equity ratio that tells creditors whether the customer can repay the
principal of the loan and Interest Coverage or Times Interest Earned that indicates whether the client can
repay the interest on the loan. Short-term liquidity, on the other hand, focuses on whether the client is
able to meet current financial obligations. Investment return lets investors and creditors know what return
they can expect to get from a business.
</h5></div><h5 id='q75'>75. When a human resources department uses interactive computer simulations to help employees learn
how to do their jobs, it is using technology for ___________ purposes.</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. evaluation</option><option value="B">B. training</option><option value="C">C. hiring</option><option value="D">D. compliance</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: training</h5><h5>The human-resources function plans and coordinates employee training programs for the
business. Training programs often involve technology-oriented activities, such as interactive computer
simulations. Evaluation activities involve tasks related to employee-performance reviews. The hiring
process is a staffing activity. Compliance activities ensure that the business follows government
regulations.
</h5></div><h5 id='q76'>76. Complex buying behavior is most likely involved when the customer is purchasing</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. a car.</option><option value="B">B. a meal.</option><option value="C">C. socks.</option><option value="D">D. gasoline.</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is A: a car.</h5><h5>Product type affects a customer's buying behavior. Customers who exhibit complex buying
behavior are highly involved in the purchase because the product tends to be more expensive and risky.
When the purchase is a form of self-expression, it affects the customer's status or image, and brand is an
important factor. Because cars are expensive and vary in dependability and style, customers tend to
spend more time evaluating their options before buying. Meals, shoes, and movie tickets are routine
purchases, so customers tend to exhibit habitual buying behavior rather than complex buying behavior
when purchasing these items.
</h5></div><h5 id='q77'>77. Todd needs to develop an overall plan for his business but does not know what type of information to
include in the document. Todd logs onto a search engine to quickly locate the information he needs.
Which of the following search terms are most likely to provide Todd with desired search results:</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. Plan components</option><option value="B">B. Develop planning document</option><option value="C">C. Business plan elements</option><option value="D">D. Business document components

2010 HS ICDC

FINANCE CLUSTER EXAM

9
</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is C: Business plan elements</h5><h5>To retrieve the most applicable results from an Internet search engine, a
computer user should enter terms into the query field that are most likely to bring up the desired
information. “Business plan elements” are words that are most likely to retrieve the information Todd
needs, which is the type of information that he needs to include in his business plan. If Todd is not
satisfied with the results that his initial search returns, he could use search terms such as “business plan
components” or “business plan parts.” The remaining search terms are too general and would likely not
provide the information Todd desires on the first few pages of the results, which would reduce Todd's
efficiency in retrieving the desired information.
</h5></div><h5 id='q78'>78. Which of the following is a situation that involves the illegal use of copyrighted material:</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. An online business allows its customers to download and share music without the recording
artist's consent.</option><option value="B">B. An apparel company imprints a hockey league's logo on a new line of sportswear.</option><option value="C">C. A manufacturer attempts to produce another business's invention, which has been registered
with the government.</option><option value="D">D. A computer company develops a new project-management software program.</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: An online business allows its customers to download and share music without the recording
artist's consent.</h5><h5>Explanation not available</h5></div><h5 id='q79'>79. A customer sent the Webster Company a check in the amount of $1,725 as partial payment for a
$2,456.29 purchase. During the current billing cycle, the customer made several purchases, totaling
$466.23. Now, Webster must generate a new account statement to send to the customer. How much
money does the customer owe Webster?</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. $1,197.52</option><option value="B">B. $731.29</option><option value="C">C. $466.23</option><option value="D">D. $1,719.51</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is A: $1,197.52</h5><h5>Many businesses generate account statements to summarize their customers' purchasing
activities and amounts due for a specific time frame. Because the customer sent a partial payment for a
purchase, the balance due should be added to the next statement. To calculate the balance due, first
subtract the amount paid from the original purchase amount ($2,456.29 - $1,725 = $731.29). Then, add
this figure to the total of the most recent purchases ($731.29 + $466.23 = $1,197.52). The customer
owes Webster $1,197.52.
</h5></div><h5 id='q80'>80. A business report provides statistical data indicating that the demand for a specific type of product has
been increasing between three and six percent over the past several months. This information is useful to
companies to</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. identify trends.</option><option value="B">B. decrease costs.</option><option value="C">C. reduce inventory.</option><option value="D">D. achieve quotas.</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is A: identify trends.</h5><h5>When financial information is poorly managed, employees
are hindered from correctly assessing their performance and trends. It also takes a long time to access
requested information, thereby delaying use of the information and decreasing employee efficiency.
Employees' ability to understand financial statements is not an outcome.
</h5></div><h5 id='q81'>81. A company trains its human resources department in how to handle emergency situations. Is this an
example of operations management?</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. Yes, because the human resources department is considered an outside customer.</option><option value="B">B. Yes, because it involves the operational aspects of safety and security.</option><option value="C">C. No, because the human resources department does not interact with outside customers.</option><option value="D">D. No, because human resources does not use operations.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is B: Yes, because it involves the operational aspects of safety and security.</h5><h5>Operations management involves
the processes used by both internal and external customers. Emergency training in human resources
improves the processes the department would use in emergency situations. The human resources
department is an internal part of the company, not an outside customer. Internal customers can also
benefit from improvements in operations management. Human resources does use processes, or
operations, to complete valuable internal tasks for the organization.
</h5></div><h5 id='q82'>82. Jane works in a factory. She has noticed that sections of the factory floor are consistently slippery
because oil drips on them. She has reported this to her manager twice, but the problem hasn't been
corrected. Jane is so worried that an employee could slip and fall that she contacts the government
agency that handles workplace safety. This is an example of</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. whistleblowing.</option><option value="B">B. being a tattle tale.</option><option value="C">C. handling an accident appropriately.</option><option value="D">D. establishing security procedures.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is A: whistleblowing.</h5><h5>A whistleblower is a person who reveals any wrongdoings or malpractices that are taking
place within an organization. Jane attempted to resolve a potential problem internally with her manager,
but needed to go outside her organization to get the problem resolved. Countries, such as the U.S. and
Canada, have whistleblower laws that protect whistleblowers from retaliation. Attempting to ensure the
safety of others is not being a tattle tale—it is being a responsible adult. Because it can be interpreted be
some people as tattling, whistleblower laws may be used to protect the person who reports
noncompliance. Jane is attempting to prevent an accident; one has not occurred, yet. Security
procedures are set in place by a company's management. Jane is reporting noncompliance that may
result in a company's deciding to establish new security procedures.
</h5></div><h5 id='q83'>83. To prevent injuries when operating machinery, it is important to</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. know standard first aid.</option><option value="B">B. purchase the most efficient equipment.</option><option value="C">C. purchase the newest equipment.</option><option value="D">D. follow the instruction manual.</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: follow the instruction manual.</h5><h5>Each piece of machinery comes with an instruction manual that outlines its
proper use. Even experienced workers should read and follow these instructions. Without proper usage
(as written in the instruction manual), a worker can be injured on any type of equipment, including
machines that are very new and very efficient. While knowing first aid will help after an injury occurs, it
does not prevent injuries.
</h5></div><h5 id='q84'>84. Which of the following is NOT a benefit of a post-implementation review?</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Identifying cost-savings opportunities for future projects</option><option value="B">B. Identifying cost-savings opportunities for the current project</option><option value="C">C. Identifying ways to improve project planning</option><option value="D">D. Identifying ways to improve the company's processes</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is B: Identifying cost-savings opportunities for the current project</h5><h5>A post-implementation review is conducted
after a project is finished. Therefore, there is not an opportunity to save money on the current project.
There is an opportunity to identify ways to improve future projects, such as cost-savings measures,
improving project planning methods, and improving the processes used by the company.
</h5></div><h5 id='q85'>85. What must be done first to begin a Six Sigma Improvement Model?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Review data to determine if change needs to be made</option><option value="B">B. Collect data to measure areas identified as problematic</option><option value="C">C. Make improvements to areas with low customer satisfaction scores</option><option value="D">D. Define the gaps between customer satisfaction and the company's capabilities</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is D: Define the gaps between customer satisfaction and the company's capabilities</h5><h5>Before any measures can
be taken or improvements made, a company needs to find out what its customers want and if it is
meeting those wants and needs. Once the gaps between what customers want and what the company is
delivering are identified, the company can determine how it will measure improvement. Data are then
collected and reviewed. After that, improvements are made and continually monitored.
</h5></div><h5 id='q86'>86. The Dewberry Company pays both its female employees and its male employees the same salary range
for the same type of work. Dewberry is providing its employees with</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. a safe work environment.</option><option value="B">B. fair treatment.</option><option value="C">C. the right to privacy.</option><option value="D">D. the option to buy stock.

2010 HS ICDC

FINANCE CLUSTER EXAM

10
</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is B: fair treatment.</h5><h5>Discrimination is the unfair treatment of a person or a group based on the person's or
group's characteristics, which includes race, religion, and gender. In the example, the business pays both
its male and female employees the same salary range for the same type of work, which indicates it is
treating people fairly on the basis of their gender. In many countries, there are laws that prohibit
discrimination, so businesses should take steps to ensure that they are in compliance with the law and
treating their employees fairly. The example does not describe the employees' right to work in a safe
environment or their right to privacy. Businesses do not prevent employees from buying stock. Some
types of corporations encourage their employees to buy their company stock.
</h5></div><h5 id='q87'>87. Why is it important to select an occupation that matches your aptitudes?</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. Matching aptitudes to careers leads to the highest possible income.</option><option value="B">B. Considering your aptitudes will make achieving your career goals realistic.</option><option value="C">C. A positive aptitude will allow you to succeed in any career.</option><option value="D">D. Selecting a career based on your aptitudes will require less time in college.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: Considering your aptitudes will make achieving your career goals realistic.</h5><h5>An aptitude is your potential
for learning a skill. It is similar to having a knack for something. Pursuing a career in an area that comes
naturally to you will make it more realistic to achieve your career goals. Though matching aptitudes to a
career is likely to lead to career success and satisfaction, it does not consider income. Aptitudes are
neither positive nor negative. Each person has a different set of aptitudes. Time spent in college is not
necessarily affected by aptitude. As an example, although a person has an aptitude for medicine, s/he
must still complete college and medical school.
</h5></div><h5 id='q88'>88. Which of the following is a financial concern that entrepreneurs often face when starting new businesses:</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. Irregular paychecks</option><option value="B">B. Long working hours</option><option value="C">C. Shorter vacations</option><option value="D">D. Lower production standards</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is A: Irregular paychecks</h5><h5>Entrepreneurs experience many types of challenges as they start and grow their
businesses. A financial concern often involves irregular paychecks or unpredictable income. It often takes
a while for a new venture to gain business and earn a profit, so the entrepreneur often doesn't receive
income or get paid at regular intervals. Long working hours and shorter vacations are factors related to
the entrepreneur's personal commitment to his/her business. Production standards are specifications
related to the process of making or producing goods and services.
</h5></div><h5 id='q89'>89. If you wanted to pursue a career that specializes in helping corporations and governments issue
securities, you would work in</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. investment banking.</option><option value="B">B. a stock exchange.</option><option value="C">C. a brokerage house.</option><option value="D">D. financial planning.</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is A: investment banking.</h5><h5>Investment banks trade securities, help businesses and governments issue
securities, and handle the financial-side of mergers and acquisitions. Financial planners help individuals
make financial and investment decisions. They may also buy and sell certain financial products, such as
securities, retirement plans, and insurance policies. A brokerage house is the most common type of firm
that specializes in trading securities for clients. A stock exchange is where security trading is conducted
by professional stockbrokers.
</h5></div><h5 id='q90'>90. Smith Company typically promotes employees based on seniority. To do this, which of the following
pieces of information would Smith Brothers need for each employee:</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. Years of college education</option><option value="B">B. Years of experience in the career field</option><option value="C">C. Years worked at current job</option><option value="D">D. Years of good performance at the current job</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is C: Years worked at current job</h5><h5>Seniority is based simply on the amount of time an employee has worked at
their current position. It does not take into account years spent working a similar job at other companies.
The type or number of years spent earning an advanced degree is not used to calculate seniority.
Performance is not taken into consideration when seniority is calculated. Promotion based on good
performance (merit-based) is a different method that could be used to determine promotion.
</h5></div><h5 id='q91'>91. Which of the following is a certification sought by individuals who evaluate companies and industries and
make buy, sell, and hold recommendations for certain securities:</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Chartered Financial Analyst (CFA)</option><option value="B">B. Certified Financial Planner (CFP)</option><option value="C">C. Chartered Financial Consultant (ChFC)</option><option value="D">D. Certified Stock Broker (CSB)</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is A: Chartered Financial Analyst (CFA)</h5><h5>This professional designation is sought by financial analysts and is
sponsored by the CFA Institute. Every candidate for the certification is required to complete three levels
of study and exams. Certified Stock Broker is a fictitious designation. Certified Financial Planner and
Chartered Financial Consultant are designations sought by financial planners and financial consultants.
</h5></div><h5 id='q92'>92. What certification is sought by individuals who provide guidance to individuals and families about their
investments and financial decisions and also buy and sell certain financial products such as insurance
and retirement plans?</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Certified Banker (CB)</option><option value="B">B. Chartered Financial Analyst (CFA)</option><option value="C">C. Certified Stock Broker (CSB)</option><option value="D">D. Chartered Financial Consultant (CsFC)</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is D: Chartered Financial Consultant (CsFC)</h5><h5>These individuals are often self-employed and work flexible
schedules to accommodate their clients' schedules. They have covered all the requirements for the
Certified Financial Planner designation and received advanced education in retirement and estate
planning. Financial analysts seek the CFA designation. Certified Stock Broker and Certified Banker are
fictitious designations.
</h5></div><h5 id='q93'>93. Which of the following would afford finance professionals the best opportunity to build long-lasting
relationships with other finance professionals:</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. Regularly attending trade shows for the finance industry</option><option value="B">B. Actively participating in a local professional association for the finance industry</option><option value="C">C. Occasionally auditing classes at a local postsecondary institution</option><option value="D">D. Actively attending meetings sponsored by the local chamber of commerce</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is B: Actively participating in a local professional association for the finance industry</h5><h5>Active participation in a
professional organization specific to the finance industry affords finance professionals the opportunity to
serve on committees, hold offices, and attend seminars with other local finance professionals. This
involvement may result in a long-term professional relationship for the participants. Regularly attending
trade shows for the finance industry is more likely to result in short-term relationships. Insufficient
information is provided to determine whether the audited classes are for professionals in finance. Actively
attending chamber of commerce meetings gives finance professionals the opportunity to develop
professional relationships with people employed in a variety of industries—not necessarily with other
finance professionals.
</h5></div><h5 id='q94'>94. Which of the following has proven to be an effective way to initiate a professional relationship with a
vendor:</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. Treating the person to a round of golf</option><option value="B">B. Giving the vendor an expensive gift</option><option value="C">C. Having salespeople talk to the vendor</option><option value="D">D. Offering jobs to people on the vendor's staff</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is A: Treating the person to a round of golf</h5><h5>Something as simple as four hours of golf gives you the
opportunity to get to know a vendor better. It gives you an opportunity to learn the person's interests and
to talk business in a casual environment. Giving the vendor an expensive gift might be construed as a
bribe. Although having salespeople talk to the vendor is helpful, it doesn't foster a professional
relationship with you. Offering jobs to people on the vendor's staff would create conflict rather than
helping to build a positive, professional relationship.
</h5></div><h5 id='q95'>95. How do ethics relate to risk management?</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. The best form of business ethics is risk management.</option><option value="B">B. Risk management is all about the ethical treatment of customers.</option><option value="C">C. Risk management is insurance for lapses in business ethics.</option><option value="D">D. The best form of risk management is adherence to business ethics.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is D: The best form of risk management is adherence to business ethics.</h5><h5>Every breach of business ethics
represents a potential risk for businesses. The best thing businesses can do to overcome most risks is to
do the right thing—practice business ethics. Risk management includes the ethical treatment of
customers as well as a variety of other factors. Insurance is one way to overcome business risks;
however, risk management is much more than insurance.
</h5></div><h5 id='q96'>96. What risk is being avoided when financial institutions use cloud computing?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Speculative risk</option><option value="B">B. Pure risk</option><option value="C">C. Loss of customers risk</option><option value="D">D. Return on investment risk

2010 HS ICDC

FINANCE CLUSTER EXAM

11
</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is D: Return on investment risk

2010 HS ICDC

FINANCE CLUSTER EXAM

11
</h5><h5>Explanation not available</h5></div><h5 id='q97'>97. Which of the following issues is keeping risk managers from getting the right information into the right
context so that the right decisions can be made:</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. Having transparency around the effects of volatility on the organization</option><option value="B">B. Having too little information that can be used to assess and understand risk</option><option value="C">C. Having many different sources of data that can be used to assess risk</option><option value="D">D. Having a centralized enterprise risk management system</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is C: Having many different sources of data that can be used to assess risk</h5><h5>Many financial institutions
maintain individual or departmental databases that cannot interact with the data throughout the
organization. This keeps risk managers from having a clear picture of the organization-wide risks. Rather
than having too little information, risk managers have just the opposite problem: too much decentralized
information. Centralized information is needed. Transparency is needed around the effects of volatility on
the organization.
</h5></div><h5 id='q98'>98. A control that financial institutions have implemented to protect bank accounts when debit cards are used
to pay for online transactions is</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. e-invoicing.</option><option value="B">B. malware.</option><option value="C">C. PIN debits.</option><option value="D">D. PEPPOL (Pan-European Public Procurement On-line)</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is C: PIN debits.</h5><h5>In addition to account numbers, customers must also provide their PIN number to process
online payments. This adds an additional layer of protection for online transactions. Malware is malicious
software used to illegally obtain account and personal information provided for online transactions.
E-invoicing is electronic billing. PEPPOL is an initiative that aims to provide standardized processes for
businesses to bid on government contracts.
</h5></div><h5 id='q99'>99. Why are financial institutions using tokenization?</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. To protect online transactions</option><option value="B">B. To create credit-cards</option><option value="C">C. To provide incentives for increased investing</option><option value="D">D. To overcome government-regulated quotas</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is A: To protect online transactions</h5><h5>Tokenization is the process of substituting a random number in place of
an account number to process the transaction online. In this way, financial institutions are able to protect
customer data from fraud. Credit-card creation, provision of incentives, and government-required quotas
are not aspects of tokenization.
</h5></div><h5 id='q100'>100. A stock broker is using Customer Relationship Management (CRM) technology to learn more about his
typical customer's purchasing pattern. The stock broker is using CRM technology to analyze the typical
customer</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. duration.</option><option value="B">B. trajectory.</option><option value="C">C. vintage.</option><option value="D">D. touch point.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is B: trajectory.</h5><h5>CRM technology is frequently used to measure and analyze a business's typical customer
trajectory, which is a pattern of purchases. Duration is the length of time that a customer stays a
customer. A vintage is a group of customers that are similar in some way. For instance, they might be
grouped together because they all became a business's customers in the same year. Touch points are all
of the opportunities that a business has to connect with customers and reinforce its brand image.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Finance_10_Whole_Homework.js"></script></html>