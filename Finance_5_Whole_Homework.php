<?php ob_start(); session_start(); require_once 'dbconnect.php'; if( !isset($_SESSION["user"]) ) {  header("Location: login.php");  exit; }; ?><html><head><title>IRHS DECA</title><script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><link rel="icon" href="img/favicon.ico" sizes="16x16"><link rel="stylesheet" type="text/css" href="css/main.css"></link><meta charset='utf-8'><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/cssmenu/styles.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"><link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css"><script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script></head><body><div id="cssmenu">  <ul><li><a href='index.php'><span>Home</span></a></li><li><a href='about.php'><span>About DECA</span></a></li><li><a href='events.php'><span>Events</span></a></li><li class='active'><a href='dashboard.php'><span>Dashboard</span></a></li>          <li><a href='announcements.php'><span>Announcements</span></a></li>  <li><a href='dates.php'><span>Schedules</span></a></li>  <li><a href='exams.php'><span>Exams</span></a></li><li class='last'><a href='logout.php?logout'><span>Logout</span></a></li></ul></div></br>  <div id='timer-label'>Time Remaining:</div><div class='timer' data-minutes-left=70></div><div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>Finance Exam 5</h4><h4 id="score" style="color: blue;"></h4><form id="myform"><h5 id='q1'>1. Samantha agrees to buy a bicycle from Tony for $225. This is an example of a(n)</h5><select class="select-style" id="_1"><option value="def" disabled selected>Select</option><option value="A">A. unilateral contract.</option><option value="B">B. bilateral contract.</option><option value="C">C. renegotiated agreement.</option><option value="D">D. nonverbal agreement.</option></select></br></br><div id="1answer" style="display: none;"><h5>Incorrect. The correct answer is B: bilateral contract.</h5><h5>In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q2'>2. Lucy authorized her accountant, attorney, and life-insurance agent to care for her assets and make
decisions regarding her money and property. Her accountant, attorney, and life-insurance agent are her</h5><select class="select-style" id="_2"><option value="def" disabled selected>Select</option><option value="A">A. relationship experts.</option><option value="B">B. bookkeepers.</option><option value="C">C. fiduciaries.</option><option value="D">D. economists.</option></select></br></br><div id="2answer" style="display: none;"><h5>Incorrect. The correct answer is C: fiduciaries.</h5><h5>Individual's financial advisors may serve as a fiduciary, and a fiduciary relationship will exist.
The fiduciary is responsible for caring for another person's assets and makes the decisions regarding an
individual's assets. An example of a fiduciary would be a trusted financial advisor such as an accountant,
attorney, or insurance agent. An economist is a person who studies how countries and individuals make
economic decisions. A bookkeeper is an individual who analyzes financial transactions, journalizes those
transactions, posts the journal entries to ledgers, and balances the books. Although Lucy's accountant
may also be her bookkeeper, her attorney and life-insurance agent are not likely to be bookkeepers.
</h5></div><h5 id='q3'>3. Mary is accused of understating the tax due on her federal tax returns for the last five years. The
understatement has nothing to do with a tax shelter. Mary is very concerned that she will be fined or sent
to jail if she is convicted of understating her tax. Which of the following statements regarding Mary's
situation is true?</h5><select class="select-style" id="_3"><option value="def" disabled selected>Select</option><option value="A">A. If a Certified Public Accountant prepared Mary's return, she can probably avoid government
penalties for the understatement of tax.</option><option value="B">B. Mary is likely to be sent to jail for understating her tax due because she didn't use a federallyapproved tax shelter.</option><option value="C">C. The federal tax-collection agency should recognize the understatement as a tax shelter because
Mary is 45 years old.</option><option value="D">D. Mary should take her brother's advice and store her assets in an offshore bank account.</option></select></br></br><div id="3answer" style="display: none;"><h5>Incorrect. The correct answer is A: If a Certified Public Accountant prepared Mary's return, she can probably avoid government
penalties for the understatement of tax.</h5><h5>Explanation not available</h5></div><h5 id='q4'>4. Retirement accounts and real estate are examples of</h5><select class="select-style" id="_4"><option value="def" disabled selected>Select</option><option value="A">A. intangible assets.</option><option value="B">B. garnishments.</option><option value="C">C. tax shelters.</option><option value="D">D. derivatives.</option></select></br></br><div id="4answer" style="display: none;"><h5>Incorrect. The correct answer is C: tax shelters.</h5><h5>Tax shelters are methods of minimizing taxable income. For example, the government does
not tax the income that an employee places in an employer-sponsored retirement program until the
employee withdraws the money from his/her account. In other words, this portion of the employee's
income is tax-deferred. Homeowners minimize their tax obligation when they write off their interest on
their mortgages as tax deductions on their tax returns. Garnishment is a court-ordered action in which a
portion of an employee's salary is transferred to a third party. Alimony and child support are examples of
garnishments. Real estate is a tangible asset. Derivatives are securities that function as tools for trading
underlying assets.
</h5></div><h5 id='q5'>5. This is an example of a(n)</h5><select class="select-style" id="_5"><option value="def" disabled selected>Select</option><option value="A">A. World Bank representatives</option><option value="B">B. Local law enforcement officers</option><option value="C">C. A securities regulatory commission</option><option value="D">D. The federal judicial system</option></select></br></br><div id="5answer" style="display: none;"><h5>Incorrect. The correct answer is C: A securities regulatory commission</h5><h5>Securities regulatory commissions or agencies are responsible for
creating and enforcing compliance with financial reporting standards and other securities-related
legislation and regulation. In the United States, the most prominent, powerful securities regulatory
commission is the Securities and Exchange Commission (SEC). The SEC is a federal agency that
regulates the financial markets and protects the investing public from fraud or malpractice. Local law
enforcement officers are not responsible for enforcing compliance with financial reporting standards. The
World Bank provides financial and technical aid to developing countries but isn't usually responsible for
enforcing financial reporting standards. The federal judicial system interprets laws. The executive branch,
on the other hand, is generally responsible for enforcing the law.
</h5></div><h5 id='q6'>6. Which of the following quality-management methodologies is often used in the finance industry to sustain
regulatory compliance:</h5><select class="select-style" id="_6"><option value="def" disabled selected>Select</option><option value="A">A. Cost Standards</option><option value="B">B. Six Sigma</option><option value="C">C. Strategic planning</option><option value="D">D. First-in, First-out</option></select></br></br><div id="6answer" style="display: none;"><h5>Incorrect. The correct answer is B: Six Sigma</h5><h5>Six Sigma is a quality-management methodology that is often used by financial institutions to
sustain regulatory compliance. Businesses use Six Sigma to determine methods to improve current
process and/or develop new, more efficient processes. Six Sigma consists of six phases: Define the
problem; measure aspects of the current process; analyze data; improve processes; and develop
measures to monitor the new process results. Cost standards are established specifications used to
measure how much a project or product costs. Strategic planning involves making long-range plans
(three to five years) for a company as a whole. First-in, First-out is a method used to calculate inventory.
</h5></div><h5 id='q7'>7. To better meet compliance requirements, Money Plus Bank needs to improve its processes for
calculating and reporting risk-weighted assets. Which of the following is the best course of action for
Money Plus Bank to take to improve these processes:</h5><select class="select-style" id="_7"><option value="def" disabled selected>Select</option><option value="A">A. Encourage customers to utilize the bank's online account system</option><option value="B">B. Improve the bank's new-employee training program</option><option value="C">C. Increase cross-functional cooperation among employees</option><option value="D">D. Switch from manual to automated calculation and reporting methods</option></select></br></br><div id="7answer" style="display: none;"><h5>Incorrect. The correct answer is D: Switch from manual to automated calculation and reporting methods</h5><h5>To be Basel II compliant, banks are
required to calculate and report their risk-weighted assets. While it is possible to complete these tasks
manually, many banks have developed automated technology to gather data used in risk-calculation
models and utilize these data to calculate risk-weighted assets. Although improving the bank's newemployee training program, increasing cross-functional cooperation among employees, and encouraging
customers to utilize the bank's online account system are all potential positives for the bank, they do little
to help the bank better meet compliance requirements.
</h5></div><h5 id='q8'>8. In general, a governance, risk, and compliance (GRC) software system identifies and measures risk;
monitors the risk-management system; routinely checks adherence to company-wide policies; and
ensures compliance with</h5><select class="select-style" id="_8"><option value="def" disabled selected>Select</option><option value="A">A. union demands.</option><option value="B">B. reporting requirements.</option><option value="C">C. product standards.</option><option value="D">D. contingency plans.</option></select></br></br><div id="8answer" style="display: none;"><h5>Incorrect. The correct answer is B: reporting requirements.</h5><h5>Demand for governance, risk, and compliance (GRC) software systems has
grown significantly in recent years. Although GRC software can be customized to better meet individual
business needs, it serves four basic functions. It identifies and measures corporate risk levels; monitors
the risk-management system; checks to see that employees are adhering to company-wide policies; and
ensures compliance with reporting requirements enforced by federal and state government agencies and
other regulatory commissions. It is not designed to ensure compliance with union demands, product
standards, or contingency plans.
</h5></div><h5 id='q9'>9. Jake is researching career trends in the field of accounting. Which of the following sources is most likely
to contain the most current, credible information:</h5><select class="select-style" id="_9"><option value="def" disabled selected>Select</option><option value="A">A. An early edition of the Managerial Accounting in Practice textbook</option><option value="B">B. The federal government's labor and workforce web site</option><option value="C">C. An online newspaper article written by a well-known compliance expert</option><option value="D">D. The latest edition of the Insurance News Monthly trade publication
</option></select></br></br><div id="9answer" style="display: none;"><h5>Incorrect. The correct answer is B: The federal government's labor and workforce web site</h5><h5>When exploring career trends, researchers need
to identify credible sources that keep their information up-to-date. Federal governments often post and
regularly update career information on their labor and workforce web sites. The United States posts and
publishes the Occupational Outlook Handbook, which provides information about career trends for
hundreds of careers. The Canadian government posts career information about job trends in Canada on
a web site called Working in Canada. There is not enough information provided to determine if the
accounting textbook or newspaper article contains current or relevant career information about
accounting. An insurance trade publication is more likely to contain articles about insurance careers than
accounting careers.
</h5></div><h5 id='q10'>10. An individual calls your company and asks to speak with your coworker, Rhonda Hoffman. What should
you do if Rhonda is not available to take the call?</h5><select class="select-style" id="_10"><option value="def" disabled selected>Select</option><option value="A">A. Tell the caller that you would be glad to take his/her order.</option><option value="B">B. Advise the caller to call again in a few minutes.</option><option value="C">C. Ask the caller if s/he would like to leave a message.</option><option value="D">D. Put the caller on hold while you track down Rhonda.</option></select></br></br><div id="10answer" style="display: none;"><h5>Incorrect. The correct answer is C: Ask the caller if s/he would like to leave a message.</h5><h5>If a caller wants to speak to a specific employee who
is unavailable, it is most courteous to ask if you can take a message or ask the caller if s/he would like to
leave a voice-mail message. There isn't enough information to determine if the caller wants to place an
order or if you are in the position to help the caller. If Rhonda is in a meeting or out of the building, putting
the caller on hold until you track her down or asking him/her to call back in a few minutes are not viable
options. Additionally, placing a caller on hold for a long time and telling her/him to call later are rude
responses.
</h5></div><h5 id='q11'>11. Lana wants to include a two-dimensional graphic that shows the groupings and patterns of multiple
variables in her business report. Which of the following graphic aids would best illustrate the data:</h5><select class="select-style" id="_11"><option value="def" disabled selected>Select</option><option value="A">A. Table</option><option value="B">B. Pie chart</option><option value="C">C. Timeline</option><option value="D">D. Scatter chart</option></select></br></br><div id="11answer" style="display: none;"><h5>Incorrect. The correct answer is D: Scatter chart</h5><h5>A scatter chart is a visual aid that involves placing points on a graph to indicate
relationships or patterns among two or more variables. A pie chart shows the parts of a whole. A timeline
illustrates the sequential order or occurrence of events. Businesspeople typically use tables to present
exact, individual values of data.
</h5></div><h5 id='q12'>12. The human-resources manager sends an e-mail to all employees stating that they will need to park on
the street on Tuesday because the maintenance department will be repairing the company's parking lot.
This is an example of a(n)</h5><select class="select-style" id="_12"><option value="def" disabled selected>Select</option><option value="A">A. business proposal.</option><option value="B">B. projection report.</option><option value="C">C. informational message.</option><option value="D">D. formal inquiry.</option></select></br></br><div id="12answer" style="display: none;"><h5>Incorrect. The correct answer is C: informational message.</h5><h5>If a caller wants to speak to a specific employee who
is unavailable, it is most courteous to ask if you can take a message or ask the caller if s/he would like to
leave a voice-mail message. There isn't enough information to determine if the caller wants to place an
order or if you are in the position to help the caller. If Rhonda is in a meeting or out of the building, putting
the caller on hold until you track her down or asking him/her to call back in a few minutes are not viable
options. Additionally, placing a caller on hold for a long time and telling her/him to call later are rude
responses.
</h5></div><h5 id='q13'>13. Which of the following is an example of horizontal communication in the workplace:</h5><select class="select-style" id="_13"><option value="def" disabled selected>Select</option><option value="A">A. An employee provides his/her manager with a status report about the company's new web site.</option><option value="B">B. A supervisor provides a line worker with feedback about her/his job performance.</option><option value="C">C. A manager provides a new employee with advice on job advancement within the company.</option><option value="D">D. An employee sends an e-mail to a coworker about a short-term project.</option></select></br></br><div id="13answer" style="display: none;"><h5>Incorrect. The correct answer is D: An employee sends an e-mail to a coworker about a short-term project.</h5><h5>Horizontal communication occurs
between employees (e.g., coworkers) who have the same level of authority within the organization.
Supervisors and managers providing feedback or advice are examples of downward or vertical
communication. An employee providing his/her manager with a report is an example of upward
communication.
</h5></div><h5 id='q14'>14. Before you can adapt your communication style to relate to businesspeople from other countries, you
must first</h5><select class="select-style" id="_14"><option value="def" disabled selected>Select</option><option value="A">A. learn to speak the country's language fluently.</option><option value="B">B. realize that cultural differences exist.</option><option value="C">C. develop an ethnocentric attitude.</option><option value="D">D. change your personal values and beliefs.</option></select></br></br><div id="14answer" style="display: none;"><h5>Incorrect. The correct answer is B: realize that cultural differences exist.</h5><h5>The key to adapting your communication style to different cultures
is to realize that differences exist. Then, you can do research to make sure that you don't do anything to
offend the other party. This may involve dressing conservatively, monitoring your body language,
selecting appropriate gifts, learning key phrases in another language, and using particular titles to show
respect. You don't need to change your personal values and beliefs; rather, you need to respect those
that differ from your own. Ethnocentricism is the belief that your own culture is naturally better than other
cultures. Ethnocentricism tends to hinder positive relationships with people from other cultures.
</h5></div><h5 id='q15'>15. When helping a slow/methodical type of customer, salespeople should</h5><select class="select-style" id="_15"><option value="def" disabled selected>Select</option><option value="A">A. follow the customer around the store to explain products' benefits.</option><option value="B">B. show the customer as many options as possible.</option><option value="C">C. take care not to overwhelm the customer.</option><option value="D">D. press the customer to select one of two options.</option></select></br></br><div id="15answer" style="display: none;"><h5>Incorrect. The correct answer is C: take care not to overwhelm the customer.</h5><h5>Because it is difficult for the slow/methodical customer to
make a purchasing decision, salespeople must be careful not to overwhelm this type of customer. If
customers feel overwhelmed, they may become frustrated and decide not to buy anything. Therefore,
being patient and calm is important when dealing with slow/methodical customers. Following the
shoppers around the store, showing them too many options, and pressing them to make a decision
before they are ready to commit are likely to overwhelm slow/methodical customers.
</h5></div><h5 id='q16'>16. Anna, the Bank Plus customer relationship manager, recently developed and implemented a new
customer relationship strategy across the organization. The strategy emphasizes better understanding of
customer needs. Anna also developed a recognition program to reward employees for delivering quality
customer service. Which of the following is most likely to be Anna's primary goal in implementing the
new strategy:</h5><select class="select-style" id="_16"><option value="def" disabled selected>Select</option><option value="A">A. Promoting the bank's new products and services</option><option value="B">B. Publicly recognizing outstanding bank employees</option><option value="C">C. Developing stronger long-term customer relationships</option><option value="D">D. Reducing the number of forms new customers must fill out</option></select></br></br><div id="16answer" style="display: none;"><h5>Incorrect. The correct answer is C: Developing stronger long-term customer relationships</h5><h5>By learning and better meeting customers' wants
and needs, bank employees—and ultimately, the bank as a whole—are able to develop stronger longterm relationships with customers. And, as the bank builds goodwill among its customers, those
customers are likely to become loyal bank clientele. Although bank employees will be recognized for
delivering quality customer service as a result of the new strategy, it is not likely to be Anna's primary
goal. Based on the information provided, the new strategy is unrelated to new products and services or
the number of forms that new customers must fill out.
</h5></div><h5 id='q17'>17. An important aspect of ethical behavior by financial-services providers is ensuring that their clients</h5><select class="select-style" id="_17"><option value="def" disabled selected>Select</option><option value="A">A. purchase high-risk investments to generate better financial returns.</option><option value="B">B. understand the potential risks and rewards of different financial products.</option><option value="C">C. diversify their financial portfolios by investing more than half of their money in hedge funds.</option><option value="D">D. preplan future investment strategies for unexpected financial bonuses.

2013 HS ICDC

FINANCE CLUSTER EXAM

3
</option></select></br></br><div id="17answer" style="display: none;"><h5>Incorrect. The correct answer is B: understand the potential risks and rewards of different financial products.</h5><h5>Ethical financial-services
providers act in the best interest of their clients. To act in the best interest of their clients, financialservices providers consider their clients' individual financial needs, wants, capabilities, and limitations
and present appropriate investment options to them. Financial-services providers also should
communicate the rewards and risks associated with various financial instruments so their clients fully
understand their options. It is unethical to suggest that clients make a high-risk investment if they cannot
afford it. A diversified portfolio does not invest over half of a person's money in one financial product.
Hedge funds are exclusive investment partnerships that typically require a large, minimum investment.
Because markets are constantly changing, it is not feasible to plan future investments for money that is
not available.
</h5></div><h5 id='q18'>18. Beverly, the new office manager, just completed a review of the last two years of accounts receivable
data. In doing so, she discovered that there are erroneous duplicate entries totaling $25,628 in the
system. Unfortunately, due to these duplicate entries, collection letters were sent to many customers who
had already paid in full—customers who are angry with the company for sending them the letters. What
should Beverly do to try to save these customer relationships and ensure that these customers are not
bothered in the future?</h5><select class="select-style" id="_18"><option value="def" disabled selected>Select</option><option value="A">A. Use funds from the accounts payable account to pay the debt</option><option value="B">B. Complete an accounting software update</option><option value="C">C. Contact each customer by phone and apologize</option><option value="D">D. Complete a data cleansing of the erroneous entries</option></select></br></br><div id="18answer" style="display: none;"><h5>Incorrect. The correct answer is D: Complete a data cleansing of the erroneous entries</h5><h5>One of the quickest ways for a business to upset its
customers is to accuse them of failing to pay their bills—especially when the business has already
received payment from them. To ensure that these customers do not receive more erroneous collection
letters in the future, Beverly should complete a data cleansing of the erroneous entries, removing them
from the system. Completing an accounting software update isn't likely to have an effect on the
erroneous entries. While it might be helpful to contact each customer by phone and apologize, Beverly
needs to do more than that to ensure that the customers are not bothered in the future. The $25,628 is
not a debt. It is the sum total of all the erroneous duplicate entries in the accounts receivable account.
</h5></div><h5 id='q19'>19. An accounts payable analyst is using technology to collect and isolate customer records from the
disbursing system. The tool can retrieve and organize a massive number of customer records in just a
short time. What type of technology is the analyst using?</h5><select class="select-style" id="_19"><option value="def" disabled selected>Select</option><option value="A">A. Computer-aided design</option><option value="B">B. A CRM database</option><option value="C">C. A neural network</option><option value="D">D. GPS technology</option></select></br></br><div id="19answer" style="display: none;"><h5>Incorrect. The correct answer is B: A CRM database</h5><h5>Businesses use a number of different tools, including CRM databases, data
warehouses, and various computer applications, to gather, organize, analyze, and store customer data. A
data is a virtual storage unit for information. Computer-aided design (CAD) involves the use of technology
to plan, design, test, and alter products virtually. A neural network is a computer system that simulates
human brain activity to analyze and recognize patterns in information. A global positioning system (GPS)
uses satellite technology to determine location and provide directions.
</h5></div><h5 id='q20'>20. To keep up with social, political, economic, and regulatory changes that affect their business activities,
companies should</h5><select class="select-style" id="_20"><option value="def" disabled selected>Select</option><option value="A">A. conduct environmental scans.</option><option value="B">B. implement internal analyses.</option><option value="C">C. plan customer interviews.</option><option value="D">D. prepare organizational inspections.</option></select></br></br><div id="20answer" style="display: none;"><h5>Incorrect. The correct answer is A: conduct environmental scans.</h5><h5>To be successful in the marketplace, companies must monitor external
factors, which is the process of environmental scanning. Companies use the information obtained
through environmental scanning to adapt to the changes that most affect their business activities. For
example, changes in government regulations may require certain companies to change internal
procedures to remain compliant. Implementing internal analyses and preparing organizational inspections
are activities that occur within the company. Planning customer interviews is a step that companies can
take to get feedback about some aspects of the external environment; however, companies must carry
out the interviews to obtain the information.
</h5></div><h5 id='q21'>21. Members of the air-traffic controllers' union stopped working to support the pilots' union that recently went
on strike. This is an example of a</h5><select class="select-style" id="_21"><option value="def" disabled selected>Select</option><option value="A">A. boycott.</option><option value="B">B. lockout.</option><option value="C">C. sympathetic strike.</option><option value="D">D. wildcat strike.</option></select></br></br><div id="21answer" style="display: none;"><h5>Incorrect. The correct answer is C: sympathetic strike.</h5><h5>This is an example of a
A. boycott.
C. sympathetic strike.
B. lockout.
D. wildcat strike.
22. A manufacturer has more workers on hand to perform production activities than it does production
equipment. What economic principle does this exemplify?
A. Law of minimal utility
C. Economies of scale
B. Law of diminishing returns
D. Economies of scoring
23. Consumer spending tends to decrease when
A. business activities slow.
B. interest rates decrease.

C. an economic recession ends.
D. the inflation rate decline.

24. What condition exists if a nation imports more goods and services than it exports?
A. Trade deficit
C. Trade surplus
B. Balance of trade
D. Comparative advantage
25. Which of the following statements is true of a positive attitude:
A. It's not very important, but it is nice to have.
B. You can achieve one, but it requires work.
C. It has little impact on your ability to reach your goals.
D. It's something that you are born with.
26. When Cynthia, a credit analyst with Houghton Software, heard rumors of a company layoff, she asked
her manager Todd if the rumors were true and if her job was in jeopardy. Although Todd knew that some
lay-offs were coming, he told Cynthia not to worry about things. The following week, Cynthia's job was
eliminated. In this situation, ethical issues regarding company information occurred because
A. Todd was completely honest with Cynthia.
C. Todd misled Cynthia.
B. Cynthia asked irrelevant questions.
D. Cynthia started the rumors.

2013 HS ICDC

FINANCE CLUSTER EXAM

4

27. How can you show that you're actively listening in a negotiation?
A. Respond emotionally to what the other person says.
B. Think about what you'll say next while the other person is speaking.
C. Repeat or summarize the other person's statements.
D. Keep a positive, open, and objective attitude.
28. Which of the following is an example of a conflict that causes personal motivation or drive:
A. High school students compete to sell the most candy in a school fundraiser.
B. Kevin has a class and a meeting scheduled for Tuesday afternoon.
C. Two coworkers need to use the copy machine at the same time.
D. Jane and Amy both want to be in charge of their presentation.
29. What is the advantage to groups that use consensus building to make decisions?
A. Group members rarely disagree.
C. Decision making involves a majority rule.
B. Agreement is reached very quickly.
D. All decision makers have equal power.
30. To have successful collaborative partnerships in the workplace, it is important for employees to
A. limit communication.
C. avoid conflict.
B. establish trust.
D. support all ideas.
31. When Thomas bought his car from the Reinhart Auto Dealership, he gave the dealership a $4,000 down
payment. Thomas will make a monthly payment of $365 to the dealership until he has paid off the loan.
Thomas bought his car by using ___________ credit.
A. service
C. budget
B. revolving
D. installment
32. Justine's rich uncle wants to give her $5,000 towards the purchase of a car. But since Justine doesn't
plan to buy the car for at least another year, her uncle told her that she can have the money now, or he
can wait and give her the money when she actually buys the car. Justine chooses to take the money now
and deposit it in her savings account. After all, her deposit will yield 6% interest compounded annually. A
year from now, her $5,000 will be worth $5,300. What financial concept does this scenario illustrate?
A. Capital budgeting
C. Time-value of money
B. Dividend reinvestment plan
D. Accrual accounting
33. You want to be a millionaire by the time you retire. To reach that goal, you put $2,000 per year in an IRA,
starting at age 21. You will earn nine percent interest annually. As a result, you will have $1,156,517 at
age 65. This scenario illustrates the power of
A. compound interest.
C. fiscal policy.
B. finance charges.
D. the prime interest rate.
34. State Street Bank sends text messages to its customers when $100 or more are withdrawn from their
bank accounts. The bank sends these notifications to reduce the risks associated with
A. money laundering.
C. identity theft.
B. loan fraud.
D. firewall intrusion.
35. When preparing her tax return, Lynnette listed the interest that she paid on her student loan as
A. taxable earnings.
C. a tax-exempt investment.
B. investment income.
D. an itemized deduction.
36. Henry is a professional banker. Only certain people—"members"—may save at or borrow money from his
deposit-taking financial institution. Henry is most likely to work for a(n)
A. CPA firm.
C. insurance company.
B. mortgage company.
D. credit union.

2013 HS ICDC

FINANCE CLUSTER EXAM

5

37. Which of the following statements regarding financial institutions is true:
A. A financial institution with low value is doing a good job of managing its risk.
B. Financial institutions facilitate the flow of money in the economy.
C. Financial institutions are controlled by their members.
D. The primary role of financial institutions is to regulate saving and investing.
38. Which of the following statements regarding debt and equity markets is correct:
A. Common stock, an example of a debt instrument, is traded on the equity market.
B. Investors who purchase a company's bonds gain partial ownership of the business.
C. If a company suffers financial difficulties, its stockholders are paid before its bondholders.
D. Bonds, which are debt instruments, are typically less risky investments than stocks.
39. The New York Stock Exchange is a(n) __________ market.
A. spot
C. commodities
B. over-the-counter
D. auction
40. A retail bank and an insurance company, which recently merged together, are moving from two legacy
accounting systems to one enterprise planning system for the new, larger organization. This is an
example of __________ in the finance industry.
A. bancassurance
C. convergence
B. increased liquidity
D. knowledge management
41. What is a common course of action for small banking institutions interested in competing globally and
improving their efficiencies, viability, and profitability?
A. Consolidating with larger banks
C. Following global regulations more closely
B. Rapidly expanding their operations
D. Dissolving their financial holding companies
42. According to most analysts, the three economic indicators that stock market investors and traders should
pay the closest attention to are
A. Gross Domestic Product, overhead expenses, and unemployment.
B. interest rates, overhead expenses, and inflation.
C. Gross Domestic Product, unemployment, and inflation.
D. inflation, unemployment, and bonds rates.
43. Which of the following has contributed to financial globalization:
A. An increase in restrictions on foreign investment and international trade
B. An increase in taxes on international financial transactions
C. A reduction in foreigners' access to domestic financial markets
D. A movement from fixed exchange rates to floating exchange rates
44. Kendra 's financial goal is to build wealth over time by making diversified investments. Which of the
following financial services providers is most likely to help Kendra achieve her goal:
A. Financial-auditing firm
C. Investment bank
B. Mortgage company
D. Asset-management firm
45. Which financial statement should an investor use to quickly determine a company's “bottom line”?
A. Statement of retained earnings
C. Balance sheet
B. Cash flow statement
D. Income statement
46. Which of the following are among the most important resources to access prior to purchasing stock in a
company:
A. EDGAR and the Statement of Ownership
C. EDGAR and the company's web site
B. ESOP and the company's web site
D. ESOP and the Statement of Ownership

2013 HS ICDC

FINANCE CLUSTER EXAM

6

47. The most common headings on a stock table include the 52-week high and low, the stock symbol, the
estimated dividend per share, the yield percentage/rate of return, the volume/sales for the day, the
closing price for the day, the net change and the
A. price-earnings ratio.
C. net income.
B. earnings per share.
D. stockholder's equity.
48. Geraldo, who is considering whether or not to invest in Coffee Dreams, Inc., is studying information about
the company on a stock table. One piece of data that he is interested in reviewing is the difference
between the stock's closing price and the previous day's closing price. Geraldo should review the
A. ticker symbol.
C. price-earnings ratio.
B. net change.
D. 52-week high and low.
49. Certificates of deposit and municipal bonds are types of
A. value stocks.
C. commodities.
B. ownership securities.
D. lending investments.
50. On a balance sheet, a business categorizes its inventory and accounts receivable as
A. long-term assets.
C. current assets.
B. owner's equity.
D. current liabilities.
51. Leslie is good friends with Paul, who oversees the Bex Company's central data depository for financial
information. Paul recently told Leslie that based on confidential financial data that he saw at work, Bex's
profits have dropped by a third this year. Paul also told Leslie that she should sell her shares of Bex stock
before the market finds out about the company's financial difficulties, which will surely make Bex's stock
price plummet. This situation is an example of
A. encryption.
C. stewardship.
B. disparate data.
D. insider trading.
52. Financial-information management is responsible for collecting, maintaining, and reporting data about
financial transactions. Business managers often use these data to
A. forecast financial inflows and outflows.
C. develop secondary equity markets.
B. determine if liability insurance is needed.
D. calculate the level of corporate groupthink.
53. Pamela was dismissed from her job as a financial database administrator because she shared her
username and password with a coworker so that he could access a customer database that is typically
off-limits to him. Pamela failed to fulfill her responsibilities as a data
A. steward.
C. sponsor.
B. auditor.
D. processor.
54. Which of the following statements regarding the security of most financial institutions' data is true:
A. Data in transit are more at risk than data at rest or data in process.
B. Firewalls completely eliminate all external threats to the data.
C. More data attacks come from inside the organizations than outside them.
D. Investments in financial-information security have decreased in recent years.
55. Which of the following is a benefit of financial-information management software:
A. Improves productivity by replacing automated activities with manual tasks
B. Provides users with faster, better access to data from multiple sources
C. Lowers compliance costs by eliminating audit trails and economies of scale
D. Reduces risk and lowers confidence in the confidentiality and safety of data
56. Every morning, as soon as Lukas gets to the office, he logs onto his computer and uses a data-mining
application on his computer home screen to quickly review the company's financial performance. The
financial data are typically displayed in charts and tables. Lukas is using a(n)
A. dashboard.
C. artificial neural network.
B. text-mining tool.
D. decision tree.

2013 HS ICDC

FINANCE CLUSTER EXAM

7

57. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?
A. Nearest-neighbor method
C. Artificial neural networks
B. Decision trees
D. Dashboards
58. Tara knows that for her small business to grow, she must increase her cash flow. She's unsure, though,
whether she should take out a loan or a line of credit. Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:
A. Environmental scanning
C. Debt modeling
B. Decision trees
D. Zero-based modeling
59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:
A. A project-management application
C. A digital dashboard application
B. A database application
D. A spreadsheet application
60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?
A. Forecasting
C. DuPont modeling
B. Ratio analysis
D. Benchmarking
61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?
A. Crosstab query
C. Wildcard query
B. Parameter query
D. Status query
62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to
A. ensure capital gains.
C. understand currency exchange rates.
B. compile annual reports.
D. make investment decisions.
63. Independent auditors review the accuracy of a public corporation's financial statements to
A. test accounting methods.
C. evaluate risk.
B. verify compliance.
D. summarize collection techniques.
64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.
A. prioritizing needs, problem solving
C. planning activities, resource management
B. allocating funds, decision making
D. reporting transactions, financial planning
65. Which of the following is an activity conducted by the finance function of business:
A. Tracking business expenditures
C. Updating bookkeeping ledgers
B. Preparing cash flow statements
D. Choosing appropriate investments
66. The managerial accounting system emphasizes
A. previous sales transactions.
B. the current financial situation.

C. a future orientation.
D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8

67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?
A. Positional
C. Cash
B. Accrual
D. Static
68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:
A. Accounts-receivable summary
C. Comparative statement
B. Frequency ratio
D. Sales-transaction log
69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?
A. Asset-turnover
C. Liquidity
B. Qualitative
D. Market-value
70. Businesses consider a customer's income when determining whether to
A. accept cash sales.
C. restructure policies.
B. offer credit.
D. charge interest.
71. A bank carefully analyzes a customer's current level of debt before it approves a(n)
A. operating proposal.
C. loan application.
B. service request.
D. insurance claim.
72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?
A. Accounts-payable
C. Asset-depreciation
B. Aging-accounts
D. Asset-allocation
73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store
A. measure its long-term liabilities.
C. make reliable sales forecasts.
B. monitor its general operating costs.
D. manage its sales staff effectively.
74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?
A. Onboarding tasks
C. Application screening
B. Exit interview
D. Workplace familiarization
75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:
A. Standing orders ship on time.
C. Product quality is consistent.
B. Items are frequently backordered.
D. Staff has sufficient product knowledge.
76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses
A. Internet telephony.
C. an expert system.
B. a database.
D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9

77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.
A. False. The groupware application only allows users to update numerical data on shared
documents.
B. True. Groupware streamlines the work effort, so users have more time for social interaction.
C. False. The primary focus of groupware is to communicate policies and procedures to users.
D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.
78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.
A. cloud computing
C. streaming video
B. a flash drive
D. compact disks
79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that
A. research and development expenses exceeded the budget.
B. its sales forecasts were inaccurate.
C. product improvements helped boost sales.
D. the company achieved its sales goals.
80. Which of the following actions should a business take to help prevent robberies:
A. Have one person open and close each day
C. Hang up signs on doors and windows
B. Avoid making eye contact with customers
D. Make sure the facility is well-lit
81. Successful project management depends on the use of appropriate
A. pressure tactics.
C. foreign investments.
B. outsourcing.
D. technology.
82. When you want to select a new vendor for your business, it's best to
A. continue using a vendor you've used before.
B. go with a friend's recommendation.
C. use a formal selection process.
D. pick the vendor with the best online reviews.
83. Which of the following factors are most likely to build a quality work culture:
A. Coercion and empowerment
C. Vision and unpredictability
B. Consistency and censorship
D. Respect and honesty
84. Which of the following is an example of a semi-variable business cost:
A. Property taxes
C. Rent
B. Employees' salaries
D. Telephone service
85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?
A. Managing
C. Minimum
B. Moderate
D. Maximum
86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his
A. passion for a hobby.
C. technological knowledge.
B. desire for a flexible schedule.
D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10

87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by
A. volunteering her time.
C. requesting an internship.
B. networking with others.
D. setting up a meeting.
88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)
A. collections officer.
C. chartered financial consultant.
B. credit analyst.
D. bank agent.
89. What is a primary responsibility of a company's controller?
A. Evaluating property values
B. Designing risk policies to minimize business losses
C. Calculating the risk of loss
D. Directing the preparation of financial reports
90. Many businesspeople are required to take continuing education classes to
A. supplement their existing income.
C. demonstrate their emotional intelligence.
B. improve their standard of living.
D. maintain their professional certifications.
91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a
A. Certified Financial Planner (CFP).
C. Chartered Life Underwriter (CLU).
B. Certified Financial Analyst (CFA).
D. Chartered Investment Counselor (CIC).
92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.
A. Certified Information Systems Auditor (CISA)
B. Certified Mortgage Banker (CMB)
C. Certified Internal Auditor (CIA)
D. Certified Annuities Specialist (CAS)
93. To build a relationship with others working in the same field, a financial planner should consider
A. participating in an appropriate professional organization.
B. attending the local chamber of commerce meetings.
C. taking an entrepreneurship class at the community college.
D. sponsoring events for charitable organizations.
94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.
A. corporate branding, her own productivity
C. personal gains, business ethics
B. social responsibility, her career goals
D. operating procedures, compliance
95. To reduce risks associated with unethical business activities, a company should clearly communicate its
A. code of conduct to all employees.
B. terms-of-sale policies to executive managers.
C. product requirements to its primary distributors.
D. dividend payment schedule to suppliers.
96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?
A. Automated oversight
C. Financial compliance
B. Stress testing
D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11

97. Lower premiums and the ability to control the claims process are advantages of
A. captive insurance companies.
C. standard insurance companies.
B. traditional liability insurance policies.
D. reinsurance carriers.
98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should
A. conduct background checks on job applicants.
B. mandate drug testing for all employees on a monthly basis.
C. require delivery drivers to take a driving exam every six months.
D. ask job applicants about their former employers during the interview process.
99. Which of the following is a limitation that businesses face with their internal risk-control activities:
A. Economic conditions
C. Trade agreements
B. Market dynamics
D. Human judgment
100. To control online transactional risks, a business should consider outsourcing its technology needs when it
lacks
A. external training.
C. secondary data.
B. financial resources.
D. internal expertise.

2013 HS ICDC

FINANCE CLUSTER EXAM

12

1. B
Bilateral contract. In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q22'>22. A manufacturer has more workers on hand to perform production activities than it does production
equipment. What economic principle does this exemplify?</h5><select class="select-style" id="_22"><option value="def" disabled selected>Select</option><option value="A">A. Law of minimal utility</option><option value="B">B. Law of diminishing returns</option><option value="C">C. Economies of scale</option><option value="D">D. Economies of scoring</option></select></br></br><div id="22answer" style="display: none;"><h5>Incorrect. The correct answer is B: Law of diminishing returns</h5><h5>The law of diminishing returns is an economic principle stating that after a
certain point, hiring additional employees will result in a decrease in the overall level of productivity. For
example, suppose that an apparel manufacturer has 100 sewing machines available to produce shirts.
The manufacturer's overall productivity reaches its peak when there are 100 workers using all of the
sewing machines to make the shirts. If the manufacturer had 125 workers and 100 sewing machines,
productivity decreases because there are 25 workers without equipment to use to produce the shirts.
Economies of scale is the economic concept that states there is a reduction in cost per unit as the
production rate increases. The law of minimal utility and economies of scoring are fictitious terms.
</h5></div><h5 id='q23'>23. Consumer spending tends to decrease when</h5><select class="select-style" id="_23"><option value="def" disabled selected>Select</option><option value="A">A. business activities slow.</option><option value="B">B. interest rates decrease.
</option><option value="C">C. an economic recession ends.</option><option value="D">D. the inflation rate decline.
</option></select></br></br><div id="23answer" style="display: none;"><h5>Incorrect. The correct answer is A: business activities slow.</h5><h5>When business activities slow, businesses produce fewer goods and services. A
decline in production often leads to facility closings and employee layoffs. When people are unemployed,
they are not earning an income, so consumer spending tends to decrease. When business activities
decline over several months, it typically indicates the beginning of an economic recession. Businesses
are more likely to expand when interest rates decrease because it is less expensive to obtain loans.
When the inflation rate stabilizes, the prices of goods and services are not increasing as quickly, which
may boost consumer spending.
</h5></div><h5 id='q24'>24. What condition exists if a nation imports more goods and services than it exports?</h5><select class="select-style" id="_24"><option value="def" disabled selected>Select</option><option value="A">A. Trade deficit</option><option value="B">B. Balance of trade</option><option value="C">C. Trade surplus</option><option value="D">D. Comparative advantage</option></select></br></br><div id="24answer" style="display: none;"><h5>Incorrect. The correct answer is A: Trade deficit</h5><h5>A nation's balance of trade is the difference between the value of its exports and imports. A
trade deficit is an unfavorable balance of trade in which a nation's imports are greater than its exports. A
trade surplus is a favorable balance of trade when a nation's exports are greater than its imports. A
comparative advantage is the advantage achieved by a nation from specializing in and producing goods
and services at which it is relatively most efficient.
</h5></div><h5 id='q25'>25. This is an example of a(n)</h5><select class="select-style" id="_25"><option value="def" disabled selected>Select</option><option value="A">A. It's not very important, but it is nice to have.</option><option value="B">B. You can achieve one, but it requires work.</option><option value="C">C. It has little impact on your ability to reach your goals.</option><option value="D">D. It's something that you are born with.</option></select></br></br><div id="25answer" style="display: none;"><h5>Incorrect. The correct answer is B: You can achieve one, but it requires work.</h5><h5>Being positive does take a lot more effort than being negative,
but it's still totally achievable as long as you're willing to work to maintain it. A positive attitude is certainly
both necessary and important, and it doesn't make it harder for you to achieve your goals. In fact, a
positive attitude makes it easier to achieve your goals. A positive attitude is not something you're born
with; it's something you develop over time.
</h5></div><h5 id='q26'>26. When Cynthia, a credit analyst with Houghton Software, heard rumors of a company layoff, she asked
her manager Todd if the rumors were true and if her job was in jeopardy. Although Todd knew that some
lay-offs were coming, he told Cynthia not to worry about things. The following week, Cynthia's job was
eliminated. In this situation, ethical issues regarding company information occurred because</h5><select class="select-style" id="_26"><option value="def" disabled selected>Select</option><option value="A">A. Todd was completely honest with Cynthia.</option><option value="B">B. Cynthia asked irrelevant questions.</option><option value="C">C. Todd misled Cynthia.</option><option value="D">D. Cynthia started the rumors.

2013 HS ICDC

FINANCE CLUSTER EXAM

4
</option></select></br></br><div id="26answer" style="display: none;"><h5>Incorrect. The correct answer is C: Todd misled Cynthia.</h5><h5>Although Todd may have meant well when he told Cynthia not to worry, he misled
her by making Cynthia think that her job was safe. A better response may have been that he didn't have
all the facts about the layoffs and did not want to speculate about Cynthia's position. This statement
would have been true if Todd did not know who was going to be laid off. While Cynthia's questions put
Todd in an uncomfortable position, they were relevant to the rumors. Cynthia heard about the layoff
rumors—she didn't start them.
</h5></div><h5 id='q27'>27. How can you show that you're actively listening in a negotiation?</h5><select class="select-style" id="_27"><option value="def" disabled selected>Select</option><option value="A">A. Respond emotionally to what the other person says.</option><option value="B">B. Think about what you'll say next while the other person is speaking.</option><option value="C">C. Repeat or summarize the other person's statements.</option><option value="D">D. Keep a positive, open, and objective attitude.</option></select></br></br><div id="27answer" style="display: none;"><h5>Incorrect. The correct answer is C: Repeat or summarize the other person's statements.</h5><h5>You can show that you're actively listening by
repeating or summarizing the other person's statements or by asking for clarification. Active listening is
important because it keeps you from missing an important point. You don't want to think about what you'll
say next while the other person is speaking—this makes it impossible to listen. Even if you have strong
emotions, it's important to keep your emotions out of the negotiation, as reacting emotionally could derail
the discussion and negatively affect your credibility. It's important to keep a positive, open, and objective
attitude when negotiating, but this is something you should do whether or not you're actively listening.
</h5></div><h5 id='q28'>28. Which of the following is an example of a conflict that causes personal motivation or drive:</h5><select class="select-style" id="_28"><option value="def" disabled selected>Select</option><option value="A">A. High school students compete to sell the most candy in a school fundraiser.</option><option value="B">B. Kevin has a class and a meeting scheduled for Tuesday afternoon.</option><option value="C">C. Two coworkers need to use the copy machine at the same time.</option><option value="D">D. Jane and Amy both want to be in charge of their presentation.</option></select></br></br><div id="28answer" style="display: none;"><h5>Incorrect. The correct answer is A: High school students compete to sell the most candy in a school fundraiser.</h5><h5>When students compete to
sell the most candy, their conflict motivates them to be better salespeople and make more money for the
school. If Kevin has a class and a meeting scheduled for Tuesday afternoon, his conflict is due to
competing or opposing situations. When two coworkers need to use the copy machine at the same time,
their conflict is due to limited resources. If Jane and Amy both want to be in charge of their presentation,
their conflict is because of authority.
</h5></div><h5 id='q29'>29. What is the advantage to groups that use consensus building to make decisions?</h5><select class="select-style" id="_29"><option value="def" disabled selected>Select</option><option value="A">A. Group members rarely disagree.</option><option value="B">B. Agreement is reached very quickly.</option><option value="C">C. Decision making involves a majority rule.</option><option value="D">D. All decision makers have equal power.</option></select></br></br><div id="29answer" style="display: none;"><h5>Incorrect. The correct answer is D: All decision makers have equal power.</h5><h5>Consensus is a decision-making outcome that requires
substantial agreement of each group member. This means that, for everyone to agree, the option doesn't
have to be each group member's first choice. When making decisions by consensus, each member of
the groups has equal power. Because each member has equal power, members are less likely to do
things that promote self-interests and personal agendas. Consensus is not a majority rule. The
disadvantages to consensus as a decision making process is that it often takes a lot of time and conflicts
may occur.
</h5></div><h5 id='q30'>30. To have successful collaborative partnerships in the workplace, it is important for employees to</h5><select class="select-style" id="_30"><option value="def" disabled selected>Select</option><option value="A">A. limit communication.</option><option value="B">B. establish trust.</option><option value="C">C. avoid conflict.</option><option value="D">D. support all ideas.</option></select></br></br><div id="30answer" style="display: none;"><h5>Incorrect. The correct answer is B: establish trust.</h5><h5>Successful collaboration involves establishing trust. When employees trust their
coworkers, they are open, honest, and willing to work together to complete an activity or project.
Employees do not need to support all ideas, but they need to be respectful of others' feelings and
opinions. Employees cannot always avoid conflict, but they can handle it in constructive ways. Limiting
communication can hinder collaboration.
</h5></div><h5 id='q31'>31. When Thomas bought his car from the Reinhart Auto Dealership, he gave the dealership a $4,000 down
payment. Thomas will make a monthly payment of $365 to the dealership until he has paid off the loan.
Thomas bought his car by using ___________ credit.</h5><select class="select-style" id="_31"><option value="def" disabled selected>Select</option><option value="A">A. service</option><option value="B">B. revolving</option><option value="C">C. budget</option><option value="D">D. installment</option></select></br></br><div id="31answer" style="display: none;"><h5>Incorrect. The correct answer is D: installment</h5><h5>Installment credit is a type of credit account set up to handle one total amount of credit that is
to be paid off in regular installments. Because Thomas is paying a set amount of money at regular
intervals, he is using an installment plan to pay for his car. Revolving credit is a type of credit account that
limits the total amount of money that may be owed and charges interest on outstanding balances. A
budget credit account is a form of short-term credit often set up for 60- or 90-day periods with a payment
due every 30 days. Service credit is credit used for utilities that have been consumed but not paid for
(e.g., water and electricity).
</h5></div><h5 id='q32'>32. Justine's rich uncle wants to give her $5,000 towards the purchase of a car. But since Justine doesn't
plan to buy the car for at least another year, her uncle told her that she can have the money now, or he
can wait and give her the money when she actually buys the car. Justine chooses to take the money now
and deposit it in her savings account. After all, her deposit will yield 6% interest compounded annually. A
year from now, her $5,000 will be worth $5,300. What financial concept does this scenario illustrate?</h5><select class="select-style" id="_32"><option value="def" disabled selected>Select</option><option value="A">A. Capital budgeting</option><option value="B">B. Dividend reinvestment plan</option><option value="C">C. Time-value of money</option><option value="D">D. Accrual accounting</option></select></br></br><div id="32answer" style="display: none;"><h5>Incorrect. The correct answer is C: Time-value of money</h5><h5>Due to the time-value of money, any certain amount of money (such as Justine's
$5,000) is worth more now than later as a result of its earning potential. Rather than letting her uncle
keep the $5,000 until next year, Justine is wise to take the money now and put it in a deposit-bearing
savings account. That way, Justine can earn more money ($300, to be precise) on the money from her
uncle. A dividend reinvestment plan (also known as a DRIP) is a method used by many investors to grow
their investments more quickly. It involves using stock dividends to purchase more shares of that stock.
Capital budgeting is the process that a firm's financial managers use to determine which projects to
invest in. The accrual accounting method involves recording transactions at the time they occur even if
no money changes hands at the time.
</h5></div><h5 id='q33'>33. You want to be a millionaire by the time you retire. To reach that goal, you put $2,000 per year in an IRA,
starting at age 21. You will earn nine percent interest annually. As a result, you will have $1,156,517 at
age 65. This scenario illustrates the power of</h5><select class="select-style" id="_33"><option value="def" disabled selected>Select</option><option value="A">A. compound interest.</option><option value="B">B. finance charges.</option><option value="C">C. fiscal policy.</option><option value="D">D. the prime interest rate.</option></select></br></br><div id="33answer" style="display: none;"><h5>Incorrect. The correct answer is A: compound interest.</h5><h5>Compound interest is interest earned upon your previous interest earnings. By
starting early and earning compound interest, you can accumulate a much larger amount of money than
you would if you simply put $2,000 under your mattress or in a jar each year. A finance charge is interest
charged on the outstanding balance of a credit account. Fiscal policy is the government policy that sets
levels of government spending and taxation. The prime interest rate is the interest rate that banks offer to
their best credit customers. There is no indication that nine percent is the prime rate.
</h5></div><h5 id='q34'>34. State Street Bank sends text messages to its customers when $100 or more are withdrawn from their
bank accounts. The bank sends these notifications to reduce the risks associated with</h5><select class="select-style" id="_34"><option value="def" disabled selected>Select</option><option value="A">A. money laundering.</option><option value="B">B. loan fraud.</option><option value="C">C. identity theft.</option><option value="D">D. firewall intrusion.</option></select></br></br><div id="34answer" style="display: none;"><h5>Incorrect. The correct answer is C: identity theft.</h5><h5>Identity theft occurs when an individual obtains and uses another person's information (e.g.,
credit cards) without that person's consent. It is important for people to monitor their bank and credit-card
accounts on a regular basis, and financial institutions are implementing internal policies to help flag
possible identity-theft activities. Banks and credit-card companies send e-mail and text messages under
certain conditions to alert their customers of possible fraudulent activities. For example, financial
institutions notify customers when their systems detect sizable ATM withdrawals or charges are made to
credit cards over a certain amount of money. Although these actions detect fraud after it occurs, it allows
customers time to freeze their accounts to prevent further activity. Loan fraud involves lying on loan
applications to obtain loans. Money laundering is the process of creating the appearance that money
obtained from criminal activities came from acceptable or legal sources. Firewall applications are
designed to protect the organization's computer systems from external hacking activities.
</h5></div><h5 id='q35'>35. When preparing her tax return, Lynnette listed the interest that she paid on her student loan as</h5><select class="select-style" id="_35"><option value="def" disabled selected>Select</option><option value="A">A. taxable earnings.</option><option value="B">B. investment income.</option><option value="C">C. a tax-exempt investment.</option><option value="D">D. an itemized deduction.</option></select></br></br><div id="35answer" style="display: none;"><h5>Incorrect. The correct answer is D: an itemized deduction.</h5><h5>The government allows taxpayers to itemize or list certain expenses on their tax
returns to reduce the amount of taxable income. These expenses include charitable donations, a
percentage of medical expenses, business expenses, and interest paid on some types of loans.
Investment earnings, such as dividend payments, are taxable income. The federal government does not
tax certain types of investments, such as municipal bonds.
</h5></div><h5 id='q36'>36. Henry is a professional banker. Only certain people—"members"—may save at or borrow money from his
deposit-taking financial institution. Henry is most likely to work for a(n)</h5><select class="select-style" id="_36"><option value="def" disabled selected>Select</option><option value="A">A. CPA firm.</option><option value="B">B. mortgage company.</option><option value="C">C. insurance company.</option><option value="D">D. credit union.

2013 HS ICDC

FINANCE CLUSTER EXAM

5
</option></select></br></br><div id="36answer" style="display: none;"><h5>Incorrect. The correct answer is D: credit union.

2013 HS ICDC

FINANCE CLUSTER EXAM

5
</h5><h5>Explanation not available</h5></div><h5 id='q37'>37. Which of the following statements regarding financial institutions is true:</h5><select class="select-style" id="_37"><option value="def" disabled selected>Select</option><option value="A">A. A financial institution with low value is doing a good job of managing its risk.</option><option value="B">B. Financial institutions facilitate the flow of money in the economy.</option><option value="C">C. Financial institutions are controlled by their members.</option><option value="D">D. The primary role of financial institutions is to regulate saving and investing.</option></select></br></br><div id="37answer" style="display: none;"><h5>Incorrect. The correct answer is B: Financial institutions facilitate the flow of money in the economy.</h5><h5>Government/semigovernment financial
institutions, but not all financial institutions, carry out regulatory and supervisory functions. A financial
institution with a high value, rather than a low value, is probably doing a good job of managing its risk and
making money for stockholders. Credit unions are financial institutions that are owned by their members;
however, not all financial institutions are credit unions.
</h5></div><h5 id='q38'>38. Which of the following statements regarding debt and equity markets is correct:</h5><select class="select-style" id="_38"><option value="def" disabled selected>Select</option><option value="A">A. Common stock, an example of a debt instrument, is traded on the equity market.</option><option value="B">B. Investors who purchase a company's bonds gain partial ownership of the business.</option><option value="C">C. If a company suffers financial difficulties, its stockholders are paid before its bondholders.</option><option value="D">D. Bonds, which are debt instruments, are typically less risky investments than stocks.</option></select></br></br><div id="38answer" style="display: none;"><h5>Incorrect. The correct answer is D: Bonds, which are debt instruments, are typically less risky investments than stocks.</h5><h5>Equity instruments
such as common stock are traded on the equity market. Individuals who purchase equity instruments, not
debt instruments such as bonds, gain partial ownership of a business. If a company suffers financial
difficulties, its bondholders are paid before its stockholders.
</h5></div><h5 id='q39'>39. The New York Stock Exchange is a(n) __________ market.</h5><select class="select-style" id="_39"><option value="def" disabled selected>Select</option><option value="A">A. spot</option><option value="B">B. over-the-counter</option><option value="C">C. commodities</option><option value="D">D. auction</option></select></br></br><div id="39answer" style="display: none;"><h5>Incorrect. The correct answer is D: auction</h5><h5>The New York Stock Exchange is an auction market. An auction market is a physical, floorbased market where multiple traders place bids on behalf of investors. At the same time, sellers submit
offers, or asks, to sell their stocks at certain prices. The trade price represents the highest bid price and
the lowest offer price. An over-the-counter market is a place for trading securities outside of a formal
exchange. A commodity market is a market for buying and selling raw materials and primary products. A
spot market is a commodities market involving cash purchases that are delivered immediately.
</h5></div><h5 id='q40'>40. A retail bank and an insurance company, which recently merged together, are moving from two legacy
accounting systems to one enterprise planning system for the new, larger organization. This is an
example of __________ in the finance industry.</h5><select class="select-style" id="_40"><option value="def" disabled selected>Select</option><option value="A">A. bancassurance</option><option value="B">B. increased liquidity</option><option value="C">C. convergence</option><option value="D">D. knowledge management</option></select></br></br><div id="40answer" style="display: none;"><h5>Incorrect. The correct answer is C: convergence</h5><h5>Convergence in the finance industry typically involves the merging of financial providers
from different financial sectors, such as a retail bank merging with an insurance company. As a result of
the merger, the new, larger organization may choose to replace each company's legacy accounting
system with one new enterprise planning system for all of its operations—both banking and insurance.
Convergence often results in increased capital liquidity. Bancassurance is the sale of insurance products
by a retail/business bank, not the merger of an insurance company and a bank. Not enough information
was provided to determine if the enterprise planning system encompasses knowledge management.
</h5></div><h5 id='q41'>41. What is a common course of action for small banking institutions interested in competing globally and
improving their efficiencies, viability, and profitability?</h5><select class="select-style" id="_41"><option value="def" disabled selected>Select</option><option value="A">A. Consolidating with larger banks</option><option value="B">B. Rapidly expanding their operations</option><option value="C">C. Following global regulations more closely</option><option value="D">D. Dissolving their financial holding companies</option></select></br></br><div id="41answer" style="display: none;"><h5>Incorrect. The correct answer is A: Consolidating with larger banks</h5><h5>In recent years, many small banking institutions have consolidated or
merged with larger banks in efforts to compete globally and improve efficiencies, viability, and
profitability. Rapidly expanding operations without consolidating with a larger bank is usually not
conceivable for a small banking institution. Following global regulations is important but not necessarily
enough to compete successfully on a global level. A financial holding company is a large organization
that owns most or all of the shares of individually incorporated subsidiaries that engage in other types of
financial activities. Small banking institutions aren't liking to have the resources to be financial holding
companies.
</h5></div><h5 id='q42'>42. According to most analysts, the three economic indicators that stock market investors and traders should
pay the closest attention to are</h5><select class="select-style" id="_42"><option value="def" disabled selected>Select</option><option value="A">A. Gross Domestic Product, overhead expenses, and unemployment.</option><option value="B">B. interest rates, overhead expenses, and inflation.</option><option value="C">C. Gross Domestic Product, unemployment, and inflation.</option><option value="D">D. inflation, unemployment, and bonds rates.</option></select></br></br><div id="42answer" style="display: none;"><h5>Incorrect. The correct answer is C: Gross Domestic Product, unemployment, and inflation.</h5><h5>According to most analysts, the three economic
indicators that impact the stock market the most (and, therefore, the three that stock market investors
and traders should pay the closest attention to) are the Gross Domestic Product, unemployment, and
inflation. The Gross Domestic Product (GDP) is the final market value of the total output of all goods and
services produced within a country's geographic boundaries during a year's time. The stock market
mirrors the GDP—if the GDP goes up, the stock market usually goes up with it. The unemployment rate
is the percentage of the workforce that is unemployed. The stock market is inversely related to the
unemployment rate—if the unemployment rate goes up, stock prices usually go down. Inflation is a rapid
rise in prices that may occur when demand exceeds supply or when productivity declines and costs of
labor go up. If inflation and interest rates both rise, the stock market will suffer. However, if inflation goes
up while interest rates stay low, the stock market is likely to benefit. Overhead expenses and bond rates
are not economic indicators.
</h5></div><h5 id='q43'>43. Which of the following has contributed to financial globalization:</h5><select class="select-style" id="_43"><option value="def" disabled selected>Select</option><option value="A">A. An increase in restrictions on foreign investment and international trade</option><option value="B">B. An increase in taxes on international financial transactions</option><option value="C">C. A reduction in foreigners' access to domestic financial markets</option><option value="D">D. A movement from fixed exchange rates to floating exchange rates</option></select></br></br><div id="43answer" style="display: none;"><h5>Incorrect. The correct answer is D: A movement from fixed exchange rates to floating exchange rates</h5><h5>A fixed exchange rate is one that the
government sets and maintains. A fixed exchange rate does not change very often. A floating exchange
rate, on the other hand, is constantly in flux—determined by the market through supply and demand. To
enable capital to flow more freely across their national borders, countries around the world have moved
from fixed to floating exchange rates, lowered taxes on international financial transactions, increased
foreigners' access to domestic financial markets, and decreased restrictions on foreign investment and
international trade.
</h5></div><h5 id='q44'>44. Kendra 's financial goal is to build wealth over time by making diversified investments. Which of the
following financial services providers is most likely to help Kendra achieve her goal:</h5><select class="select-style" id="_44"><option value="def" disabled selected>Select</option><option value="A">A. Financial-auditing firm</option><option value="B">B. Mortgage company</option><option value="C">C. Investment bank</option><option value="D">D. Asset-management firm</option></select></br></br><div id="44answer" style="display: none;"><h5>Incorrect. The correct answer is D: Asset-management firm</h5><h5>Asset-management firms invest their clients' money in different (diversified)
securities by pooling assets. This is beneficial to investors who do not have the financial resources and
expertise to obtain securities on their own. Asset-management firms typically manage mutual funds,
hedge funds, and pension plans. An investment bank is a financial intermediary that underwrites
securities and facilitates mergers. Mortgage companies process loans specifically designed for the
purchase of real estate—land, residences, and other types of buildings. Certified Public Accounting firms
perform independent financial audits for different types of businesses (e.g., public corporations).
</h5></div><h5 id='q45'>45. Which financial statement should an investor use to quickly determine a company's “bottom line”?</h5><select class="select-style" id="_45"><option value="def" disabled selected>Select</option><option value="A">A. Statement of retained earnings</option><option value="B">B. Cash flow statement</option><option value="C">C. Balance sheet</option><option value="D">D. Income statement</option></select></br></br><div id="45answer" style="display: none;"><h5>Incorrect. The correct answer is D: Income statement</h5><h5>Some investors believe the income statement is the most important document to
review because it shows the company's “bottom line,” a term that refers to net income. The income
statement shows a company's profitability over a specific period of time. You read an income statement
from top to bottom. The top line shows the revenues. Each line below the first line deducts expenses,
until you get to the bottom line that shows the net income. A cash flow statement tracks the money that
comes into and flows back out of a company. A balance sheet gives a summary of a company's financial
health at a specific point in time. A statement of retained earnings indicates the amount of profit that is
being retained in the business, as well as the dividends paid by the company during a specific period of
time.
</h5></div><h5 id='q46'>46. Which of the following are among the most important resources to access prior to purchasing stock in a
company:</h5><select class="select-style" id="_46"><option value="def" disabled selected>Select</option><option value="A">A. EDGAR and the Statement of Ownership</option><option value="B">B. ESOP and the company's web site</option><option value="C">C. EDGAR and the company's web site</option><option value="D">D. ESOP and the Statement of Ownership

2013 HS ICDC

FINANCE CLUSTER EXAM

6
</option></select></br></br><div id="46answer" style="display: none;"><h5>Incorrect. The correct answer is C: EDGAR and the company's web site</h5><h5>Explanation not available</h5></div><h5 id='q47'>47. The most common headings on a stock table include the 52-week high and low, the stock symbol, the
estimated dividend per share, the yield percentage/rate of return, the volume/sales for the day, the
closing price for the day, the net change and the</h5><select class="select-style" id="_47"><option value="def" disabled selected>Select</option><option value="A">A. price-earnings ratio.</option><option value="B">B. earnings per share.</option><option value="C">C. net income.</option><option value="D">D. stockholder's equity.</option></select></br></br><div id="47answer" style="display: none;"><h5>Incorrect. The correct answer is A: price-earnings ratio.</h5><h5>Most stock tables include the price-earnings ratio, or PE ratio for short. The priceearnings ratio is determined by dividing the last closing price of the stock by the earnings per share.
Investors often study the PE ratio to get an idea of whether the stock is overvalued or undervalued,
compared to competitors. The earnings per share (EPS), net income, and stockholder's equity are not
typically found on the stock table. The earnings per share tells investors how much profit goes to each
share of common stock. The net income is the money remaining after operating expenses are subtracted
from gross profit. The stockholders' equity is equal to the assets minus liabilities.
</h5></div><h5 id='q48'>48. Geraldo, who is considering whether or not to invest in Coffee Dreams, Inc., is studying information about
the company on a stock table. One piece of data that he is interested in reviewing is the difference
between the stock's closing price and the previous day's closing price. Geraldo should review the</h5><select class="select-style" id="_48"><option value="def" disabled selected>Select</option><option value="A">A. ticker symbol.</option><option value="B">B. net change.</option><option value="C">C. price-earnings ratio.</option><option value="D">D. 52-week high and low.</option></select></br></br><div id="48answer" style="display: none;"><h5>Incorrect. The correct answer is B: net change.</h5><h5>The net change, which is commonly identified on stock tables, indicates the difference
between the stock's closing price and the previous day's closing price. The ticker symbol is a system of
letters that uniquely identifies a company. It is often based on the company name. The price-earnings
ratio is determined by dividing the share price of the stock by the earnings per share. The price-earnings
ratio is a common heading on stock tables. The 52-week high and low are the highest and lowest prices
paid for the stock during the past year.
</h5></div><h5 id='q49'>49. Certificates of deposit and municipal bonds are types of</h5><select class="select-style" id="_49"><option value="def" disabled selected>Select</option><option value="A">A. value stocks.</option><option value="B">B. ownership securities.</option><option value="C">C. commodities.</option><option value="D">D. lending investments.</option></select></br></br><div id="49answer" style="display: none;"><h5>Incorrect. The correct answer is D: lending investments.</h5><h5>Which of the
following financial services providers is most likely to help Kendra achieve her goal:
A. Financial-auditing firm
C. Investment bank
B. Mortgage company
D. Asset-management firm
45. Which financial statement should an investor use to quickly determine a company's “bottom line”?
A. Statement of retained earnings
C. Balance sheet
B. Cash flow statement
D. Income statement
46. Which of the following are among the most important resources to access prior to purchasing stock in a
company:
A. EDGAR and the Statement of Ownership
C. EDGAR and the company's web site
B. ESOP and the company's web site
D. ESOP and the Statement of Ownership

2013 HS ICDC

FINANCE CLUSTER EXAM

6

47. The most common headings on a stock table include the 52-week high and low, the stock symbol, the
estimated dividend per share, the yield percentage/rate of return, the volume/sales for the day, the
closing price for the day, the net change and the
A. price-earnings ratio.
C. net income.
B. earnings per share.
D. stockholder's equity.
48. Geraldo, who is considering whether or not to invest in Coffee Dreams, Inc., is studying information about
the company on a stock table. One piece of data that he is interested in reviewing is the difference
between the stock's closing price and the previous day's closing price. Geraldo should review the
A. ticker symbol.
C. price-earnings ratio.
B. net change.
D. 52-week high and low.
49. Certificates of deposit and municipal bonds are types of
A. value stocks.
C. commodities.
B. ownership securities.
D. lending investments.
50. On a balance sheet, a business categorizes its inventory and accounts receivable as
A. long-term assets.
C. current assets.
B. owner's equity.
D. current liabilities.
51. Leslie is good friends with Paul, who oversees the Bex Company's central data depository for financial
information. Paul recently told Leslie that based on confidential financial data that he saw at work, Bex's
profits have dropped by a third this year. Paul also told Leslie that she should sell her shares of Bex stock
before the market finds out about the company's financial difficulties, which will surely make Bex's stock
price plummet. This situation is an example of
A. encryption.
C. stewardship.
B. disparate data.
D. insider trading.
52. Financial-information management is responsible for collecting, maintaining, and reporting data about
financial transactions. Business managers often use these data to
A. forecast financial inflows and outflows.
C. develop secondary equity markets.
B. determine if liability insurance is needed.
D. calculate the level of corporate groupthink.
53. Pamela was dismissed from her job as a financial database administrator because she shared her
username and password with a coworker so that he could access a customer database that is typically
off-limits to him. Pamela failed to fulfill her responsibilities as a data
A. steward.
C. sponsor.
B. auditor.
D. processor.
54. Which of the following statements regarding the security of most financial institutions' data is true:
A. Data in transit are more at risk than data at rest or data in process.
B. Firewalls completely eliminate all external threats to the data.
C. More data attacks come from inside the organizations than outside them.
D. Investments in financial-information security have decreased in recent years.
55. Which of the following is a benefit of financial-information management software:
A. Improves productivity by replacing automated activities with manual tasks
B. Provides users with faster, better access to data from multiple sources
C. Lowers compliance costs by eliminating audit trails and economies of scale
D. Reduces risk and lowers confidence in the confidentiality and safety of data
56. Every morning, as soon as Lukas gets to the office, he logs onto his computer and uses a data-mining
application on his computer home screen to quickly review the company's financial performance. The
financial data are typically displayed in charts and tables. Lukas is using a(n)
A. dashboard.
C. artificial neural network.
B. text-mining tool.
D. decision tree.

2013 HS ICDC

FINANCE CLUSTER EXAM

7

57. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?
A. Nearest-neighbor method
C. Artificial neural networks
B. Decision trees
D. Dashboards
58. Tara knows that for her small business to grow, she must increase her cash flow. She's unsure, though,
whether she should take out a loan or a line of credit. Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:
A. Environmental scanning
C. Debt modeling
B. Decision trees
D. Zero-based modeling
59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:
A. A project-management application
C. A digital dashboard application
B. A database application
D. A spreadsheet application
60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?
A. Forecasting
C. DuPont modeling
B. Ratio analysis
D. Benchmarking
61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?
A. Crosstab query
C. Wildcard query
B. Parameter query
D. Status query
62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to
A. ensure capital gains.
C. understand currency exchange rates.
B. compile annual reports.
D. make investment decisions.
63. Independent auditors review the accuracy of a public corporation's financial statements to
A. test accounting methods.
C. evaluate risk.
B. verify compliance.
D. summarize collection techniques.
64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.
A. prioritizing needs, problem solving
C. planning activities, resource management
B. allocating funds, decision making
D. reporting transactions, financial planning
65. Which of the following is an activity conducted by the finance function of business:
A. Tracking business expenditures
C. Updating bookkeeping ledgers
B. Preparing cash flow statements
D. Choosing appropriate investments
66. The managerial accounting system emphasizes
A. previous sales transactions.
B. the current financial situation.

C. a future orientation.
D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8

67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?
A. Positional
C. Cash
B. Accrual
D. Static
68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:
A. Accounts-receivable summary
C. Comparative statement
B. Frequency ratio
D. Sales-transaction log
69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?
A. Asset-turnover
C. Liquidity
B. Qualitative
D. Market-value
70. Businesses consider a customer's income when determining whether to
A. accept cash sales.
C. restructure policies.
B. offer credit.
D. charge interest.
71. A bank carefully analyzes a customer's current level of debt before it approves a(n)
A. operating proposal.
C. loan application.
B. service request.
D. insurance claim.
72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?
A. Accounts-payable
C. Asset-depreciation
B. Aging-accounts
D. Asset-allocation
73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store
A. measure its long-term liabilities.
C. make reliable sales forecasts.
B. monitor its general operating costs.
D. manage its sales staff effectively.
74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?
A. Onboarding tasks
C. Application screening
B. Exit interview
D. Workplace familiarization
75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:
A. Standing orders ship on time.
C. Product quality is consistent.
B. Items are frequently backordered.
D. Staff has sufficient product knowledge.
76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses
A. Internet telephony.
C. an expert system.
B. a database.
D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9

77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.
A. False. The groupware application only allows users to update numerical data on shared
documents.
B. True. Groupware streamlines the work effort, so users have more time for social interaction.
C. False. The primary focus of groupware is to communicate policies and procedures to users.
D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.
78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.
A. cloud computing
C. streaming video
B. a flash drive
D. compact disks
79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that
A. research and development expenses exceeded the budget.
B. its sales forecasts were inaccurate.
C. product improvements helped boost sales.
D. the company achieved its sales goals.
80. Which of the following actions should a business take to help prevent robberies:
A. Have one person open and close each day
C. Hang up signs on doors and windows
B. Avoid making eye contact with customers
D. Make sure the facility is well-lit
81. Successful project management depends on the use of appropriate
A. pressure tactics.
C. foreign investments.
B. outsourcing.
D. technology.
82. When you want to select a new vendor for your business, it's best to
A. continue using a vendor you've used before.
B. go with a friend's recommendation.
C. use a formal selection process.
D. pick the vendor with the best online reviews.
83. Which of the following factors are most likely to build a quality work culture:
A. Coercion and empowerment
C. Vision and unpredictability
B. Consistency and censorship
D. Respect and honesty
84. Which of the following is an example of a semi-variable business cost:
A. Property taxes
C. Rent
B. Employees' salaries
D. Telephone service
85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?
A. Managing
C. Minimum
B. Moderate
D. Maximum
86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his
A. passion for a hobby.
C. technological knowledge.
B. desire for a flexible schedule.
D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10

87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by
A. volunteering her time.
C. requesting an internship.
B. networking with others.
D. setting up a meeting.
88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)
A. collections officer.
C. chartered financial consultant.
B. credit analyst.
D. bank agent.
89. What is a primary responsibility of a company's controller?
A. Evaluating property values
B. Designing risk policies to minimize business losses
C. Calculating the risk of loss
D. Directing the preparation of financial reports
90. Many businesspeople are required to take continuing education classes to
A. supplement their existing income.
C. demonstrate their emotional intelligence.
B. improve their standard of living.
D. maintain their professional certifications.
91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a
A. Certified Financial Planner (CFP).
C. Chartered Life Underwriter (CLU).
B. Certified Financial Analyst (CFA).
D. Chartered Investment Counselor (CIC).
92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.
A. Certified Information Systems Auditor (CISA)
B. Certified Mortgage Banker (CMB)
C. Certified Internal Auditor (CIA)
D. Certified Annuities Specialist (CAS)
93. To build a relationship with others working in the same field, a financial planner should consider
A. participating in an appropriate professional organization.
B. attending the local chamber of commerce meetings.
C. taking an entrepreneurship class at the community college.
D. sponsoring events for charitable organizations.
94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.
A. corporate branding, her own productivity
C. personal gains, business ethics
B. social responsibility, her career goals
D. operating procedures, compliance
95. To reduce risks associated with unethical business activities, a company should clearly communicate its
A. code of conduct to all employees.
B. terms-of-sale policies to executive managers.
C. product requirements to its primary distributors.
D. dividend payment schedule to suppliers.
96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?
A. Automated oversight
C. Financial compliance
B. Stress testing
D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11

97. Lower premiums and the ability to control the claims process are advantages of
A. captive insurance companies.
C. standard insurance companies.
B. traditional liability insurance policies.
D. reinsurance carriers.
98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should
A. conduct background checks on job applicants.
B. mandate drug testing for all employees on a monthly basis.
C. require delivery drivers to take a driving exam every six months.
D. ask job applicants about their former employers during the interview process.
99. Which of the following is a limitation that businesses face with their internal risk-control activities:
A. Economic conditions
C. Trade agreements
B. Market dynamics
D. Human judgment
100. To control online transactional risks, a business should consider outsourcing its technology needs when it
lacks
A. external training.
C. secondary data.
B. financial resources.
D. internal expertise.

2013 HS ICDC

FINANCE CLUSTER EXAM

12

1. B
Bilateral contract. In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q50'>50. On a balance sheet, a business categorizes its inventory and accounts receivable as</h5><select class="select-style" id="_50"><option value="def" disabled selected>Select</option><option value="A">A. long-term assets.</option><option value="B">B. owner's equity.</option><option value="C">C. current assets.</option><option value="D">D. current liabilities.</option></select></br></br><div id="50answer" style="display: none;"><h5>Incorrect. The correct answer is C: current assets.</h5><h5>Which of the following is the best course of action for
Money Plus Bank to take to improve these processes:
A. Encourage customers to utilize the bank's online account system
B. Improve the bank's new-employee training program
C. Increase cross-functional cooperation among employees
D. Switch from manual to automated calculation and reporting methods
8. In general, a governance, risk, and compliance (GRC) software system identifies and measures risk;
monitors the risk-management system; routinely checks adherence to company-wide policies; and
ensures compliance with
A. union demands.
C. product standards.
B. reporting requirements.
D. contingency plans.
9. Jake is researching career trends in the field of accounting. Which of the following sources is most likely
to contain the most current, credible information:
A. An early edition of the Managerial Accounting in Practice textbook
B. The federal government's labor and workforce web site
C. An online newspaper article written by a well-known compliance expert
D. The latest edition of the Insurance News Monthly trade publication

Copyright © 2013 by MBA Research and Curriculum Center®, Columbus, Ohio

2013 HS ICDC

FINANCE CLUSTER EXAM

2

10. An individual calls your company and asks to speak with your coworker, Rhonda Hoffman. What should
you do if Rhonda is not available to take the call?
A. Tell the caller that you would be glad to take his/her order.
B. Advise the caller to call again in a few minutes.
C. Ask the caller if s/he would like to leave a message.
D. Put the caller on hold while you track down Rhonda.
11. Lana wants to include a two-dimensional graphic that shows the groupings and patterns of multiple
variables in her business report. Which of the following graphic aids would best illustrate the data:
A. Table
C. Timeline
B. Pie chart
D. Scatter chart
12. The human-resources manager sends an e-mail to all employees stating that they will need to park on
the street on Tuesday because the maintenance department will be repairing the company's parking lot.
This is an example of a(n)
A. business proposal.
C. informational message.
B. projection report.
D. formal inquiry.
13. Which of the following is an example of horizontal communication in the workplace:
A. An employee provides his/her manager with a status report about the company's new web site.
B. A supervisor provides a line worker with feedback about her/his job performance.
C. A manager provides a new employee with advice on job advancement within the company.
D. An employee sends an e-mail to a coworker about a short-term project.
14. Before you can adapt your communication style to relate to businesspeople from other countries, you
must first
A. learn to speak the country's language fluently.
B. realize that cultural differences exist.
C. develop an ethnocentric attitude.
D. change your personal values and beliefs.
15. When helping a slow/methodical type of customer, salespeople should
A. follow the customer around the store to explain products' benefits.
B. show the customer as many options as possible.
C. take care not to overwhelm the customer.
D. press the customer to select one of two options.
16. Anna, the Bank Plus customer relationship manager, recently developed and implemented a new
customer relationship strategy across the organization. The strategy emphasizes better understanding of
customer needs. Anna also developed a recognition program to reward employees for delivering quality
customer service. Which of the following is most likely to be Anna's primary goal in implementing the
new strategy:
A. Promoting the bank's new products and services
B. Publicly recognizing outstanding bank employees
C. Developing stronger long-term customer relationships
D. Reducing the number of forms new customers must fill out
17. An important aspect of ethical behavior by financial-services providers is ensuring that their clients
A. purchase high-risk investments to generate better financial returns.
B. understand the potential risks and rewards of different financial products.
C. diversify their financial portfolios by investing more than half of their money in hedge funds.
D. preplan future investment strategies for unexpected financial bonuses.

2013 HS ICDC

FINANCE CLUSTER EXAM

3

18. Beverly, the new office manager, just completed a review of the last two years of accounts receivable
data. In doing so, she discovered that there are erroneous duplicate entries totaling $25,628 in the
system. Unfortunately, due to these duplicate entries, collection letters were sent to many customers who
had already paid in full—customers who are angry with the company for sending them the letters. What
should Beverly do to try to save these customer relationships and ensure that these customers are not
bothered in the future?
A. Use funds from the accounts payable account to pay the debt
B. Complete an accounting software update
C. Contact each customer by phone and apologize
D. Complete a data cleansing of the erroneous entries
19. An accounts payable analyst is using technology to collect and isolate customer records from the
disbursing system. The tool can retrieve and organize a massive number of customer records in just a
short time. What type of technology is the analyst using?
A. Computer-aided design
C. A neural network
B. A CRM database
D. GPS technology
20. To keep up with social, political, economic, and regulatory changes that affect their business activities,
companies should
A. conduct environmental scans.
C. plan customer interviews.
B. implement internal analyses.
D. prepare organizational inspections.
21. Members of the air-traffic controllers' union stopped working to support the pilots' union that recently went
on strike. This is an example of a
A. boycott.
C. sympathetic strike.
B. lockout.
D. wildcat strike.
22. A manufacturer has more workers on hand to perform production activities than it does production
equipment. What economic principle does this exemplify?
A. Law of minimal utility
C. Economies of scale
B. Law of diminishing returns
D. Economies of scoring
23. Consumer spending tends to decrease when
A. business activities slow.
B. interest rates decrease.

C. an economic recession ends.
D. the inflation rate decline.

24. What condition exists if a nation imports more goods and services than it exports?
A. Trade deficit
C. Trade surplus
B. Balance of trade
D. Comparative advantage
25. Which of the following statements is true of a positive attitude:
A. It's not very important, but it is nice to have.
B. You can achieve one, but it requires work.
C. It has little impact on your ability to reach your goals.
D. It's something that you are born with.
26. When Cynthia, a credit analyst with Houghton Software, heard rumors of a company layoff, she asked
her manager Todd if the rumors were true and if her job was in jeopardy. Although Todd knew that some
lay-offs were coming, he told Cynthia not to worry about things. The following week, Cynthia's job was
eliminated. In this situation, ethical issues regarding company information occurred because
A. Todd was completely honest with Cynthia.
C. Todd misled Cynthia.
B. Cynthia asked irrelevant questions.
D. Cynthia started the rumors.

2013 HS ICDC

FINANCE CLUSTER EXAM

4

27. How can you show that you're actively listening in a negotiation?
A. Respond emotionally to what the other person says.
B. Think about what you'll say next while the other person is speaking.
C. Repeat or summarize the other person's statements.
D. Keep a positive, open, and objective attitude.
28. Which of the following is an example of a conflict that causes personal motivation or drive:
A. High school students compete to sell the most candy in a school fundraiser.
B. Kevin has a class and a meeting scheduled for Tuesday afternoon.
C. Two coworkers need to use the copy machine at the same time.
D. Jane and Amy both want to be in charge of their presentation.
29. What is the advantage to groups that use consensus building to make decisions?
A. Group members rarely disagree.
C. Decision making involves a majority rule.
B. Agreement is reached very quickly.
D. All decision makers have equal power.
30. To have successful collaborative partnerships in the workplace, it is important for employees to
A. limit communication.
C. avoid conflict.
B. establish trust.
D. support all ideas.
31. When Thomas bought his car from the Reinhart Auto Dealership, he gave the dealership a $4,000 down
payment. Thomas will make a monthly payment of $365 to the dealership until he has paid off the loan.
Thomas bought his car by using ___________ credit.
A. service
C. budget
B. revolving
D. installment
32. Justine's rich uncle wants to give her $5,000 towards the purchase of a car. But since Justine doesn't
plan to buy the car for at least another year, her uncle told her that she can have the money now, or he
can wait and give her the money when she actually buys the car. Justine chooses to take the money now
and deposit it in her savings account. After all, her deposit will yield 6% interest compounded annually. A
year from now, her $5,000 will be worth $5,300. What financial concept does this scenario illustrate?
A. Capital budgeting
C. Time-value of money
B. Dividend reinvestment plan
D. Accrual accounting
33. You want to be a millionaire by the time you retire. To reach that goal, you put $2,000 per year in an IRA,
starting at age 21. You will earn nine percent interest annually. As a result, you will have $1,156,517 at
age 65. This scenario illustrates the power of
A. compound interest.
C. fiscal policy.
B. finance charges.
D. the prime interest rate.
34. State Street Bank sends text messages to its customers when $100 or more are withdrawn from their
bank accounts. The bank sends these notifications to reduce the risks associated with
A. money laundering.
C. identity theft.
B. loan fraud.
D. firewall intrusion.
35. When preparing her tax return, Lynnette listed the interest that she paid on her student loan as
A. taxable earnings.
C. a tax-exempt investment.
B. investment income.
D. an itemized deduction.
36. Henry is a professional banker. Only certain people—"members"—may save at or borrow money from his
deposit-taking financial institution. Henry is most likely to work for a(n)
A. CPA firm.
C. insurance company.
B. mortgage company.
D. credit union.

2013 HS ICDC

FINANCE CLUSTER EXAM

5

37. Which of the following statements regarding financial institutions is true:
A. A financial institution with low value is doing a good job of managing its risk.
B. Financial institutions facilitate the flow of money in the economy.
C. Financial institutions are controlled by their members.
D. The primary role of financial institutions is to regulate saving and investing.
38. Which of the following statements regarding debt and equity markets is correct:
A. Common stock, an example of a debt instrument, is traded on the equity market.
B. Investors who purchase a company's bonds gain partial ownership of the business.
C. If a company suffers financial difficulties, its stockholders are paid before its bondholders.
D. Bonds, which are debt instruments, are typically less risky investments than stocks.
39. The New York Stock Exchange is a(n) __________ market.
A. spot
C. commodities
B. over-the-counter
D. auction
40. A retail bank and an insurance company, which recently merged together, are moving from two legacy
accounting systems to one enterprise planning system for the new, larger organization. This is an
example of __________ in the finance industry.
A. bancassurance
C. convergence
B. increased liquidity
D. knowledge management
41. What is a common course of action for small banking institutions interested in competing globally and
improving their efficiencies, viability, and profitability?
A. Consolidating with larger banks
C. Following global regulations more closely
B. Rapidly expanding their operations
D. Dissolving their financial holding companies
42. According to most analysts, the three economic indicators that stock market investors and traders should
pay the closest attention to are
A. Gross Domestic Product, overhead expenses, and unemployment.
B. interest rates, overhead expenses, and inflation.
C. Gross Domestic Product, unemployment, and inflation.
D. inflation, unemployment, and bonds rates.
43. Which of the following has contributed to financial globalization:
A. An increase in restrictions on foreign investment and international trade
B. An increase in taxes on international financial transactions
C. A reduction in foreigners' access to domestic financial markets
D. A movement from fixed exchange rates to floating exchange rates
44. Kendra 's financial goal is to build wealth over time by making diversified investments. Which of the
following financial services providers is most likely to help Kendra achieve her goal:
A. Financial-auditing firm
C. Investment bank
B. Mortgage company
D. Asset-management firm
45. Which financial statement should an investor use to quickly determine a company's “bottom line”?
A. Statement of retained earnings
C. Balance sheet
B. Cash flow statement
D. Income statement
46. Which of the following are among the most important resources to access prior to purchasing stock in a
company:
A. EDGAR and the Statement of Ownership
C. EDGAR and the company's web site
B. ESOP and the company's web site
D. ESOP and the Statement of Ownership

2013 HS ICDC

FINANCE CLUSTER EXAM

6

47. The most common headings on a stock table include the 52-week high and low, the stock symbol, the
estimated dividend per share, the yield percentage/rate of return, the volume/sales for the day, the
closing price for the day, the net change and the
A. price-earnings ratio.
C. net income.
B. earnings per share.
D. stockholder's equity.
48. Geraldo, who is considering whether or not to invest in Coffee Dreams, Inc., is studying information about
the company on a stock table. One piece of data that he is interested in reviewing is the difference
between the stock's closing price and the previous day's closing price. Geraldo should review the
A. ticker symbol.
C. price-earnings ratio.
B. net change.
D. 52-week high and low.
49. Certificates of deposit and municipal bonds are types of
A. value stocks.
C. commodities.
B. ownership securities.
D. lending investments.
50. On a balance sheet, a business categorizes its inventory and accounts receivable as
A. long-term assets.
C. current assets.
B. owner's equity.
D. current liabilities.
51. Leslie is good friends with Paul, who oversees the Bex Company's central data depository for financial
information. Paul recently told Leslie that based on confidential financial data that he saw at work, Bex's
profits have dropped by a third this year. Paul also told Leslie that she should sell her shares of Bex stock
before the market finds out about the company's financial difficulties, which will surely make Bex's stock
price plummet. This situation is an example of
A. encryption.
C. stewardship.
B. disparate data.
D. insider trading.
52. Financial-information management is responsible for collecting, maintaining, and reporting data about
financial transactions. Business managers often use these data to
A. forecast financial inflows and outflows.
C. develop secondary equity markets.
B. determine if liability insurance is needed.
D. calculate the level of corporate groupthink.
53. Pamela was dismissed from her job as a financial database administrator because she shared her
username and password with a coworker so that he could access a customer database that is typically
off-limits to him. Pamela failed to fulfill her responsibilities as a data
A. steward.
C. sponsor.
B. auditor.
D. processor.
54. Which of the following statements regarding the security of most financial institutions' data is true:
A. Data in transit are more at risk than data at rest or data in process.
B. Firewalls completely eliminate all external threats to the data.
C. More data attacks come from inside the organizations than outside them.
D. Investments in financial-information security have decreased in recent years.
55. Which of the following is a benefit of financial-information management software:
A. Improves productivity by replacing automated activities with manual tasks
B. Provides users with faster, better access to data from multiple sources
C. Lowers compliance costs by eliminating audit trails and economies of scale
D. Reduces risk and lowers confidence in the confidentiality and safety of data
56. Every morning, as soon as Lukas gets to the office, he logs onto his computer and uses a data-mining
application on his computer home screen to quickly review the company's financial performance. The
financial data are typically displayed in charts and tables. Lukas is using a(n)
A. dashboard.
C. artificial neural network.
B. text-mining tool.
D. decision tree.

2013 HS ICDC

FINANCE CLUSTER EXAM

7

57. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?
A. Nearest-neighbor method
C. Artificial neural networks
B. Decision trees
D. Dashboards
58. Tara knows that for her small business to grow, she must increase her cash flow. She's unsure, though,
whether she should take out a loan or a line of credit. Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:
A. Environmental scanning
C. Debt modeling
B. Decision trees
D. Zero-based modeling
59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:
A. A project-management application
C. A digital dashboard application
B. A database application
D. A spreadsheet application
60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?
A. Forecasting
C. DuPont modeling
B. Ratio analysis
D. Benchmarking
61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?
A. Crosstab query
C. Wildcard query
B. Parameter query
D. Status query
62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to
A. ensure capital gains.
C. understand currency exchange rates.
B. compile annual reports.
D. make investment decisions.
63. Independent auditors review the accuracy of a public corporation's financial statements to
A. test accounting methods.
C. evaluate risk.
B. verify compliance.
D. summarize collection techniques.
64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.
A. prioritizing needs, problem solving
C. planning activities, resource management
B. allocating funds, decision making
D. reporting transactions, financial planning
65. Which of the following is an activity conducted by the finance function of business:
A. Tracking business expenditures
C. Updating bookkeeping ledgers
B. Preparing cash flow statements
D. Choosing appropriate investments
66. The managerial accounting system emphasizes
A. previous sales transactions.
B. the current financial situation.

C. a future orientation.
D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8

67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?
A. Positional
C. Cash
B. Accrual
D. Static
68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:
A. Accounts-receivable summary
C. Comparative statement
B. Frequency ratio
D. Sales-transaction log
69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?
A. Asset-turnover
C. Liquidity
B. Qualitative
D. Market-value
70. Businesses consider a customer's income when determining whether to
A. accept cash sales.
C. restructure policies.
B. offer credit.
D. charge interest.
71. A bank carefully analyzes a customer's current level of debt before it approves a(n)
A. operating proposal.
C. loan application.
B. service request.
D. insurance claim.
72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?
A. Accounts-payable
C. Asset-depreciation
B. Aging-accounts
D. Asset-allocation
73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store
A. measure its long-term liabilities.
C. make reliable sales forecasts.
B. monitor its general operating costs.
D. manage its sales staff effectively.
74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?
A. Onboarding tasks
C. Application screening
B. Exit interview
D. Workplace familiarization
75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:
A. Standing orders ship on time.
C. Product quality is consistent.
B. Items are frequently backordered.
D. Staff has sufficient product knowledge.
76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses
A. Internet telephony.
C. an expert system.
B. a database.
D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9

77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.
A. False. The groupware application only allows users to update numerical data on shared
documents.
B. True. Groupware streamlines the work effort, so users have more time for social interaction.
C. False. The primary focus of groupware is to communicate policies and procedures to users.
D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.
78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.
A. cloud computing
C. streaming video
B. a flash drive
D. compact disks
79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that
A. research and development expenses exceeded the budget.
B. its sales forecasts were inaccurate.
C. product improvements helped boost sales.
D. the company achieved its sales goals.
80. Which of the following actions should a business take to help prevent robberies:
A. Have one person open and close each day
C. Hang up signs on doors and windows
B. Avoid making eye contact with customers
D. Make sure the facility is well-lit
81. Successful project management depends on the use of appropriate
A. pressure tactics.
C. foreign investments.
B. outsourcing.
D. technology.
82. When you want to select a new vendor for your business, it's best to
A. continue using a vendor you've used before.
B. go with a friend's recommendation.
C. use a formal selection process.
D. pick the vendor with the best online reviews.
83. Which of the following factors are most likely to build a quality work culture:
A. Coercion and empowerment
C. Vision and unpredictability
B. Consistency and censorship
D. Respect and honesty
84. Which of the following is an example of a semi-variable business cost:
A. Property taxes
C. Rent
B. Employees' salaries
D. Telephone service
85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?
A. Managing
C. Minimum
B. Moderate
D. Maximum
86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his
A. passion for a hobby.
C. technological knowledge.
B. desire for a flexible schedule.
D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10

87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by
A. volunteering her time.
C. requesting an internship.
B. networking with others.
D. setting up a meeting.
88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)
A. collections officer.
C. chartered financial consultant.
B. credit analyst.
D. bank agent.
89. What is a primary responsibility of a company's controller?
A. Evaluating property values
B. Designing risk policies to minimize business losses
C. Calculating the risk of loss
D. Directing the preparation of financial reports
90. Many businesspeople are required to take continuing education classes to
A. supplement their existing income.
C. demonstrate their emotional intelligence.
B. improve their standard of living.
D. maintain their professional certifications.
91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a
A. Certified Financial Planner (CFP).
C. Chartered Life Underwriter (CLU).
B. Certified Financial Analyst (CFA).
D. Chartered Investment Counselor (CIC).
92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.
A. Certified Information Systems Auditor (CISA)
B. Certified Mortgage Banker (CMB)
C. Certified Internal Auditor (CIA)
D. Certified Annuities Specialist (CAS)
93. To build a relationship with others working in the same field, a financial planner should consider
A. participating in an appropriate professional organization.
B. attending the local chamber of commerce meetings.
C. taking an entrepreneurship class at the community college.
D. sponsoring events for charitable organizations.
94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.
A. corporate branding, her own productivity
C. personal gains, business ethics
B. social responsibility, her career goals
D. operating procedures, compliance
95. To reduce risks associated with unethical business activities, a company should clearly communicate its
A. code of conduct to all employees.
B. terms-of-sale policies to executive managers.
C. product requirements to its primary distributors.
D. dividend payment schedule to suppliers.
96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?
A. Automated oversight
C. Financial compliance
B. Stress testing
D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11

97. Lower premiums and the ability to control the claims process are advantages of
A. captive insurance companies.
C. standard insurance companies.
B. traditional liability insurance policies.
D. reinsurance carriers.
98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should
A. conduct background checks on job applicants.
B. mandate drug testing for all employees on a monthly basis.
C. require delivery drivers to take a driving exam every six months.
D. ask job applicants about their former employers during the interview process.
99. Which of the following is a limitation that businesses face with their internal risk-control activities:
A. Economic conditions
C. Trade agreements
B. Market dynamics
D. Human judgment
100. To control online transactional risks, a business should consider outsourcing its technology needs when it
lacks
A. external training.
C. secondary data.
B. financial resources.
D. internal expertise.

2013 HS ICDC

FINANCE CLUSTER EXAM

12

1. B
Bilateral contract. In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q51'>51. Leslie is good friends with Paul, who oversees the Bex Company's central data depository for financial
information. Paul recently told Leslie that based on confidential financial data that he saw at work, Bex's
profits have dropped by a third this year. Paul also told Leslie that she should sell her shares of Bex stock
before the market finds out about the company's financial difficulties, which will surely make Bex's stock
price plummet. This situation is an example of</h5><select class="select-style" id="_51"><option value="def" disabled selected>Select</option><option value="A">A. encryption.</option><option value="B">B. disparate data.</option><option value="C">C. stewardship.</option><option value="D">D. insider trading.</option></select></br></br><div id="51answer" style="display: none;"><h5>Incorrect. The correct answer is D: insider trading.</h5><h5>Illegal insider trading occurs when a company employee buys or sells company stock
based on information that is not disclosed to the public. It is also illegal for a company employee to share
that information with others so that they can buy or sell the stock before the public is made aware of the
information. Disparate data structures are financial-information databases that organize data differently,
making it very difficult to compare the data housed in the different applications. Stewardship is an ethical
consideration in financial-information management. Essentially, it means that those individuals managing
a company's financial information are expected to maintain the data in a consistent, useful, responsible
manner. Encryption is the process of transforming information into a secret code so that only the recipient
can read it.
</h5></div><h5 id='q52'>52. Financial-information management is responsible for collecting, maintaining, and reporting data about
financial transactions. Business managers often use these data to</h5><select class="select-style" id="_52"><option value="def" disabled selected>Select</option><option value="A">A. forecast financial inflows and outflows.</option><option value="B">B. determine if liability insurance is needed.</option><option value="C">C. develop secondary equity markets.</option><option value="D">D. calculate the level of corporate groupthink.</option></select></br></br><div id="52answer" style="display: none;"><h5>Incorrect. The correct answer is A: forecast financial inflows and outflows.</h5><h5>Financial-information management has multiple responsibilities in
an organization. For example, it collects, maintains, and reports data about financial transactions.
Business managers often use these data to forecast financial inflows and outflows, which is extremely
helpful when developing a budget. The financial-information management function also assists in the
preparation of financial statements and protects customer financial information. Business managers are
unlikely to use the data to determine if liability insurance is needed, develop secondary equity markets, or
calculate the level of corporate groupthink.
</h5></div><h5 id='q53'>53. Pamela was dismissed from her job as a financial database administrator because she shared her
username and password with a coworker so that he could access a customer database that is typically
off-limits to him. Pamela failed to fulfill her responsibilities as a data</h5><select class="select-style" id="_53"><option value="def" disabled selected>Select</option><option value="A">A. steward.</option><option value="B">B. auditor.</option><option value="C">C. sponsor.</option><option value="D">D. processor.</option></select></br></br><div id="53answer" style="display: none;"><h5>Incorrect. The correct answer is A: steward.</h5><h5>A data steward is, in essence, responsible for ensuring the integrity of an organization's data.
To ensure those data's integrity, data stewards must make sure that data are used ethically and honestly
—and only by those individuals authorized to do so. Pamela failed to fulfill her responsibilities as a data
steward because she allowed a coworker to access data that he was not authorized to see or use. An
auditor is responsible for verifying the accuracy of business records. In business, a sponsor is typically an
individual or organization that financially supports a project, event, or promotion. A data processor is
responsible for analyzing facts and figures and putting them into formats useful to the business.
</h5></div><h5 id='q54'>54. Which of the following statements regarding the security of most financial institutions' data is true:</h5><select class="select-style" id="_54"><option value="def" disabled selected>Select</option><option value="A">A. Data in transit are more at risk than data at rest or data in process.</option><option value="B">B. Firewalls completely eliminate all external threats to the data.</option><option value="C">C. More data attacks come from inside the organizations than outside them.</option><option value="D">D. Investments in financial-information security have decreased in recent years.</option></select></br></br><div id="54answer" style="display: none;"><h5>Incorrect. The correct answer is C: More data attacks come from inside the organizations than outside them.</h5><h5>Financial institutions' data are
at risk of attacks originating from both within and outside the organizations. In fact, more data attacks
typically come from inside the organization than outside it. Unfortunately, most financial institutions have
traditionally concentrated their data security efforts on firewalls and other technology to prevent outside
attacks while neglecting to address the risk of inside attacks. And, even the best firewall in the world can't
eliminate every external threat to the data. In addition, data at rest and data in process are actually more
at risk than data in transit. In recent years, though, financial service companies have increased their
investment in financial-information security to address these issues.
</h5></div><h5 id='q55'>55. Which of the following is a benefit of financial-information management software:</h5><select class="select-style" id="_55"><option value="def" disabled selected>Select</option><option value="A">A. Improves productivity by replacing automated activities with manual tasks</option><option value="B">B. Provides users with faster, better access to data from multiple sources</option><option value="C">C. Lowers compliance costs by eliminating audit trails and economies of scale</option><option value="D">D. Reduces risk and lowers confidence in the confidentiality and safety of data</option></select></br></br><div id="55answer" style="display: none;"><h5>Incorrect. The correct answer is B: Provides users with faster, better access to data from multiple sources</h5><h5>Financial-information
management software has a number of benefits. It provides users with faster, better access to data, even
from multiple sources. It also improves productivity by replacing tasks that used to be completed by hand
with automated activities. It lowers compliance costs, but it does so by increasing audit trails and
economies of scale, not eliminating them. Finally, it reduces risk and increases users' confidence in the
confidentiality, safety, and integrity of data.
</h5></div><h5 id='q56'>56. Every morning, as soon as Lukas gets to the office, he logs onto his computer and uses a data-mining
application on his computer home screen to quickly review the company's financial performance. The
financial data are typically displayed in charts and tables. Lukas is using a(n)</h5><select class="select-style" id="_56"><option value="def" disabled selected>Select</option><option value="A">A. dashboard.</option><option value="B">B. text-mining tool.</option><option value="C">C. artificial neural network.</option><option value="D">D. decision tree.

2013 HS ICDC

FINANCE CLUSTER EXAM

7
</option></select></br></br><div id="56answer" style="display: none;"><h5>Incorrect. The correct answer is A: dashboard.</h5><h5>A dashboard is a data-mining tool that summarizes a business's financial data and presents
that information in easy-to-read charts and/or tables. The data, which are updated in real time, can be
used to assess the company's overall financial performance. Many companies develop dashboards that
appear on at least some of their employees' computer home screens automatically. A text-mining tool is
a type of data-mining tool that can mine data from multiple text formats, including Microsoft Word and email. An artificial neural network is a data-mining technique often used to review financial records to
identify possible errors and questionable entries. A decision tree is also a data-mining technique.
Decision trees are commonly used to classify data and build models.
</h5></div><h5 id='q57'>57. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?</h5><select class="select-style" id="_57"><option value="def" disabled selected>Select</option><option value="A">A. Nearest-neighbor method</option><option value="B">B. Decision trees</option><option value="C">C. Artificial neural networks</option><option value="D">D. Dashboards</option></select></br></br><div id="57answer" style="display: none;"><h5>Incorrect. The correct answer is C: Artificial neural networks</h5><h5>Three common data mining techniques are artificial neural networks, decision
trees, and the nearest-neighbor method. An artificial neural network is a data-mining technique often
used to review financial records to identify possible errors and questionable entries. Decision trees, on
the other hand, are commonly used to classify data and build models. The nearest-neighbor method
classifies data records according to similar historical data. A dashboard is a data-mining tool that
summarizes a business's financial data and presents that information in easy-to-read charts and/or
tables.
</h5></div><h5 id='q58'>58. Tara knows that for her small business to grow, she must increase her cash flow. She's unsure, though,
whether she should take out a loan or a line of credit. Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:</h5><select class="select-style" id="_58"><option value="def" disabled selected>Select</option><option value="A">A. Environmental scanning</option><option value="B">B. Decision trees</option><option value="C">C. Debt modeling</option><option value="D">D. Zero-based modeling</option></select></br></br><div id="58answer" style="display: none;"><h5>Incorrect. The correct answer is C: Debt modeling</h5><h5>Some budgeting software applications include a debt modeling tool which allows the user
to assess the potential impact of loans and lines of credit. To use the debt modeling tool, the user would
input the terms of the loan or line of credit, including the interest rate, term, principal, etc. Decision trees
are a data-mining technique commonly used to classify data and build models. Environmental scanning
involves gathering information about the environment surrounding a business, analyzing that information,
and determining the future impact of that information on the business. Zero-based budgeting is a method
of budgeting that requires a manager to demonstrate the need for every expense instead of relying on
figures from a previous period.
</h5></div><h5 id='q59'>59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:</h5><select class="select-style" id="_59"><option value="def" disabled selected>Select</option><option value="A">A. A project-management application</option><option value="B">B. A database application</option><option value="C">C. A digital dashboard application</option><option value="D">D. A spreadsheet application</option></select></br></br><div id="59answer" style="display: none;"><h5>Incorrect. The correct answer is D: A spreadsheet application</h5><h5>Many small business owners use spreadsheet software such as Microsoft
Excel to develop their budgets. A spreadsheet is a grid that shows information (usually numerical) in a
logical format. Even applications that are marketed as “budgeting software” are basically spreadsheet
templates that have been formatted and prepared specially for budgeting purposes. A database is
computerized storage for information and facts. Although small business owners may house their data in
a database, they are likely to use a spreadsheet application to develop their budgets. A dashboard is a
data-mining tool that summarizes a business's financial data and presents that information in easy-toread charts and/or tables. Project-management applications are likely to contain budgeting software, but
it would be used when developing a budget for a project, not an entire business.
</h5></div><h5 id='q60'>60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?</h5><select class="select-style" id="_60"><option value="def" disabled selected>Select</option><option value="A">A. Forecasting</option><option value="B">B. Ratio analysis</option><option value="C">C. DuPont modeling</option><option value="D">D. Benchmarking</option></select></br></br><div id="60answer" style="display: none;"><h5>Incorrect. The correct answer is D: Benchmarking</h5><h5>Many financial-analysis software applications can provide users with benchmarking
information that compares a company's financial performance with other specific companies in its
industry and/or with industry standards. Other financial-analysis software features include ratio analysis,
DuPont modeling, and forecasting. Financial ratios are comparisons of different numbers from a
business's financial statement. Most financial-analysis software calculates the different financial ratios
automatically and then evaluates those ratios to determine company strengths and weaknesses for the
user. DuPont modeling helps the user to examine the impact of each financial ratio on return on equity.
Forecasting features are often used to make predictions, develop budgets, and experiment with “what-if”
scenarios.
</h5></div><h5 id='q61'>61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?</h5><select class="select-style" id="_61"><option value="def" disabled selected>Select</option><option value="A">A. Crosstab query</option><option value="B">B. Parameter query</option><option value="C">C. Wildcard query</option><option value="D">D. Status query</option></select></br></br><div id="61answer" style="display: none;"><h5>Incorrect. The correct answer is B: Parameter query</h5><h5>A query is a short string of code used to access and retrieve specific information from a
database. After developing a query (which is, essentially, a question), that query can be saved and used
again. Sometimes, the user wants to ask the database several very similar questions but with different
details (e.g., different timeframes) each time. If this is the case, the user might develop and use a
parameter query, which allows the user to input different details or criteria each time s/he runs the same
general query. A crosstab query aggregates data to transform rows of data into columns. A wildcard is
query is typically used when the user isn't sure how to spell a word in the query or wants to locate all
database entries containing different variations on a specific term. A status query is sometimes used to
determine the status of a system, project, etc.
</h5></div><h5 id='q62'>62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to</h5><select class="select-style" id="_62"><option value="def" disabled selected>Select</option><option value="A">A. ensure capital gains.</option><option value="B">B. compile annual reports.</option><option value="C">C. understand currency exchange rates.</option><option value="D">D. make investment decisions.</option></select></br></br><div id="62answer" style="display: none;"><h5>Incorrect. The correct answer is D: make investment decisions.</h5><h5>Public corporations are legally required to provide accurate financial
information (e.g., balance sheets, annual reports) because shareholders and potential shareholders use
this information to make investment decisions. If public corporations provide inaccurate or misleading
financial information, they are subject to severe government penalties and fines. A currency exchange
rate is the specification of how much two currencies are worth in relation to each other at a given time.
Although the goal of investing is to make or gain money, there is a possibility of financial loss if stocks
perform poorly.
</h5></div><h5 id='q63'>63. Independent auditors review the accuracy of a public corporation's financial statements to</h5><select class="select-style" id="_63"><option value="def" disabled selected>Select</option><option value="A">A. test accounting methods.</option><option value="B">B. verify compliance.</option><option value="C">C. evaluate risk.</option><option value="D">D. summarize collection techniques.</option></select></br></br><div id="63answer" style="display: none;"><h5>Incorrect. The correct answer is B: verify compliance.</h5><h5>Businesses use Six Sigma to determine methods to improve current
process and/or develop new, more efficient processes. Six Sigma consists of six phases: Define the
problem; measure aspects of the current process; analyze data; improve processes; and develop
measures to monitor the new process results. Cost standards are established specifications used to
measure how much a project or product costs. Strategic planning involves making long-range plans
(three to five years) for a company as a whole. First-in, First-out is a method used to calculate inventory.
</h5></div><h5 id='q64'>64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.</h5><select class="select-style" id="_64"><option value="def" disabled selected>Select</option><option value="A">A. prioritizing needs, problem solving</option><option value="B">B. allocating funds, decision making</option><option value="C">C. planning activities, resource management</option><option value="D">D. reporting transactions, financial planning</option></select></br></br><div id="64answer" style="display: none;"><h5>Incorrect. The correct answer is D: reporting transactions, financial planning</h5><h5>Because accounting is the process of keeping and interpreting
financial records, it is responsible for recording and reporting transactions. The primary responsibility of
the finance function is obtaining funds and managing the business's money in ways that achieve the
business's goals. This process often involves making decisions, managing resources, and solving
problems. The finance function uses the reports that the accounting function prepares to carry out its
responsibilities. The primary responsibility of the accounting function is not allocating funds, planning
activities, or prioritizing needs.
</h5></div><h5 id='q65'>65. This scenario illustrates the power of</h5><select class="select-style" id="_65"><option value="def" disabled selected>Select</option><option value="A">A. Tracking business expenditures</option><option value="B">B. Preparing cash flow statements</option><option value="C">C. Updating bookkeeping ledgers</option><option value="D">D. Choosing appropriate investments</option></select></br></br><div id="65answer" style="display: none;"><h5>Incorrect. The correct answer is D: Choosing appropriate investments</h5><h5>The primary responsibility of the finance function is obtaining funds
and managing the business's money in ways that boost growth and achieve the business's goals. One
way to boost a company's growth is by choosing appropriate investments that will increase the
company's income. Preparing cash flow statements, updating bookkeeping ledgers, and tracking
business expenditures are accounting activities.
</h5></div><h5 id='q66'>66. The managerial accounting system emphasizes</h5><select class="select-style" id="_66"><option value="def" disabled selected>Select</option><option value="A">A. previous sales transactions.</option><option value="B">B. the current financial situation.
</option><option value="C">C. a future orientation.</option><option value="D">D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8
</option></select></br></br><div id="66answer" style="display: none;"><h5>Incorrect. The correct answer is C: a future orientation.</h5><h5>Businesses use managerial accounting systems for organizational planning and
strategic (long-term) decision-making. Managerial accounting involves looking at all types of relevant
financial information that affects business activities and using the information to make predictions.
Managerial accounting evaluates current, past, and future conditions and considers factors such as sales
and economic conditions. Tax and financial accounting systems emphasize a business's past financial
performance (e.g., previous sales transactions). These systems are designed to prepare financial
information in specific ways because they provide financial information to different external audiences.
</h5></div><h5 id='q67'>67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?</h5><select class="select-style" id="_67"><option value="def" disabled selected>Select</option><option value="A">A. Positional</option><option value="B">B. Accrual</option><option value="C">C. Cash</option><option value="D">D. Static</option></select></br></br><div id="67answer" style="display: none;"><h5>Incorrect. The correct answer is C: Cash</h5><h5>The cash accounting system records transactions when the business receives or spends money.
This system can create problems for a business when a service occurs during one accounting period,
and the business receives payment for the service during another accounting period. The accrual
accounting system records transactions at the time they occur regardless of when money is exchanged.
Positional and static are not types of accounting systems.
</h5></div><h5 id='q68'>68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:</h5><select class="select-style" id="_68"><option value="def" disabled selected>Select</option><option value="A">A. Accounts-receivable summary</option><option value="B">B. Frequency ratio</option><option value="C">C. Comparative statement</option><option value="D">D. Sales-transaction log</option></select></br></br><div id="68answer" style="display: none;"><h5>Incorrect. The correct answer is C: Comparative statement</h5><h5>Some investors believe the income statement is the most important document to
review because it shows the company's “bottom line,” a term that refers to net income. The income
statement shows a company's profitability over a specific period of time. You read an income statement
from top to bottom. The top line shows the revenues. Each line below the first line deducts expenses,
until you get to the bottom line that shows the net income. A cash flow statement tracks the money that
comes into and flows back out of a company. A balance sheet gives a summary of a company's financial
health at a specific point in time. A statement of retained earnings indicates the amount of profit that is
being retained in the business, as well as the dividends paid by the company during a specific period of
time.
</h5></div><h5 id='q69'>69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?</h5><select class="select-style" id="_69"><option value="def" disabled selected>Select</option><option value="A">A. Asset-turnover</option><option value="B">B. Qualitative</option><option value="C">C. Liquidity</option><option value="D">D. Market-value</option></select></br></br><div id="69answer" style="display: none;"><h5>Incorrect. The correct answer is C: Liquidity</h5><h5>Businesses use different financial ratios to identify trends that affect their business activities. A
financial ratio is the comparison of two numbers from a business's financial statement. Businesses
calculate and use financial ratios to look at relationships between dollars, numbers, and percentages.
Many businesses compare their current financial ratios to previous years to identify trends and patterns in
their sales, spending, liquidity, etc. The liquidity ratio measures a business's ability to pay its short-term
debts, which is an important indicator of business's financial well-being. Qualitative data are facts and
figures based on opinion and personal interpretations. Businesses do not calculate asset-turnover and
market-value ratios to evaluate their ability to pay their short-term debts.
</h5></div><h5 id='q70'>70. Businesses consider a customer's income when determining whether to</h5><select class="select-style" id="_70"><option value="def" disabled selected>Select</option><option value="A">A. accept cash sales.</option><option value="B">B. offer credit.</option><option value="C">C. restructure policies.</option><option value="D">D. charge interest.</option></select></br></br><div id="70answer" style="display: none;"><h5>Incorrect. The correct answer is B: offer credit.</h5><h5>Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:
A. Environmental scanning
C. Debt modeling
B. Decision trees
D. Zero-based modeling
59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:
A. A project-management application
C. A digital dashboard application
B. A database application
D. A spreadsheet application
60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?
A. Forecasting
C. DuPont modeling
B. Ratio analysis
D. Benchmarking
61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?
A. Crosstab query
C. Wildcard query
B. Parameter query
D. Status query
62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to
A. ensure capital gains.
C. understand currency exchange rates.
B. compile annual reports.
D. make investment decisions.
63. Independent auditors review the accuracy of a public corporation's financial statements to
A. test accounting methods.
C. evaluate risk.
B. verify compliance.
D. summarize collection techniques.
64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.
A. prioritizing needs, problem solving
C. planning activities, resource management
B. allocating funds, decision making
D. reporting transactions, financial planning
65. Which of the following is an activity conducted by the finance function of business:
A. Tracking business expenditures
C. Updating bookkeeping ledgers
B. Preparing cash flow statements
D. Choosing appropriate investments
66. The managerial accounting system emphasizes
A. previous sales transactions.
B. the current financial situation.

C. a future orientation.
D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8

67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?
A. Positional
C. Cash
B. Accrual
D. Static
68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:
A. Accounts-receivable summary
C. Comparative statement
B. Frequency ratio
D. Sales-transaction log
69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?
A. Asset-turnover
C. Liquidity
B. Qualitative
D. Market-value
70. Businesses consider a customer's income when determining whether to
A. accept cash sales.
C. restructure policies.
B. offer credit.
D. charge interest.
71. A bank carefully analyzes a customer's current level of debt before it approves a(n)
A. operating proposal.
C. loan application.
B. service request.
D. insurance claim.
72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?
A. Accounts-payable
C. Asset-depreciation
B. Aging-accounts
D. Asset-allocation
73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store
A. measure its long-term liabilities.
C. make reliable sales forecasts.
B. monitor its general operating costs.
D. manage its sales staff effectively.
74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?
A. Onboarding tasks
C. Application screening
B. Exit interview
D. Workplace familiarization
75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:
A. Standing orders ship on time.
C. Product quality is consistent.
B. Items are frequently backordered.
D. Staff has sufficient product knowledge.
76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses
A. Internet telephony.
C. an expert system.
B. a database.
D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9

77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.
A. False. The groupware application only allows users to update numerical data on shared
documents.
B. True. Groupware streamlines the work effort, so users have more time for social interaction.
C. False. The primary focus of groupware is to communicate policies and procedures to users.
D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.
78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.
A. cloud computing
C. streaming video
B. a flash drive
D. compact disks
79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that
A. research and development expenses exceeded the budget.
B. its sales forecasts were inaccurate.
C. product improvements helped boost sales.
D. the company achieved its sales goals.
80. Which of the following actions should a business take to help prevent robberies:
A. Have one person open and close each day
C. Hang up signs on doors and windows
B. Avoid making eye contact with customers
D. Make sure the facility is well-lit
81. Successful project management depends on the use of appropriate
A. pressure tactics.
C. foreign investments.
B. outsourcing.
D. technology.
82. When you want to select a new vendor for your business, it's best to
A. continue using a vendor you've used before.
B. go with a friend's recommendation.
C. use a formal selection process.
D. pick the vendor with the best online reviews.
83. Which of the following factors are most likely to build a quality work culture:
A. Coercion and empowerment
C. Vision and unpredictability
B. Consistency and censorship
D. Respect and honesty
84. Which of the following is an example of a semi-variable business cost:
A. Property taxes
C. Rent
B. Employees' salaries
D. Telephone service
85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?
A. Managing
C. Minimum
B. Moderate
D. Maximum
86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his
A. passion for a hobby.
C. technological knowledge.
B. desire for a flexible schedule.
D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10

87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by
A. volunteering her time.
C. requesting an internship.
B. networking with others.
D. setting up a meeting.
88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)
A. collections officer.
C. chartered financial consultant.
B. credit analyst.
D. bank agent.
89. What is a primary responsibility of a company's controller?
A. Evaluating property values
B. Designing risk policies to minimize business losses
C. Calculating the risk of loss
D. Directing the preparation of financial reports
90. Many businesspeople are required to take continuing education classes to
A. supplement their existing income.
C. demonstrate their emotional intelligence.
B. improve their standard of living.
D. maintain their professional certifications.
91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a
A. Certified Financial Planner (CFP).
C. Chartered Life Underwriter (CLU).
B. Certified Financial Analyst (CFA).
D. Chartered Investment Counselor (CIC).
92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.
A. Certified Information Systems Auditor (CISA)
B. Certified Mortgage Banker (CMB)
C. Certified Internal Auditor (CIA)
D. Certified Annuities Specialist (CAS)
93. To build a relationship with others working in the same field, a financial planner should consider
A. participating in an appropriate professional organization.
B. attending the local chamber of commerce meetings.
C. taking an entrepreneurship class at the community college.
D. sponsoring events for charitable organizations.
94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.
A. corporate branding, her own productivity
C. personal gains, business ethics
B. social responsibility, her career goals
D. operating procedures, compliance
95. To reduce risks associated with unethical business activities, a company should clearly communicate its
A. code of conduct to all employees.
B. terms-of-sale policies to executive managers.
C. product requirements to its primary distributors.
D. dividend payment schedule to suppliers.
96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?
A. Automated oversight
C. Financial compliance
B. Stress testing
D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11

97. Lower premiums and the ability to control the claims process are advantages of
A. captive insurance companies.
C. standard insurance companies.
B. traditional liability insurance policies.
D. reinsurance carriers.
98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should
A. conduct background checks on job applicants.
B. mandate drug testing for all employees on a monthly basis.
C. require delivery drivers to take a driving exam every six months.
D. ask job applicants about their former employers during the interview process.
99. Which of the following is a limitation that businesses face with their internal risk-control activities:
A. Economic conditions
C. Trade agreements
B. Market dynamics
D. Human judgment
100. To control online transactional risks, a business should consider outsourcing its technology needs when it
lacks
A. external training.
C. secondary data.
B. financial resources.
D. internal expertise.

2013 HS ICDC

FINANCE CLUSTER EXAM

12

1. B
Bilateral contract. In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q71'>71. A bank carefully analyzes a customer's current level of debt before it approves a(n)</h5><select class="select-style" id="_71"><option value="def" disabled selected>Select</option><option value="A">A. operating proposal.</option><option value="B">B. service request.</option><option value="C">C. loan application.</option><option value="D">D. insurance claim.</option></select></br></br><div id="71answer" style="display: none;"><h5>Incorrect. The correct answer is C: loan application.</h5><h5>Many small business owners use spreadsheet software such as Microsoft
Excel to develop their budgets. A spreadsheet is a grid that shows information (usually numerical) in a
logical format. Even applications that are marketed as “budgeting software” are basically spreadsheet
templates that have been formatted and prepared specially for budgeting purposes. A database is
computerized storage for information and facts. Although small business owners may house their data in
a database, they are likely to use a spreadsheet application to develop their budgets. A dashboard is a
data-mining tool that summarizes a business's financial data and presents that information in easy-toread charts and/or tables. Project-management applications are likely to contain budgeting software, but
it would be used when developing a budget for a project, not an entire business.
</h5></div><h5 id='q72'>72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?</h5><select class="select-style" id="_72"><option value="def" disabled selected>Select</option><option value="A">A. Accounts-payable</option><option value="B">B. Aging-accounts</option><option value="C">C. Asset-depreciation</option><option value="D">D. Asset-allocation</option></select></br></br><div id="72answer" style="display: none;"><h5>Incorrect. The correct answer is B: Aging-accounts</h5><h5>When customers do not pay their bills on time, it negatively affects businesses' cash
flow. Businesses need to receive customers' payments on time, so that they can pay business expenses
such as inventory and payroll. Businesses must continuously monitor aging accounts to identify
delinquent customers and collect overdue payments. Accounts-payable reports identify vendors to whom
the business owes money. Asset-depreciation reports summarize the decreased value of a business's
capital assets (e.g., equipment and vehicles). Asset allocation refers the variety of securities in an
individual's or business's investment portfolio.
</h5></div><h5 id='q73'>73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store</h5><select class="select-style" id="_73"><option value="def" disabled selected>Select</option><option value="A">A. measure its long-term liabilities.</option><option value="B">B. monitor its general operating costs.</option><option value="C">C. make reliable sales forecasts.</option><option value="D">D. manage its sales staff effectively.</option></select></br></br><div id="73answer" style="display: none;"><h5>Incorrect. The correct answer is C: make reliable sales forecasts.</h5><h5>Financial reports help businesses identify trends and patterns, which
helps guide their decision making. By monitoring and comparing inventory and sales reports, businesses
can identify which items sell best and when sales for these items tend to increase. This information helps
businesses develop reliable sales forecasts so they order enough stock and have it on hand when it is
needed. Identifying sales trends does not help the business monitor its general operating costs, measure
its long-term liabilities, or manage its sales staff effectively.
</h5></div><h5 id='q74'>74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?</h5><select class="select-style" id="_74"><option value="def" disabled selected>Select</option><option value="A">A. Onboarding tasks</option><option value="B">B. Exit interview</option><option value="C">C. Application screening</option><option value="D">D. Workplace familiarization</option></select></br></br><div id="74answer" style="display: none;"><h5>Incorrect. The correct answer is B: Exit interview</h5><h5>Exit interviews are discussions with employees who are leaving that are designed to gain
feedback for the business. Businesses often consider this feedback when making policy changes that
affect compensation, working conditions, etc. Application screening involves "weeding out" the applicants
that do not meet minimum requirements for the job or have not satisfactorily completed the application.
The human-resources function conducts onboarding activities when new employees join the company
(e.g., orientation, facility tour or familiarization, and paperwork).
</h5></div><h5 id='q75'>75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:</h5><select class="select-style" id="_75"><option value="def" disabled selected>Select</option><option value="A">A. Standing orders ship on time.</option><option value="B">B. Items are frequently backordered.</option><option value="C">C. Product quality is consistent.</option><option value="D">D. Staff has sufficient product knowledge.</option></select></br></br><div id="75answer" style="display: none;"><h5>Incorrect. The correct answer is B: Items are frequently backordered.</h5><h5>When a business backorders items, customers do not receive goods
and services when they need them. If backorders occur on a frequent basis, customers' satisfaction
levels with the business decrease and customers look to competitors to obtain the products that they
want and need. Standing orders that ship on time, consistent product quality, and knowledgeable staff
are factors that have a positive impact on a business.
</h5></div><h5 id='q76'>76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses</h5><select class="select-style" id="_76"><option value="def" disabled selected>Select</option><option value="A">A. Internet telephony.</option><option value="B">B. a database.</option><option value="C">C. an expert system.</option><option value="D">D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9
</option></select></br></br><div id="76answer" style="display: none;"><h5>Incorrect. The correct answer is B: a database.</h5><h5>Businesses use a number of different tools, including CRM databases, data
warehouses, and various computer applications, to gather, organize, analyze, and store customer data. A
data is a virtual storage unit for information. Computer-aided design (CAD) involves the use of technology
to plan, design, test, and alter products virtually. A neural network is a computer system that simulates
human brain activity to analyze and recognize patterns in information. A global positioning system (GPS)
uses satellite technology to determine location and provide directions.
</h5></div><h5 id='q77'>77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.</h5><select class="select-style" id="_77"><option value="def" disabled selected>Select</option><option value="A">A. False. The groupware application only allows users to update numerical data on shared
documents.</option><option value="B">B. True. Groupware streamlines the work effort, so users have more time for social interaction.</option><option value="C">C. False. The primary focus of groupware is to communicate policies and procedures to users.</option><option value="D">D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.</option></select></br></br><div id="77answer" style="display: none;"><h5>Incorrect. The correct answer is D: True. Groupware allows users to share and brainstorm ideas that may improve work processes.</h5><h5>Explanation not available</h5></div><h5 id='q78'>78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.</h5><select class="select-style" id="_78"><option value="def" disabled selected>Select</option><option value="A">A. cloud computing</option><option value="B">B. a flash drive</option><option value="C">C. streaming video</option><option value="D">D. compact disks</option></select></br></br><div id="78answer" style="display: none;"><h5>Incorrect. The correct answer is A: cloud computing</h5><h5>Cloud storage involves housing business records in a database that is maintained by a
third party at an off-site database storage facility. Employees access the records through the Internet.
Rather than storing business records on a CPU, flash drive, or compact disk, businesspeople upload
their files to the Web and then save them to the remote database or “cloud.” Streaming video involves
downloading and viewing video on a computer or smartphone device in real time.
</h5></div><h5 id='q79'>79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that</h5><select class="select-style" id="_79"><option value="def" disabled selected>Select</option><option value="A">A. research and development expenses exceeded the budget.</option><option value="B">B. its sales forecasts were inaccurate.</option><option value="C">C. product improvements helped boost sales.</option><option value="D">D. the company achieved its sales goals.</option></select></br></br><div id="79answer" style="display: none;"><h5>Incorrect. The correct answer is C: product improvements helped boost sales.</h5><h5>Statistics are information presented in numerical form.
Businesses use statistics to evaluate performance and identify trends. In the situation described, the
business used statistics to identify a specific increase in sales after it made improvements to a product.
There is not enough information provided to know how the statistical information relates to the company's
sales goals, sales forecasts, and research and development budget.
</h5></div><h5 id='q80'>80. Which of the following actions should a business take to help prevent robberies:</h5><select class="select-style" id="_80"><option value="def" disabled selected>Select</option><option value="A">A. Have one person open and close each day</option><option value="B">B. Avoid making eye contact with customers</option><option value="C">C. Hang up signs on doors and windows</option><option value="D">D. Make sure the facility is well-lit</option></select></br></br><div id="80answer" style="display: none;"><h5>Incorrect. The correct answer is D: Make sure the facility is well-lit</h5><h5>Good lighting increases visibility, and that's very important when it
comes to preventing robberies. A dark store with poor visibility and many hiding spots is much easier to
rob. An employee should be sure to greet and make eye contact with each customer who walks into the
store. This lets would-be robbers know that they've been seen, which may make them less likely to steal.
Businesses should avoid hanging signs and posters on doors and windows, as these can make it harder
to see into the store. Anything that decreases visibility makes it easier for thieves to steal. It can be
dangerous for just one person to open and close a business each day. Instead, make sure to have two
people present at all times.
</h5></div><h5 id='q81'>81. Successful project management depends on the use of appropriate</h5><select class="select-style" id="_81"><option value="def" disabled selected>Select</option><option value="A">A. pressure tactics.</option><option value="B">B. outsourcing.</option><option value="C">C. foreign investments.</option><option value="D">D. technology.</option></select></br></br><div id="81answer" style="display: none;"><h5>Incorrect. The correct answer is D: technology.</h5><h5>Successful project management depends on the use of appropriate technology, such as
scheduling and budgeting software. Successful project management does not depend on outsourcing,
foreign investments, or pressure tactics.
</h5></div><h5 id='q82'>82. When you want to select a new vendor for your business, it's best to</h5><select class="select-style" id="_82"><option value="def" disabled selected>Select</option><option value="A">A. continue using a vendor you've used before.</option><option value="B">B. go with a friend's recommendation.</option><option value="C">C. use a formal selection process.</option><option value="D">D. pick the vendor with the best online reviews.</option></select></br></br><div id="82answer" style="display: none;"><h5>Incorrect. The correct answer is C: use a formal selection process.</h5><h5>Selecting a new vendor is a big decision. Depending on what service or
product you're buying, you could be investing a lot of money. Using a formal selection process is the
smartest and most effective way to make sure you find the vendor that's the best fit for your business.
Although you may trust your friend's recommendation, s/he might not share your ideas about what makes
a good vendor. It's best to find someone who fits your business's particular needs. Although continuing to
use a vendor you've used before isn't necessarily a bad choice, it's still a good idea to find out what other
options you have. There might be an even better vendor you just don't know about yet. It's certainly a
good sign if a vendor has positive online reviews, but that doesn't mean the vendor will automatically be
a good fit for you. Everyone has different needs, and what works for one company might not work for
yours.
</h5></div><h5 id='q83'>83. Which of the following factors are most likely to build a quality work culture:</h5><select class="select-style" id="_83"><option value="def" disabled selected>Select</option><option value="A">A. Coercion and empowerment</option><option value="B">B. Consistency and censorship</option><option value="C">C. Vision and unpredictability</option><option value="D">D. Respect and honesty</option></select></br></br><div id="83answer" style="display: none;"><h5>Incorrect. The correct answer is D: Respect and honesty</h5><h5>A quality work culture begins with respectful and honest behavior throughout all
levels of the organization. This helps build trust, nurture creativity, and encourage collaboration within the
workplace. Management is responsible for defining or modeling the work culture. To create a quality work
culture, management communicates the organization's vision to employees, treats all employees fairly
through consistent policies, and empowers employees to do their best. Coercion, unpredictability, and
censorship tend to create a negative work environment.
</h5></div><h5 id='q84'>84. Which of the following is an example of a semi-variable business cost:</h5><select class="select-style" id="_84"><option value="def" disabled selected>Select</option><option value="A">A. Property taxes</option><option value="B">B. Employees' salaries</option><option value="C">C. Rent</option><option value="D">D. Telephone service</option></select></br></br><div id="84answer" style="display: none;"><h5>Incorrect. The correct answer is D: Telephone service</h5><h5>Which of the following is most likely to be Anna's primary goal in implementing the
new strategy:
A. Promoting the bank's new products and services
B. Publicly recognizing outstanding bank employees
C. Developing stronger long-term customer relationships
D. Reducing the number of forms new customers must fill out
17. An important aspect of ethical behavior by financial-services providers is ensuring that their clients
A. purchase high-risk investments to generate better financial returns.
B. understand the potential risks and rewards of different financial products.
C. diversify their financial portfolios by investing more than half of their money in hedge funds.
D. preplan future investment strategies for unexpected financial bonuses.

2013 HS ICDC

FINANCE CLUSTER EXAM

3

18. Beverly, the new office manager, just completed a review of the last two years of accounts receivable
data. In doing so, she discovered that there are erroneous duplicate entries totaling $25,628 in the
system. Unfortunately, due to these duplicate entries, collection letters were sent to many customers who
had already paid in full—customers who are angry with the company for sending them the letters. What
should Beverly do to try to save these customer relationships and ensure that these customers are not
bothered in the future?
A. Use funds from the accounts payable account to pay the debt
B. Complete an accounting software update
C. Contact each customer by phone and apologize
D. Complete a data cleansing of the erroneous entries
19. An accounts payable analyst is using technology to collect and isolate customer records from the
disbursing system. The tool can retrieve and organize a massive number of customer records in just a
short time. What type of technology is the analyst using?
A. Computer-aided design
C. A neural network
B. A CRM database
D. GPS technology
20. To keep up with social, political, economic, and regulatory changes that affect their business activities,
companies should
A. conduct environmental scans.
C. plan customer interviews.
B. implement internal analyses.
D. prepare organizational inspections.
21. Members of the air-traffic controllers' union stopped working to support the pilots' union that recently went
on strike. This is an example of a
A. boycott.
C. sympathetic strike.
B. lockout.
D. wildcat strike.
22. A manufacturer has more workers on hand to perform production activities than it does production
equipment. What economic principle does this exemplify?
A. Law of minimal utility
C. Economies of scale
B. Law of diminishing returns
D. Economies of scoring
23. Consumer spending tends to decrease when
A. business activities slow.
B. interest rates decrease.

C. an economic recession ends.
D. the inflation rate decline.

24. What condition exists if a nation imports more goods and services than it exports?
A. Trade deficit
C. Trade surplus
B. Balance of trade
D. Comparative advantage
25. Which of the following statements is true of a positive attitude:
A. It's not very important, but it is nice to have.
B. You can achieve one, but it requires work.
C. It has little impact on your ability to reach your goals.
D. It's something that you are born with.
26. When Cynthia, a credit analyst with Houghton Software, heard rumors of a company layoff, she asked
her manager Todd if the rumors were true and if her job was in jeopardy. Although Todd knew that some
lay-offs were coming, he told Cynthia not to worry about things. The following week, Cynthia's job was
eliminated. In this situation, ethical issues regarding company information occurred because
A. Todd was completely honest with Cynthia.
C. Todd misled Cynthia.
B. Cynthia asked irrelevant questions.
D. Cynthia started the rumors.

2013 HS ICDC

FINANCE CLUSTER EXAM

4

27. How can you show that you're actively listening in a negotiation?
A. Respond emotionally to what the other person says.
B. Think about what you'll say next while the other person is speaking.
C. Repeat or summarize the other person's statements.
D. Keep a positive, open, and objective attitude.
28. Which of the following is an example of a conflict that causes personal motivation or drive:
A. High school students compete to sell the most candy in a school fundraiser.
B. Kevin has a class and a meeting scheduled for Tuesday afternoon.
C. Two coworkers need to use the copy machine at the same time.
D. Jane and Amy both want to be in charge of their presentation.
29. What is the advantage to groups that use consensus building to make decisions?
A. Group members rarely disagree.
C. Decision making involves a majority rule.
B. Agreement is reached very quickly.
D. All decision makers have equal power.
30. To have successful collaborative partnerships in the workplace, it is important for employees to
A. limit communication.
C. avoid conflict.
B. establish trust.
D. support all ideas.
31. When Thomas bought his car from the Reinhart Auto Dealership, he gave the dealership a $4,000 down
payment. Thomas will make a monthly payment of $365 to the dealership until he has paid off the loan.
Thomas bought his car by using ___________ credit.
A. service
C. budget
B. revolving
D. installment
32. Justine's rich uncle wants to give her $5,000 towards the purchase of a car. But since Justine doesn't
plan to buy the car for at least another year, her uncle told her that she can have the money now, or he
can wait and give her the money when she actually buys the car. Justine chooses to take the money now
and deposit it in her savings account. After all, her deposit will yield 6% interest compounded annually. A
year from now, her $5,000 will be worth $5,300. What financial concept does this scenario illustrate?
A. Capital budgeting
C. Time-value of money
B. Dividend reinvestment plan
D. Accrual accounting
33. You want to be a millionaire by the time you retire. To reach that goal, you put $2,000 per year in an IRA,
starting at age 21. You will earn nine percent interest annually. As a result, you will have $1,156,517 at
age 65. This scenario illustrates the power of
A. compound interest.
C. fiscal policy.
B. finance charges.
D. the prime interest rate.
34. State Street Bank sends text messages to its customers when $100 or more are withdrawn from their
bank accounts. The bank sends these notifications to reduce the risks associated with
A. money laundering.
C. identity theft.
B. loan fraud.
D. firewall intrusion.
35. When preparing her tax return, Lynnette listed the interest that she paid on her student loan as
A. taxable earnings.
C. a tax-exempt investment.
B. investment income.
D. an itemized deduction.
36. Henry is a professional banker. Only certain people—"members"—may save at or borrow money from his
deposit-taking financial institution. Henry is most likely to work for a(n)
A. CPA firm.
C. insurance company.
B. mortgage company.
D. credit union.

2013 HS ICDC

FINANCE CLUSTER EXAM

5

37. Which of the following statements regarding financial institutions is true:
A. A financial institution with low value is doing a good job of managing its risk.
B. Financial institutions facilitate the flow of money in the economy.
C. Financial institutions are controlled by their members.
D. The primary role of financial institutions is to regulate saving and investing.
38. Which of the following statements regarding debt and equity markets is correct:
A. Common stock, an example of a debt instrument, is traded on the equity market.
B. Investors who purchase a company's bonds gain partial ownership of the business.
C. If a company suffers financial difficulties, its stockholders are paid before its bondholders.
D. Bonds, which are debt instruments, are typically less risky investments than stocks.
39. The New York Stock Exchange is a(n) __________ market.
A. spot
C. commodities
B. over-the-counter
D. auction
40. A retail bank and an insurance company, which recently merged together, are moving from two legacy
accounting systems to one enterprise planning system for the new, larger organization. This is an
example of __________ in the finance industry.
A. bancassurance
C. convergence
B. increased liquidity
D. knowledge management
41. What is a common course of action for small banking institutions interested in competing globally and
improving their efficiencies, viability, and profitability?
A. Consolidating with larger banks
C. Following global regulations more closely
B. Rapidly expanding their operations
D. Dissolving their financial holding companies
42. According to most analysts, the three economic indicators that stock market investors and traders should
pay the closest attention to are
A. Gross Domestic Product, overhead expenses, and unemployment.
B. interest rates, overhead expenses, and inflation.
C. Gross Domestic Product, unemployment, and inflation.
D. inflation, unemployment, and bonds rates.
43. Which of the following has contributed to financial globalization:
A. An increase in restrictions on foreign investment and international trade
B. An increase in taxes on international financial transactions
C. A reduction in foreigners' access to domestic financial markets
D. A movement from fixed exchange rates to floating exchange rates
44. Kendra 's financial goal is to build wealth over time by making diversified investments. Which of the
following financial services providers is most likely to help Kendra achieve her goal:
A. Financial-auditing firm
C. Investment bank
B. Mortgage company
D. Asset-management firm
45. Which financial statement should an investor use to quickly determine a company's “bottom line”?
A. Statement of retained earnings
C. Balance sheet
B. Cash flow statement
D. Income statement
46. Which of the following are among the most important resources to access prior to purchasing stock in a
company:
A. EDGAR and the Statement of Ownership
C. EDGAR and the company's web site
B. ESOP and the company's web site
D. ESOP and the Statement of Ownership

2013 HS ICDC

FINANCE CLUSTER EXAM

6

47. The most common headings on a stock table include the 52-week high and low, the stock symbol, the
estimated dividend per share, the yield percentage/rate of return, the volume/sales for the day, the
closing price for the day, the net change and the
A. price-earnings ratio.
C. net income.
B. earnings per share.
D. stockholder's equity.
48. Geraldo, who is considering whether or not to invest in Coffee Dreams, Inc., is studying information about
the company on a stock table. One piece of data that he is interested in reviewing is the difference
between the stock's closing price and the previous day's closing price. Geraldo should review the
A. ticker symbol.
C. price-earnings ratio.
B. net change.
D. 52-week high and low.
49. Certificates of deposit and municipal bonds are types of
A. value stocks.
C. commodities.
B. ownership securities.
D. lending investments.
50. On a balance sheet, a business categorizes its inventory and accounts receivable as
A. long-term assets.
C. current assets.
B. owner's equity.
D. current liabilities.
51. Leslie is good friends with Paul, who oversees the Bex Company's central data depository for financial
information. Paul recently told Leslie that based on confidential financial data that he saw at work, Bex's
profits have dropped by a third this year. Paul also told Leslie that she should sell her shares of Bex stock
before the market finds out about the company's financial difficulties, which will surely make Bex's stock
price plummet. This situation is an example of
A. encryption.
C. stewardship.
B. disparate data.
D. insider trading.
52. Financial-information management is responsible for collecting, maintaining, and reporting data about
financial transactions. Business managers often use these data to
A. forecast financial inflows and outflows.
C. develop secondary equity markets.
B. determine if liability insurance is needed.
D. calculate the level of corporate groupthink.
53. Pamela was dismissed from her job as a financial database administrator because she shared her
username and password with a coworker so that he could access a customer database that is typically
off-limits to him. Pamela failed to fulfill her responsibilities as a data
A. steward.
C. sponsor.
B. auditor.
D. processor.
54. Which of the following statements regarding the security of most financial institutions' data is true:
A. Data in transit are more at risk than data at rest or data in process.
B. Firewalls completely eliminate all external threats to the data.
C. More data attacks come from inside the organizations than outside them.
D. Investments in financial-information security have decreased in recent years.
55. Which of the following is a benefit of financial-information management software:
A. Improves productivity by replacing automated activities with manual tasks
B. Provides users with faster, better access to data from multiple sources
C. Lowers compliance costs by eliminating audit trails and economies of scale
D. Reduces risk and lowers confidence in the confidentiality and safety of data
56. Every morning, as soon as Lukas gets to the office, he logs onto his computer and uses a data-mining
application on his computer home screen to quickly review the company's financial performance. The
financial data are typically displayed in charts and tables. Lukas is using a(n)
A. dashboard.
C. artificial neural network.
B. text-mining tool.
D. decision tree.

2013 HS ICDC

FINANCE CLUSTER EXAM

7

57. A business owner is concerned that some of his employees may be using their company credit cards to
make personal purchases. Which data mining technique should the owner use to review the employees'
credit card transactions each month to identify questionable transactions?
A. Nearest-neighbor method
C. Artificial neural networks
B. Decision trees
D. Dashboards
58. Tara knows that for her small business to grow, she must increase her cash flow. She's unsure, though,
whether she should take out a loan or a line of credit. Which of the following budgeting software tools
could Tara use to assess the potential impact of each source of funding on her business:
A. Environmental scanning
C. Debt modeling
B. Decision trees
D. Zero-based modeling
59. Which of the following software applications would be best for a small business owner to use to develop
his/her annual budget:
A. A project-management application
C. A digital dashboard application
B. A database application
D. A spreadsheet application
60. Franco's manager asked him to develop a report that compares their company's fourth-quarter
performance with others in its industry. Which financial-analysis software feature should Franco use to
generate information for his report?
A. Forecasting
C. DuPont modeling
B. Ratio analysis
D. Benchmarking
61. Raul's manager asked him to prepare a database query that would allow him to view lists of invoices
generated in specific time periods. At the moment, the manager only needs two lists: one that lists all
invoices generated in the last 30 days and another that lists all invoices generated in the last 60 days.
The manager will probably ask Raul to mine for similar data in the future—just for different time periods.
What type of query could Raul use to mine for this information without having to prepare a new query
every time?
A. Crosstab query
C. Wildcard query
B. Parameter query
D. Status query
62. One reason why public corporations are required to provide accurate financial reports is because existing
and potential shareholders use them to
A. ensure capital gains.
C. understand currency exchange rates.
B. compile annual reports.
D. make investment decisions.
63. Independent auditors review the accuracy of a public corporation's financial statements to
A. test accounting methods.
C. evaluate risk.
B. verify compliance.
D. summarize collection techniques.
64. A primary difference between accounting and finance is that the accounting function focuses on
__________, and the finance function focuses on __________.
A. prioritizing needs, problem solving
C. planning activities, resource management
B. allocating funds, decision making
D. reporting transactions, financial planning
65. Which of the following is an activity conducted by the finance function of business:
A. Tracking business expenditures
C. Updating bookkeeping ledgers
B. Preparing cash flow statements
D. Choosing appropriate investments
66. The managerial accounting system emphasizes
A. previous sales transactions.
B. the current financial situation.

C. a future orientation.
D. ongoing tax obligations.

2013 HS ICDC

FINANCE CLUSTER EXAM

8

67. A small business records transactions when it receives or spends money. What type of accounting
system is the business using?
A. Positional
C. Cash
B. Accrual
D. Static
68. Which of the following is a tool that enables financial managers to identify changes or trends in
production costs by reviewing the same types of data from different periods of time:
A. Accounts-receivable summary
C. Comparative statement
B. Frequency ratio
D. Sales-transaction log
69. The Buford Company's ability to pay its short-term debts has improved steadily over the past three years.
What financial ratio helped the company identify this trend?
A. Asset-turnover
C. Liquidity
B. Qualitative
D. Market-value
70. Businesses consider a customer's income when determining whether to
A. accept cash sales.
C. restructure policies.
B. offer credit.
D. charge interest.
71. A bank carefully analyzes a customer's current level of debt before it approves a(n)
A. operating proposal.
C. loan application.
B. service request.
D. insurance claim.
72. If a small-business owner wants to identify the customers who owe money to the business, what type of
report should s/he review?
A. Accounts-payable
C. Asset-depreciation
B. Aging-accounts
D. Asset-allocation
73. While reviewing a financial report, an electronics-store manager noticed that the store tends to sell more
laptop computers and notebooks during December, January, June, and August than other times of the
year. This information can help the store
A. measure its long-term liabilities.
C. make reliable sales forecasts.
B. monitor its general operating costs.
D. manage its sales staff effectively.
74. Lily Marshall, a human resources manager with Spartan Industries, recently met with employee Barry
Endicott. Barry accepted a position with another company and will begin his new job next week. During
the meeting, Lily asked Barry what he liked and disliked about his job with Spartan and what the
company can do to make working conditions better. What human-resources activity was Lily performing?
A. Onboarding tasks
C. Application screening
B. Exit interview
D. Workplace familiarization
75. Which of the following is most likely to have a negative effect on business's customer-satisfaction levels:
A. Standing orders ship on time.
C. Product quality is consistent.
B. Items are frequently backordered.
D. Staff has sufficient product knowledge.
76. Monique, an office manager, used to organize hard copies of important documents in filing cabinets that
took up an entire room. Now, she stores documents on her office computer, where they're easy to access
and organize. Monique now uses
A. Internet telephony.
C. an expert system.
B. a database.
D. computer automation.

2013 HS ICDC

FINANCE CLUSTER EXAM

9

77. Determine if the following statement is true or false: Groupware software applications often stimulate
workplace creativity.
A. False. The groupware application only allows users to update numerical data on shared
documents.
B. True. Groupware streamlines the work effort, so users have more time for social interaction.
C. False. The primary focus of groupware is to communicate policies and procedures to users.
D. True. Groupware allows users to share and brainstorm ideas that may improve work processes.
78. To house its digital business records, EFG Corporation uses a remote database that employees can
access anytime through the Internet. EFG Corporation is using ___________ to store its business
records.
A. cloud computing
C. streaming video
B. a flash drive
D. compact disks
79. Statistical data revealed that Zane Industries sold 32% more of the Model EQ2 desktop photocopier last
year after it made changes to increase the photocopier's speed and refine its print quality. In this
situation, the statistical findings helped the company determine that
A. research and development expenses exceeded the budget.
B. its sales forecasts were inaccurate.
C. product improvements helped boost sales.
D. the company achieved its sales goals.
80. Which of the following actions should a business take to help prevent robberies:
A. Have one person open and close each day
C. Hang up signs on doors and windows
B. Avoid making eye contact with customers
D. Make sure the facility is well-lit
81. Successful project management depends on the use of appropriate
A. pressure tactics.
C. foreign investments.
B. outsourcing.
D. technology.
82. When you want to select a new vendor for your business, it's best to
A. continue using a vendor you've used before.
B. go with a friend's recommendation.
C. use a formal selection process.
D. pick the vendor with the best online reviews.
83. Which of the following factors are most likely to build a quality work culture:
A. Coercion and empowerment
C. Vision and unpredictability
B. Consistency and censorship
D. Respect and honesty
84. Which of the following is an example of a semi-variable business cost:
A. Property taxes
C. Rent
B. Employees' salaries
D. Telephone service
85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?
A. Managing
C. Minimum
B. Moderate
D. Maximum
86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his
A. passion for a hobby.
C. technological knowledge.
B. desire for a flexible schedule.
D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10

87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by
A. volunteering her time.
C. requesting an internship.
B. networking with others.
D. setting up a meeting.
88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)
A. collections officer.
C. chartered financial consultant.
B. credit analyst.
D. bank agent.
89. What is a primary responsibility of a company's controller?
A. Evaluating property values
B. Designing risk policies to minimize business losses
C. Calculating the risk of loss
D. Directing the preparation of financial reports
90. Many businesspeople are required to take continuing education classes to
A. supplement their existing income.
C. demonstrate their emotional intelligence.
B. improve their standard of living.
D. maintain their professional certifications.
91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a
A. Certified Financial Planner (CFP).
C. Chartered Life Underwriter (CLU).
B. Certified Financial Analyst (CFA).
D. Chartered Investment Counselor (CIC).
92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.
A. Certified Information Systems Auditor (CISA)
B. Certified Mortgage Banker (CMB)
C. Certified Internal Auditor (CIA)
D. Certified Annuities Specialist (CAS)
93. To build a relationship with others working in the same field, a financial planner should consider
A. participating in an appropriate professional organization.
B. attending the local chamber of commerce meetings.
C. taking an entrepreneurship class at the community college.
D. sponsoring events for charitable organizations.
94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.
A. corporate branding, her own productivity
C. personal gains, business ethics
B. social responsibility, her career goals
D. operating procedures, compliance
95. To reduce risks associated with unethical business activities, a company should clearly communicate its
A. code of conduct to all employees.
B. terms-of-sale policies to executive managers.
C. product requirements to its primary distributors.
D. dividend payment schedule to suppliers.
96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?
A. Automated oversight
C. Financial compliance
B. Stress testing
D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11

97. Lower premiums and the ability to control the claims process are advantages of
A. captive insurance companies.
C. standard insurance companies.
B. traditional liability insurance policies.
D. reinsurance carriers.
98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should
A. conduct background checks on job applicants.
B. mandate drug testing for all employees on a monthly basis.
C. require delivery drivers to take a driving exam every six months.
D. ask job applicants about their former employers during the interview process.
99. Which of the following is a limitation that businesses face with their internal risk-control activities:
A. Economic conditions
C. Trade agreements
B. Market dynamics
D. Human judgment
100. To control online transactional risks, a business should consider outsourcing its technology needs when it
lacks
A. external training.
C. secondary data.
B. financial resources.
D. internal expertise.

2013 HS ICDC

FINANCE CLUSTER EXAM

12

1. B
Bilateral contract. In bilateral contracts, both parties promise to do something. In the example, Samantha
promises to pay $225 to Tony. In exchange, Tony promises to give Samantha the bike. Unilateral
contracts are contracts that involve promises made by one party. For example, a pet owner offers to pay
a reward for a lost animal. In this situation, the pet owner is the only party making a promise. There is not
enough information to determine if Samantha and Tony made a verbal or nonverbal agreement or if they
renegotiated terms.
</h5></div><h5 id='q85'>85. All of your friends are coming over for dinner tonight. Instead of asking what they'd like to eat, you decide
to order pizza. What style of decision making are you using?</h5><select class="select-style" id="_85"><option value="def" disabled selected>Select</option><option value="A">A. Managing</option><option value="B">B. Moderate</option><option value="C">C. Minimum</option><option value="D">D. Maximum</option></select></br></br><div id="85answer" style="display: none;"><h5>Incorrect. The correct answer is C: Minimum</h5><h5>If you make the decision about dinner on your own without consulting your friends, you're
using a minimum-input style of decision making. In this style, the decision maker decides without help. In
a moderate-input style, the decision maker asks for some help before deciding. For example, you might
ask one of your friends what s/he'd like for dinner. In a maximum-input style, the decision maker and the
entire group decide together. If you were using a maximum-input style, you'd make sure to ask all of your
friends what they wanted to eat. Managing isn't a style of decision making.
</h5></div><h5 id='q86'>86. Miguel always enjoyed designing and building bookshelves, tables, and storage cabinets for his family
and friends in his spare time. Through word-of-mouth, others started to ask Miguel to build items for
them. Requests for his services became so great that he decided to open his own woodworking
business. Miguel decided to start his own business because of his</h5><select class="select-style" id="_86"><option value="def" disabled selected>Select</option><option value="A">A. passion for a hobby.</option><option value="B">B. desire for a flexible schedule.</option><option value="C">C. technological knowledge.</option><option value="D">D. need for adventure.

2013 HS ICDC

FINANCE CLUSTER EXAM

10
</option></select></br></br><div id="86answer" style="display: none;"><h5>Incorrect. The correct answer is A: passion for a hobby.</h5><h5>Entrepreneurial ventures often begin as hobbies such as sewing, baking, jewelry
making, or woodworking. Because Miguel enjoyed woodworking in his spare time, his business started
out as a hobby. There is not enough information to determine if Miguel wanted a more flexible schedule,
had technological knowledge, or needed more adventure in his life when he started his business.
</h5></div><h5 id='q87'>87. Tracy's friend David works for TPS Industries. When Tracy saw a job on the company's web site that
interested her, she contacted David to find out if he knew anything about the job. David told Tracy that he
previously worked with the hiring manager on several projects and would put in a good word for her. In
this situation, Tracy acted on an employment opportunity by</h5><select class="select-style" id="_87"><option value="def" disabled selected>Select</option><option value="A">A. volunteering her time.</option><option value="B">B. networking with others.</option><option value="C">C. requesting an internship.</option><option value="D">D. setting up a meeting.</option></select></br></br><div id="87answer" style="display: none;"><h5>Incorrect. The correct answer is B: networking with others.</h5><h5>Networking involves connecting with others for the purpose of professional
development or advancement. Many people obtain job leads by talking with family, friends, school
counselors and alumni, former supervisors and coworkers, etc. In the example, Tracy's friend worked for
the company that she was interested in working for. Tracy was not setting up a meeting; instead, she
hoped that David could influence the hiring manager to set up an interview. Although volunteering and
interning are ways to network with others, Tracy was not engaging in those activities in the situation
described.
</h5></div><h5 id='q88'>88. Lynnette works at Main Street Bank. Her primary job responsibility is to determine if the bank should lend
funds to the bank's customers. Lynnette is working as a(n)</h5><select class="select-style" id="_88"><option value="def" disabled selected>Select</option><option value="A">A. collections officer.</option><option value="B">B. credit analyst.</option><option value="C">C. chartered financial consultant.</option><option value="D">D. bank agent.</option></select></br></br><div id="88answer" style="display: none;"><h5>Incorrect. The correct answer is B: credit analyst.</h5><h5>Credit analysts research and confirm loan applicants' employment, income, and credit
histories to ensure that the bank has the correct information. It is important to verify the accuracy of the
loan applicants' information to reduce risks associated with loan defaults. Credit analysts prepare reports
to submit to the loan committee and help in the loan approval process. The collections function involves
collecting past-due payments from customers. A chartered financial consultant is a licensed financial
advisor with special certification in retirement and estate planning. A bank agent or agent bank is an
intermediary in the banking industry.
</h5></div><h5 id='q89'>89. What is a primary responsibility of a company's controller?</h5><select class="select-style" id="_89"><option value="def" disabled selected>Select</option><option value="A">A. Evaluating property values</option><option value="B">B. Designing risk policies to minimize business losses</option><option value="C">C. Calculating the risk of loss</option><option value="D">D. Directing the preparation of financial reports</option></select></br></br><div id="89answer" style="display: none;"><h5>Incorrect. The correct answer is D: Directing the preparation of financial reports</h5><h5>Controllers direct the preparation of financial reports such
as balance sheets and income statements and are often in charge of accounting and auditing for an
entire company. Actuaries work in the insurance industry and are responsible for assessing risks using
statistical analysis, and they design policies to minimize the cost of that risk. Underwriters also work in
the insurance industry and are responsible for calculating the risk of loss and establishing premium rates.
Real estate appraisers evaluate property values.
</h5></div><h5 id='q90'>90. Many businesspeople are required to take continuing education classes to</h5><select class="select-style" id="_90"><option value="def" disabled selected>Select</option><option value="A">A. supplement their existing income.</option><option value="B">B. improve their standard of living.</option><option value="C">C. demonstrate their emotional intelligence.</option><option value="D">D. maintain their professional certifications.</option></select></br></br><div id="90answer" style="display: none;"><h5>Incorrect. The correct answer is D: maintain their professional certifications.</h5><h5>Many professions—accounting, finance, medical, and education
—require certification to work in their fields. Because these fields are always changing, workers are
required to update their knowledge and skills to maintain their certifications. Continuing education often
involves taking classes and attending seminars and workshops. Professionals are not required to take
continuing education classes to improve their standard of living, demonstrate their emotional intelligence,
or supplement their existing income.
</h5></div><h5 id='q91'>91. Annette works for an insurance company. Her primary responsibilities involve establishing premium rates
and designing insurance policies to cover risk. Annette is most likely to have certification as a</h5><select class="select-style" id="_91"><option value="def" disabled selected>Select</option><option value="A">A. Certified Financial Planner (CFP).</option><option value="B">B. Certified Financial Analyst (CFA).</option><option value="C">C. Chartered Life Underwriter (CLU).</option><option value="D">D. Chartered Investment Counselor (CIC).</option></select></br></br><div id="91answer" style="display: none;"><h5>Incorrect. The correct answer is C: Chartered Life Underwriter (CLU).</h5><h5>Insurance and financial certifications indicate that business
professionals have expertise in a particular area of insurance or finance. Because Annette establishes
premium rates and designs insurance policies, she is an insurance underwriter and is most likely to have
the Chartered Life Underwriter (CLU) certification. Financial analysts seek the Certified Financial Analyst
(CFA) designation. A finance professional with a Chartered Investment Counselor certification (CIC) has
extensive knowledge in mutual funds. This individual often works for a large firm and manages the
mutual funds of very large clients or companies. Certified Financial Planner (CFP) is a certification sought
by financial planners.
</h5></div><h5 id='q92'>92. A loan officer who has special knowledge in real-estate loans is most likely to have a __________
professional certification.</h5><select class="select-style" id="_92"><option value="def" disabled selected>Select</option><option value="A">A. Certified Information Systems Auditor (CISA)</option><option value="B">B. Certified Mortgage Banker (CMB)</option><option value="C">C. Certified Internal Auditor (CIA)</option><option value="D">D. Certified Annuities Specialist (CAS)</option></select></br></br><div id="92answer" style="display: none;"><h5>Incorrect. The correct answer is B: Certified Mortgage Banker (CMB)</h5><h5>Loan officers specialize in helping clients apply for loans. The Certified
Mortgage Banker (CMB) is a specialized certification for loan officers who work with home, commercial
building, or property mortgages (loans). Individuals who have a Certified Internal Auditor (CIA)
certification are usually responsible for assessing the accuracy of their companies' accounting records
and determining if their companies' internal controls are effective. Certified Information Systems Auditor
(CISA) is a licensure relating to the security of information technology and computer systems. Finance
professionals who specialize in annuities obtain the Certified Annuity Specialist (CAS) certification.
</h5></div><h5 id='q93'>93. To build a relationship with others working in the same field, a financial planner should consider</h5><select class="select-style" id="_93"><option value="def" disabled selected>Select</option><option value="A">A. participating in an appropriate professional organization.</option><option value="B">B. attending the local chamber of commerce meetings.</option><option value="C">C. taking an entrepreneurship class at the community college.</option><option value="D">D. sponsoring events for charitable organizations.</option></select></br></br><div id="93answer" style="display: none;"><h5>Incorrect. The correct answer is A: participating in an appropriate professional organization.</h5><h5>When finance professionals actively participate
(e.g., serve on committees) in appropriate (finance-related) professional organizations, they can network
and build relationships with others who work in their field. The remaining options are situations that
present networking opportunities for individuals who may or may not work in finance.
</h5></div><h5 id='q94'>94. Because Maggie's primary goal is to get ahead in the company, she often uses questionable tactics to
get a sale, which sometimes involves misleading her customers. Maggie's behavior is a risk to her
employer because Maggie places more importance on __________ than she does on __________.</h5><select class="select-style" id="_94"><option value="def" disabled selected>Select</option><option value="A">A. corporate branding, her own productivity</option><option value="B">B. social responsibility, her career goals</option><option value="C">C. personal gains, business ethics</option><option value="D">D. operating procedures, compliance</option></select></br></br><div id="94answer" style="display: none;"><h5>Incorrect. The correct answer is C: personal gains, business ethics</h5><h5>Being ethical means doing the right thing. When Maggie misleads
customers on purpose, she is being unethical because she is lying. This behavior jeopardizes her
employer's reputation and may lead to noncompliance issues and lawsuits for the company. And
because Maggie's focus is on “getting ahead,” she is placing more importance on her personal gains
(career advancement) than she is on doing the right thing. Maggie is not being socially responsible, nor is
she focusing on corporate branding or the company's operating procedures.
</h5></div><h5 id='q95'>95. To reduce risks associated with unethical business activities, a company should clearly communicate its</h5><select class="select-style" id="_95"><option value="def" disabled selected>Select</option><option value="A">A. code of conduct to all employees.</option><option value="B">B. terms-of-sale policies to executive managers.</option><option value="C">C. product requirements to its primary distributors.</option><option value="D">D. dividend payment schedule to suppliers.</option></select></br></br><div id="95answer" style="display: none;"><h5>Incorrect. The correct answer is A: code of conduct to all employees.</h5><h5>The code of conduct outlines the company's rules, policies,
procedures, and expectations regarding its employees' behavior in the workplace. A company should
communicate and document its code of conduct to all employees because employees' personal ethics
and values may differ from the company's ethics and values. When employees understand and follow the
company's ethical standards, the company is less likely to encounter risks that hurt its reputation or
cause it to become noncompliant. Terms-of-sale policies are sales policies that primary affect the
company's sales staff. Communicating product requirements to vendors is a purchasing activity. Open
corporations are legally required to communicate dividend payment information to their shareholders.
</h5></div><h5 id='q96'>96. What technological application do financial businesses use to evaluate how investment portfolios may
react to changing conditions in the markets?</h5><select class="select-style" id="_96"><option value="def" disabled selected>Select</option><option value="A">A. Automated oversight</option><option value="B">B. Stress testing</option><option value="C">C. Financial compliance</option><option value="D">D. Threat detection

2013 HS ICDC

FINANCE CLUSTER EXAM

11
</option></select></br></br><div id="96answer" style="display: none;"><h5>Incorrect. The correct answer is B: Stress testing</h5><h5>The foundation of stress-testing applications is to evaluate “what-if” scenarios to reduce
risk. Financial analysts use stress-testing applications to determine the stability of a specific financial
product (instrument) under different circumstances such as radical economic changes. By evaluating the
results of stress testing, businesses can determine how to best handle or change their investment
portfolios to minimize risk. Automated oversight is a form of risk-management that tracks individual
traders' risk limits and notifies management immediately if a trader exceeds her/his limit. Financial
businesses do not use financial compliance or threat-detection technology to evaluate investment “whatif” scenarios.
</h5></div><h5 id='q97'>97. Lower premiums and the ability to control the claims process are advantages of</h5><select class="select-style" id="_97"><option value="def" disabled selected>Select</option><option value="A">A. captive insurance companies.</option><option value="B">B. traditional liability insurance policies.</option><option value="C">C. standard insurance companies.</option><option value="D">D. reinsurance carriers.</option></select></br></br><div id="97answer" style="display: none;"><h5>Incorrect. The correct answer is A: captive insurance companies.</h5><h5>Organizations (i.e., corporations, industry/professional/trade associations)
often form their own insurance companies, which are known as captive insurance companies. Primary
advantages of forming captive insurance companies are that the founding organizations control the
premium rates and the claims process. If the organizations obtain insurance through the traditional or
standard insurance industry, they have no control over the premium amounts they pay or the ways in
which their claims are processed. Reinsurance carriers sell insurance to primary insurance carriers to
protect the primary carriers from unexpected, catastrophic losses.
</h5></div><h5 id='q98'>98. CopyIt Printing Company employs several delivery drivers. Last year, the local police cited two of the
company's new drivers for causing accidents that resulted in passenger injuries and vehicular damage.
The printing company later discovered that the drivers were cited for numerous traffic violations while
employed for other companies. To avoid hiring unsafe drivers in the future, the company should</h5><select class="select-style" id="_98"><option value="def" disabled selected>Select</option><option value="A">A. conduct background checks on job applicants.</option><option value="B">B. mandate drug testing for all employees on a monthly basis.</option><option value="C">C. require delivery drivers to take a driving exam every six months.</option><option value="D">D. ask job applicants about their former employers during the interview process.</option></select></br></br><div id="98answer" style="display: none;"><h5>Incorrect. The correct answer is A: conduct background checks on job applicants.</h5><h5>Because hiring and training employees is an expense for
businesses, they should ensure that the applicants' previous work experiences do not present business
risks for them. Because applicants are unlikely to discuss unfavorable past work experiences during an
interview, businesses need to take action to verify the information on their employment applications.
Employers should confirm the applicants' previous employment, verify their references, and conduct
background checks on applicants if needed. CopyIt may have reduced its liability by checking the drivers'
previous driving records and employment history before extending job offers to them. There is not
enough information provided to determine if the accidents involve substance abuse, so mandating
monthly drug testing for all employees may not prevent future driving accidents. Requiring current drivers
to take a driving exam every six months will not prevent the business from hiring unsafe drivers.
</h5></div><h5 id='q99'>99. Which of the following is a limitation that businesses face with their internal risk-control activities:</h5><select class="select-style" id="_99"><option value="def" disabled selected>Select</option><option value="A">A. Economic conditions</option><option value="B">B. Market dynamics</option><option value="C">C. Trade agreements</option><option value="D">D. Human judgment</option></select></br></br><div id="99answer" style="display: none;"><h5>Incorrect. The correct answer is D: Human judgment</h5><h5>Because risk involves the possibility of loss, businesses must take steps to control
their levels of risk. In some situations, employees make poor decisions or mistakes, which may result in
lawsuits, illnesses, and accidents that are costly to businesses. To reduce these types of risks,
businesses should thoroughly train employees and continuously communicate the importance of
accuracy, safety, and security in the workplace. Market dynamics, trade agreements, and economic
conditions are external factors that affect businesses.
</h5></div><h5 id='q100'>100. To keep up with social, political, economic, and regulatory changes that affect their business activities,
companies should</h5><select class="select-style" id="_100"><option value="def" disabled selected>Select</option><option value="A">A. conduct environmental scans.</option><option value="B">B. implement internal analyses.</option><option value="C">C. plan customer interviews.</option><option value="D">D. prepare organizational inspections.</option></select></br></br><div id="100answer" style="display: none;"><h5>Incorrect. The correct answer is A: conduct environmental scans.</h5><h5>To be successful in the marketplace, companies must monitor external
factors, which is the process of environmental scanning. Companies use the information obtained
through environmental scanning to adapt to the changes that most affect their business activities. For
example, changes in government regulations may require certain companies to change internal
procedures to remain compliant. Implementing internal analyses and preparing organizational inspections
are activities that occur within the company. Planning customer interviews is a step that companies can
take to get feedback about some aspects of the external environment; however, companies must carry
out the interviews to obtain the information.
</h5></div><input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input></form></div></body><script src="jquery-timer/jquery.simple.timer.js"></script><script src="Finance_5_Whole_Homework.js"></script></html>